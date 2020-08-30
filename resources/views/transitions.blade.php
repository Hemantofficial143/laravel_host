@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Transitions
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--Plugin styles-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/animate/css/animate.min.css')}}" />
    <!--End of plugin styles-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/pages/transitions.css')}}" />
    <!-- end of page level styles -->
@stop


{{-- Page content --}}
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-lg-6 col-sm-4">
                    <h4 class="nav_top_align">
                        <i class="fa fa-anchor"></i>
                        Transitions
                    </h4>
                </div>
                <div class="col-lg-6 col-sm-8">
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
                        <li class="breadcrumb-item active">Transitions</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card parent_card">
                        <div class="card-body animations_parent_card">
                            <h5 class="effects_heading_top_align">Transition Effects</h5>
                            <div class="row">
                                <div class="col-lg-3 col-sm-6">
                                    <div id="rubber" class="card card-outline-primary">
                                        <div class="card-header bg-primary">
                                            Rubber Band
                                        </div>

                                        <div class="card-body">
                                            Used class <code>rubberBand</code>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div id="tad" class="card card-outline-primary">
                                        <div class="card-header bg-primary">
                                            Tada
                                        </div>

                                        <div class="card-body">
                                            Used class <code>tada</code>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div id="wobble" class="card card-outline-primary">
                                        <div class="card-header bg-primary">
                                            Wobble
                                        </div>

                                        <div class="card-body">
                                            Used class <code>wobble</code>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div id="swing" class="card card-outline-primary">
                                        <div class="card-header bg-primary">
                                            Swing
                                        </div>

                                        <div class="card-body">
                                            Used class <code>swing</code>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <h5 class="effects_heading_top_align">Bouncing Effect</h5>
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 ">
                                    <div id="bi" class="card card-outline-primary">
                                        <div class="card-header bg-primary">
                                            Bounce In
                                        </div>
                                        <div class="card-body">
                                            Used class <code>bounceIn</code>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div id="bil" class="card card-outline-primary">
                                        <div class="card-header bg-primary">
                                            Bounce In Left
                                        </div>
                                        <div class="card-body">
                                            Used class  <code> bounceInLeft</code>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div id="bir" class="card card-outline-primary">
                                        <div class="card-header bg-primary">
                                            Bounce In Right
                                        </div>
                                        <div class="card-body">
                                            Used class <code>bounceInRight</code>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div id="bo" class="card card-outline-primary">
                                        <div class="card-header bg-primary">
                                            Bounce Out
                                        </div>
                                        <div class="card-body">
                                            Used class <code> bounceOut</code>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card parent_card m-t-35">
                        <div class="card-body animations_parent_card">
                            <h5 class="effects_heading_top_align">Fading Effect</h5>
                            <div class="row">
                                <div class="col-lg-3 col-sm-6">
                                    <div id="fadein" class="card card-outline-primary">
                                        <div class="card-header bg-primary">
                                            Fade In
                                        </div>

                                        <div class="card-body">
                                            Used class <code>fadeIn</code>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div id="fadeleft" class="card card-outline-primary">
                                        <div class="card-header bg-primary">
                                            Fade In Left
                                        </div>
                                        <div class="card-body">
                                            Used class <code> fadeInLeft</code>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div id="faderight" class="card card-outline-primary">
                                        <div class="card-header bg-primary">
                                            fade In Right
                                        </div>
                                        <div class="card-body">
                                            Used class <code>fadeInRight</code>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div id="fadeout" class="card card-outline-primary">
                                        <div class="card-header bg-primary">
                                            Fade Out
                                        </div>
                                        <div class="card-body">
                                            Used class <code> fadeOut</code>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="effects_heading_top_align">Flip Effect</h5>
                            <div class="row">
                                <div class="col-lg-3 col-sm-6">
                                    <div id="flip" class="card card-outline-primary">
                                        <div class="card-header bg-primary">
                                            Flip
                                        </div>

                                        <div class="card-body">
                                            Used class <code>flip</code>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div id="flipy" class="card card-outline-primary">
                                        <div class="card-header bg-primary">
                                            Flip In Y
                                        </div>

                                        <div class="card-body">
                                            Used class <code>flipInY</code>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div id="flipoutx" class="card card-outline-primary">
                                        <div class="card-header bg-primary">
                                            Flip Out X
                                        </div>

                                        <div class="card-body">
                                            Used class <code>flipOutX</code>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div id="flipouty" class="card card-outline-primary">
                                        <div class="card-header bg-primary">
                                            Flip Out Y
                                        </div>

                                        <div class="card-body">
                                            Used class <code>flipOutY</code>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card parent_card m-t-35">
                        <div class="card-body animations_parent_card">
                            <h5 class="effects_heading_top_align">Rotate Effect</h5>
                            <div class="row">
                                <div class="col-lg-3 col-sm-6">
                                    <div id="rotatein" class="card card-outline-primary">
                                        <div class="card-header bg-primary">
                                            Rotate In
                                        </div>
                                        <div class="card-body">
                                            Used class <code>rotateIn</code>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div id="rotatedownright" class="card card-outline-primary">
                                        <div class="card-header bg-primary">
                                            Rotate In Down Right
                                        </div>
                                        <div class="card-body">
                                            Used class <code>rotateInRight</code>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div id="rotateout" class="card card-outline-primary">
                                        <div class="card-header bg-primary">
                                            Rotate Out
                                        </div>
                                        <div class="card-body">
                                            Used class <code>rotateOut</code>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div id="rotateoutleft" class="card card-outline-primary">
                                        <div class="card-header bg-primary">
                                            Rotate Out Up Left
                                        </div>
                                        <div class="card-body">
                                            Used class <code>rotateOutUpLeft</code>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="effects_heading_top_align">Zoom Effect</h5>
                            <div class="row">
                                <div class="col-lg-3 col-sm-6">
                                    <div id="zoomin" class="card card-outline-primary">
                                        <div class="card-header bg-primary">
                                            Zoom In
                                        </div>
                                        <div class="card-body">
                                            Used class <code>zoomIn</code>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div id="zoominleft" class="card card-outline-primary">
                                        <div class="card-header bg-primary">
                                            Zoom In Left
                                        </div>
                                        <div class="card-body">
                                            Used class  <code>zoomInLeft</code>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div id="zoomoutdown" class="card card-outline-primary">
                                        <div class="card-header bg-primary">
                                            Zoom Out Down
                                        </div>
                                        <div class="card-body">
                                            Used class <code>zoomOutDown</code>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div id="zoomoutright" class="card card-outline-primary">
                                        <div class="card-header bg-primary">
                                            Zoom Out Right
                                        </div>
                                        <div class="card-body">
                                            Used class <code>zoomOutRight</code>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="effects_heading_top_align">Roll Effect</h5>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div id="rollin" class="card card-outline-primary">
                                        <div class="card-header bg-primary">
                                            Roll In
                                        </div>
                                        <div class="card-body">
                                            Used class <code>rollIn</code>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div id="rollout" class="card card-outline-primary">
                                        <div class="card-header bg-primary">
                                            Roll Out
                                        </div>
                                        <div class="card-body">
                                            Used class <code>rollOut</code>
                                        </div>
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
@stop
{{-- page level scripts --}}
@section('footer_scripts')
    <!--Plugin scripts-->
    <script type="text/javascript" src="{{asset('vendors/Knob/js/jquery.knob.js')}}"></script>
    <!-- end of plugin scripts-->
    <!--Page level scripts-->
    <script type="text/javascript" src="{{asset('js/pages/transitions-sliders.js')}}"></script>
    <!-- end of page level scripts-->
@stop