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
                            <div class="text-center">
                                    {{ $data->title }}
                                    {{ $wish }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Hero Area End-->
        <!--================Single Product Area =================-->
        <div class="product_image_area">
            @csrf
            <div class="container">
                <div id="error_msg"></div>
                
                {{-- <input type="hidden" name="wish_status" id="wish_status" value="{{ wish }}"> --}}
                <span id="wish"><i class="fas fa-heart fa-2x " id="heart" style="cursor:pointer"> </i> <div id="success_msg"></div>  </span>
                <div class="row justify-content-center">

                <div class="col-lg-12">
                
                <center><img src="{{ $data->image }}" alt="#" class="img-fluid" height="300px" width="350px"></center>
                </div>
                <center><h3 class="p-3">{{ $data->title }}<br></h3></center>
                <div class="col-lg-8">
                <div >
                    
                    <table class="" width="100%" cellpadding="20">
                        <tr>
                            <th>ASIN</th>
                            <td> :- </td>
                            <td>{{ $data->asin }}</td>
                            <td></td>
                            <td></td>
                            <th>BRAND</th>
                            <td> :- </td>
                            <td>{{ $data->brand }}</td>
                        </tr>
                        <tr>
                            <th>Category</th>
                            <td> :- </td>
                            <td>{{ $data->category }}</td>
                            <td></td>
                            <td></td>
                            <th>Ratings</th>
                            <td> :- </td>
                            <td>None out of 5 </td>
                        </tr>
                        <tr>
                            <th colspan="8"><center>Description</center></th>
                        </tr>
                        <tr>
                            <td colspan="8">{{ $data->description }}</td>
                        </tr>
                        <tr>
                            <th colspan="8"><center>Price</center></th>
                        </tr>
                        <tr>
                            <td colspan="8"><center>{{ $data->price }}</center></td>
                        </tr>
                        <tr >
                            <td colspan="8" >
                                <center><a href="#" class="btn_3 " style="margin-top:30px;">BUY NOW</a></center>
                            </td>
                        </tr>
                    </table>
                </div>
                </div>
            </div>
            </div>
        </div> 
        <!--================End Single Product Area =================-->
        <!-- subscribe part here -->
        {{-- <section class="subscribe_part section_padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="subscribe_part_content">
                            <h2>Get promotions & updates!</h2>
                            <p>Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources credibly innovate granular internal .</p>
                            <div class="subscribe_form">
                                <input type="email" placeholder="Enter your mail">
                                <a href="#" class="btn_1">Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- subscribe part end -->
    </main>
    @include('web/footer')
    @include('web/search_model')
    @include('web/js')
    <script>
        var wish = {{ $wish }};
        
        if(wish > 0){
            $('#heart').css('color','red');
        }else{
            $('#heart').css('color','black');
        }
        $('#heart').on('click', function(){
            if( wish > 0){
                $.ajax({
                    url: '/wishlist/remove',
                    method: 'POST',
                    dataType: "json",
                    data: 'product_id={{ $data->id }}&user_id={{ Auth::user()->id }}&_token={{ csrf_token() }}',
                    success:function(res){
                        if(res.error){
                            $('#error_msg').html("<div class='alert alert-danger'>"+res.error_msg+"</div>")
                        }else{
                            wish = 0;
                            $('#heart').css('color','black');
                            $('#success_msg').html("<div class='alert alert-success'>"+res.success_msg+"</div>")
                        }
                    }
                })
            }else{
                $.ajax({
                    url: '/wishlist/add',
                    method: 'POST',
                    dataType: "json",
                    data: 'product_id={{ $data->id }}&user_id={{ Auth::user()->id }}&_token={{ csrf_token() }}',
                    success:function(res){
                        if(res.error){
                            $('#error_msg').html("<div class='alert alert-danger'>"+res.error_msg+"</div>")
                        }else{
                            wish = 1;
                            $('#heart').css('color','red');
                            $('#success_msg').html("<div class='alert alert-success'>"+res.success_msg+"</div>")
                        }
                    }
                })
            }
            
        })
    </script>
@endsection