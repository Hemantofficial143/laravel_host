@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Jstree
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--Plugin styles -->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/jstree/css/style.min.css')}}"/>
    <!--Page level styles-->
@stop
    @section('content')
        <header class="head">
            <div class="main-bar">
                <div class="row">
                    <div class="col-sm-5 col-12">
                        <h4 class="nav_top_align">
                            <i class="fa fa-anchor" aria-hidden="true"></i>
                            Jstree
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
                            <li class="breadcrumb-item active">Jstree</li>
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
                                Basic and Draggable tree
                            </div>
                            <div class="card-body m-t-35">
                                <div id="jstree1">
                                    <ul>
                                        <li data-jstree='{"opened":true}'>
                                            Root node
                                            <ul>
                                                <li>Child node 1
                                                    <ul>
                                                        <li>Child node 1.1</li>
                                                        <li>Child node 1.2
                                                            <ul>
                                                                <li>Child node 1.2.1</li>
                                                                <li>Child node 1.2.2</li>
                                                            </ul>
                                                        </li>
                                                        <li>Child node 1.3</li>
                                                    </ul>
                                                </li>
                                                <li>Child node 2
                                                    <ul>
                                                        <li>Child node 2.1</li>
                                                        <li>Child node 2.2</li>
                                                    </ul>
                                                </li>
                                                <li>Child node 3</li>
                                                <li data-jstree='{"opened":true}'>Child node 4
                                                    <ul>
                                                        <li>Child node 4.1</li>
                                                        <li>Child node 4.2</li>
                                                        <li>Child node 4.3
                                                            <ul>
                                                                <li>Child node 4.1</li>
                                                                <li>Child node 4.2</li>
                                                                <li>Child node 4.3</li>
                                                            </ul>
                                                        </li>
                                                        <li>Child node 4.4</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="card media_max_991">
                            <div class="card-header bg-white">
                                Tree with Icons
                            </div>
                            <div class="card-body m-t-35">
                                <div id="jstree8">
                                    <ul>
                                        <li data-jstree='{"opened":true}'>
                                            Root node
                                            <ul>
                                                <li>Child node 1
                                                    <ul>
                                                        <li>Child node 1.1</li>
                                                        <li>Child node 1.2
                                                            <ul>
                                                                <li>Child node 1.2.1</li>
                                                                <li>Child node 1.2.2</li>
                                                            </ul>
                                                        </li>
                                                        <li>Child node 1.3</li>
                                                    </ul>
                                                </li>
                                                <li>Child node 2
                                                    <ul>
                                                        <li>Child node 2.1</li>
                                                        <li>Child node 2.2</li>
                                                    </ul>
                                                </li>
                                                <li>Child node 3</li>
                                                <li data-jstree='{"opened":true}'>Child node 4
                                                    <ul>
                                                        <li>Child node 4.1</li>
                                                        <li>Child node 4.2</li>
                                                        <li>Child node 4.3
                                                            <ul>
                                                                <li>Child node 4.1</li>
                                                                <li>Child node 4.2</li>
                                                                <li>Child node 4.3</li>
                                                            </ul>
                                                        </li>
                                                        <li>Child node 4.4</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg">
                        <div class="card m-t-35">
                            <div class="card-header bg-white">
                                Tree with Buttons
                            </div>
                            <div class="card-body m-t-20">
                                <button class="btn btn-primary node1 m-t-15">Select node 1</button>
                                <button class="btn btn-primary node2 m-t-15">Select node 2</button>
                                <button class="btn btn-primary node1_1 m-t-15">Select node 1.1</button>
                                <button class="btn btn-primary node1_2 m-t-15">Select node 1.2</button>
                                <button class="btn btn-primary node3_1 m-t-15">Select node 3.1</button>
                                <button class="btn btn-primary node3_2 m-t-15">Select node 3.2</button>
                                <div id="jstree3" class="m-t-20"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="card m-t-35">
                            <div class="card-header bg-white">
                                Create, Rename and Deleting tree by right click
                            </div>
                            <div class="card-body m-t-35">
                                <div id="jstree4">
                                    <ul>
                                        <li data-jstree='{"opened":true}'>
                                            Root node
                                            <ul>
                                                <li>Child node 1
                                                    <ul>
                                                        <li>Child node 1.1</li>
                                                        <li>Child node 1.2
                                                            <ul>
                                                                <li>Child node 1.2.1</li>
                                                                <li>Child node 1.2.2</li>
                                                            </ul>
                                                        </li>
                                                        <li>Child node 1.3</li>
                                                    </ul>
                                                </li>
                                                <li>Child node 2
                                                    <ul>
                                                        <li>Child node 2.1</li>
                                                        <li>Child node 2.2</li>
                                                    </ul>
                                                </li>
                                                <li>Child node 3</li>
                                                <li data-jstree='{"opened":true}'>Child node 4
                                                    <ul>
                                                        <li>Child node 4.1</li>
                                                        <li>Child node 4.2</li>
                                                        <li>Child node 4.3
                                                            <ul>
                                                                <li>Child node 4.1</li>
                                                                <li>Child node 4.2</li>
                                                                <li>Child node 4.3</li>
                                                            </ul>
                                                        </li>
                                                        <li>Child node 4.4</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg">
                        <div class="card m-t-35">
                            <div class="card-header bg-white">
                                Tree with Checkbox
                            </div>
                            <div class="card-body m-t-35">
                                <div id="jstree5">
                                    <ul>
                                        <li data-jstree='{"opened":true}'>
                                            Root node
                                            <ul>
                                                <li>Child node 1
                                                    <ul>
                                                        <li>Child node 1.1</li>
                                                        <li>Child node 1.2
                                                            <ul>
                                                                <li>Child node 1.2.1</li>
                                                                <li>Child node 1.2.2</li>
                                                            </ul>
                                                        </li>
                                                        <li>Child node 1.3</li>
                                                    </ul>
                                                </li>
                                                <li>Child node 2
                                                    <ul>
                                                        <li>Child node 2.1</li>
                                                        <li>Child node 2.2</li>
                                                    </ul>
                                                </li>
                                                <li>Child node 3</li>
                                                <li data-jstree='{"opened":true}'>Child node 4
                                                    <ul>
                                                        <li>Child node 4.1</li>
                                                        <li>Child node 4.2</li>
                                                        <li>Child node 4.3
                                                            <ul>
                                                                <li>Child node 4.1</li>
                                                                <li>Child node 4.2</li>
                                                                <li>Child node 4.3</li>
                                                            </ul>
                                                        </li>
                                                        <li>Child node 4.4</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    Child node 5
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="card m-t-35">
                            <div class="card-header bg-white">
                                Tree with Search
                            </div>
                            <div class="card-body m-t-35">
                                <form id="search">
                                    <input type="search" id="input_search" />
                                    <button class="btn btn-primary" type="submit">Search</button>
                                </form>
                                <div id="jstree6" class="m-t-25">
                                    <ul>
                                        <li data-jstree='{"opened":true}'>
                                            Root node
                                            <ul>
                                                <li>Child node 1
                                                    <ul>
                                                        <li>Child node 1.1</li>
                                                        <li>Child node 1.2
                                                            <ul>
                                                                <li>Child node 1.2.1</li>
                                                                <li>Child node 1.2.2</li>
                                                            </ul>
                                                        </li>
                                                        <li>Child node 1.3</li>
                                                    </ul>
                                                </li>
                                                <li>Child node 2
                                                    <ul>
                                                        <li>Child node 2.1</li>
                                                        <li>Child node 2.2</li>
                                                    </ul>
                                                </li>
                                                <li>Child node 3</li>
                                                <li data-jstree='{"opened":true}'>Child node 4
                                                    <ul>
                                                        <li>Child node 4.1</li>
                                                        <li>Child node 4.2</li>
                                                        <li>Child node 4.3
                                                            <ul>
                                                                <li>Child node 4.1</li>
                                                                <li>Child node 4.2</li>
                                                                <li>Child node 4.3</li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg">
                        <div class="card m-t-35">
                            <div class="card-header bg-white">
                                Tree with Sort
                            </div>
                            <div class="card-body m-t-35">
                                <div id="jstree7">
                                    <ul>
                                        <li data-jstree='{"opened":true}'>
                                            Root node
                                            <ul>
                                                <li>Child node 3</li>
                                                <li>Child node 1
                                                    <ul>
                                                        <li>Child node 1.1</li>
                                                        <li>Child node 1.2
                                                            <ul>
                                                                <li>Child node 1.2.1</li>
                                                                <li>Child node 1.2.2</li>
                                                            </ul>
                                                        </li>
                                                        <li>Child node 1.3</li>
                                                    </ul>
                                                </li>
                                                <li data-jstree='{"opened":true}'>Child node 4
                                                    <ul>
                                                        <li>Child node 4.1</li>
                                                        <li>Child node 4.2</li>
                                                        <li>Child node 4.3
                                                            <ul>
                                                                <li>Child node 4.1</li>
                                                                <li>Child node 4.2</li>
                                                                <li>Child node 4.3</li>
                                                            </ul>
                                                        </li>
                                                        <li>Child node 4.4</li>
                                                    </ul>
                                                </li>
                                                <li>Child node 2
                                                    <ul>
                                                        <li>Child node 2.1</li>
                                                        <li>Child node 2.2</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="card m-t-35">
                            <div class="card-header bg-white">
                                Tree with Events
                            </div>
                            <div class="card-body m-t-35">
                                <div id="jstree2"></div>
                                <br />

                                <span id="jstree_events">

                                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.outer -->
            </div>
        </div>
@stop
@section('footer_scripts')
<script type="text/javascript" src="{{asset('vendors/jstree/js/jstree.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/pages/jstree.js')}}"></script>
@stop
