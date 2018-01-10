<?php 
	 include_once('dbconnect.php');

	 if(isset($_GET) && $_GET['appoint'] != ''){
	 	$appoint = $_GET['appoint'];
		$date = $_GET['date'];
		$time = $_GET['time'];
		$query = "INSERT INTO trials VALUES('','$appoint','$date','$time')";

		 if($conn->query($query) === true){
		 	$data['status'] = 1;
		 	$data['msg'] = "Successfully added";
		 	$data['dataObject'] = array('appoint' => $appoint);
			$data['dataObject'] = array('date' => $date);
			$data['dataObject'] = array('time' => $time);
		 	echo json_encode($data);
		 	//echo "Successfully to added";
		 }else{
		 	echo "Failed to add";
		 }
	 }else{
	 	echo "Invalid Input";
	 } 
?>