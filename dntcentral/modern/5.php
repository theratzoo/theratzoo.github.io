<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <title>Burn</title>
        <link rel="stylesheet" type="text/css" href="../style.css">
        <script>
            $(document).ready(function() {

                var docHeight = $(window).height();
                var footerHeight = $('#footer').height();
                var footerTop = $('#footer').position().top + footerHeight;

                if (footerTop < docHeight)
                    $('#footer').css('margin-top', 10+ (docHeight - footerTop) + 'px');
            });
        </script>
    </head>
    <body class="homePage">
        <div class="container">
            <nav class="navbar navbar-inverse">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Home</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="format">
                                Formats
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="../format">Format Page</a></li>
                                <li><a href="../legacy/">Legacy</a></li>
                                <li><a href="./">Modern</a></li>
                                <li><a href="../vintage">Vintage</a></li>
                                <li><a href="../commander">Commander</a></li>                           
                                <li><a href="../standard/">Standard</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                Modern Guides
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                            <li><a href="ent">Eldrazi&Taxes Tips/Tricks</a></li>
                            <li><a href="splashes">Splashes</a></li>
                            <li><a href="mulligans">Mulligan Guide</a></li>
                            <li><a href="budget">Budget Options</a></li>
                            <li><a href="matchupguide.php">Matchup Guide</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                Legacy Guides
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                            <li><a href="../legacy/individualcards">Individual Cards</a></li>
                            <li><a href="../legacy/othervariants">Other Variants</a></li>
                            <li><a href="../legacy/sideboard">Sideboarding 101</a></li>
                            </ul>
                        </li>
                        <li><a href="../spicespace/">Spice Space</a></li>
                        <!--<li><a href="../onlinestats">MTGO Stats</a></li>-->
                        <li><a href="../flickerwisp">Flickerwisp 101</a></li>
                        <li><a href="../resources">Other Resources</a></li>
                    </ul>
                </nav>
            <div class="jumbotron">
                <h1>Naya Burn</h1>
            </div>
            
            <div class="row">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-9">
                    <h2>Overall Notes:</h2>
                    <p>Burn is typically one of our better matchups. Their burn spells often are forced to target our problematic creatures (i.e. <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=270445" class="discussionA">Thalia, Guardian of Thraben<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=270445&type=card" alt="Thalia, Guardian of Thraben" class="popupImg"></span></a></span>, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=209287" class="discussionA">Leonin Arbiter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=209287&type=card" alt="Leonin Arbiter" class="popupImg"></span></a></span>), while our threats can pressure their life total quite well. That being said, without a <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=270445" class="discussionA">Thalia, Guardian of Thraben<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=270445&type=card" alt="Thalia, Guardian of Thraben" class="popupImg"></span></a></span>, game one can often be a race determined by the coinflip. In addition, their creatures are dwarfed by ours, making them essentially dead draws (excluding <span class="hover_img"><a href="" class="discussionA">Grim Lavamancer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Grim+Lavamancer&type=card" class="popupImg"></span></a></span> of course) in the later stages of the game. Postboard, the matchup can get even better, as anti-aggro cards and life gain options can really hose the burn player's strategy. While there are certainly games where they get a turn 3/4 kill, the matchup is often favored pretty well for us (~65%).</p>
                    <hr>
                    <h2>Our best cards:</h2>
                    <div class="muimage">
                        <img src="https://orig00.deviantart.net/df4a/f/2012/012/0/4/thalia__guardian_of_thraben_by_algenpfleger-d4m3bms.jpg" class="muimage" alt="Thalia, Guardian of Thraben">
                    </div>
                    <br>
                    <br>
                    <p><span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=270445" class="discussionA">Thalia, Guardian of Thraben<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=270445&type=card" alt="Thalia, Guardian of Thraben" class="popupImg"></span></a></span> is our single best card in the burn matchup. Not only does her first strike prevent <span class="hover_img"><a href="" class="discussionA">Goblin Guide<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Goblin+Guide&type=card" class="popupImg"></span></a></span>s and <span class="hover_img"><a href="" class="discussionA">Eidolon of the Great Revel<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eidolon+of+the+Great+Revel&type=card" class="popupImg"></span></a></span>s from attacking, but she also taxes their burn spells, making her an instant target of their burn spells, all for the price of 2 mana. While <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=270445" class="discussionA">Thalia, Guardian of Thraben<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=270445&type=card" alt="Thalia, Guardian of Thraben" class="popupImg"></span></a></span> is typically bad to draw in multiples, that is not true in this matchup; often, the burn player's mana is very tight, which in turn makes <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=270445" class="discussionA">Thalia, Guardian of Thraben<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=270445&type=card" alt="Thalia, Guardian of Thraben" class="popupImg"></span></a></span>'s tax very costly on them, forcing them to point <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=397722" class="discussionA">Lightning Bolt<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=397722&type=card" alt="Lightning Bolt" class="popupImg"></span></a></span>s and <span class="hover_img"><a href="" class="discussionA">Rift Bolt<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Rift+Bolt&type=card" class="popupImg"></span></a></span>s at her. Our other hate bear, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=209287" class="discussionA">Leonin Arbiter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=209287&type=card" alt="Leonin Arbiter" class="popupImg"></span></a></span>, is also solid in this matchup; as just mentioned, they are very light on mana, so denying them mana is very powerful. Otherwise, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=233068" class="discussionA">Blade Splicer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=233068&type=card" alt="Blade Splicer" class="popupImg"></span></a></span> is a great blocker and keeps us from dying to burn dorks, and our fliers and also important to close out the game.</p>
                    <hr>
                    <h2>Our worst cards:</h2>
                    <div class="muimage">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSq4kyrrtj13BosF0Zb6SOOkRCFy-eMbtY8EYcVj8ifjpfmpw" class="muimage" alt="Thraben Inspector">
                    </div>
                    <br>
                    <br>
                    <p>I've found <span class="hover_img"><a href="" class="discussionA">Eldrazi Displacer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="popupImg"></span></a></span> to be too slow in this matchup, especially since it dies to the 12+ bolts that they run. In addition, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=thraben%20inspector" class="discussionA">Thraben Inspector<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=409784&type=card" alt="Thraben Inspector" class="popupImg"></span></a></span> is not exciting, as a 1/2 cannot block very well on its own (albeit it is nice in pairs). Overall, our card quality is very high in this matchup, making us not have a "worst card" compared to other matchups like storm.</p>
                    <hr>
                    <h2>OP's best cards:</h2>
                    <div class="muimage">
                        <img src="https://78.media.tumblr.com/7249545cfea1b0196add4ec75a60b6b2/tumblr_nbdp9sSnvp1thxsmlo1_640.jpg" class="muimage">
                    </div>
                    <br>
                    <br>
                    <p>Their removal spells are what hurt us the most, especially <span class="hover_img"><a href="" class="discussionA">Searing Blaze<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Searing+Blaze&type=card" class="popupImg"></span></a></span>. <span class="hover_img"><a href="" class="discussionA">Grim Lavamancer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Grim+Lavamancer&type=card" class="popupImg"></span></a></span> is the single most powerful card against us, as we never board in graveyard hate, so the critter will take over the game if unanswered. In certain situations, <span class="hover_img"><a href="" class="discussionA">Eidolon of the Great Revel<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eidolon+of+the+Great+Revel&type=card" class="popupImg"></span></a></span> can lock us down, but often I've found the card to not do much against us. Overall, we don't care much about their (non <span class="hover_img"><a href="" class="discussionA">Grim Lavamancer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Grim+Lavamancer&type=card" class="popupImg"></span></a></span>) creatures, and usually are more worried about their burn spells, especially the ones that kill <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=270445" class="discussionA">Thalia, Guardian of Thraben<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=270445&type=card" alt="Thalia, Guardian of Thraben" class="popupImg"></span></a></span>.</p>
                    <hr>
                    <h2>Sideboarding:</h2>
                    <div class="muimage">
                        <img src="https://static1.squarespace.com/static/562e2633e4b0b7066d01cbfa/59d928fe914e6b0b822251d7/59d9292b2aeba571e4fe0429/1507404076556/DKA2VyxXcAAl5qH.jpg-large.jpeg?format=750w" class="muimage" alt="Auriok Champion">
                    </div>
                    <br>
                    <br>
                    <p>As mentioned in one of the prior sections, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=thraben%20inspector" class="discussionA">Thraben Inspector<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=409784&type=card" alt="Thraben Inspector" class="popupImg"></span></a></span>s and displacers generally come out. Trimming a <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=151089" class="discussionA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=151089&type=card" alt="Flickerwisp" class="popupImg"></span></a></span> is also ok, as it doesn't do a whole lot in this matchup. Bring in all of the anti-aggro cards: <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=382179" class="discussionA">Burrenton Forge-Tender<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=382179&type=card" alt="Burrenton Forge-Tender" class="popupImg"></span></a></span>, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=72921" class="discussionA">Auriok Champion<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=72921&type=card" alt="Auriok Champion" class="popupImg"></span></a></span>, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=141976" class="discussionA">Kitchen Finks<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=141976&type=card" alt="Kitchen Finks" class="popupImg"></span></a></span>, etc. all come in. Extra removal spells can come in, but it really depends on which ones. For example, we do <i>not</i> want to bring in dismember against the deck that is <span class="hover_img"><a href="" class="discussionA">Lava Spiking<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Lava+Spike&type=card" class="popupImg"></span></a></span> us, as it essentially is a boros charm on ourselves. Conversly, sunlance is very good in this matchup, as it kills any of their creatures without given them a land, albeit at sorcery speed. <span class="hover_img"><a href="" class="discussionA">Shalai, Voice of Plenty<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Shalai,+Voice+of+Plenty&type=card" class="popupImg"></span></a></span> also comes in vs. them, as burn really cannot beat her unless they have <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=179235" class="discussionA">Path to Exile<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=179235&type=card" alt="Path to Exile" class="popupImg"></span></a></span> to exile. Speaking of cards that burn cannot beat, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=83338" class="discussionA">Worship<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=83338&type=card" alt="Worship" class="popupImg"></span></a></span> is another auto-win vs. burn in the majority of scenarios.</p>
                    <hr>
                    <h2>Important Interactions:</h2>
                    <div class="muimage">
                        <img src="https://vignette.wikia.nocookie.net/gamelore/images/3/32/Eidolon_of_the_Great_Revel.jpg/revision/latest?cb=20140909125924" alt="Eidolon of the Great Revel" class="muimage">
                    </div>
                    <br>
                    <br>
                    <p><span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=240096" class="discussionA">Restoration Angel<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=240096&type=card" alt="discussionA Angel" class="popupImg"></span></a></span> does not make us take 2 off of <span class="hover_img"><a href="" class="discussionA">Eidolon of the Great Revel<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eidolon+of+the+Great+Revel&type=card" class="popupImg"></span></a></span>- making it very valuable whenever said red creature is in play. Speaking of <span class="hover_img"><a href="" class="discussionA">Eidolon of the Great Revel<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eidolon+of+the+Great+Revel&type=card" class="popupImg"></span></a></span>, with enough pressure from fliers, we can occasionally lock the opponent out of the game through their own <span class="hover_img"><a href="" class="discussionA">Eidolon of the Great Revel<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eidolon+of+the+Great+Revel&type=card" class="popupImg"></span></a></span>. <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=382179" class="discussionA">Burrenton Forge-Tender<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=382179&type=card" alt="Burrenton Forge-Tender" class="popupImg"></span></a></span> can do more than stop a <span class="hover_img"><a href="" class="discussionA">Boros Charm<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Boros+Charm&type=card" class="popupImg"></span></a></span> to the face or save one of our creatures; it can also block one of their creatures forever and even sac to fog one of their attackers. Of note, <span class="hover_img"><a href="" class="discussionA">Skullcrack<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Skullcrack&type=card" class="popupImg"></span></a></span> does make <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=382179" class="discussionA">Burrenton Forge-Tender<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=382179&type=card" alt="Burrenton Forge-Tender" class="popupImg"></span></a></span> die if it blocks one of the opponent's creatures. When scrying before a game, keeping a land on top can get us said land by a turn 1 <span class="hover_img"><a href="" class="discussionA">Goblin Guide<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Goblin+Guide&type=card" class="popupImg"></span></a></span>.</p>
                </div>
                <div class="col-sm-2">
                </div>
            </div>
            
        </div>
        <div id="footer">
            <br>
                <h6 class="footH">Questions or suggestions? Email me at cntrlmtg@dntcentral.com</h6>
                <br>
        </div>
    </body>
</html>

