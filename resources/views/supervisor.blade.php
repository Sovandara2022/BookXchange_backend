
@extends('layout.master')

@section('dyncontent')

{{-- <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" /> --}}

{{-- @push('styles')
    
    <link href="{{ asset('.css') }}" rel="stylesheet">
@endpush --}}
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">


    
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
                <li><a class="dropdown-item" href="#!">Settings</a></li>
                <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                <li><hr class="dropdown-divider" /></li>
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
                                    <a class="nav-link" href="login">Login</a>
                                    <a class="nav-link" href="register">Register</a>
                                    {{-- <a class="nav-link" href="password">Forgot Password</a> --}}
                                </nav>
                            </div>
                            
                        </nav>
                    </div>
                    <div class="sb-sidenav-menu-heading">Addons</div>
                    
                    <a class="nav-link" href="profile">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Profile
                    </a>
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
                    <!-- <div class="crud">
                        <div class="container-xl"> -->
                            <!-- <div class="table-responsive"> -->
                                <div class="table-wrapper">
                                    <div class="table-title">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h2>BookXchange <b>Users</b></h2> 
                                               
        <thead>
            <tr>
                <th>Image</th>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Iterate over the users and display the user data -->
            @foreach ($users ?? [] as $user)
                <tr>
                    <td class="book-row"><img src="data:image/png;base64,{{ base64_encode($user->image) }}" alt="Image" width="90" height="120"></td>
                    <td class="book-row">{{ $user->user_id }}</td>
                    <td class="book-row">{{ $user->name }}</td>
                    <td class="book-row">{{ $user->email }}</td>
                    <td class="book-row">{{ $user->phone }}</td>
                    <td class="book-row">
                        <!-- Add actions for each user -->
                        <a href="{{ route('user.detail', ['id' => $user->user_id]) }}" class="btn btn-info btn-sm">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- <div class="clearfix">
    <div class="hint-text">
    Showing <b>{{ count($users ?? []) }}</b> out of <b>{{ count($users ?? []) }}</b> entries
    </div>
    <ul class="pagination">
        <li class="page-item disabled"><a href="#">Previous</a></li>
        @for ($i = 1; $i <= 5; $i++)
            <li class="page-item {{ $i == 1 ? 'active' : '' }}"><a href="#" class="page-link">{{ $i }}</a></li>
        @endfor
        <li class="page-item"><a href="#">Next</a></li>
    </ul>
</div> -->
</body>
