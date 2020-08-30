<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }} </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="{{asset('img/logo1.ico')}}"/>
    <!--Global styles -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/components.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/custom.css')}}" />
    <!--End of Global styles -->
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}"/>
    <!--End of Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/login3.css')}}"/>
</head>
<body class="login_backimg">
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
<div class="container">
    @if (\Session::has('logout'))
        <div class="alert alert-success">{{  \Session::get('logout')  }}</li>
        </div>
    @endif
    @if (\Session::has('error'))
        <div class="alert alert-danger">{{  \Session::get('error')  }}</li>
        </div>
    @endif
    <div class="row">
        <div class="col-12 mx-auto login_section">
            <div class="row">
                <div class=" col-lg-4 col-md-8 col-sm-12  mx-auto login2_border login_section_top">
                    <div class="login_logo login_border_radius1">
                        <h3 class="text-center text-white">
                            <img src="{{asset('img/logow2.png')}}" alt="logo" class="admire_logo"><br />
                            <span class="m-t-15">LOG IN</span>
                        </h3>
                    </div>
                    <div class="m-t-15">
                        <form method="POST" action="{{ route('admin.login.submit') }}" id="login_validator">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="col-form-label text-white"> E-mail</label>
                                <div class="input-group">
                                    <input type="text" class="form-control b_r_20" id="email" name="email" placeholder="E-mail">
                                    <span class="input-group-text bl-0">
                                        <i class="fa fa-envelope text-white"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-form-label text-white">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control b_r_20" id="password" name="password" placeholder="Password">
                                    <span class="input-group-text  bl-0">
                                        <i class="fa fa-key text-white"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="row m-t-15">
                                <div class="col-lg-12">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input form-control">
                                        <span class="custom-control-label"></span>
                                        <a class="text-white">Keep me logged in</a>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 m-t-10">
                                    <a href="{{ url('/admin/register') }}" class="forgottxt_clr text-white"><i class="fa fa-external-link"></i> Register Now</a>
                                </div>
                                <div class="col-6 p-l-0 m-t-10">
                                    <div class="float-right">
                                        <a href="{{ url('/admin/forgot') }}" class="forgottxt_clr text-white">Forgot password ?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success btn-block b_r_20 m-t-20">LOG IN</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="text-center m-t-25">
                                        <span class="text-white d-block">Sign in with</span>

                                        <span class="fa-stack m-l-10 pointer">
                                        <i class="fa fa-circle fa-stack-2x fb_background"></i>
                                        <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                    </span>
                                        <span class="fa-stack pointer">
                                        <i class="fa fa-circle fa-stack-2x twitter_background"></i>
                                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                        <span class="fa-stack pointer">
                                        <i class="fa fa-circle fa-stack-2x google_background"></i>
                                        <i class="fa fa-google fa-stack-1x fa-inverse"></i>
                                    </span>
                                        <span class="fa-stack pointer">
                                        <i class="fa fa-circle fa-stack-2x linkedin_background"></i>
                                        <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                                    </span>
                                    </div>
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
<script type="text/javascript" src="{{asset('vendors/jquery.backstretch/js/jquery.backstretch.js')}}"></script>
<!--End of plugin js-->
<script type="text/javascript" src="{{asset('js/pages/login3.js')}}"></script>
<script>
    $(function(){
        backImageLoader('../');
    })
</script>
</body>

</html>