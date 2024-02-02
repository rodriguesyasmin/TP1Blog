<?php

require_once '../Header.php';

$headerInstance = new Header();
$headerInstance->renderHeader(
    './user-create.php',
    '../article/article-create.php',
    '../categorie/categorie-create.php'
);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Client Create</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <div class="container">
        <h2>Creer utilisateur</h2>
        <form action="user-store.php" method="post">
            <label>Nom:  </label>
                <input type="text" name="nom">
          
            <label>Email:</label>
                <input type="text" name="email">
            
            <label>Mot de passe:</label>
                <input type="text" name="mot_de_passe">
          
            <input type="submit" class="btn" value="Save">
        </form>
    </div>
</body>
</html>