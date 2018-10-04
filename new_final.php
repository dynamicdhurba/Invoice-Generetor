<!DOCTYPE html>
<html>
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title><?php 
$ip=$_SERVER['REMOTE_ADDR'];
echo "IP address= $ip";
 ?></title>
	       
	
	<link rel='stylesheet' type='text/css' href='css/style-second.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example2.js'></script>
	 <!-- Latest compiled and minified CSS -->

 <!-- _______________________________________-->
			<!-- php HERE -->

			<?php
			if(isset($_GET['mail']) )
			{?>
				<script type="text/javascript">
					 var TextInsideLi = "<?php echo $_GET['mail'];?>";
			
				</script>
			<?php

		}

			?>
			<!-- ______________________ -->


	
</head>
<body>
	<div id="first" style="border: 0px solid blue; float: left; margin: 5px; width: 18%;position: relative; overflow: auto;
height: 98vh; background-color: #f2f4f7;">
		<form id="showinvoices" method="post" action="test_one.php" > 
					<p>
		<label>CUSTOMER :
		<select name = "username" class="dropup" style="margin: 5px;">Select client name
			<option>Browse Customer</option>
		</select> 
		</label>
	</p>
				<p>
		<label>DATE :
		<select name = "date"  style="margin: 5px;">Select client name
			<option>Browse Date</option>
			<option>Week</option>
			<option>Month</option>
			<option>Year</option>
		</select> 
		</label>
	</p>
	<input type="submit" value="Show invoices" style="margin: 5px;">
	
	</form>
	<div id="new">
		<p style="background-color:#293c59;">SELECT INVOICES BELOW</p>
	</div>

		
	</div>
	<div id="second" style="border: 0px solid blue; float: left; margin: 5px;width: 75%;position: relative; overflow: auto;
height: 98vh; background-color:#f2f4f7;">
<div id="header">
<button id="next" style="float: right; margin-right: 5%; margin-top: 1% ; size:20PX">NEXT</button>

		  
		  <button style="margin: 10px;" onclick="homefunction()">INQUERY FOR NEW INVOICE!</button>
		  <button onclick="refunction()">GO TO HOME-></button>


			<div class="main" style="background-color: lightgray;">  
            <h1>PAST INVOICES </h1>  
        </div> 
        </div> 
        <div class="screenshot">
        	<script type='text/javascript'>
        		//var test="data/data"+TextInsideLi+".json";
        		   $(document).ready(function() { 
                 if (TextInsideLi!=null ) {
                   // document.write(TextInsideLi+test);
                 $.getJSON("data/data"+TextInsideLi+".json", function(json) {  
                    //console.log(json);  
                    for (var i = 0; i < json.length; i++) {  
                        $('.screenshot').append('<img src="' + json[i].imageURL + '"height="800" width="1450" style="margin-left:50px; margin-top:30px;"/> ');  
                    }  
                });
                  }
            $('#next').click(function(){check();});

            		  function check()
            {
                if (TextInsideLi!=null ) {
                	TextInsideLi++;
                   
                 $.getJSON("data/data"+TextInsideLi+".json", function(json) {  
                    //console.log(json);  
                    for (var i = 0; i < json.length; i++) {  
                        $('.screenshot').html('<img src="' + json[i].imageURL + '"/>');  
                    }  
                });
                  }

            } 

                 
            });
        	</script>
        </div>

    </div>
    


       


		
		
	
	

		
	
	
		<div style="clear:both;"></div>
		

</body>
</html>