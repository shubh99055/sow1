<?php include('connection.php'); ?>
<!DOCTYPE html>
<html>
<header> 
 <a href="index.html"><img src="dyp.jpg" alt="logo"></a>
  <a href="index.html"><img src="PHOTO-2018-08-19-14-42-47.jpg" alt="logo" class="center"></a>
</header>
<head>
  <title>Sign-Up/Login Form</title>
 
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
  background-color: #2F4F4F;
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

body {
   background: url("DSC_00881.jpg");
   background-repeat:  repeat;
}


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

  <h2><br> 
  WELCOME TO
  SOCIAL WING - RAIT </h2></h2>
	
<div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>SOW Sign Up</h1>
          
          <form action="register1.php" method="post">
          <?php include('errors1.php'); ?>
          <div class="top-row">
            <div class="field-wrap">
              <!--<label>
                First Name<span class="req">*</span>
              </label>-->
              <input type="text"  name="username" placeholder="First Name*" required autocomplete="off" value="<?php echo $username; ?>" />
            </div>
        
            <div class="field-wrap">
              <!---<label>
                Last Name<span class="req">*</span>
              </label>---->
              <input type="text" name="lname" placeholder="Lastname" required autocomplete="off"  value="<?php echo $lname; ?>" />
            </div>
          </div>
           <div class="field-wrap">
            <!--<label>
              Email Address<span class="req">*</span>
            </label>--->
            <input type="text"  name="rollno" placeholder="student Rollno." required autocomplete="off" value="<?php echo $rollno; ?>"/>
          </div>

          <div class="field-wrap">
            <!--<label>
              Email Address<span class="req">*</span>
            </label>--->
            <input type="text"  name="branch" placeholder="Branch" required autocomplete="off" value="<?php echo $branch; ?>"/>
          </div>

           <div class="field-wrap">
            <!--<label>
              Email Address<span class="req">*</span>
            </label>--->
            <input type="text"  name="pn" placeholder="Phone No." required autocomplete="off" value="<?php echo $pn; ?>"/>
          </div>
         

         <div class="field-wrap">
            <!--<label>
              Email Address<span class="req">*</span>
            </label>--->
            <input type="text"  name="year" placeholder="Year" required autocomplete="off" value="<?php echo $year; ?>"/>
          </div> 

           <div class="field-wrap">
            <!--<label>
              Email Address<span class="req">*</span>
            </label>--->
            <input type="text"  name="email" placeholder="EmailId" required autocomplete="off" value="<?php echo $email; ?>"/>
          </div>

          <div class="field-wrap">
           <!--- <label>
              Set A Password<span class="req">*</span>
            </label>-->
            <input type="password" name="password_1" placeholder="Set your password" required autocomplete="off"/>
          </div>

           <div class="field-wrap">
           <!--- <label>
              Set A Password<span class="req">*</span>
            </label>-->
            <input type="password" name="password_2" placeholder="Confirm your password" required autocomplete="off"/>
          </div>


          
          <button type="submit" name="submit" class="button button-block"/>REGISTER</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="/" method="post">
          <?php include('errors1.php'); ?>
           <div class="field-wrap">
            <!--<label>
              Email Address<span class="req">*</span>
            </label>--->
            <input type="email" placeholder="EmailId" required autocomplete="off"/>
           </div>
          
          <div class="field-wrap">
            <!---<label>
              Password<span class="req">*</span>
            </label>--->
            <input type="password" placeholder="Type your password" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->

</body>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script  src="js/index.js"></script>

</html>












