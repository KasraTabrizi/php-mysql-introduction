<?php
    //this line makes PHP behave in a more strict way
    declare(strict_types=1);
    //we are going to use session variables so we need to enable sessions
    session_start();

    $errorMail = $errorPass = "";
    $passwordHash = "";
    $required = array("first_name", "last_name", "email", "username", "password_register", "password_repeat", "gender", "linkedin", "github", "preferred_language", "avatar", "video", "quote", "quote_author", "created_at");

    //CREATE CONNECTION WITH DATABASE
    function openConnection() {
        // Try to figure out what these should be for you
        $dbhost    = "localhost";
        $dbuser    = "root";
        $dbpass    = "root";
        $db        = "becode";
          
        // Try to understand what happens here 
        $pdo = new PDO('mysql:host='. $dbhost .';dbname='. $db, $dbuser, $dbpass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        // Why we do this here
        return $pdo;
    }

    //SEND DATA FROM REGISTRATION FORM TO DATABASE
    function sendToDatabase($database, $data){
        $sql = "INSERT INTO student (first_name, last_name, email, username, password_register, password_repeat, gender, linkedin, github, preferred_language, avatar, video, quote, quote_author, created_at)
                        VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $database->prepare($sql);
        if ($stmt === FALSE) {
            echo "Error: " . $sql . "<br>" . $database->errorInfo();
        } else {
            $stmt->execute([$_POST['first_name'],$_POST['last_name'],$_POST['username'],$_POST['gender'],$_POST['linkedin'],$_POST['github'],$_POST['email'],$_POST['preferred_language'],$_POST['avatar'],$_POST['video'],$_POST['quote'],$_POST['quote_author'],$_POST['created_at']]);
        }
    }

    //SEARCH DATA IN DATABASE, RETURN TRUE IF DATA IS FOUND
    function searchInDatabase($database, $colName, $dataValue){
    
    }

    //READ DATA FROM DATABASE
    function readFromDatabase($database){

    }

    //CREATE TABLE FOR PROFILE LIST
    function createTableProfileList(){

    }

    //CREATE TABLE FOR PROFILE
    function createTableProfile(){
        
    }
?>