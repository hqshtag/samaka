<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
<form action ="insertionproduit.php" method="post" enctype="multipart/form-data"  >
  Nom Produit : <input type ="text" name="nom" > <br>
  Prix : <input type ="number" name="prix" > 
  Categorie : <select name="cat"> <?php
    include_once('..\include\conn.inc.php');
    $req="SELECT * FROM categorie";
    $rep=mysqli_query($conn,$req);
    while(($row=mysqli_fetch_array($rep,MYSQLI_NUM))!=null){
    echo"<option value=".$row[0].">".$row[1]."</option>";    
    }
    ?></select> <br>
   Sexe : <select name="sexe" > <?php
    include_once('..\include\conn.inc.php');
    $req="SELECT * FROM sexe";
    $rep=mysqli_query($conn,$req);
    while(($row=mysqli_fetch_array($rep,MYSQLI_NUM))!=null){
    echo"<option value=".$row[0].">".$row[1]."</option>";    
    }
    ?>
  </select> <br>
  Description : <input type ="textarea" name = "descr" > <br>
  Image : <input type ="file" id="img" name="img" accept="image/*" ><br>
   Taille et stock : 
        S : <input type="number" name="stockS" value="0" >
        M : <input type="number" name="stockM" value="0" >
        L : <input type="number" name="stockL" value="0" >
   <input type="submit" value="ajouter" name='submit'  >
</body>
</html>