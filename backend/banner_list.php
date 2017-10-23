
<?php session_start(); ?>
<?php include 'inc/config.php'; include 'inc/dbconnect.php'; include 'inc/function.php'; include 'security_inside.php';?>
<?php include 'inc/header.php'; ?>
<?php
        if(isset($_GET['id']) && !empty($_GET['act'])) {
            $id = sanitize($_GET['id']);
            $field = "id";
            $tableName = "banner_info";
           
            $del = deleteData($tableName, $field, $id);

            if($del){
                unlink($getBanner['banner_title']);
                $_SESSION['success'] = "Banner has been removed successfully";
              ?>
              <script type="text/javascript">
                  window.location.href= "http://hub4growthtu.edu.np/backend/banner_list.php";
              </script>
              <?php
                exit;
            }else{
                $_SESSION['error'] = "Banner couldn't be removed at this moment or it has already been deleted.";
                ?>
                 <script type="text/javascript">
                  window.location.href= "http://hub4growthtu.edu.np/backend/banner_list.php";
              </script>
                <?php
            exit;
            }
        }
?>
<?php include 'datatable_css.php';?>

    <div id="wrapper">

       <?php include 'inc/navigation.php';?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Hesading -->
                <div class="row">

                    <div class="col-lg-12">
                      <?php include 'inc/notification.php'; ?>
                        <h1 class="page-header">
                          Banner List <small class="pull-right"><a href="add_banner.php" class="btn btn-success"><i class="fa fa-fw fa-plus"></i> Add Banner</i></a></small>
                        </h1>

                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                 <?php $getBanners = getBanners(); //debugger($getBanners); exit;?>
                      <table id="getBanners" class="table table-bordered">
                        <thead>
                        <tr>
                          <th>S.No.</th>
                          <th style="width: 450px;">Thumbnail</th>
                          <th>Caption</th>
                          <th>Description</th>
                          <th>Action</th>
                         </tr>
                        </thead>
                         <tbody>
                          <?php $i=1;

                          foreach ($getBanners as $getBanner){

                          ?>
                              <tr>
                                <td><?php echo $i; $i++;?></td>
                                 <td><img src="<?php echo MEMBER_IMAGE_URL.$getBanner['banner_title'];?>" class="img img-responsive" style="max-width:100%; height: 25%;"></td>
                                 <td><?php echo $getBanner['caption'];?></td>
                                 <td><?php echo $getBanner['description'];?></td>
                                 <td>
                                 <a onclick="return confirm('Are you sure you want to delete this Banner?')" href="banner_list.php?id=<?php echo $getBanner['id']; ?>&act=<?php echo substr(sha1('delete-'.$getBanner['id']), 4, 9);?>" style="text-decoration: none;"><i class="fa fa-fw fa-trash fa-2x"></i></a>
                                 </td>
                              
                              </tr>
                              <?php
                              }

                          ?>
                         </tbody>
                      </table>
                  </div>

                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php include 'inc/footer.php';?>
<?php include 'inc/dataTables.php';?>
