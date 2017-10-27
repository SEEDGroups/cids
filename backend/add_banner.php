<?php session_start(); include 'inc/config.php'; include 'inc/dbconnect.php'; include 'inc/function.php'; $act = "add";?>
<?php
	include 'inc/header.php';
	include 'security_inside.php';
	include 'inc/navigation.php';

	if(isset($_GET['id']) && isset($_GET['act'])){
        $id = sanitize($_GET['id']);
          $check  = substr(sha1('update-'.$id), 4,9);
            if($check == $_GET['act']){
                $user_info = getAllInfoOfMemberById($id);

                if($user_info){
                  $act = "update";
                }else{
                  $_SESSION['error'] = "Banner doesn't exist or already deleted!!";
                  @header('location: banner_list.php');
                  exit;
                }

              }else{
              $_SESSION['error'] = "Invalid action!";
              @header('location: banner_list.php');
              exit;
            }

          }else{
          $act="register";
          }

?>
 <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=vac10evlzh1ylmepy70qr1q28wkygjzqa36g98uakma5l2jc"></script>

 <div id="wrapper">

       <?php include 'inc/navigation.php';?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">

                    <div class="col-lg-12">
                      <?php include 'inc/notification.php';?>

                        <h1 class="page-header">
                            <?php echo ucfirst($act);?> <?php if($act=="update"){echo '';}else{echo "new";}?> Banner <small><a href="banner_list.php"><i class="fa fa-fw fa-undo">
                            </i> Goback</a>
                            </small>
                        </h1>

                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                        <form class="form-horizontal" method="POST" action="inc/banner_process.php" enctype="multipart/form-data">
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Banner Caption</label>
                            <div class="col-sm-6">
                              <textarea name="caption" id="caption" class="form-control" rows="3" style="resize:vertical;" ><?php echo html_entity_decode($getVisionList['caption']); ?></textarea>


                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-2 control-label">Banner Description</label>
                            <div class="col-sm-6">
                             <input type="text" name="description" id="description" class="form-control" required placeholder="Main Person of the Company">

                            </div>
                          </div>




													<div class="form-group">
														<label class="col-sm-2 control-label">Profile Picture</label>
														<div class="col-sm-6">
															<input type = "file" name="images" accept="image/*">
														</div>
													</div>


                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-6">
                              <button type="submit" class="btn btn-success"> <?php echo ucfirst($act);?></button>

                            </div>
                          </div>
                        </form>
                  </div>

                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


<?php include 'inc/footer.php'; ?>
<script>
         tinymce.init({
            selector: '#caption',
            height: 300,
            theme: 'modern',
             plugins: [
                  'codesample imagetools',
    'advlist autolink lists link image charmap print preview anchor textcolor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code help'
  ],
  toolbar: 'insert | undo redo |  styleselect | bold italic forecolor backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help | fontsizeselect',
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css']
         });
      </script>