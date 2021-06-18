<?php
  require "header.php" ;
?>

<style>
body {
  background-image: url('images/bg_loggedin.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

 <nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(100,150,150, 1),rgba(150, 150, 150, 1))">
    <li class="breadcrumb-item" ><a href="loggedin.php" style="color:white;">Home</a></li>

  </ol>
</nav>
	    <div id="frame" role="content"></div>
              <div class = "courses">
        <button type="button" onclick="location.href='index.php';">Sign Out</button>
      </div>
<style type="text/css">

                          button {
      width: 100%;
      padding: 10px;
      margin-top: 20px;
      border-radius: 20px;
      border: none;
      border-bottom: 4px solid rgba(100,150,150, 1);
      background: lightblue; 
      font-size: 16px;
      font-weight: 400;
      color: #000000;
      }
      button:hover {
      background: blue;
      color: #fff;
      }
          .courses{
      position:fixed;
      width: 15%;
      right:10px;
      top:35px;
      }
</style>
	<div class="mb-5">
		</div>
	<div class="card-container">
		<div class="card bg-light mb-3" style="max-width: 30rem;">
	  		<div class="card-header">Language</div>
	  		<div class="card-body">
	    		<ul style="list-style-type:circle">
	    			<li><a class="card-text" href="loggedin/languages/english.php">English</a><br></li>
			    	<li><a class="card-text" href="loggedin/languages/german.php">German</a><br></li>
			    	<li><a class="card-text" href="loggedin/languages/french.php">French</a><br></li>
			    	<li><a class="card-text" href="loggedin/languages/spanish.php">Spanish</a><br></li>
	    		</ul>
	  		</div>
		</div>

		<div class="card bg-light mb-3" style="max-width: 30rem;">
	  		<div class="card-header">Computer Science</div>
	  		<div class="card-body">
	    		<ul style="list-style-type:circle">
	    			<li><a class="card-text" href="loggedin/computer_science/web.php">Web Development</a><br></li>
	    			<li><a class="card-text" href="loggedin/computer_science/android.php">Android Development</a><br></li>
	    			<li><a class="card-text" href="loggedin/computer_science/python.php">Python</a><br></li>
	    			<li><a class="card-text" href="loggedin/computer_science/data.php">Data Structures</a><br></li>
	    		</ul>
	  		</div>
		</div>

		<div class="card bg-light mb-3" style="max-width: 30rem;">
	  		<div class="card-header">Engineering</div>
	  		<div class="card-body">
	    		<ul style="list-style-type:circle">
	    			<li><a class="card-text" href="loggedin/engineering/electronics.php">Electronics</a><br></li>
	    			<li><a class="card-text" href="loggedin/engineering/mechanical.php">Mechanical</a><br></li>
	    			<li><a class="card-text" href="loggedin/engineering/chemical.php">Chemical</a><br></li>
	    			<li><a class="card-text" href="loggedin/engineering/industrial.php">Industrial</a><br></li>
	    		</ul>
	  		</div>
		</div>

	</div>

  <?php
  require "footer.php";
   ?>
