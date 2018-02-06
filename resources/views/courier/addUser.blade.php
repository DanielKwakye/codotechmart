@extends('layouts.masterLayout')

@section('title')
<title>Add User</title>
@endsection

@section('content')

<div id="page-title">
    <h2>Add New User @{{name}}</h2> 
    @include('inc.dashboard.sideoptions')
</div>

<div class="">
    <form class="form-horizontal bordered-row" id="demo-form">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Email <small>(required)</small></label>
                    <div class="col-sm-6">
                        <input type="text" placeholder="" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-6">
                        <input type="text" placeholder="" minlength="5" required class="form-control" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-6">
                        <input type="text" placeholder="" required class="form-control" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-6">
                        <input type="text" placeholder="" required class="form-control" name="confirm_password" required="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Role</label>
                    <div class="col-sm-3">
                        <select class="form-control" name="role">
                            <option value="manager">manager</option>
                        </select>
                    </div>
                </div>
                <button class="btn btn-success btn-lg">Save</button>
            </div>
        </div>
    </form>    
</div>
@endsection