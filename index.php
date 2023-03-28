<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Banglore Univercity</title>
    <!-- used bootstrap -->

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
 <!-- font famaily -->
 <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;600&family=Source+Code+Pro&family=Source+Sans+Pro:wght@600;700&display=swap" rel="stylesheet">
</head>
<body>
<!-- navbar -->


<?php  include 'menu.php';  ?>

<!-- carousel -->

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="I/a.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Banglore</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="I/b.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Banglore</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="I/c.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Banglore</h3>
        <p>We love the Big Apple!</p>
      </div>   
      
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<p style="padding:42px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae eveniet quod ullam, quidem fugit id sunt deserunt cupiditate quasi culpa, debitis obcaecati excepturi temporibus beatae placeat illum, libero quae. Fuga!
    <br>
 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat nam minus voluptatibus, delectus quia quae! Nam totam quo perferendis odit, magni doloremque quaerat blanditiis exercitationem doloribus cumque, sed rerum dicta.
   <br>
   Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias dolorem veritatis ad voluptatibus explicabo dolore pariatur fugit soluta consequuntur et! Corporis amet alias, magnam perspiciatis placeat maxime. Veniam, soluta sapiente.
</p>

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