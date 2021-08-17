<?php
    include("../../scripts/searchscript.php"); //actually works
    
?>
<?php
    include("../../scripts/cardlistdb.php"); //does work
?>
<?php
    $filename = 'blue.php';
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

    

        <title>Modern Splashes- Blue</title>
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

                
            }
            
          function previewDeck(name) {
            var img = document.getElementById('deckPreviewImg');
            img.src = `https://gatherer.wizards.com/Handlers/Image.ashx?name=${name}&type=card`;
            img.alt = name;
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
                    <h1>Modern Splashes: Blue</h1>
                </div>
                <p>Blue White Death and Taxes focuses more on a tempo game plan, as highlighted by powerful spirits like Spell Queller and Mausoleum Wanderer and Reflector Mage. UW Taxes tends to play a game more focused on countering and disrupting your opponent’s spells compared to traditional Death and Taxes. The deck plays a lot more on the opponent's turn, thus making Aether Vial more viable in UW Taxes compared to other splashes. UW Taxes’s main advantage over other Death and Taxes lists is its ability to interact on the stack with counterspells, thus giving the deck an advantage against combo and some control decks.</p>
                <h3>Sample Decklist</h3>
                <div class="row">
                    <div class="col-sm-6">
                        <table class="table decklist table-condensed table-responsive">
                            <tbody>
                                <tr>
                                    <th>Creatures:</th>
                                </tr>
                                <tr>
                                    <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Mausoleum Wanderer</a></td>
                                 
                                </tr>
                                <tr><!--Arbiter-->
                                    <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Leonin Arbiter</a></td>
                                   
                                </tr>
                                <tr><!-- thalia -->
                                    <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Thalia, Guardian of Thraben</a></td>
                                   
                                </tr> 
                                <tr>
                                    <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Blade Splicer</a></td>
                                 
                                </tr>
                                <tr>
                                    <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Flickerwisp</a></td>
                                   
                                </tr>
                                <tr>
                                    <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Reflector Mage</a></td>
                                  
                                </tr>
                                <tr>
                                    <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Spell Queller</a></td>
                                   
                                </tr>
                                <tr>
                                    <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Restoration Angel</a></td>
                                    
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
                                    <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Smuggler's Copter</a></td>
                                 
                                </tr>
                                <tr>
                                    <th>Lands:</th>
                                </tr>
                                <tr>
                                    <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Adarkar Wastes</a></td>
                                </tr>
                                <tr>
                                    <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Field of Ruin</a></td>
                                </tr>
                                <tr>
                                    <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Ghost Quarter</a></td>
                                </tr>
                                <tr>
                                    <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Hallowed Fountain</a></td>
                                </tr>
                                                                <tr>
                                    <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Horizon Canopy</a></td>
                                </tr>
                                <tr>
                                    <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Island</a></td>
                                </tr>
                                <tr>
                                    <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Plains</a></td>
                                </tr>
                                <tr>
                                    <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Seachrome Coast</a></td>
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
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Auriok Champion</a></td>
                               
                            </tr>  
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Meddling Mage</a></td>
                                
                            </tr>  
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Rest in Peace</a></td>
                               
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Selfless Spirit</a></td>
                              
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Stony Silence</a></td>
                               
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Geist of Saint Traft</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Kitchen Finks</a></td>
                               
                            </tr>
                            <tr> <!-- mirran -->
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Gideon, Ally of Zendikar</a></td>
                                
                            </tr>
                            
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Worship</a></td>
                                
                            </tr>
                    </tbody>
                </table>
                    <br>
                    <div>
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Mausoleum+Wanderer&type=card" id="deckPreviewImg">
                    </div>
                  </div>
            </div>
                <br>
                <h3>Card Analysis:</h3>
                <br>
                <div class="panel-group" id="accordion4">
                    <div class="row">
                        <div class="col-sm-9">
                        <div class="panel panel-format splashSectU">
                        <div class="panel-heading">
                          <h3 class="panel-title">
                            <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion4" href="#collapse1d">
                            Mausoleum Wanderer</a>
                          </h3>
                        </div>
                        <div id="collapse1d" class="panel-collapse collapse">
                          <div class="panel-body splashSectU">
                              <h4>About:</h4>
                              <p>The worst-case scenario for Mausoleum Wanderer is that it is a one mana 1/1 flier that is a Force Spike (for only instants/sorceries!) that the opponent will play around. However, the ceiling for Mausoleum Wanderer is very high. The card instills fear in the opponent, as it can enter the battlefield at instant speed if you control an Aether Vial on one. In addition, vialing in another spirit can grow the Mausoleum Wanderer already on the board, making it more difficult for the opponent to play around the counter. This synergy is why most UW Taxes lists opt to play more spirits (Spell Queller, Selfless Spirit, etc.), as they all synergize with Mausoleum Wanderer. This spirit is best against most combo and control decks, including Gifts Storm, Titan Shift, blue Control, and Mardu Pyromancer. Of note, Mausoleum Wanderer cannot stop an Abrupt Decay or a Supreme Verdict, as Mausoleum Wanderer’s ability is deemed a counter.</p>
                          </div>
                        </div>
                      </div>
                      <img class="entImg" src="https://i.ytimg.com/vi/X-BI3GH7hfE/hqdefault.jpg" alt="Mausoleum Wanderer">
                  </div>
                  <div class="col-sm-3">
                    <img class="entCardImg" src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Mausoleum%20wanderer&type=card" alt="Mausoleum Wanderer">
                  </div>
                  </div>
                <div class="row">
                    <div class="col-sm-9">
                    <div class="panel panel-format splashSectU">
                    <div class="panel-heading">
                      <h3 class="panel-title">
                        <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion4" href="#collapse3d">
                        Reflector Mage</a>
                      </h3>
                    </div>
                    <div id="collapse3d" class="panel-collapse collapse">
                      <div class="panel-body splashSectU">
                          <h4>About:</h4>
                          <p>Reflector Mage guides the deck in a tempo direction, as bouncing a creature is not typically a value play. Despite its bounce ability limitation on creatures an opponent controls, Reflector Mage has the upside of not allowing the opponent to cast the bounced creature (or any of the same creature in hand) their next turn. A strong synergy with Reflector Mage is to bounce a troublesome creature, then play Meddling Mage and name that creature before the opponent has the chance to recast it. Another trick with Reflector Mage is to “bounce” a Phantasmal Image- due to Phantasmal Image’s clause of sacrificing upon being targeted, the creature will die before going to hand. Besides being good against creature-based decks, Reflector Mage can also disrupt certain combo decks (Gifts Storm, Devoted Druid Combo, etc.) and is also very effective at bouncing Gurmag Anglers and Tasigur, the Golden Fangs, as they may become uncastable afterward. Reflector Mage is best against aggressive creature strategies like Humans, Elves, and Spirits, but is especially good against decks that struggle to replay one of their bounced creatures, like BR Hollow One.</p>
                      </div>
                    </div>
                  </div>
                  <img class="entImg" src="https://i.pinimg.com/originals/af/b1/bb/afb1bb191b5bbbadbf130bd69bb71059.jpg" alt="Reflector Mage">
              </div>
              <div class="col-sm-3">
                <img class="entCardImg" src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Reflector%20Mage&type=card" alt="Reflector Mage">
              </div>
              </div>
              <div class="row">
                <div class="col-sm-9">
                  <div class="panel panel-format splashSectU">
                    <div class="panel-heading">
                      <h3 class="panel-title">
                        <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion4" href="#collapse4d">
                        Spell Queller</a>
                      </h3>
                    </div>
                    <div id="collapse4d" class="panel-collapse collapse">
                      <div class="panel-body splashSectU">
                          <h4>About:</h4>
                          <p>Spell Queller gives UW Taxes additional disruption, in the form of a counterspell on a 2/3 flier (with the clause that the spell is recast upon Spell Queller leaving the battlefield). One notable interaction is vialing in Spell Queller to dodge counterspells and gain the element of surprise. Also, Spell Queller will not stop cast triggers, making it worse against spells with relevant cast triggers like Bloodbraid Elf. However, it can still counter cascaded cards (but the opponent will be able to cast the card after Spell Queller leaves the battlefield). In addition, Spell Queller's ability is not a counter; rather, the ability exiles the spell until Spell Queller leaves the battlefield. Therefore, if the opponent casts an Abrupt Decay, Supreme Verdict, or creature with Cavern of Souls’s ability, then you can still prevent the spell from being cast by casting/vialing in Spell Queller. While Spell Queller is best against combo and control, it is very powerful against the majority of Modern decks, hence why it one of the best spells in UW Taxes.</p>
                  </div>
                      </div>
                    </div>
                    <img class="entImg" src="https://www.manaleak.com/mtguk/files/2017/01/Spell-Queller.jpg" alt="Spell Queller">
                </div>
                <div class="col-sm-3">
                    <img class="entCardImg" src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Spell%20Queller&type=card" alt="Spell Queller">
                </div>
                </div>
            </div>
                <br>
                <h3>Other Blue Main Deck Options</h3>
                <ul>
                    <li> Meddling Mage </li>
                    <li> Phantasmal Image </li>
                    <li> Judge's Familiar </li>
                    <li> Geist of Saint Traft </li>
                    <li> Venser, Shaper Savant </li>
                </ul>
                
                <hr>
                <h3>Sideboarding 101</h3>
                <br>
                <h3>When to bring cards in</h3>
                <br>
                <h3>Meddling Mage:</h3>
                <p>Meddling Mage is a card that is solid versus a wide range of decks. The ideal matchups for Meddling Mage are combo decks, as it can name vital cards (Ad Nauseam, Grapeshot, Through the Breach, etc.) to shut down the opponent’s deck while attacking for two damage each turn. In addition to bringing in this card versus every combo deck, Meddling Mage is also a good option versus removal-light decks, especially those that run only one main removal spell, like BR Hollow One, as it can take them off of their interaction for the entirety of the game. Controlling decks are also ones where Meddling Mage can do work against, especially those that have board wipes that can ruin our deck if cast (UW control). The matchups where Meddling Mage is worst at are decks with a variety of answers to the card (Jund, Jeskai Control, etc.) or decks with ways to ignore the uncastable clause of the card (Aether Vial decks like Merfolk, Humans, Death and Taxes, etc.). An important interaction with Meddling Mage is that it can prevent a suspended spell from being cast by being put onto the battlefield before said spell comes off suspend. Meddling Mage can also be vialed in or blinked by a Restoration Angel to name a miracled cared like Terminus in response to the card being revealed. A final interaction is that Meddling Mage can be blinked/vialed in before a cascade spell resolves against a deck that uses cascade to only cast a specific spell, like Living End. Naming the Living End will essentially render the cascade spell useless and can even shut down the opponent’s deck completely. Overall, Meddling Mage is a powerful sideboard card that excels at locking down the varying strategies and answers found in Modern.</p>
                <br>
                <h3>Geist of Saint Traft</h3>
                <p>Geist of Saint Traft comes in against decks that either have trouble dealing with it or are matchups where a fast clock is necessary. Control and midrange decks tend to be decks where Geist of Saint Traft excel against: having hexproof dodges the opponent’s many targeted removal spells, and the 6 damage it deals each turn adds up quickly. Geist of Saint Traft is also strong against combo decks, as having a fast clock is often better than some of UW Taxes’s value creatures like Restoration Angel and Flickerwisp. Being able to close out the game before the opponent can assemble their combo is the reason why Geist of Saint Traft is beneficial in that matchup. Often Geist of Saint Traft is worst against faster decks, as racing them is difficult, especially with Geist of Saint Traft lacking flying. The general rule is that if the opponent’s deck has little creatures, Geist of Saint Traft should come in.</p>
                <h3>Other Sideboard Options</h3>
                <ul class="cardList">
                    <li> Negate </li>
                    <li> Judge's Familiar </li>
                </ul>
                
                <h3>Conclusion</h3>
                <p>UW Taxes is a good option in a meta filled with combo and, to a lesser extent, control decks with board wipes. The tempo game plan makes it better at racing control and disrupting combo decks, but said game plan sacrifices the late game strength of other Death and Taxes builds, making it weaker at winning midrange matches.</p>
            <div class="extra-space"></div>
            </div>
            <!--<h4>Pros/Cons of Splash:</h4>-->
            <script>var jArray = <?php echo json_encode($listOfCardNames); ?>;</script>
                <script src="/loadcardhoversettings.js"></script>
            
            <?php
                include("../../scripts/footer.php");
            ?>
            <script>var jStr = <?php echo json_encode($lastModDate); ?>;</script>
            <script type="text/javascript" src="/loadpublishinfo.js"></script>
    </body>
</html>

