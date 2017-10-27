<style>
p.fh5co-work-title{
  color: black !important;
}
</style>
<?php $getRelatedVideos = getRelatedVideos($id);?>
<h2 class="animate-box" data-animate-effect="fadeInLeft">Related Videos</h2>
<?php foreach($getRelatedVideos as $getRelatedVideo){?>
  <div class="clearfix"></div>
<div class="row animate-box" data-animate-effect="fadeInLeft">
  <div class="col-md-4">
    <a href="video.php?act=<?php echo substr(sha1('view-video-'.$getRelatedVideo['id']), 9,9); ?>&id=<?php echo $getRelatedVideo['id']; ?>">
      <img src="http://img.youtube.com/vi/<?php echo $getRelatedVideo['videoId'];?>/hqdefault.jpg" alt="<?php echo $getRelatedVideo['title'];?>" class="img-responsive" />
    </a>
  </div>
  <div class="col-md-8">
    <a class="link_title" href="video.php?act=<?php echo substr(sha1('view-video-'.$getRelatedVideo['id']), 9,9); ?>&id=<?php echo $getRelatedVideo['id']; ?>">
      <p class="fh5co-work-title"><?php echo ucfirst($getRelatedVideo['title']); ?></p>
    </a>
  </div>
  </div>
  <?php
} ?>
