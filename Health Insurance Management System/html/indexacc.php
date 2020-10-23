<?php
//linking configuration file

include_once 'config.php';
?>
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
              <input type="text" placeholder="Search here" name="search" style="margin-left:740px">
			  <button type="search">Search</button>
        </form> 
	</div>
	<!-- Bottom Navigation bar -->
</head>



<body>`

	<ul class="breadcrumb">
	<li><a href="Home.html">Home</a></li>
	<li><a href="#">My Account</a></li>
	</ul>
	
<br/>


<!-- Adding an avatar logo -->
<img class="logo1" src="../images/avatar.png" height="180px" width="150px">

<!-- Adding a add and linking a website to it -->
<a href="http://www.nawaloka.com/contact" >

<img class="addlogo" src="../images/add.jpg">
</a>

<br/>
<?php
	session_start();
	require 'config.php';
	$accountNo = $_SESSION['acno'];
	$result = mysqli_query($conn , "SELECT accountNo,firstName,lastName,gender,NICnum,DOB,firstPhone,email,address FROM clientdetails WHERE accountNo='$accountNo'");
	$retrive = mysqli_fetch_array($result);
	//print_r($retrive);//used to check
	$acc=$retrive['accountNo'];
	$fname=$retrive['firstName'];
	$lname=$retrive['lastName'];
	$Gender=$retrive['gender'];
	$NIC=$retrive['NICnum'];
	$DateOB=$retrive['DOB'];
	$ftsPhn=$retrive['firstPhone'];
	$Mail=$retrive['email'];
	$ADD=$retrive['address'];

?>			



<h1 style="text-align:left; font-family: verdana; margin-left:99px; margin-top:165px"> <?php echo ($fname)?></h1>


<br/>


<hr class="hline"></hr>

<br/>

<h2 style="text-align:left; font-family: verdana; margin-left:50px; ">User Details</h2>
<br/>
<!-- Display user details-->

<p style="text-align:left; font-family: verdana; margin-left:50px;">First Name :<?php echo ($fname)?></p>
<br/>
<p style="text-align:left; font-family: verdana; margin-left:50px;">Last Name :<?php echo ($lname)?></p>
<br/>
<p style="text-align:left; font-family: verdana; margin-left:50px;">Email :<?php echo ($Mail)?></p>
<br/>
<h2 style="text-align:left; font-family: verdana; margin-left:50px; ">Contact Details</h2>
<br>
<p style="text-align:left; font-family: verdana; margin-left:50px;">Telephone :<?php echo ($ftsPhn)?></p>
<br/>
<p style="text-align:left; font-family: verdana; margin-left:50px;">Address :<?php echo ($ADD)?></p>
<br>
<p style="text-align:left; font-family: verdana; margin-left:50px;">DOB:<?php echo ($DateOB)?></p>
<br/>
<br/>


<button style="font-size:40px; -align:left; font-family: verdana; margin-left:50px;"><a href="logout.php"  style="text-decoration: none; padding:20px;">Logout</a></button>


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