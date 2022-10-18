<?php
//koneksi
$database = new PDO('mysql:host=localhost;dbname=peduli_diri','root','');
$query = $database->query('DELETE FROM `catatan_perjalanan` WHERE suhu_tubuh= 21');