@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Modals
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/modal/css/component.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/animate/css/animate.min.css')}}" />
    <!--page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/portlet.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/advanced_components.css')}}"/>
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
                        Modals
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
                        <li class="active breadcrumb-item">Modals</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="m-t-35">Basic Modals</h5>
                                    <span class="adv_com_fade_bottom">Simple modal with title and footer</span>
                                    <div>
                                        <button class="btn btn-raised btn-secondary adv_cust_mod_btn"
                                                data-toggle="modal" data-target="#normal">Basic modal
                                        </button>
                                        <button class="btn btn-raised btn-secondary adv_cust_mod_btn"
                                                data-toggle="modal" data-target="#large">Large modal
                                        </button>
                                        <button class="btn btn-raised btn-secondary adv_cust_mod_btn"
                                                data-toggle="modal" data-target="#small">Small modal
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h5 class="m-t-35">
                                        Color Variation
                                    </h5>
                                    <span>
                                Like in a normal page, you can add class to make your modal responsive.
                                </span>
                                    <div>
                                        <button class="btn btn-raised btn-secondary md-trigger adv_cust_mod_btn"
                                                data-toggle="modal" data-target="#modal-19">Default
                                        </button>
                                        <button class="btn btn-raised btn-primary md-trigger adv_cust_mod_btn"
                                                data-toggle="modal" data-target="#modal-16">Primary
                                        </button>
                                        <button class="btn btn-raised btn-info md-trigger adv_cust_mod_btn"
                                                data-toggle="modal" data-target="#modal-17">Info
                                        </button>
                                        <button class="btn btn-raised btn-success md-trigger adv_cust_mod_btn"
                                                data-toggle="modal" data-target="#modal-18">Success
                                        </button>
                                        <button class="btn btn-raised btn-warning md-trigger adv_cust_mod_btn"
                                                data-toggle="modal" data-target="#modal-20">Warning
                                        </button>

                                        <button class="btn btn-raised btn-danger md-trigger adv_cust_mod_btn"
                                                data-toggle="modal" data-target="#modal-21">Danger
                                        </button>
                                        <button class="btn btn-raised btn-primary adv_cust_mod_btn"
                                                data-toggle="modal" data-target="#just_me">Just me
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg">
                    <div class="card m-t-35">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="m-t-35">Fade And Slide Effects</h5>
                                    <span class="adv_com_fade_bottom">Simple fade modal with title and footer</span>
                                    <div>
                                        <button class="btn btn-raised btn-primary adv_cust_mod_btn fadein"
                                                data-toggle="modal" data-target="#modal-1">Fade In
                                        </button>
                                        <button class="btn btn-raised btn-primary adv_cust_mod_btn fadeindown"
                                                data-toggle="modal" data-target="#modal-fadeindown">Fade In Down
                                        </button>
                                        <button class="btn btn-raised btn-primary adv_cust_mod_btn slideinleft"
                                                data-toggle="modal" data-target="#modal-slideinleft">Slide In Left
                                        </button>
                                        <button class="btn btn-raised btn-primary adv_cust_mod_btn slideinright"
                                                data-toggle="modal" data-target="#modal-slideinright">Slide In Right
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h5 class="m-t-35">Rotate Effects</h5>
                                    <span class="adv_com_fade_bottom">Simple rotate modal with title and footer</span>
                                    <div>
                                        <button class="btn btn-raised btn-success adv_cust_mod_btn rotatein"
                                                data-toggle="modal" data-target="#modal-rotatein">Rotate In
                                        </button>
                                        <button class="btn btn-raised btn-success adv_cust_mod_btn rotatedownright"
                                                data-toggle="modal" data-target="#modal-rotatedownright">Rotate Down Right
                                        </button>
                                        <button class="btn btn-raised btn-success adv_cust_mod_btn flipiny"
                                                data-toggle="modal" data-target="#modal-flipiny">Flip In Y
                                        </button>
                                        <button class="btn btn-raised btn-success adv_cust_mod_btn zoomin"
                                                data-toggle="modal" data-target="#modal-zoomin">Zoom In
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card m-t-35">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="m-t-35">Transition Effects</h5>
                                    <span>
                                Simple transition modal with title and footer
                            </span>
                                    <div>
                                        <button class="btn btn-raised btn-info adv_cust_mod_btn swing"
                                                data-toggle="modal" data-target="#modal-swing">Swing
                                        </button>
                                        <button class="btn btn-raised btn-info adv_cust_mod_btn tada"
                                                data-toggle="modal" data-target="#modal-tada">Tada
                                        </button>
                                        <button class="btn btn-raised btn-info adv_cust_mod_btn shake"
                                                data-toggle="modal" data-target="#modal-shake">Shake
                                        </button>
                                        <button class="btn btn-raised btn-info adv_cust_mod_btn lightspeedin"
                                                data-toggle="modal" data-target="#modal-lightspeedin">Light Speed In
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h5 class="m-t-35">
                                        Bouncing Effects
                                    </h5>
                                    <span class="adv_com_fade_bottom">
                               Simple bounce modal with title and footer
                            </span>
                                    <div>
                                        <button class="btn btn-raised btn-warning adv_cust_mod_btn bounceinright"
                                                data-toggle="modal" data-target="#modal-2">Bounce In Right
                                        </button>
                                        <button class="btn btn-raised btn-warning adv_cust_mod_btn bounceindown"
                                                data-toggle="modal" data-target="#modal-3">Bounce In Down
                                        </button>
                                        <button class="btn btn-raised btn-warning adv_cust_mod_btn bounceinup"
                                                data-toggle="modal" data-target="#modal-bounceinup">Bounce In Up
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card m-t-35">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="m-t-35">
                                        Extended Modals
                                    </h5>
                                    <span>
                              Different type of modals with title and footer.
                            </span>
                                    <div>
                                        <a class="btn btn-success btn-md adv_cust_mod_btn" data-toggle="modal"
                                           data-href="#responsive" href="#responsive">Reponsive</a>
                                        <a class="btn btn-primary btn-md adv_cust_mod_btn" data-toggle="modal"
                                           data-href="#stack1" href="#stack1">Stackable</a>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h5 class="m-t-35">
                                        Fullwidth Modal With Effects
                                    </h5>
                                    <span class="adv_com_fade_bottom">
                                For fullwidth modal, add the class
                                <code>modal-lg</code> .
                            </span>
                                    <div>
                                        <button class="btn btn-raised btn-warning adv_cust_mod_btn"
                                                data-toggle="modal" data-target="#modal-4">Pulldown
                                        </button>
                                        <button class="btn btn-raised btn-warning adv_cust_mod_btn"
                                                data-toggle="modal" data-target="#modal-5">Floating
                                        </button>
                                        <button class="btn btn-raised btn-warning adv_cust_mod_btn"
                                                data-toggle="modal" data-target="#modal-6">Stretch Left
                                        </button>
                                        <button class="btn btn-raised btn-warning adv_cust_mod_btn"
                                                data-toggle="modal" data-target="#modal-7">Pull Up
                                        </button>
                                        <button class="btn btn-raised btn-warning adv_cust_mod_btn"
                                                data-toggle="modal" data-target="#modal-11">Stretch Right
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h5 class="m-t-35">3D Effects</h5>
                                    <span>
                                Animated modals with title and footer
                            </span>
                                    <div>
                                        <button class="btn btn-raised btn-info adv_cust_mod_btn"
                                                data-toggle="modal" data-target="#modal-8">3D Expand Open
                                        </button>
                                        <button class="btn btn-raised btn-info adv_cust_mod_btn"
                                                data-toggle="modal" data-target="#modal-9">3D Big Entrance
                                        </button>
                                        <button class="btn btn-raised btn-info adv_cust_mod_btn"
                                                data-toggle="modal" data-target="#modal-10">3D Expand Up
                                        </button>
                                        <button class="btn btn-raised btn-info adv_cust_mod_btn"
                                                data-toggle="modal" data-target="#modal-14">3D Bounce
                                        </button>
                                        <button class="btn btn-raised btn-info adv_cust_mod_btn"
                                                data-toggle="modal" data-target="#modal-15">3D Pulse
                                        </button>
                                        <button class="btn btn-raised btn-info adv_cust_mod_btn"
                                                data-toggle="modal" data-target="#modal-13">3D Tossing
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end of tags input-->
        <!-- advanced modal starts-->

        <div class="modal fade" id="normal" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modalLabel">Basic Modal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-secondary" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="large" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge"
             aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modalLabelLarge">Large Modal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-secondary" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="small" tabindex="-1" role="dialog" aria-labelledby="modalLabelSmall"
             aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modalLabelSmall">Small Modal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        This is a small modal window. <br>
                        <strong>Read:</strong> modal windows will probably tell you something important so don't
                        forget to read what they say.
                        <br>
                        <strong>Close:</strong> click on the button below to close the modal.
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-secondary" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <!--moddal dialog -->
        <div class="modal fade modal-fade-in-scale-up jest_me" tabindex="-1" id="just_me" role="dialog"
             aria-labelledby="modalLabeljust" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title text-white" id="modalLabeljust">Just me</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-primary" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal" tabindex="-1" id="modal-1" role="dialog"
             aria-labelledby="modalLabelfade" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title text-white" id="modalLabelfade">Fade In</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-primary" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="modal-2" role="dialog" aria-labelledby="modalLabelbounce">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-warning">
                        <h4 class="modal-title text-white" id="modalLabelbounce">Bounce In Right</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-warning" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="modal-3" role="dialog" aria-labelledby="modalLabelbouncedown">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-warning">
                        <h4 class="modal-title text-white" id="modalLabelbouncedown">Bounce In Down</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-warning" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade pullDown" id="modal-4" role="dialog" aria-labelledby="modalLabelnews">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-warning">
                        <h4 class="modal-title text-white" id="modalLabelnews">Pulldown</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-warning" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade floating" id="modal-5" role="dialog" aria-labelledby="modalLabelfall">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-warning">
                        <h4 class="modal-title text-white" id="modalLabelfall">Floating</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-warning" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade stretchLeft" id="modal-6" role="dialog" aria-labelledby="modalLabelsidefall1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-warning">
                        <h4 class="modal-title text-white" id="modalLabelsidefall1">Stretch Left</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-warning" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade pullUp" id="modal-7" role="dialog" aria-labelledby="modalLabelsticky">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-warning">
                        <h4 class="modal-title text-white" id="modalLabelsticky">Pull Up</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-warning" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade expandOpen" id="modal-8" role="dialog" aria-labelledby="my3dlabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <h4 class="modal-title text-white" id="my3dlabel">3D Expand Open</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Close Me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade bigEntrance" id="modal-9" role="dialog" aria-labelledby="Modallabel3dflip">
            <div class="modal-dialog" role="document">
                <div class="modal-content ">
                    <div class="modal-header bg-info ">
                        <h4 class="modal-title text-white" id="Modallabel3dflip">3D Big Entrance </h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade slideExpandUp" id="modal-10" role="dialog" aria-labelledby="Modallabel3dsign">
            <div class="modal-dialog" role="document">
                <div class="modal-content ">
                    <div class="modal-header bg-info ">
                        <h4 class="modal-title text-white" id="Modallabel3dsign">3D Expand Up</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-info" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade stretchRight" id="modal-11" role="dialog" aria-labelledby="modalLabelsidefall2">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-warning">
                        <h4 class="modal-title text-white" id="modalLabelsidefall2">Stretch Right</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-warning" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-12" id="modal-12">
            <div class="md-content">
                <h3>Modal Dialog</h3>
                <div class="modal-red">
                    <p>
                        This is a modal window. You can do the following things with it:
                    </p>
                    <ul>
                        <li>
                            <strong>Read:</strong> modal windows will probably tell you something important so
                            don't forget to read what they say.
                        </li>
                        <li>
                            <strong>Look:</strong> a modal window enjoys a certain kind of attention; just look
                            at it and appreciate its presence.
                        </li>
                        <li>
                            <strong>Close:</strong> click on the button below to close the modal.
                        </li>
                    </ul>
                    <button class="btn btn-modal btn-secondary md-close">Close me!</button>
                </div>
            </div>
        </div>
        <div class="modal fade tossing" id="modal-13" role="dialog" aria-labelledby="Modallabel3dslit">
            <div class="modal-dialog" role="document">
                <div class="modal-content ">
                    <div class="modal-header bg-info ">
                        <h4 class="modal-title text-white" id="Modallabel3dslit">3D tossing</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-info" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade bounce" id="modal-14" role="dialog" aria-labelledby="Modallabel3drotate">
            <div class="modal-dialog" role="document">
                <div class="modal-content ">
                    <div class="modal-header bg-info ">
                        <h4 class="modal-title text-white" id="Modallabel3drotate">3D Bounce</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-info" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade pulse" id="modal-15" role="dialog" aria-labelledby="Modallabel3drotateinleft">
            <div class="modal-dialog" role="document">
                <div class="modal-content ">
                    <div class="modal-header bg-info ">
                        <h4 class="modal-title text-white" id="Modallabel3drotateinleft">3D Pulse</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-info " data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-16" role="dialog" aria-labelledby="modalLabelprimary">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title text-white" id="modalLabelprimary">Primary Modal</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-primary" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-17" role="dialog" aria-labelledby="modalLabelinfo">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <h4 class="modal-title text-white" id="modalLabelinfo">Info Modal</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-info" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-18" role="dialog" aria-labelledby="modalLabelsuccess">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h4 class="modal-title text-white" id="modalLabelsuccess">Success Modal</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-success" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-19" role="dialog" aria-labelledby="modalLabeldefault">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modalLabeldefault">Default Modal</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-secondary" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-20" role="dialog" aria-labelledby="modalLabelwarn">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-warning">
                        <h4 class="modal-title text-white" id="modalLabelwarn">Warning Modal</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-warning" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-21" role="dialog" aria-labelledby="modalLabeldanger">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h4 class="modal-title text-white" id="modalLabeldanger">Danger Modal</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-danger" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
            <!--- end modals-->
        </div>
        <!--- responsive model -->
        <div class="modal fade in display_none" id="responsive" tabindex="-1" role="dialog" aria-hidden="false">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h4 class="modal-title text-white">Responsive</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Some More data</h4>
                                <p>
                                    <input id="name" name="name" type="text" placeholder="Your name"
                                           class="form-control"></p>
                                <p>
                                    <input id="name1" name="name" type="text" placeholder="Your name"
                                           class="form-control"></p>
                                <p>
                                    <input id="name2" name="name" type="text" placeholder="Your name"
                                           class="form-control"></p>
                                <p>
                                    <input id="name3" name="name" type="text" placeholder="Your name"
                                           class="form-control"></p>
                                <p>
                                    <input id="name4" name="name" type="text" placeholder="Your name"
                                           class="form-control"></p>
                                <p>
                                    <input id="name5" name="name" type="text" placeholder="Your name"
                                           class="form-control"></p>
                            </div>
                            <div class="col-md-6">
                                <h4>Some More data</h4>
                                <p>
                                    <input id="name6" name="name" type="text" placeholder="Your name"
                                           class="form-control"></p>
                                <p>
                                    <input id="name7" name="name" type="text" placeholder="Your name"
                                           class="form-control"></p>
                                <p>
                                    <input id="name8" name="name" type="text" placeholder="Your name"
                                           class="form-control"></p>
                                <p>
                                    <input id="name9" name="name" type="text" placeholder="Your name"
                                           class="form-control"></p>
                                <p>
                                    <input id="name10" name="name" type="text" placeholder="Your name"
                                           class="form-control"></p>
                                <p>
                                    <input id="name41" name="name" type="text" placeholder="Your name"
                                           class="form-control"></p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                        <button type="button" class="btn btn-success">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END modal-->
        <!--- stack1 model -->
        <div class="modal fade bs-example-modal-sm in display_none" id="stack1" tabindex="-1" role="dialog"
             aria-hidden="false">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title text-white">Stack One</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <p>One fine body…</p>
                        <p>One fine body…</p>
                        <p>One fine body…</p>
                        <p>
                            Name:
                            <input id="name21" type="text" name="name" class="form-control"/>
                        </p>
                        <p>
                            Password:
                            <input id="name22" type="password" name="password" class="form-control">
                        </p>
                        <a class="btn btn-secondary" data-toggle="modal" href="#stack2">Launch modal</a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                        <button type="button" class="btn btn-primary">Ok</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- stack2 modal-->
        <div class="modal fade bs-example-modal-md in display_none" id="stack2" tabindex="-1" role="dialog"
             aria-hidden="false">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title text-white">Stack two</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <p>One fine body…</p>
                        <p>One fine body…</p>
                        <p>
                            Name:
                            <input id="name11" name="name" type="text" class="form-control"></p>
                        <p>
                            Password:
                            <input id="name12" name="name" type="password" class="form-control"></p>
                        <a class="btn btn-secondary" data-toggle="modal" href="#stack3">Launch modal</a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                        <button type="button" class="btn btn-primary">Ok</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END modal-->
        <!-- stack3 modal-->
        <div class="modal fade in display_none" id="stack3" tabindex="-1" role="dialog" aria-hidden="false">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title text-white">Stack three</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <p>One fine body…</p>
                        <p>
                            Name:
                            <input id="name13" name="name" type="text" class="form-control"></p>
                        <p>
                            Password:
                            <input id="name14" name="name" type="password" class="form-control"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                        <button type="button" class="btn btn-primary">Ok</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" tabindex="-1" id="modal-rotatein" role="dialog"
             aria-labelledby="modalLabelrotate" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h4 class="modal-title text-white" id="modalLabelrotate">Rotate In</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" tabindex="-1" id="modal-rotatedownright" role="dialog"
             aria-labelledby="modalLabelrotate1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h4 class="modal-title text-white" id="modalLabelrotate1">Rotate Down Right</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-success" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" tabindex="-1" id="modal-flipiny" role="dialog"
             aria-labelledby="modalLabelflip" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h4 class="modal-title text-white" id="modalLabelflip">Flip In Y</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-success" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" tabindex="-1" id="modal-zoomin" role="dialog"
             aria-labelledby="modalLabelzoom" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h4 class="modal-title text-white" id="modalLabelzoom">Zoom In</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-success" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" tabindex="-1" id="modal-swing" role="dialog"
             aria-labelledby="modalLabelswing" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <h4 class="modal-title text-white" id="modalLabelswing">Swing</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-info" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" tabindex="-1" id="modal-tada" role="dialog"
             aria-labelledby="modalLabeltada" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <h4 class="modal-title text-white" id="modalLabeltada">Tada</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-info" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" tabindex="-1" id="modal-shake" role="dialog"
             aria-labelledby="modalLabelshake" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <h4 class="modal-title text-white" id="modalLabelshake">Shake</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-info" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" tabindex="-1" id="modal-lightspeedin" role="dialog"
             aria-labelledby="modalLabellightspeedin" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <h4 class="modal-title text-white" id="modalLabellightspeedin">Light Speed In</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-info" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" tabindex="-1" id="modal-slideinleft" role="dialog"
             aria-labelledby="modalLabelslide" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title text-white" id="modalLabelslide">Slide In Left</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" tabindex="-1" id="modal-slideinright" role="dialog"
             aria-labelledby="modalLabelslide1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title text-white" id="modalLabelslide1">Slide In Right</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" tabindex="-1" id="modal-fadeindown" role="dialog"
             aria-labelledby="modalLabelfade3" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title text-white" id="modalLabelfade3">Fade In Down</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" tabindex="-1" id="modal-bounceinup" role="dialog"
             aria-labelledby="modalLabelbounceup" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-warning">
                        <h4 class="modal-title text-white" id="modalLabelbounceup">Bounce In Up</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important
                                so don't forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just
                                look at it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ajax-modal modal-->
        <!-- end of advanced modals-->
        <!-- /.inner -->
    </div>
    <!-- /.outer -->
@stop
{{-- page level scripts --}}
@section('footer_scripts')
    <!--Page level scripts-->
    <script type="text/javascript" src="{{asset('js/pages/modals.js')}}"></script>
    <!-- end page level scripts -->
@stop