<?php
include('dbconnect.php');
?>
<?php
if(isset($_REQUEST['OLogin']))
{
    if(($_REQUEST['OEmail']=="")||($_REQUEST['OPass']==""))
    {
        $msg="<br>Fill All Feilds";
    }
    else
    {
        $OEmail=$_REQUEST['OEmail'];
        $OPass=$_REQUEST['OPass'];
        $sql="SELECT OEmail,OPass from hentai WHERE OEmail='".$OEmail."'";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)==1)
        {
            echo'<script>location.href="OProfile.php"</script>';
        }
        else
        {
            $msg="<br>Credential didn't Matched";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>STUDENT LOGIN</title>
</head>
<body>
   <h1>STUDENT LOGIN PAGE</h1>
    <form action="" method="POST">
        <label for="Email">EMAIL</label>
        <input type="email" placeholder="Provide Your Email" name="OEmail"><br><br>
        <label for="Password">PASSWORD</label>
        <input type="password" placeholder="Provide Password" name="OPass"><br><br>
        <input type="submit" value="LOGIN" name="OLogin"><br><br>
        <?php if(isset($msg)){ echo $msg;}?>
    </form>
    <a href="index.php">BACK TO MAIN</a><br><br>
</body>
</html>