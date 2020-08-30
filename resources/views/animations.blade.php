@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Animations
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--plugin style-->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/animate/css/animate.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/hover/css/hover-min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/wow/css/animate.css')}}"/>
    <!-- end of plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/animations.css')}}"/>
    <!--End of page level styles-->
@stop


{{-- Page content --}}
@section('content')
    <header class="head">
        <div class="main-bar row">
            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-4">
                    <h4 class="nav_top_align">
                        <i class="fa fa-anchor"></i>
                        Animations
                    </h4>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-8">
                    <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Components</a>
                        </li>
                        <li class="breadcrumb-item active">Animations</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="row animations_page">
                <div class="col">
                    <div class="card">
                        <div class="card-body bling_buttons">
                            <div>
                                <h5 class="m-t-35">Bling Buttons</h5>
                                <button class="btn btn-lg btn-outline-primary puffIn">Fade In</button>
                                <button class="btn btn-lg btn-outline-info puffOut">Fade Out</button>
                                <button class="btn btn-lg btn-outline-danger vanishIn">Vanish In</button>
                                <button class="btn btn-lg btn-outline-warning vanishOut">Vanish Out</button>
                            </div>
                            <div>
                                <h5 class="m-t-35"> Icons</h5>
                                <button class="btn btn-lg btn-outline-warning hvr-icon-float-away">Flot Away
                                </button>
                                <button class="btn btn-lg btn-outline-info hvr-icon-buzz">Buzz</button>
                                <button class="btn btn-lg btn-outline-primary hvr-icon-drop">Drop</button>
                                <button class="btn btn-lg btn-outline-success hvr-icon-wobble-horizontal">Wobble
                                    Horizontal
                                </button>
                                <button class="btn btn-lg btn-outline-warning hvr-icon-spin">Spin</button>
                                <button class="btn btn-lg btn-outline-danger hvr-icon-grow-rotate">Grow</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row animations_page">
                <div class="col">
                    <div class="card m-t-35">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="speech_bubbles">
                                        <h5 class="m-t-35">Speech Bubbles</h5>
                                        <button class="btn btn-lg btn-primary hvr-bubble-float-bottom">Bubble
                                            Float
                                            Bottom
                                        </button>

                                        <button class="btn btn-lg btn-info hvr-bubble-float-right">Bubble Float
                                            Right
                                        </button>

                                        <button class="btn btn-lg btn-success hvr-bubble-float-left">Bubble
                                            Float
                                            Left
                                        </button>

                                        <button class="btn btn-lg btn-mint hvr-bubble-float-top">Bubble Float
                                            Top
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="curls_border">
                                        <h5 class="m-t-35">Curls</h5>
                                        <button class="btn btn-lg btn-gray hvr-curl-top-left">Curl Top Left
                                        </button>
                                        <button class="btn btn-lg btn-gray hvr-curl-top-right">Curl Top Right
                                        </button>
                                        <button class="btn btn-lg btn-gray hvr-curl-bottom-right">Curl Bottom
                                            Right
                                        </button>
                                        <button class="btn btn-lg btn-gray hvr-curl-bottom-left">Curl Bottom
                                            Left
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="animated_buttons">
                                        <h5 class="m-t-35">Stripped Buttons</h5>
                                        <button class="btn btn-primary btn-lg loading">Primary</button>
                                        <button class="btn btn-danger btn-lg loading">Danger</button>
                                        <button class="btn btn-success btn-lg loading">Success</button>
                                        <button class="btn btn-info btn-lg loading">Info</button>
                                        <button class="btn btn-warning btn-lg loading">Warning</button>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="transitions">
                                        <h5 class="m-t-35">Transitions</h5>
                                        <button class="btn btn-lg btn-primary hvr-pulse-grow">Pulse Grow
                                        </button>
                                        <button class="btn btn-lg btn-warning hvr-float-shadow">Float Shadow
                                        </button>
                                        <button class="btn btn-lg btn-success hvr-wobble-bottom">Wobble Bottom
                                        </button>
                                        <button class="btn btn-lg btn-info hvr-wobble-to-bottom-right">Wobble To
                                            Bottom Right
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            Wow Animations
                            <span class="float-right">
                                </span>
                        </div>
                        <div class="card-body wow_animation">
                            <div class="row">
                                <div class="col-lg-6 m-t-35 wow slideInRight" data-wow-duration="1s"
                                     data-wow-delay="0s">
                                    <div class="card">
                                        <div class="card-header text-info">
                                            Wow Slide In Right
                                        </div>
                                        <div class="card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry.
                                            when an unknown printer took a galley of type and scrambled it to
                                            make a
                                            type specimen book.
                                            It has survived not only five centuries, but also the leap into
                                            electronic
                                            typesetting,
                                            remaining essentially unchanged.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 m-t-35 wow flipInX" data-wow-duration="1s"
                                     data-wow-delay="1s">
                                    <div class="card">
                                        <div class="card-header text-warning">
                                            Wow Flip In X
                                        </div>
                                        <div class="card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry.

                                            when an unknown printer took a galley of type and scrambled it to
                                            make a
                                            type specimen book. It has survived not only five centuries, but
                                            also
                                            the leap into electronic typesetting, remaining essentially
                                            unchanged.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 m-t-35 wow bounceOut" data-wow-duration="1s"
                                     data-wow-delay="2s">
                                    <div class="card">
                                        <div class="card-header text-primary">
                                            Wow Bounce Out
                                        </div>
                                        <div class="card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry.

                                            when an unknown printer took a galley of type and scrambled it to
                                            make a
                                            type specimen book.
                                            It has survived not only five centuries, but also the leap into
                                            electronic
                                            typesetting,
                                            remaining essentially unchanged.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 m-t-35 wow bounceIn" data-wow-duration="1s"
                                     data-wow-delay="2s">
                                    <div class="card">
                                        <div class="card-header text-success">
                                            Wow Bounce In
                                        </div>
                                        <div class="card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry.

                                            when an unknown printer took a galley of type and scrambled it to
                                            make a
                                            type specimen book.
                                            It has survived not only five centuries, but also the leap into
                                            electronic
                                            typesetting,
                                            remaining essentially unchanged.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 m-t-35 wow rollIn" data-wow-duration="1s"
                                     data-wow-delay="2s">
                                    <div class="card">
                                        <div class="card-header text-warning">
                                            Wow Roll In
                                        </div>
                                        <div class="card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry.

                                            when an unknown printer took a galley of type and scrambled it to
                                            make a
                                            type specimen book.
                                            It has survived not only five centuries, but also the leap into
                                            electronic
                                            typesetting,
                                            remaining essentially unchanged.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 m-t-35 wow hinge" data-wow-duration="1s"
                                     data-wow-delay="3s">
                                    <div class="card">
                                        <div class="card-header text-info">
                                            Wow Hinge
                                        </div>
                                        <div class="card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry.

                                            when an unknown printer took a galley of type and scrambled it to
                                            make a
                                            type specimen book.
                                            It has survived not only five centuries, but also the leap into
                                            electronic typesetting, remaining essentially unchanged.
                                        </div>
                                    </div>
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
    <!-- /.outer -->
@stop
{{-- page level scripts --}}
@section('footer_scripts')
    <!--plugin script-->
    <script type="text/javascript" src="{{asset('vendors/snabbt/js/snabbt.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/wow/js/wow.min.js')}}"></script>
    <!-- end of plugin scripts -->
    <script>
        new WOW().init();
    </script>
@stop
