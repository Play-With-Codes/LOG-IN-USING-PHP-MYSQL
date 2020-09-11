<?php  
  $conn = mysqli_connect('localhost', 'root', '', 'register' );
  $email = $_POST['email'];
  $pswd = $_POST['password'];
  $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' and password = '$pswd' ") or die("invalid input");
  $row = mysqli_fetch_array($result);
  if($row['email'] == $email && $row['password'] == $pswd)
  {
  	echo "login succesfully";
  }
  else
  {
  	echo "faild";
  }
 ?>