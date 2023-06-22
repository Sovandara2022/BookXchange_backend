

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
            background-color: rgb(206, 215, 214);
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333333;
            color: #ffffff;
        } 
        /* CSS for hover effect */
    .book-row:hover {
      background-color: rgb(159, 159, 158);
      cursor: pointer;
    }
     
        tr:nth-child(even) {
            background-color: #dddddd;
        }

      
        

        h1 {
            background-color: #afadad;
            text-align: center;
        }
    </style>
  
</head>
<body>  
    
    <h1>Books</h1>
  <table>
    <thead>
        <tr>

        
            <th>
                
               
            </th>
            <th> Book ID</th>
            <th>Book Genre</th>
            <th>Book Authur</th>
            <th>Book Title</th>
            
           
           
        </tr>
    </thead>
    
    @foreach($data as $data)
    <tr class="book-row" onclick="goToPage('book1.html')">
    
                <!-- <td><img src="{{ $data->book_image }}" alt="{{ $data->title }}" width="100"></td> -->
             
              <td>
              <img src="data:image/png;base64,{{ base64_encode($data->book_image) }}" alt="Image" width="90" height="120">

              </td>

              <td>{{ $data->book_id }}</td>
                  <td>{{ $data->book_genre }}</td>
                <td>{{ $data->book_authur }}</td>
              
                <td>{{ $data->book_title }}</td>
           
            
</tr> 
   
      @endforeach
  </table>

  <script>
    function goToPage(url) {
      window.location.href = url;
    }
  </script>
</body>
</html>

