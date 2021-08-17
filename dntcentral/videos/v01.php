<?php
    include("../scripts/searchscript.php"); //actually works
    
?>
<?php
    include("../scripts/cardlistdb.php"); //does work
?>
<?php
    $filename = 'v01.php';
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

    

        <title>Video #1</title>
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
                    <h1>Video #1: Modern Mono-White Eldrazi and Taxes- League + Decktech</h1>
                </div>
                <br>
                <p>The first Death and Taxes Central video, where we take a Mono-White Eldrazi and Taxes list through a competitive Modern league.</p>
                <br>
                <!--EMBEDDED VIDEO HERE-->
                <iframe width="560" height="315" src="https://www.youtube.com/embed/OclnecyX6MU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <br>
                <hr>
                <br>
                <h3>Text Description</h3>
                <br>
                <!--- here, wil ldescribe video contents. so if it is a league, describe each game briefly so user who did not watch can understand. but not too deep but can be like a good 5-10 paragraphs-->
                <!--one or two paragraphs per match. few sentences for each game, describing how it played out and what cards performed well for both sides. talk about sideboarding and hands and other factors that contributed to the outcome of the game-->
                <p>Match one we play against Grixis Death's Shadow, going first. Game one we mulligan to five cards on the play, keeping a hand with two Eldrazi Displacers, one Plains, one Eldrazi Temple, and a Field of Ruin. The opponent has a slow start but finds removal for our first Eldrazi Displacer. We manage to land an Eldrazi Displacer and Thought-Knot Seer but are facing a Gurmag Angler and Death's Shadow. The opponent's hand at that point is a Stubborn Denial and a land, and are at a low life total. With Eldrazi Displacer's ability, we manage to widdle their life total and close out the game before they find answers.</p>
                <br>
                <p>In the sideboard, we bring in two Rest in Peaces, two Dismembers, and a Gideon, Ally of Zendikar. We take out two Aether Vials and all three Phyrexian Revokers. Game two we keep a hand with two Horizon Canopies, one Ghost Quarter, one Shefet Dunes, a Path to Exile, a Leonin Arbiter, and a Thought-Knot Seer. The opponent casts two Thoughtseizes, taking our Path to Exile and Thought-Knot Seer. We draw an Aether Vial to play on our first turn along with a Dismember the next turn to kill their 3/3 Death's Shadow. We start to flood out, but not as bad as the opponent. That being said, the opponent has enough removal spells to kill our Leonin Arbiter along with the Flickerwisp we later draw. We later find an Eldrazi Displacer, which comes off Aether Vial in response to a Fatal Push to win the game.</p>
                <br>
                <p>Match two we play against Mono-Green Tron, going first, keeping a seven-card hand with two Aether Vials, a Ghost Quarter, an Eldrazi Temple, a Thalia, Guardian of Thraben, a Flickerwisp, and a Restoration Angel. The opponent begins with a Tron land and an Expedition Map. We play both our Aether Vials and leave up Ghost Quarter. The opponent plays a Forest, making turn three Tron impossible. The opponent does not crack their Expedition Map before our Aether Vial gets its second counter. We end up drawing a Leonin Arbiter and punish the opponent's mistake. The rest of the game consists of us deploying our threats and taxing their mana.</p>
                <br>
                <p>In the sideboard, we bring in three Stony Silences and take out two Aether Vials and a Restoration Angel. Game two we keep a seven-card hand with Aether Vial, Stony Silence, Leonin Arbiter, Flickerwisp, Restoration Angel, and two Plains. The opponent plays an Expedition Map on their first and second turn. They also Nature's Claim our turn one Aether Vial. We play a Stony Silence on turn two and Leonin Arbiter on the following turn, holding up Ghost Quarter. The opponent ends up finding four lands, but they are lacking Tron. We draw three of our Ghost Quarters and hold up Restoration Angel for the removal spell we suspect they have. When the opponent cast Spatial Contortion on Leonin Arbiter, Restoration Angel saved it, and two Ghost Quarters took out one of their Tron lands and their only Forest, ending the match.</p>
                <br>
                <p>Match three we play against Dredge, going second, keeping a seven-card hand with a Plains, two Ghost Quarters, a Thalia, Guardian of Thraben, a Flickerwisp, a Blade Splicer, and a Thought-Knot Seer. The opponent leads off with a Faithless Looting, discarding Prized Amalgam and Life from the Loam. We debate conceding to conceal information but decided instead to play it out. The opponent proceeds to cast a Conflagrate on turn two, discarding their whole hand. We play Thalia, Guardian of Thraben on our turn. Since the opponent had only two lands in play, they could not cast their Life from the Loam to get lands to flashback Faithless Looting. They try to naturally draw a land rather than dredge Life from the Loam but miss for many turns. After casting Blade Splicer into Restoration Angel into Flickerwisp and Leonin Arbiter, we finish them off before they get their gameplan going.</p>
                <br>
                <p>In the sideboard, we bring in three Rest in Peaces, one Grafdigger's Cage, one Auriok Champion, one Settle the Wreckage and two Burrenton Forge-Tenders. We take out two Aether Vials, all three Phyrexian Revokers, and all three Flickerwisps. We mulligan to six, keeping a hand with one Eldrazi Temple, two Leonin Arbiters, one Auriok Champion, one Blade Splicer, and one Rest in Peace. We scry a nonland card to the bottom. The opponent casts a Cathartic Reunion but discards no dredge cards. We draw two Ghost Quarters and use one to get out a Plains to play the turn two Rest in Peace. We manage to draw Thalia, Guardian of Thraben and lands, getting her and Blade Splicer quickly into play. With those two creatures and the others in our hand, we kill the opponent before their Nature's Claim on our Rest in Peace became relevant enough.</p>
                <br>
                <p>Match four we play against Dredge, going first, keeping a seven-card hand with Thalia, Guardian of Thraben, Phyrexian Revoker, Aether Vial, Eldrazi Temple, Horizon Canopy, and two Ghost Quarters. The opponent's turn one Faithless Looting discards a Stinkweed Imp and a Prized Amalgam, and they get it and two Narcomebas back the following turn. We try to mana screw them by Ghost Quartering them, but they have enough lands in hand and basics in their deck to fight through it. The opponent continues to play cards such as Faithless Looting and Shriekhorn until they overwhelm us with graveyard creatures, taking game one.</p>
                <br>
                <p>In the sideboard, we bring in three Rest in Peaces, one Grafdigger's Cage, one Auriok Champion, one Settle the Wreckage and two Burrenton Forge-Tenders. We take out an Aether Vial, a Path to Exile, three Flickerwisps, a Restoration Angel, and two Phyrexian Revokers. We mulligan to six, keeping a hand with Aether Vial, Thalia, Guardian of Thraben, Grafdigger's Cage, Plains, and Horizon Canopy, and keep a Burrenton Forge-Tender on top. We play a turn one Aether Vial into Grafdigger's Cage. The opponent casts Faithless Looting into Cathartic Reunion, dredging many cards. We deploy Thalia, Guardian of Thraben and Blade Splicer but the opponent finds an answer to Grafdigger's Cage. They get three Narcomebas and one Prized Amalgam into play. Our next turn, we play an Eldrazi Displacer and Thought-Knot Seer. We take their Faithless Looting, leaving them with Shriekhorn and Stinkweed Imps. The opponent is too tight on mana to get more dredging going, and we end up getting just enough damage through to win game two.</p>
                <br>
                <p>In the sideboard, we take out the last Phyrexian Revoker to bring in the fourth Path to Exile. We then keep a seven-card hand with two Plains, a Shefet Dunes, a Burrenton Forge-Tender, a Path to Exile, a Blade Splicer, and a Settle the Wreckage. The opponent gets a turn one Shriekhorn into a Cathartic Reunion, dredging many cards. We do not find a two drop and the opponent builds up a board filled with creatures, forcing us to rely on Settle the Wreckage. In fact, we Path to Exiled our Burrenton Forge-Tender to get Settle the Wreckage a turn earlier. Sadly, however, the opponent played around Settle the Wreckage and was left with a large board. While we did play some creatures, we could not keep up with their large board coupled with our low life total and took our first loss of the league.</p>
                <br>
                <p>Match five we play against Hardened Scales Affinity, going second, keeping a six-card hand with Path to Exile, Restoration Angel, Aether Vial, Blade Splicer, Ghost Quarter, and Eldrazi Temple. The opponent plays Hardened Scales, Animation Module, Ancient Stirrings, and some Welding Jars, but no creatures. We deploy our creatures and remove theirs with Path to Exile and Flickerwisp on Hangarback Walker. We end up getting them to a very low life total, three, with Phyrexian Revoker turning off their Arcbound Ravager. However, the opponent plays an Ensnaring Bridge, preventing us from attacking. The game stalls as both sides look for answers. Their main out is Walking Ballista, while ours is Flickerwisp. We end up winning a different way though. Through two Eldrazi Temples and four Plains, we manage to blink Thought-Knot Seer enough times with Eldrazi Displacer to give them three cards in hand so Restoration Angel can kill them. Specifically, the opponent does not play their land in hand, so we got to blink Thought-Knot Seer twice and order the stack to have the opponent draw the card after we fail to take a card from their hand.</p>
                <br>
                <p>In the sideboard, we bring in two Dismembers, three Stony Silences, two Rest in Peaces, and an Auriok Champion. We take out all four Aether Vials and Leonin Arbiters. We then keep a seven-card hand with Stony Silence, Flickerwisp, Path to Exile, Horizon Canopy, Plains, Ghost Quarter, and Eldrazi Temple. The opponent plays some artifacts, but they are hindered by our turn two Stony Silence. The opponent is stuck on no answer to Stony Silence and die to Restoration Angel and Flickerwisp.</p>
                <h3>Summary</h3>
                <p>Overall, we went 4-1 in the competitive Modern league. We won a match against Grixis Death's Shadow, Mono-Green Tron, Dredge, and Hardened Scales Affinity. Our one loss was against a second Dredge opponent. The deck felt great, with synergies between the cards shining in some of the games. The two Eldrazi performed very well, justifying their inclusion in Death and Taxes. The hate bears were both excellent, winning games that we were behind in. All in all, I would highly recommend Mono-White Eldrazi and Taxes as a deck for anyone interested in Modern Death and Taxes. It is a very enjoyable deck to play and a strong contender in the current meta.</p>


                <br>
                <!--here, say record, what we beat, what we lost to, thoughts on deck and sideboard and games, highlights, 1-2 paragraphs. Overall/altogether, sort of like a TL DR-->
                
                <div class="row">
                    <div class="col-6">

                    </div>
                    <div class="col-6">
                        <h3><a href="v02">Next Video- B/W Eldrazi and Taxes- League + Decktech</a></h3>
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


