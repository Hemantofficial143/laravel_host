@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Sliders
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--Plugin styles-->
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/ion-rangeslider/css/ion.rangeSlider.skinFlat.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/ion-rangeslider/css/ion.rangeSlider.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/bootstrap-slider/css/bootstrap-slider.min.css')}}" />
    <!--End of plugin styles-->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/slider_ion.css')}}"/>
    <!-- end of page level styles -->
@stop


{{-- Page content --}}
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-lg col-sm-4">
                    <h4 class="nav_top_align">
                        <i class="fa fa-anchor"></i>
                        Sliders
                    </h4>
                </div>
                <div class="col-lg col-sm-8">
                    <ol  class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Components</a>
                        </li>
                        <li class="active breadcrumb-item">Sliders</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-white">
                            Bootstrap Sliders
                        </div>
                        <div class="card-body m-t-30">
                            <!--slider-->
                            <form class="form-horizontal ion_range_bold">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group danger_tooltip">
                                            <div>
                                                <label for="ex1Slider" class="col-form-label text-lg-right">Basic Slider</label>
                                            </div>
                                            <div>
                                                <input id="ex1Slider" data-slider-id='ex1Slider' type="text" class="slider form-control" data-slider-handle="square" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14" />
                                            </div>
                                        </div>
                                        <div class="form-group primary_tooltip">
                                            <div class="m-t-30">
                                                <label for="bootstrap_slider2" class="col-form-label text-lg-right">Money Range($)</label>
                                            </div>
                                            <div>
                                                <input id="bootstrap_slider2" type="text" data-slider-id='bootstrap_slider2' class="slider form-control" data-slider-handle="square" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,450]" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="m-t-30">
                                                <label class="col-form-label">Choose Color</label>
                                            </div>
                                            <div>
                                                <div class="well">
                                                    <p>
                                                        <label for="red" class="rgb_right_align">R</label>
                                                        <input type="text" class="slider form-control" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="red_color" id="red" data-slider-tooltip="hide" data-slider-handle="square" />
                                                    </p>
                                                    <p>
                                                        <label for="green" class="rgb_right_align">G</label>
                                                        <input type="text" class="slider form-control" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="green_color" id="green" data-slider-tooltip="hide" data-slider-handle="square" />
                                                    </p>
                                                    <p>
                                                        <label for="blue" class="rgb_right_align">B</label>
                                                        <input type="text" class="slider form-control" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="blue_color" id="blue" data-slider-tooltip="hide" data-slider-handle="square" />
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div>Output of RGB color format</div>
                                            <div id="RGB_color"></div>
                                        </div>
                                        <div class="form-group">
                                            <div class="m-t-35">
                                                <label class="col-form-label text-right">Step Slider</label>
                                            </div>
                                            <div>
                                                <input id="bootstrap_slider10" type="text" data-provide="slider" data-slider-ticks="[1, 2, 3]" data-slider-ticks-labels='["short", "medium", "long"]'
                                                       data-slider-min="1" data-slider-max="3" data-slider-step="1" data-slider-value="3" data-slider-tooltip="hide" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group primary_tooltip">
                                            <div class="media_max_991">
                                                <label for="bootstrap_slider5" class="col-form-label text-lg-right">Destroy</label>
                                            </div>
                                            <div>
                                                <div>
                                                    <input id="bootstrap_slider5" class="form-control" type="text" data-slider-min="-5" data-slider-max="20" data-slider-step="1" data-slider-handle="square" data-slider-value="0" />
                                                </div>
                                                <div>
                                                    <button type="button"  id="destroyEx5Slider" class="btn btn-primary sliders_destroy_margin">Destroy</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group success_tooltip">
                                            <div class="m-t-30">
                                                <label for="bootstrap_slider6" class="col-form-label text-lg-right">Current Range</label>
                                            </div>
                                            <div>
                                                <div>
                                                    <input id="bootstrap_slider6" type="text" class="form-control" data-slider-id='bootstrap_slider6' data-slider-min="-5" data-slider-handle="square" data-slider-max="20" data-slider-step="1" data-slider-value="3" />
                                                </div>
                                                <div id="ex6CurrentSliderValLabel" class="sliders_current_slider3">
                                                    <label class="sliders_current_slider31">Current Slider Value:
                                                        <span id="ex6SliderVal">3</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group disable_tooltip">
                                            <div class="m-t-15">
                                                <label for="bootstrap_slider7" id="slider_enabled">Disabled Slider</label>
                                            </div>
                                            <div>
                                                <input id="bootstrap_slider7" type="text"  data-slider-min="0" data-slider-max="20" data-slider-handle="square" data-slider-step="1" data-slider-value="5" data-slider-enabled="false"/>
                                                <div class="enabled_top">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" id="ex7-enabled" class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                        <span class="custom-control-description" id="enable_text">Enable</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mint_tooltip">
                                            <div class="m-t-15">
                                                <label for="bootstrap_slider8" class="col-form-label text-lg-right">Tooltip Slider</label>
                                            </div>
                                            <div>
                                                <input id="bootstrap_slider8" class="slider form-control" data-slider-id='bootstrap_slider8' type="text" data-slider-min="0" data-slider-handle="square" data-slider-max="20" data-slider-step="1" data-slider-value="14" />
                                            </div>
                                        </div>
                                        <div class="form-group last warning_tooltip">
                                            <div class="m-t-30">
                                                <label for="bootstrap_slider9" class="col-form-label text-lg-right">Precision Slider</label>
                                            </div>
                                            <div>
                                                <input id="bootstrap_slider9" class="slider form-control" data-slider-id='bootstrap_slider9' data-slider-handle="square" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!--slider ends-->
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            Ion Range Sliders
                        </div>
                        <div class="card-body m-t-35">
                            <!--ion-->
                            <form class="form-horizontal trans_ir_label">
                                <div class="form-group row m-t-25">
                                    <div class="col-lg-2 text-lg-right">
                                        <label for="example_1" class="col-form-label">Basic Slider</label>
                                    </div>
                                    <div class="col-lg-10">
                                        <input id="example_1" class="form-control" type="text" name="basic_slider"/>
                                    </div>
                                </div>
                                <div class="form-group row m-t-25">
                                    <div class="col-lg-2 text-lg-right">
                                        <label for="example_2" class="col-form-label">Money Range</label>
                                    </div>
                                    <div class="col-lg-10">
                                        <input id="example_2" type="text" class="form-control" name="money_range"/>
                                    </div>
                                </div>
                                <div class="form-group row m-t-25">
                                    <div class="col-lg-2 text-lg-right">
                                        <label for="example_3" class="col-form-label">Gold Range</label>
                                    </div>
                                    <div class="col-lg-10">
                                        <input id="example_3" class="form-control" type="text" name="gold_range"/>
                                    </div>
                                </div>
                                <div class="form-group row m-t-25">
                                    <div class="col-lg-2 text-lg-right">
                                        <label for="example_4" class="col-form-label">Temperature Slider</label>
                                    </div>
                                    <div class="col-lg-10">
                                        <input id="example_4" class="form-control" type="text" name="temp"/>
                                    </div>
                                </div>
                                <div class="form-group row m-t-25">
                                    <label for="example_5" class="col-lg-2 col-form-label text-lg-right">Month Slider</label>
                                    <div class="col-lg-10">
                                        <input id="example_5" class="form-control" type="text" name="month_slider"/>
                                    </div>
                                </div>
                                <div class="form-group row m-t-25">
                                    <div class="col-lg-2 text-lg-right">
                                        <label for="example_6" class="col-form-label">Year Range</label>
                                    </div>
                                    <div class="col-lg-10">
                                        <input id="example_6" class="form-control" type="text" name="year_range"/>
                                    </div>
                                </div>
                                <div class="form-group row m-t-25">
                                    <div class="col-lg-2 text-lg-right">
                                        <label for="example_7" class="col-form-label">Year Slider</label>
                                    </div>
                                    <div class="col-lg-10">
                                        <input id="example_7" class="form-control" type="text" name="year_slider"/>
                                    </div>
                                </div>
                            </form>
                            <!--ion ends-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of transtions -->
        </div>
        <!-- /.inner -->
    </div>
    <!-- /.outer -->
@stop
{{-- page level scripts --}}
@section('footer_scripts')
    <!--Plugin scripts-->
    <script type="text/javascript" src="{{asset('vendors/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/bootstrap-slider/js/bootstrap-slider.min.js')}}"></script>
    <!--End of plugin scripts-->
    <!--Page level scripts-->
    <script type="text/javascript" src="{{asset('js/pages/sliders.js')}}"></script>
    <!--End of Page level scripts-->
@stop