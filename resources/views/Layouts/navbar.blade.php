<nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top" style="border-radius: 0 0 15px 15px;">
        <!-- Added border-radius here -->

        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="images/cyber_-removebg-preview.png"
                    style="width:200px; margin-left: 2vw;"></a>
            <br>
            <form class="d-lg-flex d-xl-flex d-md-flex d-sm-none d-none mb-2" style="margin-left: 10vw;">
                <!-- Desktop Search Bar -->
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                    style="width: 47vw; margin-left: -7vw;">
            </form>
            @auth
            <a href="/cart"><img src="images/shopping-cart.png" style="width: 25px; margin-left: 3.5vw;">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                        <!-- mx-auto to center the content -->
                        <li class="nav-item" style="margin-right: 1.5vw;">
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Categories
                                </a>
                                <div class="dropdown-menu" aria-labelledby="categoriesDropdown">
                                    <!-- Dropdown content goes here -->
                                    <a class="dropdown-item text-center" href="/processor_category">Processor</a>
                                    <a class="dropdown-item text-center" href="/motherboard_category">Motherboard</a>
                                    <a class="dropdown-item text-center" href="/ram_category">Ram</a>
                                    <a class="dropdown-item text-center" href="/gpu_category">Graphics Card</a>
                                    <a class="dropdown-item text-center" href="/psu_category">Power Supply Unit</a>
                                    <a class="dropdown-item text-center" href="/storage_category">Storage</a>
                                    <a class="dropdown-item text-center" href="/hdd_category">Hard Drive</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item" style="margin-right: 1.5vw;">
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pc Builder
                                </a>
                                <div class="dropdown-menu" aria-labelledby="categoriesDropdown">
                                    <!-- Dropdown content goes here -->
                                    <a class="dropdown-item text-center" href="#">INTEL</a>
                                    <a class="dropdown-item text-center" href="#">AMD</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item" style="margin-right: 1.5vw;">
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{auth()->user()->name}}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="categoriesDropdown">
                                    <!-- Dropdown content goes here -->
                                    <a class="dropdown-item text-center" href="/profile">My account</a>
                                    <a class="dropdown-item text-center" href="/my_purchase">My Purchase</a>
                                    <a class="dropdown-item text-center" href="{{route('logout')}}">Log out</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                @else
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 ml-auto">
                    <!-- Added ml-auto here -->
                    <!-- mx-auto to center the content -->
                    <li class="nav-item" style="margin-left: 50px; margin-right: 30px">
                        <a class="nav-link" aria-current="page" href="login">Login</a>
                    </li>
                    <li class="nav-item" style="margin-right: 30px;">
                        <a class="nav-link" aria-current="page" href="signup">Sign-up</a>
                    </li>
                    <li class="nav-item" style="margin-right: 30px;">
                        <a class="nav-link" aria-current="page" href="/adminlogin">Admin</a>
                    </li>
                </ul>
            </div>
            @endauth
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        </div>
    </nav>