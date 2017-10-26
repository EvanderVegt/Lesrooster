<?php

/*
$les = array("Wiskunde","Natuurkunde","Biologie","Scheidkunde");
$naam = array("Thomas","Bas","Erik","Piet",null,"Rob","Jan");
$weekDag = array("Maandag","Dinsdag","Woensdag","Donderdag","Vrijdag");

//print_r($naam);



$les = array("Wiskunde","Natuurkunde");
$naam = array("Thomas","Bas");
$weekDag = array("Maandag","Dinsdag");

for($x=0;$x<2;$x++){
    echo $weekDag[$x];
    echo $les[$x];
}
*/

$test = $_GET['week'];

   $lesRooster = array( array("Maandag","Dinsdag"),array("Wiskunde","Natuurkunde"),array("Thomas","Bas"));
            if($test == "maandag"){
                echo $lesRooster[0][0];
            }
   
   
  




?>