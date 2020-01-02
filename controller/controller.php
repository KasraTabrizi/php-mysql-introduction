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
        $everythingValid = false;
        //CHECK IF ANY INPUT FIELD IS EMPTY
        //IF A FIELD IS EMPTY OR SOMETHING IS NOT CORRECT, STORE THE CORRECT AND FILLED IN FIELDS INTO A SESSION AND GIVE ERROR TO THE OTHER ONES
        foreach($required as $fieldName){
            if(empty($_POST[$fieldName])){
                $_SESSION[$fieldName] = "Empty";
            }elseif($fieldName === 'email'){ //CHECK IF EMAIL ADDRESS IS VALID
                if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                    $_SESSION[$fieldName] = "email is invalid";
                }
                else{
                    $_SESSION[$fieldName] = $_POST[$fieldName];
                }
            }
            elseif($fieldName === 'password_register'){ //CHECK IF PASSWORD AND PASSWORD REPEAT IS EQUAL
                $passwordHash = password_hash($_POST[$fieldName], PASSWORD_DEFAULT);
                if (!password_verify($_POST['password_repeat'], $passwordHash)) {
                    $_SESSION[$fieldName] = 'Invalid password';
                }
                else{
                    $_SESSION[$fieldName] = $passwordHash; 
                }
            }
            else{
                $_SESSION[$fieldName] = $_POST[$fieldName];
                $everythingValid = true;
            }
        }
        if($everythingValid){
            //CONNECT TO DATABASE
            $spo = openConnection();
            //CHECK IF FIRSTNAME AND LASTNAME AND USERNAME ALREADY EXIST IN THE DATABASE
            //IF SO SEND AN ERROR
            $checkFirstName = searchInDatabase($spo, 'first_name', $_POST['first_name']);
            $checkLastName = searchInDatabase($spo, 'last_name', $_POST['last_name']);
            $checkUserName = searchInDatabase($spo, 'username', $_POST['username']);
            //IF FIRSTNAME LASTNAME AND USERNAME IS UNIQUE, STORE IN DATABASE AND GO TO THE PROFILE PAGE
            if($checkFirstName  === null && $checkLastName === null && $checkUserName === null){ 
                sendToDatabase($spo);
                readFromDatabase($spo, 'username', $_POST['username']);
                //header("Location: profile.php");
            }
        }
    }
    elseif(isset($_POST['edit'])) {
        
    }
    elseif(isset($_POST['logout'])) {
        
    }
    elseif(isset($_POST['backtolist'])) {
        
    }
}
?>