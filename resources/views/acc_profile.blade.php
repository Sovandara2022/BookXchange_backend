@extends('login.master')

@section('dyncontent')

<title>Admin</title>
<body>
    <div class="background-image"></div>
    <header>
        <h1>Book Xchange</h1>
    </header>
    <section>
        <img src="{{asset("assets/img/12.png")}}" alt="" style="width:15% ; aspect-ratio: 1/1; object-fit: cover; border-radius: 50%;">

        <h2>User Profile</h2>
        @foreach ($acclog as $admin)
        <div class="profile-info">
            <div>
                <label for="admin-id">Admin ID:</label>
                <p id="user-id">{{ $admin->id }}</p>
            </div>
            <div>
                <label for="admin-name">Admin Name:</label>
                <p id="user-name">{{ $admin->name }}</p>
            </div>
            <div>
                <label for="admin-age">User Age:</label>
                <p id="user-age"> {{ $admin->age }}</p>
            </div>
            <div>
                <label for="admin-email">User Email:</label>
                <p id="user-email"> {{ $admin->email }}</p>
            </div>
            <div>
               

            <!-- <div>
                <label for="user_password">User Password:</label>
                <p id="user-password"></p>
            </div> -->

            <div>
                <label for="admin-phone">Phone Number:</label>
                <p id="admin-phone">{{ $$admin->phone }}</p>
            </div>


            <div>
                <label for="admin_gender">Gender:</label>
                <p id="admin-gender">{{ $admin->gender }}</p>
            </div>

            <div>
                <label for="admin_province">Province:</label>
                <p id="admin-province"> {{$admin->province }}</p>
            </div>

        </div>
        @endforeach
     
    </section>
</body>
