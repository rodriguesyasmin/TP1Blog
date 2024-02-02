<?php
require_once('classes/CRUD.php');
$crud = new CRUD;
$select = $crud->select('blog_user', 'nom', 'desc');
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
    <title>articles</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Articles</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>phone</th>
                <th>Zip Code</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($select as $row){
            ?>
            <tr>
                <td><a href="client-show.php?id=<?= $row['id'];?>"><?= $row['nom']?></a></td>
          
                <td><?= $row['email']?></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    <a href="client-create.php" class="a-btn" >Client Create</a>
</body>
</html>