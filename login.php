
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Banglore Univercity</title>
    <!-- used bootstrap -->

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <script src="u.js"></script>
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
 <!-- font famaily -->
 <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;600&family=Source+Code+Pro&family=Source+Sans+Pro:wght@600;700&display=swap" rel="stylesheet">
</head>
<body>

<!-- start the session -->

<?php 
session_start();
 include 'menu.php';  
 ?>
<!-- form -->
<form name="myForm" action="userinfo.php" onsubmit="return validateForm()" method="post">
   <section class="my-5">
    <div class = "py-5">


    <?php
     if(isset($_SESSION['status']))
     {
       ?>
 
 <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Welcome</strong> <?php echo $_SESSION['status']; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
   <?php
      
      unset($_SESSION['status']);
     }
    ?>
   <h2 class = "text-center">Login</h2>
    </div>
    
    <div class="w-50 m-auto">
        <form name="login" action="userinfo.php" method="post">
        <div class="form-group">
         <label for="">Email Id</label>
         <input type="text" id="em" name="email"  class="form-control" >
         </div>
         
         <div class="form-group">
         <label for="">Password</label>
         <input type="password" id="pass" name="password"  class="form-control" >
         </div>
<br>
  <!-- <input type="submit" value="Submit"> -->
  <button type="submit" name="submit" class="btn btn-success">Submit</button>
</section>
  </form>
<!-- footer -->


<!-- <footer>
    <p class="p-3 bg-dark text-white text-center">@Bangloreunivercity</p>
</footer> -->
<fieldset>
           
</fieldset>

<!-- used bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  
</body>
</html>