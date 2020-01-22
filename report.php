
<!DOCTYPE html>
<html>
<head>
    
    <?php
    session_start();
    if(!isset($_SESSION['x']))
        header("location:headHome.php");
    $conn=mysqli_connect("localhost","root","");
    if(!$conn)
    {
        die("could not connect".mysql_error());
    }
    mysqli_select_db($conn,"crime");
    
      
    
   
    
     $res1=mysqli_query($conn,"SELECT COUNT( c_id ) as total FROM complaint");
    $res2=mysqli_query($conn,"SELECT COUNT( cid ) as total FROM crimereg");
	$res3=mysqli_query($conn,"SELECT COUNT( mid )  as total FROM missing");
	$res4=mysqli_query($conn,"SELECT COUNT( mmid ) as total  FROM mortem");
	$res5=mysqli_query($conn,"SELECT COUNT( wid ) as total FROM wanted");
	$res6=mysqli_query($conn,"SELECT COUNT( wid ) as total FROM police");
	$res7=mysqli_query($conn,"SELECT COUNT( wid ) as total FROM police_station");
	$res8=mysqli_query($conn,"SELECT COUNT( wid ) as total FROM user");
	
	
    ?>

	<title>Reports</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
<script>
     function f1()
        {
        var sta2=document.getElementById("ciid").value;
        var x2=sta2.indexOf(' ');
        if(sta2=="" && x2>=0){
          document.getElementById("ciid").value="";
          alert("Blank FIeld Not Allowed");
        }
      }
    </script>
</head>
<body>
<body style="background-image: url(search1.jpeg); ">
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
        <li ><a href="headlogin.php">HQ Login</a></li>
        <li class="active"><a href="headHome.php">HQ Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
	  <<li ><a href="report.php">View Reports</a></li>
        <li class="active" ><a href="headHome.php">View Complaints</a></li>
        <li ><a href="head_view_police_station.php">Police Station</a></li>
        <li><a href="h_logout.php">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
 </nav>	
<div style="padding:50px; margin-top:10px;">
   <table class="table table-bordered">
    <thead class="thead-dark" style="background-color: black; color: white;">
   
       
      <?php
	  $row1=mysqli_fetch_assoc($res1);
	  $row2=mysqli_fetch_assoc($res2);
	  $row3=mysqli_fetch_assoc($res3);
	  $row4=mysqli_fetch_assoc($res4);
	  $row5=mysqli_fetch_assoc($res5);
	  $row6=mysqli_fetch_assoc($res6);
	  $row7=mysqli_fetch_assoc($res7);
	  $row8=mysqli_fetch_assoc($res8);
	  
	  
	  
	  
	  
	  
              
             ?> 
    <tbody style="background-color: white; color: black;">
       <tr>
	   <td>No.of Complaints</td>
        <td><?php echo $row1['total']; ?></td>
		<td><a href="complainreport.php" class="btn btn-info" role="button">View</a></td>
		</tr>
		<tr>
	   <td>No.of Criminals</td>
        <td><?php echo $row2['total']; ?></td>
		<td><a href="criminalreport.php" class="btn btn-info" role="button">View</a></td>
		</tr>
		<td>No.of Missing persons</td>
        <td><?php echo $row3['total']; ?></td>
		<td><a href="missingreport.php" class="btn btn-info" role="button">View</a></td>
		</tr>
		<td>No.of Post mortems</td>g
        <td><?php echo $row4['total']; ?></td>
		<td><a href="mortemreport.php" class="btn btn-info" role="button">View</a></td>
		</tr>
		<td>No.of Wanted</td>
        <td><?php echo $row5['total']; ?></td>
		<td><a href="wantedreport.php" class="btn btn-info" role="button">View</a></td>
		</tr>
		<td>No.of Police Officers</td>
        <td><?php echo $row6['total']; ?></td>
		<td><a href="policereport.php" class="btn btn-info" role="button">View</a></td>
		</tr>
		<td>No.of Police Stations</td>
        <td><?php echo $row7['total']; ?></td>
		<td><a href="stationreport.php" class="btn btn-info" role="button">View</a></td>
		</tr>
		<td>No.of Users</td>
        <td><?php echo $row8['total']; ?></td>
		<td><a href="userreport.php" class="btn btn-info" role="button">View</a></td>
		</tr>
       
       
       </tbody>
       
          
</table>
 </div>
    

 </div>
    <div style="position: relative;
    float: left;
    margin-bottom: 0px;
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