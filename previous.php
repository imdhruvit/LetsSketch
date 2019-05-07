<?php
session_start();
$currentUserID=$_SESSION['user'];
  if($currentUserID==NULL){
    header("Location:home.html");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
  <link rel="stylesheet" href="profile.css">
  <title>Profile</title>
</head>
<body>
  <div class="header">
  <a href="#default" class="logo" id="head">Let's Sketch</a>
  <div class="header-right">
    <a href="profile.php">Profile</a>
    <a class="active">All Sketches</a>
    <a href="logout.php">Logout</a>
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
    <img src="sk_2.jpg" width="200">
  </div>
  <div class="col-sm-3">
    <img src="sk_3.jpg" width="200">
  </div>
</div>
</body>
</html>
