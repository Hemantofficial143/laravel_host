@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Date time picker
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--plugin syles-->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/inputlimiter/css/jquery.inputlimiter.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/jquery-tagsinput/css/jquery.tagsinput.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/daterangepicker/css/daterangepicker.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/datepicker/css/bootstrap-datepicker.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/bootstrap-switch/css/bootstrap-switch.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/jasny-bootstrap/css/jasny-bootstrap.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/datetimepicker/css/DateTimePicker.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/j_timepicker/css/jquery.timepicker.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/clockpicker/css/jquery-clockpicker.css')}}" />
    <!-- end of plugin styles -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/colorpicker_hack.css')}}" />
    <!--End of page level styles-->
@stop


{{-- Page content --}}
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-sm-5 col-lg skin_txt">
                    <h4 class="nav_top_align">
                        <i class="fa fa-pencil"></i>
                        Date Time Picker
                    </h4>
                </div>
                <div class="col-sm-7 col-lg">
                    <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Forms</a>
                        </li>
                        <li class="active breadcrumb-item">Date Time Picker</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <!-- BEGIN DATE PICKER -->
            <div class="row">
                <!-- .col-lg-12 -->
                <div class="col">
                    <div class="card form_elements_datepicker">
                        <div class="card-header bg-white">
                            Date Picker
                        </div>
                        <div class="card-body" id="datePickerBlock">
                            <div class="row">
                                <div class="col-lg input_field_sections">
                                    <h5>Format specified via options</h5>
                                    <form>
                                        <input type="text" class="form-control" placeholder="dd-mm-yyyy"
                                               id="dp1">
                                    </form>
                                </div>
                                <div class="col-lg input_field_sections">
                                    <h5>Format specified via data tag</h5>
                                    <form>
                                        <input type="text" class="form-control" placeholder="dd/mm/yyyy"
                                               data-date-format="dd/mm/yyyy" id="dp2">
                                    </form>
                                </div>
                                <div class="col-lg input_field_sections">
                                    <h5>Field with different style</h5>
                                    <form>
                                        <input type="text" class="form-control" data-field="datetime">
                                    </form>
                                    <div id="dtBox"></div>
                                </div>
                            </div>
                            <div class="row m-b-20">
                                <div class="col-lg input_field_sections">
                                    <h5>As component</h5>
                                    <form>
                                        <div class="input-group input-append date input-group-append" id="dp3"
                                             data-date-format="dd-mm-yyyy">
                                            <input class="form-control" type="text" placeholder="dd-mm-yyyy">
                                            <span class="input-group-text add-on border-left-0 rounded-right">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg input_field_sections">
                                    <h5>Start with years viewMode</h5>
                                    <form>
                                        <div class="input-group input-append  date input-group-append" id="dpYears"
                                             data-date-format="yyyy-mm-dd" data-date-viewmode="years">
                                            <input class="form-control" type="text" placeholder="yyyy-mm-dd">
                                            <span class="input-group-text add-on border-left-0 rounded-right">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg input_field_sections">
                                    <h5>Months and year</h5>
                                    <form>
                                        <div class="input-group input-append  date input-group-append" id="dpMonths"
                                             data-date-format="mm/yyyy" data-date-viewmode="years"
                                             data-date-minviewmode="months">
                                            <input class="form-control" type="text" placeholder="mm/yyyy">
                                            <span class="input-group-text add-on border-left-0 rounded-right">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- END DATE PICKER -->
            <!-- .row -->
            <div class="row">
                <!-- .col-lg-12 -->
                <div class="col">
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            Date Range Picker
                        </div>
                        <div class="card-body" id="dateRangePickerBlock">
                            <div class="row">
                                <div class="col-lg input_field_sections">
                                    <h5>Input initially empty</h5>
                                    <form>
                                        <div class="input-group input-group-prepend">
                                                <span class="input-group-text border-right-0 rounded-left rounded_right">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                            <input type="text" class="form-control" id="date_range"
                                                   name="date range">
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg input_field_sections">
                                    <h5>Pre-defined Ranges & Callback</h5>
                                    <form>
                                        <div class="input-group input-group-prepend">
                                                <span class="input-group-text border-right-0 rounded-left rounded_right">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                            <input type="text" class="form-control" id="reportrange"
                                                   placeholder="dd/mm/yyyy-dd/mm/yyyy">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row m-b-20">
                                <div class="col-lg-6 input_field_sections">
                                    <h5>Reservation dates</h5>
                                    <form>
                                        <div class="input-group input-group-prepend">
                                                <span class="input-group-text border-right-0 rounded-left rounded_right">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                            <input type="text" name="reservation" id="reservation"
                                                   class="form-control" value="01/10/2016 - 02/10/2016">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.block -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!--END DATE RANGE PICKER -->
            <!-- BEGIN TIME PICKER -->
            <div class="row">
                <div class="col">
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            Color Picker
                        </div>
                        <div class="card-body" id="colorPickerBlock">
                            <div class="row m-b-20">
                                <div class="col-lg-6 col-12 input_field_sections">
                                    <h5>Picker with hexa format</h5>
                                    <form>
                                        <input type="text" class="form-control" placeholder="#8fff00" id="cp1">
                                    </form>
                                </div>
                                <div class="col-lg-6 col-12 input_field_sections">
                                    <h5>Picker with the rgba format</h5>
                                    <form>
                                        <input type="text" class="form-control" placeholder="rgb(0,194,255,1)"
                                               id="cp-2" data-color-format="rgba">
                                    </form>
                                </div>
                                <div class="col-lg-6 col-12 input_field_sections">
                                    <h5>As component</h5>
                                    <form>
                                        <div class="input-group input-group-append color">
                                            <input type="text" class="form-control" placeholder="#eee"
                                                   data-color-format="hash" id="cp3">
                                            <span class="input-group-text border-left-0 rounded-right">
                                                   <i class="fa fa-crosshairs" aria-hidden="true"></i>
                                                </span>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6 col-12 input_field_sections">
                                    <h5>Using events to work with the color</h5>
                                    <form>
                                        <a href="#" class="btn btn-warning" id="cp4" data-color-format="hex">Change
                                            background color</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.BODY -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!-- END COLOR PICKER -->
            <div class="row">
                <div class="col">
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            Time Picker
                        </div>
                        <div class="card-body time_picker_section">
                            <div class="row m-b-20">
                                <div class="col-lg-6 input_field_sections">
                                    <h5>24hr Timepicker</h5>
                                    <form>
                                        <div class="input-group input-group-append">
                                            <input type="text" class="form-control" data-field="time">
                                            <span class="input-group-text border-left-0 rounded-right add-on">
                                                    <i class="fa fa-clock-o"></i>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6 input_field_sections">
                                    <h5>Set Time</h5>
                                    <form>
                                        <div class="input-group">
                                            <input id="setTimeExample" type="text"
                                                   class="time ui-timepicker-input form-control"
                                                   autocomplete="off">
                                            <span class="input-group-append">
                                                <button class="btn btn-primary" id="setTimeButton" type="button">Set current time</button>
                                                </span>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6 input_field_sections">
                                    <h5>Default Clockpicker</h5>
                                    <form>
                                        <div class="input-group clockpicker1 input-group-append">
                                            <input type="text" class="form-control" data-placement="top"
                                                   data-align="top" value="10:30">
                                            <span class="input-group-text add-on border-left-0 rounded-right">
                                                    <i class="fa fa-clock-o"></i>
                                                </span>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6 input_field_sections">
                                    <h5>Auto Close</h5>
                                    <form>
                                        <div class="input-group clockpicker2 input-group-append" data-align="top"
                                             data-placement="top" data-autoclose="true">
                                            <input type="text" class="form-control" value="15:14">
                                            <span class="input-group-text border-left-0 rounded-right add-on">
                                                    <i class="fa fa-clock-o"></i>
                                                </span>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6 input_field_sections">
                                    <h5>Align Top</h5>
                                    <form>
                                        <div class="input-group">
                                            <div class="input-group input-group-append">
                                                <input type="text" class="form-control" id="single_input2"
                                                       data-placement="top" data-align="top" value="13:14">
                                                <span class="input-group-text border-left-0 rounded-right add-on">
                                                    <i class="fa fa-clock-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6 input_field_sections">
                                    <h5>Time Now</h5>
                                    <form>
                                        <div class="input-group">
                                            <div class="input-group">
                                                <input class="form-control" id="single_input1"
                                                       data-placement="top" data-align="top" placeholder="Now">
                                                <span class="input-group-append">
                                                    	<button type="button" id="check_minutes"
                                                                class="btn btn-primary">Check the minutes</button>
                                                    </span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END TIME PICKER -->
            <!-- .row -->
        </div>
        <!-- /.inner --> </div>
    <!-- /.outer -->
@stop
{{-- page level scripts --}}
@section('footer_scripts')
    <!-- plugin scripts -->
    <script type="text/javascript" src="{{asset('vendors/jquery.uniform/js/jquery.uniform.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/inputlimiter/js/jquery.inputlimiter.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/jquery-tagsinput/js/jquery.tagsinput.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/pluginjs/jquery.validVal.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/inputmask/js/jquery.inputmask.bundle.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/moment/js/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/daterangepicker/js/daterangepicker.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/autosize/js/jquery.autosize.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/jasny-bootstrap/js/jasny-bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/jasny-bootstrap/js/inputmask.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/datetimepicker/js/DateTimePicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/j_timepicker/js/jquery.timepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/clockpicker/js/jquery-clockpicker.min.js')}}"></script>
    <!--end of plugin scripts-->
    <script type="text/javascript" src="{{asset('js/form.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/pages/datetime_piker.js')}}"></script>
    <!-- end of global scripts-->
@stop