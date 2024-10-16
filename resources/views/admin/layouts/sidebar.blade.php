<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{route('admin.dashboard')}}" class="logo logo-dark d-flex justify-content-start">
            <span class="logo-sm">
                <h2 class="text-white mt-3 mb-3 text-center" style="font-family: fantasy">ZENDRA GADGETS</h2>
                {{-- <img src="{{$baseUrl}}/assets/images/logo.png" alt="" height="55"> --}}
            </span>
            <span class="logo-lg">
                <h2 class="text-white mt-3 mb-3 text-center" style="font-family: fantasy">ZENDRA GADGETS</h2>
                {{-- <img src="{{$baseUrl}}/assets/images/logo.png" alt="" height="55"> --}}
            </span>
            {{-- <h4>Gadgets</h4> --}}
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light d-flex justify-content-start d-none">
            <span class="logo-sm">
                <h2 class="text-white mt-3 mb-3 text-center" style="font-family: fantasy">ZENDRA GADGETS</h2>
                {{-- <img src="{{$baseUrl}}/assets/images/logo.png" alt="" height="55"> --}}
            </span>
            <span class="logo-lg">
                <h2 class="text-white mt-3 mb-3 text-center" style="font-family: fantasy">ZENDRA GADGETS</h2>
                {{-- <img src="{{$baseUrl}}/assets/images/logo.png" alt="" height="55"> --}}
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('admin.dashboard')}}" role="button" >
                        <i class="ri-qr-scan-2-fill"></i> <span data-key="t-dashboards">Dashboard</span>
                    </a>
                </li> <!-- end Dashboard Menu -->

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('user.categories')}}" role="button" >
                        <i class="ri-qr-scan-2-fill"></i> <span data-key="t-category">Categories</span>
                    </a>
                </li> <!-- end Dashboard Menu -->

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('user.products')}}" role="button" >
                        <i class="ri-qr-scan-2-fill"></i> <span data-key="t-category">Products</span>
                    </a>
                </li> <!-- end Dashboard Menu -->



                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('user.mobiles')}}" role="button" >
                        <i class="ri-qr-scan-2-fill"></i> <span data-key="t-category">Mobile Phones</span>
                    </a>
                </li> <!-- end Dashboard Menu -->

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('user.create.update.settings')}}" role="button" >
                        <i class="ri-qr-scan-2-fill"></i> <span data-key="t-category">Settings</span>
                    </a>
                </li> <!-- end Dashboard Menu -->

                {{-- <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarimportedCar" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarimportedCar">
                        <i class="ri-download-cloud-2-line"></i> <span data-key="t-Sale">Imported Cars</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarimportedCar">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="add-importcar.php" class="nav-link" data-key="t-analytics">Add Car </a>
                            </li>
                            <li class="nav-item">
                                <a href="importcar-list.php" class="nav-link" data-key="t-analytics">Car List</a>
                            </li>
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu --> --}}





            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
