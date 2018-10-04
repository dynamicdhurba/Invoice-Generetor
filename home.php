
<?php 

	$arr = [];
	$arr_new = [];
	//$_POST['username']='Dhurba Bhandari';

	$customer = $_POST['username'];
	
	

	


	$con = new mysqli('localhost','root','','mobile');

	if ($con->ping()) 
	{
		// $arr['connected'] = true;
	}
	else
	{
		$arr['connected'] = false;
	}
	$id= "SELECT * FROM `client` WHERE name= '".$customer."'";
	//echo $id;
	//echo "<br>";

	/*if($go=$con->query($id))
	{
				$result = $go->fetch_assoc();
				$cid=$result['client_id'];
		}


$sql= "SELECT * FROM `invoice` WHERE cust_id=".$cid ;
//echo $sql;*/
if($result=$con->query($id))
	{
					while($row = $result->fetch_assoc()){
			$arr[] = $row;
			if($_POST['amt']!='')
	{
		$arr['amount'] =$_POST['amt'];
		$fnl=$row['due']-$arr['amount'];
		//echo $fnl;
		$updt="UPDATE `client` SET `due`=".$fnl." WHERE name= '".$customer."'";
		//echo $updt;
		$con->query($updt);
	}
		}

		
		}

		$id_new= "SELECT * FROM `client` WHERE name= '".$customer."'";
if($result=$con->query($id_new))
	{

				while($row = $result->fetch_assoc()){
			$arr_new[] = $row;
		}
	}

	



	echo json_encode($arr_new);


 ?>