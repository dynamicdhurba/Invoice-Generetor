<?php

	$aarr = [];
	
	$con = new mysqli('localhost','root','','mobile');

	


	$sql = "SELECT * FROM client ";
	if($result = $con->query($sql)) {
		while($row = $result->fetch_assoc()){
			$aarr[] = $row;
		}
		
	
	}
	
	echo json_encode($aarr);
?>