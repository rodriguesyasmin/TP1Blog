<?php
require_once('../CRUD.php');
$crud = new CRUD;
$select = $crud->select('blog_categorie', 'nom', 'desc');

require_once '../Header.php';

$headerInstance = new Header();
$headerInstance->renderHeader(
    '../user/user-create.php',
    '../article/article-create.php',
    'categorie-create.php'
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <h1>Categorie</h1>
    <table>
        <thead>
            <tr>
                <th>Nom:</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($select as $row){
            ?>
            <tr>
                <td><a href="categorie-show.php?id=<?= $row['id'];?>"><?= $row['nom']?></a></td>

            <?php
                }
            ?>
        </tbody>
    </table>
    <a href="categorie-create.php" class="a-btn" > Créer categorie </a>
</body>
</html>