<html>
<head></head>
<body>
<?php
session_start();
$conn = new mysqli("localhost","root", "","letssketch");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$emailId=$_POST['uname'];
$pass=$_POST['psw'];

  $sql = "SELECT * FROM user WHERE uname = '$emailId'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()){
      if(password_verify($pass , $row['pass'])){
           $_SESSION['user'] = $emailId;
     ?>
     <script>
       alert("Logged In Successfully!");
       window.location = 'profile.php';
    </script>
   <?php
      }
      else{
        ?>
        <script>
          alert("Password Incorrect");
          window.location = 'profile.php';
       </script>
      <?php
      }
    }
  }
  else{
    ?>
          <script>
          alert("Username or Password Incorrect");
          window.location = 'home.html';
        </script>
    <?php
  }
  $conn->close();
?>
</body>
</html>
