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
                                <h2>Dashboard</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="contact-section">
            <div class="container">
                <div class="row">
                    <a href="/profile/" class="col-md-4">
                        <div class="card p-3">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="fas fa-lock fa-5x p-3" style="color:#636e72"></i>
                                </div>
                                <div class="col-md-7 ">
                                    <div class="row p-1">
                                        <b>Login & Security</b>
                                    </div>
                                    <div class="row p-1">
                                        <p>Edit login, name, and mobile number</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/wishlist/" class="col-md-4">
                        <div class="card p-3">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="fas fa-heart fa-5x p-3" style="color:red"></i>
                                </div>
                                <div class="col-md-7 ">
                                    <div class="row p-1">
                                        <b>Your Wishlist</b>
                                    </div>
                                    <div class="row p-1">
                                        <p>Edit ,Delete, Wishlist</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </main>
    
    @include('web/footer')
    @include('web/search_model')
    @include('web/js')
@endsection