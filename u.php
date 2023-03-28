<?php

// session_start();

// $sname =  "localhost:3307";
// $uname =  "root";
// $password = "";
// $dbname = "user";

// $con =  mysqli_connect($sname, $uname, $password, $dbname);
// if($con->connect_error)
// {
//   die("connection fail");
// }

// // for login...
// if(isset($_POST['submit']))
// {
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     $sql = "SELECT * FROM registation WHERE EmailId = '$email' and Password='$password'";
//     $result = mysqli_query($con, $sql);
//     $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//     if(is_array($row))
//     {
//       $_SESSION['status']=$name;
//       header('location: login.php');
//       // echo "Login Successfully";
//     }
//     else
//     {
//       echo "Invalid Email";
//     }
//     }
//     $con -> close();
?>