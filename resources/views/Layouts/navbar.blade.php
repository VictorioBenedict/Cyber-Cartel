<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/home') }}">
            <img src="{{ asset('images/logo.png') }}" style="width:200px;" alt="Logo">
        </a>
        <br>

        <!-- Desktop Search Bar -->
        <form class="d-lg-flex d-xl-flex d-md-flex d-sm-none d-none mb-2" style="margin-left: 10vw;">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width: 40vw;">
            <button class="btn btn-outline-light" type="submit">Search</button>
        </form>

        <a href="{{ url('/cart') }}">
            <img src="{{ asset('images/shopping-cart.png') }}" style="width: 25px; margin-left: 2vw;" alt="Shopping Cart">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0"> <!-- mx-auto to center the content -->
                <li class="nav-item" style="margin-right: 1.5vw;">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="categoriesDropdown">
                            <!-- Dropdown content goes here -->
                            <a class="dropdown-item" href="{{ url('/processor_category') }}">Processor</a>
                            <a class="dropdown-item" href="{{ url('/motherboard_category') }}">Motherboard</a>
                            <a class="dropdown-item" href="{{ url('/ram_category') }}">Ram</a>
                            <a class="dropdown-item" href="{{ url('/gpu_category') }}">Video Card</a>
                            <a class="dropdown-item" href="{{ url('/psu_category') }}">Power Supply Unit</a>
                            <a class="dropdown-item" href="{{ url('/ssd_category') }}">Solid State Drive</a>
                            <a class="dropdown-item" href="{{ url('/hdd_category') }}">Hard Drive</a>
                            <a class="dropdown-item" href="{{ url('/chassis_category') }}">Chassis</a>
                            <a class="dropdown-item" href="{{ url('/monitor_category') }}">Monitor</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item" style="margin-right: 1.5vw;">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pcBuilderDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pc Builder
                        </a>
                        <div class="dropdown-menu" aria-labelledby="pcBuilderDropdown">
                            <!-- Dropdown content goes here -->
                            <a class="dropdown-item" href="#">INTEL</a>
                            <a class="dropdown-item" href="#">AMD</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item" style="margin-right: 1.5vw;">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profile
                        </a>
                        <div class="dropdown-menu" aria-labelledby="profileDropdown">
                            <!-- Dropdown content goes here -->
                            <a class="dropdown-item" href="{{ url('/profile') }}">My account</a>
                            <a class="dropdown-item" href="{{ url('/my_purchase') }}">My Purchase</a>
                            <a class="dropdown-item" href="{{ url('/login') }}">Log out</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
