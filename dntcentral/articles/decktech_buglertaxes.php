<?php
    include("../scripts/searchscript.php"); //actually works
    
?>
<?php
    include("../scripts/cardlistdb.php"); //does work
?>
<?php
    $filename = 'decktech_buglertaxes.php';
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

    

        <title>Mono W Bugler Taxes Deck Tech</title>
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
        <script src="https://deckbox.org/assets/external/tooltip.js"></script>
        <script src="/searchbarscripts.js" type="text/javascript"></script>
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
                    include("../scripts/navbar.php"); 
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
            <div class="container-fluid" id="content">
                <div class="jumbo-tron">
                    <h1>Mono W Bugler Taxes Deck Tech</h1>
                </div>
            <!--if I change the deck before this is released, just switch cards in the list. Odds are it won't be a drastic change so should still be fine to save this until mid-late September

            For this site, have images of the card be in a row similar to a video deck tech seen on MTGoldfish. So have a row of 1-4 card images, and then below discuss said cards below.
            -->
            
            <h2>Decklist:</h2>

            <div class="row decklist">

                <div class="col-sm-6">
                    <table class="table decklist table-condensed table-responsive">
                        <tbody>
                            <tr>
                                <th>Creatures:</th>
                            </tr>
                            <tr><!-- Thraben Inspector -->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Thraben Inspector</a></td>
                                
                            </tr>
                            <tr><!-- Thraben Inspector -->
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Weathered Wayfarer</a></td>
                                
                            </tr>
                            <tr><!--Arbiter-->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Leonin Arbiter</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Phyrexian Revoker</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Remorseful Cleric</a></td>
                                
                            </tr>
                            <tr><!-- thalia -->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Thalia, Guardian of Thraben</a></td>
                                
                            </tr> 
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Blade Splicer</a></td>
                                
                            </tr>
                            <tr><!-- flickerwisp -->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Flickerwisp</a></td>
                                
                            </tr> 
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Militia Bugler</a></td>
                                
                            </tr>
                            <tr><!--Resto-->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Restoration Angel</a></td>
                                 
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
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Eiganjo Castle</a></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Field of Ruin</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Ghost Quarter</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Horizon Canopy</a></td>
                            </tr>
                            <tr>
                                <td>8&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Plains</a></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Shefet Dunes</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Tectonic Edge</a></td>
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
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Grafdigger's Cage</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Auriok Champion</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Leonin Relic-Warder</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Rest in Peace</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Stony Silence</a></td>
                                
                            </tr>
                            
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Dismember</a></td>
                               
                            </tr>
                            <tr><!-- Gideon -->
                               <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Gideon, Ally of Zendikar</a></td>
                               
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Shalai, Voice of Plenty</a></td>
                               
                            </tr> 
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Worship</a></td>
                                
                            </tr>
                </tbody>
            </table>
            <br>
            <div>
                <img src="" id="deckPreviewImg">
            </div>
        </div>
    </div>

            <br>

            <h2>Maindeck Cards</h2>
            <br>
            <h3>The Core</h3>
            <p>This list of cards are central to the majority of modern Mono White D&T lists. Only in extreme meta shifts or budget reasons would lists be missing these cards.</p>
            <h4>Creatures</h4>
            <div class="row">
                <div class="col-sm-6">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Thalia,+Guardian+Of+Thraben&type=card" class="decktech_card" alt="Thalia, Guardian of Thraben">
                </div>
                <div class="col-sm-6">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Leonin+Arbiter&type=card" class="decktech_card" alt="Leonin Arbiter">
                </div>
            </div>
            
            <p>These are the namesake creatures in the deck- the bears that tax our opponents' spells and lands. Thalia, Guardian of Thraben punishes decks that rely on a large number of noncreature spells such as blue control decks and Gifts Storm. Her tax, in conjunction with our land hate cards, can also lock opponents out of casting their impactful spells for the duration of a game. The other common hatebear played in Death and Taxes, Leonin Arbiter, punishes opponents that pack their deck with fetchlands, along with turning our Ghost Quarters into Strip Mines.</p>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" class="decktech_card" alt="Flickerwisp">
                </div>
                <div class="col-sm-6">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Restoration+Angel&type=card" class="decktech_card" alt="Restoration Angel">
                </div>
            </div>
            
            <p>Two other key cards played in Eldraziless mono-white Death and Taxes lists are Flickerwisp and Restoration Angel. Both of these creatures are fliers that can also save our creatures from removal spells or get value out of our creatures with EtB (enter the battlefield) abilities.</p>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Thraben+Inspector&type=card" class="decktech_card" alt="Thraben Inspector">
                </div>
                <div class="col-sm-6">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Blade+Splicer&type=card" class="decktech_card" alt="Blade Splicer">
                </div>
            </div>
            <p>Thraben Inspector and Blade Splicer are the most common creatures in this archetype with value ETB triggers. Both work well as both aggressive creatures as well as value engines in conjunction with the fliers presented earlier.</p>
            <br>
            <h4>Non-Creature Spells</h4>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Aether+Vial&type=card" class="decktech_card" alt="Aether Vial">
                </div>
                <div class="col-sm-6">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Path+to+Exile&type=card" class="decktech_card" alt="Path to Exile">
                </div>
            </div>
            <p>The two spells that are played in nearly every variant of Death and Taxes are Aether Vial and Path to Exile. Both are one mana spells that are very effective at what they do. Aether Vial lets the deck deploy creatures at a faster rate, along with utilizing certain abilities of creatures by giving them flash (most notably Flickerwisp). Path to Exile serves as the deck's primary creature interaction, removing nearly every creature in modern for the cheap price of 1 mana (assuming there isn't a Thalia, Guardian of Thraben in play).</p>
            <!--insert image of Path to Exile and Aether Vial card image (not art)-->
            <br>
            <hr>
            <h3>Bugler Package</h3>
            <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Militia+Bugler&type=card" class="decktech_card" alt="Militia Bugler">
            <p>After the core cards, there are usually around 5 flex slots left over for mono-white Death and Taxes. In this build, I've opted to run three Militia Bugler in this spot, along with a few powerful creatures that can be fetched off of said creature. Militia Bugler is great in this deck- getting a hatebear like Thalia, Guardian of Thraben or Leonin Arbiter against a deck weak to them is great, as is grabbing a more value creature like Thraben Inspector or Blade Splicer against the slower matchups. The drawback of Militia Bugler is it cannot grab either of the fliers in the deck, but at least he can grab another Militia Bugler!</p>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-4">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Weathered+Wayfarer&type=card" class="decktech_card" alt="Weathered Wayfarer">
                </div>
                <div class="col-sm-4">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Phyrexian+Revoker&type=card" class="decktech_card" alt="Phyrexian Revoker">
                </div>
                <div class="col-sm-4">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Remorseful+Cleric&type=card" class="decktech_card" alt="Remorseful Cleric">
                </div>
            </div>
            <p>In this particular Militia Bugler build, I've chosen to run three 1 of creatures that can be found by Militia Bugler. Weathered Wayfarer is a great card in the slower matchups, where the card advantage that can be gained through fetching and cycling through Horizon Canopys is very notable. Weathered Wayfarer is also a card that can get our land-destruction lands against decks that require lands to win, like Titan Shift and Tron. Phyrexian Revoker is another card that is relevant against a large number of decks. It can shut off planeswalkers, artifacts, combo pieces, mana creatures, and even Simian Spirit Guide. Finally, Remorseful Cleric is a great card against the many graveyard decks that plague modern. Even against UW control, stopping a Snapcaster Mage from flashing back a Cryptic Command can be game winning.</p>
            <br>
            <h4>Other options in Bugler Package</h4>
            <div class="row">
                <div class="col-sm-6">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Selfless+Spirit&type=card" class="decktech_card" alt="Selfless Spirit">
                </div>
                <div class="col-sm-6">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Mirran+Crusader&type=card" class="decktech_card" alt="Mirran Crusader">
                </div>
            </div>
            <p>While not part of the decklist, I'd like to mention two other creatures that are very playable with Militia Bugler as well. Selfless Spirit is nice protection against board wipes or 2 for 1 removal spells like Kolaghan's Command (targeting two creatures) and Electrolyze. The reason it is not present in the list is the current answers to creature decks are not Wrath of Gods, but rather Terminus and Ensnaring Bridge, both of which dodge Selfless Spirit. Another viable exclusion is Mirran Crusader, a great beater against the many black decks in the format. If Lightning Bolt was not so common he would make the list, as he is a great attacker and blocker against both aggro and midrange.</p>
            <br>
            <hr>
            <h3>Manabase</h3>
            <div class="row">
                <div class="col-sm-4">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Ghost+Quarter&type=card" class="decktech_card" alt="Ghost Quarter">
                </div>
                <div class="col-sm-4">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Tectonic+Edge&type=card" class="decktech_card" alt="Tectonic Edge">
                </div>
                <div class="col-sm-4">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Field+of+Ruin&type=card" class="decktech_card" alt="Field of Ruin">
                </div>
            </div>
            <p>One of the advantages of playing only 1 color in modern is being able to play a large number of colorless lands. With Death and Taxes, the taxing happens with your lands as well as your creatures. Ghost Quarter serves as a Strip Mine when Leonin Arbiter is in play and the opponent is unable to pay tax. It can also get rid of problematic lands in a pinch, such as Tron lands or an Azcanta, the Sunken Ruin. The other main land-destruction land in the deck is Tectonic Edge, which requires the opponent to control 4 lands to activate and the land must be nonbasic, but it does not require a Leonin Arbiter in play to get good value. A common trick with Tectonic Edge is, with 2 of them in play plus two other lands, to use them both by holding priority. Finally, a 1 of Field of Ruin can take care of a Tron land a turn earlier than Tectonic Edge, plus it does not put us behind on lands, unlike the former two lands.</p>
            <br>
            <div class="row">
                <div class="col-sm-4">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Horizon+Canopy&type=card" class="decktech_card" alt="Horizon Canopy">
                </div>
                <div class="col-sm-4">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Shefet+Dunes&type=card" class="decktech_card" alt="Shefet Dunes">
                </div>
                <div class="col-sm-4">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Eiganjo+Castle&type=card" class="decktech_card" alt="Eiganjo Castle">
                </div>
            </div>
            <p>In addition to the land-destruction lands, a number of utility lands are present in D&T. The most important of these is Horizon Canopy, a land that can help the deck dig for spells in the later stages of the game. Two one-of lands include Shefet Dunes and Eiganjo Castle. The former can help us push just enough damage to finish off an opponent, while the latter can, in niche cases, save a Thalia, Guardian of Thraben. The reason for only playing 1 Shefet Dunes in a mono-white deck is, if too many are in the deck, more and more opening hands will lack a white source that doesn't cost life to produce the mana, which will thus worsen the aggro matchups like Burn.</p>
            <br>
            <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Plains&type=card" class="decktech_card" alt="plains">
            <p>And, of course, an abundance of Plains are present. Due to the many colorless lands in the deck, there is a necessity to run enough white sources, and Plains gets the job done well. Running a large number of the basic land also leaves the deck less vulnerable to a Blood Moon.</p>
            <br>
            <hr>
            <h2>Sideboard Cards</h2>
            <br>
            <h3>Graveyard Hate</h3>
            <div class="row">
                <div class="col-sm-6">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Rest+in+Peace&type=card" class="decktech_card" alt="Rest in Peace">
                </div>
                <div class="col-sm-6">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Grafdigger's+Cage&type=card" class="decktech_card" alt="Grafdigger's Cage">
                </div>
            </div>
            <p>In the modern meta, graveyard hate needed to battle the many graveyard-based strategies in the format. Rest in Peace is debatably the best graveyard hate spell in the game; while costly at two mana, it is hard to remove as it is an enchantment, plus it exiles both graveyards right immediately and indefinitely (so long as it stays in play). It is an important spell in not only the big graveyard decks, but also against slower decks that utilize the graveyard such as Jund and UWx Control. The other graveyard hate spell played in the sideboard, Grafdigger's Cage, is much narrower than Rest in Peace, but costs a whole mana less. Another downside of Grafdigger's Cage is, if removed (which is much more likely as artifact hate will be boarded against Death and Taxes), the opponent's graveyard will be intact and ready for abuse, whereas Rest in Peace keeps the cards exiled forever (for the most part). But alas, some decks like BR Bridgevine are too fast for Rest in Peace.</p>
            <br>
            <!--see Artifact Hate-->
            <h3>Artifact Hate</h3>
            <div class="row">
                <div class="col-sm-6">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Stony+Silence&type=card" class="decktech_card" alt="Stony Silence">
                </div>
                <div class="col-sm-6">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Leonin+Relic-Warder&type=card" class="decktech_card" alt="Leonin Relic-Warder">
                </div>
            </div>
            <p>Another strategy that has a strong presence in modern is artifact-based decks such as Affinity, KCI, and Tron. While Stony Silence turns off our Aether Vials and Thraben Inspector clues, it is just too good of a card versus a large chunk of the meta to exclude. The one of Leonin Relic-Warder is nice as it can be found off of a Militia Bugler or be flashed in by an Aether Vial. Only hitting one artifact is not as good versus the above-mentioned decks, but another advantage to running Leonin Relic-Warder is its ability to hit problematic enchantments like Ghirapur Aether Grid or artifacts unaffected by Stony Silence like Amulet of Vigor.</p>
            <br>
            <!--mention matchups that these come in vs. (or really for all sideboard cards)-->
            <h3>Midrange/Control Finishers</h3>
            <div class="row">
                <div class="col-sm-6">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Gideon,+Ally+Of+Zendikar&type=card" class="decktech_card" alt="Gideon, Ally of Zendikar">
                </div>
                <div class="col-sm-6">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Shalai,+Voice+Of+Plenty&type=card" class="decktech_card" alt="Shalai, Voice of Plenty">
                </div>
            </div>
            <p>A few sideboard slots in D&T are typically dedicated for powerful threats against slower decks like Jund, Mardu Pyromancer, and UWx Control. The most common of these spells is Gideon, Ally of Zendikar, an amazing card against really any deck but especially the slower decks. The other card that falls under this category is Shalai, Voice of Plenty. While she is not as good against the slower decks compared to a powerful planeswalker, she is pretty good against a much larger range of decks, as giving you and your creatures hexproof is very relevant. Decks like Burn and Gifts Storm struggle with their opponent having hexproof.</p>
            <br>
            <!--mention how Shalai is not just a control finisher- she is kinda
                like a swiss knife; comes in vs. combo, some aggro, midrange, etc-->
            <h3>Aggro Haters</h3>
            <div class="row">
                <div class="col-sm-3">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Burrenton+Forge-Tender&type=card" class="decktech_card" alt="Burrenton Forge-Tender">
                </div>
                <div class="col-sm-3">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Auriok+Champion&type=card" class="decktech_card" alt="Auriok Champion">
                </div>
                <div class="col-sm-3">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Dismember&type=card" class="decktech_card" alt="Dismember">
                </div>
                <div class="col-sm-3">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Worship&type=card" class="decktech_card" alt="Worship">
                </div>
            </div>
            <p>Creatures like Burrenton Forge-Tender and Auriok Champion serve primarily as anti-aggro cards. The former can also come in against decks with powerful red removal, like Anger of the Gods. Despite the life loss, Dismember is a great card against the non-burn aggressive decks, along with pretty much any creature-based strategy like Spirits, Humans, and even Jund. Finally, Worship is great against creature-heavy aggressive lists, as it can buy us enough time to kill the opponent with our fliers.</p>
            <!--Burrenton, Champ, Worship, Dismember-->
            <!--mention Dismember life drawback, also how it comes in vs. midrange and certain combo-->
            <br>
            <h3>Other sideboard options</h3>
            <div class="row">
                <div class="col-sm-6">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Relic+of+Progenitus&type=card" class="decktech_card" alt="Relic of Progenitus">
                </div>
                <div class="col-sm-6">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Kitchen+Finks&type=card" class="decktech_card" alt="Kitchen Finks">
                </div>
            </div>
            <!--can add more later-->
            <p>Other viable graveyard hate spells are available, like Relic of Progenitus. The main issue I've found with Relic of Progenitus is that it cannot be sacrificed until turn two, where a Rest in Peace can already be cast. Plus, once Relic of Progenitus is used, the opponent can often rebuild their graveyard, whereas a Rest in Peace can keep the yard exiled forever. The other card worth noting is Kitchen Finks, yet another viable option against aggro. Two main issues are the card is very bad in conjunction with a Rest in Peace (which is brought in vs. a lot of matchups where Kitchen Finks comes in), and it is not a very powerful card against bad aggro matchups for Death and Taxes like Humans. On the other hand, a card like Worship, while narrower, can win games on its own against decks like Humans.</p>
            <!--Relic, Finks, 3rd Stony, 3rd RiP, other stuff-->
            <!--mention why I don't play them but also why they are totally viable-->
            <br>
            <hr>
            <h2>Conclusion</h2>
            <p>Bugler Taxes is my current favorite iteration of Death and Taxes in modern. The ability for the deck to play as both an aggressive deck as well as a grindy deck while providing the disruptive D&T package makes it a strong contender in the current modern meta.</p>
            <br>
            <hr>
            <h2>Further Readings:</h2>
            <div class="row">
                <div class="col-sm-6">
                    <h3>Previous Article</h3>
                    <h4><a href="aethervial">Aether Vial 101</a></h4>
                </div>
                <div class="col-sm-6">
                    <h3>Recommended</h3>
                    <h4><a href="/modern/mulligans#mg">This month's Mulligan Game</a></h4>
                </div>
            </div>

            </div>
            
            <script>var jArray = <?php echo json_encode($listOfCardNames); ?>;</script>
            <script src="/loadcardhoversettings.js"></script>
            
            <?php
                include("../scripts/footer.php");
            ?>
            <script>var jStr = <?php echo json_encode($lastModDate); ?>;</script>
            <script src="/loadpublishinfo.js" type="text/javascript"></script>
    </body>
</html>


