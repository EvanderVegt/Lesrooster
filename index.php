<?php







$test = $_GET['week'];
$lesRooster = array(array("Maandag","Dinsdag","Woensdag"),array("Wiskunde","Natuurkunde",""),array("Thomas","Bas",""));

if($test == "alles"){
    dagen($test);
    
}else {
        echo "geen rooster";
}

         
   // echo $lesRooster[0][];
    //echo $lesRooster[1][];
   // echo $lesRooster[2][];
    
    function dagen($test){
        global $lesRooster;

        for($x=0;$x<3;$x++){
            echo "OO|";
        echo $lesRooster[0][$x];
        }
    }

        
  




?>