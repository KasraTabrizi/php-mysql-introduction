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
                <img class="gender-icon" src="" alt="gender-icon">
                <img class="profile-image" src="" alt="profile-image">
            </div>
            <p class="user-name"></p>
            <p class="quote"></p>
            <div id="profile-description">
                <table>
                    <tr>
                        <td>First Name</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Language</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <ul id="social-media">
                <li><a href=""><img class="social-icon" src="" alt=""></a></li>
                <li><a href=""><img class="social-icon" src="" alt=""></a></li>
                <li><a href=""><img class="social-icon" src="" alt=""></a></li>
            </ul>
            <form action="" method="POST">
                <input type="submit" name="edit" value="Edit">
                <input type="submit" name="logout" value="Log Out">
                <input type="submit" name="backtolist" value="Home">
            </form>
        </div>
    </div>
</body>
</html>