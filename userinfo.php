<?php

session_start();

$sname =  "localhost:3307";
$uname =  "root";
$password = "";
$dbname = "user";

$con =  mysqli_connect($sname, $uname, $password, $dbname);
if($con->connect_error)
{
  die("connection fail");
}
if(isset($_POST['fname']))
{


    $name = $_POST['fname'];
    $gender = $_POST['gender'];
    $class = $_POST['class'];
    $roll_no = $_POST['roll_no'];
    $mobile_no = $_POST['mobile_no'];
    $email = $_POST['email'];
    $password =rand(111111,999999);
    $address = $_POST['address'];

    $sql=  "INSERT INTO `registation` (`Name`, `Gender`, `Class`, `Roll no`, `Mobile`,`EmailId`,Password, `Address`) 
    VALUES ('$name', '$gender', '$class', '$roll_no', '$mobile_no ', ' $email', '$password','$address')";
    if($con->query($sql)==true)
    {
      $_SESSION['status']=$email.$password;
      header('location: sign.php');
      // echo "new record succefully";
    }
    else
    {
      echo "error";
    }
}
// $con -> close();

// for login...
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM registation WHERE EmailId = '$email' and Password='$password'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(is_array($row))
    {
      $_SESSION['status']=$email;
      header('location: login.php');
      // echo "Login Successfully";
    }
    else
    {
      echo "Invalid Email";
    }
    
}
$con -> close();
?>