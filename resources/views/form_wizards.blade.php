@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Wizards
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--Plugin styles -->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}"/>
    <!--End of plugin styles-->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/wizards.css')}}"/>
    <!-- end of page level styles -->
@stop


{{-- Page content --}}
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-lg-6 col-sm-4">
                    <h4 class="nav_top_align">
                        <i class="fa fa-pencil"></i>
                        Wizards
                    </h4>
                </div>
                <div class="col-lg-6 col-sm-8">
                    <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Forms</a>
                        </li>
                        <li class="breadcrumb-item active">Wizards</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer form_wizzards">
        <div class="inner bg-container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header bg-white">
                            <i class="fa fa-file-text-o"></i>
                            General Wizard
                        </div>
                        <div class="card-body m-t-20">
                            <div id="rootwizard_no_val">
                                <ul class="nav nav-pills">
                                    <li class="nav-item user1 m-t-15">
                                        <a class="nav-link" href="#tab11" data-toggle="tab"><span
                                                    class="userprofile_tab">1</span>User
                                            profile</a>
                                    </li>
                                    <li class="nav-item user2 m-t-15">
                                        <a class="nav-link profile_details" href="#tab21"
                                           data-toggle="tab"><span class="profile_tab">2</span>Profile
                                            details</a>
                                    </li>
                                    <li class="nav-item finish_tab m-t-15">
                                        <a class="nav-link " href="#tab31" data-toggle="tab"><span>3</span>Finish</a>
                                    </li>
                                </ul>
                                <div class="tab-content m-t-20">
                                    <div class="tab-pane" id="tab11">
                                        <div class="form-group">
                                            <label for="userName1" class="control-label">User name</label>
                                            <input id="userName1" type="text" placeholder="Enter your name"
                                                   class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="email1" class="control-label">Email</label>
                                            <input id="email1" placeholder="Enter your Email" type="text"
                                                   class="form-control email">
                                        </div>
                                        <div class="form-group">
                                            <label for="password1" class="control-label">Password</label>
                                            <input id="password1" type="password"
                                                   placeholder="Enter your password"
                                                   class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="confirm1" class="control-label">Confirm Password</label>
                                            <input id="confirm1" type="password"
                                                   placeholder="Confirm your password "
                                                   class="form-control">
                                        </div>
                                        <ul class="pager wizard pager_a_cursor_pointer">
                                            <li class="previous previous_btn1"><a>Previous</a></li>
                                            <li class="next next_btn1"><a>Next</a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="tab21">
                                        <div class="form-group">
                                            <label for="name" class="control-label">First name</label>
                                            <input id="name" name="fname" placeholder="Enter your First name"
                                                   type="text" class="form-control required">
                                        </div>
                                        <div class="form-group">
                                            <label for="surname" class="control-label">Last name</label>
                                            <input id="surname" name="lname" type="text"
                                                   placeholder=" Enter your Last name"
                                                   class="form-control required">
                                        </div>
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="custom-select form-control"
                                                    title="Select an account type...">
                                                <option>Select</option>
                                                <option>MALE</option>
                                                <option>FEMALE</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="address1">Address</label>
                                            <input id="address1" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="age1" class="control-label">Age</label>
                                            <input id="age1" name="age" type="text" maxlength="3"
                                                   class="form-control number general_number">
                                        </div>
                                        <ul class="pager wizard pager_a_cursor_pointer">
                                            <li class="previous previous_btn2"><a>Previous</a></li>
                                            <li class="next next_btn2"><a>Next</a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="tab31">
                                        <div class="form-group">
                                            <label>Home number</label>
                                            <input type="text" class="form-control general_number" placeholder="(999)999-9999">
                                        </div>
                                        <div class="form-group">
                                            <label>Personal number</label>
                                            <input type="text" class="form-control general_number" placeholder="(999)999-9999">
                                        </div>
                                        <div class="form-group">
                                            <label>Alternate number</label>
                                            <input type="text" class="form-control general_number" placeholder="(999)999-9999">
                                        </div>
                                        <div class="form-group">
                                            <span>Terms and Conditions </span>
                                            <br>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label"></span>
                                                <span class="custom-control-description"> I agree with the Terms and Conditions.</span>
                                            </label>
                                        </div>
                                        <ul class="pager wizard pager_a_cursor_pointer">
                                            <li class="previous previous_btn3"><a>Previous</a></li>
                                            <li class="next"><a>Finish</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            <i class="fa fa-file-text-o"></i>
                            Validation Wizard
                        </div>
                        <div class="card-body m-t-20">
                            <!--main content-->
                            <div class="row">
                                <div class="col">
                                    <!-- BEGIN FORM WIZARD WITH VALIDATION -->
                                    <form id="commentForm" method="post" action="#" class="validate">
                                        <div id="rootwizard">
                                            <ul class="nav nav-pills">
                                                <li class="nav-item m-t-15">
                                                    <a class="nav-link" href="#tab1" data-toggle="tab">
                                                        <span class="userprofile_tab1">1</span>User
                                                        profile</a>
                                                </li>
                                                <li class="nav-item m-t-15">
                                                    <a class="nav-link" href="#tab2" data-toggle="tab">
                                                        <span class="userprofile_tab2">2</span>Profile
                                                        details</a>
                                                </li>
                                                <li class="nav-item m-t-15">
                                                    <a class="nav-link" href="#tab3"
                                                       data-toggle="tab"><span>3</span>Finish</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content m-t-20">
                                                <div class="tab-pane" id="tab1">
                                                    <div class="form-group">
                                                        <label for="userName" class="control-label">User
                                                            name *</label>
                                                        <input id="userName" name="username" type="text"
                                                               placeholder="Enter your name"
                                                               class="form-control required">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email" class="control-label">Email
                                                            *</label>
                                                        <input id="email" name="email"
                                                               placeholder="Enter your Email"
                                                               type="text"
                                                               class="form-control required email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password" class="control-label">Password
                                                            *</label>
                                                        <input id="password" name="password" type="password"
                                                               placeholder="Enter your password"
                                                               class="form-control required">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="confirm" class="control-label">Confirm
                                                            Password
                                                            *</label>
                                                        <input id="confirm" name="confirm" type="password"
                                                               placeholder="Confirm your password "
                                                               class="form-control required">
                                                    </div>
                                                    <ul class="pager wizard pager_a_cursor_pointer">
                                                        <li class="previous">
                                                            <a><i class="fa fa-long-arrow-left"></i>
                                                                Previous</a>
                                                        </li>
                                                        <li class="next">
                                                            <a>Next <i class="fa fa-long-arrow-right"></i>
                                                            </a>
                                                        </li>
                                                        <li class="next finish" style="display:none;">
                                                            <a>Finish</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane" id="tab2">
                                                    <div class="form-group">
                                                        <label for="name1" class="control-label">First name
                                                            *</label>
                                                        <input id="name1" name="val_first_name"
                                                               placeholder="Enter your First name"
                                                               type="text"
                                                               class="form-control required">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="surname1" class="control-label">Last
                                                            name *</label>
                                                        <input id="surname1" name="lname" type="text"
                                                               placeholder=" Enter your Last name"
                                                               class="form-control required">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Gender</label>
                                                        <select class="custom-select form-control"
                                                                id="gender"
                                                                title="Select an account type...">
                                                            <option>Select</option>
                                                            <option>MALE</option>
                                                            <option>FEMALE</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="address">Address *</label>
                                                        <input id="address" name="val_address" type="text"
                                                               class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="age" class="control-label">Age *</label>
                                                        <input id="age" name="val_age" type="text"
                                                               maxlength="3"
                                                               class="form-control required number">
                                                    </div>
                                                    <ul class="pager wizard pager_a_cursor_pointer">
                                                        <li class="previous">
                                                            <a><i class="fa fa-long-arrow-left"></i>
                                                                Previous</a>
                                                        </li>
                                                        <li class="next">
                                                            <a>Next <i class="fa fa-long-arrow-right"></i>
                                                            </a>
                                                        </li>
                                                        <li class="next finish" style="display:none;">
                                                            <a>Finish</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane" id="tab3">
                                                    <div class="form-group">
                                                        <label>Home number *</label>
                                                        <input type="text" class="form-control" id="phone1"
                                                               name="phone1"
                                                               placeholder="(999)999-9999">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Personal number *</label>
                                                        <input type="text" class="form-control" id="phone2"
                                                               name="phone2"
                                                               placeholder="(999)999-9999">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Alternate number *</label>
                                                        <input type="text" class="form-control" id="phone3"
                                                               name="phone3"
                                                               placeholder="(999)999-9999">
                                                    </div>
                                                    <div class="form-group">
                                                        <span>Terms and Conditions *</span>
                                                        <br>
                                                        <label class="custom-control custom-checkbox wizard_label_block">
                                                            <input type="checkbox" id="acceptTerms"
                                                                   name="acceptTerms"
                                                                   class="custom-control-input">
                                                            <span class="custom-control-label"></span>
                                                            <span class="custom-control-description custom_control_description_color">I agree with the Terms and Conditions.</span>
                                                        </label>

                                                    </div>
                                                    <ul class="pager wizard pager_a_cursor_pointer">
                                                        <li class="previous">
                                                            <a><i class="fa fa-long-arrow-left"></i>
                                                                Previous</a>
                                                        </li>
                                                        <li class="next">
                                                            <a>Next <i class="fa fa-long-arrow-right"></i>
                                                            </a>
                                                        </li>
                                                        <li class="next finish" style="display:none;">
                                                            <a>Finish</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="myModal" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">

                                                        <h4 class="modal-title">Wizard</h4>
                                                        <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>You Submitted Successfully.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default"
                                                                data-dismiss="modal">
                                                            OK
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--main content end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.outer -->
@stop
{{-- page level scripts --}}
@section('footer_scripts')
    <!-- Plugin scripts -->
    <script type="text/javascript" src="{{asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/twitter-bootstrap-wizard/js/jquery.bootstrap.wizard.min.js')}}"></script>
    <!--End of plugin scripts-->
    <!--Page level scripts-->
    <script type="text/javascript" src="{{asset('js/pages/wizard.js')}}"></script>
    <!-- end page level scripts -->
@stop