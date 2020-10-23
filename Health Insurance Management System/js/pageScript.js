function checkPassword(){
	if(document.getElementById("pwd").value != document.getElementById("rpwd").value){
		alert("Passwords are mismatched!");
		return false;
	}
	else{
		alert("Successful");
		return true;
	}
}

function enableButton(){
	if(document.getElementById("policy").checked){
		document.getElementById("subBtn").disabled=false;
	}
	else{
		document.getElementById("subBtn").disabled=true;
	}
}

function enableCheckButton(){
	if(document.getElementById("robot").checked){
		document.getElementById("askBtn").disabled=false;
	}
	else{
		document.getElementById("askBtn").disabled=true;
	}
}

function ask(){
	alert("Your query has been successfully submitted. You will be reached out by our agent.");
}