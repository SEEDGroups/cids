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
                  $_SESSION['error'] = "Member doesn't exist or already deleted!!";
                  @header('location: list_position.php');
                  exit;
                }

              }else{
              $_SESSION['error'] = "Invalid action!";
              @header('location: list_position.php');
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
                            <?php echo ucfirst($act);?> <?php if($act=="update"){echo '';}else{echo "new";}?> Member <small><a href="list_position.php"><i class="fa fa-fw fa-undo">
                            </i> Goback</a>
                            </small>
                        </h1>

                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                        <form class="form-horizontal" method="POST" action="<?php if($act=="update"){echo "inc/position_update.php";} else{ echo "inc/position_process.php";}?>" enctype="multipart/form-data">
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Full name</label>
                            <div class="col-sm-6">
                              <input type="text" required class="form-control" name="name" placeholder="Jhon Doe">


                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-2 control-label">Designation</label>
                            <div class="col-sm-6">
                             <input type="text" name="pos_title" id="pos_title" class="form-control" required placeholder="Main Person of the Company">

                            </div>
                          </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Position to be displayed at front</label>
                            <div class="col-sm-6">
                             <input type="number" name="list_pos" id="list_pos" class="form-control" >
                            </div>
                          </div>

													<div class="form-group">
                            <label class="col-sm-2 control-label">Type of member</label>
                            <div class="col-sm-6">
                              <select class="form-control" name="type">
                                <option disabled selected>---- Postion Status ---- </option>
                                <option value="1">Board Member</option>
                                <option value="0">Others</option>
                              </select>
                            </div>
                          </div>

													<div class="form-group">
                            <label class="col-sm-2 control-label">Content</label>
                            <div class="col-sm-6">
                             <textarea name="message" id="message" rows="6" class="form-control" placeholder="Enter the content here." style="resize: vertical;"></textarea>
                            </div>
                          </div>


                          <div class="form-group">
                            <label class="col-sm-2 control-label">Status</label>
                            <div class="col-sm-6">
                              <select class="form-control" name="status">
                                <option selected disabled>---- Postion Status ---- </option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                              </select>
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
            selector: '#message',
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