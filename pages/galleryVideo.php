<div id="fh5co-main">
  <?php if(isset($_GET) & !empty($_GET['id'])){
    $id = sanitize($_GET['id']);
  } ?>
<?php $getVideo = getVideo($id); //debugger($getVideo);?>
  <div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft">
    <left>
      <a href="gallery.php" title="Go back to the video gallery page">
      <i class="fa fa-fw fa-home fa-lg"></i> Video Gallery</a>
    </left>
    <div class="row">
        <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
          <figure class="text-center">
          <iframe src="https://www.youtube.com/embed/<?php echo $getVideo['videoId'] ?>?rel=0" frameborder="0" allowfullscreen></iframe>
          </figure>
        </div>

        <div class="col-md-8 col-md-offset-2 animate-box" data-animate-effect="fadeInLeft">

          <div class="col-md-9 col-md-push-3">
            <h1><?php echo $getVideo['title']; ?></h1>
            <?php if(isset($getVideo['description']) && !empty($getVideo['description'])) {
              ?>

            <p><?php echo html_entity_decode($getVideo['description']); ?></p>
            <?php
          } ?>
          </div>

          <div class="col-md-3 col-md-pull-9 fh5co-services">
            <h3>Information</h3>
            <ul>
              <li><?php echo $getVideo['added_date']; ?></li>
            </ul>
          </div>

        </div>
      </div>

    <div class="row work-pagination animate-box" data-animate-effect="fadeInLeft">
      <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0">

        <div class="col-md-4 col-sm-4 col-xs-4 text-center">
          <a href="#"><i class="icon-long-arrow-left"></i> <span>Previous Project</span></a>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4 text-center">
          <a href="#"><i class="icon-th-large"></i></a>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4 text-center">
          <a href="<?php echo "video.php?act=1d72fb46a&id="; echo $getVideo['id']+1; ?>"act=1d72fb46a&id=1><span>Next Project</span> <i class="icon-long-arrow-right"></i></a>
        </div>
      </div>
    </div>

  </div>
</div>
