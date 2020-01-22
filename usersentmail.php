<?php
 session_start();
    
    
    
    $conn=mysqli_connect("localhost","root","");
    if(!$conn)
    {
        die("could not connect".mysqli_connect_error);
    }
    mysqli_select_db($conn,"crime");
 
  
        $u_id=$_SESSION['u_id'];
        $result=mysqli_query($conn,"SELECT a_no FROM user where u_id='$u_id' ");
        $q2=mysqli_fetch_assoc($result);
        $a_no=$q2['a_no'];
    
        $result1=mysqli_query($conn,"SELECT u_name FROM user where u_id='$u_id' ");
        $q2=mysqli_fetch_assoc($result1);
        $u_name=$q2['u_name'];


 if (isset($_POST['submit']))
 {

 
$to_user = $_POST['to_user'];
  $from_user = $_POST['from_user'];
  $message = $_POST['message'];
  mysqli_query($conn,"INSERT INTO messages (to_user, message, from_user) VALUES ('$to_user', '$message', '$from_user')")or die(mysqli_connect_error());
  echo "PM succesfully sent!"; 
}



$u_id = $_SESSION['u_id'];



$query = mysqli_query($conn,"SELECT * FROM messages WHERE from_user = '$u_id' AND deleted = 'no'")or die(mysqli_connect_error());



?>








<html>
<head>
	<title>Complainer Home Page</title>

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
      <a class="navbar-brand" href="home.php"><b>Home</b></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li ><a href="userlogin.php">User Login</a></li>
        <li class="active"><a href="complainer_page.php">User Home</a></li>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="complainer_page.php">Log New Complain</a></li>
        <li><a href="complainer_complain_history.php">Complaint History</a></li>
        <li><a href="logout.php">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
      </ul>
	  
	  
	  </div>
	  <ul class="nav navbar-nav navbar-right">
	  <li class="active"><a href="usermsg.php">Send Message</a></li>
        <li class="active"><a href="complainer_page.php">Inbox</a></li>
        <li><a href="complainer_complain_history.php">Sent Messages</a></li>
        
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
		<td><a class="btn btn-primary" href="delete.php?id=<?echo $row['id'];?>"" role="button">Reply</a></td>
		
		
		
                  
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
 
 