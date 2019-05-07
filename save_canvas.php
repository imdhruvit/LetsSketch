<?php

session_start();
$currentUserID=$_SESSION['user'];
  if($currentUserID==NULL){
    header("Location:home.html");
  }

$folder=$currentUserID;
mkdir("Photos/$folder/");

$img = $_POST['data'];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$fileData = base64_decode($img);

$fileName = "Photos/$folder/photo.png";
file_put_contents($fileName, $fileData);

 ?>
