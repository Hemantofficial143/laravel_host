@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Cards
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--End of the global styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/swiper/css/swiper.min.css')}}"/>
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/general_components.css')}}"/>
    <!-- end of page level styles -->
@stop

@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-lg-6 col-sm-5 col-12">
                    <h4 class="nav_top_align">
                        <i class="fa fa-anchor" aria-hidden="true"></i>
                        Cards
                    </h4>
                </div>
                <div class="col-lg-6 col-sm-7  col-12">
                    <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Components</a>
                        </li>
                        <li class="breadcrumb-item active">cards</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-white">General cards</div>
                        <div class="card-body cards_section_margin">
                            <div class="row">
                                <div class="col-lg m-t-35">
                                    <div class="card">
                                        <div class="card-header bg-white">Card</div>
                                        <div class="card-body">
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                            </p>
                                        </div>
                                        <div class="card-footer bg-white">Footer</div>
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="card m-t-35">
                                        <div class="card-header bg-primary text-white">Card Primary</div>
                                        <div class="card-body">
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card bg-primary m-t-35">
                                        <div class="card-header">Background Card</div>
                                        <div class="card-body">
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg">
                                    <div class="card m-t-35">
                                        <div class="card-header bg-white">
                                            Image Card
                                        </div>
                                        <div class="card-body">
                                            <img src="{{asset('img/gallery/full/8.jpg')}}" class="img-fluid" alt="Photo of sunset">
                                        </div>
                                        <div class="card-footer bg-white">
                                            <p class="card-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="card m-t-35">
                                        <div class="card-header bg-white">
                                            Card List Groups
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Lorem Ipsum is simply dummy</li>
                                            <li class="list-group-item">Lorem Ipsum is simply dummy</li>
                                            <li class="list-group-item">Lorem Ipsum is simply dummy</li>
                                            <li class="list-group-item">Lorem Ipsum is simply dummy</li>
                                            <li class="list-group-item">Good Morning!</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="card border-info m-t-35">
                                        <div class="card-header bg-white">Border Color Card</div>
                                        <div class="card-body">
                                            <p class="card-text text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard Lorem Ipsum is simply dummy text of the printing and typesetting industry text of the printing and typesetting industry industry text of the printing and typesetting industry.</p>
                                            <!-- Links -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg">
                                    <div class="card card-inverse bg-warning m-t-35">
                                        <div class="card-header bg-warning">Card Inverse</div>
                                        <div class="card-body">
                                            <p class="card-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indust's standard dummy text ever since the 1500s,</p>
                                            <!-- Links -->
                                            <a href="#" class="card-link">Sun Gone</a>
                                            <a href="#" class="card-link">Still Gone</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="card m-t-35">
                                        <div class="card-header bg-white">
                                            <ul class="nav nav-tabs card-header-tabs float-left">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#">HTML</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">CSS</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link disabled" href="#">jQUERY</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">HTML</h4>
                                            <p class="card-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indust's standard dummy text ever since the 1500s, when an unknown printer.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="card m-t-35">
                                        <div class="card-header bg-white">
                                            <ul class="nav nav-pills card-header-pills float-left nav_pills_margin_top">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#">HTML</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">CSS</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link disabled" href="#">jQUERY</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">HTML</h4>
                                            <p class="card-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indust's standard dummy.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            Advanced cards
                        </div>
                        <div class="card-body cards_section_margin">
                            <div class="row">
                                <div class="col-lg m-t-35">
                                    <div class="card">
                                        <div class="card-header bg-white">
                                            <span class="card-title">Hide</span>
                                            <span class="float-right">
                                                            <i class="fa fa-close"></i>
                                                    </span>
                                        </div>
                                        <div class="card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the when an unknown printer.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg m-t-35">
                                    <div class="card">
                                        <div class="card-header bg-white">
                                            <span class="card-title">Toggled</span>
                                            <span class="float-right">
                                                            <i class="fa fa-chevron-up"></i>
                                                    </span>
                                        </div>
                                        <div class="card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the when an unknown printer.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg m-t-35">
                                    <div class="card">
                                        <div class="card-header bg-white">
                                            <span class="card-title">Editable card</span>
                                            <span class="float-right">
                                                            <i class="fa fa-pencil"></i>
                                                    </span>
                                        </div>
                                        <div class="card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the when an unknown printer.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg m-t-35">
                                    <div class="card">
                                        <div class="card-header bg-white">
                                            <span class="card-title">Header Colors</span>
                                            <span class="float-right">
                                                            <i class="fa fa-tint"></i>
                                                    </span>
                                        </div>
                                        <div class="card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the when an unknown printer.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg m-t-35">
                                    <div class="card">
                                        <div class="card-header bg-white">
                                            <span class="card-title">Full Screen</span>
                                            <span class="float-right">
                                                            <i class="fa fa-arrows-alt"></i>
                                                    </span>
                                        </div>
                                        <div class="card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the when an unknown printer.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg m-t-35">
                                    <div class="card">
                                        <div class="card-header bg-white">
                                            <span class="card-title">Card</span>
                                            <span class="float-right">
                                                         <i class="fa fa-close"></i>
                                                        <i class="fa fa-chevron-up"></i>
                                                        <i class="fa fa-pencil"></i>
                                                         <i class="fa fa-tint"></i>
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </span>
                                        </div>
                                        <div class="card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the when an unknown printer.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg">
                                    <div class="card bd-card card-fade-in m-t-35">
                                        <img class="card-img-top img-fluid b_r_5 card_img_height" src="{{asset('img/wallpaper2.jpg')}}" alt="Card image cap">
                                        <div class="card-body b_r_5">
                                            <h4 class="card-title text-white m-t-20"> Card title </h4>
                                            <p class="card-text">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indust's standard dummy text ever since the 1500s.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="card swiper_card m-t-35">
                                        <img class="card-img-top img-fluid b_r_5 card_img_height" src="{{asset('img/wallpaper1.jpg')}}" alt="Photo of sunset">
                                        <div class="card-img-overlay text-white text-center">
                                            <div class="swiper-container widget_swiper">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <h4 class="card-title text-white m-t-10"> Card title 1 </h4>
                                                        <p>
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indust's standard dummy text ever since the 1500s.
                                                        </p>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <h4 class="card-title text-white m-t-10"> Card title 2 </h4>
                                                        <p>
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indust's standard dummy text ever since the 1500s.
                                                        </p>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <h4 class="card-title text-white m-t-10"> Card title 3 </h4>
                                                        <p>
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indust's standard dummy text ever since the 1500s.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Add Pagination -->
                                                <div class="swiper-pagination"></div>
                                                <!-- Add Arrows -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="card card_scale card-inverse zoom_out_3 m-t-35">
                                        <img class="card-img-top img-fluid b_r_5 card_img_height" src="{{asset('img/wallpaper3.jpg')}}" alt="Card image cap">
                                        <div class="card-body b_r_5">
                                            <h4 class="card-title text-white text-bold m-t-15"> Card title </h4>
                                            <p class="card-text text-white">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                            <p class="card-text text-white"><small>Last updated 3 mins ago</small> </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.inner -->
                            </div>
                            <div class="row">
                                <div class="col-lg">
                                    <div class="card m-t-35">
                                        <div class="card-header bg-white">
                                            Card columns
                                        </div>
                                        <div class="card-body p-t-0">
                                            <div class="card-columns">
                                                <!-- Card 1 -->
                                                <div class="card border-primary m-t-25">
                                                    <div class="card-header bg-white">Card 1</div>
                                                    <div class="card-body">
                                                        <p class="card-text">Text for this card.</p>
                                                    </div>
                                                </div>
                                                <div class="card border-primary m-t-25">
                                                    <div class="card-header bg-white">Card 2</div>
                                                    <div class="card-body">
                                                        <p class="card-text">Text for this card.</p>
                                                    </div>
                                                </div>
                                                <div class="card border-primary m-t-25">
                                                    <div class="card-header bg-white">Card 3</div>
                                                    <div class="card-body">
                                                        <p class="card-text">Text for this card.</p>
                                                    </div>
                                                </div>
                                                <div class="card border-primary m-t-25">
                                                    <div class="card-header bg-white">Card 4</div>
                                                    <div class="card-body">
                                                        <p class="card-text">Text for this card.</p>
                                                    </div>
                                                </div>
                                                <div class="card border-primary m-t-25">
                                                    <div class="card-header bg-white">Card 5</div>
                                                    <div class="card-body">
                                                        <p class="card-text">Text for this card.</p>
                                                    </div>
                                                </div>
                                                <div class="card border-primary m-t-25">
                                                    <div class="card-header bg-white">Card 6</div>
                                                    <div class="card-body">
                                                        <p class="card-text">Text for this card.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="card m-t-35">
                                        <div class="card-header bg-white p-tb-0">
                                            <nav id="scrollspy-nav" class="navbar navbar-default">
                                                <ul class="nav nav-pills">
                                                    <li class="nav-item"><a class="nav-link" href="#card1">Card1</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="#card2">Card2</a></li>
                                                    <li class="nav-item clear_both1"><a class="nav-link" href="#card3">Card3</a></li>
                                                    <li class="nav-item clear_both2"><a class="nav-link" href="#card4">Card4</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="card-body">
                                            <article data-spy="scroll" data-target="#scrollspy-nav" data-offset="0" class="scrollspy-example">
                                                <div class="card card-inverse m-r-15" id="card1">
                                                    <img class="card-img-top img-fluid card_img_height" src="{{asset('img/wallpaper4.jpg')}}" alt="Photo of sunset">
                                                    <div class="card-img-overlay text-center">
                                                        <h4 class="card-title">Card1</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <p class="card-text scrool_card">
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indust's standard dummy text ever since the 1500s, when an unknown printer.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card m-t-20 m-r-15" id="card2">
                                                    <div class="card-header bg-white">
                                                        Card2
                                                    </div>
                                                    <div class="card-body text-center m-t-15">
                                                        <p class="card-text scrool_card">
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indust's standard dummy text ever since the 1500s, when an unknown printer.
                                                        </p>
                                                    </div>
                                                    <img class="card-img-top img-fluid card_img_height" src="{{asset('img/wallpaper5.jpg')}}" alt="Photo of sunset">
                                                </div>
                                                <div class="card card-inverse text-center m-t-20 m-r-15" id="card3">
                                                    <img class="card-img-top img-fluid card_img_height" src="{{asset('img/wallpaper2.jpg')}}" alt="Photo of sunset">
                                                    <div class="card-img-overlay">
                                                        <h3 class="card-title text-center">Card3</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <p class="card-text scrool_card">
                                                            Tune in next week to find out!
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card card-inverse text-center m-t-20 m-r-15" id="card4">
                                                    <img class="card-img-top img-fluid card_img_height" src="{{asset('img/wallpaper3.jpg')}}" alt="Photo of sunset">
                                                    <div class="card-img-overlay">
                                                        <h3 class="card-title text-center">Card4</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <p class="card-text scrool_card">
                                                            Tune in next week to find out!
                                                        </p>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg m-t-35">
                                    <div class="card">
                                        <div class="card-header bg-white">
                                            Accordion
                                        </div>
                                        <div class="card-body">
                                            <div class="m-t-10 accordian_alignment">
                                                <div id="accordion" role="tablist" aria-multiselectable="true">
                                                    <div class="card">
                                                        <div class="card-header bg-white" role="tab" id="title-one">
                                                            <a class="collapsed accordion-section-title" data-toggle="collapse" href="#card-data-one" aria-expanded="true" aria-controls="card-data-one">
                                                                Section 1
                                                                 <i class="fa fa-plus float-right m-t-5"></i>
                                                            </a>
                                                        </div>
                                                        <div id="card-data-one" class="card-collapse collapse" data-parent="#accordion">
                                                            <div class="card-body m-t-20">
                                                                <p class="text-justify">
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card m-t-20">
                                                        <div class="card-header bg-white" role="tab" id="title-two">
                                                            <a class="collapsed accordion-section-title" data-toggle="collapse" href="#card-data-two" aria-expanded="false" aria-controls="card-data-two">
                                                                Section 2
                                                                 <i class="fa fa-plus float-right m-t-5"></i>
                                                            </a>
                                                        </div>
                                                        <div id="card-data-two" class="card-collapse collapse" data-parent="#accordion">
                                                            <div class="card-body m-t-20">
                                                                <p class="text-justify">
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card m-t-20">
                                                        <div class="card-header bg-white" role="tab" id="title-three">
                                                            <a class="collapsed accordion-section-title" data-toggle="collapse"  href="#card-data-three" aria-expanded="false" aria-controls="card-data-three">
                                                                Section 3
                                                                 <i class="fa fa-plus float-right m-t-5"></i>
                                                            </a>
                                                        </div>
                                                        <div id="card-data-three" class="card-collapse collapse" data-parent="#accordion">
                                                            <div class="card-body m-t-20">
                                                                <p class="text-justify">
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card m-t-20">
                                                        <div class="card-header bg-white" role="tab" id="title-four">
                                                            <a class="collapsed accordion-section-title" data-toggle="collapse"  href="#card-data-four" aria-expanded="false">
                                                                Section 4
                                                                 <i class="fa fa-plus float-right m-t-5"></i>
                                                            </a>
                                                        </div>
                                                        <div id="card-data-four" class="card-collapse collapse" data-parent="#accordion">
                                                            <div class="card-body m-t-20">
                                                                <p class="text-justify">
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="card m-t-35">
                                        <div class="card-header bg-white">
                                            <ul class="nav nav-tabs card-header-tabs float-left">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#tab1" data-toggle="tab">Tab 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#tab2" data-toggle="tab">Tab 2</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#tab3" data-toggle="tab">Tab 3</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content text-justify">
                                                <div class="tab-pane active" id="tab1">
                                                    <h4 class="card-title">Tab 1</h4>
                                                    <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </p>
                                                </div>
                                                <div class="tab-pane" id="tab2">
                                                    <h4 class="card-title">Tab 2</h4>
                                                    <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </p>
                                                </div>
                                                <div class="tab-pane" id="tab3">
                                                    <h4 class="card-title">Tab 3</h4>
                                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="card card-body m-t-35">
                                        <h4 class="card-title m-t-20">Card title</h4>
                                        <p class="card-text m-t-15 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        <a href="#" class="btn btn-primary">More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 m-t-35">
                                    <div class="card">
                                        <div class="card-header bg-white">
                                            <span class="card-title">Refresh</span>
                                            <span class="float-right card_refresh">
                                                            <i class="fa fa-refresh"></i>
                                                    </span>
                                        </div>
                                        <div class="card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the when an unknown printer.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.outer -->
        </div>
    </div>

@stop
<!-- global scripts-->
@section('footer_scripts')
    <!-- end of global scripts-->
    <script type="text/javascript" src="{{asset('vendors/swiper/js/swiper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/pages/cards.js')}}"></script>

@stop