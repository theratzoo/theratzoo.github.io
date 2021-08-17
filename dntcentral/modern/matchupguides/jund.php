<?php
    include("../../scripts/searchscript.php");
    include("../../scripts/cardlistdb.php");
?>
<?php
    $filename = 'jund.php';
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

    

        <title>Modern Matchup Guide: Jund</title>
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
                    <h1>Matchup Guide: Jund</h1>
                </div>
                <br>
                    <h2>Matchup Overview</h2>
                    <div class="muimage">
                        <img src="http://media.wizards.com/images/magic/daily/wallpapers/Tarmogoyf_DGM_1920x1080_Wallpaper.jpg" class="muimage" alt="Tarmogoyf">
                    </div>
                    <br>
                    <br>
                    <p>Traditionally, Jund has been one of Death and Taxes’ worst matchups. Between their removal, discard, and value threats, Jund is able to dismantle our gameplan swiftly and then stabilize with a large creature or powerful planeswalker. While an unideal matchup, Death and Taxes does have a chance- hatebears can keep them off of mana, while our fliers can go over their Tarmogoyfs. Post-board doesn't get much better; while threats like Gideon, Ally of Zendikar help, the Jund opponent also gets access to many powerful answers like Anger of the Gods.</p>
                    <hr>
                    <h2>Our best cards</h2>
                    <div class="muimage">
                        <img src="https://78.media.tumblr.com/eefd78ba93b5d94b3f88d5442b47d565/tumblr_n9jph0x6VU1thxsmlo1_500.jpg" class="muimage" alt="Restoration Angel">
                    </div>
                    <br>
                    <br>
                    <p>In this matchup, especially pre-board, killing the opponent quickly is our best chance of success. Fliers achieve this best, as they negate the big creatures played in Jund. Restoration Angel is the best flier; she can generate value by saving a creature or abusing an enter the battlefield trigger, plus she dodges Lightning Bolt, Kolaghan's Command, Liliana, the Last Hope and a non-revolted Fatal Push. Flickerwisp, on the other hand, only dodges the latter of the mentioned removal spells, making it a much weaker flier than Restoration Angel. Otherwise, our hatebears are good at slowing the opponent down. Path to Exile also serves an important role, as Jund has many must-kill creatures like Dark Confidant and Tarmogoyf.</p>
                    <hr>
                    <h2>Our worst cards</h2>
                    <div class="muimage">
                        <img src="https://www.spiderwebart.com/images/art/104393.jpg" class="muimage" alt="Aether Vial">
                    </div>
                    <br>
                    <br>
                    <p>Aether Vial is at its worst in this matchup. In their main deck, Jund plays Kolaghan's Command, a card that obliterates Aether Vial. In addition, their discard can keep us off of creatures, lowering the power of Aether Vial. In Eldrazi builds, Eldrazi Displacer is not great, as it often dies to a cheap removal spell like Lightning Bolt before it can get value.</p>
                    <hr>
                    <h2>Opponent's best cards</h2>
                    <div class="muimage">
                        <img src="https://227rsi2stdr53e3wto2skssd7xe-wpengine.netdna-ssl.com/wp-content/uploads/2016/07/liliana-the-last-hope-e1468968509617-730x280.jpg" class="muimage" alt="Liliana, the Last Hope">
                    </div>
                    <br>
                    <br>
                    <p>Evidently, the opponent's removal spells and discard are a problem for Death and Taxes. In terms of creatures, Dark Confidant is often the most worrisome. The value it generates typically outpaces the damage loss, forcing us to have a removal spell else the game can conclude quickly. The cards that are the best against Death and Taxes by far are the two for one spells that kill creatures: Kolaghan's Command and Liliana, the Last Hope. The former is simply a powerful spell that is good against the creature deck with artifacts, while the latter is almost impossible to beat. Liliana, the Last Hope kills at least 8 creatures in our deck and makes the majority too weak to attack back. Her ultimate wins 99% of games, so just trying to outrace her is often a losing battle. After sideboarding, sweepers are also effective against us, such as Anger of the Gods and Damnation.</p>
                    <hr>
                    <h2>Sideboarding</h2>
                    <div class="muimage">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNpO0mNpzC2Aj6jbrTGj_J_Epa9w3VimApc_nO_LBzyCOnwUZF" class="muimage" alt="Gideon, Ally of Zendikar">
                    </div>
                    <br>
                    <br>
                    <p>Similar to sideboarding against UWx Control and Mardu Pyromancer, it is highly dependent on whether you’re on the play or draw. On the play, I like to keep in all 8 hatebears and at least three Aether Vials, while adding minimal noncreature spells. The best way to beat Jund is to outrace them; their deck is just better at grinding than Death and Taxes, hence why I like racing on the play. A few of the slower creatures can also be cut (Thraben Inspector, Wall of Omens, etc.) along with low-impactful three drops. For cards to bring in, Gideon, Ally of Zendikar, Dismember, and Burrenton Forge-Tender come in regardless of who goes first. The planeswalker is our single best card in the matchup, as he can and will out-grind the opponent if unanswered. The removal spell is useful for killing creatures that can get the opponent value or just prevent us from attacking. The latter card, Burrenton Forge-Tender, protects our best creature from Lightning Bolt, along with stopping an Anger of the Gods. On the draw, I like to shave at least two Aether Vials and at least one Thalia, Guardian of Thraben. To compensate for the cuts, Rest in Peace gets boarded in to deal with the opponent's graveyard synergies (Tarmogoyf, Scavenging Ooze, Grim Lavamancer, etc.). Relic of Progenitus can also come in, but often is just worse than Rest in Peace at shutting down their graveyard, but has the upside of not being a dead draw if an additional graveyard hate permanent is in play or if the opponent lacks their graveyard spells. Kitchen Finks is an interesting one- while great against the deck lacking exiling effects, it is terrible with a Rest in Peace in play. I would only bring it in if you have less than two Rest in Peaces coming in; else it's too clunky. Any other good creatures/spells also come in; Selfless Spirit and Shalai, Voice of Plenty are fine cards postboard.</p>
                    <hr>
                    <h2>Important Interactions</h2>
                    <div class="muimage">
                        <img src="http://magic.wizards.com/sites/mtg/files/image_legacy_migration/images/magic/daily/stf/stf187_tha.jpg" class="muimage" alt="Thalia, Guardian of Thraben">
                    </div>
                    <br>
                    <br>
                    <p>If the opponent lacks mana after casting a Bloodbraid Elf, they cannot cast any cascaded noncreature spells if a Thalia, Guardian of Thraben is in play. Also, one way to counteract a Liliana, the Last Hope's uptick is by ultimating your Gideon, Ally of Zendikar.</p>
            
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




