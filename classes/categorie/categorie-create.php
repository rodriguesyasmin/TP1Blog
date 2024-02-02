<?php

require_once '../Header.php';

$headerInstance = new Header();
$headerInstance->renderHeader(
    '../user/user-create.php',
    '../article/article-create.php',
    '../categorie/categorie-create.php'
);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorie</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <div class="container">
        <h2>Creer categorie</h2>
        <form action="categorie-store.php" method="post">
            <label>Nom: </label>
                <input type="text" name="nom">
           
            <input type="submit" class="btn" value="Save">
        </form>
    </div>
</body>
</html>