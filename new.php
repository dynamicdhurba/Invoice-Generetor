<!DOCTYPE html>
<html>
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Editable Invoice</title>
	
	<link rel='stylesheet' type='text/css' href='css/style-second.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example2.js'></script>
	   <script type="text/javascript"> 
        	//document.write(TextInsideLi);
        if (TextInsideLi!=null ) { 
        	document.write(TextInsideLi);
            $(document).ready(function() {  

                $.getJSON("data/data"+TextInsideLi+".json", function(json) {  
                    //console.log(json);  
                    for (var i = 0; i < json.length; i++) {  
                        $('.screenshot').append('<img src="' + json[i].imageURL + '"/>');  
                    }  
                });  
            });  
            }
        </script> 
</head>
<body>
	<div id="first" style="border: 5px solid black; float: left; margin: 5px; width: 18%;position: relative;">
		<form id="showinvoices" method="post" action="test_one.php" > 
					<p>
		<label>CUSTOMER :
		<select name = "username" class="dropup">Select client name
			<option>apple</option>
		</select> 
		</label>
	</p>
	<input type="submit" value="Show invoices">
	<div id="new">
		
	</div>
	</form>

		
	</div>
	<div id="second" style="border: 5px solid black; float: left; margin: 5px;width: 75%;position: relative;">
		<div id="page-wrap">


			<div class="main">  
            <h1>Load Screenshot from json file</h1>  
        </div>  
        <div class="screenshot"></div>  
        
      


		
		
	</div>
	

		
	</div>
	
		<div style="clear:both;"></div>

</body>
</html>