<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">
@php
    $baseUrl = App\Helpers\Helper::getBaseUrl();
@endphp

<head>

    <meta charset="utf-8" />
    <title>Sign In | Zendra Gadgets</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ $baseUrl }}/assets/images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.min.css" rel="stylesheet">
    <!-- Layout config Js -->
    <script src="{{ $baseUrl }}/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="{{ $baseUrl }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ $baseUrl }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ $baseUrl }}/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ $baseUrl }}/assets/css/custom.min.css" rel="stylesheet" type="text/css" />

    <link href="{{ $baseUrl }}/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <!-- auth-page wrapper -->
    <div class="auth-page-wrapper  py-5 d-flex justify-content-center align-items-center min-vh-100">
        <!-- auth-page content -->
        <div class="auth-page-content overflow-hidden pt-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card overflow-hidden card overflow-hidden w-50 m-auto shadow">
                            <div class="row g-0">
                                <!-- end col -->

                                <div class="col-lg-12">
                                    <div class="p-lg-5 p-4">
                                        <div>
                                            <p class="text-muted">Sign in to continue to Zendra Gadgets.</p>
                                        </div>

                                        <div class="mt-4">
                                            <form enctype="multipart/form-data" id="loginForm">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="Email" class="form-label">Email</label>
                                                    <input type="text" class="form-control" id="Email"
                                                        name="email" placeholder="Enter Email">
                                                </div>

                                                <div class="mb-3">
                                                    {{-- <div class="float-end">
                                                        <a href="{{ route('tenant.forget.password') }}"
                                                            class="text-muted">Forgot password?</a>
                                                    </div> --}}
                                                    <label class="form-label" for="password-input">Password</label>
                                                    <div class="position-relative auth-pass-inputgroup mb-3">
                                                        <input type="password" class="form-control pe-5 password-input"
                                                            placeholder="Enter password" id="password-input"
                                                            name="password">
                                                        <button
                                                            class="btn btn-link position-absolute end-0 top-0 text-decoration-none shadow-none text-muted password-addon"
                                                            type="button" id="password-addon"><i
                                                                class="ri-eye-line"></i></button>
                                                    </div>
                                                </div>

                                                <div class="mt-4">
                                                    <a class="btn btn-success w-100" type="button"
                                                        onclick="loginProcess(this)">Sign In</a>
                                                </div>

                                            </form>
                                        </div>


                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->

        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="{{ $baseUrl }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ $baseUrl }}/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ $baseUrl }}/assets/libs/node-waves/waves.min.js"></script>
    <script src="{{ $baseUrl }}/assets/libs/feather-icons/feather.min.js"></script>
    <script src="{{ $baseUrl }}/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="{{ $baseUrl }}/assets/js/plugins.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js"></script>
    <!-- password-addon init -->
    <script src="{{ $baseUrl }}/assets/js/pages/password-addon.init.js"></script>
    <!-- Sweet Alerts js -->
    <script src="{{ $baseUrl }}/assets/libs/sweetalert2/sweetalert2.min.js"></script>

    <!-- Sweet alert init js-->
    <script src="{{ $baseUrl }}/assets/js/pages/sweetalerts.init.js"></script>

    <script>
       function loginProcess() {
    let formData = new FormData($('#loginForm')[0]);
    axios.post('/admin/login/process', formData)
        .then(function(response) {
            if (response.data.status === 'success') {
                Swal.fire({
                    icon: 'success',
                    title: 'Login Successful',
                    showConfirmButton: false,
                    timer: 1500,
                }).then(() => {
                    window.location.href = '{{route('admin.dashboard')}}';
                });
            }
        })
        .catch(function(error) {
            if (error.response.data.key === 'userNotExist') {
                Swal.fire({
                    icon: 'error',
                    title: 'User Not Exist',
                    showConfirmButton: false,
                    timer: 1500,
                });
            } else if (error.response.data.key === 'unverified') {
                Swal.fire({
                    icon: 'error',
                    title: 'Account Unverified <br> Please Contact Your provider',
                    showConfirmButton: false,
                    timer: 1500,
                });invalid
            }else if (error.response.data.key === 'invalid') {
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid Credentials',
                    showConfirmButton: false,
                    timer: 1500,
                });
            } else {
                $.each(error.response.data.message, function(k, v) {
                    $('input[name="' + k + '"]').addClass("has-error");
                    $('input[name="' + k + '"]').after("<span class='text-danger'>" + v[0] + "</span>");
                });
            }
        });
}

    </script>
</body>

</html>
