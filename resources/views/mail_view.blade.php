@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    View
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/bootstrap3-wysihtml5-bower/css/bootstrap3-wysihtml5.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/mail_box.css')}}"/>
    <!-- end of page level styles -->
@stop


{{-- Page content --}}
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-sm-4">
                    <h4 class="nav_top_align">
                        <i class="fa fa-eye"></i>
                        View Mail
                    </h4>
                </div>
                <div class="col-sm-8">
                    <ol class="breadcrumb float-right  nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Email</a>
                        </li>
                        <li class="active breadcrumb-item">View Mail</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="row web-mail mail_compose">
                <div class="col-lg-3 mail_compose_list">
                    <div>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="mail_compose">
                                    <i class="fa fa-edit"></i>
                                    Compose
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="mail_inbox">
                                    <i class="fa fa-inbox"></i>
                                    Inbox
                                </a>
                            </li>
                            <li class="list-group-item bg-success">
                                <a href="mail_view" class="mail_inbox_text_col">
                                    <i class="fa fa-eye"></i>
                                    View Mail
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="mail_sent">
                                    <i class="fa fa-sign-out"></i>
                                    Sent
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="mail_spam">
                                    <span class="badge badge-pill badge-primary float-right">14</span>
                                    <i class="fa fa-eye-slash"></i>
                                    Spam
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="mail_draft">
                                    <span class="badge badge-pill badge-primary float-right">16</span>
                                    <i class="fa fa-recycle"></i>
                                    Draft
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="mail_trash">
                                    <span class="badge badge-pill badge-primary float-right">16</span>
                                    <i class="fa fa-trash"></i>
                                    Trash
                                </a>
                            </li>
                            <li class="list-group-item" id="more_items">
                                <a>
                                    <i class="fa fa-angle-down float-right"></i>
                                    More
                                </a>
                            </li>
                            <li class="list-group-item starred_mail">
                                <a href="#">
                                    <span class="badge badge-pill badge-primary float-right">3</span>
                                    <i class="fa fa-star"></i>
                                    Starred
                                </a>
                            </li>
                            <li class="list-group-item starred_mail">
                                <a href="#">
                                    <span class="badge badge-pill badge-primary float-right">14</span>
                                    <i class="fa fa-user"></i>
                                    Personal
                                </a>
                            </li>
                            <li class="list-group-item starred_mail">
                                <a href="#">
                                    <span class="badge badge-pill badge-primary float-right">26</span>
                                    <i class="fa fa-shield"></i>
                                    Client
                                </a>
                            </li>
                            <li class="list-group-item starred_mail">
                                <a href="#">
                                    <span class="badge badge-pill badge-primary float-right">36</span>
                                    <i class="fa fa-briefcase "></i>
                                    Important
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mail_ul_active m-t-35">
                        <ul class="list-group">
                            <li class="list-group-item bg-success">
                                <a href="#" class="mail_inbox_text_col">
                                    <i class="fa fa-comments"></i>
                                    Contacts
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul class="list-group contact_scroll">
                            <li class="list-group-item status_height">
                                <a href="#">
                                    <span class="status-online margin_top10"></span>
                                    &nbsp; John Cena
                                    <span class="float-left">
                                            <img src="{{asset('img/mailbox_imgs/1.jpg')}}"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image">
                                        </span>
                                </a>
                            </li>
                            <li class="list-group-item status_height">
                                <a href="#">
                                    <span class="status-online margin_top10"></span>
                                    &nbsp; Peter Norton
                                    <span class="float-left">
                                            <img src="{{asset('img/mailbox_imgs/2.jpg')}}"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image">
                                        </span>
                                </a>
                            </li>
                            <li class="list-group-item status_height">
                                <a href="#">
                                    <span class="status-busy margin_top10"></span>
                                    &nbsp; Marin Robbinson
                                    <span class="float-left">
                                            <img src="{{asset('img/mailbox_imgs/3.jpg')}}"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image"></span>
                                </a>
                            </li>
                            <li class="list-group-item status_height">
                                <a href="#">
                                    <span class="status-away margin_top10"></span>
                                    &nbsp; Kimy Zorda
                                    <span class="float-left">
                                            <img src="{{asset('img/mailbox_imgs/4.jpg')}}"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image"></span>
                                </a>
                            </li>
                            <li class="list-group-item status_height">
                                <a href="#">
                                    <span class="status-online margin_top10"></span>
                                    &nbsp; Hally
                                    <span class="float-left">
                                            <img src="{{asset('img/mailbox_imgs/5.jpg')}}"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image"></span>
                                </a>
                            </li>
                            <li class="list-group-item status_height">
                                <a href="#">
                                    <span class="status-busy margin_top10"></span>
                                    &nbsp; Mike J Mayor
                                    <span class="float-left">
                                            <img src="{{asset('img/mailbox_imgs/6.jpg')}}"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image"></span>
                                </a>
                            </li>
                            <li class="list-group-item status_height">
                                <a href="#">
                                    <span class="status-away margin_top10"></span>
                                    &nbsp; David Miller
                                    <span class="float-left">
                                            <img src="{{asset('img/mailbox_imgs/7.jpg')}}"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image"></span>
                                </a>
                            </li>
                            <li class="list-group-item status_height">
                                <a href="#">
                                    <span class="status-away m-t-10"></span>
                                    &nbsp; Adela
                                    <span class="float-left">
                                            <img src="{{asset('img/mailbox_imgs/8.jpg')}}"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image"></span>
                                </a>
                            </li>
                            <li class="list-group-item status_height">
                                <a href="#">
                                    <span class="status-away m-t-10"></span>
                                    &nbsp; Sandy Chris
                                    <span class="float-left">
                                            <img src="{{asset('img/mailbox_imgs/8.jpg')}}"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image"></span>
                                </a>
                            </li>
                            <li class="list-group-item status_height">
                                <a href="#">
                                    <span class="status-online m-t-10"></span>
                                    &nbsp; Symons
                                    <span class="float-left">
                                            <img src="{{asset('img/mailbox_imgs/2.jpg')}}"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image"></span>
                                </a>
                            </li>
                            <li class="list-group-item status_height">
                                <a href="#">
                                    <span class="status-busy m-t-10"></span>
                                    &nbsp; Randy
                                    <span class="float-left">
                                            <img src="{{asset('img/mailbox_imgs/1.jpg')}}"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="card media_max_991">
                        <div class="card-header bg-white">
                            <p class="m-t-20">Subject: Hello, hope you having a great day ahead.</p>
                            <p class="m-t-10"><span>From: admin@xyz.com </span><span class="float-right">06:15AM 28 FEB 2016</span></p>
                        </div>
                        <div class="card-body m-t-35">
                            <h5>Hello John Smith!</h5>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                            <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                            <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
                            <br/>
                            <hr>
                            <h4 class="m-t-25"><i class="fa fa-paperclip"></i> &nbsp;Attachments <span>(2)</span></h4>
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-sm-4 col-6 m-t-20">
                                    <img class="img-thumbnail img-fluid view_admin_img" alt="Admin" src="{{asset('img/mailbox_imgs/1.jpg')}}">
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-4 col-6  m-t-20">
                                    <img class="img-thumbnail img-fluid view_admin_img" alt="Admin" src="{{asset('img/mailbox_imgs/3.jpg')}}">
                                </div>
                            </div>
                            <br/>
                            <hr>
                            <div class="m-t-20">
                                <form action="mail_sent" class="mail_view_wysi">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="forward_to" placeholder="To *" required="">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="wysihtml5 form-control m-t-20" placeholder="Reply or Forward"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary" id="goto_sent_page">Send</button>
                                        <a class="btn btn-primary" href="mail_view">Back</a>
                                    </div>
                                </form>
                                <button class="btn btn-primary" id="view_reply1"><i class="fa fa-reply"></i> Reply</button>
                                <button class="btn btn-primary" id="view_reply2"><i class="fa fa-reply"></i> Forward</button>
                                <a href="mail_trash" class="btn btn-warning" id="view_reply3"><i class="fa fa-trash-o"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.inner -->
    </div>
    <!-- /.outer -->
@stop
{{-- page level scripts --}}
@section('footer_scripts')
    <!--Page level scripts-->
    <script type="text/javascript" src="{{asset('vendors/bootstrap3-wysihtml5-bower/js/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/pluginjs/bootstrap3_wysihtml5.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/pages/mail_box.js')}}"></script>
    <!-- end page level scripts -->
@stop
