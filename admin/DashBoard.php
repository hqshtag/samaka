<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/fontawesome.min.css">
        <title>DashBoard </title>
</head>
<body class="container-fluid" style="background-color : #0006FF">
    <a href="admin_ajout.php" class="btn btn-dark my-5" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-plus-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm.5 4a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5V6z"/>
</svg> Ajouter un produit</a>
<a href="ajoute_categorie.php" class="btn btn-dark my-5" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-plus-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm.5 4a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5V6z"/>
</svg> Ajouter Categorie</a>



    <form  method="get">
    <table class=" table table-hover " >
       <tr class="row " style="background-color: #FFFF00">
      <th scope="row" class="col">Image</th>
      <td class="col-2">Nom Produit</td>
      <td class="col-1">Prix</td>
      <td class="col-2">Categorie</td>
      <td class="col-2">Sexe</td>
      <td class="col-1">Taille</td>
      <td class="col-2">stock</td>
    </tr>
    <?php
  include_once('..\include\conn.inc.php');
    $req = "SELECT * FROM produit,categorie,sexe,taille_prod
    WHERE categorie.id_cat=produit.id_cat AND sexe.id_sexe=produit.id_sexe AND taille_prod.id_taille=produit.id_taille GROUP BY nom_prod ORDER BY id_prod desc ;";
   
    $rep =mysqli_query($conn,$req);
    
    
    while ((($row=mysqli_fetch_array($rep,MYSQLI_BOTH))!=null)){
        $nom = $row["nom_prod"];
        echo "<tr class=' row table-warning'>
        <th class='col container'> <img src ='upload/".$row['image']."' class='container '></td>
        <td class='col-2'>".$row['nom_prod']."</td>
        <td class='col-1'>".$row['prix'].".dt</td>
        <td class='col-2'>".$row['nom_cat']."</td>
        <td class='col-2'>".$row['nom_sexe']."</td>
        <td class='col-2'>";
		  $str = "SELECT * from produit,stock,taille_prod WHERE  produit.id_prod IN (SELECT id_prod FROM produit WHERE nom_prod='".$nom."') AND produit.id_prod=stock.id_prod AND taille_prod.id_taille=produit.id_taille AND produit.id_taille=stock.id_taille ORDER BY id_stock  ;";
		  $repstr=mysqli_query($conn,$str);
		  while(($row1=mysqli_fetch_array($repstr,MYSQLI_BOTH))!=null){
        echo "<div class='row><div class='col'>".$row1['nom_taille'].": ".$row1['num_stock']."</div></div>";
    }    
        echo"</td>
        <td class='col-1 '><a href='admin_modif.php?name=".$nom."' class=' btn btn-dark'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='14' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
        <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
        <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
      </svg></a>
      <a href='sup.php?nom=".$row[1]."' class='mx-2 btn btn-dark'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash2-fill' viewBox='0 0 16 16'>
  <path d='M2.037 3.225l1.684 10.104A2 2 0 0 0 5.694 15h4.612a2 2 0 0 0 1.973-1.671l1.684-10.104C13.627 4.224 11.085 5 8 5c-3.086 0-5.627-.776-5.963-1.775z'/>
  <path fill-rule='evenodd' d='M12.9 3c-.18-.14-.497-.307-.974-.466C10.967 2.214 9.58 2 8 2s-2.968.215-3.926.534c-.477.16-.795.327-.975.466.18.14.498.307.975.466C5.032 3.786 6.42 4 8 4s2.967-.215 3.926-.534c.477-.16.795-.327.975-.466zM8 5c3.314 0 6-.895 6-2s-2.686-2-6-2-6 .895-6 2 2.686 2 6 2z'/>
</svg></a>
      </td>
      
        </tr>";
    }
    ?>
    </table>
    </form>
   
</body>
</html>