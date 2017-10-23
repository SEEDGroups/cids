<?php session_start(); ?>
<?php include 'inc/config.php'; include 'inc/dbconnect.php'; include 'inc/function.php'; include 'security_inside.php';?>
<?php
	include 'inc/header.php';
		include 'inc/navigation.php';
?>

 <div id="wrapper">

       <?php include 'inc/navigation.php';?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                  <?php $contact=getContact();
                  foreach($contact as $listContact){
                    ?>


                    <div class="col-lg-12">
                      <?php include 'inc/notification.php';?>

                        <h1 class="page-header">Update Contact Info </h1>

                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                 <form class="form-horizontal" method="POST" action="inc/contact_process.php">

                      

                            <div class="form-group">
                            <label class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-6">
                              <input type="email" required class="form-control" name="email" value="<?php echo $listContact['email']; ?>" >
                            </div>
                          </div>




                             <div class="form-group">
                            <label class="col-sm-2 control-label">Address</label>
                            <div class="col-sm-6">
                              <input type="text" required class="form-control" name="address" value="<?php echo $listContact['address']; ?>">
                            </div>
                          </div>


                            <div class="form-group">
                            <label class="col-sm-2 control-label">Phone</label>
                            <div class="col-sm-6">
                              <input type="text" required class="form-control" name="phone" value="<?php echo $listContact['phone']; ?>">
                            </div>
                          </div>


                           <!-- 
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Facebook link</label>
                            <div class="col-sm-6">
                              <input type="link" class="form-control" name="link" value="<?php echo $listContact['link']; ?>">
                            </div>
                          </div> -->



                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-6">
                              <button type="submit" class="btn btn-success">Update</button>


                            </div>
                          </div>
                        </form>
                  </div>
               <?php
                  }
                   ?>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php include 'inc/footer.php'; ?>
