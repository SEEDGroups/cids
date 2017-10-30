<?php session_start(); include 'inc/config.php'; include 'inc/dbconnect.php'; include 'inc/function.php'; include 'inc/navigation.php';?>
<?php include 'inc/header.php';	 ?>
<?php
	include 'security_inside.php';

?>
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

                        <h1 class="page-header">Update Introduction of Hub4Growthtu.edu.np</h1>
												</div>
                </div>
								<div class="row">
									<?php $introductions = getIntroduction(); ?>
																	 <form class="form-horizontal" method="POST" action="inc/introduction_process.php">
																	 <?php foreach ($introductions as $introduction){ ?>

																						<div class="form-group">
																							<label class="col-sm-2 control-label">Introduction: </label>
																							<div class="col-sm-10">
																							 <textarea name="introduction" id="introduction_hub4growth" class="form-control" rows="3" style="resize:vertical;" ><?php echo ucfirst(html_entity_decode($introduction['introduction'])); ?></textarea>
																							</div>
																						</div>

																							<div class="form-group">
																							<label class="col-sm-2 control-label">Work package: </label>
																							<div class="col-sm-10">
																							 <textarea name="work_package" id="work_package" class="form-control" rows="7" style="resize:vertical;"><?php echo ucfirst(html_entity_decode($introduction['work_package'])); ?></textarea>
																							</div>
																						</div>

																						<div class="form-group">
																						<label class="col-sm-2 control-label">Partner_institution: </label>
																						<div class="col-sm-10">
																						 <textarea name="partner_institution" id="partner_institution" class="form-control" rows="7" style="resize:vertical;"><?php echo ucfirst(html_entity_decode($introduction['partner_institution'])); ?></textarea>
																						</div>
																					</div>

																					<div class="form-group">
																					<label class="col-sm-2 control-label">Our office: </label>
																					<div class="col-sm-10">
																					 <textarea name="our_office" id="our_office" class="form-control" rows="7" style="resize:vertical;"><?php echo ucfirst(html_entity_decode($introduction['our_office'])); ?></textarea>
																					</div>
																				</div>

																						<div class="form-group">
																							<div class="col-sm-offset-2 col-sm-6">
																								<button type="submit" class="btn btn-success">Update</button>


																							</div>
																						</div>
																						<?php } ?>
																					</form>



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
					 selector: '#work_package',
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
					 selector: '#partner_institution',
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
					selector: '#introduction_hub4growth',
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
				 selector: '#our_office',
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

<?php
 include 'inc/footer.php'; ?>
