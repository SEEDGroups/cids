<?php $contact = getContactInfo();?>
<div id="fh5co-main">
  <div class="fh5co-more-contact">
    <div class="fh5co-narrow-content">
      <div id="map" class="animate-box" data-animate-effect="fadeInLeft"></div>
      <div class="row">
        <div class="col-md-4">
          <div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInLeft">
            <div class="fh5co-icon">
              <i class="icon-envelope-o"></i>
            </div>
            <div class="fh5co-text">
              <p><a href="#"><?php echo $contact['email']; ?></a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInLeft">
            <div class="fh5co-icon">
              <i class="icon-map-o"></i>
            </div>
            <div class="fh5co-text">
              <p><a href="#"><?php echo $contact['address']; ?></a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInLeft">
            <div class="fh5co-icon">
              <i class="icon-phone"></i>
            </div>
            <div class="fh5co-text">
              <p><a href="tel://"><?php echo $contact['phone']; ?></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft">

    <div class="row">
      <div class="col-md-4">
        <h1>Get In Touch</h1>
      </div>
    </div>
    <form action="inc/enquiry_process.php" method="post">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6">

              <div class="form-group">
                <input type="text" name="name" id="name" class="form-control" placeholder="Name">
              </div>
              <div class="form-group">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="text" name="phone" id="phone"  class="form-control" placeholder="Phone">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-md" value="Send Message">
              </div>
            </div>

          </div>
        </div>

      </div>
    </form>
  </div>

</div>
