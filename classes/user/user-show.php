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
    <title>utilisateur</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <div class="container">
        <h2>Utilisateur : </h2>
        <hr>
        <p><strong>Name:</strong> <?= $nom;?></p>
        <p><strong>Email:</strong> <?= $email;?></p>
        
        <a href="user-edit.php?id=<?= $id;?>" >Edit</a>
        <form action="user-delete.php" method="post">
            <input type="hidden" name="id" value="<?= $id;?>">
            <button class="btn">Delete</button>
        </form>
    </div>
</body>
</html>