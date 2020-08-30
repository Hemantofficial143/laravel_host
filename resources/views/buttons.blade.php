@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Buttons
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!-- global styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/Buttons/css/buttons.min.css')}}"/>
    <!--End of global styles-->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/buttons.css')}}"/>
    <!--End of page level styles-->
@stop


{{-- Page content --}}
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-lg-6 col-sm-4">
                    <h4 class="nav_top_align">
                        <i class="fa fa-anchor"></i>
                        Buttons
                    </h4>
                </div>
                <div class="col-lg-6 col-sm-8">
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
                        <li class="breadcrumb-item active">Buttons</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer buttons_page">
        <div class="inner bg-container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-lg-6 m-t-35 buttons_center">
                                    <h5>Basic Buttons</h5>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                            <button class="btn btn-secondary">Button</button>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                            <button class="btn btn-primary">Button</button>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                            <button class="btn btn-success">Button</button>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                            <button class="btn btn-warning">Button</button>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                            <button class="btn btn-danger">Button</button>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                            <button class="btn btn-info">Button</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 m-t-35 buttons_center">
                                    <h5>Disabled Buttons</h5>
                                    <div class="row disabled_buttons">
                                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                            <button class="btn btn-secondary disabled">Button</button>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                            <button class="btn btn-primary disabled">Button</button>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                            <button class="btn btn-success disabled">Button</button>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                            <button class="btn btn-info disabled">Button</button>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                            <button class="btn btn-warning disabled">Button</button>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                            <button class="btn btn-danger disabled">Button</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="button_section_align">
                                        <h5>Outline Buttons</h5>
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                                <button class="btn btn-outline-secondary">Button</button>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                                <button class="btn btn-outline-primary">Button</button>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                                <button class="btn btn-outline-success">Button</button>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                                <button class="btn btn-outline-info">Button</button>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                                <button class="btn btn-outline-warning">Button</button>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                                <button class="btn btn-outline-danger">Button</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class=" button_section_align">
                                        <h5>Rounded Buttons</h5>
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                                <button class="btn btn-secondary  button-rounded">Button
                                                </button>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                                <button class="btn btn-primary button-rounded">Button
                                                </button>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                                <button class="btn btn-success  button-rounded">Button
                                                </button>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                                <button class="btn btn-warning button-rounded">Button
                                                </button>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                                <button class="btn btn-danger button-rounded">Button
                                                </button>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                                <button class="btn btn-info button-rounded">Button</button>
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
                <div class="col">
                    <div class="card m-t-35">
                        <div class="card-body row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <div class="button_section_align">
                                            <h5>Rectangle Buttons</h5>
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                                    <button class="btn btn-secondary button-rectangle">Button
                                                    </button>
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                                    <button class="btn btn-primary button-rectangle">Button</button>
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                                    <button class="btn btn-success button-rectangle">Button</button>
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                                    <button class="btn btn-warning button-rectangle">Button</button>
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                                    <button class="btn btn-danger button-rectangle">Button</button>
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                                    <button class="btn btn-info button-rectangle">Button</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="button_section_align">
                                            <h5>Glow Buttons</h5>
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                                    <button class="btn btn-secondary glow_button">Button
                                                    </button>
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                                    <button class="btn btn-primary glow_button">Button
                                                    </button>
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                                    <button class="btn btn-success glow_button">Button
                                                    </button>
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                                    <button class="btn btn-warning glow_button">Button
                                                    </button>
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                                    <button class="btn btn-info glow_button">Button</button>
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                                    <button class="btn btn-danger glow_button">Button
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <div class="button_section_align">
                                            <h5>Dropdown Buttons</h5>
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12 m-t-10">
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle"
                                                                type="button" id="about-us1" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            Secondary
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="about-us1">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else
                                                                here</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12 m-t-10">
                                                    <div class="dropdown">
                                                        <button class="btn btn-info dropdown-toggle" type="button"
                                                                id="about-us2" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            info
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="about-us2">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else
                                                                here</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12 m-t-10">
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle"
                                                                type="button" id="about-us" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            primary
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="about-us">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else
                                                                here</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class=" button_section_align">
                                            <h5>Dropup Buttons</h5>
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12 m-t-10">
                                                    <div class="dropup">
                                                        <button class="btn btn-warning dropdown-toggle"
                                                                type="button" id="up1" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            Warning
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="up1">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item disabled" href="#">Another
                                                                action</a>
                                                            <a class="dropdown-item" href="#">Something else
                                                                here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12 m-t-10">
                                                    <div class="dropup">
                                                        <button class="btn btn-mint dropdown-toggle" type="button"
                                                                id="up3" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            Mint
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="up3">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item disabled" href="#">Another
                                                                action</a>
                                                            <a class="dropdown-item" href="#">Something else
                                                                here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12 m-t-10">
                                                    <div class="dropup">
                                                        <button class="btn btn-danger dropdown-toggle" type="button"
                                                                id="up12" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            Primary
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="up12">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item disabled" href="#">Another
                                                                action</a>
                                                            <a class="dropdown-item" href="#">Something else
                                                                here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>
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
                <div class="col">
                    <div class="card button_parent_section m-t-35">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-lg-6 button_section_align">
                                    <h5>Button Wrapper</h5>
                                    <div class="flatbuttons text-center flatbuttons_button_wrapper">
                                        <div class="buttons_page_alignment">
                                            <div class="row">
                                                <div class="col-xl-5  col-12 button_align_top">
                                                    <span class="button-wrap">
                                                        <a href="#"
                                                           class="button button-circle button-primary button-wrapper">Button</a>
                                                    </span>
                                                </div>
                                                <div class="col-xl-5 col-12 button_align_top_button_wrap">
                                                    <span class="button-wrap">
                                                        <a href="#" class="button button-pill button-primary">Button</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 button_section_align">
                                    <h5>Button Group</h5>
                                    <div class="buttongroup">
                                        <div class="row m-t-10">
                                            <div class="col-xl-8 col-lg-12 col-sm-8">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="btn-group" role="group">
                                                            <button type="button" class="btn btn-primary">Option 1
                                                            </button>
                                                            <button type="button" class="btn btn-primary">Option 2
                                                            </button>
                                                            <button type="button" class="btn btn-primary">Option 3
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="btn-group button_group_rounded btn_group_padding"
                                                             role="group">
                                                            <button type="button" class="btn btn-warning">Option 1
                                                            </button>
                                                            <button type="button" class="btn btn-warning">Option 2
                                                            </button>
                                                            <button type="button" class="btn btn-warning">Option 3
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-success">
                                                                <i class="fa fa-align-left" aria-hidden="true"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-success">
                                                                <i class="fa fa-align-center"
                                                                   aria-hidden="true"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-success">
                                                                <i class="fa fa-align-right" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-12 col-sm-4">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-4 col-sm-2 col-6">
                                                        <div class="btn-group-vertical button_group_vertical_buttons">
                                                            <button type="button" class="btn btn-mint">
                                                                <i class="fa fa-home" aria-hidden="true"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-mint">
                                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-mint">
                                                                <i class="fa fa-comment" aria-hidden="true"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-mint">
                                                                <i class="fa fa-comments" aria-hidden="true"></i>
                                                            </button>
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
                                    <div class="row">
                                        <div class="col-12 button_section_align">
                                            <h5>Social Buttons</h5>
                                            <div class="list-group social_dashboard_margin_top">
                                                <div class="row">

                                                    <div class="col-md-6 text-white">
                                                        <a class="btn btn-block btn-social btn-bitbucket">
                                                            <i class="fa fa-bitbucket"></i>
                                                            Sign in with Bitbucket
                                                        </a>
                                                        <a class="btn btn-block btn-social btn-dropbox">
                                                            <i class="fa fa-dropbox"></i>
                                                            Sign in with Dropbox
                                                        </a>
                                                        <a class="btn btn-block btn-social btn-facebook">
                                                            <i class="fa fa-facebook"></i>
                                                            Sign in with Facebook
                                                        </a>
                                                        <a class="btn btn-block btn-social btn-flickr">
                                                            <i class="fa fa-flickr"></i>
                                                            Sign in with Flickr
                                                        </a>
                                                        <a class="btn btn-block btn-social btn-github">
                                                            <i class="fa fa-github"></i>
                                                            Sign in with GitHub
                                                        </a>
                                                        <a class="btn btn-block btn-social btn-google-plus">
                                                            <i class="fa fa-google-plus p-l-5"></i>
                                                            Sign in with Google
                                                        </a>
                                                    </div>
                                                    <div class="col-md-6 text-white">
                                                        <a class="btn btn-block btn-social btn-instagram">
                                                            <i class="fa fa-instagram"></i>
                                                            Sign in with Instagram
                                                        </a>
                                                        <a class="btn btn-block btn-social btn-linkedin">
                                                            <i class="fa fa-linkedin"></i>
                                                            Sign in with LinkedIn
                                                        </a>
                                                        <a class="btn btn-block btn-social btn-pinterest">
                                                            <i class="fa fa-pinterest"></i>
                                                            Sign in with Pinterest
                                                        </a>
                                                        <a class="btn btn-block btn-social btn-tumblr">
                                                            <i class="fa fa-tumblr"></i>
                                                            Sign in with Tumblr
                                                        </a>
                                                        <a class="btn btn-block btn-social btn-twitter">
                                                            <i class="fa fa-twitter"></i>
                                                            Sign in with Twitter
                                                        </a>
                                                        <a class="btn btn-block btn-social btn-vk">
                                                            <i class="fa fa-vk"></i>
                                                            Sign in with VK
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-12 button_section_align">
                                            <h5>Cool Buttons</h5>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-12 col-sm-6">
                                                    <button type="button" class="btn btn-labeled btn-success">
                                                <span class="btn-label">
                                                    <i class="fa fa-check"></i>
                                                </span>
                                                        Success
                                                    </button>
                                                    <br/>
                                                    <button type="button" class="btn btn-labeled btn-warning">
                                                <span class="btn-label">
                                                    <i class="fa fa-bookmark"></i>
                                                </span>
                                                        Bookmark
                                                    </button>
                                                    <br/>
                                                    <button type="button" class="btn btn-labeled btn-secondary right_btn_padding_left">
                                                <span class="btn-label btn_angle_left">
                                                    <i class="fa fa-angle-left"></i>
                                                </span>
                                                        Left
                                                    </button>
                                                    <br/>
                                                    <button type="button" class="btn btn-labeled btn-success">
                                                <span class="btn-label">
                                                    <i class="fa fa-thumbs-up"></i>
                                                </span>
                                                        Like
                                                    </button>
                                                    <br/>
                                                    <button type="button" class="btn btn-labeled btn-info">
                                                <span class="btn-label">
                                                    <i class="fa fa-refresh"></i>
                                                </span>
                                                        Refresh
                                                    </button>
                                                    <br/>

                                                    <button type="button" class="btn btn-labeled btn-success">
                                                <span class="btn-label">
                                                    <i class="fa fa-info"></i>
                                                </span>
                                                        Info Web
                                                    </button>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <button type="button" class="btn btn-labeled btn-danger">
                                                <span class="btn-label">
                                                    <i class="fa fa-close"></i>
                                                </span>
                                                        Cancel
                                                    </button>
                                                    <br/>
                                                    <button type="button" class="btn btn-labeled btn-primary">
                                                <span class="btn-label">
                                                    <i class="fa fa-camera"></i>
                                                </span>
                                                        Camera
                                                    </button>
                                                    <br/>
                                                    <button type="button"
                                                            class="btn btn-labeled btn-secondary right_btn_padding_right">
                                                        Right
                                                        <span class="btn-label btn_angle_right">
                                                    <i class="fa fa-angle-right"></i>
                                                </span>
                                                    </button>
                                                    <br/>
                                                    <button type="button" class="btn btn-labeled btn-danger">
                                                <span class="btn-label">
                                                    <i class="fa fa-thumbs-down"></i>
                                                </span>
                                                        Unlike
                                                    </button>
                                                    <br/>
                                                    <button type="button" class="btn btn-labeled btn-danger">
                                                <span class="btn-label">
                                                    <i class="fa fa-trash"></i>
                                                </span>
                                                        Trash
                                                    </button>
                                                    <br/>
                                                    <button type="button" class="btn btn-labeled btn-success">
                                                <span class="btn-label">
                                                    <i class="fa fa-globe"></i>
                                                </span>
                                                        Web
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.inner -->
        <!-- /.outer -->
    </div>
    <!-- /.outer -->
@stop
{{-- page level scripts --}}
@section('footer_scripts')
    <!-- plugin scripts -->
    <script type="text/javascript" src="{{asset('vendors/raphael/js/raphael.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/Buttons/js/scrollto.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/Buttons/js/buttons.js')}}"></script>
    <!-- end of plugin scripts-->
@stop