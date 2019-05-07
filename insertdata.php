<html>
<head></head>
<body>
<?php
$conn = new mysqli("localhost","root", "","letssketch");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$emailId=$_POST['email'];
$pass=$_POST['psw'];
$repass = $_POST['psw-repeat'];
function valid_email($str) {
  return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
}
if(!valid_email($emailId)){
  ?>
       <script>
        alert("Invalid email address.");
        window.location = 'home.html';
      </script>
  <?php
}else{
  $sql = "SELECT uname FROM user WHERE uname = '$emailId'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    ?>
         <script>
          alert(" Email Already Exists!");
          window.location = 'home.html';
        </script>
    <?php
  }
  else{
    if($pass !== $repass){
      ?>
           <script>
            alert("Password and Confirm Password donot Match!");
            window.location = 'home.html';
          </script>
      <?php
    }
    else{
      $phash = password_hash($pass , PASSWORD_DEFAULT);
      $sql = "INSERT into user(uname,pass) VALUES  ('$emailId','$phash')";
      if ($conn->query($sql) === TRUE) {
      ?>
           <script>
            alert("Registered Successfully!");
            window.location = 'home.html';
          </script>
      <?php
      }
      else {
       ?>
            <script>
             alert("Cannot register");
             window.location = 'home.html';
           </script>
       <?php
     }
     $conn->close();
    }
  }
}

?>
</body>
</html>
