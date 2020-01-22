<!DOCTYPE html>
<html>
<head>
	<title>Complain Reports</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	
     <?php
    
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
    $month=$_POST['month'];
	
	
	
		
	
	 $year=$_POST['year'];
	 
		
	
	 
	 
	 $status=$_POST['status'];
	 
	 
	 $location=$_POST['location'];
	 
	 
	 $type_crime=$_POST['type_crime'];
	 
	 $result=mysqli_query($conn,"select   c_id,a_no,location,type_crime,d_o_c,description,inc_status,pol_status,p_id    from complaint where YEAR(d_o_c)='$year' AND MONTH(d_o_c)='$month' AND inc_status='$incstatus' AND pol_status='$status' AND location='$location' AND type_crime='$type_crime' " );

if($year=="")
{       
$result=mysqli_query($conn,"select   cid,a_no,location,type_crime,d_o_c,description,inc_status,pol_status,p_id    from complaint where  MONTH(d_o_c)='$month' AND inc_status='$incstatus' AND pol_status='$status' AND location='$location' AND type_crime='$type_crime' " );


}
 if($year=="" && $month=="")   {
    
    
	 
	 
	}
	}
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
	<div class="top-w3-agile" style="color: gray; width:300px;">Year
                    
                    <select class="form-control" name="year">
					        <option value=""> </option>
						   	<option value="2008">2008 </option>
							<option value="2009">2009 </option>
							<option value="2010">2010 </option>
							<option value="2012">2012 </option>
							<option value="2011">2011 </option>
							<option value="2013">2013 </option>
							<option value="2014">2014 </option>
							<option value="2015">2015 </option>
							<option value="2016">2016 </option>
							<option value="2017">2017 </option>
							
							<option value="2018">2018 </option>
							<option value="2019">2019 </option>
							<option value="2020">2020 </option>
							
                            				    </select>
												</div>
   <div class="top-w3-agile" style="color: gray; width:300px;">Month
                    
                    <select class="form-control" name="month">
					<option value=""> </option>
						   	<option value="01">January </option>
							<option value="02">February </option>
							<option value="03">March </option>
							<option value="04">April </option>
							<option value="05">May </option>
							<option value="06">June </option>
							<option value="07">July </option>
							<option value="08">August </option>
							<option value="09">September </option>
							<option value="10">October </option>
							
							<option value="11">November </option>
							<option value="12">December </option>
							

                            				    </select>
												</div>
   <div class="top-w3-agile" style="color: gray; width:300px;">Police status
                    
                    <select class="form-control" name="incstatus">
					        <option value=""> </option>
						   	<option value="Assigned">Assigned </option>
							<option value="UnAssigned">UnAssigned </option>
							
                            				    </select>
												</div>
   
        <div>
		
        <div class="top-w3-agile" style="color: gray; width:300px;">Investigation Status
                    
                    
                    
                    <select class="form-control" name="incstatus">
          <option value=""></option>
          	<option value="ChargeSheet Filed">Charge Sheet filed</option>	  
          <option value="Criminal Verified">Criminal Verified</option>
          <option value="Criminal Caught">Criminal Caught</option>
          <option value="Criminal Interrogated">Criminal Interrogated</option>
          <option value="Criminal Accepted the Crime">Criminal Accepted the Crime</option>
          <option value="Criminal Charged">Criminal Charged</option>
      </select>
        </div>
      <div class="top-w3-agile" style="color: gray">Location of Crime
                    
                    <select class="form-control" name="location">
						<?php
                        $loc=mysqli_query($conn,"select location from police_station");
                        while($row=mysqli_fetch_array($loc))
                        {
                            ?>
                                	<option> <?php echo $row[0]; ?> </option>
                            <?php
                        }
                        ?>
					<option value=""></option>
				    </select>
				</div>
				
			<div class="top-w3-agile" style="color: gray; width:300px;">Crime type
                    
                    
                    
                    <select class="form-control" name="type_crime">
          <option value=""></option>
          		  
          <option value="Criminal Verified">Theft</option>
          <option value="Criminal Caught">Robbery</option>
          <option value="Criminal Interrogated">Pick Pocket</option>
          <option value="Criminal Accepted the Crime">Murder</option>
          <option value="Criminal Charged">Rape</option>
		  <option value="Criminal Charged">Kidnapping</option>
		  <option value="Criminal Charged">Missing Person</option>
      </select>
        </div>	
				
		
      
	  <input class="btn btn-primary" type="submit" value="Search" name="s2" style="margin-top: 10px; margin-left: 11%;">
	  
        </div>
    </form>
    
 <div style="padding:50px;">
   <table class="table table-bordered">
    <thead class="thead-dark" style="background-color: black; color: white;">
      <tr>
        <th scope="col">Complaint Id</th>
		
       
        <th scope="col">Location</th>
        <th scope="col">Crime type</th>
		<th scope="col">Date</th>
		<th scope="col">Description</th>
		<th scope="col">Inspection Status</th>
		<th scope="col">Police Status</th>
		<th scope="col">Police id</th>
        
      </tr>
    </thead>

<?php
      while($rows=mysqli_fetch_assoc($result)){
    ?> 

    <tbody style="background-color: white; color: black;">
      <tr>
        <td><?php echo $rows['c_id']; ?></td>
		
		
		<td><?php echo $rows['location']; ?></td>
		<td><?php echo $rows['type_crime']; ?></td>
		<td><?php echo $rows['d_o_c']; ?></td>
		<td><?php echo $rows['description']; ?></td>
		<td><?php echo $rows['inc_status']; ?></td>
		<td><?php echo $rows['pol_status']; ?></td>
		
        
                  
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