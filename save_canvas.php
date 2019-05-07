<?php

session_start();
$currentUserID=$_SESSION['user'];
  if($currentUserID==NULL){
    header("Location:home.html");
  }

  if (!file_exists('sketches/'.$currentUserID.'/')) {
    mkdir('sketches/'.$currentUserID.'/', 0777, true);
  }
	// requires php5
	define('UPLOAD_DIR', 'sketches/'.$currentUserID.'/');
	$img = $_POST['imgBase64'];
	$img = str_replace('data:image/png;base64,', '', $img);
	$img = str_replace(' ', '+', $img);
	$data = base64_decode($img);
	$file = UPLOAD_DIR . uniqid() . '.png';
	$success = file_put_contents($file, $data);
	print $success ? $file : 'Unable to save the file.';

 ?>
