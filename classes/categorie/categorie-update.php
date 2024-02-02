<?php

print_r($_POST);

require_once('../CRUD.php');
$crud = new CRUD;
$update = $crud->update('blog_categorie', $_POST);
header('location:categorie-index.php');

//echo $update;

