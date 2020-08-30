@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Import products
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!-- plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/jasny-bootstrap/css/jasny-bootstrap.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}"/>
    <!--end of page level css-->
    <style>
        .br-0{
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }
    </style>
@stop

{{-- Page content --}}
@section('content')

    <header class="head">

        <div class="main-bar">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="nav_top_align">
                        <i class="fa fa-file-import"></i>
                        Import Products
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
                                <a href="#">Products</a>
                            </li>
                            <li class="breadcrumb-item active">Import Products</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="outer">
        <div class="inner bg-container">
            <div class="card">
                @if (\Session::has('error_msg'))
                    <div class="alert alert-danger">{{  \Session::get('error_msg')  }}</li>
                    </div>
                @endif
                @if (\Session::has('success_msg'))
                    <div class="alert alert-success">{{  \Session::get('success_msg')  }}</li>
                    </div>
                @endif
                <div class="card-body p-5">
                    <div class="row p-3">
                        <h3>Import Products</h3>
                    </div>
                    <div class="row p-3">
                        <div class="col-lg-3 text-lg-right">
                            <label for="u-name" class="col-form-label">
                                <h5>Please Select File</h5></label>
                        </div>
                        <div class="col-xl-6 col-lg-8">
                            <form action="{{ route('admin.products.import.submit') }}" method="POST" id="import_from" enctype="multipart/form-data">
                                <div class="input-group input-group-prepend">
                                    <span class="input-group-text br-0 border-right-0 rounded-left"> <i class="fa fa-file text-primary"></i>
                                    </span>
                                    @csrf
                                    <input type="file" name="import_file" id="import_file"
                                        class="form-control">
                                    <button class="btn btn-success ml-3">Import</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.inner -->
    </div>

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- plugin scripts-->
    <script type="text/javascript" src="{{asset('js/pluginjs/jasny-bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/holderjs/js/holder.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>
    <!-- end of plugin scripts-->
    <script type="text/javascript" src="{{asset('js/pages/validation.js')}}"></script>
    <!-- end of page level js -->
    <script>
        
    </script>
@stop
