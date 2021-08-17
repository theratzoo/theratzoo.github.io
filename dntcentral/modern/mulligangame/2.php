<?php
    include("../../scripts/searchscript.php");
    include("../../scripts/cardlistdb.php");
?>
<?php
    $filename = '2.php';
    $lastModDate = date ("F d Y H:i:s.", filemtime($filename));
?>
<?php 
    $servername = "localhost";
    $username = "theratzoo";
    $password = "Talia$1024";
    $dbname = "mulliganresults";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "SELECT choice, keepormull FROM august2018results";
    $result = $conn->query($sql);
    $choice1K = 0;
    $choice2K = 0;
    $choice3K = 0;
    $choice4K = 0;
    $choice5K = 0;
    $choice6K = 0;
    $choice7K = 0;
    $choice8K = 0;
    $choice9K = 0;
    $choice10K = 0;
    $numberOfVoters = 0;
    while($row = $result->fetch_assoc()) {
        if($row["keepormull"] == "Keep") {
            switch ($row["choice"]) {
                case "1":
                    $choice1K++;
                    break;
                case "2":
                    $choice2K++;
                    break;
                case "3":
                    $choice3K++;
                    break;
                case "4":
                    $choice4K++;
                    break;
                case "5":
                    $choice5K++;
                    break;
                case "6":
                    $choice6K++;
                    break;
                case "7":
                    $choice7K++;
                    break;
                case "8":
                    $choice8K++;
                    break;
                case "9":
                    $choice9K++;
                    break;
                case "10":
                    $choice10K++;
                    break;
            }
            
        }
        $numberOfVoters++;
        //echo "id: " . $row["choice"]. " - Name: " . $row["keepormull"];
    }
    //echo "TEST: " . $choice1K;
    $numberOfVoters = $numberOfVoters / 10;
    $conn->close();
?>
<!DOCTYPE html>
<html>
    <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    

        <title>Modern Mulligan Game- August 2018 Results</title>
        <link rel="stylesheet" type="text/css" href="/style.css">
        <script>
            $(document).ready(function() {

                var docHeight = $(window).height();
                var footerHeight = $('#footer').height();
                var footerTop = $('#footer').position().top + footerHeight;

                if (footerTop < docHeight)
                    $('#footer').css('margin-top', 10+ (docHeight - footerTop) + 'px');
            });
        </script>
        <script>
            function loadScript() {
                setUpDate();
                setUpNumbers();
            }
            function setUpDate() {
                var d = new Date();
                var month = new Array();
                month[0] = "January";
                month[1] = "February";
                month[2] = "March";
                month[3] = "April";
                month[4] = "May";
                month[5] = "June";
                month[6] = "July";
                month[7] = "August";
                month[8] = "September";
                month[9] = "October";
                month[10] = "November";
                month[11] = "December";
                var n = month[d.getMonth()];
                document.getElementById('mgrec').innerHTML = `${n}'s Mulligan Game (Live now)`;
            }
            function setUpNumbers() {
                var totalCount = <?=json_encode($numberOfVoters)?>;
                for(var i=1; i<11; i++) {
                    var keepCount = getKeepCount(i);
                    var mullCount = totalCount - keepCount;
                    var keepPercentage = 100 * (keepCount / totalCount);
                    var mullPercentage = 100 * (mullCount / totalCount);
                    keepPercentage = Math.round(keepPercentage);
                    mullPercentage = Math.round(mullPercentage);
                    document.getElementById(`mmg${i}k`).innerHTML = `${keepCount} voted Keep (${keepPercentage}%)`;
                    document.getElementById(`mmg${i}m`).innerHTML = `${mullCount} voted Mull (${mullPercentage}%)`;
                }
            }
            function getKeepCount(num) {
                switch (num) {
                    case 1:
                        return <?=json_encode($choice1K)?>;
                    case 2:
                        return <?=json_encode($choice2K)?>;
                    case 3:
                        return <?=json_encode($choice3K)?>;
                    case 4:
                        return <?=json_encode($choice4K)?>;
                    case 5:
                        return <?=json_encode($choice5K)?>;
                    case 6:
                        return <?=json_encode($choice6K)?>;
                    case 7:
                        return <?=json_encode($choice7K)?>;
                    case 8:
                        return <?=json_encode($choice8K)?>;
                    case 9:
                        return <?=json_encode($choice9K)?>;
                    case 10:
                        return <?=json_encode($choice10K)?>;
                }
            }
           
        </script>
        <script src="/searchbarscripts.js" type="text/javascript"></script>
        <script src="https://deckbox.org/assets/external/tooltip.js"></script>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
          (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-5296235643990630",
            enable_page_level_ads: true
          });
        </script>
    </head>
    <body class="homePage" onload="loadScript()">
                <?php
                    include("../../scripts/navbar.php");
                ?>
                <?php
                if(!isset($q)) {
                    echo '';
                } else {
                    $query = mysqli_query($con, "SELECT * FROM sitesearchbar WHERE title LIKE '%$q%' OR description LIKE '%$q%'");
                    $num_rows = mysqli_num_rows($query);

                    /*
                    if $num_rows == 1 {
                        //go directly to page
                    } else {

                        //go to search page w/ results
                    }
                    */
                    $resultss = 'results';
                    if($num_rows == 1) {
                        $resultss = 'result';
                    }
                    ?>
                    <br>
                    <div class="row">
                        <div class="col-sm-2">
                        </div>
                        <div class="col-sm-8">
                            <p><strong><?php echo $num_rows; ?></strong> <?php echo $resultss; ?> for '<?php echo $q; ?>'</p>
                        </div>
                    </div>
                    
                    <br>
                    <?php
                    

                    while($row = mysqli_fetch_array($query)) {
                        $id = $row['id'];
                        $title = $row['title'];
                        $text = $row['description'];
                        $link = $row['link'];
                        //instead of $id for the link, try doing the title...
                        echo '<div class="searchResult"><h3 class="search"><a href="' . $link . '" class="mua">' . $title . '</a></h3><p class="search"><i>' . $text . '</i></p></div><br />';
                    }
                }
                
            ?>
            <div class="container-fluid body-div" id="content">
                <div class="jumbo-tron">
                    <h1>Modern Mulligan Game: August 2018 Results</h1>
                </div>
            
                <br>
            <h5><a href="/decklists/1_1">Decklist</a></h5>
            <br>

                <h2 class="mmg">Hand #1:</h2>
            <h3 class="mmg">On the play vs. BR Hollow One</h3>

            <img src="https://i.imgur.com/4YqV1Q1.png" class="mmg" alt="hand 1">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>The above hand is the type of hand that I hate to see after mulliganing to 6. Bluntly, this hand is bad. It lacks Path to Exile or Dismember for the opponent's early Hollow One/Gurmag Angler, and its only land is a painland against an aggressive deck. In addition, the second Aether Vial is almost as bad as the fact that the only two creatures are a 3 and a 4 drop. While I love Relic of Progenitus against BR Hollow One, it will be too slow if a land is not found within the first two cards (scry helps dig for the land), as the turn 1 play has to be Aether Vial, and often Relic of Progenitus has to be cracked on their second turn else its too late. If this hand was a 7 card hand, I would for sure mulligan (it does not matter what the 7th card is). However, there is actually a significant risk to mulliganing to 5. With this hand, there is technically a "curve"- turn 1 Aether Vial, turn 2 play a second 1 drop, and hopefully find something to cast/vial in by turn 3. Kitchen Finks is also a card that can buy a lot of time, especially when blinking with a Restoration Angel after chump blocking. While it is rough, the last thing that I want to have happen is see an unplayable hand on 5, as the chances of winning on 4 or less is practically zero. With all being considered, I would begrudgingly keep this hand, and plan on scrying to a land.</p>
                </div>
                <div class="col-sm-4">
                    <h3 class="mmg">Community's Response:</h3>
                    <br>
                    <h4 class="mmg" id="mmg1k"></h4>
                    <h4 class="mmg" id="mmg1m"></h4>
                </div>
            </div>
            <br>
            <hr>
            <h2 class="mmg">Hand #2:</h2>
            <h3 class="mmg">On the play vs. unknown deck</h3>
            <img src="https://i.imgur.com/unRs4Z6.png" class="mmg" alt="hand 2">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>A general rule for me is to mulligan hands with 5 lands unless they either have multiple Horizon Canopy or they have very good cards for a specific matchup. In this specific case, it is game 1, so the latter condition can be ruled out. As for the former condition, there are in fact 0 Horizon Canopys in hand, making this a mulligan in my eyes. While a turn 1 Aether Vial into turn two Thalia, Guardian of Thraben is great in the majority of modern matchups, every land or Aether Vial drawn is a dead draw for this hand. In fact, the 5th land is already excessive, as D&T operates fine on just 4 lands.</p>
                </div>
                <div class="col-sm-4">
                    <h3 class="mmg">Community's Response:</h3>
                    <br>
                    <h4 class="mmg" id="mmg2k"></h4>
                    <h4 class="mmg" id="mmg2m"></h4>
                </div>
            </div>
            <br>
            <hr>
            <h2 class="mmg">Hand #3:</h2>
            <h3 class="mmg">On the draw vs. Humans</h3>
            <img src="https://i.imgur.com/pu1MG2x.png" class="mmg" alt="hand 3">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>In the humans matchup, removal spells are key. Double Path to Exile is exactly what is wanted in a hand. However, the fact that there is no second land or Aether Vial makes this hand much weaker. Double Thalia, Guardian of Thraben is also not ideal, but is mostly a minor concern compared to the lack of a second land. As tempting as two Path to Exiles are, the downside of missing lands is too high to warrant a keep. Of note, hitting a second land is not even good- the two drops in this hand (and the matchup as a whole) are not very impactful, so the hand would really have to draw 2 lands within the top 3 cards in order to work out. Due to this risk, I'd go with mulliganing the hand.</p>
                </div>
                <div class="col-sm-4">
                    <h3 class="mmg">Community's Response:</h3>
                    <br>
                    <h4 class="mmg" id="mmg3k"></h4>
                    <h4 class="mmg" id="mmg3m"></h4>
                </div>
            </div>
            <br>
            <hr>
            <h2 class="mmg">Hand #4:</h2>
            <h3 class="mmg">On the draw vs. unknown deck</h3>
            <img src="https://i.imgur.com/En1ZqPp.png" class="mmg" alt="hand 4">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>This is the kind of hand that is very matchup dependent. Double Path to Exile is very good against the creature decks of the format, but is very lackluster against blue-based control and Tron. The other contents of this hand make it more appealing. Aether Vial allows the hand to utilize its utility lands without being behind on mana. Aether Vial is also a very good card against blue-based control game 1, as they often lack answers to it preboard. Aether Vial does help mitigate the cost of double Path to Exile against blue-based control, similarly to how Ghost Quarter makes the hand less vulnerable to tron. While Ghost Quartering without a Leonin Arbiter sucks, the loss is not too bad due to Aether Vial. Finally, Horizon Canopy can help dig for a creature to deploy off of the Aether Vial. Overall, for a no creature Aether Vial hand, this one is pretty good, making it a keep in my books.</p>
                </div>
                <div class="col-sm-4">
                    <h3 class="mmg">Community's Response:</h3>
                    <br>
                    <h4 class="mmg" id="mmg4k"></h4>
                    <h4 class="mmg" id="mmg4m"></h4>
                </div>
            </div>
            <br>
            <hr>
            <h2 class="mmg">Hand #5:</h2>
            <h3 class="mmg">On the draw vs. Mono-G Tron</h3>
            <img src="https://i.imgur.com/FVszlgl.png" class="mmg" alt="hand 5">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>There are not many hands that are going to look exciting against tron on the draw. Often, D&T's hate spells are a turn too slow in this matchup. That being said, this hand is not a bad 6 at all. An Aether Vial is never bad, and sometimes a Leonin Arbiter on the draw is good enough. I see no reason to risk going to 5 with a fair 6 being presented, hence my decision to keep.</p>
                </div>
                <div class="col-sm-4">
                    <h3 class="mmg">Community's Response:</h3>
                    <br>
                    <h4 class="mmg" id="mmg5k"></h4>
                    <h4 class="mmg" id="mmg5m"></h4>
                </div>
            </div>
            <br>
            <hr>
            <h2 class="mmg">Hand #6:</h2>
            <h3 class="mmg">On the play vs. Humans</h3>
            <img src="https://i.imgur.com/Ics2ay2.png" class="mmg" alt="hand 6">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>The synergies are strong with this 7 card hand! Double Ghost Quarter and double Leonin Arbiter can steal the game against the majority of modern decks. However, as it turns out, Humans is in the minority of decks that don't care about Leonin Arbiter + Ghost Quarter. Even on the draw, the humans deck is too fast to be too shaken by a turn 3 double Strip Mine. Without an Aether Vial, we would probably be hurt more by double Ghost Quartering them. The humans deck runs 4 Noble Hierarch and 4 Aether Vial, so if they were to have either on turn 1, than they will still be able to deploy their creatures with ease. While I have won my fair share of games manascrewing a Humans opponent, that is not the primary plan for D&T, and this hand lacks the spells necessary for the matchup. The odds of doing better on 6 are high enough to take the risk versus keep this bad hand, is my overall view.</p>
                </div>
                <div class="col-sm-4">
                    <h3 class="mmg">Community's Response:</h3>
                    <br>
                    <h4 class="mmg" id="mmg6k"></h4>
                    <h4 class="mmg" id="mmg6m"></h4>
                </div>
            </div>
            <br>
            <hr>
            <h2 class="mmg">Hand #7:</h2>
            <h3 class="mmg">On the play vs. unknown deck</h3>
            <img src="https://i.imgur.com/EFB51Aj.png" class="mmg" alt="hand 7">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>This hand is populated with many strong 3 and 4 cmc creatures, along with early interaction in the form of Path to Exile. I do not mind waiting until turn three to cast the creatures in this hand, as they are powerful in most matchups and the removal spell stops the hand from losing to an early Gurmag Angler or similarly sized creature. That being said, the hand lacks the third land to enable that gameplan. Two drawsteps to hit a third land is not a risk worth taking with this hand. Drawing more 3 and 4 drops is a fair possibility, as is hitting something like Aether Vial on turn 3. If the hand consisted of more 1 and 2 drops, I'd be inclined to keep, but the hand is too risky as is. In fact, even with a land found within the first two drawsteps, the hand is still very slow and a better 6 can most likely be found.</p>
                </div>
                <div class="col-sm-4">
                    <h3 class="mmg">Community's Response:</h3>
                    <br>
                    <h4 class="mmg" id="mmg7k"></h4>
                    <h4 class="mmg" id="mmg7m"></h4>
                </div>
            </div>
            <br>
            <hr>
            <h2 class="mmg">Hand #8:</h2>
            <h3 class="mmg">On the play vs. UW Spirits</h3>
            <img src="https://i.imgur.com/c4z6bDe.png" class="mmg" alt="hand 8">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>The above hand is not a bad 1 lander with Aether Vial. Despite the lack of white mana for Path to Exile, Dismember is still very castable. Removal is king in this matchup, so having two spells, even if only 1 is castable as of now, is good enough. The other cards that are needed against spirits are fliers, like the Flickerwisp and especially the Restoration Angel in the hand. With almost every spell being important in the matchup, I'd be very comfortable keeping this hand, even if it is on the slower side due to the lack of a land to cast Path to Exile.</p>
                </div>
                <div class="col-sm-4">
                    <h3 class="mmg">Community's Response:</h3>
                    <br>
                    <h4 class="mmg" id="mmg8k"></h4>
                    <h4 class="mmg" id="mmg8m"></h4>
                </div>
            </div>
            <br>
            <hr>
            <h2 class="mmg">Hand #9:</h2>
            <h3 class="mmg">On the draw vs. Jeskai Control</h3>
            <img src="https://i.imgur.com/MFaxLTi.png" class="mmg" alt="hand 9">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>This is an interesting hand. I do love Aether Vial against blue control, and double Thalia, Guardian of Thraben is pretty nice in the matchup. While multiple graveyard hate spells is usually bad to have in hand against Jeskai Control, the fact that Relic of Progenitus is able to cycle helps lower that downside. The main downside worth noting is that this hand does lose to Stony Silence, but I'm not too worried about that card against Jeskai Control as opposed to, for example, UW Control. Even if they have a Wear // Tear to answer the Aether Vial (much more likely than Stony Silence), the two Relic of Progenituses can help dig for lands needed to cast these spells. Thus I'd keep this 7 card hand.</p>
                </div>
                <div class="col-sm-4">
                    <h3 class="mmg">Community's Response:</h3>
                    <br>
                    <h4 class="mmg" id="mmg9k"></h4>
                    <h4 class="mmg" id="mmg9m"></h4>
                </div>
            </div>
            <br>
            <hr>
            <h2 class="mmg">Hand #10:</h2>
            <h3 class="mmg">On the draw vs. unknown deck</h3>
            <img src="https://i.imgur.com/aqa0MoN.png" class="mmg" alt="hand 10">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>Normally, I really hate keeping 1 land hands with Aether Vial on the draw game 1, as the risk of a turn 1 Thoughtseize or Inquisition of Kozilek is too high. The difference with this hand is it has a second Aether Vial, so it is immune to turn 1 discard. While artifact hate is always a concern, the only common maindeck answers to an Aether Vial cost 3 mana, which would be too slow to ruin this hand. In addition, it contains a 1, 2, and 3 cmc creature, which makes a nice curve. All in all, I would confidently keep this 6 card hand.</p>
                </div>
                <div class="col-sm-4">
                    <h3 class="mmg">Community's Response:</h3>
                    <br>
                    <h4 class="mmg" id="mmg10k"></h4>
                    <h4 class="mmg" id="mmg10m"></h4>
                </div>
            </div>
            <br>
            <br>
            <p>While the game is officially over, an archive of August's Mulligan Game is available below:</p>
            <h2><a href="archive02">August's Mulligan Game (OLD)</a></h2>
            <br>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h2><a href="1" id="prev">Previous Mulligan Game Analysis</a></h2>
                </div>
                <div class="col-sm-6">
                    <h2><a href="../mulligans#mg" id="mgrec">Current Mulligan Game (Live now)</a></h2>
                </div>
            </div>

            <div class="extra-space"></div>
            </div>
            
            <script>var jArray = <?php echo json_encode($listOfCardNames); ?>;</script>
                <script src="/loadcardhoversettings.js"></script>
            
            <?php
                include("../../scripts/footer.php");
            ?>
            <script>var jStr = <?php echo json_encode($lastModDate); ?>;</script>
            <script type="text/javascript" src="/loadpublishinfo.js"></script>
    </body>
</html>



