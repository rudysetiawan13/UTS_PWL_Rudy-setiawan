<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
<?php
include 'conf.php';
include 'conn.php';

if(!isset($_SESSION['username'] )== 0) { 
    header('Location: index.php');
}

if(isset($_POST['login'])) { 
    $username = $_POST['username']; 
    $password = $_POST['password'];

	try {
		$sql = "SELECT * FROM login WHERE username = :username AND password = :password";
		$stmt = $conn->prepare($sql); 
		$stmt->bindParam(':username', $username);
		$stmt->bindParam(':password', $password);
		$stmt->execute();

		$count = $stmt->rowCount();
		if($count == 1) { 
			$_SESSION['username'] = $username;
			header("Location: index.php");
			return;
		}else{
			echo "Login GAGAL";
		}
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}
}
	?>
	<div class="container">
		<form action="" method="POST">
			<p style="font-size: 2rem; font-weight: 800;">Login</p>
			<div >
				<input type="text" placeholder="username" name="username">
			</div>
			<div>
				<input type="password" placeholder="Password" name="password">
			</div>
			<div>
				<button name="login" >Login</button>
			</div>
		</form>
	</div>
</body>
</html>