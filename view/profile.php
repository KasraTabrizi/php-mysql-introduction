<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
    require "../controller/controller.php";
?>

<body>
    <div id="wrapper">
        <h1>Profile Page</h1>

        <div id="container_profile">
            <div id="profile-img">
                <img src="" alt="">
            </div>
            <div id="profile-description">
                <?php //createTableProfile($_SESSION['profile']); ?>
                <table>
                </table>
            </div>
            <form action="" method="POST">
                <input type="button" name="edit" value="Edit">
                <input type="button" name="logout" value="Log Out">
                <input type="button" name="backtolist" value="Back">
            </form>
        </div>
    </div>
</body>
</html>