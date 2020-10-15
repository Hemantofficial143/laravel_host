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
                                <h2>Profile</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="contact-section">
            <div class="container">
                @if (\Session::has('success'))
                    <div class="alert alert-success">{{ \Session::get('success') }}</div>
                @endif
                @if (\Session::has('error'))
                    <div class="alert alert-success">{{ \Session::get('error') }}</div>
                @endif
                <div class="row">
                    <div class="col-md-12 card p-5">
                        <form action="/profile/" method="POST" enctype="multipart/form-data">
                            <table width="100%" cellpadding="20">
                                {{ csrf_field() }}
                                <tr>
                                    <th>Name</th>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}"></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="email" id="email" value="{{ $user->email }}" readonly></td>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                    <td>:</td>
                                    <td>
                                        <input type="radio" value="M"  name="gender"  @if ($user->gender == 'M') checked @endif  > Male<br>
                                        <input type="radio" value="F" name="gender" @if ($user->gender == 'F') checked @endif > Female
                                    </td>
                                </tr>
                                <tr>
                                    <th colspan="3">
                                        <button class="btn ">Save Changes</button>
                                    </th>
                                </tr>
                            </table>
                        </form>
                    </div>



                </div>
            </div>
        </section>
    </main>
    @include('web/footer')
    @include('web/search_model')
    @include('web/js')
@endsection
