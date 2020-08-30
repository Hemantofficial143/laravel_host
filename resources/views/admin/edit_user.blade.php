@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Edit User
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
   <!-- plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/jasny-bootstrap/css/jasny-bootstrap.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}" />
    <!--end of page level css-->
   <style>
       .br-0{
           border-top-right-radius: 0;
           border-bottom-right-radius: 0;
       }
   </style>
@stop


{{-- Page content --}}
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-lg">
                    <h4 class="nav_top_align">
                        <i class="fa fa-pencil"></i>
                        Edit User
                    </h4>
                </div>
                <div class="col-lg">
                    <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Users</a>
                        </li>
                        <li class="breadcrumb-item active">Edit User</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col">
                    @if (count($errors)>0)
                        <ul class="alert alert-danger p-4">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>        
                            @endforeach
                        </ul>
                    @endif
                    @if (\Session::has('session_msg'))
                        <div class="alert alert-success">{{  \Session::get('session_msg')  }}</li>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body m-t-25">
                            <div>
                                <h4>Personal Information</h4>
                            </div>
                            <form class="form-horizontal login_validator" id="tryitForm" action="{{url('/admin/users/edit/submit/'.$user->id)}}" method="post">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row m-t-15">
                                            <div class="col-12 col-lg-3 text-center text-lg-right">
                                                <label class="col-form-label">Profile Pic</label>
                                            </div>
                                            <div class="col-12 col-lg-6 text-center text-lg-left">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new img-thumbnail text-center">
                                                        <img src="{{url('storage/images/users/'.$user->profile_img )}}" data-src="img/admin2.jpg" alt="not found" 
                                                         height="170px" width="220px"></div>
                                                    <div class="fileinput-preview fileinput-exists img-thumbnail"></div>
                                                    <div class="m-t-20 text-center">
                                                            <span class="btn btn-primary btn-file">
                                                                
                                                            <span class="fileinput-new">Select image</span>
                                                            <span class="fileinput-exists">Change</span>
                                                            <input type="file" name="profile_img" id="profile_img">
                                                            </span>
                                                        <a href="#" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-t-25">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label for="u-name" class="col-form-label">Name *</label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                        <span class="input-group-text br-0"> <i class="fa fa-user text-primary"></i>
                                    </span>
                                                    <input type="text" value="{{ $user->name }}" name="name" id="u-name" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label for="email" class="col-form-label">Email *
                                                </label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-text  br-0"><i class="fa fa-envelope text-primary"></i></span>
                                                    <input type="text" value="{{ $user->email }}" id="email" name="email" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                
                                       
                                        <div class="form-group row">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label for="phone" class="col-form-label">Phone *</label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-text  br-0"><i class="fa fa-phone text-primary"></i></span>
                                                    <input type="text" id="phone" name="mobile" class="form-control" value="{{ $user->mobile }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group gender_message row">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label class="col-form-label">Gender *</label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div class="custom-controls-stacked">
                                                    
                                                        <label class="custom-control custom-radio">
                                                            <input id="radio1" type="radio" name="gender" class="custom-control-input" value="M" 
                                                            @if ($user->gender == "M")
                                                                checked
                                                            @endif
                                                            >
                                                            <span class="custom-control-label"></span>
                                                            <span class="custom-control-description">Male</span>
                                                        </label>    
                                                        
                                                    
                                                        <label class="custom-control custom-radio">
                                                            <input id="radio2" type="radio" name="gender" value="F" class="custom-control-input"
                                                            @if ($user->gender == "F")
                                                                checked
                                                            @endif
                                                            >
                                                            <span class="custom-control-label"></span>
                                                            <span class="custom-control-description">Female</span>
                                                        </label>
                                                    
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="form-group row">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label for="address" class="col-form-label">Address *
                                                </label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-text  br-0"><i class="fa fa-plus text-primary"></i></span>
                                                    <input type="text" value="Australia" id="address" name="address1" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label for="city" class="col-form-label">City *</label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-text  br-0"><i class="fa fa-plus text-primary"></i></span>
                                                    <input type="text" value="Nakia" name="city" id="city" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label for="pincode" class="col-form-label">Pincode *
                                                </label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-text  br-0"><i class="fa fa-plus text-primary"></i></span>
                                                    <input type="text" value="522522" name="pincode" id=pincode class="form-control">
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="form-group row">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label for="checkbox1" class="col-form-label">Status *</label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div>
                                                    <label class="custom-control custom-checkbox">
                                                        @if ($user->status == 0)
                                                            <input id="checkbox1" type="checkbox" name="status" class="custom-control-input" >    
                                                        @else
                                                            <input id="checkbox1" type="checkbox" name="status" class="custom-control-input" checked>
                                                        @endif
                                                        
                                                        <span class="custom-control-label"></span>
                                                        <span class="custom-control-description">Activate your account</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-lg-9 ml-auto">
                                                <button class="btn btn-primary" id="submit2" type="submit">
                                                    Save
                                                </button>
                                                <input type="reset" class="btn btn-warning" value='Reset' id="clear" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
    <!-- plugin scripts-->
    <script type="text/javascript" src="{{asset('js/pluginjs/jasny-bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/holderjs/js/holder.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>
    <!-- end of plugin scripts-->
    <script type="text/javascript" src="{{asset('js/pages/validation.js')}}"></script>
    <!-- end of page level scripts-->
@stop
