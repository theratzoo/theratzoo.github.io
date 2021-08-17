<?php
    include("../../scripts/searchscript.php");
    include("../../scripts/cardlistdb.php");
?>
<?php
    $filename = 'uw control.php';
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
    
    <meta name="description" content="Modern matchup guide against UW Control for Death and Taxes.">
    <meta name="keywords" content="Magic the Gathering, modern, death and taxes, dnt, modern dnt, ent, eldrazi and taxes, uw control, snapcaster mage, terminus, teferi">
    

        <title>Modern Matchup Guide: UW Control</title>
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
                    <h1>Matchup Guide: UW Control</h1>
                </div>
                <br>
                    <h2>Matchup Overview</h2>
                    <div class="muimage">
                        <img src="https://media.wizards.com/2015/images/daily/cardart_CrypticCommand.jpg" class="muimage" alt="Cryptic Command">
                    </div>
                    <br>
                    <br>
                    <p>This matchup is similar to Jeskai Control; we want to race them before they reach the late game and out-value us. While Death and Taxes can grind in general, we cannot out-grind a UW Control player. Winning through an aggressive game plan involving hatebears and beatdown creatures is ideal, but often we need reach in the form of fliers like Restoration Angel to snipe them after a board wipe. Even though Death and Taxes is not an aggro deck and would appear to struggle against a control deck, I've found the matchup to be slightly favorable- Thalia, Guardian of Thraben and Leonin Arbiter are very effective at taxing the opponent, while Aether Vial lets us dodge counters and sorcery speed removal.</p>
                    <hr>
                    <h2>Our best cards</h2>
                    <div class="muimage">
                        <img src="https://www.spiderwebart.com/images/art/104393.jpg" class="muimage" alt="Aether Vial">
                    </div>
                    <br>
                    <br>
                    <p>As mentioned above, our hatebears are excellent here. UW Control runs several fetch lands, which Leonin Arbiter can tax well. Thalia, Guardian of Thraben is also good against the deck with all noncreature spells and lands. In addition, creatures that provide a fast clock are excellent. Blade Splicer hits hard, especially in conjunction with our blinkers, while Flickerwisp and Restoration Angel attack above the opponent's Snapcaster Mages and Timely Reinforcements tokens while generating value with their enter the battlefield triggers. Aether Vial is also great versus UW Control- it dodges their counters and sorcery speed removal, while it can power up our blinkers to save our creatures from their onslaught of removal. In Eldrazi builds, Thought-Knot Seer is unsurprisingly powerful, especially at taking their board wipes and Cryptic Commands.</p>
                    <hr>
                    <h2>Our worst cards</h2>
                    <div class="muimage">
                        <img src="https://magic.wizards.com/sites/mtg/files/image_legacy_migration/mtg/images/daily/boab/boab85_iugh576f8ghadsd.jpg" class="muimage" alt="Wall of Omens">
                    </div>
                    <br>
                    <br>
                    <p>The cards that are the least impactful in the matchup are our lower power non-hatebears. Wall of Omens and Thraben Inspector are not at their best here. The former is simply a two mana draw a card (with upside when combined with blinkers), while the latter is only a 1/2. While I like Thraben Inspector, and the two for one is not bad against UW Control, keep in mind that Stony Silence will be brought in by the UW Control opponent post-board. A 1/2 for 1 without upside is downright terrible- while the opponent won't always have a Stony Silence, Thraben Inspector is already subpar here. Removal is interesting here (specifically Path to Exile). I have found Path to Exile almost useless game one, but a necessary evil post-board. The reason for this is UW Control often brings in Baneslayer Angel and Lyra Dawnbringer, two cards that are pretty much unbeatable without removal. In addition, Vendilion Clique is often brought in post-board (or even found in the main deck), and the control player still plays Celestial Colonnades and small value creatures.</p>
                    <hr>
                    <h2>Opponent's best cards</h2>
                    <div class="muimage">
                        <img src="https://227rsi2stdr53e3wto2skssd7xe-wpengine.netdna-ssl.com/wp-content/uploads/2012/11/Terminus-Art-by-Jaimes-Paick-620x280.jpg" class="muimage" alt="Terminus">
                    </div>
                    <br>
                    <br>
                    <p>While their one for one removal is problematic, the main cards that concern Death and Taxes are their board wipes, planeswalkers, and Cryptic Commands. It is hard to play around board wipes, especially Terminus, making them super effective at stopping our creature-based strategy. Jace, the Mind Sculptor and Teferi, Hero of Dominaria are problematic as well, especially when we lack a board presence. Cryptic Command is great at buying the opponent time, as it usually taps our team and draws a card rather than counter a spell thanks to Aether Vial.</p>
                    <hr>
                    <h2>Sideboarding</h2>
                    <div class="muimage">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNpO0mNpzC2Aj6jbrTGj_J_Epa9w3VimApc_nO_LBzyCOnwUZF" class="muimage" alt="Gideon, Ally of Zendikar">
                    </div>
                    <br>
                    <br>
                    <p>As mentioned above, cards like Thraben Inspector and Wall of Omens tend to be cut or at least significantly trimmed post-board. On the draw, I generally trim an Aether Vial, while keeping in the full set on the play. A Path to Exile can also be cut, but typically four is best just to ensure that an answer to a Baneslayer Angel will be found easily. For cards to bring in, Gideon, Ally of Zendikar is our best sideboard card, acting as a must-answer threat making more threats with its zero ability. While he can get countered, it is not too hard to play around counters, especially as the cheaper ones tend to be cut/trimmed by the UW Control player. Any other good value/midrange cards like Shalai, Voice of Plenty and other planeswalkers come into the deck post-board. Graveyard hate is interesting- while UW Control is not a graveyard-based deck, they to utilize it with Snapcaster Mage and Search for Azcanta. Relic of Progenitus is a relatively safe one to board in- it can cycle for a single mana worse case scenario and can often negate a Snapcaster Mage's targeted spell. Rest in Peace, however, is more tricky. When in play, Search for Azcanta is just a two mana upkeep scry, while Snapcaster Mage is just an Ambush Viper. While Ambush Viper is unplayable in modern, it can be very good against us, especially when we attack with vulnerable creatures like Leonin Arbiter. However, shutting off additional board wipes and Cryptic Commands along with the powerhouse Azcanta, the Sunken Ruin is a huge upside that Rest in Peace provides. I bring in 1-2 Rest in Peaces, and have felt pretty good with that range.</p>
                    <hr>
                    <h2>Important Interactions</h2>
                    <div class="muimage">
                        <img src="https://mtg.one/wp-content/uploads/2017/05/thought-knot-seer-art-crop.jpg" class="muimage" alt="Thought-Knot Seer">
                    </div>
                    <br>
                    <br>
                    <p>One way to stop a miracled Terminus is to flash in a hand-disruptive creature (Thought-Knot Seer, Tidehollow Sculler, etc.) in response to the opponent revealing the card. If you sense that the opponent is setting up a Terminus (Jace, the Mind Sculptor brainstorm, Serum Visions, etc.), then using a Field of Ruin to shuffle their library can stop their plan. While Ghost Quarter can work, often the opponent will simply not search.</p>
            
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





