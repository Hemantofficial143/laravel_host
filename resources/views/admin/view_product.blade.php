@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Product Profile
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--Plugin css-->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/jasny-bootstrap/css/jasny-bootstrap.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/fullcalendar/css/fullcalendar.min.css')}}"/>
    <!--End off plugin css-->
    <!--Page level css-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/timeline2.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/calendar_custom.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/profile.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/gallery.css')}}"/>
    <!--end of page level css-->
@stop


{{-- Page content --}}
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-lg-6 col-sm-5 col-12">
                    <h4 class="nav_top_align">
                        <i class="fa fa-user"></i>
                        Product Profile
                    </h4>
                </div>
                <div class="col-lg-6 col-sm-7 col-12">
                    <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Products</a>
                        </li>
                        <li class="active breadcrumb-item">Product Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 m-t-35">
                            <div class="text-center">
                                <div class="form-group">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new  admin_img_width">
                                            <img src="{{ $product->image }}" alt="{{ $product->title }}" class="" height=""></div>
                                        <div class="fileinput-preview fileinput-exists thumb_zoom zoom admin_img_width"></div>
                                        <div class="btn_file_position">
                                                   
                                            <a href="#" class="btn btn-warning fileinput-exists"
                                               data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 m-t-25">
                            <div>
                                <ul class="nav nav-inline view_user_nav_padding" id="content-tab">
                                    <li class="nav-item card_nav_hover">
                                        <a class="nav-link active" href="#user" id="home-tab"
                                           data-toggle="tab" aria-expanded="true">Product Details</a>
                                    </li>
                                </ul>
                                <div id="clothing-nav-content" class="tab-content m-t-10">
                                    <div role="tabpanel" class="tab-pane fade show active" id="user">
                                        <table class="table" id="users">
                                            <tr>
                                                <td>Product Title</td>
                                                <td class="inline_edit">
                                                        <span 
                                                              data-title="Edit User Name">{{ $product->title }}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Product Brand</td>
                                                <td class="inline_edit">
                                                        <span 
                                                              data-title="Edit User Name">{{ $product->brand }}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Product Category</td>
                                                <td class="inline_edit">
                                                        <span 
                                                              data-title="Edit User Name">{{ $product->category }}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Product Description</td>
                                                <td class="inline_edit">
                                                        <span 
                                                              data-title="Edit User Name">{{ $product->description }}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Product Price</td>
                                                <td class="inline_edit">
                                                        <span 
                                                              data-title="Edit User Name">{{ $product->price }}</span>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab2">
                                        <div class="card_nav_body_padding">
                                            <p>
                                                Howdy, I'm in About Me.
                                            </p>
                                            <p class="text-justify">
                                                Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                                ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                                consequat. Duis autem vel eum iriure dolor in hendrerit in
                                                vulputate velit esse molestie consequat. Ut wisi enim ad
                                                minim veniam, quis nostrud exerci tation.
                                            </p>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab3">
                                        <div class="card_nav_body_padding follower_images">
                                            <div class="row">
                                                <div class="col-sm-3 col-xl-2">
                                                    <div class="img">
                                                        <a href="#">
                                                            <img src="{{asset('img/mailbox_imgs/2.jpg')}}" class="rounded-circle" alt="friend">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-sm-9 col-xl-9">
                                                    <div class="details">
                                                        <div class="name">
                                                            <a href="#">Scarlett Johansson</a>
                                                        </div>
                                                        <div class="time">
                                                            <i class="fa fa-clock-o"></i> Last seen: 7 minutes ago
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-t-15">
                                                <div class="col-sm-3 col-xl-2">
                                                    <div class="img">
                                                        <a href="#">
                                                            <img src="{{asset('img/mailbox_imgs/3.jpg')}}" class="rounded-circle" alt="friend">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-sm-9 col-xl-10">
                                                    <div class="details">
                                                        <div class="name">
                                                            <a href="#">Mila Kunis</a>
                                                        </div>
                                                        <div class="time">
                                                            <i class="fa fa-clock-o"></i> Online
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-t-15">
                                                <div class="col-xl-2 col-sm-3">
                                                    <div class="img">
                                                        <a href="#">
                                                            <img src="{{asset('img/mailbox_imgs/8.jpg')}}" class="rounded-circle" alt="friend">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-10 col-sm-9">
                                                    <div class="details">
                                                        <div class="name">
                                                            <a href="#">George Clooney</a>
                                                        </div>
                                                        <div class="time">
                                                            <i class="fa fa-clock-o"></i> Last seen: 1 hour ago
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-t-15">
                                                <div class="col-xl-2 col-sm-3">
                                                    <div class="img">
                                                        <a href="#">
                                                            <img src="{{asset('img/mailbox_imgs/6.jpg')}}" class="rounded-circle" alt="friend">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-10 col-sm-9">
                                                    <div class="details">
                                                        <div class="name">
                                                            <a href="#">Robert Downey Jr.</a>
                                                        </div>
                                                        <div class="time">
                                                            <i class="fa fa-clock-o"></i> Online
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-t-15">
                                                <div class="col-xl-2 col-sm-3">
                                                    <div class="img">
                                                        <a href="#">
                                                            <img src="{{asset('img/mailbox_imgs/5.jpg')}}" class="rounded-circle" alt="friend">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-10 col-sm-9">
                                                    <div class="details">
                                                        <div class="name">
                                                            <a href="#">Ryan Gossling</a>
                                                        </div>
                                                        <div class="time">
                                                            <i class="fa fa-clock-o"></i> Last seen: 45 minutes ago
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
            </div>
        </div>
    </div>
    <!-- /.outer -->
@stop
{{-- page level scripts --}}
@section('footer_scripts')
    <!--Plugin scripts-->
    <script type="text/javascript" src="{{asset('vendors/jasny-bootstrap/js/jasny-bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/bootstrap_calendar/js/bootstrap_calendar.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/moment/js/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/fullcalendar/js/fullcalendar.min.js')}}"></script>
    <!--End of Plugin scripts-->
    <!--Page level scripts-->
    <script type="text/javascript" src="{{asset('js/pages/mini_calendar.js')}}"></script>
    <!--End of Page level scripts-->
@stop
