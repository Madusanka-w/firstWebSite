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
			<a href="Help & Support.html">Help & Support</a>
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

		<!-- Breadrumbs -->
		<ul class="breadcrumb">
			<li><a href="Home.html">Home</a></li>
			<li><a href="healthPlans.html">Health Plans</a></li>
			<li><a href="personalPlans.html">Personal Plans</a></li>
			<li><a href="planInquiry.html">Ask Us</a></li>
			<li><a href="forum.php">Question Forum</a></li>
		</ul>
		<br>
		
		<h2>Online Question Forum For Personal Plan Related Questions</h2>
		<br><br>
		
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
			
			$connect->close();
		
		?>
		</table>
		</center>
		

		
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