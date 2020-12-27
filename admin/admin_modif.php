<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <title>Modif produit</title>
</head>
<body>
<?php

 include_once('..\include\conn.inc.php');
$nom = $_GET['name'];
$req = "SELECT * FROM produit WHERE nom_prod='".$nom."'";
$rep= mysqli_query($conn,$req);
$row=mysqli_fetch_array($rep,MYSQLI_NUM);


?>
    
    <form action="modif_prod.php?nu=<?php echo $row[1] ?>" method="POST" enctype="multipart/form-data"  class="container bg-light p-5 rounded mt-3 w-50">
    <fieldset>
    <a href="DashBoard.php" class="btn btn-primary  " role="button">retour</a>
        <legend>Modifier un produit</legend>
        <?php 
        echo"nom de produit : ".$row[1]."<img src ='upload/".$row[7]."' class='container '> ";

        ?>
    <div class="form-group">
    <?php 
    $reqS = "SELECT * FROM produit,stock WHERE nom_prod='".$nom."' AND stock.id_prod=produit.id_prod";
    $repS= mysqli_query($conn,$reqS);
    $counter = 0; 


    while (($rowS=mysqli_fetch_array($repS,MYSQLI_BOTH))!=null){
        echo"
        <input type='hidden' name='stid[]' value='".$rowS['id_prod']."'>
        ";

        switch ($counter) {
            case 0:
                $s_num = $rowS["num_stock"];
                break;
            case 1: 
                $m_num = $rowS["num_stock"];
                break;
                case 2:
                    $l_num = $rowS['num_stock'];
                    break;
        }

        $counter++;
       // print_r($rowS);
    }
    ?>
    <input type='hidden' name='np' value=<?php echo $row[1]; ?>>
      <label>Prix</label>
      <input type="number" class="form-control" value=<?php echo $row[2]; ?>  name="prix">
    </div>
   <!-- <div class="form-group my-2">
      <label >Image :</label>
      <input type="file" class="form-control-file" value=<?php //echo $row[7]; ?> aria-describedby="fileHelp" name="image"  >
      <small id="fileHelp" class="form-text text-muted">ajouter photo de votre produit.</small>
    </div>-->
    <div class="form-group">
        <label> Taille et stock : </label>
        <div class="row">
       <?php   
       
       echo 'S : <input class="col-md form-control mx-1" type="number" value='.$s_num.' name="0" >
         M :<input class="col-md form-control mx-1" type="number" value='.$m_num.' name="1" >
         L : <input class="col-md form-control mx-1" type="number" value='.$l_num.' name="2" >
        </div>' ?>
    </div>
        <div class="row">
        <input type="submit" value="Modifier" class="col btn-success rounded my-2" name="submit">
        </div>    
    </fieldset>
    </form>
</body>
</html>