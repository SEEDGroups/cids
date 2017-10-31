<?php session_start(); require '../inc/config.php'; include ADMIN_SITEMAP."inc/function.php"; include ADMIN_SITEMAP."class/database.php";
include ADMIN_SITEMAP."class/user.php";
$user = new USER();
  if(isset($_POST) && !empty($_POST)){
    $username = sanitize($_POST['username']);
    $password = sha1($_POST['password']);
    $user_info = $user->getUserByUsername($username);
    if($password == $user_info[0]->password){
      $_SESSION['username'] = $user_info[0]->username;
      $_SESSION['status'] = $user_info[0]->status;
      $_SESSION['role_id'] = $user_info[0]->role_id;
      $_SESSION['success'] = 'Welcome '.$_SESSION['username'].'! to CIDS Admin Panel.';
      $_SESSION['is_logged_in'] = 1;
        setcookie('is_logged_in', 1, time()+3600);   														//cookies seted here for three days
      @header('location: ../dashboard.php');
      exit;

    }else{
      $_SESSION['error'] = "PASSWORD DOESN'T MATCH!";
      @header('location: ../');
      exit;
    }
  }else{
    $_SESSION['error'] = "INVALID REQUEST! PLEASE TRY AGAIN.";
    @header('location: ../');
    exit;
  }
?>
