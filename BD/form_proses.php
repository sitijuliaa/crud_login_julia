<?php
 session_start();

    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    


 $koneksi = new PDO('mysql:host=localhost;dbname=school1','root','');

 $query = $koneksi->query("select * from siswa where nis='$nis' AND nama='$nama'");
 $data = $query->fetch();
 if($query->rowCount() > 0){
      if($data['nis']=="admin"){
      $_SESSION['nis'] = $nis;
      header("Location:index.php");
   }
   else if($data['nis']=="user"){
      $_SESSION['nis'] = $nis;
      header("Location:index.php");
  }
}else{
  header("Location:form.php");
}