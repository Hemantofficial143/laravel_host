<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="{{asset('img/logo1.ico')}}"/>
    <!-- Global styles -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/components.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/custom.css')}}" />
    <!--End of Global styles -->
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}"/>
    <!--End of Plugin styles-->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/login3.css')}}"/>
    <!--End of Page level styles-->
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
        <img src="{{asset('img/loader.gif')}}" style=" width: 40px;" alt="loading...">
    </div>
</div>
<div class="container">
    @if (count($errors)>0)
        @foreach ($errors->all() as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    @endif
    <div class="row">
        <div class="col-10 mx-auto login_section">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12 mx-auto login_section login2_border register_section_top">
                    <div class="login_logo login_border_radius1">
                        <h3 class="text-center text-white">
                            <img src="{{asset('img/logow2.png')}}" alt="logo" class="admire_logo"><br/>
                            <span class="m-t-15">SIGN UP</span>
                        </h3>
                    </div>
                    <div class="m-t-15">
                        <form class="form-horizontal" id="register_valid" action="{{ route('admin.register.submit') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="username" class="col-form-label text-white">Name *</label>
                                <div class="input-group input-group-append">
                                    <input type="text" class="form-control b_r_20" name="name" id="username" placeholder="Username">
                                    <span class="input-group-text bl-0">
                                        <i class="fa fa-user text-white"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-form-label text-white">Email *</label>
                                <div class="input-group input-group-append">
                                    <input type="text" placeholder="Email Address" name="email" id="email" class="form-control b_r_20">
                                    <span class="input-group-text bl-0">
                                        <i class="fa fa-envelope text-white"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-form-label text-white">Password *</label>
                                <div class="input-group input-group-append">
                                    <input type="password" placeholder="Password" id="password" name="password" class="form-control b_r_20">
                                    <span class="input-group-text bl-0">
                                        <i class="fa fa-key text-white"></i>
                                    </span>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-12">
                                    <label class="col-form-label text-white">Gender</label>
                                </div>
                                <div class="col-12">
                                    <label class="custom-control custom-radio">
                                        <input type="radio" name="gender" class="custom-control-input form-control" value="M">
                                        <span class="custom-control-label"></span>
                                        <a class="custom-control-description">Male</a>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" name="gender" class="custom-control-input form-control" value="F">
                                        <span class="custom-control-label"></span>
                                        <a class="custom-control-description">Female</a>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input form-control">
                                        <span class="custom-control-label"></span>
                                        <a class="custom-control-description">Send me latest news and updates.</a>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <button  type="submit" class="btn btn-block btn-success login_button b_r_20">Submit</button>
                                </div>
                                <div class="col-6">
                                    <button type="reset" class="btn btn-block btn-danger b_r_20">Reset</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label class="col-form-label text-white">Already have an account?</label>
                                    <a href="{{URL::to('/admin/')}}" class="text-primary login_hover"><b>Log In</b></a>
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
