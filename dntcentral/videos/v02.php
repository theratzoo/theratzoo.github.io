<?php
    include("../scripts/searchscript.php"); //actually works
    
?>
<?php
    include("../scripts/cardlistdb.php"); //does work
?>
<?php
    $filename = 'v02.php';
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

    

        <title>Video #2</title>
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
            <div class="container-fluid body-div" id="content">
                <br>
                    
                    <br>
                
                <div class="jumbo-tron">
                    <h1>Video #2: Modern Black-White Eldrazi and Taxes- League + Decktech</h1>
                </div>
                <br>
                <p>The second Death and Taxes Central video, where we take a Black-White Eldrazi and Taxes list through a competitive Modern league.</p>
                <br>
                <!--EMBEDDED VIDEO HERE-->
                <iframe width="560" height="315" src="https://www.youtube.com/embed/oTMSLbOr6uo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <br>
                <hr>
                <br>
                <h3>Text Description</h3>
                <br>
                <!--- here, wil ldescribe video contents. so if it is a league, describe each game briefly so user who did not watch can understand. but not too deep but can be like a good 5-10 paragraphs-->
                <!--one or two paragraphs per match. few sentences for each game, describing how it played out and what cards performed well for both sides. talk about sideboarding and hands and other factors that contributed to the outcome of the game-->
                <p>Match one we play against Golgari Midrange, going first. Game one we keep our seven-card hand with two lands (Ghost Quarter and Plains), Thalia, Guardian of Thraben, Eldrazi Displacer, Flickerwisp, Blade Splicer, and Path to Exile. We miss our third land drop for a few turns but manage to draw an Aether Vial on turn two and cast it. However, the opponent Abrupt Decays the Aether Vial, slowing down our threat-deployment. The opponent sticks two Tarmogoyfs and deals with our biggest threats. That being said, we were able to get in a lot of damage and put the opponent on a low life total. In addition, as they are at three life, two of our creatures (Golem token and Wasteland Strangler) represented lethal, while our two hate bears threatened more damage. However, the opponent's Tarmogoyfs and creature lands made attacking impossible, so the game slowed down for a while as we cast creatures and the opponent removed them. However, the opponent casts a Dark Confidant, which puts them down to two life. With our growing board and their Dark Confidant threatening their life total, the opponent concedes the game.</p>
                <br>
                <p>In the sideboard, we bring in two Rest in Peaces, four Fatal Pushes, and a Gideon, Ally of Zendikar. We take out all four Aether Vials, two Thalia, Guardian of Thrabens, and the main deck Kambal, Consul of Allocation. Game two we keep a seven-card hand with two lands (Shambling Vent and Concealed Courtyard), Leonin Arbiter, Thalia, Guardian of Thraben, Rest in Peace, Eldrazi Displacer, and Flickerwisp. Once again, we stumble on lands but manage to draw a Fatal Push for the opponent's Dark Confidant and a Tidehollow Sculler for their Liliana of the Veil. Their only removal spells in hand are Assassin's Trophy (which gets us our third land) and a Languish that they are far from casting. We do soon enough hit our third land, but by then the opponent manages to stick Liliana of the Veil on an empty board. I decide to play around the opponent hitting the fourth land for Languish, and as a result, play very safe but aggressive enough to get rid of Liliana of the Veil. My conservative style ends up punishing me, as the opponent finds removal but not lands and ends up stabilizing at seven life, winning game two.</p>
                <br>
                <p>Sideboarding does not change for game three. We end up keeping a land heavy seven-card hand containing two Eldrazi Temples, a Concealed Courtyard, a Ghost Quarter, an Eldrazi Displacer, a Path to Exile, and a Flickerwisp. We get rewarded by our somewhat risky keep by drawing a Thought-Knot Seer off the top. The opponent reveals a land-heavy hand, and we take Fatal Push and leave them with a Tarmogoyf and Languish. After deploying our Eldrazi Displacer, we blink Thought-Knot Seer with it to keep the opponent off of removal. Turns out, the opponent failed to draw any spells and was quickly killed by our Eldrazi.</p>
                <br>
                <p>Match two we play against Mono-Green Tron, going first, keeping a seven-card hand with three lands (Plains, Swamp, and Ghost Quarter), Leonin Arbiter, Flickerwisp, and two Path to Exiles. The opponent has a slow start, only playing Forests and Urza's Towers. Our start is also quite slow, as we do not cast our second creature (Eldrazi Displacer) until turn four. The opponent manages to kill our Leonin Arbiter with a Walking Ballista, but we draw another white source to cast the two Flickerwisps in hand. We are able to pressure the opponent plus take them off of Tron through Eldrazi Displacer plus Flickerwisp, winning game one.</p>
                <br>
                <p>In the sideboard, we bring in two Stony Silences and a Kambal, Consul of Allocation. We take out both Wasteland Stranglers and an Aether Vial. Game two we keep a seven-card hand with only one land (Ghost Quarter), but it has Aether Vial, along with Leonin Arbiter, Blade Splicer, Flickerwisp, and two Path to Exiles. The opponent sets up for turn four Tron through Sylvan Scrying (but have a Forest in play). That being said, our Ghost Quarter manages to take them off of a Tron land (but the opponent pays for Leonin Arbiter's tax). By turn four, we lack the mana to cast any of our three drops in hand but have Aether Vial on three counters. We begin deploying our Blade Splicer and Flickerwisps, and the opponent concedes after they fail to assemble Tron or build up a defense for our attackers.</p>
                <br>
                <p>Match three we play against Colorless Eldrazi, going first, keeping a seven-card hand with three lands (Shambling Vent, Ghost Quarter, Caves of Koilos), Aether Vial, Path to Exile, Wasteland Strangler, and Leonin Arbiter. We play our Aether Vial and Leonin Arbiter, while the opponent plays a turn two Thought-Knot Seer, taking our Path to Exile. We Ghost Quarter their Eldrazi Temple, while they Ghost Quarter our Shambling Vent. We end up killing their Thought-Knot Seer with Wasteland Strangler and play our own Thought-Knot Seer, taking their only creature. The opponent concedes at that point.</p>
                <br>
                <p>In the sideboard, we bring in two Fatal Pushes and one Orzhov Pontiff. We take our two Leonin Arbiters and one Kambal, Consul of Allocation. We keep another three land hand (Concealed Courtyard, Caves of Koilos, and Swamp) with Aether Vial, alongside a Path to Exile, Thalia, Guardian of Thraben, and Flickerwisp. The opponent plays a turn one Matter Reshaper, followed by a second one and then a Smuggler's Copter. We Path to Exile one of the Matter Reshapers and begin deploying our threats. However, the opponent's Thought-Knot Seer stops Flickerwisp from blinking Blade Splicer. Because of the opponent's early threats, we are at a low life total and are quickly facing lethal due to their Smuggler's Copter. On our last turn, we manage to draw an Orzhov Pontiff while at two life. We bait out a block on the opponent's side by attacking with our two Thought-Knot Seers and our Golem token. The opponent does take the bait, and an Orzhov Pontiff off of Aether Vial kills their Thought-Knot Seer. Their Thought-Knot Seer ends up drawing us a Flickerwisp, granting us a flier to block Smuggler's Copter. We end up winning the match after we declare blocks on Smuggler's Copter.</p>
                <br>
                <p>Match four we play against Izzet Phoenix, going second, keeping a seven-card hand with two lands (Shambling Vent and Eldrazi Temple), Path to Exile, Leonin Arbiter, Eldrazi Displacer, Wasteland Strangler, and Thought-Knot Seer. The opponent gets an Arclight Phoenix into play on turn three, while we cast our Thought-Knot Seer then. Their hand consists of a Snapcaster Mage, Thing in the Ice, and Crackling Drake- all tough cards to beat. We end up taking their Crackling Drake, planning to Path to Exile the Thing in the Ice. We do Path to Exile their Thing in the Ice, but the opponent manages to get two more Arclight Phoenixes into play. That being said, they used their Snapcaster Mage inefficiently to do this, and are at a low life total. Unfortunately, we have drawn nothing but lands by turn five, leaving us with our three Eldrazis to fight through their board. That being said, our extra lands end up helping us, as they let Eldrazi Displacer tap down their creatures. Eventually, after accumulating nine mana (counting Eldrazi Temple as two), we tap down all their creatures and swing for lethal.</p>
                <br>
                
                <p>In the sideboard, we bring in two Rest in Peaces, three Fatal Pushes, one Burrenton Forge-Tender, one Kambal, Consul of Allocation, and one Settle the Wreckage. We take out an Aether Vial, two Leonin Arbiters, two Wasteland Stranglers, two Blade Splicers, and a Flickerwisp. We keep a seven-card hand with Godless Shrine, Eldrazi Temple, three Thalia, Guardian of Thrabens, one Flickerwisp, and one Eldrazi Displacer. We play out two Thalia, Guardian of Thrabens and a Kambal, Consul of Allocation. However, the opponent answers all three of them and gets two Arclight Phoenixes and an Awakened Horror attacking on turn five. We manage to draw a Settle the Wreckage off the top to stop the attackers. However, due to the lack of colored mana, we can only cast one threat a turn, while the opponent manages to find a Crackling Drake to finish us off with.</p>
                <br>
                <p>In the sideboard, we take our a Fatal Push and Flickerwisp for our fourth Aether Vial and another Leonin Arbiter. We then keep a seven-card hand with four lands (two Ghost Quarters, one Caves of Koilos and a Concealed Courtyard), Aether Vial, Path to Exile, and Rest in Peace. We play the Aether Vial on turn one into the Rest in Peace. The opponent plays a Thing in the Ice on turn two. We then play a Tidehollow Sculler and see the opponent's hand, which contains two major threats (Thing in the Ice and Crackling Drake), but no removal. We end up taking the Crackling Drake from them and Path to Exile one of their Thing in the Ices shortly after. Unfortunately, we draw two more Aether Vials and a land, while the opponent manages to destroy our Tidehollow Sculler. At that point, without any creatures or removal spells, we lose game three.</p>
                <br>
                <p>Match five we play against Eldrazi Tron, going first, keeping a seven-card hand with three lands (Concealed Courtyard, Eldrazi Temple, and Caves of Koilos), Path to Exile, Wasteland Strangler, Leonin Arbiter, and Flickerwisp. We play our Leonin Arbiter into Flickerwisp, targeting the opponent's Chalice of the Void on x=1. The opponent plays a Thought-Knot Seer on turn four, but Path to Exile removes it. We end up drawing mostly lands but our creatures get enough damage through to win game one.</p>
                <br>
                <p>In the sideboard, we bring in one Orzhov Pontiff for the Kambal, Consul of Allocation. Game two we mulligan to six, keeping a hand with two lands (Concealed Courtyard and Plains), Thalia, Guardian of Thraben, Thought-Knot Seer, Wasteland Strangler, and Tidehollow Sculler. We scry a Wasteland Strangler to the bottom. The opponent leads on Expedition Map into Matter Reshaper. We play Tidehollow Sculler on turn two, taking their only removal spell. The opponent, however, draws a Dismember off the top to get back their removal spell. Our Thought-Knot Seer gets Dismembered, but our Thalia, Guardian of Thraben and Flickerwisp stick and begin attacking. The opponent accumulates ten Eldrazi mana and casts an Ulamog, the Ceaseless Hunger. While we do draw a Path to Exile for the Ulamog, the Ceaseless Hunger, the opponent's board contains extra Eldrazi that we cannot beat, prompting a game three.</p>
                <br>
                <p>In the sideboard, we bring in our second Orzhov Pontiff and a Stony Silence and take out the underperforming Wasteland Stranglers. We keep a seven-card hand with three lands (Shambling Vent, Concealed Courtyard, and Caves of Koilos), two Leonin Arbiters, Eldrazi Displacer, and Thought-Knot Seer. We play both of our Leonin Arbiters, but the opponent achieves turn three Tron. They proceed to play a Chalice of the Void to stop our Path to Exile and then Thought-Knot Seer us. Walking Ballista also enters the battlefield, destroying our relevant creatures. With four cards in hand and a Chalice of the Void plus Walking Ballista plus Tron in play, we concede the game, as we ran out of resources.</p>
                <br>
                <h3>Summary</h3>
                <p>Overall, we went 3-2 in the competitive Modern league. We won a match against Golgari Midrange, Mono-Green Tron, and Colorless Eldrazi. Our losses were to Izzet Phoenix and Eldrazi Tron, both of which we won game one. The deck felt fine, with the Eldrazi performing well (especially Eldrazi Displacer) along with Tidehollow Sculler. However, the mana situation was not great for the deck. Also, the deck was not as consistent as I expected. With cards like Tidehollow Sculler in the deck, B/W Eldrazi and Taxes needs to win faster than other Death and Taxes iterations. However, the deck did not feel much faster than Mono-White Eldrazi and Taxes despite the lower curve and more aggressive spells. Also, Fatal Push felt too conditional, especially against the Eldrazi decks and Izzet Phoenix. All that said, the deck is still quite strong and synergistic in a way that other Death and Taxes builds lack. Also, it has tons of interaction that makes it a strong contender in the linear Modern meta. Therefore, I would recommend this deck to others. I personally do not enjoy it as much as Mono-White Eldrazi and Taxes, but it is a quite powerful choice in the meta. I would recommend switching a Fatal Push for a different removal spell though, such as Cast Down or Dismember.</p>


                <br>
                <!--here, say record, what we beat, what we lost to, thoughts on deck and sideboard and games, highlights, 1-2 paragraphs. Overall/altogether, sort of like a TL DR-->
                <div class="row">
                    <div class="col-6">
                        <h3><a href="v01">Previous Video- Mono-W Eldrazi and Taxes- League + Decktech</a></h3>
                    </div>
                    <div class="col-6">
                        <h3><a href="v03">Next Video- B/W Eldrazi and Taxes Bonus Match</a></h3>
                    </div>
                    <div class="col-6">
                        
                    </div>

                </div>
                <!--have previous, next (only for non-homepage) video buttons, plus subscribe button in middle-->
                <br>
                <p>If you wish to check out videos and get updated right when a new one comes out, feel free to subscribe down below. I'd appreciate the support!</p>
                <br>
                

                <script src="https://apis.google.com/js/platform.js"></script>

                <div class="g-ytsubscribe" data-channelid="UCNH5lLa844qfAeiTFA53jPQ" data-layout="default" data-count="default"></div>

            <div class="extra-space"></div>
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


