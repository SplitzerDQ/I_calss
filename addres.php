<?php
include('dbconnect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DASHBOARD</title>
</head>
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
    </style>
<body>
    <ul class="list">
        <li><a href="AdProfile.php">PROFILE</a></li>
        <li><a href="addres.php">Add Details</a></li>
        <li><a href="Adpasschange.php">Change Password</a></li>
        <li><a href="OAdLogin.php">Logout</a></li>
    </ul><br><br>
     <form>
       <label for="Name">Name</label>
       <input type="text" placeholder="Provide Name" name="OName"><br><br>
        <label for="Email">Email</label>
       <input type="email" placeholder="Provide Email" name="OEmail"><br><br>
        <label for="Year">Year</label>
       <input type="text" placeholder="Provide Year" name="OYear"><br><br>
        <label for="Semester">Semester</label>
       <input type="text" placeholder="Provide Semester" name="OSem"><br><br>
        <label for="Subject1">Subject1</label>
       <input type="text" placeholder="Subject 1 Marks" name="S1"><br><br>
        <label for="Subject2">Subject2</label>
       <input type="text" placeholder="Subject 2 Marks" name="S2"><br><br>
        <label for="Subject3">Subject3</label>
       <input type="text" placeholder="subject 3 Marks" name="S3"><br><br>
       <input type="submit" value="Insert" name="AInsert"><br><br>
        <?php if(isset($msg)){ echo $msg;}?>
    </form>
</body>
</html>