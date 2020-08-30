@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Sweet Alerts
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/sweetalert/css/sweetalert2.min.css')}}"/>
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/sweet_alerts.css')}}"/>
    <!-- end of page level styles -->
@stop


{{-- Page content --}}
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-lg col-sm-4">
                    <h4 class="nav_top_align">
                        <i class="fa fa-anchor"></i>
                        Sweet Alert
                    </h4>
                </div>
                <div class="col-lg col-sm-8">
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
                        <li class="breadcrumb-item active">Sweet Alert</li>
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
                        <div class="card-body m-t-35">
                            <h5>Basic Sweet Alerts</h5>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row examples">
                                        <div class="col-xl-3 col-lg-4 col-sm-6 m-t-10">
                                            <button class="btn btn-primary source message"> Basic message
                                            </button>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6 m-t-10">
                                            <button class="btn btn-primary source primary_clr m-l-5">Primary
                                            </button>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6 m-t-10">
                                            <button class="btn btn-info source info_clr m-l-5">Info</button>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6 m-t-10">
                                            <button class="btn btn-warning source warning_clr m-l-5">Warning
                                            </button>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6 m-t-10">
                                            <button class="btn btn-success source success_clr m-l-5">Success
                                            </button>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6 m-t-10">
                                            <button class="btn btn-danger source danger_clr m-l-5">Danger
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 m-t-35">
                                    <h5>Advanced Sweet Alerts</h5>
                                    <div class="row examples">
                                        <div class="col-xl-3 col-lg-4 col-sm-6 m-t-10">
                                            <button class="btn btn-gray source ajax-request">Ajax Request
                                            </button>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6 m-t-10">
                                            <button class="btn btn-primary source chaining-modals">Chaining
                                                modals
                                            </button>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6 m-t-10">
                                            <button class="btn btn-warning source dynamic-queue">Dynamic queue
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card m-t-35">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 m-t-35">
                                    <h5>Sweet Alerts With Images</h5>
                                    <div class="row examples">
                                        <div class="col-xl-3 col-lg-4 col-sm-6 m-t-10">
                                            <button class="btn btn-success source custom-image">Custom Image
                                            </button>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6 m-t-10">
                                            <button class="btn btn-primary source custom-width-padding-background">
                                                Background Submit
                                            </button>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6 m-t-10">
                                            <button class="btn btn-warning source warning confirm">Delete
                                            </button>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6 m-t-10">
                                            <button class="btn btn-mint warning source cancel">Delete and Cancel
                                            </button>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6 m-t-10">
                                            <button class="btn btn-info source jqueryhtml m-l-5">JQuery HTML
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 m-t-35">
                                    <h5>Different Sweet Alerts</h5>
                                    <div class="row examples">
                                        <div class="col-xl-3 col-lg-4 col-sm-6 m-t-10">
                                            <button class="btn btn-warning source title-text">Title with a text
                                                under
                                            </button>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6 m-t-10">
                                            <button class="btn btn-success source success m-l-5">Success
                                                message
                                            </button>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6 m-t-10">
                                            <button class="btn btn-mint source timer m-l-5">Autoclose timer
                                            </button>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6 m-t-10">
                                            <button class="btn btn-danger source showcase sweet m-l-5">Error
                                                message
                                            </button>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6 m-t-10">
                                            <button class="btn btn-primary source html_ex m-l-5">HTML message
                                            </button>
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
    <!-- plugin scripts -->
    <script type="text/javascript" src="{{asset('vendors/sweetalert/js/sweetalert2.min.js')}}"></script>
    <!-- end plugin scripts -->
    <!--Page level scripts-->
    <script type="text/javascript" src="{{asset('js/pages/sweet_alerts.js')}}"></script>
    <!-- end of page level scripts-->
@stop
