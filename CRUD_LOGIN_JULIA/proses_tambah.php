<?php
$username = $_POST['username'];
$password = $_POST['password'];

$database = new PDO("mysql:host=localhost; dbname=rumahsakit", "root", "");
$query = $database->query("insert into tb_user values('','$username','password')");

if($query){
    header("Location:index.php");
 }