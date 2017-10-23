<div id="fh5co-main">

  <div class="fh5co-narrow-content">
    <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">
      <div class="row">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#images" aria-controls="images" role="tab" data-toggle="tab">Images</a></li>
          <li role="presentation"><a href="#videos" aria-controls="videos" role="tab" data-toggle="tab">Videos</a></li>
        </ul>
      </div>
    </span></h2>
    <div class="tab-content">
      <br/>
      <div role="tabpanel" class="tab-pane active" id="images" style="color: white">
    <div class="row animate-box" data-animate-effect="fadeInLeft">
      <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
        <a href="work.php?act=<?php echo substr(sha1('view-image-'), 9,9); ?>">
          <img src="<?php echo images_url;?>/work_1.jpg" alt="" class="img-responsive">
          <h3 class="fh5co-work-title">Image Title Here</h3>
          <p>Illustration, Branding</p>
        </a>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
        <a href="work.php?act=<?php echo substr(sha1('view-image-'), 9,9); ?>">
          <img src="<?php echo images_url;?>/work_2.jpg" alt="" class="img-responsive">
          <h3 class="fh5co-work-title">Image Title Here</h3>
          <p>Web, Packaging</p>
        </a>
      </div>
      <div class="clearfix visible-sm-block"></div>
      <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
        <a href="work.php?act=<?php echo substr(sha1('view-image-'), 9,9); ?>">
          <img src="<?php echo images_url;?>/work_3.jpg" alt="" class="img-responsive">
          <h3 class="fh5co-work-title">Image Title Here</h3>
          <p>Branding, Web</p>
        </a>
      </div>
      <div class="clearfix visible-md-block"></div>
      <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
        <a href="work.php?act=<?php echo substr(sha1('view-image-'), 9,9); ?>">
          <img src="<?php echo images_url;?>/work_4.jpg" alt="" class="img-responsive">
          <h3 class="fh5co-work-title">Image Title Here</h3>
          <p>Logo, Branding, Web</p>
        </a>
      </div>
      <div class="clearfix visible-sm-block"></div>
      <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
        <a href="work.php?act=<?php echo substr(sha1('view-image-'), 9,9); ?>">
          <img src="<?php echo images_url;?>/work_5.jpg" alt="" class="img-responsive">
          <h3 class="fh5co-work-title">Image Title Here</h3>
          <p>Web, Packaging, Branding</p>
        </a>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
        <a href="work.php?act=<?php echo substr(sha1('view-image-'), 9,9); ?>">
          <img src="<?php echo images_url;?>/work_6.jpg" alt="" class="img-responsive">
          <h3 class="fh5co-work-title">Image Title Here</h3>
          <p>Branding</p>
        </a>
      </div>
      <div class="clearfix visible-md-block visible-sm-block"></div>

      <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
        <a href="work.php?act=<?php echo substr(sha1('view-image-'), 9,9); ?>">
          <img src="<?php echo images_url;?>/work_7.jpg" alt="" class="img-responsive">
          <h3 class="fh5co-work-title">Image Title Here</h3>
          <p>Web, Illustration</p>
        </a>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
        <a href="work.php?act=<?php echo substr(sha1('view-image-'), 9,9); ?>">
          <img src="<?php echo images_url;?>/work_8.jpg" alt="" class="img-responsive">
          <h3 class="fh5co-work-title">Image Title Here</h3>
          <p>Branding, Web</p>
        </a>
      </div>
      <div class="clearfix visible-sm-block"></div>
      <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
        <a href="work.php?act=<?php echo substr(sha1('view-image-'), 9,9); ?>">
          <img src="<?php echo images_url;?>/work_1.jpg" alt="" class="img-responsive">
          <h3 class="fh5co-work-title">Image Title Here</h3>
          <p>Illustration, Branding</p>
        </a>
      </div>
      <div class="clearfix visible-md-block"></div>

    </div>
    </div>                                                 <!-- images ko div ko last -->
    <?php $getYoutubeLink = getLink(); //debugger($getYoutubeLink);?>

    <div role="tabpanel" class="tab-pane" id="videos" style="color: white">
  <div class="row animate-box" data-animate-effect="fadeInLeft">
    <?php foreach($getYoutubeLink as $youtubeLink){
      //debugger($youtubeLink);
      ?>

    <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
      <a href="video.php?act=<?php echo substr(sha1('view-video-'), 9,9); ?>&id=<?php echo $youtubeLink['id']; ?>">
        <img src="http://img.youtube.com/vi/<?php echo $youtubeLink['videoId'];?>/hqdefault.jpg" alt="<?php echo $youtubeLink['title'];?>" class="img-responsive" />
        <h3 class="fh5co-work-title"><?php echo $youtubeLink['title']; ?></h3>
        <p></p>
      </a>
    </div>
    <div class="clearfix visible-md-block visible-sm-block"></div>
    <?php
    } ?>

  </div>
  </div>                                                 <!-- video ko div ko last -->
   </div>                                               <!-- tabs ko div ko last -->
  </div>

</div>
