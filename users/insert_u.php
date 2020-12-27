<?php
  include_once('..\include\conn.inc.php');

$Pre=$_POST['pre'];
$nom=$_POST['nom'];
$naiss=$_POST['naiss'];
$email=$_POST['email'];
$sex=$_POST['sexe'];
$mdp=$_POST['mdp'];
$tel=$_POST['tel'];
    ;
$requete = "INSERT INTO utilisateur VALUES
(NULL,'".$Pre."','".$nom."','".$naiss."','".$email."','".$sex."','".$mdp."','".$tel."')";
$reponse = mysqli_query($conn,$requete);
if($reponse==true){
header("location:login.php");
echo"account created";
}
else{
    echo"ERREUR";
}

?>