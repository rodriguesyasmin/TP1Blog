<?php

print_r($_POST);

require_once('../CRUD.php');
$crud = new CRUD;
$update = $crud->update('blog_user', $_POST);
header('location:user-index.php');

//echo $update;

