<?php
if(isset($_GET['id']) && $_GET['id']!=null){
    require_once('../CRUD.php');
    $crud = new CRUD;
    $selectId = $crud->selectId('blog_categorie', $_GET['id'], 'categorie-index');
    extract($selectId);
}else{
    header('location:categorie-index.php');
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
    <title>Categorie</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <div class="container">
        <h2>Éditer categorie</h2>
        <form action="categorie-update.php" method="post">
            <input type="hidden" name="id" value="<?= $id;?>">
            <label>Name  </label>
                <input type="text" name="nom" value="<?= $nom;?>">
          
            
            
            <input type="submit" class="btn" value="Update">
        </form>
    </div>
</body>
</html>