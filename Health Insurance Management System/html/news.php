
<?php
//linking configuration file

include_once 'config.php';
?>

<?php

#sql statements
$CEMAIL=$_POST["email"];


#query string
$sql="INSERT into subscribe(Email_ID,EMAILADD) values ('','$CEMAIL')";


#execute query
	if(mysqli_query($conn,$sql))
	{
				
		#to pass a message
		echo "<script>alert ('Record inserted!!!')</script> ";
	}
	else
	{
		echo"<script>alert ('Record not inserted error!!!')</script> ";
	
	}

	mysqli_close($conn);


?>















