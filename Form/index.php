<!DOCTYPE html>
<html>
    <style>
        .error{
            color :red
        }
    </style>
<body>
<?php

$nameErr=$emailErr="";
$firstName= $lastName ="";
function DataSecurity($Data){
    $Data =trim($Data);
    $Data =stripslashes($Data);
    $Data =htmlspecialchars($Data);
    return $Data;
}
// $firstName = DataSecurity($_POST['firstName']);
function TestNameInput($Data){
    
}
if ($_SERVER["REQUEST_METHOD"]=="POST") {
  
   
//    if(!empty($firstName)&&!empty($lastName))
//    {
//     echo "First Name  : $firstName <br>Last Name : $lastName";
//    }
  if(empty($_POST['firstName']))
   {
    $nameErr="Enter First Name";
   }
   else{
    $firstName = DataSecurity($_POST['firstName']);
    if(!preg_match("/^[a-zA-Z-' ]*$/",$firstName)){
        $nameErr="Enter Name in Right Way";
    }
    else{
        echo "First Name : $firstName";
        $nameErr="";
    }
    
   }
    

   if(empty(($_POST['lastName'])))
   {
      $emailErr="Enter Last Name";
   }
   $lastName = DataSecurity($_POST['lastName']);
  
  
}
?>
<h1>My first PHP page</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label for="firstName">Enter First Name : </label>
        <input type="text" name="firstName">
        <span class="error">* <?php echo $nameErr;?></span><br><br>
        <label for="lastName">Enter Last Name : </label>
        <input type="text" name="lastName">
        <span class="error">* <?php echo $emailErr;?></span></span><br><br>

        <input type="submit" value="Add Your Name to Hall Of Fame" >
    </form>
   
<?php


// if ($_SERVER["REQUEST_METHOD"]=="POST") {
//     $firstName=$_POST['firstName'];
//     $lastName=$_POST['lastName'];

//     if(empty($firstName)&&empty($lastName)){
//         echo "Enter First and Last Name Please !";
//     }
//     else{
//         echo "This is First Name : $firstName and This is Last Name: $lastName" ;
//     }

    
// }


// $dummyText ="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum";
// $targetTextFind="/sad/";

// echo preg_match($targetTextFind,$dummyText);
// // echo $_SERVER['REMOTE_ADDR'];
// echo "<br>";
// $variableOne="One";
// $variableTwo=2;
// $variableThree ='x';
// $arrayCars = array("Honda","Toyota",1,78);
// echo count($arrayCars);
// echo "<hr>";
// for ($i=0; $i <count($arrayCars) ; $i++) { 
//     $x=$i+1;
//  echo "Car Number : $x is : $arrayCars[$i] <br>";
// }



// $ages = array ("Ahmed"=>18,"Umer"=> 23, "Sohail"=>25);
// foreach ($ages as $person => $personAge) {
//    echo "<h1>Name is : $person and Age is $personAge </h1><br>";

// echo "Variable One ki Value : <h1>" . $variableOne . "</h1><br>";
// echo "Variable Two is integer " . $variableTwo . "<br>";
// echo "Third variable printed : $variableThree <br>";
// var_dump($variableOne);
// echo "<br>";
// var_dump($variableTwo);echo "<br>";

// var_dump($variableThree);echo "<br>";
// var_dump($arrayCars);
// class Animal{
//     public $name;
//     public $size;
//     public $sound;
//    public $expectedAge;

//     public function __construct($namee,$sizee,$soundd)
//     {   
//         $this->name=$namee;
//         $this->size=$sizee;
//         $this->sound=$soundd; 
//        $GLOBALS['expectedAge'] =rand(1,100);
//         echo "Object Created<br>";
//     }
//     public function AnimalSpecs(){ 
       
//         // $expectedAge=rand(20,100);
//         echo "Animal Name : $this->name <br>Animal Size is : $this->size<br>Animal Produces Sound : $this->sound<br> Expected Age is :". $GLOBALS['expectedAge'];
//     }
//     public function AgeChecking(){

//         switch($GLOBALS['expectedAge']){
//             case $GLOBALS['expectedAge']>50:
//                 echo "<br>Age is : ".$GLOBALS['expectedAge'] .",and It Can Live Longer ";
//                 break;
            
//             case $GLOBALS['expectedAge']<50 && $GLOBALS['expectedAge']>20:
//                 echo "<br>Age is : ".$GLOBALS['expectedAge'] ." ,and It Can Live Medium Age ";
//                 break;
            
//             default:
//                 echo "<br>Life Span is Short and age is ".$GLOBALS['expectedAge'] ;
//                 break;
//             }
            
        
//     }

// }

// $myAnimal = new Animal("Dog",4.2,"Bark");
// echo $myAnimal->AnimalSpecs();
// echo $myAnimal->AgeChecking();
// $number =0;
// while ($number < 23) {
//     echo ("<h1> The Number is : ".$number."</h1><br>");
//     $number++;
// }


?>

</body>
</html>