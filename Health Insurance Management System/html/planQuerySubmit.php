<?php
	include 'configure.php';
?>
<?php
	$IName = $_POST["IFullName"];
	$IPhn = $_POST["IMobile"];
	$IEmail = $_POST["IEmailAd"];
	$IAddress = $_POST["IAddress"];
	$IQuery = $_POST["IQuery"];
	$IType = $_POST["IplanType"];
	
	
	
	$msql ="insert into querydetails(QueryNo, FullName, MobileNumber, EmailAddress, Address, YourQuery, PlanType, rply) values ('','$IName','$IPhn','$IEmail','$IAddress','$IQuery','$IType','')"; 
	
	if(mysqli_query($connect,$msql)){
		header("Location:planInquiry.html");
	}
	else{
		echo "<script>alert('Error occurred whilst inserting the records')</script>";
	}
	mysqli_close($connect);

?>