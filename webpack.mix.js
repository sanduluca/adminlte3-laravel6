const mix = require('laravel-mix');

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

mix.react('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.copy('./node_modules/admin-lte/dist/js/adminlte.min.js', 'public/js/adminlte.min.js');
mix.copy('./node_modules/admin-lte/dist/css/adminlte.min.css', 'public/css/adminlte.min.css');
mix.copy('./node_modules/admin-lte/dist/js/demo.js', 'public/js/demo.js');

mix.copyDirectory('./node_modules/admin-lte/dist/js/pages', 'public/js');
mix.copyDirectory('./node_modules/admin-lte/dist/img', 'public/img');
// .scripts([
// '/public/js/dashboard.js',
// '/public/js/demo.js',
// ], 'public/js/all.js')

//bootstrap
mix.copyDirectory('./node_modules/bootstrap/dist', 'public/plugins/bootstrap');

//bootstrap-colorpicker
mix.copyDirectory('./node_modules/bootstrap-colorpicker/dist', 'public/plugins/bootstrap-colorpicker');

//bootstrap-slider
mix.copyDirectory('./node_modules/bootstrap-slider/dist', 'public/plugins/bootstrap-slider');

//bootstrap-switch
mix.copyDirectory('./node_modules/bootstrap-switch/dist', 'public/plugins/bootstrap-switch');

//bootstrap4-duallistbox
mix.copyDirectory('./node_modules/bootstrap4-duallistbox/dist', 'public/plugins/bootstrap4-duallistbox');

//bs-custom-file-input
mix.copyDirectory('./node_modules/bs-custom-file-input/dist', 'public/plugins/bs-custom-file-input');

// chart.js
mix.copyDirectory('./node_modules/chart.js/dist', 'public/plugins/chart.js');

//datatables
mix.copyDirectory('./node_modules/datatables.net/js', 'public/plugins/datatables');

// datatables-autofill
mix.copyDirectory('./node_modules/datatables.net-autofill-bs4/js', 'public/plugins/datatables-autofill/js');
mix.copyDirectory('./node_modules/datatables.net-autofill-bs4/css', 'public/plugins/datatables-autofill/css');
mix.copyDirectory('./node_modules/datatables.net-autofill/js', 'public/plugins/datatables-autofill/js');

//datatables-bs4
mix.copyDirectory('./node_modules/datatables.net-bs4/js', 'public/plugins/datatables-bs4/js');
mix.copyDirectory('./node_modules/datatables.net-bs4/css', 'public/plugins/datatables-bs4/css');

//datatables-buttons
mix.copyDirectory('./node_modules/datatables.net-buttons-bs4/js', 'public/plugins/datatables-buttons/js');
mix.copyDirectory('./node_modules/datatables.net-buttons-bs4/css', 'public/plugins/datatables-buttons/css');
mix.copyDirectory('./node_modules/datatables.net-buttons/js', 'public/plugins/datatables-buttons/js');

//datatables-colreorder
mix.copyDirectory('./node_modules/datatables.net-colreorder-bs4/js', 'public/plugins/datatables-colreorder/js');
mix.copyDirectory('./node_modules/datatables.net-colreorder-bs4/css', 'public/plugins/datatables-colreorder/css');
mix.copyDirectory('./node_modules/datatables.net-colreorder/js', 'public/plugins/datatables-colreorder/js');

//datatables-fixedcolumns
mix.copyDirectory('./node_modules/datatables.net-fixedcolumns-bs4/js', 'public/plugins/datatables-fixedcolumns/js');
mix.copyDirectory('./node_modules/datatables.net-fixedcolumns-bs4/css', 'public/plugins/datatables-fixedcolumns/css');
mix.copyDirectory('./node_modules/datatables.net-fixedcolumns/js', 'public/plugins/datatables-fixedcolumns/js');

//datatables-fixedheader
mix.copyDirectory('./node_modules/datatables.net-fixedheader-bs4/js', 'public/plugins/datatables-fixedheader/js');
mix.copyDirectory('./node_modules/datatables.net-fixedheader-bs4/css', 'public/plugins/datatables-fixedheader/css');
mix.copyDirectory('./node_modules/datatables.net-fixedheader/js', 'public/plugins/datatables-fixedheader/js');

//datatables-keytable
mix.copyDirectory('./node_modules/datatables.net-keytable-bs4/js', 'public/plugins/datatables-keytable/js');
mix.copyDirectory('./node_modules/datatables.net-keytable-bs4/css', 'public/plugins/datatables-keytable/css');
mix.copyDirectory('./node_modules/datatables.net-keytable/js', 'public/plugins/datatables-keytable/js');

//datatables-responsive
mix.copyDirectory('./node_modules/datatables.net-responsive-bs4/js', 'public/plugins/datatables-responsive/js');
mix.copyDirectory('./node_modules/datatables.net-responsive-bs4/css', 'public/plugins/datatables-responsive/css');
mix.copyDirectory('./node_modules/datatables.net-responsive/js', 'public/plugins/datatables-responsive/js');

//datatables-rowgroup
mix.copyDirectory('./node_modules/datatables.net-rowgroup-bs4/js', 'public/plugins/datatables-rowgroup/js');
mix.copyDirectory('./node_modules/datatables.net-rowgroup-bs4/css', 'public/plugins/datatables-rowgroup/css');
mix.copyDirectory('./node_modules/datatables.net-rowgroup/js', 'public/plugins/datatables-rowgroup/js');

//datatables-rowreorder
mix.copyDirectory('./node_modules/datatables.net-rowreorder-bs4/js', 'public/plugins/datatables-rowreorder/js');
mix.copyDirectory('./node_modules/datatables.net-rowreorder-bs4/css', 'public/plugins/datatables-rowreorder/css');
mix.copyDirectory('./node_modules/datatables.net-rowreorder/js', 'public/plugins/datatables-rowreorder/js');

//datatables-scroller
mix.copyDirectory('./node_modules/datatables.net-scroller-bs4/js', 'public/plugins/datatables-scroller/js');
mix.copyDirectory('./node_modules/datatables.net-scroller-bs4/css', 'public/plugins/datatables-scroller/css');
mix.copyDirectory('./node_modules/datatables.net-scroller/js', 'public/plugins/datatables-scroller/js');

//datatables-select
mix.copyDirectory('./node_modules/datatables.net-select-bs4/js', 'public/plugins/datatables-select/js');
mix.copyDirectory('./node_modules/datatables.net-select-bs4/css', 'public/plugins/datatables-select/css');
mix.copyDirectory('./node_modules/datatables.net-select/js', 'public/plugins/datatables-select/js');

//daterangepicker
mix.copyDirectory('./node_modules/daterangepicker', 'public/plugins/daterangepicker');

//ekko-lightbox
mix.copyDirectory('./node_modules/ekko-lightbox/dist', 'public/plugins/ekko-lightbox');

//fastclick
mix.copyDirectory('./node_modules/fastclick/lib', 'public/plugins/fastclick');

//filterizr
mix.copyDirectory('./node_modules/filterizr/dist', 'public/plugins/filterizr');

//flag-icon-css
mix.copyDirectory('./node_modules/flag-icon-css/css', 'public/plugins/flag-icon-css/css');
mix.copyDirectory('./node_modules/flag-icon-css/flags', 'public/plugins/flag-icon-css/flags');

//flot
mix.copyDirectory('./node_modules/flot/dist/es5', 'public/plugins/flot');

//fontawesome-free
mix.copyDirectory('./node_modules/@fortawesome/fontawesome-free/css', 'public/plugins/fontawesome-free/css');
mix.copyDirectory('./node_modules/@fortawesome/fontawesome-free/webfonts', 'public/plugins/fontawesome-free/webfonts');

//fullcalendar
mix.copyDirectory('./node_modules/@fullcalendar/core', 'public/plugins/fullcalendar');

//fullcalendar-bootstrap
mix.copyDirectory('./node_modules/@fullcalendar/bootstrap', 'public/plugins/fullcalendar-bootstrap');

//fullcalendar-daygrid
mix.copyDirectory('./node_modules/@fullcalendar/daygrid', 'public/plugins/fullcalendar-daygrid');

//fullcalendar-interaction
mix.copyDirectory('./node_modules/@fullcalendar/interaction', 'public/plugins/fullcalendar-interaction');

//fullcalendar-timegrid
mix.copyDirectory('./node_modules/@fullcalendar/timegrid', 'public/plugins/fullcalendar-timegrid');

//icheck-bootstrap
mix.copyDirectory('./node_modules/icheck-bootstrap', 'public/plugins/icheck-bootstrap');

//inputmask
mix.copyDirectory('./node_modules/inputmask/lib', 'public/plugins/inputmask/inputmask');
mix.copyDirectory('./node_modules/inputmask/dist', 'public/plugins/inputmask/min');

//ion-rangeslider
mix.copyDirectory('./node_modules/ion-rangeslider/js', 'public/plugins/ion-rangeslider/js');
mix.copyDirectory('./node_modules/ion-rangeslider/css', 'public/plugins/ion-rangeslider/css');

//jquery
mix.copyDirectory('./node_modules/jquery/dist', 'public/plugins/jquery');

//jquery-knob
mix.copyDirectory('./node_modules/jquery-knob-chif/dist', 'public/plugins/jquery-knob');

//jquery-mapael
mix.copyDirectory('./node_modules/jquery-mapael/js', 'public/plugins/jquery-mapael');

//jquery-mousewheel
mix.copyDirectory('./node_modules/jquery-mousewheel', 'public/plugins/jquery-mousewheel');

//jquery-ui
mix.copyDirectory('./node_modules/jquery-ui-dist', 'public/plugins/jquery-ui');

//jquery-validation
mix.copyDirectory('./node_modules/jquery-validation/dist', 'public/plugins/jquery-validation');

//jqvmap
mix.copyDirectory('./node_modules/jqvmap-novulnerability/dist', 'public/plugins/jqvmap');

//jsgrid
mix.copyDirectory('./node_modules/jsgrid/dist', 'public/plugins/jsgrid');
mix.copy('./node_modules/jsgrid/demos/db.js', 'public/js/db.js');

//jszip
mix.copyDirectory('./node_modules/jszip/dist', 'public/plugins/jszip');

//moment
mix.copyDirectory('./node_modules/moment/locale', 'public/plugins/moment/locale');
mix.copyDirectory('./node_modules/moment/min', 'public/plugins/moment');

//overlayScrollbars
mix.copyDirectory('./node_modules/overlayscrollbars/js', 'public/plugins/overlayScrollbars/js');
mix.copyDirectory('./node_modules/overlayscrollbars/css', 'public/plugins/overlayScrollbars/css');

//pace-progress
mix.copyDirectory('./node_modules/@lgaitan/pace-progress/dist', 'public/plugins/pace-progress');

//pdfmake
mix.copyDirectory('./node_modules/pdfmake/build', 'public/plugins/pdfmake');

//popper
mix.copyDirectory('./node_modules/popper.js/dist', 'public/plugins/popper');

//raphael
mix.copyDirectory('./node_modules/raphael', 'public/plugins/raphael');

//select2
mix.copyDirectory('./node_modules/select2/dist', 'public/plugins/select2');

//select2-bootstrap4-theme
mix.copyDirectory('./node_modules/@ttskch/select2-bootstrap4-theme/dist', 'public/plugins/select2-bootstrap4-theme');

//sparklines
mix.copyDirectory('./node_modules/jquery-sparkline', 'public/plugins/sparklines');
mix.copyDirectory('./node_modules/sparklines/source', 'public/plugins/sparklines');

//summernote
mix.copyDirectory('./node_modules/summernote/dist', 'public/plugins/summernote');

//sweetalert2
mix.copyDirectory('./node_modules/sweetalert2/dist', 'public/plugins/sweetalert2');

//sweetalert2-theme-bootstrap-4
mix.copyDirectory('./node_modules/@sweetalert2/theme-bootstrap-4', 'public/plugins/sweetalert2-theme-bootstrap-4');

//tempusdominus-bootstrap-4
mix.copyDirectory('./node_modules/tempusdominus-bootstrap-4/build', 'public/plugins/tempusdominus-bootstrap-4');

//toastr
mix.copyDirectory('./node_modules/toastr/build', 'public/plugins/toastr');

