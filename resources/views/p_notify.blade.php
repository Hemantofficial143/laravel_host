@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    P-Notify
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/pnotify/css/pnotify.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/animate/css/animate.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/pnotify/css/pnotify.buttons.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/pnotify/css/pnotify.history.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/pnotify/css/pnotify.mobile.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/sweetalert/css/sweetalert2.min.css')}}"/>
    <!--End of Plugin styles-->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/p_notify.css')}}"/>
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
                        P-Notify
                    </h4>
                </div>
                <div class="col-lg col-sm-8">
                    <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Components</a>
                        </li>
                        <li class="breadcrumb-item active">P-Notify</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container notify_page">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body m-t-35 m-b-20">
                            <div class="row">
                                <div class="col">
                                    <h5>Basic Notifications</h5>
                                    <div class="row opacity ">

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <button class="btn btn-warning source notify_desktop">Desktop Notification
                                                Info
                                            </button>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <button class="btn btn-success source notify_desktopsuccess">Desktop
                                                Notification
                                            </button>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <button class="btn btn-info source notify_dyn_notice">Dynamic Notice</button>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <button class="btn btn-danger source notify_regerror">Regular Error</button>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <button class="btn btn-warning source notify_formnotice">Form Notice</button>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div id="form_notice" style="display: none;">
                                                <form class="pf-form pform_custom" method="post">
                                                    <div class="pf-element pf-heading">
                                                        <h3>Login to Continue</h3>
                                                        <p>Just an example.</p>
                                                    </div>
                                                    <div class="pf-element">
                                                        <label>
                                                            <span class="pf-label">Username</span>
                                                            <input class="pf-field form-control" type="text"
                                                                   name="username"/>
                                                        </label>
                                                    </div>
                                                    <div class="pf-element">
                                                        <label>
                                                            <span class="pf-label">Password</span>
                                                            <input class="pf-field form-control" type="password"
                                                                   name="password"/>
                                                        </label>
                                                    </div>
                                                    <div class="pf-element">
                                                        <label>
                                                            <span class="pf-label">Remember Me</span>
                                                            <input class="pf-field" type="checkbox" name="remember"/>
                                                        </label>
                                                    </div>
                                                    <div class="pf-element pf-buttons pf-centered">
                                                        <input class="pf-button btn btn-default" type="submit" name="submit"
                                                               value="Submit"/>
                                                        <input class="pf-button btn btn-default" type="button" name="cancel"
                                                               value="Cancel"/>
                                                    </div>
                                                </form>
                                            </div>
                                            <button class="btn btn-success source notify_clicknotice" onclick=" var notice = new PNotify({
            title: 'Click Notice',
            text: 'I wish someone would click me.',
            type: 'success'
        });
        notice.get().css('cursor', 'pointer').click(function (e) {
            if ($(e.target).is('.ui-pnotify-closer *, .ui-pnotify-sticker *'))
                return;
            notice.update({
                type: 'success',
                text: 'Yay, you clicked me!&lt;div style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Happy_smiley_face.png/240px-Happy_smiley_face.png&quot; /&gt;&lt;/div&gt;'});
        });">Click Notice
                                            </button>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <button class="btn btn-info source notify_regularinfo">Regular Info</button>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col m-t-35">
                                    <h5>Animated Notifications</h5>
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-6">
                                            <button class="btn btn-outline-warning source notify_fromtop">From the top!
                                            </button>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <button class="btn btn-outline-info source notify_zoom">Zoom
                                            </button>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <button class="btn btn-outline-danger source notify_zippy">Zippy
                                            </button>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <button class="btn btn-outline-success source notify_off_handle">Off the
                                                Handle
                                            </button>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <button class="btn btn-outline-info source notify_cards">Shuffling Cards
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--</div>-->

                            <div class="row opacity">
                                <div class="col m-t-35">
                                    <h5>Own Animation Styles</h5>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6 col-12 m-t-20">
                                                <label for="animate_in" class="control-label">Effect in</label>
                                                <select id="animate_in" class="form-control effect_in_margin_top">
                                                    <option value="bounceIn">bounceIn</option>
                                                    <option value="bounceInDown">bounceInDown</option>
                                                    <option value="bounceInLeft">bounceInLeft</option>
                                                    <option value="bounceInRight">bounceInRight</option>
                                                    <option value="bounceInUp">bounceInUp</option>
                                                    <option value="fadeIn">fadeIn</option>
                                                    <option value="fadeInDown">fadeInDown</option>
                                                    <option value="fadeInDownBig">fadeInDownBig</option>
                                                    <option value="fadeInLeft">fadeInLeft</option>
                                                    <option value="fadeInLeftBig">fadeInLeftBig</option>
                                                    <option value="fadeInRight">fadeInRight</option>
                                                    <option value="fadeInRightBig">fadeInRightBig</option>
                                                    <option value="fadeInUp">fadeInUp</option>
                                                    <option value="fadeInUpBig">fadeInUpBig</option>
                                                    <option value="flipInX">flipInX</option>
                                                    <option value="flipInY">flipInY</option>
                                                    <option value="lightSpeedIn">lightSpeedIn</option>
                                                    <option value="rotateIn">rotateIn</option>
                                                    <option value="rotateInDownLeft">rotateInDownLeft</option>
                                                    <option value="rotateInDownRight">rotateInDownRight</option>
                                                    <option value="rotateInUpLeft">rotateInUpLeft</option>
                                                    <option value="rotateInUpRight">rotateInUpRight</option>
                                                    <option value="rollIn">rollIn</option>
                                                    <option value="zoomIn">zoomIn</option>
                                                    <option value="zoomInDown">zoomInDown</option>
                                                    <option value="zoomInLeft">zoomInLeft</option>
                                                    <option value="zoomInRight">zoomInRight</option>
                                                    <option value="zoomInUp">zoomInUp</option>
                                                    <option value="slideInDown">slideInDown</option>
                                                    <option value="slideInLeft">slideInLeft</option>
                                                    <option value="slideInRight">slideInRight</option>
                                                    <option value="slideInUp">slideInUp</option>
                                                </select>
                                            </div>
                                            <div class="clearfix hidden-lg-up hidden-md-up hidden-sm-up hidden-xl-up"></div>
                                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-7 col-12 m-t-20">
                                                <label for="animate_out" class="control-label">Effect
                                                    out</label>
                                                <select id="animate_out" class="form-control">
                                                    <option value="bounceOut">bounceOut</option>
                                                    <option value="bounceOutDown">bounceOutDown</option>
                                                    <option value="bounceOutLeft">bounceOutLeft</option>
                                                    <option value="bounceOutRight">bounceOutRight</option>
                                                    <option value="bounceOutUp">bounceOutUp</option>
                                                    <option value="fadeOut">fadeOut</option>
                                                    <option value="fadeOutDown">fadeOutDown</option>
                                                    <option value="fadeOutDownBig">fadeOutDownBig</option>
                                                    <option value="fadeOutLeft">fadeOutLeft</option>
                                                    <option value="fadeOutLeftBig">fadeOutLeftBig</option>
                                                    <option value="fadeOutRight">fadeOutRight</option>
                                                    <option value="fadeOutRightBig">fadeOutRightBig</option>
                                                    <option value="fadeOutUp">fadeOutUp</option>
                                                    <option value="fadeOutUpBig">fadeOutUpBig</option>
                                                    <option value="flipOutX">flipOutX</option>
                                                    <option value="flipOutY">flipOutY</option>
                                                    <option value="lightSpeedOut">lightSpeedOut</option>
                                                    <option value="rotateOut">rotateOut</option>
                                                    <option value="rotateOutDownLeft">rotateOutDownLeft</option>
                                                    <option value="rotateOutDownRight">rotateOutDownRight</option>
                                                    <option value="rotateOutUpLeft">rotateOutUpLeft</option>
                                                    <option value="rotateOutUpRight">rotateOutUpRight</option>
                                                    <option value="hinge">hinge</option>
                                                    <option value="rollOut">rollOut</option>
                                                    <option value="zoomOut">zoomOut</option>
                                                    <option value="zoomOutDown">zoomOutDown</option>
                                                    <option value="zoomOutLeft">zoomOutLeft</option>
                                                    <option value="zoomOutRight">zoomOutRight</option>
                                                    <option value="zoomOutUp">zoomOutUp</option>
                                                    <option value="slideOutDown">slideOutDown</option>
                                                    <option value="slideOutLeft">slideOutLeft</option>
                                                    <option value="slideOutRight">slideOutRight</option>
                                                    <option value="slideOutUp">slideOutUp</option>
                                                </select>
                                            </div>
                                            <div class="clearfix hidden-lg-up hidden-md-up hidden-sm-up hidden-xl-up"></div>
                                            <div class="col-xl-4 col-lg-5 col-sm-6 m-t-20">
                                                <button class="btn btn-success source btn_margin_top notify_btn">Notify!
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--</div>-->
                        </div>
                    </div>
                    <div class="card m-t-35">
                        <div class="card-body m-t-35 m-b-20">
                            <div class="row">
                                <div class="col">
                                    <h5>Attention Seekers</h5>
                                    <div class="row opacity">
                                        <div class="col-lg-3 col-sm-6">
                                            <button class="btn btn-success source lorvent notify_bounce">Bounce
                                            </button>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <button class="btn btn-warning source notify_flash m-l-4">Flash
                                            </button>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <button class="btn btn-info source notify_pulse m-l-4">Pulse
                                            </button>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <button class="btn btn-danger source notify_rubberband m-l-4">Rubber Band
                                            </button>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <button class="btn btn-success source notify_shake m-l-4">Shake
                                            </button>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <button class="btn btn-warning source notify_swing m-l-4">Swing
                                            </button>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <button class="btn btn-info source notify_tada m-l-4">Tada
                                            </button>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <button class="btn btn-danger source notify_wobble m-l-4">Wobble
                                            </button>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <button class="btn btn-success source notify_jello m-l-4">Jello
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col m-t-35">
                                    <h5>Confirm Module Confirmation dialogs and prompts</h5>
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <button class="btn btn-outline-success source notify_confirm_dialog">Confirm
                                                Dialog
                                            </button>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <button class="btn btn-outline-info source notify_modal_dialog">Modal Confirm
                                                Dialog
                                            </button>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <button class="btn btn-outline-danger source notify_custom_buttons">Custom
                                                Buttons
                                            </button>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <button class="btn btn-outline-warning source notify_alert_button">Alert Style
                                                Button
                                            </button>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <button class="btn btn-outline-success source notify_prompt_dialog">Prompt
                                                Dialog
                                            </button>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <button class="btn btn-outline-danger source notify_multiprompt_dialog">Multi
                                                Line
                                                Prompt Dialog
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col m-t-35">
                                    <h5>Callbacks Module Manipulate the notice during its
                                        lifecycle</h5>
                                    <div class="row opacity">
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <button class="btn btn-warning source notify_callback">Notice with Callbacks
                                            </button>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <button class="btn btn-mint source notify_callback1">Error to Success-Info
                                            </button>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <button class="btn btn-danger source notify_bignotice">Big Notice
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.inner -->
        </div>
        <!-- /.outer -->
    </div>
    </div>
    <!-- /.outer -->
@stop
{{-- page level scripts --}}
@section('footer_scripts')
    <!--Plugin scripts-->
    <script type="text/javascript" src="{{asset('vendors/pnotify/js/pnotify.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/pnotify/js/pnotify.animate.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/pnotify/js/pnotify.buttons.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/pnotify/js/pnotify.confirm.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/pnotify/js/pnotify.nonblock.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/pnotify/js/pnotify.mobile.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/pnotify/js/pnotify.desktop.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/pnotify/js/pnotify.history.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/pnotify/js/pnotify.callbacks.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/sweetalert/js/sweetalert2.min.js')}}"></script>
    <!--End of plugin scripts-->
    <!--Page level scripts-->
    <script type="text/javascript" src="{{asset('js/pages/p_notify.js')}}"></script>
    <!-- end of global scripts-->
@stop