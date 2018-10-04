
<?php 

	$arr = [];
	$a = [];

	//$_POST['NonFormValue']=2;
	$arr['fname'] = (int)$_POST['ino'];
	$arr['lname'] = $_POST['date'];
	$arr['age'] = $_POST['username'];
	$arr['agee'] =(int)$_POST['total'];
	$arr['onsm']=(int)$_POST['NonFormValue'];

	


	$con = new mysqli('localhost','root','','mobile');

	if ($con->ping()) 
	{
		 $arr['connected'] = true;
	}
	else
	{
		$arr['connected'] = false;
	}
    $sql2 = "SELECT client_id,due FROM `client` WHERE name='$arr[age]'";
	//echo $sql2;
	//echo "<br>";

	if($go=$con->query($sql2))
	{
				$result = $go->fetch_assoc();
				$arr['cid'] =$result['client_id'];
				$arr['due'] =$result['due'];

	}

	 $arr['due']=$arr['due']+$arr['agee'];
	//echo $arr['connected'];
	//echo $arr['onsm'];
	 //UPDATE `client` SET `due`=1800 WHERE client_id=1 
	 $update="UPDATE `client` SET `due`=".$arr['due']." WHERE client_id=".$arr['cid']."";
	$con->query($update);
	//echo $update;
	

	

	

	$sql = "INSERT INTO invoice ( cust_id, datee,b_due) VALUES ( ". $arr['cid']. ", '". $arr['lname']. "', ". $arr['agee']. ")";
	echo $sql;
	echo "<br>";
	$result = $con->query($sql);
		
			
		
	
	for($i=1;$i<=$arr['onsm'];$i++)
	{
		 //$i=1;
		//while ( $_POST['unit'.$i]!=NULL) {
			
		
		$arr['itemm'.$i] = $_POST['item'.$i];
		echo $arr['itemm'.$i];
		$sql3 = "SELECT item_id FROM `item` WHERE  item='". $arr['itemm'.$i] ."' ";
		echo $sql3;
		echo "<br>";
	   if( $come=$con->query($sql3))
   	{
   		$result=$come->fetch_assoc();
   		$arr['itemmm'.$i]=$result['item_id'];
   		
   	}

		
	
	$arr['unitt'.$i] = $_POST['unit'.$i];
	$arr['qtyy'.$i] = $_POST['qty'.$i];
	$sql1 = "INSERT INTO row_table (item_id, in_id, unitcost,quantity) VALUES (". $arr['itemmm'.$i] .", ". $arr['fname']. ", ". $arr['unitt'.$i]. ", ". $arr['qtyy'.$i]. ")";
	
	$con->query($sql1);
	echo $sql1;
	$quantity_value="SELECT quantitytotal FROM item WHERE item_id=". $arr['itemmm'.$i] ;
	
	if($go=$con->query($quantity_value))
	{
				$result = $go->fetch_assoc();
				$arr['q_value'] =$result['quantitytotal'];
	}
	$arr['final']=$arr['q_value']-$arr['qtyy'.$i];
	echo "<br>";
	echo $arr['final'];
	

	//$test=$con->query($sql1);
	$updation="UPDATE item SET quantitytotal=".$arr['final']." WHERE item_id=". $arr['itemmm'.$i]."" ;
	$con->query($updation);
	echo $updation;

	//$i++;
	
}
	
	


if ($result==true)
	 {
		$arr['xstatus'] = 'created';
		$arr['id'] = $con->insert_id;
	}
	else
	{
		$arr['xstatus'] = 'Error';
		$arr['message'] = $con->error;
	}


	echo json_encode($arr);


 ?>