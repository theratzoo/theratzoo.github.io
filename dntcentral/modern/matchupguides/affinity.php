<?php
    include("../../scripts/searchscript.php");
    include("../../scripts/cardlistdb.php");
?>
<?php
    $filename = 'affinity.php';
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

    

        <title>Modern Matchup Guide: Affinity</title>
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
                    <h1>Matchup Guide: Affinity</h1>
                </div>
                  <h2>Matchup Overview</h2>
                  <div class="muimage">
                        <img src="https://cdn.shopify.com/s/files/1/1601/3103/articles/Ornithopter_final_2048x.progressive.jpg?v=1487884817" class="muimage" alt="Ornithopter">
                    </div>
                    <br>
                    <br>
                  <p>Due to the explosive nature of Affinity, we are always playing as the control deck, trying to keep our life total safe while eliminating their main threats and eventually finishing them off with our creatures. The matchup is not as bad as it may seem: while they can kill us very fast, we do have powerful cards both maindeck and sideboard that give us fighting ground. While our taxing plan is not very powerful versus the low curve aggressive deck, our efficient value creatures play a vital role in the matchup.</p>
                  <hr>
                  <h2>Our best cards</h2>
                  <div class="muimage">
                    <img src="https://i.imgur.com/2vxhfCz.jpg" class="muimage">
                  </div>
                  <br>
                  <br>
                  <p>As mentioned above, our threats are more important than our hate bears. Cards like Restoration Angel, Flickerwisp, and Blade Splicer are great in this matchup. The great thing about Blade Splicer is that the 3/3 golem not only has first strike, but is also colorless, making their Etched Champion useless. In addition, Blade Splicer serves as a good clock whenever the opponent has only fliers (we need to finish out the game sooner than later despite being the controlling deck), and Blade Splicer serves as a premium target for Flickerwisp/Restoration Angel. Speaking of the blinkers, both serve important roles in the matchup. Flickerwisp can reset counters on creatures or, with Aether Vial or Eldrazi Displacer, fog an attacker or make a Cranial Plating useless. However, Flickerwisp’s 1 toughness makes it a weak blocker vs their Vault Skirges and creature lands, which is where Restoration Angel shines in the matchup; despite its high mana cost, the four toughness makes it hard to kill in combat. Eldrazi Displacer is interesting here: while the ability is often too slow without a Aether Vial, it does block Etched Champion and makes their attacks worse (eventually). Otherwise, Thalia, Guardian of Thraben’s tax is not irrelevant, especially on the play. Of course, Path to Exile is amazing.</p>
                  <hr>
                  <h2>Our worst cards</h2>
                  <div class="muimage">
                    <img src="https://227rsi2stdr53e3wto2skssd7xe-wpengine.netdna-ssl.com/wp-content/uploads/2016/04/Thraben-Inspector-Shadows-over-Innistrad-Art.jpg" class="muimage" alt="Thraben Inspector">
                  </div>
                  <br>
                  <br>
                  <p>Leonin Arbiter, to no surprise, is at its worst here. Affinity has 0 ways to search their library, and our Ghost Quarters are often Strip Mines due to their low basic land count (stock lists play only a single Mountain). Attacking their mana base is tricky and ineffective, as Darksteel Citadel is indestructible, they get mana off of artifacts like Springleaf Drum and Mox Opal, and very rarely hit 4 lands to turn on Tectonic Edge. A 2/2 is also not a good blocker, as their ground creatures are usually bigger than that. Thraben Inspector suffers the same issues as Leonin Arbiter, but is less bad as it is a slow cantrip that is a mana cheaper. Since Affinity is a fast aggro deck, eliminating too many 1s and 2s is never a great idea. Your worst 3s are either eldrazi like Eldrazi Displacer and Thought-Knot Seer or Blade Splicer, but ultimately they are leagues ahead of the the first 2 cards mentioned here, so only cut a couple when necessary (like on the draw).</p>
                  <hr>
                  <h2>Opponent's best cards</h2>
                  <div class="muimage">
                    <img src="https://vignette.wikia.nocookie.net/gamelore/images/7/75/Arcbound_Ravager.jpg/revision/latest?cb=20140401131635" class="muimage">
                  </div>
                  <br>
                  <br>
                  <p>Their strongest cards are very board-state dependent. For example, if we have multiple golems, we don’t care about an Etched Champion. However, that same card can be game-winning when we lack our colorless creatures. Etched Champion is generally strongest versus the non Eldrazi splashes of D&T, as they lack the colorless Eldrazi and/or Blade Splicer golem token to keep it at bay . Same goes with their fliers and land creatures; without our own flier (or land destruction for the man-lands), those creatures will often outrace us. Ultimately, the two most powerful, must-answer threats for us are Arcbound Ravager and steel overseer. The former transforms the game into a headache, making attacks and blocks awkward, invalidating removal, and threatening blowouts. The latter creature, once the opponent untaps with it, will take over games, making their fliers more threatening to our life total. While Cranial Plating is a powerful card, we often have blockers or ways to deal with it by the time it hits the battlefield. Otherwise, look out for Galvanic Blast; stay out of its range life-total wise, and play around it if possible (albeit its not often we have the luxury to play around a 4 damage spell).</p>
                  <hr>
                  <h2>Sideboarding</h2>
                  <div class="muimage">
                    <img src="https://227rsi2stdr53e3wto2skssd7xe-wpengine.netdna-ssl.com/wp-content/uploads/2014/03/stony-silence-730x280.png" class="muimage" alt="Stony Silence">
                  </div>
                  <br>
                  <br>
                  <p>As mentioned in prior sections, the cards that will most often cut are the Leonin Arbiters and Thraben Inspectors, along with a few three drops if on the draw (as we cannot overload on 3 mana spells). Of course, all artifact hate comes in. When bringing in Stony Silence, it is worth noting that it turns off our Aether Vials and Thraben Inspectors, so trimming a Aether Vial is a viable play depending on your exact configuration. Removal spells can also come in like Dismember and Sunlance. Burrenton Forge-Tender is an interesting one- while they lack red creatures, it can stop a Galvanic Blast from blasting one of our essential creatures. I am currently unsure and would advise against more than one at the moment. Any other spells that are good versus aggressive decks can come in like Auriok Champion, Worship, and Kitchen Finks. Phyrexian Revoker is an amazing card for this matchup, as it can turn off our worst post-board nightmare: Ghirapur Aether Grid. This 3 mana enchantment will not only beat us the majority of times it resolves unanswered, but it will also invalidate our best hate card, Stony Silence On that same note, Pithing Needle comes in as well, as it can name their creature lands in addition to Arcbound Ravager, Steel Overseer, Ghirapur Aether Grid, and Cranial Plating.</p>
                  <hr>
                  <h2>Important interactions</h2>
                  <div class="muimage">
                    <img src="https://img00.deviantart.net/afe1/i/2015/262/c/3/my_version_of_etched_champion_playmat____by_metallichell-d9a4rqb.png" class="muimage">
                  </div>
                  <br>
                  <br>
                  <p>One interaction I cannot stress enough is knowing what cards can beat Etched Champion. Not only is Eldrazi Displacer colorless, but it also has its ability that can stop the champion from attacking. Eldrazi Displacer/Flickerwisp can be used to force the opponent to make a move on an Arcbound Ravager and therefore let us use our removal. When blinking with either, if planning to stop the Signal Pests, hit them before attackers to mitigate damage. Keeping them off of metalcraft temporarily with a Flickerwisp or a Ghost Quarter can make a Galvanic Blast only deal 2 damage or expose their Etched Champion. Using Eldrazi Displacer on Flickerwisp on your end step on their Steel Overseer keeps it from activating ever again. The opponent can use a Welding Jar to save a creature land from Ghost Quarter even if it is not active (so long as they have at least 1 mana available). Don’t forget to attack! The longer the game drags out, the more likely they can find a hoser and win a game that previously seemed unwinnable. While the early game is about staying alive, stabilizing, and then winning with our better late game, that does not mean that they cannot draw out of a board stall, especially when we’re applying no pressure.</p>

<!-- <!—- Can include how I sideboard with my sample list—->-->

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




