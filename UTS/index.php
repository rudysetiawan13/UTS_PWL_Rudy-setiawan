<?php
include 'conf.php'; 
include 'conn.php';
if(isset($_SESSION['username'])== 0) { 
	header('Location: login.php'); 
}

?>

<h1><p>welcome <?php echo $_SESSION['username']; ?></p></h1>
<h2><p><a href="barang.php">Menu Barang</p></h2>
<h2><p><a href="user.php">Menu User</p></h2>
<br><a href="logout.php">Logout</a>

?