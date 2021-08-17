<?php
    include("../../scripts/searchscript.php");
    include("../../scripts/cardlistdb.php");
?>
<?php
    $filename = 'br hollow one.php';
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

    

        <title>Modern Matchup Guide: BR Hollow One</title>
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
                    <h1>Matchup Guide: BR Hollow One</h1>
                </div>
                
                    <h2>Matchup Overview</h2>
                    <div class="muimage">
                        <img src="/images/modern/matchupguides/home/hollow-one-art.jpg" class="muimage" alt="Hollow One">
                    </div>
                    <br>
                    <br>
                    <p>Typically, our deck is favored slightly in this matchup, but it really depends on OP's hand- they can easily take games off of us with a very explosive hand. Game one is very dependent on us finding our key cards in order to prevent them from killing us with their 4/4s and 5/5s, while post board games are determined significantly on the sideboard haymakers. Since the Hollow One deck is an aggro deck, all we have to do is stall the game, stabilize the board, and eventually gain and press our advantage to slowly take them down with a flier. Overall, we are the control deck in this matchup, with our advantage lying in both value creatures that serve as powerful blockers, and essential sideboard tech that can stifle their gameplan.</p>
                    <hr>
                    <h2>Our best cards</h2>
                    <div class="muimage">
                        <img src="https://www.wizards.com/mtg/images/daily/features/feature188_path.jpg" class="muimage" alt="Path to Exile">
                    </div>
                    <br>
                    <br>
                    <p>Of course, Path to Exile is our number one card in this matchup. Due to our lack of graveyard hate preboard, our best creatures are the ones that can eat up their recursive threats (Bloodghasts and Rekindling Phoenixes). Blade Splicer might be our best one: two bodies for three mana that can also creature more 3/3 Golems with a blinker, and, on top of that, can hold back their Gurmag Anglers and Hollow Ones once two or more Golems are on the battlefield with a Blade Splicer. Because of Rekindling Phoenix's ability to keep returning to the battlefield, Flickerwisp is much worse in this matchup than Restoration Angel, with the latter being able to not only stop their Rekindling Phoenix from getting in damage, but also providing a "Lightning Bolt-proof" clock that can also save one of your creatures or make another token. Continuing with the blocking trend, Thalia, Guardian of Thraben is also powerful, as she taxes their noncreature spells (which they have more than us of), along with stopping their Bloodghasts from bashing. Eldrazi Displacer is also good here, as it can keep their most potent threat at bay, create a stream of golems, or just contribute to our wall of creatures. Eldrazi Displacer's main issue, however, is its weakness to Lightning Bolt- having a one mana spell kill our three drop that generated no value feel terrible.</p>
                    <hr>
                    <h2>Our worst cards</h2>
                    <div class="muimage">
                        <img src="https://spellsnare.files.wordpress.com/2017/01/leonin-arbiter.jpg" class="muimage" alt="Leonin Arbiter">
                    </div>
                    <br>
                    <br>
                    <p>Surprisingly, Leonin Arbiter is a lot worse than it looks here, especially on the draw. While the card hurts their fetchlands and can help our Ghost Quarters disrupt their low basic land count, Leonin Arbiter is often too slow for us and, since it is only a 2/2, only really serves as a chump blocker or a risky double blocker (don't forget about their Lightning Bolts!). In addition, the opponent's deck plays a very low basic land count (typically 3-4), and the deck also discards many of their extra lands, so our Ghost Quarters can easily become Strip Mines without a Leonin Arbiter in play. While Thraben Inspector suffers the same downsides as Leonin Arbiter, it is a better chump blocker due to being only one mana, and can help us dig for the right spell with its costly clue, making it slightly better than the Leonin Arbiter. As mentioned above, Flickerwisp is also not exciting: it is a feeble body that requires setup to gain value (ie having a Blade Splicer in play).</p>
                    <hr>
                    <h2>Opponent's Best Cards</h2>
                    <div class="muimage">
                        <img src="https://s3-us-west-2.amazonaws.com/echomage/cards/PD2/234706.crop.hq.jpg" class="muimage" alt="Grim Lavamancer">
                    </div>
                    <br>
                    <br>
                    <p>Honestly, the opponent's cards on their own are not very threatening to us; the issue is mainly the speed at which said cards are deployed. A quick Hollow One and/or Gurmag Angler are what beat us generally, especially when we lack removal. Lightning Bolt is also very good versus us, as it gives their deck clean, cheap answers to our blockers along with threatening our life total once it reaches low numbers. While generally not in their main deck, Grim Lavamancer is the single most powerful card against our deck- it kills the majority of our creatures, it pairs well with Lightning Bolt to finish off our four drops, it makes blocking less favorable for us, and makes non Rest in Peace graveyard hate much worse.</p>
                    <hr>
                    <h2>Sideboarding</h2>
                    <div class="muimage">
                        <img src="https://vignette.wikia.nocookie.net/gamelore/images/7/7d/Kitchen_Finks.jpg/revision/latest?cb=20141228044506" class="muimage" alt="Kitchen Finks">
                    </div>
                    <br>
                    <br>
                    <p>Since we tend to value our three and four drops against an aggro deck, trimming some Flickerwisps, our weakest three drop, is generally advised. Some number of Leonin Arbiters and Thraben Inspectors can get cut as well; I've found the former to be better on the play than the latter, as we can more easily tax their mana base on the play, but can get more use out of a one mana chump blocker on the draw. While Thalia, Guardian of Thrabens are also not very exciting, trimming them is a trap that I have fell into before; the less one and two drops we have, the weaker we are to the opponent having an explosive Hollow One hand. Therefore, before cutting too many low drops, it is better to trim a 3/4 drop like Eldrazi Displacer (or Akroma, Angel of Fury if you run her- too weak to Lightning Bolt). Since Hollow One is a graveyard deck, all of our graveyard hate comes in. Removal spells are also needed for not only their threats, but also the Grim Lavamancers they bring in postboard. Our anti-aggro cards also come in (Kitchen Finks, Shalai, Voice of Plenty, Worship, etc.). Burrenton Forge-Tenders are also very important in the matchup; they can protect our essential creatures from Lightning Bolts or prevent a boardwipe from finishing us.</p>
                    <hr>
                    <h2>Important Interactions</h2>
                    <div class="muimage">
                        <img src="https://vignette.wikia.nocookie.net/gamelore/images/e/e3/Phyrexian_Revoker.jpg/revision/latest?cb=20170918140916" class="muimage" alt="Phyrexian Revoker">
                    </div>
                    <br>
                    <br>
                    <p>Do not forget that Rekindling Phoenix's trigger occurs on the beginning of combat step- that means that, in order to prevent Rekindling Phoenix from returning, the 4+ power creature must be Path to Exiled or blinked with a Flickerwisp beforehand. In certain scenarios, sacrificing a Relic of Progenitus early can be correct, as it can keep them off of casting a Gurmag Angler or Tasigur, the Golden Fang. Phyrexian Revoker can name, in addition to Grim Lavamancer, Street Wraith (or technically Hollow One), as the cost of cylcing the spell is an activated ability.</p>
                
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

