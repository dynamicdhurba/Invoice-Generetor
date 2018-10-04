<?php

	$ar = [];
	
	$con = new mysqli('localhost','root','','mobile');

	$sql = "SELECT * FROM item ";
	if($result = $con->query($sql)) {
		while($row = $result->fetch_assoc()){
			$ar[] = $row;
		}
		echo json_encode($ar);
	
	}
?>