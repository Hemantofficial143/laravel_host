@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Cropper
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/cropper/css/cropper.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/cropper.css')}}" />
    <!--End of page level styles-->
@stop


{{-- Page content --}}
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-lg col-sm-4">
                    <h4 class="nav_top_align">
                        <i class="fa fa-anchor" aria-hidden="true"></i>
                        Cropper
                    </h4>
                </div>
                <div class="col-lg col-sm-8">
                    <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Components</a>
                        </li>
                        <li class="breadcrumb-item active">Cropper</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col">
                    <img id="image" src="{{asset('img/crop.png')}}" alt="not found">
                    <div class="docs-preview clearfix">
                        <div class="img-preview preview-lg"></div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col docs-buttons m-t-35">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary" data-method="reset" title="Reset"><span
                                    class="fa fa-refresh"></span></button>
                        <label class="btn btn-primary btn-upload" for="inputImage" title="Upload image file">
                            <input type="file" class="sr-only" id="inputImage" name="file"
                                   accept="image/*"><span class="fa fa-upload"></span></label>
                    </div>


                    <div class="btn-group">
                        <button type="button" class="btn btn-primary" data-method="zoom" data-option="0.1"
                                title="Zoom In"><span class="fa fa-search-plus"></span></button>
                        <button type="button" class="btn btn-primary" data-method="zoom" data-option="-0.1"
                                title="Zoom Out"><span class="fa fa-search-minus"></span></button>
                    </div>

                    <div class="btn-group">
                        <button type="button" class="btn btn-primary" data-method="move" data-option="-10"
                                data-second-option="0" title="Move Left"><span class="fa fa-arrow-left"></span>
                        </button>
                        <button type="button" class="btn btn-primary" data-method="move" data-option="10"
                                data-second-option="0" title="Move Right"><span
                                    class="fa fa-arrow-right"></span></button>
                        <button type="button" class="btn btn-primary" data-method="move" data-option="0"
                                data-second-option="-10" title="Move Up"><span class="fa fa-arrow-up"></span>
                        </button>
                        <button type="button" class="btn btn-primary" data-method="move" data-option="0"
                                data-second-option="10" title="Move Down"><span class="fa fa-arrow-down"></span>
                        </button>
                    </div>

                    <div class="btn-group">
                        <button type="button" class="btn btn-primary" data-method="rotate" data-option="-45"
                                title="Rotate Left"><span class="fa fa-rotate-left"></span></button>
                        <button type="button" class="btn btn-primary" data-method="rotate" data-option="45"
                                title="Rotate Right"><span class="fa fa-rotate-right"></span></button>
                    </div>

                    <div class="btn-group">
                        <button type="button" class="btn btn-primary" data-method="scaleX" data-option="-1"
                                title="Flip Horizontal"><span class="fa fa-arrows-h"></span></button>
                        <button type="button" class="btn btn-primary" data-method="scaleY" data-option="-1"
                                title="Flip Vertical"><span class="fa fa-arrows-v"></span></button>
                    </div>

                    <div class="btn-group">
                        <button type="button" class="btn btn-primary" data-method="crop" title="Crop"><span
                                    class="fa fa-check"></span></button>
                        <button type="button" class="btn btn-primary" data-method="clear" title="Clear"><span
                                    class="fa fa-remove"></span></button>
                    </div>

                    <div class="btn-group">
                        <button type="button" class="btn btn-primary" data-method="disable" title="Disable">
                            <span class="fa fa-lock"></span></button>
                        <button type="button" class="btn btn-primary" data-method="enable" title="Enable"><span
                                    class="fa fa-unlock"></span></button>
                    </div>
                    <!-- Show the cropped image in modal -->
                    <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true"
                         aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="getCroppedCanvasTitle">Cropped</h4>
                                </div>
                                <div class="modal-body"></div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                    </button>
                                    <a class="btn btn-primary" id="download" href="javascript:void(0);"
                                       download="cropped.jpg">Download</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.modal -->
                    <button type="button" class="btn btn-primary" data-method="getImageData" data-option
                            data-target="#putData">Get Image Data
                    </button>
                    <button type="button" class="btn btn-primary" data-method="moveTo" data-option="0">0,0
                    </button>
                    <button type="button" class="btn btn-primary" data-method="zoomTo" data-option="1">100%
                    </button>
                    <button type="button" class="btn btn-primary" data-method="rotateTo" data-option="180">
                        180°
                    </button>
                    <div class="btn-group btn-group-crop">
                        <button type="button" class="btn btn-primary" data-method="getCroppedCanvas">Save Image
                        </button>
                        <button type="button" class="btn btn-primary" data-method="getCroppedCanvas"
                                data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }">160&times;90
                        </button>
                        <button type="button" class="btn btn-primary" data-method="getCroppedCanvas"
                                data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }">320&times;180
                        </button>
                    </div>

                    <input type="text" class="form-control" id="putData"
                           placeholder="Get data to here or set data with this value">
                </div><!-- /.docs-buttons -->


            </div>

        </div>
        <!-- /.inner -->
    </div>
    <!-- /.outer -->
@stop
{{-- page level scripts --}}
@section('footer_scripts')
    <!--plugin script-->
    <script type="text/javascript" src="{{asset('vendors/cropper/js/cropper.min.js')}}"></script>
    <!-- end of plugin scripts -->
    <script type="text/javascript" src="{{asset('js/pages/cropper.js')}}"></script>
@stop