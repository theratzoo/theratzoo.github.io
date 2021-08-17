<?php
    include("../../scripts/searchscript.php"); //actually works
    
?>
<?php
    include("../../scripts/cardlistdb.php"); //does work
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
    
    <meta name="description" content="Modern matchup guide against Grixis Death's Shadow for Death and Taxes.">
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
                <p>Overall, Grixis Death's Shadow is a favorable matchup for Death and Taxes, both before and after sideboarding. Death and Taxes's spells line up very well against the spells in Grixis Death's Shadow. The general plan of a Grixis Death's Shadow player is to disrupt the opponent with discard and removal while using cantrips such as Serum Visions and Faithless Looting to dig for their threats and win the game with a Death's Shadow and/or Gurmag Angler. The matchup tends to be interesting in terms of Death and Taxes's role- they are typically the defender in the mid game and the aggressor in the early and late game. Essentially, the Death and Taxes player switches roles based on the opponent's creature count and their own flier count. Since Grixis Death's Shadow relies so heavily on one mana spells, Thalia, Guardian of Thraben taxes their mana base significantly. Leonin Arbiter also hits them very well, as their deck consists of an above average number of fetch lands. Furthermore, as they need to get to a low life total to active Death's Shadow, fliers such as Flickerwisp and Restoration Angel excel at finishing the game while Blade Splicer and Eldrazi stall their ground creatures. Post-board, the opponent gets more answers, but the matchup remains favorable. All in all, the matchup is at least 60% in the Death and Taxes's player's favor due to how well its cards perform against the strategy of Grixis Death's Shadow.</p>
                <hr>
                <h2>Preboard Specifics</h2>
                <br>
                <h3>How Game 1 Plays Out</h3>
                <p>No matter the turn order, game one plays out very well for the Death and Taxes's player. As mentioned above, the Grixis Death's Shadow player follows a linear gameplan of disruption, digging, and threat deployment. However, because of Death and Taxes's disruption, they usually cannot navigate as smoothly as they want. Furthermore, the fliers in Death and Taxes, especially Restoration Angel, discourage the Grixis Death's Shadow pilot from depleting their life total too much. Therefore, the matchup becomes a pseudo race of threats- the Grixis Death's Shadow player tries to reach their big creatures and kill the Death and Taxes's pilot before they can deploy and swing with their fliers.</p>
                <br>
                <p>Sometimes, a Leonin Arbiter and/or Thalia, Guardian of Thraben can lock out the opponent or slow them down enough to win game one on their own. Typically, however, the opponent has enough removal to prevent a hatebear from stealing the game. Since there are so many creatures in Death and Taxes that the Grixis Death's Shadow player must remove to win the game, it is very difficult for them to amass enough removal to prevent an Eldrazi Displacer or flier from finishing them off. Because of that limitation in answers, the Grixis Death's Shadow player looks to be the more aggressive deck in game one, with the Death and Taxes player playing defensive for the most part. However, it is important, when playing this matchup, to perform a delicate balance of attacking and holding back- every attack grows their Death's Shadow, but pressuring their life total is necessary for victory. Usually, it is best to attack only if a flier is on the battlefield or close to being cast, otherwise, it is better to stall until an actual threat is available.</p>
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
                <p>Both hatebears are excellent creatures in this matchup. Thalia, Guardian of Thraben is phenomenal, as the opponent runs around 30 noncreature spells in their main deck, most of which are one mana. Doubling the cost of an opponent's spell is very powerful, especially when it forces them to spend a whole turn casting an unimpactful spell (Serum Visions, Thought Scour, Faithless Looting, etc). Her first strike keyword is relevant at times, as it allows her to attack through a Snapcaster Mage (unlike Leonin Arbiter). Thalia, Guardian of Thraben tends to eat a Fatal Push or Lightning Bolt almost immediately because of her effectiveness against Grixis Death's Shadow. But if she survives a few turns, the opponent is often taxed too much to make a large enough impact (unless their hand is full of disruption and threats rather than cantrips). Leonin Arbiter is also very good, but for a different reason. Since Death's Shadow requires the opponent to go to low life, their deck is full of fetch lands. Therefore, Leonin Arbiter is very effective at taxing the opponent's mana. His floor is lower than Thalia, Guardian of Thraben's, since he is often killed before taxing (whereas Thalia, Guardian of Thraben will at least make the kill spell cost an additional mana). However, his ceiling is very high. Locking out the opponent with a Leonin Arbiter or two plus at least one Ghost Quarter happens more often than you would think, especially on the play. All in all, both hatebears are excellent against Grixis Death's Shadow, as their gameplan relies on both cheap noncreature spells and fetch lands.</p>
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
                <p>Wall of Omens is alright in the matchup. Drawing a card and chump blocking a Gurmag Angler or Death's Shadow is not a bad deal. When the game is one where it is best to stall and play defensive, Wall of Omens is invaluable. However, there are often better Death and Taxes creatures available. One creature that often performs better than Wall of Omens is Blade Splicer. The "first" Blade Splicer is not very exciting, but casting an additional Blade Splicer or blinking it provides two first strike Golems that prevent Gurmag Anglers from attacking. In addition, Blade Splicer is not a terrible attacker. The flexibility of attacking, chump blocking, or threatening a trade or better is what makes Blade Splicer better than Wall of Omens. Generally, Blade Splicer manages to get in a hit before playing defensive. Waiting to amass a large number of creatures to go wide against the Grixis Death's Shadow opponent is another common strategy.</p>
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
                <p>Both Flickerwisp and Restoration Angel are great in the matchup, especially preboard. Since Grixis Death's Shadow lacks fliers and gets its own life total very low, having access to three power fliers is very threatening. Typically, one of these fliers is how Death and Taxes finishes off a Grixis Death's Shadow player, so it is best to be aggressive instead of trading/chump blocking. In particular, Flickerwisp's ability is useful at preventing one of their creatures from blocking, while Restoration Angel's higher toughness keeps it out of Lightning Bolt range. Overall, they are both very valuable spells in the first match, providing the avenue to victory.</p>
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
                <p>The two Eldrazi in the sample deck are high variance spells against Grixis Death's Shadow. Thought-Knot Seer is great if played before the opponent can stick one of their threats, otherwise, the Eldrazi cannot attack well. In addition, as Grixis Death's Shadow relies on cheap spells, their hand is sometimes void of powerful spells to exile from their hand. Still, an early Thought-Knot Seer is valuable disruption, especially in post-board matches where the opponent has more expensive bombs. Eldrazi Displacer's primary issue lies in its vulnerability. The Eldrazi dies to a Lightning Bolt or revolted Fatal Push, both of which Grixis Death's Shadow has an abundance of. Getting a three drop creature killed by a one mana spell before it can generate value is never a good feeling. On the other hand, Eldrazi Displacer's ability is excellent in this matchup. Not only does it allow the Eldrazi to protect other creatures from Grixis Death's Shadow's many removal spells, but it also provides an avenue for ground creatures to attack or simply prevent an attack or two on the opponent's side of the board. Since Eldrazi Displacer is very effective against the opponent, waiting until it can be protected by a Restoration Angel or Flickerwisp plus Aether Vial is ideal, so long as the opponent is not going too fast.</p>
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
                <p>Aether Vial is reasonable in the matchup. Since Grixis Death's Shadow has a plethora of removal, giving Flickerwisp flash is excellent. In addition, as Ghost Quarter and other land destruction lands are often used against their fragile mana base, having a way to cheat creatures into play is valuable. However, Aether Vial is not great if the opponent has lots of discard, as it can leave the Death and Taxes pilot's hand creatureless, rendering Aether Vial useless. Kolaghan's Command is a very effective answer versus Aether Vial, but it is now relegated to the sideboard. Path to Exile is a great spell against Grixis Death's Shadow, as it cleanly answers their Death's Shadows and Gurmag Anglers. While it does not pair well with Stubborn Denial, the Grixis Death's Shadow opponent often boards them out, so the removal spell remains a powerful ally pre and post-board. In terms of niche cards, Remorseful Cleric is not very good. At best, it can stop a Snapcaster Mage's target, while pressuring their life total in the air. At worst, it is just a small flier that dies to all their removal spells. Phyrexian Revoker is bad as well (not enough targets), especially post-board. Dismember is another excellent removal spell (will be discussed later). Chalice of the Void is a card Grixis Death's Shadow often loses to.</p>
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
                <p>Removal is always a hindrance to Death and Taxes. The typical removal suit found in Grixis Death's Shadow consists of a few Fatal Push, Dismember, and Lightning Bolt. Some lists run a Kolaghan's Command or two as well, a card that is very effective against Death and Taxes. Destroying both a hatebear and an Aether Vial or Golem token is very powerful. The primary card worth looking out for in the preboard game is Snapcaster Mage. While it is only a 2/1 for two mana, its ability is great for the deck with mostly one mana spells. Often enough, Snapcaster Mage is flashing back a removal spell, depending on the opponent's graveyard. Therefore, having access to graveyard hate such as Remorseful Cleric or a main deck Relic of Progenitus is valuable in the first game. In addition, the 2/1 body excels at trading with Leonin Arbiter, so be careful when attacking with that particular hatebear. Finally, Temur Battle Rage is a card that wins Grixis Death's Shadow games out of nowhere. With Eldrazi Displacer and Flickerwisp, Death and Taxes does not have much trouble preventing the spell from working, but it is a reason to hold back on an Eldrazi Displacer activation if the opponent has the mana to cast it. Otherwise, it is important to remember that, as the opponent is on a Thoughtseize deck, keeping a hand on the draw that relies on Aether Vial resolving is very risky (unless an extra Aether Vial is in hand).</p>
                <br>
                <br>
                <h3>Strategies and Interactions</h3>
                <p>The most important strategy is managing the opponent's life total. Every attack made at them is growing their Death's Shadows, so there will be times where it is best to be conservative. If you expect the game to go long, then it is wise to hold off attackers until a win condition is found (Restoration Angel, Flickerwisp). Attacking the Grixis Death's Shadow player when they have a Death's Shadow on board must be done with caution. The Death's Shadow stats will be equal to their life total <i>after</i> damage is dealt, making ground attacks tricky. When the opponent has a Death's Shadow in play, do not forget about the ways they can lose life at instant speed before blocking. A fetch land in play does the trick, along with a Lightning Bolt or Street Wraith in hand. Speaking of Street Wraith, cycling it is an activated ability, Phyrexian Revoker or Pithing Needle can turn it off. There are times where the opponent will have a Fatal Push in their hand, but no way to turn on revolt. Therefore, do not blink or remove their permanents to protect Eldrazi and fliers!</p>
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
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Rest+in+Peace&type=card" class="cardImgMUG" alt="Rest in Peace">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Rest+in+Peace&type=card" class="cardImgMUG" alt="Rest in Peace">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Burrenton+Forge-Tender&type=card" class="cardImgMUG" alt="Burrenton Forge-Tender">
                    </div>
                </div>
                <p>Against Grixis Death's Shadow, answers to their threats are what come in. Dismember answers a Gurmag Angler, smaller Death's Shadow, or any creature that comes out of their sideboard (Grim Lavamancer, Kalitas, Traitor of Ghet, etc.). Since Grixis Death's Shadow only has eight main threats, extra removal spells for the said threats is valuable. In addition, Rest in Peace is an excellent sideboard card. If played early on, it renders Gurmag Anglers useless (unless the game drags on long enough for the opponent to gain seven lands). In addition, Rest in Peace turns off Snapcaster Mage's ability, lowering the amount of removal the opponent has access to. However, drawing too many of these noncreature spells is not ideal, so only running two Rest in Peace post-board is best. Too much graveyard hate and the odds of drawing multiple increases, and a resolved Rest in Peace is not game over against Grixis Death's Shadow compared to heavy graveyard decks like Dredge. The last card present in the same list's sideboard that can come in is Burrenton Forge-Tender. While the opponent has black removal spells such as Fatal Push and post-board Liliana, the Last Hope, Lightning Bolt is still a card they have access to. In addition, the majority of Grixis Death's Shadow decks run an Anger of the Gods or two in their sideboard, a card that is very powerful against Death and Taxes that Burrenton Forge-Tender counters. Plus, protecting a hatebear or flier from a Lightning Bolt is good, especially if on the play. On the other hand, their deck does not typically have any red creatures and only has about 4-5 red spells post-board, so there is definitely reasoning to not bring them in. I personally feel that in the current meta, only one should be brought in, as there are not many cuts that want to be made anyway from the main deck. Other cards that are not in the deck that can be brought in include Shalai, Voice of Plenty, Kitchen Finks, Auriok Champion, and other removal spells. Having access to another hard-to-kill flier is excellent, along with some more defensive, durable creatures like Kitchen Finks and Auriok Champion. Finally, Gideon, Ally of Zendikar is worth mentioning. Grixis Death's Shadow is a deck that can play slow and value-oriented, but their life-loss playstyle tends to force them to go fast in this matchup, else they die to Death and Taxes's fliers. Therefore, I feel that Gideon, Ally of Zendikar is too slow and low-impact. With four mana, a flier or a piece of disruption is better than a planeswalker that can die. Plus, it does not work well with Aether Vial nor Thalia, Guardian of Thraben. That being said, making a chump blocker each turn to stall, attacking them with an indestructible 5/5, or even giving +1/+1 to your creatures are all solid plays. I will be testing a Gideon, Ally of Zendikar against Grixis Death's Shadow, but advise to not board him in until I update this guide with the results.</p>
                <br>
                <div class="row">
                    <div class="col-3">
                        <h4>Out (Play):</h4>
                    </div>
                    <div class="col-9">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Aether+Vial&type=card" class="cardImgMUG" alt="Aether Vial">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Wall+of+Omens&type=card" class="cardImgMUG" alt="Wall of Omens">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Wall+of+Omens&type=card" class="cardImgMUG" alt="Wall of Omens">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Wall+of+Omens&type=card" class="cardImgMUG" alt="Wall of Omens">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Remorseful+Cleric&type=card" class="cardImgMUG" alt="Remorseful Cleric">
                    </div>
                </div>
                <p>On the play, Aether Vial is a card that should be trimmed. While a turn one Aether Vial is great, drawing multiples is unideal, especially against a deck that uses Thoughtseize. As stated above, running too many noncreature spells is a setup for drawing too few threats, especially when the noncreature spells are almost useless after turn one like Aether Vial. In addition, Kolaghan's Command is a card that weakens Aether Vial's power in the matchup. All that said, it is still very good on the play, so only one needs to be cut. The two drops that are not hatebears are weak on the play as well. Wall of Omens is a nice defensive card, but that is not what Death and Taxes wants to do on the play post-board. Disruption and damage are important, and Wall of Omens achieves neither of these objectives. Finally, Remorseful Cleric is too niche. At best, it can stop a Snapcaster Mage and get in a few damage, but most of the time it is a 2/1 flier for two. Furthermore, it dies to Liliana, the Last Hope, an aspect worth considering post-board (especially on the draw). In other iterations of Death and Taxes, Thraben Inspector can be trimmed on the play but is much better than Wall of Omens. Phyrexian Revoker is also too low impact, plus it dies to Kolaghan's Command's Shatter mode. If you still need a cut or two, Flickerwisp is the next best card to trim, as will be seen below...</p>
                <br>
                <div class="row">
                    <div class="col-3">
                        <h4>Out (Draw):</h4>
                    </div>
                    <div class="col-9">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Aether+Vial&type=card" class="cardImgMUG" alt="Aether Vial">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Aether+Vial&type=card" class="cardImgMUG" alt="Aether Vial">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Wall+of+Omens&type=card" class="cardImgMUG" alt="Wall of Omens">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Remorseful+Cleric&type=card" class="cardImgMUG" alt="Remorseful Cleric">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" class="cardImgMUG" alt="Flickerwisp">
                    </div>
                </div>
                <p>On the draw, it is best to cut an additional Aether Vial compared to sideboarding on the play. Aether Vial is much worse on the draw, and it is also easier for the opponent to cast Kolaghan's Command on the Aether Vial before the artifact generates enough of an advantage. The other major change compared to sideboarding on the play is the amount of Wall of Omens and Flickerwisps that are cut. In general, they both should be trimmed on the draw. Flickerwisp is significantly worst on the draw, as Death and Taxes's role stresses more on being defensive rather than offensive. In addition, Liliana, the Last Hope is a threat that must be dealt with on the draw, whereas she can be ignored on the play since it is much easier to tax the opponent on the play. Furthermore, Wall of Omens is excellent at buying time against their threats, very relevant when the Grixis Death's Shadow opponent is on the play. Remorseful Cleric remains too awkward and weak to keep in the deck. In terms of other Death and Taxes cards to cut, the advice in the prior paragraph holds true.</p>
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
                <p>The primary cards brought in by the Grixis Death's Shadow opponent are spells that remove creatures. Grim Lavamancer excels at removing the many small creatures in Death and Taxes- from the hatebears to Flickerwisp. Additional Lightning Bolts, Fatal Pushes, and Dismembers are also popularly sided in versus Death and Taxes. Abrade is a removal spell that comes in post-board as well. As seen in the sample list, the majority of removal spells brought in post-board are red, so Burrenton Forge-Tender gets more targets compared to their removal suite preboard. In addition, one or two Kolaghan's Command linger in sideboards of Grixis Death's Shadow players. Kolaghan's Command is one of their best cards in the matchup, as it often destroys two of the Death and Taxes player's permanents. In fact, because of Kolaghan's Command, an extra Aether Vial is brought out of the deck than usual. The single best card against Death and Taxes from Grixis Death's Shadow (and arguably the best card against Death and Taxes as a whole) is Liliana, the Last Hope. For only three mana, she poses a huge threat, as her +1 ability kills Thalia, Guardian of Thraben, Flickerwisp, Remorseful Cleric, Blade Splicer, Phyrexian Revoker, and other one-toughness creatures ran in Death and Taxes iterations. Her plus one is the primary reason why I take out a Flickerwisp on the draw. On top of this, her ultimate essentially wins the game, making the hard-to-kill planeswalker a ticking time bomb. While not in the sample list, Anger of the Gods is yet another two for one removal spell that is effective against Death and Taxes. Overall, any sort of removal spell is brought in versus Death and Taxes on the Grixis Death's Shadow opponent.</p>
                <br>
                <h3>How the Matchup Plays Out Post-board</h3>
                <br>
                <p>Post-board, the games are better for Grixis Death's Shadow than preboard, but it is still favored for the Death and Taxes pilot. As mentioned above, two for one removal spells such as Kolaghan's Command and Liliana, the Last Hope grant powerful tools to the opponent to help them in the matchup. However, Rest in Peace is very good at shutting down the opponent's strategy. Sometimes the two mana enchantment does not do much of anything. However, as it shuts down their four Gurmag Anglers and turns their Snapcaster Mages into Ambush Vipers, it is a very strong tool that gives Death and Taxes a route to steal games. Acquiring more answers to the opponent's threats also helps in the plan to stall until a flier is in play. In terms of post-board gameplay, the matchup is not too different than preboard, except it is usually slower as both sides have extra removal spells. In addition, the majority of Grixis Death's Shadow players take out their Stubborn Denials against Death and Taxes, so there is no need to play around that counterspell. All in all, the matchup is still favored to Death and Taxes post-board, but it is much closer to even than the preboard game.</p>
                <br>
                <hr>
                <h3>Conclusion</h3>
                <!--Wrap up... summary of MU and such-->
                <p>All things considered, Grixis Death's Shadow is a very favorable matchup for Death and Taxes. Preboard, the hatebears excel at making their one mana noncreature spells inefficient, while the fliers and other creatures can kill their low life total. The matchup gets slightly worse post-board, but it is still favorable. Rest in Peace and Dismember further disrupt their gameplan. However, their additional removal spells and two for one cards, especially Liliana, the Last Hope, help them combat Death and Taxes's creatures. The Death and Taxes pilot simultaneously switches roles in the match, playing a more control centric/value driven gameplan whenever the opponent lands a big creature while being aggressive when they are stumbling and digging for their tools. Overall, this is one of the matchups that Death and Taxes players want to have, especially with Grixis Death's Shadow leaving their Kolaghan's Commands out of their main deck.</p>
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
                              <p>Grixis Death's Shadow is a favorable matchup for Eldrazi and Taxes, as their gameplan and spells lines up very well with the strategy and overall build of Death and Taxes decks. The roles in this matchup change a lot during a course of the game, from attacking to defending. Generally, getting an aggressive start through hatebears and beater creatures and winning off of a flyer is our game plan. The Grixis Death's Shadow opponent will try to remove our threats through discard and removal, along with deploying their threats (Gurmag Angler/Death's Shadow) to win the game. Through an aggressive early game, however, their life total will often be low enough that an eventual flier or all-out attack will finish them off.</p>
                              <br>
                              <p>When sideboarding, bring in removal spells and graveyard hate. Do not bring in too many Rest in Peaces, as they cannot remove the first, but it is still excellent against Grixis Death's Shadow. Aether Vials are trimmed, along with weaker creatures such as Wall of Omens, Phyrexian Revoker, and some of the three drops. The post-board games play out slower, as the opponent has significantly more removal spells, making them slightly harder. Cards such as Liliana, the Last Hope pose a problem if not answered. There are not many interactions in this matchup, but it is worth noting that the opponent can use Street Wraith or a fetch land to lower their life total in order to grow their Death's Shadow. Keep this in mind before declaring blockers. Also, if they take damage, the life total that they go down to will override Death's Shadow current stats, making attacking into it tricky.</p>
                          </div>
                        </div>
                      </div>      
              </div>
                <hr>
                <h4>Additional Content</h4>
                <div class="row">
                    <div class="col-sm-4">
                        <h2><a href="dredge">Previous Matchup Guide: Dredge</a></h2>
                    </div>
                    <div class="col-sm-4" id="latestArticle">
                        <h2><a href="/spicespace/">Latest Addition: Spice Space 3- Ravnica Allegiance Cards</a></h2>
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