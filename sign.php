
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
  <strong>Successfully</strong> <?php echo $_SESSION['status']; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
   <?php
      
      unset($_SESSION['status']);
     }
    ?>
   <h2 class = "text-center">Registation</h2>
    </div>
    
    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
         <div class="form-group">
        <label for="">Name</label>
         <input type="text" id="fname" name="fname"  class="form-control" >
         </div>
         
        
         <!-- for radio -->   
         Gender
         <div class="form-check-inline">
      <label class="form-check-label" for="gen">

        <input type="radio" class="form-check-input" id="gen" name="gender" value="male" checked>Male
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="gen" name="gender" value="female">Female
      </label>
    </div> 
    <div class="form-group">
         <label for="">Class</label>
         <input type="text" id="cl" name="class"  class="form-control">
         </div>
         <div class="form-group">
         <label for="">Roll No</label>
         <input type="number" id="roll" name="roll_no"  class="form-control">
         </div>
         <div class="form-group">
         <label for="">Mobile</label>
         <input type="number" id="mob" name="mobile_no"  class="form-control">
         </div>
         <div class="form-group">
         <label for="">Email Id</label>
         <input type="text" id="em" name="email"  class="form-control" >
         </div>
         
         <div class="form-group">
         <label for="">Address</label>
         <textarea class="form-control" id="add" name="address"></textarea>
         </div>
<br>
  <!-- <input type="submit" value="Submit"> -->
  <button type="submit" class="btn btn-success">Submit</button>
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