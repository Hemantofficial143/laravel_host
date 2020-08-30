const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

const vendors = "node_modules/";
const bowervendors = "resources/vendors/";
const resourcesAssets = "resources/";
const srcCss = resourcesAssets + "css/";
const srcJs = resourcesAssets + "js/";

//destination path configuration
const dest = "public/";
const destFonts = dest + "fonts/";
const destCss = dest + "css/";
const destJs = dest + "js/";
const destImg = dest + "img/";
const destVendors = dest + "vendors/";

const paths = {
    jquery: vendors + "jquery/dist/",
    bootstrap: vendors + "bootstrap/dist/",
    fontawesome: vendors + "font-awesome/",
    popperjs: vendors + "popper.js/dist/umd/",
    animate: vendors + "animate.css/",
    autosize: vendors + "jquery-autosize/",
    bootstrap3_wysihtml5: bowervendors + "bootstrap3-wysihtml5-bower/dist/",
    bootstrap_datepicker: vendors + "bootstrap-datepicker/dist/",
    bootstrap_daterangepicker: vendors + "bootstrap-daterangepicker/",
    bootstrap_switch: vendors + "bootstrap-switch/dist/",
    jquery_tagsinput: vendors + "jQuery-Tags-Input/dist/",
    bootstrap_timepicker: vendors + "bootstrap-timepicker/",
    bootstrap_calendar: bowervendors + "bootstrap_calendar/bootstrap_calendar/",
    buttons: vendors + "Buttons/",
    c3: vendors + "c3/",
    chosen: vendors + "chosen-js/",
    countup: vendors + "countup.js/dist/",
    datatables: vendors + "datatables.net/",
    fullcalendar: vendors + "fullcalendar/dist/",
    gmaps: vendors + "gmaps/",
    holder: vendors + "holderjs/",
    inputlimiter: bowervendors + "jquery-inputlimiter/",
    jasny_bootstrap: vendors + "jasny-bootstrap/",
    jquery_uniform: vendors + "jquery.uniform/src/js/",
    bootstrap_colorpicker: vendors + "bootstrap-colorpicker/dist/",
    modal: bowervendors + "ModalWindowEffects/",
    moment: vendors + "moment/",
    noty: vendors + "noty/",
    rangy: vendors + "rangy-1.3/",
    bootstrap_slider: vendors + "bootstrap-slider/dist/",
    select2: vendors + "select2/dist/",
    slimscroll: vendors + "jquery-slimscroll/",
    tinymce: vendors + "tinymce/",
    toastr: vendors + "toastr/build/",
    twitter_bootstrap_wizard: vendors + "twitter-bootstrap-wizard/",
    wysihtml5x: vendors + "wysihtml5x/dist/",
    themify: bowervendors + "themify-icons/",
    validation_engine: bowervendors + "jQuery-Validation-Engine/",
    jquery_validation: vendors + "jquery-validation/dist/",
    ion_rangeslider: vendors + "ion-rangeslider/",
    knob: vendors + "jquery-knob/",
    flotchart: vendors + "flot/",
    flotspline: vendors + "flot-spline/js/",
    flottooltip: vendors + "jquery.flot.tooltip/js/",
    datatablesbs4: vendors + "datatables.net-bs4/",
    datatablesbutton: vendors + "datatables.net-buttons/",
    datatablesbsbuttons: vendors + "datatables.net-buttons-bs/",
    datatablescolreorder: vendors + "datatables.net-colreorder/",
    datatablescolreorderbs: vendors + "datatables.net-colreorder-bs/",
    datatablesresponsive: vendors + "datatables.net-responsive/",
    datatablesresponsivebs4: vendors + "datatables.net-responsive-bs4/",
    datatablesrowreorder: vendors + "datatables.net-rowreorder/",
    datatablesrowreorderbs: vendors + "datatables.net-rowreorder-bs/",
    datatablesscroll: vendors + "datatables.net-scroller/",
    datatablesscrollbs: vendors + "datatables.net-scroller-bs/",
    raphael: vendors + "raphael/",
    bootstrapValidator: bowervendors + "bootstrapValidator/dist/",
    ionicons: bowervendors + "ionicons/",
    fancybox: bowervendors + "fancybox/",
    summernote: vendors + "summernote/dist/",
    sortable: vendors + "sortablejs/",
    chartist: vendors + "chartist/dist/",
    inputmask: vendors + "inputmask/dist/",
    snabbt: vendors + "snabbt.js/",
    hover: bowervendors + "hover/",
    switchery: vendors + "switchery/dist/",
    wow: vendors + "wowjs/",
    radio_css: vendors + "radiobox.css/dist/",
    checkbox_css: vendors + "checkbox.css/dist/",
    datetimepicker: vendors + "datetimepicker/dist/",
    pnotify: vendors + "pnotify/dist/",
    imagehover: vendors + "imagehover.css/css/",
    j_timepicker: vendors + "timepicker/",
    starability: vendors + "starability/",
    starrating: vendors + "bootstrap-star-rating/",
    jqvmap: vendors + "jqvmap/dist/",
    nvd3: vendors + "nvd3/build/",
    sweetalert: vendors + "sweetalert2/dist/",
    rickshaw: vendors + "rickshaw/",
    d3: vendors + "d3/",
    bootstrap_tagsinput: vendors + "bootstrap-tagsinput/dist/",
    jquery_newsTicker: bowervendors + "jquery.newsTicker/js/",
    clockpicker: vendors + "clockpicker/dist/",
    intel_tel: vendors + "intl-tel-input/build/",
    rateYo: vendors + "rateyo/",
    swiper: vendors + "swiper/dist/",
    circliful: bowervendors + "circliful/",
    jqplot: vendors + "jqplot/",
    cropper: vendors + "cropper/dist/",
    fileinput: vendors + "bootstrap-fileinput/",
    jstree: vendors + "jstree/",
    tooltipster: vendors + "tooltipster/dist/",
    tipso: vendors + "tipso/src/",
    datatables_responsive: vendors + "datatables.net-responsive/",
    backstretch: vendors + "jquery-backstretch/",
    flip: vendors + "flip/",
    izitoast: vendors + "izitoast/",
    ihover: bowervendors + "ihover/",
    blueimp_file_upload: vendors + "blueimp-file-upload/",
    blueimpgallery: vendors + "blueimp-gallery/",
    blueimpcanvas: vendors + "blueimp-canvas-to-blob/js/",
    blueimptmpl: vendors + "blueimp-tmpl/",
    imgLoad: vendors + "blueimp-load-image/",
    dropify: vendors + "dropify/dist/",
    dropzone: vendors + "dropzone/dist/",
    unitegallery: bowervendors + "unitegallery/",
    multiselect: vendors + "multiselect/"
};

// Copy fonts straight to public
mix.copy(paths.fontawesome + "fonts", destFonts);

//COPY CSS,JS AND IMAGES TO PUBLIC
mix.copy(srcCss, destCss, false);
mix.copy(resourcesAssets + "img", destImg, false);
mix.copy(srcJs, destJs, false);

//bootstrap
mix.copy(paths.bootstrap + "js/bootstrap.min.js", destJs);

//fontawesome
mix.copy(paths.fontawesome + "css/font-awesome.min.css", destCss);
mix.copy(paths.fontawesome + "fonts", destFonts);

//jquery
mix.copy(paths.jquery + "jquery.min.js", destJs);

//popper.js
mix.copy(paths.popperjs + "popper.min.js", destJs);
//jquery.newsTicker
mix.copy(
    paths.jquery_newsTicker + "newsTicker.js",
    destVendors + "jquery_newsTicker/js"
);

// animate
mix.copy(paths.animate + "animate.min.css", destVendors + "animate/css");

// animate
mix.copy(
    paths.autosize + "jquery.autosize.min.js",
    destVendors + "autosize/js"
);

// bootstrap-datepicker
mix.copy(
    paths.bootstrap_datepicker + "js/bootstrap-datepicker.min.js",
    destVendors + "datepicker/js"
);
mix.copy(
    paths.bootstrap_datepicker + "css/bootstrap-datepicker.min.css",
    destVendors + "datepicker/css"
);
mix.copy(
    paths.bootstrap_datepicker + "css/bootstrap-datepicker3.css",
    destVendors + "datepicker/css"
);

//rickshaw
mix.copy(paths.rickshaw + "rickshaw.min.css", destVendors + "rickshaw/css");
mix.copy(paths.rickshaw + "rickshaw.min.js", destVendors + "rickshaw/js");

// daterange picker
mix.copy(
    paths.bootstrap_daterangepicker + "daterangepicker.js",
    destVendors + "daterangepicker/js"
);
mix.copy(
    paths.bootstrap_daterangepicker + "daterangepicker.css",
    destVendors + "daterangepicker/css"
);

// bootstrap switch
mix.copy(
    paths.bootstrap_switch + "css/bootstrap3/bootstrap-switch.min.css",
    destVendors + "bootstrap-switch/css"
);
mix.copy(
    paths.bootstrap_switch + "js/bootstrap-switch.min.js",
    destVendors + "bootstrap-switch/js"
);

// bootstrap tagsinput
mix.copy(
    paths.jquery_tagsinput + "jquery.tagsinput.min.css",
    destVendors + "jquery-tagsinput/css"
);
mix.copy(
    paths.jquery_tagsinput + "jquery.tagsinput.min.js",
    destVendors + "jquery-tagsinput/js"
);

// bootstrap-timepicker
mix.copy(
    paths.bootstrap_timepicker + "css/bootstrap-timepicker.min.css",
    destVendors + "bootstrap-timepicker/css"
);
mix.copy(
    paths.bootstrap_timepicker + "js/bootstrap-timepicker.min.js",
    destVendors + "bootstrap-timepicker/js"
);

//sweetalert
mix.copy(
    paths.sweetalert + "sweetalert2.min.css",
    destVendors + "sweetalert/css"
);
mix.copy(
    paths.sweetalert + "sweetalert2.min.js",
    destVendors + "sweetalert/js"
);

// Buttons
mix.copy(paths.buttons + "css/buttons.min.css", destVendors + "Buttons/css");
mix.copy(paths.buttons + "showcase/js/scrollto.js", destVendors + "Buttons/js");
mix.copy(paths.buttons + "js/buttons.js", destVendors + "Buttons/js");

//c3 charts
mix.copy(paths.c3 + "c3.min.css", destVendors + "c3/css");
mix.copy(paths.c3 + "c3.min.js", destVendors + "c3/js");

// pnotify
mix.copy(paths.pnotify + "pnotify.css", destVendors + "pnotify/css");
mix.copy(
    paths.pnotify + "pnotify.brighttheme.css",
    destVendors + "pnotify/css"
);
mix.copy(paths.pnotify + "pnotify.buttons.css", destVendors + "pnotify/css");
mix.copy(paths.pnotify + "pnotify.mobile.css", destVendors + "pnotify/css");
mix.copy(paths.pnotify + "pnotify.history.css", destVendors + "pnotify/css");

// pnotify js
mix.copy(paths.pnotify + "pnotify.js", destVendors + "pnotify/js");
mix.copy(paths.pnotify + "pnotify.animate.js", destVendors + "pnotify/js");
mix.copy(paths.pnotify + "pnotify.buttons.js", destVendors + "pnotify/js");
mix.copy(paths.pnotify + "pnotify.confirm.js", destVendors + "pnotify/js");
mix.copy(paths.pnotify + "pnotify.nonblock.js", destVendors + "pnotify/js");
mix.copy(paths.pnotify + "pnotify.mobile.js", destVendors + "pnotify/js");
mix.copy(paths.pnotify + "pnotify.desktop.js", destVendors + "pnotify/js");
mix.copy(paths.pnotify + "pnotify.history.js", destVendors + "pnotify/js");
mix.copy(paths.pnotify + "pnotify.callbacks.js", destVendors + "pnotify/js");

//imagehover
mix.copy(
    paths.imagehover + "imagehover.min.css",
    destVendors + "imagehover/css"
);

//chosen
mix.copy(paths.chosen + "chosen.jquery.min.js", destVendors + "chosen/js");
mix.copy(paths.chosen + "chosen.min.css", destVendors + "chosen/css");
mix.copy(paths.chosen + "chosen-sprite.png", destVendors + "chosen/css");
mix.copy(paths.chosen + "chosen-sprite@2x.png", destVendors + "chosen/css");

// countUp js
mix.copy(paths.countup + "countUp.min.js", destVendors + "countUp.js/js");

// datatables
mix.copy(
    paths.datatables + "js/jquery.dataTables.js",
    destVendors + "datatables/js"
);
mix.copy(
    paths.datatablesbs4 + "js/dataTables.bootstrap4.min.js",
    destVendors + "datatables/js"
);
mix.copy(
    paths.datatablesbs4 + "css/dataTables.bootstrap4.min.css",
    destVendors + "datatables/css"
);
mix.copy(
    paths.datatablesbutton + "js/buttons.print.min.js",
    destVendors + "datatables/js"
);
mix.copy(
    paths.datatablesbutton + "js/dataTables.buttons.min.js",
    destVendors + "datatables/js"
);
mix.copy(
    paths.datatablesbsbuttons + "css/buttons.bootstrap.css",
    destVendors + "datatables/css"
);
mix.copy(
    paths.datatablesbsbuttons + "js/buttons.bootstrap.min.js",
    destVendors + "datatables/js"
);
mix.copy(
    paths.datatablescolreorder + "js/dataTables.colReorder.js",
    destVendors + "datatables/js"
);
mix.copy(
    paths.datatablescolreorderbs + "css/colReorder.bootstrap.min.css",
    destVendors + "datatables/css"
);
mix.copy(
    paths.datatablesresponsive + "js/dataTables.responsive.min.js",
    destVendors + "datatables/js"
);

// datatables responsive bs4
mix.copy(
    paths.datatablesresponsivebs4 + "js/responsive.bootstrap4.min.js",
    destVendors + "datatables/js"
);

mix.copy(
    paths.datatablesresponsivebs4 + "css/responsive.bootstrap4.min.css",
    destVendors + "datatables/css"
);

mix.copy(
    paths.datatablesrowreorder + "js/dataTables.rowReorder.min.js",
    destVendors + "datatables/js"
);
mix.copy(
    paths.datatablesbutton + "js/buttons.html5.min.js",
    destVendors + "datatables/js"
);
mix.copy(
    paths.datatablesbutton + "js/buttons.colVis.min.js",
    destVendors + "datatables/js"
);
mix.copy(
    paths.datatablesbutton + "js/buttons.print.min.js",
    destVendors + "datatables/js"
);
mix.copy(
    paths.datatablesrowreorderbs + "css/rowReorder.bootstrap.css",
    destVendors + "datatables/css"
);
mix.copy(
    paths.datatablesscroll + "js/dataTables.scroller.min.js",
    destVendors + "datatables/js"
);
mix.copy(
    paths.datatablesscrollbs + "css/scroller.bootstrap.min.css",
    destVendors + "datatables/css"
);

// fullcalendar
mix.copy(
    paths.fullcalendar + "fullcalendar.min.css",
    destVendors + "fullcalendar/css"
);
mix.copy(
    paths.fullcalendar + "fullcalendar.print.css",
    destVendors + "fullcalendar/css"
);
mix.copy(
    paths.fullcalendar + "fullcalendar.min.js",
    destVendors + "fullcalendar/js"
);

// gmaps
mix.copy(paths.gmaps + "examples/examples.css", destVendors + "gmaps/css");
mix.copy(paths.gmaps + "gmaps.min.js", destVendors + "gmaps/js");

// handlebars
// mix.copy(paths.handlebars + 'handlebars.js', destVendors + 'handlebars/js');

// holderjs
mix.copy(paths.holder + "holder.js", destVendors + "holderjs/js");

//jasny-bootstrap
mix.copy(
    paths.jasny_bootstrap + "dist/css/jasny-bootstrap.min.css",
    destVendors + "jasny-bootstrap/css"
);
mix.copy(
    paths.jasny_bootstrap + "dist/js/jasny-bootstrap.min.js",
    destVendors + "jasny-bootstrap/js"
);
mix.copy(
    paths.jasny_bootstrap + "js/inputmask.js",
    destVendors + "jasny-bootstrap/js"
);

// bootstrap color picker
mix.copy(
    paths.bootstrap_colorpicker + "css/bootstrap-colorpicker.min.css",
    destVendors + "bootstrap-colorpicker/css"
);
mix.copy(
    paths.bootstrap_colorpicker + "js/bootstrap-colorpicker.min.js",
    destVendors + "bootstrap-colorpicker/js"
);
mix.copy(
    paths.bootstrap_colorpicker + "img/bootstrap-colorpicker",
    destCss + "lib/colorpicker/img"
);

// advanced modals
mix.copy(paths.modal + "css", destVendors + "modal/css");
// mix.copy(srcCss + 'pages/advmodals.css',  destCss + 'pages');
mix.copy(paths.modal + "js/", destVendors + "modal/js");

// moment
mix.copy(paths.moment + "min/moment.min.js", destVendors + "moment/js");

// noty
mix.copy(
    paths.noty + "js/noty/packaged/jquery.noty.packaged.min.js",
    destVendors + "noty/js"
);

// seiyria-bootstrap-slider
mix.copy(
    paths.bootstrap_slider + "css/bootstrap-slider.min.css",
    destVendors + "bootstrap-slider/css"
);
mix.copy(
    paths.bootstrap_slider + "bootstrap-slider.min.js",
    destVendors + "bootstrap-slider/js"
);

//select2
mix.copy(paths.select2 + "css/select2.min.css", destVendors + "select2/css");
mix.copy(paths.select2 + "js/select2.js", destVendors + "select2/js");

// tinymce
mix.copy(paths.tinymce + "tinymce.min.js", destVendors + "tinymce/js");
mix.copy(paths.tinymce + "jquery.tinymce.min.js", destVendors + "tinymce/js");
mix.copy(paths.tinymce + "plugins", destVendors + "tinymce/js/plugins");
mix.copy(paths.tinymce + "themes", destVendors + "tinymce/js/themes");
mix.copy(paths.tinymce + "skins", destVendors + "tinymce/js/skins");

// toastr
mix.copy(paths.toastr + "toastr.min.css", destVendors + "toastr/css");
mix.copy(paths.toastr + "toastr.min.js", destVendors + "toastr/js");

//twitter bootstrapWizard
mix.copy(
    paths.twitter_bootstrap_wizard + "jquery.bootstrap.wizard.min.js",
    destVendors + "twitter-bootstrap-wizard/js"
);

// bootstrap3-wysihtml5-bower
mix.copy(
    paths.bootstrap3_wysihtml5 + "bootstrap3-wysihtml5.min.css",
    destVendors + "bootstrap3-wysihtml5-bower/css"
);
mix.copy(
    paths.bootstrap3_wysihtml5 + "bootstrap3-wysihtml5.all.min.js",
    destVendors + "bootstrap3-wysihtml5-bower/js"
);
mix.copy(
    paths.bootstrap3_wysihtml5 + "bootstrap3-wysihtml5.min.js",
    destVendors + "bootstrap3-wysihtml5-bower/js"
);

// bootstrap_calendar
mix.copy(
    paths.bootstrap_calendar + "css/bootstrap_calendar.css",
    destVendors + "bootstrap_calendar/css"
);
mix.copy(
    paths.bootstrap_calendar + "js/bootstrap_calendar.min.js",
    destVendors + "bootstrap_calendar/js"
);

//inputlimiter
mix.copy(
    paths.inputlimiter + "jquery.inputlimiter.css",
    destVendors + "inputlimiter/css"
);
mix.copy(
    paths.inputlimiter + "jquery.inputlimiter.js",
    destVendors + "inputlimiter/js"
);

//jquery.uniform
mix.copy(
    paths.jquery_uniform + "jquery.uniform.js",
    destVendors + "jquery.uniform/js"
);

//slimscroll
mix.copy(
    paths.slimscroll + "jquery.slimscroll.min.js",
    destVendors + "slimscroll/js"
);

//themify icons
mix.copy(paths.themify + "css/themify-icons.css", destVendors + "themify/css");

mix.copy(paths.themify + "fonts/themify.woff", destVendors + "themify/fonts");
mix.copy(paths.themify + "fonts/themify.ttf", destVendors + "themify/fonts");

//validation engine
mix.copy(
    paths.validation_engine + "css/validationEngine.jquery.css",
    destVendors + "jquery-validation-engine/css"
);
mix.copy(
    paths.validation_engine + "js/jquery.validationEngine.js",
    destVendors + "jquery-validation-engine/js"
);
mix.copy(
    paths.validation_engine + "js/languages/jquery.validationEngine-en.js",
    destVendors + "jquery-validation-engine/js"
);

//jquery validation
mix.copy(
    paths.jquery_validation + "jquery.validate.js",
    destVendors + "jquery-validation/js"
);

//ion rangeslider
mix.copy(
    paths.ion_rangeslider + "css/ion.rangeSlider.css",
    destVendors + "ion-rangeslider/css"
);
mix.copy(
    paths.ion_rangeslider + "css/ion.rangeSlider.skinFlat.css",
    destVendors + "ion-rangeslider/css"
);
mix.copy(
    paths.ion_rangeslider + "js/ion.rangeSlider.min.js",
    destVendors + "ion-rangeslider/js"
);
mix.copy(
    paths.ion_rangeslider + "img/sprite-skin-flat.png",
    destVendors + "ion-rangeslider/img"
);

// knob jquery
mix.copy(paths.knob + "js/jquery.knob.js", destVendors + "Knob/js");

// flotchart
mix.copy(
    paths.flotchart + "examples/examples.css",
    destVendors + "flotchart/css"
);
mix.copy(paths.flotchart + "jquery.flot.js", destVendors + "flotchart/js");
mix.copy(
    paths.flotchart + "jquery.flot.threshold.js",
    destVendors + "flotchart/js"
);
mix.copy(
    paths.flotchart + "jquery.flot.stack.js",
    destVendors + "flotchart/js"
);
mix.copy(paths.flotchart + "jquery.flot.time.js", destVendors + "flotchart/js");
mix.copy(
    paths.flotchart + "jquery.flot.resize.js",
    destVendors + "flotchart/js"
);
mix.copy(
    paths.flotchart + "jquery.flot.categories.js",
    destVendors + "flotchart/js"
);
mix.copy(paths.flotchart + "jquery.flot.pie.js", destVendors + "flotchart/js");
mix.copy(
    paths.flottooltip + "jquery.flot.tooltip.min.js",
    destVendors + "flot.tooltip/js"
);
mix.copy(
    paths.flotspline + "jquery.flot.spline.min.js",
    destVendors + "flotspline/js"
);

// raphael
mix.copy(paths.raphael + "raphael.min.js", destVendors + "raphael/js");

// bootstrapvalidator
mix.copy(
    paths.bootstrapValidator + "css/bootstrapValidator.min.css",
    destVendors + "bootstrapvalidator/css"
);
mix.copy(
    paths.bootstrapValidator + "js/bootstrapValidator.min.js",
    destVendors + "bootstrapvalidator/js"
);

// ionicons
mix.copy(paths.ionicons + "css/ionicons.min.css", destVendors + "ionicons/css");
mix.copy(paths.ionicons + "fonts", destVendors + "ionicons/fonts");

// fancybox
mix.copy(
    paths.fancybox + "lib/jquery.mousewheel.pack.js",
    destVendors + "fancybox/js"
);
mix.copy(
    paths.fancybox + "source/jquery.fancybox.js",
    destVendors + "fancybox/js"
);
mix.copy(
    paths.fancybox + "source/jquery.fancybox.pack.js",
    destVendors + "fancybox/js"
);
mix.copy(
    paths.fancybox + "source/helpers/jquery.fancybox-buttons.js",
    destVendors + "fancybox/js"
);
mix.copy(
    paths.fancybox + "source/helpers/jquery.fancybox-thumbs.js",
    destVendors + "fancybox/js"
);
mix.copy(
    paths.fancybox + "source/helpers/jquery.fancybox-media.js",
    destVendors + "fancybox/js"
);
mix.copy(
    paths.fancybox + "source/helpers/jquery.fancybox-thumbs.css",
    destVendors + "fancybox/css"
);
mix.copy(
    paths.fancybox + "source/helpers/jquery.fancybox-buttons.css",
    destVendors + "fancybox/css"
);
mix.copy(
    paths.fancybox + "source/jquery.fancybox.css",
    destVendors + "fancybox/css"
);
mix.copy(
    paths.fancybox + "source/fancybox_overlay.png",
    destVendors + "fancybox/css"
);
mix.copy(
    paths.fancybox + "source/fancybox_loading.gif",
    destVendors + "fancybox/css"
);
mix.copy(
    paths.fancybox + "source/fancybox_sprite.png",
    destVendors + "fancybox/css"
);
mix.copy(
    paths.fancybox + "source/fancybox_sprite@2x.png",
    destVendors + "fancybox/css"
);
mix.copy(
    paths.fancybox + "source/fancybox_loading@2x.gif",
    destVendors + "fancybox/css"
);
mix.copy(paths.fancybox + "source/blank.gif", destVendors + "fancybox/css");

// bootstrapvalidator
mix.copy(paths.summernote + "summernote.css", destVendors + "summernote/css");
mix.copy(paths.summernote + "summernote.js", destVendors + "summernote/js");
mix.copy(paths.summernote + "font", destVendors + "summernote/css/font");

//Sortable
mix.copy(paths.sortable + "Sortable.js", destVendors + "sortable/js");

//chartist
mix.copy(paths.chartist + "chartist.min.css", destVendors + "chartist/css");

//Sortable
mix.copy(paths.chartist + "chartist.min.js", destVendors + "chartist/js");

//inputmask
mix.copy(
    paths.inputmask + "inputmask/inputmask.js",
    destVendors + "inputmask/js"
);
mix.copy(
    paths.inputmask + "inputmask/jquery.inputmask.js",
    destVendors + "inputmask/js"
);
mix.copy(
    paths.inputmask + "inputmask/inputmask.extensions.js",
    destVendors + "inputmask/js"
);
mix.copy(
    paths.inputmask + "inputmask/inputmask.phone.extensions.js",
    destVendors + "inputmask/js"
);
mix.copy(
    paths.inputmask + "inputmask/inputmask.date.extensions.js",
    destVendors + "inputmask/js"
);
mix.copy(
    paths.inputmask + "jquery.inputmask.bundle.js",
    destVendors + "inputmask/js"
);

//snabbt
mix.copy(paths.snabbt + "snabbt.min.js", destVendors + "snabbt/js");
//hover
mix.copy(paths.hover + "css/hover-min.css", destVendors + "hover/css");

//switchery
mix.copy(paths.switchery + "switchery.min.css", destVendors + "switchery/css");
mix.copy(paths.switchery + "switchery.min.js", destVendors + "switchery/js");

//wow
mix.copy(paths.wow + "dist/wow.min.js", destVendors + "wow/js");
mix.copy(paths.wow + "css/libs/animate.css", destVendors + "wow/css");

//wow
mix.copy(
    paths.radio_css + "css/radiobox.min.css",
    destVendors + "radio_css/css"
);

//wow
mix.copy(
    paths.checkbox_css + "css/checkbox.min.css",
    destVendors + "checkbox_css/css"
);

//datetimepicker
mix.copy(
    paths.datetimepicker + "DateTimePicker.min.js",
    destVendors + "datetimepicker/js"
);
mix.copy(
    paths.datetimepicker + "DateTimePicker.min.css",
    destVendors + "datetimepicker/css"
);

//jt timepicker
mix.copy(
    paths.j_timepicker + "jquery.timepicker.min.js",
    destVendors + "j_timepicker/js"
);
mix.copy(
    paths.j_timepicker + "jquery.timepicker.css",
    destVendors + "j_timepicker/css"
);

//starability
mix.copy(
    paths.starability + "starability-css/starability-all.css",
    destVendors + "starability/css"
);
// mix.copy(paths.starability + 'starability-images/icons.png', destVendors + 'starability/starability-images');
// mix.copy(paths.starability + 'starability-images/icons@2x.png', destVendors + 'starability/starability-images');
// mix.copy(paths.starability + 'starability-images/icons-checkmark.png', destVendors + 'starability/starability-images');
// mix.copy(paths.starability + 'starability-images/icons-checkmark@2x.png', destVendors + 'starability/starability-images');

//bootstrap star rating
mix.copy(
    paths.starrating + "css/star-rating.min.css",
    destVendors + "bootstraprating/css"
);
mix.copy(
    paths.starrating + "js/star-rating.min.js",
    destVendors + "bootstraprating/js"
);
mix.copy(
    paths.starrating + "img/loading.gif",
    destVendors + "bootstraprating/img"
);

//nvd3
mix.copy(paths.nvd3 + "nv.d3.js", destVendors + "nvd3/js");
mix.copy(paths.nvd3 + "nv.d3.css", destVendors + "nvd3/css");

//d3
mix.copy(paths.d3 + "d3.min.js", destVendors + "d3/js");

//jqvmaps
mix.copy(paths.jqvmap + "jqvmap.min.css", destVendors + "jqvmap/css");
mix.copy(paths.jqvmap + "jquery.vmap.min.js", destVendors + "jqvmap/js");
mix.copy(paths.jqvmap + "maps/jquery.vmap.world.js", destVendors + "jqvmap/js");
mix.copy(
    paths.jqvmap + "maps/jquery.vmap.canada.js",
    destVendors + "jqvmap/js"
);
mix.copy(paths.jqvmap + "maps/jquery.vmap.usa.js", destVendors + "jqvmap/js");
mix.copy(
    paths.jqvmap + "maps/jquery.vmap.europe.js",
    destVendors + "jqvmap/js"
);
mix.copy(
    paths.jqvmap + "maps/continents/jquery.vmap.australia.js",
    destVendors + "jqvmap/js"
);
mix.copy(
    paths.jqvmap + "maps/jquery.vmap.russia.js",
    destVendors + "jqvmap/js"
);

//bootstrap_tagsinput
mix.copy(
    paths.bootstrap_tagsinput + "bootstrap-tagsinput.css",
    destVendors + "bootstrap-tagsinput/css"
);
mix.copy(
    paths.bootstrap_tagsinput + "bootstrap-tagsinput.js",
    destVendors + "bootstrap-tagsinput/js"
);

//clockpicker
mix.copy(
    paths.clockpicker + "jquery-clockpicker.css",
    destVendors + "clockpicker/css"
);
mix.copy(
    paths.clockpicker + "jquery-clockpicker.min.js",
    destVendors + "clockpicker/js"
);

//intl tel input
mix.copy(
    paths.intel_tel + "css/intlTelInput.css",
    destVendors + "intl-tel-input/css"
);
mix.copy(
    paths.intel_tel + "js/intlTelInput.js",
    destVendors + "intl-tel-input/js"
);
mix.copy(paths.intel_tel + "js/utils.js", destVendors + "intl-tel-input/js");

mix.copy(paths.intel_tel + "img/flags.png", destVendors + "intl-tel-input/img");
mix.copy(
    paths.intel_tel + "img/flags@2x.png",
    destVendors + "intl-tel-input/img"
);

// rateyo
mix.copy(paths.rateYo + "src/jquery.rateyo.css", destVendors + "rateyo/css");
mix.copy(paths.rateYo + "src/jquery.rateyo.js", destVendors + "rateyo/js");

// swiper
mix.copy(paths.swiper + "css/swiper.min.css", destVendors + "swiper/css");
mix.copy(paths.swiper + "js/swiper.min.js", destVendors + "swiper/js");

// circliful
mix.copy(
    paths.circliful + "css/jquery.circliful.css",
    destVendors + "circliful/css"
);
mix.copy(
    paths.circliful + "js/jquery.circliful.min.js",
    destVendors + "circliful/js"
);

//jqplot

mix.copy(paths.jqplot + "jquery.jqplot.min.css", destVendors + "jqplot/css");
mix.copy(paths.jqplot + "jquery.jqplot.min.js", destVendors + "jqplot/js");
mix.copy(paths.jqplot + "jqplot.highlighter.js", destVendors + "jqplot/js");

//cropper
mix.copy(paths.cropper + "cropper.min.js", destVendors + "cropper/js");
mix.copy(paths.cropper + "cropper.min.css", destVendors + "cropper/css");

//fileinput
mix.copy(
    paths.fileinput + "css/fileinput.min.css",
    destVendors + "fileinput/css"
);
mix.copy(paths.fileinput + "js/fileinput.min.js", destVendors + "fileinput/js");
mix.copy(paths.fileinput + "themes/fa/theme.js", destVendors + "fileinput/js");
mix.copy(paths.fileinput + "img/loading.gif", destVendors + "fileinput/img");

// jstree
mix.copy(
    paths.jstree + "dist/themes/default/throbber.gif",
    destVendors + "jstree/css"
);
mix.copy(
    paths.jstree + "dist/themes/default/32px.png",
    destVendors + "jstree/css"
);
mix.copy(
    paths.jstree + "dist/themes/default/style.min.css",
    destVendors + "jstree/css"
);
mix.copy(paths.jstree + "dist/jstree.min.js", destVendors + "jstree/js");

// tooltipster
mix.copy(
    paths.tooltipster + "css/plugins/tooltipster/sideTip/themes",
    destVendors + "tooltipster/css"
);
mix.copy(
    paths.tooltipster + "css/tooltipster.bundle.min.css",
    destVendors + "tooltipster/css"
);
mix.copy(
    paths.tooltipster + "js/tooltipster.bundle.min.js",
    destVendors + "tooltipster/js"
);

// datatables responsive
// mix.copy(paths.datatables_responsive + 'css/responsive.dataTables.scss', destVendors + 'datatables/css');
mix.copy(
    paths.datatables_responsive + "js/dataTables.responsive.js",
    destVendors + "datatables/js"
);

// tipso
mix.copy(paths.tipso + "tipso.min.css", destVendors + "tipso/css");
mix.copy(paths.tipso + "tipso.min.js", destVendors + "tipso/js");

// jquery.backstretch
mix.copy(
    paths.backstretch + "jquery.backstretch.js",
    destVendors + "jquery.backstretch/js"
);

//flip
mix.copy(paths.flip + "dist/jquery.flip.min.js", destVendors + "flip/js");

// izitoast
mix.copy(
    paths.izitoast + "dist/css/iziToast.min.css",
    destVendors + "izitoast/css"
);
mix.copy(
    paths.izitoast + "dist/js/iziToast.min.js",
    destVendors + "izitoast/js"
);

//ihover
mix.copy(paths.ihover + "src/ihover.min.css", destVendors + "ihover/css");

// blueimp-file-upload
mix.copy(
    paths.blueimp_file_upload + "css/jquery.fileupload.css",
    destVendors + "blueimp_file_upload/css"
);
mix.copy(
    paths.blueimp_file_upload + "css/jquery.fileupload-ui.css",
    destVendors + "blueimp_file_upload/css"
);
mix.copy(
    paths.blueimp_file_upload + "css/jquery.fileupload-noscript.css",
    destVendors + "blueimp_file_upload/css"
);
mix.copy(
    paths.blueimp_file_upload + "css/jquery.fileupload-ui-noscript.css",
    destVendors + "blueimp_file_upload/css"
);
mix.copy(
    paths.blueimp_file_upload + "js/jquery.fileupload.js",
    destVendors + "blueimp_file_upload/js"
);
mix.copy(
    paths.blueimp_file_upload + "js/jquery.fileupload-audio.js",
    destVendors + "blueimp_file_upload/js"
);
mix.copy(
    paths.blueimp_file_upload + "js/jquery.fileupload-image.js",
    destVendors + "blueimp_file_upload/js"
);
mix.copy(
    paths.blueimp_file_upload + "js/jquery.fileupload-process.js",
    destVendors + "blueimp_file_upload/js"
);
mix.copy(
    paths.blueimp_file_upload + "js/jquery.fileupload-ui.js",
    destVendors + "blueimp_file_upload/js"
);
mix.copy(
    paths.blueimp_file_upload + "js/jquery.fileupload-validate.js",
    destVendors + "blueimp_file_upload/js"
);
mix.copy(
    paths.blueimp_file_upload + "js/jquery.fileupload-video.js",
    destVendors + "blueimp_file_upload/js"
);
mix.copy(
    paths.blueimp_file_upload + "js/jquery.iframe-transport.js",
    destVendors + "blueimp_file_upload/js"
);
mix.copy(
    paths.blueimp_file_upload + "js/vendor/jquery.ui.widget.js",
    destVendors + "blueimp_file_upload/js"
);
mix.copy(
    paths.blueimp_file_upload + "img/loading.gif",
    destVendors + "blueimp_file_upload/img"
);
mix.copy(
    paths.blueimp_file_upload + "img/progressbar.gif",
    destVendors + "blueimp_file_upload/img"
);

// blueimp-tmpl
mix.copy(paths.blueimptmpl + "js/tmpl.js", destVendors + "blueimp-tmpl/js");

// blueimp-load-image
mix.copy(
    paths.imgLoad + "js/load-image.all.min.js",
    destVendors + "blueimploadimage/js"
);
mix.copy(
    paths.imgLoad + "js/load-image.js",
    destVendors + "blueimploadimage/js"
);

// blueimp-canvas-to-blob
mix.copy(
    paths.blueimpcanvas + "canvas-to-blob.js",
    destVendors + "blueimp-canvas-to-blob/js"
);

// blueimp-gallery-with-desc
mix.copy(
    paths.blueimpgallery + "css/blueimp-gallery.min.css",
    destVendors + "blueimp-gallery-with-desc/css"
);
mix.copy(
    paths.blueimpgallery + "js/jquery.blueimp-gallery.min.js",
    destVendors + "blueimp-gallery-with-desc/js"
);

//dropify
mix.copy(paths.dropify + "css/dropify.css", destVendors + "dropify/css");
mix.copy(paths.dropify + "js/dropify.js", destVendors + "dropify/js");
mix.copy(paths.dropify + "fonts", destVendors + "dropify/fonts");

//dropify
mix.copy(paths.dropzone + "min/dropzone.min.css", destVendors + "dropzone/css");
mix.copy(paths.dropzone + "dropzone.js", destVendors + "dropzone/js");

// unitegallery
mix.copy(paths.unitegallery + "dist", destVendors + "unitegallery/");

// multiselect
mix.copy(
    paths.multiselect + "css/multi-select.css",
    destVendors + "multiselect/css"
);
mix.copy(paths.multiselect + "img/switch.png", destVendors + "multiselect/img");
mix.copy(
    paths.multiselect + "js/jquery.multi-select.js",
    destVendors + "multiselect/js"
);

/*
 browserSync for auto-reloading browser on changes
 */
mix.browserSync("admire-laravel58.test");

mix.sass(resourcesAssets + "sass/admire.scss", destCss + "custom.css").options({
    processCssUrls: false
});
mix.sass(
    resourcesAssets + "sass/bootstrap/app.scss",
    destCss + "bootstrap.min.css"
).options({
    processCssUrls: false
});
mix.sass(
    resourcesAssets + "sass/sweetalert/sweetalert2.scss",
    destCss + "pages/sweet_alert.css"
).options({
    processCssUrls: false
});

mix.styles("pages/sweet_alert.css", destCss + "pages/sweet_alert.css");

//custom js
mix.copy(srcJs + "custom.js", destJs);
mix.styles(
    [dest + "css/bootstrap.min.css", dest + "css/font-awesome.min.css"],
    destCss + "components.css"
);

mix.scripts(
    [
        dest + "js/jquery.min.js",
        dest + "js/popper.min.js",
        dest + "js/bootstrap.min.js",
        destVendors + "slimscroll/js/jquery.slimscroll.min.js"
    ],
    destJs + "components.js"
);
