<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  
  <script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
  

  <script type='text/javascript' src='js/example3.js'></script>
</head>
<body>

<div class="container" style="border: 1px dotted; margin-top: 15%" >
  <h2 style="margin-bottom: 3%; ">Add a item</h2>
  <form class="form-horizontal" action="test_sixth.php" id="item_submit">
    <div class="form-group">
      <input type="text" name="name" placeholder="Enter item class">
    </div>
    <div class="form-group">
      <input type="text" name="address" placeholder="Enter item name">
     
    </div>
    <div class="form-group">
      <input type="number" name="add" placeholder="Enter item name">
     
    </div>
    <div class="form-group"> 
    <input type="submit" value="Save">       
      
    </div>
  </form>
</div>
<div id="success"></div>

</body>
</html>
