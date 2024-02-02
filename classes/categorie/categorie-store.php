<?php

require_once('../CRUD.php');
$crud = new CRUD;
$insert = $crud->insert('blog_categorie', $_POST);

header("location:categorie-index.php?id=$insert");

?>

