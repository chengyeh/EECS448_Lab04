function validateForm()
{
	var userName = document.getElementById("name").value;
	var password = document.getElementById("password").value;
	var quantity = document.getElementsByClassName("itemQuantity");
	var shipping = document.getElementsByClassName("method");
	var userNameErr = "";
	var passwordErr = "";
	var quantityErr = "";
	var shippingErr = "";
	var valid = true;
	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	
	if(userName == null || userName == "")
	{
		userNameErr = "USER NAME CANNOT BE BLANK";
		valid = false;
	}
	else
	{
		if(!re.test(userName))
		{
			userNameErr = "USER NAME MUST BE IN THE FORM OF AN EMAIL ADDRESS";
			valid = false;
		}
	}
	
	if(password == null || password == "")
	{
		passwordErr = "PASSWORD CANNOT BE BLANK";
		valid = false;
	}
	
	if(quantity[0].value == "" || quantity[0].value < 0)
	{
		quantityErr = "QUANTITIES CANNOT BE BLANK OR NEGATIVE";
		valid = false;
	}
	if(quantity[1].value == "" || quantity[1].value < 0)
	{
		quantityErr = "QUANTITIES CANNOT BE BLANK OR NEGATIVE";
		valid = false;
	}
	if(quantity[2].value == "" || quantity[2].value < 0)
	{
		quantityErr = "QUANTITIES CANNOT BE BLANK OR NEGATIVE";
		valid = false;
	}
	
	if((shipping[0].checked == false) && (shipping[1].checked == false) && (shipping[2].checked == false))
	{
		shippingErr = "YOU MUST PICK A SHIPPING METHOD";
		valid = false;
	}
	
	if(valid == false)
	{
		alert(userNameErr + "\n" + passwordErr + "\n" + quantityErr + "\n" + shippingErr);
	}
	return valid;
}
