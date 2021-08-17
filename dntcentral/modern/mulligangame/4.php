<?php
    include("../../scripts/searchscript.php");
    include("../../scripts/cardlistdb.php");
?>
<?php
    $filename = '4.php';
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
    $sql = "SELECT choice, keepormull FROM october2018results";
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

    

        <title>Modern Mulligan Game- October 2018 Results</title>
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
                    <h1>Modern Mulligan Game: October 2018 Results</h1>
                </div>
            
                <br>
            <h5><a href="/decklists/2_2">Decklist</a></h5>
            <br>

                <h2 class="mmg">Hand #1:</h2>
            <h3 class="mmg">On the play vs. unknown deck</h3>

            <img src="https://i.imgur.com/3xRnhyK.png" class="mmg" alt="hand 1">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>Not often will a hand be mulliganed that contains an Aether Vial. However, in this specific instance, the hand is very slow and clunky- 5 lands is unideal, as is a 4 drop (Restoration Angel). There are many matchups where cycling a Horizon Canopy in search of a turn 3 play is simply too slow. In addition, the last thing you want playing Death and Taxes is to flood out while having an Aether Vial in play. If I knew the matchup, I may keep, but the hand is just too slow in too many matchups to warrant a keep, making this a mulligan in my eyes.</p>
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
            <h3 class="mmg">On the draw vs. BR Hollow One</h3>
            <img src="https://i.imgur.com/rH6uf8c.png" class="mmg" alt="hand 2">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>The above hand is a very awkward hand: no white mana for the spells, plus a lack of graveyard hate/Aether Vial to smooth out the gameplan. That being said, Path to Exile is premier in this matchup: removing their early drop can save not only valuable lifepoints but also the opponent's ability to deploy Flamewake Phoenixes. Utilizing the scry to search for a white source (to avoid Ghost Quartering ourselves) also justifies this hand. Even if a white source is not found, Ghost Quartering one of our lands is not too bad in this scenario. Finally, going to 5 is very rough (as this is already a 6 card hand), so I'd be more inclined to keep sketchy hands on 6 versus 7. All in all, I'd keep this fair hand.</p>
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
            <img src="https://i.imgur.com/dtEZ4ee.png" class="mmg" alt="hand 3">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>The hand presented above is not a bad one- 2 Wall of Omens can buy time against Humans, while an Eldrazi Displacer can take over the late game. That said, the hand is very rough for being on the draw. For starters, not only is it missing a third land, but it is also lacking a colorless source for the Thought-Knot Seer and Eldrazi Displacer in hand. Hitting a land is not too big of a risk (as the hand has two Wall of Omens which can help dig), but there are only 12 colorless lands available to hit. In addition, the two lands in the hand are Horizon Canopy. I'm not hating on this particular land- its great in so many matchups and can prevent flood- but the life loss is brutal against an aggro deck when on the draw. To top things off, the lack of a removal spell can make the hand die so fast. I doubt the hand can beat a turn two Mantis Rider or a huge Thalia's Lieutenant/Champion of the Parish. Therefore, despite the good cards, the hand is too slow and too painful to keep in this matchup on the draw.</p>
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
            <h3 class="mmg">On the play vs. UW Control</h3>
            <img src="https://i.imgur.com/RTpBJ92.png" class="mmg" alt="hand 4">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>One of Aether Vial's best matchups is against UW Control. To get me to mulligan a hand with Aether Vial against UW, the hand has to be unplayable. Sadly, that happens to be the case here. 6 lands is just too many to keep in this matchup, even if two of them can cycle (Horizon Canopy). In addition, if you want to beat UW (especially on the draw), you have to be fast and have a good curve. This hand lacks any good plays past turn one. Sure, you can draw Thalia, Guardian of Thraben into Thought-Knot Seer, but you can also easily draw more lands. The more time you give the UW opponent, the worse hatebears and really any of E&T's creatures get. Turns out, waiting too long to find creatures is bad against a deck full of 4 and 6 mana board wipes. All in all, I'd have to mulligan this hand; too slow.</p>
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
            <h3 class="mmg">On the draw vs. unknown deck</h3>
            <img src="https://i.imgur.com/w72B4qw.png" class="mmg" alt="hand 5">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>A hand like the one above is one I never enjoy keeping, but often do, the reason being it's the "safe choice". The last thing I want to do is to find an unplayable hand at 6 and have to go to 5, or worse, keep a worse hand at 6 in fear of going to 5. By saying this, I'm not justifying keeping bad hands- but there are some hands that are technically "bad", but are also very playable. The hand above has a mix of lands and spells, a curve, and also a solid late game. In addition, as we're on the draw, there is a very good chance an Aether Vial or Path to Exile can help fix the power level of the hand. Plus, there are a fair sum of modern decks that struggle to beat a Thalia, Guardian of Thraben. While I hate hands like this, I'd have to keep it, as it is very playable and not too slow or clunky compared to the average E&T hand.</p>
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
            <h3 class="mmg">On the play vs. Titan Shift</h3>
            <img src="https://i.imgur.com/z1SWIpU.png" class="mmg" alt="hand 6">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>Land destruction lands like the Ghost Quarter and Field of Ruin in hand are among the best cards in the matchup. That said, the rest of the hand is severely underwhelming. Neither hatebear is present, nor is an Aether Vial here to smooth things out. In addition, the hand cannot even cast a single card (except Path to Exile by Ghost Quartering your own land, which is the last thing you want to do versus Titan Shift). Sadly, while Thought-Knot Seer and the above lands are great at disrupting the opponent's deck, the hand is lacking early plays and lands to cast the expensive spells above, making it a mulligan.</p>
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
            <h3 class="mmg">On the draw vs. BG Midrange</h3>
            <img src="https://i.imgur.com/1oLYkTx.png" class="mmg" alt="hand 7">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>A hand without creatures is typically a mulligan. However, this hand is unique- 2 removal spells, plus a Gideon, Ally of Zendikar provokes some thought. While there is a good chance Gideon, Ally of Zendikar doesn't even get cast against the Thoughtseize deck, the double removal spells can buy a large sum of time. In addition, if this hand were to flood out, Horizon Canopy is a great land at mitigating the damage of a land flood. Another point worth pondering is that, on the draw against a grindy deck, the last thing you want is to mulligan- card advantage is key. Overall, I would keep the above hand.</p>
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
            <h3 class="mmg">On the play vs. Merfolk</h3>
            <img src="https://i.imgur.com/uAlXf8p.png" class="mmg" alt="hand 8">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>Dismember and Path to Exile are our best cards versus Merfolk, but the hand lacks a second land. In fact, the hand even lacks a white source to cast said Path to Exile. Sadly, this hand is a must-mulligan.</p>
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
            <h3 class="mmg">On the play vs. unknown deck</h3>
            <img src="https://i.imgur.com/fUgQtr6.png" class="mmg" alt="hand 9">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>The lack of a third land is risky, as is the lack of enter the battlefield creatures to pair with the three flicker fliers in hand. However, Thalia, Guardian of Thraben is a very nice creature to have in hand on the play. Also, as this is a six-card hand, scrying into the third land or maybe a Wall of Omens is not too unreasonable. While the hand can brick on the third land and lose to itself, I doubt a better 5 can be found, making me compelled to keep it.</p>
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
            <img src="https://i.imgur.com/X4sXqpV.png" class="mmg" alt="hand 10">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>The above hand lacks a white source to allow a smooth curve. In addition, it even lacks a third land for the Flickerwisp and Blade Splicer in hand. However, as it is on the draw, the odds of hitting a white source (or an Aether Vial on turn 1) are not too low. Plus, upon failing to find the white source, Ghost Quartering the Eldrazi Temple to play the Wall of Omens can help dig for more lands and still keep a decent curve/gameplan. Overall, I'd lean toward keeping this hand.</p>
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
            <p>While the game is officially over, an archive of October's Mulligan Game is available below:</p>
            <h2><a href="archive04">October's Mulligan Game (OLD)</a></h2>
            <br>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h2><a href="3" id="prev">Previous Mulligan Game Analysis</a></h2>
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