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
        <title>Jeskai Control</title>
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
                <h1>Jeskai Control</h1>
            </div>
            
            <div class="row">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-9">
                    <h2>Overall Notes:</h2>
                    <p>While we are not traditionally an aggro deck, we must play that role in this matchup in order to have a fighting chance. While grinding seems tempting, they will win the late game, so the longer the game drags out, the lower our odds of victory are. Our hatebears and beatdown creatures help disrupt and kill them before they have the chance to stabilize. I've found the matchup to overall be slightly unfavorable, as we are often a turn too slow, and can be slowed down significantly by their red removal spells (<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=397722" class="discussionA">Lightning Bolt<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=397722&type=card" alt="Lightning Bolt" class="popupImg"></span></a></span>, <span class="hover_img"><a href="" class="discussionA">Lightning Helix<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Lightning+Helix&type=card" class="popupImg"></span></a></span>, <span class="hover_img"><a href="" class="discussionA">Electrolyze<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Electrolyze&type=card" class="popupImg"></span></a></span>).</p>
                    <hr>
                    <h2>Our best cards:</h2>
                    <div class="muimage">
                        <img src="https://orig00.deviantart.net/7955/f/2012/099/2/4/mtg__restoration_angel_by_algenpfleger-d4vitks.jpg" class="muimage" alt="Restoration Angel">
                    </div>
                    <br>
                    <br>
                    <p>As mentioned above, our best cards are the ones that help in both killing and disrupting our opponent as early as possible. Cards like <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=270445" class="discussionA">Thalia, Guardian of Thraben<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=270445&type=card" alt="Thalia, Guardian of Thraben" class="popupImg"></span></a></span> and <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=209287" class="discussionA">Leonin Arbiter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=209287&type=card" alt="Leonin Arbiter" class="popupImg"></span></a></span> fill said role, helping us keep them off of their wraths and <span class="hover_img"><a href="" class="discussionA">Cryptic Command<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Cryptic+Command&type=card" class="popupImg"></span></a></span>s. Otherwise, our more potent threats like <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=240096" class="discussionA">Restoration Angel<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=240096&type=card" alt="discussionA Angel" class="popupImg"></span></a></span> are also powerful in this matchup- while slower than <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=270445" class="discussionA">Thalia, Guardian of Thraben<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=270445&type=card" alt="Thalia, Guardian of Thraben" class="popupImg"></span></a></span> and <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=209287" class="discussionA">Leonin Arbiter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=209287&type=card" alt="Leonin Arbiter" class="popupImg"></span></a></span>, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=240096" class="discussionA">Restoration Angel<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=240096&type=card" alt="discussionA Angel" class="popupImg"></span></a></span> can save one of our creatures, or be flashed in end of turn to finish a player or planeswalker. <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=151089" class="discussionA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=151089&type=card" alt="Flickerwisp" class="popupImg"></span></a></span> is also good disruption when paired with <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=48146" class="discussionA">Aether Vial<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=48146&type=card" alt="Aether Vial" class="popupImg"></span></a></span>, and can really help keep them off of <span class="hover_img"><a href="" class="discussionA">Cryptic Command<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Cryptic+Command&type=card" class="popupImg"></span></a></span> or wrath mana.</p>
                    <hr>
                    <h2>Our worst cards:</h2>
                    <div class="muimage">
                        <img src="https://www.spiderwebart.com/images/art/104393.jpg" class="muimage" alt="Aether Vial">
                    </div>
                    <br>
                    <br>
                    <p>Overall, the majority of cards in our deck are not "bad" against Jeskai Control. That being said, one card that gets worst post board is <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=thraben%20inspector" class="discussionA">Thraben Inspector<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=409784&type=card" alt="Thraben Inspector" class="popupImg"></span></a></span>. While a 1 mana 1/2 beater that eventually draws a card is very powerful, especially if it comes turn 1 or turn 2 off of a <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=48146" class="discussionA">Aether Vial<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=48146&type=card" alt="Aether Vial" class="popupImg"></span></a></span>, smart control players will bring in stony silence against us, making <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=thraben%20inspector" class="discussionA">Thraben Inspector<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=409784&type=card" alt="Thraben Inspector" class="popupImg"></span></a></span> into a vanilla 1 mana 1/2, which is a bad card. Otherwise, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=179235" class="discussionA">Path to Exile<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=179235&type=card" alt="Path to Exile" class="popupImg"></span></a></span> is also weak here, but is really dependent on the variant of Jeskai they are playing- some lists play more creatures than others.</p>
                    <hr>
                    <h2>Their best cards:</h2>
                    <div class="muimage">
                        <img src="http://www.manaleak.com/mtguk/files/2015/03/cryptic-command.jpg" class="muimage" alt="Cryptic Command">
                    </div>
                    <br>
                    <br>
                    <p>The reason our hatebears shine here is that the opponent's best cards are their 4 mana spells- <span class="hover_img"><a href="" class="discussionA">Cryptic Command<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Cryptic+Command&type=card" class="popupImg"></span></a></span> and wraths (<span class="hover_img"><a href="" class="discussionA">Wrath of God<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Wrath+Of+God&type=card" class="popupImg"></span></a></span>, <span class="hover_img"><a href="" class="discussionA">Supreme Verdict<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Supreme+Verdict&type=card" class="popupImg"></span></a></span>, <span class="hover_img"><a href="" class="discussionA">Settle the Wreckage<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Settle+The+Wreckage&type=card" class="popupImg"></span></a></span>)- along with <span class="hover_img"><a href="" class="discussionA">Snapcaster Mage<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Snapcaster+Mage&type=card" class="popupImg"></span></a></span>, which flashes back said spells. Often, we do not have much trouble beating their 1 for 1 removal, especially <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=179235" class="discussionA">Path to Exile<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=179235&type=card" alt="Path to Exile" class="popupImg"></span></a></span>, as it gives us a mana, but struggle more with 2 for 1 removal spells like <span class="hover_img"><a href="" class="discussionA">Electrolyze<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Electrolyze&type=card" class="popupImg"></span></a></span> and, to a lesser extent, <span class="hover_img"><a href="" class="discussionA">Lightning Helix<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Lightning+Helix&type=card" class="popupImg"></span></a></span>. While <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=397722" class="discussionA">Lightning Bolt<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=397722&type=card" alt="Lightning Bolt" class="popupImg"></span></a></span> on our <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=270445" class="discussionA">Thalia, Guardian of Thraben<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=270445&type=card" alt="Thalia, Guardian of Thraben" class="popupImg"></span></a></span> is not great, we can often tax and pressure them enough that their 1 for 1 removal will be too slow, hence our fear of their sweepers, <span class="hover_img"><a href="" class="discussionA">Cryptic Command<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Cryptic+Command&type=card" class="popupImg"></span></a></span>s, and 2 for 1 cheap removal spells.</p>
                    <hr>
                    <h2>Sideboarding Notes:</h2>
                    <div class="muimage">
                        <img src="https://227rsi2stdr53e3wto2skssd7xe-wpengine.netdna-ssl.com/wp-content/uploads/2016/05/Rest-in-Peace-banner-620x280.jpg" class="muimage" alt="Rest in Peace">
                    </div>
                    <br>
                    <br>
                    <p>I generally cut a few <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=thraben%20inspector" class="discussionA">Thraben Inspector<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=409784&type=card" alt="Thraben Inspector" class="popupImg"></span></a></span>s and <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=179235" class="discussionA">Path to Exile<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=179235&type=card" alt="Path to Exile" class="popupImg"></span></a></span>s along with a 1-2 <span class="hover_img"><a href="" class="discussionA">Eldrazi Displacer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="popupImg"></span></a></span> (dies to <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=397722" class="discussionA">Lightning Bolt<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=397722&type=card" alt="Lightning Bolt" class="popupImg"></span></a></span> and <span class="hover_img"><a href="" class="discussionA">Lightning Helix<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Lightning+Helix&type=card" class="popupImg"></span></a></span> for no value) to bring in our lategame finishers like <span class="hover_img"><a href="" class="discussionA">Shalai, Voice of Plenty<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Shalai,+Voice+of+Plenty&type=card" class="popupImg"></span></a></span>, planeswalkers, and other expensive spells that control struggles to beat. I also bring in <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=382179" class="discussionA">Burrenton Forge-Tender<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=382179&type=card" alt="Burrenton Forge-Tender" class="popupImg"></span></a></span>s, as some Jeskai builds have anger, pyroclasm, and/or electrolyze. Worst case scenario, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=382179" class="discussionA">Burrenton Forge-Tender<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=382179&type=card" alt="Burrenton Forge-Tender" class="popupImg"></span></a></span> is a 1/1 beater for 1 mana that can save one of our more important creatures like <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=270445" class="discussionA">Thalia, Guardian of Thraben<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=270445&type=card" alt="Thalia, Guardian of Thraben" class="popupImg"></span></a></span>. I've also started experimenting with bringing in graveyard hate like relic and even <span class="hover_img"><a href="" class="discussionA">Rest in Peace<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Rest+In+Peace&type=card" class="popupImg"></span></a></span>, as they turn of <span class="hover_img"><a href="" class="discussionA">Snapcaster Mage<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Snapcaster+Mage&type=card" class="popupImg"></span></a></span>s and <span class="hover_img"><a href="" class="discussionA">Search for Azcanta<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Search+for+Azcanta&type=card" class="popupImg"></span></a></span>. As of now, I am inclined to bring in only relic, as it can cycle for a card worst-case scenario, whereas <span class="hover_img"><a href="" class="discussionA">Rest in Peace<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Rest+In+Peace&type=card" class="popupImg"></span></a></span> can sit in play and do nothing.</p>
                    <hr>
                    <h2>Important Interactions:</h2>
                    <div class="muimage">
                        <img src="https://227rsi2stdr53e3wto2skssd7xe-wpengine.netdna-ssl.com/wp-content/uploads/2017/09/settlethewreckage-730x280.jpg" class="muimage" alt="Settle the Wreckage">
                    </div>
                    <br>
                    <br>
                    <p>If the opponent casts a <span class="hover_img"><a href="" class="discussionA">Cryptic Command<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Cryptic+Command&type=card" class="popupImg"></span></a></span> that is bouncing a permanent and either drawing a card or tapping our team, than blinking the <span class="hover_img"><a href="" class="discussionA">Cryptic Command<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Cryptic+Command&type=card" class="popupImg"></span></a></span>'s bounce target will fizzle (counter) the spell. Using <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=151089" class="discussionA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=151089&type=card" alt="Flickerwisp" class="popupImg"></span></a></span> at end step to temporarily remove one of the opponent's lands after they hit 4 mana (or 5 with a <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=270445" class="discussionA">Thalia, Guardian of Thraben<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=270445&type=card" alt="Thalia, Guardian of Thraben" class="popupImg"></span></a></span> in play) can prevent them from <span class="hover_img"><a href="" class="discussionA">Cryptic Command<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Cryptic+Command&type=card" class="popupImg"></span></a></span>ing the team; likewise, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=151089" class="discussionA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=151089&type=card" alt="Flickerwisp" class="popupImg"></span></a></span>/<span class="hover_img"><a href="" class="discussionA">Tectonic Edge<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Tectonic+Edge&type=card" class="popupImg"></span></a></span> can be used on our main phase to stop a <span class="hover_img"><a href="" class="discussionA">Settle the Wreckage<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Settle+The+Wreckage&type=card" class="popupImg"></span></a></span>.</p>
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

