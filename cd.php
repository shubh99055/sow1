
<!DOCTYPE html>
<html>
<header> 
 <a href="index.html"><img src="dyp.jpg" alt="logo"></a>
  <a href="index.html"><img src="PHOTO-2018-08-19-14-42-47.jpg" alt="logo" class="center"></a>
</header>
<head>
  <title>TREE PLANTATION</title>
 
  <link rel="stylesheet" href="css/style.css"> 
</head>
<style>
body {
  margin: 0;
  padding: 0;
}

.center {
    float: right;
    margin-left: 10;
    margin-right: 10;
    width: 150px;
    height: 100px;
}

.logo {
  float: left;
  display: inline-block;
  
}
/* ~~ Top Navigation Bar ~~ */

#navigation-container {
  width:1000px;
  margin: 0 auto;
  height: 70px;
}

.navigation-bar {
  background-color: gray;
  height: 100px;
  width: 100%;
}

.navigation-bar ul {
  padding: 0px;
  margin: 0px;
  text-align: center; 
}

.navigation-bar li {
  list-style-type: none;
  padding: 0px;
  height: 50px;
  margin-top: 4px;
  margin-bottom: 4px;
  display: inline;
}

.navigation-bar li a {
  color: black;
  font-size: 30px;
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  text-decoration: none;
  line-height: 70px;
  padding: 5px 15px;
  opacity: 0.7;
}
.navigation-bar li a:hover {
  background-color:black;
  color: white;
}
h2{
  color: Black; 
  font-size: 300%;
}

header img {
   width: 250px;
   vertical-align:left;
}

header img {
    float:left;
 }

.mySlides {display:none;
align-self: right;
}

body {
   background: url("01.jpg");
   background-repeat:  repeat;
}

body {font-family: "Times New Roman", Georgia, Serif;}
p{
  text-align: right;
    font-family: "Playfair Display";
    letter-spacing: 5px;
    
   
}

.w3-large {
     position:absolute;
    right: 300px;
    width: 700px;
    
    padding: 10px;
}

.ss {width:150px;
 background-color: black;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;}
</style>
 <div class="navigation-bar">
   <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">About</a></li>
        
        <li><a href="#">Get in Touch</a></li>
      </ul>
    </div>
</header>
<body>
<h2 class="w3-center">CLEAN UP DRIVE </h2>

<h1 class="w3-center">About Tree Plantation</h1><br>
     
      <p class="w3-large" >The Catering was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute iruredolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.We only use<a href="sowform.html" target="_blank"> <button class="ss">Register</button></p> </a>
      
      
<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="IMG_20160218_104932.jpg" style="width:100%">
  <img class="mySlides" src="IMG_20160218_094639.jpg" style="width:100%">
 
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

<body>
	

</body>