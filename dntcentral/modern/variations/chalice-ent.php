<?php
    include("../../scripts/searchscript.php"); //actually works
    
?>
<?php
    include("../../scripts/cardlistdb.php"); //does work
?>
<?php
    $filename = 'chalice-ent.php';
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

    

        <title>Modern Variations- Chalice E&T</title>
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
                    <h1>Modern Variations: Chalice Eldrazi and Taxes</h1>
                </div>
                <p>Chalice Eldrazi and Taxes is perhaps the most unique variation of Modern Death and Taxes. For starters, the deck cuts Aether Vial, Path to Exile, and the other one mana spells played in Death and Taxes in exchange for playing Chalice of the Void. In addition, as the deck lacks Aether Vial, it instead relies on Simian Spirit Guide to power out creatures. Eldrazi Temple also helps the deck cast its many Eldrazi ahead of curve, adding raw power to the deck. The deck overall plays like a faster and more powerful version of Death and Taxes, in exchange for value and late game.</p>
                <h3>Sample Decklist</h3>
                <div class="row decklist">
                    <div class="col-sm-6">
                        <table class="table decklist table-condensed table-responsive">
                            <tbody>
                                <tr>
                                    <th>Creatures:</th>
                                </tr>
                                <tr>
                                    <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Walking Ballista</a></td>
                                    
                                </tr>
                                <tr><!--Arbiter-->
                                    <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Leonin Arbiter</a></td>
                                    
                                </tr>
                                <tr><!-- thalia -->
                                    <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Thalia, Guardian of Thraben</a></td>
                                    
                                </tr>
                                
                                <tr>
                                    <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Eldrazi Displacer</a></td>
                                    
                                </tr>
                                <tr>
                                    <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Simian Spirit Guide</a></td>
                                    
                                </tr>
                                <tr>
                                    <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Thalia, Heretic Cathar</a></td>
                                    
                                </tr>
                                <tr>
                                    <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Thought-Knot Seer</a></td>
                                    
                                </tr>
                                <tr>
                                    <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Reality Smasher</a></td>
                                    
                                </tr>
                                <tr>
                                    <th>Spells:</th>
                                </tr>
                                <tr>
                                    <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Dismember</a></td>
                                    
                                </tr>
                                <tr>
                                    <th>Artifacts:</th>
                                </tr>
                                 <tr>
                                    <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Chalice of the Void</a></td>
                                    
                                </tr>
                                <tr>
                                    <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Smuggler's Copter</a></td>
                                    
                                </tr>
                                <tr>
                                    <th>Lands:</th>
                                </tr>
                                <tr>
                                    <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Cavern of Souls</a></td>
                                </tr>
                                <tr>
                                    <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Eldrazi Temple</a></td>
                                </tr>
                                <tr>
                                    <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Gemstone Caverns</a></td>
                                </tr>
                                <tr>
                                    <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Ghost Quarter</a></td>
                                </tr>
                                <tr>
                                    <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Horizon Canopy</a></td>
                                </tr>
                                <tr>
                                    <td>5&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Plains</a></td>
                                </tr>
                                <tr>
                                    <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Shefet Dunes</a></td>
                                </tr> 
                                <tr>
                                    <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Waste</a></td>
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
                                    <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Declaration in Stone</a></td>
                                    
                                </tr>
                                <tr>
                                    <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Disenchant</a></td>
                                    
                                </tr>
                                <tr>
                                    <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Phyrexian Revoker</a></td>
                                    
                                </tr>
                                <tr>
                                    <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Rest in Peace</a></td>
                                    
                                </tr>
                                <tr>
                                    <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Selfless Spirit</a></td>
                                    
                                </tr>
                                <tr>
                                    <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Stony Silence</a></td>
                                    
                                </tr>
                                <tr>
                                    <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Tocatli Honor Guard</a></td>
                                    
                                </tr>
                                <tr>
                                    <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Oblivion Ring</a></td>
                                    
                                </tr>
                                <tr>
                                    <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Karn, Scion of Urza</a></td>
                                    
                                </tr>
                                
                            </tbody>
                        </table>
                        <div>
                            <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Walking+Ballista&type=card" id="deckPreviewImg">
                        </div>
                    </div>
                </div>
                <h3>Card Analysis</h3>
                <div class="panel-group" id="accordion8">
            <div class="row">
                <div class="col-sm-9">
                    <div class="panel panel-format splashSectEC">
                        <div class="panel-heading">
                          <h3 class="panel-title">
                            <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion8" href="#collapse1h">
                            Thalia, Heretic Cathar</a>
                          </h3>
                        </div>
                        <div id="collapse1h" class="panel-collapse collapse">
                          <div class="panel-body splashSectEC">
                              <h4>About</h4>
                              <p>Because of Simian Spirit Guide, cards like Thalia, Heretic Cathar become quite good. Playing her on turn two, especially on the play, is very powerful in a format with fetch lands and duals. When Thalia, Heretic Cathar is in play, a fetch land becomes Evolving Wilds (unless if the opponent wants to wait for a whole extra turn to use the land), while a shock land becomes a tapped dual. In addition, Thalia, Heretic Cathar helps alleviate the damage haste creatures like Flamewake Phoenix and Arclight Phoenix deal. She can also remove blockers, especially relevant against cards like Timely Reinforcements. At worst, she is a 3/2 first strike creature, a great blocker for the many creature decks in the format, especially when paired with Thalia, Guardian of Thraben. Overall, Thalia, Heretic Cathar is great against the majority of Modern decks, as she taxes both creatures and lands.</p>
                          </div>
                        </div>
                      </div>
                <img class="entImg" src="/images/dnt/thalia-heretic-cathar-art.jpg" alt="Thalia, Heretic Cathar">
                        </div>
                        <div class="col-sm-3">
                            <img class="entCardImg" src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Thalia,%20Heretic%20Cathar&type=card" alt="Thalia, Heretic Cathar">
                        </div>
            </div>
            <div class="row">
                <div class="col-sm-9">
                     <div class="panel panel-format splashSectEC">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion8" href="#collapse2h">
                    Reality Smasher</a>
                  </h3>
                </div>
                <div id="collapse2h" class="panel-collapse collapse">
                  <div class="panel-body splashSectEC">
                      <h4>About:</h4>
                      <p>Reality Smasher, similar to the other Eldrazi in the deck, is made good thanks to Eldrazi Temple. Playing a turn four or even turn three 5/5 haste creature with upside is no joke, even in a format as fast as Modern. Reality Smasher’s ability makes it harder to kill, especially relevant against decks like Jund and Control that rely on card advantage to win the match. While a powerful creature, Reality Smasher does not match well against the very aggressive decks in the format, such as Hollow One and Humans, where a 5/5 on turn 3-5 is way too slow. The card is usually best against slower decks where it can kill the opponent out of nowhere, or against decks with smaller creatures.</p>
                  </div>
                </div>
              </div>
                <img class="entImg" src="https://227rsi2stdr53e3wto2skssd7xe-wpengine.netdna-ssl.com/wp-content/uploads/2016/01/reality-smasher-670x280.jpg" alt="Reality Smasher">
                        </div>
                        <div class="col-sm-3">
                            <img class="entCardImg" src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Reality%20Smasher&type=card" alt="Reality Smasher">
                        </div>
            </div>
            <div class="row">
                <div class="col-sm-9">
                    <div class="panel panel-format splashSectEC">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion8" href="#collapse3h">
                    Chalice of the Void</a>
                  </h3>
                </div>
                <div id="collapse3h" class="panel-collapse collapse">
                  <div class="panel-body splashSectEC">
                      <h4>About</h4>
                      <p>Chalice of the Void is typically played for two mana (x=1), preferably on turn one. Because of this, decks that run Chalice of the Void are often void of any one-mana spells. This Chalice of the Void deck looks to use Simian Spirit Guide and Gemstone Caverns to play it one turn one, else a turn two Chalice of the Void is less powerful but still alright. Unsurprisingly, Chalice of the Void is great against any deck with a ton of one-mana spells, like Grixis Death’s Shadow, Burn, and Mardu Pyromancer. There are rare occasions where playing a Chalice of the Void on a zero is fine- mostly this appears against decks with zero mana artifacts when a Chalice of the Void on one is already in play. Chalice of the Void on two is also a rare-occurring play, but be warned- once Chalice of the Void for x=2 is in play, none of Chalice Eldrazi and Taxes’s spells that cost two mana can be cast, including a Chalice of the Void for x=1.</p>
                  </div>
                </div>
              </div>
                <img class="entImg" src="https://www.mtgcanada.com/wp-content/uploads/2017/08/Chalice-of-the-Void-2.png" alt="Chalice of the Void">
                        </div>
                        <div class="col-sm-3">
                            <img class="entCardImg" src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Chalice%20of%20the%20Void&type=card" alt="Chalice of the Void">
                        </div>
            </div>
            <div class="row">
                <div class="col-sm-9">
                    <div class="panel panel-format splashSectEC">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion8" href="#collapse4h">
                    Smuggler's Copter</a>
                  </h3>
                </div>
                <div id="collapse4h" class="panel-collapse collapse">
                  <div class="panel-body splashSectEC">
                      <h4>About</h4>
                      
                      <p>Smuggler's Copter is an excellent card in the deck, enabling both speed and resilience. The card itself is great at killing the opponent fast, especially in a format without large fliers. Smuggler's Copter’s looting ability is also a good way to discard extra lands or Simian Spirit Guides in the later stages of the game in order to draw into better spells. Finally, Smuggler's Copter is simply a strong card, dodging sorcery speed removal while pressuring the opponent’s life total. The only minor issue with Smuggler's Copter in Chalice Eldrazi and Taxes is, as a noncreature spell, Thalia, Guardian of Thraben does not work particularly well with the vehicle. Other than that, Smuggler's Copter is a great spell against many Modern decks, from Control to Combo and even some aggressive decks.</p>
                  </div>
              </div>
                  </div>
                <img class="entImg" src="https://227rsi2stdr53e3wto2skssd7xe-wpengine.netdna-ssl.com/wp-content/uploads/2016/09/smugglers-copter-730x280.jpg" alt="Smuggler's Copter">
                        </div>
                        <div class="col-sm-3">
                            <img class="entCardImg" src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Smuggler's%20Copter&type=card" alt="Smuggler's Copter">
                        </div>
            </div>
            <div class="row">
                <div class="col-sm-9">
                    <div class="panel panel-format splashSectEC">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion8" href="#collapse5h">
                    Dismember</a>
                  </h3>
                </div>
                <div id="collapse5h" class="panel-collapse collapse">
                  <div class="panel-body splashSectEC">
                      <h4>About</h4>
                      <p>Since Path to Exile gets countered by a Chalice of the Void for x=1, Dismember is the primary removal spell in Chalice Eldrazi and Taxes. While it does not give the opponent a land, Dismember cannot kill giant Champion of the Parishes, Tarmogoyfs, or Ulamog, the Ceaseless Hungers. In addition, as Chalice Eldrazi and Taxes does not run black mana, Dismember often costs four life in addition to the one mana, which is especially bad against aggro decks like Humans and Elves. The fact that it does not exile also weakens Dismember compared to Path to Exile. In general, however, Dismember is still great against aggro and other decks reliant on creatures such as Jund, Collected Company builds, and Gifts Storm. That said, unlike Path to Exile, Dismember does not stay in the deck after sideboarding against heavy graveyard decks such as Dredge and Bridgevine. </p>
                  </div>
                </div>
              </div>
                <img class="entImg" src="https://i.pinimg.com/originals/83/d5/ec/83d5ecf9b0410bdf54d9728c8df1340f.jpg" alt="Dismember">
                        </div>
                        <div class="col-sm-3">
                            <img class="entCardImg" src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Dismember&type=card" alt="Dismember">
                        </div>
            </div>

                </div>

                <h3>Other Main Deck Options</h3>
            <ul>
                <li> Phyrexian Revoker </li>
                
            </ul>
            <hr>
        <h3>Sideboarding 101</h3>
        <br>
        <h3>When to bring Chalice E&T Cards in</h3>
        <br>
        <h4>Declaration in Stone</h4>
        <p>Declaration in Stone, like any other creature-removal, comes in against decks reliant on creatures. Humans, Elves, Spirits, and Jund are all decks where Declaration in Stone comes in against. Since Declaration in Stone does not give the opponent any clue tokens if the creature exiled is a token, it is a great card against decks with Lingering Souls or Empty the Warrens. Declaration in Stone, in dire times, can be used to exchange one of Chalice Eldrazi and Taxes’s creatures (and four mana) for a card. Another interesting interaction is that, if Declaration in Stone targets Phantasmal Image, the opponent will get no clues and lose no other creatures that shared the name of what Phantasmal Image copied since the spell will fizzle.</p>
        <br>
        <h4>Tocatli Honor Guard</h4>
        <p>Tocatli Honor Guard is mainly in the sideboard to beat Humans, as the majority of their deck revolves around enter the battlefield triggers. Otherwise, the card is fine against other variations of Death and Taxes, as it stops Flickerwisp and Blade Splicer from generating value.</p>
        <br>
        <h4>Oblivion Ring</h4>
        <p>Oblivion Ring is an excellent card against many Modern decks. Of course, Oblivion Ring is fine against creature decks, as removal tends to be good against those decks. It is also a fine spell against blue Control, as it can kill a planeswalker or a creature that comes in post-board. Oblivion Ring is also great at disrupting certain combo decks. Most of the time, if the opponent is not on a creature deck, Dismembers are swapped for Oblivion Rings due to the enchantment’s flexibility.</p>
        <br>
        <h4>Karn, Scion of Urza</h4>
        <p>Karn, Scion of Urza plays a similar role in the sideboard of Chalice Eldrazi and Taxes as Gideon, Ally of Zendikar does in typical Death and Taxes lists. Karn, Scion of Urza comes in against the slower decks in the format, such as Jund, Mardu Pyromancer, and blue Control. The majority of the time Karn, Scion of Urza is upticked or downticked, as card advantage is key in slower matchups. Karn, Scion of Urza’s -2, however, is not irrelevant- Chalice of the Void and Smuggler's Copter grow the token into a formidable threat.</p>
        <br>
        <hr>
        <h3>Conclusion</h3>
        <p>Overall, Chalice Eldrazi and Taxes is an excellent deck at attacking a meta full of one-mana spells. The deck is also fairly fast, often racing many decks that traditional Death and Taxes plays defense against. The deck, however, lacks the late game that other Death and Taxes variations have, making it more akin to an aggro strategy rather than a control strategy. All in all, while the deck is very different from other Death and Taxes variations, it still contains many of the same taxing elements found in other Death and Taxes builds.</p>

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

