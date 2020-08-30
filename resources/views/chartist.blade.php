@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Chartist Charts
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/chartist/css/chartist.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/chartist.css')}}" />
    <!--End of page level styles-->
@stop


{{-- Page content --}}
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-lg col-sm-4">
                    <h4 class="nav_top_align">
                        <i class="fa fa-bar-chart" aria-hidden="true"></i>
                        Chartist Charts
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
                            <a href="#">Charts</a>
                        </li>
                        <li class="breadcrumb-item active">Chartist Charts</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-white">
                            Donut with Animation
                        </div>
                        <div class="card-body m-t-35">
                            <div class="ct-chart ct-perfect-fourth" id="animated_chart"></div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card md_top_align">
                        <div class="card-header bg-white">
                            Stacked Bar Chart
                        </div>
                        <div class="card-body m-t-35">
                            <div class="ct-chart ct-perfect-fourth" id="stacked_chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            Peak circles Bi-Polar Bar Chart
                        </div>
                        <div class="card-body m-t-35">
                            <div class="ct-chart ct-perfect-fourth" id="draw_events"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            Smil Animation
                        </div>
                        <div class="card-body m-t-35">
                            <div class="ct-chart ct-perfect-fourth" id="smil_animation"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            Path Animation
                        </div>
                        <div class="card-body m-t-35">
                            <div class="ct-chart ct-perfect-fourth" id="path_animation"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            Multi Line Labels
                        </div>
                        <div class="card-body m-t-35">
                            <div class="ct-chart ct-perfect-fourth" id="multi_line"></div>
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
    <!--plugin script-->
    <script type="text/javascript" src="{{asset('vendors/chartist/js/chartist.min.js')}}"></script>
    <!-- end of plugin scripts -->
    <script type="text/javascript" src="{{asset('js/pages/chartist.js')}}"></script>
@stop