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
    <script src="{{ asset('assests/js/jquery.js') }}"></script>
    <title>Orders</title>
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
         
         <li >
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
         <li class="active">
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
                    <h1>Orders</h1>
                    <ul class="breadcrumb"></ul>
                </div>
            </div>
            <ul class="box-info">
                <li>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>User Name</th>
                                <th>Name of product</th>
                                <th>price</th>
                                <th>Status</th>
                                <th>Update Status</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <div>
                        <tbody>
                            @foreach ($bought as $item)
                            <tr>
                                <td>{{$item -> user_name }}</td>
                                <td>{{$item -> name}}</td>
                                <td>{{$item -> price}}</td>
                                <td>{{$item -> status}}</td>
                                <td>
                                    <form action="{{ route('updatestatus', $item->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <select name="status" class="form-select form-select-sm" onchange="this.form.submit()">
                                            <option value="" disabled selected>Select Status</option>
                                            <option value="pending" {{ $item->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="accepted" {{ $item->status == 'accepted' ? 'selected' : '' }}>Accepted</option>
                                            <option value="rejected" {{ $item->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                                        </select>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('delete', $item->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </div>
                    </table>
                </li>
            </ul>
            
            </ul>
        </main>
    </section>
</body>

</html>