<?php
$conn =mysqli_connect("localhost","root","","data");
function DataSecurity($Data){
    $Data =trim($Data);
    $Data =stripslashes($Data);
    $Data =htmlspecialchars($Data);
    return $Data;
}
if ($_POST["action"]=="insert") {
   insert();
}
function insert(){
    global $conn;
    $name=DataSecurity($_POST["name"]);
    $email=DataSecurity($_POST["email"]);
    $company=DataSecurity($_POST["company"]);
    $pass=DataSecurity($_POST["pass"]);
    if (empty($name)||empty($email)||empty($company)||empty($pass)) {
        echo "";
        exit;
    }
    $sameEmail = mysqli_query($conn,"SELECT * from data_table where email = '$email'");
    if(mysqli_num_rows($sameEmail)>0){
        echo 2;
        exit;
    }
    $query ="INSERT into data_table VALUES('','$name','$email','$company','$pass')";
    mysqli_query($conn,$query);
    echo 1;
}
?>