<?php
$id = $_GET['id'];


$database = new PDO("mysql:host=localhost; dbname=ppdb", "root", "");
$query = $database->query("DELETE FROM `calon_siswa` WHERE id = '$id'");
if($query){
    header("Location:index.php");
 }