<?php
if(isset($_GET['id']) && $_GET['id']!=null){
    require_once('./classes/CRUD.php');
    $crud = new CRUD;
    $selectId = $crud->selectId('blog_user', $_GET['id'], 'client-index');
    extract($selectId);
}else{
    header('location:client-index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Show</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Article Show</h2>
        <hr>
        <p><strong>Name:</strong> <?= $nom;?></p>
        <p><strong>Email:</strong> <?= $email;?></p>
        <a href="client-edit.php?id=<?= $id;?>" class="btn">Edit</a>
        <form action="client-delete.php" method="post">
            <input type="hidden" name="id" value="<?= $id;?>">
            <button class="btn red">Delete</button>
        </form>
    </div>
</body>
</html>