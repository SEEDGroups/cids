<?php
require "../inc/config.php";
include ADMIN_SITEMAP."inc/function.php";
include ADMIN_SITEMAP."class/database.php";
include ADMIN_SITEMAP."class/contact.php";
$contact = new Contact();

if(isset($_POST) && !empty($_POST)){
  $data = array();
  $data['email'] = sanitize($_POST['email']);
  $data['address'] = sanitize($_POST['address']);
  $data['phone'] = sanitize($_POST['phone']);

  $updateContact = $contact->updateContact($data);

}else{
  $_SESSION['error'] = "Please fill the form properly.";
  @header('location: ../contact_info');
  exit;
}
?>
