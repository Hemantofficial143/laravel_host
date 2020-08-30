@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Widgets 1
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!-- end of page level styles -->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/swiper/css/swiper.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/bootstrap-switch/css/bootstrap-switch.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/switchery/css/switchery.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/pages/widgets.css')}}">
@stop
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-lg-6 col-sm-5">
                    <h4 class="nav_top_align">
                        <i class="fa fa-anchor" aria-hidden="true"></i>
                        Widgets 1
                    </h4>
                </div>
                <div class="col-lg-6 col-sm-7">
                    <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index">
                                <i class="fa fa-home" aria-hidden="true"></i> Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Widgets</a>
                        </li>
                        <li class="breadcrumb-item active">Widgets 1</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="icon_align bg-white section_border">
                        <div class="float-left progress_icon">
                            <i class="fa fa-shopping-cart text-success" aria-hidden="true"></i>
                        </div>
                        <div class="text-right">
                            <h3 id="widget_count5">1,242</h3>
                            <p>Sales</p>
                        </div>
                        <h5>Target <span class="float-right">73%</span></h5>
                        <div class="progress">
                            <div class="progress-bar progress-striped bg-success" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 media_max_573">
                    <div class="widget_icon_bgclr icon_align bg-white section_border">
                        <div class="bg_icon bg_icon_primary float-left m-t-5">
                            <i class="fa fa-users text-primary" aria-hidden="true"></i>
                        </div>
                        <div class="text-right">
                            <h3 id="widget_count6">254</h3>
                            <p>Users</p>
                        </div>
                        <h5>Target <span class="float-right">35%</span></h5>
                        <div class="progress">
                            <div class="progress-bar progress-striped bg-primary" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 media_max_991">
                    <div class="widget_icon_bgclr icon_align bg-white section_border">
                        <div class="bg_icon bg_icon_warning float-left m-t-5">
                            <i class="fa fa-eye text-warning" aria-hidden="true"></i>
                        </div>
                        <div class="text-right">
                            <h3 id="widget_count7">685</h3>
                            <p>Visitors</p>
                        </div>
                        <h5>Target <span class="float-right">50%</span></h5>
                        <div class="progress">
                            <div class="progress-bar progress-striped bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 media_max_991">
                    <div class="icon_align bg-white widget_border">
                        <div class="float-left progress_icon">
                            <i class="fa fa-usd text-info" aria-hidden="true"></i>
                        </div>
                        <div class="text-right">
                            <h3 id="widget_count8">485</h3>
                            <p>Total Sales</p>
                        </div>
                        <h5>Target <span class="float-right">20%</span></h5>
                        <div class="progress">
                            <div class="progress-bar progress-striped bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 m-t-35">
                    <div class="social-counter text-center">
                        <ul class="m-b-0">
                            <li class="facebook">
                                <a href="#">
                                    <div class="row">
                                        <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-facebook"></i></span></div>
                                        <div class="col-8 text-left social_fa_top"><span class="count"><span id="fb_count">354</span>K</span> Likes</div>
                                    </div>
                                </a>
                            </li>
                            <li class="twitter">
                                <a href="#">
                                    <div class="row">
                                        <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-twitter"></i></span></div>
                                        <div class="col-8 text-left social_fa_top"><span class="count" id="tw_count">547</span> Followers</div>
                                    </div>
                                </a>
                            </li>
                            <li class="google">
                                <a href="#">
                                    <div class="row">
                                        <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-google-plus"></i></span></div>
                                        <div class="col-8 text-left social_fa_top"><span class="count" id="g+_count">678</span> Followers</div>
                                    </div>
                                </a>
                            </li>
                            <li class="youtube">
                                <a href="#">
                                    <div class="row">
                                        <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-youtube"></i></span></div>
                                        <div class="col-8 text-left social_fa_top"><span class="count"><span id="youtube_count">21</span>K</span> Subscribers</div>
                                    </div>
                                </a>
                            </li>
                            <li class="soundcloud">
                                <a href="#">
                                    <div class="row">
                                        <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-soundcloud"></i></span></div>
                                        <div class="col-8 text-left social_fa_top"><span class="count" id="sc_count">845</span> Followers</div>
                                    </div>
                                </a>
                            </li>
                            <li class="instagram">
                                <a href="#">
                                    <div class="row">
                                        <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-instagram"></i></span></div>
                                        <div class="col-8 text-left social_fa_top"><span class="count">2M</span> Followers</div>
                                    </div>
                                </a>
                            </li>
                            <li class="linkedin">
                                <a href="#">
                                    <div class="row">
                                        <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-linkedin"></i></span></div>
                                        <div class="col-8 text-left social_fa_top"><span class="count" id="in_count">124</span> Followers</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 m-t-35">
                    <div class="bg-white section_border">
                        <h4 class="header_align">Shoes</h4><hr />
                        <div class="header_align">
                            <h5 class="m-t-15">Men's Shoes</h5>
                            <h5 class="text-mint float-left">Price</h5>
                            <h5 class="text-danger float-right">$25</h5>
                            <div class="swiper-container men_shoes_swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="{{asset('img/shoesm1.png')}}" alt="Image missing" class="img-fluid"/>
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{asset('img/shoesm2.png')}}" alt="Image missing" class="img-fluid"/>
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{asset('img/shoesm3.png')}}" alt="Image missing" class="img-fluid"/>
                                    </div>
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <div class="header_align">
                            <h5>Women's Shoes</h5>
                            <h5 class="text-mint float-left">Price</h5>
                            <h5 class="text-danger float-right">$35</h5>
                            <div class="swiper-container women_shoes_swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="{{asset('img/shoes.png')}}" alt="Image missing" class="img-fluid"/>
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{asset('img/shoes2.png')}}" alt="Image missing" class="img-fluid"/>
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{asset('img/shoes3.png')}}" alt="Image missing" class="img-fluid"/>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 m-t-35">
                    <div class="card">
                        <div class="card-header bg-white text-center">
                            Your Match
                        </div>
                        <div class="card-body m-t-35">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{asset('img/images.jpg')}}" alt="admin" class="rounded-circle img-fluid">
                                </div>
                                <div class="col-4 text-center match_text">
                                    <h3>70%</h3>
                                    <h5>Matched</h5>
                                </div>
                                <div class="col-4">
                                    <img src="{{asset('img/authors/avatar7.jpg')}}" alt="admin" class="rounded-circle img-fluid avatar_rounded">
                                </div>
                            </div>
                            <div>
                                <div class="row m-t-5">
                                    <div class="col-12 text-center">
                                        Sports
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row m-t-5 mb-2">
                                            <div class="col-6 progress_rtl">
                                                <div class="progress">
                                                    <div class="progress-bar bg-mint" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-6 progress_ltr">
                                                <div class="progress">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-5">
                                    <div class="col-12 text-center">
                                        Video Games
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row m-t-5 mb-2">
                                            <div class="col-6 progress_rtl">
                                                <div class="progress">
                                                    <div class="progress-bar bg-mint" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-6 progress_ltr">
                                                <div class="progress">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-5">
                                    <div class="col-12 text-center">
                                        Movies
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row m-t-5 mb-2">
                                            <div class="col-6 progress_rtl">
                                                <div class="progress">
                                                    <div class="progress-bar bg-mint" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-6 progress_ltr">
                                                <div class="progress">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-5">
                                    <div class="col-12 text-center">
                                        Music
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row m-t-5 mb-2">
                                            <div class="col-6 progress_rtl">
                                                <div class="progress">
                                                    <div class="progress-bar bg-mint" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-6 progress_ltr">
                                                <div class="progress">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer bg-white text-center">
                            <button class="btn btn-primary btn-block">CHECK</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 m-t-35">
                    <div class="bg-white section_border">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h4 class="header_align">Log In</h4>
                                <hr/>
                            </div>
                            <div class="col-sm-6 col-12 m-t-5">
                                <form action="index" id="widgets_login_validator" method="get" class="login_validator header_align">
                                    <div class="form-group">
                                        <label for="email" class="col-form-label"> E-mail</label>
                                        <div class="input-group input-group-prepend">
                        <span class="input-group-text input_email"><i
                                    class="fa fa-envelope text-primary"></i></span>
                                            <input type="text" class="form-control  form-control-md" id="email" name="email" placeholder="E-mail">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-form-label">Password</label>
                                        <div class="input-group">
                        <span class="input-group-text addon_password"><i
                                    class="fa fa-lock text-primary"></i></span>
                                            <input type="password" class="form-control form-control-md" id="password"   name="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12 m-t-15">
                                                <input type="submit" value="Log In" class="btn btn-primary btn-block login_button">
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="row">
                                    <div class="col-12 m-t-25">
                                        <div class="icon-white btn-facebook icon_padding loginpage_border social_lgin_align m-l-10">
                                            <i class="fa fa-facebook text-white " aria-hidden="true"></i>
                                            <span class="text-white icon_padding text-center question_mark p-l-5">Log In With Facebook</span>
                                        </div>
                                    </div>
                                    <div class="col-12 pull-lg-right m-t-10">
                                        <div class="icon-white btn-google icon_padding loginpage_border social_lgin_align m-l-10">
                                            <i class="fa fa-google-plus text-white" aria-hidden="true"></i>
                                            <span class="text-white icon_padding question_mark p-l-5">Log In With Google+</span>
                                        </div>
                                    </div>
                                    <div class="col-12 pull-lg-right m-t-10">
                                        <div class="icon-white btn-twitter icon_padding loginpage_border social_lgin_align m-l-10">
                                            <i class="fa fa-twitter text-white" aria-hidden="true"></i>
                                            <span class="text-white icon_padding question_mark p-l-5">Log In With Twitter</span>
                                        </div>
                                    </div>
                                    <div class="col-12  pull-lg-right m-t-10 m-b-20">
                                        <div class="icon-white btn-instagram icon_padding loginpage_border social_lgin_align m-l-10">
                                            <i class="fa fa-instagram text-white"></i>
                                            <span class="text-white icon_padding question_mark p-l-5">Log In With Instagram</span>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                <div class="col-lg-5 m-t-35">
                    <div class="row">
                        <div class="col-12">
                            <div class="weather_img">
                                <div class="row header_align">
                                    <div class="col-sm-8 col-7 text-white info">
                                        <div class="city">City: Bangkok</div>
                                        <div class="night">Night - 21:17 PM</div>

                                        <div class="temp">4<sup>o</sup></div>
                                        <div class="wind">
                                            <span>28 km/h</span>
                                        </div>
                                    </div>
                                    <div class="icon col-5 col-sm-4">
                                        <img src="{{asset('img/weather1.png')}}" alt="weather" class="img-fluid">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="background_opacity">
                                            <div class="row header_align">
                                                <div class="col-2 border_right days_margin_top">
                                                    <div class="day text-center">
                                                        <div class="day_font">Mon</div>
                                                        <div>
                                                            <img src="{{asset('img/w5.png')}}" alt="weather" class="img-fluid">
                                                        </div>
                                                        <div class="day_font">30<sup>o</sup></div>
                                                    </div>
                                                </div>
                                                <div class="col-2 border_right days_margin_top">
                                                    <div class="day text-center">
                                                        <div class="day_font">Tue</div>
                                                        <div>
                                                            <img src="{{asset('img/w2.png')}}" alt="weather" class="img-fluid">
                                                        </div>
                                                        <div class="day_font">29<sup>o</sup></div>
                                                    </div>
                                                </div>
                                                <div class="col-2 border_right days_margin_top">
                                                    <div class="day text-center">
                                                        <div class="day_font">Wed</div>
                                                        <div>
                                                            <img src="{{asset('img/w3.png')}}" alt="weather" class="img-fluid">
                                                        </div>
                                                        <div class="day_font">34<sup>o</sup></div>
                                                    </div>
                                                </div>
                                                <div class="col-2 border_right days_margin_top">
                                                    <div class="day text-center">
                                                        <div class="day_font">Thu</div>
                                                        <div>
                                                            <img src="{{asset('img/w4.png')}}" alt="weather" class="img-fluid">
                                                        </div>
                                                        <div class="day_font">32<sup>o</sup></div>
                                                    </div>
                                                </div>
                                                <div class="col-2 border_right days_margin_top">
                                                    <div class="day text-center">
                                                        <div class="day_font">Fri</div>
                                                        <div>
                                                            <img src="{{asset('img/w5.png')}}" alt="weather" class="img-fluid">
                                                        </div>
                                                        <div class="day_font">35<sup>o</sup></div>
                                                    </div>
                                                </div>
                                                <div class="col-2 days_margin_top">
                                                    <div class="day text-center">
                                                        <div class="day_font">Sat</div>
                                                        <div>
                                                            <img src="{{asset('img/w2.png')}}" alt="weather" class="img-fluid">
                                                        </div>
                                                        <div class="day_font">36<sup>o</sup></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12 m-t-35">
                    <div class="text-center pricing_bg pricing_info section_border">
                        <h3 class="m-t-10">Platinum Plan</h3>
                        <div class="mx-auto pricing_align">
                            <div class="half top text-white mx-auto">
                                <sup class="dollar_symbol">$</sup>
                                <span class="mont" id="platinum_plan">400</span>
                            </div>
                            <div class="half bottom mx-auto">
                                <p class="pricing_color">month</p>
                            </div>
                        </div>
                        <p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, maiores!</strong>
                        </p>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, ex!</p>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <button class="btn btn-secondary btn-block mb-1">CHOOSE THIS
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 m-t-35">
                    <div class="card payment">
                        <div class="card-header bg-warning text-center">
                            GOLD
                        </div>
                        <div class="bg-white">
                            <div class="card-body m-t-15">
                                <div class="amount text-center">
                                    <span><sup class="dollar_symbol"><strong>$</strong></sup></span><span class="price" id="gold">330</span><span>/month</span>
                                </div>
                                <div class="text-center">
                                    <div>Upto 25 projects</div>
                                    <div>Upto 100 users</div>
                                    <div class="m-b-15">125 GB storage</div>
                                    <hr/>
                                </div>
                                <div class="text-center">
                                    <p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, maiores!</strong>
                                    </p>
                                    <hr>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    <hr>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipisicing maiores.</div>
                                </div>
                            </div>
                            <div class="card-footer bg-white text-center">
                                <button class="btn btn-light btn-block get_plan_warning">GET PLAN</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="bg-warning m-t-35 header_align">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="row">
                                    <div class="col-12 float-left">
                                        <span class="current-date"></span>
                                    </div>
                                    <div class="col-12">
                                        <span class="time float-right "></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="m-t-35 bg-primary header_align">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="row">
                                    <div class="col-3 float-left">
                                        <img src="{{asset('img/authors/avatar1.jpg')}}" alt="Image missing" class="rounded-circle" height="50" width="50"/>

                                    </div>
                                    <div class="col-7 float-left">

                                        <h4 class="text-white">Juana N. Wilson</h4>
                                        juana@gmail.com

                                    </div>

                                    <div class="col-2 float-right fa_heart_size">
                                        <i class="fa fa-facebook text-white"></i>
                                    </div>
                                    <div class="col-12 m-t-10 text-justify">
                                        <div>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.The lorem ipsum text is typically a scrambled section.</div>
                                        <div class="m-t-5">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.when an unknown printer took a galley </div>
                                    </div>
                                    <div class="col-12 fa_heart_size">
                                        <i class="fa fa-heart-o text-white float-right p-l-5"></i><i class="fa fa-share-alt text-white float-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-12 m-t-35 text-white text-center">
                    <div class="row">
                        <div class="col-12">
                            <div class="bg-facebook  social_border_bottom">
                                <i class="fa fa-facebook fb_font"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 p-r-0">
                            <div class="bg-pinterest">
                                <i class="fa fa-pinterest pinterest_font"></i>
                            </div>
                        </div>
                        <div class="col-6 p-l-0">
                            <div class="bg-gplus social_border_bottom">
                                <i class="fa fa-google-plus gplus_font"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 p-r-0">
                            <div class="bg-instagram social_border_bottom">
                                <i class="fa fa-instagram instagram_font"></i>
                            </div>
                        </div>
                        <div class="col-6 p-l-0">
                            <div class="bg-flickr social_border_bottom">
                                <i class="fa fa-flickr flickr_font"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 p-r-0">
                            <div class="bg-youtube social_border_bottom">
                                <i class="fa fa-youtube youtube_font"></i>
                            </div>
                        </div>
                        <div class="col-6 p-l-0">
                            <div class="bg-linkedin social_border_bottom">
                                <i class="fa fa-linkedin linkedin_font"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bg-twitter">
                                <i class="fa fa-twitter twitter_font"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('footer_scripts')
    <script type="text/javascript" src="{{asset('vendors/circliful/js/jquery.circliful.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/moment/js/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/countUp.js/js/countUp.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/swiper/js/swiper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/switchery/js/switchery.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/pages/widget1.js')}}"></script>
@stop
