<?php 

	$arr = [];
	$box=[];
	

	$arr['name'] = $_POST['name'];
	$arr['qty'] = $_POST['address'];
	$arr['due'] = $_POST['due'];




	


	$con = new mysqli('localhost','root','','mobile');

	if ($con->ping()) 
	{
		 $arr['connected'] = true;
	}
	else
	{
		$arr['connected'] = false;
	}



$sql= "INSERT INTO `client`( `name`, `address`, `due`) VALUES ( '".$arr['name']."' , '".$arr['qty']."',".$arr['due'].") ";
$con->query($sql);
echo $sql;
echo "<br>";


	echo json_encode($arr);


 ?>