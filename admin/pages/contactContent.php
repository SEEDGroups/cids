<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Update Contact Info
      <small>CIDS</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Contact</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">
      <?php include ADMIN_SITEMAP."inc/notification.php"; ?>
      <span class="pull-right">
        <?php $contact = new Contact();
          $getContactInfo = $contact->getContact();
        ?>
      </span>
      <!-- /.row -->
      <div class="row">
       <form class="form-horizontal" method="POST" action="controller/contact">
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-6">
                    <input type="email" required class="form-control" name="email" value="<?php echo $getContactInfo[0]->email; ?>" >
                  </div>
                </div>

                   <div class="form-group">
                  <label class="col-sm-2 control-label">Address</label>
                  <div class="col-sm-6">
                    <input type="text" required class="form-control" name="address" value="<?php echo $getContactInfo[0]->address; ?>">
                  </div>
                </div>

                  <div class="form-group">
                  <label class="col-sm-2 control-label">Phone</label>
                  <div class="col-sm-6">
                    <input type="text" required class="form-control" name="phone" value="<?php echo $getContactInfo[0]->phone; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-6">
                    <button type="submit" class="btn btn-success">Update</button>
                  </div>
                </div>
              </form>
        </div>

      <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
