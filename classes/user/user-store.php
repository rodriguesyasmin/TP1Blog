<?php

require_once('../CRUD.php');
$crud = new CRUD;
$insert = $crud->insert('blog_user', $_POST);

header("location:user-index.php?id=$insert");

?>

