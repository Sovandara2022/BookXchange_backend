@extends('login.master')

@section('dyncontent')

<title>Profile Page</title>
<body>
    <div class="background-image"></div>
    <header>
        <h1>Book Xchange</h1>
    </header>
    <section>
        <img src="{{asset("assets/img/12.png")}}" alt="" style="width:15% ; aspect-ratio: 1/1; object-fit: cover; border-radius: 50%;">

        <h2>User Profile</h2>
        @foreach ($userlist ?? [] as $user)  
         <img src="data:image/png;base64,{{ base64_encode($user->image) }}" alt="Image" width="90" height="120">
        <div class="profile-info">

     
            <div>
                <label for="user-id">User ID:</label>
                <p id="user-id">{{ $user->user_id }}</p>
            </div>
            <div>
                <label for="user-name">User Name:</label>
                <p id="user-name">{{ $user->name }}</p>
            </div>
            <div>
                <label for="user-age">User Age:</label>
                <p id="user-age"> {{ $user->age }}</p>
            </div>
            <div>
                <label for="user-address">User Address:</label>
                <p id="user-address"> {{ $user->address }}</p>
            </div>
            <div>
                <label for="user-email">User Email:</label>
                <p id="user-email"> {{ $user->email}}</p>
            </div>

            <div>
                <label for="user-phone">Phone Number:</label>
                <p id="user-phone">{{ $user->phone}}</p>
            </div>


            <div>
                <label for="user_gender">Gender:</label>
                <p id="user-gender">{{ $user->gender }}</p>
            </div>

            <div>
                <label for="user_province">Province:</label>
                <p id="user-province"> {{ $user->province }}</p>
            </div>

        </div>
        @endforeach
     
    </section>
</body>