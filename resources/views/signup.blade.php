<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <title>Sign Up</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif;
            }
        </style>
    </head>
</head>

<body>
    
    <div class="container">
    
        <div class="row justify-content-center">
            <form action="/crypto" method="post" enctype="multipart/form-data">
                @csrf
                

                <div class="mb-3 mt-3">
                    <label for="first_name">First Name:</label>
                    <input type="text" class="form-control" placeholder="Enter First Name" name="first_name">
                </div>


               
                <div class="mb-3 mt-3">
                    <label for="last_name">Last Name:</label>
                    <input type="text" class="form-control" placeholder="Enter Last Name" name="last_name">
                </div>

            
                
                <div class="mb-3 mt-3">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" placeholder="Enter Email" name="email">
                </div>
                <div class="mb-3 mt-3">
                    <label for="address">Adress:</label>
                    <input type="text" class="form-control" placeholder=" Address " name="address">
                </div>

                <div class="mb-3 mt-3">
                    <label for="phone_number">Phone Number:</label>
                    <input type="number" class="form-control" placeholder="Enter Phone Number" name="phone_number">
                </div>

                

                
              
               
        
        <button type="submit" class="btn btn-primary">Submit</button>
     </form>
    </div>
    </div>

   

</body>

</html>