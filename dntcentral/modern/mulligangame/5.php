<?php
    include("../../scripts/searchscript.php");
    include("../../scripts/cardlistdb.php");
?>
<?php
    $filename = '5.php';
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
    $sql = "SELECT choice, keepormull FROM november2018results";
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

    

        <title>Modern Mulligan Game- November 2018 Results</title>
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
                for(var i=1; i<=10; i++) {
                    setUpProgressBar(i);
                }
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
            
            function setUpProgressBar(count) {
                var choiceK = -1;
                switch(count) {
                    case 1:
                        choiceK = <?=json_encode($choice1K)?>;
                        listOfSpans = document.getElementsByClassName("pb1");
                        
                        break;
                    case 2:
                        choiceK = <?=json_encode($choice2K)?>;
                        listOfSpans = document.getElementsByClassName("pb2");
                        break;
                    case 3:
                        choiceK = <?=json_encode($choice3K)?>;
                        listOfSpans = document.getElementsByClassName("pb3");
                        break;
                    case 4:
                        choiceK = <?=json_encode($choice4K)?>;
                        listOfSpans = document.getElementsByClassName("pb4");
                        break;
                    case 5:
                        choiceK = <?=json_encode($choice5K)?>;
                        listOfSpans = document.getElementsByClassName("pb5");
                        break;
                    case 6:
                        choiceK = <?=json_encode($choice6K)?>;
                        listOfSpans = document.getElementsByClassName("pb6");
                        break;
                    case 7:
                        choiceK = <?=json_encode($choice7K)?>;
                        listOfSpans = document.getElementsByClassName("pb7");
                        break;
                    case 8:
                        choiceK = <?=json_encode($choice8K)?>;
                        listOfSpans = document.getElementsByClassName("pb8");
                        break;
                    case 9:
                        choiceK = <?=json_encode($choice9K)?>;
                        listOfSpans = document.getElementsByClassName("pb9");
                        break;
                    case 10:
                        choiceK = <?=json_encode($choice10K)?>;
                        listOfSpans = document.getElementsByClassName("pb10");
                        break;
                }
                var totalVoteCount = <?=json_encode($numberOfVoters)?>;
                /*document.getElementById(`pbkeep${count}`).innerHTML = `Keep: ${choiceK}`;
                document.getElementById(`pbmull${count}`).innerHTML = `Mull: ${totalVoteCount -choiceK}`;*/

                
                var choicePerc = choiceK / totalVoteCount;
                choicePerc *= 50;
                choicePerc = Math.round(choicePerc);
                
                var listOfSpans;
                //make sure this number is "rounded" to fit # of spans
                //since we are currently doing 10 spans, # must be between 0-10.

                for(var i = 0; i<choicePerc; i++) {
                    listOfSpans[i].style.backgroundColor = "green";
                }
                for(var i = choicePerc; i<50; i++) {
                    listOfSpans[i].style.backgroundColor = "red";
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
                    <h1>Modern Mulligan Game: November 2018 Results</h1>
                </div>
            
                <br>
            <h5><a href="/decklists/2_2">Decklist</a></h5>
            <br>

                <h2 class="mmg">Hand #1:</h2>
            <h3 class="mmg">On the play vs. Counters Company</h3>

            <img src="https://i.imgur.com/5vkrrMr.png" class="mmg" alt="hand 1">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>Keeping one land Aether Vial hands is always a risk, even when on the play. I personally am rather fond of this particular one land hand. Having a removal spell against the Devoted Druid combo deck is exactly what we want in an opening hand for this matchup. In addition, the creatures in hand are not bad ones. While the opponent can bring in artifact hate postboard (cards like Reclamation Sage), the Aether Vial should be able to get enough value before its destroyed. In conclusion, while I'm not completely comfortable keeping the above hand, it has a solid gameplan with good cards for the matchup, making it a keep.</p>
                </div>
                <div class="col-sm-4">
                    <h3 class="mmg">Community's Response:</h3>
                    <br>
                    <h4 class="mmg" id="mmg1k">28 voted Keep (47%)</h4>
                    <h4 class="mmg" id="mmg1m">31 voted Mull (53%)</h4>
                    <br>
                    <div class="pbDiv">
                        <span class="pb1 pb pbleft"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb"> </span><span class="pb1 pb pbright"> </span>

                    </div>
                </div>
            </div>
            <br>
            <hr>
            <h2 class="mmg">Hand #2:</h2>
            <h3 class="mmg">On the draw vs. BG Elves</h3>
            <img src="https://i.imgur.com/9xpDNcu.png" class="mmg" alt="hand 2">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>Another 1 land Aether Vial hand is presented above. The hand is not too different from the prior one- a removal spell is present, along with a fair E&T curve. Again, there is always an inherent risk to keeping hands like this. I usually dislike keeping these kind of hands on the draw, unless the matchup is one that 100% lacks discard. Thankfully, in this case, it is one- elves. In addition, if a land were to be missed on the two draw steps available, Dismembering a key creature like Ezuri, Renegade Leader or an elf lord. Wall of Omens can also help smooth out our draws, digging for lands or interaction. All in all, in this particular matchup, this hand lines up quite well, making it a fair keep.</p>
                </div>
                <div class="col-sm-4">
                    <h3 class="mmg">Community's Response:</h3>
                    <br>
                    <h4 class="mmg" id="mmg2k">23 voted Keep (39%)</h4>
                    <h4 class="mmg" id="mmg2m">36 voted Mull (61%)</h4>
                    <br>
                    <div class="pbDiv">
                        <span class="pb2 pb pbleft"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb"> </span><span class="pb2 pb pbright"> </span>
                    </div>
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
                    <p>The main caviant with this particular hand is that it contains two Thalia, Guardian of Thrabens. In addition, the hand simply lacks lategame, which is very bad versus some modern matchups. As such, this hand is very susceptible to mana flood despite being a two land hand. However, I can't possibly turn down an Aether Vial plus hatebears, especially with only 6 cards. Strong keep, but not a perfect hand.</p>
                </div>
                <div class="col-sm-4">
                    <h3 class="mmg">Community's Response:</h3>
                    <br>
                    <h4 class="mmg" id="mmg3k">53 voted Keep (90%)</h4>
                    <h4 class="mmg" id="mmg3m">6 voted Mull (10%)</h4>
                    <br>
                    <div class="pbDiv">
        <span class="pb3 pb pbleft"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb"> </span><span class="pb3 pb pbright"> </span>
    </div>
                </div>
            </div>
            <br>
            <hr>
            <h2 class="mmg">Hand #4:</h2>
            <h3 class="mmg">On the play vs. BR Hollow One</h3>
            <img src="https://i.imgur.com/tfRh1l1.png" class="mmg" alt="hand 4">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>As much as I like a Thalia, Guardian of Thraben on the play in this matchup (slows down their Goblin Lore), the hand is simply too slow. 5 lands is just too many for an opening hand, and the only two cards are not ones I'm excited about. While Horizon Canopy can be cycled (and two are present), it is probably too slow against a deck that can spit out 4/4s and 5/5s on the first couple of turns. In addition, there are plenty of bad draws available: more lands, Aether Vials, or additional 4 drops. All in all, the hand has too many lands and is too slow for the matchup, making it a mulligan.</p>
                </div>
                <div class="col-sm-4">
                    <h3 class="mmg">Community's Response:</h3>
                    <br>
                    <h4 class="mmg" id="mmg4k">17 voted Keep (29%)</h4>
                    <h4 class="mmg" id="mmg4m">42 voted Mull (71%)</h4>
                    <br>
                    <div class="pbDiv">
        <span class="pb4 pb pbleft"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb"> </span><span class="pb4 pb pbright"> </span>
    </div>
                </div>
            </div>
            <br>
            <hr>
            <h2 class="mmg">Hand #5:</h2>
            <h3 class="mmg">On the draw vs. Mono Green Tron</h3>
            <img src="https://i.imgur.com/uKI2v6a.png" class="mmg" alt="hand 5">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>The above hand is the kind of hand I hate mulliganing. Aether Vial is very good against Mono Green Tron- turns off Oblivion Stone, their 8 artifact cantrips, Walking Ballista, Expedition Map, and other artifacts in the deck. Sadly, however, this hand has a major issue- it lacks pressure. There are two other nonland cards present: Restoration Angel, a 4 drop, and Aether Vial, which gets invalidated by the Stony Silence. Having any tron hosers in hand Damping Sphere, Blood Moon, etc. are useless if they cannot be backed by a fast clock/pressure- Tron players will hard cast Wurmcoil Engines and Karn Liberateds without needing tron. Furthermore, on the draw, a Stony Silence is often too slow: Ghost Quarter is the only surefire way to rid the opponent of tron. In conclusion, I'd have to mulligan this hand.</p>
                </div>
                <div class="col-sm-4">
                    <h3 class="mmg">Community's Response:</h3>
                    <br>
                    <h4 class="mmg" id="mmg5k">30 voted Keep (51%)</h4>
                    <h4 class="mmg" id="mmg5m">29 voted Mull (49%)</h4>
                    <br>
                    <div class="pbDiv">
        <span class="pb5 pb pbleft"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb"> </span><span class="pb5 pb pbright"> </span>
    </div>
                </div>
            </div>
            <br>
            <hr>
            <h2 class="mmg">Hand #6:</h2>
            <h3 class="mmg">On the draw vs. Titan Shift</h3>
            <img src="https://i.imgur.com/jLRbnIV.png" class="mmg" alt="hand 6">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>While its yet another 1 land with Aether Vial (or, in this case, 2), this one at least is against a deck without disruption. However, the rest of the hand looks rough. As already noted, a second Aether Vial is present, which already handicaps the hand. In addition, the hand itself is very clunky and slow. While Leonin Arbiter is premium against Titan Shift, the rest is lacking. Thought-Knot Seer is very bad when its put into play on turn 5 against Titan Shift. While Warping Wail can counter their main combo card (Scapeshift), right now the hand lacks colorless mana to even cast the spell, and with only 12 sources, it is very possible to not hit colorless mana for the entire game. The kinds of cards that would make this hand appealing are land destruction and/or cards that can protect Leonin Arbiter, like Burrenton Forge-Tender. However, as the hand lacks either of these cards, it is just too slow. Leonin Arbiter will die by removal, and Thought-Knot Seer will be too slow. Sadly, a mulligan.</p>
                </div>
                <div class="col-sm-4">
                    <h3 class="mmg">Community's Response:</h3>
                    <br>
                    <h4 class="mmg" id="mmg6k">39 voted Keep (66%)</h4>
                    <h4 class="mmg" id="mmg6m">20 voted Mull (34%)</h4>
                    <br>
                    <div class="pbDiv">
        <span class="pb6 pb pbleft"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb"> </span><span class="pb6 pb pbright"> </span>
    </div>
                </div>
            </div>
            <br>
            <hr>
            <h2 class="mmg">Hand #7:</h2>
            <h3 class="mmg">On the play vs. unknown deck</h3>
            <img src="https://i.imgur.com/zNsdBa3.png" class="mmg" alt="hand 7">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>Two Wall of Omens and two 4 drops is one weak hand. However, it is a nice balance of spells to lands. In addition, the Wall of Omens can help dig for more gas. Overall, a fine hand to keep on the play in the dark.</p>
                </div>
                <div class="col-sm-4">
                    <h3 class="mmg">Community's Response:</h3>
                    <br>
                    <h4 class="mmg" id="mmg7k">46 voted Keep (78%)</h4>
                    <h4 class="mmg" id="mmg7m">13 voted Mull (22%)</h4>
                    <br>
                     <div class="pbDiv">
        <span class="pb7 pb pbleft"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb"> </span><span class="pb7 pb pbright"> </span>
    </div>
                </div>

            </div>
            <br>
            <hr>
            <h2 class="mmg">Hand #8:</h2>
            <h3 class="mmg">On the play vs. Lantern Control</h3>
            <img src="https://i.imgur.com/AEuvljK.png" class="mmg" alt="hand 8">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mmg">Analysis:</h3>
                    <p>An interesting 1 land Aether Vial hand is shown above. The double Stony Silences also put a tax on the hand, even before factoring in the cost of the enchantment with Aether Vial. All that being said, Stony Silence is one hell of a card against Lantern Control. And having a second to beat discard is not insignificant. This is a hand that I can honestly keep one day and mulligan the next. To be safe, I'd mulligan, but would not blame for a keep. The reason for mulliganing is the hand is prone to Pithing Needle effects, and can just never hit a land to cast the two Stony Silences. and Warping Wail</p>
                </div>
                <div class="col-sm-4">
                    <h3 class="mmg">Community's Response:</h3>
                    <br>
                    <h4 class="mmg" id="mmg8k">34 voted Keep (58%)</h4>
                    <h4 class="mmg" id="mmg8m">25 voted Mull (42%)</h4>
                    <br>
                    <div class="pbDiv">
        <span class="pb8 pb pbleft"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb"> </span><span class="pb8 pb pbright"> </span>
    </div>
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
                    <p>While this hand does not do very much in terms of disruption, I like it in the dark. Missing a Thalia, Guardian of Thraben, Leonin Arbiter, or even a Thought-Knot Seer makes the hand prone to any combo deck or one weak to one of said creatures. However, the hand has a fine curve. Turn two Eldrazi Displacer into a Blade Splicer and then some fliers to blink it is very powerful against many decks like Humans. While it may feel slow, especially on the draw, E&T is typically about a turn slower than traditional D&T, making this hand better than it initially seems. All in all, a fine keep.</p>
                    <br>
                    <div class="pbDiv">
        <span class="pb9 pb pbleft"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb"> </span><span class="pb9 pb pbright"> </span>
    </div>
                </div>
                <div class="col-sm-4">
                    <h3 class="mmg">Community's Response:</h3>
                    <br>
                    <h4 class="mmg" id="mmg9k">46 voted Keep (78%)</h4>
                    <h4 class="mmg" id="mmg9m">13 voted Mull (22%)</h4>
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
                    <p>While I generally like 1 land Aether Vial hands on the play, this one does not make the cut. 1 land, 1 Aether Vial, and solely three and four drops is simply too slow. In the majority of matchups, not playing a threat until turn 3 or even 4 is too slow: control will win the later games, Humans will kill you by then, and so on. Generally, my rule of thumb is if the hand lacks a definite turn 3 creature play it is an auto mulligan.</p>
                </div>
                <div class="col-sm-4">
                    <h3 class="mmg">Community's Response:</h3>
                    <br>
                    <h4 class="mmg" id="mmg10k">16 voted Keep (27%)</h4>
                    <h4 class="mmg" id="mmg10m">43 voted Mull (73%)</h4>
                    <br>
                    <div class="pbDiv">
        <span class="pb10 pb pbleft"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb"> </span><span class="pb10 pb pbright"> </span>
    </div>
                </div>
            </div>
            <br>
            <br>
            <p>While the game is officially over, an archive of November's Mulligan Game is available below:</p>
            <h2><a href="archive05">November's Mulligan Game (OLD)</a></h2>
            <br>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h2><a href="4">Previous Mulligan Game Analysis</a></h2>
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

