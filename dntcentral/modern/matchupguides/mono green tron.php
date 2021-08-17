<?php
    include("../../scripts/searchscript.php");
    include("../../scripts/decklistdb.php");
    include("../../scripts/listofwebsitecontent.php");
?>
<?php
    $filename = 'mono green tron.php';
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

    <meta name="description" content="Modern matchup guide against Mono-Green Tron for Death and Taxes.">
    <meta name="keywords" content="Magic the Gathering, modern, death and taxes, dnt, modern dnt, ent, eldrazi and taxes, green, karn, tron, matchup, thalia">

        <title>Modern Matchup Guide: Mono Green Tron</title>
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
                setUpDate();
            }
            
          function previewDeckOne(name) {
            var img = document.getElementById('deckPreviewImgOne');
            img.src = `https://gatherer.wizards.com/Handlers/Image.ashx?name=${name}&type=card`;
            img.alt = name;
          }
          function previewDeckTwo(name) {
            var img = document.getElementById('deckPreviewImgTwo');
            img.src = `https://gatherer.wizards.com/Handlers/Image.ashx?name=${name}&type=card`;
            img.alt = name;
          }
          function setUpDate() {
            var d = new Date();
            var month = new Array();
            month[0] = "January";
            month[1] = "February";
            month[2] = "March";
            month[3] = "April";
            month[4] = "May";
            month[5] = "June";
            month[6] = "July";
            month[7] = "August";
            month[8] = "September";
            month[9] = "October";
            month[10] = "November";
            month[11] = "December";
            var n = month[d.getMonth()];
            document.getElementById('mgrec').innerHTML = `${n}'s Mulligan Game`;
          }
        </script>
        <script src="/visited.js"></script>
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
                
            <div class="jumbotron">
                <div class="row">
                    <div class="col-sm-9">
                        <h1>Matchup Guide: Mono Green Tron (updated)</h1>
                    </div>
                    <div class="col-sm-3">
                        <h2><a data-toggle="collapse" data-parent="#accordion4" href="#collapse1d" onclick="location.href='#tldr';">
                    TL;DR</a></h2>
                    </div>
                </div>
                
            </div>
            <div class="row">
                    <div class="col-4 mug-img">
                        <img src="https://i.pinimg.com/originals/34/90/a0/3490a02e45d39fa5cc85c7269931fcee.jpg" class="headImg" alt="Oblivion Stone">
                    </div>
                    <div class="col-4 mug-img">
                        <img src="https://media.wizards.com/images/magic/daily/wallpapers/wp_karnliberated_2560x1600.jpg" class="headImg" alt="Karn Liberated">
                    </div>
                    <div class="col-4 mug-img">
                        <img src="https://magic.wizards.com/sites/mtg/files/image_legacy_migration/magic/images/cardart/AQ/Urzas_Tower3_640.jpg" class="headImg" alt="Urza's Tower">
                    </div>
                </div>
                <br>

                <!--INSERT 2-3 IMAGES SIDE BY SIDE HERE-->
                <br>
                <!--INSERT DECKLIST HERE (that can be collappsed)-->
                <!--INSERT SAMPLE E&T LIST HERE-->
                <!--STOP-->
                <div class="panel-group" id="accordion">
            <div class="panel panel-format">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                    Mono Green Tron Stock List</a>
                  </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                  <div class="panel-body"> 

                <div id="maindeck_a">
                    4 Walking Ballista
                    4 Wurmcoil Engine
                    2 Ulamog, the Ceaseless Hunger
                    4 Karn Liberated
                    2 Ugin, the Spirit Dragon
                    4 Ancient Stirrings
                    4 Sylvan Scrying
                    4 Chromatic Sphere
                    4 Chromatic Star
                    4 Expedition Map
                    3 Relic of Progenitus
                    4 Oblivion Stone
                    1 Blast Zone
                    4 Forest
                    1 Ghost Quarter
                    1 Sanctum of Ugin
                    4 Urza's Mine
                    4 Urza's Powerplant
                    4 Urza's Tower
                </div>
                <div id="sideboard_a">
                    1 Grafdigger's Cage
                    3 Nature's Claim
                    1 Pithing Needle
                    2 Surgical Extraction
                    2 Warping Wail
                    1 Crucible of Worlds
                    2 Thought-Knot Seer
                    2 Thragtusk
                    1 All is Dust
                </div>
            </div>



                </div>



                </div>

              <br>
              <!-- E&T -->
            <div class="panel panel-format">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                    Sample D&T List- Mono-White Eldrazi and Taxes</a>
                  </h3>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                  <div class="panel-body"> 
                    <div id="autolist_b">
                <div id="maindeck_b">
                    4 Leonin Arbiter
                    3 Phyrexian Revoker
                    4 Thalia, Guardian of Thraben
                    4 Blade Splicer
                    4 Eldrazi Displacer
                    3 Flickerwisp
                    3 Restoration Angel
                    4 Thought-Knot Seer
                    4 Path to Exile
                    4 Aether Vial
                    4 Eldrazi Temple
                    1 Field of Ruin
                    4 Ghost Quarter
                    4 Horizon Canopy
                    7 Plains
                    3 Shefet Dunes
                </div>
                <div id="sideboard_b">
                    2 Burrenton Forge-Tender
                    1 Grafdigger's Cage
                    1 Auriok Champion
                    3 Rest in Peace
                    3 Stony Silence
                    2 Dismember
                    1 Gideon, Ally of Zendikar
                    1 Settle the Wreckage
                    1 Worship
                </div>
            </div>

        </div>
                </div>
              </div>
          </div>
          <!--GO-->
                <h2>Matchup Overview</h2>
                <p>Overall, the matchup is favorable for any Death and Taxes variation. Mono-Green Tron's gameplan is hampered by many of Eldrazi and Taxes's cards, especially Leonin Arbiter. Typically, Eldrazi and Taxes is able to stop the opponent from getting their three Urza lands through Leonin Arbiter, Ghost Quarter, Thalia, Guardian of Thraben, and other forms of taxation. After that, the aggressive creatures come in to finish off the opponent. The matchup is one that Eldrazi and Taxes excels at punishing their opponent if they stumble on their gameplan. While there are times where the opponent will assemble Tron on turn three, we can usually disrupt them as long as we are on the play. The matchup gets slower post-board, as Stony Silence and the opponent's creatures slow down the pace of the game. That being said, the post-board games tend to be about as favorable as the preboard one. All in all, Mono-Green Tron is about a 65% favorable matchup for Eldrazi and Taxes.</p>
                <hr>
                <h2>Preboard Specifics</h2>
                <br>
                <h3>How Game 1 Plays Out</h3>    
                
                <p>Game one is highly determined on whether you are on the play or the draw. If on the play, it is easy to disrupt the Tron opponent through hatebears, land destruction, and Flickerwisps. Using these disruptive elements to keep them off of Tron mana and attacking with your creatures is generally how we win game one. Leonin Arbiter plus Ghost Quarter is certainly the strongest way to disrupt the opponent, but simply a turn two Thalia, Guardian of Thraben into a chain of Flickerwisps can be enough. On the draw, however, it is much more difficult depending on the opponent's hand. If the opponent has turn three Tron, then you need to have Ghost Quarter or they get their seven mana. Otherwise, hatebears and other forms of disruption are fast enough.</p>
                <br>
                
                <p>The basic plan of Mono-Green Tron is to assemble "Tron"- get all three Urza lands into play. Once they have an Urza's Mine, Urza's Powerplan, and Urza's Tower in play, they get access to seven mana between the three lands, allowing for explosive plays. The deck tries to consistently assemble Tron on turn three, using cards such as Sylvan Scrying, Ancient Stirrings, Expedition Map, Chromatic Sphere, and Chromatic Star to find the lands. After the opponent assembles Tron, they cast expensive colorless cards to win the game. Karn Liberated, Ugin, the Spirit Dragon, Wurmcoil Engine, Oblivion Stone, Walking Ballista, and Ulamog, the Ceaseless Hunger are the game-winning colorless spells the opponent has access to after they assemble Tron. Therefore, it is Eldrazi and Taxes's mission to stop the opponent from casting their game-winning spells.</p>
                <br>
                
                <p>All that being said, the game is not over if the opponent assembles Tron. I've won plenty of games where the opponent gets their Tron lands, but they lack threats to win the game. Wurmcoil Engine and Ulamog, the Ceaseless Hunger are answerable with Path to Exile. The three most problematic cards are the two planeswalkers (Ugin, the Spirit Dragon and Karn Liberated) and Walking Ballista. Thankfully, all of these cards can be answered by Phyrexian Revoker. In addition, simply attacking the planeswalkers can be enough. Often times, the Tron opponent keeps a hand without threats and hope to find them after they assemble Tron. This is the matchup where I've won many games that should not have been won just by turning creatures sideways while the opponent draws air. While this is not the most common way for game one to play out, there are cases where the opponent assembles Tron but does not have the proper resources to finish the game.</p>
                <br>
                <h3>Death and Taxes's Cards in the Matchup</h3>
                <br>
                <div class="row">
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Thalia,+Guardian+of+Thraben&type=card" class="cardImgMUG" alt="Thalia, Guardian of Thraben">
                    </div>
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Leonin+Arbiter&type=card" class="cardImgMUG" alt="Leonin Arbiter">
                    </div>
                </div>
                <br>
                
                <p>Thalia, Guardian of Thraben is an excellent card against Tron. If played on turn two on the play, she can easily stop them from assembling the turn three Tron, as Sylvan Scrying would cost three mana. In addition, as the opponent only has eight creatures in their main deck and 19 lands, the majority of their deck is taxed by Thalia, Guardian of Thraben (33 cards). Chromatic Sphere and Chromatic Star costing an additional mana can be backbreaking, especially if the opponent lacks Tron. Even if the opponent manages the turn three Tron, they cannot cast Karn Liberated with Thalia, Guardian of Thraben in play. Without a fourth Tron land, they cannot cast Ugin, the Spirit Dragon on turn four as well. All in all, Thalia, Guardian of Thraben's tax does a great job at disrupting the opponent and preventing their linear plan from flowing smoothly.</p>
                <br>
                <p>Leonin Arbiter is our second best card in game one. If played on turn two, the opponent will have to either answer the hatebear or find their Tron lands without tutoring them. Leonin Arbiter does not technically prohibit Expedition Map and Sylvan Scrying from getting the land, but it forces the opponent to wait until turn four to get the land. By then, they are usually dead or further taxed to the point that Tron is either too late or not possible due to another card. Leonin Arbiter's tax also gets amplified by many of Eldrazi and Taxes's cards, ultimately hindering Tron from getting their necessary lands. The one issue with Leonin Arbiter is that he can be too late if played turn two on the draw. That being said, he is fast enough the majority of the games, making him a clear staple. Due to Leonin Arbiter's strength, it is important to protect him (especially post-board). Overall, Leonin Arbiter is a great card against Tron as it taxes their primary game plan and synergies very well with our other cards to further tax their mana base.</p>
                <br>
                <div class="row">
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Phyrexian+Revoker&type=card" class="cardImgMUG" alt="Phyrexian Revoker">
                    </div>
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Blade+Splicer&type=card" class="cardImgMUG" alt="Blade Splicer">
                    </div>
                </div>
                <br>
                <p>Phyrexian Revoker is one of our best cards against Tron. It is a two-drop that turns off the activated abilities of the opponent's artifacts and planeswalkers. The beauty of Phyrexian Revoker is its versatility. It can be played on turn two naming Expedition Map, Chromatic Star, or Chromatic Sphere. In addition, if the opponent achieves Tron, Phyrexian Revoker can name their planeswalker. Phyrexian Revoker can also shut down the opponent's main deck removal spells, Walking Ballista and Oblivion Stone. Generally, the best cards to name are the most impactful spells that the opponent has on board or guaranteed in hand. If the Tron player is looking for their Urza's Tower, then it is best to name Expedition Map or a cantrip artifact. If they are playing a planeswalker next turn, name it! If you are ahead and are unsure of a card to name, pick the opponent's best out. Oblivion Stone is usually their out if facing a large board, as Ugin, the Spirit Dragon does not kill our colorless creatures. Overall, Phyrexian Revoker's flexibility in shutting down both cheap and expensive spells makes it a must-have against a Tron meta.</p>
                <br>
                <p>Blade Splicer is a fine attacker. Four power for three mana is an efficient way to close out a game. Leonin Arbiter and the other hatebears are necessary to stop Tron's game plan, but finishers are required as well or else the opponent can find a board wipe or their Tron land. Blade Splicer is a great attacker for two particular reasons (outside of stats)- it is great to blink, and the Golem token dodges Ugin, the Spirit Dragon's minus ability. All in all, Blade Splicer is a solid threat to close out games against Mono-Green Tron.</p>
                <br>
                <div class="row">
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" class="cardImgMUG" alt="Flickerwisp">
                    </div>
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Restoration+Angel&type=card" class="cardImgMUG" alt="Restoration Angel">
                    </div>
                </div>
                <br>
                <p>Flickerwisp is strong if used to its full potential. As a 3/1 flyer for three mana, Flickerwisp is underwhelming. However, in conjunction with other blink creatures or an Aether Vial, Flickerwisp provides key disruption against the opponent. As long as Flickerwisp can enter the battlefield on your end step, it can take the opponent off of one of their Tron lands, slowing them down considerably for a turn. In addition, if blinked multiple times, Flickerwisp can lock the opponent off of their Tron mana. One way to keep the Flickerwisp chain going is Restoration Angel. Otherwise, Restoration Angel is a solid offensive creature against Tron. While it is expensive in mana, Restoration Angel flies over almost every creature in Mono-Green Tron. Casting a Restoration Angel on the opponent's end step is a good way to finish off a planeswalker. All in all, both fliers are solid creatures, especially when Flickerwisp can work with other spells to take the opponent off of their Tron mana.</p>
                
                <br>
                <div class="row">
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Thought-Knot+Seer&type=card" class="cardImgMUG" alt="Thought-Knot Seer">
                    </div>
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="cardImgMUG" alt="Eldrazi Displacer">
                    </div>
                </div>
                <br>
                <p>Thought-Knot Seer can be a valuable card against Mono-Green Tron, as long as you can play it early on. Thought-Knot Seer can help keep them off Tron, by exiling an Expedition Map or Sylvan Scrying from their hand. However, in order to do this, Thought-Knot Seer would have to be played very early on, so it is most common for it to take away one of their payoff spells. Removal spells such as Spacial Contortion and Dismember are also common targets for Thought-Knot Seer's ability. Even if it cannot take a high-impact card, Thought-Knot Seer provides a useful body. It dodges Spacial Contortion and Ugin, the Spirit Dragon's abilities. The other Eldrazi in Mono-White Eldrazi and Taxes, Eldrazi Displacer, is about as strong as Thought-Knot Seer in this particular matchup. Eldrazi Displacer's blink ability can stop the opponent's Ulamog, the Ceaseless Hunger, Worldbreakers, and Wurmcoil Engines from attacking or blocking. Eldrazi Displacer can also get rid of Wurmcoil Engine and Thragtusk tokens. And on top of that, as it is a colorless creature, Eldrazi Displacer dodges colorless-only removal, such as Ugin, the Spirit Dragon's minus x and All is Dust. Similar to Thought-Knot Seer, Eldrazi Displacer is a fine creature to attack the opponent with. All in all, both Eldrazi are strong spells against Mono-Green Tron, albeit a little niche relative to their usefulness.</p>
                <br>
                
                <br>
                <div class="row">
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Ghost+Quarter&type=card" class="cardImgMUG" alt="Ghost Quarter">
                    </div>
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Field+of+Ruin&type=card" class="cardImgMUG" alt="Field of Ruin">
                    </div>
                </div>
                <br>
                <p>While I do not typically discuss the lands in matchup guides, these two lands are impactful enough against Tron that they warrant a discussion. Ghost Quarter is the best card against Tron in the whole matchup. This card allows Eldrazi and Taxes stop the opponent from achieving turn three Tron when we are on the draw. Furthermore, Ghost Quarter plus Leonin Arbiter significantly hurts the opponent. Not only are they losing a Tron land, but they are also getting farther away from paying Leonin Arbiter's tax. Ghost Quarter (with Leonin Arbiter) also makes it difficult for the opponent to hard cast their expensive spells. Even though it is rare to see a hard cast planeswalker, there are plenty where the fifth land for activating Oblivion Stone is achieved. Field of Ruin does a similar job to Ghost Quarter, but it costs two more mana to activate and it gets us a land if Leonin Arbiter is not in play. All in all, both lands are crucial to disrupting the Tron opponent's game plan.</p>


                <br>
                <div class="row">
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Aether+Vial&type=card" class="cardImgMUG" alt="Aether Vial">
                    </div>
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Path+to+Exile&type=card" class="cardImgMUG" alt="Path to Exile">
                    </div>
                </div>
                <br>
                
                <p>Aether Vial is very good with certain cards. As mentioned above, Aether Vial can lead to plays such as bringing in an unexpected Leonin Arbiter or flashing in Flickerwisp to get rid of a Tron land. Path to Exile is more of a necessary evil than one might think. Aether Vial does get worse post-board, as Stony Silence is a clear nonbo with the one-mana artifact. Tron has a few large threats for Path to Exile in game one- Wurmcoil Engine and Ulamog, the Ceaseless Hunger. In addition, creatures such as Thought-Knot Seer, Thragtusk, and Worldbreaker come in post-board (or are played in some maindecks). There are many targets for Path to Exile, but it is still not a stellar card in the matchup. The goal in this matchup is to both disrupt the opponent and kill them as soon as possible. Usually, you want the opponent to be killed before the creatures hit the battlefield. Therefore, the Path to Exiles end up being counterintuitive to our strategy, as they are slowing us down. That being said, Path to Exile is necessary against Mono-Green Tron because Eldrazi and Taxes cannot beat a Wurmcoil Engine or Ulamog, the Ceaseless Hunger in most scenarios.</p>
                <br>

                <p>In terms of other Death and Taxes cards that are not necessarily in this decklist, Chalice of the Void is not a bad way to tax the opponent, as they have Ancient Stirrings, Chromatic Sphere, Chromatic Star, and Expedition Map preboard. Hatebears to tax Mono-Green Tron are always valuable, such as Tidehollow Sculler, Spell Queller, Meddling Mage, and Lavinia, Azorius Renegade. Finally, very specific removal spells are good. In order for removal spells to be good against Mono-Green Tron, they have to exile any creature or remove any nonland permanent. The only card played in Death and Taxes maindecks that fits this criteria is Deputy of Detention.</p>
                <br>
                <div class="row">
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Oblivion+Stone&type=card" class="cardImgMUG" alt="Oblivion Stone">
                    </div>
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Walking+Ballista&type=card" class="cardImgMUG" alt="Walking Ballista">
                    </div>
                </div>
                <br>
                
                <h3>Cards to Look Out for- Mono-Green Tron</h3>
                <p>In the preboard game, there are three types of cards that Mono-Green Tron have- their Tron lands and cards to help them find said lands, their threats, and their interaction. All three categories include cards to be aware of. The primary manabase cards to look out for are their lands and their ways to search them up. Eldrazi and Taxes excels at disrupting lands and search spells, so this is a great way to attack their strategy (more on this in the upcoming sections). Looking at the second category, any of their threats can be dangerous to Eldrazi and Taxes, depending on the situation. As is expected, their planeswalkers are stronger when we lack creatures, and their creatures are better when we lack interaction for them. The final category is more limited in game one but still worth discussing. The card here that is one of Mono-Green Tron's best cards preboard is Oblivion Stone. It is an expensive way to wipe the board, but it can be down at the end of our turn, leaving an open board for a planeswalker to take over the game. Another card that is very strong against Eldrazi and Taxes is Walking Ballista. That creature can easily take out a hatebear or two. Plus, with Tron mana, it can kill every creature we control while staying alive. Therefore, Walking Ballista is the card you typically want to name with a Phyrexian Revoker (assuming no other knowledge is available). In essence, their cards can all be problematic depending on the situation. In general, be aware of their removal options, and play around accordingly. Their other cards can become very threatening, but Eldrazi and Taxes have clear ways to deal with those spells.</p>
                <br>
                <br>
                
                <h3>Strategies and Interactions</h3>
                
                <h4>Leonin Arbiter Interactions</h4>
                <p>Leonin Arbiter is one of the most valuable cards against Mono-Green Tron. The primary interactions are that he makes Ghost Quarter into a Strip Mine if the opponent lacks removal or mana and that he taxes Expedition Map and Sylvan Scrying. There are, however, a few other important interactions and strategies for Leonin Arbiter that are not as relevant against other decks. One interaction is that, if Leonin Arbiter is blinked after his tax is paid, the opponent will have to pay an additional two mana to search their library that turn. Therefore, Eldrazi Displacer and Restoration Angel can be used to deny or destroy Tron lands. It is also important to know when Leonin Arbiter should be Aether Vialed in. In this particular match, Leonin Arbiter does not need to be Aether Vialed in before the opponent's turn (as they lack fetch lands). Saving him until they tap too low with a Ghost Quarter on your side or they attempt to search for a land is a good strategy. Bluffing is yet another way to abuse Leonin Arbiter. By keeping your Aether Vial untapped and on two, the opponent will likely assume that you are sandbagging a Leonin Arbiter. Therefore, without even having it in hand, you can stop the opponent from tapping too low or using their search spell. Finally, if you suspect that the opponent has removal in hand, try to bait it out with another creature before playing Leonin Arbiter.</p>
                <!--Blinking him, vialing him in (when to do it and also when to not), leonin arbiter when opponent has 2 or more lands untapped, leonin arbiter when op might have removal-->
                <br>
                
                <h4>Ghost Quarter- Using it Effectively</h4>
                <p>Ghost Quarter is Eldrazi and Taxes's primary way to interact with the opponent's lands. Obviously, Ghost Quarter is best paired with Leonin Arbiter to take the opponent off of a valuable Tron land. Using it properly, however, can get convoluted. First of all, it is important to know which Tron land to take out. The best advice I can give is to take out the one that the opponent is less likely to have another one in hand. That is usually the one that they get with their Expedition Map/Sylvan Scrying. Also, the Tron land that the opponent plays last is sometimes the one that they have less of. If you have no idea whatsoever, it is generally best to just take out Urza's Tower, as it produces one more mana than the other two Tron lands (which can be relevant in the late game for casting spells such as Walking Ballista). The next point to discuss is when to target non-Tron lands. There will be games where the opponent will have Tron no matter what, or they will not be helped much with Tron. Other times, the opponent has no Tron lands in play but you have a Leonin Arbiter and untapped Ghost Quarter itching to be used. In those cases, it is best to target their Forests only if it will cut them off of mana. If the opponent has more than one or two Forests in play, then there is no point in targetting it. If the opponent has only one in play, it can be quite valuable to take it down. Besides Forests, Mono-Green Tron's other nonbasic lands can be targets depending on the situation. Blast Zone and Sanctum of Ugin are lands that are better to remove in the later stages of the game after the opponent has exhausted their resources and is looking to topdeck a powerful spell. Ghost Quarter is not really worth getting rid of, as none of your lands are valuable besides the ones that would be used to get rid of the Ghost Quarter. There are times that it will be necessary to use Ghost Quarter without Leonin Arbiter's effect. As painful as it is, you must use Ghost Quarter if the opponent 100% has Tron the next turn. The best-case scenario when Ghost Quartering without a Leonin Arbiter is that either you already have a creature in play or you cast an Aether Vial beforehand to make up for the lost land. All in all, make sure to consider all options before sacrificing Ghost Quarter- it is a valuable asset that must be used properly to win against Mono-Green Tron.</p>
                

                <br>
                <h4>General Tips and Tricks</h4>
                <p>In general, the Eldrazi and Taxes player's goal is to win the game before the opponent assembles Tron. This is done through disrupting their mana (Leonin Arbiter, Ghost Quarter, Thalia, Guardian of Thraben, etc.) along with playing creatures to attack them. Flickerwisp is a fair option at disrupting their plan. Alongside Aether Vial, Restoration Angel, and/or Eldrazi Displacer, Flickerwisp's ability can be used to keep the opponent off of one of their Tron lands. Get multiple blink effects put together and you can essentially keep one of the opponent's lands permanently exiled. The only issue with this plan is that Oblivion Stone ruins it.</p>

                <br>
                <hr>
                <h2>Postboard Specifics</h2>
                <br>
                <h3>Sideboarding</h3>
                <br>
                <div class="row">
                    <div class="col-3">
                        <h4>In:</h4>
                    </div>
                    <div class="col-9">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Stony+Silence&type=card" class="cardImgMUG" alt="Stony Silence">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Stony+Silence&type=card" class="cardImgMUG" alt="Stony Silence">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Stony+Silence&type=card" class="cardImgMUG" alt="Stony Silence">
                    </div>
                </div>
                <p>Against Mono-Green Tron, interaction against their strategy is what comes in. For this particular list of Eldrazi and Taxes, the only card in the sideboard that does the job is Stony Silence. It turns off many of their cards- Expedition Map, Chromatic Sphere, Chromatic Star, Oblivion Stone, and Walking Ballista. Stony Silence is a nonbo with Aether Vial, but the upside more than outweighs this minor setback. Stony Silence simply turns off too many of Mono-Green Tron's cards to not bring it into the maindeck.</p>
                <br>
                <p>In terms of cards not in this decklist that can be brought in, strong removal options are auto-includes. Oblivion Ring and Leonin Relic-Warder are examples of cards that fulfill that requirement. The reason that Dismember does not make the cut is that it cannot remove a Wurmcoil Engine, Worldbreaker, or Ulamog, the Ceaseless Hunger.</p>
                <br>
                <div class="row">
                    <div class="col-3">
                        <h4>Out (Play and Draw):</h4>
                    </div>
                    <div class="col-9">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Aether+Vial&type=card" class="cardImgMUG" alt="Aether Vial">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Aether+Vial&type=card" class="cardImgMUG" alt="Aether Vial">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Restoration+Angel&type=card" class="cardImgMUG" alt="Restoration Angel">
                        

                    </div>
                </div>
                <p>Aether Vial is an obvious card to cut from the maindeck- it is a nonbo with Stony Silence. That being said, a turn one Aether Vial is still quite powerful. In addition, the opponent typically brings in a few Nature's Claims, making Stony Silence less likely to stay on the board. Or, better yet, a turn one Aether Vial can bait out a Nature's Claim, leaving Stony Silence uncontested. Anyway, all that being said, two Aether Vials get cut from this particular decklist. The final card that is cut is a single Restoration Angel. It is a weaker four-drop than Thought-Knot Seer, and getting to four mana is difficult against Mono-Green Tron, as you will be using Ghost Quarters and Field of Ruins to take the opponent off of their lands.</p>
                
                <br>
                <h4>What the Opponent Brings In</h4>
                
                <div class="row">
                    <div class="col-12">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Nature's+Claim&type=card" class="cardImgMUG" alt="Nature's Claim">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Pithing+Needle&type=card" class="cardImgMUG" alt="Pithing Needle">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Warping+Wail&type=card" class="cardImgMUG" alt="Warping Wail">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Crucible+of+Worlds&type=card" class="cardImgMUG" alt="Crucible of Worlds">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Thought-Knot+Seer&type=card" class="cardImgMUG" alt="Thought-Knot Seer">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Thragtusk&type=card" class="cardImgMUG" alt="Thragtusk">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=All+is+Dust&type=card" class="cardImgMUG" alt="All is Dust">
                    </div>
                </div>
                <p>The primary cards that Mono-Green Tron bring in against Eldrazi and Taxes are interaction for hate cards and additional threats. Nature's Claim is a card that comes in mainly in anticipation for our Stony Silences. Nature's Claim also answers the artifacts in Eldrazi and Taxes, such as Aether Vial and Blade Splicer tokens, buying the opponent time to get their game-winning threats into play. Plus, Nature's Claim can always target one of their own artifacts to grant them four life. Pithing Needle is usually meant to protect their Tron lands by naming Ghost Quarter. It can also name another utility land such as Horizon Canopy or turn off Aether Vial, depending on the situation. Warping Wail is probably the weakest card for this particular iteration to bring in, but it is still a card to be aware of. Countering a sorcery spell will not happen much, but Warping Wail's other two modes are strong. The opponent can either create a 1/1 that can chump block or ramp them a bit or get rid of a creature with power or toughness one or less. This gets rid of many Eldrazi and Taxes creatures, including Thalia, Guardian of Thraben and Flickerwisp. Crucible of Worlds is another anti Ghost Quarter card. Both Thought-Knot Seer and Thragtusk are potent threats that can be reasonably cast without Tron. Plus, they are hard for Eldrazi and Taxes to deal with. Thought-Knot Seer can easily get rid of our only removal spell in hand, while Thragtusk is full of value. Both are also excellent blockers, stopping our smaller creatures from getting in vital damage through. Finally, All is Dust servers as another top-end card that gets rid of the majority of Eldrazi and Taxes's threats. Unless the opponent is at a low life-total, a resolved All is Dust is usually game over for the Eldrazi and Taxes's player. Similar to Gifts Storm, Tron cannot bring in too many cards- almost every card in their main deck works helps their gameplan. Therefore, for this particular list, I would expect the opponent to not bring in Warping Wail and all three Nature's Claims.</p>
                <br>
                <h3>How the Matchup Plays Out Post-board</h3>
                <br>
                <p>Like many other matches, the Mono-Green Tron post-board games slow down relative to game one. With more interaction in both players' decks, the games will take longer on average. This means that it is still important to play aggressively, but playing your taxing spells will not be as punishing. Casting a Stony Silence on turn two without a threat already in play is usually correct, especially if you are on the play, as it can easily slow the opponent down a turn or two. In the post-board games, removal becomes much more valuable, as threats such as Thought-Knot Seer and Thragtusk enter the opponent's deck. Likewise, your fliers will be helpful at closing out the game. The fundamentals of the matchup do not change though- prevent the opponent from hitting Tron and attack them hard. The main differences are that both sides have cards to stall the other player, and the opponent has threats that can be reasonably cast, further necessitating an aggressive playstyle. The matchup is still favorable post-board, but it can be a bit trickier due to their new threats and interaction.</p>
                <br>
                <hr>
                
                <h3>Conclusion</h3>
                <p>All in all, Mono-Green Tron is a favorable matchup for Eldrazi and Taxes. Many of Eldrazi and Taxes's cards line up well against Mono-Green Tron's game plan. Leonin Arbiter and Ghost Quarter, in particular, ruin their plan, while the threats and other hate spells further strain the deck. Postboard, both sides get added interaction. Mono-Green Tron also gets extra threats, which can buy them the valuable time they need to cast their game-winning spells. The post-board games do get more difficult, but it is still favorable. Overall, the matchup is more of a coin flip than other Modern matchups, but Eldrazi and Taxes can win on the draw easier than Mono-Green Tron can.</p>
                <br>
                <div class="panel-group" id="accordion4">
                        <div class="panel panel-format">
                        <div class="panel-heading">
                          <h3 class="panel-title">
                            <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion4" href="#collapse1d" id="tldr">
                            TL;DR- Mono-Green Tron Matchup</a>
                          </h3>
                        </div>
                        <div id="collapse1d" class="panel-collapse collapse">
                          <div class="panel-body">
                             
                              <p>Mono-Green Tron is a favorable matchup for Eldrazi and Taxes because of Eldrazi and Taxes's disruption against the opponent's game plan. Taxing the opponent's mana base is important early on, but it is equally important to kill the opponent before they can simply cast their expensive spells. The first game is heavily based on whether you win or lose the die roll. If you go first, your hate bears will disrupt before the opponent can assemble Tron. Otherwise, they will be a turn too slow unless the opponent does not have turn three Tron. Still, it is easier to win on the draw as Eldrazi and Taxes than for Mono-Green Tron to win on the draw, due to how well Eldrazi and Taxes's cards line up against Tron. Leonin Arbiter and Ghost Quarter are especially valuable cards, but the aggressive creatures like Blade Splicer plus the other hatebears like Thalia, Guardian of Thraben and Thought-Knot Seer help Eldrazi and Taxes tax and terminate the opponent.</p>
                              <br>
                              <p>When sideboarding, bring in disruptive spells and strong answers to Tron's game plan. Stony Silence is an auto-include, as it turns off many artifacts in their deck. Spells that can remove artifacts, enchantments, or any creature can be brought in as well, such as Oblivion Ring and Leonin Relic-Warder. The cards to cut include Aether Vials, as they do not work well with Stony Silence, along with one four-drop (usually Restoration Angel). The post-board games are a bit slower than game one, as both sides get access to more interaction. In addition, Mono-Green Tron has a few extra threats, such as Thought-Knot Seer and Thragtusk, which can further drag out games. Path to Exile, therefore, becomes more valuable to deal with the new threats. The core gameplay is still there, however- disrupt the opponent early on, taking them off of Tron, then playing creatures to kill them before they get to their expensive win conditions.</p>
                          </div>
                        </div>
                      </div>      
              </div>
                <br>
                <hr>
                <h4>Additional Content</h4>
                <div id="additional-content">

                </div>
                <br>
                <hr>
                <br>
                <h2>Recommended:</h2>
                <div id="recommended">
                </div>
            <div class="extra-space"></div>
            </div>
            
            <script>var dbArray = <?php echo json_encode($listOfLists); ?>;</script>
            <script src="/autolists/autolist_a.js"></script>
            <script src="/autolists/autolist_b.js"></script>
            <script>var jArray = <?php echo json_encode($listOfCardNames); ?>;</script>
            <script src="/loadcardhoversettings.js"></script>
            <script>var listOfTitles = <?php echo json_encode($listOfTitles); ?>;</script>
            <script>var listOfDescriptions = <?php echo json_encode($listOfDescriptions); ?>;</script>
            <script>var listOfLinks = <?php echo json_encode($listOfLinks); ?>;</script>
            <script src="/additionalcontent.js"></script>
            <script src="/recommender.js"></script>
            
            <?php
                include("../../scripts/footer.php");
            ?>
            <script>var jStr = <?php echo json_encode($lastModDate); ?>;</script>
            <script src="/loadpublishinfo.js" type="text/javascript"></script>

    </body>
</html>
