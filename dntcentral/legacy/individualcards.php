<?php
    include("../scripts/searchscript.php");
    include("../scripts/cardlistdb.php");
    
?>
<?php
    $filename = 'individualcards.php';
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

    

        <title>Legacy- Individual Cards</title>
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
            <div class="container-fluid" id="content">
                <div class="jumbotron">
                <h1>Individual Card Discussions:</h1>
                <small class="iFoot">
                    <div class="row">
                    <!-- may break it up into more cols later. also change link colors to make it obvious that they are links-->
                        <div class="col-sm-6">
                            <h3>Creatures:</h3>
                            <ul>
                                <li><a class="iA" href="#iPrelate">sanctum prelate</a></li>
                                <li><a class="iA" href="#iWisp">flickerwisp</a></li>
                                <li><a class="iA" href="#iThalia">thalia, guardian of thraben</a></li>
                                <li><a class="iA" href="#iStoneforge">stoneforge mystic</a></li>
                                <li><a class="iA" href="#iRevoker">phyrexian revoker</a></li>
                                <li><a class="iA" href="#iMom">mother of runes</a></li>
                                <li><a class="iA" href="#iRecruiter">recruiter of the guard</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <h3><a href="#nonCSpell">Noncreatures:</a></h3>
                            <ul>
                                <li><a class="iA" href="#iVial">aether vial</a></li>
                                <li><a class="iA" href="#iPort">rishadan port</a></li>
                                <li><a class="iA" href="#iWaste">wasteland</a></li>
                                <li><a class="iA" href="#iStP">swords to plowshares</a></li>
                                <li><a class="iA" href="#iEquipment">equipment</a></li>
                                <li><a class="iA" href="#iKarakas">karakas</a></li>
                            </ul>
                        </div>
                    </div>
                </small>
            </div>
            <div class="iCards" id="iPrelate">
                <h3>Sanctum Prelate <small class="indi"><a href="#">top</a></small></h3>
                <h5>General Tips & Tricks:</h5>
                <p class="iP">Sanctum Prelate is a linear effect- so be aware before putting her on 1 vs. Grixis Delver when you have a hand full of Swords to Plowshares and paths. Also, similar to Phyrexian Revoker, announcing Sanctum Prelate's number is not done on the stack: do not announce it before she resolves, as your opponents can respond to it if you make that mistake. On the flip side, opponents cannot respond to her by vialing him in, unless they choose to respond to the vial activation. Sanctum Prelate does not turn off creatures, so you are free to play your Mother of Runes after resolving a Sanctum Prelate on 1. Keep in mind, you can still put equipment into play if Sanctum Prelate is on 2/3/5: just Aether Vial it in with Stoneforge Mystic.</p>
                <h5>Matchup-Specifics:</h5>
                <h6>Sneak and Show:</h6>
                <p class="iP">Three hits Show and Tell and Kozilek's Return, 4 hits Sneak Attack. Generally put her on 3. Also putting her on one stops their cantrips, which can be better if you have a way to deal with Omniscience or are denying them the mana to Show and Tell. Also putting a Sanctum Prelate into play off of a Show and Tell and naming 3 hits Cunning Wish/Intuition, while one hits cantrips. </p>
                <h6>Miracles:</h6>
                <p class="iP">One of the more well-known tricks against Miracles is vialing in a prelate on 6 in response to them revealing a Terminus. Before doing this, however, be aware of Swords to Plowshares. Putting a Sanctum Prelate on six and having an active Mother of Runes almost always means the game is locked up. If you don't have an active Mother of Runes, prelate is most effective on one, as she turns off their 12 cantrips and main removal spells. Also, vialing in a prelate in response to a Snapcaster Mage targeting a spell in their graveyard (typically Swords to Plowshares) can help grant you card advantage.</p>
                <h6>Lands:</h6>
                <p class="iP">This matchup is the main reason Sanctum Prelate is played in Death and Taxes. The majority of the time, you will put prelate on two, because their two best spells against us (Life from the Loam and Punishing Fire) cost two mana. The only other number worth considering is 1, as it turns off their Molten Vortex (assuming they haven't already resolved one), Gambles, and Crop Rotations. However, you really only put a prelate on 1 if you have one on 2 already, or if you surgicalled their loam/have a Rest in Peace in play. Keep in mind, they usually bring in some number of Krosan Grips postboard, so naming 3 is also a fringe choice to keep in mind depending on the game state.</p>
                <h6>RUG Delver:</h6>
                <p class="iP">1. That easy.</p>
                <h6>Mono-Red Stompy/Prison:</h6>
                <p class="iP">4 hits Fiery Confluence, their best card vs. us maindeck (and usually post-board). </p>
                <h6>Storm:</h6>
                <p class="iP">4 hits wincons (and massacre!).</p>
            </div>
            <div class="iCards" id="iWisp">
                <h3>Flickerwisp <small class="indi"><a href="#">top</a></small></h3>
                <h5>General Tips & Tricks:</h5>
                <p class="iP">Flickerwisp saves cards! Wisp also temporarily bounces cards. Flickerwisp resets counters. Flickerwisp kills tokens. Flickerwisp is one of the best cards in your deck, and most decks will fear your Aether Vial on 3 due to risk of a Flickerwisp coming off of it to negate their removal or kill their token.</p>
                <h5>Matchup Specifics:</h5>
                <h6>Mirror:</h6>
                <p class="iP">Stuff gets weird, especially with Containment Priest</p>
                <h6>Reanimator:</h6>
                <p class="iP">Flickerwisp's primary role in this matchup is to attack them or blink one of your own creatures for value. Flickerwisp can also make them discard a card through blinking Chrome Mox (assuming they run it).</p>
                <h6>Lands:</h6>
                <p class="iP">Flickerwisp's number one goal in this matchup is to kill Marit Lage. Besides the obvious tricks to save your creatures from removal (Punishing Fire, Molten Vortex, etc), Flickerwisp can also temporarily remove powerful lands, mainly Maze of Ith, to help get extra points in. Also, Flickerwisp can be used to blink Mox Diamond, and this play is especially satisfying when your opponent lacks a land to discard to the enter-the-battlefield trigger. Note: Flickerwisp cannot save your artifacts from a Korsan Grip, as it has split second!</p>
                <h6>Storm:</h6>
                <p class="iP">Flickerwisp can do interesting stuff with Lion's Eye Diamond if your opponent runs it out too early. Basically, if your opponent plays Lion's Eye Diamond and then tries going off, then you can Aether Vial in a Flickerwisp before they cast Infernal Tutor to get rid of the Lion's Eye Diamond, turning off 3 of their mana and their discard outlet for their tutor for the turn. Timing is key, and it is really case-by-case dependent, just make sure you don't wait too late, as they may play around a Flickerwisp and as a result only play enough spells to go off! Otherwise, Flickerwisp is typically used to port one of their lands or take a card out of their hand by blinking Chrome Mox. Postboard, you can also hold onto a Flickerwisp to protect your Thalia, Guardian of Thraben/Ethersworn Canonist from a Chain of Vapor or Fatal Push.</p>
                <h6>Czech Pile:</h6>
                <p class="iP"></p>
            </div>
            <div class="iCards" id="iThalia">
                <h3>Thalia, Guardian of Thraben <small class="indi"><a href="#">top</a></small></h3>
                <h5>General Tips & Tricks:</h5>
                <p class="iP">Thalia, Guardian of Thraben is one of the strongest creatures in the deck and has many nice interactions with other cards. First strike is very nice with winning combat or ambushing any attacking x-2s or x-1s with an Aether Vial on 2. First strike also works well with your equipment, most notably Umezawa's Jitte, allowing for you to do more tricks to save Thalia, Guardian of Thraben or kill their creatures for free. Thalia also synergizes with Karakas, allowing you to use the land to save Thalia, Guardian of Thraben from removal or even just give her pseudo-vigilance. On the other end, Thalia, Guardian of Thraben does have some non-bos with your cards, most notably non creature spells. Having a Swords to Plowshares or equipment costing 1 more can really mess with your game plan, so keep that in mind before playing this hate bear! </p>
        <h5>Matchup Specifics:</h5>
        <h6>Shardless BUG:</h6>
        <p class="iP">One key interaction worth noting in decks like shardless or jund that utilize the cascade mechanic is that cascaded spells are then casted, meaning that, despite being "free", taxes still apply to their casting costs (i.e. their Ancestral Visions will cost 1 colorless if you have a thalia in play). Leaving an Aether Vial on two can threaten a Thalia, Guardian of Thraben in response to the cascade trigger, making their shardless just a 2/2 for 3 (so long as they hit a noncreature). Otherwise, Thalia, Guardian of Thraben in this matchup just works as a taxer and a nice beater that can kill almost all of their creatures for free due to her first strike (except True-Name Nemesis and Leovold, Emissary of Trest).</p>
        <h6>Miracles:</h6>
        <p class="iP">Thalia, Guardian of Thraben is very powerful against this deck, since it can dodge removal with Karakas easily (since they don't run land destruction), along with really hurting their mana due to their deck consisting of 12 one-mana cantrips. Typically, you want to play Thalia, Guardian of Thraben off of an Aether Vial or a Cavern of Souls, while leaving a Karakas untapped to save her. Of course, running her out turn two blindly is fine in situations (especially if they did not force of will your Aether Vial), but do so with risk. Thalia, Guardian of Thraben can also be Aether Vialed in response to a miracle trigger for Terminus when they only have one mana available, causing them to be unable to cast it, a fun play I have yet to perform. Overall, Thalia, Guardian of Thraben is your best way of taxing your opponent due to Wasteland being worse with their basics and Phyrexian Revoker not hitting any of their mana. </p>
        <h6>Lands:</h6>
        <p class="iP"></p>
            </div>
            <div class="iCards" id="iRevoker">
                <h3>Phyrexian Revoker <small class="indi"><a href="#">top</a></small></h3>
                <h5>General Tips & Tricks:</h5>
                <p class="iP">Phyrexian Revoker is the kind of card that takes tons of experience playing Legacy to utilize correctly. For example, if your opponent goes turn one Scalding Tarn, fetch Island, then Ponder, than the best name with Phyrexian Revoker would either be Jace, the Mind Sculptor (Miracles) or Sneak Attack (S&S), but not playing enough of the format will make it harder to identify your opponent's deck in the early stages, especially if it's a less mainstream deck.</p>
                <h5>Matchup specifics:</h5>
                <h6>Sneak and Show:</h6>
                <h6>Lands:</h6>
                <p class="iP">Phyrexian Revoker has two pre-board names (that typically don't change after post-board): Mox Diamond, and Molten Vortex. Molten Vortex is certainly the stronger of the two against us, but it is usually run as a 1 or 2 of, depending on lists, while Mox Diamond is a definite 4 of.</p>
                <h6>Mirror:</h6>
            </div>
            <div class="iCards" id="iMom">
                <h3>Mother of Runes <small class="indi"><a href="#">top</a></small></h3>
                <h5>General Tips & Tricks:</h5>
                <p class="iP">Mother of Runes protects your team from almost every removal spell your opponent can have. In fact, having an Aether Vial on 1 early on can cause your opponent to not play anything in fear or an end-of-turn Mother of Runes. Mother of Runes is weakest against boardwipe-heavy decks, like Miracles, but still is strong enough to run. Mother of Runes can also be used to make one of your creatures "unblockable" by giving it protection from the color of the creature(s) on defense (this is especially useful against cards like True-Name Nemesis). With great power comes great responsibility. Quite often, your opponent will play a kill spell on one of your creatures despite having an untapped Mother of Runes to bait the activation. While sometimes it is correct (or they just forgot about to activation) to activate Mother of Runes to save the creature, if you can play safe than it's usually better to do so, so long as it doesn't ruin your chances of victory.
                </p>
                <h5>Matchup Specifics:</h5>
                <h6>Grixis Delver:</h6>
                <p class="iP">Most versions of this deck play very few non-targeted removal, with those few exceptions being edicts (which are relatively easy to play around). Therefore, Mother of Runes is very powerful and valuable in this matchup, and should almost only be played when you are either baiting out removal or you know she will resolve and not die (seriously, play around Daze whenever feasible). Mother of Runes can be used not only to protect your creatures, but also to give one of your beaters pro blue to get damage (or equipment triggers) through a True-Name Nemesis.</p>
                <h6>Czech Pile:</h6>
            </div>
             <div class="iCards" id="iRecruiter">
                <h3>Recruiter of the Guard <small class="indi"><a href="#">top</a></small></h3>
        <h5>General Tips & Tricks:</h5>
        <p class="iP">Recruiter of the Guard may be the most difficult card in the deck to play/utilize properly. Since Recruiter of the Guard acts as a tutor for (almost) all of your creatures, it can be difficult to figure out which creature is best for the scenario, especially when multiple seem viable in the matchup (like versus slower decks). Recruiter of the Guard is also very powerful with Flickerwisp, as it allows you to get your wisps onto the battlefield by repeatedly blinking your Recruiter of the Guard.</p>
        <h5>Matchup Specifics:</h5>
        <h6>Sneak and Show:</h6>
        <p class="iP">Typically, Recruiter of the Guard is used to get your hoser cards in order to prevent them from comboing off. Your best creatures versus S&S are Phyrexian Revoker, Thalia, Guardian of Thraben, and Sanctum Prelate preboard, with Ethersworn Canonist, Containment Priest, and Palace Jailer being post-board hosers. Preboard, you often want to get Sanctum Prelate (assuming you have one maindeck), as it shuts down Show and Tell after placing it on 3, and the non-wish builds have 0 maindeck answers to it. If your opponent already has a Sneak Attack into play, however, than grabbing a Phyrexian Revoker to shut if off is also a strong play. If you play a Recruiter of the Guard and have an Aether Vial on 2 open and fear dying next turn (either they have a Sneak Attack in play or you wish to buy another turn in order to play your lock pieces than) than getting a Thalia, Guardian of Thraben or revoker is usually stronger than Sanctum Prelate. If you have an Aether Vial on 3 open and your opponent plays show and tell, than vialing in Recruiter of the Guard before their spell resolves allows you to put any creature into play- so if you wish to grab a Flickerwisp to buy a turn from dying to an Omniscience, Phyrexian Revokering a Griselbrand/Sneak Attack, or Palace Jailer an emrakul, than make sure to Recruiter of the Guard before the spell resolves. Recruitering for Flickerwisp is also strong vs this deck (especially preboard, where you lack answers to Omniscience), as blinking their Omniscience can buy you enough time to kill them (more info in Flickerwisp section). Postboard, I often value grabbing Leonin Relic-warden or Ethersworn Canonist with Recruiter of the Guard, as omniscience is their strongest card vs. you. Sanctum Prelate is usually stronger post board, as it cuts them off of Kozilek's Return as well as show and tell (but beware of sudden shock).</p>
        <h6>Mirror:</h6>
        <h6>Storm:</h6>
        <p class="iP">Since storm is a pure combo deck, Recruiter of the Guard will grab your disruption pieces. You're best maindeck card versus storm is Thalia, Guardian of Thraben. Storm's only disruption is discard, so keep this in mind before recruitering for your creature (as it reveals it, making cabal therapy no longer blind if they haven't already played a discard spell). After Thalia, Guardian of Thraben, Sanctum Prelate/Vryn Wingmare are good (assuming you have one of the two), along with Phyrexian Revoker (naming Lion's Eye Diamond 9/10 times). Flickerwisp is also a good choice to blink a land or Lion's Eye Diamond, assuming you have an Aether Vial. Postboard, your best card is Ethersworn Canonist, but grabbing a Mother of Runes in order to protect your already resolved Thalia, Guardian of Thraben/Ethersworn Canonist from bounce spells/ Fatal Push is a strong play. Keep in mind, some players run Massacre in their sideboard, so naming Sanctum Prelate on 4 not only shuts off wincons, but also their best answer to your hatebears. While Recruiter of the Guard is not a powerful card post board, it does get you the disruption you need in order to beat them.</p>
        <h6>Reanimator:</h6>
        <p class="iP">Combo: grab disruption. Preboard- Thalia, Guardian of Thraben is your best bet. Recruiter of the Guard is usually too slow preboard, but gets better postboard, as it can grab your Containment Priest.</p>
        <h6>Czech Pile:</h6>
        <p class="iP">Recruiter of the Guard plays the role as a value creature in this matchup usually, as chaining Flickerwisp keeps you ahead in both board and cards. Alternatively, recruiter can grab Mirran Crusader, a hoser versus the deck especially preboard (where they only have 1-2 answers to it).</p>
            </div>
            <h1 id="nonCSpell">Non Creature Spells:</h1>
 <!--VIAL--><div class="iCards" id="iVial">
                <h3>Aether Vial <small class="indi"><a href="#">top</a></small></h3>
                <h5>General Tips & Tricks:</h5>
                <p class="iP">Aether Vial is one of the strongest cards in the deck, bringing power to many of your underwhelming creatures (without Aether Vial, Flickerwisp would be significantly weaker, to the point of unplayability). Generally, you want to put your first Aether Vial on three, than your second on two, but sometimes it is better to keep the former on two, like if you have a lot of two drops in hand, or if you have a Thalia, Guardian of Thraben plus Karakas and wish to utilize the interaction. One tip with Aether Vial that I adimitedly do not use enough is always activating Aether Vial at the end of your opponent's turn to bluff anything. This can cause your opponent to react in a different way, like kill a creature in response to the trigger.
             </p>
             <h5>Matchup Specifics:</h5>
             <h6>Miracles:</h6>
             <h6>Mirror:</h6>
            </div>
            
            <div class="iCards" id="iPort">
                <h3>Rishadan Port <small class="indi"><a href="#">top</a></small></h3>
                <h5>General Tips & Tricks:</h5>
            </div>
            <div class="iCards" id="iStoneforge">
                <h3>Stoneforge Mystic <small class="indi"><a href="#">top</a></small></h3>
             <h5>General Tips & Tricks:</h5>
             <p class="iP">Stoneforge Mystic is a very powerful card (as seen by its spot in the Modern ban list), allowing you to vial in Batterskull as early as turn 3. However, from my experience, tutoring a Battleskull with Stoneforge Mystic's ability is generally a poor plan, as any removal on your Stoneforge Mystic leaves you with an (generally) uncastable spell. On the other hand, if you have an active Mother of Runes, or know your opponent lacks removal, then Batterskull gets more appealing. Generally, Umezawa's Jitte is for creature heavy decks, while Sword of Fire and Ice is for the more controlling decks.</p>
             <h5>Matchup Specifics:</h5>
             <h6>Mirror:</h6>
            </div>
            
            
            <div class="iCards" id="iWaste">
                <h3>Wasteland <small class="indi"><a href="#">top</a></small></h3>
                <h5>General Tips & Tricks:</h5>
                <p class="iP">Wasteland is very matchup specifics- sometimes it does nothing, while other times it can single-handedly win games.</p>
            </div>
            <div class="iCards" id="iStP">
                <h3>Swords to Plowshares <small class="indi"><a href="#">top</a></small></h3>
                <h5>General Tips & Tricks:</h5>
                <p class="iP">Swords to Plowshares is a very efficient kill spell, as for only one mana (or two if Thalia, Guardian of Thraben is in play), you get to exile their (non True-Name Nemsis) creature, which turns off graveyard shenangigans, at the cost of them gaining a few life (or a measly 20 in Marit Lage's case). Swords to Plowshares can also be used as a lifegain spell in response to a lethal burn spell, a relevant play in certain scenarios (like burn). </p>
                <h5>Matchup Specifics:</h5>
                <h6>Czech Pile:</h6>
                <p class="iP">Swords to Plowshares typically is casted to either kill their Leovold, Emissary of Trest or to kill one of their value creatures (Snapacster Mage/Baleful Strix) to push through damage. Swords to Plowshares exiling is very relevant, as it does not allow the creature to be recovered through Kolaghan's Command (or unearth if they are running that). This card is not great in the matchup, as Leovold, Emissary of Trest is not great against you and your main plan is either winning off of value cards in the sideboard or pushing damage through with Mirran Crusader, so I tend to side out most if not all of them.</p>
                <h6>Sneak and Show:</h6>
                <h6>Mirror:</h6>
                <p class="iP">Swords to Plowshares is very valuable in this matchup, as your deck has an abundance of threats and you only have four pre board answers to them, so use it wisely. Generally, Swords to Plowshares is strongest on Mother of Runes (assuming she's summoning sick), than Phyrexian Revoker (as long as its target is relevant), than their beater (fliers/Mirran Crusader). Stoneforge Mystic is a good target only if they have a Batterskull they will bring in, else she is irrelevant. Also, casting Swords to Plowshares on their creatures equipped in order to dodge Umezawa's Jitte triggers/Sword of Fire and Ice trigger stops them from taking over the game.</p>
            </div>
            
            <div class="iCards" id="iEquipment">
                <h3>Equipment</h3>
                <h5>General Tips and Tricks:</h5>
                <p class="iP">Sword of Fire and Ice is best in grindy, control matchups (Czech pile, Miracles, etc.), while Umezawa's Jitte is strongest in creature based matchups (mirror, delver, etc.). Batterskull gets a lot worse without a Stoneforge Mystic to vial it in if in hand, along with being pretty ineffective if the germ is killed, but it can still be a powerful card once you get enough mana to equip it or bounce and replace it.</p>
            </div>
            
            <div class="extra-space"></div>
            </div>
            
            <script>var jArray = <?php echo json_encode($listOfCardNames); ?>;</script>
                <script src="/loadcardhoversettings.js"></script>
            
            <?php
                include("../scripts/footer.php");
            ?>
            <script>var jStr = <?php echo json_encode($lastModDate); ?>;</script>
            <script type="text/javascript" src="/loadpublishinfo.js"></script>
    </body>
</html>

