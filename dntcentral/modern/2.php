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
        <title>UR Gifts Storm</title>
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
                <h1>UR Gifts Storm</h1>
            </div>
            
            <div class="row">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-9">
                    <h2>Matchup Notes:</h2>
                    <p>Since we are facing a fast combo deck, our primary goals are to disrupt their combo and kill them fast. This matchup is very dependent on whether we find our disruption and can utilize said disruption effective and early enough to prevent them from comboing off. Thankfully, a large chunk of our deck consists of hate cards for the gifts storm player, so the matchup is not too bad (albeit it is still not great). Despite our sideboard hate, OP is also able to add more answers to our storm hate cards (ie <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=397722" class="discussionA">Lightning Bolt<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=397722&type=card" alt="Lightning Bolt" class="popupImg"></span></a></span>), which makes the matchup more difficult. Overall, it really boils down to the quality of our disruption.</p>
                    <hr>
                    <h2>Our best cards:</h2>
                    <div class="muimage">
                        <img src="https://s3-us-west-2.amazonaws.com/echomage/cards/pWPN/100001211.crop.hq.jpg" class="muimage">
                    </div>
                    <br>
                    <br>
                    <p>As mentioned above, the matchup gets significantly better for us when we deploy our hate bears, especially <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=270445" class="discussionA">Thalia, Guardian of Thraben<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=270445&type=card" alt="Thalia, Guardian of Thraben" class="popupImg"></span></a></span> and <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=209287" class="discussionA">Leonin Arbiter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=209287&type=card" alt="Leonin Arbiter" class="popupImg"></span></a></span>. <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=179235" class="discussionA">Path to Exile<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=179235&type=card" alt="Path to Exile" class="popupImg"></span></a></span> is also very important, as their deck requires a <span class="hover_img"><a href="" class="discussionA">Baral, Chief of Compliance<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Baral,+Chief+Of+Compliance&type=card" class="popupImg"></span></a></span>/<span class="hover_img"><a href="" class="discussionA">Goblin Electromancer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Goblin+Electromancer&type=card" class="popupImg"></span></a></span> to storm off. Otherwise, the rest of our creatures are only useful for turning sideways (or protecting our hatebears in certain cases). While she is not a staple (yet), <span class="hover_img"><a href="" class="discussionA">Shalai, Voice of Plenty<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Shalai,+Voice+Of+Plenty&type=card" class="popupImg"></span></a></span> is another must-answer creature for the opponent; not only is it a good attacker, but it also both protects our other hatebears from disruption AND gives us hexproof, forcing a <span class="hover_img"><a href="" class="discussionA">Grapeshot<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Grapeshot&type=card" class="popupImg"></span></a></span> to kill only her.</p>
                    <hr>
                    <h2>Our worst cards:</h2>
                    <div class="muimage">
                        <img src="http://magic.wizards.com/sites/mtg/files/image_legacy_migration/images/magic/daily/boab/boab193_res.jpg" class="muimage">
                    </div>
                    <br>
                    <br>
                    <p>Our worst cards are often the ones that do too little too late. While <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=240096" class="discussionA">Restoration Angel<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=240096&type=card" alt="discussionA Angel" class="popupImg"></span></a></span> can protect our hatebears and provide a good clock, four mana is a significant downside against a deck that goldfishes on turn three, especially when we stumble on lands (or worse, get <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=240096" class="discussionA">Restoration Angel<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=240096&type=card" alt="discussionA Angel" class="popupImg"></span></a></span> <span class="hover_img"><a href="" class="discussionA">Remand<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Remand&type=card" class="popupImg"></span></a></span>ed). Also, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=thraben%20inspector" class="discussionA">Thraben Inspector<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=409784&type=card" alt="Thraben Inspector" class="popupImg"></span></a></span> is not great here, since it will not get in attacks much (their creatures can block it free) and the clue is often too slow without a <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=48146" class="discussionA">Aether Vial<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=48146&type=card" alt="Aether Vial" class="popupImg"></span></a></span>. Otherwise, one-of creatures like <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=141976" class="discussionA">Kitchen Finks<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=141976&type=card" alt="Kitchen Finks" class="popupImg"></span></a></span> and akroma are also weak. </p>
                    <hr>
                    <h2>OP's best cards:</h2>
                    <div class="muimage">
                        <img src="https://carwad.net/sites/default/files/lightning-bolt-art-132705-868710.jpg" class="muimage">
                    </div>
                    <br>
                    <br>
                    <p>The non-combo cards that we are most afraid of are their limited disruption like <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=397722" class="discussionA">Lightning Bolt<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=397722&type=card" alt="Lightning Bolt" class="popupImg"></span></a></span>, <span class="hover_img"><a href="" class="discussionA">Echoing Truth<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Echoing+Truth&type=card" class="popupImg"></span></a></span>, <span class="hover_img"><a href="" class="discussionA">Repeal<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Repeal&type=card" class="popupImg"></span></a></span>, etc. that can kill our answers to their combo. While <span class="hover_img"><a href="" class="discussionA">Remand<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Remand&type=card" class="popupImg"></span></a></span> can hurt us, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=48146" class="discussionA">Aether Vial<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=48146&type=card" alt="Aether Vial" class="popupImg"></span></a></span> makes that card significantly worse. <span class="hover_img"><a href="" class="discussionA">Gifts Ungiven<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Gifts+Ungiven&type=card" class="popupImg"></span></a></span> gives their deck the potential to, not only combo off, but to also find answers to our disruption or even just find more gas.</p>
                    <hr>
                    <h2>Sideboarding:</h2>
                    <div class="muimage">
                        <img src="https://dfep0xlbws1ys.cloudfront.net/thumbs4f/ff/4fff579e61f0c86899887adbf5e7eaa6.jpg?response-cache-control=max-age=2628000" class="muimage">
                    </div>
                    <br>
                    <br>
                    <p>I like to take out a number of <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=thraben%20inspector" class="discussionA">Thraben Inspector<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=409784&type=card" alt="Thraben Inspector" class="popupImg"></span></a></span>s and <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=240096" class="discussionA">Restoration Angel<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=240096&type=card" alt="discussionA Angel" class="popupImg"></span></a></span>s (1-2, depending on what is coming in). More expensive/unimpactful 3s also get taken out, like <span class="hover_img"><a href="" class="discussionA">Akroma, Angel of Fury<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Akroma,+Angel+Of+Fury&type=card" class="popupImg"></span></a></span>, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=141976" class="discussionA">Kitchen Finks<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=141976&type=card" alt="Kitchen Finks" class="popupImg"></span></a></span>, and displacer. Our best sideboard cards to bring in include <span class="hover_img"><a href="" class="discussionA">Eidolon of Rhetoric<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eidolon+Of+Rhetoric&type=card" class="popupImg"></span></a></span>, <span class="hover_img"><a href="" class="discussionA">Ethersworn Canonist<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Ethersworn+Canonist&type=card" class="popupImg"></span></a></span>, and <span class="hover_img"><a href="" class="discussionA">Damping Sphere<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Daming+Sphere&type=card" class="popupImg"></span></a></span>, as the opponent cannot storm off with either of them in play. Any and all disruption comes in; graveyard hate, removal, and other storm hate (including <span class="hover_img"><a href="" class="discussionA">Shalai, Voice of Plenty<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Shalai,+Voice+of+Plenty&type=card" class="popupImg"></span></a></span>). <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=382179" class="discussionA">Burrenton Forge-Tender<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=382179&type=card" alt="Burrenton Forge-Tender" class="popupImg"></span></a></span>s (or <span class="hover_img"><a href="" class="discussionA">Selfless Spirit<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Selfless+Spirit&type=card" class="popupImg"></span></a></span>) can come in as a way to protect our key cards from removal. Another option, if applicable, is <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=83338" class="discussionA">Worship<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=83338&type=card" alt="Worship" class="popupImg"></span></a></span>; while the card does make it significantly harder for our opponent to kill us, they usually bring in bounce spells and/or board wipes, making <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=83338" class="discussionA">Worship<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=83338&type=card" alt="Worship" class="popupImg"></span></a></span> less powerful. As of now, I'd hedge against it, but will test further...</p>
                    <hr>
                    <h2>Important Interactions:</h2>
                    <div class="muimage">
                        <img src="https://cdna.artstation.com/p/assets/images/images/010/152/164/large/victor-adame-dom-shalai-voice-of-plenty.jpg?1522851584" class="muimage">
                    </div>
                    <br>
                    <br>
                    <p><span class="hover_img"><a href="" class="discussionA">Shalai, Voice of Plenty<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Shalai,+Voice+of+Plenty&type=card" class="popupImg"></span></a></span> giving hexproof stops the opponent from killing us with one <span class="hover_img"><a href="" class="discussionA">Grapeshot<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Grapeshot&type=card" class="popupImg"></span></a></span>, as the copies will be forced to target her (or one of the opponent's permenants). In addition, vialing in a <span class="hover_img"><a href="" class="discussionA">Shalai, Voice of Plenty<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Shalai,+Voice+of+Plenty&type=card" class="popupImg"></span></a></span> in response to a <span class="hover_img"><a href="" class="discussionA">Gifts Ungiven<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Gifts+Ungiven&type=card" class="popupImg"></span></a></span> fizzles the spell, as <span class="hover_img"><a href="" class="discussionA">Gifts Ungiven<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Gifts+Ungiven&type=card" class="popupImg"></span></a></span> targets an opponent.</p>
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

