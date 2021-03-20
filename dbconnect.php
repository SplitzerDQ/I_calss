<?php
$my_host="localhost";
$my_user="root";
$my_pass="";
$my_database="oppai";
$conn=mysqli_connect($my_host,$my_user,$my_pass,$my_database);
if(!$conn)
{
    die("Connection Failed");
}
?>