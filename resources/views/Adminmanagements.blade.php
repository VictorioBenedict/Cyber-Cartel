<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap" />
    <link rel="stylesheet" href="assets/css/productmanagement.css" />
    <script src="{{ asset('assests/js/jquery.js') }}"></script>

    <title>Product Management</title>
    <style>
        a{
            color:blue;
        }
      
    </style>
</head>

<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
    <a href="/" class="brand">
            <img src="images/logo.png" alt=""
                style="width: 50px; height: 50px; margin-left: 30px; margin-top: 20px;">
            <span class="text" style="margin-top: 20px; margin-left: 20px;">Flavors & Co</span>
        </a>
        <ul class="side-menu top">
         
         <li>
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
         <li class="active">
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
    <div class="content">
        <div class="head-title">
            <div class="left">
                <h1>Product Management</h1>
                <ul class="breadcrumb"></ul>
            </div>
        </div>
        <a class="btn btn-outline-dark" href="{{url('productmanagements/create')}}"> Add product</a>
    </div>
    <ul class="box-info">
    <li>
    <div class="table-responsive" style="overflow-x:auto; height: 100%;">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Photo</th>
                    <th>Price</th>
                    <th>Detail</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)
                <tr>
                    <td>{{$item -> id }}</td>
                    <td>{{$item -> name}}</td>
                    <td>
                        <img src="{{ asset($item->photo) }}" style="width: 70px; height:70px;" alt="Img" />
                    </td>
                    <td>₱ {{number_format($item -> price)}}</td>
                    <td>{{ Str::limit($item -> details,'10','...')}}</td>
                    <td>{{$item -> category}}</td>
                    <td>
                        <a href="{{url('productmanagements/'.$item -> id.'/edit')}}" class="btn btn-outline-secondary">Edit</a>
                        <a href="{{url('productmanagements/'.$item -> id.'/delete')}}" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
       
       
    </div>
    </li>
    </ul>
    </table>
</main>


 
</body>
</section> 
</html>