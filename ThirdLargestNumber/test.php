<?php
//FROM GeeksForGeeks
//                0 1 2 3 4 5 6 7 8
    $arrr = array(1,5,7,1,9,8,5,8,9);
    $n=sizeof($arrr);
    function ThirdLargestNumber($array,$sizeOfArray){
        if($sizeOfArray>3){
             $firstLargest=$array[0];
             $secondLargest=PHP_INT_MIN;
             $thirdLargest=PHP_INT_MIN; 
            //FIND Biggest 
                 for($i = 0; $i < $sizeOfArray; $i++){
            //i=0;fl=1;in=1 ()i=1;fl=5;() i=2;fl=7() i=3;fl=7 () i=4;fl=9
                     if ($array[$i] > $firstLargest) {
                     $firstLargest = $array[$i];
                     }
                }
            //SecondLargest
                for($i = 0; $i < $sizeOfArray; $i++){
                    if($array[$i]>$secondLargest&&$array[$i]<$firstLargest){
            $secondLargest=$array[$i];
                    }
                }
            //Third Largest
                 for($i=0;$i<$sizeOfArray;$i++){
                    if($array[$i]>$thirdLargest && $array[$i]<$secondLargest){
            $thirdLargest=$array[$i];
                    }
                }   
              
                echo "Third Largest Number  : ".$thirdLargest;
        }
        else{
            echo "Array is too short to find Third Largest Number";
        }
   
    }
    ThirdLargestNumber($arrr,$n);
?>
   
 



   
