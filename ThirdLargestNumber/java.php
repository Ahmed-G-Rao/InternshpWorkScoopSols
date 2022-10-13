<?php
$number =2;
// echo "running";
 function recursiveSum($startingNumber,$endingNumber){
    echo "rec func";
    echo $startingNumber;
    if($endingNumber-$startingNumber===2){
    //   echo   ($startingNumber+1);
    echo("if occured");
    }
    else{
        if($startingNumber%2==1 ){
           
            $startingNumber++;
            echo ("<h2>Starting Numb after -1</h2>".$startingNumber."<br>");
        }
        if($endingNumber%2==1){
            $endingNumber--;
            echo ("<h2>End Numb after -1  ".$endingNumber."</h2><br>");
        }
        else{
 echo $startingNumber;

             for($i=0;$i<$endingNumber;$i++){
            $startingNumber+=2;           
            echo ("<br>".$startingNumber-2);
        };
      
        }  
    }
    echo (recursiveSum(-10,20));







//                      32              64
    function recSum($startingNumber,$endingNumber){
        $temp=0;
        if($endingNumber>$startingNumber&&$startingNumber<0){
            $temp=$endingNumber;
            $endingNumber=$startingNumber;
            $startingNumber=$temp;
            echo ("<h2>IF WALA Starting Numb ".$startingNumber."</h2><br>");

        }

        // else{
            // if($startingNumber%2==1 ){
           
                for($i=0;$i<=$startingNumber;$i++){
                    $startingNumber+=2;           
                    echo ("<br>".$startingNumber);
                    
                }
            // }
        // }
    }
    // echo (recSum(-2,90));


    function thirdAlgo($N,$ii){
        
    }
//  }
//    echo (add($number)) ;

//  for($i=0;$i<20;$i++){
//     $number+=2;
//     echo ($number);
//  }
 }
?>