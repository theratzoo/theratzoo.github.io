<?php
    include("../../../scripts/searchscript.php"); //actually works
    
?>
<?php
    include("../../../scripts/cardlistdb.php"); //does work
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

    <meta name="description" content="Modern matchup guide against Humans for B/W Eldrazi and Taxes.">
    <meta name="keywords" content="Magic the Gathering, modern, death and taxes, dnt, modern dnt, ent, eldrazi and taxes, black-white, humans, aggressive, five color, matchup, thalia">

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
            include("../../../scripts/navbar.php"); 

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
                        <h1>Matchup Guide: Humans</h1>
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
                    Sample E&T List- Black-White Eldrazi and Taxes</a>
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
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Leonin Arbiter</a></td>
                                
                            </tr>
                            
                            <tr><!-- thalia -->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Thalia, Guardian of Thraben</a></td>
                                
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Tidehollow Sculler</a></td>
                                
                            </tr> 
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Blade Splicer</a></td>
                                
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Eldrazi Displacer</a></td>
                                
                            </tr>
                            <tr><!-- flickerwisp -->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Flickerwisp</a></td>
                                
                            </tr> 
                            <tr><!--Resto-->
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Wasteland Strangler</a></td>
                                 
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Thought-Knot Seer</a></td>
                                
                            </tr>

                            <tr>
                                <th>Spells:</th>
                            </tr>
                           <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Path to Exile</a></td>
                                
                            </tr>
                            
                            <tr>
                                <th>Artifacts:</th>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Aether Vial</a></td>
                                
                            </tr>
                            <tr>
                                <th>Lands:</th>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Caves of Koilos</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Concealed Courtyard</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Eldrazi Temple</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Ghost Quarter</a></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Godless Shrine</a></td>
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Plains</a></td>
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Shambling Vent</a></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Swamp</a></td>
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
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Burrenton Forge-Tender</a></td>
                                
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Fatal Push</a></td>
                                
                            </tr>
                           
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Rest in Peace</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Stony Silence</a></td>
                                
                            </tr>

                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Kambal, Consul of Allocation</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Orzhov Pontiff</a></td>
                                
                            </tr>
                            <tr><!-- Gideon -->
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Gideon, Ally of Zendikar</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Settle the Wreckage</a></td>
                                
                            </tr>
                            
                            
                    
                </tbody>
            </table>
            <br>
            <div>
                <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Leonin+Arbiter&type=card" id="deckPreviewImg">
            </div>

            <br>
            
            </div>
        </div>

        </div>
                </div>
              </div>
          </div>
                <h2>Matchup Overview</h2>
                <p>Overall, the matchup is unfavorable for B/W Eldrazi and Taxes but not as bad compared to most other Death and Taxes variations. The Humans deck's strategy is one that B/W Eldrazi and Taxes fails to tax well- win by attacking with creatures, using almost zero noncreature spells. Their deck consists of aggressive humans such as Champion of the Parish, Thalia's Lieutenant, and Mantis Rider to bring the opponent's life total to zero quickly. In addition, disruptive humans give them an edge against combo decks (Meddling Mage, Kitesail Freebooter, and Thalia, Guardian of Thraben). Furthermore, their deck consists of Aether Vial, weakening B/W Eldrazi and Taxes's primary hate bears. Thought-Knot Seer, Eldrazi Displacer, Wasteland Strangler, and Blade Splicer must be relied on to win this match. However, their creatures tend to be more threatening and efficient. Postboard, removal and other answers are available to make the matchup closer, but Humans adds their own removal to make the matchup still noticeably unfavorable. All in all, this is one of B/W Eldrazi and Taxes's worst matchups, at about a 40% win rate. While having more sideboard answers and knowledge in the matchup can bring it closer to 45%, decks without Eldrazi Displacer tend to fall as low as sub 35% win rate.</p>
                <hr>
                <h2>Preboard Specifics</h2>
                <br>
                <h3>How Game 1 Plays Out</h3>    
                <p>B/W Eldrazi and Taxes does not match up very well against Humans game one. Both Thalia, Guardian of Thraben and Leonin Arbiter are underwhelming, as their taxing effects are essentially useless. When it comes to B/W Eldrazi and Taxes's other creatures, they are often weaker than what the Humans opponent has to offer. Therefore, the Humans player will often be on the offense, while the B/W Eldrazi and Taxes player will be forced to play defensively, even though the deck is not designed to play like that. The first several turns are very important for B/W Eldrazi and Taxes to survive. Surviving the first 5-8 turns is very important to winning game one, as B/W Eldrazi and Taxes has a better late-game. As a linear aggro deck, the Humans deck plays out a simple strategy- get creatures into play to win the game. To win, B/W Eldrazi and Taxes must find answers to these threats to preserve their life total and eventually win with value. That being said, winning through aggressive hand-disruption is possible. Getting rid of the opponent's best threats through Tidehollow Sculler, Path to Exile, Wasteland Strangler, and Thought-Knot Seer can open the way for creature-attacks to close out a game. That being said, Humans has a plethora of threats, making this strategy hard to pull off (especially if you're on the draw). It is still, however, important to keep in mind that, especially with B/W Eldrazi and Taxes, racing the opponent is possible, albeit unlikely.</p>
                <br>
                <p>Cards such as Tidehollow Sculler and Blade Splicer can both buy time and pressure the opponent. Thought-Knot Seer, Wasteland Strangler, and Eldrazi Displacer are also creatures that can answer the opponent's threats while getting in damage. While drawing Path to Exile is ideal, there are other cards that can deal with the Humans opponent's threats. Wasteland Strangler can kill a smaller creature, while Tidehollow Sculler and Thought-Knot Seer can take their best threat in hand. The best way, especially at the later stages of the game, to deal with potent threats is through Eldrazi Displacer. Activating Eldrazi Displacer a few times a turn, at worst, locks down Humans's best attackers. At best, it can make even more Blade Splicer tokens, preparing for a lethal attack or even remove creatures with the Flickerwisp plus Wasteland Strangler combo. Without Eldrazi Displacer, however, it is very difficult to effectively answer the opponent's board and future draws. Therefore, the first game usually leans heavily on both surviving the early turns and then finding an Eldrazi Displacer to abuse. More often than not, however, the opponent will manage to either win with a very fast start or amass a board of huge Thalia's Lieutenants and Champion of the Parishes to attack through B/W Eldrazi and Taxes's defenses.</p>
                <br>
                <h3>B/W Eldrazi and Taxes's Cards in the Matchup</h3>
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
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" class="cardImgMUG" alt="Flickerwisp">
                    </div>
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Blade+Splicer&type=card" class="cardImgMUG" alt="Blade Splicer">
                    </div>
                </div>
                <br>
                <p>On the other hand, both Flickerwisp and Blade Splicer are excellent creatures against Humans. Flickerwisp is excellent for many reasons. For one, it is a flier that cleanly blocks Mantis Rider, as long as it lacks counters. It is also a solid win condition in the later stages of the game, as Humans does not have many fliers. Flickerwisp also has many synergies and favorable interactions in this match. The Wasteland Strangler plus Flickerwisp combo is quite relevant against the creature deck. Also, there are some creatures that the Humans opponent has that are vulnerable to a blink effect (will be mentioned more below). Flcikerwisp can also simply stop one of the opponent's creatures from attacking, so long as it is Aether Vialed in or blinked by an Eldrazi Displacer or another Flickerwisp. Finally, Flickerwisp blinking Blade Splicer is good value for both an offensive and defensive strategy. Speaking of Blade Splicer, the three drop is quite strong in the match, especially when forced into a longer, defensive game. For three mana, you get two bodies, one of which is a 3/3 first striker. The best thing about Blade Splicer is that, by blinking it a few times, it is very easy to amass enough Golems to prevent any of Humans's ground creatures from attacking. Blade Splicer has many uses in this matchup. It can simply chump block two creatures, or it can be brought out through an Aether Vial to eat a small attacker. Blade Splicer tokens can also pressure the opponent, especially relevant when the opponent is on a slower start. The biggest drawback to Blade Splicer is that its Golems can be removed by a Reflector Mage. Otherwise, the versatility and power of this card make it a valuable asset in the Humans matchup, especially on game one. Typically, what you want to do with your Blade Splicer is to play defensively until you can get the Eldrazi Displacer engine going (more on that later). While the card can be used aggressively, it is generally a powerful blocker. Overall, both Flickerwisp and Blade Splicer help alleviate the damage Humans deals games one, through their generation of value and strong offensive and defensive ability.</p>
                <br>
                <div class="row">
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Tidehollow+Sculler&type=card" class="cardImgMUG" alt="Tidehollow Sculler">
                    </div>
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Thought-Knot+Seer&type=card" class="cardImgMUG" alt="Thought-Knot Seer">
                    </div>
                </div>
                <br>
                <p>The hand-disruption creatures are excellent creatures against Humans. Thought-Knot Seer provides important disruption in the matchup. If it is played early, there is a strong chance it takes one of Humans's vital spells. In addition, Thought-Knot Seer plus Aether Vial is great at taking their top-decked card, assuming the opponent cannot bring it in with Aether Vial. While Thought-Knot Seer does not always exile one of the opponent's threatening creatures, it does consistently provide a menacing body, discouraging smaller creatures from attacking. Thought-Knot Seer gets better the earlier it is played but still has the potential to be disruptive or at least a fine blocker in the later stages of the game. All in all, Thought-Knot Seer is a solid creature against Humans, with relevance in all stages of the game.</p>
                <br>
                <p>Similarly, Tidehollow Sculler is valuable against Humans. While it is not as good of a blocker as Thought-Knot Seer, Tidehollow Sculler is easier to cast/Aether Vial in earlier. Therefore, Tidehollow Sculler is more likely to take the opponent's best threats before they hit the battlefield. In addition, Tidehollow Sculler has strong synergies with Eldrazi Displacer, Flickerwisp, and Wasteland Strangler that makes the card a valuable asset. In the end, however, one of the biggest reasons Tidehollow Sculler is valuable against Humans is that Humans lacks any removal whatsoever game one, so there is no risk of the opponent getting back their exiled spell (except for Reflector Mage, but Aether Vial can help counteract that).</p>
                <br>
                <div class="row">
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Wasteland+Strangler&type=card" class="cardImgMUG" alt="Wasteland Strangler">
                    </div>
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="cardImgMUG" alt="Eldrazi Displacer">
                    </div>
                </div>
                <br>
                <p>Wasteland Strangler is a very strong card against Humans, as the majority of their creatures have a toughness of three or less. In fact, without any +1/+1 counters, Wasteland Strangler can kill any creature in the Humans deck. In addition, with Tidehollow Sculler and Flickerwisp, Wasteland Strangler can generate extra value while removing one of the opponent's creatures. Wasteland Strangler can also be used in conjunction with Aether Vial to shrink one of the opponent's creatures to make it die in combat. The best creatures to target with Wasteland Strangler's ability are Meddling Mage if it's locking down one of your spells in hand, then either Mantis Rider or Thalia's Lieutenant/Champion of the Parish (depending on which one is the bigger threat in the game). All in all, Wasteland Strangler is a great weapon against Humans, as the extra removal spell stapled on a decent creature saves lots of life and lets damage go through.</p>
                <br>
                <p>Eldrazi Displacer is the best card B/W Eldrazi and Taxes has against Humans. A three mana 3/3 is nothing impressive, but Eldrazi Displacer's activated ability wins games against creature-centric decks like Humans. Generally, Eldrazi Displacer is better in the later turns (5+), as you do not want to feel compelled to chump block or even trade with the Eldrazi. Eldrazi Displacer's ability is very versatile in this particular matchup. The primary use of its ability is to prevent the opponent from attacking with their largest threats. Whether that is achieved by targeting their large Champion of the Parish or block and blink one of your creatures is dependent on the board. Since blinking a Champion of the Parish can trigger other humans and blinking a Thalia's Lieutenant is downright horrible, the best use of Eldrazi Displacer's ability is blinking one of your creatures after blocking their attacker. If there is a Blade Splicer in play, then each blink will generate value that can help cultivate an eventual victory. Blinking Tidehollow Sculler twice can also bring value, especially if done on the draw step to prevent the Humans opponent from top-decking an answer. Overall, Eldrazi Displacer is a game-winning creature in the matchup, as its ability can simultaneously generate value while preventing the opponent from attacking.</p>
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
                <p>Aether Vial is fine in this matchup. As usual, Aether Vial is best played turn one, and it is often too slow to cast past that turn unless extra mana is available. Aether Vial's primary strengths in the matchup are cheating mana with an Eldrazi Displacer in play or bringing in blockers at instant speed. With an Eldrazi Displacer on the battlefield, mana becomes very tight, so having Aether Vial cheat creatures into play while Eldrazi Displacer locks down creatures generates valuable tempo. The other strength is one that is especially relevant against Humans. Since Humans is a deck that attacks with initially small creatures, there are often times where you can Aether Vial in a blocker to punish their attack. Thought-Knot Seer and Blade Splicer are the most common ambushers. Bluffing an Aether Vial activation is also valuable, as it can deter the opponent from attacking when you lack a creature to bring in. That being said, Aether Vial is a very bad card to draw, as it does not help alleviate the pain brought by the fast creature deck. Finally, Aether Vial makes combos involving Wasteland Stranger/Tidehollow Sculler plus Flickerwisp easier to pull off. All in all, Aether Vial helps accelerate B/W Eldrazi and Taxes's board while providing an avenue to punish lousy attacking.</p>
                <br>
                <p>Path to Exile is, undoubtedly, one of the best spells in B/W Eldrazi and Taxes for this match as a whole. Removing their biggest threat for only one mana (assuming there are not any Thalia, Guardian of Thrabens in play) is a strong play. Generally, it is best to remove a large Thalia's Lieutenant or Champion of the Parish if you cannot find an Eldrazi Displacer and enough mana to prevent those large humans from attacking. Also, with enough first strike damage on board or a surplus of blockers, it is not necessary to prioritize those two creatures with Path to Exile. In those cases, Path to Exile is best pointed at the opponent's Mantis Riders, as they are both a threatening flier and a blocker to Flickerwisp. Especially if you lack fliers and/or the Mantis Rider has at least one counter on it, Path to Exile should be used on it. There is a fringe case where Path to Exile can be used on a Meddling Mage. This is only correct if it is naming something in hand that needs to be cast, and that there is not an Aether Vial in play. However, Meddling Mage almost always names Path to Exile in this matchup, so it is a very rare case. The final use of Path to Exile in game one is if the opponent is either about to take your Path to Exile with a Kitesail Freebooter or already has a Path to Exile under Kitesail Freebooter. All of these above decisions are focused only on game one, as games get more complicated when cards like Fatal Push and Orzhov Pontiff are brought in from the sideboard (will be discussed in a later section). Overall, Path to Exile is a valuable spell that needs to be used wisely in this matchup, generally removing their Mantis Rider or large Champion of the Parish/Thalia's Lieutenant depending on the board state.</p>
                <br>
                <p>In terms of other B/W Eldrazi and Taxes cards that are not necessarily in this decklist, Phyrexian Revoker is fine as a way to slow the opponent down. However, as B/W Eldrazi and Taxes relies quite heavily on Aether Vial, it can be detrimental. Lingering Souls is an excellent card against Humans, especially preboard where they lack Izzet Staticaster (though most lists do not run it anymore). Lingering Souls, at worst, provides three chump blockers. At best, it can get in damage to close a game, as four flying bodies are not easy for Humans to deal with.</p>
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
                <p>In game one, the most important cards to look out for are threats. While Champion of the Parish starts as a 1/1 for one, it will quickly grow into a menacing threat. Therefore, if possible, trading one or two creatures for a Champion of the Parish early on is a smart play. In addition, Thalia's Lieutenant is perhaps the strongest card preboard versus B/W Eldrazi and Taxes. For two mana, they get a Champion of the Parish that also gives all their other humans a +1/+1 counter. While creatures like Meddling Mage and Noble Hierarch do not benefit much from a +1/+1 counter, other creatures such as Mantis Rider get a huge buff from the extra power and toughness. Speaking of that flier, Mantis Rider is especially threatening against B/W Eldrazi and Taxes compared to other Death and Taxes builds due to its low flier count. Mantis Rider will get in for a ton of damage if not answered early, so it is often wise to hold back a Flickerwisp to try and block it. However, if it gets a +1/+1 counter, things get ugly, as there are no good blocks for the flying human. Finally, Meddling Mage is a card to look out for, as it can easily turn off your Path to Exiles. If the opponent is casting one or they activate an Aether Vial with two counters, it is not a bad idea to cast a Path to Exile while you can.</p>
                <br>
                <br>
                <h3>Strategies and Interactions</h3>
                <p>There are two cards that lead to an intricate web of possible plays in this matchup- Aether Vial and Eldrazi Displacer. The former allows for both decks to do some huge plays. With an Aether Vial, as discussed above, your creatures are able to punish attacks by the opponent. In addition, with Aether Vial, Flickerwisp gets much stronger. Blinking one of the opponent's mana sources or their Aether Vial on your end step is a good way to slow them down. Generally, that is the right play if you are the aggressor. If they are the attacker, however, Flickerwisp is best used to blink one of their attackers. All this being said, blinking Blade Splicer or Wasteland Strangler is always the most ideal play, but circumstances or simply lacking those creatures can make this impossible. Anyway, Aether Vial plus Thought-Knot Seer or Tidehollow Sculler is a common combo to perform against decks. Against Humans, however, be wary of their own Aether Vial. Sometimes it is best to not bring that Thought-Knot Seer/Tidehollow Sculler into play until the opponent activates their own Aether Vial. In addition, if the opponent Reflector Mages one of your creatures, you can bring it into play right away with Aether Vial. When there is an Aether Vial on the opponent's side of the board, there are a few creatures to look out for. Thalia's Lieutenant or a Phantasmal Image targeting Thalia's Lieutenant can make your trades into chump blocks. Essentially, be very cautious if the opponent has their Aether Vial on two. If it is on three, then look out for Reflector Mage before blocking with two or more creatures. Finally, keep in mind that their Champion of the Parishes and Thalia's Lieutenants get pumped whenever any human entered the battlefield on their side. That can make blocking either creature risky if their Aether Vial is untapped and they have a card in hand. Finally, do not forget the Wasteland Strangler and Tidehollow Sculler interactions in this matchup, as they are quite important against a creature deck like Humans. The best one is Flickerwisping one of the opponent's permanents, and then bringing Wasteland Strangler into play. Wasteland Stranger will then put the card exiled under Flickerwisp into the opponent's graveyard and give a creature -3/-3. If done optimally, this play removes two of the opponent's threats while leaving us with a 3/1 flier and 3/2 creature. In addition, Wasteland Stranger can use Tidehollow Sculler's exiled card as the one to bring into the graveyard. By doing that, the Tidehollow Sculler can freely chump block without the opponent getting their card back, or even get blinked by Flickerwisp/Eldrazi Displacer to take another of their cards. Finally, if Tidehollow Sculler is blinked in response to its enter-the-battlefield trigger, it exiles a card permanently from the opponent's hand. A card to keep in mind on the opponent's side is Phantasmal Image. If we Flickerwisp one of our permanents while Wasteland Strangler is in play, Phantasmal Image can copy the Wasteland Strangler to get rid of the exiled card and kill one of our creatures.</p>
                <br>
                <p>The other card that gets complicated in this matchup is the infamous Eldrazi Displacer. The first thing to understand is what creatures to blink on the opponent's board. By far the best creature to blink with Eldrazi Displacer or Flickerwisp with is Phantasmal Image. Because of Phantasmal Image's ability, it will sacrifice it if targeted by Flickerwisp or Eldrazi Displacer. Mantis Rider is another common creature to target with an Eldrazi Displacer activation, as it taps down the vigilance flier without causing too much harm. Otherwise, it is fine to blink a Champion of the Parish to reset its counters, but make sure that the opponent does not get too much value out of it returning into play. Thalia's Lieutenant, however, should not be blinked, as it will give their other creatures counters. Reflector Mage is another bad one to blink. On your side of the board, the obvious ones to blink are Blade Splicer and Wasteland Strangler for value. Blinking a Thalia, Guardian of Thraben after she does her first strike damage is a fine play as well. Thought-Knot Seer is a good one to blink if you have the board under control, as it can take the opponent's best cards and leave them with lands and weak creatures. Tidehollow Sculler is only good to blink if you can do it more than once (so they lose a card permanently) or when Tidehollow Sculler lacks a card under it. That being said, if the card Tidehollow Sculler has exiled is beatable, blinking it draw step is fine to check if the opponent drew a better card. Be cautious, however, as Aether Vial can ruin this interaction. Flickerwisp is perhaps the best to blink, as it disrupts the opponent in various ways. For one, blinking a Flickerwisp can take the opponent off of mana or their Aether Vial. It can also "fog" two attackers. This is done by Flickerwisp blocking creature A, then Eldrazi Displacer targeting Flickerwisp, then Flickerwisp targeting creature B. Stopping two attackers for three mana is an excellent play in this matchup. A blinked Flickerwisp can also temporarily remove a Meddling Mage from play, useful if you have cards named by Meddling Mage in hand. Eldrazi Displacer's ability can finally be used to end a game. One commonly overlooked trait of its ability is that it taps down the creature. While this is a disadvantage when done on your creatures, it is great when you target their fliers and win off of Flickerwisp attacks for a few turns.</p>
                <br>
                <hr>
                <h2>Postboard Specifics</h2>
                <!--EVERYTHING HERE-->
                <br>
                <h3>Sideboarding</h3>
                <br>
                <div class="row">
                    <div class="col-3">
                        <h4>In:</h4>
                    </div>
                    <div class="col-9">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Fatal+Push&type=card" class="cardImgMUG" alt="Fatal Push">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Fatal+Push&type=card" class="cardImgMUG" alt="Fatal Push">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Fatal+Push&type=card" class="cardImgMUG" alt="Fatal Push">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Orhov+Pontiff&type=card" class="cardImgMUG" alt="Orzhov Pontiff">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Orhov+Pontiff&type=card" class="cardImgMUG" alt="Orzhov Pontiff">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Settle+the+Wreckage&type=card" class="cardImgMUG" alt="Settle the Wreckage">
                    </div>
                </div>
                <p>Humans is a creature deck, so anti-creature cards are the best to bring in. Any creature removal spells should come in post-board. In this B/W Eldrazi and Taxes list, all three Fatal Pushes come in as extra removal spells. Not only does Fatal Push remove the majority of creatures in Humans, but it also has a few advantages compared to Path to Exile. For one, Fatal Push does not give the opponent a land, making Fatal Pushing a Noble Hierarch a possible play. The biggest upside is that it can destroy a Meddling Mage naming Path to Exile. Otherwise, it would be very difficult to beat Humans with your removal spells turned off. All that said, revolt is not always easy to trigger, so Mantis Rider and post-board creatures such as Deputy of Detention are harder to remove with Fatal Push. Also, Fatal Push does not provide an exiled card for Wasteland Strangler. Another card that comes in against Humans is Orzhov Pontiff. At worst, Orzhov Pontiff can be used as an anthem for your creatures, but this is rarely what it does. More often than not, Orzhov Pontiff is used as a powerful combat trick, as giving all your creatures +1/+1 or all of the opponent's creatures -1/-1 can lead to multiple favorable blocks. Also, with enough blinking effects, Orzhov Pontiff can get rid of larger creatures. The best-case scenario is for Orzhov Pontiff to get rid of multiple one-toughness creatures, but this is rare as Thalia's Lieutenant gives their humans +1/+1 counters. The versatility and high potential of Orzhov Pontiff still make it a fine choice to bring in, especially when comparing it to the cards that are replaced by it. Finally, Settle the Wreckage is brought as yet another removal spell against Humans. Settle the Wreckage is exposed to Kitesail Freebooter and can be played around. However, from my experiences, most people do not play around Settle the Wreckage, as it is not very common in Modern. Settle the Wreckage is at its best when a strong board is culminated on the B/W Eldrazi and Taxes player's side, as this may force the opponent to attack with all their creatures in order to achieve a lethal attack. With little or no creatures on the board, however, it is more likely that the opponent will play around Settle the Wreckage as they can afford to. Either way, Settle the Wreckage almost always gets rid of multiple threats, making it a staple against Humans. The only other card worth noting is Gideon, Ally of Zendikar. While he is a powerful spell, the mana cost makes him too slow most of the time. In other versions of B/W Eldrazi and Taxes, solid creatures such as Shalai, Voice of Plenty, Kitchen Finks, Auriok Champion, and Ravenous Chupacabra can come in. Worship is another card to bring in, as it can win games on its own.</p>
                <br>
                <div class="row">
                    <div class="col-3">
                        <h4>Out (Play and Draw):</h4>
                    </div>
                    <div class="col-9">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Thalia,+Guardian+of+Thraben&type=card" class="cardImgMUG" alt="Thalia, Guardian of Thraben">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Thalia,+Guardian+of+Thraben&type=card" class="cardImgMUG" alt="Thalia, Guardian of Thraben">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Thalia,+Guardian+of+Thraben&type=card" class="cardImgMUG" alt="Thalia, Guardian of Thraben">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Leonin+Arbiter&type=card" class="cardImgMUG" alt="Leonin Arbiter">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Leonin+Arbiter&type=card" class="cardImgMUG" alt="Leonin Arbiter">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Leonin+Arbiter&type=card" class="cardImgMUG" alt="Leonin Arbiter">
                    </div>
                </div>
                <p>Regardless of the turn order, it is best to take out the hate bears. Leonin Arbiter is weak as the opponent lacks fetch lands and has Aether Vial to not care about Ghost Quarter. Thalia, Guardian of Thraben is weak as the opponent lacks noncreature spells other than Aether Vial and maybe a Gut Shot/Dismember. Therefore, both should be cut from the deck. The amount of Thalia, Guardian of Thrabens and Leonin Arbiters to cut is up for debate. I personally like cutting three of each. Thalia, Guardian of Thraben is a very good blocker with her first-strike keyword. However, drawing multiples of her is very rough due to her legendary text. Also, Thalia, Guardian of Thraben's tax hurts us more than the opponent, so one has been a good number. Leonin Arbiter is, quite literally, a 2/2 for two mana. While he lacks first-strike, he does not tax our noncreature spells, hence why one Leonin Arbiter is present post-board. If you needed to cut one more hate bear, I would cut Leonin Arbiter before Thalia, Guardian of Thraben, as Thalia, Guardian of Thraben's first-strike will save lots of life and make up for her tax. Aether Vial is not taken out on the draw because B/W Eldrazi and Taxes relies heavily on the artifact to fix their mana and get their game plan rolling.</p>
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
                <p>Dismember is a card that must be played around. Removal spells are very good against B/W Eldrazi and Taxes, especially when they have little downside like Dismember. A good Humans player will fire Dismember off to kill an Eldrazi Displacer (unless they are casting it to win the game or to get back a card from Thought-Knot Seer/Tidehollow Sculler), so try to save a blinker to protect your creatures. Holding back on bringing Eldrazi Displacer into play is good if you can afford it. If there is an Eldrazi Displacer plus Flickerwisp or another Eldrazi Displacer in play, the Eldrazi Displacer can be protected from Dismember by either blinking Flickerwisp and then Flickerwisp blinking it, or the second Eldrazi Displacer blinking the targeted one. Other removal spells such as Gut Shot and Deputy of Detention would come in if they are present in the Humans deck's sideboard. If the opponent has Deputy of Detention, try to hold back on casting Fatal Push/Path to Exile until it comes into play. In addition, Deputy of Detention's ability can be countered by removing the targeted creature from play. This is relevant if Deputy of Detention is targeting a creature and there is at least one other creature on your side of the board sharing its name. Eldrazi Displacer and Flickerwisp blinking the targeted creature would save it and the other creatures from getting exiled under Deputy of Detention. This does work if the opponent is targetting a Golem, except the Golem does not return after getting blinked. The other card this particular Humans list will definitely bring in is Izzet Staticaster. That card is very powerful against B/W Eldrazi and Taxes, as it kills many creatures in the deck. In this particular build, Blade Splicer, Thalia, Guardian of Thraben, Flickerwisp, and Orzhov Pontiff die to Izzet Staticaster. If your deck has Phyrexian Revoker in it, it is best to name Izzet Staticaster even if the opponent does not have one in play. Otherwise, the best way to combat Izzet Staticaster is to either save a removal spell for it or be conservative with Flickerwisps. Losing Thalia, Guardian of Thraben and/or Blade Splicer to an Izzet Staticaster is not a big deal, but losing Flickerwisps does hurt. Finally, Knight of Autumn is a card that should be brought in against B/W Eldrazi and Taxes. Losing Aether Vial to a Knight of Autumn is annoying but not a big deal. The biggest issue is when Knight of Autumn removes an artifact creature such as a Tidehollow Sculler or a Golem token. Therefore, be extra cautious when blocking with these artifact creatures, as a Knight of Autumn or Phantasmal Image copying Knight of Autumn can ruin a double block.</p>
                <br>
                <h3>How the Matchup Plays Out Post-board</h3>
                <br>
                <!--FIX here n below-->
                <p>The matchup does improve for the B/W Eldrazi and Taxes player, but it is still unfavorable. Fatal Push does help deal with the opponent's threats, but their own removal spells give them strength as well. Humans now gets access to removal spells such as Dismember and Deputy of Detention, so it is important to play around it. Saving Flickerwisp or Eldrazi Displacer activations for possible removal spells must be considered post-board. Generally, it is best to be as conservative with those blink abilities as possible without letting the opponent get free damage through. Losing your Eldrazi Displacer because you wanted that extra Golem is not worth the risk unless you are severely behind. The post-board games end up slower, as removal from both sides makes landing threats difficult. Tidehollow Sculler and Thought-Knot Seer are not as reliable, while Eldrazi Displacer is more likely to get removed. Furthermore, without the hate bears, B/W Eldrazi and Taxes lacks creature plays early on, making an aggressive strategy difficult, even if on the play. Therefore, it is wise to play more defensive and careful post-board. Aggressive starts are still possible, as Fatal Push and Orzhov Pontiff can lead to favorable attacks while hand-disruptive creatures can keep Humans off of their removal spells. One interaction to keep in mind is that Phantasmal Image can copy any of our creatures. While that is not too much of an issue preboard, it can be post-board, as copying an Orzhov Pontiff can result in multiple creatures dying. Therefore, especially if the game is going long, try to leave up an Eldrazi Displacer activation if a Phantasmal Image copying Orzhov Pontiff is a fear. Eldrazi Displacer's ability can blink Orzhov Pontiff in response to the opponent's Orzhov Pontiff to give our creatures +1/+1, negating their -1/-1 effect.</p>
                <br>
                <hr>
                <h3>Conclusion</h3>
                <p>All in all, Humans is not a great matchup for B/W Eldrazi and Taxes. Eldrazi Displacer does make the matchup better, and the three Fatal Pushes in the sideboard further help the matchup become closer to on par. That being said, the opponent's gameplan of attacking with large creatures is one that does not line up well with B/W Eldrazi and Taxes's plan of disrupting noncreature spell decks. Learning your role in this matchup is very important. Aggressive starts are only possible with the right disruption, removal, and beaters, but are still a great way to win. The majority of the time, however, B/W Eldrazi and Taxes will be playing defensive until they can amass a strong enough board to grind out a win. Recognizing whether to play a game aggressively or stall for an Eldrazi Displacer or other haymaker is essential to winning in the matchup. My best advice is to be smart with removal and to play around their Aether Vial as best as possible. Also, do not underestimate the strength of Eldrazi Displacer in this matchup- it will win otherwise unwinnable games. One final tip is to not completely give up on the taxing plan. There are games, especially when on the play, where Leonin Arbiter plus Ghost Quarter can lock the opponent out of the game. While it is not smart to go for this the majority of the time, recognizing openings is important. Multiple mulligans coupled with no Aether Vial or Noble Hierarch can let Leonin Arbiter plus Ghost Quarter win a game.</p>
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
                              <p>Humans is an unfavorable matchup for B/W Eldrazi and Taxes due to their linear creature-aggro plan and how poorly it aligns with B/W Eldrazi and Taxes's gameplan. In the match, they are usually the aggro deck, forcing B/W Eldrazi and Taxes to play defensively unless a fast enough start is available. The games are either quick wins or sluggish battles, often decided based on key cards in both sides. Their large humans such as Thalia's Lieutenant and Champion of the Parish are strong win conditions, along with Mantis Rider. On our side, Eldrazi Displacer is an excellent way to prevent damage from getting through, while Flickerwisp and large ground creatures such as Blade Splicer and Thought-Knot Seer do well at defending, disrupting, and ending the game. A common strategy is to use Eldrazi Displacer's ability to stop their largest threats and win off of building a Blade Splicer army or beating down with Flickerwisp.</p>
                              <br>
                              <p>When sideboarding, bring in all removal spells. Fatal Push, Orzhov Pontiff, and Settle the Wreckage are all excellent removal options. The two hate bears, Thalia, Guardian of Thraben and Leonin Arbiter, are easy cuts. The post-board games become easier with the extra removal spells, but the opponent's access to removal is a hindrance. The most significant interactions in the match are that targeting a Phantasmal Image with Flickerwisp or Eldrazi Displacer destroys it. Also, be wary of their Aether Vial when blocking, while using our Aether Vial to bring in surprise blockers or simply bluff a creature. Finally, their Phantasmal Image can target B/W Eldrazi and Taxes's creatures, such as Wasteland Strangler or Orzhov Pontiff, to blow us out.</p>
                          </div>
                        </div>
                      </div>      
              </div>

                <br>
                <hr>
                <h4>Additional Content</h4>
                <div class="row">
                    <div class="col-sm-4">
                        <h2><a href="grixis death's shadow">Previous Matchup Guide: Grixis Death's Shadow (B/W E&T)</a></h2>
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
                include("../../../scripts/footer.php");
            ?>
            <script>var jStr = <?php echo json_encode($lastModDate); ?>;</script>
            <script src="/loadpublishinfo.js" type="text/javascript"></script>
    </body>
</html>
