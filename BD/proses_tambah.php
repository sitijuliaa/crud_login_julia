<?php

    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    $database = new PDO("mysql:host=localhost;dbname=school1", 'root', '');
    $query = $database->query("insert into siswa values('$nis','$nama','$kelas')");

    if($query){
        header("Location:index.php");
     }