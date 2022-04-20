<?php
$engi = "mysql";
$host = "localhost";
$dbse = "toko_abc";
$user = "root";
$pass = "";
$koneksi = new PDO($engi.':dbname='.$dbse.";host=".$host,
$user,$pass);
?>