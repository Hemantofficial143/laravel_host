@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Invoice
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/invoice.css')}}">
    <!-- end of page level styles -->
@stop

{{-- Page content --}}
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-sm">
                    <h4 class="nav_top_align">
                        <i class="fa fa-file" aria-hidden="true"></i>
                        Invoice
                    </h4>
                </div>
                <div class="col-sm">
                    <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Pages</a>
                        </li>
                        <li class="breadcrumb-item active">Invoice</li>
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
                            <i class="icon ion-card qwe" data-pack="default" data-tags="credit, price, debit, money, shopping, cash, dollars, $"></i>
                            Invoice for Purchase #33221
                        </div>
                        <div class="card-body m-t-35">
                            <div class="row">
                                <div class="col mrg_btm15">
                                    This Invoice is Generated For puchase of Items listed below and the order id is #33221. And the payment detaisl as follows, Billing details and shipping details are mentioned below.
                                    <br />
                                    for any enquiries about this Invoice document feel free to ask your queries by the given mobile detials or post your queries by the given mail id.
                                    <br />
                                    And the delivery details and delivery status are
                                    <br />
                                    <br />
                                    Order Date :
                                    <strong>25th AUG 2016</strong>
                                    <br />
                                    Order Status :
                                    <strong>Shipped</strong>
                                    <br />
                                    Order delivery :
                                    <strong>25th AUg 2016</strong>
                                    expecting
                                    <br />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col invoice_body_billing_details">
                                    <div class="row justify-content-between">
                                        <div class="col-lg-4">
                                            <div class="invoice_details">
                                                <h4 class="success_txt">Billing Details:</h4>
                                                <strong>Ms Natalya Pery</strong>
                                                <br />
                                                Main Address & Streen Num
                                                <br />
                                                Streen Name & City Details
                                                <br />
                                                State Details
                                                <br />
                                                Phone Num: XXX-XXX-XXXX
                                                <br />
                                                Mail Id: mailid@mail.com
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="invoice_details">
                                                <span class="info_txt">Shipping Details:</span><br />
                                                <strong>Ms Natalya Pery</strong>
                                                <br />
                                                Main Address & Streen Num
                                                <br />
                                                Streen Name & City Details
                                                <br />
                                                State Details
                                                <br />
                                                Phone Num: XXX-XXX-XXXX
                                                <br />
                                                Mail Id: mailid@mail.com

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header bg-white">
                                            <strong>Order Summary</strong>
                                        </div>
                                        <div class="card-body m-t-35">
                                            <div class="table-responsive">
                                                <table class="table table-sm">
                                                    <thead>
                                                    <tr>
                                                        <td>
                                                            <strong>Item Name</strong>
                                                        </td>
                                                        <td>
                                                            <strong>Price</strong>
                                                        </td>
                                                        <td class="text-center">
                                                            <strong>Item Quantity</strong>
                                                        </td>
                                                        <td></td>
                                                        <td class="text-right">
                                                            <strong>Total</strong>
                                                        </td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Samsung Galaxy Grand</td>
                                                        <td>$700</td>
                                                        <td class="text-center">1</td>
                                                        <td></td>
                                                        <td class="text-right">$700</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Samsung Galaxy Core 2</td>
                                                        <td>$1110</td>
                                                        <td class="text-center">1</td>
                                                        <td></td>
                                                        <td class="text-right">$1110</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Screen Protector</td>
                                                        <td>$7</td>
                                                        <td class="text-center">4</td>
                                                        <td></td>
                                                        <td class="text-right">$28</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="highrow"></td>
                                                        <td class="highrow"></td>
                                                        <td class="highrow text-center"></td>
                                                        <td class="highrow text-right">
                                                            <strong>Sub Total &nbsp;</strong>
                                                        </td>
                                                        <td class="highrow text-right">
                                                            <strong>$1838</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="emptyrow"></td>
                                                        <td class="emptyrow"></td>
                                                        <td class="emptyrow text-center"></td>
                                                        <td class="emptyrow text-right">
                                                            <strong>Shipping &nbsp;</strong>
                                                        </td>
                                                        <td class="highrow text-right">
                                                            <strong>$20</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="emptyrow">
                                                            <i class="livicon" data-name="barcode" data-size="60" data-loop="true"></i>
                                                        </td>
                                                        <td class="emptyrow"></td>
                                                        <td class="emptyrow text-center"></td>
                                                        <td class="emptyrow text-right">
                                                            <strong>Total &nbsp;</strong>
                                                        </td>
                                                        <td class="highrow text-right">
                                                            <strong>$1858</strong>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <button type="button" class="btn  button-alignment btn-success m-t-15" data-toggle="button">
                                        Submit Invoice
                                    </button>
                                </div>
                                <div class="col-lg-6 col-sm-6 invoice_print" >
                                <span class="pull-sm-right">
                                    <a style="color:#fff;" class="btn button-alignment btn-info m-t-15" data-toggle="button" onclick="javascript:window.print();">
                                        Print
                                    </a>
                                    <button type="button" class="btn button-alignment btn-warning m-t-15" data-toggle="button">
                                        Cancel
                                    </button>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.inner -->
    </div>
    <!-- /.outer -->
@stop
@section('footer_scripts')
@stop