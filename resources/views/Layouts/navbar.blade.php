<nav class="navbar navbar-expand-lg navbar-dark fixed-top justify-content-center"
    style="background-color: white ; font-family: Spoof Trial Thin; font-color:black;">
    
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('images/logo.png') }}" style="width: 45px; margin-left: 2vw;">
        </a>
    </div>

    @auth
    <!-- Logged-in User Navigation -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            

        <li class="nav-item" style="margin-right: 1.5vw;">
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        style="color: black;">Menu</a>
                    <div class="dropdown-menu" aria-labelledby="categoriesDropdown" style="margin-left: -2vw;">
                        <a class="dropdown-item text-center" href="/Ice_cream_category">Ice cream</a>
                        <a class="dropdown-item text-center" href="/Dessert_category">Dessert</a>
                        <a class="dropdown-item text-center" href="/Hot_Drinks_category">Hot Drinks</a>
                        <a class="dropdown-item text-center" href="/Iced_Drinks_category">Iced Drinks</a>
                    </div>
                </div>
            </li>

            <li class="nav-item" style="margin-right: 3vw;">
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        style="color: black;">{{auth()->user()->name}}</a>
                    <div class="dropdown-menu ml-auto mr-auto" aria-labelledby="userDropdown"
                        style="margin-left: -2.5vw;">
                        <a class="dropdown-item text-center" href="/profile">My account</a>
                        <a class="dropdown-item text-center" href="/my_purchase">My Purchase</a>
                        <a class="dropdown-item text-center" href="{{route('logout')}}">Log out</a>
                    </div>
                </div>
            </li>

           

            <li class="nav-item" style="margin-right: 40px; margin-top: 5px;">
                <a href="/cart"><img src="images/cart.png" style="width: 25px;"></a>
            </li>

            

            
        </ul>
    </div>

    @else
    <!-- Guest Navigation -->
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <div class="container-fluid">
            <ul class="navbar-nav mb-2 mb-lg-0">
                

               
            <li class="nav-item" style="margin-right:50px; margin-top: 3px; color: black;">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            style="color: black;">Menu</a>
                        <div class="dropdown-menu" aria-labelledby="categoriesDropdown" style="margin-left: -2vw;">
                        <a class="dropdown-item text-center" href="/Ice_cream_category">Ice cream</a>
                        <a class="dropdown-item text-center" href="/Dessert_category">Dessert</a>
                        <a class="dropdown-item text-center" href="/Hot_Drinks_category">Hot Drinks</a>
                        <a class="dropdown-item text-center" href="/Iced_Drinks_category">Iced Drinks</a>
                        </div>
                    </div>
                </li>

               

                <!-- Login Nav Item Triggering Modal -->
                <li class="nav-item" style="margin-right:50px; margin-top: 3px; color: black;">
                    <button class="nav-link btn" style="color: black;" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Login</button>
                </li>

                <li class="nav-item" style="margin-right: 40px; margin-top: 5px;">
                <a data-bs-toggle="modal" data-bs-target="#staticBackdrop1"><img src="images/cart.png" style="width: 25px;"></a>
            </li>

                
                

               
            </ul>
        </div>
    </div>
    @endauth

    <button class="navbar-toggler ms-auto mb-0" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog d-flex justify-content-center">
        <div class="modal-content w-150 h-50" style="background-color: #f5f5f5; font-family: Spoof Trial Thin;"> <!-- Add styles here -->
            <div class="modal-header" style="background-color: #eEAFC5; margin-bottom: 20px;" > <!-- Add background color -->
                <h5 class="modal-title" id="exampleModalLabel1" style="color: white;"><b>SIGN IN</b></h5> <!-- Text color -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
            <div class>

@if(session()->has('error'))
<div class="alert alert-danger">{{session('error')}}</div>
@endif

@if(session()->has('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif
</div>
               
                <form id="loginForm" action="{{route('adminpost')}}" method="post">
                    @csrf
                    <div class="form-outline mb-4"  >
                        <div class="form-group" style="background-color: ;font-family: Spoof Trial Thin; margin-bottom: 20px;">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" style="border: 1px solid #ccc;">
                            @error('email') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group" style="background-color: ; margin-bottom: 20px; font-family: Spoof Trial Thin;">
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" style="border: 1px solid #ccc;">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-black btn-sm" id="showPasswordBtn" onclick="togglePassword()">Show</button>
                                </div>
                            </div>
                            @error('password') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <button type="submit" class="btn btn-block" style="background-color:#EEAFC5; color: white;">LOGIN</button>
                    </div>
                </form>
                <div class="mt-3">
                    <a href="/forgot.password" class="black-link" style="color: #555; font-family: Spoof Trial Thin;">Forgot Password?</a><br>
                    <a href="/signup" class="black-link" style="color: #555; font-family: Spoof Trial Thin;">Create an Account</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function togglePassword() {
        var passwordInput = document.getElementById("password");
        var showPasswordBtn = document.getElementById("showPasswordBtn");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            showPasswordBtn.classList.add("btn-black-active");
        } else {
            passwordInput.type = "password";
            showPasswordBtn.classList.remove("btn-black-active");
        }
    }
    </script>