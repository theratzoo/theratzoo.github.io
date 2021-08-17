console.log(fixLink(window.location.href));
var index;
for(var i=0; i<listOfTitles.length; i++) {
	var j = listOfTitles.length - i - 1;
	if(isValidPage(listOfTitles[j], listOfLinks[j])) {
		index = j;
		break;
	}
}
var newPageInfo = [listOfTitles[index], listOfDescriptions[index], listOfLinks[index]];
var latestArticle = document.getElementById('recommended');
latestArticle.innerHTML = setUpHTML(newPageInfo[0], newPageInfo[1], newPageInfo[2]);


function isValidPage(title, link) {

	if(title.includes("Mulligan Game") && title.includes("Archive"))  {
		return false;
	} else if(title.includes("Decklist")) {
		return false;
	} else if(localStorage.getItem(link)) {
		return false;
	} else if(link == fixLink(window.location.href)) {
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

function setUpHTML(title, description, link) {
	var theGoods = "";
	var h2tag = `<h3><a href=\"${link}\">${title}</a></h3>`;
	var ptag = `<p>${description}</p>`;
	theGoods += h2tag;
	theGoods += ptag;
	return theGoods;
}