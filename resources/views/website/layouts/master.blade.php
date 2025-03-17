<!DOCTYPE html>
<html class="no-js" lang="en">
@php
    $baseUrl = App\Helpers\Helper::getBaseUrl();
    $user = session('user');
    // dd($user);
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
                                        <input type="text" class="form-control"
                                            placeholder="Enter Your Name" name="name">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="register_phone">Enter Phone Number</label>
                                        <input type="number" class="form-control"
                                            placeholder="Enter phone Number" name="mobile">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="register_password">Enter Password</label>
                                        <input type="password" class="form-control"
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
                        <form id="loginFormWebsite">
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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js"></script>
        <script src="{{ $baseUrl }}/assets/libs/sweetalert2/sweetalert2.min.js"></script>
        <script src="{{ $baseUrl }}/assets/js/pages/sweetalerts.init.js"></script>
        <!--For Newsletter Popup-->
        <script>
            function openLoginModal() {
                console.log('click tou hwa')
                $('#LoginModal').modal('show');
            }

            function openRegisterModal() {
                jQuery('#RegisterModal').modal('show');
            }

            function userLogin() {
                let formData = new FormData($('#loginFormWebsite')[0]);
                axios.post('/user/login/process', formData)
                    .then(function(response) {
                        if (response.data.status === 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Login Successful',
                                showConfirmButton: false,
                                timer: 1500,
                            });
                        }
                    })
                    .catch(function(error) {

                            $.each(error.response.data.message, function(k, v) {
                                $('input[name="' + k + '"]').addClass("has-error");
                                $('input[name="' + k + '"]').after("<span class='text-danger'>" + v[0] + "</span>");
                            });

                    });
            }

            function userRegister() {
                let formData = new FormData($('#registrationForm')[0]);
                axios.post('/user/register/process', formData)
                    .then(function(response) {
                        if (response.data.status === 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Registration Successful',
                                showConfirmButton: false,
                                timer: 1500,
                            }).then(() => {
                                window.location.reload();
                            });
                        }
                    })
                    .catch(function(error) {

                            $.each(error.response.data.message, function(k, v) {
                                $('input[name="' + k + '"]').addClass("has-error");
                                $('input[name="' + k + '"]').after("<span class='text-danger'>" + v[0] + "</span>");
                            });

                    });
            }
        </script>
        <!--End For Newsletter Popup-->
    </div>
</body>

</html>
