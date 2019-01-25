<?php
session_start();
?>
<html>
    <body background="photos\bg4.jpg">
 

   
            <br>
            <br>
            <br>
    <center>
        
        <font size="15" color="green">CITY LIFE</FONT> 
        <img src="photos/r3.jpg" width="5%" hight="5%">
        <h2> Login or Sign in </H2>
      <form method="post" action="loginchk.php">
          
          Username:<input type="text" name="t1"><br>
          Password:<input type="password" name="t2"><br>
          <center>  <input type="submit" value="login"></center>
          
          <H2>New user register<a href="register.php">here</a></h2>
        
    </center>
             
         
</form>  
    </body>
</html>
