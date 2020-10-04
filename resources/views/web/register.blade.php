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

        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Register</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End-->
        <!--================login_part Area =================-->
        <section class="login_part section_padding ">
            <div class="container">

                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        {{ \Session::get('success') }}
                    </div>
                @endif
                @if (\Session::has('error'))
                    <div class="alert alert-danger">
                        {{ \Session::get('error') }}
                    </div>
                @endif
                @if (count($errors) > 0)
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <div class="row align-items-center">

                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_text text-center">
                            <div class="login_part_text_iner">
                                <h2>Member of our Shop?</h2>
                                <p>There are advances being made in science and technology
                                    everyday, and a good example of this is the</p>
                                <a href="/login/" class="btn_3">Login</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_form">
                            <div class="login_part_form_iner">
                                <h3>Welcome  ! <br>
                                    Please Signup now</h3>
                                <form class="row contact_form" action="/register/" method="post" >
                                    @csrf
                                    <div class="col-md-11 form-group p_star">
                                        <input type="text" class="form-control" id="name" name="name" value=""
                                            placeholder="Name">
                                    </div>
                                    <div class="col-md-1 form-group p_star">
                                        <i class="fas fa-check-circle fa-2x text-success" id="available" style="display:none" `></i>
                                        <i class="fas fa-times-circle fa-2x text-danger" id="not_available" style="display:none"`></i>
                                    </div>
                                    <div class="col-md-11 form-group p_star">
                                        <input type="radio" name="gender" value="M"> Male<br>
                                        <input type="radio" name="gender" value="F"> Female
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="email" name="email" value=""
                                            placeholder="Email">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="password" class="form-control" id="password" name="password" value=""
                                            placeholder="Password">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <button type="submit" value="submit" class="btn_3">
                                            SignUp
                                        </button>
                                        <a class="lost_pass" href="#">forget password?</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================login_part end =================-->
    </main>
    @include('web/footer')
    @include('web/search_model')
    @include('web/js')
@endsection