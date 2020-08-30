@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
Calendar
@parent
@stop
{{-- page level styles --}}
@section('header_styles')
<!-- end of global styles-->
<link type="text/css" rel="stylesheet" href="{{asset('vendors/fullcalendar/css/fullcalendar.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('css/pages/calendar_custom.css')}}"/>
@stop

@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <h4 class="nav_top_align">
                        <i class="fa fa-calendar"></i>
                        Calendar
                    </h4>
                </div>
                <div class="col-sm-6 col-12">
                    <ol  class="breadcrumb float-right  nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="active breadcrumb-item">Calendar</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container cal_btn_hov">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            Draggable Events
                            <div class="float-right">
                                <a href="#" class="btn btn-link btn-xs plus_btn" data-toggle="modal" data-target="#myModal">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body m-t-35">
                            <div id='external-events'>
                                <div class='external-event bg-warning'>Team Out <i class="fa fa-times event-clear" aria-hidden="true"></i></div>
                                <div class='external-event bg-primary'>Product Seminar <i class="fa fa-times event-clear" aria-hidden="true"></i></div>
                                <div class='external-event bg-danger'>Client Meeting <i class="fa fa-times event-clear" aria-hidden="true"></i></div>
                                <div class='external-event bg-info'>Repeating Event <i class="fa fa-times event-clear" aria-hidden="true"></i></div>
                                <div class='external-event bg-success'>Event Celebrations <i class="fa fa-times event-clear" aria-hidden="true"></i></div>
                                <p class="well no-border no-radius">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id='drop-remove'>
                                        <span class="custom-control-label"></span>
                                        <span class="custom-control-description">remove after drop</span>
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal">Create event</a>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body m-t-35">
                            <div id="calendar"></div>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel1">
                                <i class="fa fa-plus"></i>
                                Create Event
                            </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <input type="text" id="new-event" class="form-control" placeholder="Event">
                                <div class="input-group-append dropdown">
                                    <button type="button" class="color-chooser-btn btn btn-default text-white dropdown-toggle" data-toggle="dropdown">
                                        Default
                                    </button>
                                    <div class="dropdown-menu float-right cal_modal_type color-chooser">
                                        <a class="color-primary text-center text-white dropdown-item" href="#">
                                            Primary
                                        </a>
                                        <a class="color-success text-center text-white dropdown-item" href="#">
                                            Success
                                        </a>
                                        <a class="color-info text-center text-white dropdown-item" href="#">
                                            Info
                                        </a>
                                        <a class="color-warning text-center text-white dropdown-item" href="#">
                                            warning
                                        </a>
                                        <a class="color-danger text-center text-white dropdown-item" href="#">
                                            Danger
                                        </a>
                                    </div>
                                </div>
                                <!-- /btn-group -->
                            </div>
                            <!-- /input-group -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger float-right" data-dismiss="modal">
                                Close
                                <i class="fa fa-times"></i>
                            </button>
                            <button type="button" class="btn btn-success pull-left" id="add-new-event" data-dismiss="modal">
                                <i class="fa fa-plus"></i>
                                Add
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.inner -->
        </div>
        <!-- /.outer -->
    </div>
<!-- edit Modal -->
<div class="modal fade" id="evt_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">
                    <i class="fa fa-plus"></i>
                    Edit Event
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="input-group">
                    <input type="text" id="event_title" class="form-control" placeholder="Event">
                    <div class="input-group-append dropdown">
                        <button type="button" class="btn btn-default text-white dropdown-toggle color-chooser-btn" data-toggle="dropdown">
                            Default
                            <span class="caret"></span>
                        </button>
                        <div class="dropdown-menu float-right cal_modal_type color-chooser">
                            <a class="color_primary text-center dropdown-item text-white" href="#">
                                Primary
                            </a>
                            <a class="color_success text-center dropdown-item text-white" href="#">
                                Success
                            </a>
                            <a class="color_info text-center dropdown-item text-white" href="#">
                                Info
                            </a>
                            <a class="color_warning text-center dropdown-item text-white" href="#">
                                warning
                            </a>
                            <a class="color_danger text-center dropdown-item text-white" href="#">
                                Danger
                            </a>
                        </div>
                    </div>
                    <!-- /btn-group -->
                </div>
                <!-- /input-group -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger float-right" data-dismiss="modal">
                    Close
                    <i class="fa fa-times"></i>
                </button>
                <button type="button" class="btn btn-success pull-left text_save" data-dismiss="modal">
                    Update
                </button>
            </div>
        </div>
    </div>

</div>
<!-- global scripts-->
@stop
<!-- global scripts-->
@section('footer_scripts')
<!-- end of global scripts-->
<!--plugin script-->
<script type="text/javascript" src="{{asset('vendors/moment/js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/fullcalendar/js/fullcalendar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/pluginjs/calendarcustom.js')}}" ></script>
<!-- end of plugin scripts -->
<script type="text/javascript" src="{{asset('js/pages/calendar.js')}}"></script>

@stop