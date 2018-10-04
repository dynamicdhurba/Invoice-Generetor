<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Editable Invoice</title>
	
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>

</head>

<body>
	


	<div id="page-wrap">
		
		
		<label for="ino">INVOICE NO. :</label>
		<input type="text" id="ino" style="border: none; margin: 5px; " value="01" name="ino">


		<textarea id="header">INVOICE</textarea>
		
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
		
		<div style="clear:both"></div>
		
		<div id="customer">


 
				<p>
		<label>CUSTOMER :
		<select name = "username" class="dropup">Select client name
			<option>apple</option>
		</select> 
		</label>
	</p>
	



           
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th>Item</th>
		  
		      <th>Unit Cost</th>
		      <th>Quantity</th>
		      <th>Price</th>
		  </tr>
		  
		  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr">
		      	<select style="margin: 5px; "  name="item1" class="dropdown"><option >420</option></select><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		
		      <td><input type="text" class="cost" style="border:none" placeholder="10" name="unit1"> </td>
		      <td><input class="qty" placeholder="0" name="qty1"></td>
		      <td><span class="price">$650.00</span></td>
		  </tr>
		  
		  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr">
		      	<select style="margin: 5px; "  name="item2" class="dropdown"><option >420</option></select><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>

		     
		    <td><input type="text" class="cost" style="border:none" placeholder="10" name="unit2"> </td>
		      <td><input class="qty" placeholder="0" name="qty2"></td>
		      <td><span class="price">$650.00</span></td>
		  </tr>
		  
		  <tr id="hiderow">
		    <td colspan="4"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
		  </tr>
		  
		  <tr>
		      <td colspan="1" class="blank"> </td>
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal">$875.00</div></td>
		  </tr>
		  <tr>

		      <td colspan="1" class="blank"> </td>
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-value"><div id="total">$875.00</div></td>
		  </tr>
		  <tr>
		      <td colspan="1" class="blank"> </td>
		      <td colspan="2" class="total-line">Amount Paid</td>

		      <td class="total-value"><input type="text" name="total" placeholder="0" id="paid"></td>
		  </tr>
		  <tr>
		      <td colspan="1" class="blank"> </td>
		      <td colspan="2" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><textarea class="due" >$875.00</textarea></td>
		  </tr>

		
		</table>
		
	
	<div id="show"></div>
	
		
		<div id="terms">
		  <h5>Terms</h5>
		  <textarea>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</textarea>
		</div>
	
	</div>
	
</body>

</html>