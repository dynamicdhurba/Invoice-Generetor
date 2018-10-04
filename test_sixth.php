<?php 

	$arr = [];
	$box=[];
	

	$arr['name'] = $_POST['name'];
	$arr['qty'] = $_POST['address'];
	$arr['due'] = $_POST['add'];




	


	$con = new mysqli('localhost','root','','mobile');

	if ($con->ping()) 
	{
		 $arr['connected'] = true;
	}
	else
	{
		$arr['connected'] = false;
	}
	
$qry="SELECT * FROM `itemclass` WHERE class='".$arr['name']."'";
	$query = $con->query($qry);


$numrows=mysqli_num_rows($query);

if($numrows > 0){
	$retrieve="SELECT `class_id` FROM `itemclass` WHERE class='".$arr['name']."'";
echo $retrieve;



if($result=$con->query($retrieve))
	{
					$row = $result->fetch_assoc();
					$arr['check']=$row['class_id'];
			
		
	}
	$qry="SELECT * FROM `item` WHERE class_id=".$arr['check']." AND item='".$arr['qty']."'";
	echo $qry;
		$query = $con->query($qry);
		$numrows=mysqli_num_rows($query);
		if($query){
		$row = $query->fetch_assoc();
					$arr['uptd']=$row['item_id'];
					$arr['ttl']=$row['quantitytotal'];
				}


$numrows=mysqli_num_rows($query);

if($numrows > 0)
{
	$more=$arr['due']+$arr['ttl'];
	$uptd="UPDATE `item` SET `quantitytotal`=".$more." WHERE item_id=".$arr['uptd'];
	$con->query($uptd);
	echo $uptd;


}
else
{
	$sql="INSERT INTO `item`( `class_id`, `item`, `quantitytotal`) VALUES (".$arr['check'].", '".$arr['qty']."' ,".$arr['due'].")";
$con->query($sql);
echo $sql;
echo "<br>";

}
	
}
else
{
	$sql= "INSERT INTO `itemclass`( `class`) VALUES ('".$arr['name']."')";
$con->query($sql);
echo $sql;
echo "<br>";

$retrieve="SELECT `class_id` FROM `itemclass` WHERE class='".$arr['name']."'";
echo $retrieve;



if($result=$con->query($retrieve))
	{
					$row = $result->fetch_assoc();
					$arr['check']=$row['class_id'];
			
		
	}
	

	
echo "<br>";
$sql="INSERT INTO `item`( `class_id`, `item`, `quantitytotal`) VALUES (".$arr['check'].", '".$arr['qty']."' ,".$arr['due'].")";
$con->query($sql);
echo $sql;
echo "<br>";

}






	echo json_encode($arr);


 ?>