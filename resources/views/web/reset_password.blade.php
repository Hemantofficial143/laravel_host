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
        <!--? Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Reset Password</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--? Hero Area End-->
        <!-- ================ contact section start ================= -->
        <section class="contact-section">
            
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="contact-title">Enter New Password </h2>
                        </div>
                        <div class="col-lg-8">
                            
                        <form class="form-contact contact_form" action="/reset" method="post"  >
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="hidden" name="email" id="email" value="{{ $user->email }}">
                                            <input class="form-control" name="password" id="password" type="password" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="submit" class="button button-contactForm boxed-btn" value="change password">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-3 offset-lg-1">
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="ti-home"></i></span>
                                <div class="media-body">
                                    <h3>Buttonwood, California.</h3>
                                    <p>Rosemead, CA 91770</p>
                                </div>
                            </div>
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                                <div class="media-body">
                                    <h3>+1 253 565 2365</h3>
                                    <p>Mon to Fri 9am to 6pm</p>
                                </div>
                            </div>
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="ti-email"></i></span>
                                <div class="media-body">
                                    <h3>support@colorlib.com</h3>
                                    <p>Send us your query anytime!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
        </section>
        <!-- ================ contact section end ================= -->
    </main>
    @include('web/footer')
    @include('web/search_model')
    @include('web/js')
@endsection