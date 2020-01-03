<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/css/profile.css">
</head>
<?php
    require "../controller/controller.php";
?>

<body>
    <div id="wrapper">
        <!-- <h1>Profile Page</h1> -->
        <div id="container-profile">
            <div id="profile-img">
                <img class="profile-image" src="<?php echo $_SESSION['profile']['avatar'];?>" alt="gender-icon">
                <img class="gender-icon" src="https://img.icons8.com/cotton/60/000000/male.png" alt="profile-image">
            </div>
            <p class="user-name"><?php echo $_SESSION['profile']['username'];?></p>
            <p class="quote"><?php echo $_SESSION['profile']['quote'];?> ~ <?php echo $_SESSION['profile']['quote_author'];?> </p>
        </div>
        <div id="profile-description">
            <table>
                    <tr>
                        <td>First Name</td>
                        <td><?php echo $_SESSION['profile']['first_name'];?></td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td><?php echo $_SESSION['profile']['last_name'];?></td>
                    </tr>
                    <tr>
                        <td>Language</td>
                        <td><?php echo $_SESSION['profile']['preferred_language'];?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo $_SESSION['profile']['email'];?></td>
                    </tr>
                </table>
            
            <ul id="social-media">
                <li><a href=""><img src="https://img.icons8.com/color/48/000000/linkedin.png"></a></li>
                <li><a href=""><img src="https://img.icons8.com/color/48/000000/github--v1.png"></a></li>
                <li><a href=""><img src="https://img.icons8.com/color/48/000000/youtube.png"></a></li>
            </ul>
        </div>
        <div id="buttons-container">
            <form action="" method="POST">
                <input type="submit" name="edit" value="Edit" id="edit-button">
                <input type="submit" name="logout" value="Log Out" id="logout-button">
                <input type="submit" name="backtolist" value="Home" id="home-button">
            </form>
        </div>
    </div>
</body>
</html>