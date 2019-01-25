<?php
session_start();

$un=$_POST['t1'];
$ps=$_POST['t2'];
if($_POST['t1']==$un&&$_POST['t2']==$ps)
{
    $_SESSION['users']=$un;
    setcookie("users",$un,time()+(60*60*24),"/");
    setcookie("pass",$ps,time()+(60*60*24),"/");
$conn=  mysqli_connect("localhost","root", "", "websitedb");
$sql="select password from users where username='$un'";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
$dbps=$row['password'];
if($ps==$dbps)
{    
header("location:home.php");
}
else
{   
    echo "wrong user password";
    include "login.php";
    
}
mysqli_close($conn);
}
else
{
    echo "wrong id password";
include "login.php";
}
?>
