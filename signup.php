<?php
require 'include/conn.php';
if (isset($_POST['signup'])) {
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql = "SELECT id
FROM members
WHERE email='$email'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
echo "Email Already Exist";
}
else
{
$sql = "INSERT INTO `members`(`username`, `email`, `password`) VALUES ('$username','$email','$password')";
}
if ($conn->query($sql)) {
echo "valid code";
}
else
{
echo "not valid";
}
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Home</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   </head>
   <body>
      <?php include'include/header.php'?>
   </body>
</html>
<div class="container p-3 ">
   <div class="row  justify-content-center">
      <div class="card p-2 col-md-4 ">
         <div class="card-header"><h2>Signup</h2></div>
         <form action="signup.php" method="POST" class="was-validated">
            <div class="form-group">
               <label for="uname">Username:</label>
               <input type="text" class="form-control" id="uname" placeholder="Enter Username" name="username" required>
               <div class="valid-feedback">Valid.</div>
               <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
               <label for="email">Email:</label>
               <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" required>
               <div class="valid-feedback">Valid.</div>
               <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
               <label for="pwd">Password:</label>
               <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
               <div class="valid-feedback">Valid.</div>
               <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group form-check">
               <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="remember" required> Remember me        <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Check this checkbox to continue.</div>
               </label>
            </div>
            <button type="submit" class="btn btn-primary" name="signup">Submit</button>
         </form>
      </div>
   </div>