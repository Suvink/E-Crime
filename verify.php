<?php


 
if(isset($_GET['vkey'])){

	
	$conn=mysqli_connect("localhost","root","");
	session_start();
	$vkey=$_SESSION['vkey'];
	if(!$conn)
    {
        die("could not connect".mysqli_connect_error);
    }
    mysqli_select_db($conn,"crime");
	$resultset=mysqli_query($conn,"SELECT verified,vkey FROM user WHERE vkey='$vkey' AND verified=0 LIMIT 1")or die(mysqli_error($conn));
	 
	 if(mysqli_num_rows($resultset)==1)
	 {
	 $update=mysqli_query($conn,"UPDATE user SET verified=1 WHERE vkey='$vkey' LIMIT 1")or die(mysqli_error($conn));
	 if($update) {
		 
		 
		 $message = "Your Account has been verified you may now log in  .";
             echo "<script type='text/javascript'>alert('$message');</script>";
		 
		 
		 
		 
	 }
	 else{
		 echo "not updated";
	 }
	 
	 }
	 else{
		 echo "This account invalid or already verified";
		 
	 }
}
	 ?>