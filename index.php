<!--start database connection -->
<?php
include('dbconnect.php');
?>
<!--start taking input-->
<?php
if(isset($_REQUEST['ORegister']))
{
    if(($_REQUEST['OName']=="")||($_REQUEST['OYear']=="")||($_REQUEST['OSem']=="")||($_REQUEST['OEmail']=="")||($_REQUEST['OPass']=="")||($_REQUEST['OConPass']=="")||($_REQUEST['OPhno']==""))
    {
        $msg="<br>Fill All Feilds<br>";
    }
    else
    {
        $OName=$_REQUEST['OName'];
        $OYear=$_REQUEST['OYear'];
        $OSem=$_REQUEST['OSem'];
        $OEmail=$_REQUEST['OEmail'];
        $OPass=$_REQUEST['OPass'];
        $OConPass=$_REQUEST['OConPass'];
        $OPhno=$_REQUEST['OPhno'];
        $sql="SELECT OEmail FROM hentai WHERE OEmail='$OEmail'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==1)
        {
            $msg="<br>You are already Registered . Login";
        }
            else
            {    
            if($OPass==$OConPass)
            {
                $sql="INSERT INTO hentai(OName,OYear,OSem,OEmail,OPass,OConPass,OPhno)VALUES('$OName','$OYear','$OSem','$OEmail','$OPass',
                '$OConPass','$OPhno')";
                if(mysqli_query($conn,$sql))
                {
                   $msg="<br>Now Registered"; 
                }
                else
                {
                    $msg="<br>Not Registered";
                }
            }
            else
            {
                $msg="<br>Password And Confirm Password aren't Same";
            }
            }
    }
}
?>
<!--end input taking-->
<!--end database connection -->
<!--regestration form-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>USER REGESTRATION</title>
</head>
<body>
   <h1>USER REGESTRATION PAGE</h1>
    <form action="" method="POST">
        <label for="Name">NAME</label>
        <input type="text" placeholder="Provide Your Name" name="OName"><br><br>
        <label for="Year">YEAR</label>
        <select name="OYear">
            <option>--Select Your Year--</option>
            <option>1st</option>
            <option>2nd</option>
            <option>3rd</option>
            <option>4th</option>
        </select><br><br>
        <label for="Semester">SEMESTER</label>
        <select name="OSem">
            <option>--Select your Semester--</option>
            <option>1st</option>
            <option>2nd</option>
            <option>3rd</option>
            <option>4th</option>
            <option>5th</option>
            <option>6th</option>
            <option>7th</option>
            <option>8th</option>
        </select><br><br>
        <label for="Email">EMAIL</label>
        <input type="email" placeholder="Provide Your Email" name="OEmail"><br><br>
        <label for="Password">PASSWORD</label>
        <input type="password" placeholder="Create a Password" name="OPass"><br><br>
        <label for="Confirm Password">CONFIRM PASSWORD</label>
        <input type="password" placeholder="Confirm Your Password" name="OConPass"><br?><br><br>
        <label for="Phno">PHONE NUMBER</label>
        <input type="number" placeholder="Provide Your Phone Number" name="OPhno"><br><br>
        <input type="submit" value="Register" name="ORegister"><br><br>
        <?php if(isset($msg)){ echo $msg;}?>
    </form>
    <a href="OLogin.php">LOGIN FOR STUDENT</a><br><br>
    <a href="OAdLogin.php">LOGIN FOR ADMIN</a><br><br>
</body>
</html>
<!--registration form end-->