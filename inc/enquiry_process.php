<?php session_start();
	include 'config.php';
	include 'dbconnect.php';
	include 'function.php';
	
	if(isset($_POST) && !empty($_POST)){
		$name= sanitize($_POST['name']);
		$email = sanitize($_POST['email']);
		$phone = sanitize($_POST['phone']);
		$message=sanitize($_POST['message']);
		
		global $conn;

		$sql = "INSERT INTO enquiry SET name='$name', email='$email', phone='$phone', message='$message'";
		$query = mysqli_query($conn, $sql);
		/*debugger($_POST);
		exit;
*/
		if($query){
			
			
			@header('location: ../');
			exit;
		}else{
			
			@header('location: ../');
			exit;
		}		
	}
?>