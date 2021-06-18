<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="accordionstyle.css">
<link rel="stylesheet" href="style.css">
<title>E-Learning</title>
</head>

 <nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(100,150,150, 1),rgba(150, 150, 150, 1))">
    <li class="breadcrumb-item" ><a href="../../loggedin.php" style="color:white;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="german.php" style="color:white;">German</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;">Beginner</li>

  </ol>
</nav>

<div class="accordion" id="accordionExample">
  <!-- Détails chapitre 1 -->
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Complete German Beginners Course
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <p><b>Lesson 1</b></p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/4R_2UEEHwUs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <p></p>
        <p><b>Lesson 2</b></p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/iTxR7IVuA3c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        <p></p>
        <p><b>Lesson 3</b></p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/jMlo4l9sPzU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p></p>
        <p><b>Lesson 4</b></p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/YT_AzajjOOA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p></p>
        <p><b>Lesson 5</b></p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/DngpWZ3p_hM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <p></p>
        <p><b>Lesson 6</b></p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/CYSzjKLgz7E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p></p>
        <p><b>Lesson 7</b></p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/aTgRqIVxwRg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p></p>
        <p><b>Lesson 8</b></p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/xgkfZqSjqJ8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <p></p>
        <p><b>Lesson 9</b></p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/F130GHh6ay0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <p></p>
        <p><b>Lesson 10</b></p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/vmqhGknyXgo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p></p>
        <p><b>Lesson 11</b></p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/RILbLz9mTmI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p></p>
        <p><b>Lesson 12</b></p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/CCnEdxBaL-4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>

<?php require "footer.php" ?>