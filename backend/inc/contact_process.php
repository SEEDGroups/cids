<?php session_start();
	include 'config.php';
	include 'dbconnect.php';
	include 'function.php';

	if(isset($_POST) && !empty($_POST)){
		$email = sanitize($_POST['email']);
		$phone = sanitize($_POST['phone']);
		$address = sanitize($_POST['address']);



		$sql = "UPDATE contact SET email = '$email',  address = '$address',phone='$phone'";
		// debugger($sql, true);
		// exit;
		$query = mysqli_query($conn, $sql);


		if($query){
			$_SESSION['success'] = "Contact Info has been Updated successfully.";

			@header('location: ../contact.php');
			exit;
		}else{
			$_SESSION['warning'] = "Contact Info couldn't be update at this moment!";
			@header('location: ../contact.php');
			exit;
		}
	}
?>
