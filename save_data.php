<?php  
  
if (isset($_POST['image']) and isset($_POST['ino'])) { 
 $ino= $_POST['ino'];
      
    if (file_exists('data/data'.$ino.'.json')) {  
          
        //if file exists open the file and append the data  
          
        $json_file = fopen("data/data".$ino.".json", "a") or die("Unable to open file!");  
          
        $current_data = file_get_contents('data/data'.$ino.'.json');  
          
        $array_data = json_decode($current_data, true);  
          
        $extra = array(  
            'imageURL' => $_POST['image']  
        );  
          
        $array_data[] = $extra;  
          
        $final_data = json_encode($array_data);  
          
        file_put_contents('data/data'.$ino.'.json', $final_data);  
          
        fclose($json_file);  
          
    } else {  
          
        //create a json file and save the data in it  
          
        $json_file = fopen("data/data".$ino.".json", "a") or die("Unable to open file!");  
          
        $current_data = file_get_contents('data/data'.$ino.'.json');  
          
        $array_data = json_decode($current_data, true);  
          
        $extra = array(  
            'imageURL' => $_POST['image']  
        );  
          
        $array_data[] = $extra;  
          
        $final_data = json_encode($array_data);  
          
        file_put_contents('data/data'.$ino.'.json', $final_data);  
          
        fclose($json_file);  
          
    }  
      
}  
  
?>