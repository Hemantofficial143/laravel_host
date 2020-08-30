@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
File Upload
@parent
@stop
{{-- page level styles --}}
@section('header_styles')
<!--plugin style-->
<link type="text/css" rel="stylesheet" href="{{asset('vendors/fileinput/css/fileinput.min.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('vendors/blueimp-gallery-with-desc/css/blueimp-gallery.min.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('vendors/blueimp_file_upload/css/jquery.fileupload.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('vendors/blueimp_file_upload/css/jquery.fileupload-ui.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('vendors/blueimp-gallery-with-desc/css/blueimp-gallery.min.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('vendors/dropify/css/dropify.css')}}">
<link type="text/css" rel="stylesheet" href="{{asset('vendors/dropzone/css/dropzone.min.css')}}">
<link type="text/css" rel="stylesheet" href="{{asset('css/pages/file_upload.css')}}">
<!--End of page level styles-->
@stop


{{-- Page content --}}
@section('content')
<!-- Content Header (Page header) -->
<header class="head">
    <div class="main-bar">
        <div class="row">
            <div class="col-sm-5 col-12">
                <h4 class="nav_top_align">
                    <i class="fa fa-upload"></i>
                    File Upload
                </h4>
            </div>
            <div class="col-sm-7 col-12">
                <div class="float-right">
                    <ol class="breadcrumb nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Components</a>
                        </li>
                        <li class="breadcrumb-item active">File Upload</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="outer">
    <div class="inner bg-container">
        <div class="row">
            <div class="col">
                <div class="card file_input">
                    <div class="card-header bg-white">
                        Advanced File Upload
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col m-t-35">
                                <h5>File Upload</h5>
                                <input id="input-fa" name="inputfa[]" type="file" multiple class="file-loading">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm m-t-35 button_file">
                                <h5>Select File</h5>
                                <input id="input-4" name="input4[]" type="file" multiple class="file-loading" style="display: block">
                            </div>
                            <div class="col-sm m-t-35">
                                <h5>Image Upload</h5>
                                <input id="input-21" type="file" accept="image/*" class="file-loading">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 m-t-35">
                                <h5>Select Only File</h5>
                                <input id="input-22" name="input22[]" type="file" class="file-loading" accept="text/plain" multiple>
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
                        Jquery File Upload
                    </div>
                    <div class="card-body">
                        <div class="m-t-35">
                            <div class="jquery_file_upload">
                                <div>
                                    File Upload widget with multiple file selection, progress bars, validation and preview images, audio and video for jQuery.
                                </div>
                                <form id="fileupload" action="/file-upload" method="POST" enctype="multipart/form-data">
                                    <noscript>
                                        <input type="hidden" name="redirect" value="">
                                    </noscript>
                                    <div class="fileupload-buttonbar">
                                        <div class="row">
                                            <div class="col-xl-8 col-12">
                                                            <span class="btn btn-success fileinput-button m-t-10 mr-2">
                                                <i class="fa fa-plus"></i>
                                                <span>Add files</span>
                                                <input type="file" name="file" multiple>
                                            </span>
                                                <button type="submit" class="btn btn-primary start m-t-10 mr-2">
                                                    <i class="fa fa-arrow-up"></i>
                                                    <span>Start upload</span>
                                                </button>
                                                <button type="reset" class="btn btn-warning cancel m-t-10 mr-2">
                                                    <i class="fa fa-close"></i>
                                                    <span>Cancel upload</span>
                                                </button>
                                                <button type="button" class="btn btn-danger delete m-t-10 mr-2">
                                                    <i class="fa fa-trash"></i>
                                                    <span>Delete</span>
                                                </button>
                                                <!-- The global file processing state -->
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input toggle">
                                                    <span class="custom-control-indicator"></span>
                                                </label>
                                                <span class="fileupload-process"></span>

                                                <!-- The global progress state -->
                                            </div>
                                            <div class="col-xl-4 col-12 fileupload-progress fade m-t-20">
                                                <!-- The global progress bar -->
                                                <div class="progress active">
                                                    <div class="progress-bar bg-success" style="width: 0" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <!-- The extended global progress state -->
                                                <div class="progress-extended">&nbsp;</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- The table listing the files available for upload/download -->
                                    <div class="table-responsive m-t-30">
                                        <table role="presentation" class="table table-striped">
                                            <tbody class="files"></tbody>
                                        </table>
                                    </div>
                                    <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
                                        <div class="slides"></div>
                                        <h3 class="title"></h3>
                                        <a class="prev">‹</a>
                                        <a class="next">›</a>
                                        <a class="close">×</a>
                                        <a class="play-pause"></a>
                                        <ol class="indicator"></ol>
                                    </div>
                                    <div class="text-danger">
                                        Note: This  file upload doesn't upload image because of no server configuration setup.
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col m-t-35">
                <div class="card">
                    <div class="card-header bg-white">
                        Dropzone
                    </div>
                    <div class="card-body m-t-35">
                        <h5>Basic Dropzone</h5>
                        <div class="m-t-15">
                            <form action="/file-upload" class="dropzone" method="post">
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col m-t-35">
                <div class="card">
                    <div class="card-header bg-white">
                        Dropify
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-12 m-t-35">
                                <h5>Basic Dropify</h5>
                                <div class="m-t-15">
                                    <input type="file" class="dropify"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 m-t-35">
                                <h5>AllowedFileExtensions (PDF, PNG and PSD )</h5>
                                <div class="m-t-15">
                                    <input type="file" class="dropify" data-allowed-file-extensions="pdf png psd"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 m-t-35">
                                <h5>Maximum file Size</h5>
                                <div class="m-t-15">
                                    <input type="file" data-max-file-size="3M"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 m-t-35">
                                <h5>Default File</h5>
                                <div class="m-t-15">
                                    <input type="file" class="dropify" data-default-file="{{asset('img/gallery/full/4.jpg')}}"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 m-t-35">
                                <h5>Without Remove Button</h5>
                                <div class="m-t-15">
                                    <input type="file" class="dropify" data-show-remove="false"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 m-t-35">
                                <h5>Disabled State</h5>
                                <div class="m-t-15">
                                    <input type="file" class="dropify" disabled="disabled"/>
                                </div>
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
<!-- /.content -->
@stop

{{-- page level scripts --}}
@section('footer_scripts')
<!--plugin script-->
<script type="text/javascript" src="{{asset('vendors/fileinput/js/fileinput.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/fileinput/js/theme.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/blueimp_file_upload/js/jquery.ui.widget.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/blueimp-tmpl/js/tmpl.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/blueimploadimage/js/load-image.all.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/blueimp-canvas-to-blob/js/canvas-to-blob.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/blueimp-gallery-with-desc/js/jquery.blueimp-gallery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/blueimp_file_upload/js/jquery.iframe-transport.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/blueimp_file_upload/js/jquery.fileupload.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/blueimp_file_upload/js/jquery.fileupload-process.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/blueimp_file_upload/js/jquery.fileupload-image.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/blueimp_file_upload/js/jquery.fileupload-audio.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/blueimp_file_upload/js/jquery.fileupload-video.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/blueimp_file_upload/js/jquery.fileupload-validate.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/blueimp_file_upload/js/jquery.fileupload-ui.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/dropify/js/dropify.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/dropzone/js/dropzone.js')}}"></script>
<!-- end of global scripts-->
<script type="text/javascript" src="{{asset('js/pages/file_upload.js')}}"></script>
<script id="template-upload" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
        <tr class="template-upload fade">
            <td>
                <span class="preview"></span>
            </td>
            <td>
                <p class="name">{%=file.name%}</p>
                <strong class="error text-danger"></strong>
            </td>
            <td>
                <p class="size">Processing...</p>
                <div class="progress active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                    <div class="progress-bar bg-success" style="width:0%;"></div>
                </div>
            </td>
            <td>
                {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start m-t-10" disabled>
                    <i class="fa fa-arrow-up"></i>
                    <span>Start</span>
                </button>
                {% } %} {% if (!i) { %}
                <button class="btn btn-warning cancel m-t-10">
                    <i class="fa fa-close"></i>
                    <span>Cancel</span>
                </button>
                {% } %}
            </td>
        </tr>
        {% } %}



</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
        <tr class="template-download fade">
            <td>
                <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
            </td>
            <td>
                <p class="name">
                    {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl? 'data-gallery': ''%}>{%=file.name%}</a> {% } else { %}
                    <span>{%=file.name%}</span> {% } %}
                </p>
                {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
                {% } %}
            </td>
            <td>
                <span class="size">{%=o.formatFileSize(file.size)%}</span>
            </td>
            <td>
                {% if (file.deleteUrl) { %}
                <button class="btn btn-danger delete m-t-10" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}" {% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}' {% } %}>
                    <i class="fa fa-trash"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" name="delete" value="1" class="toggle"> {% } else { %}
                <button class="btn btn-warning cancel m-t-10">
                    <i class="fa fa-close"></i>
                    <span>Cancel</span>
                </button>
                {% } %}
            </td>
        </tr>
        {% } %}

</script>
@stop
