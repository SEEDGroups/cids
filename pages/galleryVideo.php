<?php if(isset($_GET) & !empty($_GET['id'])){
  $id = sanitize($_GET['id']);
} ?>
<div id="fh5co-main">
  <div class="row">
  <div class="Youtube_style col-md-7">
    <?php include "pages/video_list.php"; ?>
  </div>
  <div class="right_style col-md-5">
    <div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft">
    <?php include "pages/relatedVideos.php"; ?>
  </div>
</div>

</div>
