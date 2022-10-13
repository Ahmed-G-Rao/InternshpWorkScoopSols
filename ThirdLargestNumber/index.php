<?php
//                                                x-1=8  x=9
    $arrr = array(  1,  5,  7,  1,  9,  8,  5,  8,  9,  9);
    $n = sizeof($arrr);
    $temp1= $temp2= $temp3=0;
   
   
    // $x = $n-1;
    sort($arrr);
    // $sameNumber=0;
    // $reqNumber;
    for($i=0;$i<$n;$i++){
        if($arrr[$i]>$temp1)
        {
            $temp3=$temp2;
            $temp2=$temp1;
            $temp1=$arrr[$i];
        }
        elseif($arrr[$i]>$temp2 &&$arrr[$i]!=$temp1){
            $temp3=$temp2;
            $temp2=$arrr[$i];
        }
        elseif($arrr[$i]>$temp3 && $arrr[$i] != $temp1 && $arrr[$i] != $temp2){
            $temp3=$arrr[$i];
        }
    }
    echo "<h3>Third Largest : ".$temp3."</h3>";


        
  
            

?>