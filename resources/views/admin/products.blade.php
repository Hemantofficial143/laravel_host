@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Products
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--Plugin styles-->
   


    <link type="text/css" rel="stylesheet" href="{{asset('vendors/select2/css/select2.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/datatables/css/dataTables.bootstrap4.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/dataTables.bootstrap.css')}}"/>
    <!--End of plugin styles-->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/tables.css')}}"/>
    <!-- end of page level styles -->
@stop
{{-- Page content --}}
@section('content')

    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-lg-6 col-sm-4">
                    <h4 class="nav_top_align">
                        <i class="fa fa-user"></i>
                        Product Grid
                    </h4>
                </div>
                <div class="col-lg-6 col-sm-8 col-12">
                    <ol class="breadcrumb float-right  nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Products</a>
                        </li>
                        <li class="active breadcrumb-item">Products Grid</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    
    <div class="outer">
        <div class="inner bg-container">
            <div class="card">
                @if (\Session::has('delete_msg'))
                    <div class="alert alert-success">{{  \Session::get('delete_msg')  }}</li></div>
                @endif
                <div class="card-header bg-white">
                    <div class="row">
                        <div class="col-md-10">
                            Products Grid
                        </div>
                        <div class="col-md-2">
                            <a href="{{ url('/admin/product/add') }}" class=" btn btn-success">Add Product  <i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card-body m-t-35" id="user_body">
                    
                    <div>
                        <div>
                            <table class="table  table-striped table-bordered table-hover dataTable no-footer productDataLoad" id="" role="grid">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">ID</th>
                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Image</th>
                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1">Title</th>
                                    <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">Price</th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="3">Actions</th>
                                </tr>
                                </thead>
                                
                            </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
        </div>
        <!-- /.inner -->
    </div>
    <!-- /.outer -->
@stop
{{-- page level scripts --}}
@section('footer_scripts')
    <!--Plugin scripts-->
    <script type="text/javascript" src="{{asset('vendors/select2/js/select2.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/datatables/js/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/datatables/js/dataTables.responsive.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/datatables/js/dataTables.buttons.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/datatables/js/buttons.colVis.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/datatables/js/buttons.bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/datatables/js/buttons.print.min.js')}}"></script>
    <!--End of plugin scripts-->
    <!--Page level scripts-->
    <script type="text/javascript" src="{{asset('js/pages/users.js')}}"></script>
    <!-- end page level scripts -->
    <script>
        Load();
        function Load(){
            $('.productDataLoad').DataTable({
         
                ajax : '{{ route('admin.product.show') }}',
                columns : [
                    {data:'id',name:'id'},
                    {data:'image',name:'image'},
                    {data:'title',name:'title'},
                    {data:'price',name:'price'},
                    {data:'action',name:'action'},
                ]
            });
        };
        
    </script>
@stop
