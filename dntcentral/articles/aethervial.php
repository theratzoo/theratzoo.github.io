<?php
    include("../scripts/searchscript.php"); //actually works
    
?>
<?php
    include("../scripts/cardlistdb.php"); //does work
?>
<?php
    $filename = 'aethervial.php';
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

    

        <title>Aether Vial 101</title>
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
        <script src="https://deckbox.org/assets/external/tooltip.js"></script>
        <script src="/searchbarscripts.js" type="text/javascript"></script>
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
                    include("../scripts/navbar.php"); 
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
                    <h1>Aether Vial 101</h1>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-4">
                        <img src="https://www.spiderwebart.com/images/art/104393.jpg" class="vialimg" alt="Aether Vial">
                    </div>
                    <div class="col-sm-4">
                        <img src="/images/dnt/aether-vial-art-2.jpg" class="vialimg" alt="Aether Vial">
                    </div>
                    <div class="col-sm-4">
                        <img src="https://cantrip.ru/images/arts/AEther-Vial.jpg" class="vialimg" alt="Aether Vial">
                    </div>

                </div>
                

                <br>
            <h2>General Tips & Tricks</h2>
            <p>Aether Vial is one of the most important cards in Death and Taxes- without it, many of the deck's synergies would be void. Often, Aether Vial is used to power out hatebears and value creatures at a discounted rate, but there are instances where games get tricky and knowing how to properly utilize the one mana artifact is essential to Death and Taxes success. Below are some of the more common Aether Vial tips and tricks that are found in matches.</p>
            <br>
            <h3>Putting Counters on Vial</h3>
            <p>How many counters should be on an Aether Vial? Generally, the answer is three. The single spell that benefits the most from Aether Vial is Flickerwisp (as will be discussed later), so having an Aether Vial on three gives access to that powerful synergy. In fact, there are many cases where just having Aether Vial on three without anything to put into play is good enough; the power of the Flickerwisp bluff can cause opponents to play sub-optimally. In some cases, Aether Vial will either stay on two or go up to four. For the former, a hand with many two drops is one that will keep its Aether Vial initially on two. Additionally, playing in a matchup where two drops are essential to victory may require keeping Aether Vial on two as well. For example, if you already have a Thalia, Guardian of Thraben in play but also have one in hand, keeping Aether Vial on two lets you beat removal/bounce on your Thalia, Guardian of Thraben, as you can simply vial in the new one. In terms of ticking Aether Vial to four, generally it is only done if either your hand is flooded with four drops, or you are lacking the fourth land to play an impactful four drop creature. The main issues with ticking up to four are that Death and Taxes only runs four to six four drop creatures compared to 10+ three drops, plus it generally gives away information to the opponent that you have a four drop in hand. Additionally, the main four drop in non-Eldrazi Death and Taxes, Restoration Angel, already has flash, so there is essentially no benefit for vialing in the angel for non-control matchups.</p>
            <br>
            <h3>Sideboarding Vial</h3>
            <p>While Aether Vial is a very powerful card in Death and Taxes, it almost always the worst card to topdeck at the later stages of a game. However, not all matchups will come down to topdecks; those are the matchups that four Aether Vials are generally wanted post-board. Against slower, grindy decks, trimming an Aether Vial or two can be correct. What I've done is trimming 1-2 Aether Vials on the draw against midrange and control decks, while opting to keep in Aether Vial on the play. While Aether Vial can be really bad against Kolaghan's Command decks like Mardu Pyromancer, I've found the best line of attack is to be more aggressive on the play, hence the full playset of Aether Vials. However, in slower D&T builds, being aggressive against Jund is unfeasible. Other decks that I like to trim Aether Vial against are ones that I bring in Stony Silence. While you won't always draw the enchantment, the non-bo of Aether Vial and Stony Silence is bad enough to warrant a few getting cut. Overall, Aether Vial is generally trimmed against midrange and control, especially on the draw.</p>
            <br>
            <h3>Giving Creatures Flash (General)</h3>
            <p>Having the ability to play any creature at instant speed is a very powerful effect. Typically, the two most common uses for all creatures is to bring in a surprise blocker or put in a creature at the end step to avoid sorcery-speed removal/board wipes.</p>
            <br>
            <h3>Dodging Counters</h3>
            <p>Sometimes the best play is to not play a spell! Against decks with many counters like UW Control or any Legacy blue deck, using Aether Vial to play around counters is a very powerful play. In modern, the counter most common is Cryptic Command. Often it is easy to read when your opponent has one (passing with mana open against a board full of creatures). Dodging counters mostly applies to Legacy Death and Taxes though, as the majority of decks play Force of Will, along with a fair number of Dazes and Counterspells. Some hatebears like Thalia, Guardian of Thraben and Sanctum Prelate can be so impactful that waiting a turn to play them off a vial to play around Force of Will will be better than forcing them to have the counter.</p>
            <br>
            <hr>
            <h2>Specific Card Synergies</h2>
            <h3 id="arbiter">Leonin Arbiter/Thalia, Guardian of Thraben</h3>
            <p>While Leonin Arbiter and Thalia, Guardian of Thraben lack specific advantages of being able to be vialed in, there are cases when they should be brought in at strange times. While counter-intuitive, activating Aether Vial main phase to bring in one of these hatebears is what's most commonly correct. The reason being is the opponent can respond to Aether Vial's activation and simply ignore either hatebear's tax. For example, if you wait until the opponent's endstep to vial in Leonin Arbiter, they may play a fetchland and pass, leaving you in an awkward situation where, upon activating Aether Vial, the opponent will most certainly fetch. Inversely, sometimes it is correct to sandbag a Thalia, Guardian of Thraben/Leonin Arbiter and wait for them to crack that fetchland or tap 2 out of 3 of their mana to cast a Snapcaster Mage. However, what I've found generally is opponents are much better at playing around a flashed in Leonin Arbiter than actually clicking on him to pay the tax, hence why a sorcery-speed Aether Vial activation often makes sense for these two hatebears.</p>
            <br>
            <h3>Blade Splicer</h3>
            <p>The only unique Aether Vial synergy with Blade Splicer is, if the opponent removes the onboard Blade Splicer and plans to trade with the 3/3 golem, then flashing it in before combat damage to give said golem first strike again will get nice value.</p>
            <br>
            <h3>Flickerwisp</h3>
            <p>There are countless interactions with giving a Flickerwisp flash with Aether Vial, so only a few will be covered here. One important one is when to flash in a Flickerwisp. If the goal is to blink a creature with an enter the battlefield trigger (Thraben Inspector, Blade Splicer, Recruiter of the Guard, etc.), then it is best not to wait until endstep, and instead do it on the second main phase. If the goal is to keep the opponent off of mana or an important permanent like a planeswalker, then it is best to vial in Flickerwisp at your end step. Flickerwisp can also be vialed in to save one of your creatures from a removal spell or from chump blocking. While Flickerwisp can also save a creature from a boardwipe, it will die as well, so be aware. Finally, an interesting synergy is that you can hardcast a Flickerwisp to temporarily exile a Stony Silence or Pithing Needle in order to get an activate out of Aether Vial (just use it before their permanent return on your endstep!).</p>
            <p><i><a href="../flickerwisp#vial">more about Flickerwisp + Aether Vial here</a></i></p>
            <br>
            <h3>Phyrexian Revoker</h3>
            <p>The main appeal for flashing in a Phyrexian Revoker is to name a spell with a relevant activated ability before said spell resolves. Of note, after Aether Vial's trigger resolves, the opponent cannot respond to Phyrexian Revoker until it names a nonland card.</p>
            <br>
            <h3>Meddling Mage/Sanctum Prelate</h3>
            <p>Similar to Phyrexian Revoker, these two creatures' abilities cannot be responded to after they enter the battlefield. There are a few specific instances where a flashed in Meddling Mage/Sanctum Prelate can give you an advantage. One of these is miracle: there is a window between revealing the spell and it being cast, so either one of these creatures can stop a miracle spell like Terminus from being cast. Another instance is suspend- suspending a spell like Rift Bolt does not involve casting it; it is only cast when the last time counter is removed. Finally, either creature can be used to stop a card that was tutored for (or revealed off of an Ad Nauseam), so long as the spell is not cast immediately after it was tutored for (as the opponent has priority before you). Some more niche cases include flashing in a Meddling Mage/Sanctum Prelate in response to the cascade trigger against decks that use cascade to only cast a single spell (i.e. Living End or Hypergenesis). In super niche cases, they can also be used to stop yourself from casting a spell off of Hive Mind.</p>
            <br>
            <h3>Hand-Disruption Creatures</h3>
            <p>Aether Vial also works well in conjunction with creatures with Thoughtseize-like abilities. Giving creatures like Thought-Knot Seer, Kitesail Freebooter, and Tidehollow Sculler flash can be used to snag the card drawn by the opponent on their draw step. Similar to Meddling Mage and Sanctum Prelate, vialing in a hand disruption creature can also mess with the opponent's miracles. Other niche cases can come up where having one of these creatures plus an Aether Vial with sufficient counters can be game-winning. An example would be if a Gifts Storm opponent were to Remand their own Grapeshot; after the counter resolves and Grapeshot returns to their hand, a Thought-Knot Seer can be used to snag their win condition out of their hand.</p>
            <br>
            <hr>
            <h2>More Intricate Strategies</h2>

            <h3>Bluffing with an Aether Vial Activation</h3>
            <p>One of the more common tips for Death and Taxes, or really any Aether Vial deck, is to activate Aether Vial on endstep to try and force the opponent to make a suboptimal play, even when you lack a creature. For the majority of games (at least in modern), I've found very little opportunities where making a play like this would actually be beneficial. Most of the time, the opponent can afford to just wait until the creature enters the battlefield, or do something of nearly no value to you like crack a fetchland a little earlier than planned. Of course, there are games that bluffing an activation can really matter. Usually, the times that bluffing can help are when multiple Aether Vials are on the battlefield, so activating the one where you lack a creature can cause the opponent to play, for example, a Lightning Bolt on your Blade Splicer, so you can then use your other Aether Vial to save the creature. Again, most opponents can just wait for the creature to enter the battlefield, so it is rare that an advantage will come from this. In fact, as will be mentioned very shortly, there are times where not activating the Aether Vial will be a much more powerful bluff than activating it.</p>
            <br>
            <h3>Bluffing a Creature</h3>
            <p>As mentioned in the creature section, some creatures, like Leonin Arbiter, are best to be vialed in right away. However, if you lack a Leonin Arbiter, sometimes it is better to pretend to have one. Slower decks with fetchlands or decks that require extensive searching like Tron will fear the Aether Vial on two, especially when you keep said Aether Vial on two. So long as you have sufficient pressure, performing a play like this can cause the opponent to play in a disadvantaged situation. Another powerful creature to bluff is Flickerwisp, as the elemental's ability to save one of your creatures can prevent them from firing off their removal. Of note, the power of bluffing a specific creature does lose credit when you activate your Aether Vial for a different creature, as they will then be able to play around the creature you were bluffing before you get to untap your Aether Vial.</p>
            <br>
            <h3>Slowrolling</h3>
            <p>A third strategy I employ with Aether Vial is similar to the above one, except this time I have the Flickerwisp or Leonin Arbiter. Before considering slow rolling, however, make sure you're in a commanding position- lacking a board presence or pressure can give the opponent time to assemble the cards needed to deploy their strategy (especially worth noting versus control). In other words, sometimes jamming the Flickerwisp on endstep for no value on an empty board is the best line. However, when you have a board full of creatures, keeping that Flickerwisp or Restoration Angel around to protect a key hatebear or to help rebuild after a boardwipe is generally the better play. For example, if you have lethal on board, what good would adding a Flickerwisp to the board be? Instead, as you are ahead, save the Flickerwisp as a reactive spell.</p>
            <br>
            <hr>
            <h3>Specific Instances:</h3>
            <p>Below are some real experiences I've had, some navigated better than others, where utilizing Aether Vial the best possible way was critical to the success of the game.</p>
            <br>
            <h4>Playing Around Vendilion Clique</h4>
            <p>This one was a hard lesson that, by recounting the story, will hopefully save someone the pain of the experience. In a match against UW Control, I had two Aether Vials in play- one on three and one on four, along with a Shalai, Voice of Plenty in hand. My opponent cast a Detention Sphere, targeting one of my creatures. What I should have done was activate my Aether Vial on three, as I lacked a three drop in hand and it could have baited out a response. If the opponent's plan was to Path to Exile my Shalai, Voice of Plenty, this play would have not punished me. However, the opponent cast a Vendilion Clique in response, which punished my play. If I had instead activated the Aether Vial on three first, my creature would have been saved and I'd have a Shalai, Voice of Plenty in play.</p>
            <br>
            <h4>Keeping Vial on 2 for Arbiter with Opponent fetchland in play</h4>
            <p>This is a tale of slow-rolling. I had a Leonin Arbiter in hand and an Aether Vial in play. The opponent had a fetchland in play. Instead of ticking Aether Vial to three, I kept it on two, along with the Leonin Arbiter in play. I also did have a board presence, so holding onto the Leonin Arbiter ended up being valuable, and I was able to get them with the Leonin Arbiter eventually.</p>
            <br>
            <h4>Chaining Flickerwisps vs Tron</h4>
            <p>Many people believe that the way for Death and Taxes to beat Tron is land destruction and/or Leonin Arbiter. Inversely, I've won several games without either; Flickerwisp was all I needed. Using an Aether Vial on your endstep to bring in a Flickerwisp to target their Tron land, and then repeating this for a couple more turns, has won me multiple satisfying games.</p>
            <br>
            <hr>
            <h2>Conclusion</h2>
            <p>Aether Vial is one of the most important cards in Death and Taxes, but also one of the most complex cards in the deck. Hopefully, this has given you some more light to the one mana artifact, but note that there are many other interactions not covered that will come up in games.</p>
            
            <br>
            <br>
            <hr>
            <h2>Further Readings:</h2>
            <div class="row">
                <div class="col-sm-6">
                    <h3>Previous Card 101</h3>
                    <h4><a href="../flickerwisp">Flickerwisp 101</a></h4>
                </div>
                <div class="col-sm-6">
                    <h3>Recommended</h3>
                    <h4><a href="../modern/mulligans#mg" id="mgrec">This Month's Mulligan Game</a></h4>
                </div>
            </div>
            <div class="extra-space"></div>
            </div>
            
            <script>var jArray = <?php echo json_encode($listOfCardNames); ?>;</script>
            <script src="/loadcardhoversettings.js"></script>
            
            <?php
                include("../scripts/footer.php");
            ?>
            <script>var jStr = <?php echo json_encode($lastModDate); ?>;</script>
            <script src="/loadpublishinfo.js" type="text/javascript"></script>
    </body>
</html>


