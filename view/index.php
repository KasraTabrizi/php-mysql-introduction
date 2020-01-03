<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
                    <h1>Title</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem voluptatum aspernatur excepturi nemo incidunt eveniet, quibusdam alias omnis placeat reiciendis ab numquam dolores repudiandae quia blanditiis iusto iste molestiae ea.</p>
                </div>
            </div> 
            <div id="login-container">
                <form action="" method="POST">
                    <table>
                        <tr >
                            <td colspan="2"><label for="email">Email:<?php echo $errorMail;?></label></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="text" name="email" id="email" placeholder="example@example.com"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><label for="email">Password:<?php echo $errorPass;?></label></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="password" name="password_login" id="password" placeholder="password"></label></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="login" value="Log In"></td>
                            <td><input type="submit" name="signup" value="Sign Up"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

