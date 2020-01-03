<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/css/index.css">
</head>
<?php 
    require '../controller/controller.php'; 
?>
<body>
    <div id="wrapper">
        <div id="main-container">
            <div id="left-container">
                <div id="text-layer">
                    <h1>Code Book</h1>
                    <p>Social Platform For Programmers</p>
                </div>
            </div> 
            <div id="login-container">
                <h2>Login</h2>
                <div class="line"></div>
                <form action="" method="POST">
                    <table>
                        <tr>
                            <td colspan="2"><label for="email">Enter Your Email<?php echo $errorMail;?></label></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="text" name="email" id="email"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><label for="email">Enter Your Password<?php echo $errorPass;?></label></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="password" name="password_login" id="password"></label></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="login" value="LOGIN" id="login-button"></td>
                        </tr>
                        <tr>
                            <td><span>Don't have an account?</span> <input type="submit" name="signup" value="Sign Up" id="signup-button"></td>
                        </tr> 
                    </table>
                </form>
            </div>
        </div>
    </div>
    <footer>&copy;2020 Kasra Tabrizi</footer>
</body>
</html>

