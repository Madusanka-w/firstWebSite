<?php
	include 'configure.php';
?>

<?php
	$Title = $_POST["title"];
	$FName = $_POST["fName"];
	$SName = $_POST["lName"];
	$Gender = $_POST["Gender"];
	$IDnum = $_POST["idn"];
	$DateOB = $_POST["dob"];
	$FirstPhn = $_POST["FMobile"];
	$SecondPhn = $_POST["SMobile"];
	$Email = $_POST["emailAd"];
	$Address = $_POST["address"];
	$Town = $_POST["town"];
	$PostalC = $_POST["pCode"];
	$sConName = $_POST["scName"];
	$sConPhn = $_POST["scMobile"];
	$pwd = $_POST["pwd"];
	$rePwd = $_POST["rpwd"];
	
	$sql ="insert into clientdetails(accountNo, title, firstName, lastName, gender, NICnum, DOB, firstPhone, secondPhone, email, address, town, postalCode, secondContactName, secondContactPhone, password, reEnterPassword) values ('','$Title','$FName','$SName','$Gender','$IDnum','$DateOB','$FirstPhn','$SecondPhn','$Email','$Address','$Town','$PostalC','$sConName','$sConPhn','$pwd','$rePwd')"; 
	
	if(mysqli_query($connect,$sql)){
		header("Location:index.html");
	}
	else{
		echo "<script>alert('Error occurred whilst inserting the records')</script>";
	}
	mysqli_close($connect);

?>