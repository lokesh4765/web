<?php
if(isset($_COOKIE['pass']))
{
    $u=$_COOKIE['users'];
    $p=$_COOKIE['pass'];
    header("location:loginchk.php?t1=".$u."&t2=".$p);
    echo "cookies are created";
}
 else {
    
     header("location:login.php");
 }
 ?>

