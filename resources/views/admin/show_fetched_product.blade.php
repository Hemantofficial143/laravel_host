@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Add Product
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
                        <i class="fa fa-shopping-basket"></i>
                        Add Product
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
                                <a href="#">Product</a>
                            </li>
                            <li class="breadcrumb-item active">Add Product</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="outer">
        <div class="inner bg-container">
            @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif
            <div class="card p-5">
                
                <form action="{{ url('/admin/product/add/submit') }}" method="POST" >
                        @csrf
                        <table class="table table-striped">
                            <input type="hidden" name="seller_code" id="seller_code" value="{{ $product['seller_code'] }}">
                            <input type="hidden" name="asin" id="asin" value="{{ $product['asin'] }}">
                            <tr>
                                <th>Product Image</th>
                                <th>:</th>
                                <th>
                                    <img src="{{ $product['image'] }}" alt="product_image" class="img-thumbnail" height="200" width="200">
                                    <input type="hidden" name="image" id="image" value="{{ $product['image'] }}">
                                </th>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <th>:</th>
                                <th><input type="text" name="title" id="title" class="form-control" value="{{ $product['title'] }}"></th>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <th>:</th>
                                <th><input type="text" name="price" id="price" class="form-control" value="{{ $product['price'] }}"></th>
                            </tr>
                            <tr>
                                <th>Brand</th>
                                <th>:</th>
                                <th><input type="text" name="brand" id="brand" class="form-control" value="{{ $product['brand'] }}"></th>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <th>:</th>
                                <th><textarea name="description" id="description"  class="form-control" cols="30" rows="10"></textarea></th>
                            </tr>
                        </table>
                        
                    <button class="btn btn-success m-3">Add Product</button>
                </form>
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
@stop
