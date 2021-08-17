<?php
    include("../../scripts/searchscript.php"); //actually works
    
?>
<?php
    include("../../scripts/cardlistdb.php"); //does work
?>
<?php
    $filename = 'dredge';
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
    
    <meta name="description" content="Modern matchup guide against Dredge for Death and Taxes.">
    <meta name="keywords" content="Magic the Gathering, modern, death and taxes, dnt, modern dnt, ent, eldrazi and taxes, dredge, graveyard, rest in peace, matchup">
    

        <title>Modern Matchup Guide- Dredge</title>
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
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-sm-9">
                            <h1>Matchup Guide: Dredge</h1>
                        </div>
                        <div class="col-sm-3">
                            <h2><a href="#tldr">TL;DR</a></h2>
                        </div>
                    </div>
                
                </div>
                <br>
                <div class="row">
                    <div class="col-4 mug-img">
                        <img src="https://pbs.twimg.com/media/DqccaEmU0AE6mxm.jpg" class="headImg" alt="Creeping Chill">
                    </div>
                    <div class="col-4 mug-img">
                        <img src="https://s3-us-west-2.amazonaws.com/echomage/cards/TSP/114909.crop.hq.jpg" class="headImg" alt="Conflagrate">
                    </div>
                    <div class="col-4 mug-img">
                        <img src="https://78.media.tumblr.com/fe00bc908545335cecdbf8f82d2a955b/tumblr_ob349vcdpC1vn68joo1_1280.jpg" class="headImg" alt="Prized Amalgam">
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
                    Dredge Stock List</a>
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
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Bloodghast</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Golgari Thug</a></td>
                                
                            </tr> 
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Narcomoeba</a></td>
                                
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Prized Amalgam</a></td>
                                
                            </tr> 
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Stinkweed Imp</a></td>
                                
                            </tr>
                            <tr>
                                <th>Spells:</th>
                            </tr>
                           <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Conflagrate</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Darkblast</a></td>
                                
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Faithless Looting</a></td>
                                
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Cathartic Reunion</a></td>
                                
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Life from the Loam</a></td>
                                
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Creeping Chill</a></td>
                                
                            </tr>
                            <tr>
                                <th>Artifacts:</th>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Shriekhorn</a></td>
                                
                            </tr>
                            <tr>
                                <th>Lands:</th>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Arid Mesa</a></td>
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Blood Crypt</a></td>
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Bloodstained Mire</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Copperline Gorge</a></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Gemstone Mine</a></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Mana Confluence</a></td>
                            </tr>  
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Mountain</a></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Scalding Tarn</a></td>
                            </tr>  
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Stomping Ground</a></td>
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Wooded Foothills</a></td>
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
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Conflagrate</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Darkblast</a></td>
                                
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Lightning Axe</a></td>
                                
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Nature's Claim</a></td>
                                
                            </tr>

                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Ancient Grudge</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Assassin's Trophy</a></td>
                                
                            </tr>

                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Damping Sphere</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Leyline of the Void</a></td>
                                
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
                <p>Overall, Dredge is a slightly unfavorable matchup for Death and Taxes. While the matchup is slightly favorable post-board due to graveyard hate spells such as Rest in Peace, Relic of Progenitus, and Grafdigger's Cage, the preboard game is very difficult for any Death and Taxes deck to win. As a result of Dredge's aggressive gameplan, any Death and Taxes pilot in the matchup must play a more controlling role. Utilizing creatures such as Blade Splicer, Wall of Omens, and Eldrazi Displacer to buy time while finishing off the opponent in the air with Restoration Angels and Flickerwisps is the key to success against the graveyard machine. All in all, the matchup is roughly 45% for Death and Taxes, with post-board games being a much higher percentage with the preboard game being a very low win rate.</p>
                <hr>
                <h2>Preboard Specifics</h2>
                <br>
                <h3>How Game 1 Plays Out</h3>
                <p>After the printing of Creeping Chill in Guilds of Ravnica, Dredge became much faster, to the point that it is very difficult for Death and Taxes to win game one. For those unfamiliar with Dredge, the deck utilizes cards such as Shriekhorn, Faithless Looting, and Cathartic Reunion to discard cards with <i>dredge</i> like Stinkweed Imp, Golgari Thug, and Life from the Loam. From there, the deck looks to put Prized Amalgam, Narcomeba, and Bloodghast from their library into their graveyard to bring them back for free.</p>
                <br>
                <p>With Creeping Chill, the deck is often able to kill a turn earlier than usual. Before the black sorcery entered the deck, Death and Taxes had a fair chance at beating Dredge game one, as Blade Splicer plus a few flicker creatures would create an impassable wall for the Dredge player (barring no Conflagrate). However, because of Creeping Chill, Death and Taxes often cannot survive long enough to build up a defense. The general playstyle of the Dredge matchup has not changed however- play defensively until it is safe to start swinging in with fliers. Overall, since Death and Taxes often lacks graveyard interaction game one, the only route to victory is utilizing ground creatures to absorb as much of Dredge's creates as possible while killing them in the air.</p>
                <br>
                <h3>Death and Taxes's cards in the matchup</h3>
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
                <p>The two primary hatebears' strength is strongly based on whether the Death and Taxes pilot is on the play or the draw. While too slow on the draw, both are valuable assets on the play. Thalia, Guardian of Thraben preventing a turn two Cathartic Reunion or two one mana spells (Faithless Looting/Shriekhorn) buys some valuable time. The odds of Leonin Arbiter taxing one of the opponent's fetch lands is higher if played before their turn two. If done early enough, Ghost Quarter plus Leonin Arbiter can win the game on its own. On the draw, as stated above, both Thalia, Guardian of Thraben and Leonin Arbiter are too slow. By turn two, the Dredge player should have gotten a plethora of cards in the graveyard through Faithless Looting, Cathartic Reunion, and/or Shriekhorn. Taxing their mana does not do much when they already have enough dredgers to bring out the 3/3s, 2/1s, and 1/1s.</p>
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
                <p>Wall of Omens is a very useful card in the matchup (especially post-board). Drawing a card plus deploying a four toughness body is excellent against the deck without 4+ power creatures. Blade Splicer is the MVP game one. Getting two bodies for three mana is no joke against a hyper-aggressive "creature" deck. In addition, blinking Blade Splicer puts yet another 3/3 golem into play. If that's not convincing enough, the 3/3 golems all have first strike when the 1/1 Blade Splicer is in play, letting them block Prized Amalgams and Bloodghasts without dying.</p>
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
                <p>Flickerwisp and Restoration Angel are both solid fliers in the matchup. Using either of them to blink a Blade Splicer is amazing, but they are otherwise fine on their own. Flickerwisp tends to be weaker than Restoration Angel in the matchup, as it gets blocked quite easily by Narcomeba. Plus, Dredge does not have many cards worth Flickerwisping. On the other hand, Restoration Angel tends to be quite valuable in the matchup, as long as four mana is reached. It can profitably block any of the opponent's creatures and provide a solid clock in the air.</p>
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
                <p>Both Eldrazi are very powerful, but often a turn too slow against Dredge. A turn two Thought-Knot Seer, especially on the play, can win games on its own. Taking the opponent's only Cathartic Reunion can buy enough time to win. Otherwise, the Eldrazi is usually too slow- by the time he is deployed, the Dredge player has already cast enough spells in their hand. Similarly, Eldrazi Displacer has both a high ceiling and a low floor. If deployed in conjunction with an Aether Vial, the 3/3 Eldrazi can buy lots of much-needed time by tapping down the opponent's creatures. Pairing Eldrazi Displacer with Blade Splicer is often game winning if unanswered and done early enough. Typically, however, Eldrazi Displacer's ability can only be activated once and it is only done to tap one of the opponent's several creatures.</p>
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
                <p>Aether Vial is straightforward- turn one its great, otherwise it is too slow. Path to Exile is alright at buying time but often less valuable than a creature such as Restoration Angel or Blade Splicer that blockers Prized Amalgams cleanly. In terms of niche cards, Remorseful Cleric is the best of the batch. The card does not win the game on its own, but it is excellent at buying enough time against Dredge to build up an eventual victory. Phyrexian Revoker is an alright spell- stopping Shriekhorn activations is relevant. Thraben Inspector is usually a much worse Wall of Omens.</p>
                <br>
                <div class="row">
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Conflagrate&type=card" class="cardImgMUG" alt="Conflagrate">
                    </div>
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Darkblast&type=card" class="cardImgMUG" alt="Darkblast">
                    </div>
                </div>
                <br>
                <h3>Cards to look out for- Dredge</h3>
                <p>The most powerful spell Dredge has against Death and Taxes game one is Conflagrate. The card does not do much of anything in their hand, but it is a beating when cast with flashback. In conjunction with Life from the Loam, the opponent can easily discard seven or more cards to destroy all of the Death and Taxes's player's creatures. Another noteworthy card is Darkblast. The card is especially effective at killing the 1/1 part of Blade Splicer, taking away golem tokens' first strike. Otherwise, the majority of Dredge's cards power out its own gameplan.</p>
                <br>
                <br>
                <h3>Strategies and Interactions</h3>
                <p>While holding up Flickerwisp, Restoration Angel, or an Eldrazi Displacer activation to get an additional golem token from Blade Splicer seems correct, there are times where it is better to do it before the opponent's turn. If the opponent has a Darkblast in their graveyard, and it is essential to get an additional golem token from Blade Splicer than waiting is too risky. If ahead, however, it is fine to simply wait to blink the Blade Splicer until the opponent makes a move. Also, the opponent can Darkblast a Restoration Angel or Blade Splicer token after they block a Prized Amalgam to kill either one of them, so watch out for that play. When deciding what land to Ghost Quarter, two additional tips should be pondered. First, stock lists run only two basic Mountains, so it is not difficult for Ghost Quarter to become Strip Mine without a Leonin Arbiter in play. Second, if possible, try to take the opponent off of green mana when reaching the late game. If done successfully, the opponent must stop dredging if they wish to cast Life from the Loam. One of Wall of Omens's strengths in the matchup is that it blocks Bloodghast without killing it. Not killing the opponent's Bloodghasts can prevent them from getting Prized Amalgams back from the graveyard (especially relevant in the late game). Stinkweed's ability is not the same as <i>deathtouch</i>, as it can be responded to. Therefore, when blocking or being blocked by the imp, the creature that would "die" by the trigger can be saved by a blink effect.</p>
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
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Grafdigger's+Cage&type=card" class="cardImgMUG" alt="Grafdigger's Cage">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Rest+in+Peace&type=card" class="cardImgMUG" alt="Rest in Peace">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Rest+in+Peace&type=card" class="cardImgMUG" alt="Rest in Peace">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Rest+in+Peace&type=card" class="cardImgMUG" alt="Rest in Peace">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Burrenton+Forge-Tender&type=card" class="cardImgMUG" alt="Burrenton Forge-Tender">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Burrenton+Forge-Tender&type=card" class="cardImgMUG" alt="Burrenton Forge-Tender">
                    </div>
                </div>
                <p>Against Dredge, every single graveyard hate card in the sideboard comes in. They are the most valuable spells post-board, especially Rest in Peace. In addition to the graveyard hate cards, Burrenton Forge-Tender is one that can be slotted in versus Dredge. While the opponent lacks any red creatures or burn spells, Conflagrate is a spell that is negated by a single Burrenton Forge-Tender. Bringing in a spell that is only effective against 3-4 of the opponent's spells feels bad, but it is very difficult to beat a resolved Conflagrate. The only other card in the sideboard worth considering is Worship. While it seems like a great answer to a creature-based strategy, there are two major downsides that ultimately make the card not worth the slot. First of all, Conflagrate is an excellent way for the opponent to kill all of the Death and Taxes player's creatures, and therefore render Worship useless. Second of all, because of Rest in Peace and Grafdigger's Cage, Dredge players will bring in enchantment removal such as Nature's Claim and Assassin's Trophy. Often enough, casting a Worship against Dredge would give them enough time to find a removal spell for it before they are killed by a flier. In terms of other cards that are not present in the sample decklist's sideboard, anti-aggro cards such as Kitchen Finks and Auriok Champion are fine to bring in. Kitchen Fink's anti-synergy with Rest in Peace/Grafdigger's Cage should not be an issue as Dredge is not winning the game if the graveyard hate permanent stays in play.</p>
                <br>
                <div class="row">
                    <div class="col-3">
                        <h4>Out (play):</h4>
                    </div>
                    <div class="col-9">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" class="cardImgMUG" alt="Flickerwisp">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" class="cardImgMUG" alt="Flickerwisp">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" class="cardImgMUG" alt="Flickerwisp">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Thought-Knot+Seer&type=card" class="cardImgMUG" alt="Thought-Knot Seer">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Path+to+Exile&type=card" class="cardImgMUG" alt="Path to Exile">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Path+to+Exile&type=card" class="cardImgMUG" alt="Path to Exile">
                    </div>
                </div>
                <p>On the play, the worst cards are those that both cost more than two mana and have little impact against Dredge. The biggest contender is Flickerwisp- while the card is great with Blade Splicer and Wall of Omens, it does little on its own. As mentioned before, it gets blocked by Narcomeba and consequently does not block very well. The next weakest card is, surprisingly, Thought-Knot Seer. While Eldrazi Temple helps lower its mana cost, the 4/4 Eldrazi is more often than not being cast or Aether Vialed in for all four mana. However, on the play, Thought-Knot Seer is sometimes fast enough, so only one should be cut. Finally, Path to Exile is a very cuttable card against Dredge. The best that card does is buys time, which is less necessary on the play than on the draw. It is still fine to leave in a couple just in case they amass a large board, but it is not a card worth investing more than two slots for on the play. In terms of different Death and Taxes decklists, cuttable cards include Thraben Inspector, Wasteland Strangler, Fatal Push, Lightning Bolt, and Dismember. Nonexile removal is very bad versus Dredge.</p>
                <br>
                <div class="row">
                    <div class="col-3">
                        <h4>Out (draw):</h4>
                    </div>
                    <div class="col-9">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Aether+Vial&type=card" class="cardImgMUG" alt="Aether Vial">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" class="cardImgMUG" alt="Flickerwisp">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" class="cardImgMUG" alt="Flickerwisp">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Thought-Knot+Seer&type=card" class="cardImgMUG" alt="Thought-Knot Seer">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Thought-Knot+Seer&type=card" class="cardImgMUG" alt="Thought-Knot Seer">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Path+to+Exile&type=card" class="cardImgMUG" alt="Path to Exile">
                    </div>
                </div>
                <p>On the draw, an Aether Vial can get cut. In almost every matchup, Aether Vial is worst on the draw, to the point that trimming at least one is fine. While Flickerwisp is still not ideal, it is better than having six four drops in the deck, especially when Thought-Knot Seer is now too slow. Only two Flickerwisp need to be cut, while two Thought-Knot Seers should take the ax. Similar to Aether Vial, one Path to Exile can get cut, as drawing too many of either one mana spell is not ideal. Since Rest in Peace cannot be cast until turn two, the Dredge player will have two turns to bring out a plethora of creatures, so having Path to Exile as a way to buy time is not bad on the draw. In terms of different Death and Taxes lists, the prior advice still holds true, along with a larger focus to cut down on slower spells.</p>
                <br>
                <h4>What the opponent brings in</h4>
                <div class="row">
                    <div class="col-12">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Nature's+Claim&type=card" class="cardImgMUG" alt="Nature's Claim">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Assassin's+Trophy&type=card" class="cardImgMUG" alt="Assassin's Trophy">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Ancient+Grudge&type=card" class="cardImgMUG" alt="Ancient Grudge">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Lightning+Axe&type=card" class="cardImgMUG" alt="Lightning Axe">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Darkblast&type=card" class="cardImgMUG" alt="Darkblast">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Conflagrate&type=card" class="cardImgMUG" alt="Conflagrate">
                    </div>
                </div>
                <p>The main cards that come in from Dredge's sideboard are removal spells. Answers to Rest in Peace and Grafdigger's Cage are boarded in, with Nature's Claim being the most popular of them. Assassin's Trophy is another spell to look out for post-board, as it answers any of Death and Taxes's permanents. While Ancient Grudge does not hit Rest in Peace, it can also destroy Aether Vial and artifact creatures besides its main target (Grafdigger's Cage). Creature based removal also comes in from the board. Lightning Axe and Darkblast are the most popular additions, but the occasional list runs Dismember. An extra Conflagrate also enters many Dredge decks after sideboard.</p>
                <br>
                <h3>How the matchup plays out postboard</h3>
                <br>
                <p>Post-board, the games are heavily determined by whether the Death and Taxes player finds graveyard hate and, if so, whether the Dredge player can answer the said graveyard hate. As a result, aggressively mulliganing for graveyard hate is not a bad strategy. There are hands that do not necessarily need graveyard hate to win however- ones including hatebears on the play, for example, are good enough on their own. But hands lacking both graveyard hate and impactful early plays should not be kept. The actual gameplay is very similar to preboard games, with the exception that graveyard hate spells usually slow down Dredge by at least a turn. Oftentimes, the Dredge opponent will get a few creatures into play before a Rest in Peace is resolved, making the preservation of life even more important post-board. While giving them time to find one of their answers to graveyard hate is not ideal, usually there are just as many graveyard hate spells in Death and Taxes as there are answers to them in Dredge post-board. Plus, as time goes own, powerful creatures such as Restoration Angel, Eldrazi Displacer, and Blade Splicer begin to churn out value and pressure. Overall, the matchup post-board leans heavily on the graveyard spells brought in, and whether or not they are found and unanswered. If they stick long enough, the game is heavily in Death and Taxes's favor- otherwise, it is closer to the Dredge player.</p>
                <br>
                <hr>
                <h3>Conclusion</h3>
                <!--Wrap up... summary of MU and such-->
                <p>All things considered, Dredge is a slightly unfavorable matchup for Death and Taxes. The graveyard deck is often too fast for Death and Taxes to keep up with game one, making the preboard matchup very difficult. Post-board, graveyard hate spells such as Rest in Peace and Grafdigger's Cage provide a route to victory. However, sometimes these graveyard hate spells never appear post-board, or the Dredge player has the right tools to combat them. There are even occasions where a Rest in Peace is too slow (especially on the draw). That being said, the post-board games are favored for Death and Taxes but not enough to offset the difficulty of game one, making the matchup an uphill battle. If you wanted to combat Dredge specifically (like if your meta is full of Dredge), adding Remorseful Clerics to the main deck or an extra Grafdigger's Cage/Surgical Extraction goes a long way in beating the menace.</p>
                <br>
                <div class="panel-group" id="accordion4">
                        <div class="panel panel-format">
                        <div class="panel-heading">
                          <h3 class="panel-title">
                            <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion4" href="#collapse1d" id="tldr">
                            TL;DR- Dredge Matchup</a>
                          </h3>
                        </div>
                        <div id="collapse1d" class="panel-collapse collapse">
                          <div class="panel-body">
                              <p>Dredge is a slightly unfavorable matchup for Eldrazi and Taxes due to their explosiveness. This forces us to play very defensively, as their strategy of bringing lots of creatures from the graveyard on turn two or three is hard to keep up with. Their whole strategy is very difficult to interact with in game one, making it a very difficult one to win. Thalia, Guardian of Thraben and Leonin Arbiter can help but are often too little or too slow. Trying to survive or get a win off of the opponent keeping a weak hand is your best bet of winning game one. The post-board games, however, are much different than the preboard one...</p>
                              <br>
                              <p>When sideboarding, every piece of graveyard hate comes in. Rest in Peace, Grafdigger's Cage, Relic of Progenitus, Surgical Extraction- all are premium. Some creatures to help us survive are good as well, such as Auriok Champion and Burrenton Forge-Tender. The cards to board out are the slower ones, such as Flickerwisp and Thought-Knot Seer. The post-board games are simply graveyard hate or bust. Mulligan aggressively for that Rest in Peace, as Dredge cannot beat it unless they have an answer. The best suggestion I have is to not underestimate hatebears in this match. Especially on the play, an early Thalia, Guardian of Thraben coupled with threats or Leonin Arbiters can get a random win even if no graveyard hate is found.</p>
                          </div>
                        </div>
                      </div>      
              </div>
              <br>
                <hr>
                <h4>Additional Content</h4>
                <div class="row">
                    <div class="col-sm-4">
                        <h2><a href="uw-control">Previous Matchup Guide: UW Control</a></h2>
                    </div>
                    <div class="col-sm-4" id="latestArticle">
                        <h2><a href="">Latest Addition:</a></h2>
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