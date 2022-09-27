<?php

$NIS = $_GET['NIS'];

$db = new PDO("mysql:host=localhost;dbname=school1", 'root', '');
$query = $db->query("DELETE FROM siswa WHERE NIS='$NIS'");

if($query){
    header("location:index.php");
}
