<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/css/profiles_list.css">
</head>
<?php
    require "../controller/controller.php";
?>

<body>
    <h1>List of Profiles</h1>
    <div id="wrapper">
        <?php  for($i = 0; $i < 20; $i++){ ?>
        <div class="container-profilelist">
                <div class="profile-box">
                    <div class="profile-img">
                        <img class="profile-image" src="<?php echo $_SESSION['profile']['avatar'];?>" alt="profile-image">
                        <img class="gender-icon" src=
                            <?php
                                if($_SESSION['profile']['gender'] === 'female'){
                                    echo "https://img.icons8.com/cotton/48/000000/female.png";
                                }
                                elseif($_SESSION['profile']['gender'] === 'male'){
                                    echo "https://img.icons8.com/cotton/48/000000/male.png";
                                }
                            ?>
                        alt="gender-icon">
                    </div>
                        <p class="user-name"><?php echo $_SESSION['profile']['username'];?></p>
                        <p class="quote"><q><i><?php echo $_SESSION['profile']['quote'];?></i></q> <br>~ <?php echo $_SESSION['profile']['quote_author'];?></p>
                </div>
        </div>
        <?php } ?>
    </div>
</body>
</html>