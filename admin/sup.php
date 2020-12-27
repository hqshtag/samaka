<?php
  include_once('..\include\conn.inc.php');
$nom=$_GET['nom'];
echo $nom;
$string = "'".$nom."'";



$requete1="DELETE FROM `stock` WHERE id_prod IN (SELECT id_prod from produit where nom_prod=".$string.")";
$reponse1 = mysqli_query($conn,$requete1);

$requete = "DELETE FROM `produit` WHERE nom_prod=".$string;
$reponse = mysqli_query($conn,$requete);
if($reponse1==true){
header("location:DashBoard.php");
}
else{
    echo "false";
}
?>