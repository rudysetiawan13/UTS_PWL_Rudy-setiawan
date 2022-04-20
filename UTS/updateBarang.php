<h1>Silahkan Update Barang</h1>
<form action="" method="POST">
			<p style="font-size: 2rem; font-weight: 800;">Update</p>
			<div >
				<input type="text" placeholder="kode_barang" name="kode_barang">
			</div>
			<div>
				<input type="text" placeholder="nama" name="nama">
			</div>
            <div>
				<input type="text" placeholder="harga" name="harga">
			</div>
            <div>
				<input type="text" placeholder="gambar" name="gambar">
			</div>
            <div>
				<input type="number" placeholder="jumlah Stok" name="jml_stok">
			</div>
			<div>
				<button name="submit" >Masukkan</button>
			</div>
		</form>

		<?php
session_start();

include "conn.php";
include "conf.php";
  
$kodeBarang=$_POST['kode_barang'];
$nama=$_POST['nama'];
$harga=$_POST['harga'];
$gambar = $_POST['gambar'];
$jml=$_POST['jml_stok'];

if(isset($_POST['submit'])){ 	
		$sql = "update barang set nama='$nama',harga='$harga',jumlah='$jumlah',gambar='$gambar',jml_stok='$jml' where kode_barang='$kode_barang'";
	}else{
		echo "gagal update";
	} 
?>  