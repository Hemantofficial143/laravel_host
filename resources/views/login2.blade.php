<!DOCTYPE html>
<html>
<head>
    <title>Login 2 | Admire</title>
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
        <img src="{{asset('img/loader.gif')}}"  style=" width: 40px;" alt="loading...">
    </div>
</div>
<div class="container wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="row">
        <div class="col-10 mx-auto">
            <div class="row">
                <div class="col-lg-4  col-md-8 col-sm-12  mx-auto login_image login_section login_section_top">
                    <div class="login_logo login_border_radius1">
                        <h3 class="text-center text-white">
                            <img src="{{asset('img/logow2.png')}}" alt="josh logo" class="admire_logo">
                        </h3>
                    </div>
                    <div class="row m-t-20">
                        <div class="col-12">
                            <a class="text-success m-r-20 font_18">LOG IN</a>
                            <a href="register2" class="text-white font_18">SIGN UP</a>
                        </div>
                    </div>
                    <div class="m-t-15">
                        <form  id="login_validator" action="{{URL::to('index')}}" >
                            <div class="form-group">
                                <label for="email" class="form-control-label text-white"> E-mail</label>
                                <input type="text" class="form-control b_r_20" id="email" name="email" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <label for="password" class="form-control-label text-white">Password</label>
                                <input type="password" class="form-control b_r_20" id="password" name="password" placeholder="Password">
                            </div>
                            <div class="row m-t-15">
                                <div class="col-12">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input form-control">
                                        <span class="custom-control-label"></span>
                                        <a class="custom-control-description text-white">Keep me logged in</a>
                                    </label>
                                </div>
                            </div>
                            <div class="text-center login_bottom">
                                <button type="submit" class="btn btn-mint btn-block b_r_20 m-t-10 m-r-20">LOG IN</button>
                            </div>
                            <div class="m-t-15 text-center">
                                <a href="{{URL::to('forgot_password2')}}" class="text-white">Forgot password ?</a>
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
<script type="text/javascript" src="{{asset('vendors/jquery.backstretch/js/jquery.backstretch.js')}}"></script>
<!--End of plugin js-->
<script type="text/javascript" src="{{asset('js/pages/login2.js')}}"></script>

</body>

</html>