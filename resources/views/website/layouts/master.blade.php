<!DOCTYPE html>
<html class="no-js" lang="en">
@php
    $baseUrl = App\Helpers\Helper::getBaseUrl();
@endphp

<!-- belle/index.html   11 Nov 2019 12:16:10 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Zendra Gadgets</title>
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ $baseUrl }}/bella_assets/images/favicon.png" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ $baseUrl }}/bella_assets/css/plugins.css">
    <!-- Bootstap CSS -->
    <link rel="stylesheet" href="{{ $baseUrl }}/bella_assets/css/bootstrap.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ $baseUrl }}/bella_assets/css/style.css">
    <link rel="stylesheet" href="{{ $baseUrl }}/bella_assets/css/responsive.css">
</head>

<body class="template-index belle template-index-belle">
    <div id="pre-loader">
        <img src="   {{ $baseUrl }}/bella_assets/images/loader.gif" alt="Loading..." />
    </div>
    <div class="pageWrapper">
        @include('website.layouts.header')
        <!--Body Content-->
        <div id="page-content">
            @yield('main-content')
        </div>
        <!-- Register Modal -->
        <div class="modal fade" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="RegisterModalTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitleRegister">Register</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="registrationForm">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="register_name">Enter Name</label>
                                        <input type="text" class="form-control" id="register_name"
                                            placeholder="Enter Your Name" name="name">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="register_phone">Enter Phone Number</label>
                                        <input type="number" class="form-control" id="register_phone"
                                            placeholder="Enter phone Number" name="phone">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="register_password">Enter Password</label>
                                        <input type="password" class="form-control" id="register_password"
                                            placeholder="Enter password" name="password">
                                        <small class="form-text text-muted">We'll never share your information with
                                            anyone else.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary"
                                    onclick="userRegister()">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Login Modal -->
        <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModalTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitleLogin">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="loginForm">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="login_phone">Enter Phone Number</label>
                                        <input type="number" class="form-control" id="login_phone"
                                            placeholder="Enter phone Number" name="phone">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="login_password">Enter Password</label>
                                        <input type="password" class="form-control" id="login_password"
                                            placeholder="Enter password" name="password">
                                        <small class="form-text text-muted">We'll never share your information with
                                            anyone else.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" onclick="userLogin()">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--End Body Content-->

        @include('website.layouts.footer')
        <!--Scoll Top-->
        <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
        <!--End Scoll Top-->
        <!-- Including Jquery -->
        <script src="{{ $baseUrl }}/bella_assets/js/vendor/jquery-3.3.1.min.js"></script>
        <script src="{{ $baseUrl }}/bella_assets/js/vendor/modernizr-3.6.0.min.js"></script>
        <script src="{{ $baseUrl }}/bella_assets/js/vendor/jquery.cookie.js"></script>
        <script src="{{ $baseUrl }}/bella_assets/js/vendor/wow.min.js"></script>
        <!-- Including Javascript -->
        <script src="{{ $baseUrl }}/bella_assets/js/bootstrap.min.js"></script>
        <script src="{{ $baseUrl }}/bella_assets/js/plugins.js"></script>
        <script src="{{ $baseUrl }}/bella_assets/js/popper.min.js"></script>
        <script src="{{ $baseUrl }}/bella_assets/js/lazysizes.js"></script>
        <script src="{{ $baseUrl }}/bella_assets/js/main.js"></script>
        <!--For Newsletter Popup-->
        <script>
            function openLoginModal() {
                console.log('click tou hwa')
                $('#LoginModal').modal('show');
            }

            function openRegisterModal() {
                jQuery('#RegisterModal').modal('show');
            }

            // jQuery(document).ready(function() {
            //     jQuery('.closepopup').on('click', function() {
            //         jQuery('#popup-container').fadeOut();
            //         jQuery('#modalOverly').fadeOut();
            //     });

            //     var visits = jQuery.cookie('visits') || 0;
            //     visits++;
            //     jQuery.cookie('visits', visits, {
            //         expires: 1,
            //         path: '/'
            //     });
            //     console.debug(jQuery.cookie('visits'));
            //     if (jQuery.cookie('visits') > 1) {
            //         jQuery('#modalOverly').hide();
            //         jQuery('#popup-container').hide();
            //     } else {
            //         var pageHeight = jQuery(document).height();
            //         jQuery('<div id="modalOverly"></div>').insertBefore('body');
            //         jQuery('#modalOverly').css("height", pageHeight);
            //         jQuery('#popup-container').show();
            //     }
            //     if (jQuery.cookie('noShowWelcome')) {
            //         jQuery('#popup-container').hide();
            //         jQuery('#active-popup').hide();
            //     }
            // });

            // jQuery(document).mouseup(function(e) {
            //     var container = jQuery('#popup-container');
            //     if (!container.is(e.target) && container.has(e.target).length === 0) {
            //         container.fadeOut();
            //         jQuery('#modalOverly').fadeIn(200);
            //         jQuery('#modalOverly').hide();
            //     }
            // });
        </script>
        <!--End For Newsletter Popup-->
    </div>
</body>

</html>
