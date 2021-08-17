<?php
    include("../../scripts/searchscript.php");
    include("../../scripts/cardlistdb.php");
?>
<?php
    $filename = '3.php';
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
    $sql = "SELECT choice, keepormull FROM september2018results";
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

    

        <title>Modern Mulligan Game- September 2018 Results</title>
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
                    <h1>Modern Mulligan Game: September 2018 Results</h1>
                </div>
            
                <br>
            <h5><a href="/decklists/1_2">Decklist</a></h5>
            <br>

                <h2 class="mmg">Hand #1:</h2>
            <h3 class="mmg">On the draw vs. Jeskai Control</h3>

            <img src="https://i.imgur.com/sftpRHy.png" class="mmg" alt="hand 1">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>The above is a fine hand to keep versus a blue control deck, as Thalia, Guardian of Thraben and Leonin Arbiter are great disruptive creatures. Similarly, Path to Exile can deal with a postboard threat, which is nice insurance. The land destruction is also essential against Jeskai, as it is fairly easy to disrupt their manabase. All in all, a solid keep. I don't like having a hand like this on the draw versus control, as it lacks value cards, but Jeskai Control is much more fragile manabase wise than other control decks, so the land destruction in hand coupled with hatebears should do some serious damage.</p>
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
            <h3 class="mmg">On the play vs. BR Hollow One</h3>
            <img src="https://i.imgur.com/cAK7eBs.png" class="mmg" alt="hand 2">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>A hand without a turn 1 play or removal is sketchy versus BR Hollow One, but Rest in Peace is an amazing card in the matchup. The deck can still spit out a few Hollow Ones out on turn two, but D&T should be able to beat it. Overall, a keep for sure, even if it appears a tad bit slow. I'd probably keep this hand on the draw as well, as Rest in Peace is just too good.</p>
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
            <h3 class="mmg">On the play vs. Jund</h3>
            <img src="https://i.imgur.com/Yc7gO4f.png" class="mmg" alt="hand 3">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>A handful of powerful spells are present here, but a lack of multiple lands makes this hand poor. If an Aether Vial replaced one of the four drops, this would be a fine keep. However, as that is not the case, the hand is too risky to keep. Thraben Inspector is the only definite spell to be cast by this hand (as Jund runs plenty of discard), plus only 1 drawstep to hit second land is not good odds. Even if a land is hit, there are still two 4 drops rotting in the hand. The only way to ever cast either of them is through drawing three lands in a row, which would be this hand's curve awkward (lack of a three drop). Even though it is already a 6, I'd have to go with mulliganing this one.</p>
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
            <h3 class="mmg">On the draw vs. Mardu Pyromancer</h3>
            <img src="https://i.imgur.com/jjwJBmo.png" class="mmg" alt="hand 4">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>The above hand contains many powerful cards in the matchup. Gideon, Ally of Zendikar is a powerhouse against Mardu, while Eldrazi Displacer is excellent at making quick work of their Lingering Souls tokens. Despite said sheer power, the hand lacks not only a third land, but a white source entirely. Aether Vial does help justify this hand, but the deck runs plenty of discard to strip it out of our hand. The hand is just overall too unstable and can easily fall apart if it misses lands or faces discard, which prompts me to mulligan it.</p>
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
            <h3 class="mmg">On the play vs. BR Hollow One</h3>
            <img src="https://i.imgur.com/pIhu9fY.png" class="mmg" alt="hand 5">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>As discussed many times, 1 lander hands with Aether Vial have a few conditions they must check to be safe keeps. Being on the play certainly helps in this case. In addition, the hand has a pretty decent curve assuming the second land is not found; turn two Relic of Progenitus and Burrenton Forge-Tender into a Thalia, Guardian of Thraben or Auriok Champion plus holding up Relic of Progenitus is not bad in this matchup. I am not pleased to keep a hand without removal against Hollow One, but the graveyard hate plus powerful hatebears does give the hand enough power to warrant a keep. Of note, the opponent could have an Ancient Grudge for our Aether Vial, but odds are it would target the Relic of Progenitus first assuming we miss our second land, so Aether Vial will be able to tick up to two for a relevant creature. In conclusion, the hand's a fairly comfortable keep in my opinion.</p>
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
            <h3 class="mmg">On the draw vs. unknown</h3>
            <img src="https://i.imgur.com/Fs3QnEA.png" class="mmg" alt="hand 6">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>Three 3 drops and an Aether Vial can be too slow in many matchups. The Aether Vial makes this hand very tempting, but in the current modern meta keeping a hand like this is a trap. No interaction on the draw is bad in the majority of matchups. For example, BR Hollow One won't care about our Blade Splicers after spewing multiple 4/4s and 5/5s on turn two. The main appeal to keep this hand, aside from Aether Vial, is the potential of drawing into interaction like Path to Exile or a hatebear being non-zero. However, keeping a 7 card hand on the hope of your draws to fix it is never a good idea, hence my decision to mulligan: just too slow.</p>
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
            <h3 class="mmg">On the draw vs. unknown deck</h3>
            <img src="https://i.imgur.com/Ksijz0K.png" class="mmg" alt="hand 7">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>Yet another classic one land hand with Aether Vial. While double Aether Vial is typically a tax, in this specific instance it protects our hand from turn one Inquisition of Kozilek/Thoughtseize. In addition, the hand has a fairly nice curve that isn't too slow. All in all, I'd keep this hand.</p>
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
            <img src="https://i.imgur.com/TpfEJUe.png" class="mmg" alt="hand 8">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>The above, while lacking Aether Vial, is a fine 7 card hand. A turn two Thalia, Guardian of Thraben into a Blade Splicer the next turn is a solid curve. Of note, the Akroma, Angel of Fury in hand is a fairly dead card without a blinker, but with 11 in the deck it should not be too big of an issue. Plus, if the hand floods, the land-destruction lands and Horizon Canopy help mitigate the damage. A good keep in the dark.</p>
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
            <h3 class="mmg">On the draw vs. BR Bridgevine</h3>
            <img src="https://i.imgur.com/J5TgDva.png" class="mmg" alt="hand 9">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>In most cases, I would be happy to see this 7 card hand. However, against an explosive graveyard deck, this hand is simply too slow. Especially on the draw, you need graveyard hate in hand or an amazing hand to keep against Bridgevine. As neither are the case, I cannot feel comfortable keeping the above hand in this matchup. Even a Path to Exile would go a long way in making this hand playable.</p>
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
            <img src="https://i.imgur.com/ayn7yY1.png" class="mmg" alt="hand 10">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>A hand with two Aether Vials is never a hand that feels great to keep. However, the above hand has a very solid curve that will be hard to beat on a mulligan to 6 reliably. Also having an Aether Vial on the play is typically very powerful for this deck, as it can go a long way in disrupting the opponent's gameplan while pressuring them with creatures. Despite the dead Aether Vial, I'd absurdly keep the hand presented here.</p>
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
            <p>While the game is officially over, an archive of September's Mulligan Game is available below:</p>
            <h2><a href="archive03">September's Mulligan Game (OLD)</a></h2>
            <br>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h2><a href="2" id="prev">Previous Mulligan Game Analysis</a></h2>
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