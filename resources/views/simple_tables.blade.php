@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Simple tables
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/tables.css')}}"/>
    <!-- end of page level styles -->
@stop


{{-- Page content --}}
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-4">
                    <h4 class="nav_top_align">
                        <i class="fa fa-th"></i>
                        Simple Tables
                    </h4>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-8">
                    <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Tables</a>
                        </li>
                        <li class="active breadcrumb-item">Simple Tables</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>

    <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-white">
                            Basic Table
                        </div>
                        <div class="card-body">
                            <div class="table-responsive m-t-35">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Salary</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>George</td>
                                        <td>Hansen</td>
                                        <td>George@gmail.com</td>
                                        <td>$900</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Joe </td>
                                        <td>Sharp</td>
                                        <td>sharp@gmail.com</td>
                                        <td>$778</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Marvin</td>
                                        <td>White</td>
                                        <td>marvin@gmail.com</td>
                                        <td>$1000</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Benjamin</td>
                                        <td>Powers</td>
                                        <td>power@gmail.com</td>
                                        <td>$912</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Footer 1</th>
                                        <th>Footer 2</th>
                                        <th>Footer 3</th>
                                        <th>Footer 4</th>
                                        <th>Footer 5</th>
                                        <th>Footer 6</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            Striped Table
                        </div>
                        <div class="card-body">
                            <div class="table-responsive m-t-35">
                                <table class="table  table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Faye</td>
                                        <td>Mayer</td>
                                        <td>Faye34@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Kianna</td>
                                        <td>Lockman</td>
                                        <td>Kianna.Lockman@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Timmothy</td>
                                        <td>Mertz</td>
                                        <td>Timmothy72@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Alfred</td>
                                        <td>Watsica</td>
                                        <td>Alfred34@gmail.com</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            Bordered Table
                        </div>
                        <div class="card-body">
                            <div class="table-responsive m-t-35">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Salary</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Quincy</td>
                                        <td>$750</td>
                                        <td><span class="tag tag-primary">Good</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Boris</td>
                                        <td>$234</td>
                                        <td><span class="tag tag-danger">Average</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Lucas</td>
                                        <td>$500</td>
                                        <td><span class="tag tag-info">Best</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Benjamin</td>
                                        <td>$282</td>
                                        <td><span class="tag tag-mint">Good</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            Inverse Table
                        </div>
                        <div class="card-body">
                            <div class="table-responsive m-t-35">
                                <table class="table  table-dark">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Salary</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Alessandra</td>
                                        <td>Jakubowski</td>
                                        <td>Alessandra_Jakubowski54@yahoo.com</td>
                                        <td>$900</td>
                                        <td>Good</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Lucienne</td>
                                        <td>Buckridge</td>
                                        <td>Lucienne59@gmail.com</td>
                                        <td>$778</td>
                                        <td>Average</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Christa</td>
                                        <td>Gislason</td>
                                        <td>Christa_Gislason@hotmail.com</td>
                                        <td>$1000</td>
                                        <td>Best</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Oliver</td>
                                        <td>Hudson</td>
                                        <td>Oliver_Hudson@yahoo.com</td>
                                        <td>$912</td>
                                        <td>Good</td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Footer 1</th>
                                        <th>Footer 2</th>
                                        <th>Footer 3</th>
                                        <th>Footer 4</th>
                                        <th>Footer 5</th>
                                        <th>Footer 6</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <!-- BEGIN SAMPLE TABLE PORTLET-->
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            <i class="fa fa-table"></i> Colored Rows
                        </div>
                        <div class="card-body">
                            <div class="table-responsive m-t-35">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Class Name</th>
                                        <th>Column</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="bg-primary text-white">
                                        <td>1</td>
                                        <td>primary</td>
                                        <td>Column</td>
                                    </tr>
                                    <tr class="bg-success text-white">
                                        <td>2</td>
                                        <td>success</td>
                                        <td>Column</td>
                                    </tr>
                                    <tr class="bg-warning text-white">
                                        <td>3</td>
                                        <td>warning</td>
                                        <td>Column</td>
                                    </tr>
                                    <tr class="bg-mint text-white">
                                        <td>4</td>
                                        <td>mint</td>
                                        <td>Column</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END SAMPLE TABLE PORTLET-->
                </div>
                <div class="col-lg-6">
                    <!-- BEGIN SAMPLE TABLE PORTLET-->
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            <i class="fa fa-table"></i> Responsive Tables
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive  m-t-35">
                                <thead class="thead-dark">
                                <tr>
                                    <th>Header 1</th>
                                    <th>Header 2</th>
                                    <th>Header 3</th>
                                    <th>Header 4</th>
                                    <th>Header 5</th>
                                    <th>Header 6</th>
                                    <th>Header 7</th>
                                    <th>Header 8</th>
                                    <th>Header 9</th>
                                    <th>Header 10</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                </tr>
                                <tr>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                </tr>
                                <tr>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END SAMPLE TABLE PORTLET-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <!-- BEGIN SAMPLE TABLE PORTLET-->
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            <i class="fa fa-table"></i> Advanced Table
                        </div>
                        <div class="card-body">
                            <div class="table-responsive m-t-35">
                                <table class="table table-striped table-bordered table-advance table-hover table_status_padding">
                                    <thead>
                                    <tr>
                                        <th>
                                            <i class="fa fa-briefcase"></i> From
                                        </th>
                                        <th class="hidden-xs">
                                            <i class="fa fa-question"></i> Descrition
                                        </th>
                                        <th>
                                            <i class="fa fa-bookAiri Satou"></i> Total
                                        </th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <a href="#">Pixel Ltd</a>
                                        </td>
                                        <td class="hidden-xs">Server Purchase</td>
                                        <td>
                                            52560.10$
                                            <span class="tag tag-primary">Paid</span>
                                        </td>
                                        <td>
                                            <a href="#" class="btn default btn-xs green-stripe">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">Smart House</a>
                                        </td>
                                        <td class="hidden-xs">Furniture Purchase</td>
                                        <td>
                                            5760.00$
                                            <span class="tag tag-warning">Pending</span>
                                        </td>
                                        <td>
                                            <a href="#" class="btn default btn-xs info-stripe">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">FoodMaster Ltd</a>
                                        </td>
                                        <td class="hidden-xs">Annual Expenses</td>
                                        <td>
                                            12400.00$
                                            <span class="tag tag-success">Paid</span>
                                        </td>
                                        <td>
                                            <a href="#" class="btn default btn-xs green-stripe">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">WaterPure Ltd</a>
                                        </td>
                                        <td class="hidden-xs">Payment 2013</td>
                                        <td>
                                            610.50$
                                            <span class="tag tag-danger">Overdue</span>
                                        </td>
                                        <td>
                                            <a href="#" class="btn default btn-xs red-stripe">View</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END SAMPLE TABLE PORTLET-->
                </div>
                <div class="col-lg-6">
                    <!-- BEGIN SAMPLE TABLE PORTLET-->
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            <i class="fa fa-table"></i> Bootstrap Table
                        </div>
                        <div class="card-body">
                            <div class="table-responsive m-t-35">
                                <table class="table table-striped table-bordered table-advance table-hover">
                                    <thead>
                                    <tr>
                                        <th>
                                            <i class="fa fa-briefcase"></i> Company
                                        </th>
                                        <th class="hidden-xs">
                                            <i class="fa fa-user"></i> Contact
                                        </th>
                                        <th>
                                            <i class="fa fa-shopping-cart"></i> Total
                                        </th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="highlight">
                                            <span class="success"></span>
                                            <a href="#">HP</a>
                                        </td>
                                        <td class="hidden-xs">Ramos</td>
                                        <td>2560.60$</td>
                                        <td>
                                            <a href="#" class="btn btn-success btn-xs purple">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="info"></span>
                                            <a href="#">Google</a>
                                        </td>
                                        <td class="hidden-xs">Adam</td>
                                        <td>560.60$</td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-xs black">
                                                <i class="fa fa-trash-o"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="highlight">
                                            <span class="success"></span>
                                            <a href="#">Apple</a>
                                        </td>
                                        <td class="hidden-xs">Daniel</td>
                                        <td>3460.60$</td>
                                        <td>
                                            <a href="#" class="btn btn-success btn-xs purple">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="warning"></span>
                                            <a href="#">Microsoft</a>
                                        </td>
                                        <td class="hidden-xs">Nick</td>
                                        <td>2560.60$</td>
                                        <td>
                                            <a href="#" class="btn btn-warning btn-xs blue">
                                                <i class="fa fa-share"></i> Share
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END SAMPLE TABLE PORTLET-->
                </div>
            </div>
        </div>
        <!-- /.inner -->
    </div>
    <!-- /.outer -->
@stop
{{-- page level scripts --}}
@section('footer_scripts')
@stop