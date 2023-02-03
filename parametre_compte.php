<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paramètre du compte</title>
    <link href="css/style.css" rel="stylesheet">
</head>
    <body>
    <?php include('extensions/header.php');
?>
    <form method="post" action="parametre_compte_traitement.php">
        <fieldset>
        <legend>Vos Coordonnées</legend>
        <label>Nom</label> : <input type="text" name="nom" id="nom"><br>
        <label>Prenom</label> : <input type="text" name="prenom" id="prenom"><br>
        <label>Username</label> : <input type="text" name="username" id="username"><br>
        <label>Password</label> : <input type="password" name="password" id="password"><br>
        <label>Question secrète</label> : 
<select name="question" id="question-select">
	<option value="père">Nom de votre père</option>
	<option value="animal">Nom de votre animal de compagnie</option>
	<option value="ville">Ville de naissance</option>
</select>
        <label>Réponse</label> : <input type="text" name="reponse" id="reponse"<br></p>
        <input type="submit" value="Modifier"> 
    </fieldset>
    </form>
    </body>
</html>