<?php 
    $NIS = $_GET['NIS'];
    $database = new PDO("mysql:host=localhost;dbname=school1", 'root', '');
    $query = $database->query("SELECT * FROM siswa WHERE NIS=$NIS");
    $data = $query->fetch();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Update</title>
</head>
<body>
    <div class="container-sm">
    <form action="proses_edit.php" method="post">
        <input type="hidden" name="NIS" value="<?= $NIS ?>">
        <div>
            <label>Nis</label>
            <input type="text" name="NIS" value="<?= $data['NIS'] ?>"class="form-control" id="floatingInput">
        </div>
        <div>
        <div>
            <label>Nama</label>
            <input type="text" name="nama" value="<?= $data['nama'] ?>"class="form-control" id="floatingInput">
        </div>
        <div>
        <div>
            <label>Kelas</label>
            <input type="text" name="kelas" value="<?= $data['kelas'] ?>"class="form-control" id="floatingInput">
        </div>
        <div>
            
            
            
        <button type="submit" class="btn btn-info">Simpan</button>
    </form>
    </div>
</body>
</html>     