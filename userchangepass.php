<?php
include('dbconnect.php');
?>
<?php
if(isset($_REQUEST['OChange']))
{
    if(($_REQUEST['OPass']=="")||($_REQUEST['OConPass']==""))  ///problem for ConPass
    {
        $msg="<br>Feilds Are Mandatory";
    }
    else
    {
        $OPass=$_REQUEST['OPass'];
        $OConPass=$_REQUEST['OConPass'];
        if($OPass==$OConPass)
        {
            $sql="UPDATE hentai SET OPass='$OPass',OConPass='$OConPass'";
            if(mysqli_query($conn,$sql))
            {
                $msg="<br>Password Upadated";
            }
            else
            {
                $msg="<br>Failed To Update";
            }
        }
        else
        {
            $msg="<br>Password Didn't match";
        }
    }
}
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
        <li><a href="OLogin.php">Logout</a></li>
    </ul><br><br>
     <form>
<!--        <label for="Email">Email</label>    -->
        <!--<input type="text" placeholder="Email Here" name="OEmail"><br><br>read only here fetch the name and email of the logged in user-->
        <label for="Password">Password</label>
        <input type="password" placeholder="New Password" name="OPass"><br><br>
        <label for="Confirm Password">Confirm Password</label>
        <input type="password" placeholder="Password Here" name="OConPass"><br><br> 
        <input type="submit" value="Change" name="OChange"><br><br>
    </form>
    <?php if(isset($msg)){ echo $msg;}?>
</body>
</html>