<?php
    include("../../scripts/searchscript.php");
    include("../../scripts/cardlistdb.php");
?>
<?php
    $filename = '6.php';
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
    $sql = "SELECT choice, keepormull FROM december2018results";
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

    

        <title>Modern Mulligan Game- December 2018 Results</title>
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
                    <h1>Modern Mulligan Game: December 2018 Results</h1>
                </div>
            
                <br>
            <h5><a href="/decklists/2_2">Decklist</a></h5>
            <br>

                <h2 class="mmg">Hand #1:</h2>
            <h3 class="mmg">On the play vs. unknown deck</h3>

            <img src="https://i.imgur.com/5vkrrMr.png" class="mmg" alt="hand 1">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>No Aether Vial nor a creature with converted mana cost two is not an ideal hand. Modern is currently very fast and therefore punishes slow hands from "midrange" decks like Eldrazi and Taxes. However, thanks to Eldrazi Temple, the hand has a reasonable curve. A turn two Eldrazi Displacer into either a Thought-Knot Seer or Blade Splicer is not bad for this deck. In addition, if against a faster creature deck, Path to Exile can help buy time. Being on the play is yet another upside to this hand- a turn three Thought-Knot Seer on the play is much better than on the draw against the many decks that can have explosive or even game-winning plays on their turn three. Overall, I would keep this hand on the play against an unknown deck with its reasonable gameplan.</p>
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
            <h3 class="mmg">On the draw vs. unknown deck</h3>
            <img src="https://i.imgur.com/9xpDNcu.png" class="mmg" alt="hand 2">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>The next hand looks significantly worse than the prior one. While Aether Vial helps mitigate the downside of a one land hand, being on the draw means that a discard spell would ruin this hand. Even if there are lands on top, it means that a creature would not be in play until turn three on the draw, which is simply too slow for the current Modern meta. Mulliganing to five never feels great, but that does not justify keeping a hand that requires no turn one discard and a ton of luck to win with. Therefore, I feel that it is better to gamble at five than keep a bad six.</p>
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
            <h3 class="mmg">On the play vs. unknown deck</h3>
            <img src="https://i.imgur.com/yHK7go8.png" class="mmg" alt="hand 3">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>Being on the play with a slower hand is better than being on the draw. That being said, a hand lacking any spell that can be cast before turn three is a red flag. Against some decks a hand with three powerful creatures and lands to cast said creatures is fine, but many Modern decks would simply get ahead too fast for that hand to work. Combo decks can win before the above hand can start attacking, aggressive decks can snowball out of control, and slower decks can get ahead through accumulating card advantage. When almost every deck gets an edge against a given hand, that hand should be mulliganed. Therefore, without any knowledge on the match, I would certainly mulligan this slow hand.</p>
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
            <h3 class="mmg">On the play vs. unknown deck</h3>
            <img src="https://i.imgur.com/tfRh1l1.png" class="mmg" alt="hand 4">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>Similar to the second hand, a one land Aether Vial hand is present after mulliganing once. However, there are two key differences that give this hand a vital edge. First of all, the hand does not fold to a turn one discard spell. Not only is it on the play, but it also contains an extra Aether Vial in case of some main deck artifact removal such as Qasali Pridemage or Assassin's Trophy. Additionally, the hand has creatures that cost two mana. Two Wall of Omens not only help mitigate the blow an aggressive deck can deal, but they also help dig for more creatures or lands to smooth out the six card hand. Therefore, because of those two key differences, this hand is good enough for me to feel confident in keeping it. </p>
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
            <img src="https://i.imgur.com/uKI2v6a.png" class="mmg" alt="hand 5">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>This hand is one that looks better than it actually is. Lacking Path to Exile or Aether Vial on the draw can make this too slow against the many fast decks dominating Modern. The spells in this hand also do not impact the board much until turn three. A Leonin Arbiter does little on its own, especially against a fetch-less deck like Humans or Hardened Scales Affinity. However, as the matchup is unknown, there is no reason to be aggressively mulliganing. While there are many matchups where this hand would be bad, there are many others that a slower seven is better than sacrificing a card to gamble for a better hand. This hand also has an alright curve, and can easily be fixed by drawing a more impactful spell like Thalia, Guardian of Thraben or Path to Exile. Therefore, while I am not excited to keep a hand like this, I see little reason to risk a mulligan when the hand has a fair mix of spells and lands.</p>
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
            <h3 class="mmg">On the draw vs. unknown deck</h3>
            <img src="https://i.imgur.com/GRfG7wt.png" class="mmg" alt="hand 6">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>Unfortanelty, I mistakenly had the same hand as the third hand for the first participants of this mulligan game, so the data might be skewed. That being said, the hand is very similar to the third hand: nothing to cast until turn three outside of an Aether Vial. Unlike that hand, this hand is on the draw, meaning that being slow is even more punishing. While a turn one Aether Vial is excellent, without drawing a two drop, it would not be used until turn four. If this hand was presented on the play, I would hedge toward a keep. However, on the draw, it is too risky to keep a slow hand without a spell that impacts the board until turn three. Therefore, I would mulligan this hand, looking for more early plays and a smoother curve.</p>
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
            <img src="https://i.imgur.com/dLQ6x4W.png" class="mmg" alt="hand 7">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>I again apologize for this hand is a copy of hand three. Anyway, the above hand is an interesting one. Wall of Omens and Path to Exile are good spells to see in an opening hand, especially in a fast creature-centric meta. That being said, three Aether Vials are too many. Typically, a hand with two Aether Vials must be strong enough to justify keeping a "dead" card (although there are several matchups where a second Aether Vial is quite good). However, having two cards that could easily be dead essentially makes this hand a mulligan to five. With that logic, there is no reason not to mulligan for a better six. All in all, because of the plethora of Aether Vials, I would definitely mulligan this hand.</p>
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
            <h3 class="mmg">On the play vs. unknown deck</h3>
            <img src="https://i.imgur.com/AEuvljK.png" class="mmg" alt="hand 8">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>A two, three, and four drop plus four lands looks like a solid hand to keep on the play. If that was all the information available, there would be little reason to mulligan the hand. However, the hand above has many problems that ultimately make it very poor. First of all, the two and three drops do not work very well with the other cards in the hand. Unless the opponent is on a deck with fetch lands, Leonin Arbiter is not doing much with a grip of Plains. Flickerwisp is even worse than Leonin Arbiter here- none of the cards in hand are ones that Flickerwisp wants to blink. No Aether Vial also makes it impossible for Flickerwisp to save a creature from a removal spell. The four drop, Thought-Knot Seer, is an excellent card on its own. However, with the only four lands being Plains, it is impossible to cast the Eldrazi. In order to cast Thought-Knot Seer, a land other than a Plains must be drawn. Even if an Eldrazi Temple or even Ghost Quarter is drawn, that essentially blanks one of the lands already in hand, as Eldrazi and Taxes does not require more than four lands to operate (with the exception of Eldrazi Displacer). And if a colorless land is not found, then the Thought-Knot Seer rots in hand. Therefore, with all things considered, I do not think that the above hand is keepable.</p>
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
            <img src="https://i.imgur.com/HsPIMIH.png" class="mmg" alt="hand 9">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>Four lands is not a good sign when wanting to keep an Eldrazi and Taxes hand. However, the three spells are not bad ones. Path to Exile can buy time against a faster deck, while both Blade Splicer and Flickerwisp can act as threats or defensive creatures. Being on the draw also means that there is one more draw step than being on the play to smooth out the curve and overall game plan. While I am not crazy about a hand like this, I would probably hedge toward keeping it rather than risking a six card hand. Without knowing the matchup, I would not feel the need to mulligan a hand like the one above.</p>
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
            <h3 class="mmg">On the play vs. unknown deck</h3>
            <img src="https://i.imgur.com/4pU7c5C.png" class="mmg" alt="hand 10">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>This hand is very similar to the previous hand. The main difference is that the Flickerwisp was removed. Despite being on six, I would lean toward mulliganing this hand, as a better five could easily be found. Four lands on a mulligan to six on the play feels bad, as it leaves the hand with only two spells. While Blade Splicer is a fine creature, it does not come into play until turn three, which is sometimes too slow against the majority of Modern decks. When you have already mulliganed to six on the play, I like to look for more aggressive, taxing hands rather than ones with slower spells. Mulliganing on the play means that you are down several cards compared to the opponent, making it very difficult to try and win a longer game. Therefore, I would want to mulligan this hand in search of one with a two drop hatebear or Aether Vial.</p>
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
            <p>While the game is officially over, an archive of December's Mulligan Game is available below:</p>
            <h2><a href="archive06">December's Mulligan Game (OLD)</a></h2>
            <br>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h2><a href="5">Previous Mulligan Game Analysis</a></h2>
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

