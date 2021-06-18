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
    <li class="breadcrumb-item active" aria-current="page"><a href="french.php" style="color:white;">French</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;">Advanced</li>

  </ol>
</nav>
<!-- the actual content of this course ( Cours C++ )
     liste des chapitres-->

  <div class="accordion" id="accordionExample">
  <!-- Détails chapitre 1 -->
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          French Advanced Course
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <p><b>Strategies pour la PRODUCTION ORALE</b></p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/-QmJfJ96acQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <p></p>
        <p><b>Conseils et exemple de PRODUCTION ORALE</b></p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ElywnIrcS78" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        <p></p>
        <p><b>Description Production Orale</b></p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/kGm_f9OiAgc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <p></p>
        <p><b>Production Orale</b></p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ATnvJ_KO9UA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <p></p>
        <p><b>Strategies pour la COMPREHENSION ORALE</b></p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/PLj3eLA8KLM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


                <p></p>
        <p><b>Lettre formelle</b></p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/uJR52Quw-fw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <p></p>
        <p><b>Writing - Production écrite - Lettre formelle</b></p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Mn34q5CHCVw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <p></p>
        <p><b>Expressions pour argumenter / Persuader</b></p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/DY-Uu5Fvii4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <p></p>
        <p><b>Writing & Speaking Preparation - Discours argumentatif</b></p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/8_xt9NvOZ6A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <p></p>
        <p><b>La nominalisation in French</b></p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/tQaZgNV9Yqs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        <p></p>
        <p><b>Connecteurs Logiques</b></p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/TirRRjnG_0o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <p></p>
        <p><b>Aprender nuevo vocabulario</b></p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/OKQfd3uBFjY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      </div>
    </div>
  </div>
</div>

<?php require "footer.php" ?>
