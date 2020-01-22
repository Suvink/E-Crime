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
    {   
        $mmid=$_POST['mmid'];
        $pfname=$_POST['pfname'];
	$psex=$_POST['psex'];
	$pfirno=$_POST['pfirno'];
	$presult=$_POST['presult'];
	$pdatedeath=$_POST['pdatedeath'];
	$pdescase=$_POST['pdescase'];
	$pplace=$_POST['pplace'];
	$pdname=$_POST['pdname'];
	
        
        
        
       
        
        
    
          
      $comp="insert into mortem(mmid,pfname,psex,pfirno,presult,pdatedeath,pdescase,pplace,pdname) values('$mmid','$pfname','$psex','$pfirno','$presult','$pdatedeath','$pdescase','$pplace','$pdname')";
      mysqli_select_db($conn,"crime"); 
      $res=mysqli_query($conn,$comp)or die(mysqli_error($conn));
      
      if(!$res)
      {
        $message1 = "Post Mortem already registered";
        echo "<script type='text/javascript'>alert('$message1');</script>";
      }
      else
      {
          $message = "Criminal. Registered Successfully";
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
	<title>Post Mortem</title>

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
                                    <p><h2>Post mortem</h2></p><br>	
				<form action="#" method="post" style="color: gray">
				    Post Mortem id<input type="text"  name="mmid" placeholder="Post mortem id" required="" value="<?php echo $mmid ?>"><br>
					Full name<input type="text"  name="pfname" placeholder="Full name" required="" value="<?php echo $pfname ?>"><br>
					<div class="top-w3-agile" style="color: gray">Sex
					<select class="form-control" name="psex" value="<?php echo $psex ?>">
						<option>Male</option>
						<option>Female</option>
                        
				    </select><br>
				</div>
					FIR No<input type="text"  name="pfirno" placeholder="FIR No" required="" value="<?php echo $pfirno ?>" ><br>
					<div class="top-w3-agile" style="color: gray">Result of Mortem
					<textarea class="form-control" name="presult" rows="20" cols="20" placeholder="Post mortem result" required="" value="<?php echo $presult ?>">
					</textarea'
				</div><br>
				<div class="Top-w3-agile" style="color: gray">
					Date Of Death : &nbsp &nbsp  
						<input style="background-color: #313131;color: white" type="date" name="pdatedeath" required value="<?php echo $pdatadeath ?>">
					</div>
					<br>
					<div class="top-w3-agile" style="color: gray">Description of case
					<textarea class="form-control" name="pdescase" rows="20" cols="20" placeholder="Description of case" required="" value="<?php echo $pdescase ?>">
					</textarea>
				</div><br>
				Place<input type="text"  name="pplace" placeholder="Place" required="" value="<?php echo $pplace ?>"><br>
			Doctor's Name<input type="text"  name="pdname" placeholder="Doctor's name" required="" value="<?php echo $pdname ?>"><br>
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
                                    <p><h2>Edit mortem</h2></p><br>	
				<form action="out.php" method="post" style="color: gray">
					Input mortem ID<input type="text"  name="mmid" placeholder="ID Number" required=""><br>
					
				
					<input type="submit" value="Search" name="search" href="mortemedit.php">
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
                                    <p><h2>View Mortems</h2></p><br>	
				<form action="mortemreport.php" method="post" style="color: gray">
					
					
				
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
	
   