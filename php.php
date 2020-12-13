<?php 
	session_start();
	$db = mysqli_connect('HOSTNAME', 'DB_USERNAME', 'DB_PASSWORD', 'DB_NAME');
	$name = "";
	$surname = "";
	$ac_id = "";
	$reg_date = "";
	$email = "";
	$id = 0;
	$update = false;
	
	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$ac_id = $_POST['ac_id'];
		$reg_date = $_POST['reg_date'];
		$email = $_POST['email'];
		mysqli_query($db, "INSERT INTO university (name, surname, ac_id, reg_date, email) VALUES ('$name', '$surname', '$ac_id', '$reg_date', '$email')"); 
		header('location: index.php');
	}
	
	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$ac_id = $_POST['ac_id'];
		$reg_date = $_POST['reg_date'];
		$email = $_POST['email'];
		mysqli_query($db, "UPDATE university SET name='$name', surname='$surname', ac_id='$ac_id', reg_date='$reg_date', email='$email' WHERE id=$id");
		header('location: index.php');
	}
	
	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM university WHERE id=$id");
		header('location: index.php');
	}
	?>