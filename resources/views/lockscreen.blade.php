<!DOCTYPE html>
<html>
<head>
    <title>Lockscreen | Admire</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="{{asset('img/logo1.ico')}}"/>
    <!-- Global styles -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/components.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('css/custom.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/login1.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/wow/css/animate.css')}}"/>
    <!--End of global styles-->
    <link rel="stylesheet" href="{{asset('css/pages/lockscreen.css')}}"/>
</head>
<body>
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
<div>
    <div class="login-container  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="row">
            <div class="col-lg-12 login_border_radius1 lockscreen_img">
                <div id="output"></div>
                <p></p>

                <div class="avatar"></div>
                <p></p>
            </div>
            <div class="col-lg-12 login_border_radius lockscreen_content">
                <div class="form-box">
                    <form method="get" name="screen">
                        <div class="form">
                            <p class="form-control-static">ADMIN</p>
                            <input type="password" name="user" class="form-control" placeholder="Password">
                            <button class="btn btn-primary btn-block login" id="index_submit" type="submit">GO</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- global js -->
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/wow/js/wow.min.js')}}"></script>
<!-- end of global js-->
<!-- page level js-->
<script type="text/javascript" src="{{asset('js/pages/lockscreen.js')}}"></script>
<script>
    new WOW().init();
</script>
</body>

</html>
