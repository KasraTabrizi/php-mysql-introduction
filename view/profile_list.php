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
        <?php  
         $database = openConnection();
         $sql = "SELECT * FROM `student`";
         foreach ($database->query($sql) as $row) {
        ?>
        <div class="container-profilelist">
                <div class="profile-box">
                    <div class="profile-img">
                        <img class="profile-image" src="<?php echo $row['avatar'];?>" alt="profile-image">
                        <img class="gender-icon" src=
                            <?php
                                if($row['gender'] === 'female'){
                                    echo "https://img.icons8.com/cotton/48/000000/female.png";
                                }
                                elseif($row['gender'] === 'male'){
                                    echo "https://img.icons8.com/cotton/48/000000/male.png";
                                }
                            ?>
                        alt="gender-icon">
                    </div>
                        <p class="user-name"><?php echo $row['username'];?></p>
                        <p class="quote"><q><i><?php echo $row['quote'];?></i></q> <br>~ <?php echo $row['quote_author'];?></p>
                </div>
        </div>
        <?php } ?>
    </div>
</body>
</html>