<?php
    include("../../scripts/searchscript.php");
    include("../../scripts/decklistdb.php");
    include("../../scripts/listofwebsitecontent.php");
?>
<?php
    $filename = 'gifts storm.php';
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

    <meta name="description" content="Modern matchup guide against Gifts Storm for Mono-White Eldrazi and Taxes.">
    <meta name="keywords" content="Magic the Gathering, modern, death and taxes, dnt, modern dnt, ent, eldrazi and taxes, storm, combo, gifts ungiven, matchup, thalia">

        <title>Modern Matchup Guide: Gifts Storm</title>
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
            <div class="container-fluid body-div">
                
            <div class="jumbotron">
                <div class="row">
                    <div class="col-sm-9">
                        <h1>Matchup Guide: Gifts Storm (updated)</h1>
                    </div>
                    <div class="col-sm-3">
                        <h2><a href="#tldr">TL;DR</a></h2>
                    </div>
                </div>
                
            </div>
            <div class="row">
                    <div class="col-4 mug-img">
                        <img src="/images/modern/matchupguides/gifts storm/baral-art.jpeg" class="headImg" alt="Baral, Chief of Compliance">
                    </div>
                    <div class="col-4 mug-img">
                        <img src="/images/modern/matchupguides/gifts storm/grapeshot-art.jpg" class="headImg" alt="Grapeshot">
                    </div>
                    <div class="col-4 mug-img">
                        <img src="/images/modern/matchupguides/gifts storm/past-in-flames-art.jpg" class="headImg" alt="Past in Flames">
                    </div>
                </div>
                <br>

                <!--INSERT 2-3 IMAGES SIDE BY SIDE HERE-->
                <br>
                <!--INSERT DECKLIST HERE (that can be collappsed)-->
                <!--INSERT SAMPLE E&T LIST HERE-->
                <div class="panel-group" id="accordion">
            <div class="panel panel-format">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                    Gifts Storm Stock List</a>
                  </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                  <div class="panel-body"> 
                    <div id="autolist_a">
                <div id="maindeck_a">
                    4 Baral, Chief of Compliance
                    3 Goblin Electromancer
                    4 Opt
                    1 Repeal
                    4 Serum Visions
                    4 Sleight of Hand
                    4 Desperate Ritual
                    2 Grapeshot
                    4 Manamorphose
                    4 Pyretic Ritual
                    2 Remand
                    1 Unsubstantiate
                    1 Empty the Warrens
                    4 Gifts Ungiven
                    2 Past in Flames
                    2 Island
                    1 Mountain
                    4 Shivan Reef
                    2 Snow-Covered Island
                    4 Spirebluff Canal
                    4 Steam Vents
                </div>
                <div id="sideboard_a">
                    1 Flame Slash
                    1 Gigadrowse
                    2 Lightning Bolt
                    2 Abrade
                    1 Echoing Truth
                    1 Negate
                    1 Dismember
                    3 Pieces of the Puzzle
                    1 Wipe Away
                    2 Empty the Warrens
                </div>
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
          <div id="content">
                <h2>Matchup Overview</h2>
                <p>Overall, the matchup is favorable for any Death and Taxes variation. Gifts Storm's gameplan is one that is easily disrupted by the primary hatebears seen in all Death and Taxes's decks. In addition, cards such as Path to Exile and Flickerwisp help slow down Gifts Storm, while Thought-Knot Seer breaks up their combo. The matchup is one that must be won quickly, as the opponent can win through your disruption if they garner enough resources. Post-board, further disruptive spells in the form of removal and graveyard hate make the already favorable matchup easier. All in all, Gifts Storm is about 60-65% in Eldrazi and Taxes's favor, as their strategy is vulnerable to the plethora of disruption available in Eldrazi and Taxes.</p>
                <hr>
                <h2>Preboard Specifics</h2>
                <br>
                <h3>How Game 1 Plays Out</h3>    
                <p>Since Gifts Storm is a combo deck, finding key cards is essential to winning game one. This first game is often determined by whether or not the Eldrazi and Taxes player finds their hatebears or removal spells for the opponent's Baral, Chief of Compliance/Goblin Electromancer. Without any disruption, the opponent can easily go off on turn three. However, since there are 12 cards that will tax the opponent's mana in your preboard deck, the odds are in your favor that you will find them. In addition, Thought-Knot Seer can disrupt their plan.</p>
                <br>
                <p>While finding these disruptive spells is important to not dying, winning is a separate issue that must be addressed. The more time Gifts Storm gets, the more likely they can sculpt their hand to combo off. Even with a Thalia, Guardian of Thraben in play, the opponent can find a win with enough time. Therefore, it is important to be very aggressive and deploy your threats sooner than later.</p>
                <br>
                <p>Essentially, game one is a race against the Gifts Storm opponent's combo. A quick summary of the opponent's combo is that, with a spell-reducing creature such as Baral, Chief of Compliance or Goblin Electromancer, they can cast enough spells to win off of Grapeshot or Empty the Warrens. Specifically, the primary win stems from a combination of Desperate Rituals, Pyretic Rituals, and Manamorphoses being cast alongside a Gifts Ungiven. If the opponent resolves Gifts Ungiven with three mana let along with a cost-reducing creature, they will win (assuming no disruption is in play). However, with the hatebears, removal, and hand disruption, it makes it difficult for the opponent to achieve this combo. Therefore, often times you will be able to disrupt and attack them down to zero life before they win through their combo.</p>
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
                
                <p>Thalia, Guardian of Thraben is Eldrazi and Taxes's best card against Gifts Storm. A two-mana creature that taxes their noncreature spells is very powerful against the noncreature spell combo deck. While Gifts Storm can win with a Thalia, Guardian of Thraben in play, it is very difficult and slow. In order for them to get their ideal combo off, they must have two cost-reducing creatures in play. To do that would take at least one extra turn. With that extra turn, other forms of disruption can be deployed, making their life extra hard. Essentially, with a Thalia, Guardian of Thraben in play, the opponent is slowed down by one turn at worst. At best, they cannot combo off due to her tax. Gifts Storm does not run many removal spells in their main deck, but an Unsubstantiate is common. Protecting Thalia, Guardian of Thraben from any removal/bounce is essential, as she is our best way at stopping their combo.</p>
                <br>
                <p>Leonin Arbiter's tax is good for two primary reasons. The obvious positive is its interaction with Ghost Quarter. Strip Mining the opponent's lands is important, as cutting the combo deck off of lands helps slow down their combo. Combine that with Thalia, Guardian of Thraben and you can easily lock them out of the game. In addition, Leonin Arbiter taxes their namesake card, Gifts Ungiven. With a Leonin Arbiter in play, they must pay its tax if they wish to cast Gifts Ungiven. This usually means that they need at least two more mana to combo off. While Thalia, Guardian of Thraben is best put into play immediately, saving Leonin Arbiter for an end of turn Gifts Ungiven is wise, assuming an Aether Vial on two is in play. All in all, both hatebears are valuable creatures to have against the combo deck.</p>
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
                <p>Phyrexian Revoker is a weak card in the matchup. A 2/1 for two mana that has almost no upside is not what you want against Gifts Storm. It is not even a good attacker, as Baral, Chief of Compliance stops its attacking. In game one, Phyrexian Revoker has no cards to name. Even post-board the artifact creature often lacks cards to shut down. Therefore, Phyrexian Revoker is the first card to be cut from the deck, as it does not do anything. Blade Splicer, on the other hand, does things. The main thing that it does is attacks. Four power for three mana is not bad, but the biggest advantage is that Blade Splicer can be blinked with Flickerwisp, Restoration Angel and Eldrazi Displacer to significantly increase our clock. Blade Splicer is also a good defender if the opponent is on the Empty the Warrens plan. While Blade Splicer does not disrupt the opponent, it is not a bad offensive creature. Having a deck full of disruption but no damage is a good way to lose against Gifts Storm, as they can pull of a win if given enough time. Therefore, Blade Splicer serves an underrated role as a solid attacker against the Gifts Storm opponent.</p>
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
                <p>Flickerwisp is strong if used to its full potential. As a 3/1 flyer for three mana, Flickerwisp is underwhelming. However, in conjunction with other blink creatures or an Aether Vial, Flickerwisp provides key disruption against the opponent. As long as Flickerwisp can enter the battlefield on your end step, it can take the opponent off of valuable resources for their turn, slowing them down. The most common use is Flickerwisping the opponent's Baral, Chief of Compliance/Goblin Electromancer at the end step. Taking the opponent off of a land is also fine, especially if they lack a mana-reducer. Finally, Flickewisping one of our creatures is a fine play too. Getting an extra Golem or saving a Thalia, Guardian of Thraben are fine plays. One slight issue with the latter is that Thalia, Guardian of Thraben would not return until the next end step, so keep that in mind before saving her. Restoration Angel has a higher floor but a lower ceiling than Flickerwisp. Restoration Angel is, at worst, a 3/4 flier for four mana that has flash. However, its blink ability is generally worse than Flickerwisp's, as it cannot directly interact with the opponent. With a Flickerwisp, however, you can blink one of the opponent's permanents by blinking the Flickerwisp with Restoration Angel. One slight upside to Restoration Angel is that, when it blinks a creature, that creature returns to the battlefield immediately. Blinking a Thalia, Guardian of Thraben is, therefore, more attractive with Restoration Angel compared to Flickerwisp. All in all, both fliers are solid creatures that have the potential to interact with the opponent and save our creatures.</p>
                
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
                                
                <p>Thought-Knot Seer is an excellent card in the matchup. It is a little expensive at four mana, but its effect is worth it. Thoughtseizing the opponent is very powerful against the combo deck. The most common card to take out of the Gifts Storm opponent's hand is their payoff card, such as Gifts Ungiven or Past in Flames. If they have multiple payoff spells or they are very short on mana, taking one of their rituals or Manamorphoses is a better option. If the opponent has zero cost-reducing creatures in play but one in hand, taking that is fine as well. Finally, if their hand consists of rituals, Past in Flames, and a storm card (but no Gifts Ungiven), then taking the storm card is the best play. Essentially, it is important to learn which card is the best to take. My general advice is to go through the opponent's combo in your head given the cards they have. Whichever card is the most valuable for that combo is the one that should be taken away. While Thought-Knot Seer draws the opponent a card when it leaves the battlefield, it is a great creature to blink. Take all of their payoff cards while leaving them with rituals, lands and mana-creatures when blinking Thought-Knot Seer. The best way to repeatedly blink Thought-Knot Seer is with Eldrazi Displacer. Flickerwisp is another creature that is very good with Eldrazi Displacer, as one or more permanents can be exiled temporarily per turn with that combination. Otherwise, Eldrazi Displacer is a 3/3 for three-mana that can protect your creatures. Eldrazi Displacer is not the best against Gifts Storm, but its high potential makes it a fine card in the match, especially when the opponent brings in their removal spells post-board. Overall, Thought-Knot Seer provides valuable disruption, while Eldrazi Displacer can help magnify said disruption.</p>
                <br>
                
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
                
                <p>Aether Vial is very good with certain cards. As mentioned above, Aether Vial can lead to plays such as bringing in an unexpected Leonin Arbiter or flashing in Flickerwisp at the end step. Another advantage with Aether Vial is that it can bring a creature into play after it gets bounced by an Unsubstantiate or Echoing Truth. Otherwise, Aether Vial is a fine card at speeding up our game plan in order to close out the game sooner rather than later. Path to Exile is better than it looks. Removing one of the opponent's mana-reducers helps a lot at slowing them down. There are games that the Gifts Storm wins without a mana-reducing creature, but those are difficult to reach, especially with cards such as Thalia, Guardian of Thraben in our deck.</p>
                <br>
                
                <p>In terms of other Death and Taxes cards that are not necessarily in this decklist, Wall of Omens and Thraben Inspector are very underwhelming. While they are useful at digging for answers, they are very slow and do not provide direct disruption. Chalice of the Void is best to play turn one on the play or for x=2 as soon as possible. Gifts Storm's one mana spells are cantrips and post-board removal, so getting a Chalice of the Void with one counter in play after the first turn or two is not very good. Other removal spells are good, along with hatebears such as Tidehollow Sculler, Wasteland Strangler, Spell Queller, Meddling Mage, and Lavinia, Azorius Renegade.</p>
                <br>
                <div class="row">
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Goblin+Electromancer&type=card" class="cardImgMUG" alt="Goblin Electromancer">
                    </div>
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Unsubstantiate&type=card" class="cardImgMUG" alt="Unsubstantiate">
                    </div>
                </div>
                <br>
                
                <h3>Cards to Look Out for- Gifts Storm</h3>
                <p>The primary cards to look out for are their combo pieces and interaction. Both of their cost-reducing creatures, Goblin Electromancer and Baral, Chief of Compliance, are often cast in hopes of comboing off in the following turn. Removing or disrupting the opponent should be done immediately after one of these hits the battlefield. Another noteworthy play is an end of turn Gifts Ungiven, sometimes fueled by a Pyretic/Desperate Ritual. Gifts Ungiven during the end step usually means that the opponent is struggling to piece together their combo. The Gifts Ungiven piles often consist of cost-reducers, cantrips, and/or an additional Gifts Ungiven to help them set up for a later win. Also, an end of turn Gifts Ungiven can be used to find interaction to answer our hatebears, although this is more commonly done in the post-board games. One note about their interaction is that, while the opponent does not have a lot of it game one, it cannot be ignored. Unsubstantiate or Repeal on our hatebear on the end step can let them win a losing game. The best way to prevent this from happening is to leave up protection for Thalia, Guardian of Thraben. Just make sure that you do not slow down your clock by doing this.</p>
                <br>
                <br>
                
                <h3>Strategies and Interactions</h3>
                
                <p>One key strategy to victory against Gifts Storm is to disrupt the opponent as much as possible. Using cards such as Flickerwisp and Eldrazi Displacer to take the opponent off of a land or two for their turn slows them down. Sometimes, however, it is better to leave a Flickerwisp trigger for their turn, in case the opponent casts a cost-reducing creature. Another important strategy is using Thought-Knot Seer optimally. Ideally, it is best to use it on the opponent's draw step when able, in order to maximize the number of cards they have in hand and the amount of information you will gain. That information garnered through seeing their hand is very useful, as it can tell you when it is best to hold up disruption versus cast creatures to kill the opponent. One important interaction that is especially useful against Gifts Storm is Leonin Arbiter plus a blink effect. If the opponent pays for Leonin Arbiter's tax and you gain priority before their Gifts Ungiven resolves, then blinking Leonin Arbiter with a Restoration Angel/Eldrazi Displacer will force the opponent to pay an additional two mana.</p>

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
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Dismember&type=card" class="cardImgMUG" alt="Dismember">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Dismember&type=card" class="cardImgMUG" alt="Dismember">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Rest+in+Peace&type=card" class="cardImgMUG" alt="Rest in Peace">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Rest+in+Peace&type=card" class="cardImgMUG" alt="Rest in Peace">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Rest+in+Peace&type=card" class="cardImgMUG" alt="Rest in Peace">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Grafdigger's+Cage&type=card" class="cardImgMUG" alt="Grafdigger's Cage">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Burrenton+Forge-Tender&type=card" class="cardImgMUG" alt="Burrenton Forge-Tender">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Burrenton+Forge-Tender&type=card" class="cardImgMUG" alt="Burrenton Forge-Tender">
                    </div>
                </div>
                <p>In general, the best cards to board in against Gifts Storm include interaction against their combo and protection for your hatebears. As mentioned above, removal works as a disruptive spell, as it is difficult for Gifts Storm to win without a cost-reducer in play, especially if Thalia, Guardian of Thraben is taxing their spells. Cards that remove these cost-reducers, such as Dismember, are good to board in. Even though Gifts Storm only runs about seven cost-reducers, their cantrips help them find one of these creatures by turn three. Very rarely will the extra removal spells be dead cards in your hand. Graveyard hate is an important form of disruption against Gifts Storm. With cards such as Rest in Peace or Grafdigger's Cage in play, the opponent cannot use their Past in Flames. In addition, Rest in Peace makes Gifts Ungiven worse, as the two cards put in the opponent's graveyard are gone forever. Rest in Peace is a very hard card for Gifts Storm to win through, as it is difficult for them to cast enough spells without their graveyard. Usually, Empty the Warrens is their only feasible win condition unless the opponent can answer your Rest in Peace.</p>
                <br>
                <p>The main protection cards that come in are Burrenton Forge-Tenders. While Burrenton Forge-Tender does not stop bounce spells, it does protect Thalia, Guardian of Thraben from (one) Grapeshot, Lightning Bolt, and other red removal spells. As of now, there are enough red removal spells played in Gifts Storm to bring in Burrenton Forge-Tenders but cases exist that make it a bad card to bring in. Essentially, if you are bringing in around eight cards before Burrenton Forge-Tenders, it is probably fine to leave them in the sideboard. The more cards you bring in, the fewer threats you will have in your deck, making the games drag out. As mentioned before, slower games are not favorable for Eldrazi and Taxes, as it gives the combo deck more time to find answers to hatebears or their storm pieces to go off. Out of all of the above cards, Burrenton Forge-Tender is certainly the weakest, but it is still good to bring it in with this iteration of Eldrazi and Taxes. But if you had two Eidolon of Rhetorics, I would just leave Burrenton Forge-Tender in the sideboard.</p>
                <br>
                <p>In terms of other cards to bring in, anti-storm cards such as Eidolon of Rhetoric, Ethersworn Canonist, Rule of Law, and Kambal, Consul of Allocation are excellent. Shalai, Voice of Plenty is also a great spell, as the opponent must answer her in order to cast their Gifts Ungiven or a lethal Grapeshot. One aspect worth discussing is whether or not to bring in Worship. While the opponent must answer Worship to win, it is not hard for them to find a bounce spell for the four mana enchantment. The reason Shalai, Voice of Plenty is better than Worship is that she can come off of Aether Vial, does not get taxed by Thalia, Guardian of Thraben, is a good attacker, and can be protected by Eldrazi Displacer. I have found Worship to be too slow and too clunky against Storm. Another interesting aspect in regards to sideboarding is whether or not to bring in niche answers to Empty the Warrens, such as Auriok Champion and Settle the Wreckage. I have personally found both to be too awkward, as they are almost useless when Empty the Warrens is not the opponent's plan. Auriok Champion must also be in play before Empty the Warrens is cast. While that is not always an issue, it can force you into situations where you play Auriok Champion instead of graveyard hate or removal and end up dying to Grapeshot. While I am against those two cards, Orzhov Pontiff is one that is fine to bring in. At the worst, it can give you extra damage to close out the game, but at best it answers Empty the Warrens quite well.</p>
                <br>
                <div class="row">
                    <div class="col-3">
                        <h4>Out (Play and Draw):</h4>
                    </div>
                    <div class="col-9">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Phyrexian+Revoker&type=card" class="cardImgMUG" alt="Phyrexian Revoker">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Phyrexian+Revoker&type=card" class="cardImgMUG" alt="Phyrexian Revoker">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Phyrexian+Revoker&type=card" class="cardImgMUG" alt="Phyrexian Revoker">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="cardImgMUG" alt="Eldrazi Displacer">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="cardImgMUG" alt="Eldrazi Displacer">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Blade+Splicer&type=card" class="cardImgMUG" alt="Blade Splicer">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Restoration+Angel&type=card" class="cardImgMUG" alt="Restoration Angel">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Aether+Vial&type=card" class="cardImgMUG" alt="Aether Vial">

                    </div>
                </div>
                
                <p>Phyrexian Revoker is the worst card in our deck against Storm, so that is an easy cut. Not only does it lack targets to name, but it is also a bad attacker, as Baral, Chief of Compliance stops it while Goblin tokens from Empty the Warrens take it out swiftly. In addition, it is best to shave weaker threats. Eldrazi Displacer does not do much without lots of mana and a disruptive card to blink, so trimming them is correct. One Blade Splicer can be cut to make room for the sideboard cards. Cutting an expensive four drop is fine. Restoration Angel is much worse than Thought-Knot Seer, as it cannot be cheated with Eldrazi Temple and does not disrupt as well. Finally, the last cut I made is taking out an Aether Vial. The reason is that Eldrazi and Taxes loses a significant chunk of their threats post-board, so cutting yet another attacker can slow us down too much. The fourth Aether Vial is not necessary, as drawing multiple in an already threat-light post-board list can cause us to be too slow. While cards like Aether Vial are important for speed, threats are required to win the game. A drawn-out game is not favorable for Eldrazi and Taxes, as the Gifts Storm opponent will go over our disruption. The reason the same cards are taken out on the play and the draw is that there is no need to take out an additional Aether Vial on the draw. If anything, the only change I would consider on the draw is taking out another Restoration Angel to be a little faster, but having a powerful flier that protects Thalia, Guardian of Thraben is good.</p>
                
                <br>
                <h4>What the Opponent Brings In</h4>
                <div class="row">
                    <div class="col-12">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Dismember&type=card" class="cardImgMUG" alt="Dismember">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Lightning+Bolt&type=card" class="cardImgMUG" alt="Lightning Bolt">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Abrade&type=card" class="cardImgMUG" alt="Abrade">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Wipe+Away&type=card" class="cardImgMUG" alt="Wipe Away">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Pieces+of+the+Puzzle&type=card" class="cardImgMUG" alt="Pieces of the Puzzle">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Empty+the+Warrens&type=card" class="cardImgMUG" alt="Empty the Warrens">
                    </div>
                </div>
               
                <p>The main cards that Gifts Storm brings in are removal spells, bounce spells, and value cards. The first category, removal spells, are primarily meant to take out hatebears like Thalia, Guardian of Thraben and Leonin Arbiter. The most common removal spells include Dismember, Lightning Bolt, Flame Slash, and Abrade. Dismember is the most problematic removal spell, as Burrenton Forge-Tender does not stop it. The second category, bounce spells, are meant to temporarily answer both our hatebears and disruptive noncreature permanents. Cards such as Echoing Truth, Wipe Away, Repeal, and Unsubstantiate can deal with Rest in Peace and other graveyard hate in addition to Thalia, Guardian of Thraben and Leonin Arbiter. The only issue with these spells is that they do not permanently remove our cards. Therefore, these are often cast right before the Gifts Storm opponent is planning on going off. The final category, value cards, are spells that grant the opponent an advantage. Pieces of the Puzzle serves as both card draw and card selection while fueling their graveyard. Even though it seems slow, Pieces of the Puzzle lets the opponent find their removal and bounce spells to fight through our disruption, making it an auto-include. Empty the Warrens is a very powerful card in the matchup. Even though it may seem slow, it is much easier for the opponent to win with an Empty the Warrens through graveyard hate compared to a Grapeshot. Looking at the sideboard of the sample Gifts Storm list, it may seem that they are bringing in over ten cards. That being said, they are limited to the number of cards they can bring in, as the more cards they cut, the less consistent their combo is. Cantrips such as Opt, Serum Visions, and Sleight of Hand are expendable, but losing that card selection will slow down Gifts Storm by at least a turn or two. Therefore, it is rare to see a Gifts Storm deck full of bounce, removal, and alternative win conditions, but it is still important to recognize all the cards that can come in.</p>
                <br>
                <h3>How the Matchup Plays Out Post-board</h3>
                <br>
                <p>As alluded to above, the post-board games go longer than the preboard one. With significantly more interaction on both sides of the field, the games focus more on resource-management and pressure. Offensive creatures are very important post-board, as the opponent will have an answer to every disruptive spell at your disposal. At the same time, finding disruption is key to not losing on an early turn. Hands without any form of interaction are not acceptable to keep. The best interaction to look for include graveyard hate (especially Rest in Peace), removal, and Thalia, Guardian of Thraben. In addition, before keeping a hand, make sure that there is a clear path to victory. A hand with all disruption but no win conditions can easily lose. While threats are important, disruption is still necessary. Gifts Storm gets access to a ton of removal and bounce spells, so leaving up Eldrazi Displacer activations or Restoration Angel to protect Thalia, Guardian of Thraben should be done whenever possible. The post-board games are about as favorable as the preboard ones, as both decks get tools to fight the other one. One way that I have gotten an advantage post-board is through Rest in Peace. While the card does not attack, it does an excellent job at stopping Gifts Storm's gameplan. Even if they answer Rest in Peace, there is a good chance that it already exiled rituals from their graveyard. If the Gifts Storm opponent cannot find one of their scarce bounce spells, then the only conceivable way for Gifts Storm to win is with Empty the Warrens.</p>
                <br>
                <hr>
                <h3>Conclusion</h3>
                <p>All in all, Gifts Storm is a favorable matchup for Eldrazi and Taxes due to the effectiveness of its disruption against the combo deck. Thalia, Guardian of Thraben and Leonin Arbiter hamper the opponent's gameplan game one, while Rest in Peace and other graveyard hate further tax their combo post-board. Despite the opponent's access to bounce spells and removal both preboard and post-board, blinkers can protect our hate spells. The matchup is about 60% in our favor but can vary based on understanding the matchup. As someone who formally played Gifts Storm in Modern, I would recommend playing the matchup on the Gifts Storm side if struggling even after consuming this matchup guide. Learning how to win through hatebears and graveyard hate can enlighten an Eldrazi and Taxes player on how to effectively use and protect your key spells.</p>
                <br>
                <div class="panel-group" id="accordion4">
                        <div class="panel panel-format">
                        <div class="panel-heading">
                          <h3 class="panel-title">
                            <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion4" href="#collapse1d" id="tldr">
                            TL;DR- Gifts Storm Matchup</a>
                          </h3>
                        </div>
                        <div id="collapse1d" class="panel-collapse collapse">
                          <div class="panel-body">
                              <p>Gifts Storm is a favorable matchup for Eldrazi and Taxes because of Eldrazi and Taxes's disruption against the opponent's combo. Deploying disruptive pieces early is important, but after that, we are the aggressive deck, as a later game favors Gifts Storm. The first game is typically decided based on how well Eldrazi and Taxes can disrupt and attack the opponent, and if the opponent can win through that disruption in time. Therefore, cards such as Thalia, Guardian of Thraben, Leonin Arbiter, Path to Exile, and Thought-Knot Seer are valuable at hurting their combo. At the same time, offensive creatures such as Blade Splicer and flyers are required to win before they garner enough resources to storm off. Keeping Aether Vial on two is a good idea if you can afford to without losing tempo, as it lets us bring Thalia, Guardian of Thraben or Leonin Arbiter into play if the opponent bounces either hatebear.</p>
                              <br>
                              <p>When sideboarding, bring in disruptive spells and ways to protect them. Rest in Peace plus other graveyard hate spells come in to fight their Past in Flames, while additional removal spells like Dismember takes them off of a cost-reducing creature. Burrenton Forge-Tender is a good way to protect a hatebear from the majority of their removal spells. The cards to cut include slow creatures (Phyrexian Revoker, Wall of Omens, Thraben Inspector) and your worst threats (Eldrazi Displacer). Trimming a four drop is fine, as long as it is not Thought-Knot Seer. The post-board games are focused more on interaction and attrition, as the opponent gets access to both. Their suite of removal and bounce spells makes disrupting them harder, but still necessary, while cards such as Pieces of the Puzzle and Empty the Warrens give them a way to win through disruption. Aggressive gameplay is very important post-board, as it is very easy for the opponent to beat any of our hate cards. Otherwise, disrupting their mana and hand is still a solid plan to stop their storm game plan.</p>
                          </div>
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
            <script src="/additionalcontent"></script>
            <script src="/recommender.js"></script>
            
            <?php
                include("../../scripts/footer.php");
            ?>
            <script>var jStr = <?php echo json_encode($lastModDate); ?>;</script>
            <script src="/loadpublishinfo.js" type="text/javascript"></script>
    </body>
</html>
