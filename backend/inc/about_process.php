<?php session_start();
	include 'config.php';
	include 'dbconnect.php';
	include 'function.php';

	if(isset($_POST) && !empty($_POST)){
		$summary = htmlentities($_POST['summary']);
		$description = htmlentities($_POST['description']);
		$page = sanitize($_POST['page']);
		if($page=="Vision and mission"){
			$id=7;
		}else if($page=="Contribution to National Development"){
			$id=8;
		}else if($page=="collaboration"){
			$id=9;
		}else {
			$id=10;
		}
	


		$sql = "UPDATE about_org SET description = '$description', summary = '$summary' WHERE id='$id'";
	//	debugger($sql, true);
		// exit;
		$query = mysqli_query($conn, $sql);
		/*echo "after query";*/
		if($query){

				$_SESSION['success'] = ucfirst($page)." has been updated successfully.";
						@header('location: ../about_vision.php');
						exit;
					}
		}
		else{
				$_SESSION['warning'] = ucfirst($page)." couldn't be updated at this moment.";
						@header('location: ../about_vision.php');
						exit;
					}
			
?>
