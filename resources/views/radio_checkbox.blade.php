@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Radio & Checkbox
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/bootstrap-switch/css/bootstrap-switch.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/switchery/css/switchery.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/radio_css/css/radiobox.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/checkbox_css/css/checkbox.min.css')}}" />
    <!--End of Plugin styles-->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/radio_checkbox.css')}}"/>
    <!-- end of page level styles -->
@stop


{{-- Page content --}}
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-lg col-sm-4">
                    <h4 class="nav_top_align">
                        <i class="fa fa-pencil"></i>
                        Radio & Checkbox
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
                            <a href="#">Forms</a>
                        </li>
                        <li class="breadcrumb-item active">Radio & Checkbox</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="row radio_custom_checkbox">
                <div class="col">
                    <div class="card">
                        <div class="card-header radio_card_bg">
                            Checkbox & Radio
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal">
                                <div class="row">
                                    <div class="col-12 col-md-6 m-t-35">
                                        <h5 class="checkbox_header_bottom">Bootstrap4 checkboxes</h5>
                                        <div class="left_align custom-controls-stacked">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" checked>
                                                <span class="custom-control-label"></span>
                                                <span class="custom-control-description">Checked</span>
                                            </label>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label"></span>
                                                <span class="custom-control-description">Unchecked</span>
                                            </label>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" checked disabled>
                                                <span class="custom-control-label"></span>
                                                <span class="custom-control-description">Disabled checked</span>
                                            </label>
                                            <label class="custom-control custom-checkbox m-b-0">
                                                <input type="checkbox" class="custom-control-input" disabled>
                                                <span class="custom-control-label"></span>
                                                <span class="custom-control-description">Disabled unchecked</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 m-t-35">
                                        <h5 class="checkbox_header_bottom">Bootstrap4 radio buttons</h5>
                                        <div class="left_align custom-controls-stacked">
                                            <label class="custom-control custom-radio">
                                                <input name="radio3" type="radio" class="custom-control-input" checked>
                                                <span class="custom-control-label"></span>
                                                <span class="custom-control-description">Checked</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input name="radio3" type="radio" class="custom-control-input">
                                                <span class="custom-control-label"></span>
                                                <span class="custom-control-description"> Unchecked</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input name="radio4" type="radio" class="custom-control-input" checked disabled>
                                                <span class="custom-control-label"></span>
                                                <span class="custom-control-description">Disabled checked</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input name="radio4" type="radio" class="custom-control-input" disabled>
                                                <span class="custom-control-label"></span>
                                                <span class="custom-control-description">Disabled unchecked</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 m-t-20">
                                        <h5 class="checkbox_header_bottom">Checkboxes with different colors</h5>
                                        <div class="left_align">
                                            <div class="form-group custom-controls-stacked">
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="default_checkbox">
                                                    <span class="custom-control-label custom_checkbox_default"></span>
                                                    <span class="custom-control-description text-default">Mint</span>
                                                </label>
                                                <label class="custom-control custom-checkbox ">
                                                    <input type="checkbox" class="custom-control-input" name="default_checkbox">
                                                    <span class="custom-control-label custom_checkbox_success"></span>
                                                    <span class="custom-control-description text-success">Success</span>
                                                </label>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="default_checkbox">
                                                    <span class="custom-control-label custom_checkbox_danger"></span>
                                                    <span class="custom-control-description text-danger">Danger</span>
                                                </label>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="default_checkbox">
                                                    <span class="custom-control-label custom_checkbox_primary"></span>
                                                    <span class="custom-control-description text-primary">Primary</span>
                                                </label>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="default_checkbox">
                                                    <span class="custom-control-label custom_checkbox_warning"></span>
                                                    <span class="custom-control-description text-warning">Warning</span>
                                                </label>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="default_checkbox">
                                                    <span class="custom-control-label custom_checkbox_info"></span>
                                                    <span class="custom-control-description text-info">Info</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 m-t-20">
                                        <h5 class="checkbox_header_bottom">Radio buttons with different colors</h5>
                                        <div class="left_align">
                                            <div class="form-group custom-controls-stacked">
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" name="default_radio" class="custom-control-input">
                                                    <span class="custom-control-label custom_checkbox_default"></span>
                                                    <span class="custom-control-description text-default">Mint</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" name="default_radio" class="custom-control-input">
                                                    <span class="custom-control-label custom_checkbox_success"></span>
                                                    <span class="custom-control-description text-success">Success</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" name="default_radio" class="custom-control-input">
                                                    <span class="custom-control-label custom_checkbox_danger"></span>
                                                    <span class="custom-control-description text-danger">Danger</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" name="default_radio" class="custom-control-input">
                                                    <span class="custom-control-label custom_checkbox_primary"></span>
                                                    <span class="custom-control-description text-primary">Primary</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" name="default_radio" class="custom-control-input">
                                                    <span class="custom-control-label custom_checkbox_warning"></span>
                                                    <span class="custom-control-description text-warning">Warning</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" name="default_radio" class="custom-control-input">
                                                    <span class="custom-control-label custom_checkbox_info"></span>
                                                    <span class="custom-control-description text-info">Info</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 m-t-20">
                                        <h5 class="checkbox_header_bottom">Checkboxes with animations</h5>
                                        <div class="row radio_custom_checkbox1">
                                            <div class="col-lg-6">
                                                <div class="row left_align">
                                                    <div class="col-lg-12">
                                                        <label><input class="checkbox-hey" type="checkbox"/><span> Hey</span></label>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label><input class="checkbox-inout" type="checkbox"/><span> Inout</span></label>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label><input class="checkbox-yo" type="checkbox"/><span> Yo</span></label>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label><input class="checkbox-up" type="checkbox"/><span> Up</span></label>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label><input class="checkbox-tv" type="checkbox"/><span> Tv</span></label>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label><input class="checkbox-omg" type="checkbox"/><span> Omg</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row left_align">
                                                    <div class="col-lg-12">
                                                        <label><input class="checkbox-away" type="checkbox"/><span> Away</span></label>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label><input class="checkbox-rotate" type="checkbox"/><span> Rotate</span></label>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label><input class="checkbox-roll" type="checkbox"/><span> Roll</span></label>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label><input class="checkbox-down" type="checkbox"/><span> Down</span></label>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label><input class="checkbox-jump" type="checkbox"/><span> Jump</span></label>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label><input class="checkbox-splash" type="checkbox"/><span> Splash</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 m-t-20">
                                        <h5 class="checkbox_header_bottom">Radio buttons with animations</h5>
                                        <div class="row radio_custom_checkbox1">
                                            <div class="col-lg-6">
                                                <div class="row left_align">
                                                    <div class="col-lg-12">
                                                        <label tabindex="0"><input class="radiobox-tremolo" type="radio" name="x" value="1"/><span> Tremolo</span></label>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label>  <input class="radiobox-boom" type="radio" name="x" value="3"/><span> Boom</span></label>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label>  <input class="radiobox-wheel" type="radio" name="x"/><span> Wheel</span></label>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label>  <input class="radiobox-scatman" type="radio" name="x"/><span> Scatman</span></label>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label>  <input class="radiobox-pump" type="radio" name="x"/><span> Pump</span></label>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label>  <input class="radiobox-hooray" type="radio" name="x"/><span> Hooray</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row left_align">
                                                    <div class="col-lg-12">
                                                        <label><input class="radiobox-boing" type="radio" name="x" value="2"/><span> Boing</span></label>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label>  <input class="radiobox-flash" type="radio" name="x"/><span> Flash</span></label>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label>  <input class="radiobox-return" type="radio" name="x"/><span> Return</span></label>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label>  <input class="radiobox-vertigo" type="radio" name="x"/><span> Vertigo</span></label>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label>  <input class="radiobox-focus" type="radio" name="x"/><span> Focus</span></label>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label><input class="radiobox-ufo" type="radio" name="x"/><span> Ufo</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.checkbox -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card m-t-35">
                        <div class="card-header radio_card_bg">
                            Advanced Checkbox
                        </div>
                        <div class="card-body m-t-10">
                            <div class="row">
                                <div class="col-12 col-md-6 m-t-20">
                                    <h5 class="sub_title">Transition Checkbox</h5>
                                    <div class="left_align">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                Unchecked checkbox
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" checked>
                                                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                Checked checkbox
                                            </label>
                                        </div>
                                        <div class="checkbox disabled">
                                            <label>
                                                <input type="checkbox" value="" disabled>
                                                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                Disabled checkbox
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 m-t-20">
                                    <h5 class="sub_title">Transition checkbox with different icon</h5>
                                    <div class="left_align">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon fa fa-rocket"></i></span>
                                                Unchecked checkbox
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" checked>
                                                <span class="cr"><i class="cr-icon fa fa-rocket"></i></span>
                                                Checked checkbox
                                            </label>
                                        </div>
                                        <div class="checkbox disabled">
                                            <label>
                                                <input type="checkbox" value="" disabled>
                                                <span class="cr"><i class="cr-icon fa fa-rocket"></i></span>
                                                Disabled checkbox
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <h5 class="sub_title radio_grouped_checkbox">Colored Checkbox</h5>
                                    <div class="left_align">
                                        <div class="checkbox">
                                            <label class="text-primary">
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                Primary checkbox
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="text-success">
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                Success checkbox
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="text-info">
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                Info checkbox
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="text-danger">
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                Danger checkbox
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="text-warning">
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                Warning checkbox
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="text-mint">
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                Mint checkbox
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <h5 class="sub_title radio_grouped_checkbox">Checkboxes with different sizes</h5>
                                    <div class="left_align">
                                        <div class="checkbox radio_Checkbox_size2">
                                            <label>
                                                <input type="checkbox">
                                                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                Big
                                            </label>
                                        </div>
                                        <div class="checkbox radio_Checkbox_size4">
                                            <label>
                                                <input type="checkbox">
                                                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                Default
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="small_font_check">
                                                <input type="checkbox">
                                                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                Small
                                            </label>
                                        </div>
                                    </div>
                                    <h5 class="sub_title radio_grouped_checkbox">Grouped Checkbox </h5>
                                    <div class="left_align">
                                        <div class="diff_colored_checkbox">
                                            <div class="btn-group d-inline-block" data-toggle="buttons">
                                                <label class="btn btn-success active">
                                                    <input type="checkbox">
                                                    <span class="fa fa-check"></span>
                                                </label>
                                                <label class="btn btn-primary">
                                                    <input type="checkbox">
                                                    <span class="fa fa-check"></span>
                                                </label>
                                                <label class="btn btn-info">
                                                    <input type="checkbox">
                                                    <span class="fa fa-check"></span>
                                                </label>
                                                <label class="btn btn-mint">
                                                    <input type="checkbox">
                                                    <span class="fa fa-check"></span>
                                                </label>
                                                <label class="btn btn-warning">
                                                    <input type="checkbox">
                                                    <span class="fa fa-check"></span>
                                                </label>
                                                <label class="btn btn-danger btn_danger_rad">
                                                    <input type="checkbox">
                                                    <span class="fa fa-check"></span>
                                                </label>
                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card m-t-25">
                        <div class="card-header radio_card_bg">
                            Advanced Radio
                        </div>
                        <div class="card-body m-t-10">
                            <div class="row">
                                <div class="col-12 col-md-6 m-t-20">
                                    <h5 class="sub_title">Transition Radio</h5>
                                    <div class="left_align">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="o3" value="">
                                                <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                                Unchecked radio
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="o3" value="" checked>
                                                <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                                Checked radio
                                            </label>
                                        </div>
                                        <div class="radio disabled">
                                            <label>
                                                <input type="radio" name="o3" value="" disabled>
                                                <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                                Disabled radio
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 m-t-20">
                                    <h5 class="sub_title">Transition radio with different icon</h5>
                                    <div class="left_align">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="o4" value="">
                                                <span class="cr"><i class="cr-icon fa fa-star"></i></span>
                                                Unchecked radio
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="o4" value="" checked>
                                                <span class="cr"><i class="cr-icon fa fa-star"></i></span>
                                                Checked radio
                                            </label>
                                        </div>
                                        <div class="radio disabled">
                                            <label>
                                                <input type="radio" name="o4" value="" disabled>
                                                <span class="cr"><i class="cr-icon fa fa-star"></i></span>
                                                Disabled radio
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <h5 class="sub_title radio_grouped_checkbox">Colored Radio</h5>
                                    <div class="left_align">
                                        <div class="radio">
                                            <label class="text-primary">
                                                <input type="radio" name="o31" value="" >
                                                <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                                Primary radio
                                            </label>
                                        </div>
                                        <div class="radio disabled">
                                            <label class="text-success">
                                                <input type="radio" name="o31" value="" >
                                                <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                                Success radio
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label class="text-info">
                                                <input type="radio" name="o31" value="">
                                                <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                                Info radio
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label class="text-danger">
                                                <input type="radio" name="o31" value="" >
                                                <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                                Danger radio
                                            </label>
                                        </div>
                                        <div class="radio disabled">
                                            <label class="text-warning">
                                                <input type="radio" name="o31" value="" >
                                                <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                                Warning radio
                                            </label>
                                        </div>
                                        <div class="radio disabled">
                                            <label class="text-mint">
                                                <input type="radio" name="o31" value="" >
                                                <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                                Mint radio
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <h5 class="sub_title radio_grouped_checkbox">Radio buttons with different sizes</h5>
                                    <div class="left_align">
                                        <div class="radio radio_Checkbox_size2">
                                            <label>
                                                <input type="radio" name="o5">
                                                <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                                Big
                                            </label>
                                        </div>
                                        <div class="radio radio_Checkbox_size4">
                                            <label>
                                                <input type="radio" name="o5">
                                                <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                                Default
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label class="small_font_check">
                                                <input type="radio" name="o5" value="">
                                                <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                                Small
                                            </label>
                                        </div>
                                    </div>
                                    <h5 class="sub_title radio_grouped_checkbox">Grouped Radio Buttons</h5>
                                    <div class="left_align">
                                        <div class="diff_colored_radio">
                                            <div class="btn-group d-inline-block" data-toggle="buttons">
                                                <label class="btn btn-success active">
                                                    <input type="radio" name="options" id="option0" checked>
                                                    <span class="fa fa-circle"></span>
                                                </label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" id="option1">
                                                    <span class="fa fa-circle"></span>
                                                </label>
                                                <label class="btn btn-info">
                                                    <input type="radio" name="options" id="option3">
                                                    <span class="fa fa-circle"></span>
                                                </label>
                                                <label class="btn btn-mint">
                                                    <input type="radio" name="options" id="option4">
                                                    <span class="fa fa-circle"></span>
                                                </label>
                                                <label class="btn btn-warning">
                                                    <input type="radio" name="options" id="option5">
                                                    <span class="fa fa-circle"></span>
                                                </label>
                                                <label class="btn btn-danger">
                                                    <input type="radio" name="options" id="option6">
                                                    <span class="fa fa-circle"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl">
                    <div class="card m-t-35">
                        <div class="card-header radio_card_bg">
                            Basic Switches
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 m-t-35">
                                    <form class="form-horizontal">
                                        <h5>Basic</h5>
                                        <div class="left_align">
                                            <div class="form-group radio_basic_swithes_padbott">
                                                <input class="make-switch-radio" data-on-text="1" data-off-text="0" type="checkbox" data-size="mini" checked>
                                            </div>
                                            <div class="form-group radio_basic_swithes_padbott">
                                                <input class="make-switch-radio" data-on-text="YES" data-off-text="NO" type="checkbox" data-size="small" >
                                            </div>
                                            <div class="form-group radio_basic_swithes_padbott">
                                                <input class="make-switch-radio" data-on-text="YES" data-off-text="NO" type="checkbox" checked>
                                            </div>
                                            <div class="form-group">
                                                <input class="make-switch-radio" data-on-text="TRUE" data-off-text="FALSE" type="checkbox" data-size="normal" checked>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6 m-t-35">
                                    <form class="form-horizontal">
                                        <h5>Color</h5>
                                        <div class="left_align">
                                            <div class="form-group radio_basic_swithes_padbott">
                                                <input class="make-switch-radio" type="checkbox" data-on-text="1" data-off-text="0" data-on-color="info" data-off-color="success" checked>
                                            </div>
                                            <div class="form-group radio_basic_swithes_padbott">
                                                <input class="make-switch-radio" type="checkbox" data-on-color="danger" data-off-color="warning">
                                            </div>
                                            <div class="form-group radio_basic_swithes_padbott">
                                                <input class="make-switch-radio" type="checkbox" data-on-color="success" data-off-color="danger" checked>
                                            </div>
                                            <div class="form-group">
                                                <input class="make-switch-radio" type="checkbox" data-on-text="YES" data-off-text="NO" data-on-color="primary" data-off-color="default" checked>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl">
                    <div class="card m-t-35">
                        <div class="card-header radio_card_bg">
                            Switchery
                        </div>
                        <div class="card-body row">
                            <div class="col-md-6 switchery1  m-t-35">
                                <h5 class="m-b-0">Sizes</h5>
                                <div class="left_align">
                                    <div class="radio_basic_swithes_padbott">
                                        <input type="checkbox" class="js-switch sm_toggle"/>
                                        <span class="radio_switchery_padding">Toggle Unchecked</span>
                                        <br />
                                    </div>
                                    <div class="radio_basic_swithes_padbott">
                                        <input type="checkbox" class="js-switch sm_toggle_checked" checked/>
                                        <span class="radio_switchery_padding">Toggle Checked</span>
                                        <br />
                                    </div>
                                    <div class="radio_basic_swithes_padbott">
                                        <input type="checkbox" class="js-switch md_toggle_checked" checked />
                                        <span class="radio_switchery_padding">Toggle Checked</span>
                                        <br />
                                    </div>
                                </div>
                                <h5 class="m-b-0 m-t-20">Background colored</h5>
                                <div class="left_align">
                                    <div class="radio_basic_swithes_padbott">
                                        <input type="checkbox" class="js-switch md_toggle" />
                                        <span class="radio_switchery_padding">Toggle Unchecked</span>
                                        <br />
                                    </div>
                                    <div>
                                        <input type="checkbox" class="js-switch md_colored" checked/>
                                        <span class="radio_switchery_padding">Toggle Checked</span>
                                        <br />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 switchery1  m-t-35">
                                <h5 class="m-b-0">Disabled</h5>
                                <div class="left_align">
                                    <div class="radio_basic_swithes_padbott">
                                        <input type="checkbox" class="js-switch sm_disable"  disabled/>
                                        <span class="radio_switchery_padding">Unchecked Disable</span>
                                        <br />
                                    </div>
                                    <div class="radio_basic_swithes_padbott">
                                        <input type="checkbox" class="js-switch md_disable"  disabled/>
                                        <span class="radio_switchery_padding">Unchecked Disable</span>
                                        <br />
                                    </div>
                                    <div class="radio_basic_swithes_padbott">
                                        <input type="checkbox" class="js-switch sm_disable_checked"  checked disabled/>
                                        <span class="radio_switchery_padding">Checked Disable</span>
                                        <br />
                                    </div>
                                    <div class="">
                                        <input type="checkbox" class="js-switch md_disable_checked" checked disabled/>
                                        <span class="radio_switchery_padding">Checked Disable</span>
                                        <br />
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--BEGIN AUTOMATIC JUMP-->
        </div>
        <!-- /.inner -->
    </div>
    <!-- /.outer -->
@stop
{{-- page level scripts --}}
@section('footer_scripts')
    <!--Plugin scripts-->
    <script type="text/javascript" src="{{asset('vendors/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/switchery/js/switchery.min.js')}}"></script>
    <!--End of plugin scripts-->
    <!--Page level scripts-->
    <script type="text/javascript" src="{{asset('js/pages/radio_checkbox.js')}}"></script>
    <!--End of Page level scripts-->
@stop
