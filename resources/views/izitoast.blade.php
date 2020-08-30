@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Izi toastr
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--Plugin styles -->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/izitoast/css/iziToast.min.css')}}" />
    <!--End of plugin styles-->
@stop
@section('content')
    <header class="head">

        <div class="main-bar">
            <div class="row">
                <div class="col-sm-5 col-12">
                    <h4 class="nav_top_align">
                        <i class="fa fa-anchor"></i>
                        Izi-Toast
                    </h4>
                </div>
                <div class="col-sm-7 col-12">
                    <div class="float-right">
                        <ol class="breadcrumb nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="index">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Pages</a>
                            </li>
                            <li class="breadcrumb-item active">Izi-Toast</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="outer notifications_page">
        <div class="inner bg-container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header bg-white">
                            Basic Toast
                        </div>
                        <div class="card-body izi_notifications">
                            <div class="row">
                                <div class="col m-t-35">
                                    <h5>Basic toast with title and message</h5>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="title">Title</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="message">Message</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="basic">Basic</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="btn_show">Show</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="btn_info">Info</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="btn_success">Success</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="btn_warning">Warning</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="btn_error">Error</button>
                                </div>
                            </div>
                            <div class="m-t-35 row">
                                <div class="col">
                                    <h5>Different colored toasters</h5>
                                    <button class="btn btn-primary m-r-20 m-t-10" id="alert_primary">Alert Primary</button>
                                    <button class="btn btn-success m-r-20 m-t-10" id="alert_success">Alert Success</button>
                                    <button class="btn btn-info m-r-20 m-t-10" id="alert_info">Alert Info</button>
                                    <button class="btn btn-warning m-r-20 m-t-10" id="alert_warning">Alert Warning</button>
                                    <button class="btn btn-danger m-r-20 m-t-10" id="alert_danger">Alert Danger</button>
                                    <button class="btn btn-mint m-r-20 m-t-10" id="alert_mint">Alert Mint</button>
                                </div>
                            </div>
                            <div class="m-t-35 row">
                                <div class="col">
                                    <h5>Toastr with Icons, Images and layouts</h5>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="font_icon">Font Icon</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="icon_color">Icon Color</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="toast_image">Image</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="image_width">Image Width</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="layout1">Layout Small</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="layout2">Layout Medium</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="zindex">Z-index</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="balloon">Balloon</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="close_false">Close</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="rtl">Rtl</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card m-t-35">
                        <div class="card-header bg-white ">
                            Toastr in different styles
                        </div>
                        <div class="card-body izi_notifications m-t-35">
                            <div class="row">
                                <div class="col">
                                    <h5>Fade out toastr styles</h5>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="fadeOut">fadeOut</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="fadeOutUp">fadeOutUp</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="fadeOutDown">fadeOutDown</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="fadeOutLeft">fadeOutLeft</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="fadeOutRight">fadeOutRight</button>
                                </div>
                            </div>
                            <div class="m-t-35 row">
                                <div class="col">
                                    <h5>Toast in different alignments</h5>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="center">center</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="bottomLeft">Bottom Left</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="bottomRight">Bottom right</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="topLeft">Top Left</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="top_right">Top Right</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="center_bottom">Center Bottom</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="center_top">Center Top</button>
                                </div>
                            </div>
                            <div class="m-t-35 row">
                                <div class="col">
                                    <h5>Fade in toastr styles</h5>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="fadeIn">fadeIn</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="fadeInUp">fadeInUp</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="fadeInDown">fadeInDown</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="fadeInLeft">fadeInLeft</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="fadeInRight">fadeInRight</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="bounceInUp">bounceInUp</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="bounceInDown">bounceInDown</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="bounceInLeft">bounceInLeft</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="bounceInRight">bounceInRight</button>
                                </div>
                            </div>
                            <div class="m-t-35 row">
                                <div class="col">
                                    <h5>Different types of toasts</h5>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="target">Target</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="timeout">Timeout</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="pauseon_hover">Pause on hover</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="reset_hover">reset on hover</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="progress_bar">Without Progress bar</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="progress_bar_color">Progress bar color</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="animate_inside">Animate Inside True</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="animate_inside_false">Animate Inside False</button>
                                    <button class="btn btn-secondary m-r-20 m-t-10" id="buttons">Buttons</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="target_section"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.inner -->
        </div>
        <!-- /.outer -->
    </div>
@stop
@section('footer_scripts')
    <!-- Plugin scripts -->
    <script type="text/javascript" src="{{asset('vendors/izitoast/js/iziToast.min.js')}}"></script>
    <!--End of plugin scripts-->
    <!--Page level scripts-->
    <script type="text/javascript" src="{{asset('js/pages/izi_toastr.js')}}"></script>
    <!-- end of page level scripts-->
@stop