<?php session_start();
	include 'config.php';
	include 'dbconnect.php';
	include 'function.php';

	// debugger($_POST);  debugger($_FILES); debugger($_FILES['images']['tmp_name']); exit;
	if(isset($_POST) && !empty($_POST)){
		$data = array();
		$data['caption']= sanitize($_POST['caption']);
		$data['description'] = sanitize($_POST['description']);

		$banner_id = addBannerInfo($data);
		//debugger($banner_id); exit;
		if($banner_id){
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

// debugger($images); debugger($banner_id); exit;
					$uploads = addBannerImage($images, $banner_id);

					}
                            if($uploads){
                                $_SESSION['success'] = "Banner has been added successfully";
                                @header("location: ../banner_list.php");
                                exit;
							}
							else{
									$_SESSION['info'] = "Banner data has been added but banner image wasn't ";
									@header("location: ../banner_list.php");
									exit;
							}


					}else{
							$_SESSION['error'] = "Banner data hasn't been updated!";
							@header('location: ../banner_list.php');
							exit;
			 }

	}else{
			$_SESSION['warning'] = "Invalid entry!!";
			@header('location: ../banner_list'.php);
			exit;
	}

?>
