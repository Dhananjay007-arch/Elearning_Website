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
    <li class="breadcrumb-item active" aria-current="page" style="color:white;">Chemical Engineering</li>

  </ol>
</nav>

<div class="mb-5"></div>
<div class="java-container">

  <div class="card" >
      <img src="img4.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Separation Processes</p>

        <p class="card-text details" >Language: English</p>
        <p class="card-text details" >Tutor: Tutor 1</p>

      </div>
      <a href="chemical_sp_description.php" class="btn btn-primary">View Description!</a><br>
      <a href="chemical_sp_course.php" class="btn btn-primary">View Course!</a><br>
      <a href=" chemical_sp_quiz.html" class="btn btn-primary">Test your Knowledge!</a>
  </div>

  <div class="card" >
      <img src="img5.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Petroleum Engineering</p>

        <p class="card-text details" >Language: English</p>
        <p class="card-text details" >Tutor: Tutor 2</p>
      </div>
      <a href="chemical_pe_description.php" class="btn btn-primary">View Description!</a><br>
      <a href="chemical_pe_course.php" class="btn btn-primary">View Course!</a><br>
             <a href="chemical_pe_quiz.html" class="btn btn-primary">Test your Knowledge!</a>

  </div>

  <div class="card" >
      <img src="img3.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text">Industrial Chemistry</p>
        <p class="card-text details">Language: English</p>
        <p class="card-text details ">Tutor: Tutor 3</p>
      </div>
      <a href="chemical_ic_description.php" class="btn btn-primary">View Description!</a><br>
      <a href="chemical_ic_course.php" class="btn btn-primary">View Course!</a><br>
            <a href="chemical_ic_quiz.html" class="btn btn-primary">Test your Knowledge!</a>

  </div>

</div>

 <?php
    require "footer.php";
  ?>