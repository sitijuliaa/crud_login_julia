<?php

$db = mysqli_connect("localhost","root","","peduli_diri");

$result = mysqli_query($db, "SELECT * FROM catatan_perjalanan");
// var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>catatanperjalanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background:grey">
    <div class="container mt-5">
    <h1 class="text-black">P E D U L I  D I R I</h1>
    <h4 class="text-black">catatan perjalanan</h4>
    <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link text-dark" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="catatan.php">catatan_Perjalanan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="isi_data.php">Isi Data</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</div>
<div class="container mt-3" style="width:500px;margin-left:0px;">
<div class="card">
  <div class="row">
    <div class="row fw-bold card-body">
      <form>`
    <div class="container mt-3">
        <div class="row fw-bold card">
            <div class="row g-2 align-items-center px-3 mb-3">
                <div class="col-auto">
                <span class="text-black">Urutkan Berdasarkan</span>
                <select name="urut">
                  <option values="tanggal">Tanggal</option>
                  <option values="waktu">Waktu</option>
                  <option values="lokasi">Lokasi</option>
</select>
<button type="submit">urutkan</button>
             </div>
                <div class="col-auto">
                    <input type="date" class="form-control" style="width:200px" name="caper">
                </div>
                <div class="col-auto">

                <button class="btn btn-primary">Urutkan</button>
                </div>
            </div>
</div>
    <div class="card my-4 mt-3">
    <div class="d-grip gap-2 col-12 mt-2">
    <table class="table table-light table-hover table-borderless">
  <thead>
    <tr style="text-align:center;">
      
      <th scope="col">Tanggal</th>
      <th scope="col">Waktu</th>
      <th scope="col">Lokasi</th>
      <th scope="col">Suhu_Tubuh</th>
    </tr>
  </thead>
  <?php $i=1;?>
  <?php while($row = mysqli_fetch_assoc($result)):?>
  <tbody>
    <tr class="text-center">
      <th scope="row"><?= $i ?></th>
      
      <td><?=$row['tanggal'];?></td>
      <td><?=$row['waktu'];?></td>
      <td><?=$row['lokasi'];?></td>
      <td><?=$row['suhu_tubuh'];?></td>
      <td>
        <a href="update.php?idcp=<?=$data['idcp'];?>" class="btn btn-primary">Update</a>
        <a href="delete.php?idcp=<?=$data['idcp'];?>" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    </tbody>
    <?php $i++; ?>
    <?php endwhile ?>
    </table>
    </div>
    </div>
    <div class="text-end">
    <a href="isi_data.php">
        <button class="btn btn-primary">Isi Catatan Perjalanan</button>
    </a>
    </div>
</body>
</html>
