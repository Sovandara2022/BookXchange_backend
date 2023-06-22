

<!DOCTYPE html>
<html>
<head>




 </style>

    <style>
        body {
            background-color: #dddddd;
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
        .button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

      
    </style>
</head>

<body>
    <h1>Banned Users</h1>

    <table class="table table-striped table-hover">
    <thead>
        <tr>
            <th> </th>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bannedUsers ?? [] as $user)
            <tr>
            <td >
        
                    <img src="data:image/png;base64,{{ base64_encode($user->image) }}" alt="Image" width="120" height="120" style="border-radius:50%;">

                </td>
                <td>{{ $user->user_id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td> <a href='{{ route("name.detail", ["user_id" => $user->user_id]) }}' class="btn btn-info btn-sm">Detail</a>

                  
               </td> 
            </tr>
        @endforeach
    </tbody>
</table>
<div>
<a class="button"  href="{{ route('user.index') }}" class="btn btn-primary">Back</a>
  </div>


</body>
</html>

