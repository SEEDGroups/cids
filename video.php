<?php include "inc/header.php"; ?>
<?php if((isset($_GET['id'])) && (!empty($_GET['act']))){
	$id = sanitize($_GET['id']);
	$check = substr(sha1('view-video-'.$id), 9,9);
	if($check == $_GET['act']){
		$view = "lg-video";
	}else{
		header('location: video.php');
		exit;
	}
} ?>
	<div id="fh5co-page">
		<?php include "pages/navigation.php"; ?>
		<?php if(isset($view)){
						if($view == "lg-video" ){
							include "pages/galleryVideo.php";
						}
					}
					else{
						include "pages/list_videos.php";
					}
		 ?>
	</div>
<?php include "inc/footer.php"; ?>
