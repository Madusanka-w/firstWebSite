<?php
	include_once 'config.php';
?>

<?php
	
	$name= $_POST["fullname"];
	$cnum=$_POST["contactNumber"];
	$subject=$_POST["subject"];
	$message=$_POST["message"];
	
	$sql="insert into inquiries(Inquiry_ID,Full_name,Contact_Number,Subject,Message)values('','$name','$cnum','$subject','$message')";

	if(mysqli_query($conn,$sql)){
		echo "<script>alert ('Successfully!') </script>";
		header("Location:Help & support.html");
	}
	else{
	echo "<script>alert ('Error!')</script>";
	}

	mysqli_close($conn);	
?>