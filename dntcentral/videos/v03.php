<?php
    include("../scripts/searchscript.php"); //actually works
    
?>
<?php
    include("../scripts/cardlistdb.php"); //does work
?>
<?php
    $filename = 'v03.php';
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

    

        <title>Video #3</title>
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

                <!--Video page format:
                    latest video-
                    discuss what it is about and such
                    have embedded video
                    at bottom have description of video (hidden cause of spoilers), plus link to decklist
                    also have subscribe btn of course
                    and can have btn to see prior vid (and next when applicable)

                    -->
                <div class="jumbo-tron">
                    <h1>Video #3: Modern Black/White Eldrazi and Taxes- Bonus Match vs. Jund</h1>
                </div>
                <br>
                <p>A bonus match of B/W Eldrazi and Taxes against Jund. This was part of a failed-to-record competitive Modern league, but it is poted on its own because the match was unique.</p>
                <br>
                <!--EMBEDDED VIDEO HERE-->
                <iframe width="560" height="315" src="https://www.youtube.com/embed/GDUThz6Pwco" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <br>
                <hr>
                <br>
                <h3>Text Description</h3>
                <br>
                <!--- here, wil ldescribe video contents. so if it is a league, describe each game briefly so user who did not watch can understand. but not too deep but can be like a good 5-10 paragraphs-->
                <!--one or two paragraphs per match. few sentences for each game, describing how it played out and what cards performed well for both sides. talk about sideboarding and hands and other factors that contributed to the outcome of the game-->
                <p>Game one against Jund we are on the draw. We keep a six-card hand with four lands (two Ghost Quarters, one Eldrazi Temple and one Concealed Courtyard) plus Thought-Knot Seer and Leonin Arbiter. The opponent has a slower start, but Lightning Bolts our Leonin Arbiter. We play a turn three Thought-Knot Seer and take their Liliana of the Veil, leaving them with Assassin's Trophy in hand. At this point, we only have one more spell in hand- Eldrazi Displacer. The opponent does have two creature lands, but we have two Ghost Quarters available. The opponent casts Assassin's Trophy on Thought-Knot Seer and then a Tarmogoyf on their turn. We draw yet another land and play Eldrazi Displacer, which dies to Lightning Bolt. We end up drawing Tidehollow Sculler, which dies to a removal spell, along with lands and Aether Vials. The opponent's two Tarmogoyfs are enough to win them the first game.</p>
                <br>
                <p>In the sideboard, we bring in all four Fatal Pushes, Burrenton Forge-Tender, and Gideon, Ally of Zendikar. All four Aether Vials come out, along with Kambal, Consul of Allocation and one Thalia, Guardian of Thraben. For game two, we keep a six-card hand with four lands (Concealed Courtyard, Caves of Koilos, Ghost Quarter, and Eldrazi Temple) plus Wasteland Strangler and Burrenton Forge-Tender. We scry a Tidehollow Sculler to the top. The opponent starts with an Inquisition of Kozilek, taking our only spell. Our Tidehollow Sculler reveals a hand with Tarmogoyf, Scavenging Ooze, Lightning Bolt, and Liliana of the Veil. We take the Liliana of the Veil, as Burrenton Forge-Tender can protect Tidehollow Sculler. The opponent plays Tarmogoyf, but we have a Fatal Push we drew the next turn to kill it. We then play a turn four Thought-Knot Seer. At that point, our hand is empty, while the opponent's hand consists of two Dark Confidants and a Scavenging Ooze. We take the Scavenging Ooze, and the opponent plays both their Dark Confidants after drawing a land. We attack with Thought-Knot Seer, putting them down to seven life. The opponent reveals two Verdant Catacombos off of the Dark Confidants and plays a third Dark Confidant. We draw a sixth land and pass the turn. Our plan is for the opponent to die to their own Dark Confidants. Also, with our Ghost Quarters, we manage to keep them off of red mana temporarily. Their Dark Confidants reveal Lightning Bolt, Fatal Push, and Tarmogoyf, bringing them down to two. We draw a Wasteland Strangler and play it as a 3/2 for two. On the opponent's upkeep, they reveal a two drop and die to their Dark Confidants. "Greatness at any cost".</p>
                <br>
                <p>In the sideboard, we bring in two Rest in Peaces in exchange for two Thalia, Guardian of Thrabens. For game three, we keep a seven-card hand with four lands (Eldrazi Temple, Godless Shrine, Concealed Courtyard, and Caves of Koilos), Path to Exile, Blade Splicer, and Thought-Knot Seer. The opponent leads off with a creature land. We draw yet another land and play Eldrazi Temple in case we hit another for the turn two Thought-Knot Seer. Instead, we draw an Eldrazi Displacer, but we cast Path to Exile on the opponent's Dark Confidant instead of playing the Eldrazi. The opponent plays a turn three Bloodbraid Elf into an empty board. While they did hit a removal spell, it was an Assassin's Trophy for our Eldrazi Temple. We draw a Flickerwisp and play a Blade Splicer. The opponent plays a Liliana of the Veil. We decide to sacrifice the 1/1 Blade Splicer, as we suspect a Lightning Bolt will take care of the other body. We were correct, and the opponent brings us to 14 with a Bloodbraid Elf attack. We then cast a Thought-Knot Seer after drawing a Path to Exile, taking their Assassin's Trophy while leaving them with a Tarmogofy. The opponent plays the Tarmogoyf plus a land and we discard our last land in hand to the Liliana of the Veil. We decide to kill the Liliana of the Veil by Flickerwisping the Bloodbraid Elf, Path to Exiling the Tarmogoyf, and attacking the planeswalker with Thought-Knot Seer. The opponent attacks with their Raging Ravine and Bloodbraid Elf. We block Bloodbraid Elf with Flickerwisp and go down to nine. The opponent plays a Scavenging Ooze and passes. On our turn we play the Blade Splicer we drew. The opponent attacks with their Scavenging Ooze and gives it three counters, bringing us down to four life. On our next turn, we play a Shambling Vent into Eldrazi Displacer. The opponent then attacks with both Raging Ravine and Scavenging Ooze after Lightning Bolting Eldrazi Displacer. We are forced to block both lethal threats, and end up trading Thought-Knot Seer for Scavening Ooze while leaving both Golem and Raging Ravine in play. We draw a Rest in Peace and play that and our last spell in hand- Eldrazi Displacer. The opponent activates Raging Ravine and we chump block with our token. We draw another land and attack four three, putting the opponent at 16. When they attack with their Raging Ravine, we activate Eldrazi Displacer to stop the attack. The opponent plays a 0/1 Tarmogofy, which ends up chump blocking our Eldrazi Displacer. We draw a Ghost Quarter, which can answer one of the Raging Ravines (the opponent played a second one earlier). The opponent then plays a Bloodbraid Elf, hitting Scavenging Ooze. We decide to trade Shambling Vent with Bloodbraid Elf and use Eldrazi Displacer to blink the Raging Ravine. We then play a Thought-Knot Seer and pass. The opponent activates and attacks with both Raging Ravines. We Ghost Quarter one and take four, going down to two. We play a Leonin Arbiter for turn and attack with Thought-Knot Seer, putting the opponent at 11 life. The opponent plays yet another Bloodbraid Elf, hitting Liliana of the Veil. With their Scavenging Ooze, Bloodbraid Elf, and Raging Ravine against Eldrazi Displacer and three mana, we are forced to sacrifice Thought-Knot Seer to Liliana of the Veil's ability. We block Scavening Ooze with Eldrazi Displacer and Bloodbraid Elf with Leonin Arbiter and blink their Raging Ravine. We draw a Flickerwisp for turn and cast it to flicker a land so we can activate Eldrazi Displacer. We attack Liliana of the Veil with Eldrazi Displacer, killing the planeswalker. The opponent proceeds to activate both Raging Ravines and attack. We block one with our Flickerwisp, then Eldrazi Displacer Flickerwisp to blink the other one. We attack with both of our creatures, bringing the opponent down to five. We play a Ghost Quarter, threatening two Eldrazi Displacer activations. The opponent attacks with both Raging Ravines but we blink both and attack on our turn for the win.</p>
                <br>
                <h3>Summary</h3>
                <p>All in all, we ended up winning a very intense match against Jund. The first game we ran out of resources and lost to Tarmogofys. The second game had the opponent lose to their own Dark Confidants. The final game went very long, with Eldrazi Displacer winning the game. This match shows that, despite B/W Eldrazi and Taxes's aggro nature, the deck can still win the attrition games. Eldrazi Displacer is still an amazing card, taking over the final game. This match also shows that, despite losing the first game to a bad matchup, it is important to keep playing.</p>


                <br>
                <!--here, say record, what we beat, what we lost to, thoughts on deck and sideboard and games, highlights, 1-2 paragraphs. Overall/altogether, sort of like a TL DR-->
                
                <div class="row">
                    <div class="col-6">
                        <h3><a href="v02">Previous Video- B/W Eldrazi and Taxes- League + Decktech</a></h3>
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


