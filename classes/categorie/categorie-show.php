<?php
if(isset($_GET['id']) && $_GET['id']!=null){
    require_once('../CRUD.php');
    $crud = new CRUD;
    $selectId = $crud->selectId('blog_categorie', $_GET['id'], 'categorie-index');
    extract($selectId);
}else{
    header('location:categorie-index.php');
}

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
        <h2>Categorie:</h2>
        <hr>
        <p><strong>Nom de la categorie:</strong> <?= $nom;?></p>
        
        <a href="categorie-edit.php?id=<?= $id;?>" >Edit</a>
        <form action="categorie-delete.php" method="post">
            <input type="hidden" name="id" value="<?= $id;?>">
            <button class="btn red">Delete</button>
        </form>
    </div>
</body>
</html>