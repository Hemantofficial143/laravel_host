@extends('layouts/fixed_menu_header')

@section('title')
  Toolstips 
    @parent
   @stop 

@section('header_styles')
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/tooltipster/css/tooltipster.bundle.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/tipso/css/tipso.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/animate/css/animate.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/tooltips.css')}}">
    <!--Page level styles-->
@stop

@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-sm-5 col-12">
                    <h4 class="nav_top_align">
                        <i class="fa fa-anchor" aria-hidden="true"></i>
                        Tooltips
                    </h4>
                </div>
                <div class="col-sm-7 col-12">
                    <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Components</a>
                        </li>
                        <li class="breadcrumb-item active">Tooltips</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-white">
                            Tooltips and Popovers
                        </div>
                        <div class="card-body m-t-20 text-center text-sm-left">
                            <div class="row">
                                <div class="col-lg-12 m-t-15">
                                    <h5>Tooltips</h5>
                                    <div class="m-t-20">
                                        Use <code>data-toggle="tooltip" data-placement="" title=""</code> to your html
                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-none d-sm-block">
                                            <button type="button" class="btn btn-primary m-t-20" data-toggle="tooltip" data-placement="top" title=" Top">
                                                Tooltip on top
                                            </button>
                                            <button type="button" class="btn btn-primary m-t-20" data-toggle="tooltip" data-placement="right" title="Right">
                                                Tooltip on right
                                            </button>
                                            <button type="button" class="btn btn-primary m-t-20" data-toggle="tooltip" data-placement="bottom" title="Bottom">
                                                Tooltip on bottom
                                            </button>

                                            <button type="button" class="btn btn-primary m-t-20" data-toggle="tooltip" data-placement="left" title="Left">
                                                Tooltip on left
                                            </button>
                                        </div>
                                        <div class="col-12 d-block d-sm-none">
                                            <button type="button" class="btn btn-primary m-t-20" data-toggle="tooltip" data-placement="top" title=" Top">
                                                Tooltip on top
                                            </button>

                                            <button type="button" class="btn btn-primary m-t-20" data-toggle="tooltip" data-placement="bottom" title="Bottom">
                                                Tooltip on bottom
                                            </button>
                                            <button type="button" class="btn btn-primary m-t-20" data-toggle="tooltip" data-placement="right" title="Right">
                                                Tooltip on right
                                            </button>

                                            <button type="button" class="btn btn-primary m-t-20" data-toggle="tooltip" data-placement="left" title="Left">
                                                Tooltip on left
                                            </button>
                                        </div>
                                    </div>
                                    <div class="m-t-20">
                                        <code>data-trigger="click"</code>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-none d-sm-block">
                                            <button type="button" class="btn btn-primary m-t-20" data-toggle="tooltip" data-trigger="click" data-placement="top" title=" Top">
                                                Tooltip on top
                                            </button>
                                            <button type="button" class="btn btn-primary m-t-20" data-toggle="tooltip" data-trigger="click" data-placement="right" title="Right">
                                                Tooltip on right
                                            </button>
                                            <button type="button" class="btn btn-primary m-t-20" data-toggle="tooltip" data-trigger="click" data-placement="bottom" title="Bottom">
                                                Tooltip on bottom
                                            </button>
                                            <button type="button" class="btn btn-primary m-t-20 " id="tt_left" data-toggle="tooltip" data-trigger="click" data-placement="left" title="Left">
                                                Tooltip on left
                                            </button>
                                        </div>
                                        <div class="col-12 d-block d-sm-none">
                                            <button type="button" class="btn btn-primary m-t-20" data-toggle="tooltip" data-trigger="click" data-placement="top" title=" Top">
                                                Tooltip on top
                                            </button>
                                            <button type="button" class="btn btn-primary m-t-20" data-toggle="tooltip" data-trigger="click" data-placement="bottom" title="Bottom">
                                                Tooltip on bottom
                                            </button>
                                            <button type="button" class="btn btn-primary m-t-20" data-toggle="tooltip" data-trigger="click" data-placement="right" title="Right">
                                                Tooltip on right
                                            </button>
                                            <button type="button" class="btn btn-primary m-t-20 " id="tt_left" data-toggle="tooltip" data-trigger="click" data-placement="left" title="Left">
                                                Tooltip on left
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-t-20">
                                <div class="col-lg-12 m-t-15">
                                    <h5>Popovers</h5>
                                    <div class="m-t-20">
                                        Use <code>data-toggle="popover" data-placement="" data-content=""</code> to your html
                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-none d-sm-block">
                                            <button type="button" class="btn btn-primary m-t-20" data-toggle="popover" data-placement="top" data-content="Top">
                                                Popover on top
                                            </button>
                                            <button type="button" class="btn btn-primary m-t-20" data-toggle="popover" data-placement="right" data-content="Right">
                                                Popover on right
                                            </button>
                                            <button type="button" class="btn btn-primary m-t-20" data-toggle="popover" data-placement="bottom" data-content="Bottom">
                                                Popover on bottom
                                            </button>
                                            <button type="button" class="btn btn-primary m-t-20" data-toggle="popover" data-placement="left" data-content="Left">
                                                Popover on left
                                            </button>
                                        </div>
                                        <div class="col-12 d-block d-sm-none">
                                            <button type="button" class="btn btn-primary m-t-20" data-toggle="popover" data-placement="top" data-content="Top">
                                                Popover on top
                                            </button>

                                            <button type="button" class="btn btn-primary m-t-20" data-toggle="popover" data-placement="bottom" data-content="Bottom">
                                                Popover on bottom
                                            </button>
                                            <button type="button" class="btn btn-primary m-t-20" data-toggle="popover" data-placement="right" data-content="Right">
                                                Popover on right
                                            </button>
                                            <button type="button" class="btn btn-primary m-t-20" data-toggle="popover" data-placement="left" data-content="Left">
                                                Popover on left
                                            </button>
                                        </div>
                                    </div>
                                    <div class="m-t-20">
                                        Add <code>data-trigger="hover"</code> to your html
                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-none d-sm-block">
                                            <button type="button" class="btn btn-primary m-t-20" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Top">
                                                Popover on top
                                            </button>
                                            <button type="button" class="btn btn-primary m-t-20" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Right">
                                                Popover on right
                                            </button>
                                            <button type="button" class="btn btn-primary m-t-20" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="Bottom">
                                                Popover on bottom
                                            </button>
                                            <button type="button" class="btn btn-primary m-t-20" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Left">
                                                Popover on left
                                            </button>
                                        </div>
                                        <div class="col-12 d-block d-sm-none">
                                            <button type="button" class="btn btn-primary m-t-20" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Top">
                                                Popover on top
                                            </button>

                                            <button type="button" class="btn btn-primary m-t-20" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="Bottom">
                                                Popover on bottom
                                            </button>
                                            <button type="button" class="btn btn-primary m-t-20" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Right">
                                                Popover on right
                                            </button>
                                            <button type="button" class="btn btn-primary m-t-20" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Left">
                                                Popover on left
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card m-t-35">
                        <div class="card-header bg-white">Advanced Tooltips</div>
                        <div class="card-body m-t-15">
                            <div>Different tooltips</div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-primary tipso_pageload m-t-20"  data-background="#ececea" data-color="#5a5a5a" data-tipso="This is Tooltip! on page load">Page Load</button>
                                    <button class="btn btn-primary hover-tipso-tooltip m-t-20"  data-background="#ececea" data-color="#5a5a5a" data-tipso="Hover on me">Tooltip hover</button>

                                </div>
                            </div>
                            <div class="m-t-35">Size <code>size:"*"</code></div>
                            <button class="btn btn-primary tipso_tiny m-t-20" data-background="#ececea" data-color="#5a5a5a" data-tipso="This is Tooltip! with tiny">Tiny</button>
                            <button class="btn btn-primary tipso_small m-t-20" data-background="#ececea" data-color="#5a5a5a" data-tipso="This is Tooltip! with small">Small</button>
                            <button class="btn btn-primary tipso_default m-t-20" data-background="#ececea" data-color="#5a5a5a" data-tipso="This is Tooltip! with default">Default</button>
                            <button class="btn btn-primary tipso_large m-t-20" data-background="#ececea" data-color="#5a5a5a" data-tipso="This is Tooltip! with large">Large</button>
                            <div class="m-t-35">Position <code>data-position="*"</code></div>
                            <button class="btn btn-primary tipso m-t-20" data-background="#ff9933" data-tipso="This is a right Tooltip!" data-position="right">Tipso right</button>
                            <button class="btn btn-primary tipso m-t-20" data-background="#ff9933" data-tipso="This is a top Tooltip!" data-position="top">Tipso top</button>
                            <button class="btn btn-primary tipso m-t-20" data-background="#ff9933" data-tipso="This is a bottom Tooltip!" data-position="bottom">Tipso bottom</button>
                            <button class="btn btn-primary tipso m-t-20" data-background="#ff9933" data-tipso="This is a left Tooltip!" data-position="left">Tipso left</button>
                            <div class="m-t-35">Corner Positions <code>data-position="-*"</code></div>
                            <button class="btn btn-primary tipso m-t-20" data-background="#ececea" data-color="#5a5a5a" data-tipso="This is a top-right Tooltip!" data-position="top-right">Tipso top-right</button>
                            <button class="btn btn-primary tipso m-t-20" data-background="#ececea" data-color="#5a5a5a" data-tipso="This is a bottom-right Tooltip!" data-position="bottom-right">Tipso bottom-right</button>
                            <button class="btn btn-primary tipso m-t-20" data-background="#ececea" data-color="#5a5a5a" data-tipso="This is a top-left Tooltip!" data-position="top-left">Tipso top-left</button>
                            <button class="btn btn-primary tipso m-t-20" data-background="#ececea" data-color="#5a5a5a" data-tipso="This is a bottom-left Tooltip!" data-position="bottom-left">Tipso bottom-left</button>
                            <div class="m-t-35">Tittle Bar <code>data-titleContent=""</code></div>
                            <button class="btn btn-primary tipso m-t-20" data-background="#ececea" data-color="#5a5a5a" data-tipso="This is Tooltip! with title" data-titleContent="Hello" data-position="top">Content</button>
                            <button class="btn btn-primary tipso m-t-20" data-background="#ececea" data-color="#5a5a5a" data-tipso="This is Tooltip! with title" data-titleContent="Hello" data-position="bottom">Automatic arrow color</button>
                            <div class="m-t-35">Update tooltip</div>
                            <div class="m-t-10">
                                <span class="update tipso" data-background="#ececea" data-color="#5a5a5a" data-tipso="Click on button to update">Update</span>
                                <button class="btn btn-primary update-tipso">Click me to update</button>
                            </div>
                            <div class="m-t-35">Update content tooltip</div>
                            <span class="update-tipso-content tipso" data-background="#ececea" data-color="#5a5a5a" data-tipso="Write text in input and click on button">Update</span>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-group m-t-10 input-group-append">
                                        <input type="text" class="form-control tipso-content">
                                        <span class="input-group-text update-tipso-input pointer border-left-0 rounded-right">Click to update</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card m-t-35">
                        <div class="card-header bg-white">Tooltips with animation</div>
                        <div class="card-body m-t-15">
                            <button class="btn btn-primary tipso_fadeIn m-t-20" data-background="#ececea" data-color="#5a5a5a" data-tipso="This is Tooltip! with fadeIn and fadeOut">fadeIn and fadeOut</button>
                            <button class="btn btn-primary tipso_fadeInDown m-t-20" data-background="#ececea" data-color="#5a5a5a" data-tipso="This is Tooltip! with fadeInDown and fadeOutUp">fadeInDown and fadeOutUp</button>
                            <button class="btn btn-primary tipso_fadeInLeft m-t-20" data-background="#ececea" data-color="#5a5a5a" data-tipso="This is Tooltip! with fadeInLeft and fadeOutRight">fadeInLeft and fadeOutRight</button>
                            <button class="btn btn-primary tipso_fadeInRightBig m-t-20" data-background="#ececea" data-color="#5a5a5a" data-tipso="This is Tooltip! with fadeInRightBig and fadeOutleftBig">fadeInRightBig and fadeOutleftBig</button>
                            <button class="btn btn-primary tipso_bounceIn m-t-20" data-background="#ececea" data-color="#5a5a5a" data-tipso="This is Tooltip! with bounceIn and bounceOut">bounceIn and bounceOut</button>
                            <button class="btn btn-primary tipso_bounceInDown m-t-20" data-background="#ececea" data-color="#5a5a5a" data-tipso="This is Tooltip! with bounceInDown and bounceOutUp">bounceInDown and bounceOutUp</button>
                            <button class="btn btn-primary tipso_bounceInLeft m-t-20" data-background="#ececea" data-color="#5a5a5a" data-tipso="This is Tooltip! with bounceInLeft and bounceOutRight">bounceInLeft and bounceOutRight</button>
                            <button class="btn btn-primary tipso_zoomIn m-t-20" data-background="#ececea" data-color="#5a5a5a" data-tipso="This is Tooltip! with zoomIn and zoomOut">zoomIn and zoomOut</button>
                            <button class="btn btn-primary tipso_zoomInDown m-t-20" data-background="#ececea" data-color="#5a5a5a" data-tipso="This is Tooltip! with zoomInDown and zoomOutUp">zoomInDown and zoomOutUp</button>
                            <button class="btn btn-primary tipso_hinge m-t-20" data-background="#ececea" data-color="#5a5a5a" data-tipso="This is Tooltip! with hinge and rollOut">Hinge</button>
                            <button class="btn btn-primary tipso_lightSpeedIn m-t-20" data-background="#ececea" data-color="#5a5a5a" data-tipso="This is Tooltip! with lightSpeedIn and lightSpeedOut">lightSpeedIn</button>
                            <button class="btn btn-primary tipso_flipInX m-t-20" data-background="#ececea" data-color="#5a5a5a" data-tipso="This is Tooltip! with flipInX and flipOutY">flipIn</button>
                            <button class="btn btn-primary tipso_rubberBand m-t-20" data-background="#ececea" data-color="#5a5a5a" data-tipso="This is Tooltip! with rubberBand and wobble">rubberBand</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.inner -->
    </div>
@stop

@section('footer_scripts')
<script type="text/javascript" src="{{asset('vendors/tooltipster/js/tooltipster.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/tipso/js/tipso.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/pages/tooltips.js')}}"></script>
@stop