<?php
    include("../../../scripts/searchscript.php"); //actually works
    
?>
<?php
    include("../../../scripts/cardlistdb.php"); //does work
?>
<?php
    $filename = 'grixis death\'s shadow.php';
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
    
    <meta name="description" content="Modern matchup guide against Grixis Death's Shadow for B/W Eldrazi and Taxes.">
    <meta name="keywords" content="Magic the Gathering, modern, death and taxes, dnt, modern dnt, ent, eldrazi and taxes, grixis, death's shadow, rest in peace, matchup">
    

        <title>Modern Matchup Guide- Grixis Death's Shadow</title>
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
                        <h1>Matchup Guide: Grixis Death's Shadow</h1>
                    </div>
                    <div class="col-sm-3">
                        <h2><a href="#tldr">TL;DR</a></h2>
                    </div>
                </div>
                
            </div>
                <br>
                <div class="row">
                    <div class="col-4 mug-img">
                        <img src="https://cdna.artstation.com/p/assets/images/images/007/887/106/large/alex-konstx-artid-401799-fatalpush-final-01.jpg?1509141979" class="headImg" alt="Fatal Push">
                    </div>
                    <div class="col-4 mug-img">
                        <img src="https://static1.squarespace.com/static/5356aa98e4b0e10db1993391/5984aa12e6f2e1810040a5db/5a0c56bc9140b7e76ce1fd11/1510758086532/Death%27s+Shadow+600.jpeg?format=500w" class="headImg" alt="Death's Shadow">
                    </div>
                    <div class="col-4 mug-img">
                        <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/intermediary/f/c4022944-34e6-4587-bf5a-33b77b27f0a3/da9c28k-c6cdb8a9-d819-4d11-8b4f-783400477b1a.jpg/v1/fill/w_773,h_1033,q_70,strp/mtg_liliana__the_last_hope_by_depingo_da9c28k-pre.jpg" class="headImg" alt="Liliana, the Last Hope">
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
                    Grixis Death's Shadow Stock List</a>
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
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Death's Shadow</a></td>
                                
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Snapcaster Mage</a></td>
                                
                            </tr> 
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Street Wraith</a></td>
                                
                            </tr> 
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Gurmag Angler</a></td>
                                
                            </tr>

                            <tr>
                                <th>Spells:</th>
                            </tr>
                           <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Faithless Looting</a></td>
                                
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Fatal Push</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Inquisition of Kozilek</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Lightning Bolt</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Serum Visions</a></td>
                                
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Stubborn Denial</a></td>
                                
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Thought Scour</a></td>
                                
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Thoughtseize</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Temur Battle Rage</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Dismember</a></td>
                                
                            </tr>
                            <tr>
                                <th>Artifacts:</th>
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Mishra's Bauble</a></td>
                                
                            </tr>
                            <tr>
                                <th>Lands:</th>
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Blood Crypt</a></td>
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Bloodstained Mire</a></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Island</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Polluted Delta</a></td>
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Scalding Tarn</a></td>
                            </tr>  
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Steam VEnts</a></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Swamp</a></td>
                            </tr>  
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Watery Grave</a></td>
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
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Grim Lavamancer</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Lightning Bolt</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Stubborn Denial</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Abrade</a></td>
                                
                            </tr>

                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Disdainful Stroke</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Snapcaster Mage</a></td>
                                
                            </tr>

                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Kolaghan's Command</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Liliana, the Last Hope</a></td>
                                
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Leyline of the Void</a></td>
                                
                            </tr>
                    
                </tbody>
            </table>
            <br>
            <div>
                <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Death's+Shadow&type=card" id="deckPreviewImgOne">
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
                <p>Overall, Grixis Death's Shadow is a favorable matchup for B/W Eldrazi and Taxes, both before and after sideboarding. B/W Eldrazi and Taxes's spells, for the most part, line up very well against the spells in Grixis Death's Shadow. The general plan of a Grixis Death's Shadow player is to disrupt the opponent with discard and removal while using cantrips such as Serum Visions and Faithless Looting to dig for their threats and win the game with a Death's Shadow and/or Gurmag Angler. The matchup tends to be interesting in terms of B/W Eldrazi and Taxes's role- they are typically the defender in the mid game and the aggressor in the early and late game. Essentially, the B/W Eldrazi and Taxes player switches roles based on the opponent's creature count and their own flier count. Typically, B/W Eldrazi and Taxes tends to be rather aggressive against Grixis Death's Shadow compared to other Death and Taxes variations, but there will be times in games where defensive play is necessary to not die to their large creatures. Since Grixis Death's Shadow relies so heavily on one mana spells, Thalia, Guardian of Thraben taxes their mana base significantly. Leonin Arbiter also hits them very well, as their deck consists of an above average number of fetch lands. Tidehollow Sculler can also get rid of the opponent's only removal spell in hand, or at least force them to use a removal spell on the 2/2. Furthermore, as they need to get to a low life total to active Death's Shadow, fliers such as Flickerwisp excel at finishing the game while Blade Splicer and Eldrazi stall their ground creatures. Post-board, the opponent gets more answers, but the matchup remains favorable. All in all, the matchup is at least 60% in the B/W Eldrazi and Taxes's player's favor due to how well its cards perform against the strategy of Grixis Death's Shadow.</p>
                <hr>
                <h2>Preboard Specifics</h2>
                <br>
                <h3>How Game 1 Plays Out</h3>
                <p>No matter the turn order, game one plays out very well for the B/W Eldrazi and Taxes's player. As mentioned above, the Grixis Death's Shadow player follows a linear gameplan of disruption, digging, and threat deployment. However, because of B/W Eldrazi and Taxes's disruption, they usually cannot navigate as smoothly as they want. Furthermore, cards such as Flickerwisp and Eldrazi Displacer force the opponent to be careful about their life total, as they can get through the opponent's creatures. Therefore, the matchup becomes a pseudo-race of threats- the Grixis Death's Shadow player tries to reach their big creatures and kill the B/W Eldrazi and Taxes's pilot before they can get enough incremental damage through hatebear beats to finish the opponent off with "evasive" threats.</p>
                <br>
                <p>Sometimes, a Leonin Arbiter and/or Thalia, Guardian of Thraben can lock out the opponent or slow them down enough to win game one on their own. Typically, however, the opponent has enough removal to prevent a hatebear from stealing the game (unless Tidehollow Sculler can get them off of removal). Since there are so many creatures in B/W Eldrazi and Taxes that the Grixis Death's Shadow player must remove to win the game, it is very difficult for them to amass enough removal to prevent an Eldrazi Displacer or flier from finishing them off, especially with eight hand-disruptive creatures available. While this may force the Grixis Death's Shadow player to be more aggressive, it is still important to play aggressively. B/W Eldrazi and Taxes stresses disruption and attacking more so than other Death and Taxes builds. Defensive play does work due to Eldrazi Displacer's effectiveness at locking down their win conditions, but that should not be the primary plan. All that said, it is important, when playing this matchup, to perform a balance of attacking and holding back- every attack grows their Death's Shadow, but pressuring their life total is necessary for victory. For B/W Eldrazi and Taxes, it is best to attack as much as possible without exposing yourself. Once the opponent gets a Death's Shadow and/or Gurmag Angler into play, be careful about using Eldrazi Displacer activations and Flickerwisp triggers to get in a few points of damage- this is where playing around removal and other cards is essential to success.</p>
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
                <p>Both hatebears are excellent creatures in this matchup. Thalia, Guardian of Thraben is phenomenal, as the opponent runs around 30 noncreature spells in their main deck, most of which are one mana. Doubling the cost of an opponent's spell is very powerful, especially when it forces them to spend a whole turn casting an unimpactful spell (Serum Visions, Thought Scour, Faithless Looting, etc). Her first strike keyword is relevant at times, as it allows her to attack through a Snapcaster Mage (unlike Leonin Arbiter). Thalia, Guardian of Thraben tends to eat a Fatal Push or Lightning Bolt almost immediately because of her effectiveness against Grixis Death's Shadow. But if she survives a few turns, the opponent is often taxed too much to make a large enough impact (unless their hand is full of disruption and threats rather than cantrips). Leonin Arbiter is also very good, but for a different reason. Since Death's Shadow requires the opponent to go to low life, their deck is full of fetch lands. Therefore, Leonin Arbiter is very effective at taxing the opponent's mana. His floor is lower than Thalia, Guardian of Thraben's, since he is often killed before taxing (whereas Thalia, Guardian of Thraben will at least make the kill spell cost an additional mana). However, his ceiling is very high. Locking out the opponent with a Leonin Arbiter or two plus at least one Ghost Quarter happens more often than you would think, especially on the play. All in all, both hatebears are excellent against Grixis Death's Shadow, as their gameplan relies on both cheap noncreature spells and fetch lands.</p>
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
                <p>Flickerwisp is a solid threat in game one. It can save a creature from one of the opponent's many removal spells, prevent the opponent from blocking for a turn, or simply attack for three in the air. Since the opponent lacks fliers, Flickerwisp is an excellent way at ending a game. It does, however, gets weaker post-board, which will be discussed later. Blade Splicer is a very valuable card, especially later in the game. The "first" Blade Splicer is not very exciting, but casting an additional Blade Splicer or blinking it provides two first strike Golems that prevent Gurmag Anglers from attacking. In addition, Blade Splicer is a solid attacker. The flexibility of attacking, chump blocking, or threatening a trade or better is what makes Blade Splicer a valuable asset. Generally, Blade Splicer manages to get in a hit or two before Gurmag Angler and/or Death's Shadow stops it. Waiting to amass a large number of creatures to go wide against the Grixis Death's Shadow opponent is another common strategy.</p>
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
                <!--FIX-->
                <p>Tidehollow Sculler is a fine card. Its strength heavily depends on the amount of removal the opponent has. If Tidehollow Sculler can take the opponent off of removal, it is a very powerful spell. Otherwise, it simply dies to a Fatal Push. While it does force the opponent to use a removal spell on it, Tidehollow Sculler does not really disrupt the opponent unless they lack an answer to it. All that being said, Tidehollow Sculler is still a good disruptive card, as Grixis Death's Shadow does not run a ton of removal spells (at least preboard). Thought-Knot Seer is great if played before the opponent can stick one of their threats, otherwise, the Eldrazi cannot attack well. In addition, as Grixis Death's Shadow relies on cheap spells, their hand is sometimes void of powerful spells to exile from their hand. Still, an early Thought-Knot Seer is valuable disruption, especially in post-board matches where the opponent has more expensive bombs.</p>
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
                <p>Wasteland Strangler is very bad against Grixis Death's Shadow. Preboard, the only thing that Wasteland Strangler kills is Snapcaster Mage or a small Death's Shadow. Even if the opponent gets a Death's Shadow into play when they have ten or more life, the odds are that a fetch land or Street Wraith ruins Wasteland Strangler's plan. The only nice aspects of Wasteland Strangler are that it works very well with Flickerwisp to cleanly answer a giant threat, and it can make blocks and attacks favorable, as it can shrink a Gurmag Angler/Death's Shadow to kill it without your creature dying. However, all of those cases are niche, making the card our weakest preboard. Eldrazi Displacer's primary issue lies in its vulnerability. The Eldrazi dies to a Lightning Bolt or revolted Fatal Push, both of which Grixis Death's Shadow has an abundance of. Getting a three drop creature killed by a one mana spell before it can generate value is never a good feeling. On the other hand, Eldrazi Displacer's ability is excellent in this matchup. Not only does it allow the Eldrazi to protect other creatures from Grixis Death's Shadow's many removal spells, but it also provides an avenue for ground creatures to attack or simply prevent an attack or two on the opponent's side of the board. Since Eldrazi Displacer is very effective against the opponent, waiting until it can be protected by a Flickerwisp plus Aether Vial is ideal, so long as it does not slow us down too much.</p>
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
                <p>Aether Vial is reasonable in the matchup. Since Grixis Death's Shadow has a plethora of removal, giving Flickerwisp flash is excellent. In addition, as Ghost Quarter and other land destruction lands are often used against their fragile mana base, having a way to cheat creatures into play is valuable. However, Aether Vial is not great if the opponent has lots of discard spells, as it can leave the B/W Eldrazi and Taxes pilot's hand creatureless, rendering Aether Vial useless. Kolaghan's Command is a very effective answer versus Aether Vial, but it is now relegated to the sideboard. Path to Exile is a great spell against Grixis Death's Shadow, as it cleanly answers their Death's Shadows and Gurmag Anglers. While it does not pair well with Stubborn Denial, the Grixis Death's Shadow opponent often boards them out, so the removal spell remains a powerful ally pre and post-board. In terms of niche cards, Remorseful Cleric is not very good. At best, it can stop a Snapcaster Mage's target, while pressuring their life total in the air. At worst, it is just a small flier that dies to all their removal spells. Phyrexian Revoker is bad as well (not enough targets), especially post-board. Lingering Souls is quite good game one, as it can block their big threats, fly over them, and be difficult to deal with in terms of removal options. Post-board, however, Lingering Souls falls off for two reasons. One, graveyard hate such as Rest in Peace comes in, which hurts Lingering Souls. The other reason is that the opponent has better answers to it, such as Liliana, the Last Hope, Izzet Staticaster, and Anger of the Gods.</p>
                <br>
                <div class="row">
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Snapcaster+Mage&type=card" class="cardImgMUG" alt="Snapcaster Mage">
                    </div>
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Temur+Battle+Rage&type=card" class="cardImgMUG" alt="Temur Battle Rage">
                    </div>
                </div>
                <br>
                <h3>Cards to Look Out for- Grixis Death's Shadow</h3>
                <p>Removal is always a hindrance to B/W Eldrazi and Taxes. The typical removal suit found in Grixis Death's Shadow consists of a few Fatal Push, Dismember, and Lightning Bolt. Some lists run a Kolaghan's Command or two as well, a card that is very effective against B/W Eldrazi and Taxes. Destroying both a hatebear and an Aether Vial, Tidehollow Sculler, or Golem token is very powerful. The primary card worth looking out for in the preboard game is Snapcaster Mage. While it is only a 2/1 for two mana, its ability is great for the deck with mostly one mana spells. Often enough, Snapcaster Mage is flashing back a removal spell, depending on the opponent's graveyard. Therefore, having access to graveyard hate such as Remorseful Cleric or a main deck Relic of Progenitus is valuable in the first game. In addition, the 2/1 body excels at trading with Leonin Arbiter and Tidehollow Sculler, so be careful when attacking with those disruptive creatures. Finally, Temur Battle Rage is a card that wins Grixis Death's Shadow games out of nowhere. With Eldrazi Displacer and Flickerwisp, B/W Eldrazi and Taxes does not have much trouble preventing the spell from working, but it is a reason to hold back on an Eldrazi Displacer activation if the opponent has the mana to cast it. Otherwise, it is important to remember that, as the opponent is on a Thoughtseize deck, keeping a hand on the draw that relies on Aether Vial resolving is very risky (unless an extra Aether Vial is in hand).</p>
                <br>
                <br>
                <h3>Strategies and Interactions</h3>
                <p>The most important strategy is managing the opponent's life total. Every attack made at them is growing their Death's Shadows, so there might be times when it is best to be conservative. If you expect the game to go long, then it is wise to hold off attackers until a win condition is found (Eldrazi Displacer, Flickerwisp). Attacking the Grixis Death's Shadow player when they have a Death's Shadow on board must be done with caution. The Death's Shadow stats will be equal to their life total <i>after</i> damage is dealt, making ground attacks tricky. When the opponent has a Death's Shadow in play, do not forget about the ways they can lose life at instant speed before blocking. A fetch land in play does the trick, along with a Lightning Bolt or Street Wraith in hand. Speaking of Street Wraith, cycling it is an activated ability, Phyrexian Revoker or Pithing Needle can turn it off. There are times where the opponent will have a Fatal Push in their hand, but no way to turn on revolt. Therefore, it is better to not blink their Death's Shadows and Gurmag Anglers. Instead, try to block with a creature and then blink it with Eldrazi Displacer so that their creature still does not get in damage and revolt is not active on their side of the board. Finally, when using Wasteland Strangler's ability, keep in mind that the opponent has ways to use their graveyard. Gurmag Angler and Snapcaster Mage both rely on the graveyard, so it is usually better to return an exiled creature than an exiled removal spell.</p>
                <br>
                <hr>
                <h2>Postboard Specifics</h2>
                <br>
                <h3>Sideboarding</h3>
                <br>
                <div class="row">
                    <div class="col-3">
                        <h4>In (play):</h4>
                    </div>
                    <div class="col-9">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Fatal+Push&type=card" class="cardImgMUG" alt="Fatal Push">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Fatal+Push&type=card" class="cardImgMUG" alt="Fatal Push">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Rest+in+Peace&type=card" class="cardImgMUG" alt="Rest in Peace">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Burrenton+Forge-Tender&type=card" class="cardImgMUG" alt="Burrenton Forge-Tender">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Kambal,+Consul+of+Allocation&type=card" class="cardImgMUG" alt="Kambal, Consul of Allocation">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Kambal,+Consul+of+Allocation&type=card" class="cardImgMUG" alt="Kambal, Consul of Allocation">
                    </div>
                </div>
                <p>Against Grixis Death's Shadow, answers to their threats are what come in. Fatal Push answers Death's Shadow and other post-board creatures such as Grim Lavamancer, Izzet Staticaster, and Kalitas, Traitor of Ghet. However, Since Grixis Death's Shadow only has eight main threats, extra removal spells for the said threats is valuable. That being said, Fatal Push only answers half of those threats (Gurmag Angler's converted mana cost is seven), so two Fatal Pushes are enough. In addition, Rest in Peace is an excellent sideboard card. If played early on, it renders Gurmag Anglers useless (unless the game drags on long enough for the opponent to gain seven lands). In addition, Rest in Peace turns off Snapcaster Mage's ability, lowering the amount of removal the opponent has access to. Finally, Rest in Peace weakens Faithless Looting, Liliana, the Last Hope, and Kolaghan's Command. However, drawing too many of these noncreature spells is not ideal, so running one Rest in Peace on the play post-board is best. Too much graveyard hate and the odds of drawing multiple increases, and a resolved Rest in Peace is not game over against Grixis Death's Shadow compared to heavy graveyard decks like Dredge, especially since most Grixis Death's Shadow lists cannot answer Rest in Peace. Burrenton Forge-Tender is a card that comes in as well. While the opponent has black removal spells such as Fatal Push and post-board Liliana, the Last Hope, Lightning Bolt is still a card they have access to. In addition, the majority of Grixis Death's Shadow decks run an Anger of the Gods or two in their sideboard, a card that is very powerful against B/W Eldrazi and Taxes that Burrenton Forge-Tender counters. Plus, protecting a hatebear, Tidehollow Sculler, Eldrazi Displacer, or Flickerwisp from a Lightning Bolt is a powerful tempo play. On the other hand, Grixis Death's Shadow does not typically have any red creatures and only has about 4-5 red spells post-board, so there is definitely reasoning to not bring them in. I personally feel that in the current meta, only one should be brought in, as there are not many cuts that want to be made anyway from the main deck. Finally, Kambal, Consul of Allocation is an excellent choice against the deck full of noncreature spells that brings itself to a low life total. Often times, Grixis Death's Shadow falls down to a very low life total, so getting Kambal, Consul of Allocation into play can put them into dire situations, especially when their life total is five or less and they lack an answer to Kambal, Consul of Allocation in hand.</p>
                <br>
                <p>Other cards that are not in the deck that can be brought in include Shalai, Voice of Plenty, Kitchen Finks, Auriok Champion, and other removal spells. Having access to another hard-to-kill flier is excellent, along with some more defensive, durable creatures like Kitchen Finks and Auriok Champion. Finally, Gideon, Ally of Zendikar is worth mentioning. Grixis Death's Shadow is a deck that can play slow and value-oriented, but their life-loss playstyle tends to force them to go fast in this matchup, else they die to B/W Eldrazi and Taxes's fliers. Therefore, I feel that Gideon, Ally of Zendikar is too slow and low-impact. With four mana, a flier or a piece of disruption is better than a planeswalker that can die. Plus, it does not work well with Aether Vial nor Thalia, Guardian of Thraben. That being said, making a chump blocker each turn to stall, attacking them with an indestructible 5/5, or even giving +1/+1 to your creatures are all solid plays. I will be testing a Gideon, Ally of Zendikar against Grixis Death's Shadow, but advise to not board him in until I update this guide with the results.</p>
                <br>
                <div class="row">
                    <div class="col-3">
                        <h4>Out (Play):</h4>
                    </div>
                    <div class="col-9">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Aether+Vial&type=card" class="cardImgMUG" alt="Aether Vial">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Wasteland+Strangler&type=card" class="cardImgMUG" alt="Wasteland Strangler">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Wasteland+Strangler&type=card" class="cardImgMUG" alt="Wasteland Strangler">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Wasteland+Strangler&type=card" class="cardImgMUG" alt="Wasteland Strangler">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" class="cardImgMUG" alt="Flickerwisp">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" class="cardImgMUG" alt="Flickerwisp">
                    </div>
                </div>
                <p>On the play, Aether Vial is a card that should be trimmed. While a turn one Aether Vial is great, drawing multiples is unideal, especially against a deck that uses Thoughtseize. As stated above, running too many noncreature spells is a setup for drawing too few threats, especially when the noncreature spells are almost useless after turn one like Aether Vial. In addition, Kolaghan's Command is a card that weakens Aether Vial's power in the matchup. All that said, it is still very good on the play, so only one needs to be cut. The next card to cut is Wasteland Strangler. As mentioned before, there are niche cases where Wasteland Strangler is great. However, more often than not, it is a 3/2 for three mana. Better cards such as Kambal, Consul of Allocation are available post-board compared to a high-ceiling low-floor Eldrazi. The final card to trim is Flickerwisp. While the flier is very good at getting damage through and stopping attackers/blockers, it is much weaker post-board. Cards such as Izzet Staticaster and Liliana, the Last Hope destroy the one-toughness flier. More general removal spells are also available post-board on the opponent's side, so the flier is less likely to survive and get damage through. If your B/W Eldrazi and Taxes version has Phyrexian Revoker, however, that is a better card to cut than Flickerwisp. It is more exposed to removal spells, such as a normal Fatal Push and Kolaghan's Command shatter mode. Phyrexian Revoker also has limited targets, making it a weak card in the post-board matchup.</p>
                <br>
                <div class="row">
                    <div class="col-3">
                        <h4>In (draw):</h4>
                    </div>
                    <div class="col-9">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Fatal+Push&type=card" class="cardImgMUG" alt="Fatal Push">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Fatal+Push&type=card" class="cardImgMUG" alt="Fatal Push">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Rest+in+Peace&type=card" class="cardImgMUG" alt="Rest in Peace">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Rest+in+Peace&type=card" class="cardImgMUG" alt="Rest in Peace">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Burrenton+Forge-Tender&type=card" class="cardImgMUG" alt="Burrenton Forge-Tender">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Kambal,+Consul+of+Allocation&type=card" class="cardImgMUG" alt="Kambal, Consul of Allocation">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Kambal,+Consul+of+Allocation&type=card" class="cardImgMUG" alt="Kambal, Consul of Allocation">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Gideon,+Ally+of+Zendikar&type=card" class="cardImgMUG" alt="Gideon, Ally of Zendikar">
                    </div>
                </div>
                <p>The only change is to bring in a second Rest in Peace on the draw. On the draw, especially post-board, the games go a lot slower, so having access to an extra Rest in Peace is valuable. Rest in Peace is not as good on the play, as it does not pressure the opponent. That being said, B/W Eldrazi and Taxes is typically unable to win through disruption and attacking on the draw before the opponent lands a threat and begins to stabilize. Therefore, having a second Rest in Peace helps win the more attrition-based game that comes from being on the draw post-board. Also, Gideon, Ally of Zendikar is not a bad inclusion on the draw. The reason for this is that there are more cuttable cards on the draw (Flickerwisp gets much worse as will be discussed below) and it is a very good threat in a slower game.</p>
                <br>
                <div class="row">
                    <div class="col-3">
                        <h4>Out (Draw):</h4>
                    </div>
                    <div class="col-9">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Aether+Vial&type=card" class="cardImgMUG" alt="Aether Vial">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Aether+Vial&type=card" class="cardImgMUG" alt="Aether Vial">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Wasteland+Strangler&type=card" class="cardImgMUG" alt="Wasteland Strangler">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Wasteland+Strangler&type=card" class="cardImgMUG" alt="Wasteland Strangler">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Wasteland+Strangler&type=card" class="cardImgMUG" alt="Wasteland Strangler">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" class="cardImgMUG" alt="Flickerwisp">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" class="cardImgMUG" alt="Flickerwisp">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" class="cardImgMUG" alt="Flickerwisp">
                    </div>
                </div>
                <p>On the draw, it is best to cut an additional Aether Vial compared to sideboarding on the play. Aether Vial is much worse on the draw, and it is also easier for the opponent to cast Kolaghan's Command on the Aether Vial before the artifact generates enough of an advantage. The other major change compared to sideboarding on the play is the amount of Flickerwisps cut from the deck. Flickerwisp is significantly worst on the draw, as B/W Eldrazi and Taxes's role is more defensive on the draw. This means that Flickerwisp is only really good with Aether Vial (only two in the deck) or getting blinked by an Eldrazi Displacer (difficult considering the plethora of removal Grixis Death's Shadow has access to post-board). Otherwise, Flickerwisp's ability does not help aside from blinking Blade Splicer. Removing a blocker for a turn is much worse on the draw compared to on the play. In addition, Liliana, the Last Hope is a threat that must be dealt with on the draw, whereas she can be ignored on the play since it is much easier to tax the opponent when going first. More often than not, Liliana, the Last Hope is too slow when B/W Eldrazi and Taxes is on the play, whereas she can easily come into play when we are on the draw and take over the game. Therefore, Flickerwisp loses a lot of its strengths on the draw post-board, making it a very cuttable card. It is better to leave on in compared to the third Aether Vial or Fatal Push, as you do not want to have too little threats.</p>
                <br>
                <h4>What the Opponent Brings In</h4>
                <div class="row">
                    <div class="col-12">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Grim+Lavamancer&type=card" class="cardImgMUG" alt="Grim Lavamancer">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Lightning+Bolt&type=card" class="cardImgMUG" alt="Lightning Bolt">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Abrade&type=card" class="cardImgMUG" alt="Abrade">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Kolaghan's+Command&type=card" class="cardImgMUG" alt="Kolaghan's Command">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Liliana,+the+Last+Hope&type=card" class="cardImgMUG" alt="Liliana, the Last Hope">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Anger+of+the+Gods&type=card" class="cardImgMUG" alt="Anger of the Gods">
                    </div>
                </div>
                <p>The primary cards brought in by the Grixis Death's Shadow opponent are spells that remove creatures. Grim Lavamancer excels at removing the many small creatures in B/W Eldrazi and Taxes- from the hatebears to Flickerwisp. Additional Lightning Bolts, Fatal Pushes, and Dismembers are also popularly sided in versus B/W Eldrazi and Taxes. Abrade is a removal spell that comes in post-board as well. As seen in the sample list, the majority of removal spells brought in post-board are red, so Burrenton Forge-Tender gets more targets compared to their removal suite preboard. In addition, one or two Kolaghan's Command linger in sideboards of Grixis Death's Shadow players. Kolaghan's Command is one of their best cards in the matchup, as it often destroys two of the B/W Eldrazi and Taxes player's permanents. In fact, because of Kolaghan's Command, an extra Aether Vial is brought out of the deck than usual. The single best card against B/W Eldrazi and Taxes from Grixis Death's Shadow (and arguably the best card against B/W Eldrazi and Taxes as a whole) is Liliana, the Last Hope. For only three mana, she poses a huge threat, as her +1 ability kills Thalia, Guardian of Thraben, Flickerwisp, Blade Splicer, Burrenton Forge-Tender, and other one-toughness creatures ran in B/W Eldrazi and Taxes. Her plus one is the primary reason why I take out a Flickerwisp on the draw. On top of this, her ultimate essentially wins the game, making the hard-to-kill planeswalker a ticking time bomb. While not in the sample list, Anger of the Gods is yet another two for one removal spell that is effective against B/W Eldrazi and Taxes. Overall, any sort of removal spell is brought in versus B/W Eldrazi and Taxes on the Grixis Death's Shadow opponent.</p>
                <br>
                <h3>How the Matchup Plays Out Post-board</h3>
                <br>
                <p>Post-board, the games are better for Grixis Death's Shadow than preboard, but it is still favored for the B/W Eldrazi and Taxes pilot. As mentioned above, two for one removal spells such as Kolaghan's Command and Liliana, the Last Hope grant powerful tools to the opponent to help them in the matchup. However, Rest in Peace is very good at shutting down the opponent's strategy. Sometimes the two mana enchantment does not do much of anything. However, as it shuts down their four Gurmag Anglers and turns their Snapcaster Mages into Ambush Vipers, it is a very strong tool that gives B/W Eldrazi and Taxes a route to steal games, especially when forced to play a more defensive game on the draw. Acquiring more answers to the opponent's threats also helps buy time or get enough points of damage through. In terms of post-board gameplay, the matchup is not too different than preboard, except it is usually slower as both sides have extra removal spells. In addition, the majority of Grixis Death's Shadow players take out their Stubborn Denials against B/W Eldrazi and Taxes, so there is no need to play around that counterspell. One noteworthy thing to keep in mind is the importance of the opponent's life total. This is more so essential post-board where a Kambal, Consul of Allocation can lock the opponent off of casting noncreature spells. Protecting Kambal, Consul of Allocation is important, especially when their life total is very low. All in all, the matchup is still favored to B/W Eldrazi and Taxes post-board, but it is much closer to even than the preboard game.</p>
                <br>
                <hr>
                <h3>Conclusion</h3>
                <!--Wrap up... summary of MU and such-->
                <p>All things considered, Grixis Death's Shadow is a very favorable matchup for B/W Eldrazi and Taxes. Preboard, the hatebears and hand-disruptive creatures excel at making their one mana noncreature spells inefficient, while the other creatures finish them off. The matchup gets slightly worse post-board, but it is still favorable. Fatal Push and Rest in Peace answers the opponent's threats, while Kambal, Consul of Allocation can shut down certain cards. However, their additional removal spells and two for one cards, especially Liliana, the Last Hope, help them combat B/W Eldrazi and Taxes's creatures. The B/W Eldrazi and Taxes pilot simultaneously switches roles in the match, playing a more control centric/value driven gameplan whenever the opponent lands a big creature while being aggressive when they are stumbling and digging for their tools. Overall, this is one of the matchups that B/W Eldrazi and Taxes players want to have, especially with Grixis Death's Shadow leaving their Kolaghan's Commands out of their main deck.</p>
                <br>
                <div class="panel-group" id="accordion4">
                        <div class="panel panel-format">
                        <div class="panel-heading">
                          <h3 class="panel-title">
                            <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion4" href="#collapse1d" id="tldr">
                            TL;DR- Grixis Death's Shadow Matchup</a>
                          </h3>
                        </div>
                        <div id="collapse1d" class="panel-collapse collapse">
                          <div class="panel-body">
                              <p>Grixis Death's Shadow is a favorable matchup for B/W Eldrazi and Taxes, as their gameplan and spells lines up very well with the strategy and overall build of B/W Eldrazi and Taxes decks. The roles in this matchup change a lot during a course of the game, from attacking to defending. Generally, getting an aggressive start through hatebears, hand-disruptive creatures, and beater creatures and winning off of Flickerwisp/Eldrazi Displacer is our game plan. The Grixis Death's Shadow opponent will try to remove our threats through discard and removal, along with deploying their threats (Gurmag Angler/Death's Shadow) to win the game. Through an aggressive early game, however, their life total will often be low enough that an eventual flier or all-out attack will finish them off.</p>
                              <br>
                              <p>When sideboarding, bring in removal spells and graveyard hate. Do not bring in too many Rest in Peaces (especially on the play where it is slow), as they cannot remove the first, but it is still excellent against Grixis Death's Shadow. Kambal, Consul of Allocation also comes in post-board to further tax their noncreature spells. Aether Vials are trimmed, along with weaker creatures such as Wasteland Strangler and Flickerwisp. The post-board games play out slower, as the opponent has significantly more removal spells, making them slightly harder. Cards such as Liliana, the Last Hope pose a problem if not answered. There are not many interactions in this matchup, but it is worth noting that the opponent can use Street Wraith or a fetch land to lower their life total in order to grow their Death's Shadow. Keep this in mind before declaring blockers. Also, if they take damage, the life total that they go down to will override Death's Shadow current stats, making attacking into it tricky.</p>
                          </div>
                        </div>
                      </div>      
              </div>
                <hr>
                <h4>Additional Content</h4>
                <div class="row">
                    <div class="col-sm-4">
                        <h2><a href="dredge">Previous Matchup Guide: Dredge (B/W E&T)</a></h2>
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