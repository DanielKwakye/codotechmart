<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from agileui.com/demo/monarch/demo/admin-template/login-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 10:37:45 GMT -->
<head>
    @include('courier.inc.header')


</head>
<body>
<div id="loading">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>

<style type="text/css">

    html,body {
        height: 100%;
    }

</style>
<div class="center-vertical bg-black">
    <div class="center-content row">
        <form  id="login-validation" class="center-margin col-xs-11 col-sm-5" method="POST" action="{{ url('/admin/login') }}">
            {{ csrf_field() }}
            <h3 class="text-center pad25B font-gray font-size-23">Administrator <span class="opacity-80">v1.0</span></h3>
            <div id="login-form" class="content-box">
                <div class="content-box-wrapper pad20A">

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="exampleInputEmail1">Email address:</label>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon addon-inside bg-white font-primary">
                                <i class="glyph-icon icon-envelope-o"></i>
                            </span>
                            <input type="email" name="email" class="form-control" placeholder="Enter email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="exampleInputPassword1">Password:</label>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon addon-inside bg-white font-primary">
                                <i class="glyph-icon icon-unlock-alt"></i>
                            </span>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="checkbox-primary col-md-6" style="height: 20px;">
                            <label>
                                <input type="checkbox" name="remember" class="custom-checkbox">
                                Remember me
                            </label>
                        </div>
                        <div class="text-right col-md-6">
                            <a href="{{ url('/admin/password/reset')}}" title="Recover password">Forgot your password?</a>
                        </div>
                    </div>
                </div>
                <div class="button-pane">
                    <button type="submit" class="btn btn-block btn-primary">Login</button>
                </div>
            </div>

        </form>

    </div>
</div>


@include('courier.inc.footer')

</body>

</html>