<?php
	include 'configure.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>IWT Insurance</title>

		<link rel="stylesheet" type="text/css" href="../css/headerStyles.css">
		<link rel="stylesheet" type="text/css" href="../css/styles.css">
		<link rel="stylesheet" type="text/css" href="../css/footerStyles.css">

	</head>
	<body>
		<!-- LOGO -->
		<div class="logo">
			<img src="../images/IWTLOGO.png" width="180" height="176">
		</div>

		<!-- User avatar -->
		<img src="../images/user.png" alt="Avatar" class="avatar">

		<!-- Top Navigation bar -->
		<div class="topnav">
			<a href="Home.html">Home</a>
			<a href="News & Events.html">News & Events</a>
			<a href="Help & Support">Help & Support</a>
			<a href="About us.html">About Us</a>

		</div>

		<!-- Bottom Navigation bar and search bar-->
		<div class="bottomnav">
			<a class="active" href="healthPlans.html">Health Plans</a>
			<a href="registration.html">Registration</a>
			<a href="payment.html">Payments</a>
			<a href="index.html">My Account</a>

			<div class="search-container">
				<form class="search-form">
					<input type="text" placeholder="Search here" name="search" style="margin-right:10px">
					<button type="submit">Search</button>
				</form>
			</div>
		</div>
		<br/>
		<!-- Breadrumbs -->
		<ul class="breadcrumb">
			<li><a href="Home.html">Home</a></li>
			<li><a href="index.html">My Account</a></li>
			<li><a href="staffPage.php">Staff Account</a></li>
		</ul>
		<br>
		<br>
		
		<hr class="line">
		<br>
		<h4>Previous Sales and Website Interaction Figures.</h4><br>
		<img src="../images/chart2.png" width="550" height="250">
		<img src="../images/graph1.jpg" width="650" height="250">
		<br>
		<br>
		<hr class="line">
		<br>
		<br>
		
		<h3>Questions from the online forum for Personal Plans.</h3>
		<br>
		
		<center>
		
		<table border="1" width="100%">
		<tr>
			<th>No.</th>
			<th>Started By</th>
			<th>Question Asked</th>
			<th>Reply</th>
		</tr>
		<?php
			$sql = "select * from querydetails";
			$obtained = $connect->query($sql);
			
			if($obtained->num_rows>0){
				
				while($row=$obtained->fetch_assoc()){
					echo"<tr><td>".$row["QueryNo"]."</td><td>".$row["FullName"]."</td><td>".$row["YourQuery"]."</td><td>".$row["rply"]."</td></tr>";	
					
				}
				
			}
			else{
				echo "No questions in the Forum yet";
			}
			
			echo "</table>";
			
			
		
		?>
		</table>
		</center>
		<br>
		
		<form action="#" method="POST" style="background-color: #1e7a9c; padding: 10px;">
			
			<h3>Reply to the questions</h3>
			<br>
			
			<label>Question No. *</label><br>		
			<input type="text" id="rplyQNo" name="rplyQNo" style="width:500px;" placeholder="Enter Question No." style="padding: 10px;" required>
			<br>
			<br>
			
			<label>Reply *</label><br>
			<textarea id="qReply" name="qReply" rows="10" cols="150" placeholder="Enter your reply"  style="padding: 10px; font-family: sans-serif;" required></textarea>
			<br>
			<br>
			
			<input type="submit" id="replyBtn" name="replyBtn" value="Send Reply" class="bttn" >
			
		</form>
			<br>
			
		<form action="#" method="POST" style="background-color: #1e7a9c; padding: 10px;">	
		
			<h3>Remove questions from the forum</h3>
			<br>
			
			<label>Question No. *</label><br>
			<input type="text" id="rmvQNo" name="rmvQNo" style="width:500px;" placeholder="Enter Question No." style="padding: 10px;" required>
			<br>
			<br>
			
			<input type="submit" id="rmvBtn" name="rmvBtn" value="Remove Question" class="bttn" >
		
		</form>
		
		<?php
			
			if(isset($_POST['replyBtn'])){
				
				$qNo = $_POST['rplyQNo'];
				$qRply = $_POST['qReply'];
				
				$sql = "UPDATE querydetails SET rply='$qRply' WHERE QueryNo='$qNo'";
				
				if($connect->query($sql)===TRUE){
					echo "<script>alert('Reply updated. Reload Page')</script>";
				}
				else{
					echo "<script>alert('Error Occurred While Updating')</script>";
				}
				
			}
		?>
		
		<?php
			
			if(isset($_POST['rmvBtn'])){
				
				$rmvQ = $_POST['rmvQNo'];
				
				$sqla = "DELETE FROM querydetails WHERE QueryNo='$rmvQ'";
				
				if($connect->query($sqla)===TRUE){
					echo "<script>alert('Question Deleted Sucessfully. Reload Page')</script>";
				}
				else{
					echo "<script>alert('Error Occurred While Deleting')</script>";
				}
				
			}
						
		?>
		<br>
		<br>
		<hr class="line">
		<hr class="line">
		<br>
		<br>
		
		<h3>Registered Client Account Details</h3>
		<br>
		
		<center>
		
		<table border="1" width="100%">
		<tr>
			<th>Account No.</th>
			<th>Title</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Gender</th>
			<th>NIC</th>
			<th>DOB</th>
			<th>Phone 1</th>
			<th>Phone 2</th>
			<th>Email</th>
			<th>Address</th>
			<th>Postal Code</th>
		</tr>
		<?php
			$sql = "select * from clientdetails";
			$obtained = $connect->query($sql);
			
			if($obtained->num_rows>0){
				
				while($row=$obtained->fetch_assoc()){
					echo"<tr><td>".$row["accountNo"]."</td><td>".$row["title"]."</td><td>".$row["firstName"]."</td><td>".$row["lastName"]."</td><td>".$row["gender"]."</td><td>".$row["NICnum"]."</td><td>".$row["DOB"]."</td><td>".$row["firstPhone"]."</td><td>".$row["secondPhone"]."</td><td>".$row["email"]."</td><td>".$row["address"]."</td><td>".$row["postalCode"]."</td></tr>";	
					
				}
				
			}
			else{
				echo "No customer details available in database";
			}
			
			echo "</table>";
					
		?>
		</table>
		</center>
		<br>
		
		<form action="#" method="POST" style="background-color: #1e7a9c; padding: 10px;">	
		
			<h3>Remove Customer Account</h3>
			<br>
			
			<label>Account No. *</label><br>
			<input type="text" id="rmvCNo" name="rmvCNo" style="width:500px;" placeholder="Enter Customer Account No." style="padding: 10px;" required>
			<br>
			<br>
			
			<input type="submit" id="rmvCBtn" name="rmvCBtn" value="Remove Account" class="bttn" >
		
		</form>
		
		<?php
			
			if(isset($_POST['rmvCBtn'])){
				
				$rmvC = $_POST['rmvCNo'];
				
				$sqla = "DELETE FROM clientdetails WHERE accountNo='$rmvC'";
				
				if($connect->query($sqla)===TRUE){
					echo "<script>alert('Customer Account Deleted Sucessfully. Reload Page')</script>";
				}
				else{
					echo "<script>alert('Error Occurred While Deleting Account')</script>";
				}
				
			}
			$connect->close();
			
		?>
		
		<br>
		<br>

		<!--adding the footer-->
		<div class="footer">
			<hr>
			<div class="row">
				<div class="fColumn">
					<h4 class="fTopic">Hot-Lines</h4><br>
					<p><img class="fIcons" src="../images/phone.png" width="20" height="20">+94 011 1234567 / 4668 </p>
					<br>
					<p><a href="mailto:email@IWTInsurance.com" class="fLink"><img class="fIcons" src="../images/email.png" width="20" height="20">email@IWTInsurance.com</a></p>
				</div>
				<div class="fColumn">
					<h4 class="fTopic">Follow Us On</h4><br>
					<p>
						<a href="https://www.facebook.com/"><img class="icons" src="../images/facebook.png" width="20" height="20"></a>
						<a href="https://www.instagram.com/"><img class="icons" src="../images/instagram.png" width="20" height="20"></a>
						<a href="https://twitter.com/?lang=en"><img class="icons" src="../images/twitter.png" width="20" height="20"></a>
						<a href="https://www.google.com/"><img class="icons" src="../images/gPlus.png" width="20" height="20"></a>
					</p>
				</div>
				<div class="fColumn">
					<h4 class="fTopic">Head Office</h4><br>
					<p><a href="https://www.google.lk/maps/place/SLIIT+Main+Building,+Malabe/@6.9148818,79.9709787,17z/data=!3m1!4b1!4m5!3m4!1s0x3ae256db1043cc37:0x5f43c37d11c72aa!8m2!3d6.9148818!4d79.9731674" class="fLink"><img class="fIcons" src="../images/geoTag.png" width="20" height="20">No.21, New Kandy Road, Malabe.</a></p>
				</div>
				<div class="fColumn">
					<img class="awards" src="../images/awards2.png" width="230" height="150">
				</div>
			</div>

			<center>
				<hr class="fLine">
				<br>
				<p class="fText">All rights reserved. IWT Insurance.</p>
				<br>
			</center>
		</div>
	</body>
</html>