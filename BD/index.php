<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form Siswa</title>
  </head>
  <body>
        <?php
        
        $db = new PDO("mysql:host=localhost;dbname=school1", 'root', '');
        $query = $db->query("SELECT * FROM siswa");
        ?>
    

    <div class="container-sm">
        <a href="tambah.php">Tambah Siswa</a>
        <table border="1" cellpadding="10" cellspacing="0" class="table table-bordered border-info">
            <tr>
                <th>Nis</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Aksi</th>
                
            </tr>

        <?php while($data = $query->fetch()): ?>
            <tr>
                <td><?= $data['NIS'] ?></td>
                <td><?= $data['NAMA'] ?></td>
                <td><?= $data['KELAS'] ?></td>

                <td>
                    <a href="edit.php?NIS=<?= $data['NIS'] ?>"class="btn btn-info">Update</a>
                    <a href="proses_hapus.php?NIS=<?= $data['NIS'] ?>"class="btn btn-info">Hapus</a>
                </td>
            </tr>
        <?php endwhile ?>

        </table>
        </div>

    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>