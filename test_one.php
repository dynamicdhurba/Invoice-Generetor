
<?php 

	$arr = [];
	//$_POST['username']='Dhurba Bhandari';

	$customer = $_POST['username'];
	$date=$_POST['date'];

	


	$con = new mysqli('localhost','root','','mobile');

	if ($con->ping()) 
	{
		// $arr['connected'] = true;
	}
	else
	{
		$arr['connected'] = false;
	}
	$id= "SELECT client_id FROM `client` WHERE name= '".$customer."'";
	//echo $id;
	//echo "<br>";

	if($go=$con->query($id))
	{
				$result = $go->fetch_assoc();
				$cid=$result['client_id'];
		}


$sql= "SELECT in_id,datee FROM `invoice` WHERE cust_id=".$cid ;
//echo $sql;
if($result=$con->query($sql))
	{
					while($row = $result->fetch_assoc()){
			$arr[] = $row;
		}
		}

	if ($result==true)
	 {
		//$arr['xstatus'] = 'created';
		//$arr['id'] = $con->insert_id;
	}
	else
	{
		//$arr['xstatus'] = 'Error';
		//$arr['message'] = $con->error;
	}
	$arr['date']=$date;



	echo json_encode($arr);


 ?>