//client login form
function validate(){
	var accnum = document.getElementById("anumber");
	var nicnum = document.getElementById("nic");
	var pswct = document.getElementById("psw");
	
	if (accnum.value == ""){
		alert("Please enter a account number..!");
		return false;
	}
	
	else if (accnum.value.length <10 || accnum.value.length > 10){
		alert("Account number is not valid..!");
		return false;
	}
	
		
	if (nicnum.value == "" ){
		alert("Please enter your NIC number..!");
		return false;
	}
	
	else if (nicnum.value.length <8 || nicnum.value.length > 8){
		alert("Incorrect NIC number..!");
		return false;
	}
	if (pswct.value == "" ){
		alert("Please enter your password..!");
		return false;
	}
	
	else if (pswct.value.length <8 ){
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
	
	else if (idnum.value.length <6 || idnum.value.length > 6){
		alert("ID number is not valid.please enter your 6 correct ID number..!");
		return false;
	}
	
		
	if (brnm.value == "" ){
		alert("Please enter your branch name..!");
		return false;
	}

	if (pswct.value == "" ){
		alert("Please enter your password..!");
		return false;
	}
	
	else if (pswct.value.length <8 ){
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
