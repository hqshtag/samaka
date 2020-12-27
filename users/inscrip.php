<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert_u.php" method="post">
    <fieldset>
    <legend>Cree un Compte</legend>
        <label>Prenom:</label>
        <input type="text" name="pre">
        <br>
        <label>Nom:</label>
        <input type="text" name="nom">
        <br>    
        <label>Date De Naissance :</label>
        <input type="date" name="naiss">
        <br>
        <label>E-mail:</label>
        <input type="email" name="email" >
        <br>
		<label>Sexe:</label>
        <select name="sexe" id="">
        <option value="H">Homme</option>
        <option value="F">Femme</option>
        </select>
        <label>Mot De Passe:</label>
        <input type="password" name="mdp">
        <br>
        <label>Telephone:</label>
        <input type="number" name="tel">
        <br>
        
        <input type="submit" value="Inscrption" name="submit">    
    </fieldset>
    </form>
</body>
</html>