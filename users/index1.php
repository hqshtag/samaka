<html>
    <head>
        <meta charset="utf-8">
        
        <link href="bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
	<header>
	<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white shadow p-3 mb-5 bg-white ">
	
  <a class="navbar-brand" href="#"><img src="frontend/logo 5.jpg" class="logo" ></a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse "  id="navbarSupportedContent">
    
    <ul class="navbar-nav nav ml-auto mt-2 ">
	
	 <li class="nav-item  ">
        <a class="nav-link text-info mx-auto float-sm-left  font-weight-bold" style="width: 500px;" "   href="#" >Espace Client <span class="sr-only">(current)</span></a>
      </li>
	  
      <li class="nav-item ">
        <a class="nav-link  text-info" href="#" >Acceuil <span class="sr-only">(current)</span></a>
      </li>    
        <a class="nav-link text-info" href="#">A propos</a>
      </li>
      <?php
                session_start();
                if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {  
                      session_unset();
                      $_SESSION['username'] ="";
                      header("location:index1.php");                   }
                }
                else if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                   // echo print_r($_SESSION);
                    echo "
                    <div class='dropdown logout-btn' >
                    <a href='#' class='text-info' role='button' id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                    Hi ,".$user."
                    </a>
                    <div class='dropdown-menu' aria-labelledby='dropdownMenuLink'>
                    <a href='http://localhost/samaka/users/index1.php?deconnexion=true'><span class='text-info m-5'>Deconnexion</span></a>
                    </div>
                    </div>";
                }
                else if($_SESSION['username'] === ""){
                  echo'
                  <li class="nav-item dropdown">
                  <a class="nav-link text-info " href="inscrip.php" id="navbarDropdown" role="button" >
                  Inscription
                  </a>
              </li>
                  
                  <li class="nav-item">
                  <a class="nav-link text-info" href="login.php">Connexion</a>
                </li>
                  ';
                }

            ?>
   
      
     
	  <a class="navbar-brand" href="#"><img src="frontend/Capture5.jpg" ></a>
    </ul>
	<form class="d-flex">
        <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </form>
     
  </div>
</nav>

	
	
	
	</header>
	<div class="container landing">
	  <img src="frontend/landing.jpg" class="landing__img" >
    <div class="landing__blue-container" >
      <div class="landing__title">
        <h1 class="display-1 font-weight-bold">Clothing & Lifestyle </h1>
        <h3 class="h1 font-weight-light">Handmade With Love </h3>
        <h4 class="landing__h4">Suivez le chemin bleu et<br> demarquez-vous dans la foule</h4>
      </div>
    </div>
  </div>

<div class="landing">
	<img src="frontend/landing-2.jpg" class="landing__img-2" >
  <div >
   <div class="landing__title-2">
   <h1 class="display-1 font-weight-bold "  >Homme </h1>
   <h3 class="h1 font-weight-light ">Decouvrir Notre Nouvelle Collection
                               2021 </h3>
    <button type="button" class="btn btn-outline-primary btn-lg  ">Acheter Maintenent</button>
   
     
   </div>
  </div>
  
 </div>
    
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>