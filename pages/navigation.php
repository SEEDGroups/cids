<?php $current_page_active = basename($_SERVER['REQUEST_URI']); //$current_page = $_SERVER
?>

<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

  <h1 id="fh5co-logo"><a href="index.php"><img src="<?php echo images_url;?>/logo.png" alt="Free HTML5 Bootstrap Website Template"></a></h1>
  <nav id="fh5co-main-menu" role="navigation">
    <ul>
      <li class="<?php echo ($current_page_active == "index.php") ? 'fh5co-active' : ''; ?>"><a href="index.php"><i class="fa fa-home fa-lg" aria-hidden="true" style="color:<?php echo ($current_page_active == "index.php") ? 'red' : ''; ?>;" ></i> Home</a></li>
      <li class="<?php echo ($current_page_active == "whatWeDo.php") ? 'fh5co-active' : ''; ?>"><a href="whatWeDo.php"><i class="fa fa-files-o fa-lg" aria-hidden="true" style="color:<?php echo ($current_page_active == "whatWeDo.php") ? 'red' : ''; ?>;"></i> What we do</a></li>
      <li class="<?php echo ($current_page_active == "event.php") ? 'fh5co-active' : ''; ?>"><a href="event.php"><i class="fa fa-question-circle-o fa-lg" aria-hidden="true" style="color:<?php echo ($current_page_active == "event.php") ? 'red' : ''; ?>;"></i> Events</a></li>
      <li class="<?php echo ($current_page_active == "gallery.php") ? 'fh5co-active' : ''; ?>"><a href="gallery.php"><i class="fa fa-picture-o fa-lg" aria-hidden="true" style="color:<?php echo ($current_page_active == "gallery.php") ? 'red' : ''; ?>;"></i> Gallery</a></li>
      <li class="<?php echo ($current_page_active == "video.php") ? 'fh5co-active' : ''; ?>"><a href="video.php"><i class="fa fa-youtube fa-lg" aria-hidden="true" style="color:<?php echo ($current_page_active == "video.php") ? 'red' : ''; ?>;"></i> Videos</a></li>
      <li class="<?php echo ($current_page_active == "contact.php") ? 'fh5co-active' : ''; ?>"><a href="contact.php"><i class="fa fa-envelope-open fa-lg" aria-hidden="true" style="color:<?php echo ($current_page_active == "contact.php") ? 'red' : ''; ?>;"></i> Contact</a></li>
    </ul>
  </nav>

  <div class="fh5co-footer">
    <p><small>&copy; All Rights Reserved.</span> <span>Designed by <a href="http://freehtml5.co/" target="_blank">Seeds Group</a> </span> <span>Demo Images by: <a href="http://unsplash.com/" target="_blank">Seeds Group</a></span></small></p>
    <ul>
      <li><a href="#"><i class="icon-facebook"></i></a></li>
      <li><a href="#"><i class="icon-twitter"></i></a></li>
      <li><a href="#"><i class="icon-instagram"></i></a></li>
      <li><a href="#"><i class="icon-linkedin"></i></a></li>
    </ul>
  </div>

</aside>
