<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap" />
    <link rel="stylesheet" href="{{ asset ('assests/css/bootstrap.css') }}">
    <link rel="stylesheet" href="assets/css/analytics.css" />
    <script src="{{ asset('assests/js/jquery.js') }}"></script>

    <title>Analytics</title>
</head>

<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="/" class="brand">
            <i class="bx bxs-smile"></i>
            <span class="text">Cyber Cartel</span>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="{{ url('/admindashboards') }}">
                    <i class="bx bxs-dashboard"></i>
                    <span class="text">Dashboards</span>
                </a>
            </li>
            <li class="active">
                <a href="{{ url('/adminanalytics') }}">
                    <i class="bx bxs-analyse"></i>
                    <span class="text">Analytics</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/admincustomers') }}">
                    <i class="bx bxs-group"></i>
                    <span class="text">Customers</span>
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
                <a class="dropdown-item text-center" href="login" style="color: red;">
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
                    <h1>Analytics</h1>
                    <ul class="breadcrumb"></ul>
                </div>
            </div>

            <ul class="box-info">
                <li>
                    <i class="bx bxs-calendar-check"></i>
                    <span class="text">
                        <h3>Blank Data</h3>
                        <p>New Order</p>
                    </span>
                </li>
                <li>
                    <i class="bx bxs-group"></i>
                    <span class="text">
                        <h3>Blank Data</h3>
                        <p>Total Buyers</p>
                    </span>
                </li>
                <li>
                    <i class="bx bxs-group"></i>
                    <span class="text">
                        <h3>Blank Data</h3>
                        <p>Total Sales</p>
                    </span>
                </li>
                <li>
                    <i class="bx bxs-chip"></i>
                    <span class="text">
                        <h3>Blank Data</h3>
                        <p>Processor</p>
                    </span>
                </li>
                <li>
                    <i class="bx bxs-microchip"></i>
                    <span class="text">
                        <h3>Blank Data</h3>
                        <p>Motherboard</p>
                    </span>
                </li>
                <li>
                    <i class="bx bxs-ruler"></i>
                    <span class="text">
                        <h3>Blank Data</h3>
                        <p>Ram</p>
                    </span>
                </li>
                <li>
                    <i class="bx bxs-buoy"></i>
                    <span class="text">
                        <h3>Blank Data</h3>
                        <p>Video Card</p>
                    </span>
                </li>
                <li>
                    <i class="bx bxs-checkbox"></i>
                    <span class="text">
                        <h3>Blank Data</h3>
                        <p>Power Supply Unit</p>
                    </span>
                </li>
                <li>
                    <i class="bx bxs-rectangle"></i>
                    <span class="text">
                        <h3>Blank Data</h3>
                        <p>Solid State Drive</p>
                    </span>
                </li>
                <li>
                    <i class="bx bxs-disc"></i>
                    <span class="text">
                        <h3>Blank Data</h3>
                        <p>Hard Drive</p>
                    </span>
                </li>
                <li>
                    <i class="bx bxs-window-alt"></i>
                    <span class="text">
                        <h3>Blank Data</h3>
                        <p>Chassis</p>
                    </span>
                </li>
            </ul>


    </section>

    <script src="script.js"></script>

    <!-- <script>
    // Sample data for the bar charts
    const dailyData = {
      labels: ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5"],
      datasets: [{
        label: "Daily Sales",
        backgroundColor: "rgba(255, 99, 132, 0.2)",
        borderColor: "rgba(255, 99, 132, 1)",
        borderWidth: 1,
        data: [5, 10, 8, 12, 15],
      },],
    };

    const monthlyData = {
      labels: ["January", "February", "March", "April", "May"],
      datasets: [{
        label: "Monthly Sales",
        backgroundColor: "rgba(54, 162, 235, 0.2)",
        borderColor: "rgba(54, 162, 235, 1)",
        borderWidth: 1,
        data: [10, 20, 15, 25, 30],
      },],
    };

    // Get the bar chart canvas element
    const barChartCanvas = document.getElementById("barChart");

    // Create the bar chart with daily data by default
    const barChart = new Chart(barChartCanvas, {
      type: "bar",
      data: dailyData,
      options: {
        scales: {
          y: {
            beginAtZero: true,
          },
        },
      },
    });

    // Function to switch between daily and monthly data
    function switchChartData(isMonthly) {
      const newData = isMonthly ? monthlyData : dailyData;
      barChart.data = newData;
      barChart.update();
    }

    // Sample data for the pie chart
    const pieData = {
      labels: ["Blank", "Blank", "Blank", "Blank", "Blank"],
      datasets: [{
        data: [20, 15, 10, 30, 25],
        backgroundColor: [
          "#3c91e6",
          "#db504a",
          "#ffce26",
          "#fd7238",
          "#342e37",
        ],
      },],
    };

    // Get the pie chart canvas element
    const pieChartCanvas = document.getElementById("pieChart");

    // Create the pie chart
    const pieChart = new Chart(pieChartCanvas, {
      type: "pie",
      data: pieData,
    });
  </script> -->

</body>

</html>