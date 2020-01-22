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
$query = "SELECT * FROM crimereg where cid= '$usern'";
 
$result = mysqli_query($conn,$query) or die(mysqli_connect_error());
	$rows = mysqli_num_rows($result);
 


    while ($row = $result->fetch_assoc()) {

        $cid = $row["cid"];
        $cname = $row["cname"];
        $cnickname = $row["cnickname"];
	$csex=$row["csex"];
        $coccupation = $row["coccupation"]; 
        $ctype = $row["ctype"]; 
        $caddress = $row["caddress"];

    }
    $result->free();
?>
<div class="video" style="margin-top: 5%"> 
	<div class="center-container">
		 <div class="bg-agile">
			<br><br>
			<div class="login-form">
                                    <p><h2>Criminal Registration Edit</h2></p><br>	
				<form action="#" method="post" style="color: gray">
					ID No<input type="text"  name="id" placeholder="ID Number" required=""value="<?php echo $cid ?>" required ><br>
					Name<input type="text"  name="cname" placeholder="Criminal Name" value="<?php echo $cname ?>" ><br>
					Nickname<input type="text"  name="cnickname" placeholder="Nick name" required="" value="<?php echo $cnickname ?>" ><br>
					<div class="top-w3-agile" style="color: gray">Sex
					<select class="form-control" name="csex" value="<?php echo $csex ?>" >
						<option>Male</option>
						<option>Female</option>
                        
				    </select><br>
				</div>
				Occupation
					<input type="text"  name="coccupation" placeholder="Occupation" required="" value="<?php echo $coccupation ?>"  ><br>
		             <div class="top-w3-agile" style="color: gray">Type of Crime
					<select class="form-control" name="ctype" value="<?php echo $ctype ?>" >
						<option>Theft</option>
						<option>Robbery</option>
                        <option>Pick Pocket</option>
                        <option>Murder</option>
                        <option>Rape</option>
                        <option>Molestation</option>
                        <option>Kidnapping</option>
                        <option>Missing Person</option>
				    </select><br>
				</div>
				Address<input type="text"  name="caddress" placeholder="Address" required="" value="<?php echo $caddress ?>" ><br>
				
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