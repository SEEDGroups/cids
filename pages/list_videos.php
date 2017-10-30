<div id="fh5co-main">
  <div class="fh5co-narrow-content">
    <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">
      Videos
    </h2>
<?php $getYoutubeLink = getLink(); //debugger($getYoutubeLink);?>
  <div class="row animate-box" data-animate-effect="fadeInLeft">
    <div class="clearfix visible-md-block visible-sm-block"></div>
    <?php foreach($getYoutubeLink as $youtubeLink){
      //debugger($youtubeLink);
      ?>

    <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
      <a href="video.php?act=<?php echo substr(sha1('view-video-'.$youtubeLink['id']), 9,9); ?>&id=<?php echo $youtubeLink['id']; ?>">
        <img src="http://img.youtube.com/vi/<?php echo $youtubeLink['videoId'];?>/hqdefault.jpg" alt="<?php echo $youtubeLink['title'];?>" class="img-responsive" />
        <h3 class="fh5co-work-title"><?php echo $youtubeLink['title']; ?></h3>
        <p></p>
      </a>
    </div>
    <div class="clearfix visible-md-block visible-sm-block"></div>
    <?php
    } ?>

  </div>
  </div>  <!-- narrow content ko end -->
  </div> <!-- main ko end -->                                             
