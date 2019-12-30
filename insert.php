<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<?php
    require "connection.php";
?>

<body>
    <form action="/connection.php" method="POST">
        <table>
            <tr>
                <td><label for="first_name">First Name</label></td>
                <td><input type="text" name="first_name" id=""></td>
            </tr>
            <tr>
                <td><label for="last_name">Last Name</label></td>
                <td><input type="text" name="last_name" id=""></td>
            </tr>
            <tr>
                <td><label for="username">Username</label></td>
                <td><input type="text" name="username" id=""></td>
            </tr>
            <tr>
                <td><label for="gender">Gender</label></td>
                <td><input type="text" name="gender" id=""></td>
            </tr>
            <tr>
                <td><label for="linkedin">Linkedin</label></td>
                <td><input type="text" name="linkedin" id=""></td>
            </tr>
            <tr>
                <td><label for="github">Github</label></td>
                <td><input type="text" name="github" id=""></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td><input type="text" name="email" id=""></td>
            </tr>
            <tr>
                <td><label for="preferred_language">Language</label></td>
                <td><input type="text" name="preferred_language" id=""></td>
            </tr>
            <tr>
                <td><label for="avatar">Avatar</label></td>
                <td><input type="text" name="avatar" id=""></td>
            </tr>
            <tr>
                <td><label for="video">Video</label></td>
                <td><input type="text" name="video" id=""></td>
            </tr>
            <tr>
                <td><label for="quote">Quote</label></td>
                <td><input type="text" name="quote" id=""></td>
            </tr>
            <tr>
                <td><label for="quote_author">Quote Author</label></td>
                <td><input type="text" name="quote_author" id=""></td>
            </tr>
            <tr>
                <td><label for="created_at">Created At</label></td>
                <td><input type="text" name="created_at" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="submit" name="submit"></td>
            </tr>
        </table>
    </form>

</body>

</html>