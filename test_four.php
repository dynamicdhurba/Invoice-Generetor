
<?php 

	$arr = [];
	$box=[];

	$arr['item_id'] = $_POST['item_id'];


	


	$con = new mysqli('localhost','root','','mobile');

	if ($con->ping()) 
	{
		 $arr['connected'] = true;
	}
	else
	{
		$arr['connected'] = false;
	}



$sql= "SELECT item FROM `item` WHERE item_id='$arr[item_id]' ";
//echo $sql;
if($result=$con->query($sql))
	{
					while($row = $result->fetch_assoc()){
			$box[] = $row;
		}
		}

	



	echo json_encode($box);


 ?>