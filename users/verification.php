<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    include_once('..\include\conn.inc.php');
    $username =$_POST['username']; 
    $password = $_POST['password'];

    $req="SELECT nom_u FROM utilisateur WHERE email ='".$username."' and mdp_u = '".$password."'";
    $rep=mysqli_query($conn,$req);
    $r=mysqli_fetch_array($rep);
    $name=$r['nom_u'];
    
    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM utilisateur where 
              email = '".$username."' and mdp_u = '".$password."' ";
        $reponse = mysqli_query($conn,$requete);
        $row     = mysqli_fetch_array($reponse);
        $count = $row['count(*)'];
        if($count!=0) 
        {
           $_SESSION['username'] = $name;
           header('Location: index1.php');
        }
        else
        {
           header('Location: login.php?erreur=1'); 
        }
    }
    else
    {
       header('Location: login.php?erreur=2'); 
        }
}
else
{
   header('Location: login.php');
}

?>