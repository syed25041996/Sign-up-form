<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <!-- Used bootbrap 4 for my design below -->
    <title>Sign up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" text="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  </head>
  <body style="background-color:#4b6cb7">
    <h1 class="design">Volunteer sign up form</h1>
    <p class="design"><i><b>We are hosting a charity drive on 31st of January, 
    Interested participants can register down below</b></i></p>
    <hr>
    <div class="container">
      <form action="db.php" method="POST" style="border:1px solid #ccc">
        <div class="container">
          
          <label for="name"><b>Name</b></label><br>
          <input type="text" placeholder="name" name="name" required><br>

          <label for="email"><b>Email</b></label><br>
          <input type="text" placeholder="Enter Email" name="email" required><br>
      
          <label for="pass"><b>Password</b></label><br>
          <input type="password" placeholder="Enter Password" name="pass" required><br>
      
          <label for="pass-repeat"><b>Repeat Password</b></label><br>
          <input type="password" placeholder="Repeat Password" name="pass-repeat" required><br>
          
          <label for="dob"><b>Date of Birth</b></label><br>
          <input type="date" placeholder="yyyy-mm-dd" name="dob" required><br>

          <label for="gender"><b>Gender</b></label><br>
          <input type="text" placeholder="Enter gender" name="gender" required><br>

          <p>By creating an account you agree to our <a href="terms.php" style="color:dodgerblue">Terms & Privacy</a>.</p>
          <input class="btn btn-success alert alert-success" role="alert" name="submit" type="submit" value="Accept and create">  
          <img src="heart.png">
    </div>
  </body>
</html>