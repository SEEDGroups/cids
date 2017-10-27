<?php $getVideo = getVideo($id); //debugger($getVideo);?>
<div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft">
  <left>
    <a href="gallery.php" title="Go back to the video gallery page">
    <i class="fa fa-fw fa-home fa-lg"></i> Video Gallery</a>
  </left>
  <div class="row">
      <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
        <iframe src="https://www.youtube.com/embed/<?php echo $getVideo['videoId'] ?>?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">

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
</div>
