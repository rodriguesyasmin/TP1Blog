<?php
if(isset($_GET['id']) && $_GET['id']!=null){
    require_once('../CRUD.php');
    $crud = new CRUD;
    $selectId = $crud->selectId('blog_user', $_GET['id'], 'user-index');
    extract($selectId);
}else{
    header('location:user-index.php');
}

require_once '../Header.php';

$headerInstance = new Header();
$headerInstance->renderHeader(
    './classes/user/user-create.php',
    './classes/article/article-create.php',
    './classes/categorie/categorie-create.php'
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Éditer utilisateur</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <div class="container">
        <h2>Éditer utilisateur</h2>
        <form action="user-update.php" method="post">
            <input type="hidden" name="id" value="<?= $id;?>">
            <label>Nom:  </label>
                <input type="text" name="nom" value="<?= $nom;?>">
          
            
            <label>Email: </label>
                <input type="email" name="email" value="<?= $email?>">
          
            <input type="submit" class="btn" value="Mettre à jour">
        </form>
    </div>
</body>
</html>