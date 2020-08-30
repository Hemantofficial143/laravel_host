
<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password 1 | Admire</title>
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
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/login1.css')}}"/>
</head>
<body>
<div class="container wow slideInDown" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-lg-4 col-sm-8 col-md-6 mx-auto forgotpwd_margin ">
                    <div class="login_logo login_border_radius1">
                        <h3 class="text-center">
                            <img src="{{asset('img/logow2.png')}}" alt="josh logo" class="admire_logo"><span class="text-white"> ADMIRE &nbsp;<br/>
                               Forgot Password</span>
                        </h3>
                    </div>
                    <form action="login1" id="login_validator1" method="get"
                          class="form-group  login_validator">
                        <div class="bg-white login_content login_border_radius">
                            <div class="form-group">
                                <label for="email_modal">Please enter your email to reset the password</label>
                                <div class="input-group input-group-append">
                            <span class="input-group-text border-right-0 addon_email"><i
                                    class="fa fa-envelope text-primary"></i></span>
                                    <input type="text" class="form-control email_forgot form-control-md"
                                           id="email_modal" name="email_modal" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="form-group form-actions">
                                <button type="submit" class="btn btn-primary submit_email login_button" href="login1" >Submit
                                </button>
                            </div>
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
<!-- end of global js-->
<!--Plugin js-->
<script type="text/javascript" src="{{asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/wow/js/wow.min.js')}}"></script>
<!--End of plugin js-->
<script type="text/javascript" src="{{asset('js/pages/forgot_password.js')}}"></script>
</body>

</html>