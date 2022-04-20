<h1>Silahkan Delete Barang</h1>
<form action="deleteBarang.php" method="POST">
			<p style="font-size: 2rem; font-weight: 800;">Delete</p>
			<form>
			<div >
				<input type="text" placeholder="kode_barang" name="kode_barang">
			</div>
		</form>

<?php
session_start();

include "conn.php";
include 'conf.php';
$kode_barang=$_GET['kode_barang']; 

$sql = "delete from barang where kode_barang='$kode_barang'";

if ($conn->query($sql) === TRUE) {
  $conn->close(); 
  echo "berhasil hapus";  
}else{
  $conn->close();  
  echo "gagal hapus";
} 
?>