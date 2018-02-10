<?php

namespace App\Http\Controllers\Courier;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\RequestSent;
use App\Orders;
use App\Courier;
use App\Option;
use App\shops;
use App\ShopRequest;
use Illuminate\Support\Facades\Auth;
use App\Notification;
use App\Events\sentRequest;




class CourierController extends Controller
{
  use notifiable;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function neworders($id)
    {

      Orders::find($id)->update(['status'=>2]);
       return json_encode(array('error' => false, 'status'=>'Order successfully taken'));
    }

    public function canceldelivery($id){
      Orders::find($id)->delete();
      $count=count(Orders::whereIn('status',[1,2])->where('courier_id',Auth::user()->id)->get());
      $total=count(\App\Orders::where('courier_id',Auth::guard('courier')->user()->id)->get());
       return json_encode(array('error' => false, 'status'=>'Order successfully Cancelled','count'=>$count,'totalcount'=>$total));
    }

    public function profileinfo(Request $r){

      $r->validate([
            'name' => 'required|string|min:4',
            'old_password' => 'required',
            
        ]);

      $user=Auth::guard('courier')->user()->find($r->courier_id);
      $userexist=Auth::guard('courier')->where('name',$r->name)->get();
    
      if (Auth::guard('courier')->attempt(['email' => $user->email, 'password' => $r->old_password])) {
          if(count($userexist)==0){
          $user->update(['name'=>$r->name]);

           return json_encode(array('error' =>false,'status'=>'Name successfully updated','name'=>$r->name));
          }
          else{
            return json_encode(array('error' =>true,'status'=>'Name already Exist Choose A Different Name'));
          }
      }
      else{
        return json_encode(array('error' =>true,'status'=>'old password does not match'));
      }
    }

    public function changeoptions(Request $r){
      $user=Option::firstOrCreate(['courier_id'=>$r->id,'header'=>'bg-gradient-9']);
     $useroption=Option::where('courier_id',$r->id)->update(["header"=>$r->header==null? "bg-gradient-9":$r->header,"sidebar"=>$r->sidebar==null?null:$r->sidebar]);
     return json_encode(array('error' =>false,'status'=>'Page Customised Successfully','sidebar'=>$r->sidebar==null? "":$r->sidebar,'header'=>$r->header==null? "bg-gradient-9":$r->header));
    }
    /**
     * profile Tab2 Change password
     
     */

    public function changepassword(Request $r){
      $r->validate([
            'old_password' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $user=Auth::guard('courier')->user()->find($r->id);
    
      if (Auth::guard('courier')->attempt(['email' => $user->email, 'password' => $r->old_password])) {
         $user->update(['password'=>bcrypt($r->password)]);
         return json_encode(array('error' =>false,'status'=>'Password Successfully Changed'));
      }
      else{
        return json_encode(array('error' =>true,'status'=>'Old Password Is Not Correct'));
      }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function imageUpload(Request $r)
    {
        $max_size = 500 * 1024; //500 KB
        
       $file = $r->file('file');
        $name=$file->getClientOriginalName();
        $filesize= filesize($file);
        $newname = str_random(25).$name;
        $target="couriers/img/upload/".$newname;
        $imagefiletype=pathinfo($target,PATHINFO_EXTENSION);
         list($width,$height)=getimagesize($file);
         if($imagefiletype=='png'||$imagefiletype=='jpg'||$imagefiletype=='jpeg'){
            if($filesize < ($max_size)){
                if (file_exists($target)) {
                    return json_encode(array('status' => "<strong>".$name."</strong>".' already exist','error'=>true));
                
                }
                else{
                 Auth::guard('courier')->user()->find($r->id)->update(['image'=>$target]);
                  $file->move('couriers/img/upload/',$newname);
                  return json_encode(array('status' =>"<p>Image uploaded successfully</p><br><p>Size: <strong>" . round($filesize/1024, 2) . " kB</strong></p>" ,'error'=>false,'filename'=>$target));
                }
            }
            else
                {
                    
                    return json_encode(array('status' =>"The size of image you are attempting to upload is " . round($filesize/1024, 2) . " KB, maximum size allowed is " . round($max_size/1024, 2) . " KB" , 'error'=>true));
                }

         }
         else
          {
            return json_encode(array('status' =>">Unvalid image format. Allowed formats: JPG, JPEG, PNG." , 'error'=>true));
          }
    }
    public function request(Request $r)
    {
        
       $checkrequest= ShopRequest::firstOrCreate(['courier_id'=>$r->userid,'shop_id'=>$r->shopid,'status'=>1]);
       shops::find($r->shopid)->notify(new RequestSent());
       if($checkrequest){
             return json_encode(array('status' =>"Request Successfully Sent" , 'error'=>false,'success'=>'request sent'));
       }
       
    }

    public function cancelRequest(Request $r){
        $requestCancelled=ShopRequest::where('courier_id', $r->userid)
          ->where('shop_id', $r->shopid)
          ->delete();
       if($requestCancelled){
             return json_encode(array('status' =>"Request Successfully Cancelled" , 'error'=>false,'success'=>'request sent'));
       }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    private function findorcreateday($day,$time){
           $daytable = \DB::table('courier_day');

          if ($daytable->where('courier_id',Auth::guard('courier')->user()->id)->where('day_id',$day)->exists()) {
            $daytable->update([
              'time'=>json_encode($time)
            ]);
          }
          else{
            $daytable->insert([
              'courier_id'=>Auth::guard('courier')->user()->id,
              'day_id'=>$day,
              'time'=>json_encode($time)
            ]);
          }
    }
    public function deliveryDays(Request $r)
    {
        $r->validate([
            'days' => 'required',
        ]);
    Auth::guard('courier')->user()->dayUser()->whereNotIn('day_id',$r->days)->delete();

      foreach ($r->days as $v) {
        switch ($v) {
          case '1':
            $this->findorcreateday($v,$r->mtime);
            break;
            case '2':
            $this->findorcreateday($v,$r->ttime);
            break;
          case '3':
            $this->findorcreateday($v,$r->wtime);
            break;
          case '4':
          $this->findorcreateday($v,$r->thtime);
          break;
          case '5':
            $this->findorcreateday($v,$r->ftime);
          break;
          case '6':
          $this->findorcreateday($v,$r->stime);
          break;
          case '7':
            $this->findorcreateday($v,$r->sutime);
            break;
          default:
            break;
        }
      }
      session(['delivery'=>'yes']);
      session()->forget('timeSetup');
      return redirect()->back();
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ 
    public function allShops()
    {
        
         return view('courier.shops');
    }

    public function myshops(){
      return view('courier.myshop');
    }   

    public function requestedshops(){
      return view('courier.requestedshops');
    }  

    public function pendingOrders(){
      return view('courier.pending');
    } 

    public function deliveryHistory(){
      return view('courier.deliveryHistory');
    }

    public function myprofile(){
      return view('courier.profile');
    }

    public function index(){
      return view('courier.index');
    }
    public function options(){
      return view('courier.options');
    }
    public function charts(){
      return view('courier.charts');
    }
    public function markasread($id){
      $user = \App\shops::find($id);

      foreach ($user->unreadNotifications as $notification) {
          $notification->markAsRead();
      }
      
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function notify()
    {
      $user = Auth::guard('courier')->user();
        event(new sentRequest('hello samuel'));
    }

     public function listen(){
      return view('courier.listen');
      
    }

    public function notificationtest(){
      return notification::all();
      
    }

    public function broadcast(Request $r){
      return $r->all();
      
    }





}
