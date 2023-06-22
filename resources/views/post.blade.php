@extends('login.master')

@section('dyncontent')

{{-- @include('post.header') --}}
<link rel="stylesheet" href="css/post.css">

<title>Website Details Page</title>

<body class="post">
   
    <div class="background-image"></div>
    <div class="container">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" crossorigin="anonymous">
        <div class="box">
         <h3><a href="/total">Total Users</a></h3>
            <p><i class="fas fa-users icon users-icon"></i></p>
        </div>
        <div class="box">
            <h3><a href="/books">Total Book</a></h3>
            <p><i class="fas fa-file-alt icon posts-icon"></i></p>
        </div>
        <div class="box">
            <h3>Available Locations</h3>
            <p><i class="fas fa-map-marker-alt icon locations-icon"></i>15</p>
        </div>
        <div class="box">
        <h3><a href="user_banned">Banned Users</a></h3>
            <p><i class="fas fa-arrow-down icon decreasing-icon"></i><span class="decreasing"></span></p>
        </div>
    </div>

       

    <select id="location-select">
      <option value="">Select a location</option>
      <option value="RUPP">RUPP</option>
      <option value="Paragon International University">Paragon International University</option>
      <option value="Arabica coffee Toul Kork">Arabica coffee Toul Kork</option>
      <option value="Bak Touk High School">Bak Touk High School</option>
      <option value="Independence Monument, Independence Monument, Phnom Penh">Independence Monument</option>
      <option value="Wat Phnom">Wat Phnom</option>
      <option value="Royal Palace Park">Royal Palace Park</option>
      <option value="Megadis Store 371">Megadis Store 371</option>
      <option value="Aeon Mall Mean Chey">Aeon Mall Mean Chey</option>
      <option value="Coconut Park">Coconut Park</option>
      <option value="Chip Mong 271 Mega Mall">Chip Mong 271 Mega Mall</option>
      <option value="Eden Garden Mall">Eden Garden Mall</option>
      <option value="Midtown Community Mall">Midtown Community Mall</option>
      <option value="Olympic Market">Olympic Market</option>
      <option value="Chip Mong Sen Sok Mall">Chip Mong Sen Sok Mall</option>
    </select>
    <div class="frame">
        {{-- <img src="{{asset("assets/img/map.jpg")}}" alt="Map" width="100%" height="100%"> --}}

        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1900&amp;height=400&amp;hl=en&amp;q=ហេងសុភាព Hengsopheap&amp;t=&amp;z=100&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div><style>.mapouter{position:relative;text-align:right;width:1900px;height:578px;}.gmap_canvas {overflow:hidden;background:none!important;width:1900px;height:578px;}.gmap_iframe {width:1800px!important;height:578px!important;}</style></div>

      <!-- Map code here -->
    </div>
    
<script>
    // Get the iframe element of the map
    var mapIframe = document.querySelector('.gmap_iframe');

    // Function to update the map based on the selected location
    function updateMap(location) {
        var src = "https://maps.google.com/maps?width=100%&height=100%&hl=en&q=" + encodeURIComponent(location) + "&t=&z=14&ie=UTF8&iwloc=B&output=embed";
        mapIframe.src = src;
    }

    // Add an event listener to the select element
    var locationSelect = document.getElementById('location-select');
    locationSelect.addEventListener('change', function() {
        var selectedLocation = this.value;
        if (selectedLocation !== "") {
            updateMap(selectedLocation);
        }
    });
</script>

</body>
@endsection
