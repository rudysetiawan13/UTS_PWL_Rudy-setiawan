<h1>Silahkan tambah Barang</h1>
<form action="tambahBarang.php" method="POST">
			<p style="font-size: 2rem; font-weight: 800;">Tambah</p>
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

if (isset($_POST["foto"])){
	$sql = "insert into barang (kode_barang,nama,harga,gambar,jml_stok) values ('$kode_barang',$nama,$harga,'$gambar','$jml_stok')";	  

  if ($conn->query($sql) === TRUE) {
		$conn->close();  
		echo "berhasil tambah";  
	}else{
		$conn->close();  
		echo "gagal tambah";			
	}		
}else{
	echo "Sorry, there was an error uploading your file."; 
}
?>