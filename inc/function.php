<?php

	function debugger($array, $is_die = false){
		echo "<pre>";
		print_r($array);
		echo "</pre>";
		if($is_die){

			exit;
		}
	}

	function sanitize($string){
		if(get_magic_quotes_gpc()){
			$string = trim(stripslashes($string));
		}
			$string = strip_tags($string);
			$string = trim($string);
		return $string;
	}
	function getLink(){
		global $conn;
		$sql = "SELECT * from youtube Where id != '' ORDER BY id desc ";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <= 0){
			return 0;
		}else{
			$data= array();
			while($rows = mysqli_fetch_assoc($query)){
				$data[]= $rows; //for multiple values in array
			}return $data;
		}
	}
	 function getVideo($id){
	 	global $conn;
	 	$sql = "SELECT * from youtube WHERE id = '$id'";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <=0){
			return 0;
		}else{
			$data = array();
			while($rows = mysqli_fetch_assoc($query)){
				$data= $rows;
			}return $data;
		}
	}
	function getContactInfo(){
		global $conn;
		$sql = "SELECT * from contact";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <=0){
			return 0;
		}else{
			$data[]=array();
			while($rows = mysqli_fetch_assoc($query)){
				$data= $rows;
			}return $data;
		}
	}


	function getRelatedVideos($id){
		global $conn;
		$sql = "SELECT * from youtube WHERE id != '$id' and id != ''";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <= 0){
			return 0;
		}else{
			$data = array();
			while($rows = mysqli_fetch_assoc($query)){
				$data[] = $rows; //for double value <-this one is correct and should be used
			}return $data;
		}
	}


	?>
