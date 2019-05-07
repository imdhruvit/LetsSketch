<?php
$conn = new mysqli("localhost","root", "toor","letssketch");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$emailId=$_POST['user_email'];
function valid_email($str) {
  return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
}
if(!valid_email($emailId)){
  echo "Invalid email address.";
}else{
  $sql = "SELECT uname FROM user WHERE uname = '$emailId'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    echo "Email Already Exist";
  }
  else{
    echo "OK";
  }
}
?>
