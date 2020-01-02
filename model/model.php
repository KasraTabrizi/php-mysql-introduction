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
    function sendToDatabase($database){
        $sql = "INSERT INTO student (first_name, last_name, email, username, password, gender, linkedin, github, preferred_language, avatar, video, quote, quote_author, created_at)
                        VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $database->prepare($sql);
        if ($stmt === FALSE) {
            echo "Error: " . $sql . "<br>" . $database->errorInfo();
        } else {
            $stmt->execute([$_SESSION['first_name'],$_SESSION['last_name'],$_SESSION['email'],$_SESSION['username'],$_SESSION['password_register'],$_SESSION['gender'],$_SESSION['linkedin'],$_SESSION['github'],$_SESSION['preferred_language'],$_SESSION['avatar'],$_SESSION['video'],$_SESSION['quote'],$_SESSION['quote_author'],$_SESSION['created_at']]);
        }
    }

    //SEARCH DATA IN DATABASE, RETURN TRUE IF DATA IS FOUND
    function searchInDatabase($database, $colName, $dataValue){
        $sql = "SELECT `id` FROM `student` WHERE `".$colName."`='".$dataValue."'";
        var_dump($sql);
        $stmt = $database->query($sql);
        if ($stmt === FALSE) {
            echo "Error: " . $sql . "<br>" . $database->errorInfo();
        } 
        else{
            foreach($stmt as $row){
                if($row['id'] >= 0){
                    return $row['id'];
                }
            } 
        }
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