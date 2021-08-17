<?php
    include("../../scripts/searchscript.php");
    include("../../scripts/cardlistdb.php");
?>
<?php
    $filename = 'burn.php';
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

    

        <title>Modern Matchup Guide: Burn</title>
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
                    <h1>Matchup Guide: Burn</h1>
                </div>
                <br>
                    <h2>Matchup Overview</h2>
                    <div class="muimage">
                        <img src="https://i.pinimg.com/originals/8f/0c/19/8f0c195975597a4357c0ae70652780a6.jpg" class="muimage" alt="Boros Charm">
                    </div>
                    <br>
                    <br>
                    <p>Burn is typically one of our better matchups. Their burn spells often are forced to target our problematic creatures (i.e. Thalia, Guardian of Thraben, Leonin Arbiter), while our threats can pressure their life total quite well. That being said, without a Thalia, Guardian of Thraben, game one can often be a race determined by the coinflip. In addition, their creatures are dwarfed by ours, making them essentially dead draws (excluding Grim Lavamancer of course) in the later stages of the game. Postboard, the matchup can get even better, as anti-aggro cards and life gain options can really hose the burn player's strategy. While there are certainly games where they get a turn 3/4 kill, the matchup is often favored pretty well for us (~65%).</p>
                    <hr>
                    <h2>Our best cards</h2>
                    <div class="muimage">
                        <img src="https://orig00.deviantart.net/df4a/f/2012/012/0/4/thalia__guardian_of_thraben_by_algenpfleger-d4m3bms.jpg" class="muimage" alt="Thalia, Guardian of Thraben">
                    </div>
                    <br>
                    <br>
                    <p>Thalia, Guardian of Thraben is our single best card in the burn matchup. Not only does her first strike ability prevent Goblin Guides and Eidolon of the Great Revels from attacking, but she also taxes the opponent's burn spells, making her an instant target of their burn spells, all for the price of two mana. While Thalia, Guardian of Thraben is typically bad to draw in multiples, that is not true in this matchup; often, the burn player's mana is very tight, which in turn makes Thalia, Guardian of Thraben's tax very costly on them, forcing them to point Lightning Bolts and Rift Bolts at her. Our other hate bear, Leonin Arbiter, is also solid in this matchup; as just mentioned, they are very light on mana, so denying them mana is very powerful. Otherwise, Blade Splicer is a great blocker and keeps us from dying to burn dorks, and our fliers and also important to close out the game.</p>
                    <hr>
                    <h2>Our worst cards</h2>
                    <div class="muimage">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSq4kyrrtj13BosF0Zb6SOOkRCFy-eMbtY8EYcVj8ifjpfmpw" class="muimage" alt="Thraben Inspector">
                    </div>
                    <br>
                    <br>
                    <p>I've found Eldrazi Displacer to be too slow in this matchup, especially since it dies to the 12+ bolts that they run. In addition, Thraben Inspector is not exciting, as a 1/2 cannot block very well on its own (albeit it is nice in pairs). Overall, our card quality is very high in this matchup, making us not have a "worst card" compared to other matchups like humans.</p>
                    <hr>
                    <h2>Opponent's best cards</h2>
                    <div class="muimage">
                        <img src="https://78.media.tumblr.com/7249545cfea1b0196add4ec75a60b6b2/tumblr_nbdp9sSnvp1thxsmlo1_640.jpg" class="muimage">
                    </div>
                    <br>
                    <br>
                    <p>Their removal spells are what hurt us the most, especially Searing Blaze. Grim Lavamancer is the single most powerful card against us, as we never board in graveyard hate, so the critter will take over the game if unanswered. In certain situations, Eidolon of the Great Revel can lock us down, but often I've found the card to not do much against us. Overall, we don't care much about their (non Grim Lavamancer) creatures, and usually are more worried about their burn spells, especially the ones that kill Thalia, Guardian of Thraben.</p>
                    <hr>
                    <h2>Sideboarding</h2>
                    <div class="muimage">
                        <img src="https://static1.squarespace.com/static/562e2633e4b0b7066d01cbfa/59d928fe914e6b0b822251d7/59d9292b2aeba571e4fe0429/1507404076556/DKA2VyxXcAAl5qH.jpg-large.jpeg?format=750w" class="muimage" alt="Auriok Champion">
                    </div>
                    <br>
                    <br>
                    <p>As mentioned in one of the prior sections, Thraben Inspectors and displacers generally come out. Trimming a Flickerwisp is also ok, as it doesn't do a whole lot in this matchup. Bring in all of the anti-aggro cards: Burrenton Forge-Tender, Auriok Champion, Kitchen Finks, etc. all come in. Extra removal spells can come in, but it really depends on which ones. For example, we do not want to bring in Dismember against the deck that is Lava Spiking us, as it essentially is a boros charm on ourselves. Conversely, sunlance is very good in this matchup, as it kills any of their creatures without given them a land, albeit at sorcery speed. Shalai, Voice of Plenty also comes in vs. them, as burn really cannot beat her unless they have Path to Exile to exile. Speaking of cards that burn cannot beat, Worship is another auto-win vs. burn in the majority of scenarios.</p>
                    <hr>
                    <h2>Important Interactions</h2>
                    <div class="muimage">
                        <img src="https://vignette.wikia.nocookie.net/gamelore/images/3/32/Eidolon_of_the_Great_Revel.jpg/revision/latest?cb=20140909125924" alt="Eidolon of the Great Revel" class="muimage">
                    </div>
                    <br>
                    <br>
                    <p>Restoration Angel does not make us take 2 off of Eidolon of the Great Revel- making it very valuable whenever said red creature is in play. Speaking of Eidolon of the Great Revel, with enough pressure from fliers, we can occasionally lock the opponent out of the game through their own Eidolon of the Great Revel. Burrenton Forge-Tender can do more than stop a Boros Charm to the face or save one of our creatures; it can also block one of their creatures forever and even sac to fog one of their attackers. Of note, Skullcrack does make Burrenton Forge-Tender die if it blocks one of the opponent's creatures. When scrying before a game, keeping a land on top can get us said land by a turn one Goblin Guide.</p>
                
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



