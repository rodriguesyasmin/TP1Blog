<?php
if(isset($_GET['id']) && $_GET['id']!=null){
    require_once('classes/CRUD.php');
    $crud = new CRUD;
    $selectId = $crud->selectId('client', $_GET['id'], 'client-index');
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
    <title>Client Edit</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Client Edit</h2>
        <form action="client-update.php" method="post">
            <input type="hidden" name="id" value="<?= $id;?>">
            <label>Name
                <input type="text" name="name" value="<?= $name;?>">
            </label>
            <label>Address
                <input type="text" name="address" value="<?= $address;?>">
            </label>
            <label>Zip Code
                <input type="text" name="zip_code" value="<?= $zip_code;?>">
            </label>
            <label>Phone
                <input type="text" name="phone" value="<?= $phone;?>">
            </label>
            <label>email
                <input type="email" name="email" value="<?= $email?>">
            </label>
            <input type="submit" class="btn" value="Update">
        </form>
    </div>
</body>
</html>