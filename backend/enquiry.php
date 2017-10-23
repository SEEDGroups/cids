
<?php session_start(); include 'inc/config.php'; include 'inc/function.php'; include 'inc/dbconnect.php';
include 'security_inside.php';?>
<?php
      include 'inc/header.php';
      include 'datatable_css.php';
?>

<?php


        if(isset($_GET['id']) && !empty($_GET['act'])) {
            $id = sanitize($_GET['id']);
            $field = "id";
            $tableName = "enquiry";
            $del = deleteData($tableName, $field, $id);

            if($del == 1){
                $_SESSION['success'] = "Enquiry has been removed successfully";
                ?>
                <script type="text/javascript">
                    window.location.href = "http://nitro/backend/enquiry.php";
                </script>
                <?php
            exit;
            }else{
                $_SESSION['error'] = "Enquiry couldn't be removed at this moment. Please try again later.";
                ?>
                <script type="text/javascript">
                    window.location.href = "nitro/backend/enquiry.php";
                </script>
                <?php
            exit;
            }
        }

    ?>


    <div id="wrapper">

       <?php include 'inc/navigation.php';?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Hesading -->
                <div class="row">

                    <div class="col-lg-12">
                      <?php include 'inc/notification.php'; ?>
                        <h1 class="page-header">
                          List Enquiries
                        </h1>

                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                 <?php $listEnquiries = getAllEnquiry();
                 ?>
                      <table id="listEnquiry" class="table table-bordered">
                        <thead>
                          <th>S.No.</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Message</th>
                          <th>Date</th>
                          <th>Action</th>

                        </thead>
                         <tbody>
                          <?php $i=1;
                            foreach ($listEnquiries as $listEnquiry) { ?>
                              <tr>
                                <td><?php echo $i; $i++;?></td>
                                <td><?php echo $listEnquiry['name'];?></td>
                                <td><?php echo $listEnquiry['email'];?></td>
                                <td><?php echo $listEnquiry['message'];?></td>
                                <td><?php echo $listEnquiry['added_date']; ?></td>
                                <td><a onclick="return confirm('Are you sure you want to delete this enquiry?')" href="enquiry.php?id=<?php echo $listEnquiry['id']; ?>&act=<?php echo substr(sha1('delete-'.$listEnquiry['id']), 4, 9);?>" style="text-decoration: none;"><i class="fa fa-fw fa-trash fa-2x"></i></a></td>

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
