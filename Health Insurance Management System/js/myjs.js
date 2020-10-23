//client login form
function validate(){
	var accnum = document.getElementById("anumber");
	var nicnum = document.getElementById("nic");
	var pswct = document.getElementById("psw");
	
	if (accnum.value == ""){
		alert("Please enter a account number..!");
		return false;
	}
	
	
		
	else if (nicnum.value == "" ){
		alert("Please enter your NIC number..!");
		return false;
	}
	
	
	
	else if (pswct.value == "" ){
		alert("Please enter your password..!");
		return false;
	}
	
	else if (pswct.value.length <5 ){
		alert("Password is not valid..!");
		return false;
	}
	
		alert("success");
		return true;
}

//Staff login form
function validatestaff(){
	var idnum = document.getElementById("sid");
	var brnm = document.getElementById("br");
	var pswct = document.getElementById("psw");
	
	if (idnum.value == "" ){
		alert("Please enter id number..!");
		return false;
	}

	
		
	else if (brnm.value == "" ){
		alert("Please enter your NIC..!");
		return false;
	}

	else if (pswct.value == "" ){
		alert("Please enter your password..!");
		return false;
	}
	
	else if (pswct.value.length <5 ){
		alert("Please enter your correct password..!");
		return false;
	}
	
		alert("success");
		return true;
}
//Reset password

function checkPassword(){
	
	if(document.getElementById("npsw").value != document.getElementById("rnpsw").value){
		alert ("Passwords are mismatched!!");
		return false;
	}
	else {
		alert ("Passwords matched!!");
		return true;
	}
	
}	
