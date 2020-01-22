<!DOCTYPE html>
<html>
<head>
    
    <?php
    session_start();
    if(!isset($_SESSION['x']))
        header("location:inchargelogin.php");
    
    $conn=mysqli_connect("localhost","root","");
    if(!$conn)
    {
        die("could not connect".mysqli_connect_error());
    }
    mysqli_select_db($conn,"crime");
    
    $i_id=$_SESSION['email'];
    $result1=mysqli_query($conn,"SELECT location FROM police_station where i_id='$i_id'");
    $q2=mysqli_fetch_assoc($result1);
    $location=$q2['location'];
    
    if(isset($_POST['s2']))
    {
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $cid=$_POST['cid'];
        
        $_SESSION['cid']=$cid;
        $qu=mysqli_query($conn,"select inc_status,location from complaint where c_id='$cid'");
        
        $q=mysqli_fetch_assoc($qu);
        $inc_st=$q['inc_status'];
        $loc=$q['location'];
        
        if(strcmp("$loc","$location")!=0)
        {
            $msg="Case Not of your Location";
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }
        else if(strcmp("$inc_st","Unassigned")==0)
        {   
            header("location:Incharge_complain_details.php");
            
        }
        else{
            header("location:incharge_complain_details1.php");
        }
    }
    }
    $i_id=$_SESSION['i_id'];
    $query="select c_id,type_crime,d_o_c,location,inc_status,p_id,u_id from complaint natural join user where location='$location' order by c_id desc";
    $result=mysqli_query($conn,$query);  
	$p_id=$_SESSION['p_id'];
  
  if (isset($_POST['submit']))
 {

 
$to_user = $_POST['to_user'];
  $from_user = $_POST['from_user'];
  $message = $_POST['message'];
  mysqli_query($conn,"INSERT INTO messages (to_user, message, from_user) VALUES ('$to_user', '$message', '$from_user')")or die(mysqli_connect_error());
  echo "PM succesfully sent!"; 
}



$i_id = $_SESSION['i_id'];



$query = mysqli_query($conn,"SELECT * FROM messages WHERE from_user = '$i_id' AND deleted = 'no'")or die(mysqli_connect_error());

  
	
	
    ?>

	<title>Incharge Homepage</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	
    <script>
     function f1()
        {
          var sta2=document.getElementById("ciid").value;
          var x2=sta2.indexOf(' ');
     if(sta2!="" && x2>=0)
     {
        document.getElementById("ciid").value="";
        alert("Blank Field not Allowed");
      }       
}
</script>
    
</head>
<body style="background-color: #dfdfdf">
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
        <li ><a href="inchargelogin.php">Incharge Login</a></li>
        <li class="active"><a href="Incharge_complain_page.php">Incharge Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
	  <li class="active" ><a href="Incharge_complain_details.php">Assign Police Officers</a></li>
        <li class="active" ><a href="Incharge_complain_page.php">View Complaints</a></li>
        <li ><a href="incharge_view_police.php">Police Officers</a></li>
        <li><a href="inc_logout.php">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
      </ul>
	  
	  </div>
	  <ul class="nav navbar-nav navbar-right">
	  <li class="active"><a href="ichargemsg.php">Send Message</a></li>
        <li class="active"><a href="ichargeinbox.php">Inbox</a></li>
        <li><a href="ichargesentmail.php">Sent Messages</a></li>
        
      </ul>
	  
	  
	  
	  
    </div>
  </div>
 </nav>
    <form style="margin-top: 7%; margin-left: 40%;" method="post">
    
    </form>
    
 <div style="padding:50px;">
   <table class="table table-bordered">
    <thead class="thead-dark" style="background-color: black; color: white;">
      <tr>
        
          <th scope="col">Message ID</th> 
        <th scope="col">To</th>
        <th scope="col">Message</th>
		
		
		
		
		
        
      </tr>
    </thead>

<?php
      while($rows = mysqli_fetch_array($query))
{ 
  
    ?> 

    <tbody style="background-color: white; color: black;">
      <tr>
        
        <td><?php echo $rows['msgid']; ?></td>     
        <td><?php echo $rows['to_user']; ?></td> 
        <td><?php echo $rows['message']; ?></td>
		<td><a class="btn btn-primary" href="usermsg.php" role="button">Reply</a></td>
		
		
		
		
                  
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
 
  

    