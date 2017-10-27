<?php session_start();
include 'config.php';
include 'dbconnect.php';
include 'function.php';
if(isset($_POST) && !empty($_POST)){
  global $conn;
  $str = $_POST['videoId'];
  $title = sanitize($_POST['title']);
  $description = htmlentities($_POST['description']);
  $videoLink = substr($str, 32, 11);
  $_SESSION['LINK'] = $videoLink;
  $sql = "INSERT INTO youtube set title = '$title', description = '$description', videoId='$videoLink'";
  $query = mysqli_query($conn, $sql);
  if($query){
    $_SESSION['success'] = 'Video has been added to the gallery.';
  }else{
    $_SESSION['info'] = 'Video couuldnt be added at this moment in the gallery. Please try again in 5 minutes.';
  }
  header('location: ../videoAdd.php');
}else{
  $_SESSION['error']= "invalid entry";
  @header('location: ../videoAdd.php');
}

 ?>
