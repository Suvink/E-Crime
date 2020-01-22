<?php

//session_start();
// If form submitted, insert values into the database.
if (isset($_POST['search']))


{    $conn=mysqli_connect("localhost","root","");
    if(!$conn)
    {
        die("could not connect".mysqli_connect_error);
    }
    mysqli_select_db($conn,"crime");
  
	
	
	
        // removes backslashes
	$editusername = $_POST['mmid'];
        //escapes special characters in a string
	


	//Checking is user existing in the database or not
        $query = "SELECT * FROM mortem WHERE mmid ='$editusername'";
	$result = mysqli_query($conn,$query) or die(mysqli_connect_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    

	    
            // Redirect user to index.php
	    header("location:mortemeditpg.php");
         }else{
	echo "<center><p style='color:#C96F6F;'>username  is incorrect</p></center>";
	}
    }
?>