<?php
session_start();
include('includes/config.php');
include('includes/db.php');
include('includes/functions.php');

if(!loggedIn()){
    header("Location:index.php?err=" . urlencode("You need to login to View account!!"));
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Compte</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Connexion</a></li>
            <li><a href="register.php">Inscription</a></li>
            <li><a href="logout.php">Déconnexion</a></li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
<br>

    	<div class="jumbotron">
			<h2>Bienvenue <?php  if(isset($_SESSION['user_email'])) {echo $_SESSION['user_email'];} else echo $_COOKIE['user_email']; ?></h2>
		</div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>
