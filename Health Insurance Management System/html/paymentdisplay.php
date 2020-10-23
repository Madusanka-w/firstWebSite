<!DOCTYPE html>
<html>
<head>
	<title>IWT Insurance</title>
	<link rel="stylesheet" type="text/css" href="../css/stylesw1.css">
	<link rel="stylesheet" type="text/css" href="../css/stylesw.css">
	<link rel="stylesheet" type="text/css" href="../css/footerStyles.css">
	
	
	<!-- LOGO -->
	<div class="logo">
	<img src="../images/IWTLOGO.png" width = "180" height = "180">
	</div>
	<!-- // LOGO -->

	<!-- User avatar -->
	<img src="../images/user.png" alt="Avatar" class="avatar">
	<!-- //User avatar -->
	<div class="usrname">
	<p>WISHWA_R</p>
	</div>
	
	<!-- Top Navigation bar -->
	<div class="topnav">
	
	  <a class="active" href="#">Home</a>
	  <a href="News & Events.html">News & Events</a>
	  <a href="Help & Support.html">Help & Support</a>
	  <a href="About us.html">About Us</a>
	
	</div>
	<!-- //Top Navigation bar -->
	
	<!-- Bottom Navigation bar and search bar-->
    <div class="bottomnav">
 
	    <a href="healthPlans.html">Health Plans</a>
        <a href="registration.html">Registration</a>
        <a href="payment.html">Payments</a>
        <a href="index.html">My Account</a>
    
	
	<form class="search-form">
              <input type="text" placeholder="Search here" name="search" style="margin-left:340px">
			  <button type="search">Search</button>
        </form> 
	</div>
	<!-- Bottom Navigation bar -->
	
	
	<!--styles for css (internal)-->
	
	<style>
	
	.tbnew
	{
		font-size:20px;
		border-collapse:collapse;
		maring:25px 0;
		border-radius:5px 5px 0 0;
		overflow:hidden;
		box-shadow:0 0 20px rgba(0,0,0,0.15);
		height:30px;
		width:50%;	
	}
	
	.tbnew thead tr
	{
		background-color: #009879;
		color: #ffffff;
		text-align: left;
		font-weight: bold;
	}
	.tbnew td 
	{
		padding: 12px 15px;
	}
	
	.tbnew tr 
	{
		border-bottom: 1px solid white;
	}
	
	</style>
	
	
</head>


<br>
<br>
<body>
<!-- using breadcrmbs to show the path-->`

	<ul class="breadcrumb">
	<li><a href="Home.html">Home</a></li>
	<li><a href="Payments.html">payments</a></li>
	<li><a href="#">Inputteddetails</a></li>
	</ul>
	
<br/>

<br>
<br>
<br>

<center>

<!--creating a class named 'tbnew' to add styles easily-->

<table class="tbnew">

<!--thead tag used to group a header content in this table-->

<thead>
	<tr>
		<th>Customer ID</th>
		<th>Card Name</th>
		<th>Card Number</th>
		<th>Expiry Date</th>
		<th>CVV</th>
	</tr>
</thead>

<!--reading the database and retreacing data from database-->
	
<?php
session_start();
require 'config.php';
$Cname = $_SESSION['Cnme'];
#seleting from which table to retrive data
$sql = "select * from payment where Card_Name='$Cname'";
#or
$result = $conn->query($sql);

if($result->num_rows>0)
	{	#using an associcate array and a superglobal variable
		while($row=$result->fetch_assoc())
		{		#printing all the records to the table which was retived from the datavase
				echo"<tr><td>".$row["Customer_ID"]."</td><td>".$row["Card_Name"]."</td><td>".$row["Card_No"]."</td><td>".$row["Expiry_Date"]."</td><td>".$row["CVV_No"]."</td>";
		}
	}
else 
	#displaying an error message if you havent get the results
	{
	 echo"empty table"; 
	}



$conn->close();
?>
</table>
</center>



<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
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
					<p><a href="mailto:email@IWTInsurance.com"><img class="fIcons" src="../images/email.png" width="20" height="20">email@IWTInsurance.com</a></p>
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
					<p><a href="https://www.google.lk/maps/place/SLIIT+Main+Building,+Malabe/@6.9148818,79.9709787,17z/data=!3m1!4b1!4m5!3m4!1s0x3ae256db1043cc37:0x5f43c37d11c72aa!8m2!3d6.9148818!4d79.9731674"><img class="fIcons" src="../images/geoTag.png" width="20" height="20">No.21, New Kandy Road, Malabe.</a></p>
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