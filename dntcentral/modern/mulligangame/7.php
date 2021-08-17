<?php
    include("../../scripts/searchscript.php");
    include("../../scripts/cardlistdb.php");
?>
<?php
    $filename = '7.php';
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
    $sql = "SELECT choice, keepormull FROM january2019results";
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
            $numberOfVoters++;
        } else if($row["keepormull"] == "Mull") {
            $numberOfVoters++;
        }
        /*if($row["comment"] != "") {
            $numberOfVoters--;
        } else {
            echo $row["comment"];
        }*/
        
        //echo "id: " . $row["choice"]. " - Name: " . $row["keepormull"];
    }
    //echo "TEST: " . $choice1K;
    $numberOfVoters += 2; //missing 4 and 7 cuz comments glitched for some weird reason
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

    

        <title>Modern Mulligan Game- January 2019 Results</title>
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
                for(var i=1; i<10; i++) {
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
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
          (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-5296235643990630",
            enable_page_level_ads: true
          });
        </script>
        <script src="https://deckbox.org/assets/external/tooltip.js"></script>
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
                    <h1>Modern Mulligan Game: January 2019 Results</h1>
                </div>
            
                <br>
            <h5><a href="/decklists/2_3">Decklist</a></h5>
            <br>

                <h2 class="mmg">Hand #1:</h2>
            <h3 class="mmg">On the draw vs. Colorless Eldrazi</h3>

            <img src="https://i.imgur.com/bR4mq6n.png" class="mmg" alt="hand 1">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>The above hand contains many expensive spells. Thought-Knot Seer and Worship cost four mana, while Blade Splicer is the lone three drop. On the draw, a hand with this little early plays is typically a mulligan. However, that is not the case in this particular matchup. Against Colorless Eldrazi, Eldrazi and Taxes's hatebears (Thalia, Guardian of Thraben and Leonin Arbiter) are the worst cards in the matchup. Wall of Omens is not great either, as many of the opponent's threats have four or greater power, such as Thought-Knot Seer and Reality Smasher. Furthermore, this hand includes the single best cheap spell: Path to Exile. Removal is key, especially against a creature centric deck like Colorless Eldrazi. This hand has no trouble dealing with their smaller creatures, as both Blade Splicer and Thought-Knot Seer block everything. On top of that, Worship is a card the opponent cannot really beat. Therefore, the hand is in fact not too slow- a solid keep in this matchup.</p>
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
            <h3 class="mmg">On the draw vs. Jund</h3>
            <img src="https://i.imgur.com/j2PDVQG.png" class="mmg" alt="hand 2">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>The above hand is very tempting, especially for those who typically keep risky, high payoff hands. If this hand misses lands, it will fall apart. Being on the draw helps mitigate that risk, but it is still something that must be considered. In addition, even if lands are found, the hand is clunky. On the draw, it is hard to outrace Jund, especially lacking hatebears or Aether Vial. Restoration Angel and Flickerwisp are both excellent win conditions against Jund, and the other two creatures in the hand are not bad at gaining tempo. However, without a two drop or lands to cast these powerful creatures, I feel it is too risky to keep this hand. Therefore, I would mulligan this hand, looking for a smoother six-card hand.</p>
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
            <h3 class="mmg">On the draw vs. unknown deck</h3>
            <img src="https://i.imgur.com/gBFwJGt.png" class="mmg" alt="hand 3">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>Aether Vial is a card that loses value in multiples. That being said, it does not hurt to have a backup Aether Vial, especially when exposed to a Thoughtseize. The above hand has a solid curve- Aether Vial into another Aether Vial or Eldrazi Displacer, then hopefully hit a third land in the top three cards to play a Blade Splicer on curve. Eldrazi Displacer plus Blade Splicer is a pretty good combination, especially against the many linear, creature decks in the format. Eldrazi Temple helps pay for Eldrazi Displacer's ability, while Aether Vial allows this hand to use Eldrazi Displacer while still bringing in threats. All in all, the above hand has a strong gameplan, making it a solid keep in my view.</p>
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
            <h3 class="mmg">On the draw vs. Jund</h3>
            <img src="https://i.imgur.com/3aPYKK9.png" class="mmg" alt="hand 4">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>The above hand is another Jund hand that is missing lands. In this case, specifically white mana-producing lands are required to make this hand work. While Ghost Quartering the Eldrazi Temple is an avenue to receive white mana, it is not a great strategy to two for one yourself versus Jund. Furthermore, double Thalia, Guardian of Thraben is not great, especially if the Jund opponent Thoughtseizes turn one. If they do, the opponent can grab the only real threat in the hand (Flickerwisp), leaving it with a dead Thalia, Guardian of Thraben, awkward lands, and niche removal spells. If the hand had an Aether Vial, or a white source, I would be fine with the hand, but as it stands it is too risky and too weak to warrant a keep in this matchup.</p>
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
            <h3 class="mmg">On the play vs. Humans</h3>
            <img src="https://i.imgur.com/esZj3tF.png" class="mmg" alt="hand 5">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>A turn two Thought-Knot Seer, especially against Humans, is very powerful. On top of that, a Dismember to remove their biggest threat helps a ton. Path to Exile and Restoration Angel add further power to the deck... until the land situation is considered. Zero white sources, Ghost Quarters, or Aether Vials is very bad, especially when on the play. If this hand misses on a white source, it will not be able to keep up with Humans. Thought-Knot Seer cannot win the game on its own: eventually the opponent will amass enough creatures to block the Eldrazi. In addition, stumbling on mana is very bad against not only an aggro deck, but a deck that is a bad matchup for Eldrazi and Taxes. Don't get me wrong, this is a very powerful hand, but without a white source or Aether Vial, I do not think it is correct to keep the above hand.</p>
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
            <h3 class="mmg">On the play vs. unknown deck</h3>
            <img src="https://i.imgur.com/pNj9ZP6.png" class="mmg" alt="hand 6">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>A one land hand without an Aether Vial is unacceptable, especially in Eldrazi and Taxes (no Thraben Inspector). To add to that, this hand is on the play, so the odds of hitting a second land is 22/57: less than 50% chance. I would never keep a hand where there is a 50% chance I lose the game. While there are times that missing a land drop is not game-losing, the times where it is are much higher. Modern's current meta includes a plethora of fast, linear decks that punish their opponent for stumbling. Therefore, I would 100% mulligan this hand- it is too risky. Even if a second land is found, only Thalia, Guardian of Thraben is turned on- a third land is necessary to deploy the real threats.</p>
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
            <h3 class="mmg">On the draw vs. Dredge</h3>
            <img src="https://i.imgur.com/cvidvfk.png" class="mmg" alt="hand 7">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>Four two drops and three lands to cast them is a very great Eldrazi and Taxes hand. Two Ghost Quarters add further value to this hand, working with the Leonin Arbiter present. The only way I would mulligan this hand if it was a matchup where you have to mulligan for specific hate pieces. Sadly, this is one of those matchups. Dredge is a deck that cannot win if a Rest in Peace is in play. Therefore, it is correct to aggressively mulligan for graveyard hate spells, such as Rest in Peace. Sometimes, a typical Eldrazi and Taxes hand can cheese a victory against Dredge. However, when on the draw, the opponent is already dredging a lot of their deck. At that point, a graveyard hate spell is required to prevent further damage. If the above hand was on the play against Dredge, I would actually keep it, as the hate pieces are good enough to at least buy time to find a Rest in Peace. On the draw, however, as stated earlier, they are too slow, so I would have to mulligan this hand, searching for Rest in Peace, Grafdigger's Cage, and Remorseful Cleric.</p>
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
            <h3 class="mmg">On the draw vs. KCI</h3>
            <img src="https://i.imgur.com/3KCfzb7.png" class="mmg" alt="hand 8">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>In the latest B&R update, Krark-Clan Ironworks was banned, so this is not relevant anymore. That being said, I will still provide an analysis for this hand.<p>
                    <p>The above hand is too clunky in this matchup. KCI is a fast combo deck, so hate pieces are what we want in a hand. While Path to Exile can prevent them from going off (stopping a Scrap Trawler), three are too many. Thought-Knot Seer is another strong hate piece for the matchup. On the draw, however, it is too slow, especially when there are not enough lands or even a colorless land to cast it. In the postboard KCI matchup, Rest in Peace, Stony Silence, and Thalia, Guardian of Thraben all serve as powerful hate pieces. With none in hand, especially on the draw, I would feel very uncomfortable keeping the hand. All in all, the hand is too clunky and is lacking proper hate cards to warrant a keep in this matchup.</p>
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
            <h3 class="mmg">On the draw vs. unknown deck</h3>
            <img src="https://i.imgur.com/znLQjmH.png" class="mmg" alt="hand 9">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>Four land hands are never exciting keeps, especially when the other cards all cost two mana. Two of the lands, however, are closer to spells than lands. Ghost Quarter works well in this hand, as a Leonin Arbiter is present. Horizon Canopy also cycles in the later stages of the game. In Modern's current meta, there are many decks that have trouble dealing with at least one of the above hatebears. Therefore, I would hedge toward keeping this hand on the draw. While flooding out is a risk, the risk of going to six compounded with the raw power of the hand makes it worthwhile in my opinion.</p>
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
            <h3 class="mmg">On the play vs. Dredge</h3>
            <img src="https://i.imgur.com/kDQq9Qy.png" class="mmg" alt="hand 10">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>No graveyard hate spells against Dredge is very bad. While this hand is on the play, I still want hands that have at least one Rest in Peace or Grafdigger's Cage. Furthermore, unlike the prior Dredge hand, this one lacks hatebears to disrupt the opponent. While I hate mulliganing to five, it is correct in this instance, as we need to dig for graveyard hate.</p>
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
            <p>While the game is officially over, an archive of January's Mulligan Game is available below:</p>
            <h2><a href="archive07">January's Mulligan Game (OLD)</a></h2>
            <br>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h2><a href="6">Previous Mulligan Game Analysis</a></h2>
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


