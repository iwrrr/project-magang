<header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            {{-- <h1>HeroBiz<span>.</span></h1> --}}
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link" href="/">Beranda</a></li>
                <li class="dropdown">
                    <a href="#">
                        <span>Profile</span> <i class="bi bi-chevron-down dropdown-indicator"></i>
                    </a>
                    <ul>
                        <li><a href="#">Company Profile</a></li>
                        <li><a href="#">Certificate</a></li>
                        <li><a href="#">Our Client</a></li>
                        <li><a href="#">Gallery</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">
                        <span>Project</span> <i class="bi bi-chevron-down dropdown-indicator"></i>
                    </a>
                    <ul>
                        <li><a href="#">Ongoing Project</a></li>
                        <li><a href="#">Completed Project</a></li>
                        <li><a href="#">Service Contract</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">
                        <span>Services</span> <i class="bi bi-chevron-down dropdown-indicator"></i>
                    </a>
                    <ul>
                        <li><a href="#">Industrial Wastewater</a></li>
                        <li><a href="#">Domestic Wastewater</a></li>
                        <li><a href="#">Recycle Water Treatment</a></li>
                        <li><a href="#">Sludge Treatment</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">
                        <span>Products</span> <i class="bi bi-chevron-down dropdown-indicator"></i>
                    </a>
                    <ul>
                        <li><a href="#">Surface Aerator</a></li>
                        <li><a href="#">Turbojet Aerator Oxy 2</a></li>
                        <li><a href="#">Sewage Treatment Plant</a></li>
                        <li><a href="#">Sludge Treatment</a></li>
                        <li><a href="#">WWTP Equipment</a></li>
                    </ul>
                </li>
                <li><a class="nav-link" href="{{ route('check-products') }}">Cek Produk</a></li>
                @auth
                    <li><a class="nav-link" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#addProduct">Tambah Produk</a></li>
                @endauth
            </ul>
            <i class="bi bi-list mobile-nav-toggle d-none"></i>
        </nav>
        <!-- .navbar -->

    </div>
</header>
