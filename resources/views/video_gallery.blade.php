@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
Video Gallery
@parent
@stop
{{-- page level styles --}}
@section('header_styles')
<!--plugin style-->
<link rel="stylesheet" href="{{asset('vendors/unitegallery/css/unite-gallery.css')}}">
<link rel="stylesheet" href="{{asset('vendors/unitegallery/themes/default/ug-theme-default.css')}}">
<link rel="stylesheet" href="{{asset('vendors/unitegallery/themes/video/skin-bottom-text.css')}}">
<link rel="stylesheet" href="{{asset('vendors/unitegallery/themes/video/skin-right-no-thumb.css')}}">
<link rel="stylesheet" href="{{asset('vendors/unitegallery/themes/video/skin-right-thumb.css')}}">
<link rel="stylesheet" href="{{asset('vendors/unitegallery/themes/video/skin-right-title-only.css')}}">
<link rel="stylesheet" href="{{asset('css/pages/video_gallery.css')}}">
<!--End of page level styles-->
@stop


{{-- Page content --}}
@section('content')
<!-- Content Header (Page header) -->
<header class="head">
    <div class="main-bar">
        <div class="row">
            <div class="col-lg-6 col-sm-5 col-12">
                <h4 class="nav_top_align">
                    <i class="fa fa-video-camera"></i>
                    Video Gallery
                </h4>
            </div>
            <div class="col-lg-6 col-sm-7 col-12">
                <div class="float-right">
                    <ol class="breadcrumb nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Gallery</a>
                        </li>
                        <li class="breadcrumb-item active">Video Gallery</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="outer">
    <div class="inner bg-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="">
                        <div id="gallery2" style="margin:0 auto;display:none;">
                            <div data-type="youtube"
                                 data-title="Waimea cliff jump"
                                 data-description="Waimea cliff jump description"
                                 data-thumb="https://i.ytimg.com/vi/sogCtOe8FFY/mqdefault.jpg"
                                 data-image="https://i.ytimg.com/vi/sogCtOe8FFY/sddefault.jpg"
                                 data-videoid="sogCtOe8FFY" ></div>
                            <div data-type="youtube"
                                 data-title="slip and slide -1000 feet"
                                 data-description="slip and slide -1000 feet description"
                                 data-thumb="https://i.ytimg.com/vi/fvvoVD_5PHE/mqdefault.jpg"
                                 data-image="https://i.ytimg.com/vi/fvvoVD_5PHE/sddefault.jpg"
                                 data-videoid="fvvoVD_5PHE" ></div>
                            <div data-type="youtube"
                                 data-title="Cliff Slip and Slide!"
                                 data-description="Cliff Slip and Slide description"
                                 data-thumb="https://i.ytimg.com/vi/sXk2AbdTe68/mqdefault.jpg"
                                 data-image="https://i.ytimg.com/vi/sXk2AbdTe68/sddefault.jpg"
                                 data-videoid="sXk2AbdTe68" ></div>
                            <div data-type="youtube"
                                 data-title="Epic Hot Air Balloon Rope Swing"
                                 data-description="Epic Hot Air Balloon Rope description"
                                 data-thumb="https://i.ytimg.com/vi/KEoXn34ilKY/mqdefault.jpg"
                                 data-image="https://i.ytimg.com/vi/KEoXn34ilKY/sddefault.jpg"
                                 data-videoid="KEoXn34ilKY" ></div>
                            <div data-type="youtube"
                                 data-title="BMX Rodeo at 1000 FPS"
                                 data-description="BMX Rodeo at 1000 FPS description"
                                 data-thumb="https://i.ytimg.com/vi/rUi3X3G63dg/mqdefault.jpg"
                                 data-image="https://i.ytimg.com/vi/rUi3X3G63dg/sddefault.jpg"
                                 data-videoid="rUi3X3G63dg" ></div>
                            <div data-type="youtube"
                                 data-title="Nepal - Adventures of Teamsupertramp"
                                 data-description="Nepal - Adventures of description"
                                 data-thumb="https://i.ytimg.com/vi/oc1HDF2AyNE/mqdefault.jpg"
                                 data-image="https://i.ytimg.com/vi/oc1HDF2AyNE/sddefault.jpg"
                                 data-videoid="oc1HDF2AyNE" ></div>
                            <div data-type="youtube"
                                 data-title="Hoverboard in Real Life! In 4K!"
                                 data-description="Hoverboard in Real Life! In 4K! description"
                                 data-thumb="https://i.ytimg.com/vi/gMaDhkNJA2g/mqdefault.jpg"
                                 data-image="https://i.ytimg.com/vi/gMaDhkNJA2g/sddefault.jpg"
                                 data-videoid="gMaDhkNJA2g" ></div>
                            <div data-type="youtube"
                                 data-title="Surfing Indoors! Flow Riding in 4K!"
                                 data-description="Surfing Indoors! Flow Riding description"
                                 data-thumb="https://i.ytimg.com/vi/FWN08M0kg4c/mqdefault.jpg"
                                 data-image="https://i.ytimg.com/vi/FWN08M0kg4c/sddefault.jpg"
                                 data-videoid="FWN08M0kg4c" ></div>
                            <div data-type="youtube"
                                 data-title="Bike Parkour -Streets of San Francisco!"
                                 data-description="Bike Parkour -Streets of description"
                                 data-thumb="https://i.ytimg.com/vi/K9XCKP9KN7A/mqdefault.jpg"
                                 data-image="https://i.ytimg.com/vi/K9XCKP9KN7A/sddefault.jpg"
                                 data-videoid="K9XCKP9KN7A" ></div>
                            <div data-type="youtube"
                                 data-title="Parkour, Cops, and Donuts in 4K"
                                 data-description="Parkour, Cops, and description"
                                 data-thumb="https://i.ytimg.com/vi/2dv4IP4Jd9w/mqdefault.jpg"
                                 data-image="https://i.ytimg.com/vi/2dv4IP4Jd9w/sddefault.jpg"
                                 data-videoid="2dv4IP4Jd9w" ></div>
                            <div data-type="youtube"
                                 data-title="YoYo Kid - World's Best YoYo Champion"
                                 data-description="YoYo Kid - World's Best YoYo description"
                                 data-thumb="https://i.ytimg.com/vi/uHEs5JRFEUU/mqdefault.jpg"
                                 data-image="https://i.ytimg.com/vi/uHEs5JRFEUU/sddefault.jpg"
                                 data-videoid="uHEs5JRFEUU" ></div>
                            <div data-type="youtube"
                                 data-title="Cliff Jumping Hawaii - Proof"
                                 data-description="Cliff Jumping Hawaii - Proof description"
                                 data-thumb="https://i.ytimg.com/vi/vSROSencBss/mqdefault.jpg"
                                 data-image="https://i.ytimg.com/vi/vSROSencBss/sddefault.jpg"
                                 data-videoid="vSROSencBss" ></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.inner -->
</div>
<!-- /.outer -->
<!-- /.content -->
@stop

{{-- page level scripts --}}
@section('footer_scripts')
<!--plugin script-->
<script type="text/javascript" src="{{asset('vendors/unitegallery/themes/video/ug-theme-video.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/unitegallery/themes/tiles/ug-theme-tiles.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/unitegallery/js/unitegallery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/pages/video_gallery.js')}}"></script>
@stop
