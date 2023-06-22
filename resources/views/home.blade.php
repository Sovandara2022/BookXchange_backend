<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>

/* styles.css */
body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
  background-color: #dddada; /* Set your desired background color */
}

header {
  background-color: #333;

  color: #fff;
  padding: 20px;
  text-align: center;

}
h4{
    display: flex;
  justify-content: center;
}

h1 {
  margin: 0;
  display: flex;
  justify-content: center;
  font-size: 50px;
}
.welcome{
    
    display: flex;
  justify-content: center;
  font-size: 20px;
  
}

.buttons {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}

.button {
  display: inline-block;
  background-color: #333;
  color: #fff;
  padding: 10px 20px;
  margin: 0 10px;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.button:hover {
  background-color: #555; /* Set your desired hover background color */
}


  </style>
  <title>BookXchange</title>
</head>
<body>
  <header>
    <h1>BookXchange</h1>
  </header>
  <div class="welcome">
    <h3>Welcome to BookXchange</h3>
  </div>
  <h4>Please log-in account!</h4>
  <div class="buttons">
    <a href="login" class="button">Log in</a>
    <!-- <a href="register" class="button">Sign up</a> -->
  </div>
</body>
</html>
