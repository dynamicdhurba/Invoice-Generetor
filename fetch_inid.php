<?php

	$aarr = [];
	
	$con = new mysqli('localhost','root','','mobile');

	$sql_maxid = "SELECT MAX(in_id) AS max FROM `invoice`";
	
	
	if($result_maxid=$con->query($sql_maxid)) {
		while($row_maxid = $result_maxid->fetch_assoc()){
			$aarr[] = $row_maxid;
		}
		
	
	}
	

			
	
	
	
	echo json_encode($aarr);
?>