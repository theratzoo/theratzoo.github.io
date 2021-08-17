var link = fixLink(window.location.href); //make sure this becomes a string
var index;
var isBW = link.includes("bw-ent");
//bw-ent
for(var i=0; i<listOfTitles.length; i++) {
	if(link == listOfLinks[i]) {
		index = i;
	}
}
var nextIndex = -1;
for(var i=index+1; i<listOfTitles.length; i++) {
	if(isValidPage(listOfLinks[i], isBW)) {
		nextIndex = i;
		break;
	}
}
var previousIndex = -1;
for(var i=index-1; i>=0; i--) {
	if(isValidPage(listOfLinks[i], isBW)) {
		previousIndex = i;
		break;
	}
}

var html = `<div class="row"><div class="col-sm-4">`;

if(previousIndex != -1) {
	html += `<h2><a href=\"${listOfLinks[previousIndex]}\">Previous Matchup Guide: ${listOfTitles[previousIndex]}</a></h2>`;
}
html += `</div><div class="col-sm-4">`;
var mulliganGameOnline = false; //set to false, as I don't have MG up rn...

if(mulliganGameOnline) {
	setupMulliganGame();
}
html += `</div><div class="col-sm-4">`;
if(nextIndex != -1) {
	html += `<h2><a href=\"${listOfLinks[nextIndex]}\">Next Matchup Guide: ${listOfTitles[nextIndex]}</a></h2>`;
}
html += `</div></div>`;
var additionalContent = document.getElementById('additional-content');
additionalContent.innerHTML = html;


function isValidPage(link, isBW) {

	if(!link.includes("matchupguides/")) {
		return false;
	} else if(link == "/modern/matchupguides/") {
		return false;
	} else if(isBW && !link.includes("bw-ent")) {
		return false;
	} else if(!isBW && link.includes("bw-ent")) {
		return false;
	}
	return true;
	
	//false if mga or mmg
	//then checks if it has cookie and returns false if the cookies is set to true.
}

function fixLink(link) {
	if(link.includes(".php")) {
		for(var i=0; i<4; i++) {
			link = link.slice(0, -1);
		}
	}
	while(link.includes(".com")) {
		link = link.substring(1);
	}
	link = link.substring(3);
	return link;
}

function setupMulliganGame() {

}
