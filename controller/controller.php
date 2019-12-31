<?php

require '../model/model.php';

if($_SERVER["REQUEST_METHOD"] === 'POST'){
    if (isset($_POST['login'])) {
        //CHECK IF EMAIL ADDRESS IS VALID

        //CHECK IF EMAIL ADDRESS AND PASSWORD FIELD IS EMPTY
        if(empty($_POST['email'])){
            $errorMail = "Field is empty";
        }
        elseif(empty($_POST['password'])){
            $errorPass = "Field is empty";
        }
        elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errorMail = "email address is invalid";
        }
        else{
            //CODE THAT CHECKS IF USERNAME AND PASSWORD EXIST IN DATABASE
            //IF SO, THEN GO TO THE PROFILE PAGE
            //IF NOT, GIVE ERROR USERNAME/PASSWORD DOESN'T EXIST OR IS NOT CORRECTLY WRITTEN
            
        }
        

        //header("Location: index.php");
    }
    elseif(isset($_POST['signup'])) {
        
    }
    elseif(isset($_POST['register'])) {
        
    }
    elseif(isset($_POST['edit'])) {
        
    }
    elseif(isset($_POST['logout'])) {
        
    }
    elseif(isset($_POST['backtolist'])) {
        
    }
}
?>