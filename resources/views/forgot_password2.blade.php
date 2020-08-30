<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password 2 | Admire</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="{{asset('img/logo1.ico')}}"/>
    <!--Global styles -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/components.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/custom.css')}}" />
    <!--End of Global styles -->
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/wow/css/animate.css')}}"/>
    <!--End of Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/login2.css')}}"/>
</head>
<body class="login_background">
<div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
        <img src="{{asset('img/loader.gif')}}" style=" width: 40px;" alt="loading...">
    </div>
</div>
<div class="container wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="row">
        <div class="col-10 mx-auto">
            <div class="row">
                <div class="col-lg-4 col-sm-6  mx-auto forgotpwd_margin login_image login_section forgot_section_top">
                    <div class="login_logo login_border_radius1">
                        <div class="text-center text-white font_18">
                            <img src="{{asset('img/logow2.png')}}" alt="logo" class="admire_logo"><br/>
                            <span class="m-t-15">FORGOT PASSWORD</span>
                        </div>
                    </div>
                    <div class="m-t-15">
                        <form action='login2'  id="login_validator1" method="get" class="form-group  login_validator bv-form" novalidate="novalidate">
                            <div class="login_content login_border_radius">
                                <div class="form-group">
                                    <label for="email_modal" class="text-white">Please enter your email</label>
                                    <input type="text" class="form-control email_forgot b_r_20" id="email_modal" name="email_modal" placeholder="E-mail">
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-mint submit_email b_r_20 login_button m-t-10" href='login2' >Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- global js -->
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- end of global js-->
<!--Plugin js-->
<script type="text/javascript" src="{{asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/wow/js/wow.min.js')}}"></script>
<!--End of plugin js-->
<script type="text/javascript" src="{{asset('js/pages/login2.js')}}"></script>

</body>

</html>