<?php
require 'config.php';
?>

<?php 

		$SID = $_POST['sid'];
		$SNIC= $_POST['stnic'];
		$SPWD = $_POST['stpsw'];
		

		$sql = "SELECT * FROM staffdetails where Staff_ID = '$SID' AND NIC = '$SNIC' AND Password = '$SPWD' ";
	    $result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) == 1) {
			
			header("Location:staffPage.php");
        
        }
        else{
			echo "invalid details..";
        }

	$conn->close();
	?>

