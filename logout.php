<?php
session_start();
session_unset();
session_destroy();
setcookie("users","",time()-3600,"/");
setcookie("pass","",time()-3600,"/");
header("location:index.php");
?>


