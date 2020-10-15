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
                                <h2>Recent viewed Items</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <section class="contact-section">
            <div class="container">
                <div class="row">
                    @if (count($products) > 0)
                        @foreach ($products as $product)
                        <div  class="col-md-5 card m-4 p-3" style="color:black">
                            <div class="row p-4">
                                <div class="col-md-4">
                                    <img src="{{ $product->image }}" alt="" width="110" height="110">
                                </div>
                                <div class="col-md-8">
                                    <div class="row p-2">
                                        <b>{{ $product->title }}</b>
                                    </div>
                                    <div class="row p-2" >
                                        <i class="fa fa-rupee-sign"> {{ $product->price }}</i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <a href="/dp/{{ $product->asin }}" class="col-md-5 btn m-4" style="color:black;background-color:lightgreen">
                                        <center>View</center>
                                </a>
                                <a href="" class="col-md-4 btn m-4" style="color:black">
                                        <center>Delete</center>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <div class="alert alert-danger col-md-12">No product wishlist found</div>
                    @endif

                </div>
            </div>
        </section> --}}
    </main>
    @include('web/footer')
    @include('web/search_model')
    @include('web/js')
@endsection
