@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Flot Charts
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--Page level styles-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/pages/flot_charts.css')}}">
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
                        Flot Charts
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
                        <li class="breadcrumb-item active">Flot Charts</li>
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
                        <div class="card-header bg-white text-black">
                            Real Time Charts
                        </div>
                        <div class="card-body m-t-35">
                            <div id="realtime" class="flotChart3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg">
                    <div class="card m-t-35">
                        <div class="card-header bg-white text-black">
                            Spline Line Chart
                        </div>
                        <div class="card-body m-t-35">
                            <div id="basicFlotLegend1" class="flotLegend"></div>
                            <div id="basicflot" class="flotChart"></div>

                        </div>
                    </div>
                </div>
                <div class="col-lg m-t-35">
                    <div class="card">
                        <div class="card-header bg-white text-black">
                            Line Chart
                        </div>
                        <div class="card-body m-t-35">
                            <div id="basicFlotLegend" class="flotLegend"></div>
                            <div id="line-chart" class="flotChart1"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- row -->
            <div class="row">
                <div class="col-lg m-t-35">
                    <div class="card">
                        <div class="card-header bg-white text-black">
                            Bar Charts
                        </div>
                        <div class="card-body m-t-35">
                            <div id="basicFlotLegend2" class="flotLegend"></div>
                            <div id="bar-chart" class="flotChart1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg m-t-35">
                    <div class="card">
                        <div class="card-header bg-white text-black">
                            Stacked Bar Charts
                        </div>
                        <div class="card-body m-t-35">
                            <div id="basicFlotLegend3" class="flotLegend"></div>
                            <div id="bar-chart-stacked" class="flotChart1"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg m-t-35">
                    <div class="card">
                        <div class="card-header bg-white text-black">
                            Area Chart
                        </div>
                        <div class="card-body m-t-35">
                            <div id="area-chart" class="flotChart3"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card m-t-35">
                        <div class="card-header bg-white text-black">
                            Spline Area Chart
                        </div>
                        <div class="card-body m-t-35">
                            <div id="chart-spline" class="flotChart3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 m-t-35">
                    <div class="card">
                        <div class="card-header bg-white text-black">
                            Donut Charts
                        </div>
                        <div class="card-body m-t-35">
                            <div id="donut" class="flotChart2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card m-t-35">
                        <div class="card-header bg-white text-black">
                            Pie Charts
                        </div>
                        <div class="card-body m-t-35">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="demo-container">
                                        <div id="placeholdertranslabel" class="flotChart1"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div id="placeholdertiltedpie" class="flotChart1"></div>
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
    <script type="text/javascript" src="{{asset('vendors/flotchart/js/jquery.flot.js')}}" ></script>
    <script type="text/javascript" src="{{asset('vendors/flotchart/js/jquery.flot.resize.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/flotchart/js/jquery.flot.stack.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/flotchart/js/jquery.flot.time.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/flotspline/js/jquery.flot.spline.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/flotchart/js/jquery.flot.categories.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/flotchart/js/jquery.flot.pie.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <!--plugin scripts-->
    <!--Page level scripts-->
    <script type="text/javascript" src="{{asset('js/pages/flot_charts.js')}}"></script>
    <!-- end of global scripts-->
@stop