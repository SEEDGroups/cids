<?php session_start();
	include 'config.php';
	include 'dbconnect.php';
	include 'function.php';

	if(isset($_POST) && !empty($_POST)){
		$event_title = sanitize($_POST['event_title']);
		$event_summary = sanitize($_POST['event_summary']);
		$event_description = htmlentities($_POST['event_description']);
		$event_location = sanitize($_POST['event_location']);
		$event_date = sanitize($_POST['event_date']);
		$event_time = sanitize($_POST['event_time']);
		$event_type = sanitize($_POST['event_type']);
		$event_image_caption = sanitize($_POST['caption']);

		$sql = "INSERT INTO achievement SET image_caption = '$event_image_caption', event_title = '$event_title', event_summary='$event_summary', event_description='$event_description', event_location='$event_location', event_date='$event_date', event_time='$event_time', event_type='$event_type'";

		$query = mysqli_query($conn, $sql);
		/*debugger($_POST);
		exit;
*/
		if($query){
			$last_id = $conn->insert_id;
		}else{
			$_SESSION['info'] = "Cannot add data at the moment. Please try again later";
			@header('location: ../add_banner.php');
			exit;
		}

		if($last_id){
					if(isset($_FILES) && !empty($_FILES['images']['tmp_name'])){
							// debugger($_FILES, true);
							$path = "uploads";
							if(!is_dir($path)){
									mkdir($path);
							}
							$upload_path = $path."/Hub4Growth";
							if(!is_dir($upload_path)){
									mkdir($upload_path);
							}



                for($i=0; $i<count($_FILES['images']['tmp_name']); $i++){
                    // debugger($_FILES, true);
                   $temporary_name = $_FILES['images']['tmp_name'];
                    $ext = getFileExtension($_FILES['images']['name']);

                    if(in_array($ext, $allowed_image_ext)){
                        $file_name = "Hub4Growth-".rand(0,999999999).".".$ext;
												//debugger($file_name); exit;
                        $success = @move_uploaded_file($temporary_name, $upload_path."/".$file_name);

                        if($success){
                            $images= $file_name;
                        }
                    }
                }

 // debugger($images); debugger($last_id); exit;
					$uploads = addEventImage($images, $last_id);

					}
                            if($uploads){
                                $_SESSION['success'] = "Event has been added successfully";
                                @header("location: ../list_events.php");
                                exit;
							}
							else{
									$_SESSION['info'] = "Event data has been added but image wasn't added. Try again later. ";
									@header("location: ../list_events.php");
									exit;
							}


					}else{
							$_SESSION['error'] = "Event data hasn't been added!";
							@header('location: ../list_events.php');
							exit;
			 }
		 }else{
				 $_SESSION['error'] = "Invalid Entry!";
				 @header('location: ../list_events.php');
				 exit;
			 }

?>
