//Data that we need to download: 
//A table with three columns. The columns are:
//Card name
//Card type
//Card CMC

var databaseList = dbArray; //this is the "list of lists"

var listOfMaindeckCards = [];
var listOfMaindeckCardAmounts = [];

var number = -1;
var maindeck = document.getElementById('maindeck_c');
var textOfMaindeck = maindeck.innerHTML;
var cardName = "";

var preTempStringCode = ""; //idk
var priorString = ""; //idk
for(var i=0; i<textOfMaindeck.length; i++) {
    var isNum = isDigit(textOfMaindeck[i]);
    if (isNum && number == "-1") {
        number = textOfMaindeck[i];
    } else if (isNum) {
        cardName = cardName.replace(/\s+/g,' ').trim();
        listOfMaindeckCards.push(cardName);
        listOfMaindeckCardAmounts.push(number);
        number = textOfMaindeck[i];
        cardName = "";
    } else {
        cardName += textOfMaindeck[i];
    }
}


cardName = cardName.replace(/\s+/g,' ').trim();
listOfMaindeckCards.push(cardName);
listOfMaindeckCardAmounts.push(number);
number = "-1";
cardName = "";

var listOfSideboardCards = [];
var listOfSideboardCardAmounts = [];

var sideboard = document.getElementById('sideboard_c');
var textOfSideboard = sideboard.innerHTML;

for(var i=0; i<textOfSideboard.length; i++) {
    var isNum = isDigit(textOfSideboard[i]);
    if (isNum && number == "-1") {
        number = textOfSideboard[i];
    } else if (isNum) {
        cardName = cardName.replace(/\s+/g,' ').trim();
        listOfSideboardCards.push(cardName);
        listOfSideboardCardAmounts.push(number);
        number = textOfSideboard[i];
        cardName = "";
    } else {
        cardName += textOfSideboard[i];
    }
}
cardName = cardName.replace(/\s+/g,' ').trim();
listOfSideboardCards.push(cardName);
listOfSideboardCardAmounts.push(number);

var sortedMaindeck = sortCards(listOfMaindeckCards, listOfMaindeckCardAmounts, false);

var sortedSideboard = sortCards(listOfSideboardCards, listOfSideboardCardAmounts, true);
var newSortedNames = [];
var newSortedAmounts = [];

for(var i=0; i<sortedMaindeck[0].length; i++) {
    newSortedNames.push(sortedMaindeck[0][i]);
    newSortedAmounts.push(sortedMaindeck[1][i]);
}
for(var i=0; i<sortedSideboard[0].length; i++) {
    newSortedNames.push(sortedSideboard[0][i]);
    newSortedAmounts.push(sortedSideboard[1][i]);
}

var sortedList = [newSortedNames, newSortedAmounts];
for(var i=0; i<sortedList[0].length; i++) {
    console.log(sortedList[0][i]);
}
//Finally, comes the actual sorting part.
//BUT, need to combine main deck and side board lists! Or, at the very least, use their combined count
//to determine where to split and such
var firstHalf = "";
var cutOff = sortedList[0].length/2;
if(sortedList[0].length % 2 == 1) {
    cutOff -= 0.5;
}
for (var i = 0; i < cutOff; i++) {
    if (sortedList[1][i] == "-1") {
        firstHalf += `<tr><th>${sortedList[0][i]}s:</th></tr>`;
    } else {
        firstHalf += `<tr><td>${sortedList[1][i]}&emsp;<a href=\"\" class=\"cellA\" onclick=\"return false;\" onmouseover=\"previewDeckThree(this.text)\">${sortedList[0][i]}</a></td></tr>`;
    }
    
}

var p1 = `<div class="row decklist"><div class="col-6"><div class="row" id="decklist"><div class="col-sm-6"><table class="table decklist table-condensed table-responsive"><tbody>`;
var p2 = `</tbody></table></div><div class="col-sm-6"><table class="table decklist table-condensed table-responsive"><tbody>`;
var p3 = `</tbody></table></div></div></div><div class="col-6"><div class="previewDiv"><img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=${sortedList[0][1]}&type=card" id="deckPreviewImgThree" class="deckImgDimensions"></div></div></div>`;
//**for the previewDeck()... determine whether it is previewDeck() or previewDeckNUM() based on
//some characteristic in the id or class name or something in the main div!
var secondHalf = "";
for (var i = cutOff; i < sortedList[0].length; i++) {
    if (sortedList[1][i] == "-1") {
        secondHalf += `<tr><th>${sortedList[0][i]}s:</th></tr>`;
    } else {
        console.log(sortedList[0][i]);
        console.log(i);
        secondHalf += `<tr><td>${sortedList[1][i]}&emsp;<a href=\"\" class=\"cellA\" onclick=\"return false;\" onmouseover=\"previewDeckThree(this.text)\">${sortedList[0][i]}</a></td></tr>`;
    }
}

var newHTML = "";
newHTML += p1;
newHTML += firstHalf;
newHTML += p2;
newHTML += secondHalf;
newHTML += p3;
document.getElementById('autolist_c').innerHTML = newHTML;

//CAN BE CONFIGURED FOR BOTH MD N SB
function  sortCards(listOfCards, listOfCardAmounts, isSideboard) {
    var listOfCardCMCs = [];
    var listOfCardTypes = [];

    var sortedListOfCards = [];
    var sortedListOfCardAmounts = [];
    var sortedListOfCardCMCs = [];
    var sortedListOfCardTypes = [];

    if (isSideboard) {
        sortedListOfCards.push("Sideboard");
        sortedListOfCardAmounts.push("-1");
        sortedListOfCardCMCs.push(-1);
        sortedListOfCardTypes.push("NIL");
    }

    var candidate = "NIL";
    var candidateStats = [-1, "CREATURE TYPE", "-1"]; //first value is CMC
//ORDER OF TYPE- CREATURE PW SPELL ARTIFACT ENCHANTMENT LAND
    var n = 0;
    while(listOfCards.length > 0) {
        var name = listOfCards[n];
        //look for name in the database. fetch out the cmc and creature type
        var index = databaseList[0].indexOf(name);
        var type = databaseList[1][index];

        console.log(name);
        console.log(databaseList[0][index]);
        console.log(databaseList[1][index]);
        console.log(databaseList[1][5]);
        console.log(databaseList[2][index]);

        type = fixType(type);
        var cmc = parseInt(databaseList[2][index]);
        //then, compare the current stats to candidate stats.
        if(candidate == "NIL") {
            candidate = name;
            candidateStats = [cmc, type, listOfCardAmounts[n]];
        } else if(isGreaterCreatureType(candidateStats[1], type) == 1 && !isSideboard) {
            candidate = name;
            candidateStats = [cmc, type, listOfCardAmounts[n]];
        } else if(isGreaterCreatureType(candidateStats[1], type) == 0 || isSideboard) {

            if(candidateStats[0] > cmc) {
                candidate = name;
                candidateStats = [cmc, type, listOfCardAmounts[n]];
            } else if(candidateStats[0] == cmc) {
                console.log(name);
                console.log("^^");
                if(isHigherAlphabet(candidate, name)) {
                    candidate = name;
                    candidateStats = [cmc, type, listOfCardAmounts[n]];
                }
            }
        }
        //if candidate stats < current stats, set name equal to candidate and other stats equal to candidagte stats
        //in order to be greater, current stats must have:
        //greater or equal creature type. if equal creature type,
        //less or equal cmc. if equal cmc,
        //alphabetical order!

        //**if isSideboard, the creature type does not matter.
        //**if candidate = NIL, then it automatically is set to the current stats

        n ++;
        //now, check if n is equal to listOfCards.length
        if(n == listOfCards.length) {
            n = 0;
            console.log(candidate);
            if(!sortedListOfCardTypes.includes(candidateStats[1]) && !isSideboard) {
                var header = candidateStats[1];
                sortedListOfCards.push(header);
                sortedListOfCardAmounts.push("-1");
                sortedListOfCardTypes.push("none");
                sortedListOfCardCMCs.push(-1);
            }
            sortedListOfCards.push(candidate);
            sortedListOfCardAmounts.push(candidateStats[2]);
            sortedListOfCardTypes.push(candidateStats[1]);
            sortedListOfCardCMCs.push(candidateStats[0]);
            var indexToRemove = listOfCards.indexOf(candidate);
            listOfCards.splice(indexToRemove, 1);
            listOfCardAmounts.splice(indexToRemove, 1);
            candidate = "NIL";

        }
        //if it is, then set it equal to zero. and add the candidate to the sorted list.
        //BUT, before adding the candidate, check if the candidate's creature type is on the list as a separate entity
        //if it is not, add it first to the sorted list. ALSO, the values for the creature type
        //are all NIL. it is crucial to have its amount value be NIL! and its creature name will be 
        //the creature type! So that's one way to check for it i guess....
        //don't forget! remove the candidate name from the listOfCards, and its count from the list of amounts
        //ALSO, set candidate equal to NIL:

        //***** if it is an instant/sourcey, convert the name to spell instead~

    }

    var listOfLists = [sortedListOfCards, sortedListOfCardAmounts];
    return listOfLists;
}

function isHigherAlphabet(candidate, name) {
    var alphabetList = [' ', ',', '\'', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    candidate = candidate.toLowerCase();
    name = name.toLowerCase();
    var can = "";
    var na = "";
    var count = 0;
    while(can == na) {
        can += candidate[count];
        na += name[count];
        count ++;
    }
    var canNum =  alphabetList.indexOf(can[count-1]);
    var naNum = alphabetList.indexOf(na[count-1]);
    if(canNum > naNum) {
        return true;
    } else {
        return false;
    }
}

function fixType(type) {
    switch(true) {
        case type.includes("Creature"):
            return "Creature";
        case type.includes("Land"):
            return "Land";
        case type.includes("Artifact"):
            return "Artifact";
        case type.includes("Enchantment"):
            return "Enchantment";
        case type.includes("Planeswalker"):
            return "Planeswalker";
        case type.includes("Instant"):
            return "Spell";
        case type.includes("Sourcery"):
            return "Spell";
        default:
            console.log("MAJOR ERROR");
            return "ERROR";
    }
}

function isGreaterCreatureType(candidate, current) {
    var candidateValue = getTypeValue(candidate);
    
    var currentValue = getTypeValue(current);

    if(candidateValue < currentValue) {
        return -1;
    } else if(candidateValue == currentValue) {
        return 0;
    } else {
        return 1;
    }
}

function getTypeValue(type) {
    switch(true) {
        case type.includes("Creature"):
            return 1;
        case type.includes("Land"):
            return 6;
        case type.includes("Artifact"):
            return 4;
        case type.includes("Enchantment"):
            return 5;
        case type.includes("Planeswalker"):
            return 2;
        case type.includes("Spell"):
            return 3;
        default:
            console.log("MAJOR ERROR");
            return 99;
    }
}

function isDigit(char) {
    var listOfDigits = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11"];
    if (listOfDigits.includes(char)) {
        return true;
    }
    return false;
}

