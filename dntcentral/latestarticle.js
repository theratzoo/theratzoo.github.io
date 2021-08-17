var listOfIndexes = [];
for(var i=0; i<listOfTitles.length; i++) {
	var j = listOfTitles.length - i - 1;
	if(isValidPage(listOfTitles[j]) && needMorePages(listOfIndexes)) {
		listOfIndexes.push(j);
	} else if(!needMorePages(listOfIndexes)) {
		break;
	}
}
var primaryIndex = listOfIndexes[0];
var primaryNewPage = [listOfTitles[primaryIndex], listOfDescriptions[primaryIndex], listOfLinks[primaryIndex]];
if(document.getElementById('fourNewestPages') == null) {
	//setup for nonhomepage
	var latestArticle = document.getElementById('latestArticle');
	latestArticle.innerHTML = setUpHTML(primaryNewPage[0], primaryNewPage[1], primaryNewPage[2]);
} else {
	//setup for homepage
	var secondIndex = listOfIndexes[1];
	var thirdIndex = listOfIndexes[2];
	var fourthIndex = listOfIndexes[3];
	var fifthIndex = listOfIndexes[4];
	var sixthIndex = listOfIndexes[5];
	var secondaryNewPage = [listOfTitles[secondIndex], listOfDescriptions[secondIndex], listOfLinks[secondIndex]];
	var thirdNewPage = [listOfTitles[thirdIndex], listOfDescriptions[thirdIndex], listOfLinks[thirdIndex]];
	var fourthNewPage = [listOfTitles[fourthIndex], listOfDescriptions[fourthIndex], listOfLinks[fourthIndex]];
	var fifthNewPage = [listOfTitles[fifthIndex], listOfDescriptions[fifthIndex], listOfLinks[fifthIndex]];
	var sixthNewPage = [listOfTitles[sixthIndex], listOfDescriptions[sixthIndex], listOfLinks[sixthIndex]];
	document.getElementById('homeBoxA').innerHTML = setUpHTML(primaryNewPage[0], primaryNewPage[1], primaryNewPage[2]);
	document.getElementById('homeBoxB').innerHTML = setUpHTML(secondaryNewPage[0], secondaryNewPage[1], secondaryNewPage[2]);
	document.getElementById('homeBoxC').innerHTML = setUpHTML(thirdNewPage[0], thirdNewPage[1], thirdNewPage[2]);
	document.getElementById('homeBoxD').innerHTML = setUpHTML(fourthNewPage[0], fourthNewPage[1], fourthNewPage[2]);
	document.getElementById('homeBoxE').innerHTML = setUpHTML(fifthNewPage[0], fifthNewPage[1], fifthNewPage[2]);
	document.getElementById('homeBoxF').innerHTML = setUpHTML(sixthNewPage[0], sixthNewPage[1], sixthNewPage[2]);
}



function isValidPage(title) {
	if(title.includes("Mulligan Game") && title.includes("Archive"))  {
		return false;
	} else if(title.includes("Decklist")) {
		return false;
	}
	return true;
	//false if mga or mmg
	//EDIT: i'm going to let mmgs go... as they only happen once a month!
	//false if decklist
	//true otherwise
}

function needMorePages(ids) {
	
	return ids.length != 6;
}

function setUpHTML(title, description, link) {
	var theGoods = "";
	var h2tag = `<h3><a href=\"${link}\">${title}</a></h3>`;
	var ptag = `<p>${description}</p>`;
	theGoods += h2tag;
	theGoods += ptag;
	return theGoods;
}