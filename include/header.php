<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link href="bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
	<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-white">
	
  <a class="navbar-brand" href="#"><img src="logo 5.jpg" class="logo" ></a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse"  id="navbarSupportedContent">
  <div class="d-flex flex-row">
    <ul class="navbar-nav mr-auto">
	 <li class="nav-item active ">
        <a class="nav-link " href="#" >Espace Client <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#" >Acceuil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">A propos</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Inscription
        </a>
              </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Connexion</a>
      </li>
    </ul>
	</div>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

	
	
	
	</header>
	
	
        <div id="content">
            
            <a href='principale.php?deconnexion=true'><span>Deconnexion</span></a>
            
            <!-- tester si l'utilisateur est connecté -->
            <?php
                session_start();
                if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {  
                      session_unset();
                      header("location:login.php");
                   }
                }
                else if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    // afficher un message
                    echo "<br>Bonjour $user, vous etes connectes";
                }
            ?>
            
        </div>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>