<?php
define("SERVEUR", "localhost");
    define("NOMBASE", "samaka");
    define("USER", "root");
    define("MDP", "");

   
	$conn=mysqli_connect(SERVEUR, USER, MDP,NOMBASE) or die("err");
?>