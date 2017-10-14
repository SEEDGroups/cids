<?php $current_page_active = basename($_SERVER['REQUEST_URI']);
	if(isset($_GET) && !empty($_GET['act'])) {
			$act=$_GET['act']; $video= substr(sha1('view-video-'), 9,9); $image= substr(sha1('view-image-'), 9,9);
		}
	else{
		$video = 1;
		$act = 2;
		$image = 3;
	}

 ?>

<?php include "inc/header.php"; ?>
	<div id="fh5co-page">
		<?php include "pages/navigation.php"; ?>
		<?php if($current_page_active == "work.php?act=".$act."" && $act == $image){
				include "pages/galleryImages.php";
		}else if($current_page_active == "work.php?act=".$act."" && $act == $video){
			include "pages/galleryVideo.php";
		}else{
			include "pages/work.php";
		} ?>
	</div>
<?php include "inc/footer.php"; ?>
