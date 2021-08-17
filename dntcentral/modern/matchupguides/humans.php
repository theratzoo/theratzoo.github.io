<?php
    include("../../scripts/searchscript.php"); //actually works
    
?>
<?php
    include("../../scripts/cardlistdb.php"); //does work
?>
<?php
    $filename = 'humans.php';
    $lastModDate = date ("F d Y H:i:s.", filemtime($filename));
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

    <meta name="description" content="Modern matchup guide against Humans for Death and Taxes.">
    <meta name="keywords" content="Magic the Gathering, modern, death and taxes, dnt, modern dnt, ent, eldrazi and taxes, humans, aggressive, five color, matchup, thalia">

        <title>Modern Matchup Guide: Humans</title>
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
            }
            
          function previewDeckOne(name) {
            var img = document.getElementById('deckPreviewImgOne');
            img.src = `https://gatherer.wizards.com/Handlers/Image.ashx?name=${name}&type=card`;
            img.alt = name;
          }
          function previewDeckTwo(name) {
            var img = document.getElementById('deckPreviewImgTwo');
            img.src = `https://gatherer.wizards.com/Handlers/Image.ashx?name=${name}&type=card`;
            img.alt = name;
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
            document.getElementById('mgrec').innerHTML = `${n}'s Mulligan Game`;
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
                
            <div class="jumbotron">
                <div class="row">
                    <div class="col-sm-9">
                        <h1>Matchup Guide: Humans (updated)</h1>
                    </div>
                    <div class="col-sm-3">
                        <h2><a href="#tldr">TL;DR</a></h2>
                    </div>
                </div>
                
            </div>
            <div class="row">
                    <div class="col-4 mug-img">
                        <img src="https://i.pinimg.com/originals/4f/d2/e7/4fd2e7e35d30e5590eddb8e8636dd35f.jpg" class="headImg" alt="Meddling Mage">
                    </div>
                    <div class="col-4 mug-img">
                        <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/intermediary/f/28476431-2956-40cd-b05a-30f5f0e1f020/da3yk7e-138aa93e-b747-4be9-9d7a-4750cc4dc93d.jpg/v1/fill/w_1029,h_776,q_70,strp/mtg__thalia_s_lieutenant_by_algenpfleger_da3yk7e-pre.jpg" class="headImg" alt="Thalia's Lieutenant">
                    </div>
                    <div class="col-4 mug-img">
                        <img src="/images/modern/matchupguides/humans/mantis-rider-art.jpg" class="headImg" alt="Mantis Rider">
                    </div>
                </div>
                <br>

                <!--INSERT 2-3 IMAGES SIDE BY SIDE HERE-->
                <br>
                <!--INSERT DECKLIST HERE (that can be collappsed)-->
                <!--INSERT SAMPLE E&T LIST HERE-->
                <div class="panel-group" id="accordion">
            <div class="panel panel-format">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                    Humans Stock List</a>
                  </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                  <div class="panel-body"> 
                    <div class="row decklist">

                <div class="col-sm-6">
                    <table class="table decklist table-condensed table-responsive">
                        <tbody>
                            <tr>
                                <th>Creatures:</th>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Champion of the Parish</a></td>
                                
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Noble Hierarch</a></td>
                                
                            </tr> 
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Kitesail Freebooter</a></td>
                                
                            </tr> 
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Meddling Mage</a></td>
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Phantasmal Image</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Thalia's Lieutenant</a></td>
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Thalia, Guardian of Thraben</a></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Anafenza, the Foremost</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Mantis Rider</a></td>
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Militia Bugler</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Reflector Mage</a></td>
                            </tr>

                            <tr>
                                <th>Artifacts:</th>
                            </tr>
                           <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Aether Vial</a></td>
                                
                            </tr>
                            
                            <tr>
                                <th>Lands:</th>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Ancient Ziggurat</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Cavern of Souls</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Horizon Canopy</a></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Island</a></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Plains</a></td>
                            </tr>  
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Seachrome Coast</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Unclaimed Territory</a></td>
                            </tr>              
                        </tbody>
            </table>
            </div>
            <!-- sideboard -->
            <div  class="col-sm-6">
            <table class="table table-condensed decklist table-responsive">
                <tbody>
                    
                        <tr>
                                <th>Sideboard:</th>
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Auriok Champion</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Damping Sphere</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Kataki, War's Wage</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Dismember</a></td>
                                
                            </tr>

                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Izzet Staticaster</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Knight of Autumn</a></td>
                                
                            </tr>

                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Sin Collector</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Ravenous Trap</a></td>
                                
                            </tr>
                </tbody>
            </table>
            <br>
            <div>
                <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Champion+of+the+Parish&type=card" id="deckPreviewImgOne">
            </div>

            <br>
            
            </div>
                
            </div>

        </div>
                </div>
              </div>

              <br>
              <!-- E&T -->
            <div class="panel panel-format">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                    Sample D&T List- Mono-White Eldrazi and Taxes</a>
                  </h3>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                  <div class="panel-body"> 
                    <div class="row decklist">

                <div class="col-sm-6">
                    <table class="table decklist table-condensed table-responsive">
                        <tbody>
                            <tr>
                                <th>Creatures:</th>
                            </tr>
                            <tr><!--Arbiter-->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Leonin Arbiter</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Remorseful Cleric</a></td>
                                
                            </tr> 
                            <tr><!-- thalia -->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Thalia, Guardian of Thraben</a></td>
                                
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Wall of Omens</a></td>
                                
                            </tr> 
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Blade Splicer</a></td>
                                
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Eldrazi Displacer</a></td>
                                
                            </tr>
                            <tr><!-- flickerwisp -->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Flickerwisp</a></td>
                                
                            </tr> 
                            <tr><!--Resto-->
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Restoration Angel</a></td>
                                 
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Thought-Knot Seer</a></td>
                                
                            </tr>

                            <tr>
                                <th>Spells:</th>
                            </tr>
                           <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Path to Exile</a></td>
                                
                            </tr>
                            <tr>
                                <th>Artifacts:</th>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Aether Vial</a></td>
                                
                            </tr>
                            <tr>
                                <th>Lands:</th>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Eldrazi Temple</a></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Field of Ruin</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Ghost Quarter</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Horizon Canopy</a></td>
                            </tr>
                            <tr>
                                <td>7&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Plains</a></td>
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Shefet Dunes</a></td>
                            </tr>                            
                        </tbody>
            </table>
            </div>
            <!-- sideboard -->
            <div  class="col-sm-6">
            <table class="table table-condensed decklist table-responsive">
                <tbody>
                    
                        <tr>
                                <th>Sideboard:</th>
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Burrenton Forge-Tender</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Grafdigger's Cage</a></td>
                                
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Rest in Peace</a></td>
                                
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Stony Silence</a></td>
                                
                            </tr>

                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Dismember</a></td>
                                
                            </tr>
                            <tr><!-- Gideon -->
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Gideon, Ally of Zendikar</a></td>
                                
                            </tr>

                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Worship</a></td>
                                
                            </tr>
                            
                    
                </tbody>
            </table>
            <br>
            <div>
                <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Leonin+Arbiter&type=card" id="deckPreviewImgTwo">
            </div>

            <br>
            
            </div>
                
            </div>

        </div>
                </div>
              </div>
          </div>
                <h2>Matchup Overview</h2>
                <p>Overall, the matchup is very favorable for Humans, but the favorability changes based on the Death and Taxes build. For instance, Mono-White Death and Taxes is very poor against Humans, while Mono-White Eldrazi and Taxes has more tools to make the matchup closer, albeit still a bad one. The Humans deck's strategy is one that Death and Taxes fails to tax well- win by attacking with creatures. Their deck consists of aggressive humans such as Champion of the Parish, Thalia's Lieutenant, and Mantis Rider to bring the opponent's life total to zero quickly. In addition, disruptive humans give them an edge against combo decks (Meddling Mage, Kitesail Freebooter, and Thalia, Guardian of Thraben). Furthermore, their deck consists of Aether Vial, weakening all of Eldrazi and Taxes's disruptive spells. Restoration Angel, Thought-Knot Seer, Eldrazi Displacer, and Blade Splicer must be relied on to win this match. However, their creatures tend to be more threatening. Postboard, removal and other answers are available to make the matchup closer, but Humans adds their own removal to make the matchup still noticeably unfavorable. All in all, this is one of Eldrazi and Taxes's worst matchups, at about a 40% win rate. While having more sideboard answers and knowledge in the matchup can bring it closer to 45%, decks without Eldrazi Displacer tend to fall as low as sub 35% win rate.</p>
                <hr>
                <h2>Preboard Specifics</h2>
                <br>
                <h3>How Game 1 Plays Out</h3>    
                <p>As suggested above, this whole matchup plays significantly different depending on your version of Death and Taxes. In this guide, I will focus on Mono-White Eldrazi and Taxes, but will include a brief mention of non-Eldrazi and Taxes later.</p>
                <br>
                <p>Eldrazi and Taxes does not match up very well against Humans game one. Both Thalia, Guardian of Thraben and Leonin Arbiter are underwhelming, as their taxing effects are essentially useless. When it comes to Eldrazi and Taxes's other creatures, they are often weaker than what the Humans opponent has to offer. Therefore, the Humans player will often be on the offense, while the Eldrazi and Taxes player will be forced to play defensively. The first several turns are very important for Eldrazi and Taxes to survive. Surviving the first 5-8 turns is very important to winning game one, as Eldrazi and Taxes has a better late-game. As a linear aggro deck, the Humans deck plays out a simple strategy- get creatures into play to win the game. To win, Eldrazi and Taxes must find answers to these threats to preserve their life total and eventually win with value.</p>
                <br>
                <p>Cards such as Blade Splicer and Wall of Omens are used to buy time. Thought-Knot Seer and Eldrazi Displacer are also creatures that can answer the opponent's threats. While drawing Path to Exile is ideal, creatures threatening favorable blocks are often the best answer to Humans's threats. If you manage to survive and cultivate a defense, Eldrazi Displacer can easily take over the game. Activating Eldrazi Displacer a few times a turn, at worst, locks down Humans's best attackers. At best, it can make even more Blade Splicer tokens, preparing for a lethal attack. Without Eldrazi Displacer, however, it is very difficult to effectively answer the opponent's board and future draws. Therefore, the first game leans heavily on both surviving the early turns and then finding an Eldrazi Displacer to abuse. More often than not, however, the opponent will manage to either win with a very fast start or amass a board of huge Thalia's Lieutenants and Champion of the Parishes to attack through Eldrazi and Taxes's defenses.</p>
                <br>
                <h4>Game One for Non-Eldrazi Builds</h4>
                <p>The reason Humans is much worse for Mono-White Death and Taxes and similar non-Eldrazi builds is that they lack Eldrazi Displacer. Without Eldrazi Displacer, the late game is favorable to the Humans opponent, as their threats will be larger than Death and Taxes's threats. While it is technically possible to find enough Blade Splicers, Flickerwisps, and Restoration Angels to get several first strike Golems to defend the ground and fliers to hold back Mantis Riders, the odds are against that. Instead, what typically happens, is that the Humans deck will grow their Thalia's Lieutenants and/or Champion of the Parishes larger than the amount of first strike power on Death and Taxes's side of the board. With every human growing those two creatures, their number of live draws is much higher than Death and Taxes's. Therefore, game one is very difficult for non-Eldrazi builds to win. The fringe victories often stem from anomalies, such as Leonin Arbiter plus Ghost Quarter locking the opponent.</p>
                <br>
                <h3>Death and Taxes's Cards in the Matchup</h3>
                <br>
                <div class="row">
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Thalia,+Guardian+of+Thraben&type=card" class="cardImgMUG" alt="Thalia, Guardian of Thraben">
                    </div>
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Leonin+Arbiter&type=card" class="cardImgMUG" alt="Leonin Arbiter">
                    </div>
                </div>
                <br>
                <p>Both hatebears are terrible in the Humans matchup. Thalia, Guardian of Thraben's tax is often detrimental as Eldrazi and Taxes has more noncreature spells than Humans (especially post-board). There are times where Thalia, Guardian of Thraben works well. The best use of her is preventing small creatures from attacking. Meddling Mage, Thalia's Lieutenant, Champion of the Parish, and Noble Hierarch cannot attack unless they have counters. In addition, Thalia, Guardian of Thraben pairs well with Blade Splicer Golem tokens to stop larger ground creatures from attacking. Thalia, Guardian of Thraben is also one of the first creatures to chump block a large attacker with. Since she is legendary, there are several times where you will have one or two in hand with one in play. The other creature that is commonly thrown in front of a huge Champion of the Parish is Leonin Arbiter. As it turns out, Humans runs zero fetch lands despite being a five-color deck. Aether Vial and Noble Hierarch further lower Leonin Arbiter's power. Still, I have won games through the Leonin Arbiter plus Ghost Quarter combo against Humans. It is very rare to happen but is something that should not be discounted. The majority of the time Leonin Arbiter does very little, trading with a creature at best. Overall, these hatebears are very bad in this matchup and are therefore the first cards to come out of the deck after game one.</p>
                <br>
                <div class="row">
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Wall+of+Omens&type=card" class="cardImgMUG" alt="Wall of Omens">
                    </div>
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Blade+Splicer&type=card" class="cardImgMUG" alt="Blade Splicer">
                    </div>
                </div>
                <br>
                <p>On the other hand, both Wall of Omens and Blade Splicer are excellent creatures against Humans. Wall of Omens is a great value card in this matchup. For two mana, it provides an 0/4 body that will save several life-points, while drawing a fresh card. Wall of Omens often saves roughly the same amount of life as either of the hatebears does, but it also draws a card. While it can also be blinked, that is often saved for Blade Splicer, one of the best cards against Humans. For three mana, you get two bodies, one of which is a 3/3 first striker. The best thing about Blade Splicer is that, by blinking it a few times, it is very easy to amass enough Golems to prevent any of Humans's ground creatures from attacking. Blade Splicer has many uses in this matchup. It can simply chump block two creatures, or it can be brought out through an Aether Vial to eat a small attacker. Blade Splicer tokens can also pressure the opponent, especially relevant when the opponent is on a slower start. The biggest drawback to Blade Splicer is that its Golems can be removed by a Reflector Mage. Otherwise, the versatility and power of this card make it a valuable asset in the Humans matchup, especially on game one. Typically, what you want to do with your Blade Splicer is to play defensively until you can get the Eldrazi Displacer engine going (more on that later). While the card can be used aggressively, it is generally a powerful blocker. Overall, both Wall of Omens and Blade Splicer help alleviate the damage Humans deals games one, through their generation of value and strong blocking ability.</p>
                <br>
                <div class="row">
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" class="cardImgMUG" alt="Flickerwisp">
                    </div>
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Restoration+Angel&type=card" class="cardImgMUG" alt="Restoration Angel">
                    </div>
                </div>
                <br>
                <p>The fliers in Eldrazi and Taxes are the typical win conditions in this matchup. Since the opponent easily gets huge creatures, fliers are necessary to win the game. Flickerwisp tends to be worse than Restoration Angel at attacking since it can be blocked by a Kitesail Freebooter. In addition, Restoration Angel attacks into a Mantis Rider without counters. That being said, both fliers are not typically used to attack the opponent until later stages of the game. If the opponent has a slower start, then it is correct to be as aggressive as possible (especially if they are stumbling on mana). However, if they manage to open with a fast hand than it is better to play defensively until you stabilize. Finding the right balance of attacking and defending with these two fliers is crucial to winning many Humans games, especially without Eldrazi Displacer.</p>
                <br>
                <p>Other than stats, these two creatures have some other tricks that are relevant. First off, Restoration Angel having flash is great for ambushing an attacker. Nothing is more satisfying in this match than a Mantis Rider chump attacking into a Restoration Angel. In addition, both of these fliers can blink a Blade Splicer to get an additional Golem or another creature to save it from chump blocking. Flickerwisps's ability also has some strong interactions against the Humans opponent (as is discussed below), and it can simply stop a threatening creature from attacking. Overall, Flickerwisp and Restoration Angel are great creatures in the matchup. Whether they are generating value, providing a clock, or simply blocking a Mantis Rider, they are contributing to Eldrazi and Taxes's victory in the match.</p>
                <br>
                <div class="row">
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Thought-Knot+Seer&type=card" class="cardImgMUG" alt="Thought-Knot Seer">
                    </div>
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="cardImgMUG" alt="Eldrazi Displacer">
                    </div>
                </div>
                <br>
                <p>The Eldrazi are excellent creatures against Humans. Thought-Knot Seer provides important disruption in the matchup. If it is played early, there is a strong chance it takes one of Humans's vital spells. In addition, Thought-Knot Seer plus Aether Vial is great at taking their top-decked card, assuming the opponent cannot bring it in with Aether Vial. While Thought-Knot Seer does not always exile one of the opponent's threatening creatures, it does consistently provide a menacing body, discouraging smaller creatures from attacking. Thought-Knot Seer gets better the earlier it is played but still has the potential to be disruptive or at least a fine blocker in the later stages of the game. All in all, Thought-Knot Seer is a solid creature against Humans, with relevance in all stages of the game.</p>
                <br>
                <p>Eldrazi Displacer is the best card Eldrazi and Taxes has against Humans. A three mana 3/3 is nothing impressive, but Eldrazi Displacer's activated ability wins games against creature-centric decks like Humans. Generally, Eldrazi Displacer is better in the later turns (5+), as you do not want to feel compelled to chump block or even trade with the Eldrazi. Eldrazi Displacer's ability is very versatile in this particular matchup. The primary use of its ability is to prevent the opponent from attacking with their largest threats. Whether that is achieved by targeting their large Champion of the Parish or block and blink one of your creatures is dependent on the board. Since blinking a Champion of the Parish can trigger other humans and blinking a Thalia's Lieutenant is downright horrible, the best use of Eldrazi Displacer's ability is blinking one of your creatures after blocking their attacker. If there is a Wall of Omens or Blade Splicer in play, then each blink will generate value that can help cultivate an eventual victory. Overall, Eldrazi Displacer is a game-winning creature in the matchup, as its ability can simultaneously generate value while preventing the opponent from attacking.</p>
                <br>
                <div class="row">
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Aether+Vial&type=card" class="cardImgMUG" alt="Aether Vial">
                    </div>
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Path+to+Exile&type=card" class="cardImgMUG" alt="Path to Exile">
                    </div>
                </div>
                <br>
                <p>Aether Vial is fine in this matchup. As usual, Aether Vial is best played turn one, and it is often too slow to cast past that turn unless extra mana is available. Aether Vial's primary strengths in the matchup are cheating mana with an Eldrazi Displacer in play or bringing in blockers at instant speed. With an Eldrazi Displacer on the battlefield, mana becomes very tight, so having Aether Vial cheat creatures into play while Eldrazi Displacer locks down creatures generates valuable tempo. The other strength is one that is especially relevant against Humans. Since Humans is a deck that attacks with initially small creatures, there are often times where you can Aether Vial in a blocker to punish their attack. Restoration Angel, Thought-Knot Seer, and Blade Splicer are the most common ambushers. Bluffing an Aether Vial activation is also valuable, as it can deter the opponent from attacking when you lack a creature to bring in. That being said, Aether Vial is a very bad card to draw, as it does not help alleviate the pain brought by the fast creature deck. All in all, Aether Vial helps accelerate Eldrazi and Taxes's board while providing an avenue to punish lousy attacking.</p>
                <br>
                <p>Path to Exile is, undoubtedly, one of the best spells in Eldrazi and Taxes for this match as a whole. Removing their biggest threat for only one mana (assuming there are not any Thalia, Guardian of Thrabens in play) is a strong play. Generally, it is best to remove a large Thalia's Lieutenant or Champion of the Parish if you cannot find an Eldrazi Displacer and enough mana to prevent those large humans from attacking. Also, with enough first strike damage on board or a surplus of blockers, it is not necessary to prioritize those two creatures with Path to Exile. In those cases, Path to Exile is best pointed at the opponent's Mantis Riders, as they are both a threatening flier and a blocker to Restoration Angel and Flickerwisp. Especially if you lack fliers and/or the Mantis Rider has at least one counter on it, Path to Exile should be used on it. There is a fringe case where Path to Exile can be used on a Meddling Mage. This is only correct if it is naming something in hand that needs to be cast, and that there is not an Aether Vial in play. However, Meddling Mage almost always names Path to Exile in this matchup, so it is a very rare case. The final use of Path to Exile in game one is if the opponent is either about to take your Path to Exile with a Kitesail Freebooter or already has a Path to Exile under Kitesail Freebooter. All of these above decisions are focused only on game one, as games get more complicated when cards like Dismember and Worship are brought in from the sideboard (will be discussed in a later section). Overall, Path to Exile is a valuable spell that needs to be used wisely in this matchup, generally removing their Mantis Rider or large Champion of the Parish/Thalia's Lieutenant depending on the board state.</p>
                <br>
                <p>In terms of other Death and Taxes cards that are not necessarily in this decklist, Phyrexian Revoker is excellent as a way to slow the opponent down. Additional removal spells are always great, especially when the opponent has a Meddling Mage on Path to Exile. Chalice of the Void is bad here, as both Aether Vial and Cavern of Souls mitigate its already low effect.</p>
                <br>
                <div class="row">
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Thalia's+Lieutenant&type=card" class="cardImgMUG" alt="Thalia's Lieutenant">
                    </div>
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Mantis+Rider&type=card" class="cardImgMUG" alt="Mantis Rider">
                    </div>
                </div>
                <br>
                <h3>Cards to Look Out for- Humans</h3>
                <p>In game one, the most important cards to look out for are threats. While Champion of the Parish starts as a 1/1 for one, it will quickly grow into a menacing threat. Therefore, if possible, trading one or two creatures for a Champion of the Parish early on is a smart play. In addition, Thalia's Lieutenant is perhaps the strongest card preboard versus Eldrazi and Taxes. For two mana, they get a Champion of the Parish that also gives all their other humans a +1/+1 counter. While creatures like Meddling Mage and Noble Hierarch do not benefit much from a +1/+1 counter, other creatures such as Mantis Rider get a huge buff from the extra power and toughness. Speaking of that flier, Mantis Rider is one of the strongest cards against any Death and Taxes build. Mantis Rider will get in for a ton of damage if not answered early, so it is wise to hold back a Flickerwisp or Restoration Angel to try and block it. However, if it gets a +1/+1 counter, things get terrible, as there are no good blocks for the flying human. Finally, Meddling Mage is a card to look out for, as it can easily turn off your Path to Exiles. If the opponent is casting one or they activate an Aether Vial with two counters, it is not a bad idea to cast a Path to Exile while you can.</p>
                <br>
                <br>
                <h3>Strategies and Interactions</h3>
                <p>There are two cards that lead to an intricate web of possible plays in this matchup- Aether Vial and Eldrazi Displacer. The former allows for both decks to do some huge plays. With an Aether Vial, as discussed above, your creatures are able to punish attacks by the opponent. In addition, with Aether Vial, Flickerwisp gets much stronger. Blinking one of the opponent's mana sources or their Aether Vial on your end step is a good way to slow them down. Generally, that is the right play if you are the aggressor. If they are the attacker, however, Flickerwisp is best used to blink one of their attackers. Anyway, Aether Vial plus Thought-Knot Seer is a common combo to perform against decks. Against Humans, however, be wary of their own Aether Vial. Sometimes it is best to not bring that Thought-Knot Seer into play until the opponent activates their own Aether Vial. In addition, if the opponent Reflector Mages one of your creatures, you can bring it into play right away with Aether Vial. When there is an Aether Vial on the opponent's side of the board, there are a few creatures to look out for. Thalia's Lieutenant or a Phantasmal Image targeting Thalia's Lieutenant can make your trades into chump blocks. Essentially, be very cautious if the opponent has their Aether Vial on two. If it is on three, then look out for Reflector Mage before blocking with two or more creatures. Finally, keep in mind that their Champion of the Parishes and Thalia's Lieutenants get pumped whenever any human entered the battlefield on their side. That can make blocking either creature risky if their Aether Vial is untapped and they have a card in hand. Finally, before getting tricky with using Flickerwisp and Restoration Angel to blink each other, factor in their Aether Vial. If they have an Aether Vial with three counters, it is often times better not to make that play, as the benefit is not very high but the cost, if they have a Reflector Mage to blow you out, is high.</p>
                <br>
                <p>The other card that gets complicated in this matchup is the infamous Eldrazi Displacer. The first thing to understand is what creatures to blink on the opponent's board. By far the best creature to blink with Eldrazi Displacer or Flickerwisp with is Phantasmal Image. Because of Phantasmal Image's ability, it will sacrifice it if targeted by Flickerwisp or Eldrazi Displacer. Mantis Rider is another common creature to target with an Eldrazi Displacer activation, as it taps down the vigilance flier without causing too much harm. Otherwise, it is fine to blink a Champion of the Parish to reset its counters, but make sure that the opponent does not get too much value out of it returning into play. Thalia's Lieutenant, however, should not be blinked, as it will give their other creatures counters. Reflector Mage is another bad one to blink. On your side of the board, the obvious ones to blink are Blade Splicer and Wall of Omens for value. Blinking a Thalia, Guardian of Thraben after she does her first strike damage is a fine play as well. Thought-Knot Seer is a good one to blink if you have the board under control, as it can take the opponent's best cards and leave them with lands and weak creatures. Flickerwisp is perhaps the best to blink, as it disrupts the opponent in various ways. For one, blinking a Flickerwisp can take the opponent off of mana or their Aether Vial. It can also "fog" two attackers. This is done by Flickerwisp blocking creature A, then Eldrazi Displacer targeting Flickerwisp, then Flickerwisp targeting creature B. Stopping two attackers for three mana is an excellent play in this matchup. A blinked Flickerwisp can also temporarily remove a Meddling Mage from play, useful if you have cards named by Meddling Mage in hand. Eldrazi Displacer's ability can finally be used to end a game. One commonly overlooked trait of its ability is that it taps down the creature. While this is a disadvantage when done on your creatures, it is great when you target their fliers and win off of Flickerwisp and Restoration Angel beats for a few turns.</p>
                <br>
                <hr>
                <h2>Postboard Specifics</h2>
                <br>
                <h3>Sideboarding</h3>
                <br>
                <div class="row">
                    <div class="col-3">
                        <h4>In:</h4>
                    </div>
                    <div class="col-9">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Dismember&type=card" class="cardImgMUG" alt="Dismember">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Dismember&type=card" class="cardImgMUG" alt="Dismember">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Worship&type=card" class="cardImgMUG" alt="Worship">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Worship&type=card" class="cardImgMUG" alt="Worship">
                    </div>
                </div>
                <p>Humans is a creature deck, so anti-creature cards are the best to bring in. Any creature removal spells should come in post-board. In this Eldrazi and Taxes list, Dismember comes in as extra removal spells. Not only does it remove the majority of creatures in Humans, but it also has a few advantages compared to Path to Exile. For one, it does not give the opponent a land, making Dismembering a Noble Hierarch a possible play. The biggest upside is that it can destroy a Meddling Mage naming Path to Exile. Otherwise, it would be very difficult to beat Humans with your removal spells turned off. The other card that comes in against Humans is Worship. A four-mana enchantment may appear too slow, but its effect is game-winning. The majority of Humans lists run very few enchantment removal spells, making it difficult for them to beat a Worship. Furthermore, when they have a Knight of Autumn in the sideboard, not all Humans players bring it in against Death and Taxes (even though they should). There are times where they can remove all of your creatures when Worship is in play, but more often then not they are unable to win with it in play. One thing to note about Worship is that, with Phantasmal Image, they can target your Flickerwisp to get rid of Worship temporarily. The best way to play around this is to keep their board under control to the point where you can survive an all-out attack without a Worship. Other cards that can come in versus Humans include anti-aggro creatures like Auriok Champion and Kitchen Finks. Good blockers like Shalai, Voice of Plenty are fine to bring in as well. As mentioned earlier, all creature removal spells come in. Board wipes are also fine to bring in, as Humans struggles to rebuild whereas Death and Taxes builds often have tools to recover. One card I am unsure about is Gideon, Ally of Zendikar. While he is great at generating blockers and value, he is very slow. Unlike four drop creatures, Gideon, Ally of Zendikar is susceptible to Thalia, Guardian of Thraben's tax and cannot be brought in with an Aether Vial. In addition, as a planeswalker against a creature aggro deck, Gideon, Ally of Zendikar often dies before your next turn. The reason I like Worship more than Gideon despite both being four mana spells is that Worship is often "you win the game", whereas Gideon, Ally of Zendikar is "gain ten life". On the other side, a four mana threat that makes blockers is arguably better than Leonin Arbiter and Thalia, Guardian of Thraben. However, having these hatebears as early blockers seems smarter than loading up on four mana cards against an aggro deck. I will be heavily testing Gideon, Ally of Zendikar in this matchup and will update this guide if the results counteract my conclusion of not bringing him in.</p>
                <br>
                <div class="row">
                    <div class="col-3">
                        <h4>Out (Play):</h4>
                    </div>
                    <div class="col-9">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Thalia,+Guardian+of+Thraben&type=card" class="cardImgMUG" alt="Thalia, Guardian of Thraben">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Thalia,+Guardian+of+Thraben&type=card" class="cardImgMUG" alt="Thalia, Guardian of Thraben">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Thalia,+Guardian+of+Thraben&type=card" class="cardImgMUG" alt="Thalia, Guardian of Thraben">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Leonin+Arbiter&type=card" class="cardImgMUG" alt="Leonin Arbiter">
                    </div>
                </div>
                <p>On the play, it is best to take out Thalia, Guardian of Thrabens and Leonin Arbiters. As discussed earlier, both hatebears are terrible against Humans, as they do not get taxed by either. Leonin Arbiter is more likely to hurt the opponent on the play than on the draw because it is easier to disrupt with Ghost Quarters when the opponent is playing their land after you. The above suggestion is flexible in terms of the number of Thalia, Guardian of Thrabens and Leonin Arbiters to cut. While Thalia, Guardian of Thraben's tax hurts Eldrazi and Taxes post-board, her first strike characteristic excels at preventing attackers and combining with Blade Splicer Golems. Ultimately, however, I often use these two drops to chump block, so Leonin Arbiter is typically better than Thalia, Guardian of Thraben. One Thalia, Guardian of Thraben was left in due to the small upsides.</p>
                <br>
                <div class="row">
                    <div class="col-3">
                        <h4>Out (Draw):</h4>
                    </div>
                    <div class="col-9">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Aether+Vial&type=card" class="cardImgMUG" alt="Aether Vial">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Leonin+Arbiter&type=card" class="cardImgMUG" alt="Leonin Arbiter">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Thalia,+Guardian+of+Thraben&type=card" class="cardImgMUG" alt="Thalia, Guardian of Thraben">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Thalia,+Guardian+of+Thraben&type=card" class="cardImgMUG" alt="Thalia, Guardian of Thraben">
                    </div>
                </div>
                <p>On the draw, it is best to remove an Aether Vial from the deck. Drawing a second Aether Vial is a risk that should be mitigated on the draw more so than on the play, as you cannot afford to stumble on plays when Humans is going first. Otherwise, trimming Thalia, Guardian of Thrabens and/or Leonin Arbiters are cuts. Leonin Arbiter gets worst on the draw, as the odds that it will cut the opponent off of mana with Ghost Quarter is almost zero. Thalia, Guardian of Thraben, on the other hand, gets slightly better, as she is a better blocker than Leonin Arbiter. Therefore, the opponent may attack less when Thalia, Guardian of Thraben is in play, resulting in valuable life. As it turns out, powerful blockers are great on the draw, as those games almost always result in Eldrazi and Taxes playing defensively for the first several turns. If more cuts were necessary due to bringing in more removal or anti-aggro creatures, the third Thalia, Guardian of Thraben is better to cut first than the second Leonin Arbiter. Thalia, Guardian of Thraben's tax is still relevant, especially when Worship on turn four becomes the game plan.</p>
                <br>
                <h4>What the Opponent Brings In</h4>
                <div class="row">
                    <div class="col-12">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Dismember&type=card" class="cardImgMUG" alt="Dismember">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Gut+Shot&type=card" class="cardImgMUG" alt="Gut Shot">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Deputy+of+Detention&type=card" class="cardImgMUG" alt="Deputy of Detention">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Izzet+Staticaster&type=card" class="cardImgMUG" alt="Izzet Staticaster">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Knight+of+Autumn&type=card" class="cardImgMUG" alt="Knight of Autumn">
                    </div>
                </div>
                <p>Dismember is a card that must be played around. Removal spells are very good against any Death and Taxes build, especially when they have little downside like Dismember. A good Humans player will fire Dismember off to kill an Eldrazi Displacer or Restoration Angel (unless they are casting it to win the game), so try to save a blinker to protect your creatures. Holding back on bringing Eldrazi Displacer into play is good if you can afford it. If there is an Eldrazi Displacer plus Flickerwisp or Restoration Angel in play, the Eldrazi Displacer can be protected from Dismember by using its activation targeting one of those fliers, and then that flier targets Eldrazi Displacer. Other removal spells such as Gut Shot and Deputy of Detention would come in if they are present in the Humans deck's sideboard. If the opponent has Deputy of Detention, try to hold back on casting Dismember/Path to Exile until it comes into play. The other card this particular Humans list will definitely bring in is Izzet Staticaster. That card is very powerful against any Death and Taxes build, as it kills many creatures in the deck. In this particular build, Blade Splicer, Thalia, Guardian of Thraben and Flickerwisp die to Izzet Staticaster. If your deck has Phyrexian Revoker in it, it is best to name Izzet Staticaster even if the opponent does not have one in play. Otherwise, the best way to combat Izzet Staticaster is to either save a removal spell for it or be conservative with Flickerwisps. Losing Thalia, Guardian of Thraben and/or Blade Splicer to an Izzet Staticaster is not a big deal, but losing Flickerwisps does hurt. Finally, Knight of Autumn is a card that should be brought in against any Death and Taxes build. Losing Aether Vial to a Knight of Autumn is annoying but not a big deal. The major issue is Knight of Autumn providing the opponent an out to Worship. It is not easy to play around this, but there are times where Flickerwisping the Worship does not leave you dead. Before planning that, however, make sure that you can survive one turn without Worship in play. Also, try to remove the Knight of Autumn from the battlefield before the opponent can copy it with Phantasmal Image to get rid of the Worship for good. Knight of Autumn can also remove Golem tokens, so be cautious when blocking with the opponent's Aether Vial on three.</p>
                <br>
                <h3>How the Matchup Plays Out Post-board</h3>
                <br>
                <p>The matchup does improve for the Eldrazi and Taxes player, but it is still unfavorable. Dismember does help deal with the opponent's threats, but their own Dismembers give them strength as well. Humans now gets access to removal spells such as Dismember and Izzet Staticaster, so it is important to play around it. Saving Flickerwisp, Restoration Angel, or Eldrazi Displacer activations for possible removal spells must be considered post-board. Generally, it is best to be as conservative with those blink abilities as possible without letting the opponent get free damage through. Losing your Eldrazi Displacer because you wanted that extra Golem is not worth the risk unless you are severely behind. The matchup generally plays the same except for this new threat of removal spells. The only other difference is the effect of Worship. The four mana enchantment is a solid win condition. With Worship in play, it is very difficult for Humans to win. As stated earlier, be careful with Flickerwisp, as they can put Phantasmal Image in as a copy of Flickerwisp to get rid of the Worship temporarily. Most the time, however, Worship will simply win as long as enough creatures are on Eldrazi and Taxes's side of the board. While not in this particular decklist, Auriok Champion is excellent with Worship, as it does not die to any removal spell that is played by Humans, so it plus Worship is pretty much an auto win. Overall, the post-board games become a dance around removal spells coupled with a backup win condition of Worship. Otherwise, the games still play out where Humans is the aggressor and Eldrazi and Taxes must defend before it hits its haymakers.</p>
                <br>
                <hr>
                <h3>Conclusion</h3>
                <p>All in all, Humans is not a great matchup for Eldrazi and Taxes. Eldrazi Displacer does make the matchup better, and the two Worships in the sideboard further help the matchup become closer to on par. That being said, the opponent's gameplan of attacking with large creatures is one that does not line up well with Eldrazi and Taxes's plan of disrupting noncreature spell decks. Learning your role in this matchup is very important. The majority of the time, Eldrazi and Taxes will be playing defensive early on until they can amass a strong enough board to grind out a win. Sometimes, however, Eldrazi and Taxes will become the aggressor early on. Recognizing the time to pivot strategies is necessary to victory. My biggest advice is to be smart with removal and to play around their Aether Vial as best as possible. Also, do not underestimate the strength of Eldrazi Displacer in this matchup- it will win otherwise unwinnable games.</p>
                <br>
                <div class="panel-group" id="accordion4">
                    
                        
                        <div class="panel panel-format">
                        <div class="panel-heading">
                          <h3 class="panel-title">
                            <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion4" href="#collapse1d" id="tldr">
                            TL;DR- Humans Matchup</a>
                          </h3>
                        </div>
                        <div id="collapse1d" class="panel-collapse collapse">
                          <div class="panel-body">
                              <p>Humans is an unfavorable matchup for Eldrazi and Taxes due to their linear creature-aggro plan and how poorly it aligns with our gameplan. In the match, they are the aggro deck, forcing you to play defensive. The games are either quick wins or sluggish battles, often decided based on key cards in both sides. Their large humans such as Thalia's Lieutenant and Champion of the Parish are strong win conditions, along with Mantis Rider. On our side, Eldrazi Displacer is an excellent way to prevent damage from getting through, while our fliers and beefy ground creatures such as Blade Splicer do well at defending, disrupting, and ending the game. A common strategy is to use Eldrazi Displacer's ability to stop their largest threats and win off of building a Blade Splicer army or beating down with a flier.</p>
                              <br>
                              <p>When sideboarding, bring in all removal spells and other anti-aggro cards such as Worship and Kitchen Finks. Hatebears are easy cuts, especially Thalia, Guardian of Thraben. The post-board games become easier with Worship and other four drops giving us an alternate win condition, but the opponent's access to removal is a hindrance. The most significant interaction is that targeting a Phantasmal Image with Flickerwisp or Eldrazi Displacer destroys it. Also, be wary of their Aether Vial when blocking, while using our Aether Vial to bring in surprise blockers or simply bluff a creature.</p>
                          </div>
                        </div>
                      </div>      
              </div>

                <br>
                <hr>
                <h4>Additional Content</h4>
                <div class="row">
                    <div class="col-sm-4">
                        <h2><a href="grixis death's shadow">Previous Matchup Guide: Grixis Death's Shadow</a></h2>
                    </div>
                    <div class="col-sm-4" id="latestArticle">
                        <h2><a href="/articles/thalia">Latest Addition: Thalia 101</a></h2>
                        <!--find out latest article based on my last added link to database of search-->
                    </div>
                    <div class="col-sm-4">
                        <h2><a href="/modern/mulligans#mg" id="mgrec">Current Mulligan Game</a></h2>
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
            <script src="/loadpublishinfo.js" type="text/javascript"></script>
    </body>
</html>
