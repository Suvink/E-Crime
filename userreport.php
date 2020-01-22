<!DOCTYPE html>
<html>
<head>
	<title>Police Report</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	
     <?php
    session_start();
    if(!isset($_SESSION['x']))
        header("location:policelogin.php");
    $conn=mysqli_connect("localhost","root","");
    if(!$conn)
    {
        die("could not connect".mysqli_connect_error());
    }
    mysqli_select_db($conn,"crime");
    if(isset($_POST['s2']))
    {
      if($_SERVER["REQUEST_METHOD"]=="POST")
      {
       $cid=$_POST['complainid'];
       $_SESSION['complainid']=$cid;
       $alok=mysqli_query($conn,"select * from complaint where c_id='$cid'");
       $row = mysqli_fetch_assoc($alok);
       
     
     }
	 
	 
	 
	 
	 
 }

    
    
     $result=mysqli_query($conn,"SELECT * FROM user where verified=1");
    ?>
 <script>
     function f1()
        {
        var sta2=document.getElementById("ciid").value;
        var x2=sta2.indexOf(' ');
      if(sta2!="" && x2>=0){
          document.getElementById("ciid").value="";
          alert("Blank Field Found");
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
    
    <form style="margin-top: 7%; margin-left: 40%;" method="post">
    <input type="text" name="complainid" style="width: 250px; height: 30px; background-color:white; color:grey; margin-top:5px;" placeholder="&nbsp Complaint Id" onfocusout="f1()" required id="ciid">
        <div>
      <input class="btn btn-primary" type="submit" value="Search" name="s2" style="margin-top: 10px; margin-left: 11%;">
        </div>
    </form>
    
 <div style="padding:50px;">
   <table class="table table-bordered">
    <thead class="thead-dark" style="background-color: black; color: white;">
      <tr>
        <th scope="col">Name</th>
        <th scope="col">User ID</th>
        <th scope="col">Address</th>
        <th scope="col">NIC</th>
        <th scope="col">Gender</th>
        <th scope="col">Mobile</th>
		
		
		
		
		
        
      </tr>
    </thead>

<?php
      while($rows=mysqli_fetch_assoc($result)){
    ?> 

    <tbody style="background-color: white; color: black;">
      <tr>
        <td><?php echo $rows['u_name']; ?></td>
        <td><?php echo $rows['u_id']; ?></td>     
        <td><?php echo $rows['u_addr']; ?></td> 
		<td><?php echo $rows['a_no']; ?></td>
        <td><?php echo $rows['gen']; ?></td>     
        <td><?php echo $rows['mob']; ?></td> 
        
		
		
		
		
                  
      </tr>
    </tbody>
    
    <?php
    } 
    ?>
  
</table>
 </div>

 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>