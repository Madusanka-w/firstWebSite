<?php
require 'config.php';
?>

<?php


		$acNumber = $_POST['acn'];
		$npassword = $_POST['npsw'];
		$rnpassword = $_POST['rnpsw'];
		

		$sql = "UPDATE clientdetails SET password  = '$npassword', reEnterPassword = '$rnpassword' WHERE accountNO = '$acNumber' ";
	   
		if(mysqli_query($conn, $sql)){
			echo "<br>Password Updated";
			header("location:index.html");//redirect to login page
		}else {
			echo "Error..";
		}

?>