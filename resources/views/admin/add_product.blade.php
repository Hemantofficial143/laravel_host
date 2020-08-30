@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Add Product
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
                        Add Product
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
                            <a href="#">Product</a>
                        </li>
                        <li class="breadcrumb-item active">Add Product</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer form_wizzards">
        <div class="inner bg-container">
            <div class="row">
                <div class="col">
                    <div class="card m-t-35">
                        <?php 
                            if(isset($_GET['ack'])){
                                if($_GET['ack'] == "s"){?>
                                    <div class="alert alert-success">Product Added Succesfully</div>
                                <?php }elseif($_GET['ack'] == "e"){?>
                                    <div class="alert alert-danger">Something went Wrong!!</div>
                                <?php }
                            }
                        ?>
                    <div id="custom_success_msg"></div>
                    <div id="custom_error_msg"></div>
                        <div class="card-header bg-white">
                            <i class="fa fa-file-text-o"></i>
                            Add Product
                           
                        </div>
                        <div class="card-body m-t-20">
                            <!--main content-->
                            <div class="row">
                                <div class="col">
                                    <!-- BEGIN FORM WIZARD WITH VALIDATION -->
                                    <form id="commentForm" method="post" action="/test" class="validate">
                                        <div id="rootwizard">
                                            <ul class="nav nav-pills">
                                                <li class="nav-item m-t-15">
                                                    <a class="nav-link" href="#tab1" data-toggle="tab">
                                                        <span class="userprofile_tab1">1</span>
                                                        Product Code
                                                    </a>
                                                </li>
                                                <li class="nav-item m-t-15">
                                                    <a class="nav-link" href="#tab2" data-toggle="tab">
                                                        <span class="userprofile_tab2">2</span>
                                                        Verify Data
                                                    </a>
                                                </li>
                                                <li class="nav-item m-t-15">
                                                    <a class="nav-link" href="#tab3"
                                                       data-toggle="tab"><span>3</span>
                                                       Upload Product
                                                   </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content m-t-20">
                                                <div class="tab-pane" id="tab1">
                                                    
                                                    <div class="form-group">
                                                        <label for="asincode" class="control-label">ASIN Code</label>
                                                        <input id="asincode" name="asincode" type="text"
                                                               placeholder="eg.: B077PWK5BY"
                                                               class="form-control required">
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab2">
                                                    <input type="hidden" id="seller" name="seller">
                                                    <input type="hidden" id="asin" name="asin">
                                                    <div class="form-group" id="load_spinner">
                                                        <b>Loading, Please wait...</b><i class="fa fa-spinner fa-pulse"></i>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="prod_title" class="control-label">Product Name</label>
                                                        <input id="prod_title" name="prod_title" type="text"
                                                               placeholder="eg.: B077PWK5BY"
                                                               class="form-control required" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="prod_price" class="control-label">Product Price</label>
                                                        <input id="prod_price" name="prod_price" type="text"
                                                               placeholder="eg.: B077PWK5BY"
                                                               class="form-control required" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="prod_desc" class="control-label">Product Description</label>
                                                        <input id="prod_desc" name="prod_desc" type="text"
                                                               placeholder="eg.: B077PWK5BY"
                                                               class="form-control required" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="prod_brand" class="control-label">Product Brand</label>
                                                        <input id="prod_brand" name="prod_brand" type="text"
                                                               placeholder="eg.: B077PWK5BY"
                                                               class="form-control required" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="prod_category" class="control-label">Product Category</label>
                                                        <input id="prod_category" name="prod_category" type="text"
                                                               placeholder="eg.: B077PWK5BY"
                                                               class="form-control required" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="prod_img" class="control-label">Product Image</label>
                                                        <input id="prod_img" name="prod_img" type="text"
                                                               placeholder="eg.: B077PWK5BY"
                                                               class="form-control required" readonly hidden>
                                                        <img id="prod_img_view" name="prod_img_view" src="" height="400px">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="error" class="control-label"></label>
                                                        <input id="error" name="error" type="text"
                                                               placeholder="eg.: B077PWK5BY"
                                                               class="form-control" readonly hidden>
                                                    </div>
                                                    
                                                </div>
                                                <div class="tab-pane p-5" id="tab3">
                                                    <div class="form-group">
                                                        <label class="control-label"><b>Product Name:</b></label>
                                                        <p id="prod_title_d"></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label  class="control-label"><b>Product Price:</b></label>
                                                        <p  id="prod_price_d"></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label"><b>Product Description:</b></label>
                                                        <p  id="prod_desc_d"></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label"><b>Product Brand:</b></label>
                                                        <p  id="prod_brand_d"></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label  class="control-label"><b>Product Image:</b></label>
                                                        <img id="prod_img_d" name="prod_img" src="" height="400px">
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="tab-content m-t-20">
                                                <ul class="pager wizard pager_a_cursor_pointer">
                                                    <li class="previous">
                                                        <a><i class="fa fa-long-arrow-left"></i>
                                                            Previous</a>
                                                    </li>
                                                    <li class="next" id="next_btn">
                                                        <a>Next <i class="fa fa-long-arrow-right"></i>
                                                        </a>
                                                    </li>
                                                    <li class="next finish" style="display:none;">
                                                        <a id="submit-btn">Finish</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div id="myModal" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">

                                                        <h4 class="modal-title">Product Status</h4>
                                                        <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Your Product Added Successfully .😄😄😄</p>
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
    <script type="text/javascript" src="{{asset('js/pages/add_product.js')}}"></script>
    <script>
        $('#rootwizard').bootstrapWizard({
        'tabClass': 'nav nav-pills',
        'onNext': function(tab, navigation, index) {
            var $validator = $('#commentForm').data('bootstrapValidator').validate();
            if($validator.isValid()){
                // alert('fd');
                $(".userprofile_tab1").addClass("tab_clr");
                $(".userprofile_tab2").addClass("tab_clr");
            }
            return $validator.isValid();
        },
        'onPrevious': function(tab, navigation, index) {
            $(".userprofile_tab2").removeClass("tab_clr");
        },
        onTabClick: function(tab, navigation, index) {
            return false;
        },
        onTabShow: function(tab, navigation, index) {
            var $total = navigation.find('li').length;
            var $current = index+1;
            var $percent = ($current/$total) * 100;
            var $rootwizard= $('#rootwizard');
            // If it's the last tab then hide the last button and show the finish instead
            if($current >= $total) {
                $rootwizard.find('.pager .next').hide();
                $rootwizard.find('.pager .finish').show();
                $rootwizard.find('.pager .finish').removeClass('disabled');
            } else {
                $rootwizard.find('.pager .next').show();
                $rootwizard.find('.pager .finish').hide();
            }
            if($current == 2){
                var $ASINcode = "asin_n="+document.getElementsByName("asincode")[0].value;
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url:"{{ url('/admin/product/add/fetch') }}",
                    data:$ASINcode,
                    method:"POST",
                    dataType:"json",
                    success:function(res){
                        
                        //alert("Start");
                        if(res.error){
                            if(res.error_reason == "API"){
                                alert(res.error_msg);
                            }else{
                                $('#next_btn').css('display','none');
                                    for (var key in res) {
                                        document.getElementsByName(key)[0].setAttribute('readonly','readonly');
                                        document.getElementsByName(key)[0].value = res[key];
                                        if(key=="prod_img"){   
                                            document.getElementById('prod_img_view').setAttribute('alt',"Invalid ASIN number");
                                        }
                                    }
                                document.getElementById("load_spinner").style.display = "none";
                            }
                            
                            
                        }else{

                            $('#custom_success_msg').html(res.success_msg);

                            for (var key in res) {
                                //alert("Run");
                                document.getElementsByName(key)[0].value = res[key];
                                //console.log(res[key]);
                                if(key=="prod_img"){
                                    
                                    document.getElementById('prod_img_view').setAttribute('src',res[key]);
                                }
                            }
                            document.getElementById("load_spinner").style.display = "none";
                        }
                    }
                })
            }
            if($current == 3){
                document.getElementById("prod_title_d").innerHTML = document.getElementsByName("prod_title")[0].value;
                document.getElementById("prod_price_d").innerHTML = document.getElementsByName("prod_price")[0].value;
                document.getElementById("prod_desc_d").innerHTML = document.getElementsByName("prod_desc")[0].value;
                document.getElementById("prod_brand_d").innerHTML = document.getElementsByName("prod_brand")[0].value;
                var img_data = document.getElementById('prod_img_view').getAttribute('src');
                document.getElementById('prod_img_d').setAttribute('src',img_data);
            }
            $('#rootwizard .finish').on("click",function() {
                var $validator = $('#commentForm').data('bootstrapValidator').validate();
                if ($validator.isValid()) {     
                   
                }
            });
                 

        }});
        $('#submit-btn').click(function(){
                var prod_name = $('#prod_title').val();
                var prod_price = $('#prod_price').val();
                var prod_desc = $('#prod_desc').val();
                var prod_brand = $('#prod_brand').val();
                var prod_img = $('#prod_img').val();
                var prod_category = $('#prod_category').val();
                
                var asin = $('#asin').val();
                var data = "prod_name="+prod_name+"&prod_price="+prod_price+"&prod_desc="+prod_desc+"&prod_brand="+prod_brand+"&prod_img="+prod_img+"&asin="+asin+"&prod_category="+prod_category;
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url:"{{ route('admin.product.add.submit') }}",
                    method:"POST",
                    data:data,
                    success:function(res){
                        if(res.error){
                           window.location.href = "/admin/product/add?ack=e";
                        }else{
                           window.location.href = "/admin/product/add?ack=s";    
                        }
                    }
                })
            });
    </script>
    <!-- end page level scripts -->
@stop