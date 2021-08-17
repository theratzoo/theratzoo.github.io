
var footerLMElement = document.getElementById('lastMod');
var temp = jStr;
var lastModString = "";
var reachedTime = false;
var yr = "2019";
var counter = 0;
for(var i=0; i<temp.length; i++) {
	if(temp[i] == " ") {
		for(var j=0; j<4; j++) {
			if(yr[j] == temp[i - 4 + j]) {
				counter++;
			}
		}
		if(counter == 4) {
			reachedTime = true;
		}
	}
	if(!reachedTime) {
		lastModString += temp[i];
	}
}
footerLMElement.innerHTML = "Last updated on ";
footerLMElement.innerHTML += lastModString;
footerLMElement.innerHTML += ".";

var emailp = document.getElementById('email-p');
emailp.value = window.location.href;

//OLD:
/*
var footerLMElement = document.getElementById('lastMod');
var lastModDate = new Date(document.lastModified);
var lastModStringFull = lastModDate.toLocaleString();
var lastModString = "";
var passedComma = false;
for(var i=0; i<lastModStringFull.length; i++) {
	if(lastModStringFull[i] == ",") {
		passedComma = true;
	} else if(!passedComma) {
		lastModString += lastModStringFull[i];
	}
}
footerLMElement.innerHTML = "Last updated on ";
footerLMElement.innerHTML += lastModString;
footerLMElement.innerHTML += ".";
*/