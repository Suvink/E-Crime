<!DOCTYPE html>
<html>
 
<?php
session_start();
    if(!isset($_SESSION['x']))
        header("location:police_home.php");
    
    
    $conn=mysqli_connect("localhost","root","");
    if(!$conn)
    {
        die("could not connect".mysqli_connect_error);
    }
    mysqli_select_db($conn,"crime");
  
    
    
    
if(isset($_POST['s'])){
	
	
	
    $con=mysqli_connect('localhost','root','');
    if(!$con)
    {
        die('could not connect: '.mysqli_connect_error());
    }
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {   $wid=$_POST['wid'];
        $wfname=$_POST['wfname'];
	$wnname=$_POST['wnname'];
	$wage=$_POST['wage'];
	$wsex=$_POST['wsex'];
	$wplace=$_POST['wplace'];
	$wdes=$_POST['wdes'];
	
	
        
        
        
       
        
        
    
          
      $comp="insert into wanted(wid,wfname,wnname,wage,wsex,wplace,wdes) values('$wid','$wfname','$wnname','$wage','$wsex','$wplace','$wdes')";
      mysqli_select_db($conn,"crime"); 
      $res=mysqli_query($conn,$comp) or die(mysqli_error($conn));
      
      if(!$res)
      {
        $message1 = "Wanted already registered";
        echo "<script type='text/javascript'>alert('$message1');</script>";
      }
      else
      {
          $message = "Wanted Registered Successfully";
          echo "<script type='text/javascript'>alert('$message');</script>";
      }
    }
    
  }

?>
    
 <script>
     function f1()
        {
           var sta1=document.getElementById("desc").value;
           var x1=sta1.trim();
          if(sta1!="" && x1==""){
          document.getElementById("desc").value="";
          document.getElementById("desc").focus();
          alert("Space Found");
        }
}
 </script>
   
<head>
	<title>Most wanted</title>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

	<link href="complainer_page.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body style="background-size: cover;
    background-image: url(home_bg1.jpeg);
    background-position: center;">
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
  </div>
 </nav>
    
    
<div class="video" style="margin-top: 5%"> 
	<div class="center-container">
		 <div class="bg-agile">
			<br><br>
			<div class="login-form">
                                    <p><h2>Most Wanted</h2></p><br>	
				<form action="#" method="post" style="color: gray">
				Wanted ID<input type="text"  name="wid" placeholder="Wanted id" required=""><br>
					Full Name<input type="text"  name="wfname" placeholder="Full name" required=""><br>
					Nick name<input type="text"  name="wnname" placeholder="Nick name" required=""><br>
				Nick name<input type="text"  name="wage" placeholder="Age" required=""><br>
					<div class="top-w3-agile" style="color: gray">Sex
					<select class="form-control" name="wsex">
						<option>Male</option>
						<option>Female</option>
                        
				    </select><br>
				</div>
				
					Place<input type="text"  name="wplace" placeholder="Place" required="" ><br>
					<div class="top-w3-agile" style="color: gray">Description
					<textarea class="form-control" name="wdes" rows="20" cols="20" placeholder="Description" required="">
					</textarea>
				</div><br>
				<div class="Top-w3-agile" style="color: gray">
					
				
					<input type="submit" value="Submit" name="s">
				</form>	
			</div>	
		</div>
	</div>	
</div>

<div class="video" style="margin-top: 5%"> 
	<div class="center-container">
		 <div class="bg-agile">
			<br><br>
			<div class="login-form">
                                    <p><h2>Edit wanted</h2></p><br>	
				<form action="out.php" method="post" style="color: gray">
					Input wanted ID<input type="text"  name="wid" placeholder="ID Number" required=""><br>
					
				
					<input type="submit" value="Search" name="search" href="wantededit.php">
				</form>	
			</div>	
		</div>
	</div>	
</div>	

<div class="video" style="margin-top: 5%"> 
	<div class="center-container">
		 <div class="bg-agile">
			<br><br>
			<div class="login-form">
                                    <p><h2>View Criminals</h2></p><br>	
				<form action="wantedreport.php" method="post" style="color: gray">
					
					
				
					<input type="submit" value="View" name="view">
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
  <h4 style="color: white;">&copy <b>Crime Watch 2019</b></h4>
</div>
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
	
