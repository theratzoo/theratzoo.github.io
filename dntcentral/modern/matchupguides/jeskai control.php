<?php
    include("../../scripts/searchscript.php");
    include("../../scripts/cardlistdb.php");
?>
<?php
    $filename = 'jeskai control.php';
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

    

        <title>Modern Matchup Guide: Jeskai Control</title>
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
                    <h1>Matchup Guide: Jeskai Control</h1>
                </div>
                <br>
                    <h2>Matchup Overview</h2>
                    <div class="muimage">
                        <img src="https://i.ytimg.com/vi/Lv1p9ppS5pg/hqdefault.jpg" class="muimage" alt="Jace, the Mind Sculptor">
                    </div>
                    <br>
                    <br>
                    <p>While we are not traditionally an aggro deck, we must play that role in this matchup in order to have a fighting chance. While grinding seems tempting, they will win the late game, so the longer the game drags out, the lower our odds of victory are. Our hatebears and beatdown creatures help disrupt and kill them before they have the chance to stabilize. I've found the matchup to overall be slightly unfavorable, as we are often a turn too slow, and can be slowed down significantly by their red removal spells (Lightning Bolt, Lightning Helix, Electrolyze).</p>
                    <hr>
                    <h2>Our best cards</h2>
                    <div class="muimage">
                        <img src="https://orig00.deviantart.net/7955/f/2012/099/2/4/mtg__restoration_angel_by_algenpfleger-d4vitks.jpg" class="muimage" alt="Restoration Angel">
                    </div>
                    <br>
                    <br>
                    <p>As mentioned above, our best cards are the ones that help in both killing and disrupting our opponent as early as possible. Cards like Thalia, Guardian of Thraben and Leonin Arbiter fill said role, helping us keep them off of their board wipes and Cryptic Commands. Otherwise, our more potent threats like Restoration Angel are also powerful in this matchup- while slower than Thalia, Guardian of Thraben and Leonin Arbiter, Restoration Angel can save one of our creatures, or be flashed in end of turn to finish a player or planeswalker. Flickerwisp is also good disruption when paired with Aether Vial, and can really help keep them off of Cryptic Command or wrath mana. Our land-destruction lands are also valuable here, as their manabase is easy to disrupt.</p>
                    <hr>
                    <h2>Our worst cards</h2>
                    <div class="muimage">
                        <img src="https://www.spiderwebart.com/images/art/104393.jpg" class="muimage" alt="Aether Vial">
                    </div>
                    <br>
                    <br>
                    <p>Overall, the majority of cards in our deck are not "bad" against Jeskai Control. That being said, one card that gets worst post board is Thraben Inspector. While a one mana 1/2 beater that eventually draws a card is very powerful, especially if it comes turn one or two off of an Aether Vial, smart control players will bring in Stony Silence against us, making Thraben Inspector into a vanilla one mana 1/2, which is a bad card. Otherwise, Path to Exile is also weak here, but is really dependent on the variant of Jeskai they are playing- some lists play more creatures than others.</p>
                    <hr>
                    <h2>Opponent's best cards</h2>
                    <div class="muimage">
                        <img src="https://media.wizards.com/2015/images/daily/cardart_CrypticCommand.jpg" class="muimage" alt="Cryptic Command">
                    </div>
                    <br>
                    <br>
                    <p>The reason our hatebears shine here is that the opponent's best cards are their four mana spells- Cryptic Command and wraths (Wrath of God, Supreme Verdict, Settle the Wreckage)- along with Snapcaster Mage, which flashes back said spells. Often, we do not have much trouble beating their one for one removal, especially Path to Exile, as it gives us a mana, but struggle more with two for one removal spells like Electrolyze and, to a lesser extent, Lightning Helix. While Lightning Bolt on our Thalia, Guardian of Thraben is not great, we can often tax and pressure them enough that their one for one removal will be too slow, hence our fear of their sweepers, Cryptic Commands, and two for one cheap removal spells.</p>
                    <hr>
                    <h2>Sideboarding</h2>
                    <div class="muimage">
                        <img src="https://227rsi2stdr53e3wto2skssd7xe-wpengine.netdna-ssl.com/wp-content/uploads/2016/05/Rest-in-Peace-banner-620x280.jpg" class="muimage" alt="Rest in Peace">
                    </div>
                    <br>
                    <br>
                    <p>I generally cut a few Thraben Inspectors and Path to Exiles along with a 1-2 Eldrazi Displacer (dies to Lightning Bolt and Lightning Helix for no value) to bring in our lategame finishers like Shalai, Voice of Plenty, planeswalkers, and other expensive spells that control struggles to beat. I also bring in Burrenton Forge-Tenders, as some Jeskai builds have Anger of the Gods, Pyroclasm, and/or Electrolyze. Worst case scenario, Burrenton Forge-Tender is a 1/1 beater for one mana that can save one of our more important creatures like Thalia, Guardian of Thraben. I've also started experimenting with bringing in graveyard hate like Relic of Progenitus and even Rest in Peace, as they turn of Snapcaster Mages and Search for Azcanta. As of now, I am inclined to bring in Relic of Progenitus but not Rest in Peace, as it can cycle for a card worst-case scenario, whereas Rest in Peace can sit in play and do nothing.</p>
                    <hr>
                    <h2>Important Interactions</h2>
                    <div class="muimage">
                        <img src="https://227rsi2stdr53e3wto2skssd7xe-wpengine.netdna-ssl.com/wp-content/uploads/2017/09/settlethewreckage-730x280.jpg" class="muimage" alt="Settle the Wreckage">
                    </div>
                    <br>
                    <br>
                    <p>If the opponent casts a Cryptic Command that is bouncing a permanent and either drawing a card or tapping our team, than blinking the Cryptic Command's bounce target will fizzle (counter) the spell. Using Flickerwisp at end step to temporarily remove one of the opponent's lands after they hit 4 mana (or 5 with a Thalia, Guardian of Thraben in play) can prevent them from Cryptic Commanding the team; likewise, Flickerwisp/Tectonic Edge can be used on our main phase to stop a Settle the Wreckage.</p>
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

