<?php
session_start();
if(!isset($_SESSION['users']))
{
    header("location:index.php");
}
?>
<html>
<head> 
<style>
.h
{
padding:10px;
color:whitesmoke;
background-color:grey;
text-align:center;
}

.links{
        
	width: 200%;
	display: inline-block;
	text-align: left;
	float: left;
margin-top:0px;
}
	.links ul{}
		.links ul li{
			display: inline-block;
			height: 100px;
		}
			.links a{
				padding: 10px;
				background: coral;
				color: skyblue;
			}
			.links ul li a:hover{
				background-color: #C0C0C0;
				box-shadow: 0px 1px 1px #666;
			}
			.links ul li a:active{ background-color: #ff8f00; }
                        


.homelk{
        
	width: 90%;
        padding:1opx;
	background:#ddd;
        
	text-align: center;
	float: center;
        display:flex;
        justify-content:center;
}
.box
{
    width:250px;
    height:300px;
    background:orange;
    float:left;
    margin:0px 10px;
    transition:1s;
    align:center
    
}
.box:hover
{
    transform:scale(1.3);
    background:#ff800a;
    box-shadow:2px 2px 2px #000;
    z-index:2
}
</style>
</head>
<body background="photos/BG1.jpg">
    <br>
<div class="h">
<!<img src="r2.jpg" align="right" width="170" height="90">
<img src="photos/r3.jpg" align="right" width="170" height="100">

<h1><big>Cities to visit in uttrakhand</big></h1>

</div>


<marquee width="100%" bgcolor="lightblue" >
    <font color="black" ><b>Welcome To The City of "Land of Gods" Enjoy Your Visit.</b></font></marquee>
<div class="links">
<ul>
    <li><a href="home.php"><font color="white">HOME</font></a><br>  </li>
    <li><a href="cities.php"><font color="white">VISIT   As      TOURISTER</font></a><br>  </li>  
<li><a href="rhome.php"><font color="white">HOME   SETTLEMENT   PLANS</font></a><br> </li>                           
<li><a href="chome.php"><font color="white">TUTORIALS</font></a><br></li>
 <li><a href="about.php"><font color="white">ABOUT </font></a><br></li>
 <li><a href="feedback.php"><font color="white">FEEDBACK</font></a><br></li>
  <li><a href="logout.php"><font color="white">LOGOUT</font></a><br></li>
 
 
 
</ul>
</div>
<div class="homelk" >
<ul>

 <div class="box"><a href="dehradoon.php"><font color="white">DEHRADOON</font>
     <img src="photos/dehradun.jpg"  width="250" height="100%" />  </div>
</a> 
    <div class="box"><a href="haridwar.php"><font color="white">HARIDWAR</font>
        <img src="photos/haridwar.jpg"  width="250" height="100%" />  </div>
</a> 
        <div class="box"><a href="rishikesh.php"><font color="white">RISHIKESH</font>
                <img src="photos/Rishikesh.jpg" width="250" height="100%" ></div>

    </a>
<div class="box"><a href="mussorie.php"><font color="white">MUSSOORIE</font>
    <img src="photos/mussoorie.jpg"     width="250" height="100%" /></div>
</a>
<div class="box"><a href="nainital.php"><font color="white">NAINITAL</font>
    <img src="photos/nainital.jpg"   width= "250" height="100%" /></div>
   </a>  
<div class="box"><a href="landour.php"><font color="white">LANDOUR</font>
    <img src="photos/Landour.jpg"   width= "250" height="100%" /></div>
   </a>
   <div class="box"><a href="ramnagar.php"><font color="white">RAMNAGAR</font>
        <img src="photos/ramnagar.jpeg"   width= "250" height="100%" /></div>
   </a>
    
       
    <div class="box"><a href="lansdown.php"><font color="white">LANSDOWN</font>
        <img src="photos/Lansdowne.jpg"   width= "250" height="100%" /></div>
   </a> 
    </div>
<BR><BR>
<div class="h">


<h1><big>Chota char dham in uttrakhand</big></h1>

</div>
<br><br>
<div class="homelk" >
    
    <div class="box"><a href="badrinath.php"><font color="white">BADRINATH</font>
        <img src="photos/badrinath.jpg"   width= "250" height="100%" /></div>
   </a>     
        <div class="box"><a href="kedarnath.php"><font color="white">KEDARNATH</font>
            <img src="photos/Kedarnath.jpg"   width= "250" height="100%" /></div>
   </a>     
            <div class="box"><a href="gangotri.php"><font color="white">GANGOTRI</font>
                <img src="photos/gangotri.jpg"   width= "250" height="100%" /></div>
   </a>     
                <div class="box"><a href="yamunotri.php"><font color="white">YAMUNOTRI</font>
                    <img src="photos/Yamunotri_temple_and_ashram.jpg"   width= "250" height="100%" /></div>
   </a>     
   
                    
</body>
</html>

