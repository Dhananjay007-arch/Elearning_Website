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
    <li class="breadcrumb-item active" aria-current="page"><a href="spanish.php" style="color:white;">Spanish</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;">Beginner</li>

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
          Chapter 1
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <p><b>SPANISH ALPHABETS and PRONUNCIATION ALFABETO ESPAÑOL ABECEDARIO</b></p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/CTrh8ctp9SU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <p></p>
        <p><b>SPANISH ALPHABETS WITH ANIMALS ALFABETO ESPAÑOL CON ANIMALES</b></p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/OxnqnRYjbVI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        
        <p></p>
        <p><b>COLORS IN SPANISH LOS COLORES EN ESPAÑOL</b></p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/YW2A1MF2XiU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <p></p>
        <p><b>GREETINGS and BASIC WORDS in SPANISH</b></p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/7r18gpnZZIY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      </div>
    </div>
  </div>
  <!-- Détails chapitre 2 -->
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Chapter 2
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <p><b>How to INTRODUCE YOURSELF in SPANISH</b></p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/tcKvFb-PQ1M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <p></p>
        <p><b>BASIC CONVERSATION in SPANISH</b></p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ogxAOTDBXSE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        
        <p></p>
        <p><b>NUMBERS from 0 to 100 in SPANISH</b></p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ZqC-U4nrkSE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <p></p>
        <p><b>SUBJECT PRONOUNS in SPANISH</b></p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/55fcNYvn9uQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      </div>
    </div>
  </div>
  <!-- Détails chapitre 3 -->
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Chapter 3
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <p><b>DEFINITE and INDEFINITE ARTICLES in SPANISH</b></p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/aRl1BJKhu1I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <p></p>
        <p><b>DAYS OF THE WEEK in SPANISH</b></p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/cAdBvOoRhNM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        
        <p></p>
        <p><b>MONTHS OF THE YEAR in SPANISH</b></p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/_X3seXr4iUo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
    </div>
  </div>
  <!-- Détails chapitre 4 -->
  <div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
           Chapter 4
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
          <p><b>PARTS OF THE DAY in SPANISH</b></p>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/qAI5e5l2Nxw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        <p></p>
        <p><b>HOW TO TELL THE TIME in SPANISH</b></p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/So55Y4AE9To" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        <p></p>
        <p><b>SEASONS OF THE YEAR in SPANISH</b></p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/SaWIPA769C4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <p></p>

      </div>
    </div>
  </div>
</div>

<?php require "footer.php" ?>
