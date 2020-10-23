/*checking wether checkbox is ticked*/
function buttonactive(){

if(document.getElementById("cpay").checked)	{
	document.getElementById("btn1").disabled=false;
	}
	
	else{
		document.getElementById("btn1").disabled=true;
	}
}




/*validating the inputed numbers and length */
function Validatecnum(){
	
	var cardno= document.getElementById("card_num");
	 
	 if (cardno.value == "" || cardno.value == null){
    	alert("Please enter a card number");
		return false;
	}
	
	if (cardno.value.length < 16 || cardno.value.length > 16) {
		alert("Card No. is not valid , Please Enter 16 Digit Card No.");
		return false;
    }
	
	
	alert("Success ");
    return true;
	
}


