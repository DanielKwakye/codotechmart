<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ShopCategory;
use Session;
use App\Shop;
use App\CourierMonthlyPlan;
use App\ShopMonthlyPlan;
use App\Courier;
use App\AdminOption;
use App\Complaints;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    public function couriers()
    {
        return view('admin.allCouriers');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function activeCouriers()
    {
        return view('admin.activeCouriers');
    }

    public function referral(){
        return view('admin.referrals');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function deactivatedCouriers()
    {
        return view('admin.deactivatedCouriers');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addCategory(Request $r)
    {
       
        $r->validate([
            'name'=>'required'
        ]);
        $category = ShopCategory::where('name', '=', $r->name)->first();
        if ($category === null) {
           ShopCategory::create($r->all());
           Session::flash('success','Category Added successfully...');
            return back();
        }

        Session::flash('error','Category Already Exist...');
        return back();
    }

    public function complaints(){
        $data=Complaints::all();
        return view('admin.complaint')->with(['data'=>$data]);
    }

    public function customDate(Request $r){
        $r= explode('-', $r->date);
        $date1= date("Y-m-d", strtotime($r[0]));
        $date2= date("Y-m-d", strtotime($r[1]));
        $adv=complaints::whereBetween('created_at', [$date1, $date2])->get();
        return view('admin.complaint')->withData($adv);
    }

    public function dashboard(){
        return view('admin.dashboard');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deactivate(Request $r)
    {
        $shop=Shop::find($r->shopid)->delete();
        $deactivecount=Shop::onlyTrashed()->count();
        $activecount=Shop::all()->count();
        $allshops=Shop::withTrashed()->count();
        if ($shop) {
            return json_encode(['error'=>false,'status'=>'Shop has been successfully deactivated','activeCount'=>$activecount,'deactiveCount'=>$deactivecount,'allshops'=>$allshops]);
        }
        return json_encode(['error'=>true,'status'=>'Error whiles deactivating shop','count'=>$count]);

    }

    public function deactivateCourier(Request $r)
    {
        $shop=Courier::find($r->courierid)->delete();
        $deactivecount=Courier::onlyTrashed()->count();
        $activecount=Courier::all()->count();
        $allshops=Courier::withTrashed()->count();
        if ($shop) {
            return json_encode(['error'=>false,'status'=>'Shop has been successfully deactivated','activeCouriers'=>$activecount,'deactiveCouriers'=>$deactivecount,'allcouriers'=>$allshops]);
        }

    }

    public function activate(Request $r)
    {
        $shop=Shop::withTrashed()
        ->where('id', $r->shopid)
        ->restore();
        $deactivecount=Shop::onlyTrashed()->count();
        $activecount=Shop::all()->count();
        $allshops=Shop::withTrashed()->count();
        if ($shop) {
            return json_encode(['error'=>false,'status'=>'Shop has been successfully Activated','activeCount'=>$activecount,'deactiveCount'=>$deactivecount,'allshops'=>$allshops]);
        }

    }

     public function activateCourier(Request $r)
    {
        $shop=Courier::withTrashed()
        ->where('id', $r->courierid)
        ->restore();
        $deactivecount=Courier::onlyTrashed()->count();
        $activecount=Courier::all()->count();
        $allshops=Courier::withTrashed()->count();
        if ($shop) {
            return json_encode(['error'=>false,'status'=>'Shop has been successfully deactivated','activeCouriers'=>$activecount,'deactiveCouriers'=>$deactivecount,'allcouriers'=>$allshops]);
        }

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function activeShops()
    {
        return view('admin.activeShops');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deactivatedShops()
    {
        return view('admin.deactiveShops');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function shopPlans()
    {
        return view('admin.shopPlan');
    }
     public function courierPlans()
    {
        return view('admin.courierPlan');
    }
     public function category()
    {
        return view('admin.category');
    }

     public function update(Request $r)
    {
        $r->validate([
            'amount'=>'required|integer|min:0'
        ]);

        $courier=CourierMonthlyPlan::find($r->id)->update(['amount'=>$r->amount]);
        if ($courier) {
            Session::flash('success','Courier Monthly Plan Updated Successfully');
            return back();
        }
    }

    public function ShopMonthupdate(Request $r){
        $r->validate([
            'amount'=>'required|integer|min:0'
        ]);

        $courier=ShopMonthlyPlan::find($r->id)->update(['amount'=>$r->amount]);
        if ($courier) {
            Session::flash('success','Shop Monthly Plan Updated Successfully');
            return back();
        }
    }

    public function changeoptions(Request $r){
      $user=AdminOption::firstOrCreate(['admin_id'=>$r->id,'header'=>'bg-gradient-9']);
     $useroption=AdminOption::where('admin_id',$r->id)->update(["header"=>$r->header==null? "bg-gradient-9":$r->header,"sidebar"=>$r->sidebar==null?null:$r->sidebar]);
     return json_encode(array('error' =>false,'status'=>'Page Customised Successfully','sidebar'=>$r->sidebar==null? "":$r->sidebar,'header'=>$r->header==null? "bg-gradient-9":$r->header));
    }

    public function options(){
      return view('admin.options');
    }

    public function editCategory(Request $r){
        $r->validate([
            'name'=>'required'
        ]);
        if (ShopCategory::find($r->id)->update(['name'=>$r->name])) {
            Session::flash('success','Category Updated Successfully');
            return back();
        }
        else{
            Session::flash('error','Error Whiles Updating Category');
            return back();
        }
        
    }

    public function deleteCategory(Request $r){
        if (ShopCategory::find($r->id)->delete()) {
            return json_encode(['error'=>false,'status'=>'Category Deleted Successfully']);
        }
        else{
            return json_encode(['error'=>true,'status'=>'Error Deleting Category']);
        }
    }




}
