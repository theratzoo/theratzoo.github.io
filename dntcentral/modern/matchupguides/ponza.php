<?php
    include("../../scripts/searchscript.php");
    include("../../scripts/cardlistdb.php");
?>
<?php
    $filename = 'ponza.php';
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

    

        <title>Modern Matchup Guide: Ponza</title>
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
                    <h1>Matchup Guide: Ponza</h1>
                </div>
                <br>
                    <h2>Matchup Overview</h2>
                    <div class="muimage">
                        <img src="https://i.imgur.com/HrPU8.jpg" class="muimage" alt="Bloodbraid Elf">
                    </div>
                    <br>
                    <br>
                    <p>This is one of the more interesting matchups I've encountered. We can play as both the aggro and control deck in the matchup, all dependent on the speed/explosiveness of both decks' draws. Our disruption is very strong versus the Ponza opponent, especially when we are on the play, which can favor an aggressive game. Conversely, we tend to be more on the defensive on the draw, especially when the opponent is deploying early Bloodbraid Elves and Tireless Trackers. That being said, sometimes the roles can reverse, as they have very powerful lategame threats, such as Inferno Titan and Chandra. Likewise, our deck can easily pivot from an aggressive gameplan into a more value, controlling mode. Overall, I've found the matchup to slightly favor us, as our Aether Vials and low mana curve tends to make their land hate cards poor against us, and our taxing creatures can often prevent them from casting their more expensive bombs until too late.</p>
                    <hr>
                    <h2>Our best cards</h2>
                    <div class="muimage">
                        <img src="https://i.imgur.com/2ms6C_d.jpg?maxwidth=640&shape=thumb&fidelity=medium" class="muimage" alt="Flickerwisp">
                    </div>
                    <br>
                    <br>
                    <p>Our most valuable cards are often dependent on our role in the game. If we wish to play the aggressive, taxing role, Thalia, Guardian of Thraben and Leonin Arbiter are our best cards. In the controlling role, Blade Splicer serves as a powerful blocker, keeping Bloodbraid Elves at bay. In both cases, our fliers are also very powerful; Restoration Angel dodges Lightning Bolt, while Flickerwisp can, in addition to its other roles, remove their Utopia Sprawl. Also, in both cases, Path to Exile is very important, as it serves as a removal spell for their Tireless Trackers, a card that will grind us out.</p>
                    <hr>
                    <h2>Our worst cards</h2>
                    <div class="muimage">
                        <img src="/images/dnt/eldrazi-displacer-art.jpg" class="muimage" alt="Eldrazi Displacer">
                    </div>
                    <br>
                    <br>
                    <p>Thraben Inspector does not do much in this matchup and is often either too slow or too unimpactful. Eldrazi Displacer is not great here either; while it is great at grinding, it also dies to Lightning Bolt, so it really depends on the amount of protection available for the creature.</p>
                    <hr>
                    <h2>Opponent's best cards:</h2>
                    <div class="muimage">
                        <img src="https://i.pinimg.com/originals/a0/5b/58/a05b58e21b481d33e60fbd8283ba8f49.jpg" class="muimage" alt="Tireless Tracker">
                    </div>
                    <br>
                    <br>
                    <p>We are most afraid of their threats, like Tireless Trackers and Inferno Titans. Their planeswalkers are also very good versus us, especially when we lack the boardstate to pressure them. Blood Moon is an interesting card: while it is not great at color screwing us (so long as we are not splashing a color), it can turn off our utility lands, such as Horizon Canopy and Tectonic Edge, making it a powerful card nonetheless. Also, it makes Eldrazi Displacer and other eldrazi much worse due to our lack of colorless mana with Blood Moon in play.</p>
                    <hr>
                    <h2>Sideboarding</h2>
                    <div class="muimage">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNpO0mNpzC2Aj6jbrTGj_J_Epa9w3VimApc_nO_LBzyCOnwUZF" class="muimage" alt="Gideon, Ally of Zendikar">
                    </div>
                    <br>
                    <br>
                    <p>Thraben Inspector can come out, along with a small number of three drops, such as Eldrazi Displacer or Blade Splicer. Burrenton Forge-Tenders come in, as they protect our key creatures from Lightning Bolt, block Inferno Titans and Bloodbraid Elves well, and can also save the team from Anger of the Gods. Shalai, Voice of Plenty giving our team hexproof makes the opponent's Lightning Bolt significantly worse, as they cannot easily remove Shalai, Voice of Plenty. I've also enjoyed bringing in planeswalkers on the draw, as they can help grind out a game after stabilizing, but Gideon, Ally of Zendikar is often too slow and clunky on the play. Keep in mind, they are a deck with land destruction and Blood Moon, so hard casting a Gideon is difficult, especially when we have our Thalia, Guardian of Thraben in play. Otherwise, more removal for their threats can come in as well.</p>
                    <hr>
                    <h2>Important Interactions</h2>
                    <div class="muimage">
                        <img src="https://227rsi2stdr53e3wto2skssd7xe-wpengine.netdna-ssl.com/wp-content/uploads/2014/07/blood-moon-620x280.jpg" class="muimage" alt="Blood Moon">
                    </div>
                    <br>
                    <br>
                    <p>As mentioned in a prior section, Flickerwisp can be used to remove their Utopia Sprawl. Flickerwisp can also temporarily turn on our nonbasic lands by blinking Blood Moon, which is valuable when Eldrazi Displacer activations or cycling through a Horizon Canopy is vital to our gameplan.</p>
                
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

