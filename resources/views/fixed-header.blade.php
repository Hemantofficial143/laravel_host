<!doctype html>
<html class="no-js">

<head>
    <meta charset="UTF-8">
    <title>Fixed Header | Admire</title>

    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('img/logo1.ico')}}"/>
    <!--global styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/components.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('css/custom.css')}}"/>
    <link type="text/css" rel="stylesheet" href="#" id="skin_change"/>
    <!-- end of global styles-->
    <style>

        @media (min-width: 768px){

            .sidebar-right-opened #top.fixed-top {
                right: 250px;
            }
        }

    </style>
</head>
<body class="fixed_header">
<div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
        <img src="{{asset('img/loader.gif')}}" style=" width: 40px;" alt="loading...">
    </div>
</div>
<div id="wrap">
    <div id="top" class="fixed-top">
        <!-- .navbar -->
        <nav class="navbar navbar-static-top">
            <div class="container-fluid m-0">
                <a class="navbar-brand mr-0" href="index">
                    <h4 class="text-white"><img src="{{asset('img/logow.png')}}" class="admin_img" alt="logo"> ADMIRE ADMIN</h4>
                </a>
                <div class="menu mr-sm-auto">
                        <span class="toggle-left" id="menu-toggle">
                        <i class="fa fa-bars text-white"></i>
                    </span>
                </div>
                <div class="navbar-toggleable-sm m-lg-auto d-none d-lg-flex top_menu" id="nav-content">
                    <ul class="nav navbar-nav flex-row top_menubar">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="mail_inbox">
                                <i class="fa fa-inbox"></i> <span class="quick_text">Inbox</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="mail_compose">
                                <i class="fa fa fa-edit"></i> <span class="quick_text">Compose</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="maps">
                                <i class="fa fa-map-marker"></i> <span class="quick_text">Maps</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="gallery">
                                <i class="fa fa-picture-o"></i> <span class="quick_text">Gallery</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="topnav dropdown-menu-right ml-auto">
                    <div class="btn-group">
                        <div class="notifications no-bg">
                            <a class="btn btn-default btn-sm messages" data-toggle="dropdown"> <i class="fa fa-envelope fa-1x text-white"></i>
                                <span class="badge badge-warning">8</span>
                            </a>
                            <div class="dropdown-menu drop_box_align" role="menu" id="messages_dropdown">
                                <div class="popover-header">You have 8 Messages</div>
                                <div id="messages">
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('img/mailbox_imgs/5.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data"><strong>hally</strong> sent you an image.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('img/mailbox_imgs/8.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data"><strong>Meri</strong> invitation for party.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('img/mailbox_imgs/7.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <strong>Remo</strong> meeting details .
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('img/mailbox_imgs/6.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <strong>David</strong> upcoming events list.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('img/mailbox_imgs/5.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data"><strong>hally</strong> sent you an image.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('img/mailbox_imgs/8.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data"><strong>Meri</strong> invitation for party.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('img/mailbox_imgs/7.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <strong>Remo</strong> meeting details .
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('img/mailbox_imgs/6.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <strong>David</strong> upcoming events list.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="popover-footer">
                                    <a href="mail_inbox">Inbox</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <div class="notifications messages no-bg">
                            <a class="btn btn-default btn-sm" data-toggle="dropdown"> <i class="fa fa-bell text-white"></i>
                                <span class="badge badge-danger">9</span>
                            </a>
                            <div class="dropdown-menu drop_box_align" role="menu">
                                <div class="popover-header">You have 9 Notifications</div>
                                <div id="notifications">
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('img/mailbox_imgs/1.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>Remo</strong> sent you an image
                                                <br>
                                                <small class="primary_txt">just now.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('img/mailbox_imgs/2.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>clay</strong> business propasals
                                                <br>
                                                <small class="primary_txt">20min Back.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('img/mailbox_imgs/3.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>John</strong> meeting at Ritz
                                                <br>
                                                <small class="primary_txt">2hrs Back.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('img/mailbox_imgs/6.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>Luicy</strong> Request Invitation
                                                <br>
                                                <small class="primary_txt">Yesterday.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('img/mailbox_imgs/1.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>Remo</strong> sent you an image
                                                <br>
                                                <small class="primary_txt">just now.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('img/mailbox_imgs/2.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>clay</strong> business propasals
                                                <br>
                                                <small class="primary_txt">20min Back.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('img/mailbox_imgs/3.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>John</strong> meeting at Ritz
                                                <br>
                                                <small class="primary_txt">2hrs Back.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('img/mailbox_imgs/6.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>Luicy</strong> Request Invitation
                                                <br>
                                                <small class="primary_txt">Yesterday.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('img/mailbox_imgs/1.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>Remo</strong> sent you an image
                                                <br>
                                                <small class="primary_txt">just now.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="popover-footer">
                                    <a href="#">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <a class="btn btn-default btn-sm messages toggle-right">
                            &nbsp;
                            <i class="fa fa-cog text-white"></i>
                            &nbsp;
                        </a>
                    </div>
                    <div class="btn-group">
                        <div class="user-settings no-bg">
                            <button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown">
                                <img src="{{asset('img/admin.jpg')}}" class="admin_img2 rounded-circle avatar-img" alt="avatar"> <strong>Micheal</strong>
                                <span class="fa fa-sort-down white_bg"></span>
                            </button>
                            <div class="dropdown-menu admire_admin">
                                <div class="popover-header">Admire Admin</div>
                                <a class="dropdown-item" href="edit_user"><i class="fa fa-cogs"></i>
                                    Account Settings</a>
                                <a class="dropdown-item" href="#">
                                    <i class="fa fa-user"></i> User Status
                                </a>
                                <a class="dropdown-item" href="mail_inbox"><i class="fa fa-envelope"></i>
                                    Inbox</a>
                                <a class="dropdown-item" href="lockscreen"><i class="fa fa-lock"></i>
                                    Lock Screen</a>
                                <a class="dropdown-item" href="login2"><i class="fa fa-sign-out"></i>
                                    Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!-- /.navbar -->
        <!-- /.head -->
    </div>
    <!-- /#top -->
    <div class="wrapper">
        <div id="left">
            <div class="media user-media dker">
                <div class="user-media-toggleHover">
                    <span class="fa fa-user"></span>
                </div>
                <div class="user-wrapper">
                    <a class="user-link" href="">
                        <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture"
                             src="{{asset('img/admin.jpg')}}">
                        <p class="text-white user-info">Welcome Micheal</p></a>


                    <div class="search_bar col-lg-12">
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="search">
                            <span class="input-group-append">
                                <button class="btn without_border input-group-text border-left-0" type="button"><span class="fa fa-search">
                                </span></button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #menu -->
            <ul id="menu" class="bg-blue dker">
                <li>
                    <a href="index">
                        <i class="fa fa-home"></i>
                        <span class="link-title">&nbsp;Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-anchor"></i>
                        <span class="link-title">&nbsp; Components</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="general_components">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; General Components
                            </a>
                        </li>
                        <li>
                            <a href="transitions">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Transitions
                            </a>
                        </li>
                        <li>
                            <a href="buttons">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Buttons
                            </a>
                        </li>
                        <li>
                            <a href="icons">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Icons
                            </a>
                        </li>
                        <li>
                            <a href="tooltips">
                                <i class="fa fa-angle-right"></i>&nbsp; Tooltips
                            </a>
                        </li>
                        <li>
                            <a href="animations">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Animations
                            </a>
                        </li>

                        <li>
                            <a href="sliders">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Sliders
                            </a>
                        </li>
                        <li>
                            <a href="notifications">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Notifications
                            </a>
                        </li>
                        <li>
                            <a href="p_notify">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; P-Notify
                            </a>
                        </li>
                        <li>
                            <a href="cropper">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Cropper
                            </a>
                        </li>
                        <li>
                            <a href="jstree">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Js Tree
                            </a>
                        </li>
                        <li>
                            <a href="modal">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Modals
                            </a>
                        </li>


                        <li>
                            <a href="sortable">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Sortable
                            </a>
                        </li>
                        <li>
                            <a href="sweet_alert">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Sweet alerts
                            </a>
                        </li>
                        <li>
                            <a href="grids_layout">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Grid View
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-th-large"></i>
                        <span class="link-title">&nbsp; Widgets</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="widgets1">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Widgets1
                            </a>
                        </li>
                        <li>
                            <a href="widgets2">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Widgets2
                            </a>
                        </li>
                        <li>
                            <a href="widgets3">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Widgets3
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-pencil"></i>
                        <span class="link-title">&nbsp; Forms</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="form_elements">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Form Elements
                            </a>
                        </li>
                        <li>
                            <a href="form_layouts">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Form Layouts
                            </a>
                        </li>
                        <li>
                            <a href="form_validations">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Form Validations
                            </a>
                        </li>
                        <li>
                            <a href="form_editors">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Form Editors
                            </a>
                        </li>
                        <li>
                            <a href="radio_checkbox">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Radio and Checkbox
                            </a>
                        </li>
                        <li>
                            <a href="form_wizards">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Wizards
                            </a>
                        </li>
                        <li>
                            <a href="datetime_picker">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Date Time Picker
                            </a>
                        </li>

                        <li>
                            <a href="ratings">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Ratings
                            </a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-th"></i>
                        <span class="link-title">&nbsp; Tables</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="simple_tables">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Simple Tables
                            </a>
                        </li>
                        <li>
                            <a href="simple_datatables">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Simple Data Tables
                            </a>
                        </li>
                        <li>
                            <a href="datatables">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Data Tables
                            </a>
                        </li>
                        <li>
                            <a href="advanced_tables">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Advanced Tables
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-bar-chart"></i>
                        <span class="link-title">&nbsp; Charts</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="charts">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Flot Charts
                            </a>
                        </li>
                        <li>
                            <a href="advanced_charts">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Advanced Charts
                            </a>
                        </li>
                        <li>
                            <a href="chartist">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Chartist
                            </a>
                        </li>
                        <li>
                            <a href="rickshaw">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Rickshaw Charts
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-user"></i>
                        <span class="link-title">&nbsp; Users</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="users">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; User Grid
                            </a>
                        </li>
                        <li>
                            <a href="add_user">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Add User
                            </a>
                        </li>
                        <li>
                            <a href="view_user">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; User Profile
                            </a>
                        </li>
                        <li>
                            <a href="delete_user">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Delete User
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="calendar">
                        <i class="fa fa-calendar"></i>
                        <span class="link-title">&nbsp; Calendar</span>
                        <span class="badge badge-pill badge-primary float-right calendar_badge">7</span>
                    </a>
                </li>
                <li>
                    <a href="gallery">
                        <i class="fa fa-picture-o"> </i>
                        &nbsp; Gallery
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-envelope-o"></i>
                        <span class="link-title">&nbsp; Email</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="mail_compose">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Compose
                            </a>
                        </li>
                        <li>
                            <a href="mail_inbox">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Inbox
                            </a>
                        </li>

                        <li>
                            <a href="mail_view">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; View
                            </a>
                        </li>
                        <li>
                            <a href="mail_sent">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Sent
                            </a>
                        </li>
                        <li>
                            <a href="mail_spam">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Spam
                            </a>
                        </li>

                        <li>
                            <a href="mail_draft">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Draft
                            </a>
                        </li>
                        <li>
                            <a href="mail_trash">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Trash
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-map-marker"></i>
                        <span class="link-title">&nbsp; Maps</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="maps">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Google Maps
                            </a>
                        </li>
                        <li>
                            <a href="jqvmaps">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Vector Maps
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-file"></i>
                        <span class="link-title">&nbsp; Pages</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="404">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; 404
                            </a>
                        </li>
                        <li>
                            <a href="500">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; 500
                            </a>
                        </li>
                        <li>
                            <a href="login1">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Login
                            </a>
                        </li>
                        <li>
                            <a href="register1">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Register
                            </a>
                        </li>
                        <li>
                            <a href="lockscreen">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Lock Screen
                            </a>
                        </li>
                        <li>
                            <a href="invoice">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Invoice
                            </a>
                        </li>
                        <li>
                            <a href="blank">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Blank Page
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span class="link-title">&nbsp; Layouts</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="boxed">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Boxed Layout
                            </a>
                        </li>
                        <li>
                            <a href="fixed-header-boxed">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Boxed &amp; Fixed Header
                            </a>
                        </li>
                        <li>
                            <a href="fixed-header-menu">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Fixed Header &amp; Menu
                            </a>
                        </li>
                        <li  class="active" id="active">
                            <a href="fixed-header">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Fixed Header
                            </a>
                        </li>
                        <li>
                            <a href="fixed-menu-boxed">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Boxed &amp; Fixed Menu
                            </a>
                        </li>
                        <li>
                            <a href="fixed-menu">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Fixed Menu
                            </a>
                        </li>
                        <li>
                            <a href="no-header">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; No Header
                            </a>
                        </li>
                        <li>
                            <a href="no-left-sidebar">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; No Left Sidebar
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-sitemap"></i>
                        <span class="link-title">&nbsp; Multi Level Menu</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-angle-right"></i>
                                &nbsp;Level 1
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu sub-submenu">
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp;Level 2
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp;Level 2
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp;Level 2
                                        <span class="fa arrow"></span>
                                    </a>
                                    <ul class="sub-menu sub-submenu">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-angle-right"></i>
                                                &nbsp;Level 3
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-angle-right"></i>
                                                &nbsp;Level 3
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-angle-right"></i>
                                                &nbsp;Level 3
                                                <span class="fa arrow"></span>
                                            </a>
                                            <ul class="sub-menu sub-submenu">
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-angle-right"></i>
                                                        &nbsp;Level 4
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-angle-right"></i>
                                                        &nbsp;Level 4
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-angle-right"></i>
                                                        &nbsp;Level 4
                                                        <span class="fa arrow"></span>
                                                    </a>
                                                    <ul class="sub-menu sub-submenu">
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-angle-right"></i>
                                                                &nbsp;Level 5
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-angle-right"></i>
                                                                &nbsp;Level 5
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-angle-right"></i>
                                                                &nbsp;Level 5
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-angle-right"></i>
                                                &nbsp;Level 4
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp;Level 2
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-angle-right"></i>
                                &nbsp;Level 1
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-angle-right"></i>
                                &nbsp;Level 1
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu sub-submenu">
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp;Level 2
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp;Level 2
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp;Level 2
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- /#menu -->
        </div>
        <!-- /#left -->
        <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row">
                        <div class="col-lg col-sm-5">
                            <h4 class="nav_top_align"><i class="fa fa-th"></i> Fixed Header</h4>
                        </div>
                        <div class="col-lg col-sm-7">
                            <ul class="breadcrumb float-right nav_breadcrumb_top_align">
                                <li class=" breadcrumb-item">
                                    <a href="index">
                                        <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                                    </a>
                                </li>
                                <li class=" breadcrumb-item">
                                    <a href="#">Layouts</a>
                                </li>
                                <li class="breadcrumb-item active">Fixed Header</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-container">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header bg-white">
                                    About Admire
                                </div>
                                <div class="card-body card_block_top_align ">
                                    <h5> Here Comes Admire  Admin Theme  Description. </h5>
                                    <p> Admire Admin Theme is built on Bootstrap v4.0.0-alpha.5 and it is a fully responsive theme...</p>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, facer honestatis ut usu, eripuit docendi volumus eu mel, sea ad case
                                        nusquam voluptua. An mei vidit saepe adolescens, qui in diam nostro. Regione dolores his no,
                                        mea audiam vidisse dolorem et. Qui wisi nulla electram ut, his soleat virtute temporibus an,
                                        primis hendrerit eu ius.
                                        Vix ea audire rationibus. Tale aperiri sit ad, zril noluisse ut sit.
                                        Altera euismod propriae eam ex, has aeque lobortis reprimique ad, mei cu oratio salutandi
                                        maluisset. Ius te fierent inimicus dignissim. Eos an feugait rationibus. At unum etiam
                                        concludaturque nam.</p>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, facer honestatis ut usu, eripuit docendi volumus eu mel, sea ad case
                                        nusquam voluptua. An mei vidit saepe adolescens, qui in diam nostro. Regione dolores his no,
                                        mea audiam vidisse dolorem et. Qui wisi nulla electram ut, his soleat virtute temporibus an,
                                        primis hendrerit eu ius.
                                        Vix ea audire rationibus. Tale aperiri sit ad, zril noluisse ut sit.
                                        Altera euismod propriae eam ex, has aeque lobortis reprimique ad, mei cu oratio salutandi
                                        maluisset. Ius te fierent inimicus dignissim. Eos an feugait rationibus. At unum etiam
                                        concludaturque nam.</p>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, facer honestatis ut usu, eripuit docendi volumus eu mel, sea ad case
                                        nusquam voluptua. An mei vidit saepe adolescens, qui in diam nostro. Regione dolores his no,
                                        mea audiam vidisse dolorem et. Qui wisi nulla electram ut, his soleat virtute temporibus an,
                                        primis hendrerit eu ius.
                                        Vix ea audire rationibus. Tale aperiri sit ad, zril noluisse ut sit.
                                        Altera euismod propriae eam ex, has aeque lobortis reprimique ad, mei cu oratio salutandi
                                        maluisset. Ius te fierent inimicus dignissim. Eos an feugait rationibus. At unum etiam
                                        concludaturque nam.</p>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, facer honestatis ut usu, eripuit docendi volumus eu mel, sea ad case
                                        nusquam voluptua. An mei vidit saepe adolescens, qui in diam nostro. Regione dolores his no,
                                        mea audiam vidisse dolorem et. Qui wisi nulla electram ut, his soleat virtute temporibus an,
                                        primis hendrerit eu ius.
                                        Vix ea audire rationibus. Tale aperiri sit ad, zril noluisse ut sit.
                                        Altera euismod propriae eam ex, has aeque lobortis reprimique ad, mei cu oratio salutandi
                                        maluisset. Ius te fierent inimicus dignissim. Eos an feugait rationibus. At unum etiam
                                        concludaturque nam.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card m-t-35">
                                <div class="card-header bg-white">
                                    About Fixed Header Layout
                                </div>
                                <div class="card-body card_block_top_align ">
                                    <h5> Here Comes Admire  Admin Theme  Description. </h5>
                                    <p> Admire Admin Theme is built on Bootstrap v4.0.0-alpha.5 and it is a fully responsive theme...</p>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, facer honestatis ut usu, eripuit docendi volumus eu mel, sea ad case
                                        nusquam voluptua. An mei vidit saepe adolescens, qui in diam nostro. Regione dolores his no,
                                        mea audiam vidisse dolorem et. Qui wisi nulla electram ut, his soleat virtute temporibus an,
                                        primis hendrerit eu ius.
                                        Vix ea audire rationibus. Tale aperiri sit ad, zril noluisse ut sit.
                                        Altera euismod propriae eam ex, has aeque lobortis reprimique ad, mei cu oratio salutandi
                                        maluisset. Ius te fierent inimicus dignissim. Eos an feugait rationibus. At unum etiam
                                        concludaturque nam.</p>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, facer honestatis ut usu, eripuit docendi volumus eu mel, sea ad case
                                        nusquam voluptua. An mei vidit saepe adolescens, qui in diam nostro. Regione dolores his no,
                                        mea audiam vidisse dolorem et. Qui wisi nulla electram ut, his soleat virtute temporibus an,
                                        primis hendrerit eu ius.
                                        Vix ea audire rationibus. Tale aperiri sit ad, zril noluisse ut sit.
                                        Altera euismod propriae eam ex, has aeque lobortis reprimique ad, mei cu oratio salutandi
                                        maluisset. Ius te fierent inimicus dignissim. Eos an feugait rationibus. At unum etiam
                                        concludaturque nam.</p>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, facer honestatis ut usu, eripuit docendi volumus eu mel, sea ad case
                                        nusquam voluptua. An mei vidit saepe adolescens, qui in diam nostro. Regione dolores his no,
                                        mea audiam vidisse dolorem et. Qui wisi nulla electram ut, his soleat virtute temporibus an,
                                        primis hendrerit eu ius.
                                        Vix ea audire rationibus. Tale aperiri sit ad, zril noluisse ut sit.
                                        Altera euismod propriae eam ex, has aeque lobortis reprimique ad, mei cu oratio salutandi
                                        maluisset. Ius te fierent inimicus dignissim. Eos an feugait rationibus. At unum etiam
                                        concludaturque nam.</p>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, facer honestatis ut usu, eripuit docendi volumus eu mel, sea ad case
                                        nusquam voluptua. An mei vidit saepe adolescens, qui in diam nostro. Regione dolores his no,
                                        mea audiam vidisse dolorem et. Qui wisi nulla electram ut, his soleat virtute temporibus an,
                                        primis hendrerit eu ius.
                                        Vix ea audire rationibus. Tale aperiri sit ad, zril noluisse ut sit.
                                        Altera euismod propriae eam ex, has aeque lobortis reprimique ad, mei cu oratio salutandi
                                        maluisset. Ius te fierent inimicus dignissim. Eos an feugait rationibus. At unum etiam
                                        concludaturque nam.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#content -->
    </div>
    <!--wrapper-->
    <div id="right">
        <div class="right_content">
            <div class="alert alert-success white_txt">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Welcome Micheal
                    <br/></strong>
                Set Your Skin Here. Checkout Admin Statistics. Good Day!.
            </div>
            <div class="well well-small dark">
                <div class="xs_skin_hide hidden-sm-up toggle-right"><i class="fa fa-cog"></i></div>
                <h4 class="brown_txt">
                    <span class="fa-stack fa-sm">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-paint-brush fa-stack-1x fa-inverse"></i>
                </span>
                    Skins
                </h4>
                <br/>

                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('blue_black_skin.css','css')">
                    <div class="skin_blue skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('green_black_skin.css','css')">
                    <div class="skin_green skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('purple_black_skin.css','css')">
                    <div class="skin_purple skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('orange_black_skin.css','css')">
                    <div class="skin_orange skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('red_black_skin.css','css')">
                    <div class="skin_red skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('mint_black_skin.css','css')">
                    <div class="skin_mint skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('brown_black_skin.css','css')">
                    <div class="skin_brown skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('black_skin.css','css')">
                    <div class="skin_black skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skin_btn skin_blue" onclick="javascript:loadjscssfile('blue_skin.css','css')"></div>
                <div class="skin_btn skin_green" onclick="javascript:loadjscssfile('green_skin.css','css')"></div>
                <div class="skin_btn skin_purple" onclick="javascript:loadjscssfile('purple_skin.css','css')"></div>
                <div class="skin_btn skin_orange" onclick="javascript:loadjscssfile('orange_skin.css','css')"></div>
                <div class="skin_btn skin_red" onclick="javascript:loadjscssfile('red_skin.css','css')"></div>
                <div class="skin_btn skin_mint" onclick="javascript:loadjscssfile('mint_skin.css','css')"></div>
                <div class="skin_btn skin_brown" onclick="javascript:loadjscssfile('brown_skin.css','css')"></div>
                <div class="skin_btn skin_black" onclick="javascript:loadjscssfile('black_skin.css','css')"></div>

            </div>
            <div class="well well-small dark">
                <h4 class="brown_txt margin15_bottom">
                    <img src="{{asset('img/admin.jpg')}}" width="32" height="32" class="rounded-circle avatar-img" alt="avatar"> &nbsp;Admin
                    Statistics</h4>
                <br/>
                <ul class="list-unstyled">
                    <li class="green_txt margin15_bottom">
                <span class="fa-stack fa-sm">
                    <i class="fa fa-circle fa-stack-2x text-mint"></i>
                    <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                </span>
                        &nbsp; Last Login
                        <span class="inlinesparkline float-right">2hrs Back</span>
                    </li>
                    <li class="warning_txt margin15_bottom">
                        <span class="fa-stack fa-sm">
                      <i class="fa fa-circle fa-stack-2x text-brown"></i>
                      <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                    </span>
                        &nbsp; Pending Tasks
                        <span class="dynamicsparkline float-right">12</span>
                    </li>
                    <li class="primary_txt margin15_bottom">
                        <span class="fa-stack fa-sm">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-cloud fa-stack-1x fa-inverse"></i>
                    </span>
                        &nbsp; Weather Today
                        <span class="dynamicbar float-right">Rainy</span>
                    </li>
                    <li class="margin15_bottom">
                        <span class="fa-stack fa-sm">
                      <i class="fa fa-circle fa-stack-2x text-brown"></i>
                      <i class="fa fa-calendar fa-stack-1x fa-inverse"></i>
                    </span>
                        &nbsp; Events
                        <span class="inlinebar float-right">Team Out</span>
                    </li>
                    <li class="success_txt margin15_bottom">
                        <span class="fa-stack fa-sm">
                      <i class="fa fa-circle fa-stack-2x text-success"></i>
                      <i class="fa fa-bell fa-stack-1x fa-inverse"></i>
                    </span>
                        &nbsp; Notifications
                        <span class="inlinebar float-right">5</span>
                    </li>
                </ul>
            </div>
            <div class="well well-small dark right_progressbar_section">
                <h4 class="brown_txt">
                    <span class="fa-stack fa-sm">
                      <i class="fa fa-circle fa-stack-2x text-brown"></i>
                      <i class="fa fa-hand-o-down fa-stack-1x fa-inverse"></i>
                    </span>
                    Alerts
                </h4>
                <br/>
                <span>Sales Improvement</span>
                <span class="float-right">
                <small>20%</small>
            </span>
                <div class="progress xs">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span>Server Load</span>
                <span class="float-right">
                <small>80%</small>
            </span>
                <div class="progress xs">
                    <div class="progress-bar bg-mint" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span>Traffic Improvement</span>
                <span class="float-right">
                <small>55%</small>
            </span>
                <div class="progress xs">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- # right side -->
</div>

<!--global scripts-->
<script type="text/javascript" src="{{asset('js/components.js')}}"></script>
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
<!--end of global scripts-->
</body>
</html>
