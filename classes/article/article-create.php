<?php 
require_once '../Header.php';

$headerInstance = new Header();
$headerInstance->renderHeader(
    '../user/user-create.php',
    'article-create.php',
    '../categorie/categorie-create.php'
);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer article:</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <div class="container">
        <h2>Creer article</h2>
        <form action="article-store.php" method="post">
            <label>Titre:</label>
                <input type="text" name="titre">
            
            <label>Article:  </label>
                <input type="text" name="contenu">
          
            <label>Date:</label>
                <input type="date" name="date">
            
            <input type="submit" class="btn" value="Save">
        </form>
    </div>
</body>
</html>