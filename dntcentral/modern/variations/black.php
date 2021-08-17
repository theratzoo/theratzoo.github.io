<?php
    include("../../scripts/searchscript.php"); //actually works
    
?>
<?php
    include("../../scripts/cardlistdb.php"); //does work
?>
<?php
    $filename = 'black.php';
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

    

        <title>Modern Splashes- Black</title>
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
                    <h1>Modern Splashes: Black</h1>
                </div>
                <p>The least popular of the color splashes, Black White Eldrazi-less Taxes focuses on smaller creatures such as Dark Confidant and Tidehollow Sculler. In addition, splashing black also offers the deck powerful value creatures such as Ravenous Chupacabra and Gonti, Lord of Luxury. Another perk gained from this color is access to great noncreature spells, most notably Fatal Push. Powerful sideboard options are also available in BW Taxes. The deck itself plays faster than traditional Death and Taxes builds, looking to build a board early on. Nonetheless, especially after game one, the deck can port well into the late game. BW Taxes is stronger against faster creature decks such as Humans compared to traditional Mono White Death and Taxes and can do quite well against combo decks. However, it often falls short against midrange and control, as its additional two drops are easy to deal with before they generate value.</p>
            <h3>Sample Decklist</h3>
            <div class="row">
                <div class="col-sm-6">
                    <table class="table decklist table-condensed table-responsive">
                        <tbody>
                            <tr>
                                <th>Creatures:</th>
                            </tr>
                            <tr><!--Bob-->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Dark Confidant</a></td>
                              
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
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Blade Splicer</a></td>
                                
                            </tr>
                            <tr><!-- flickerwisp -->
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Flickerwisp</a></td>
                               
                            </tr> 
                            <tr><!--ravenous-->
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Ravenous Chupacabra</a></td>
                                
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Restoration Angel</a></td>
                                 
                            </tr>
                            <tr>
                                <th>Spells:</th>
                            </tr>     
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Fatal Push</a></td>
                                <td>
                                
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
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Caves of Koilos</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Concealed Courtyard</a></td>
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Field of Ruin</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Ghost Quarter</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Godless Shrine</a></td>
                            </tr>
                            
                                <td>5&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Plains</a></td>
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Shambling Vent</a></td>
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
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Burrenton Forge-Tender</a></td>
                               
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Fatal Push</a></td>
                                
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Rest in Peace</a></td>
                               
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Stony Silence</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Kambal, Consul of Allocation</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Liliana, the Last Hope</a></td>
                               
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Orzhov Pontiff</a></td>
                              
                            </tr>
                            <tr><!-- Gideon -->
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Gideon, Ally of Zendikar</a></td>
                                
                            </tr>
                    </tbody>
                </table>
                <br>
                    <div>
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Dark+Confidant&type=card" id="deckPreviewImg">
                    </div>
              </div>
            </div>
            <h3>Card Analysis</h3>
            <div class="panel-group" id="accordion6">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="panel panel-format splashSectB">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion6" href="#collapse1f">Dark Confidant</a>
                              </h3>
                            </div>
                            <div id="collapse1f" class="panel-collapse collapse">
                              <div class="panel-body splashSectB">
                                  <h4>About:</h4>
                                  <p>Dark Confidant is the deck's main card-advantage engine. Unlike Black-White Death and Taxes' Eldrazi counterpart, this deck plays all four Dark Confidant in the deck, as it is simply a powerhouse if not answered, therefore allowing Dark Confidant to make up for the lack of powerful Eldrazi. Dark Confidant's downside of taking damage is not too relevant when the deck contains very few high CMC cards (five four-drops and six three-drops in the list above). While weak to removal initially, Dark Confidant can easily take over the game against any fair deck, making him one of the best cards in the deck.</p>
                              </div>
                            </div>
                        </div>
                        <img class="entImg" src="https://www.daltenda.com/wp-content/uploads/2017/03/rakdos.jpg" alt="Dark Confidant">
                        </div>
                        <div class="col-sm-3">
                            <img class="entCardImg" src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Dark%20Confidant&type=card" alt="Dark Confidant">
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-9">
                        <div class="panel panel-format splashSectB">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion6" href="#collapse2f">
                                Tidehollow Sculler</a>
                              </h3>
                            </div>
                            <div id="collapse2f" class="panel-collapse collapse">
                              <div class="panel-body splashSectB">
                                  <h4>About:</h4>
                                  <p>Tidehollow Sculler grants the deck hand disruption, a valuable ability for Modern, on a 2/2 body. Tidehollow Sculler is at its best versus combo matchups but can also take away valuable removal from the opponent. The general rule for Tidehollow Sculler against most fair decks is to take the removal spell, as it prevents the opponent from getting back the spell taken by Tidehollow Sculler (assuming they only have one removal spell in hand). Otherwise, taking their most powerful spell is alright. The main synergy with Tidehollow Sculler in the deck is blinking it with a Flickerwisp in response to its enter the battlefield trigger. By doing so, you get to permanently exile a card from the opponent’s hand and have an additional one under Tidehollow Sculler. Tidehollow Sculler can also steal a card in response to being revealed by its miracle ability, so long as an Aether Vial on two is untapped or a Restoration Angel is able to blink a Tidehollow Sculler already on the battlefield. Tidehollow Sculler is worst against decks with a plethora of removal spells, as its effect is weak when it dies a turn after taking the card.</p>
                              </div>
                            </div>
                          </div>
                    <img class="entImg" src="https://78.media.tumblr.com/cd342f1bf8ee7ae01b04658c5e066bf4/tumblr_nbt5e0izvG1thxsmlo1_640.jpg" alt="Tidehollow Sculler">
            </div>
            <div class="col-sm-3">
                <img class="entCardImg" src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Tidehollow%20Sculler&type=card" alt="Tidehollow Sculler">
            </div>
                </div>
                <div class="row">
                    <div class="col-sm-9">
                        <div class="panel panel-format splashSectB">
                        <div class="panel-heading">
                          <h3 class="panel-title">
                            <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion6" href="#collapse3f">Fatal Push</a>
                          </h3>
                        </div>
                        <div id="collapse3f" class="panel-collapse collapse">
                          <div class="panel-body splashSectB">
                              <h4>About:</h4>
                              <p>Fatal Push acts as a pseudo Path to Exile five and six against the many creature heavy decks in the Modern format. However, Fatal Push has two main downsides: it misses many of the big creatures in the format (Gurmag Angler, Tasigur, the Golden Fang, Primeval Titan, Hollow One, etc.), and it is difficult to hit three and four CMC creatures, especially in BW Taxes, as the deck lacks fetch lands to trigger revolt. On the other hand, Fatal Push has the upside of not giving the opponent a basic land, which can be a huge difference in certain matchups like Burn and Collected Company decks. Because of said upside, Fatal Pushing a mana dork on turn one is a viable play, whereas Path to Exiling a mana dork does not keep them off of the additional mana. Fatal Push is best against decks with a large surplus of creatures, such as Humans, Spirits, Merfolk, Elves, and Collected Company decks, and weakest against Control decks. Fatal Push is also reasonable against Gifts Storm, as killing their Goblin Electromancer/Baral, Chief of Compliance is important to winning the matchup.</p>
                              <h4>Ways to Trigger Revolt For Fatal Push</h4>
                              <p>Besides the obvious of losing a creature in combat, a very common way to trigger revolt is to use Flickerwisp’s ability on one of your permanents and then cast Fatal Push on a three or four CMC creature. This interaction also works with Restoration Angel’s blink ability, as it is causing the creature to leave the battlefield. Using one of your land-destruction lands like Ghost Quarter is also a convenient way to trigger revolt. Other than that, there are desperate plays that can enable revolt such as playing a Thalia, Guardian of Thraben after you already control one through the legend rule, or even using a removal spell on one of your own creatures.</p>
                          </div>
                        </div>
                      </div>
                    <img class="entImg" src="https://227rsi2stdr53e3wto2skssd7xe-wpengine.netdna-ssl.com/wp-content/uploads/2017/01/fatal-push-e1484122210313-730x280.jpg" alt="Fatal Push">
            </div>
            <div class="col-sm-3">
                <img class="entCardImg" src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Fatal%20Push&type=card" alt="Fatal Push">
            </div>
                </div>
                <div class="row">
                    <div class="col-sm-9">
                        <div class="panel panel-format splashSectB">
                        <div class="panel-heading">
                          <h3 class="panel-title">
                            <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion6" href="#collapse4f">
                            Ravenous Chupacabra</a>
                          </h3>
                        </div>
                        <div id="collapse4f" class="panel-collapse collapse">
                          <div class="panel-body splashSectB">
                              <h4>About:</h4>
                              <p>Ravenous Chupacabra acts as extra unconditional removal. Ravenous Chupacabra also has the upside of coming with a 2/2 body, for the low cost of four mana. While this card may appear too slow for Modern, the power level and synergies with the deck compel it to take up at least one slot in the main deck. Since Ravenous Chupacabra's ability is an enter the battlefield trigger, it can easily be repeated with flicker effects like Flickerwisp and Restoration Angel, allowing you to clear the opponent’s main threats. In addition, as it is a creature, Ravenous Chupacabra can be vialed in to surprise an opponent.</p>
                          </div>
                      </div>
                  </div>
                    <img class="entImg" src="https://227rsi2stdr53e3wto2skssd7xe-wpengine.netdna-ssl.com/wp-content/uploads/2018/01/chupacabra-730x280.png" alt="Ravenous Chupacabra">
            </div>
            <div class="col-sm-3">
                <img class="entCardImg" src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Ravenous%20Chupacabra&type=card" alt="Ravenous Chupacabra">
            </div>
                </div>
            </div>
            <br>
            <h3>Other Black Main Deck Options</h3>
            <ul>
                <li> Wasteland Strangler </li>
                <li> Gonti, Lord of Luxury </li>
                <li> Thoughtseize </li>
                <li> Inquisition of Kozilek </li>
            </ul>
            <hr>
            <h3>Sideboarding 101</h3>
            <br>
            <h3>When to Bring Black Cards in</h3>
            <br>
            <h4>Fatal Push:</h4>
            <p>As mentioned above, Fatal Push is best against creature-centric decks. Humans, Merfolk, Elves, Spirits, Burn, and other strategies like that are decks where Fatal Push is desired. Decks that require small creatures for combos, like Devoted Druid Combo and Gifts Storm, are also decks where Fatal Push is boarded against. Other Collected Company decks, along with creature-heavy midrange strategies such as Jund and Abzan are matches where Fatal Push is good in as well. Decks that you do not want to board Fatal Push in are combo decks that do not use small creatures, such as Grishoalbrand, Ad Nauseam, and Titan Shift. Control decks are also decks where Fatal Push is at its worst. Mardu Pyromancer is interesting- while a midrange deck with creatures, Fatal Push only hits Young Pyromancer and tokens, making it poor in that particular matchup.</p>
            <h4>Kambal, Consul of Allocation</h4>
            <p>Kambal, Consul of Allocation is an essential card versus spell-based decks, especially combo decks like Gifts Storm. Kambal, Consul of Allocation is also effective at locking down control decks, as bringing them down to very low life totals is very common in the matchup. Other than that, Kambal, Consul of Allocation is also great against burn. Not only does he gain valuable life points, but his drain can lock out opponents (especially if an Eidolon of the Great Revel is in play). Other decks that Kambal, Consul of Allocation is fine creature against Mardu Pyromancer, Grishoalbrand, Titan Shift, Ad Nauseam, and other similar decks. To no surprise, Kambal, Consul of Allocation is worst against creature decks, especially ones with Aether Vial and Collected Company.</p>
            <h4>Liliana, the Last Hope</h4>
            <p>Liliana, the Last Hope is one of your best cards versus any midrange and control deck. Jund, Abzan, Mardu Pyromancer, and Ux control all struggle to deal with a planeswalker. Liliana, the Last Hope is also effective against creature decks with a large number of their creatures having one toughness. Humans, Death and Taxes mirrors, Elves, and Collected Company decks are all examples where Liliana, the Last Hope shines. Liliana, the Last Hope is worst against combo decks and very fast aggressive decks like Burn and BR Hollow One, as they do not care about her +1 ability or can win before its relevant.</p>
            <h4>Orzhov Pontiff</h4>
            <p>Orzhov Pontiff’s primary purpose is to punish decks with a surplus of one-toughness creatures. Humans, Elves, Death and Taxes Mirrors, and tokens decks (such as Mardu Pyromancer) are all matchups where Orzhov Pontiff shines in. Unlike Liliana, the Last Hope, Orzhov Pontiff is bad against the majority of control and midrange decks. Orzhov Pontiff is also useless against the majority of combo decks and some aggressive decks like Burn and BR Hollow One. However, Orzhov Pontiff is not the worst against Gifts Storm, as it is a clean answer to Empty the Warrens tokens. The biggest upside to Orzhov Pontiff rather than Liliana, the Last Hope is that it synergies with the deck- Restoration Angel and Flickerwisp can blink Orzhov Pontiff to continuously clear the opponent’s side of the board. With an Aether Vial and blink creature, multiple Orzhov Pontiff triggers can also be set up. Overall, while more narrow than Liliana, the Last Hope, Orzhov Pontiff is very powerful in the right matchup and functions with the deck as a whole significantly better.</p>
            <h3>Other Sideboard Options</h3>
            <ul class="cardList">
                <li> Thoughtseize </li>
                <li> Inquisition of Kozilek </li>
                <li> Collective Brutality </li>
                <li> Gonti, Lord of Luxury </li>
                <li> Dismember </li>
                <li> Wasteland Strangler </li>
            </ul>
            <!--<h4>Pros/Cons:</h4>-->
            <h3>Conclusion</h3>
            <p>While the least popular of the splashes, Black-White Taxes has unique options available that can add power and value to the deck, whether that be removal, card draw, hand disruption, or midrange threats. The flexibility found in black hatebears is unique compared to other splashes, making it a very customizable deck with a large potential.</p>
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

