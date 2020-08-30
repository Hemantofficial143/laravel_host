@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Admin Profile
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--Plugin css-->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/jasny-bootstrap/css/jasny-bootstrap.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/fullcalendar/css/fullcalendar.min.css')}}"/>
    <!--End off plugin css-->
    <!--Page level css-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/timeline2.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/calendar_custom.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/profile.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/gallery.css')}}"/>
    <!--end of page level css-->
@stop


{{-- Page content --}}
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-lg-6 col-sm-5 col-12">
                    <h4 class="nav_top_align">
                        <i class="fa fa-user"></i>
                        Admin Profile
                    </h4>
                </div>
                <div class="col-lg-6 col-sm-7 col-12">
                    <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Admins</a>
                        </li>
                        <li class="active breadcrumb-item">Admin Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 m-t-35">
                            <div class="text-center">
                                <div class="form-group">
                                    
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumb_zoom zoom admin_img_width">
                                            <img src="{{ url('storage/images/admins/'.$user->profile_img ) }}"" alt="admin" class="admin_img_width"></div>
                                        <div class="fileinput-preview fileinput-exists thumb_zoom zoom admin_img_width"></div>
                                        <div class="btn_file_position">
                                                    
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="view_friends_imgs"><br/>
                                        <p>
                                            <strong>FRIENDS</strong>
                                        </p>
                                        <div class="friends_img_left">
                                            <div class="thumb_zoom zoom">
                                                <img src="{{asset('img/mailbox_imgs/2.jpg')}}" class="img-rounded" alt="friend">
                                            </div>
                                            <div class="thumb_zoom zoom">
                                                <img src="{{asset('img/mailbox_imgs/3.jpg')}}" class="img-rounded" alt="friend">
                                            </div>
                                            <div class="thumb_zoom zoom">
                                                <img src="{{asset('img/mailbox_imgs/5.jpg')}}" class="img-rounded" alt="friend">
                                            </div>
                                            <div class="thumb_zoom zoom">
                                                <img src="{{asset('img/mailbox_imgs/6.jpg')}}" class="img-rounded" alt="friend">
                                            </div>
                                            <div class="thumb_zoom zoom">
                                                <img src="{{asset('img/mailbox_imgs/7.jpg')}}" class="img-rounded" alt="friend">
                                            </div>
                                            <div class="thumb_zoom zoom">
                                                <img src="{{asset('img/mailbox_imgs/8.jpg')}}" class="img-rounded" alt="friend">
                                            </div>
                                            <div class="thumb_zoom zoom">
                                                <img src="{{asset('img/mailbox_imgs/10.jpg')}}" class="img-rounded" alt="friend">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 m-t-25">
                            <div>
                                <ul class="nav nav-inline view_user_nav_padding" id="content-tab">
                                    <li class="nav-item card_nav_hover">
                                        <a class="nav-link active" href="#user" id="home-tab"
                                           data-toggle="tab" aria-expanded="true">Admin Details</a>
                                    </li>
                                    <li class="nav-item card_nav_hover">
                                        <a class="nav-link" href="#tab2" id="hats-tab" data-toggle="tab">About Me</a>
                                    </li>
                                    <li class="nav-item card_nav_hover">
                                        <a class="nav-link" href="#tab3"  id="followers" data-toggle="tab">Followers</a>
                                    </li>
                                </ul>
                                <div id="clothing-nav-content" class="tab-content m-t-10">
                                    <div role="tabpanel" class="tab-pane fade show active" id="user">
                                        <table class="table" id="users">
                                            <tr>
                                                <td>User Name</td>
                                                <td class="inline_edit">
                                                        <span 
                                                              data-title="Edit User Name">{{ $user->name }}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>E-mail</td>
                                                <td>
                                                    <span  data-title="Edit E-mail">{{ $user->email }}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Phone Number</td>
                                                <td>
                                                    <span  data-title="Edit Phone Number">
                                                        @if ($user->mobile == "")
                                                            -
                                                        @else
                                                             {{ $user->mobile }}
                                                        @endif
                                                        
                                                    </span>
                                                </td>
                                            </tr>
                                            {{-- <tr>
                                                <td>Address</td>
                                                <td>
                                                    <span class="editable" data-title="Edit Address">
                                                        @if ($user->address == "")
                                                            -
                                                        @else
                                                             {{ $user->mobile }}
                                                        @endif
                                                    </span>
                                                </td>
                                            </tr> --}}
                                            <tr>
                                                <td>Created At</td>
                                                <td>
                                                    @if ($user->created_at == "")
                                                            -
                                                    @else
                                                             {{ $user->created_at }}
                                                    @endif
                                                </td>
                                            </tr>
                                            {{-- <tr>
                                                <td>City</td>
                                                <td>
                                                    <span class="editable" data-title="Edit City">Nakia</span>
                                                </td>
                                            </tr> 
                                            <tr>
                                                <td>Pincode</td>
                                                <td>
                                                    <span class="editable" data-title="Edit Pincode">522522</span>
                                                </td>
                                            </tr>--}}
                                        </table>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab2">
                                        <div class="card_nav_body_padding">
                                            <p>
                                                Howdy, I'm in About Me.
                                            </p>
                                            <p class="text-justify">
                                                Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                                ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                                consequat. Duis autem vel eum iriure dolor in hendrerit in
                                                vulputate velit esse molestie consequat. Ut wisi enim ad
                                                minim veniam, quis nostrud exerci tation.
                                            </p>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab3">
                                        <div class="card_nav_body_padding follower_images">
                                            <div class="row">
                                                <div class="col-sm-3 col-xl-2">
                                                    <div class="img">
                                                        <a href="#">
                                                            <img src="{{asset('img/mailbox_imgs/2.jpg')}}" class="rounded-circle" alt="friend">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-sm-9 col-xl-9">
                                                    <div class="details">
                                                        <div class="name">
                                                            <a href="#">Scarlett Johansson</a>
                                                        </div>
                                                        <div class="time">
                                                            <i class="fa fa-clock-o"></i> Last seen: 7 minutes ago
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-t-15">
                                                <div class="col-sm-3 col-xl-2">
                                                    <div class="img">
                                                        <a href="#">
                                                            <img src="{{asset('img/mailbox_imgs/3.jpg')}}" class="rounded-circle" alt="friend">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-sm-9 col-xl-10">
                                                    <div class="details">
                                                        <div class="name">
                                                            <a href="#">Mila Kunis</a>
                                                        </div>
                                                        <div class="time">
                                                            <i class="fa fa-clock-o"></i> Online
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-t-15">
                                                <div class="col-xl-2 col-sm-3">
                                                    <div class="img">
                                                        <a href="#">
                                                            <img src="{{asset('img/mailbox_imgs/8.jpg')}}" class="rounded-circle" alt="friend">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-10 col-sm-9">
                                                    <div class="details">
                                                        <div class="name">
                                                            <a href="#">George Clooney</a>
                                                        </div>
                                                        <div class="time">
                                                            <i class="fa fa-clock-o"></i> Last seen: 1 hour ago
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-t-15">
                                                <div class="col-xl-2 col-sm-3">
                                                    <div class="img">
                                                        <a href="#">
                                                            <img src="{{asset('img/mailbox_imgs/6.jpg')}}" class="rounded-circle" alt="friend">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-10 col-sm-9">
                                                    <div class="details">
                                                        <div class="name">
                                                            <a href="#">Robert Downey Jr.</a>
                                                        </div>
                                                        <div class="time">
                                                            <i class="fa fa-clock-o"></i> Online
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-t-15">
                                                <div class="col-xl-2 col-sm-3">
                                                    <div class="img">
                                                        <a href="#">
                                                            <img src="{{asset('img/mailbox_imgs/5.jpg')}}" class="rounded-circle" alt="friend">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-10 col-sm-9">
                                                    <div class="details">
                                                        <div class="name">
                                                            <a href="#">Ryan Gossling</a>
                                                        </div>
                                                        <div class="time">
                                                            <i class="fa fa-clock-o"></i> Last seen: 45 minutes ago
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
                <div class="col-lg-6">
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            <div>
                                <i class="fa fa-calendar"></i>
                                Upcoming Events
                            </div>
                        </div>
                        <div class="card-body m-t-35 padding-body view_user_cal">
                            <div id="calendar_mini" class="bg-primary table-responsive"></div>
                            <div class="list-group">
                                <a href="#" class="list-group-item calendar-list">
                                    <div class="tag tag-pill tag-primary float-right">07:30</div>
                                    Meet a friend
                                </a>
                                <a href="#" class="list-group-item calendar-list">
                                    <div class="tag tag-pill tag-primary float-right">10:30</div>
                                    Seminar on market
                                </a>
                                <a href="#" class="list-group-item calendar-list">
                                    <div class="tag tag-pill tag-primary float-right">11:30</div>
                                    Meeting with CEO
                                </a>
                                <a href="#" class="list-group-item calendar-list">
                                    <div class="tag tag-pill tag-primary float-right">17:30</div>
                                    Sales proposal
                                </a>
                                <a href="#" class="list-group-item calendar-list">
                                    <div class="tag tag-pill tag-primary float-right">19:30</div>
                                    Milestone release
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            <div>
                                <i class="fa fa-pencil"></i>
                                Recent Feeds
                            </div>
                        </div>
                        <div class="card-body m-t-35 padding">
                            <div class="feed">
                                <ul>
                                    <li>
                                                    <span>
                                                        <img src="{{asset('img/roundicons/flat/Office-27.png')}}" alt="text_image"
                                                             class="rounded-circle img-fluid recent_feeds_img"/>
                                                    </span>
                                        <h5>
                                            Important Mails
                                        </h5>
                                        <p>
                                            Mail received from
                                            <strong>John</strong> .
                                        </p>
                                        <i>1 hr back</i>
                                    </li>
                                    <li>
                                                    <span>
                                                        <img src="{{asset('img/roundicons/flat/Technology-07.png')}}"
                                                             alt="text_image"
                                                             class="rounded-circle img-fluid recent_feeds_img"/>
                                                    </span>
                                        <h5>
                                            Documents
                                        </h5>
                                        <p>
                                            <strong>Documents</strong> have sent to
                                            <strong>MJ</strong> .
                                        </p>
                                        <i>1 hr ago</i>
                                    </li>
                                    <li>
                                                    <span>
                                                        <img src="{{asset('img/mailbox_imgs/8.jpg')}}"
                                                             class="rounded-circle img-fluid pull-left recent_feeds_img"
                                                             alt="Image">
                                                    </span>
                                        <h5>
                                            Mails
                                        </h5>
                                        <p>
                                            Mail sent to
                                            <strong>sandy</strong> .
                                        </p>
                                        <i>2 hr back</i>
                                    </li>
                                    <li>
                                                    <span>
                                                        <img src="{{asset('img/mailbox_imgs/6.jpg')}}"
                                                             class="rounded-circle img-fluid pull-left recent_feeds_img"
                                                             alt="Image">
                                                    </span>
                                        <h5>
                                            Mails
                                        </h5>
                                        <p>
                                            Mail sent to
                                            <strong>John</strong> .
                                        </p>
                                        <i>30 minutes back</i>
                                    </li>

                                    <li>
                                                    <span>
                                                        <img src="{{asset('img/roundicons/flat/Office-06.png')}}" alt="text_image"
                                                             class="rounded-circle img-fluid recent_feeds_img"/>
                                                    </span>
                                        <h5>
                                            Notice
                                        </h5>
                                        <p>
                                            <strong>Lorem Ipsum</strong> is simply dummy text of the printing and
                                            typesetting industry.
                                        </p>
                                        <i>2 hr back</i>
                                    </li>
                                    <li>
                                                    <span>
                                                        <img src="{{asset('img/mailbox_imgs/5.jpg')}}"
                                                             class="rounded-circle img-fluid pull-left recent_feeds_img"
                                                             alt="Image">
                                                    </span>
                                        <h5>
                                            Mails
                                        </h5>
                                        <p>
                                            Mail sent to
                                            <strong>Peter</strong> .
                                        </p>
                                        <i>1 hr back</i>
                                    </li>
                                    <li class="no-border">
                                                    <span>
                                                        <img src="{{asset('img/mailbox_imgs/2.jpg')}}"
                                                             class="rounded-circle img-fluid pull-left recent_feeds_img"
                                                             alt="Image">
                                                    </span>
                                        <h5>
                                            Important Notice
                                        </h5>
                                        <p>
                                            <strong>Renny</strong> sent some documents .
                                        </p>
                                        <i>3 hr back</i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card m-t-35">
                <div class="card-header bg-white">
                    <i class="fa fa-fw fa-clock-o"></i> Timeline
                </div>
                <div class="card-body m-t-35">
                    <!--timeline-->
                    <div>
                        <ul class="timeline">
                            <li>
                                <div class="timeline-badge primary">
                                    <i class="fa fa-tag"></i>
                                </div>
                                <div class="timeline-panel bg-primary">
                                    <div class="timeline-heading text-white">
                                        <h5 class="timeline-title">Timeline Event One</h5>
                                        <p>
                                            <small>13 hours ago</small>
                                        </p>
                                    </div>
                                    <div class="timeline-body text-white">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.  gravida tempor justo, at  justo fringilla at.
                                            .
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-badge danger">
                                    <i class="fa fa-fw fa-check-square-o"></i>
                                </div>
                                <div class="timeline-panel bg-danger">
                                    <div class="timeline-heading text-white">
                                        <h5 class="timeline-title">Timeline Event Two</h5>
                                        <p>
                                            <small>June 20,2016</small>
                                        </p>
                                    </div>
                                    <div class="timeline-body text-white">
                                        <p> gravida tempor justo, at  justo fringilla at. gravida tempor justo, at justo fringilla at.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-badge info">
                                    <i class="fa fa-thumbs-o-up"></i>
                                </div>
                                <div class="timeline-panel bg-info">
                                    <div class="timeline-heading text-white">
                                        <h5 class="timeline-title">Timeline Event Three</h5>
                                        <p>
                                            <small>June 10 , 2016</small>
                                        </p>
                                    </div>
                                    <div class="timeline-body text-white">
                                        <p>
                                            Lorem ipsum dolor sit amet.  gravida tempor justo, at bibendum justo fringilla  justo fringilla at.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-badge warning">
                                    <i class="fa fa-fw fa-indent"></i>
                                </div>
                                <div class="timeline-panel bg-warning">
                                    <div class="timeline-heading text-white">
                                        <h5 class="timeline-title">Timeline Event Four</h5>
                                        <p>
                                            <small>Apr 20,2016</small>
                                        </p>
                                    </div>
                                    <div class="timeline-body text-white">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.  gravida tempor justo,  justo fringilla at.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-badge success">
                                    <i class="fa fa-pencil-square-o"></i>
                                </div>
                                <div class="timeline-panel bg-success">
                                    <div class="timeline-heading text-white">
                                        <h5 class="timeline-title">Timeline Event Five</h5>
                                        <p>
                                            <small>Mar 15,2016</small>
                                        </p>
                                    </div>
                                    <div class="timeline-body text-white">
                                        <p>
                                            Lorem Ipsum is simply dummy, vidis litro abertis. Consectetur adipiscing elit.  gravida tempor justo, at  justo fringilla at.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-badge mint">
                                    <i class="fa fa-paperclip"></i>
                                </div>
                                <div class="timeline-panel bg-mint">
                                    <div class="timeline-heading text-white">
                                        <h5 class="timeline-title">Timeline Event Six</h5>
                                        <p>
                                            <small>Jan 1,2016</small>
                                        </p>
                                    </div>
                                    <div class="timeline-body text-white">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.  gravida tempor justo, at  justo fringilla at.
                                            fringilla at.
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--timeline ends-->
                </div>
            </div>
        </div>
    </div>
    <!-- /.outer -->
@stop
{{-- page level scripts --}}
@section('footer_scripts')
    <!--Plugin scripts-->
    <script type="text/javascript" src="{{asset('vendors/jasny-bootstrap/js/jasny-bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/bootstrap_calendar/js/bootstrap_calendar.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/moment/js/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/fullcalendar/js/fullcalendar.min.js')}}"></script>
    <!--End of Plugin scripts-->
    <!--Page level scripts-->
    <script type="text/javascript" src="{{asset('js/pages/mini_calendar.js')}}"></script>
    <!--End of Page level scripts-->
@stop
