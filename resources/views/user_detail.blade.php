@extends('layout.master')

@section('dyncontent')

<body>
<header>
        <h1>BookXchange</h1>
    </header>
    <section>
    
  
                    <img src="data:image/png;base64,{{ base64_encode($user->image) }}" alt="Image" style="width:15% ; aspect-ratio: 1/1; object-fit: cover; border-radius: 50%;">
            
    
    <h2>User Profile</h2>

    <div class="background-image"></div>
<div class="profile-info">
        <h1></h1>
        
        
            <div>
        <label for="user-id">User ID: </label>
        <p id="user-id"> {{ $user->user_id }}  </p>
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


        <a href="{{ route('user.index') }}" class="btn btn-primary">Back</a>
    </div>
   
     
     </section>
 </body>