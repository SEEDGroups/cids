
<?php session_start(); include 'inc/config.php'; include 'inc/dbconnect.php';  include 'inc/function.php'; include 'security_inside.php';?>
<?php include 'inc/header.php'; ?>
<?php
        if(isset($_GET['id']) && !empty($_GET['act'])) {
            $id = sanitize($_GET['id']);
            $field = "id";
            $tableName = "achievement";
            $del = deleteData($tableName, $field, $id);

            if($del == 1){
                $_SESSION['success'] = "Event has been removed successfully";
               ?>
                 <script type="text/javascript">
                  window.location.href= "http://hub4growthtu.edu.np/backend/list_events.php";
              </script>
                <?php
            exit;
            }else{
                $_SESSION['error'] = "Event couldn't be removed at this moment. Please try again later.";
              ?>
                 <script type="text/javascript">
                  window.location.href= "http://hub4growthtu.edu.np/backend/list_events.php";
              </script>
                <?php
            exit;
            }
        }
?>
<style>
ul>li.active>a{
	font-weight: 700 !important;
	color: white;
}
ul>li>a{
	font-weight: 700 !important;
	color: black;
}
th,td{
    color: black;
}
</style>
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
                          Events List
                          <small class="pull-right">
                            <a href="events.php" class="btn btn-success">
                              <i class="fa fa-fw fa-plus"></i> Add Events
                            </a>
                          </small>
                        </h1>

                    </div>
									<!-- Nav tabs -->
									<ul class="nav nav-tabs" role="tablist">
										<li role="presentation" class="active"><a href="#events" aria-controls="events" role="tab" data-toggle="tab">Events</a></li>
										<li role="presentation"><a href="#timeline" aria-controls="timeline" role="tab" data-toggle="tab">Timeline</a></li>
									</ul>
								
					 <!-- Tab panes -->

		<div class="tab-content">
			<br/>			
			<div role="tabpanel" class="tab-pane active" id="events" style="color: white">  <!-- tabpanel starts here for events -->
			    <?php $getEventLists = getEvents(); ?>
                      <table id="listEvents" class="table table-bordered">                  <!-- table starts here for events -->
                        <thead>
                            <tr>
                          <th>S.No.</th>
                          <th>Event Title</th>
                          <th>Event Summary</th>
                          <th>Event Location</th>
                          <th>Event Date</th>
                          <th>Event Time</th>
                          <th style="width: 450px;">Thumbnail</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php $i =1;
                          //debugger($getEventLists); //exit;
                          foreach ($getEventLists as $getEvent){ ?>
                              <tr>
                                <td><?php echo $i; $i++;?></td>
                                 <td><?php echo $getEvent['event_title'];?></td>

                                 <td><?php echo $getEvent['event_summary'];?></td>


                                 <td><?php echo $getEvent['event_location'];?></td>

                                 <td><?php echo $getEvent['event_date'];?></td>

                                 <td><?php echo $getEvent['event_time'];?></td>
                                 <td><img src="<?php echo MEMBER_IMAGE_URL.$getEvent['image_title'];?>" class="img img-responsive" style="max-width:100%; height: 25%;"></td>

                                <td>

                                  <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Event?')" href="list_events.php?id=<?php echo $getEvent['id']; ?>&act=<?php echo substr(sha1('delete-'.$getEvent['id']), 4, 9);?>" title="Delete">
                                   <i class="fa fa-trash-o" aria-hidden="true"></i>
                                 </a> </i></td>

                              </tr>
                              <?php
                            } //foreach ko end
                           
                          ?>
                        </tbody>
                      </table>                              <!-- table ends here for events-->
                  </div>                                     <!-- tabpanels ends here for events -->
                
                <div role="tabpanel" class="tab-pane" id="timeline" style="color: white">    <!-- tabpanel starts here for timeline -->
                    <?php $getTimelineLists = getTimeline(); 
                    //debugger($getTimelineLists);?>
                    <table id="listTimeline" class="table table-bordered">                            <!-- table starts here for timeline -->
                        <thead>
                            <tr>
                          <th>S.No.</th>
                          <th>Title</th>
                          <th>Summary</th>
                          <th>Location</th>
                          <th>Date</th>
                          <th>Time</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php $i =1;
                          foreach ($getTimelineLists as $getTimelineList){ ?>
                              <tr>
                                <td><?php echo $i; $i++;?></td>
                                 <td><?php echo $getTimelineList['event_title'];?></td>
                                 <td><?php echo $getTimelineList['event_summary'];?></td>
                                 <td><?php echo $getTimelineList['event_location'];?></td>
                                 <td><?php echo $getTimelineList['event_date'];?></td>
                                 <td><?php echo $getTimelineList['event_time'];?></td>
                                <td>
                                  <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Event?')" href="list_events.php?id=<?php echo $getEvent['id']; ?>&act=<?php echo substr(sha1('delete-'.$getEvent['id']), 4, 9);?>" title="Delete">
                                   <i class="fa fa-trash-o" aria-hidden="true"></i>
                                 </a> </i>
                                </td>

                              </tr>
                              <?php
                            } //foreach ko end
                          
                          ?>
                        </tbody>
                    </table>                                                              <!--  table ends here for timeline-->
                  </div>                                                                    <!-- tabpanel ends here for timeline -->  
                </div>                                                                  <!-- tab-content ends here for all --> 
			
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
