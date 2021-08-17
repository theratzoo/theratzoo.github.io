<?php
    include("../../../scripts/searchscript.php"); //actually works
    
?>
<?php
    include("../../../scripts/cardlistdb.php"); //does work
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
    
    <meta name="description" content="Modern matchup guide against Dredge for B/W Eldrazi and Taxes.">
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
                <p>Overall, Dredge is a slightly unfavorable matchup for B/W Eldrazi and Taxes. While the matchup is slightly favorable post-board due to graveyard hate spells such as Rest in Peace, Relic of Progenitus, and Grafdigger's Cage, the preboard game is very difficult for B/W Eldrazi and Taxes to win. Dredge's hyper-aggressive strategy often forces Death and Taxes builds to play defensively. That being said, B/W Eldrazi and Taxes can win through disruption and aggression. Utilizing hatebears and hand-disruptive creatures along with beaters can finish off the Dredge opponent before they get to their game plan. However, without a disruptive enough start, B/W Eldrazi and Taxes is forced to play defensively, as Dredge can easily accumulate a board full of creatures. hatebears and hand-disruptive creatures get much worse later, making the defensive plan a difficult one to pull of game one. Therefore, unless you get a strong enough start, B/W Eldrazi and Taxes is very unfavored, overall about 40% game one at best. However, post-board answers make the matchup closer to 50%, but still an unfavorable one.</p>
                <hr>
                <h2>Preboard Specifics</h2>
                <br>

                <h3>How Game 1 Plays Out</h3>
                <p>After the printing of Creeping Chill in Guilds of Ravnica, Dredge became much faster, to the point that it is very difficult for B/W Eldrazi and Taxes to win game one. For those unfamiliar with Dredge, the deck utilizes cards such as Shriekhorn, Faithless Looting, and Cathartic Reunion to discard cards with <i>dredge</i> like Stinkweed Imp, Golgari Thug, and Life from the Loam. From there, the deck looks to put Prized Amalgam, Narcomeba, and Bloodghast from their library into their graveyard to bring them back for free.</p>
                <br>
                <p>With Creeping Chill, the deck is often able to kill a turn earlier than usual. Before the black sorcery entered the deck, B/W Eldrazi and Taxes had a strong plan of outracing Dredge game one through Thalia, Guardian of Thraben, Leonin Arbiter, and Tidehollow Sculler stopping their game plan. However, Creeping Chill's life gain coupled with the inclusion of Shriekhorn in Dredge makes their deck about a turn faster than before, making B/W Eldrazi and Taxes's plan more difficult to enact. That being said, Dredge is still quite vulnerable to disruption, especially if it is enacted on the play. B/W Eldrazi and Taxes's gameplan has, therefore, remained unchanged- try to deploy hatebears early and win through disruption. Since Dredge lacks much removal, it is not hard to lock them out with these hatebears. Otherwise, B/W Eldrazi and Taxes is forced to play an awkward defensive strategy. Eldrazi Displacer and Blade Splicer do help a lot in longer games, but the hand-disruptive creatures fall off as the opponent operates with their graveyard as the game goes on. Therefore, game one is often determined on B/W Eldrazi and Taxes's speed and whether they are on the play or the draw, as a defensive game is not easy to win without the right tools.</p>
                <br>
                <h3>B/W Eldrazi and Taxes's cards in the matchup</h3>
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
                <p>The two primary hatebears' strength is strongly based on whether the B/W Eldrazi and Taxes pilot is on the play or the draw. While too slow on the draw, both are valuable assets on the play. Thalia, Guardian of Thraben preventing a turn two Cathartic Reunion or two one mana spells (Faithless Looting/Shriekhorn) buys some valuable time. The odds of Leonin Arbiter taxing one of the opponent's fetch lands is higher if played before their turn two. If done early enough, Ghost Quarter plus Leonin Arbiter can win the game on its own. On the draw, as stated above, both Thalia, Guardian of Thraben and Leonin Arbiter are too slow. By turn two, the Dredge player should have gotten a plethora of cards in the graveyard through Faithless Looting, Cathartic Reunion, and/or Shriekhorn. Taxing their mana does not do much when they already have enough dredgers to bring out the 3/3s, 2/1s, and 1/1s.</p>
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
                <p>Flickerwisp is a fine card. It works well at protecting creatures and getting value just like in any other matchup, but otherwise, Flickerwisp does not do anything special. It does get blocked very cleanly by one Narcomeba, making it one of our weaker cards in the matchup. That being said, a three-mana flying creature is still valuable to close out a game. Blade Splicer is a valuable card game one. Getting two bodies for three mana is no joke against a hyper-aggressive "creature" deck. In addition, blinking Blade Splicer puts yet another 3/3 golem into play. If that's not convincing enough, the 3/3 golems all have first-strike when the 1/1 Blade Splicer is in play, letting them block Prized Amalgams and Bloodghasts without dying. Blade Splicer is great in both a defensive and an offensive strategy, making it an important asset against Dredge.</p>
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
                <p>Tidehollow Sculler is a card that gets exponentially worse the later it is played. If Tidehollow Sculler is cast on turn two, especially on the play, it will likely get rid of a key component of the Dredge player's gameplan. In order for Dredge to get moving, they usually have to cast a couple of card draw spells such as Faithless Looting and Cathartic Reunion. Taking their only Cathartic Reunion and leaving the opponent with a hand of creatures is game-winning. However, if Tidehollow Sculler is played later, it will often be too late. By turn three or four, the opponent usually operates out of their graveyard, flashing back Faithless Looting and Conflagrate while casting Life from the Loam after dredging it. Therefore, Tidehollow Sculler is very good if it comes into play very early, but it is otherwise too slow. Thought-Knot Seer tends to fall under the same category of Tidehollow Sculler. Playing Thought-Knot Seer on turn two is powerful. However, hitting two Eldrazi Temples and the Thought-Knot Seer by turn two is very unlikely. Waiting until turn three to deploy Thought-Knot Seer, just like with Tidehollow Sculler, is usually too late. Therefore, both of these hand-disruption creatures are best-played turn two but fall off after the opponent has cast their Faithless Lootings and Cathartic Reunions.</p>
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
                <p>Wasteland Strangler is one of the worst cards B/W Eldrazi and Taxes has against Dredge, especially in game one. The card is a three mana 3/2 without any other text in almost every case. The issues with Wasteland Strangler are that it lacks great targets to kill and its drawback of returning a card to the graveyard is very relevant. If Wasteland Strangler is not killing a Narcomeba, the creature is recurrable quite easily. In fact, putting a Bloodghast into the opponent's graveyard can be detrimental, as it can help them get back Prized Amalgams. The second main issue is that often times, the opponent's cards in exile are ones that cannot be returned. Returning a Faithless Looting or Conflagrate to their graveyard spells trouble, along with giving them a Prized Amalgam back. The few cases where Wasteland Strangler is good are when the opponent's graveyard was exiled by a Rest in Peace or Relic of Progenitus or if Tidehollow Sculler, Thought-Knot Seer, or Flickerwisp exiled a card that lacks dredge, flashback, or recurrability. That being said, these are all quite niche cases, making Wasteland Strangler too unreliable in most cases. Eldrazi Displacer has both a high ceiling and a low floor. If deployed in conjunction with an Aether Vial, the 3/3 Eldrazi can buy lots of much-needed time by tapping down the opponent's creatures. Pairing Eldrazi Displacer with Blade Splicer is often game winning if unanswered and done early enough. Typically, however, Eldrazi Displacer's ability can only be activated once and it is only done to tap one of the opponent's several creatures.</p>
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

                <p>Aether Vial is straightforward- turn one it is great, otherwise, it is too slow. Path to Exile is alright at buying time but often less valuable than a creature such as Blade Splicer that blockers Prized Amalgams cleanly. In terms of other cards, Remorseful Cleric is the best of the batch. The card does not win the game on its own, but it is excellent at buying enough time against Dredge to build up an eventual victory. Phyrexian Revoker is an alright spell- stopping Shriekhorn activations is relevant. Dark Confidant is better than it looks. While it gets hit by Darkblast and loses us life, it helps dig for answers. Dark Confidant is best post-board, where Rest in Peace and other graveyard hate spells are available. Lingering Souls is pretty good, as it provides blockers that cleanly stop Narcomeba and Bloodghast. It can also chump block Prized Amalgams or simply attack in the air for the last few life points.</p>
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
                <p>The most powerful spell Dredge has against B/W Eldrazi and Taxes game one is Conflagrate. The card does not do much of anything in their hand, but it is a beating when cast with flashback. In conjunction with Life from the Loam, the opponent can easily discard seven or more cards to destroy all of the B/W Eldrazi and Taxes's player's creatures. Another noteworthy card is Darkblast. The card is especially effective at killing the 1/1 part of Blade Splicer, taking away golem tokens' first strike. Otherwise, the majority of Dredge's cards power out its own gameplan.</p>
                <br>
                <br>
                <h3>Strategies and Interactions</h3>
                <p>While holding up Flickerwisp or an Eldrazi Displacer activation to get an additional golem token from Blade Splicer seems correct, there are times where it is better to do it before the opponent's turn. If the opponent has a Darkblast in their graveyard, and it is essential to get an additional golem token from Blade Splicer than waiting is too risky. If ahead, however, it is fine to simply wait to blink the Blade Splicer until the opponent makes a move. Also, the opponent can Darkblast a Blade Splicer token after they block a Prized Amalgam to kill either one of them, so watch out for that play. When deciding what land to Ghost Quarter, two additional tips should be pondered. First, stock lists run only two basic Mountains, so it is not difficult for Ghost Quarter to become Strip Mine without a Leonin Arbiter in play. Second, if possible, try to take the opponent off of green mana when reaching the late game. If done successfully, the opponent must stop dredging if they wish to cast Life from the Loam. Stinkweed's ability is not the same as <i>deathtouch</i>, as it can be responded to. Therefore, when blocking or being blocked by the imp, the creature that would "die" by the trigger can be saved by a blink effect. As mentioned before, keep in mind what the opponent has in exile before casting Wasteland Strangler. Putting Faithless Looting, Conflagrate, Prized Amalgam, Bloodghast, or any card with dredge back into their graveyard is a cost. If you have the Flickerwisp plus Wasteland Strangler combo available, it is often best to Flickerwisp one of the opponent's lands, as their creatures are not valuable and/or are recurrable.</p>
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
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Rest+in+Peace&type=card" class="cardImgMUG" alt="Rest in Peace">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Rest+in+Peace&type=card" class="cardImgMUG" alt="Rest in Peace">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Rest+in+Peace&type=card" class="cardImgMUG" alt="Rest in Peace">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Burrenton+Forge-Tender&type=card" class="cardImgMUG" alt="Burrenton Forge-Tender">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Kambal,+Consul+of+Allocation&type=card" class="cardImgMUG" alt="Kambal, Consul of Allocation">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Kambal,+Consul+of+Allocation&type=card" class="cardImgMUG" alt="Kambal, Consul of Allocation">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Settle+the+Wreckage&type=card" class="cardImgMUG" alt="Settle the Wreckage">
                    </div>
                </div>
                <p>Against Dredge, every single graveyard hate card in the sideboard comes in. They are the most valuable spells post-board, especially Rest in Peace. In addition to the graveyard hate cards, Burrenton Forge-Tender is one that can be slotted in versus Dredge. While the opponent lacks any red creatures or burn spells, Conflagrate is a spell that is negated by a single Burrenton Forge-Tender. Bringing in a spell that is only effective against 3-4 of the opponent's spells feels bad, but it is very difficult to beat a resolved Conflagrate. An interesting inclusion is Kambal, Consul of Allocation. The reason for bringing him in is that Kambal, Consul of Allocation is simply better than Flickerwisp and Wasteland Strangler. Not only does Kambal, Consul of Allocation block Bloodghast well but he also drains the opponent for two each time they cast a noncreature spell. Dredge rarely casts creatures, so Kambal, Consul of Allocation can easily gain us valuable points of life. In addition, it is quite common for the Dredge opponent to fall to a low life in this match. The life loss incurred through Kambal, Consul of Allocation's ability can lock the opponent out of casting their draw spells or Conflagrates. All that said, Kambal, Consul of Allocation is not an outstanding post-board card. If it is cast later in the game, the opponent does not need to cast more than one or two noncreature spells to win. Therefore, Kambal, Consul of Allocation is fine inclusion if you still have Flickerwisps and Wasteland Stranglers to cut from the deck. Finally, Settle the Wreckage comes in as an answer to the opponent's creatures. Since it exiles instead of destroys, a big attack from the opponent can take them off of win conditions. In terms of other cards that are not present in the sample decklist's sideboard, anti-aggro cards such as Kitchen Finks and Auriok Champion are fine to bring in. Kitchen Fink's anti-synergy with Rest in Peace/Grafdigger's Cage should not be an issue as Dredge is not winning the game if the graveyard hate permanent stays in play. Orzhov Pontiff does answer Narcomeba and Bloodghast (temporarily), but it is otherwise a slow creature. It is an inclusion that I will be testing, but for now, I would hedge against it, as Dredge does not mind the -1/-1 much.</p>
                <br>
                <!--Play vs. draw might be same... as you don't want to take out any Vials for B/W E&T.-->
                <div class="row">
                    <div class="col-3">
                        <h4>Out (play and draw):</h4>
                    </div>
                    <div class="col-9">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" class="cardImgMUG" alt="Flickerwisp">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" class="cardImgMUG" alt="Flickerwisp">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" class="cardImgMUG" alt="Flickerwisp">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" class="cardImgMUG" alt="Flickerwisp">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Wasteland+Strangler&type=card" class="cardImgMUG" alt="Wasteland Strangler">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Wasteland+Strangler&type=card" class="cardImgMUG" alt="Wasteland Strangler">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Wasteland+Strangler&type=card" class="cardImgMUG" alt="Wasteland Strangler">
                        
                    </div>
                </div>
                <p>Cards to take out will be the same for the play and the draw, as cutting an Aether Vial is hurts B/W Eldrazi and Taxes more than other variations. The two cards that are fully cut from the deck are Flickerwisp and Wasteland Strangler. Flickerwisp is very poor, as its ability does not do anything special to disrupt Dredge. In addition, it does not attack well into Narcomeba nor block any of their creatures well. Wasteland Strangler, as mentioned before, is very poor is most scenarios. It is often worse than Flickerwisp, so get rid of all three Wasteland Stranglers first. In B/W Eldrazi and Taxes builds with Lingering Souls, you can cut Lingering Souls as well depending on the amount of graveyard hate you have. While Lingering Souls does get worse with a Rest in Peace in play, the games where you find Rest in Peace are the ones that you often win anyway. I would cut Lingering Souls if you have four or more graveyard hate spells, as in that case, it is not hard to mulligan into one of them. With less than three, Lingering Souls should stay in, as the card does a great job at buying time for you to find a Rest in Peace. With three graveyard hate spells, I would hedge to keep Lingering Souls in. However, with the London mulligan rule, three graveyard hate spells should be enough to consistently find one against Dredge, making Lingering Souls a cut in the case. The reason Path to Exile stays in the deck is that it buys lots of time. The opponent's creatures are not hard for Eldrazi and Taxes to block, so removing one of their creatures can buy a lot of time when their attacks are already limited. Plus, Path to Exile can clear the way for a lethal attack.</p>
                
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
                <p>The main cards that come in from Dredge's sideboard are removal spells. Answers to Rest in Peace and Grafdigger's Cage are boarded in, with Nature's Claim being the most popular of them. Assassin's Trophy is another spell to look out for post-board, as it answers any of B/W Eldrazi and Taxes's permanents. While Ancient Grudge does not hit Rest in Peace, it can also destroy Aether Vial and artifact creatures besides its main target (Grafdigger's Cage). Creature based removal also comes in from the board. Lightning Axe and Darkblast are the most popular additions, but the occasional list runs Dismember. An extra Conflagrate also enters many Dredge decks after sideboard.</p>
                <br>
                <h3>How the matchup plays out postboard</h3>
                <br>
                <p>Post-board, the games are heavily determined by whether the B/W Eldrazi and Taxes player finds graveyard hate and, if so, whether the Dredge player can answer the said graveyard hate. As a result, aggressively mulliganing for graveyard hate is not a bad strategy. There are hands that do not necessarily need graveyard hate to win, however- ones including hatebears on the play, for example, are good enough on their own. But hands lacking both graveyard hate and impactful early plays should not be kept. The actual gameplay is quite different post-board, as these graveyard-hate spells heavily skew B/W Eldrazi and Taxes's strategies. The general plan of being aggressive and disruptive still holds true, especially with Rest in Peace and other graveyard hate spells in the deck. Think of graveyard hate spells as a road bump- while they can win games on their own, Dredge can easily have or find an answer to them. As a result, it is important to treat Rest in Peace and other graveyard hate spells as disruption to go alongside hatebears, hand-disruptive creatures, and aggressive creatures. Killing the opponent fast is necessary, as you don't want them to find a Nature's Claim. This is the ideal strategy you want to do. The only issue with this is that there will be hands where no Rest in Peace is present and the other disruption spells are too little and too slow. In those cases, playing defensively is key. In post-board games, you have outs to draw into- graveyard hate spells. Stalling to find a Rest in Peace is not uncommon. Keep in mind, however, that this strategy is very high-varianced, as you're relying on top-decking a graveyard hate spell. This plan should only result after mulliganing at least twice and failing to find a hand with graveyard hate and/or a fast enough disruption suite.</p>
                <br>
                <p>One note-worthy interaction is that, since Tidehollow Sculler is an artifact, Nature's Claim and Ancient Grudge answer it. Therefore, if one of those spells are present in the opponent's hand, it is oftentimes best to take that spell.</p>
                <br>
                <hr>
                <h3>Conclusion</h3>
                <p>All things considered, Dredge is a slightly unfavorable matchup for B/W Eldrazi and Taxes. The graveyard deck is often too fast for B/W Eldrazi and Taxes to race game one, making the preboard game difficult unless enough fast disruption is available. Post-board, graveyard hate spells such as Rest in Peace and Grafdigger's Cage provide a stronger route to victory. However, sometimes these graveyard-hate spells never appear post-board, or the Dredge player has the right tools to combat them. There are even occasions where a Rest in Peace is too slow (especially on the draw). That being said, the post-board games are favored for B/W Eldrazi and Taxes but not enough to offset the difficulty of game one, making the matchup an uphill battle. If you wanted to combat Dredge specifically (like if your meta is full of Dredge), adding Remorseful Clerics to the main deck or an extra Grafdigger's Cage/Surgical Extraction/Relic of Progenitus goes a long way in beating the menace.</p>
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
                            <!--FIX-->
                              <p>Dredge is a slightly unfavorable matchup for B/W Eldrazi and Taxes due to their explosiveness. B/W Eldrazi and Taxes wants to disrupt the Dredge opponent and keep them off of their gameplan, as they lack removal for hatebears. However, their intense speed can forces us to play very defensively, as their strategy of bringing lots of creatures from the graveyard on turn two or three is hard to keep up with. Due to their strategy primarly operating in the graveyard, it is difficult to interact with them unless a disruptive-enough start is found. Very early Thalia, Guardian of Thraben, Leonin Arbiter, and Tidehollow Sculler are your best routes to victory. The post-board games, however, are much different than the preboard one...</p>
                              <br>
                              <p>When sideboarding, every piece of graveyard hate comes in. Rest in Peace, Grafdigger's Cage, Relic of Progenitus, Surgical Extraction- all are premium. Some creatures to help us survive are good as well, such as Auriok Champion, Kambal, Consul of Allocation, and Burrenton Forge-Tender. Finally, Settle the Wreckage is a great answer to their creatures. The cards to board out are the creatures that work poorly against Dredge- Flickerwisp and Wasteland Strangler. The post-board games are often graveyard hate or bust. Mulligan aggressively for that Rest in Peace, as Dredge cannot beat it unless they have an answer. The best suggestion I have is to not underestimate hatebears in this match. Especially on the play, an early Thalia, Guardian of Thraben coupled with threats or Leonin Arbiters can get a random win even if no graveyard hate is found. Tidehollow Sculler is also a valuable asset, as it can take their only card-draw spell and leave their hand without a way to discard and dredge.</p>
                          </div>
                        </div>
                      </div>      
              </div>
              <br>
                <hr>
                <h4>Additional Content</h4>
                <div class="row">
                    <div class="col-sm-4">
                        <h2><a href="../humans">Previous Matchup Guide: Humans (updated) (Mono-W E&T)</a></h2>
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
                include("../../../scripts/footer.php");
            ?>
            <script>var jStr = <?php echo json_encode($lastModDate); ?>;</script>
            <script src="/loadpublishinfo.js" type="text/javascript"></script>
    </body>
</html>