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
        <input type="text" placeholder="Name Here"><br><br>         <!---readonly here---->
        <label for="Email">Email</label>    
        <input type="text" placeholder="Email Here"><br><br>
    </form>
</body>
</html>

<?php
$sql="SELECT * FROM hentai";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    echo'<table border="2">';
    echo'<tr>';
    echo'<thead>';
    echo'<th>Name</th>';
    echo'<th>Year</th>';
    echo'<th>Semester</th>';
    echo'<th>Email</th>';
    echo'<th>Add</th>';
    echo'</thead>';
    echo'</tr>';
    echo'<tbody>';
        while($row=mysqli_fetch_assoc($result))
        {
        echo'<tr>';
        echo"<td>".$row['OName']."</td>";
        echo"<td>".$row['OYear']."</td>";
        echo"<td>".$row['OSem']."</td>";
        echo"<td>".$row['OEmail']."</td>";
        echo'<td><form action="" method="POST">
        <input type="hidden" name="Ono" value='.$row['Ono'].'>
        <input type="submit" name="AddRes" value="Add"></form>
        </td>';
        echo'</tr>';
        }
    echo'</tbody>';
    echo'</table>';
}
?>