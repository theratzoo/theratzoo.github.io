<?php
    include("../../../scripts/searchscript.php");
    include("../../../scripts/cardlistdb.php");
    include("../../../scripts/decklistdb.php");
    include("../../../scripts/listofwebsitecontent.php");
?>
<?php
    $filename = 'infect.php';
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

    <meta name="description" content="Modern matchup guide against Infect for B/W Eldrazi and Taxes.">
    <meta name="keywords" content="Magic the Gathering, modern, death and taxes, dnt, b/w eldrazi and taxes, ent, eldrazi and taxes, infect, aggressive, blue-green, matchup, thalia">

        <title>Modern Matchup Guide: Infect</title>
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
            include("../../../scripts/navbar.php"); 

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
                        <h1>Matchup Guide: Infect</h1>
                    </div>
                    <div class="col-sm-3">
                        <h2><a href="#tldr">TL;DR</a></h2>
                    </div>
                </div>
                
            </div>
            <div class="row">
                    <div class="col-4 mug-img">
                        <img src="/images/modern/matchupguides/infect/blossoming-defense-art.jpg" class="headImg" alt="Blossoming Defense">
                    </div>
                    <div class="col-4 mug-img">
                        <img src="/images/modern/matchupguides/infect/blighted-agent-art.jpg" class="headImg" alt="Blighted Agent">
                    </div>
                    <div class="col-4 mug-img">
                        <img src="/images/modern/matchupguides/infect/glistener-elf-art.jpg" class="headImg" alt="Glistener Elf">
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
                    Infect Stock List</a>
                  </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                  <div class="panel-body"> 
                    <div id="autolist_a">
                <div id="maindeck_a">
                    1 Dryad Arbor
                    4 Glistener Elf
                    4 Noble Hierarch
                    4 Blighted Agent
                    4 Blossoming Defense
                    3 Distortion Strike
                    4 Groundswell
                    4 Might of Old Krosa
                    4 Mutagenic Growth
                    2 Spell Pierce
                    4 Vines of Vastwood
                    3 Become Immense
                    3 Breeding Pool
                    2 Forest
                    4 Inkmoth Nexus
                    1 Misty Rainforest
                    2 Pendelhaven
                    4 Windswept Heath
                    3 Wooded Foothills
                </div>
                <div id="sideboard_a">
                    1 Ceremonious Rejection
                    1 Dispel
                    3 Grafdigger's Cage
                    3 Nature's Claim
                    2 Shapers' Sanctuary
                    2 Spellskite
                    2 Dismember
                    1 Carrion Call
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
                    Sample E&T List- Black-White Eldrazi and Taxes</a>
                  </h3>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                  <div class="panel-body"> 
                    <div id="autolist_b">
                <div id="maindeck_b">
                    4 Leonin Arbiter
                    4 Thalia, Guardian of Thraben
                    4 Tidehollow Sculler
                    2 Blade Splicer
                    4 Eldrazi Displacer
                    4 Flickerwisp
                    3 Wasteland Strangler
                    4 Thought-Knot Seer
                    4 Path to Exile
                    4 Aether Vial
                    4 Caves of Koilos
                    4 Concealed Courtyard
                    4 Eldrazi Temple
                    4 Ghost Quarter
                    1 Godless Shrine
                    2 Plains
                    3 Shambling Vent
                    1 Swamp
                </div>
                <div id="sideboard_b">
                    1 Burrenton Forge-Tender
                    3 Fatal Push
                    3 Rest in Peace
                    2 Stony Silence
                    2 Kambal, Consul of Allocation
                    2 Orzhov Pontiff
                    1 Gideon, Ally of Zendikar
                    1 Settle the Wreckage
                </div>
            </div>
                    

        </div>
                </div>
              </div>
          </div>
          <div id="content">
                <h2>Matchup Overview</h2>
                <p>Overall, the matchup is favorable for B/W Eldrazi and Taxes. Infect's strategy is one that B/W and Taxes does a great job at disruption through its hatebears, hand-disruptive creatures, and strong blockers. The Eldrazi in the deck further swing the match in B/W Eldrazi and Taxes's favor. The reason Infect is a great matchup is due to their strategy. Essentially, the Infect player is trying to win by dealing ten infect damage to the opponent. This is done through twelve creatures, four of which are lands. As it turns out, B/W Eldrazi and Taxes has answers to all of their threats. Ghost Quarter deals with their Blinkmoth Nexus, while Path to Exile and Wasteland Strangler removes their Blighted Agent. Furthermore, the plethora of blockers available can prevent Glistener Elf from getting in damage. Blinkers such as Flickerwisp and Eldrazi Displacer are also very good at preventing infect damage from getting through. Finally, Tidehollow Sculler and Thought-Knot Seer tear apart the opponent's hand, furthering them from building enough infect damage for a kill. Postboard, more removal spells are available to combat Infect, but they also get answers to make the matchup slightly worse but still quite favorable. All in all, due to the strength of B/W Eldrazi and Taxes cards against Infect, the matchup is very good, at about 60% or more in your favor.</p>
                <hr>
                <h2>Preboard Specifics</h2>
                <br>
                <h3>How Game 1 Plays Out</h3>  
                
                <p>Games one is plays out very well for B/W Eldrazi and Taxes due to Infect's strategy. The linear plan for the Infect opponent is to use cheap creatures with infect plus spells to temporarily increase their attack (pump spells) to win the game. Due to a limited number of low-costed infect creatures, the only ones that Infect has are Glistener Elf, Inkmoth Nexus, and Blighted Agent. Twelve threats to answer is not very difficult for B/W Eldrazi and Taxes, especially when most of them do not require Path to Exile or Wasteland Strangler. Essentially, the games are focused on preventing these infect creatures from getting damage through, even if that means chump blocking.</p>
                <br>
                <p>The reason the matchup is very favorable for B/W Eldrazi and Taxes is that, aside from Blighted Agent, their infect creatures are no problem. Glistener Elf has zero evasion, leaving it vulnerable to blocking. B/W Eldrazi and Taxes has no problem generating blockers, especially with cards such as Blade Splicer and Thalia, Guardian of Thraben. Their other infect creature, Inkmoth Nexus, is harder to block due to its flying keyword. That being said, it is vulnerable to land destruction. Ghost Quarter excels at taking out an Inkmoth Nexus- as long as the opponent does not have the mana to protect it. Even without a Ghost Quarter, B/W Eldrazi and Taxes has Flickerwisp available to block Inkmoth Nexus. Furthermore, Thalia, Guardian of Thraben is really good at taxing them. Infect is technically a creature deck, but it uses a plethora of noncreature spells to pump their infect creatures, making Thalia, Guardian of Thraben a powerful hatebear. Furthermore, Tidehollow Sculler and Thought-Knot Seer are great tools at disrupting the opponent's hand, keeping them off of their combo. In terms of Blighted Agent, the best way to answer it is with Path to Exile. Without Path to Exile, there is still hope. Wasteland Strangler can still kill it, but it is harder to pull off unless Aether Vial or an instant-speed flicker effect is available (due to their protection spells). Flickerwisp and Eldrazi Displacer can save precious damage, especially if used after they cast a pump spell. All in all, B/W Eldrazi and Taxes's cards line up well against Infect's gameplan, making it difficult for the opponent to enact their game plan.</p>
                <br>
                <p>As the B/W Eldrazi and Taxes player in game one, your goal is to not die to the opponent's infect creatures. The best way is to block aggressively. Trading creatures is almost always favorable, as Path to Exile and Wasteland Strangler are best saved for the unblockable Blighted Agent. It is important to play around their protection pump spells such as Blossoming Defense and Vines of Vastwood. Flickerwisp and Eldrazi Displacer should be used to blink the opponent's creature, especially after they tap out in a way that a protection spell will not counter your plan. With only twelve threats, it is best to take one of the opponent's infect creatures with Tidehollow Sculler/Thought-Knot Seer. Otherwise, understand that B/W Eldrazi and Taxes is the defender in this matchup, but also needs to pressure the opponent before they can set up a lethal turn.</p>
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
                <p>Thalia, Guardian of Thraben is one of B/W Eldrazi and Taxes's better cards in the matchup. Her tax is very effective at hampering their strategy. Infect decks contain over 20 cheap noncreature spells, making Thalia, Guardian of Thraben's tax harmful. Thalia, Guardian of Thraben is also a great blocker, as she forces the opponent to use a pump spell if she blocks a Glistener Elf. Often times, her tax will help in two ways. First, as just mentioned, it will slow down the opponent, as their noncreature spells cost an extra mana each. This allows B/W Eldrazi and Taxes to try and close out the game before they can get enough damage through, or at least draw into answers to their infect creatures. The other positive outcome from Thalia, Guardian of Thraben's tax is that, because their noncreature spells cost an extra mana, it is hard for them to cast more than one per turn. Falling into the trap of a Blossoming Defense or Vines of Vastwood countering a removal spell or blink effect is much easier to play around when they cost more mana. Toward the later stages of game one against Infect, it is easy to garner enough mana and/or resources to leave up multiple ways to stop an attacker (Flickerwisp, Eldrazi Displacer ability, Path to Exile, Wasteland Strangler). Having the opponent's mana tied up with Thalia, Guardian of Thraben to the point that they cannot leave up more than one defensive spell is not hard to achieve, as they will have to spend mana to activate Inkmoth Nexus and use normal pump spells to get through Eldrazi and Taxes's blockers. All in all, Thalia, Guardian of Thraben excels in this matchup, as her tax slows down Infect's gameplay.</p>
                <br>
                <p>Leonin Arbiter is good in this matchup as well, albeit not as strong as Thalia, Guardian of Thraben. Infect decks run around eight fetch lands, so Leonin Arbiter's tax is certainly relevant. In addition, Ghost Quarter is an important land to use in order to stop their Inkmoth Nexuses from attacking. Leonin Arbiter's ability stopping the opponent from getting a land after Ghost Quartering their Inkmoth Nexus is exactly what B/W Eldrazi and Taxes wants to be doing in this match, especially if Thalia, Guardian of Thraben is present to further hinder their mana situation. One slight issue with Leonin Arbiter is that, with Noble Hierarch, it is hard to Strip Mine the opponent with Ghost Quarter, or simply lock down their fetch lands. That being said, simply taxing their fetch lands is very powerful. Infect lacks any removal game one, so having Leonin Arbiter on turn two often slows the opponent down. While he is no Thalia, Guardian of Thraben, Leonin Arbiter is still a fine card against Infect, especially as its tax can straight win games.</p>
                <br>
                <div class="row">
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" class="cardImgMUG" alt="Flickerwisp">
                    </div>
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Blade+Splicer&type=card" class="cardImgMUG" alt="Blade Splicer">
                    </div>
                </div>
                <br>
                <p>Flickerwisp is an excellent card against Infect. First, it is a flier that blocks the opponent's Inkmoth Nexus. In addition, Flickerwisp's ability is very powerful if it can be triggered at instant speed, as it can hinder the opponent's game plan. Taking them off of a mana source for the turn is fine, but the primary usage is to target one of their attackers. Specifically, the attacker that they just cast a pump spell on. Flickerwisping an infect creature that was recently grown by Might of Old Krosa is straight card advantage. The tricky part, however, is playing around their protection spells. Blossoming Defense or Vines of Vastwood cast after you try Flickerwisping the opponent's Infect attacker can leave you dead. Playing around this is very important (will be discussed more below). Blade Splicer is a strong spell as well. Providing two blockers is useful in preventing Glistener Elf from getting through. Since the Golem tokens often have first strike, typically the opponent cannot attack with the Glistener Elf. In addition, Blade Splicer is a solid attacker. Getting in damage against Infect is necessary to win, and the sooner it is done, the better. Blade Splicer helps lower the time the Infect opponent has to find the right set of pump spells to sneak out a win. Overall, both Flickerwisp and Blade Splicer are good tools to fight against Infect's plan.</p>
                <br>
                <div class="row">
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Tidehollow+Sculler&type=card" class="cardImgMUG" alt="Tidehollow Sculler">
                    </div>
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Thought-Knot+Seer&type=card" class="cardImgMUG" alt="Thought-Knot Seer">
                    </div>
                </div>
                <br>
                <p>Tidehollow Sculler is not a bad way to disrupt the Infect opponent. Typically, Tidehollow Sculler is taking one of the opponent's pump spells, making it more difficult for them to deal ten infect damage. However, when possible, it is much better to take one of their creatures. With only twelve in the deck, the creatures are much more vulnerable to disruption than the pump spells. Plus, a hand full of pump spells does literally nothing, whereas a hand full of infect creatures can at least threaten trades with our creatures. The same logic goes for Thought-Knot Seer- take the opponent's infect creature if possible, otherwise take their best pump spell. Typically, the best pump spell to take is either their protection spell (Blossoming Defense or Vines of Vastwood) if you plan to remove/blink the opponent's creatures. Otherwise, taking their strongest pump spell is fine. All that being said, if the opponent can win if their biggest pump spell is kept in hand, take that instead. All in all, Tidehollow Sculler and Thought-Knot Seer are solid ways to disrupt the opponent, as hand attack is quite good against the combo deck.</p>
                
                <br>
                <div class="row">
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Wasteland+Strangler&type=card" class="cardImgMUG" alt="Wasteland Strangler">
                    </div>
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="cardImgMUG" alt="Eldrazi Displacer">
                    </div>
                </div>
                <br>
                <p>Wasteland Strangler is one of our best cards against Infect. As long as the opponent has a card in their exile zone (Path to Exiled creature, Tidehollow Sculler/Thought-Knot Seer exiled card, Distortion Strike, etc.), Wasteland Strangler is a good two for one. Worst case scenario, Wasteland Strangler forces the opponent to use a pump spell. Best case scenario happens when Aether Vial or Eldrazi Displacer are available to trigger Wasteland Strangler's ability at instant speed. This leads to many favorable interactions, from killing a creature in response to a pump spell from shrinking an already pumped creature after blocks are declared. Eldrazi Displacer works well if enough time is available. Each Eldrazi Displacer activation represents a Path to Exile, as the opponent must have enough protection spells or else they cannot cast their other pump spells. Just like with Flickerwisp, Eldrazi Displacer's ability the majority of the time is pointed toward an infect creature. But you need to factor in the possibility of Blossoming Defense and/or Vines of Vastwood ruining your plan (will be discussed further below). Overall, both Eldrazi are great in this match, as Wasteland Strangler removes a creature/pump spell while Eldrazi Displacer makes it very difficult for the opponent to attack.</p>
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
                <p>Aether Vial is not very special in this matchup. The most common advantage Aether Vial has against Infect is that it can surprise the opponent with a blocker. Ambushing their Glistener Elf with a Blade Splicer is excellent, especially if they cannot save it. In addition, it lets Flickerwisp and Wasteland Strangler come in at instant speed, which is necessary in order to prevent an infect creature from attacking. Aether Vial is also useful at bluffing, as the opponent might not attack with their creature if they fear an Aether Vial activation. Saving precious infect damage is important, so try to always leave Aether Vial untapped on their turn. Path to Exile is amazing, as it is B/W Eldrazi and Taxes's most efficient answer to a Blighted Agent. In addition, it can blow out the opponent if used to take out a creature buffed by a pump spell or two. Similar to Aether Vial, Path to Exile should be bluffed when possible, in order to discourage the opponent from tapping down. Similarly, if you have a Path to Exile in hand, pretending to not have it to trick the opponent into tapping out is a good strategy. Path to Exile is vulnerable to Spell Pierce, Blossoming Defense, and Vines of Vastwood, so play around those cards accordingly. As discussed earlier, Path to Exile is best used on their Blighted Agent, but it is fine to cast it on a different infect creature. Do not get too greedy with Path to Exile- if you need to cast it to survive, just do it.</p>
                <br>
                <div class="row">
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Blighted+Agent&type=card" class="cardImgMUG" alt="Blighted Agent">
                    </div>
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Blossoming+Defense&type=card" class="cardImgMUG" alt="Blossoming Defense">
                    </div>
                </div>
                <br>
                <h3>Cards to Look Out for- Infect</h3>
                <p>In game one, the most important cards to look out for are infect creatures and protection spells. The three infect creatures are Glistener Elf, Inkmoth Nexus, and Blighted Agent. Glistener Elf is by far the easiest of the three to deal with, as all of B/W Eldrazi and Taxes's creatures can block it. As long as they do not make it unblockable, Glistener Elf is best dealt with by blocking it. For the most part, this forces them to use a pump spell to save it, which is a fine trade. Inkmoth Nexus can only be blocked by fliers, but it is vulnerable to Ghost Quarter and Field of Ruin. The biggest threat though is Blighted Agent. Since it is unblockable, Path to Exile is the only way to remove it game one. While all of Infect's infect creatures are concerns, Blighted Agent is by far the most important to maintain, as it is harder to control. The other part of Infect decks is their pump spells. These are not much of an issue aside from the protection ones and Distortion Strike. Blossoming Defense and Vines of Vastwood are the most common protection spells and must be played around. If the opponent ruins your plan with one of these spells, you are often dead. Distortion Strike is a card that can be annoying. Since it works for two turns, finding a permanent solution in terms of dealing with the infect creature is ideal. Otherwise, some lists run a Dismember or two in the main deck, but that is not something that can be played around much, as the majority of your blink effects will be used on the opponent's infect creatures.</p>
                <br>
                <br>
                <!--Talk about Flickerwisp, Eldrazi Displacer, and playing around protection spells. Also talk about blocking and how to do it right. and dont forget small interactions. also mention how u can actually die by damage and to be careful-->
                <!--have a header and section just about blink ability and how to use it right VERY SPECIFIC-->
                <h3>Strategies and Interactions</h3>
                <h4>Ghost Quartering Inkmoth Nexus</h4>
                <p>As stated earlier, Ghost Quarter is best saved for Inkmoth Nexus. Before activating it, keep in mind that the opponent can save it if they have the mana. The line is that they can activate Inkmoth Nexus, and then cast a Blossoming Defense or Vines of Vastwood targeting the Inkmoth Nexus. If you feel the need to Ghost Quarter an Inkmoth Nexus, look at the amount of mana that the opponent has. If they are low on mana or a Thalia, Guardian of Thraben is in play, it is actually better to Ghost Quarter on their turn. Doing that can leave them without an Inkmoth Nexus to attack with, as they will need 3-4 mana to save it. Otherwise, they can simply tap the Inkmoth Nexus to activate it. In addition, if the opponent has a Distortion Strike coming off of rebound, wait for them to activate Inkmoth Nexus before targeting it with Ghost Quarter. After they pay the one mana to activate it, destroy it with Ghost Quarter in response to that ability. Doing so will force them to spend yet another mana to activate it and then save it with a protection spell.</p>
                <br>
                <h4>The Flicker Dance</h4>
                <p>Success in the Infect matchup depends on understanding how to use Eldrazi Displacer and Flickerwisp properly. The first rule is to be reactive when blinking. If the opponent is attacking for one infect damage with a Blighted Agent, just let it happen. If you can only activate Eldrazi Displacer once, doing that can lead to the opponent casting Blossoming Defense and some other pump spells for lethal infect. When using Flickerwisp's ability, it is often best to have it occur on your end step. By doing it then, their protection spell will not increase their infect creature's power for their attack step. This strategy is best done when the opponent has enough resources to win a blink battle. This is also a good idea if your infect counter is high enough that one pump spell is lethal but low enough that one attack is not lethal. All that said, the majority of the time it is simply best to not blink until necessary. When the opponent does not cast any pump spells, Flickerwisp and Eldrazi Displacer's ability can be used to further your board position, which is useful when your mana is tied up in Eldrazi Displacer abilities. Of course, there comes a point where you have to go for it. This is best done when the opponent is lacking in mana and/or cards. Thalia, Guardian of Thraben can make it difficult for the opponent to cast several pump spells a turn. When you want to go in, it is best to start with the least important abilities. Save Path to Exile for later, as it is a harder to repeat effect. Similarly, keep Flickerwisp in hand if Aether Vial is on three. The more blink effects and removal spells you have available on one turn, the better. Do not forget to pressure the opponent's life total- giving them too much time can let them find more protection spells. Also, Thought-Knot Seer or Tidehollow Sculler can make this dance a lot simpler. Knowing the opponent's hand allows for aggressive plays. Finally, if the opponent has cards in their exile zone, consider blinking Wasteland Strangler. If Wasteland Strangler's ability resolves, then the creature is removed, whereas Flickerwisp/Eldrazi Displacer's ability leave the creature alive.</p>

                <br>
                <hr>
                <h2>Postboard Specifics</h2>
                <br>
                <h3>Sideboarding</h3>
                <br>
                <div class="row">
                    <div class="col-3">
                        <h4>In (Play and Draw):</h4>
                    </div>
                    <div class="col-9">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Fatal+Push&type=card" class="cardImgMUG" alt="Fatal Push">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Fatal+Push&type=card" class="cardImgMUG" alt="Fatal Push">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Fatal+Push&type=card" class="cardImgMUG" alt="Fatal Push">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Orzhov+Pontiff&type=card" class="cardImgMUG" alt="Orzhov Pontiff">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Orzhov+Pontiff&type=card" class="cardImgMUG" alt="Orzhov Pontiff">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Settle+the+Wreckage&type=card" class="cardImgMUG" alt="Settle the Wreckage">
                    </div>
                </div>
                <p>Removal is key against Infect. Fatal Push is downright perfect against the opponent. The only creatures that have a converted mana cost greater than two are the one or two infect creatures that come out of the sideboard. Even then those creatures do not cost more than four mana, making Fatal Push still useable. Typically, Fatal Push acts as Path to Exile 5-7, with the real downside being that it does not exile for Wasteland Strangler. That being said, it does not give the opponent a land, so usually, Fatal Push is better than Path to Exile. Orzhov Pontiff is also amazing. The creature does cost three mana, two of which are colored mana, but its activated ability is brutal. All of Infect's creatures preboard have one toughness, so the opponent must use a pump spell or else their creature is dead. Orzhov Pontiff shines best when the opponent has accumulated multiple infect creatures and/or Noble Hierarchs, making it a two for one or better. Look out for Pendalhaven though, as it can save an infect creature (but not Noble Hierarch). Finally, Settle the Wreckage is yet another way to get rid of the opponent's creatures. Unlike Fatal Push and Orzhov Pontiff, Settle the Wreckage cannot be prevented unless the opponent has Spell Pierce. Usually, however, Infect players take out Spell Pierce against B/W Eldrazi and Taxes, so Settle the Wreckage should resolve. While Settle the Wreckage is often a four mana removal spell (as Infect players mostly attack with one creature at a time), it cannot be stopped with a protection spell/Spellskite, making it a powerful asset. Other cards not in this B/W Eldrazi and Taxes sideboard that are fine to bring in include other removal spells and Bitterblossom. The two mana enchantment is excellent, as Bitterblossom generates blockers for their infect creatures and the life loss is not relevant against the opponent winning through infect damage.</p>
                <br>
                <!--take out vial, some tks/tidehollow, some leonin/thalia, splicer, kambal comes out as well probably-->
                <div class="row">
                    <div class="col-3">
                        <h4>Out (Play and Draw):</h4>
                    </div>
                    <div class="col-9">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Leonin+Arbiter&type=card" class="cardImgMUG" alt="Leonin Arbiter">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Leonin+Arbiter&type=card" class="cardImgMUG" alt="Leonin Arbiter">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Leonin+Arbiter&type=card" class="cardImgMUG" alt="Leonin Arbiter">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Aether+Vial&type=card" class="cardImgMUG" alt="Aether Vial">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Blade+Splicer&type=card" class="cardImgMUG" alt="Blade Splicer">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Blade+Splicer&type=card" class="cardImgMUG" alt="Blade Splicer">
                    </div>
                </div>
                <p>Since all of our cards are quite good, the weakest are the best ones to cut. Leonin Arbiter is not very strong, as the opponent does not have much of a problem paying its tax with Noble Hierarch. Aether Vial gets weaker post-board, as noncreature spells replace creatures. It is still a great spell, so only one should be cut. Finally, Blade Splicer is not what we want to be doing post-board. Blink effects are best used on infect creatures to stop attacks, so Blade Splicer is not very synergistic in this matchup compared to others.</p>
                <br>
                <h4>What the Opponent Brings In</h4>
                <div class="row">
                    <div class="col-12">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Shapers'+Sanctuary&type=card" class="cardImgMUG" alt="Shapers' Sanctuary">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Spellskite&type=card" class="cardImgMUG" alt="Spellskite">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Dismember&type=card" class="cardImgMUG" alt="Dismember">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Viridian+Corrupter&type=card" class="cardImgMUG" alt="Viridian Corrupter">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Carrion+Call&type=card" class="cardImgMUG" alt="Carrion Call">
                    </div>
                </div>
                <!--EDIT FROM HERE-->
                <p>The cards that Infect opponents bring in are those that counteract removal or add extra threats to their deck. Cards such as Shapers' Sanctuary and Spellskite punish us from using removal spell and blink effects on their creatures. While Shapers' Sanctuary does not actually stop the removal and blinks, it does generate a cad engine for the opponent, which can help them get a win. Spellskite is a very strong card against B/W Eldrazi and Taxes, as it stops Eldrazi Displacer, Flickerwisp, Wasteland Strangler, Fatal Push, and Path to Exile from stopping their infect creatures. The good news is that removal spells answer Spellskite, whereas Shapers' Sanctuary is a little harder to answer. In addition, removal spells such as Dismember come in against B/W Eldrazi and Taxes, as it can deal with Thalia, Guardian of Thraben and Eldrazi Displacer. Ultimately, it is very difficult to play around these removal spells, as your blink effects are usually left to stop the opponent's infect creatures from attacking. The final type of card that is boarded in is additional threats. Viridian Corrupter, while not in the sample list, is a very powerful card. It acts as another creature with infect as well as an answer to B/W Eldrazi and Taxes's artifacts (Aether Vial, Blade Splicer, and Tidehollow Sculler). Carrion Call is a strong one as well, as it creates two infect creatures. This card is not that big of an issue, however, as Flickerwisp and Eldrazi Displacer permanently remove the tokens, while Orzhov Pontiff sweeps the one-toughness creatures.</p>
                <br>
                <h3>How the Matchup Plays Out Post-board</h3>
                <br>
                <p>The biggest differences in the games post-board are that they are slightly slower and more attrition based. B/W Eldrazi and Taxes's additional removal spells coupled with the extra protection cards in Infect's post-board deck makes games go longer. Removal spells need to be used wisely, as cards such as Spellskite are huge detriments to B/W Eldrazi and Taxes's game plan. It is important to be slightly faster in the post-board games, as the long game is less favored for B/W Eldrazi and Taxes games two and three compared to the first game. Shapers' Sanctuary can easily win a game for the Infect opponent, as they will draw a plethora of cards or else they will kill you. Therefore, the best way to combat that card is to attack aggressively. Your role in the matchup is still to be the defender, but shifting to the aggressor is often done at an earlier stage of the game. Keep in mind that, because Spellskite's ability costs a Phyrexian blue mana, often times the opponent will opt to pay life to redirect an ability to Spellskite. Use this to your advantage, as it can leave the opponent dead to your creatures faster than they can kill you with an infect creature. In addition, both Orzhov Pontiff and Settle the Wreckage are ways to circumvent Shapers' Sanctuary/Spellskite, so keep that in mind when planning how to combat the opponent's threats.</p>
                <br>
                <hr>
                <h3>Conclusion</h3>
                <p>All in all, Infect is an excellent matchup for B/W Eldrazi and Taxes. Cards such as Flickerwisp and Eldrazi Displacer heavily disrupt their attacking gameplan, while the two hate-bears keep them short on the necessary mana to win. Wasteland Strangler and Path to Exile also help keep the opponent off of their attack-and-pump plan. Post-board, the Infect opponent gets more answers and ways to hinder B/W Eldrazi and Taxes's strategy, but the games are still quite favorable due to the plethora of removal spells now available to B/W Eldrazi and Taxes. I would wager the matchup is at least 60% in B/W Eldrazi and Taxes's favor, but it is a quite skillful one in regards to properly using blink effects.</p>
                <br>
                <div class="panel-group" id="accordion4">
                        <div class="panel panel-format">
                        <div class="panel-heading">
                          <h3 class="panel-title">
                            <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion4" href="#collapse1d" id="tldr">
                            TL;DR- Infect Matchup</a>
                          </h3>
                        </div>
                        <div id="collapse1d" class="panel-collapse collapse">
                          <div class="panel-body">
                              <p>Infect is a very favorable matchup for B/W Eldrazi and Taxes, as their strategy is hampered by our hatebears, disruptive creatures, and other spells. They are often the aggressor in this matchup, but it is important to attack as much as possible. Their plan is to win off of infect creatures such as Blighted Agent and Inkmoth Nexus through using pump spells. Two of our blinkers, Eldrazi Displacer and Flickerwisp, do an excellent job at negating their pump spells, while our removal spells and Ghost Quarters take care of many of their infect creatures. Also, Thalia, Guardian of Thraben taxes them heavily, while Leonin Arbiter is useful against their eight fetch lands.</p>
                              <br>
                              <p>When sideboarding, bring in every removal spell, including Orzhov Pontiff and Settle the Wreckage. The cards to take out are the weaker creatures such as Leonin Arbiter and Blade Splicer. The post-board games are slower, as the Infect opponent has more attrition cards to combat our removal spells and blink effects. Post-board games get tougher but still favorable. The biggest interaction to keep in mind is blink effects. These are best saved for their infect creatures, but they must be used wisely. A defensive spell such as Blossoming Defense or Vines of Vastwood can blow us out, so try to save Eldrazi Displacer activations until the opponent makes a move. Also, blocking is excellent in this matchup, but be wary of Pendelhaven.</p>
                          </div>
                        </div>
                      </div>      
              </div>
                <br>
                <hr>
            </div>
                <h4>Additional Content</h4>
                <div class="row">
                    <div class="col-sm-4">
                        <h2><a href="humans">Previous Matchup Guide: Humans (B/W E&T)</a></h2>
                    </div>
                    
                    <div class="col-sm-4">
                        <h2><a href="/modern/mulligans#mg" id="mgrec">Current Mulligan Game</a></h2>
                    </div>
                    <div class="col-sm-4">

                        <h2><a href="gifts%20storm">Next Matchup Guide: Gifts Storm (B/W E&T)</a></h2>
                    </div>
                    
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
            <script src="/recommender.js"></script>
            <?php
                include("../../../scripts/footer.php");
            ?>
            <script>var jStr = <?php echo json_encode($lastModDate); ?>;</script>
            <script src="/loadpublishinfo.js" type="text/javascript"></script>
    </body>
</html>
