<?php
    include("../../scripts/searchscript.php");
    include("../../scripts/cardlistdb.php");
?>
<?php
    $filename = 'kci.php';
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

    

        <title>Modern Matchup Guide: KCI</title>
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
                    <h1>Matchup Guide: KCI</h1>
                </div>
                <br>
                    <h2>Matchup Overview</h2>
                    <div class="muimage">
                        <img src="https://227rsi2stdr53e3wto2skssd7xe-wpengine.netdna-ssl.com/wp-content/uploads/2014/06/krark-clan-ironworks-620x280.jpg" class="muimage" alt="Krark-Clan Ironworks">
                    </div>
                    <br>
                    <br>
                    <p>KCI is both a fast combo deck and one that packs a fair amount of answers to our disruptive creatures and post board hate. On the bright side, our deck‘s disruption is very relevant vs. them, as they can often not win under a Thalia, Guardian of Thraben and our land destruction can keep them at bay for combing. Even our removal serves a vital purpose, as they require a Scrap Trawler to win the majority of games. While the matchup is still not great for us, our aggressive creatures and taxing capabilities give us a fair shot at beating the combo deck, especially post board.</p>
                    <hr>
                    <h2>Our best cards</h2>
                    <div class="muimage">
                        <img src="https://78.media.tumblr.com/c9eca8622022b937ac22f98ce327e431/tumblr_naynqoqHuH1thxsmlo3_1280.jpg" class="muimage" alt="Phyrexian Revoker">
                    </div>
                    <br>
                    <br>
                    <p>Since KCI is a deck with a combo finish that involves the casting of numerous non-creature spells, it comes to no surprise that Thalia, Guardian of Thraben is at the top of our premium spells. That being said, KCI opponents pack removal for said hatebear, like Pyrite Spellbomb and Engineered Explosives, so a Thalia, Guardian of Thraben on her own is often not enough to stop them. Backing her up with beaters like Blade Splicer and fliers can help get the job done. While the opponent’s deck lacks fetches, Leonin Arbiter is still good here, as land destruction is still fine disruption. Flickerwisp is also good here, as pair with Aether Vial or another Flickerwisp it can take them off of a combo piece. Phyrexian Revoker, while not played in every build, is amazing here, as it can either keep them off of a hate artifact, tax them mana-wise, or turn off their win condition: Krark-Clan Ironworks. In Eldrazi builds, Thought-Knot Seer is great at snagging their combo pieces.</p>
                    <hr>
                    <h2>Our worst cards</h2>
                    <div class="muimage">
                        <img src="https://spellsnare.files.wordpress.com/2016/07/boab85_iugh576f8ghadsd.jpg?w=620" class="muimage" alt="Wall of Omens">
                    </div>
                    <br>
                    <br>
                    <p>The cards that we want least are the ones that fail at both providing a fast clock and interacting with our opponent. Thraben Inspector and Wall of Omens come to mind; while the card draw is nice, it is often too slow. Slower 3/4 drops are also poor, as the opponent is on a fast combo deck, like Eldrazi Displacer.</p>
                    <hr>
                    <h2>Opponent's best cards</h2>
                    <div class="muimage">
                        <img src="https://www.quietspeculation.com/wp-content/uploads/2016/08/arc1260_engineered-600x439.jpg" class="muimage" alt="Engineered Explosives">
                    </div>
                    <br>
                    <br>
                    <p>While their combo cards are obviously problematic for us, we are mainly concerned with their hate pieces for our hate pieces. Cards like Pyrite Spellbomb and Engineered Explosives cleanly answer not only our hate bears, but also our pressure, buying them valuable time. Nature's Claim becomes especially problematic for us postboard, as they cannot combo off under a Stony Silence.</p>
                    <hr>
                    <h2>Sideboarding</h2>
                    <div class="muimage">
                        <img src="https://227rsi2stdr53e3wto2skssd7xe-wpengine.netdna-ssl.com/wp-content/uploads/2014/03/stony-silence-730x280.png" class="muimage" alt="Stony Silence">
                    </div>
                    <br>
                    <br>
                    <p>Thraben Inspectors can be cut, along with a number of our more clunky 3 drops and sometimes a 4 drop as well. Eldrazi Displacer is the most cuttable 3 drop, with Blade Splicer being next in line. Stony Silences and Damping Spheres come in, as the opponent cannot win under them. Graveyard hate also prevents the opponent from winning, so Rest in Peace and Relic of Progenitus can come in (but not Grafdigger's Cage!). Burrenton Forge-Tenders are an interesting case: while they seem bad initially, they can act as protection for our hatebears, as the opponent often brings in a number of Lightning Bolts/Galvanic Blasts. As of now, I would stay away from bringing them in unless you have the space, as overboarding can make our deck too clunky and slow. Otherwise, any other unmentioned hate piece is good (i.e. Eidolon of Rhetoric).</p>
                    <hr>
                    <h2>Important Interactions</h2>
                    <div class="muimage">
                        <img src="https://cdn.pucatrade.com/cards/crops/sm/14953.jpg" class="muimage" alt="Pithing Needle">
                    </div>
                    <br>
                    <br>
                    <p>Keep in mind that Pithing Needle, while good enough to bring in, does not turn off Krark-Clan Ironworks or their mana rocks, as they are all mana abilities. Pithing Needle's hits in the matchup are usually their removal spells like Engineered Explosives, Pyrite Spellbomb, and Ghirapur Aether-Grid. Ethersworn Canonist is another card that, while a great storm hater, is useless against the artifact combo deck.</p>
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




