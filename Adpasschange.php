<?php
include('dbconnect.php');
?>
<?php
if(isset($_REQUEST['AdChange']))
{
    if(($_REQUEST['AdPass']==""))  ///problem for ConPass
    {
        $msg="<br>Feilds Are Mandatory";
    }
    else
    {
        $AdPass=$_REQUEST['AdPass'];
        {
            $sql="UPDATE admindetails SET AdPass='$AdPass'";
            if(mysqli_query($conn,$sql))
            {
                $msg="<br>Password Upadated";
            }
            else
            {
                $msg="<br>Failed To Update";
            }
        }
    }
}
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
<!--        <label for="Email">Email</label>-->
<!--        <input type="email" placeholder="Email Here" name="AdEmail"><br><br>         -readonly here---->
        <label for="Password">Password</label>    
        <input type="password" placeholder="New Password Here" name="AdPass"><br><br>
        <input type="submit" value="Change" name="AdChange"><br><br>
        <?php if(isset($msg)){ echo $msg;}?>
    </form>
</body>
</html>