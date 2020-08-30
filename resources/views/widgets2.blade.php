@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Widgets 2
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/swiper/css/swiper.min.css')}}"/>
    <!-- end of page level styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/pages/widgets.css')}}">

@stop
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-lg col-sm-4">
                    <h4 class="nav_top_align">
                        <i class="fa fa-anchor" aria-hidden="true"></i>
                        Widgets 2
                    </h4>
                </div>
                <div class="col-lg col-sm-8">
                    <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Widgets</a>
                        </li>
                        <li class="breadcrumb-item active">Widgets 2</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col-sm-6 col-12 col-lg">
                    <div class="widget_icon_bgclr icon_align bg-white">
                        <div class="bg_icon bg_icon_info float-left">
                            <i class="fa fa-heart-o text-info" aria-hidden="true"></i>
                        </div>
                        <div class="text-right">
                            <h3 id="widget_count1">2,436</h3>
                            <p>Income status</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-12 col-lg media_max_573">
                    <div class="widget_icon_bgclr icon_align bg-white eye_icon_border">
                        <div class="float-left progress_icon_fa">
                            <i class="fa fa-eye text-primary" aria-hidden="true"></i>
                        </div>
                        <div class="text-right">
                            <h3 id="widget_count2">8,569</h3>
                            <p>Visitors</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-12 col-lg media_max_991">
                    <div class="widget_icon_bgclr icon_align bg-white">
                        <div class="bg_icon bg_icon_success float-left">
                            <i class="fa fa-cart-plus text-success" aria-hidden="true"></i>
                        </div>
                        <div class="text-right">
                            <h3 id="widget_count3">4,859</h3>
                            <p>Sales</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-12 col-lg media_max_991">
                    <div class="widget_icon_bgclr icon_align bg-white">
                        <div class="bg_icon bg_icon_warning float-left">
                            <i class="fa fa-user text-warning" aria-hidden="true"></i>
                        </div>
                        <div class="text-right">
                            <h3 id="widget_count4">32,568</h3>
                            <p>Subscribers</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg col-md-6 m-t-35">
                    <img src="{{asset('img/widget_image1.jpg')}}" alt="Image missing" class="img-fluid"/>
                    <div class="bg-white image_text">
                        <div class="float-left">
                            <h5>Keriana Remillard</h5>
                            <span>Admin</span>
                        </div>
                        <div class="text-right">
                            <button class="widget_btn btn btn-primary">ADD</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="bg-white image_text">
                                <p>Lorem Ipsum has been the industry's standard dummy text ever
                                    since the 1500s.Lorem Ipsum has been the industry</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg col-md-6 m-t-35">
                    <div class="bg-white text-center">
                        <div class="p-t-25">
                            <img src="{{asset('img/authors/avatar1.jpg')}}" alt="Image missing"
                                 class="img-fluid rounded-circle" width="100"/>
                        </div>
                        <h5 class="m-t-15">Juana N. Wilson</h5>
                        <span>Saginaw</span>
                        <p class="m-t-15">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor.
                        </p>
                        <div class="widget_social_icons p-b-20">
                            <i class="fa fa-facebook fb_icon_color" aria-hidden="true"></i>
                            <i class="fa fa-twitter twitter_icon_color m-l-20" aria-hidden="true"></i>
                            <i class="fa fa-google-plus gplus_icon_color m-l-20" aria-hidden="true"></i>
                            <i class="fa fa-youtube youtube_icon_color m-l-20" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 col-md-12  m-t-35">
                    <div class="bg-white">
                        <div class="row p-d-20" id="jerome">
                            <div class="col-lg-3 col-md-4 col-4">
                                <img src="{{asset('img/images1.jpg')}}" alt="Image missing"
                                     class="img-fluid rounded-circle" width="100"/>
                            </div>
                            <div class="col-lg-9 col-md-8 col-8">
                                <h5>Jerome Y. Pan</h5>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley </p>
                                <!--<div class="clearfix hidden-xs-down hidden-sm-down hidden-lg-down hidden-xl-down">-->
                                <!--Pellentesque tincidunt vulputate euismod. Aenean sagittis sem ut-->
                                <!--pellentesque-->
                                <!--vestibulum. Donec aliquam, lectus eget consectetur rhoncus, sapien lectus-->
                                <!--vehicula purus.-->
                                <!--</div>-->
                                <div>
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                    <i class="fa fa-twitter m-l-20" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus m-l-20" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bg-white m-t-35">
                                <div class="row">
                                    <div class="col-sm-4 col-4 m-t-15">
                                        <div class="bg-white p-d-4 text-center">
                                            <h4 class="fb_icon_color">Facebook</h4>
                                            <span>60.258</span>

                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-4 m-t-15">
                                        <div class="bg-white p-d-4 text-center">
                                            <h4 class="twitter_icon_color">Twitter</h4>
                                            <span>25.108</span>

                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-4 m-t-15">
                                        <div class="bg-white p-d-4 text-center">
                                            <h4 class="gplus_icon_color">Google Plus</h4>
                                            <span>15.223</span>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 col-4 text-center icons_border">
                                        <div class="fb_border_bottom">
                                            <h2 class="m-t-20 fb_icon_color"><span id="fb_count">60 </span>%</h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-4 text-center icons_border">
                                        <div class="twitter_border_bottom">
                                            <h2 class="m-t-20 twitter_icon_color"><span
                                                        id="twitter_count">25 </span>%</h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-4 text-center">
                                        <div class="gplus_border_bottom">
                                            <h2 class="m-t-20 gplus_icon_color"><span id="gplus_count">15 </span>%
                                            </h2>
                                        </div>
                                    </div>
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4 m-t-35">
                    <div class="bg-white">
                        <h4 class="p-d-10 chat_bottom">Chat</h4>
                        <div class="chat-conversation p-d-10 m-t-25">
                            <ul class="conversation-list">
                                <li class="clearfix odd">
                                    <div class="chat-avatar">
                                        <img src="{{asset('img/widget_image3.jpg')}}" alt="male">
                                        <i>06:22</i>
                                    </div>
                                    <div class="conversation-text">
                                        <div class="ctext-wrap">
                                            <i>Me</i>
                                            <p>
                                                Hello Angeline, how are you?
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="clearfix  m-t-20">
                                    <div class="chat-avatar">
                                        <img src="{{asset('img/authors/avatar7.jpg')}}" alt="Female">
                                        <i>06:23</i>
                                    </div>
                                    <div class="conversation-text">
                                        <div class="ctext-wrap">
                                            <i>Angeline</i>
                                            <p>
                                                Hi David, I am fine. How about you?
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="clearfix odd m-t-20">
                                    <div class="chat-avatar">
                                        <img src="{{asset('img/widget_image3.jpg')}}" alt="male">
                                        <i>06:23</i>
                                    </div>
                                    <div class="conversation-text">
                                        <div class="ctext-wrap">
                                            <i>Me</i>
                                            <p>
                                                Not too bad.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="clearfix m-t-20">
                                    <div class="chat-avatar">
                                        <img src="{{asset('img/authors/avatar7.jpg')}}" alt="male">
                                        <i>06:24</i>
                                    </div>
                                    <div class="conversation-text">
                                        <div class="ctext-wrap">
                                            <i>Angeline</i>
                                            <p>
                                                It’s been a long time since we last met?
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <form id="main_input_box">
                                <div class="row">
                                    <div class="col-12 m-b-15">
                                        <div class="input-group chat_btn">
                                            <input type="search"
                                                   class="form-control chat-input custom_textbox"
                                                   id="custom_textbox" placeholder="Enter your text"
                                                   required>
                                            <span class="input-group-append">
                                                    <button class="btn btn-primary waves-effect waves-light"
                                                            type="submit"><i class="fa fa-paper-plane text-white"
                                                                             aria-hidden="true"></i></button>
                                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--</div>-->
                    </div>
                    <!--</div>-->
                </div>
                <div class="col-12 col-lg-4 m-t-35">
                    <div class="widget_section">
                        <div class="user-name bg-primary">
                            <h4 class="text-center text-white p-t-25">Julie J. Wells</h4>
                            <small>Manchester</small>
                        </div>
                        <div class="text-center">
                            <img src="{{asset('img/authors/avatar7.jpg')}}" class="img-fluid avatar_wid" alt="female"/>
                        </div>
                        <button class="btn btn-success m-t-15">FOLLOW</button>
                        <p class="m-t-15 text-justify p-d-10">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <div class="row">
                            <!--<div class="bg-mint">-->
                            <div class="col-lg-12">
                                <div class="bg-primary">
                                    <div class="row p-t-15">
                                        <div class="col-4">
                                            <h4 class="text-white" id="followers_count">962</h4>
                                            <p class="text-white">Followers</p>
                                        </div>
                                        <div class="col-4">
                                            <h4 class="text-white" id="comments_count">649</h4>
                                            <p class="text-white">Comments</p>
                                        </div>
                                        <div class="col-4">
                                            <h4 class="text-white" id="likes_count">4236</h4>
                                            <p class="text-white">Likes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 m-t-35">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="swiper-container widget_swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="{{asset('img/swiper_image1.jpg')}}" alt="Image missing" class="img-fluid"/>
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{asset('img/swiper_image2.jpg')}}" alt="Image missing" class="img-fluid"/>
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{asset('img/swiper_image3.jpg')}}" alt="Image missing" class="img-fluid"/>
                                    </div>
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                                <!-- Add Arrows -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-d-10 bg-white">
                                <h4 class="text-info">Image Blog</h4>
                                <div>Team members Images</div>
                                <div class="m-t-15 text-justify">Lorem Ipsum has been the industry's standard dummy text ever
                                    since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type
                                    specimen book.The lorem ipsum text is typically a scrambled section of De finibus bonorum et malorum, a 1st-century BC Latin text by Cicero.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bg-white p-d-10">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-secondary btn-sm"><i class="fa fa-thumbs-up"></i>
                                            Like
                                        </button>
                                        <button class="btn btn-danger btn-sm"><i class="fa fa-heart"></i> Love
                                        </button>
                                        <button class="btn btn-primary btn-sm float-right">Read More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-5 m-t-35">
                    <div class="row">
                        <div class="col-lg-12">
                            <img src="{{asset('img/swiper_image4.jpg')}}" class="img-fluid" alt="Image missing"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bg-white">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <img src="{{asset('img/images.jpg')}}" alt="Image missing"
                                             class="img-fluid rounded-circle image_align" width="100"/>
                                        <span class="image_name">Harley </span>
                                        <span class="fa-stack fa-lg float-right icon_margin">
                                                    <i class="fa fa-circle fa-stack-2x text-mint icon_bg"></i>
                                                    <i class="fa fa-envelope-o fa-stack-1x text-white icon_fontsize"></i>
                                                </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 m-t-35">
                                        <div class="swiper-container widget_swiper2 pb-20">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide swiper_slide1">
                                                    <img src="{{asset('img/swiper_image1.jpg')}}" alt="Image missing"
                                                         class="img-fluid"/>
                                                </div>
                                                <div class="swiper-slide swiper_slide2">
                                                    <img src="{{asset('img/swiper_image2.jpg')}}" alt="Image missing"
                                                         class="img-fluid"/>
                                                </div>
                                                <div class="swiper-slide swiper_slide3">
                                                    <img src="{{asset('img/swiper_image3.jpg')}}" alt="Image missing"
                                                         class="img-fluid"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 m-t-35">
                    <div class="user-name1 text-center">
                        <div class="bg-mint">
                            <div class="text-center">
                                <img src="{{asset('img/images3.jpg')}}" class="img-fluid avatar_wid avatar1" alt="female"/>
                            </div>
                            <span class="fa-stack fa-lg widget_plus_icon">
                                    <i class="fa fa-circle fa-stack-2x text-white"></i>
                                    <i class="fa fa-plus fa-stack-1x fa-inverse text-mint" aria-hidden="true"></i>
                                </span>
                            <h4 class="text-white">Shawn B. Mitchell</h4>
                            <span>Saint Louis</span>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="bg-mint">
                                    <ul id="clothing-nav" class="nav nav-tabs" role="tablist">
                                        <li class="nav-item m-t-10">
                                            <a class="nav-link tab_about text-white" href="#tab1" role="tab" id="about-tab"
                                               data-toggle="tab">About</a>
                                        </li>
                                        <li class="nav-item m-t-10">
                                            <a class="nav-link tab_about text-white" href="#tab2" role="tab"
                                               id="contact-tab"
                                               data-toggle="tab">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Content Panel -->
                                <div class="bg-white p-d-10">
                                    <div id="clothing-nav-content" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade show active text-left"
                                             id="tab1">
                                            <p>Welcome home! Click on the tabs to see the content change.</p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade text-left" id="tab2">
                                            <p>A hat is a head covering. It can be worn for protection against
                                                the
                                                elements.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 m-t-35">
                    <img src="{{asset('img/swiper_image1.jpg')}}" alt="Image missing" class="img-fluid"/>
                    <div class="bg-white image_text">
                        <div class="float-left">
                            <h5>Darin B. Tulley</h5>
                            <span>Madison</span>
                        </div>
                        <div class="text-right">
                            <button class="widget_btn btn btn-info">ADD</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.inner -->
    </div>
    <!-- /.outer -->
@stop
@section('footer_scripts')

    <script type="text/javascript" src="{{asset('vendors/moment/js/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/slimscroll/js/jquery.slimscroll.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/countUp.js/js/countUp.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/swiper/js/swiper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/pages/widget2.js')}}"></script>
@stop
