<?php
//koneksi
$database = new PDO('mysql:host=localhost;dbname=ppdb','root','');
$query = $database->query('DELETE FROM `calon_siswa` WHERE id = 25');