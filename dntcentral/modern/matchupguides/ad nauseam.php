<?php
    include("../../scripts/searchscript.php");
    include("../../scripts/cardlistdb.php");
?>
<?php
    $filename = 'ad nauseam.php';
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

    

        <title>Modern Matchup Guide: Ad Nauseam</title>
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
                    <h1>Matchup Guide: Ad Nauseam</h1>
                </div>
                <br>
                    
                    <h2>Matchup Overview</h2>
                    <div class="muimage">
                        <img src="/images/modern/matchupguides/ad%20nauseam/ad-nauseam-art.jpg" class="muimage" alt="Ad Nauseam">
                    </div>
                    <br>
                    <br>
                    <p>As a combo deck, the Ad Nauseam matchup is heavily dependent on whether we draw our hate cards or not. Having a clock as well helps, especially since it takes Ad Nauseam more time than other combo decks to set up. All of that being said, the one significant edge we have in the matchup is the opponent’s deck runs almost no interaction preboard (and few in the sideboard), so once a Thalia, Guardian of Thraben sticks, she often will stay throughout the game. Their lack of interaction coupled with the ease of disrupting them both pre and post board makes this a matchup that leans in our favor.</p>
                    <hr>
                    <h2>Our best cards</h2>
                    <div class="muimage">
                        <img src="https://i.imgur.com/xqQ7GSj.jpg" class="muimage" alt="Thalia, Guardian of Thraben">
                    </div>
                    <br>
                    <br>
                    <p>Unsurprisingly, Thalia, Guardian of Thraben is our number 1 pre-board card. Play her on turn two and the opponent is in for a world of pain. While the Ad Nauseam opponent can win through a Thalia, Guardian of Thraben, they often need to play mana spells/ cantrips/ other setup spells before their combo turn, so taxing those can go a long way. In addition, Leonin Arbiter is pretty good here. Despite their lack of fetches, being able to strip mine them is very important, as Ad Nauseam is a combo deck that needs all the mana they can get from their lands. Otherwise, Flickerwisp is nice due to its ability to disrupt our opponent in conjunction with a Aether Vial, Restoration Angel, or another Flickerwisp. While not in all lists, Phyrexian Revoker is a hell of a card here. Early on it can turn off a Pentad Prism or a Lotus Bloom, as well as hit their Lightning Storm or Simian Spirit Guide in the later stages of the game. In Eldrazi builds, Thought-Knot Seer is unsurprisingly great, as taking their Ad Nauseam is very good.</p>
                    <hr>
                    <h2>Our worst cards</h2>
                    <div class="muimage">
                        <img src="https://static1.squarespace.com/static/592dff77e6f2e11e077a7dd4/593ec3119f7456a41ec834bd/593ec372f5e231c05246badb/1497285506956/path_exile_det01.jpg" class="muimage" alt="Path to Exile">
                    </div>
                    <br>
                    <br>
                    <p>Thraben Inspector, as usual, is not exciting here. The main downside to the small dude is the nonbo with Stony Silence that comes in postboard, otherwise he is not too bad preboard. Our three drops tend to be mediocre here, especially Eldrazi Displacer and, to a lesser extent, Blade Splicer. is tricky- while it is good with Flickerwisp, four mana is a large amount against a combo deck, making her viability questionable, especially in builds with additional four drops like Thought-Knot Seer. Path to Exile is an interesting one- while their primary win condition is Lightning Storm, they can alternatively win with a Laboratory Maniac. D&T tends to do a fair job postboard in stopping them from going off with a Lightning Storm (depending on your exact 75 of course), so a Laboratory Maniac win is always a possibility. That being said, at the time of comboing off, they often have multiple Pact of Negations in hand off of their Ad Nauseam, so the odds of being able to cast a removal spell before they win with Laboratory Maniac is very little. Therefore, as of now, I am against Path to Exile and other removal spells in this matchup.</p>
                    <hr>
                    <h2>Opponent's best cards</h2>
                    <div class="muimage">
                        <img src="https://cdnb.artstation.com/p/assets/images/images/006/792/577/large/felipe-bonfim-phyrexian-unlife-final2.jpg?1501267757" class="muimage" alt="Phyrexian Unlife">
                    </div>
                    <br>
                    <br>
                    <p>Besides the obvious (their namesake card, Ad Nauseam), their best cards versus us preboard are their “fogs”. Angel's Grace can give them that needed extra turn to assemble their resources to combo off. Phyrexian Unlife is usually better against us than Angel's Grace, as the card can on occasion buy them more than one extra turn in addition to staying in play to help them combo with Ad Nauseam. Postboard, their disruption is important to note, especially their board wipes, so do not overextend too much!</p>
                    <hr>
                    <h2>Sideboarding</h2>
                    <div class="muimage">
                        <img src="https://i0.wp.com/wethenerdy.com/wp-content/uploads/2017/04/Stony-Silence-banner.jpg?fit=730%2C443" class="muimage" alt="Stony Silence">
                    </div>
                    <br>
                    <br>
                    <p>As mentioned in a prior section, Thraben Inspectors, Wall of Omens, and Path to Exiles can get cut, along with a number of low-impact three drops can get trimmed. On the draw, a Restoration Angel can get cut as well. In terms of cards to bring in, Stony Silence is great here- it shuts down their Pentad Prisms and Lotus Blooms. In conjunction with Thalia, Guardian of Thraben, the opponent will often unable to amass enough mana to combo off. Burrenton Forge-Tender is another key card in the matchup, as it can shut off their Lightning Storm win (assuming they lack interaction). Shalai, Voice of Plenty plays the same role as Burrenton Forge-Tender, except as a 3/4 flier for 4 that can’t be blinked by Restoration Angel. If applicable, storm hate cards like Eidolon of Rhetoric and Ethersworn Canonist are good, as they need to cast at least two spells (both non artifact) to win without Laboratory Maniac. Damping Sphere, however, is less ideal, as its tax is rarely relevant. Worship is another card that can come in, as they cannot typically deal with it easily without a board wipe.</p>
                    <hr>
                    <h2>Important Interactions</h2>
                    <div class="muimage">
                        <img src="https://cdn.pucatrade.com/cards/crops/sm/6484.jpg" class="muimage" alt="Pentad Prism">
                    </div>
                    <br>
                    <br>
                    <p>Flickerwisp is king here in terms of sweet interactions- the most obvious of which is removing counters from a Pentad Prism. In addition, Flickerwisp can kill an opponent by removing a Phyrexian Unlife either while they are comboing or after we bring their life total below one. In addition, in a very rare case, Flickerwisp and Thalia, Guardian of Thraben can “counter” their Lotus Bloom by bringing in a Flickerwisp end of turn (or blinking a Flickerwisp) to keep them off of their only land so when their Lotus Bloom comes off of suspend, they cannot cast it since it costs one colorless mana under Thalia, Guardian of Thraben’s tax and Flickerwisp temporarily exiled their land(s). A less than ideal combo worth noting is Thalia, Guardian of Thraben’s tax with Pentad Prism. Since sunburst only cares about the colors spent and not the CMC of the card, their Pentad Prism can get 3 counters if they cast it with three different colors under Thalia, Guardian of Thraben.</p>
                    
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

