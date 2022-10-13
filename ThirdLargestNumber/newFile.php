<?php
    function recFunc($start,$startOfiteration,$numOfIteration){
        if($startOfiteration>$numOfIteration)
        return;
        echo ($start*$startOfiteration."<br>");
        recFunc($start,$startOfiteration+1,$numOfIteration);
    }

   function makeItEven($startNumber){
        if($startNumber%2==1){
             $startNumber+=1;
        }
        return $startNumber;
    }


    $start=3;
    $startOfiteration=1;
    $numOfIteration=5;
    $start= makeItEven($start);
    recFunc($start,$startOfiteration,$numOfIteration);
?>