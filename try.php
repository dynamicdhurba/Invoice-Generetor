<?php

	$arr = [];
	
	/*$con = new mysqli('localhost','root','','mobile');
	if ($con) {
		
		echo "connected";
	}else{
		echo "connection error";
	}

	$sql = "SELECT client_id FROM `client` WHERE name='Dhurba Bhandari'" ;
	echo $sql;
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($result);
		# code...
		echo $row['client_id'];		*/
		$con = new mysqli('localhost','root','','mobile');

	if ($con->ping()) 
	{
		 $arr['connected'] = true;
	}
	else
	{
		$arr['connected'] = false;

	}
		$arr = [];
	$arr['age']='Dhurba Bhandari';
	$sql2 = "SELECT client_id FROM `client` WHERE name=
	'$arr[age]' ";
	echo $sql2;
	if($go=$con->query($sql2))
	{
				$result = $go->fetch_assoc();
				$arr['new']= $result['client_id'];
		}
		echo $arr['new'];
		$i=1;
		$arr['itemm1']="hello";

		$sql3 = "SELECT item_id FROM `item` WHERE  item='". $arr['itemm'.$i] ."'";
		echo $sql3;
	
	
	
		
	
?>