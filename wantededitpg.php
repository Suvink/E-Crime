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
  
    
    
    
?>
   
<head>
	<title>Criminal Edit</title>

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
      <a class="navbar-brand" href="home.php"><b>Crime Watch</b></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li ><a href="official_login.php">Official Login</a></li>
        <li ><a href="policelogin.php">Police Login</a></li>
        <li class="active"><a href="police_home.php">Police Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
	   <li><a href="criminalreg.php">Criminal Registration</a></li>
	   <li><a href="mortem.php">Post Mortem</a></li>
	   <li><a href="wanted.php">Most Wanted</a></li>
	   <li><a href="missing.php">Missing Persons</a></li>
	   <li><a href="police_pending_complain.php"></a></li>
        <li><a href="police_pending_complain.php">Pending Complaints</a></li>
        <li><a href="police_complete.php">Completed Complaints</a></li>
        <li><a href="p_logout.php">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
 </nav>

<?php 


$usern=$_SESSION['editdetailsusername'];
$query = "SELECT * FROM missing where wid= '$usern'";
 
$result = mysqli_query($conn,$query) or die(mysqli_connect_error());
	$rows = mysqli_num_rows($result);
 


    while ($row = $result->fetch_assoc()) {

        $wid = $row["wid"];
        $wfname = $row["wfname"];
        $wnname = $row["wnname"];
	$wage=$row["wage"];
        $wsex = $row["wsex"]; 
        $wplace = $row["wplace"]; 
        $wdes = $row["wdes"];
		
		

    }
    $result->free();
?>
<div class="video" style="margin-top: 5%"> 
	<div class="center-container">
		 <div class="bg-agile">
			<br><br>
			<div class="login-form">
                                    <p><h2>Missing Registration Edit</h2></p><br>	
				<form action="#" method="post" style="color: gray">
					ID No<input type="text"  name="wid" placeholder="ID Number" required=""value="<?php echo $wid ?>" required ><br>
					Name<input type="text"  name="wfname" placeholder="Missing Name" value="<?php echo $wfname ?>" ><br>
					Nickname<input type="text"  name="wnname" placeholder="Nick name" required="" value="<?php echo $wnname ?>" ><br>
					<div class="top-w3-agile" style="color: gray">Sex
					<select class="form-control" name="wsex" value="<?php echo $wsex ?>" >
						<option>Male</option>
						<option>Female</option>
                        
				    </select><br>
				</div>
				
				Age<input type="text"  name="wage" placeholder="age" required="" value="<?php echo $wage ?>" ><br>
				Place<input type="text"  name="wplace" placeholder="place" required="" value="<?php echo $wplace ?>" ><br>
				<div class="top-w3-agile" style="color: gray">Description
					<textarea class="form-control" name="mappd" rows="20" cols="20" placeholder="Description" required="" value="<?php echo $wdes ?>">
					</textarea>
				</div><br>
				
				
				
				
				
					<input type="submit" value="Update" name="s">
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