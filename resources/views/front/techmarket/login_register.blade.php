<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">

<!-- Mirrored from transvelo.github.io/techmarket-html/login-and-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 09:57:27 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>Login / Register</title>
    @include('front.techmarket.inc.head_assets')
</head>
<body class="page home page-template-default">
<div id="page" class="hfeed site">
@include('front.techmarket.inc.top_bar')
    <!-- .top-bar-v1 -->
@include('front.techmarket.inc.header')
    <!-- .header-v1 -->
    <!-- ============================================================= Header End ============================================================= -->
    <div id="content" class="site-content">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="home-v1.html">Home</a>
                    <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>My Account
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="type-page hentry">
                            <div class="entry-content">
                                <div class="woocommerce">
                                    <div class="customer-login-form">
                                        <span class="or-text">or</span>
                                        <div id="customer_login" class="u-columns col2-set">
                                            <div class="u-column1 col-1">
                                                <h2>Login</h2>
                                                <form method="post" class="woocomerce-form woocommerce-form-login login" action="{{url('/login')}}">
                                                    {{csrf_field()}}
                                                    <p class="before-login-text">
                                                        Welcome Back
                                                    </p>
                                                    <p class="form-row form-row-wide">
                                                        <label for="username"> email address
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="email" class="input-text" name="email" id="username" value="" />
                                                    </p>
                                                    <p class="form-row form-row-wide">
                                                        <label for="password">Password
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input class="input-text" type="password" name="password" id="password" />
                                                    </p>
                                                    <p class="form-row">
                                                        <input class="woocommerce-Button button" type="submit" value="Login" name="login">
                                                        <label for="rememberme" class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
                                                            <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember me
                                                        </label>
                                                    </p>

                                                    <p class="woocommerce-LostPassword lost_password">
                                                        <a href="#">Lost your password?</a>
                                                    </p>

                                                </form>

                                                <div class="footer-social-icons">
                                                    <ul class="social-icons nav">
                                                        <li class="nav-item">
                                                            <a class="sm-icon-label-link nav-link" href="#">
                                                             Login with    <i class="fa fa-facebook"></i> Facebook</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="sm-icon-label-link nav-link" href="#">
                                                              Login with  <i class="fa fa-google-plus"></i> Google+</a>
                                                        </li>

                                                    </ul>
                                                </div>

                                                <!-- .woocommerce-form-login -->
                                            </div>
                                            <!-- .col-1 -->
                                            <div class="u-column2 col-2">
                                                <h2>Register</h2>
                                                <form class="register" method="post" action="{{url('/register')}}">
                                                    {{csrf_field()}}
                                                    <p class="before-register-text">
                                                        Create new account today to reap the benefits of a personalized shopping experience.
                                                    </p>

                                                    <p class="form-row form-row-wide">
                                                        <label for="reg_email">Your Name
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="text" value="" id="reg_name" name="name" class="woocommerce-Input woocommerce-Input--text input-text">
                                                    </p>

                                                    <p class="form-row form-row-wide">
                                                        <label for="reg_email">Email address
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="email" value="" id="reg_email" name="email" class="woocommerce-Input woocommerce-Input--text input-text">
                                                    </p>
                                                    <p class="form-row form-row-wide">
                                                        <label for="reg_password">Password
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="password" id="reg_password" name="password" class="woocommerce-Input woocommerce-Input--text input-text">
                                                    </p>
                                                    <p class="form-row">
                                                        <input type="submit" class="woocommerce-Button button" name="register" value="Register" />
                                                    </p>
                                                    <div class="register-benefits">
                                                        <h3>Sign up today and you will be able to :</h3>
                                                        <ul>
                                                            <li>Speed your way through checkout</li>
                                                            <li>Track your orders easily</li>
                                                            <li>Keep a record of all your purchases</li>
                                                        </ul>
                                                    </div>
                                                </form>
                                                <!-- .register -->
                                            </div>
                                            <!-- .col-2 -->
                                        </div>
                                        <!-- .col2-set -->
                                    </div>
                                    <!-- .customer-login-form -->
                                </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .entry-content -->
                        </div>
                        <!-- .hentry -->
                    </main>
                    <!-- #main -->
                </div>
                <!-- #primary -->
            </div>
            <!-- .row -->
        </div>
        <!-- .col-full -->
    </div>
    <!-- #content -->
@include('front.techmarket.inc.footer')
    <!-- .site-footer -->
</div>
<!-- For demo purposes – can be removed on production -->
@include('front.techmarket.inc.config')
<!-- For demo purposes – can be removed on production : End -->
@include('front.techmarket.inc.foot_assets')
<!-- For demo purposes – can be removed on production : End -->
</body>


</html>