<?php 
require 'dbconfig.php';
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $ref = $_POST['ref'];
    
    $data = [
        'id' => $id,
        'name' => $name,
        'password' => $password
    ];
    
    $pushData = $database->getReference($ref)->update($data);
    header("Location:view.php");
}
else if(isset($_GET['key'])){
    $database->getReference("phpdemo-2f659-default-rtdb/".$_GET['key'])->remove();
    header("Location:view.php");
}
?>s