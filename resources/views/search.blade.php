
<!DOCTYPE html>
<html>
<head>

    <style>
        body {
            background-color: #f0f0f0;
            padding: 20px;
            margin: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333333;
            color: #ffffff;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

      
        tr:hover {
            background-color: #58606e;
            cursor: pointer;
        }

        h1 {
            background-color: #9e9393;
            text-align: center;
        }
    </style>
</head>

<body>
<body>
    <h1>Search</h1>


    <table class="table table-striped table-hover">
    <thead>
        <tr>
            <th> </th>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th></th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($userlist ?? [] as $user)
        <tr>
        <td class="book-row">
        <img src="data:image/png;base64,{{ base64_encode($user->image) }}" alt="Image" width="120" height="120" style="border-radius:50%;">  </td>
        <td class="book-row">{{ $user->user_id }}</td>
        <td class="book-row">{{ $user->name }}</td>
        <td class="book-row">{{ $user->email }}</td>
        <td class="book-row">{{ $user->phone }}</td>
        <td>  <a class="button" href="{{ route('user.detail', ['id' => $user->user_id]) }}">View Details</a>
               </td> </tr>
            <!-- <tr>
                <td class="book-row" onclick="goToPage('profile')">
                    <img src="data:image/png;base64,{{ base64_encode($user->image) }}" alt="Image" width="90" height="120">
                </td>
                <td class="book-row" onclick="goToPage('profile')">{{ $user->id }}</td>
                <td class="book-row" onclick="goToPage('profile')">{{ $user->name }}</td>
                <td class="book-row" onclick="goToPage('profile')">{{ $user->email }}</td>
                <td class="book-row" onclick="goToPage('profile')">{{ $user->phone }}</td>
                
            </tr> -->
        @endforeach
    </tbody>
</table>
<script>
    function goToPage(url) {
      window.location.href = url;
    }
  </script>
</body>
</html>

