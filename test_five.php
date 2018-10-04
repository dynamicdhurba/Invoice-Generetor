
<?php 

	$arr = [];
	$box=[];

	$arr['TextInsideLi'] = $_POST['TextInsideLi'];


	


	$con = new mysqli('localhost','root','','mobile');

	if ($con->ping()) 
	{
		 $arr['connected'] = true;
	}
	else
	{
		$arr['connected'] = false;
	}



$sql= "SELECT * FROM `invoice` WHERE in_id='$arr[TextInsideLi]' ";
//echo $sql;
if($result=$con->query($sql))
	{
					while($row = $result->fetch_assoc()){
			$box[] = $row;
		}
		}

	



	echo json_encode($box);


 ?>