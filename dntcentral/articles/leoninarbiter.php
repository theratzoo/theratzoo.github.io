<?php
    include("../scripts/searchscript.php"); //actually works
    
?>
<?php
    include("../scripts/cardlistdb.php"); //does work
?>
<?php
    $filename = 'leoninarbiter.php';
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

    

        <title>Leonin Arbiter 101</title>
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
                <div class="row">
                    <div class="col-sm-7">
                        <div class="jumbo-tron">
                    <h1>Leonin Arbiter 101</h1>
                </div>
                    </div>
                    <div class="col-sm-4">
                        <img src="/images/dnt/leonin-arbiter-art.jpg" class="arbiterImg" alt="Leonin Arbiter">
                    </div>

                </div>
                
                <br>
                <h2>General Tips & Tricks</h2>
                <p>Leonin Arbiter is one of Death and Taxes's most powerful hatebears. A two mana 2/2 is pathetic in modern, but its other ability is very powerful. Making fetchlands cost two mana (or more if multiple Leonin Arbiters are in play) is huge in a fast, mana-intensive format. In addition, turning our four Ghost Quarters into Strip Mines is really good, as Strip Mine is a very good card. Below are some of the most common interactions involving Leonin Arbiter, aka Cat Jesus.</p>
                <br>
                <h3>Building Death and Taxes</h3>
                <p>While not a gameplay tip, it is worth discussing the drawback to playing Leonin Arbiter in your deck. The easiest rule to go by is to not play any cards that involve searching the library in your deck (excluding land-destruction lands like Ghost Quarter and Field of Ruin of course). The lack of fetch lands, while not a problem in mono-white D&T, makes it more difficult to splash colors. While splashes of Death and Taxes are very viable, they are less consistent than they would be if they had the ability to jam 2 playsets of fetchlands. The one card that is an exception to this rule is Weathered Wayfarer. The reason being is the card is very powerful on its own, and often serves as "Leonin Arbiter number 5" since it taxes the opponent's manabase by grabbing lands like Tectonic Edge.</p>
                <br>
                <h3>When to deploy Leonin Arbiter</h3>
                <p>A lot of the time it feels intuitive to just jam Leonin Arbiter on turn two, but there are times where it is best to hold off. If you're casting Leonin Arbiter on turn two with a Ghost Quarter in play, you are often telegraphing your gameplan to the opponent, giving them the opportunity to play around Leonin Arbiter. However, if you were to hold onto Leonin Arbiter for a turn, then it would be much more likely that you could surprise them with it and get immediate value off of your Ghost Quarter. The deploy time gets even more convoluted when Aether Vial is put into the picture. It feels best often to try and get the opponent by vialing in Leonin Arbiter, but there is a fair chance the opponent will play around it. More on Leonin Arbiter + Aether Vial can be found <a href="aethervial#arbiter">here in Aether Vial 101</a></p>
                <br>
                <h3>When to Ghost Quarter</h3>
                <p>The last thing you want happening is for your Leonin Arbiter to be Lightning Bolted in response to you Ghost Quartering the opponent. Sometimes, it is better to play around removal, but other times you simply cannot afford to play around a Lightning Bolt. There are also times where forcing them to pay the two mana for Leonin Arbiter is worth it simply to deny the opponent mana. It is often best to use Ghost Quarter on upkeep in this case. In addition, sometimes the luxury of waiting for the opponent to tap out is unavailable against certain decks like Tron. </p>
                <br>
                <h3>Leonin Arbiter's Ability</h3>
                <p>The most important thing worth noting regarding Leonin Arbiter's ability is it <i>cannot</i> be responded to. However, in order for the opponent (or yourself) to pay for it, it must be payed <i>before</i> the library is searched. Unlike taxes like Thalia, Guardian of Thraben or Ghostly Prison, Leonin Arbiter's tax needs to be paid ahead of time, or else the player will be unable to search their library. Because of that, we will have priority after they paid (but not in response to them paying) but before they search, which can lead to some interesting interactions...</p>
                <hr>
                <h2>Advanced Strategies</h2>
                <br>
                <h3>Leonin Arbiter + Restoration Angel/Eldrazi Displacer</h3>
                <p>An interesting interaction is how Leonin Arbiter interacts with being blinked by either Restoration Angel or Eldrazi Displacer. Assuming the opponent paid for the two mana for Leonin Arbiter, if he were to be blinked by either of the two above-mentioned creatures, the opponent would be forced to pay an additional two mana before they let their search-ability/spell resolve, else they cannot search their library. This is because a new instance of Leonin Arbiter is entering the battlefield after it is blinked, which forgets that the opponent already paid two mana for it. Just remember to wait until the opponent pays for the first Leonin Arbiter before casting that Restoration Angel!</p>
                <br>
                <h3>When you don't need to wait for Leonin Arbiter</h3>
                <p>There are some decks that waiting for a Leonin Arbiter before activating Ghost Quarter is unnecessary. The first deck worth noting is Tron; sometimes you have to Ghost Quarter a tron land to stop a turn three Karn Liberated. Similarly, problematic lands like Azcanta, the Sunken Ruin, Gavony Township, and creature lands often need to be blown up immediately. The other time to Ghost Quarter without hesitation is against decks that run few to no basic lands. While the first Ghost Quarter isn't always a Strip Mine, subsequent ones often are, and can be game winning. Decks like Affinity, Suicide Zoo, Humans, and BR Bridgevine run 1-2 basic lands. Knowing the count of basic lands is very important against decks with 3-4 basics as well; I've used naked Ghost Quarters to mana screw a BR Hollow One opponent before, despite their basic land count being above two.</p>
                <br>
                <hr>
                <h2>Sideboarding Leonin Arbiter</h2>
                <br>
                <h3>When to keep him in</h3>
                <p>Leonin Arbiter is intuitively best against decks with fetch lands and worst against decks without fetchlands. However, there are decks without a single tutor spell/land where Leonin Arbiter is great against, and others with tons of fetches that Leonin Arbiter is bad against. Leonin Arbiter shines against decks that actually <i>care</i> about his tax. Decks that require many lands like Jund, UWx Control, and Mardu Pyromancer all need their land drops to function well. Combo decks are also in need of mana; while Ad Nauseam lacks fetches, it cannot function without mana, which Leonin Arbiter plus Ghost Quarter can help eliminate said mana. Gifts Storm is a deck that, while not caring too much about its lands, has the namesake card Gifts Ungiven, which requires library-searching to use. Some aggressive decks care about Leonin Arbiter more than others; it really depends on how fast the deck is and whether you're on the play or draw. On the play, trying to Strip Mine a BR Hollow One opponent is much easier than on the draw, as the opponent won't care as much if they have a bunch of 4/4s and 5/5s in play. Collected Company decks are also strategies that Leonin Arbiter is good against, as they often run Chord of Calling and Knight of the Reliquary in addition to several fetchlands. The decks that Leonin Arbiter is the best against are the ones where lands and tutoring for said lands is the strategy of the deck. Tron and Titan Shift are two archetypes that struggle the most against Cat Jesus.</p>
                <br>
                <h3>When to take him out</h3>
                <p>I've found that the decks that care the least about Leonin Arbiter are the aggressive strategies lacking fetch lands like Affinity and Humans. The latter is more difficult though, as there are few cards to bring in against Humans, so sometimes a few Leonin Arbiters remain as a 2/2 blocker at worse and the possibility of keeping them from casting spells at best. Leonin Arbiter is also too slow against decks like Burn, 8 Whack, 8 Rack, Vengevine, and BR Hollow One (on the draw).</p>
                <br>
                <h2>Conclusion</h2>
                <p>Hopefully this guide has given you some more insight into our lord Cat Jesus. A seemingly innocent kitty can do a ton of work in many matchups. Keep the Strip Mines coming!</p>
                <br>
                <hr>
             <h2>Further Readings:</h2>
            <div class="row">
                <div class="col-sm-6">
                    <h3>Previous Card 101</h3>
                    <h4><a href="aethervial">Aether Vial 101</a></h4>
                </div>
                <div class="col-sm-6">
                    <h3>Recommended</h3>
                    <h4><a href="/modern/mulligans#mg">This Month's Mulligan Game</a></h4>
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


