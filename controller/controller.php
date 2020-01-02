<?php

require '../model/model.php';

if($_SERVER["REQUEST_METHOD"] === 'POST'){
    if (isset($_POST['login'])) {
        //CHECK IF EMAIL ADDRESS IS VALID

        //CHECK IF EMAIL ADDRESS AND PASSWORD FIELD IS EMPTY
        if(empty($_POST['email'])){
            $errorMail = "Field is empty";
        }
        elseif(empty($_POST['password_login'])){
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
        header("Location: registration.php");
    }
    elseif(isset($_POST['register'])) {
        //CHECK IF ANY INPUT FIELD IS EMPTY

        //CHECK IF EMAIL ADDRESS IS VALID
        
        //CHECK IF PASSWORD AND PASSWORD CONFIRM IS EQUAL
        //IF YES, HASH PASSWORD

        //IF A FIELD IS EMPTY OR SOMETHING IS NOT CORRECT, STORE THE CORRECT AND FILLED IN FIELDS INTO A SESSION AND GIVE ERROR TO THE OTHER ONES

        //IF EVERYTHING IS CORRECT, STORE IN DATABASE AND GO TO THE PROFILE PAGE

    }
    elseif(isset($_POST['edit'])) {
        
    }
    elseif(isset($_POST['logout'])) {
        
    }
    elseif(isset($_POST['backtolist'])) {
        
    }
}
?>