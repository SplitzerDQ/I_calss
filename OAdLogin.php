<?php
include('dbconnect.php');
?>
<?php
if(isset($_REQUEST['AdLogin']))
{
    if(($_REQUEST['AdEmail']=="")||($_REQUEST['AdPass']==""))
    {
        $msg="<br>Fill All Feilds";
    }
    else
    {
        $AdEmail=$_REQUEST['AdEmail'];
        $AdPass=$_REQUEST['AdPass'];
        $sql="SELECT AdEmail,AdPass from admindetails WHERE AdEmail='$AdEmail'";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)==1)
        {
            echo'<script>location.href="AdProfile.php"</script>';
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
    <title>ADMIN LOGIN</title>
</head>
<body>
   <h1>ADMIN LOGIN PAGE</h1>
    <form action="" method="POST">
        <label for="Email">EMAIL</label>
        <input type="email" placeholder="Provide Your Email" name="AdEmail"><br><br>
        <label for="Password">PASSWORD</label>
        <input type="password" placeholder="Provide Password" name="AdPass"><br><br>
        <input type="submit" value="LOGIN" name="AdLogin"><br><br>
        <?php if(isset($msg)){ echo $msg;}?>
    </form>
    <a href="index.php">BACK TO MAIN</a><br><br>
</body>
</html>