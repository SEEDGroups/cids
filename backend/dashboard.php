<?php session_start(); include 'inc/config.php'; include 'inc/dbconnect.php';  include 'inc/function.php'; ?>
<?php
    include 'inc/header.php';
    include 'security_inside.php';
    include 'inc/navigation.php';
?>
    <div id="wrapper">

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <?php include 'inc/notification.php'; ?>
                        <h1 class="page-header">
                            Dashboard <small>Design by Seeds</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <?php $totalEvents = getEvents();
                  $totalMembers = getPositionofOrg();
                  $getBannerImages = getAllBannerImages();
                  $getEventImages = getAllEventImages();
                  $getMemberImages = getAllMemberImages();
                  $i = count($getBannerImages);
                   $j = count($getEventImages);
                   $k= count($getMemberImages);
                   $totalImages = $i + $j + $k;

                 ?>
                <div class="row">
                  <div class="col-lg-4">
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <h3 class="panel-title"><i class="fa fa-area-chart fa-fw"></i> Tasks done</h3>
                          </div>
                          <div class="panel-body">
                              <div class="list-group">
                                  <a href="#" class="list-group-item">
                                      <span class="badge"><?php echo count($totalEvents); ?></span>
                                      <i class="fa fa-fw fa-calendar"></i> Total Events
                                  </a>
                                  <a href="#" class="list-group-item">
                                      <span class="badge"><?php echo $totalImages; ?></span>
                                      <i class="fa fa-fw fa-picture-o"></i> Total images uploaded
                                  </a>
                                  <a href="#" class="list-group-item">
                                      <span class="badge"><?php echo count($totalMembers); ?></span>
                                      <i class="fa fa-fw fa-users"></i> Total members
                                  </a>

                              </div>

                          </div>
                      </div>
                  </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include 'inc/footer.php'; ?>
