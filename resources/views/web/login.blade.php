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
                                <h2>Login</h2>
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
                @if (count($errors) > 0)
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
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
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_text text-center">
                            <div class="login_part_text_iner">
                                <h2>New to our Shop?</h2>
                                <p>There are advances being made in science and technology
                                    everyday, and a good example of this is the</p>
                                <a href="/register/" class="btn_3">Create an Account</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_form">
                            <div class="login_part_form_iner">
                                <h3>Welcome Back ! <br>
                                    Please Sign in now</h3>
                                <form class="row contact_form" action="/login/" method="post" novalidate="novalidate">
                                    @csrf
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="email" name="email" value=""
                                            placeholder="Email">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="password" class="form-control" id="password" name="password" value=""
                                            placeholder="Password">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <div class="creat_account d-flex align-items-center">
                                            <input type="checkbox" id="f-option" name="selector">
                                            <label for="f-option">Remember me</label>
                                        </div>
                                        <button type="submit" value="submit" class="btn_3">
                                            log in
                                        </button>
                                        <a href="/forgot_password/" href="#" style="color:black">forgot password?</a>
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