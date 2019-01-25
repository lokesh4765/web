<?php
session_start();
?>
<?php
$conn=mysqli_connect("localhost", "root", "", "websitedb");
if(!$conn)
{
    die("Connection Error".mysqli_connect_error());
}
$sql="INSERT INTO users VALUES(?,?,?,?,?,?,?)";
if($stmt=mysqli_prepare($conn, $sql))
{
    mysqli_stmt_bind_param($stmt, 'ssssssi', $fn, $ln,$un,$pas,$bir,$gen,$mno);
    $fn=$_POST['c1'];
    $ln=$_POST['c2'];
    $un=$_POST['c3'];
    $pas=$_POST['c4'];
    $bir=$_POST['c5'];
    $gen=$_POST['c6'];
    $mno=$_POST['c7'];
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    header("location:login.php");
    
}
?>