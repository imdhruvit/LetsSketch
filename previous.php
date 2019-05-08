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
  <?php
  $dir = 'sketches/'.$currentUserID.'/';

  // Open a directory, and read its contents
  if (is_dir($dir)){
    if ($dh = opendir($dir)){
      $i=0;
      while (($file = readdir($dh)) !== false){
        if($i>1){
          echo '<div class="col-sm-3"><img src="'.$dir.'/'.$file.'" onclick=print(this) width="400"></div>';
        }
        $i++;
      }
    }
    closedir($dh);
  }
  ?>
</div>
<script>
  function print(x){
    var popup = window.open();
    popup.document.write('<html><body><img src="'+x.src+'" width="1000" height="700" /></body></html>');
    popup.focus(); //required for IE
    popup.print();
  }
</script>
</body>
</html>
