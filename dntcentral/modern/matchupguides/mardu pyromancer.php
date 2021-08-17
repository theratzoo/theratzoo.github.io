<?php
    include("../../scripts/searchscript.php");
    include("../../scripts/cardlistdb.php");
?>
<?php
    $filename = 'mardu pyromancer.php';
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

    

        <title>Modern Matchup Guide: Mardu Pyromancer</title>
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
                    <h1>Matchup Guide: Mardu Pyromancer</h1>
                </div>
                
                    <h2>Matchup Overview</h2>
                    <div class="muimage">
                        <img src="https://227rsi2stdr53e3wto2skssd7xe-wpengine.netdna-ssl.com/wp-content/uploads/2013/07/young-pyromancer.png" class="muimage" alt="Young Pyromancer">
                    </div>
                    <br>
                    <br>
                    <p>Mardu Pyromancer has overtaken Jund, Abzan, and other traditional BG midrange decks as the tier 1 grindy, nonblue midrange deck. Typically, we struggle against said midrange decks, but we do have some edges on Mardu Pyromancer. For one, we can often go wide enough to invalidate their token threats, and can usually find enough removal to kill their Bedlam Revelers. However, their removal package is very powerful, especially the dreaded Kolaghan's Command. In addition, their ability to dig deep makes their deck very consistent and hard to lose to itself in the way that traditional Jund/Abzan was susceptible to. Postboard, the matchup gets interesting- while our graveyard hate can combat a large portion of their strategies, they also get very powerful threats like Liliana, the Last Hope and Grim Lavamancer. Overall, while slightly unfavorable for us, the matchup is still close enough that we have a strong fighting chance, albeit we often have to fight an uphill battle.</p>
                    <hr>
                    <h2>Our best cards</h2>
                    <div class="muimage">
                        <img src="https://orig00.deviantart.net/7955/f/2012/099/2/4/mtg__restoration_angel_by_algenpfleger-d4vitks.jpg" class="muimage" alt="Restoration Angel">
                    </div>
                    <br>
                    <br>
                    <p>Overall, the majority of cards in our deck play a vital role in this matchup. Thalia, Guardian of Thraben and Leonin Arbiter tax them while providing a cheap clock, while Blade Splicer provides value and a good blocker for their Young Pyromancer tokens. Our fliers are also important in the matchup, as traditionally fliers are our best threats (and best cards) vs. grindy decks. However, due to the opponent running Lingering Souls, Flickerwisp gets significantly worse, but Restoration Angel is still a star in this matchup nonetheless. Eldrazi Displacer is an interesting card here: while it very susceptible to removal spells, especially Lightning Bolt, its ability to churn through Lingering Souls and Elemental tokens is very important especially in the later stages of the game. Of course, Path to Exile is solid here, as removal tends to be good versus decks like this one.</p>
                    <hr>
                    <h2>Our worst cards</h2>
                    <div class="muimage">
                        <img src="https://i.imgur.com/2ms6C_d.jpg?maxwidth=640&shape=thumb&fidelity=medium" class="muimage" alt="Flickerwisp">
                    </div>
                    <br>
                    <br>
                    <p>Thraben Inspector is not very powerful here- it is often clunky and the body is not very relevant. Flickerwisp is another creature that is not very good here- it dies to a single Lingering Souls token and also dies to every removal spell in the opponent's deck (whereas Restoration Angel dodges Lightning Bolt and Collective Brutality). That being said, the more I've played the matchup, the more I've learned that Flickerwisp is more of a necessary evil. The reason for this is that the majority of Mardu Pyromancer lists play Ensnaring Bridge in the sideboard- a card that we cannot beat without a Flickerwisp in the board (unless you run artifact removal in the board, which is rare). With Flickerwisp, we can set up a one-turn kill by building up our board then cast a Flickerwisp/blink it with a Restoration Angel or Eldrazi Displacer activation and get a swift kill. Another questionable card is Eldrazi Displacer- while powerful at grinding and killing tokens, it also dies to Lightning Bolt. I like it more on the draw versus the play (will discuss more in the sideboarding section).</p>
                    <hr>
                    <h2>Opponent's best cards</h2>
                    <div class="muimage">
                        <img src="https://magic.wizards.com/sites/mtg/files/images/hero/Modern-Trends-and-the-Three-Bye-Metagame-Icon.jpg" class="muimage" alt="Kolaghan's Command">
                    </div>
                    <br>
                    <br>
                    <p>In terms of threats, the only one we really care about is Bedlam Reveler. The card itself, a 3/4 prowess, is unimpressive, especially when we can amass enough Blade Splicer Golems. The real power of this deck is its enter-the-battlefield ability: discarding the hand (which is often empty) and drawing 3 cards, allowing the Mardu Pyromancer opponent to draw into more action. Therefore, we are most interesting in fighting the card via graveyard hate rather than removal, but sometimes we lack the graveyard hate to stop it. The cards we are most worried about are their removal spells. Most notably, we are weakest to Kolaghan's Command, one of the most powerful cards against Death and Taxes. It is very difficult to play around Kolaghan's Command, with our best way being denying them of mana via our hatebears. Postboard, the midrange opponent gets a plethora of haymakers, ranging from sweepers (Anger of the Gods) to removal threats (Liliana, the Last Hope, Grim Lavamancer), all very hard to beat spells.</p>
                    <hr>
                    <h2>Sideboarding</h2>
                    <div class="muimage">
                        <img src="https://spellsnare.files.wordpress.com/2016/06/132_relic.jpg?w=620" class="muimage" alt="Relic of Progenitus">
                    </div>
                    <br>
                    <br>
                    <p>Sideboarding is very dependent on whether we are on the play or on the draw. On the play, being aggressive is key, making cards like Eldrazi Displacer and Leonin Arbiter more valuable. Inversely, these cards become less valuable on the draw, where we want to play as a grindy deck. On the play, I like to shave thraben inspectors along with Eldrazi Displacers for a variety of Burrenton Forge-Tenders (blocks Young Pyromancer and its tokens well along with protecting our creatures from Lightning Bolts and Anger of the Gods), Shalai, Voice of Plenty, Kitchen Finks, and graveyard hate like Rest in Peace and Relic of Progenitus. On the draw, I prefer to trim on Thraben Inspecors, Flickerwisps, and Leonin Arbiters in favor of Burrenton Forge-Tenders, Auriok Champions, Kitchen Finks, Shalai, Voice of Plenty, and our more value threats like planeswalkers.</p>
                    <hr>
                    <h2>Important Interactions</h2>
                    <div class="muimage">
                        <img src="https://i.ytimg.com/vi/0iXrBmM3X7U/hqdefault.jpg" class="muimage" alt="Bedlam Reveler">
                    </div>
                    <br>
                    <br>
                    <p>Albeit a very rare interaction but cute one, Flickerwisp or Eldrazi Displacer can blink Bedlam Reveler to make them discard their hand (and draw three new cards) in the event that they amass a large number of cards in hand.</p>

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

