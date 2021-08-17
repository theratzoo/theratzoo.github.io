<?php
    include("../../scripts/searchscript.php"); //actually works
    
?>
<?php
    include("../../scripts/cardlistdb.php"); //does work
?>
<?php
    $filename = 'bw-ent.php';
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

    

        <title>Modern Variations- BW E&T</title>
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
                    <h1>Modern Variations: Black-White Eldrazi and Taxes</h1>
                </div>

                <p>Black-White Eldrazi and Taxes, similar to Mono-White Eldrazi and Taxes, utilizes Eldrazi Temple to power out strong, disruptive Eldrazi. In addition to Thought-Knot Seer and Eldrazi Displacer, Wasteland Strangler makes an appearance in Black-White Eldrazi and Taxes, being both a solid body and a creature-killer. In addition, more disruptive options are available in black, such as Tidehollow Sculler and Fatal Push. The main advantage for going black in Eldrazi and Taxes is to gain more removal, discard creatures, and powerful sideboard options to combat the meta. However, this raw power comes at a cost- the mana base becomes significantly less consistent, as colorless, white, and black mana are all required to cast the various creatures in the deck.</p>
                <h3>Sample Decklist</h3>
                <div class="row">
                <div class="col-sm-6">
                    <table class="table decklist table-condensed table-responsive">
                        <tbody>
                            <tr>
                                <th>Creatures</th>
                            </tr>
                            <tr><!--Arbiter-->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Leonin Arbiter</a></td>
                                
                            </tr>
                            <tr><!--thalia-->
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
                            <tr><!--Wasteland Strangler-->
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
                <!--LANDS--><tr>
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
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Grafdigger's Cage</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Fatal Push</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Auriok Champion</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Rest in Peace</a></td>
                                
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Stony Silence</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Dismember</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Kambal, Consul of Allocation</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Orzhov Pontiff</a></td>
                                
                            </tr>
                            <tr><!-- Gideon -->
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Gideon, Ally of Zendikar</a></td>
                                
                            </tr>                    
                    </tbody>
                 </table>
                 <div>
                    <img src="" id="deckPreviewImg">
                 </div>
                
            </div>
                
            </div>
            <h3>Card Analysis</h3>
            <div class="panel-group" id="accordion8">
            <div class="row">
                <div class="col-sm-9">
                    <div class="panel panel-format splashSectEW">
                        <div class="panel-heading">
                          <h3 class="panel-title">
                            <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion8" href="#collapse1h">
                            Tidehollow Sculler</a>
                          </h3>
                        </div>
                        <div id="collapse1h" class="panel-collapse collapse">
                          <div class="panel-body splashSectEW">
                              <h4>About</h4>
                              <p>Tidehollow Sculler acts as a mini Thought-Knot Seer, being able to take any nonland card on a 2/2 body for the prices of two mana. Unlike Thought-Knot Seer, however, Tidehollow Sculler will return the card after it leaves the battlefield, rather than drawing a new one for the opponent.</p>
                              <h4>How to Abuse Tidehollow Sculler's Trigge</h4>
                              <p>Tidehollow Sculler's trigger is worded in the older format- meaning that if the Tidehollow Sculler is removed from play before taking a nonland card, it will not return the card to the opponent. Because of this, Flickerwisp and Eldrazi Displacer can be used to abuse Tidehollow Sculler's enter the battlefield trigger by blinking it before the trigger resolves to steal a card permanently. Using a removal spell on Tidehollow Sculler also works, but is unideal as it is ultimately card disadvantage. Not a terrible plan though when the removal spell is Path to Exile, as the land can help fix colors or simply give more mana for more Eldrazi Displacer triggers.</p>
                          </div>
                        </div>
                      </div>
                <img class="entImg" src="https://78.media.tumblr.com/cd342f1bf8ee7ae01b04658c5e066bf4/tumblr_nbt5e0izvG1thxsmlo1_1280.jpg" alt="Tidehollow Sculler">
                        </div>
                        <div class="col-sm-3">
                            <img class="entCardImg" src="https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=175054&type=card" alt="Tidehollow Sculler">
                        </div>
            </div>
            <div class="row">
                <div class="col-sm-9">
                     <div class="panel panel-format splashSectEW">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion8" href="#collapse2h">
                    Eldrazi Displacer</a>
                  </h3>
                </div>
                <div id="collapse2h" class="panel-collapse collapse">
                  <div class="panel-body splashSectEW">
                      <h4>About</h4>
                      <!--Fix it to work with B-W (include B/W exclusives)-->
                      <p>Eldrazi Displacer gives the deck more staying power and long game strength, all thanks to its powerful activated ability. Eldrazi Displacer early on is not very threatening, as a 3/3 for three is nothing special, but its activated ability can be utilized in many scenarios, from tapping down opposing blockers to push through damage to giving the deck the engine needed to grind out the win.</p>
                      <h4>Eldrazi Displacer's Ability</h4>
                      <p>One part of the cost to activate Eldrazi Displacer that is noteworthy is that one colorless mana is required to activate its ability. Therefore, there are times where using a Ghost Quarter or Tectonic Edge to destroy the opponent’s land is incorrect, especially when lacking any other colorless land. In addition, since Eldrazi Temple can produce two mana for activated abilities of Eldrazi, multiple activations a turn with Eldrazi Displacer is not uncommon for the deck. However, in the scenario that the only lands in play are four lands that do not produce colorless mana and an Eldrazi Temple, Eldrazi Displacer’s ability must be activated in the same phase in order to use it twice. Eldrazi Displacer's activated ability, as mentioned above, gives the deck a solid late game plan. Blinking value creatures such as Wall of Omens or Blade Splicer can generate a card advantage engine that, if unanswered, will take over the game. Eldrazi Displacer can be used to save creatures from targeted removal. However, since Eldrazi Displacer’s ability returns the creature to the battlefield immediately, it does not protect against board wipes (unless a Flickerwisp is in play). The threat of activating Eldrazi Displacer is also noteworthy, as it can cause the opponent to play less optimally to try dodging the blowout. Eldrazi Displacer can also be used in conjunction with Thought-Knot Seer to take a new card from the opponent’s hand. However, since Thought-Knot Seer will draw the opponent a card when it leaves the battlefield, this method does not grant card advantage. Still, against combo decks that require a specific spell to win, blinking Thought-Knot Seer on the draw step is a solid option. The most powerful usage of Eldrazi Displacer’s activated ability is targeting Flickerwisp. Blinking Flickerwisp can help dodge board wipes, temporarily remove lands, artifacts, enchantments, and planeswalkers, along with protecting the Eldrazi Displacer from removal spells. The versatility offered with repeatedly using Flickerwisp’s enter the battlefield effect is huge, as it can lock down troublesome permanents like planeswalkers or Krark-Clan Ironworks barring no removal from the opponent. Eldrazi Displacer's ability can also be used on opponent's creatures. Blinking attacking creatures helps alleviate the damage of aggro decks while tapping down blockers can secure a lethal attack. Eldrazi Displacer’s ability can also kill opposing tokens, similar to Flickerwisp. Overall, the versatility and potential offered with this card make it one of the strongest incentives to run Eldrazi in Death and Taxes.</p>
                  </div>
                </div>
              </div>
                <img class="entImg" src="/images/dnt/eldrazi-displacer-art.jpg" alt="Eldrazi Displacer">
                        </div>
                        <div class="col-sm-3">
                            <img class="entCardImg" src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi%20Displacer&type=card" alt="Eldrazi Displacer">
                        </div>
            </div>
            <div class="row">
                <div class="col-sm-9">
                    <div class="panel panel-format splashSectEW">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion8" href="#collapse3h">
                    Thought-Knot Seer</a>
                  </h3>
                </div>
                <div id="collapse3h" class="panel-collapse collapse">
                  <div class="panel-body splashSectEW">
                      <h4>About</h4>
                      <!-- edit to make it fit better for B/W E&T-->
                      <p>Overall, Thought-Knot Seer is a consistently powerful spell in Eldrazi and Taxes. While it does cost four mana, Thought-Knot Seer provides a 4/4 body (dodging Lightning Bolt) that removes a nonland card from the opponent’s hand forever, as upon death it draws them a new card. Thought-Knot Seer can come down as early as turn two thanks to Eldrazi Temple. In conjunction with blink creatures like Restoration Angel and Eldrazi Displacer, Thought-Knot Seer can take additional cards from the opponent’s hand. While the opponent will draw a card for each time Thought-Knot Seer leaves the battlefield, taking the best card in their hand is very powerful, especially against combo decks. Thought-Knot Seer is great against every deck in Modern, and thus will not be boarded out often.</p>
                  </div>
                </div>
              </div>
                <img class="entImg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ62fVn7S6Rm5P6dLmpzh9ubxLuAw8EbO9Bj0Ztl8HDGFlu8WalaQ" alt="Thought-Knot Seer">
                        </div>
                        <div class="col-sm-3">
                            <img class="entCardImg" src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Thought-Knot%20Seer&type=card" alt="Thought-Knot Seer">
                        </div>
            </div>
            <div class="row">
                <div class="col-sm-9">
                    <div class="panel panel-format splashSectEW">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion8" href="#collapse4h">
                    Wasteland Strangler</a>
                  </h3>
                </div>
                <div id="collapse4h" class="panel-collapse collapse">
                  <div class="panel-body splashSectEW">
                      <h4>About</h4>
                      <p>Wasteland Strangler is arguably Eldrazi and Taxes’s strongest card against smaller creature decks, as it gives you a powerful two for one (sometimes even three for one) on a cheap, fair-stated creature. Killing a creature and being left with a 3/2 for the cost of three mana is no small play. Even when the opponent lacks small creatures (or cards in their exile zone), Wasteland Strangler is still a fine, aggressive creature, especially when powered out with Eldrazi Temple.</p>
                      <h4>Specifics: the Exiled Card</h4>
                      <p>Wasteland Strangler's cost of moving a card from your opponent's exile zone into their graveyard may seem like a drawback, but often it can be abused to the point of making this three mana spell a three for one. Eldrazi and Taxes has many ways to exile cards from the opponent- from Path to Exile to Thought-Knot Seer. Sometimes the opponent’s only exiled spell is one that has use in the graveyard, such as a Cryptic Command for a Snapcaster Mage or a Vengevine. However, often enough this downside is mitigated by the upsides that sometimes come up from returning an exiled card to the opponent’s graveyard. Essentially, two cards in Eldrazi and Taxes only temporarily exile a card from the opponent and can thus be abused by Wasteland Strangler. The most common of these cards, Tidehollow Sculler, only keeps the card exiled while the creature is in play. Wasteland Strangler can then put the exiled card into the opponent's graveyard, which would make Tidehollow Sculler's leave trigger bring back no cards. The stronger, but less common, synergy is to use Flickerwisp to temporarily exile a permanent owned by the opponent, then use Wasteland Strangler to put that exiled card into their graveyard. As the card is no longer in exile, Flickerwisp will not return it to the battlefield, essentially turning it into a Vindicate on a 3/1 flier.</p>
                  </div>
              </div>
                  </div>
                <img class="entImg" src="https://magic.wizards.com/sites/mtg/files/images/hero/yVwwxVHdWK_icon.jpg" alt="Wasteland Strangler">
                        </div>
                        <div class="col-sm-3">
                            <img class="entCardImg" src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Wasteland%20Strangler&type=card" alt="Wasteland Strangler">
                        </div>
            </div>

                </div>
                <h3>Other Main Deck Options</h3>
            <ul>
                <li> Fatal Push </li>
                <li> Dark Confidant </li>
                <li> Restoration Angel </li>
                <li> Reality Smasher </li>
            </ul>
            <hr>
        <h3>Sideboarding 101</h3>
        <br>
        <h3>When to bring E&T Cards in</h3>
        <br>
        <h4>Fatal Push</h4>
        <p>Fatal Push acts as extra Path to Exiles, as they are both one-mana removal spells that kill the majority of creatures in Modern. The downside of not being able to kill high converted mana cost creatures is more or less balanced by the upside of not giving the opponent a land. While Death and Taxes lacks fetch lands to trigger revolt for Fatal Push, cards like Ghost Quarter and Flickerwisp can help a ton in achieving revolt. Fatal Push is strongest against creature-centric decks like the mirror, Humans, and Jund. Fatal Push also comes in versus certain combo decks where it can disrupt one of their pieces (Counters Company, Gifts Storm, etc.). </p>
        <br>
        <h4>Kambal, Consul of Allocation</h4>
        <p>Kambal, Consul of Allocation is amazing versus spell-based decks, especially combo-oriented ones like Gifts Storm. Kambal, Consul of Allocation can also prove pivotal in locking down blue-based Control, as the last few life points tend to matter against Control. Other than that, Kambal, Consul of Allocation is also an excellent spell to sideboard in against Burn. Not only does it gain life against the deck with Lava Spikes, but it can also lock the opponent out of casting any of their spells if they are at a low life total with Eidolon of the Great Revel in play.</p>
        <br>
        <h4>Orzhov Pontiff</h4>
        <p>Orzhov Pontiff is an excellent card to bring in against small creature decks. Elves, Spirits, and Humans are all decks that Orzhov Pontiff shines against. Decks that have Lingering Souls are also ones that Orzhov Pontiff is usually boarded in against. Orzhov Pontiff is also an excellent choice in the mirror, killing off Flickerwisp and Thalia, Guardian of Thraben. Orzhov Pontiff is, unsurprisingly, good with blinkers like Flickerwisp and Eldrazi Displacer. Blinking it multiple times a turn with Eldrazi Displacer is especially powerful, as it can kill bigger creatures or simply make combat a nightmare for the opponent.</p>
        <br>
        <hr>

        <h3>Other Sideboard Options</h3>
        <ul class="cardList">
            <li> Kitesail Freebooter </li>
            <li> Zealous Persecution </li>
        </ul>
        <br>
        <hr>
        <h3>Conclusion</h3>
        <p>Overall, Black-White Eldrazi and Taxes is an excellent choice in metas where disruption is valuable. The removal and other anti-creature cards offered in this Death and Taxes variation make it an excellent choice in the current creature-heavy meta. However, as some decks are packing bigger creatures, like Gurmag Angler and Hollow One, cards like Wasteland Strangler and Fatal Push lose relevance. In addition, the unreliable mana base adds harmful variance to the deck, especially when playing against decks with Blood Moon. All in all, Black-White Eldrazi and Taxes has many tools to combat the current meta, but its poor mana base holds it back from being a higher tier deck.</p>

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

