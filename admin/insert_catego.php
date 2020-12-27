<?php
include_once('..\include\conn.inc.php');
if ($_GET['nom']!='') {
$requete = "INSERT INTO categorie(nom_cat) VALUES
('".$_GET['nom']."')";
$reponse = mysqli_query($conn,$requete);
if($reponse==true){
header("location:admin_ajout.php");
}
else{
    echo"ERREUR";
}

}
else{
echo"ERREUR";
}

?>