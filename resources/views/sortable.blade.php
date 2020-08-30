@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Sortable
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/sortable.css')}}"/>
    <!-- end of page level styles -->
@stop


{{-- Page content --}}
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-lg col-sm-4">
                    <h4 class="nav_top_align skin_txt">
                        <i class="fa fa-anchor"></i>
                        Sortable
                    </h4>
                </div>
                <div class="col-lg col-sm-8">
                    <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Components</a>
                        </li>
                        <li class="active breadcrumb-item">Sortable</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <section class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-white">
                                Multi-list
                            </div>
                            <div class="card-body">
                                <div id="multi" class="row">
                                    <div class="col-lg-4 m-t-25">
                                        <div class="layer tile" data-force="30">
                                            <div class="tile__name">Group A</div>
                                            <div class="tile__list">
                                                <img src="{{asset('img/authors/avatar.jpg')}}" alt="image" />
                                                <img src="{{asset('img/roundicons/flat/Food-19.png')}}" alt="image"/>
                                                <img src="{{asset('img/roundicons/flat/Technology-10.png')}}" alt="image"/>
                                                <img src="{{asset('img/gallery/full/1.jpg')}}" alt="image"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 m-t-25">
                                        <div class="layer tile" data-force="25">
                                            <div class="tile__name">Group B</div>
                                            <div class="tile__list">
                                                <img src="{{asset('img/roundicons/flat/Technology-10.png')}}" alt="image"/>
                                                <img src="{{asset('img/roundicons/flat/Food-19.png')}}" alt="image"/>
                                                <img src="{{asset('img/authors/avatar.jpg')}}" alt="image"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 m-t-25">
                                        <div class="layer tile" data-force="20">
                                            <div class="tile__name">Group C</div>
                                            <div class="tile__list">
                                                <img src="{{asset('img/authors/avatar7.jpg')}}" alt="image"/>
                                                <img src="{{asset('img/authors/avatar.jpg')}}" alt="image"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card m-t-35">
                            <div class="card-header bg-white">
                                Sortable List 1
                            </div>
                            <div class="card-body m-t-25">
                                <div data-force="30" class="layer block">
                                    <ul id="foo" class="block__list block__list_words block_list_color1 text-center">
                                        <li>List 1</li>
                                        <li>List 2</li>
                                        <li>List 3</li>
                                        <li>List 4</li>
                                        <li>List 5</li>
                                        <li>List 6</li>
                                        <li>List 7</li>
                                        <li>List 8</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card m-t-35">
                            <div class="card-header bg-white">
                                Sortable List 2
                            </div>
                            <div class="card-body m-t-25">
                                <div data-force="18" class="layer block">
                                    <ul id="bar" class="block__list block__list_tags">
                                        <li class="btn btn-raised btn-primary">Item One
                                            <div class="ripple-container"></div>
                                        </li>
                                        <li class="btn btn-raised btn-danger">Item Two
                                            <div class="ripple-container"></div>
                                        </li>
                                        <li class="btn btn-raised btn-warning">Item Three
                                            <div class="ripple-container"></div>
                                        </li>
                                        <li class="btn btn-raised btn-info">Item Four
                                            <div class="ripple-container"></div>
                                        </li>
                                        <li class="btn btn-raised btn-success">Item Five
                                            <div class="ripple-container"></div>
                                        </li>
                                        <li class="btn btn-raised btn-primary">Item Six
                                            <div class="ripple-container"></div>
                                        </li>
                                        <li class="btn btn-raised btn-danger">Item Seven
                                            <div class="ripple-container"></div>
                                        </li>
                                        <li class="btn btn-raised btn-warning">Item Eight
                                            <div class="ripple-container"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card m-t-35">
                            <div class="card-header bg-white">
                                Addable list
                            </div>
                            <div class="card-body m-t-25">
                                <div id="filter">
                                    <div class="block__list">
                                        <div class="editable_section">
                                            <div class="row">
                                                <div class="col-12 px-0">
                                                    <ul id="editable" class="list-unstyled">
                                                        <li>text number one<i class="fa fa-close"></i></li>
                                                        <li>text number two<i class="fa fa-close"></i></li>
                                                        <li>text number three<i class="fa fa-close"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <button data-target="#myModal" data-toggle="modal" class="btn btn-primary btn-block editable_add">Add</button>
                                    </div>
                                </div>
                            </div>
                            <!-- modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">New List</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="#" method="post" class="form" id="myform">
                                                <div class="form-group is-empty label-floating">
                                                    <label class="control-label" for="list-name">Name:</label>
                                                    <input type="text" class="form-control" id="list-name" required>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-warning" id="modal_close_btn" data-dismiss="modal">Close</button>
                                            <input type="submit" class="btn btn-primary" id="save" value="Save">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card m-t-35">
                            <div class="card-header bg-white">
                                Advanced Groups
                            </div>
                            <div class="card-body">
                                <div id="advanced" class="row text-center">

                                    <div class="col-lg-4 m-t-35">
                                        <div class="block__list block__list_words block_list_color2">
                                            <h4 class="block__list-title text-info">pull & put</h4>
                                            <ul id="advanced-1" class="list-unstyled">
                                                <li>Item pull and put 1</li>
                                                <li>Item pull and put 2</li>
                                                <li>Item pull and put 3</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 m-t-35">
                                        <div class="block__list block__list_words block_list_color2">
                                            <h4 class="block__list-title text-info">only pull (clone) no&nbsp;reordering</h4>
                                            <ul id="advanced-2" class="list-unstyled">
                                                <li>Only pull 1</li>
                                                <li>Only pull 2</li>
                                                <li>Only pull 3</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 m-t-35">
                                        <div class="block__list block__list_words block_list_color2">
                                            <h4 class="block__list-title text-info">only put</h4>
                                            <ul id="advanced-3" class="list-unstyled">
                                                <li>Money</li>
                                                <li>Force</li>
                                                <li>Agility</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- /.outer -->
@stop
{{-- page level scripts --}}
@section('footer_scripts')
    <!--Plugin scripts-->
    <script type="text/javascript" src="{{asset('vendors/sortable/js/Sortable.js')}}"></script>
    <!--End of Plugin scripts-->
    <!--Page level scripts-->
    <script type="text/javascript" src="{{asset('js/pages/sortable.js')}}"></script>
    <!-- end of Page level scripts-->
@stop