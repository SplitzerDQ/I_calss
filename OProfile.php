<?php
include('dbconnect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PROFILE PAGE</title>
    <style>
        .list>li>a
        {
            text-decoration: none;
        }
        .list>li
        {
            list-style: none;
            display: inline;
            padding-left: 25px;
        }
        .list
        {
            background: #A1F739;
        }
    </style>
</head>
<body>
    <ul class="list">
        <li><a href="OProfile.php">Profile</a></li>
        <li><a href="">Class</a></li>
        <li><a href="userchangepass.php">Change Password</a></li>
        <li><a href="">Logout</a></li>
    </ul><br><br>
     <form>
        <label for="Name">Name</label>
        <input type="text" placeholder="Name Here"><br><br>         <!---readonly here---->
        <label for="Email">Email</label>    
        <input type="text" placeholder="Email Here"><br><br>
    </form>
    <a href="OLogin.php">BACK TO HOME</a>
</body>
</html>