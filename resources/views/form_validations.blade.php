@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Form Validations
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/jquery-validation-engine/css/validationEngine.jquery.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/datepicker/css/bootstrap-datepicker.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/datetimepicker/css/DateTimePicker.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}" />
    <!--End of plugin styles-->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/form_validations.css')}}" />
    <!-- end of page level styles -->
@stop


{{-- Page content --}}
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-sm-5 col-lg">
                    <h4 class="nav_top_align">
                        <i class="fa fa-pencil"></i>
                        Form Validations
                    </h4>
                </div>
                <div class="col-sm-7 col-lg">
                    <ol  class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Forms</a>
                        </li>
                        <li class="active breadcrumb-item">Form Validations</li>
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
                            <i class="fa fa-file-text-o"></i>
                            Basic Validation
                        </div>
                        <div class="card-body m-t-35">
                            <form action="#" class="form-horizontal  login_validator" id="form_block_validator">
                                <div class="form-group row">
                                    <div class="col-lg-4  text-lg-right">
                                        <label for="required2" class="col-form-label">Name *</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" id="required2" name="Name2" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="email2" class="col-form-label">E-mail *</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="email" id="email2" name="Email2" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="password2" class="col-form-label">Password *</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="password" id="password2" name="Password2" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="confirm_password2" class="col-form-label">Confirm Password *</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="password" id="confirm_password2" name="Confirmpassword2" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label class="col-form-label">Date *</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control form_val_popup_dp3" name="date_inline" placeholder="YYYY-MM-DD" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="url2" class="col-form-label">Url *</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="url" id="url2" name="Url2" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="digits" class="col-form-label">Digits Only *</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" id="digits" name="digits_only"  class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="range" class="col-form-label">Range [5,16] *</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" id="range" name="Range" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label class="col-form-label check_form_val">Agreement to policy</label>
                                    </div>
                                    <div class="col-lg-4 error_color1">
                                        <label class="custom-control custom-checkbox error_color">
                                            <input type="checkbox" class="custom-control-input" name="activate">
                                            <span class="custom-control-label"></span>
                                            <span class="custom-control-description">I agree to the terms and conditions.</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-actions form-group row">
                                    <div class="col-xl-8 ml-auto">
                                        <input type="submit" value="Validate" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            <i class="fa fa-file-text-o"></i>
                            Inline Validation
                        </div>
                        <div class="card-body m-t-35">
                            <form action="#" class="form-horizontal login_validator" id="form_inline_validator">
                                <div class="form-group row">
                                    <div class="col-xl-4 text-xl-right">
                                        <label for="required" class="col-form-label">Name *</label>
                                    </div>
                                    <div class="col-xl-4">
                                        <input type="text" id="required" name="Name3" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xl-4 text-xl-right">
                                        <label for="email" class="col-form-label">E-mail *</label>
                                    </div>
                                    <div class="col-xl-4">
                                        <input type="email" id="email" name="Email3" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xl-4 text-xl-right">
                                        <label for="password" class="col-form-label">Password *</label>
                                    </div>
                                    <div class="col-xl-4">
                                        <input type="password" id="password" name="Password3" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xl-4 text-xl-right">
                                        <label for="confirm_password" class="col-form-label">Confirm Password *</label>
                                    </div>
                                    <div class="col-xl-4">
                                        <input type="password" id="confirm_password" name="Confirmpassword3" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xl-4 text-xl-right">
                                        <label for="date" class="col-form-label">Date *</label>
                                    </div>
                                    <div class="col-xl-4">
                                        <input type="text" id="date" class="form-control form_val_popup_dp4" name="birthday" placeholder="YYYY-MM-DD" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xl-4 text-xl-right">
                                        <label for="url" class="col-form-label">Url *</label>
                                    </div>
                                    <div class="col-xl-4">
                                        <input type="url" id="url" name="Url3" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xl-4 text-xl-right">
                                        <label for="minsize" class="col-form-label">Minimum 3 Char length *</label>
                                    </div>
                                    <div class="col-xl-4">
                                        <input type="text" id="minsize" name="Minsize3" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xl-4 text-xl-right">
                                        <label for="maxsize" class="col-form-label">Maximum 6 Char length *</label>
                                    </div>
                                    <div class="col-xl-4">
                                        <input type="text" id="maxsize" name="Maxsize3" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xl-4 text-xl-right">
                                        <label for="minNum" class="col-form-label">Minimum number 3 *</label>
                                    </div>
                                    <div class="col-xl-4">
                                        <input type="text" id="minNum" name="MinNum" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xl-4 text-xl-right">
                                        <label for="maxNum" class="col-form-label">Maximum number 16 *</label>
                                    </div>
                                    <div class="col-xl-4">
                                        <input type="text" id="maxNum" name="maxNum" class="form-control">
                                    </div>
                                </div>
                                <div class="form-actions form-group row">
                                    <div class="col-xl-8 ml-auto">
                                        <input type="submit" value="Validate" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            <i class="fa fa-file-text-o"></i>
                            Popup Validation
                        </div>
                        <div class="card-body m-t-35">
                            <form class="form-horizontal" id="popup-validation">
                                <div class="form-group row">
                                    <div class="col-xl-4 text-xl-right">
                                        <label for="req" class="col-form-label">Name *</label>
                                    </div>
                                    <div class="col-xl-4">
                                        <input type="text" class="validate[required] form-control" name="req" id="req">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xl-4 text-xl-right">
                                        <label for="sport" class="col-form-label">Select *</label>
                                    </div>
                                    <div class="col-xl-4">
                                        <select name="sport" id="sport" class="validate[required] form-control select2">
                                            <option value="">Select a sport</option>
                                            <option value="option1">Tennis</option>
                                            <option value="option2">Football</option>
                                            <option value="option3">Golf</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xl-4 text-xl-right">
                                        <label for="sport2" class="col-form-label">Multiple Select *</label>
                                    </div>
                                    <div class="col-xl-4">
                                        <select name="sport2" id="sport2" multiple class="validate[required] form-control">
                                            <option value="">Choose a sport</option>
                                            <option value="option1">Tennis</option>
                                            <option value="option2">Football</option>
                                            <option value="option3">Golf</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xl-4 text-xl-right">
                                        <label for="url1" class="col-form-label">Url *</label>
                                    </div>
                                    <div class=" col-xl-4">
                                        <input value="http://" class="validate[required,custom[url]] form-control" type="text" name="url1" id="url1" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xl-4 text-xl-right">
                                        <label for="email1" class="col-form-label">E-mail *</label>
                                    </div>
                                    <div class=" col-xl-4">
                                        <input class="validate[required,custom[email]] form-control" type="text" name="email1" id="email1" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xl-4 text-xl-right">
                                        <label for="pass1" class="col-form-label">Password *</label>
                                    </div>
                                    <div class=" col-xl-4">
                                        <input class="validate[required] form-control" type="password" name="pass1" id="pass1" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xl-4 text-xl-right">
                                        <label for="pass2" class="col-form-label">Confirm Password *</label>
                                    </div>
                                    <div class=" col-xl-4">
                                        <input class="validate[required,equals[pass1]] form-control" type="password" name="pass2" id="pass2" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xl-4 text-xl-right">
                                        <label for="minsize1" class="col-form-label">Minimum field size (6) *</label>
                                    </div>
                                    <div class=" col-xl-4">
                                        <input class="validate[required,minSize[6]] form-control" type="text" name="minsize1" id="minsize1" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xl-4 text-xl-right">
                                        <label for="maxsize1" class="col-form-label">Maximum field size (optional)</label>
                                    </div>
                                    <div class=" col-xl-4">
                                        <input placeholder="0123456789" class="validate[optional,maxSize[6]] form-control" type="text" name="maxsize1" id="maxsize1" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xl-4 text-xl-right">
                                        <label for="number2" class="col-form-label">Digits *</label>
                                    </div>
                                    <div class=" col-xl-4">
                                        <input placeholder="Digits" class="validate[required,custom[number]] form-control" type="text" name="numbe2r" id="number2" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xl-4 text-xl-right">
                                        <label for="ip" class="col-form-label">IPV4 *</label>
                                    </div>
                                    <div class=" col-xl-4">
                                        <input placeholder="192.168.168.168" class="validate[required,custom[ipv4]] form-control" type="text" name="ip" id="ip" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xl-4 text-xl-right">
                                        <label for="date3" class="col-form-label">Date *</label>
                                    </div>
                                    <div class=" col-xl-4" >
                                        <input placeholder="YYYY-MM-DD" class="validate[required,custom[date]] form-control" type="text" name="date3" id="date3" data-provide="date-picker"   data-date-viewmode="years"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xl-4 text-xl-right">
                                        <label for="past" class="col-form-label">Date Earlier *</label>
                                    </div>
                                    <div class=" col-xl-4">
                                        <input placeholder="Today" class="validate[required,custom[date],past[NOW]] form-control" type="text" name="past" id="past" data-provide="date-picker"  data-date-viewmode="years"/>
                                    </div>
                                </div>
                                <div class="form-actions form-group row">
                                    <div class="col-xl-8 ml-auto">
                                        <input type="submit" value="Validate" class="btn btn-primary"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.inner -->
    </div>
            <!-- /.outer -->
    <!-- /.outer -->
@stop
{{-- page level scripts --}}
@section('footer_scripts')
    <!--Plugin scripts-->
    <script type="text/javascript" src="{{asset('vendors/jquery-validation-engine/js/jquery.validationEngine.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/jquery-validation-engine/js/jquery.validationEngine-en.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/jquery-validation/js/jquery.validate.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/datetimepicker/js/DateTimePicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/moment/js/moment.min.js')}}"></script>
    <!--End of plugin scripts-->
    <!--Page level scripts-->
    <script type="text/javascript" src="{{asset('js/form.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/pages/form_validation.js')}}"></script>
    <!-- end page level scripts -->
@stop