<?php
session_start();
echo "username = ".$_SESSION['username'];
echo "<br/>";
echo "id = ".$_SESSION['id'];
?>