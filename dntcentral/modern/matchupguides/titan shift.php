<?php
    include("../../scripts/searchscript.php");
    include("../../scripts/cardlistdb.php");
?>
<?php
    $filename = 'titan shift.php';
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

    

        <title>Modern Matchup Guide: Titan Shift</title>
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
                    <h1>Matchup Guide: Titan Shift</h1>
                </div>
                <br>
                    <h2>Matchup Overview</h2>
                    <div class="muimage">
                        <img src="https://227rsi2stdr53e3wto2skssd7xe-wpengine.netdna-ssl.com/wp-content/uploads/2014/07/scapeshift.jpg" class="muimage" alt="Scapeshift">
                    </div>
                    <br>
                    <br>
                    <p>Titan Shift is a combo deck that is similar to KCI- it has many answers both preboard and postboard to our hatebears along with the ability to pivot its win gameplan postboard. The matchup really boils down to finding our hate bears and land destruction, and finishing off the opponent before they can cast a lethal Scapeshift or Primeval Titan. Alternatively, just ramping to five mountains + Valakut, the Molten Pinnacle can allow the opponent to use their land search spells as Lightning Bolts and quickly make ruin to our board. The matchup is overall not as good as it may seem because of these reasons, despite cards like Leonin Arbiter, Ghost Quarter, and Tectonic Edge being amazing against Titan Shift.</p>
                    <hr>
                    <h2>Our best cards</h2>
                    <div class="muimage">
                        <img src="/images/dnt/ghost-quarter-art.jpg" class="muimage" alt="Ghost Quarter">
                    </div>
                    <br>
                    <br>
                    <p>As mentioned above, the two best cards for us are our hatebears and our land destruction. Leonin Arbiter is often better than Thalia, Guardian of Thraben due to Titan Shift's large number of search effects, but both help keep the opponent off of their desired lands. In terms of land destruction, Ghost Quarter is the most powerful paired with Leonin Arbiter, as it can keep the opponent off of mana in the early game. Tectonic Edge tends to be better in the later stages of the game, as the opponent can pay for a Leonin Arbiter or two at that point (assuming an arbiter is even on the battlefield). Field of Ruin is another land-destruction option but is the weaker of the two here, but nonetheless a valuable asset for us. Otherwise, Path to Exile is a necessary evil due to their Primeval Titans (and possible sideboard threats), despite its downside being really bad for us. Otherwise, creatures that can either protect our hatebears and/or kill our opponent fast are pretty good as well- including Restoration Angel and Blade Splicer. If on an Eldrazi build, Thought-Knot Seer is very good, as it can take them off of a much-needed Scapeshift or Primeval Titan.</p>
                    <hr>
                    <h2>Our worst cards</h2>
                    <div class="muimage">
                        <img src="https://227rsi2stdr53e3wto2skssd7xe-wpengine.netdna-ssl.com/wp-content/uploads/2016/04/Thraben-Inspector-Shadows-over-Innistrad-Art.jpg" class="muimage" alt="Thraben Inspector">
                    </div>
                    <br>
                    <br>
                    <p>Thraben Inspector is a card that is not ideal here- it is slow both in regards to digging for our key cards and its damage-dealing ability. While it is nice to be able to draw into a hatebear or land destruction land, either are often too slow or too little by the time we can pay the two mana to crack Thraben Inspector's clue. Wall of Omens is another creature that is poor here- their deck doesn't care about the 0/4, and the card draw is not impactful enough to justify running an otherwise useless defender. In Eldrazi builds, Eldrazi Displacer is not very good, due to its lack of immediate value combined with its vulnerability to Lightning Bolt and a Valakut, the Molten Pinnacle trigger.</p>
                    <hr>
                    <h2>Opponent's best cards</h2>
                    <div class="muimage">
                        <img src="https://vignette.wikia.nocookie.net/gamelore/images/c/cc/Valakut_the_Molten_Pinnacle.jpg/revision/latest?cb=20130517190131" class="muimage" alt="Valakut, the Molten Pinnacle">
                    </div>
                    <br>
                    <br>
                    <p>Preboard, besides their combo cards (Scapeshift and Primeval Titan), the two cards that hurt us the most are Lightning Bolt and Valakut, the Molten Pinnacle (Lightning Bolt land). Lightning Bolt is obvious- it kills our hatebears, slows our clock, and other Lightning Bolt-related activities. As for Valakut, the Molten Pinnacle, the card is easy for us to answer, as we often run more land destruction spells than they do Valakut, the Molten Pinnacles. However, when the opponent gets their Valakut, the Molten Pinnacle in play with us lacking land destruction, then it becomes very bad for us. Turning the opponent's Mountains and ramp spells into Lightning Bolt (or worse if multiple Valakut, the Molten Pinnacles are in play) will quickly eliminate any board presence we have and/or kill us swiftly. Postboard (and sometimes a couple main), they often bring in sweepers like Anger of the Gods and Sweltering Suns that are very good against us.</p>
                    <hr>
                    <h2>Sideboarding</h2>
                    <div class="muimage">
                        <img src="https://cdn.pucatrade.com/cards/crops/sm/8222.jpg" class="muimage" alt="Burrenton Forge-Tender">
                    </div>
                    <br>
                    <br>
                    <p>In terms of cards to cut, Thraben Inspector, Wall of Omens, and Eldrazi Displacer can be cut. Threats like Blade Splicer and Restoration Angel can be trimmed if room is needed. In terms of cards to bring in, more removal for Primeval Titan and other threats is good, so long as it is "hard removal", like destroy/exile a creature. Cards like Dismember and Sunlance won't aid in killing a Primeval Titan. Burrenton Forge-Tender is another card to bring in- it protects our hatebears from Lightning Bolt and our team from boardwipes. Shalai, Voice of Plenty is also great here- while in play, she stops us from insta-dying to an otherwise lethal Scapeshift. Any other land hate (i.e. Aven Mindcensor) would be ideal to board in as well.</p>
                    <br>
                    <br>
                    <br>
                    <!--important interaction: if they have 7 land + scapeshift, wait until it resolves if u have GQ/Field. Then, use GQ/Field on a land, to maximize chance that they lack basic mountain to get. If ur land is a tec edge tho, use it before to play around them simply getting 6 basic + valakut.-->
                
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

