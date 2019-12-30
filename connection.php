<?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['submit'])) {
            print_r(openConnection());
        }
    }

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

    $sql = "INSERT INTO student (first_name, last_name, username, gender, linkedin, github, email, preferred_language, avatar, video, quote, quote_author, created_at)
                    VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['first_name'],$_POST['last_name'],$_POST['username'],$_POST['gender'],$_POST['linkedin'],$_POST['github'],$_POST['email'],$_POST['preferred_language'],$_POST['avatar'],$_POST['video'],$_POST['quote'],$_POST['quote_author'],$_POST['created_at']]);

    if ($pdo->prepare($sql) === FALSE) {
        echo "Error: " . $sql . "<br>" . $pdo->errorInfo();
    } else {
        echo "New record created successfully";
    }
    // Why we do this here
    return $pdo;
    }

?>