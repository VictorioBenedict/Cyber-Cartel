<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap" />
    <link rel="stylesheet" href="{{ asset ('assests/css/bootstrap.css') }}">
    <link rel="stylesheet" href="assets/css/analytics.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('assests/js/jquery.js') }}"></script>    

    <title>Dashboard</title>
</head>

<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
    <a href="" class="brand">
            <img src="images/logo.png" alt=""
                style="width: 50px; height: 50px; margin-left: 30px; margin-top: 20px;">
            <span class="text" style="margin-top: 20px;margin-left: 20px;">Flavors & Co</span>
        </a>
        <ul class="side-menu top">
         
            <li class="active">
                <a href="{{ url('/adminanalytics') }}">
                    <i class="bx bxs-analyse"></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/admincustomers') }}">
                    <i class="bx bxs-group"></i>
                    <span class="text">Customers</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/admindashboards') }}">
                    <i class="bx bxs-cart"></i>
                    <span class="text">Orders</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/adminmanagements') }}">
                    <i class="bx bxs-data"></i>
                    <span class="text">Product Management</span>
                </a>
            </li>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <li>
                <a class="dropdown-item text-center" href="{{route('logout')}}"  style="color: red;">
                    <i class="bx bxs-log-out"></i> Log out
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb"></ul>
                </div>
            </div>

            <ul class="box-info">
                <li>
                    <i class="bx bxs-calendar-check" 
                    style ="background: var(--light-blue);
                    color: var(--blue);"></i>
                    <span class="text">
                        <h3>Products</h3>
                        <p>Total For Sale: {{number_format($products)}}</p>
                        @if($boughtcount != 0)
                        <p>Total Sales: ₱{{number_format($boughtTotal)}}</p>
                        @else
                            <p>Total Sales:₱0</p>
                        @endif
                    </span>
                </li>
                <li>
                    <i class="bx bxs-group"
                    style="background: var(--light-yellow);"></i>
                    <span class="text">
                        <h3>Users</h3>
                        <p>Total Users: {{number_format($user)}}</p>
                    </span>
                </li>
                <li>
                    <i class="bx bxs-cart-add"
                    style ="background: var(--light-orange);"></i>
                    <span class="text">
                        <h3>Purchased Products</h3>
                        <p>Total Units Bought: {{number_format($boughtquant)}}</p>
                        <p>Total Units Refunded: {{number_format($refunded)}}</p>
                        <p>Total Units Cancelled: {{number_format($cancelled)}}</p>
                    </span>
                </li>
            </ul>
            <ul class="box-info">
                <li><canvas id="myChart" style="width:200; height:200;"></canvas></li>
                <li><canvas id="chart2" style="width:200; height:200;"></canvas></li>
            </ul>
            <ul class="box-info" style="width: auto; height: auto;">
                <li>
                    <i class=""></i>
                    <span class="text">
                        <h3>Ice Cream</h3>
                        @if($RAMCount != 0)
                        <p>Total Sales: ₱{{number_format($RAMTotal)}}</p>
                        @else
                            <p>Total Sales: ₱0</p>
                        @endif
                        <p>Total Units Sold: {{number_format($RAMquant)}}</p>
                    </span>
                </li>

                <li>
                    <i class="" class='bx-fw'></i>
                    <span class="text">
                        <h3>Dessert</h3>
                        @if($CPUCount != 0)
                        <p>Total Sales: ₱{{number_format($CPUTotal)}}</p>
                        @else
                            <p>Total Sales:₱0</p>
                        @endif
                        <p>Total Units Sold: {{number_format($CPUquant)}}</p>
                    </span>
                </li>
                
               
            </ul>

            <ul class="box-info" style="width: auto; height: auto;">
                <li>
                <i class=""></i>
                    <span class="text">
                        <h3>Hot Drinks</h3>
                        @if($MotherboardCount != 0)
                        <p>Total Sales: ₱{{number_format($MotherboardTotal)}}</p>
                        @else
                            <p>Total Sales: ₱0</p>
                        @endif
                        <p>Total Units Sold: {{number_format($Motherboardquant)}}</p>

                    </span>
                </li>

                <li>
                <i class=""></i>
                    <span class="text">
                        <h3>Iced Drinks</h3>
                        @if($GPUCount != 0)
                        <p>Total Sales: ₱{{number_format($GPUTotal)}}</p>
                        @else
                            <p>Total Sales: ₱0</p>
                        @endif
                        <p>Total Units Sold: {{number_format($GPUquant)}}</p>
                    </span>
                </li>
                
               
            </ul>

          
    </section>
    

</body>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Ice Cream','Dessert','Hot Drinks','Ice Drinks'],
            datasets: [{
                label: 'Total Units Sold',
                data: [{{$RAMCount}}, {{$CPUCount}}, {{$MotherboardCount}}, {{$GPUCount}}],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    var ctx = document.getElementById('chart2').getContext('2d');
    var chart2 = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Ice Cream','Dessert','Hot Drinks','Ice Drinks'],
            datasets: [{
                label: 'Total Sales',
                data: [{{$RAMTotal}}, {{$CPUTotal}}, {{$MotherboardTotal}}, {{$GPUTotal}}],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

</html>