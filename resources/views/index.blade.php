
@extends('layout.master')

@section('dyncontent')

{{-- <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" /> --}}

{{-- @push('styles')
    
    <link href="{{ asset('.css') }}" rel="stylesheet">
@endpush --}}
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<style>
    


button {
  padding: 10px;
  background-color: #f00;
  color: #fff;
  border: none;
  cursor: pointer;
}

/* Add this CSS to target each button individually */
[id^="bannedButton"],
[id^="unbanButton"] {
  /* Custom styles for each button */
} 
 </style>

    <body class="sb-nav-fixed">

        
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="/">BookXchange</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search -->

            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" action="{{ route('user.search') }}" method="GET">
    <div class="input-group">
        <input class="form-control" type="text" name="search" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
        <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>
    </div>
</form>



            <!-- <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form> -->
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                       
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="profile">Profile</a> </li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="/">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Admin Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                           
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Authentication
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Admin
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <!-- <a class="nav-link" href="login">Login</a> -->
                                            <a class="nav-link" href="register">Register</a>
                                            {{-- <a class="nav-link" href="password">Forgot Password</a> --}}
                                        </nav>
                                    </div>
                                    
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            
                            <!-- <a class="nav-link" href="profile">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Profile
                            </a> -->
                            <a class="nav-link" href="post">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Website Details
                            </a>
                        </div>
                    </div>
                   
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">BookXchange Admin</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"></li>
                        </ol>
                        <div class="row">
                            
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Best Users</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="/best_user">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                         

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                  <div class="card-body">Banned Users</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                           <a class="small text-white stretched-link" href="user_banned">View Details</a>
                                         <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                             </div>
                        </div>

                    </div>
                    <div class="crud">
                        <div class="container-xl">
                            <div class="table-responsive">
                                <div class="table-wrapper">
                                    <div class="table-title">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h2>BookXchange <b>Users</b></h2> 
                                                
                                            </div>
                                            <div class="col-sm-6">
                                               
                                                <!-- <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						 -->
                                            </div>
                                        </div>
                                    </div>
                                   
                                    
                                    <!-- Add a sort link/button to trigger sorting -->
<!-- <a href="{{ route('user.index', ['sort' => 'name']) }}">Sort by Name</a> -->

                                    
                                    <table class="table table-striped table-hover">
    <thead>
        <tr>
            <th> </th>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Actions</th>
            <!-- <th> </th> -->
        </tr>
    </thead>
    <tbody>
        @foreach ($userlist ?? [] as $user)
            <tr>
                
            <td class="book-row" onclick="goToPage('user_detail/{{$user->user_id}}')">
    <!-- <img src="data:image/png;base64,{{ base64_encode($user->image) }}" alt="Image" width="90" height="120" > -->

    <img src="data:image/png;base64,{{ base64_encode($user->image) }}" alt="Image" style="width:130 ; aspect-ratio: 1/1; object-fit: cover; border-radius: 50%;">
            
    
</td>
<td class="book-row" onclick="goToPage('user_detail/{{$user->user_id}}')">{{ $user->user_id }}</td>
<td class="book-row" onclick="goToPage('user_detail/{{$user->user_id}}')">{{ $user->name }}</td>
<td class="book-row" onclick="goToPage('user_detail/{{$user->user_id}}')">{{ $user->email }}</td>
<td class="book-row" onclick="goToPage('user_detail/{{$user->user_id}}')">{{ $user->phone }}</td>
<td>
<a href='{{ route("name.detail", ["user_id" => $user->user_id]) }}' class="btn btn-info btn-sm">Detail</a>

    @if ($user->is_banned)
        <form action="{{ route('user.unban', $user->user_id) }}" method="POST" style="display: inline">
            @csrf
            @method('PUT')
            <button type="submit" class="btn btn-primary">Unban</button>
        </form>
    @else
        <form action="{{ route('user.ban', $user->user_id) }}" method="POST" style="display: inline">
            @csrf
            @method('PUT')
            <button type="submit" class="btn btn-danger">Ban</button>
        </form>
    @endif
</td>

                <td>
                <form action="{{ route('user.delete', $user->user_id) }}" method="POST" style="display: inline">
    @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</td>


            </tr>
        @endforeach
    </tbody>
</table>

                                    
                                    
                                    
                                    
                                    <div class="clearfix">
                                        <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a href="#">Previous</a></li>
                                            <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                                            <li class="page-item"><a href="#" class="page-link">4</a></li>
                                            <li class="page-item"><a href="#" class="page-link">5</a></li>
                                            <li class="page-item"><a href="#" class="page-link">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>        
                        </div>
                       



                        <div id="deleteEmployeeModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form>
                                        <div class="modal-header">						
                                            <h4 class="modal-title">Delete Employee</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">					
                                            <p>Are you sure you want to delete these Records?</p>
                                            <p class="text-warning"><small>This action cannot be undone.</small></p>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                            <input type="submit" class="btn btn-danger" value="Delete">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </div>
                </main>
                
            </div>
        </div>
        <script>
         
    // Modify the event listeners to handle individual rows
document.querySelectorAll("[id^='bannedButton']").forEach(function(button) {
  button.addEventListener("click", function () {
    var rowId = button.id.slice(-1); // Get the unique identifier from the button's id
    var bannedButton = document.getElementById("bannedButton" + rowId);
    var unbanButton = document.getElementById("unbanButton" + rowId);

    bannedButton.style.display = "none"; // Hide banned button
    unbanButton.style.display = "inline-block"; // Show unban button
  });
});

document.querySelectorAll("[id^='unbanButton']").forEach(function(button) {
  button.addEventListener("click", function () {
    var rowId = button.id.slice(-1); // Get the unique identifier from the button's id
    var unbanButton = document.getElementById("unbanButton" + rowId);
    var bannedButton = document.getElementById("bannedButton" + rowId);

    unbanButton.style.display = "none"; // Hide unban button
    bannedButton.style.display = "inline-block"; // Show banned button
  });
});
  
    function goToPage(url) {
      window.location.href = url;
    }
  </script>






        <footer>
            @include('layout.footer')
            {{-- footer --}}
        </footer>
       
    </body>
