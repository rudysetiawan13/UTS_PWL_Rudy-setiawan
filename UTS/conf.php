<?php
include 'conf.php'; 
include 'conn.php';

if(isset($_SESSION['username'])== 0) { 
	header('Location: login.php'); 
}

?>

<h1><p>welcome <?php echo $_SESSION['username']; ?></p></h1>

<br><a href="logout.php">Logout</a>

?>