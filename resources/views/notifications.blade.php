@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Notifications
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/toastr/css/toastr.min.css')}}" />
    <!--page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/toastr.css')}}" />
    <!-- end of page level styles -->
@stop


{{-- Page content --}}
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-sm-4">
                    <h4 class="nav_top_align">
                        <i class="fa fa-anchor"></i>
                        Notifications
                    </h4>
                </div>
                <div class="col-sm-8">
                    <ol  class="breadcrumb float-right nav_breadcrumb_top_align notifications_text_hover">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Components</a>
                        </li>
                        <li class="active breadcrumb-item">Notifications</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer notifications_page">
        <div class="inner row bg-container">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-white">
                        Notifications
                    </div>
                    <div class="card-body basic_notifications">
                        <div id="layouts">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <p class="m-t-25">
                                        <span class="lay-title">Top</span>
                                        <span class="runner btn-outline-success" data-layout="top" data-type="success">Success</span>
                                        <span class="runner btn-outline-danger" data-layout="top" data-type="error">Error</span>
                                        <span class="runner btn-outline-primary" data-layout="top" data-type="confirm">Confirm</span>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 text-center">
                                    <p class="m-t-10">
                                        <span class="lay-title">Top Left</span>
                                        <span class="runner btn-outline-danger" data-layout="topLeft" data-type="error">Error</span>
                                        <span class="runner btn-outline-warning" data-layout="topLeft" data-type="warning">Warning</span>
                                        <span class="runner btn-outline-primary" data-layout="topLeft" data-type="confirm">Confirm</span>
                                    </p>
                                </div>
                                <div class="col-lg-4 text-center">
                                    <p class="m-t-10">
                                        <span class="lay-title">Top Center</span>
                                        <span class="runner btn-outline-success" data-layout="topCenter" data-type="success">Success</span>
                                        <span class="runner btn-outline-danger" data-layout="topCenter" data-type="error">Error</span>
                                        <span class="runner btn-outline-warning" data-layout="topCenter" data-type="warning">Warning</span>
                                    </p>
                                </div>
                                <div class="col-lg-4 text-center">
                                    <p class="m-t-10">
                                        <span class="lay-title">Top Right</span>
                                        <span class="runner btn-outline-warning" data-layout="topRight" data-type="warning">Warning</span>
                                        <span class="runner btn-outline-info" data-layout="topRight" data-type="information">Information</span>
                                        <span class="runner btn-outline-primary" data-layout="topRight" data-type="confirm">Confirm</span>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 text-center">
                                    <p class="m-t-10">
                                        <span class="lay-title">Center Left</span>
                                        <span class="runner btn-outline-info" data-layout="centerLeft" data-type="information">Information</span>
                                        <span class="runner btn-outline-success" data-layout="centerLeft" data-type="success">Success</span>
                                        <span class="runner btn-outline-warning" data-layout="centerLeft" data-type="warning">Warning</span>
                                    </p>
                                </div>
                                <div class="col-lg-4 text-center">
                                    <p class="m-t-10">
                                        <span class="lay-title">Center</span>
                                        <span class="runner btn-outline-warning" data-layout="center" data-type="warning">Warning</span>
                                        <span class="runner btn-outline-info" data-layout="center" data-type="information">Information</span>
                                        <span class="runner btn-outline-primary" data-layout="center" data-type="confirm">Confirm</span>
                                    </p>
                                </div>
                                <div class="col-lg-4 text-center">
                                    <p class="m-t-10">
                                        <span class="lay-title">Center Right</span>
                                        <span class="runner btn-outline-primary" data-layout="centerRight" data-type="alert">Alert</span>
                                        <span class="runner btn-outline-success" data-layout="centerRight" data-type="success">Success</span>
                                        <span class="runner btn-outline-primary" data-layout="centerRight" data-type="confirm">Confirm</span>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 text-center">
                                    <p class="m-t-10">
                                        <span class="lay-title">Bottom Left</span>
                                        <span class="runner btn-outline-success" data-layout="bottomLeft" data-type="success">Success</span>
                                        <span class="runner btn-outline-warning" data-layout="bottomLeft" data-type="warning">Warning</span>
                                        <span class="runner btn-outline-primary" data-layout="bottomLeft" data-type="confirm">Confirm</span>
                                    </p>
                                </div>
                                <div class="col-lg-4 text-center">
                                    <p class="m-t-10">
                                        <span class="lay-title">Bottom Center</span>
                                        <span class="runner btn-outline-primary" data-layout="bottomCenter" data-type="alert">Alert</span>
                                        <span class="runner btn-outline-danger" data-layout="bottomCenter" data-type="error">Error</span>
                                        <span class="runner btn-outline-info" data-layout="bottomCenter" data-type="information">Information</span>
                                    </p>
                                </div>
                                <div class="col-lg-4 text-center">
                                    <p class="m-t-10">
                                        <span class="lay-title">Bottom Right</span>
                                        <span class="runner btn-outline-primary" data-layout="bottomRight" data-type="alert">Alert</span>
                                        <span class="runner btn-outline-success" data-layout="bottomRight" data-type="success">Success</span>
                                        <span class="runner btn-outline-danger" data-layout="bottomRight" data-type="error">Error</span>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <p class="m-t-10">
                                        <span class="lay-title">Bottom</span>
                                        <span class="runner btn-outline-primary" data-layout="bottom" data-type="alert">Alert</span>
                                        <span class="runner btn-outline-success" data-layout="bottom" data-type="success">Success</span>
                                        <span class="runner btn-outline-warning" data-layout="bottom" data-type="warning">Warning</span>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card m-t-35">
                    <div class="card-header bg-white">
                        <i class="livicon" data-name="bell" data-c="#fff" data-hc="white" data-size="18" data-loop="true"></i>
                        Toastr Notification
                    </div>
                    <div class="card-body m-t-35">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5> <span class="text-info"><i class="fa fa-info-circle"> </i> </span> If you want to change the position of notification, click on clear toast</h5>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group m-t-20">
                                    <label class="col-form-label" for="title">Title</label>
                                    <input id="title" type="text" class="form-control" value="Toastr Notifications" placeholder="Enter a title ...">
                                </div>
                                <div class="form-group m-t-25">
                                    <label class="col-form-label" for="message">Message</label>
                                    <textarea class="form-control resize_vertical" id="message" rows="3" placeholder="Enter a message ...">Gnome &amp; Growl type non-blocking notifications</textarea>
                                </div>
                                <div class="form-group m-t-25">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                        <label class="custom-control-label" for="customCheck1">Close Button</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="addBehaviorOnToastClick">
                                        <label class="custom-control-label" for="addBehaviorOnToastClick">Add behavior on toast click</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="debugInfo">
                                        <label class="custom-control-label" for="debugInfo">Debug</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group m-t-20" id="toastTypeGroup">
                                    <label class="col-form-label toast-type">Toast Type</label>
                                    <div class="radio-list padding-right10">
                                        <div>
                                            <label class="custom-control custom-radio">
                                                <input type="radio" name="toasts" class="custom-control-input custom-radio" value="success"
                                                       checked="">
                                                <span class="custom-control-label checked"></span> Success
                                            </label></div><div>
                                            <label class="custom-control custom-radio">
                                                <input type="radio" name="toasts" class="custom-control-input custom-radio" value="info">
                                                <span class="custom-control-label checked"></span> Info
                                            </label></div><div>
                                            <label class="custom-control custom-radio">
                                                <input type="radio" name="toasts" class="custom-control-input custom-radio" value="warning">
                                                <span class="custom-control-label checked"></span>Warning
                                            </label></div><div>
                                            <label class="custom-control custom-radio">
                                                <input type="radio" name="toasts" class="custom-control-input custom-radio" value="error">
                                                <span class="custom-control-label checked"> </span> Error
                                            </label></div>
                                    </div>
                                </div>
                                <div class="form-group m-t-25" id="positionGroup">
                                    <label class="col-form-label position-type">Position</label>
                                    <div class="radio-list">
                                        <div>
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input custom-radio"  name="positions" value="toast-top-left">
                                                <span class="custom-control-label checked"></span> Top Left
                                            </label></div><div>
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input custom-radio"  name="positions" value="toast-top-right" checked="">
                                                <span class="custom-control-label checked"></span> Top Right
                                            </label></div><div>
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input custom-radio"  name="positions" value="toast-top-full-width">
                                                <span class="custom-control-label checked"></span> Top Full Width
                                            </label></div><div>
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input custom-radio"  name="positions" value="toast-bottom-left">
                                                <span class="custom-control-label checked"></span> Bottom Left
                                            </label></div><div>
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input custom-radio"  name="positions" value="toast-bottom-right">
                                                <span class="custom-control-label checked"></span> Bottom Right
                                            </label></div><div>
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input custom-radio"  name="positions" value="toast-bottom-full-width">
                                                <span class="custom-control-label checked"></span> Bottom Full Width
                                            </label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="controls">
                                    <div class="form-group m-t-20">
                                        <label class="col-form-label" for="showEasing">Show Easing</label>
                                        <select class="form-control input-small" id="showEasing">
                                            <option>swing</option>
                                            <option>linear</option>
                                        </select>
                                    </div>
                                    <div class="form-group m-t-25">
                                        <label class="col-form-label" for="hideEasing">Hide Easing</label>
                                        <select id="hideEasing" class="form-control input-small">
                                            <option>swing</option>
                                            <option>linear</option>
                                        </select>
                                    </div>
                                    <div class="form-group m-t-25">
                                        <label class="col-form-label" for="showMethod">Show Method</label>
                                        <select id="showMethod" class="form-control input-small">
                                            <option value="show">show</option>
                                            <option value="fadeIn">fadeIn</option>
                                            <option value="slideDown">slideDown</option>
                                        </select>
                                    </div>
                                    <div class="form-group m-t-25">
                                        <label class="col-form-label" for="hideMethod">Hide Method</label>
                                        <select class="form-control input-small" id="hideMethod">
                                            <option value="">hide</option>
                                            <option value="fadeOut">fadeOut</option>
                                            <option value="slideUp">slideUp</option>
                                            <option value="show">show</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="controls">
                                    <div class="form-group m-t-20">
                                        <label class="col-form-label" for="showDuration">Show Duration</label>
                                        <input id="showDuration" type="text" placeholder="ms" class="form-control input-small" value="1000">
                                    </div>
                                    <div class="form-group m-t-25">
                                        <label class="col-form-label" for="hideDuration">Hide Duration</label>
                                        <input id="hideDuration" type="text" placeholder="ms" class="form-control input-small" value="1000">
                                    </div>
                                    <div class="form-group m-t-25">
                                        <label class="col-form-label" for="timeOut">Time out</label>
                                        <input id="timeOut" type="text" placeholder="ms" class="form-control input-small" value="5000">
                                    </div>
                                    <div class="form-group m-t-25">
                                        <label class="col-form-label" for="timeOut">Extended time out</label>
                                        <input id="extendedTimeOut" type="text" placeholder="ms" class="form-control input-small" value="1000">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 m-t-20">
                                <button type="button" class="btn btn-mint btn-raised toastrshow" id="showtoast">
                                    Show Toast
                                </button>
                                <button type="button" class="btn btn-warning btn-raised toastrshow" id="cleartoasts">
                                    Clear Toasts
                                </button>
                                <button type="button" class="btn btn-primary btn-raised toastrshow" id="clearlasttoast">Clear Last Toast
                                </button>
                            </div>
                        </div>
                        <br/>
                        <div class="row margin-top-10">
                            <div class="col-lg-12">
                                <pre id="toastrOptions" class="code_section"></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of taost notifications-->

            <!-- /.inner -->
        </div>
        <!-- /.outer -->
    </div>
    <!-- /.outer -->
@stop
{{-- page level scripts --}}
@section('footer_scripts')
    <!--Plugin scripts-->
    <script type="text/javascript" src="{{asset('vendors/moment/js/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/noty/js/jquery.noty.packaged.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/toastr/js/toastr.min.js')}}"></script>
    <!--End of plugin scripts-->
    <!--Page level scripts-->
    <script type="text/javascript" src="{{asset('js/pages/toastr_notifications.js')}}"></script>
    <!-- end page level scripts -->
@stop
