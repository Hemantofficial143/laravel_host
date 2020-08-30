@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Blank
    @parent
@stop
@section("header_styles")
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/blank.css')}}"/>
    <!--End of page level styles-->
    @stop

{{-- Page content --}}
@section('content')
    <!-- Content Header (Page header) -->
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="nav_top_align">
                        <i class="fa fa-file-o"></i>
                        Blank Page
                    </h4>
                </div>
                <div class="col-lg-6">
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
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-light lter bg-container">
            <div class="row"></div>
        </div>
        <!-- /.inner -->
    </div>
        <!-- /.outer -->
    <!-- /.content -->
@stop

