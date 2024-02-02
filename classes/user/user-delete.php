<?php

$id = $_POST['id'];
require_once('../CRUD.php');
$crud = new CRUD;
$insert = $crud->delete('blog_user', $id, 'user-index');