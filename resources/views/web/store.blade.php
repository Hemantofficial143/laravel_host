@extends('web/base')
@section('title')
    A2MALL
@endsection

@section('css_part')
    @include('web/css')
@endsection

@section('body_part')
    @include('web/preloader')
    @include('web/header')
    <main>
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Store</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="popular-items latest-padding">
            <div class="container">
                <div class="row product-btn justify-content-between mb-40">
                    <div class="properties__button">
                        <!--Nav Button  -->
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">NewestArrivals</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"> Price high to low</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"> Price low to high </a>
                            </div>
                        </nav>
                        <!--End Nav Button  -->
                    </div>
                    <!-- Grid and List view -->
                    <div class="grid-list-view">
                    </div>
                    <!-- Select items -->
                </div>
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">

                            @foreach ($new as $item)
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-popular-items mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="{{ $item->image }}" alt="{{ $item->image }}" width="400" height="400">
                                            <div class="img-cap">
                                                <a href="/dp/{{ $item->asin }}"><span>BUY NOW</span></a>
                                            </div>

                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="/dp/{{ $item->asin }}">{{ $item->title }}</a></h3>
                                            <span>{{ $item->price }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <!-- Card two -->
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="row">
                            @foreach ($high_to_low as $item)
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="{{ $item->image }}" alt="{{ $item->image }}" width="400" height="400">
                                        <div class="img-cap">
                                            <a href="/dp/{{ $item->asin }}"><span>BUY NOW</span></a>
                                        </div>

                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="/dp/{{ $item->asin }}">{{ $item->title }}</a></h3>
                                        <span>{{ $item->price }}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <!-- Card three -->
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="row">
                            @foreach ($low_to_high as $item)
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="{{ $item->image }}" alt="{{ $item->image }}" width="400" height="400">
                                        <div class="img-cap">
                                            <a href="/dp/{{ $item->asin }}"><span>BUY NOW</span></a>
                                        </div>

                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="/dp/{{ $item->asin }}">{{ $item->title }}</a></h3>
                                        <span>{{ $item->price }}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <!-- End Nav Card -->
            </div>
        </section>
    </main>
    @include('web/footer')
    @include('web/search_model')
    @include('web/js')
@endsection
