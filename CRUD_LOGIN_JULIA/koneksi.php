<?php
$dbh = new PDO('mysql:host=localhost;dbname=rumahsakit', 'root', '');
$query = $dbh->query("select * from tb_user");

?>

<h1>data siswa</h1>
<?php while ($result = $query->fetch()) { ?>
    <p><?= $result['username']; ?>
    <?php } ?>