<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php 
    require '../controller/controller.php'; 
?>
<body>
    <div id="wrapper">
        <h1>Title</h1>

        <div id="container-login">
            <form action="" method="POST">
                <label for="email">Email:<?php echo $errorMail; ?></label>
                <input type="text" name="email" id="email" placeholder="example@example.com">
                <label for="email">Password:<?php echo $errorPass; ?></label>
                <input type="password" name="password_login" id="password" placeholder="password">
                <input type="submit" name="login" value="Log In">
                <input type="submit" name="signup" value="Sign Up">
            </form>
        </div>
    </div>
</body>
</html>

