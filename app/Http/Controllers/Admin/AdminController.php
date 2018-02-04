<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ShopCategory;
use Session;
use App\Shop;

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
        $user = ShopCategory::where('name', '=', $r->name)->first();
        if ($user === null) {
           ShopCategory::create($r->all());
           Session::flash('success','Category Added successfully...');
            return back();
        }

        Session::flash('error','Category Already Exist...');
        return back();
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
        return json_encode(['error'=>true,'status'=>'Error whiles Activating shop']);

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
    public function addMonthlyPlan(Request $r)
    {
        //
    }
}
