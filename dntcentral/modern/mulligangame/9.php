<?php
    include("../../scripts/searchscript.php");
    include("../../scripts/cardlistdb.php");
?>
<?php
    $filename = '9.php';
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
    $sql = "SELECT choice, keepormull FROM march2019results";
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
    //$numberOfVoters += 2; //missing 4 and 7 cuz comments glitched for some weird reason
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

    

        <title>Modern Mulligan Game- March 2019 Results</title>
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
                    <h1>Modern Mulligan Game: March 2019 Results</h1>
                </div>
            
                <br>
            <h5><a href="/decklists/2_5">Decklist</a></h5>
            <br>

                <h2 class="mmg">Hand #1:</h2>
            <h3 class="mmg">On the play vs. unknown deck</h3>

            <img src="/images/modern/mulligangame/9/hand1.png" class="mmg" alt="hand 1">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>The above hand lacks a third land for the two Eldrazi Displacers in hand. It is also vulnerable to drawing all three and four drops. That being said, the odds of hitting the third land is favorable, so the risk is minimal. In addition, Modern is a format full of creature decks, so the two Path to Exiles are quite valuable. The worst matchups for Mono-W Eldrazi and Taxes are creature heavy decks like Humans and Elves, matchups where Path to Exile excels in. All the facts considered, I would gladly keep this hand, as it contains valuable cards and just needs a single land to fully "get there".</p>
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
            <img src="/images/modern/mulligangame/9/hand2.png" class="mmg" alt="hand 2">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>The above hand is one with a good mix of lands and spells. Unlike the prior hand, this one contains three lands. That being said, it has three four converted mana cost creatures. The only reason this hand is not an automatic mulligan for me is that it contains Eldrazi Temple. With Eldrazi Temple, the hand has an alright curve of turn two Eldrazi Displacer into turn three Thought-Knot Seer. That is a little slow for the draw, but the odds of finding a much better hand on a mulligan to six is not very high. Plus, as this hand is on the draw, there is a good chance that a hate bear or even a second Eldrazi Temple is found to smooth out the curve. This hand is definitely risky, but I would hedge on keeping it, as it has a fine curve and contains powerful creatures.</p>
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
            <img src="/images/modern/mulligangame/9/hand3.png" class="mmg" alt="hand 3">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>The above hand is not great. Leonin Arbiter, two lands, and a Path to Exile is not bad to see. However, two Restoration Angels makes the above hand quite poor. All that said, this is already on a mulligan. The only issue with the hand is the two Restoration Angels. A mulligan to five would only be better if all five cards work well with the hand, as mulliganing results in losing a card. And if even one of the cards in the mulligan to five do not work with the rest of the hand, it would be worse than this above hand. I do not like keeping the above hand, but the math favors keeping it. The good news is that the scry can help dig for more land to cast these Restoration Angels.</p>
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
            <img src="/images/modern/mulligangame/9/hand4.png" class="mmg" alt="hand 4">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>The above hand is riskier than it looks. Since it is on the draw, a turn one Thoughtseize or Inquisition of Kozilek can result in the hand falling apart. In addition, the hand contains three four-drops and no Eldrazi Temple, making it a slow mess. If this hand was on the play, I would keep it and plan to lean on Aether Vial and Leonin Arbiter plus Ghost Quarter. However, that plan is too slow on the draw, as the first four-drop would come down on turn five through Aether Vial. All that being said, drawing a couple of lands or some cheaper creatures can help fix this hand. I personally do not feel very comfortable keeping this hand, but it is a very close choice.</p>
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
            <h3 class="mmg">On the play vs. unknown deck</h3>
            <img src="/images/modern/mulligangame/9/hand5.png" class="mmg" alt="hand 5">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>The above hand is quite interesting. Two Path to Exiles can help buy time, but the only "white" mana is available by Ghost Quartering your own Eldrazi Temple. Aether Vial is only good if the hand draws cheaper creatures, as Aether Vialing four drops is not a great strategy in Modern unless cheaper creatures can be found earlier. Despite Aether Vial being present, I do not like keeping this hand. The cards have no synergy with each other and the hand needs to hit a white source to really do anything, and even then the hand is quite slow. </p>
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
            <img src="/images/modern/mulligangame/9/hand6.png" class="mmg" alt="hand 6">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>The above hand is perhaps the worst one presented so far. Not only does it lack Aether Vial, but it lacks both a third land and a real white source. Furthermore, the hand has only one spell that costs less than three mana, and three that cost four mana. If the two Ghost Quarters were Eldrazi Temples, I would keep this hand hoping that two fast Thought-Knot Seers get there. However, this hand needs to hit two lands in order to cast all the spells in the hand. Hoping to draw two lands is not the type of hand you want to keep. Therefore, this is an easy mulligan in my book.</p>
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
            <img src="/images/modern/mulligangame/9/hand7.png" class="mmg" alt="hand 7">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>The above hand is yet another two land hand with three four-drops. Thankfully, Eldrazi Temple and Plains make the situation less awkward, but the hand is still dicey. Path to Exile also helps the hand, but not enough to make it a keepable seven. Not only are two lands necessary to cast all the spells, but only three turns are available to hit two lands (as the hand is on the play instead of on the draw). Therefore, I would mulligan this hand and look for a faster, smoother six-card hand.</p>
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
            <h3 class="mmg">On the draw vs. unknown deck</h3>
            <img src="/images/modern/mulligangame/9/hand8.png" class="mmg" alt="hand 8">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>The above hand is very similar to the fourth hand in this Mulligan Game. Two lands and Aether Vial are presented as the mana sources for this hand, while expensive creatures populate the rest of it. Plus, the hand is on the draw, making it vulnerable to turn one discard just like the other hand. The main difference with the above hand is that the creatures are much easier to cast. Only two of the creatures are four-drops. Thought-Knot Seer and Eldrazi Displacer, which are both present in the hand, get powered out with the Eldrazi Temple present. All this hand needs is a single land by turn three to cast three out of four of the creatures in hand. Furthermore, Eldrazi Displacer acts as a valid two drop with the Eldrazi Temple present. All of these small factors make this hand much stronger than the fourth hand of this Mulligan Game. Therefore, I would certainly keep this hand, as it works well regardless of whether Aether Vial's cast or not.</p>
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
            <img src="/images/modern/mulligangame/9/hand9.png" class="mmg" alt="hand 9">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>The above hand is a risky mulligan to six. The only spell that can be cast is Phyrexian Revoker, with two four drops and a Flickerwisp rotting in the hand. Since the above hand is set on the play, it is less likely that the lands to cast these creatures are found. Ultimately, the decision to keep or mulligan the above hand is based on how much risk you wish to take. My biggest qualm with the hand is that it feels too slow for an Eldrazi and Taxes hand on the play. Without an Eldrazi Temple, Path to Exile, Aether Vial, or impactful hate bear, the hand does not do much against the fast decks in the Modern format. While mulliganing to five never feels great, going to six on the play already puts us down on cards quite a bit. Winning an attrition-based game on a mulligan to six on the play is not easy, so trying to go under the opponent through taxing and cheap creatures is our best strategy. Therefore, as this hand does not disrupt fast, I would mulligan and look for a fast five-card hand.</p>
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
            <img src="/images/modern/mulligangame/9/hand10.png" class="mmg" alt="hand 10">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>The above hand is a weak one. Phyrexian Revoker is a very matchup-dependent hate bear, while Flickerwisp does not do much without an Aether Vial, blinker, or Blade Splicer. Thought-Knot Seer is rather slow without an Eldrazi Temple, especially when on the draw. Finally, with four lands, the above hand is vulnerable to flooding. All the negatives aside, however, the hand is actually alright. It does have a curve of Phyrexian Revoker into Flickerwisp into Thought-Knot Seer. In addition, with two Horizon Canopies, the hand is less vulnerable to flooding compared to the average four-land hand. Finally, as the hand is on the draw, there is a very high chance that a more impactful three drop such as Blade Splicer or Eldrazi Displacer is drawn before Flickerwisp comes in. Therefore, this hand is a fine keep in the dark, as it has a mix of lands and spells. Plus, this hand does not technically need to draw certain cards in order to work- the creatures are fine on their own and castable by the lands available.</p>
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
            <p>While the game is officially over, an archive of March's Mulligan Game is available below:</p>
            <h2><a href="archive09">March's Mulligan Game (OLD)</a></h2>
            <br>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h2><a href="8">Previous Mulligan Game Analysis</a></h2>
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


