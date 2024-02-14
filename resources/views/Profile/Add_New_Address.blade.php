<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="login.css">
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Additional styles for responsiveness */
        body {
            padding-top: 60px; /* Add padding to body for the fixed navbar */
        }
        .black-button {
        background-color: black;
        color: white;
        }
        .black-link {
            text-decoration: none;
            color: black;
        }
        .form-group {
            margin-bottom: 20px;
            text-align: center;
        }

        #selectedLocation {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        #dropdowns {
            display: none;
            text-align: left;
            width: 100%;
        }

        select {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="/home"><img  src="images/logo.png"  style="width:200px;"></a>
        <!-- Add your navigation links if needed -->
    </nav>

    <!-- Login Content -->
    <section style="margin-top: 20px; margin-bottom: 20px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8 col-sm-10">
                    <form id="signupForm" style="border: 1px solid #ccc; border-radius: 10px; padding: 20px;">
                        @csrf
                        <div class="form-group" style="margin-bottom: 15px;">
                            <h4>Add New Credit Card</h4>
                        </div>
                        <table style="border: 1px solid #ccc; border-radius: 10px; width:100%;">
                            <tr>
                                <td style=" padding: 2%;"><p style="font-size: 15px; margin-bottom:-2.5px">Your credit card details are protected.</p></td>
                            </tr>
                            <tr>
                                <td style=" padding-left: 2%;"><p style="font-size: 12px">Cyber Cartel will not have access to your card info.</p></td>
                            </tr>
                        </table>
                        <h5 style="margin-top:2.5%; margin-bottom:2.5%">Card Details</h5>
                        <div class="d-flex justify-content-between">
                            <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name" style="width: 48%;">
                            <input type="number" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number" style="width: 48%;">
                        </div>

                        <br>


                        <div class="form-group">
                            <label for="location"style="display: flex; align-items: center; justify-content: flex-start;">Location:</label>
                            <input type="text" id="selectedLocation" readonly placeholder="Select Location" onclick="showDropdown()">
                            <input type="hidden" id="region" value="">
                            <input type="hidden" id="province" value="">
                            <input type="hidden" id="city" value="">
                            <input type="hidden" id="barangay" value="">
                        </div>

                        <div id="dropdowns">
                            <select id="regionDropdown" onchange="updateLocation('region')">
                                <option value="" disabled selected>Select Region</option>
                                <option value="region1">Region 1</option>
                                <option value="region2">Region 2</option>
                                <!-- Add more regions as needed -->
                            </select>

                            <select id="provinceDropdown" onchange="updateLocation('province')">
                                <option value="" disabled selected>Select Province</option>
                                <!-- Options will be populated dynamically using JavaScript -->
                            </select>

                            <select id="cityDropdown" onchange="updateLocation('city')">
                                <option value="" disabled selected>Select City</option>
                                <!-- Options will be populated dynamically using JavaScript -->
                            </select>

                            <select id="barangayDropdown" onchange="updateLocation('barangay')">
                                <option value="" disabled selected>Select Barangay</option>
                                <!-- Options will be populated dynamically using JavaScript -->
                            </select>
                        </div>
                        <br>




                        <div class="form-group" style="margin-bottom: 5%;">
                            <p style="display: flex; align-items: center; justify-content: flex-start; font-size: 15px"> House No, Building, Street Name,</p>
                            <input type="text" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="House No, Building, Street Name,">
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-light" style="width: 48%; border: 1px solid #000000;">
                                <a href="/address" style="text-decoration: none; color: #000000; width: 100%; display: block;">Cancel</a>
                            </button>

                            <button type="submit" class="btn btn-secondary primary black-button" style="width: 48%;">
                                <a href="/user_address_details" style="text-decoration: none; color: #ccc; width: 100%; display: block;">Submit</a>
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>

    <!-- Footer Section -->
    <footer class="bg-dark text-light text-center py-2 fixed-bottom">
        <p>&copy; 2023 Login Page. All rights reserved.</p>
    </footer>


    <script>
        function showDropdown() {
            var dropdowns = document.getElementById("dropdowns");
            dropdowns.style.display = "block";
        }

        function updateLocation(type) {
            var selectedDropdown = document.getElementById(type + "Dropdown");
            var selectedValue = selectedDropdown.value;
            var selectedInput = document.getElementById(type);
            selectedInput.value = selectedValue;

            updateVisibleInput();
        }

        function updateVisibleInput() {
            var region = document.getElementById("region").value;
            var province = document.getElementById("province").value;
            var city = document.getElementById("city").value;
            var barangay = document.getElementById("barangay").value;

            var visibleInput = document.getElementById("selectedLocation");
            visibleInput.value = `${barangay}, ${city}, ${province}, ${region}`;
        }
    </script>

    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

