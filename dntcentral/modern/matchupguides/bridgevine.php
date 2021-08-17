<?php
    include("../../scripts/searchscript.php");
    include("../../scripts/cardlistdb.php");
?>
<?php
    $filename = 'bridgevine.php';
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

    

        <title>Modern Matchup Guide: Bridgevine</title>
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
                    <h1>Matchup Guide: Bridgevine</h1>
                </div>
                <br>
                    <h2>Matchup Overview</h2>
                    <div class="muimage">
                        <img src="https://spellsnare.files.wordpress.com/2017/08/screen-shot-2017-08-16-at-1-07-48-am.png?w=816" class="muimage" alt="Vengevine">
                    </div>
                    <br>
                    <br>
                    <p>Bridgevine is viewed by many as Modern's flavor-of-the-month deck, as it is very fragile to hate cards like Rest in Peace. However, after putting up results, the explosive graveyard deck appears to be here to stay. In terms of the matchup in Death and Taxes's perspective, the opposing deck, while very explosive, is also very fragile and easy to disrupt. Establishing a strong board and dragging the game out helps us take down this deck. Postboard, our graveyard hate gives us an auto win most of the time, as the current iterations of Bridgevine lack answers to a Rest in Peace (yet another reason I favor the enchantment over Relic of Progenitus, a card that they can answer). Therefore, I'd wager to say the matchup is very favorable for Death and Taxes, so long as the current versions of the deck lack answers to our hate.</p>
                    <hr>
                    <h2>Our best cards</h2>
                    <div class="muimage">
                        <img src="https://spellsnare.files.wordpress.com/2016/07/boab85_iugh576f8ghadsd.jpg?w=620" class="muimage" alt="Wall of Omens">
                    </div>
                    <br>
                    <br>
                    <p>Preboard, getting our hatebears in play early on is vital to our success. While their deck lacks a high volume of non-creature spells, a Thalia, Guardian of Thraben tax can go a long way in keeping the opponent off of an explosive turn. Thalia, Guardian of Thraben's first strike is also very relevant in killing their creatures. Leonin Arbiter is also good here, as their deck runs many fetch lands and keeping them off of mana early on is very important. Of note, current lists run 1-2 basic lands, so Ghost Quarters can become Strip Mines without a Leonin Arbiter very quickly. Defensive creatures are also important here, like Wall of Omens and Blade Splicer, as they can help keep our lifetotal high enough to stabilize in the later stages of the game. In addition, Phyrexian Revoker turns off their sacrifice engines like Viscera Seer and Greater Gargadon.</p>
                    <hr>
                    <h2>Our worst cards</h2>
                    <div class="muimage">
                        <img src="/images/dnt/flickerwisp-art.jpg" class="muimage" alt="Flickerwisp">
                    </div>
                    <br>
                    <br>
                    <p>Flickerwisp is not at its best in this matchup, as it is often clunky and low-impactful. That being said, it can often outshine our four drops. While Restoration Angel and Thought-Knot Seer are undoubtedly amazing cards, we are often either winning already or are nearly dead by the time turn 4 is reached. Thraben Inspector is tricky- while a fine chump blocker, it often doesn't do much more than save a few life points. In Eldrazi builds, Eldrazi Displacer is simply too slow.</p>
                    <hr>
                    <h2>Opponent's best cards</h2>
                    <div class="muimage">
                        <img src="https://magic.wizards.com/sites/mtg/files/image_legacy_migration/mtg/images/daily/wallpapers/WP_GoblinBushwhacker_1280x960.jpg" class="muimage" alt="Goblin Bushwhacker">
                    </div>
                    <br>
                    <br>
                    <p>The cards we are most worried about depends heavily if we are on the play or the draw. Often, on the draw, we are worried of dying to a fast draw involving bringing back Vengevines on turn two. Bridge from Below is a card that, without graveyard hate, can take over the game by the sheer value of sacrificing Gravecrawlers and Vengevines. However, setting that up, especially postboard, is tricky for the opponent, making it a low concern for us. The single card, from experience, that ends up beating us is Goblin Bushwhacker. Giving several zombie tokens haste and one extra power in the early turns can often kill us or leave us with too few lifepoints to work with. While usually used for getting in an early Vengevine, Walking Ballista is still a problem for us.</p>
                    <hr>
                    <h2>Sideboarding</h2>
                    <div class="muimage">
                        <img src="https://i.pinimg.com/originals/3e/30/6e/3e306e7bbf42595b0e339cc1925331a3.jpg" class="muimage" alt="Rest in Peace">
                    </div>
                    <br>
                    <br>
                    <p>As mentioned above, high mana cards can get trimmed to lower our curve versus the super-aggro deck. In terms of Thraben Inspector, he is best on the draw where a Rest in Peace is too slow, but can be replaced or at least trimmed on the play. Speaking of Rest in Peace, all graveyard hate comes in (and will often be mulliganed for). Burrenton Forge-Tender is weird- some builds run red removal like Lightning Axe, while others run red threats like Greater Gargadon, and some run no relevant red cards. For now, I've been bringing in 1-2 Burrenton Forge-Tender, as the early blocker can be nice. Anti-aggro cards like Auriok Champion and Kitchen Finks are solid options here.</p>
                    <hr>
                    <h2>Important Interactions</h2>
                    <div class="muimage">
                        <img src="https://cantrip.ru/images/arts/Bridge-from-Below.jpg" class="muimage" alt="Bridge from Below">
                    </div>
                    <br>
                    <br>
                    <p>Bridge From Below, while a scary card, can be dealt with quite easily. In fact, an upside to bringing in Burrenton Forge-Tenders is that they can immediately exile a Bridge from Below by sacrificing themselves, even if they are not technically preventing a red source. Bridge From Below also makes blocking interesting, as chumping/trading becomes very good versus the enchantment.</p>
                    
                
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

