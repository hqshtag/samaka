<?php
if(isset($_POST['submit'])) {
  include_once('..\include\conn.inc.php');

$i=0;
$t=1;
foreach($_POST['stid'] as $v){
 echo $v.'<br>';
 $string = strval($i);
 $req1="UPDATE `stock` SET num_stock='".$_POST[$string]."'WHERE id_stock=".$v;
 $rep1=mysqli_query($conn,$req1);
 $i = $i + 1;
 echo $string."<br>";
 echo $_POST[$string]."<br>";

 $t++;
}
$nom=$_GET['nu'];
$req="UPDATE produit SET prix='".$_POST['prix']."'WHERE nom_prod='".$nom."';";
$rep=mysqli_query($conn,$req);

 
if($rep1){
    header ("location:DashBoard.php");
}
else{
    echo "FALSE";
}}

?>