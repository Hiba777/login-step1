<?php 
$email=$_POST['email'];
$password=$_POST['password'];

$dbEmail="hnna.1987@gmail.com";
$dbPassword="12345";

if($email==$dbEmail){

    if($password==$dbPassword){
        echo "welcome";
    }else {  
        echo "invalid password";
    }
}else{
    echo "invalid email";
}
?>

