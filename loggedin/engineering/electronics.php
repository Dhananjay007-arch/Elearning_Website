<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="styleloggedin.css">
<title>E-Learning</title>
</head>

<style>
body {
  background-image: url('bg.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

 <nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(100,150,150, 1),rgba(150, 150, 150, 1))">
    <li class="breadcrumb-item" ><a href="../../loggedin.php" style="color:white;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;">Electronics Engineering</li>

  </ol>
</nav>

<div class="mb-5"></div>
<div class="java-container">

  <div class="card" >
      <img src="img1.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Digital Signal Processing</p>

        <p class="card-text details" >Language: English</p>
        <p class="card-text details" >Tutor: Tutor 1</p>

      </div>
      <a href="electronics_dsp_description.php" class="btn btn-primary">View Description!</a><br>
      <a href="electronics_dsp_course.php" class="btn btn-primary">View Course!</a><br>
      <a href="electronics_dsp_quiz.html" class="btn btn-primary">Test your Knowledge!</a>
  </div>

  <div class="card" >
      <img src="img2.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Control Systems</p>

        <p class="card-text details" >Language: English</p>
        <p class="card-text details" >Tutor: Tutor 2</p>
      </div>
      <a href="electronics_cs_description.php" class="btn btn-primary">View Description!</a><br>
      <a href="electronics_cs_course.php" class="btn btn-primary">View Course!</a><br>
             <a href="electronics_cs_quiz.html" class="btn btn-primary">Test your Knowledge!</a>

  </div>

  <div class="card" >
      <img src="img3.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text">Digital Electronics</p>
        <p class="card-text details">Language: English</p>
        <p class="card-text details ">Tutor: Tutor 3</p>
      </div>
      <a href="electronics_de_description.php" class="btn btn-primary">View Description!</a><br>
      <a href="electronics_de_course.php" class="btn btn-primary">View Course!</a><br>
            <a href="electronics_de_quiz.html" class="btn btn-primary">Test your Knowledge!</a>

  </div>

</div>

 <?php
    require "footer.php";
  ?>
