<?php session_start();
	include 'inc/config.php';
	include 'inc/dbconnect.php';
    include 'inc/function.php';
if(isset($_POST) && !empty($_POST)){
	$username = sanitize($_POST['username']);
	$password = sha1($_POST['password']);
	// debugger($username);
	// debugger($password);
	$users = getUser($username);

	  //debugger($users, true);

	if($users){

			if($password == $users['password']){
				$_SESSION['username'] = $users['username'];
				$_SESSION['user_id'] = $users['id'];
				$_SESSION['status'] = $users['status'];
				$_SESSION['role'] = $users['role_id'];
				$_SESSION['is_logged_in'] = "user has logged in";
				$_SESSION['success'] = "Welcome, ".$_SESSION['username']."!";

					if(isset($_POST['remember']) && !empty($_POST['remember'])){
						setcookie('is_logged_in', 1, time()+259200);
					} 															//cookies ended here
					header('location: dashboard.php');
					exit;
	 			} 																// password ended here
	 		else
	 			{
					$_SESSION['warning'] = "PASSWORD IS INCORRECT";
					header('location: index.php');
					exit;
				} 																//password ko else ended here
	} 																			//users ended here
	 else{
		$_SESSION['error'] = "USERNAME DOESN'T EXIST";
		header('location: index.php');
		exit;
	}																			 // users ko else ended here

} 																				//isset ended here
else{
	$_SESSION['error'] = "USERNAME OR PASSWORD INCORRECT.";
	header('location: index.php');
	exit;
} 																				//isset ko else ended here
?>