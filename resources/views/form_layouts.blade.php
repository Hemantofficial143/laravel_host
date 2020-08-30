@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Form Layouts
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--plugin styles-->
    {{--<link rel="stylesheet" href="{{asset('vendors/intl-tel-input/css/intlTelInput.css')}}">--}}
    <link rel="stylesheet" href="{{asset('vendors/intl-tel-input/css/intlTelInput.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/sweetalert/css/sweetalert2.min.css')}}" />
    <!--End of plugin styles-->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/sweet_alert.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/form_layouts.css')}}" />
    <!-- end of page level styles -->
@stop


{{-- Page content --}}
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-sm-5 col-lg skin_txt">
                    <h4 class="nav_top_align">
                        <i class="fa fa-pencil"></i>
                        Form Layouts
                    </h4>
                </div>
                <div class="col-sm-7 col-lg">
                    <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Forms</a>
                        </li>
                        <li class="active breadcrumb-item">Form Layouts</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>


    <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col-12 col-xl-6">
                    <div class="card">
                        <div class="card-header bg-white">
                            Basic Sign In Layout
                        </div>
                        <div class="card-body">
                            <!-- checkbox -->
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="form-check row m-t-30">
                                        <div class="col-lg-12 px-0">
                                            <label class="custom-control custom-radio signin_radio1 d-inline-block pr-3">
                                                <input id="radio" name="radio1" type="radio" class="custom-control-input" checked>
                                                <span class="custom-control-label"></span>
                                                <span class="custom-control-description">Username</span>
                                            </label>
                                            <label class="custom-control custom-radio signin_radio2 d-inline-block">
                                                <input id="radio2" name="radio1" type="radio" class="custom-control-input">
                                                <span class="custom-control-label"></span>
                                                <span class="custom-control-description"> E-mail</span>
                                            </label>
                                        </div>
                                    </div>
                                    <form class="form-horizontal">
                                        <fieldset>
                                            <!-- Name input-->
                                            <div class="form-group row">
                                                <div class="col-lg-12 user_icon_change1">
                                                    <label for="email" class="col-form-label form-group-horizontal form_lay_email1">Username </label>
                                                    <div class="input-group input-group-prepend">
                                            <span class="input-group-text border-right-0 rounded-left">
                                            <i class="fa fa-user"></i>
                                        </span>
                                                        <input type="text" class="form-control form_lay_input1" name="Username" placeholder="Username">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-12">
                                                    <label for="password" class="col-form-label form-group-horizontal">
                                                        Password
                                                    </label>
                                                    <div class="input-group input-group-prepend">
                                            <span class="input-group-text border-right-0 rounded-left">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                                        <input type="password" id="password" class="form-control" name="password" placeholder="Password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-12">
                                                    <label for="confirm" class="col-form-label form-group-horizontal">
                                                        Confirm Password
                                                    </label>
                                                    <div class="input-group input-group-prepend">
                                            <span class="input-group-text border-right-0 rounded-left">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                                        <input type="password" id="confirm" class="form-control" name="password" placeholder="Confirm Password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-check row">
                                                <div class="col-lg-6 px-0">
                                                    <div class="input-group">
                                                        <label for="login" class="custom-control custom-checkbox">
                                                            <input type="checkbox" id="login" class="custom-control-input">
                                                            <span class="custom-control-label"></span>
                                                            <span class="custom-control-description">Keep me logged in</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-12">
                                                    <a href="#">Forgot Password?</a>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11">
                                                    <button class="btn btn-primary layout_btn_prevent">Sign In</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- basic signin layout ends-->
                <div class="col-12 col-xl-6">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="card inline_section_align media_max_1199">
                                <div class="card-header bg-white">
                                    Inline Sign In Layout
                                </div>
                                <div class="card-body">
                                    <form>
                                        <fieldset>
                                            <!-- Name input-->
                                            <div class="form-group row form_inline_inputs_bot">
                                                <div class="col-lg-1"></div>
                                                <div class="col-lg-4">
                                                    <div class="input-group m-t-35">
                                                        <input type="text" class="form-control" name="user" placeholder="E-mail">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="input-group m-t-35">
                                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 m-t-35">
                                                    <button class="btn btn-primary layout_btn_prevent btn-responsive form_inline_btn_margin-top">Sign In</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- inline sign in layout ends-->
                        <div class="col-lg-12">
                            <div class="card m-t-35">
                                <div class="card-header bg-white">
                                    Horizontal Sign In Layout
                                </div>
                                <div class="card-body ">
                                    <!-- checkbox -->
                                    <div class="form-check row m-t-30">
                                        <div class="col-lg-9 ml-auto px-0">
                                            <label for="radio3" class="custom-control custom-radio signin_radio3 d-inline-block pr-3">
                                                <input id="radio3" name="radio3" type="radio" class="custom-control-input" checked>
                                                <span class="custom-control-label"></span>
                                                <span class="custom-control-description">Username</span>
                                            </label>
                                            <label for="radio4" class="custom-control custom-radio signin_radio4 d-inline-block pr-3">
                                                <input id="radio4" name="radio3" type="radio" class="custom-control-input">
                                                <span class="custom-control-label"></span>
                                                <span class="custom-control-description"> E-mail</span>
                                            </label>
                                        </div>
                                    </div>
                                    <form class="form-horizontal">
                                        <fieldset>
                                            <!-- Name input-->
                                            <div class="form-group row">
                                                <div class="col-lg-3 text-lg-right">
                                                    <label for="username2" class="col-form-label form_lay_email2">Username</label>
                                                </div>
                                                <div class="col-lg-8 user_icon_change2">
                                                    <div class="input-group input-group-prepend">
                                            <span class="input-group-text border-right-0 rounded-left">
                                                <i class="fa fa-user"></i>
                                            </span>
                                                        <input type="text" class="form-control form_lay_input2" id="username2" placeholder="Username">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-3 text-lg-right">
                                                    <label for="horz_password" class="col-form-label">Password</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="input-group input-group-prepend">
                                            <span class="input-group-text border-right-0 rounded-left">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                                        <input type="password" class="form-control" id="horz_password" placeholder="Password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-check row">
                                                <div class="col-lg-9 ml-auto px-0">
                                                    <div>
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-label"></span>
                                                            <span class="custom-control-description">Keep me logged in</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-9 ml-auto">
                                                    <button class="btn btn-primary layout_btn_prevent">Sign In</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of horizontal signin layout-->
                <div class="col-12 col-xl-6">
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            Basic Sign Up Layout
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <form class="form-horizontal">
                                        <fieldset>
                                            <!-- Name input-->
                                            <div class="form-group row m-t-25">
                                                <div class="col-lg-12">
                                                    <label for="signup_name" class="col-form-label form-group-horizontal">
                                                        First Name
                                                    </label>
                                                    <div class="input-group input-group-prepend">
                                            <span class="input-group-text border-right-0 rounded-left">
                                            <i class="fa fa-user"></i>
                                        </span>
                                                        <input type="text" class="form-control" id="signup_name" placeholder="First Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- first name-->
                                            <div class="form-group row">
                                                <div class="col-lg-12">
                                                    <label for="signup_lastname" class="col-form-label form-group-horizontal">
                                                        Last Name
                                                    </label>
                                                    <div class="input-group input-group-append">
                                                        <input type="text" class="form-control" id="signup_lastname" placeholder="Last Name">
                                                        <span class="input-group-text border-left-0 rounded-right">
                                            <i class="fa fa-user"></i>
                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- last name-->
                                            <div class="form-group row">
                                                <div class="col-lg-12">
                                                    <label for="signup_email" class="col-form-label form-group-horizontal">
                                                        E-mail
                                                    </label>
                                                    <div class="input-group input-group-prepend">
                                            <span class="input-group-text border-right-0 rounded-left">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                                        <input type="text" class="form-control" id="signup_email" placeholder="E-mail">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- mail name-->
                                            <div class="form-group row">
                                                <div class="col-lg-12">
                                                    <label for="signup_password" class="col-form-label form-group-horizontal">
                                                        Password
                                                    </label>
                                                    <div class="input-group input-group-prepend">
                                            <span class="input-group-text border-right-0 rounded-left">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                                        <input type="password" id="signup_password" class="form-control" placeholder="Password">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- password-->
                                            <div class="form-group row">
                                                <div class="col-lg-12">
                                                    <label for="signup_confirm" class="col-form-label form-group-horizontal">
                                                        Confirm Password
                                                    </label>
                                                    <div class="input-group input-group-prepend">
                                            <span class="input-group-text border-right-0 rounded-left">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                                        <input type="password" id="signup_confirm" class="form-control" placeholder="Confirm Password">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- re password name-->
                                            <div class="form-group row">
                                                <div class="col-lg-12">
                                                    <label for="signup_gender" class="col-form-label form-group-horizontal">
                                                        Gender
                                                    </label>
                                                    <div class="input-group input-group-prepend">
                                            <span class="input-group-text border-right-0 rounded-left">
                                            <i class="fa fa-users"></i>
                                        </span>
                                                        <select class="form-control" id="signup_gender">
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-12">
                                                    <label for="signup_dob" class="col-form-label form-group-horizontal">
                                                        Date Of Birth
                                                    </label>
                                                    <div class="input-group input-group-prepend">
                                                        <span class="input-group-text border-right-0 rounded-left">D</span>
                                                        <select class="form-control form_lay_select_padding" id="signup_dob">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                            <option>11</option>
                                                            <option>12</option>
                                                            <option>13</option>
                                                            <option>14</option>
                                                            <option>15</option>
                                                            <option>16</option>
                                                            <option>17</option>
                                                            <option>18</option>
                                                            <option>19</option>
                                                            <option>20</option>
                                                            <option>21</option>
                                                            <option>22</option>
                                                            <option>23</option>
                                                            <option>24</option>
                                                            <option>25</option>
                                                            <option>26</option>
                                                            <option>27</option>
                                                            <option>28</option>
                                                            <option>29</option>
                                                            <option>30</option>
                                                            <option>31</option>
                                                        </select>
                                                        <span class="input-group-text border-right-0 border-left-0 rounded-0">M</span>
                                                        <select class="form-control form_lay_select_padding">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                            <option>11</option>
                                                            <option>12</option>
                                                        </select>
                                                        <span class="input-group-text border-left-0 border-right-0 rounded-0">Y</span>
                                                        <select class="form-control form_lay_select_padding">
                                                            <option>2000</option>
                                                            <option>2001</option>
                                                            <option>2002</option>
                                                            <option>2003</option>
                                                            <option>2004</option>
                                                            <option>2005</option>
                                                            <option>2006</option>
                                                            <option>2007</option>
                                                            <option>2008</option>
                                                            <option>2009</option>
                                                            <option>2010</option>
                                                            <option>2011</option>
                                                            <option>2012</option>
                                                            <option>2013</option>
                                                            <option>2014</option>
                                                            <option>2015</option>
                                                            <option>2016</option>
                                                            <option>2017</option>
                                                            <option>2018</option>
                                                            <option>2019</option>
                                                            <option>2020</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- last name-->
                                            <div class="form-check row">
                                                <div class="col-lg-11 px-0">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                        <span class="custom-control-description">Keep me logged in</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11">
                                                    <a href="#">Forgot Password?</a>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11">
                                                    <button class="btn btn-primary layout_btn_prevent">Sign Up</button>
                                                    <button class="btn btn-warning layout_btn_prevent">Cancel</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- basic sign up form-->
                <div class="col-12 col-xl-6">
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            Horizontal Sign Up Layout
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal">
                                <fieldset>
                                    <!-- Name input-->
                                    <div class="form-group row m-t-35">
                                        <div class="col-lg-3 text-lg-right">
                                            <label for="name3" class="col-form-label">First Name</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="input-group input-group-prepend">
                                            <span class="input-group-text border-right-0 rounded-left">
                                            <i class="fa fa-user"></i>
                                        </span>
                                                <input type="text" id="name3" class="form-control" placeholder="First Name">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- first name-->
                                    <div class="form-group row">
                                        <div class="col-lg-3 text-lg-right">
                                            <label for="lastname3" class="col-form-label">Last Name</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="input-group input-group-append">
                                                <input type="text" class="form-control" id="lastname3" placeholder="Last Name">
                                                <span class="input-group-text border-left-0 rounded-right">
                                            <i class="fa fa-user"></i>
                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- last name-->
                                    <div class="form-group row">
                                        <div class="col-lg-3 text-lg-right">
                                            <label for="email3" class="col-form-label">E-mail</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="input-group input-group-prepend">
                                            <span class="input-group-text border-right-0 rounded-left">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                                <input type="text" id="email3" class="form-control" placeholder="E-mail">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- mail name-->
                                    <div class="form-group row">
                                        <div class="col-lg-3 text-lg-right">
                                            <label for="password3" class="col-form-label">Password</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="input-group input-group-prepend">
                                            <span class="input-group-text border-right-0 rounded-left">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                                <input type="password" id="password3" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- password-->
                                    <div class="form-group row">
                                        <div class="col-lg-3 text-lg-right">
                                            <label for="confirm3" class="col-form-label">Confirm Password</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="input-group input-group-prepend">
                                            <span class="input-group-text border-right-0 rounded-left">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                                <input type="password" id="confirm3" class="form-control" placeholder="Confirm Password">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- re password name-->
                                    <div class="form-group row">
                                        <div class="col-lg-3 text-lg-right">
                                            <label for="gender3" class="col-form-label">Gender</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="input-group input-group-prepend">
                                            <span class="input-group-text border-right-0 rounded-left">
                                            <i class="fa fa-users"></i>
                                        </span>
                                                <select class="form-control" id="gender3">
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- last name-->
                                    <div class="form-group row">
                                        <div class="col-lg-9 ml-auto">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label"></span>
                                                <span class="custom-control-description"> I Agree Terms to the
                                            <a href="#">Terms and Conditions</a></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-9 ml-auto">
                                            <button class="btn btn-primary layout_btn_prevent">Sign Up</button>
                                            <button class="btn btn-warning layout_btn_prevent">Cancel</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="card m-t-30">
                        <div class="card-header bg-white">
                            OTP Layout
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" id="otp_validation">
                                <fieldset>
                                    <!-- Name input-->
                                    <div class="form-group row m-t-30">
                                        <div class="col-xl-12 text-center">
                                        <span>
                                        Please Enter 10 digit mobile number to receive OTP.
                                    </span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 text-lg-right">
                                            <label for="onetime_password" class="col-form-label">Mobile Number</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input type="tel" name="digits_only" class="form-control" id="onetime_password" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-9 ml-auto">
                                            <button type="submit" id="confirm_tel" class="btn btn-primary">Confirm</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Horizontal sign up form-->
                <!-- OTP layout-->
                <div class="col-12">
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            2 Column Sign Up Layout
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal">
                                <fieldset>
                                    <div class="form-group row m-t-35">
                                        <div class="col-lg-3 col-xl-2 text-lg-right">
                                            <label for="name4" class=" col-form-label">First Name</label>
                                        </div>
                                        <div class="col-lg-8 col-xl-4">
                                            <div class="input-group input-group-prepend">
                                            <span class="input-group-text border-right-0 rounded-left">
                                            <i class="fa fa-user"></i>
                                        </span>
                                                <input type="text" id="name4" class="form-control" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-xl-2  text-lg-right">
                                            <label for="name5" class="col-form-label two_column_label_margintop">Last Name</label>
                                        </div>
                                        <div class="col-lg-8 col-xl-4  two_column_signup_margintop">
                                            <div class="input-group input-group-append">
                                                <input type="text" id="name5" class="form-control" placeholder="Last Name">
                                                <span class="input-group-text border-left-0 rounded-right">
                                            <i class="fa fa-user"></i>
                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 col-xl-2 text-lg-right">
                                            <label for="username4" class="col-form-label">Username</label>
                                        </div>
                                        <div class="col-lg-8 col-xl-4">
                                            <div class="input-group input-group-prepend">
                                            <span class="input-group-text border-right-0 rounded-left">
                                            <i class="fa fa-user"></i>
                                        </span>
                                                <input type="text" id="username4" class="form-control" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-xl-2 two_column_label_margintop text-lg-right">
                                            <label for="email4" class="control-label">E-mail</label>
                                        </div>
                                        <div class="col-lg-8 col-xl-4 two_column_signup_margintop">
                                            <div class="input-group input-group-prepend">
                                            <span class="input-group-text border-right-0 rounded-left">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                                <input type="text" id="email4" class="form-control" placeholder="E-mail">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 col-xl-2 text-lg-right">
                                            <label for="password4" class="col-form-label">Password</label>
                                        </div>
                                        <div class="col-lg-8 col-xl-4">
                                            <div class="input-group input-group-prepend">
                                            <span class="input-group-text border-right-0 rounded-left">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                                <input type="password" id="password4" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-xl-2 two_column_label_margintop text-lg-right">
                                            <label for="confirm4" class="col-form-label">Confirm Password</label>
                                        </div>
                                        <div class="col-lg-8 col-xl-4 two_column_signup_margintop">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text border-right-0 rounded-left">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                                <input type="password" id="confirm4" class="form-control" placeholder="Confirm Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 col-xl-2 text-lg-right">
                                            <label for="gender4" class="col-form-label">Gender</label>
                                        </div>
                                        <div class="col-lg-8 col-xl-4">
                                            <div class="input-group input-group-prepend">
                                            <span class="input-group-text border-right-0 rounded-left">
                                            <i class="fa fa-users"></i>
                                        </span>
                                                <select id="gender4" class="form-control">
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-xl-2 two_column_label_margintop text-lg-right">
                                            <label for="date4" class="col-form-label">DOB</label>
                                        </div>
                                        <div class="col-lg-8 col-xl-4 two_column_signup_margintop">
                                            <div class="input-group input-group-prepend">
                                                <span class="input-group-text border-right-0 rounded-left">D</span>
                                                <select id="date4" class="form-control form_lay_select_padding">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                    <option>13</option>
                                                    <option>14</option>
                                                    <option>15</option>
                                                    <option>16</option>
                                                    <option>17</option>
                                                    <option>18</option>
                                                    <option>19</option>
                                                    <option>20</option>
                                                    <option>21</option>
                                                    <option>22</option>
                                                    <option>23</option>
                                                    <option>24</option>
                                                    <option>25</option>
                                                    <option>26</option>
                                                    <option>27</option>
                                                    <option>28</option>
                                                    <option>29</option>
                                                    <option>30</option>
                                                    <option>31</option>
                                                </select>
                                                <span class="input-group-text border-left-0 border-right-0 rounded-0">M</span>
                                                <select class="form-control  form_lay_select_padding">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                                <span class="input-group-text border-left-0 border-right-0 rounded-0">Y</span>
                                                <select class="form-control form_lay_select_padding">
                                                    <option>2000</option>
                                                    <option>2001</option>
                                                    <option>2002</option>
                                                    <option>2003</option>
                                                    <option>2004</option>
                                                    <option>2005</option>
                                                    <option>2006</option>
                                                    <option>2007</option>
                                                    <option>2008</option>
                                                    <option>2009</option>
                                                    <option>2010</option>
                                                    <option>2011</option>
                                                    <option>2012</option>
                                                    <option>2013</option>
                                                    <option>2014</option>
                                                    <option>2015</option>
                                                    <option>2016</option>
                                                    <option>2017</option>
                                                    <option>2018</option>
                                                    <option>2019</option>
                                                    <option>2020</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- last name-->
                                    <div class="form-group row">
                                        <div class="col-lg-10  ml-auto">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label"></span>
                                                <span class="custom-control-description"> I Agree Terms to the
                                            <a href="#">Terms and Conditions</a></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-10  ml-auto">
                                            <button class="btn btn-primary layout_btn_prevent">Sign Up</button>
                                            <button class="btn btn-warning layout_btn_prevent">Cancel</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- two column sign up form-->
                <div class="col-12">
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            Query Layout
                        </div>
                        <div class="card-body m-t-10">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-10">
                                            <form class="form-horizontal">
                                                <fieldset>
                                                    <!-- Name input-->
                                                    <div class="form-group row m-t-25">
                                                        <div class="col-lg-12">
                                                            <h5>Basic Form</h5>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <label for="email5" class="col-form-label">
                                                                E-mail
                                                            </label>
                                                            <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                                                <input type="text" id="email5" class="form-control" placeholder="E-mail">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-12">
                                                            <label for="subject1" class="col-form-label">
                                                                Subject
                                                            </label>
                                                            <div class="input-group input-group-append">
                                                                <input type="text" id="subject1" class="form-control" placeholder="Subject">
                                                                <span class="input-group-text border-left-0 rounded-right"><i class="fa fa-text-width" aria-hidden="true"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-12">
                                                            <label for="query1" class="col-form-label">
                                                                Query
                                                            </label>
                                                            <div class="input-group float">
                                                                <textarea class="form-control" id="query1" rows="4" placeholder="Your Query"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- first name-->
                                                    <div class="form-group row">
                                                        <div class="col-lg-12">
                                                            <button class="btn btn-responsive layout_btn_prevent btn-primary">Submit</button>
                                                            <button class="btn btn-responsive layout_btn_prevent btn-warning">Cancel</button>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <form class="form-horizontal">
                                        <fieldset>
                                            <!-- Name input-->
                                            <div class="form-group row m-t-25">
                                                <div class="col-lg-11 ml-lg-auto">
                                                    <h5>Horizontal Form</h5>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-3 text-lg-right">
                                                    <label for="email6" class="col-form-label">E-mail</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                                        <input type="text" id="email6" class="form-control" placeholder="E-mail">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-3 text-lg-right">
                                                    <label for="subject2" class="col-form-label">Subject</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="input-group input-group-append">
                                                        <input type="text" id="subject2" class="form-control" placeholder="Subject">
                                                        <span class="input-group-text border-left-0 rounded-right"><i class="fa fa-text-width" aria-hidden="true"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-3 text-lg-right">
                                                    <label for="query2" class="col-form-label">Query</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="input-group">
                                                        <textarea id="query2" class="form-control" rows="4" placeholder="Your Query"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- first name-->
                                            <div class="form-group row">
                                                <div class="col-lg-9 ml-auto">
                                                    <button class="btn btn-responsive layout_btn_prevent btn-primary">Submit</button>
                                                    <button class="btn btn-responsive layout_btn_prevent btn-warning">Cancel</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Query Layout-->
                <!-- Horizontal Query layout-->
            </div>
        </div>
        <!-- /.inner -->
    </div>
    <!-- /.outer -->
@stop
{{-- page level scripts --}}
@section('footer_scripts')
    <!--Plugin scripts-->
    <script type="text/javascript" src="{{asset('vendors/intl-tel-input/js/intlTelInput.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/sweetalert/js/sweetalert2.min.js')}}"></script>
    <!--End of Plugin scripts-->
    <!--Page level scripts-->
    <script type="text/javascript" src="{{asset('js/pages/form_layouts.js')}}"></script>
    <!-- end of page level js -->
@stop
