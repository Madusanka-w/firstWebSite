
<?php

//linking configuration file
session_start();
include_once 'config.php';


#sql statements
$CHNAME=$_POST["card_holdername"];
$CNUM=$_POST["card_num"];
$EDATE=$_POST["expiry_date"];
$CV=$_POST["CVV"];

#query string
$sql="INSERT into payment(Customer_ID,Card_Name	,Card_No,Expiry_Date,CVV_No) values ('','$CHNAME','$CNUM','$EDATE','$CV')";


#execute query
	if(mysqli_query($conn,$sql))
	{
		$_SESSION['Cnme']=$CHNAME;	
		#to pass a message
		header("Location:paymentdisplay.php");
	}
	else
	{
		echo"<script>alert ('Record not inserted error!!!')</script> ";
	
	}

	mysqli_close($conn);


?>
