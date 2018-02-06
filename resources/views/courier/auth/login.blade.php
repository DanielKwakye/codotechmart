<!DOCTYPE html>
<html lang="en">

<head>
    @include('courier.inc.header')
    
        <title> Login </title>
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
        background: #fff;
        overflow: hidden;
    }

</style>


<script type="text/javascript" src="{{asset('courierss/assets/widgets/wow/wow.js')}}"></script>
<script type="text/javascript">
    /* WOW animations */

    wow = new WOW({
        animateClass: 'animated',
        offset: 100
    });
    wow.init();
</script>


<img src="{{asset('couriers/assets/image-resources/blurred-bg/blurred-bg-3.jpg')}}" class="login-img wow fadeIn" alt="">

<div class="center-vertical">
    <div class="center-content row">

        <div class="col-md-3 center-margin">

            <form class="form-horizontal" method="POST" action="{{ url('/courier/login') }}">
                {{ csrf_field() }}
                <div class="content-box wow bounceInDown modal-content" style="padding: 5px;">
                    <h3 class="content-box-header content-box-header-alt bg-default">
                        <span class="icon-separator">
                            <i class="glyph-icon icon-cog"></i>
                        </span>
                        <span class="header-wrapper">
                                couriers Service
                            <small>Login to your account.</small>
                        </span>
                        <span class="header-buttons">
                            <a href="{{url('/courier/register')}}" class="btn btn-sm btn-primary" title="Register">Sign Up</a>
                        </span>
                    </h3>
                    <div class="content-box-wrapper">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="input-group">
                                <input type="email" class="form-control" name="email" placeholder="Enter email" value="{{ old('email') }}">
                                <span class="input-group-addon bg-blue">
                                    <i class="glyph-icon icon-envelope-o"></i>
                                </span>
                            </div>
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="input-group">
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                <span class="input-group-addon bg-blue">
                                    <i class="glyph-icon icon-unlock-alt"></i>
                                </span>
                            </div>
                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">
                            <a href="{{ url('courier/password/reset') }}" title="Recover password">Forgot Your Password?</a>
                        </div>
                        <button type="submit" class="btn btn-success btn-block">Sign In</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
@include('courier.inc.footer')

</body>
</html>