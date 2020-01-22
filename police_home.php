<!DOCTYPE html>
<html>
 
<?php
session_start();
    if(!isset($_SESSION['x']))
        header("location:policelogin.php");
    
    
    $conn=mysqli_connect("localhost","root","");
    if(!$conn)
    {
        die("could not connect".mysqli_connect_error);
    }
    mysqli_select_db($conn,"crime");
  $p_id=$_SESSION['p_id'];
  ?>  
   
<head>
	<title>Police Home Page</title>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

	<link href="complainer_page.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body>
	<nav  class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php"><b>Crime Portal</b></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li ><a href="official_login.php">Official Login</a></li>
        <li ><a href="policelogin.php">Police Login</a></li>
        <li class="active"><a href="police_home.php">Police Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
	   <li  ><a href="criminalreg.php">Criminal Registration</a></li>
	   <li ><a href="mortem.php">Post Mortem</a></li>
	   <li ><a href="wanted.php">Most Wanted</a></li>
	   <li  ><a href="missing.php">Missing Persons</a></li>
	   
        <li  ><a href="police_pending_complain.php">Pending Complaints</a></li>
        <li ><a href="police_complete.php">Completed Complaints</a></li>
        <li><a href="p_logout.php">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
      </ul>
	  </div>
	  <ul class="nav navbar-nav navbar-right">
	  <li class="active"><a href="policemsg.php">Send Message</a></li>
        <li class="active"><a href="policeinbox.php">Inbox</a></li>
        <li><a href="policesentmail.php">Sent Messages</a></li>
        
      </ul>
	  
	  
    </div>
  </div>
 </nav>
    
<div class="video" style="margin-top: 5%"> 
	<div class="center-container">
		 <div class="bg-agile">
			<br><br>
			<div class="login-form"><p><h2 style="color:white">Welcome 
			<?php $name = $_SESSION['email'];
			$price = mysqli_query($conn,"SELECT p_name FROM police WHERE  p_id= '$name'");      
$pname = mysqli_fetch_array($price);
        
		$a= implode($pname);
		echo $a;
			 ?></h2></p><br>
                
				</form>	
			</div>	
		</div>
	</div>	
</div>	
<div style="position: relative;
   left: 0;
   bottom: 0;
   width: 100%;
   height: 30px;
   background-color: rgba(0,0,0,0.8);
   color: white;
   text-align: center;">
  <h4 style="color: white;">&copy <b>Crime Portal 2018</b></h4>
</div>
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>