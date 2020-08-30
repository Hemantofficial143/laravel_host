@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Vector Maps
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/jqvmap/css/jqvmap.min.css')}}" />
    <!--end of plugin styles-->
@stop


{{-- Page content --}}
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-lg col-sm-4">
                    <h4 class="nav_top_align">
                        <i class="fa fa-map-marker"></i>
                        Vector Maps
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
                            <a href="#">
                                Maps
                            </a>
                        </li>
                        <li class="breadcrumb-item active">Vector Maps</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col-lg">
                    <div class="card">
                        <div class="card-header bg-white">
                            World Map
                        </div>
                        <div class="card-body text-center m-t-35">
                            <div id="world-map-gdp" class="vector_maps"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg">
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            Russia
                        </div>
                        <div class="card-body m-t-35">
                            <div id="russia_map" class="vector_maps"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            USA
                        </div>
                        <div class="card-body  m-t-35">
                            <div id="usa_map" class="vector_maps"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg">
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            Canada
                        </div>
                        <div class="card-body m-t-35">
                            <div id="canada_map" class="vector_maps"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            Europe
                        </div>
                        <div class="card-body m-t-35">
                            <div id="europe_map" class="vector_maps"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
        </div>

    </div>
    <!-- /.outer -->
@stop
{{-- page level scripts --}}
@section('footer_scripts')
    <!-- Plugin scripts-->
    <script type="text/javascript" src="{{asset('vendors/jqvmap/js/jquery.vmap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/jqvmap/js/jquery.vmap.world.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/jqvmap/js/jquery.vmap.europe.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/jqvmap/js/jquery.vmap.usa.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/jqvmap/js/jquery.vmap.canada.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/jqvmap/js/jquery.vmap.russia.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/pluginjs/sample_data.js')}}"></script>
    <!--End of plugin scripts-->
    <script type="text/javascript" src="{{asset('js/pages/jqvmaps.js')}}"></script>
    <!-- end page level scripts -->
@stop