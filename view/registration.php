<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/css/registration.css">
</head>

<?php
    require "../controller/controller.php";
?>

<body>
    <div id="wrapper">
        <div id="header-container">Registration Form</div>
        <div id="form-container">
            <form action="" method="POST">
                <table>
                    <tr>
                        <td><label for="first_name">First Name: 
                        <?php  
                            // if($_SESSION['first_name'] === "Empty"){
                            //     echo $_SESSION['first_name'];
                            // }
                            // elseif(isset($_SESSION['first_name'])){
                            //     $_SESSION['first_name'] = "";
                            //     echo $_SESSION['first_name'];
                            // }
                        ?>
                        </label></td>
                        <td><input type="text" name="first_name" value=
                        <?php
                            // if(!empty($_SESSION['first_name']) && $_SESSION['first_name'] !== "Empty"){
                            //     echo $_SESSION['first_name'];
                            // }
                            // else{
                            //     $_SESSION['first_name'] = "";
                            //     echo $_SESSION['first_name'];
                            // }
                        ?>>
                        </td>
                        <td><label for="last_name">Last Name: 
                        <?php  
                            // if($_SESSION['last_name'] === "Empty"){
                            //     echo $_SESSION['last_name'];
                            // }
                            // elseif(isset($_SESSION['last_name'])){
                            //     $_SESSION['last_name'] = "";
                            //     echo $_SESSION['last_name'];
                            // }
                        ?>
                        </label></td>
                        <td><input type="text" name="last_name" id="" value=
                        <?php
                            // if(!empty($_SESSION['last_name']) && $_SESSION['last_name'] !== "Empty"){
                            //     echo $_SESSION['last_name'];
                            // }
                            // else{
                            //     $_SESSION['last_name'] = "";
                            //     echo $_SESSION['last_name'];
                            // }
                        ?>>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="email">Email: 
                        <?php  
                            // if($_SESSION['email'] === "Empty" || $_SESSION['email'] === "email is invalid"){
                            //     echo $_SESSION['email'];
                            // }
                            // elseif(isset($_SESSION['email'])){
                            //     $_SESSION['email'] = "";
                            //     echo $_SESSION['email'];
                            // }
                        ?>
                        </label></td>
                        <td><input type="text" name="email" id="" value=
                        <?php
                            // if(!empty($_SESSION['email']) && $_SESSION['email'] !== "Empty" && $_SESSION['email'] !== "email is invalid"){
                            //     echo $_SESSION['email'];
                            // }
                            // else{
                            //     $_SESSION['email'] = "";
                            //     echo $_SESSION['email'];
                            // }
                        ?>>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="username">Username: </label></td>
                        <td><input type="text" name="username" id=""></td>
                    </tr>
                    <tr>
                        <td><label for="password_register">Password: 
                        <?php  
                            // if($_SESSION['password_register'] === "Empty" || $_SESSION['password_register'] === "Invalid password"){
                            //     echo $_SESSION['password_register'];
                            // }
                            // elseif(isset($_SESSION['password_register'])){
                            //     $_SESSION['password_register'] = "";
                            //     echo $_SESSION['password_register'];
                            // }
                        ?>
                        </label></td>
                        <td><input type="password" name="password_register" id=""></td>

                        <td><label for="password_repeat">Password Repeat: </label></td>
                        <td><input type="password" name="password_repeat" id=""></td>
                    </tr>
                    <tr>
                        <td><label for="gender">Gender: </label></td>
                        <td><input type="text" name="gender" id=""></td>
                    </tr>
                    <tr>
                        <td><label for="linkedin">Linkedin: </label></td>
                        <td><input type="text" name="linkedin" id=""></td>
                    </tr>
                    <tr>
                        <td><label for="github">Github: </label></td>
                        <td><input type="text" name="github" id=""></td>
                    </tr>
                    <tr>
                        <td><label for="preferred_language">Language: </label></td>
                        <td><input type="text" name="preferred_language" id=""></td>
                    </tr>
                    <tr>
                        <td><label for="avatar">Avatar: </label></td>
                        <td><input type="text" name="avatar" id=""></td>
                    </tr>
                    <tr>
                        <td><label for="video">Video: </label></td>
                        <td><input type="text" name="video" id=""></td>
                    </tr>
                    <tr>
                        <td><label for="quote">Quote: </label></td>
                        <td><input type="text" name="quote" id=""></td>

                        <td><label for="quote_author">Quote Author: </label></td>
                        <td><input type="text" name="quote_author" id=""></td>
                    </tr>
                    <tr>
                        <td><label for="created_at">Created At: </label></td>
                        <td><input type="text" name="created_at" id=""></td>
                    </tr>
                </table>
                <div id="buttons-container">
                    <input type="submit" value="Register" name="register" id="register-button">
                    <input type="submit" value="Back" name="backtologin" id="back-button">
                    <input type="submit" value="Save" name="save" id="save-button">
                </div>
            </form>
        </div>
    </div>
</body>

</html>