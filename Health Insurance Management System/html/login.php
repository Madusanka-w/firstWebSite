
	
<?php 

		require 'config.php';
		session_start();
		$acNumber = $_POST['anumber'];
		$nic = $_POST['nic'];
		$pswd = $_POST['psw'];
		

		$sql = "SELECT * FROM clientdetails where accountNo = '$acNumber' AND NICnum = '$nic' AND password = '$pswd' ";
	    $result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) == 1) {
			
			
			
			$_SESSION['acno']=$acNumber;
			header("Location:indexacc.php");
        
        }
        else{
			echo "invalid details..";
        }

	 
?>

