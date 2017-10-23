<?php session_start(); ?>
<?php include 'inc/config.php'; include 'inc/dbconnect.php'; include 'inc/function.php'; include 'inc/navigation.php'; include 'security_inside.php';?>
<?php include 'inc/header.php';	 ?>

        <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=vac10evlzh1ylmepy70qr1q28wkygjzqa36g98uakma5l2jc"></script>

<style>
ul>li.active>a{
	font-weight: 700 !important;
	color: white;
}
ul>li>a{
	font-weight: 700 !important;
	color: black;
}
</style>
 <div id="wrapper">

       <?php include 'inc/navigation.php';?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">

                   <?php $vision=getVision(); ?>

                    <div class="col-lg-12">
                      <?php include 'inc/notification.php';?>

                        <h1 class="page-header">Update info about Hub4Growth</h1>
												</div>
                </div>
								<div class="row">
									<!-- Nav tabs -->
									<ul class="nav nav-tabs" role="tablist">
										<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Vision and Mission</a></li>
										<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Collaboration</a></li>
										<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Contribution</a></li>
										<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Shared Values</a></li>
									</ul>
								</div>
                <!-- /.row -->
                <div class="row">
									<div>



									  <!-- Tab panes -->
									  <div class="tab-content">
											<br/>
									    <div role="tabpanel" class="tab-pane active" id="home" style="color: white">

												<form class="form-horizontal" method="POST" action="inc/about_process.php">
												<?php foreach($vision as $getVisionList){
												 ?>
																 <div class="form-group">
																	 <label class="col-sm-2 control-label" style="color: black;">Summary</label>
																	 <div class="col-sm-10">
																		<textarea name="summary" id="vision_summary" class="form-control" rows="3" style="resize:vertical;" ><?php echo html_entity_decode($getVisionList['summary']); ?></textarea>
																	 </div>
																 </div>

																 <div class="form-group">
																		 <label class="col-sm-2 control-label"></label>
																		 <div class="col-sm-6">
																			<input type="hidden" name="page" id="page" value="Vision and mission" class="form-control">
																		 </div>
																	</div>

																	<div class="form-group">
																	 <label class="col-sm-2 control-label">Description</label>
																	 	<div class="col-sm-10">
								<textarea name="description" id="vision_description" class="form-control" style="resize:vertical;"><?php echo html_entity_decode($getVisionList['description']); ?></textarea>
																	 	</div>
																 	</div>

																	<div class="form-group">
																	 <div class="col-sm-offset-2 col-sm-6">
																		 <button type="submit" class="btn btn-success">Update</button>
																	 </div>
																 </div>
																 <?php
																		}
																		 ?>
															 </form>

											</div>

									    <div role="tabpanel" class="tab-pane" id="profile" style="color: white">
												<?php include "about_collaboration.php"; ?>
											</div>

											<div role="tabpanel" class="tab-pane" id="messages" style="color: white">
												<?php include "about_contribution.php"; ?>
											</div>
									    <div role="tabpanel" class="tab-pane" id="settings" style="color: white">
												<?php include "about_research.php"; ?>
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
    <script>
         tinymce.init({
            selector: '#vision_description',
            height: 300,
            theme: 'modern',
             plugins: [
                 'codesample imagetools',
    'advlist autolink lists link image charmap print preview anchor textcolor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code help'
  ],
  toolbar: 'insert | undo redo |  styleselect | bold italic forecolor backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help | fontsizeselect ',
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css']
         });
      </script>
      <script>
         tinymce.init({
            selector: '#collaboration_description',
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
      <script>
         tinymce.init({
            selector: '#contribution_description',
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
      <script>
         tinymce.init({
            selector: '#research_description',
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

     /*  ===========================================  summary ko script tags ===================================================== */
      
      <script>
         tinymce.init({
            selector: '#vision_summary',
            height: 300,
            theme: 'modern',
             plugins: [
                 'codesample imagetools',
    'advlist autolink lists link image charmap print preview anchor textcolor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code help'
  ],
  toolbar: 'insert | undo redo |  styleselect | bold italic forecolor backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help | fontsizeselect ',
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css']
         });
      </script>
      <script>
         tinymce.init({
            selector: '#collaboration_summary',
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
      <script>
         tinymce.init({
            selector: '#contribution_summary',
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
      <script>
         tinymce.init({
            selector: '#research_summary',
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
<?php include 'inc/footer.php'; ?>

