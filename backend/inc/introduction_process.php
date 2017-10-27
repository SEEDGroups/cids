<?php session_start();
	include 'config.php';
	include 'dbconnect.php';
	include 'function.php';

  if(isset($_POST) && !empty($_POST)){
    global $conn;
    $introduction = htmlentities($_POST['introduction']);
    $work_package = htmlentities($_POST['work_package']);
    $partner_institution = htmlentities($_POST['partner_institution']);
    $ouroffice = htmlentities($_POST['our_office']);

    $sql = "UPDATE introduction SET introduction = '$introduction', work_package='$work_package', partner_institution='$partner_institution', our_office = '$ouroffice' WHERE id=1";
    $query=mysqli_query($conn, $sql);
    if($query){
      $_SESSION['success'] = "Introduction of HUB4GROWTH is updated successfully";
      @header('location: ../introduction.php');
      exit;
    }else{
      $_SESSION['info'] = "Introduction of HUB4GROWTH couldn't be updated at this moment. Please try again later!!";
      @header('location: ../introduction.php');
      exit;
    }
  }else{
    $_SESSION['error'] = "Please fill the form properly!!";
    @header('location: ../introduction.php');
    exit;
  }
  ?>
