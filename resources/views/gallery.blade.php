@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Gallery
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/fancybox/css/jquery.fancybox.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/fancybox/css/jquery.fancybox-buttons.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/fancybox/css/jquery.fancybox-thumbs.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/imagehover/css/imagehover.min.css')}}" />
    <!--page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/gallery.css')}}"/>
    <!-- end of page level styles -->
@stop


{{-- Page content --}}
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-4">
                    <h4 class="nav_top_align">
                        <i class="fa fa-image"></i>
                        Gallery
                    </h4>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-8">
                    <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item active">Gallery</li>
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
                        <div class="card-header bg-white">
                            Gallery
                        </div>
                        <div class="card-body m-t-35">
                            <div>
                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a href="#tab_2" class="nav-link active" data-toggle="tab">Standard
                                                Gallery</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tab_1" class="nav-link" data-toggle="tab">Gallery</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tab_3" class="nav-link" data-toggle="tab">Button
                                                Helper</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tab_4" class="nav-link" data-toggle="tab">Thubnail
                                                Helper</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active gallery-padding" id="tab_2">
                                            <div class="row no-gutters">
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox zoom thumb_zoom"
                                                       href="{{asset('img/gallery/thumbs/1.jpg')}}"
                                                       data-fancybox-group="gallery" title="Image Title 1">
                                                        <img src="{{asset('img/gallery/thumbs/1.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox zoom thumb_zoom"
                                                       href="{{asset('img/gallery/thumbs/2.jpg')}}"
                                                       data-fancybox-group="gallery" title="Image Title 2">
                                                        <img src="{{asset('img/gallery/thumbs/2.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox zoom thumb_zoom"
                                                       href="{{asset('img/gallery/thumbs/3.jpg')}}"
                                                       data-fancybox-group="gallery" title="Image Title 3">
                                                        <img src="{{asset('img/gallery/thumbs/3.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox zoom thumb_zoom"
                                                       href="{{asset('img/gallery/thumbs/4.jpg')}}"
                                                       data-fancybox-group="gallery" title="Image Title 4">
                                                        <img src="{{asset('img/gallery/thumbs/4.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox zoom thumb_zoom"
                                                       href="{{asset('img/gallery/thumbs/5.jpg')}}"
                                                       data-fancybox-group="gallery" title="Image Title 5">
                                                        <img src="{{asset('img/gallery/thumbs/5.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox zoom thumb_zoom"
                                                       href="{{asset('img/gallery/thumbs/6.jpg')}}"
                                                       data-fancybox-group="gallery" title="Image Title 6">
                                                        <img src="{{asset('img/gallery/thumbs/6.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox zoom thumb_zoom"
                                                       href="{{asset('img/gallery/thumbs/7.jpg')}}"
                                                       data-fancybox-group="gallery" title="Image Title 7">
                                                        <img src="{{asset('img/gallery/thumbs/7.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox zoom thumb_zoom"
                                                       href="{{asset('img/gallery/thumbs/8.jpg')}}"
                                                       data-fancybox-group="gallery" title="Image Title 8">
                                                        <img src="{{asset('img/gallery/thumbs/8.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox zoom thumb_zoom"
                                                       href="{{asset('img/gallery/thumbs/9.jpg')}}"
                                                       data-fancybox-group="gallery" title="Image Title 9">
                                                        <img src="{{asset('img/gallery/thumbs/9.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox zoom thumb_zoom"
                                                       href="{{asset('img/gallery/thumbs/10.jpg')}}"
                                                       data-fancybox-group="gallery" title="Image Title 10">
                                                        <img src="{{asset('img/gallery/thumbs/10.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox zoom thumb_zoom"
                                                       href="{{asset('img/gallery/thumbs/11.jpg')}}"
                                                       data-fancybox-group="gallery" title="Image Title 11">
                                                        <img src="{{asset('img/gallery/thumbs/11.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox zoom thumb_zoom"
                                                       href="{{asset('img/gallery/thumbs/12.jpg')}}"
                                                       data-fancybox-group="gallery" title="Image Title 12">
                                                        <img src="{{asset('img/gallery/thumbs/12.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox zoom thumb_zoom"
                                                       href="{{asset('img/gallery/thumbs/4.jpg')}}"
                                                       data-fancybox-group="gallery" title="Image Title 13">
                                                        <img src="{{asset('img/gallery/thumbs/4.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox zoom thumb_zoom"
                                                       href="{{asset('img/gallery/thumbs/13.jpg')}}"
                                                       data-fancybox-group="gallery" title="Image Title 14">
                                                        <img src="{{asset('img/gallery/thumbs/13.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox zoom thumb_zoom"
                                                       href="{{asset('img/gallery/thumbs/14.jpg')}}"
                                                       data-fancybox-group="gallery" title="Image Title 15">
                                                        <img src="{{asset('img/gallery/thumbs/14.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox zoom thumb_zoom"
                                                       href="{{asset('img/gallery/thumbs/15.jpg')}}"
                                                       data-fancybox-group="gallery" title="Image Title 16">
                                                        <img src="{{asset('img/gallery/thumbs/15.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox zoom thumb_zoom"
                                                       href="{{asset('img/gallery/thumbs/1.jpg')}}"
                                                       data-fancybox-group="gallery" title="Image Title 17">
                                                        <img src="{{asset('img/gallery/thumbs/1.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox zoom thumb_zoom"
                                                       href="{{asset('img/gallery/thumbs/2.jpg')}}"
                                                       data-fancybox-group="gallery" title="Image Title 18">
                                                        <img src="{{asset('img/gallery/thumbs/2.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox zoom thumb_zoom"
                                                       href="{{asset('img/gallery/thumbs/1.jpg')}}"
                                                       data-fancybox-group="gallery" title="Image Title 19">
                                                        <img src="{{asset('img/gallery/thumbs/1.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox zoom thumb_zoom"
                                                       href="{{asset('img/gallery/thumbs/2.jpg')}}"
                                                       data-fancybox-group="gallery" title="Image Title 20">
                                                        <img src="{{asset('img/gallery/thumbs/2.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox zoom thumb_zoom"
                                                       href="{{asset('img/gallery/thumbs/3.jpg')}}"
                                                       data-fancybox-group="gallery" title="Image Title 21">
                                                        <img src="{{asset('img/gallery/thumbs/3.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox zoom thumb_zoom"
                                                       href="{{asset('img/gallery/thumbs/4.jpg')}}"
                                                       data-fancybox-group="gallery" title="Image Title 22">
                                                        <img src="{{asset('img/gallery/thumbs/4.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox zoom thumb_zoom"
                                                       href="{{asset('img/gallery/thumbs/5.jpg')}}"
                                                       data-fancybox-group="gallery" title="Image Title 23">
                                                        <img src="{{asset('img/gallery/thumbs/5.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox zoom thumb_zoom"
                                                       href="{{asset('img/gallery/thumbs/6.jpg')}}"
                                                       data-fancybox-group="gallery" title="Image Title 24">
                                                        <img src="{{asset('img/gallery/thumbs/6.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane gallery2-padding" id="tab_1">
                                            <div class="row no-gutters">
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <figure class="imghvr-push-down"><img
                                                                src="{{asset('img/gallery/thumbs/1.jpg')}}" alt="example-image"/>
                                                        <figcaption>
                                                            <h5>Image Fade</h5>

                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <figure class="imghvr-push-up"><img
                                                                src="{{asset('img/gallery/thumbs/2.jpg')}}" alt="example-image"/>
                                                        <figcaption>
                                                            <h5>Image Push Up</h5>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <figure class="imghvr-push-down"><img
                                                                src="{{asset('img/gallery/thumbs/3.jpg')}}" alt="example-image"/>
                                                        <figcaption>
                                                            <h5>Image Push Down</h5>

                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <figure class="imghvr-push-left"><img
                                                                src="{{asset('img/gallery/thumbs/4.jpg')}}" alt="example-image"/>
                                                        <figcaption>
                                                            <h5>Image Push Left</h5>

                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <figure class="imghvr-push-right"><img
                                                                src="{{asset('img/gallery/thumbs/5.jpg')}}" alt="example-image"/>
                                                        <figcaption>
                                                            <h5>Image Push Right</h5>

                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <figure class="imghvr-slide-up"><img
                                                                src="{{asset('img/gallery/thumbs/6.jpg')}}" alt="example-image"/>
                                                        <figcaption>
                                                            <h5>Image Slide Up</h5>

                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <figure class="imghvr-slide-down"><img
                                                                src="{{asset('img/gallery/thumbs/15.jpg')}}"
                                                                alt="example-image"/>
                                                        <figcaption>
                                                            <h5>Image Slide Down</h5>

                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <figure class="imghvr-slide-left"><img
                                                                src="{{asset('img/gallery/thumbs/11.jpg')}}"
                                                                alt="example-image"/>
                                                        <figcaption>
                                                            <h5>Image Slide Left</h5>

                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <figure class="imghvr-slide-right"><img
                                                                src="{{asset('img/gallery/thumbs/8.jpg')}}" alt="example-image"/>
                                                        <figcaption>
                                                            <h5>Image Slide Right</h5>

                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <figure class="imghvr-reveal-up"><img
                                                                src="{{asset('img/gallery/thumbs/9.jpg')}}" alt="example-image"/>
                                                        <figcaption>
                                                            <h5>Image Reveal Up</h5>

                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <figure class="imghvr-reveal-down"><img
                                                                src="{{asset('img/gallery/thumbs/10.jpg')}}"
                                                                alt="example-image"/>
                                                        <figcaption>
                                                            <h5>Image Reveal Down</h5>

                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <figure class="imghvr-reveal-left"><img
                                                                src="{{asset('img/gallery/thumbs/11.jpg')}}"
                                                                alt="example-image"/>
                                                        <figcaption>
                                                            <h5>Image Reveal Left</h5>

                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <figure class="imghvr-reveal-right"><img
                                                                src="{{asset('img/gallery/thumbs/12.jpg')}}"
                                                                alt="example-image"/>
                                                        <figcaption>
                                                            <h5>Image Reveal Right</h5>

                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <figure class="imghvr-hinge-down"><img
                                                                src="{{asset('img/gallery/thumbs/13.jpg')}}"
                                                                alt="example-image"/>
                                                        <figcaption>
                                                            <h5>Image Hinge Down</h5>

                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <figure class="imghvr-flip-horiz"><img
                                                                src="{{asset('img/gallery/thumbs/14.jpg')}}"
                                                                alt="example-image"/>
                                                        <figcaption>
                                                            <h5>Image Flip Horiz</h5>

                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <figure class="imghvr-flip-vert"><img
                                                                src="{{asset('img/gallery/thumbs/15.jpg')}}"
                                                                alt="example-image"/>
                                                        <figcaption>
                                                            <h5>Image Flip Vertical</h5>

                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <figure class="imghvr-flip-diag-1"><img
                                                                src="{{asset('img/gallery/thumbs/1.jpg')}}" alt="example-image"/>
                                                        <figcaption>
                                                            <h5>Image Flip Diagonal 1</h5>

                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <figure class="imghvr-flip-diag-2"><img
                                                                src="{{asset('img/gallery/thumbs/2.jpg')}}" alt="example-image"/>
                                                        <figcaption>
                                                            <h5>Image Flip Diagonal-2</h5>

                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <figure class="imghvr-shutter-out-horiz"><img
                                                                src="{{asset('img/gallery/thumbs/15.jpg')}}"
                                                                alt="example-image"/>
                                                        <figcaption>
                                                            <h5>Image Shutter Out Horizantal</h5>

                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <figure class="imghvr-shutter-out-diag-1"><img
                                                                src="{{asset('img/gallery/thumbs/3.jpg')}}" alt="example-image"/>
                                                        <figcaption>
                                                            <h5>Image Shutter Out Diagonal 1</h5>

                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <figure class="imghvr-shutter-out-diag-2"><img
                                                                src="{{asset('img/gallery/thumbs/4.jpg')}}" alt="example-image"/>
                                                        <figcaption>
                                                            <h5>Image Shutter Out Diagonal 2</h5>

                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <figure class="imghvr-shutter-in-out-horiz"><img
                                                                src="{{asset('img/gallery/thumbs/5.jpg')}}" alt="example-image"/>
                                                        <figcaption>
                                                            <h5>Image Shutter In Out Horizantal</h5>

                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <figure class="imghvr-shutter-in-horiz"><img
                                                                src="{{asset('img/gallery/thumbs/6.jpg')}}" alt="example-image"/>
                                                        <figcaption>
                                                            <h5>Image Shutter In Horizantal</h5>

                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <figure class="imghvr-shutter-in-out-diag-1"><img
                                                                src="{{asset('img/gallery/thumbs/8.jpg')}}" alt="example-image"/>
                                                        <figcaption>
                                                            <h5>Image Shutter In Out Diagonal 1</h5>

                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <figure class="imghvr-shutter-in-out-diag-2"><img
                                                                src="{{asset('img/gallery/thumbs/8.jpg')}}" alt="example-image"/>
                                                        <figcaption>
                                                            <h5>Image Shutter In Out Diagonal 2</h5>

                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <figure class="imghvr-zoom-out-flip-vert"><img
                                                                src="{{asset('img/gallery/thumbs/2.jpg')}}" alt="example-image"/>
                                                        <figcaption>
                                                            <h5>Image Zoom Out Flip Vertical</h5>

                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <figure class="imghvr-fold-up"><img
                                                                src="{{asset('img/gallery/thumbs/10.jpg')}}"
                                                                alt="example-image"/>
                                                        <figcaption>
                                                            <h5>Image Fold Up</h5>

                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <figure class="imghvr-zoom-in"><img
                                                                src="{{asset('img/gallery/thumbs/11.jpg')}}"
                                                                alt="example-image"/>
                                                        <figcaption>
                                                            <h5>Image Zoom In</h5>

                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </div>
                                            <!-- /thumnail helper gallery -->
                                        </div>
                                        <!-- /standard gallery -->
                                        <div class="tab-pane gallery-padding" id="tab_3">
                                            <div class="row no-gutters">
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-buttons zoom thumb_zoom"
                                                       data-fancybox-group="button"
                                                       href="{{asset('img/gallery/thumbs/15.jpg')}}">
                                                        <img src="{{asset('img/gallery/thumbs/15.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image1"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-buttons zoom thumb_zoom"
                                                       data-fancybox-group="button"
                                                       href="{{asset('img/gallery/thumbs/11.jpg')}}">
                                                        <img src="{{asset('img/gallery/thumbs/11.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image5"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-buttons zoom thumb_zoom"
                                                       data-fancybox-group="button"
                                                       href="{{asset('img/gallery/thumbs/13.jpg')}}">
                                                        <img src="{{asset('img/gallery/thumbs/13.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image5"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-buttons zoom thumb_zoom"
                                                       data-fancybox-group="button"
                                                       href="{{asset('img/gallery/thumbs/12.jpg')}}">
                                                    <img src="{{asset('img/gallery/thumbs/11.jpg')}}"
                                                    class="img-fluid gallery-style" alt="Image5"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-buttons zoom thumb_zoom"
                                                       data-fancybox-group="button"
                                                       href="{{asset('img/gallery/thumbs/11.jpg')}}">
                                                        <img src="{{asset('img/gallery/thumbs/11.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image5"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-buttons zoom thumb_zoom"
                                                       data-fancybox-group="button"
                                                       href="{{asset('img/gallery/thumbs/10.jpg')}}">
                                                        <img src="{{asset('img/gallery/thumbs/10.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image6"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-buttons zoom thumb_zoom"
                                                       data-fancybox-group="button"
                                                       href="{{asset('img/gallery/thumbs/9.jpg')}}">
                                                        <img src="{{asset('img/gallery/thumbs/9.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image5"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-buttons zoom thumb_zoom"
                                                       data-fancybox-group="button"
                                                       href="{{asset('img/gallery/thumbs/8.jpg')}}">
                                                        <img src="{{asset('img/gallery/thumbs/8.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image5"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-buttons zoom thumb_zoom"
                                                       data-fancybox-group="button"
                                                       href="{{asset('img/gallery/thumbs/7.jpg')}}">
                                                        <img src="{{asset('img/gallery/thumbs/7.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image9"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-buttons zoom thumb_zoom"
                                                       data-fancybox-group="button"
                                                       href="{{asset('img/gallery/thumbs/6.jpg')}}">
                                                        <img src="{{asset('img/gallery/thumbs/6.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image10"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-buttons zoom thumb_zoom"
                                                       data-fancybox-group="button"
                                                       href="{{asset('img/gallery/thumbs/5.jpg')}}">
                                                        <img src="{{asset('img/gallery/thumbs/5.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image11"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-buttons zoom thumb_zoom"
                                                       data-fancybox-group="button"
                                                       href="{{asset('img/gallery/thumbs/4.jpg')}}">
                                                        <img src="{{asset('img/gallery/thumbs/4.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image12"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-buttons zoom thumb_zoom"
                                                       data-fancybox-group="button"
                                                       href="{{asset('img/gallery/thumbs/3.jpg')}}">
                                                        <img src="{{asset('img/gallery/thumbs/3.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image13"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-buttons zoom thumb_zoom"
                                                       data-fancybox-group="button"
                                                       href="{{asset('img/gallery/thumbs/2.jpg')}}">
                                                        <img src="{{asset('img/gallery/thumbs/2.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image14"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-buttons zoom thumb_zoom"
                                                       data-fancybox-group="button"
                                                       href="{{asset('img/gallery/thumbs/1.jpg')}}">
                                                        <img src="{{asset('img/gallery/thumbs/1.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image15"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-buttons zoom thumb_zoom"
                                                       data-fancybox-group="button"
                                                       href="{{asset('img/gallery/thumbs/15.jpg')}}">
                                                        <img src="{{asset('img/gallery/thumbs/15.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image16"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-buttons zoom thumb_zoom"
                                                       data-fancybox-group="button"
                                                       href="{{asset('img/gallery/thumbs/14.jpg')}}">
                                                        <img src="{{asset('img/gallery/thumbs/14.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image17"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-buttons zoom thumb_zoom"
                                                       data-fancybox-group="button"
                                                       href="{{asset('img/gallery/thumbs/13.jpg')}}">
                                                        <img src="{{asset('img/gallery/thumbs/13.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image18"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-buttons zoom thumb_zoom"
                                                       data-fancybox-group="button"
                                                       href="{{asset('img/gallery/thumbs/12.jpg')}}">
                                                        <img src="{{asset('img/gallery/thumbs/12.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image19"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-buttons zoom thumb_zoom"
                                                       data-fancybox-group="button"
                                                       href="{{asset('img/gallery/thumbs/11.jpg')}}">
                                                        <img src="{{asset('img/gallery/thumbs/11.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image20"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /button helper gallery -->
                                        <div class="tab-pane gallery-padding" id="tab_4">
                                            <div class="row no-gutters">
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-thumbs zoom thumb_zoom"
                                                       data-fancybox-group="thumb" href="{{asset('img/gallery/thumbs/5.jpg')}}"
                                                       title="Image Title 1">
                                                        <img src="{{asset('img/gallery/thumbs/5.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-thumbs zoom thumb_zoom"
                                                       data-fancybox-group="thumb" href="{{asset('img/gallery/thumbs/9.jpg')}}"
                                                       title="Image Title 2">
                                                        <img src="{{asset('img/gallery/thumbs/9.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-thumbs zoom thumb_zoom"
                                                       data-fancybox-group="thumb"
                                                       href="{{asset('img/gallery/thumbs/13.jpg')}}" title="Image Title 3">
                                                        <img src="{{asset('img/gallery/thumbs/13.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-thumbs zoom thumb_zoom"
                                                       data-fancybox-group="thumb" href="{{asset('img/gallery/thumbs/3.jpg')}}"
                                                       title="Image Title 4">
                                                        <img src="{{asset('img/gallery/thumbs/3.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-thumbs zoom thumb_zoom"
                                                       data-fancybox-group="thumb" href="{{asset('img/gallery/thumbs/8.jpg')}}"
                                                       title="Image Title 5">
                                                        <img src="{{asset('img/gallery/thumbs/8.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-thumbs zoom thumb_zoom"
                                                       data-fancybox-group="thumb"
                                                       href="{{asset('img/gallery/thumbs/12.jpg')}}" title="Image Title 6">
                                                        <img src="{{asset('img/gallery/thumbs/12.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-thumbs zoom thumb_zoom"
                                                       data-fancybox-group="thumb" href="{{asset('img/gallery/thumbs/1.jpg')}}"
                                                       title="Image Title 7">
                                                        <img src="{{asset('img/gallery/thumbs/1.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-thumbs zoom thumb_zoom"
                                                       data-fancybox-group="thumb"
                                                       href="{{asset('img/gallery/thumbs/14.jpg')}}" title="Image Title 8">
                                                        <img src="{{asset('img/gallery/thumbs/14.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-thumbs zoom thumb_zoom"
                                                       data-fancybox-group="thumb"
                                                       href="{{asset('img/gallery/thumbs/15.jpg')}}" title="Image Title 9">
                                                        <img src="{{asset('img/gallery/thumbs/15.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-thumbs zoom thumb_zoom"
                                                       data-fancybox-group="thumb" href="{{asset('img/gallery/thumbs/6.jpg')}}"
                                                       title="Image Title 10">
                                                        <img src="{{asset('img/gallery/thumbs/6.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-thumbs zoom thumb_zoom"
                                                       data-fancybox-group="thumb" href="{{asset('img/gallery/thumbs/7.jpg')}}"
                                                       title="Image Title 11">
                                                        <img src="{{asset('img/gallery/thumbs/7.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-thumbs zoom thumb_zoom"
                                                       data-fancybox-group="thumb" href="{{asset('img/gallery/thumbs/2.jpg')}}"
                                                       title="Image Title 12">
                                                        <img src="{{asset('img/gallery/thumbs/2.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-thumbs zoom thumb_zoom"
                                                       data-fancybox-group="thumb"
                                                       href="{{asset('img/gallery/thumbs/13.jpg')}}" title="Image Title 13">
                                                        <img src="{{asset('img/gallery/thumbs/13.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-thumbs zoom thumb_zoom"
                                                       data-fancybox-group="thumb" href="{{asset('img/gallery/thumbs/5.jpg')}}"
                                                       title="Image Title 14">
                                                        <img src="{{asset('img/gallery/thumbs/5.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-thumbs zoom thumb_zoom"
                                                       data-fancybox-group="thumb"
                                                       href="{{asset('img/gallery/thumbs/10.jpg')}}" title="Image Title 15">
                                                        <img src="{{asset('img/gallery/thumbs/10.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-thumbs zoom thumb_zoom"
                                                       data-fancybox-group="thumb" href="{{asset('img/gallery/thumbs/1.jpg')}}"
                                                       title="Image Title 16">
                                                        <img src="{{asset('img/gallery/thumbs/1.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-thumbs zoom thumb_zoom"
                                                       data-fancybox-group="thumb" href="{{asset('img/gallery/thumbs/7.jpg')}}"
                                                       title="Image Title 17">
                                                        <img src="{{asset('img/gallery/thumbs/7.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-thumbs zoom thumb_zoom"
                                                       data-fancybox-group="thumb" href="{{asset('img/gallery/thumbs/2.jpg')}}"
                                                       title="Image Title 18">
                                                        <img src="{{asset('img/gallery/thumbs/2.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-thumbs zoom thumb_zoom"
                                                       data-fancybox-group="thumb"
                                                       href="{{asset('img/gallery/thumbs/13.jpg')}}" title="Image Title 19">
                                                        <img src="{{asset('img/gallery/thumbs/13.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-thumbs zoom thumb_zoom"
                                                       data-fancybox-group="thumb" href="{{asset('img/gallery/thumbs/5.jpg')}}"
                                                       title="Image Title 20">
                                                        <img src="{{asset('img/gallery/thumbs/5.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-thumbs zoom thumb_zoom"
                                                       data-fancybox-group="thumb"
                                                       href="{{asset('img/gallery/thumbs/10.jpg')}}" title="Image Title 21">
                                                        <img src="{{asset('img/gallery/thumbs/10.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                    <a class="fancybox-thumbs zoom thumb_zoom"
                                                       data-fancybox-group="thumb" href="{{asset('img/gallery/thumbs/1.jpg')}}"
                                                       title="Image Title 22">
                                                        <img src="{{asset('img/gallery/thumbs/1.jpg')}}"
                                                             class="img-fluid gallery-style" alt="Image"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /thumnail helper gallery -->
                                    </div>
                                    <!-- /.tab-content -->
                                </div>
                                <!-- nav-tabs-custom -->
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
    <!--Plugin scripts-->
    <script type="text/javascript" src="{{asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>
    <!--Plugin scripts-->
    <script type="text/javascript" src="{{asset('vendors/holderjs/js/holder.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/fancybox/js/jquery.mousewheel.pack.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/fancybox/js/jquery.fancybox.pack.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/fancybox/js/jquery.fancybox-buttons.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/fancybox/js/jquery.fancybox-thumbs.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/fancybox/js/jquery.fancybox-media.js')}}"></script>
    <!--End of plugin scripts-->
    <script type="text/javascript" src="{{asset('js/pages/gallery.js')}}"></script>
    <!-- end page level scripts -->
@stop