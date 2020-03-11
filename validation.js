
const FIRSTNAME_EMPTY_ERROR_MESSAGE = "First name is required!";
const LASTNAME_EMPTY_ERROR_MESSAGE = "Last name is required!";
const STREETNUMBER_EMPTY_ERROR_MESSAGE = "Street number is required!"
const STREETNUMBER_ERROR_MESSAGE = "Street number should consist of only numbers!"
const STREETNAME_EMPTY_ERROR_MESSAGE = "Street name is required!";
const POSTALCODE_EMPTY_ERROR_MESSAGE = "Postal code is required!";
const POSTALCODE_ERROR_MESSAGE = "Please, check the postal code. It's probably invalid";
const CITYNAME_EMPTY_ERROR_MESSAGE = "City name is required!";

var regPostal = /([A-Z]\d){3}/i;
var userError = "";

function validateMyForm()
{

    userError = "";

    var tempFirstname = document.getElementById("firstName").value;
    var tempLastname = document.getElementById("lastName").value;
	var tempStreetNumber = document.getElementById("streetNumber").value;
	var tempStreetName = document.getElementById("streetName").value;
	var tempPostalCode = document.getElementById("postalCode").value;
	var tempCityName = document.getElementById("cityName").value;
	

    if (tempFirstname == "")
    {

        userError += FIRSTNAME_EMPTY_ERROR_MESSAGE + "<br>";
		document.getElementById("firstName").focus();

    }
	
	if (tempLastname == "")
    {

        userError += LASTNAME_EMPTY_ERROR_MESSAGE + "<br>";
		document.getElementById("lastName").focus();

    }
	
	if (isNaN(tempStreetNumber))
	{
		userError += STREETNUMBER_ERROR_MESSAGE + "<br>";
		document.getElementById("streetNumber").focus();
	}
	else if (tempStreetNumber == "")
	{
		userError += STREETNUMBER_EMPTY_ERROR_MESSAGE + "<br>";
		document.getElementById("streetNumber").focus();
	}
	
	if (tempStreetName == "")
	{
		userError += STREETNAME_EMPTY_ERROR_MESSAGE + "<br>";
		document.getElementById("streetName").focus();
	}
	
	if(tempPostalCode == "")
	{
		userError += POSTALCODE_EMPTY_ERROR_MESSAGE + "<br>";
		document.getElementById("postalCode").focus();
	}
	else if (!tempPostalCode.match(regPostal))
	{
		userError += POSTALCODE_ERROR_MESSAGE + "<br>";
		document.getElementById("postalCode").focus();
	}
	
	if (tempCityName == "")
	{
		userError += CITYNAME_EMPTY_ERROR_MESSAGE + "<br>";
		document.getElementById("cityName").focus();
	}



    printErrors();
	

    return (userError === "");

}


function printErrors()
{

    (userError === "") ? document.getElementById("userErrorSpan").innerHTML = userError : document.getElementById("userErrorSpan").innerHTML = "<hr>" + userError + "<hr>";

}


function TrimFunction(trimString)
{  
	return trimString.trim();
}


function IncreaseFunctionNew()
{
    var numberItems = document.getElementById("numberOfNewUFO").value;
    numberItems++;
    document.getElementById("numberOfNewUFO").value  = numberItems;
}

function IncreaseFunctionOld()
{
    var numberItems = document.getElementById("numberOfOldUFO").value;
    numberItems++;
    document.getElementById("numberOfOldUFO").value  = numberItems;
}