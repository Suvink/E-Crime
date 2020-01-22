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
  
  if (isset($_POST['submit']))
 {

 
$to_user = $_POST['to_user'];
  $from_user = $_POST['from_user'];
  $message = $_POST['message'];
  mysqli_query($conn,"INSERT INTO messages (to_user, message, from_user) VALUES ('$to_user', '$message', '$from_user')")or die(mysqli_connect_error());
  echo "PM succesfully sent!"; 
}



$i_id = $_SESSION['i_id'];



$query = mysqli_query($conn,"SELECT * FROM messages WHERE to_user = '$p_id' AND deleted = 'no'")or die(mysqli_connect_error());
  
  
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
 
<form style="margin-top: 7%; margin-left: 40%;" method="post">
    
    </form>
    
 <div style="padding:50px;">
   <table class="table table-bordered">
    <thead class="thead-dark" style="background-color: black; color: white;">
      <tr>
        
        <th scope="col">Message ID</th>
        <th scope="col">From</th>
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
        <td><?php echo $rows['from_user']; ?></td> 
        <td><?php echo $rows['message']; ?></td>
		
		
		
		
                  
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
 

 
