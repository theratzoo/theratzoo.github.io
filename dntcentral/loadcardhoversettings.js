

                        var contentDiv = document.getElementById('content');
                        var textOfContentDiv = contentDiv.innerHTML;
                        var tempString = "";
                        var onATag = false;
                        var preTempStringCode = "";
                        var invalidCardLocation = false;
                        var inQuotes = false;
                        var priorString = "";
                        var stop = false;
                        for(var i=0; i<textOfContentDiv.length; i++) {
                            if(i+20 < textOfContentDiv.length) {
                                if(textOfContentDiv[i] == "<" && textOfContentDiv[i+1] == "!" && textOfContentDiv[i+2] == "-" && textOfContentDiv[i+3] == "-" && textOfContentDiv[i+4] == "S" && textOfContentDiv[i+5] == "T" && textOfContentDiv[i+6] == "O" && textOfContentDiv[i+7] == "P" && textOfContentDiv[i+8] == "-" && textOfContentDiv[i+9] == "-" && textOfContentDiv[i+10] == ">") {
                                    stop = true;
                                } else if(textOfContentDiv[i] == "<" && textOfContentDiv[i+1] == "!" && textOfContentDiv[i+2] == "-" && textOfContentDiv[i+3] == "-" && textOfContentDiv[i+4] == "G" && textOfContentDiv[i+5] == "O" && textOfContentDiv[i+6] == "-" && textOfContentDiv[i+7] == "-" && textOfContentDiv[i+8] == ">") {
                                    stop = false;
                                }
                            }
                            if(!stop) {
                                var nextCharIsSpace = textOfContentDiv[i] == " ";
                                if(textOfContentDiv[i] == "\"") {
                                    inQuotes = !inQuotes;
                                }
                                if(textOfContentDiv[i] == "<") {
                                    preTempStringCode += tempString;
                                    priorString = tempString
                                    tempString = "";
                                    onATag = true;
                                    preTempStringCode += textOfContentDiv[i];
                                } else if(textOfContentDiv[i] == ">") {
                                    onATag = false;
                                    preTempStringCode += textOfContentDiv[i];
                                } else if(onATag) {
                                    var dumbCheck = textOfContentDiv[i-1] == "<" || textOfContentDiv[i-1] == "/"
                                    if(textOfContentDiv[i] == "h" && dumbCheck && textOfContentDiv[i+1] != "r" && !inQuotes) {
                                        invalidCardLocation = !invalidCardLocation;
                                    } else if(textOfContentDiv[i] == "a" && dumbCheck && !inQuotes) {
                                        invalidCardLocation = !invalidCardLocation;
                                    }
                                    preTempStringCode += textOfContentDiv[i];
                                } else if(invalidCardLocation) {
                                    tempString += textOfContentDiv[i];
                                } else if(checkIfItsAMatch(tempString, textOfContentDiv[i], textOfContentDiv[i+1], priorString)) {
                                    if(tempString == "Golem") {
                                        tempString = `<a href=\"https://deckbox.org/mtg/Golem?printing=35023\" onclick=\"return false;\" class=\"discussionA\">${tempString}</a>`;
                                    } else if(tempString == "Bloodbraid Elv") {
                                        tempString = `<a href=\"https://deckbox.org/mtg/Bloodbraid Elf\" onclick=\"return false;\" class=\"discussionA\">Bloodbraid Elves</a>`;
                                        i += 2;
                                    } else if(tempString == "Horizon Canopi") {
                                        tempString = `<a href=\"https://deckbox.org/mtg/Horizon Canopy\" onclick=\"return false;\" class=\"discussionA\">Horizon Canopies</a>`;
                                        i += 2;
                                    } else {
                                        tempString = `<a href=\"https://deckbox.org/mtg/${tempString}\" onclick=\"return false;\" class=\"discussionA\">${tempString}</a>`;
                                    }

                                    
                                    
                                    preTempStringCode += tempString;
                                    preTempStringCode += textOfContentDiv[i];
                                    priorString = tempString;
                                    tempString = "";

                                    //below if statement: if the next character is a space
                                    //then clear temp string, add it to pretempstringcode
                                    //before running this, need to make sure that the
                                    //tempstring is not an eventual hit
                                } else if (checkifItsAnEventualMatch(tempString, nextCharIsSpace, textOfContentDiv[i+1])) {
                                    tempString += textOfContentDiv[i];
                                } else if (textOfContentDiv[i] == " ") {
                                    preTempStringCode += tempString;
                                    preTempStringCode += " ";
                                    priorString = tempString;
                                    tempString = "";
                                } else if(textOfContentDiv[i] == "(") {
                                    preTempStringCode += textOfContentDiv[i];
                                } else {
                                    tempString += textOfContentDiv[i];
                                }
                            } else {
                                preTempStringCode += textOfContentDiv[i];
                            }
                            
                            



                        }
                        
                        preTempStringCode += tempString;
                        
                        document.getElementById('content').innerHTML = preTempStringCode;
                        
                    
                    function checkIfItsAMatch(tempString, exceptionChar, wastelandCheck, priorString) {
                        
                        if(!isCapitalLetter(tempString[0])) {
                            return false;
                        }
                        if(exceptionChar == "w" && tempString == "Flicker") {
                            return false;
                        }
                        if(tempString == "Dredge") {
                            return false;
                        }
                        if(tempString == "Human" || tempString == "Humans") {
                            return false;
                        }
                        if(tempString == "Jund") {
                            return false;
                        }
                        if(tempString == "Gavony") {
                            return false;
                        }
                        if(tempString == "Wasteland" && wastelandCheck == "S") {
                            return false;
                        }
                        if(tempString == "Inquisition" && wastelandCheck == "o") {
                            return false;
                        }
                        if(tempString == "Grixis") {
                            return false;
                        }
                        if(tempString == "Death's Shadow" && priorString == "Grixis") {
                            return false;
                        } 
                        if(tempString == "Snap" && exceptionChar == "c") {
                            return false;
                        }
                        if(tempString == "Anger" && wastelandCheck == "o") {
                            return false;
                        }
                        if(tempString == "Disrupt" && exceptionChar == "i" && wastelandCheck == "o") {
                            return false;
                        }
                        if(tempString == "Ambush" && wastelandCheck == "V") {
                            return false;
                        }
                        if(tempString == "Nourish" && exceptionChar == "i") {
                            return false;
                        }
                        if(tempString == "Bant" && wastelandCheck == "S") {
                            return false;
                        }
                        if(tempString == "Scrap" && wastelandCheck == "T") {
                            return false;
                        }
                        if(tempString == "Tithe" && wastelandCheck == "T") {
                            return false;
                        }
                        if(tempString == "Spinter" && wastelandCheck == "T") {
                            return false;
                        }
                        if(tempString == "Forbid" && exceptionChar == "d") {
                            return false;
                        }
                        if(tempString == "Naya") {
                            return false;
                        } 
                        if(tempString == "Kitesail" && wastelandCheck == "F") {
                            return false;
                        }
                        if(tempString == "Merfolk" && !isCapitalLetter(wastelandCheck)) {
                            return false;
                        }
                        if(tempString == "Cunning" && wastelandCheck == "S") {
                            return false;
                        }
                        if(tempString == "Inferno" && wastelandCheck == "T") {
                            return false;
                        }
                        if(tempString == "Bedlam" && wastelandCheck == "R") {
                            return false;
                        }
                        if(tempString == "Swelter" && wastelandCheck == "n") {
                            return false;
                        }
                        if(tempString == "Horizon Canopi") {
                            return true;
                        }
                        if(tempString == "Bloodbraid Elv") {
                            return true;
                        }
                        if(tempString == "Vigilance") {
                            return false;
                        }
                        if(tempString == "Lifelink") {
                            return false;
                        }
                        var listOfCardNames = jArray;
                        
                        
                        
                        for(var i=0; i<listOfCardNames.length; i++) {
                            if(listOfCardNames[i] == tempString) {
                                return true;
                            }
                        }
                        return false;
                        
                    }
                    
                    function checkifItsAnEventualMatch(tempString, nextCharIsSpace, nextChar) {

                        if(!isCapitalLetter(tempString[0])) {
                            return false;
                        }
                        var listOfCardNames = jArray;
                        var isASimilarity = true;
                        for(var i=0; i<listOfCardNames.length; i++) {
                            var listItem = listOfCardNames[i];
                            if(listItem[0] == tempString[0]) {
                                isASimilarity = true;
                                for(var j=1; j<tempString.length; j++) {
                                    if(listItem[j] != tempString[j]) {
                                        isASimilarity = false;
                                    }
                                }
                                if(nextCharIsSpace && listItem[tempString.length] != " ") {
                                    isASimilarity = false;
                                } else if(nextCharIsSpace && listItem[tempString.length+1] != nextChar) {
                                    isASimilarity = false;
                                }
                                if(isASimilarity) {
                                    return true;
                                }
                            }
                        }
                        return false;
                    }

                    function isCapitalLetter(character) {
                        var capitalLetters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                        for(var i=0; i<26; i++) {
                            if(character == capitalLetters[i]) {
                                return true;
                            }
                        }
                        return false;
                    }
            
            function invalidValue(chara) {
                var values = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz 1234567890!.?-;:/&$*,";
                for(var i=0; i<values.length; i++) {
                    if(chara == values[i]) {
                        return false;
                    }
                }
                return true;
            }