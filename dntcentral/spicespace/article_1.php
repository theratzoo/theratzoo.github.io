<?php
    include("../scripts/searchscript.php"); //actually works
    
?>
<?php
    include("../scripts/cardlistdb.php"); //does work
?>
<?php
    $filename = 'article_1.php';
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

    

        <title>Spice Space- M19 Cards</title>
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
          function previewDeckThree(name) {
            var img = document.getElementById('deckPreviewImgThree');
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
                <div class="jumbotron">
                <h1>Spice Space #1: M19 Cards</h1> <!--work on the title...-->
            </div>
            
            <hr>
            <br>
            
            <div class="row">
                <div class="col-sm-6">
                    <img src="https://pre00.deviantart.net/5b95/th/pre/f/2018/187/b/b/remorseful_cleric___magic_the_gathering_by_88grzes-dcggdvq.jpg" alt="Remorseful Cleric" class="ssa1_img">
                </div>
                <div class="col-sm-6">
                    <img src="https://i.ytimg.com/vi/hcY0K7_KgGM/hqdefault.jpg" alt="Militia Bugler" class="ssa1_img">
                </div>
            </div>
            <br>
            <hr>
            <br>
            <h2>Overview</h2>
            <p>The majority of standard sets produced at the moment bring very limited modern playables to the format, let alone future staples. Of course, exceptional cards are still made (hello Fatal Push). However, there are usually a non-zero number of Death and Taxes "playable" cards that come out of each new standard set, albeit some significantly more playable than others. Cards like Thalia, Heretic Cathar, Gideon, Ally of Zendikar, and the new Dominaria angel Shalai, Voice of Plenty all have proven their value in Death and Taxes. All of that being said, a few specific cards from the most recent set, Core 2019, have screamed Death and Taxes (some louder than others of course).</p>
            <hr>
            <h2>Specific Cards:</h2>
            <br>
            <h3>Honorable Mentions:</h3>
            <p>The only card from M19 worth noting here is Isolate, a card clearly designed for eternal formats (or a cheap answer to Llanowar Elves). However, its playability is not very high in the current modern format. In terms of permanents that it hits, Isolate hits all the major mana creatures, Death's Shadow, Champion of the Parish, Aether Vial, the majority of aggro creatures, a few merfolk and spirits, some 1 mana artifacts played in Tron and KCI, Flameblade Adept, and a few other less important spells. While the list is non-zero, Isolate is also a blank card versus too many top-tier decks, like storm, jund, dredge, blue-based control, and mardu pyromancer. Even against decks like Humans and Hollow One, they often only run a few 1 drops that are only valuable killing in the early game. Against KCI and Tron, their 1 mana artifacts happen to be ones that can be cycled for one a mana or two, making it hard to get them with Isolate. In addition, the cards that D&T struggles the most against tend to be ones that cost over 1 mana (with very limited exceptions like Grim Lavamancer). Overall, the card is too narrow for the current modern meta, especially for a Death and Taxes sideboard.</p>
            <hr>

            <h2>Remorseful Cleric:</h2>
            <br>
            <h3>Pre-gameplay thoughts</h3>
            <p>When this card was first spoiled, I immediately thought Remorseful Cleric would become a staple in Death and Taxes. The current modern meta consists of many decks that utilize the graveyard, and even against non-graveyard decks it still serves as a 2/1 flier for two mana that can hit hard. However, when coming to my senses, Remorseful Cleric is best compared to Selfless Spirit, an identically stated card that instead protects your creatures from damaged-based removal. Despite Selfless Spirit having a home in many Modern decks, Death and Taxes is not one of those decks- the card is often a low-impact 1 for 1 that just does not contribute enough to the deck. When playing against decks with board wipes, it is often best to stop them from casting the boardwipe all together through hatebears anyway. While the majority of modern decks run removal, Selfless Spirit still does not see much of any play in D&T. Therefore, why would Remorseful Cleric see more play?</p>
            <br>
            <p>The answer is power level. While giving indestructable to your team is often seen as a more powerful ability compared to Tormod's Crypting the opponent, the former is often easier to play around than the latter, especially when the opposing deck's gameplan revolves around graveyard strategies. Decks like Dredge, Hollow One, and Living End cannot afford to play around Remorseful Cleric, else they give up too much speed. In addition, Remorseful Cleric is often good enough in many other scenarios, mainly against Snapcaster Mage decks. At worst, it can trade for a removal spell in the graveyard, which would often be no different than a Selfless Spirit. The ceiling, however, is high- preventing the opponent from flashing back a boardwipe or a Cryptic Command is game winning. With all that being said, I've put together a deck with two Remorseful Clerics to see how well they battle in Modern!</p>
            <h3>Decklist:</h3>
            <br>
            <h2 class="sslist">Mono W Remorseful Cleric Taxes</h2>
            <div class="row decklist">
                
                <div class="col-sm-6">
                    <table class="table decklist table-condensed table-responsive">
                        <tbody>
                            <tr>
                                <th>Creatures:</th>
                            </tr>
                            <tr><!-- Thraben Inspector -->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Thraben Inspector</a></td>
                                
                            </tr>
                            <tr><!--Arbiter-->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Leonin Arbiter</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Remorseful Cleric</a></td>
                                
                            </tr>
                            <tr><!-- thalia -->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Thalia, Guardian of Thraben</a></td>
                                
                            </tr> 
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Blade Splicer</a></td>
                                
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Eldrazi Displacer</a></td>
                                
                            </tr>
                            <tr><!-- flickerwisp -->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Flickerwisp</a></td>
                                
                            </tr> 
                            <tr><!--Resto-->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Restoration Angel</a></td>
                                 
                            </tr>
                            <tr>
                                <th>Spells:</th>
                            </tr>
                           <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Path to Exile</a></td>
                                
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
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Eiganjo Castle</a></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Eldrazi Temple</a></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Field of Ruin</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Ghost Quarter</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Horizon Canopy</a></td>
                            </tr>
                            <tr>
                                <td>7&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Plains</a></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Shefet Dunes</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Tectonic Edge</a></td>
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
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Burrenton Forge-Tender</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Auriok Champion</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Phyrexian Revoker</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Rest in Peace</a></td>
                               
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Stony Silence</a></td>
                                
                            </tr>
                            
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Aven Mindcensor</a></td>
                               
                            </tr>

                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Dismember</a></td>
                               
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Kitchen Finks</a></td>
                                                             
                            </tr>
                            <tr><!-- Gideon -->
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Gideon, Ally of Zendikar</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Shalai, Voice of Plenty</a></td>
                                
                            </tr> 
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Worship</a></td>
                                
                            </tr>
                        </tbody>
                    </table>
                    <div>
                        <img src="" id="deckPreviewImgOne">
                    </div>
                </div>
            </div>

            <!-- fix decklist on 7-09-18 then paste it here-->
            

            <br>
            <h3>Post-gameplay thoughts</h3>
            <p>It took about 1 league to realize that Remorseful Cleric is just too slow against the few decks that it is impactful against. While I did get value off of the card versus Hollow One (exiling Faithless Lootings and Flamewake Phoenixes), it did not in any way stop me from dying to their already-in-play Hollow Ones and Flamewake Phoenix. In addition, as it turns out, not many decks in modern even utilize their graveyard, let alone care much if it gets exiled. In matchups like Jund, Mardu Pyromancer, and blue-based control, a card like Rest in Peace invalidates many of their cards, making it a valuable card in the matchup. However, they can easily win through said enchantment, as they don't <i>need</i> their graveyard to win, but it does help significantly. Therefore, only exiling their graveyard one time against these grindy decks is often a waste of resources for Death and Taxes, so Remorseful Cleric is just not good. Again, the cards we want versus the slower decks in the format are either ones that can help us go under them (i.e. hatebears) or ones that grant us value and are at least two for ones. Overall, Remorseful Cleric felt very underwhelming in the majority of modern matchups, and a hit-or-miss in the matchups that matter, making it too narrow for the main deck and too weak for the sideboard (as better graveyard hate exists).</p>
            <h3>The card's future:</h3>
            <p>Remorseful Cleric can assurdily find a home in a deck that can make better use of its stats, like spirits, but is not the graveyard hatebear Death and Taxes wants. In terms of further testing, the card seems playable in two niche D&T shells: GW taxes with Collected Company, and a more "toolbox" build featuring Militia Bugler (more on him below). Other than those two builds, the card should only be picked up in D&T if the modern meta became plagued with graveyard-based decks or if your local meta contains many of said graveyard decks. Maybe one day we will get a Rest in Peace on a stick.</p>
            <!--CoCo-->

            <hr>
            <h2>Militia Bugler:</h2>
            <br>
            <h3>Pre-game thoughts:</h3>
            <p>Militia Bugler is a very interesting card. A well-stated three drop that haves a huge upside of (sometimes) getting a creature, Militia Bugler appears as a very modern-playable card. However, when I first saw this card, I noticed a major flaw- it only grabs creatures with power two or less. While Death and Taxes is a deck with several less-than-three-power creatures, they are often not the creatures Militia Bugler wants to grab by the time it hits the battlefield. Often by turn three (or later), it is too late for hatebears like Thalia, Guardian of Thraben and Leonin Arbiter, and at that stage of the game fliers like Flickerwisp and Restoration Angel are needed. However, neither flier gets grabbed by Militia Bugler. In addition, none of the powerful Eldrazi can be found by Militia Bugler, making it near-unplayable in Eldrazi builds. Even in a non-Eldrazi build, the risk of failing to find in conjunction with the low impact of the creatures that can be found made the card appear poor. Nonetheless, I still build a deck list with two Militia Buglers in it to see if I was wrong with its power.</p>
            <h3>Decklist:</h3>
            <br>
            <h2>Mono W Bugler Taxes</h2>
            <div class="row decklist">
                
                <div class="col-sm-6">
                    <table class="table decklist table-condensed table-responsive">
                        <tbody>
                            <tr>
                                <th>Creatures:</th>
                            </tr>
                            <tr><!-- Thraben Inspector -->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Thraben Inspector</a></td>
                                
                            </tr>
                            <tr><!-- Thraben Inspector -->
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Weathered Wayfarer</a></td>
                                
                            </tr>
                            <tr><!--Arbiter-->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Leonin Arbiter</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Phyrexian Revoker</a></td>
                                
                            </tr>
                            <tr><!-- thalia -->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Thalia, Guardian of Thraben</a></td>
                                
                            </tr> 
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Blade Splicer</a></td>
                                
                            </tr>
                            <tr><!-- flickerwisp -->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Flickerwisp</a></td>
                                
                            </tr> 
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Militia Bugler</a></td>
                                
                            </tr>
                            <tr><!--Resto-->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Restoration Angel</a></td>
                                 
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
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Eiganjo Castle</a></td>
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
                                <td>8&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Plains</a></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Shefet Dunes</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Tectonic Edge</a></td>
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
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Auriok Champion</a></td>
                                
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
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Kitchen Finks</a></td>
                                                              
                            </tr>
                            <tr><!-- Gideon -->
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Gideon, Ally of Zendikar</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Shalai, Voice of Plenty</a></td>
                                
                            </tr> 
                        </tbody>
                    </table>
                    <div>
                        <img src="" id="deckPreviewImgTwo">
                    </div>
                </div>
            </div>
            <br>
            <h3>Post-gameplay thoughts</h3>
            <p>Boy was I wrong! The card over-performed in many ways. For starters, the value of grabbing hate bears like Thalia, Guardian of Thraben and Leonin Arbiter was much higher than previously anticipated. In many matchups where they are valuable, getting them in play on turn 4 (or 3 with an Aether Vial) is still valuable- turns out a turn 3-4 Thalia, Guardian of Thraben is still good against storm. Additionally, Militia Bugler did not fail to find very often, and would often instead give multiple options. Militia Bugler was definitely more valuable against the faster decks in modern (Aggro and combo) compared to a 3 drop like Eldrazi Displacer, as well as against slower decks where the tempo and immediate value makes it a valuable spell.</p>
            <br>
            <p>I cannot recall any specific instances of Militia Bugler performing well, but I am positive it has grabbed many Thalia, Guardian of Thrabens that were very impactful. He was also useful specifically against Affinity, where Militia Bugler helped dig specifically for Phyrexian Revoker. Overall, I’ve had more success with Militia Bugler than expected, and plan to continue playing the card on D&T so long as the wins keep coming.</p>
            <h3>The card's future: other viable homes</h3>
            <p>In terms of other Death and Taxes builds, Militia Bugler is most interested in decklists involving creatures with low power, so Eldrazi builds do not want to play Militia Bugler. Aside from mono-white, Militia Bugler seems like a strong contender for any of the splashes, as it can grab strong creatures from said builds. I'd personally lean toward putting Militia Bugler in either a RW or a GW taxes build. In the former, since Pia and Kiran Nalaar is a powerhouse, you can focus more on it along with other effective red hate bears like Dire Fleet Daredevil and Magus of the Moon instead of Flickerwisp and Restoration Angel in order to maximize hits on Militia Bugler. In the GW taxes build, many of the strong green hatebears like Qasali Pridemage, Scavenging Ooze, Gaddock Teeg, and Reclamation Sage all get fetched by Militia Bugler, plus it is a prime target for Collected Company. Overall, Militia Bugler has performed very well in Modern Death and Taxes, and will likely become a staple in some iterations of the taxing deck.</p>
            <h3>Example Decklist:</h3>
            <br>
            <h2>GW Bugler Taxes</h2>
            <div class="row decklist">
                
                <div class="col-sm-6">
                    <table class="table decklist table-condensed table-responsive">
                        <tbody>
                            <tr>
                                <th>Creatures:</th>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Noble Hierarch</a></td>
                                
                            </tr>
                            <tr><!--Arbiter-->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Leonin Arbiter</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Phyrexian Revoker</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Qasali Pridemage</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Remorseful Cleric</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Scavenging Ooze</a></td>
                                
                            </tr>
                            
                            <tr><!-- thalia -->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Thalia, Guardian of Thraben</a></td>
                                
                            </tr> 
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Blade Splicer</a></td>
                                
                            </tr>
                            <tr><!-- flickerwisp -->
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Flickerwisp</a></td>
                                
                            </tr> 
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Militia Bugler</a></td>
                                
                            </tr>
                            <tr><!--Resto-->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Restoration Angel</a></td>
                                 
                            </tr>
                            <tr>
                                <th>Spells:</th>
                            </tr>
                           <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Path to Exile</a></td>
                                
                            </tr>
                            <tr>
                                <th>Artifacts:</th>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Aether Vial</a></td>
                                
                            </tr>
                            <tr>
                                <th>Lands:</th>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Field of Ruin</a></td>
                            </tr>
                             <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Forest</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Ghost Quarter</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Horizon Canopy</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Plains</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Razorverge Thicket</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Temple Garden</a></td>
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
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Engineered Explosives</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Burrenton Forge-Tender</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Auriok Champion</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Gaddock Teeg</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Selfless Spirit</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Rest in Peace</a></td>
                                
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Stony Silence</a></td>
                                
                            </tr>
                            
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Dismember</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Kitchen Finks</a></td>
                                                             
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Shalai, Voice of Plenty</a></td>
                                
                            </tr> 
                        </tbody>
                    </table>
                    <div>
                        <img src="" id="deckPreviewImgThree">
                    </div>
                </div>
            </div>
            <hr>
            <br>
            <h2>Suncleanser:</h2>
            <br>
            <h3>Initial thoughts:</h3>
            <p>Both last and least is an interesting new card- Suncleanser. This card was clearly designed as an (unfortunately) late answer to energy in standard, but still has modern potential. The stats are very interesting- a two mana 1/4 alone is a very good card versus a non-zero number of top tier decks, as it can brickwall aggro decks in a way that Wall of Omens lacks due to it having the one power. That being said, two mana 1/4s need to have good additional text in order to be playable in modern...</p>
            <h3>The issue with Suncleanser:</h3>
            <p>Similar to Remorseful Cleric's ability is overall too narrow. When the card is good, it is amazing, but the amount of times it is good are very limited. Since Suncleanser only affects counters on creatures and not other permanents, it will only be effective against decks with Walking Ballista (like Tron), Affinity, Counters Company (shuts off Devoted Druid from untapping itself), and Humans. While it is nice to have a strong sideboard card against those decks, it just does not do enough in reality to merit a sideboard slot. For example, Dismember is a card that is playable against not only the majority of the previously-mentioned matchups, but also against a whole plethora of matchups where it shines in. Therefore, Suncleanser is more of a cute sideboard technology for a specific meta rather than a future staple for Death and Taxes</p>
            <br>
            <hr>
            <h2>Closing Thoughts:</h2>
            <p>All in all, Core 19 has given Death and Taxes some very interesting cards to play around with. Whether or not Remorseful Cleric, Militia Bugler, or even Suncleanser are future Death and Taxes staples, however, is yet to be seen. However, they are most certainly fun fringe cards to play with to add a little uniqueness to the modern meta.</p>

                </div>
            </div>
            <br>
            
            
            <!-- Can also do sets in a separate article series... that would be more for analysis and thoughts
                while spice can be used for testing results (games, etc) and post-game thoughts and possible lists-->


            <!--Layout: 
                have the current (weeky? monthly? biweekly?) article here
                then at bottom have a search bar for other articles and a button for previous article

                can also have banners with previous articles... look at websites like goldfish and other mtg sites for ideas...
            -->
            
            
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
