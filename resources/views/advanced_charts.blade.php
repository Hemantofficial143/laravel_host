@extends('layouts/fixed_menu_header')

    {{-- Page title --}}
    @section('title')
        Advanced Charts
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--pluin styles -->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/c3/css/c3.min.css')}}"/>
    <!-- end of plugin styles -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/advanced_charts.css')}}"/>
        <!--end of page level css-->
@stop


{{-- Page content --}}
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-4">
                    <h4 class="nav_top_align">
                        <i class="fa fa-bar-chart" aria-hidden="true"></i>
                        Advanced Charts
                    </h4>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-8">
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
                        <li class="breadcrumb-item active">Advanced Charts</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header bg-white">
                            Stacked Area Chart
                        </div>
                        <div class="card-body m-t-35">
                            <div id="chart2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            Scatter Plot
                        </div>
                        <div class="card-body m-t-35">
                            <div id="chart3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            Donut Chart
                        </div>
                        <div class="card-body m-t-35">
                            <div id="chart1"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            Line Chart
                        </div>
                        <div class="card-body m-t-35">
                            <div id="chart4"></div>
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
    <!-- plugin scripts-->
<!-- plugin script -->
<script type="text/javascript" src="{{asset('vendors/raphael/js/raphael.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/d3/js/d3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/c3/js/c3.min.js')}}"></script>
<!-- end of plugin script -->
<script type="text/javascript" src="{{asset('js/pages/advanced_charts.js')}}"></script>
    <!-- end of page level js -->
@stop
