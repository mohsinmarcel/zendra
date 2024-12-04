<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
@php
 $baseUrl = App\Helpers\Helper::getBaseUrl();
@endphp
<head>
    <meta charset="utf-8" />
    <title>Zendra Mobiles | @yield('page-title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{$baseUrl}}/assets/images/favicon.ico">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="{{$baseUrl}}/assets/libs/dropzone/dropzone.css" type="text/css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" />
    <link rel="stylesheet" href="{{$baseUrl}}/assets/libs/filepond/filepond.min.css" type="text/css" />
    <link href="{{$baseUrl}}/assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{$baseUrl}}/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">
    <!-- Layout config Js -->
    <script src="{{$baseUrl}}/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="{{$baseUrl}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{$baseUrl}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{$baseUrl}}/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href=" {{$baseUrl}}/assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ $baseUrl }}/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.4.47/css/materialdesignicons.min.css" rel="stylesheet">
</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('main-content')
                </div>
            </div>
        </div>
        @include('admin.layouts.footer')
    </div>
    <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
    <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
    <div id="status">
    <div class="spinner-border text-primary avatar-sm" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
    </div>
    </div>



    <!-- Hidden Div -->
    <div class="dropzone d-none"></div>
    <div id="dropzone-preview"></div>
    <div id="dropzone-preview-list"></div>
    <!-- Hidden Div -->


    <!-- JAVASCRIPT -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{$baseUrl}}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{$baseUrl}}/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{$baseUrl}}/assets/libs/node-waves/waves.min.js"></script>
    <script src="{{$baseUrl}}/assets/libs/feather-icons/feather.min.js"></script>
    <script src="{{$baseUrl}}/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="{{$baseUrl}}/assets/js/plugins.js"></script>

    <!-- apexcharts -->
    <script src="{{$baseUrl}}/assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="https://img.themesbrand.com/velzon/apexchart-js/stock-prices.js"></script>
    <script src="{{$baseUrl}}/assets/js/pages/apexcharts-line.init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.11.0/dayjs.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.11.0/plugin/quarterOfYear.min.js"></script>
    <script src="{{$baseUrl}}/assets/js/pages/apexcharts-column.init.js"></script>
    <!-- apexcharts -->
    <!-- Vector map-->
    <script src="{{$baseUrl}}/assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="{{$baseUrl}}/assets/libs/jsvectormap/maps/world-merc.js"></script>
    <!-- Dashboard init -->
    <script src="{{$baseUrl}}/assets/libs/@simonwep/pickr/pickr.min.js"></script>
    <script src="{{$baseUrl}}/assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>
    <script src="{{$baseUrl}}/assets/js/pages/dashboard-analytics.init.js"></script>
    <script src="{{$baseUrl}}/assets/js/pages/form-pickers.init.js"></script>
    <!-- cleave.js -->
    <script src="{{$baseUrl}}/assets/libs/cleave.js/cleave.min.js"></script>
    <!-- quill js -->
    <script src="{{$baseUrl}}/assets/libs/quill/quill.min.js"></script>
    <!-- init js -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{$baseUrl}}/assets/js/pages/form-editor.init.js"></script>
    <script src="{{$baseUrl}}/assets/js/pages/select2.init.js"></script>
    <!-- form masks init -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="{{$baseUrl}}/assets/js/pages/datatables.init.js"></script>

    <!-- filepond js -->
    <script src="{{$baseUrl}}/assets/libs/dropzone/dropzone-min.js"></script>
    <script src="{{$baseUrl}}/assets/libs/filepond/filepond.min.js"></script>
    <script src="{{$baseUrl}}/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
    <script src="{{$baseUrl}}/assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js"></script>
    <script src="{{$baseUrl}}/assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js"></script>
    <script src="{{$baseUrl}}/assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js"></script>
    <script src="{{$baseUrl}}/assets/js/pages/form-file-upload.init.js"></script>
    <script src="{{$baseUrl}}/assets/js/pages/form-masks.init.js"></script>
    <!-- App js -->
    <script src="{{$baseUrl}}/assets/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <!-- Sweet Alerts js -->
        <script src="{{ $baseUrl }}/assets/libs/sweetalert2/sweetalert2.min.js"></script>

        <!-- Sweet alert init js-->
        <script src="{{ $baseUrl }}/assets/js/pages/sweetalerts.init.js"></script>


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include Summernote JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>

    <!-- Initialize Summernote -->
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 300,
                focus: true
            });
        });
    </script>


    @stack('scripts')
    <script>
    let access_token = "{{session('admin')['access_token']}}";
    </script>
    </body>

    </html>
