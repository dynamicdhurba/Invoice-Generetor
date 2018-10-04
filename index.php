<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title></title>
	
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 	<script type='text/javascript' src='js/example.js'></script>
 	<script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>  

</head>

<body>
	


	<div id="page-wrap" style="float: left; padding:5%;">
		
		
		<form action="test.php" method="post" id="TestForm">

		<label for="ino" >INVOICE NO. :</label>
		<textarea id="ino" style="border: none; margin-bottom:-20px; height: auto; padding-bottom:0px; " name="ino" ></textarea> 


		<textarea id="header" style="height: auto;">INVOICE</textarea>
		
		<div id="identity">
		
  
                   
                    <textarea id="date" name="date">December 15, 2009</textarea>

            <div id="logo">

              <div id="logoctr">
                <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                <a href="javascript:;" id="save-logo" title="Save changes">Save</a>
                |
                <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
              </div>

              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>
              <img id="image" src="images/logo.png" alt="logo" />
            </div>
		
		</div>
	
		
		<div id="customer">


 
				<p>
		<label>CUSTOMER :
		<select name = "username" class="dropup" required>Select client name
			
		</select> 
		<p class="delete_second"><a href="customer.html" >ADD NEW CUSTOMER</a></p>
		</label>
	</p>
	<!--<p>
		<label for="pwd">Password:</label>
		<input type="password" placeholder="password" id="pwd">
	</p>!-->



           
		
		</div>
		
		<table id="items" class="table table-striped">
		
		  <tr>
		     <th style="width:70px;">S No.</th>
 			<th>Item</th>
		  
		      <th>Unit Cost</th>
		      <th>Quantity</th>
		      <th>Price</th>
		  </tr>
		  
		  <tr class="item-row">
		  	<td>1</td>
		      <td class="item-name"><div class="delete-wpr">
		      	<select style="margin: 5px;"  name="item1" class="dropdown" required>
		      		<option></option>
		      	</select><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		
		      <td><textarea type="text" class="cost" style="border:none" placeholder="0" name="unit1"></textarea> </td>
		      <td><textarea type="text" class="qty" placeholder="0" name="qty1"></textarea></td>
		      <td><span class="price"></span></td>
		  </tr>
		  
		  <tr class="item-row">
		  	<td>2</td>
		      <td class="item-name"><div class="delete-wpr">
		      	<select style="margin: 5px; "  name="item2" class="dropdown" >
		      		<option></option>
		      	</select><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>

		     
		    <td><textarea type="text" class="cost" style="border:none" placeholder="0" name="unit2"></textarea></td>
		      <td><textarea type="text" class="qty" placeholder="0" name="qty2"></textarea></td>
		      <td><span class="price"></span></td>
		  </tr>

		   <tr class="item-row">
		   	<td>3</td>
		      <td class="item-name"><div class="delete-wpr">
		      	<select style="margin: 5px; "  name="item3" class="dropdown" >
		      		<option></option>
		      	</select><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>

		     
		    <td><textarea type="text" class="cost" style="border:none" placeholder="0" name="unit3"></textarea> </td>
		      <td><textarea type="text" class="qty" placeholder="0" name="qty3"></textarea></td>
		      <td><span class="price"></span></td>
		  </tr>

		   <tr class="item-row">
		   	<td>4</td>
		      <td class="item-name"><div class="delete-wpr">
		      	<select style="margin: 5px; "  name="item4" class="dropdown" >
		      		<option></option>
		      	</select><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>

		     
		    <td><textarea class="cost" style="border:none" placeholder="0" name="unit4"></textarea> </td>
		      <td><textarea type="text" class="qty" placeholder="0" name="qty4"></textarea></td>
		      <td><span class="price"></span></td>
		  </tr>
		   <tr class="item-row">
		   	<td>5</td>
		      <td class="item-name"><div class="delete-wpr">
		      	<select style="margin: 5px; "  name="item5" class="dropdown" >
		      		
		      		<option></option>
		      		
		      		
		      	</select><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>

		     
		    <td><textarea type="text" class="cost" style="border:none" placeholder="0" name="unit5"></textarea></td>
		      <td><textarea type="text" class="qty" placeholder="0" name="qty5"></textarea></td>
		      <td><span class="price"></span></td>
		  </tr>
		    
 

		  <tr id="hiderow">
		    <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
		  </tr>

		 


 
		  
		  <tr>
		      
		      <td colspan="4" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal"></div></td>
		  </tr>
		  <tr>

		      
		      <td colspan="4" class="total-line">Total</td>
		      <td class="total-value"><div id="total"></div></td>
		  </tr>
		  <tr>
		      
		      <td colspan="4" class="total-line">Amount Paid</td>

		      <td class="total-value"><textarea type="text"  placeholder="0"  id="paid" required></textarea> </td>
		  </tr>
		  <tr>
		      
		      <td colspan="4" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><textarea  class="due" name="total" required></textarea></td>
		  </tr>

		
		</table>
		
<input type="submit" name="submit" value="PRINT INVOICE" id="hiderow">		  
	</form>
	<div id="show">

	</div>

	
		
		
	
	</div>
	<div style="clear:both"></div>
	<div id="terms" style="background-color: lightblue; float:center;" >
		  <!--<h5>Terms</h5>-->
		  
		  <button style="margin: 10px;" onclick="homefunction()">MAKE NEW INVOICE!</button>
		  <button onclick="refunction()">GO TO HOME-></button>
		</div>
	
</body>

</html>