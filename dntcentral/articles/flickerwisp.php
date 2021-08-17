<?php
    include("../scripts/searchscript.php"); //actually works
    
?>
<?php
    include("../scripts/cardlistdb.php"); //does work
?>
<?php
    $filename = 'flickerwisp.php';
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

    

        <title>Flickerwisp 101</title>
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
                <div class="jumbo-tron">
                    <h1>Flickerwisp 101</h1>
                </div>
                <!--Make a blueprint layout of the page, try and make it look nicer, than redo it -->
            <p>Flickerwisp, in essence, is a  three mana 3/1 flier that dies to almost every constructed-playable removal spell. Despite the fact that it is played in formats where dying on turn three is a possibility, Flickerwisp remains one of the most iconic and powerful cards in Death and Taxes. But why? The answer: versatility</p>

            <img src="/images/dnt/flickerwisp-art.jpg" class="">
            <h2>Interactions with the deck:</h2>
            <br>
            <h3 id="vial">Aether Vial:</h3>
            <p>Aether Vial is very powerful in our deck: giving creatures flash can lead to numerous positive situations for us. That being said, Flickerwisp benefits the most out of all the creatures in the deck for having flash. Since Flickerwisp can blink <i>anything</i> (except itself), it serves a valuable role in pretty much every matchup, from saving a creature from a removal spell to stopping an attack to getting rid of a combo piece for a turn. The most important thing to note of this card is that it exile the card at the beginning of the next end step, so if you wish to blink your own Blade Splicer/Thraben Inspector/Recruiter of the Guard/Stoneforge Mystic for value, than do it on your opponent's second main phase in order for your creature to return before you untap. While that is typically a downside, the benefit of being able to blink one of the opponent's permanents on your endstep to get rid of it for the bulk of their turn outweighs said downside.</p>
            <h3>Resetting Lands:</h3>
            <p>Flickerwisp can also be used to blink a land in order to use the land's ability or mana later before your next turn. Blinking a Plains can be used as simply as bluffing a Swords to Plowshares or Path to Exile, or can help activate an ability of one of your permanents (sacrifice a Clue, active Stoneforge Mystic, blink a creature with Eldrazi Drisplacer, etc.). Blinking a land can also be valuable in terms of using the land's ability end-step while getting a threat into play. Wasteland/Ghost Quarter end step is not too much of a loss compared to your main phase. Flickerwisp can also threaten an activation of one of your nonbasics as well (Karakas being the most famous).</p>
            <h2>Specific Cards:</h2>
            <h3>EtB Creatures (Thraben, Stoneforge Mystic, Splicer, Recruiter, etc.)</h3>
            <p>Since these cards have valuable enter the battlefield (EtB)  triggers for us, Flickerwisping either one is a common play for the deck. For Modern, Thraben Inspector is better to be blinked whenever you are needing to dig for cards or value the slow cantrip over the 3/3 first striker, but blinking Blade Splicer is better in the majority of scenarios. In black-white builds with Tidehollow Sculler and Thought-Knot Seer, both are useful to blink, especially against combo/control decks. In red splashes, it is most useful to blink a Pia and Kiran Nalaar rather than a Blade Splicer or Thraben Inspector, as the two 1/1 fliers are much more valuable (plus more fodder to sac to Pia and Kiran Nalaar). In Legacy, Recruiter of the Guard is your go to blinker; in fact, many times you end up grabbing Flickerwisps with Recruiter of the Guard to get a nice loop going. SFM can also be blinked, but is less preferred unless equipment is more valuable in the game or you lack a recruiter.</p>
            <h3>Leonin Arbiter/Thalia, Guardian of Thraben</h3>
            <p>These creatures are more interesting. While there is not much value in blinking either sorcery-speed, sometimes you need to do so in order to play around the tax. While it is rare that you will need to search your library in games, there are times where you need to remove Thalia, Guardian of Thraben temporarily in order to resolve that Aether Vial or Rest in Peace while still putting the opponent under pressure with your new flier.</p>
            <h3>Sanctum Prelate</h3>
            <p>Flickerwisp can be used to reset Sanctum Prelate's number. This is most useful when you acquire noncreature spells with cmc equal to the number chosen with Sanctum Prelate that are imperative to cast. However, flickering Sanctum Prelate can lead to issues due to giving your opponent an opportunity to cast those previously locked spells.</p>
            <h3>Another Flickerwisp!</h3>
            <p>When lacking Flickerwisp targets, Flickerwisp can target another Flickerwisp in play, giving you more time to decide upon a Flickerwisp target. This also plays around the opponent untapping and casting a sorcery-speed board wipe like Supreme Verdict or Toxic Deluge.</p>
            <h3>Old-text exile creatures (Fiend Hunter, Tidehollow Sculler, etc.)</h3>
            <p>In response to their trigger, blinking them with a Flickerwisp or other blink creature makes one of the opponent's creatures/cards from hand permanently exiled. In order to do it with Flickerwisp, you would need to flash it in with an Aether Vial or blink the Flickerwisp itself, as it would be in response to the creature's trigger.</p>
            <h3>In general Interactions:</h3>
            <p>Flickerwisp can also simply give one of our creatures vigilance. It can also, in rare situations, be used to reset an Aether Vial's counters: mostly useful when the Aether Vial is at four counters and is needed at three.</p>
            <hr>
            <h2>Interactions with opponents:</h2>
            <p>Below is a list of simple interactions with the opponent:</p>
            <ul>
                <li>Kill a token</li>
                <li>Take them off a land for their main phases (requires Aether Vial)</li>
                <li>Take them off of a blocker</li>
                <li>Get back a stolen permanent</li>
                <li>Remove enchantments from non-hexproof creature</li>
                <li>Temporarily get rid of a troublesome creature that was impeding spell casting (i.e. a Shalai, Voice of Plenty that was giving their Devoted Druid hexproof)</li>
            </ul>
            <h3>Specific card interactions with Flickerwisp's ability:</h3>
            <ul>
                <li>Flickerwisp can be used to destroy a Phantasmal Image.</span></a></span></li>
                <li>Flickerwisp can be used to stop blood moon for the bulk of the turn to allow us to activate land abilities</li>
                <li>Flickerwisp can be used to attack through an Ensnaring Bridge</li>
            </ul>
            
            
            </div>
            <div class="extra-space">

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

