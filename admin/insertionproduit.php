<?php
if(isset($_POST['submit'])){
include_once('..\include\conn.inc.php');
if(isset($_POST['submit'])){
$output_dir = "upload/";
$RandomNum   = time();
$ImageName      = str_replace(' ','-',strtolower($_FILES['img']['name'][0]));
$ImageType      = $_FILES['img']['type'][0];

$ImageExt = substr($ImageName, strrpos($ImageName, '.'));
$ImageExt       = str_replace('.','',$ImageExt);

$NewImageName = $RandomNum.$_FILES['img']['name'];
$ret[$NewImageName]= $output_dir.$NewImageName;


if (!file_exists($output_dir))
{
    @mkdir($output_dir, 0777);
}  
             
move_uploaded_file($_FILES["img"]["tmp_name"],$output_dir.$RandomNum.basename($_FILES["img"]["name"]) );

if(move_uploaded_file($_FILES["img"]["tmp_name"],$output_dir.basename($_FILES["img"]["name"]) )==false){
    echo"ERREUR";
}
     }


$requete1 = "INSERT INTO produit(nom_prod, prix, id_cat, id_sexe, id_taille, descrip, Image) 
VALUES ('".$_POST['nom']."','".$_POST['prix']."','".$_POST['cat']."','".$_POST['sexe']."','1','".$_POST['descrip']."','".$NewImageName."')";
$reponse1 = mysqli_query($conn,$requete1);
$id=mysqli_insert_id($conn) ;
		   $req2="INSERT INTO `stock`( `num_stock`, `id_prod`, `id_taille`) VALUES (".$_POST['stockS'].",'".$id."','1')";
           $rep2=mysqli_query($conn,$req2);

           $requete3 = "INSERT INTO produit(nom_prod, prix, id_cat, id_sexe, id_taille, descrip, Image) 
VALUES ('".$_POST['nom']."','".$_POST['prix']."','".$_POST['cat']."','".$_POST['sexe']."','2','".$_POST['descrip']."','".$NewImageName."')";
$reponse3 = mysqli_query($conn,$requete3);
$id=mysqli_insert_id($conn) ;
		   $req4="INSERT INTO `stock`( `num_stock`, `id_prod`, `id_taille`) VALUES (".$_POST['stockM'].",'".$id."','2')";
           $rep4=mysqli_query($conn,$req4);

           $requete5 = "INSERT INTO produit(nom_prod, prix, id_cat, id_sexe, id_taille, descrip, Image) 
VALUES ('".$_POST['nom']."','".$_POST['prix']."','".$_POST['cat']."','".$_POST['sexe']."','3','".$_POST['descrip']."','".$NewImageName."')";
$reponse5 = mysqli_query($conn,$requete5);
$id=mysqli_insert_id($conn) ;
		   $req6="INSERT INTO `stock`( `num_stock`, `id_prod`, `id_taille`) VALUES (".$_POST['stockL'].",'".$id."','3')";
           $rep6=mysqli_query($conn,$req6);
if($reponse1==true){
header("location:DashBoard.php");
}
else{
    echo"ERREUR";
}
}
?>