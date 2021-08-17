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
        <title>BR Hollow One</title>
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
                <h1>BR Hollow One</h1>
            </div>
            
            <div class="row">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-9">
                    <h2>Matchup Notes:</h2>
                    <p>Typically, our deck is favored slightly in this matchup, but it really depends on OP's hand- they can easily take games off of us with a very explosive hand. Game one is very dependent on us finding our key cards in order to prevent them from killing us with their 4/4s and 5/5s, while post board games are determined significantly on the sideboard haymakers. Since the Hollow One deck is an aggro deck, all we have to do is stall the game, stabilize the board, and eventually gain and press our advantage to slowly take them down with a flier. Overall, we are the control deck in this matchup, with our advantage lying in both value creatures that serve as powerful blockers, and essential sideboard tech that can stifle their gameplan.</p>
                    <hr>
                    <h2>Our best cards:</h2>
                    <div class="muimage">
                        <img src="http://www.wizards.com/mtg/images/daily/features/feature188_path.jpg" class="muimage">
                    </div>
                    <br>
                    <br>
                    <p>Of course, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=179235" class="discussionA">Path to Exile<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=179235&type=card" alt="Path to Exile" class="popupImg"></span></a></span> is our number one card in this matchup. Due to our lack of graveyard hate preboard, our best creatures are the ones that can eat up their recursive threats (<span class="hover_img"><a href="" class="discussionA">Bloodghast<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Bloodghast&type=card" class="popupImg"></span></a></span>s and <span class="hover_img"><a href="" class="discussionA">Rekindling Phoenix<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Rekindling+Phoenix&type=card" class="popupImg"></span></a></span>es). <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=233068" class="discussionA">Blade Splicer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=233068&type=card" alt="Blade Splicer" class="popupImg"></span></a></span> might be our best one: 2 bodies for three mana that can also creature more 3/3 golems with a blinker, and, on top of that, can hold back their <span class="hover_img"><a href="" class="discussionA">Gurmag Angler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Gurmag+Angler&type=card" class="popupImg"></span></a></span>s and <span class="hover_img"><a href="" class="discussionA">Hollow One<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Hollow+One&type=card" class="popupImg"></span></a></span>s once two or more golems are on the battlefield with a <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=233068" class="discussionA">Blade Splicer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=233068&type=card" alt="Blade Splicer" class="popupImg"></span></a></span>. Because of <span class="hover_img"><a href="" class="discussionA">Rekindling Phoenix<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Rekindling+Phoenix&type=card" class="popupImg"></span></a></span>'s ability to keep returning to the battlefield, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=151089" class="discussionA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=151089&type=card" alt="Flickerwisp" class="popupImg"></span></a></span> is much worse in this matchup than <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=240096" class="discussionA">Restoration Angel<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=240096&type=card" alt="discussionA Angel" class="popupImg"></span></a></span>, with the latter being able to not only stop their <span class="hover_img"><a href="" class="discussionA">Rekindling Phoenix<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Rekindling+Phoenix&type=card" class="popupImg"></span></a></span> from getting in damage, but also providing a "<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=397722" class="discussionA">Lightning Bolt<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=397722&type=card" alt="Lightning Bolt" class="popupImg"></span></a></span>-proof" clock that can also save one of your creatures or make another token. Continuing with the blocking trend, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=270445" class="discussionA">Thalia, Guardian of Thraben<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=270445&type=card" alt="Thalia, Guardian of Thraben" class="popupImg"></span></a></span> is also powerful, as she taxes their noncreature spells (which they have more than us of), along with stopping their <span class="hover_img"><a href="" class="discussionA">Bloodghast<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Bloodghast&type=card" class="popupImg"></span></a></span>s from bashing. <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=407523" class="discussionA">Eldrazi Displacer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=407523&type=card" alt="Eldrazi Displacer" class="popupImg"></span></a></span> is also good here, as it can keep their most potent threat at bay, create a stream of golems, or just contribute to our wall of creatures. <span class="hover_img"><a href="" class="discussionA">Eldrazi Displacer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="popupImg"></span></a></span>'s main issue, however, is its weakness to <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=397722" class="discussionA">Lightning Bolt<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=397722&type=card" alt="Lightning Bolt" class="popupImg"></span></a></span>- having a 1 mana spell kill our three drop that generated no value feel terrible.</p>
                    <hr>
                    <h2>Our worst cards:</h2>
                    <div class="muimage">
                        <img src="https://spellsnare.files.wordpress.com/2017/01/leonin-arbiter.jpg" class="muimage">
                    </div>
                    <br>
                    <br>
                    <p>Surprisingly, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=209287" class="discussionA">Leonin Arbiter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=209287&type=card" alt="Leonin Arbiter" class="popupImg"></span></a></span> is a lot worse than it looks here, especially on the draw. While the card hurts their fetchlands and can help our ghost quarters disrupt their low land count, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=209287" class="discussionA">Leonin Arbiter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=209287&type=card" alt="Leonin Arbiter" class="popupImg"></span></a></span> is often too slow for us and, since it is only a 2/2, only really serves as a chump blocker or a risky double blocker (don't forget about their <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=397722" class="discussionA">Lightning Bolt<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=397722&type=card" alt="Lightning Bolt" class="popupImg"></span></a></span>s!). While <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=thraben%20inspector" class="discussionA">Thraben Inspector<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=409784&type=card" alt="Thraben Inspector" class="popupImg"></span></a></span> suffers the same downsides as <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=209287" class="discussionA">Leonin Arbiter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=209287&type=card" alt="Leonin Arbiter" class="popupImg"></span></a></span>, it is a better chump blocker due to being only 1 mana, and can help us dig for the right spell with its costly clue, making it slightly better than the <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=209287" class="discussionA">Leonin Arbiter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=209287&type=card" alt="Leonin Arbiter" class="popupImg"></span></a></span>. As mentioned above, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=151089" class="discussionA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=151089&type=card" alt="Flickerwisp" class="popupImg"></span></a></span> is also not exciting: it is a feeble body that requires setup to gain value (ie having a <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=233068" class="discussionA">Blade Splicer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=233068&type=card" alt="Blade Splicer" class="popupImg"></span></a></span> in play).</p>
                    <hr>
                    <h2>OP's Best Cards</h2>
                    <div class="muimage">
                        <img src="http://modernnexus.com/wp-content/uploads/2015/11/Grim-Lavamancer-2.jpg" class="muimage">
                    </div>
                    <br>
                    <br>
                    <p>Honestly, OP's cards on their own are not very threatening to us; the issue is mainly the speed at which said cards are deployed. A quick <span class="hover_img"><a href="" class="discussionA">Hollow One<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Hollow+One&type=card" class="popupImg"></span></a></span> and/or <span class="hover_img"><a href="" class="discussionA">Gurmag Angler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Gurmag+Angler&type=card" class="popupImg"></span></a></span> are what beat us generally, especially when we lack removal. <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=397722" class="discussionA">Lightning Bolt<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=397722&type=card" alt="Lightning Bolt" class="popupImg"></span></a></span> is also very good vs. us, as it gives their deck clean, cheap answers to our blockers along with threatening our life total once it reaches low numbers. While generally not in their main deck, <span class="hover_img"><a href="" class="discussionA">Grim Lavamancer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Grim+Lavamancer&type=card" class="popupImg"></span></a></span> is the single most powerful card against our deck- it kills the majority of our creatures, it pairs well with <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=397722" class="discussionA">Lightning Bolt<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=397722&type=card" alt="Lightning Bolt" class="popupImg"></span></a></span> to finish off our four drops, it makes blocking less favorable for us, and makes non-<span class="hover_img"><a href="" class="discussionA">Rest in Peace<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Rest+In+Peace&type=card" class="popupImg"></span></a></span> graveyard hate much worse.</p>
                    <hr>
                    <h2>Sideboarding:</h2>
                    <div class="muimage">
                        <img src="https://vignette.wikia.nocookie.net/gamelore/images/7/7d/Kitchen_Finks.jpg/revision/latest?cb=20141228044506" class="muimage">
                    </div>
                    <br>
                    <br>
                    <p>Since we tend to value our three and four drops against an aggro deck, trimming some <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=151089" class="discussionA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=151089&type=card" alt="Flickerwisp" class="popupImg"></span></a></span>s, our weakest 3 drop, is generally advised. Some number of <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=209287" class="discussionA">Leonin Arbiter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=209287&type=card" alt="Leonin Arbiter" class="popupImg"></span></a></span>s and <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=thraben%20inspector" class="discussionA">Thraben Inspector<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=409784&type=card" alt="Thraben Inspector" class="popupImg"></span></a></span>s can get cut as well; I've found the former to be better on the play than the latter, as we can more easily tax their mana base on the play, but can get more use out of a 1 mana chump blocker on the draw. While <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=270445" class="discussionA">Thalia, Guardian of Thraben<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=270445&type=card" alt="Thalia, Guardian of Thraben" class="popupImg"></span></a></span>s are also not very exciting, trimming them is a trap that I've fell into before; the less one and two drops we have, the weaker we are to OP having an explosive Hollow One hand. Therefore, before cutting too many low drops, it is better to trim a 3/4 drop like <span class="hover_img"><a href="" class="discussionA">Eldrazi Displacer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="popupImg"></span></a></span> (or <span class="hover_img"><a href="" class="discussionA">Akroma, Angel of Fury<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Akroma,+Angel+Of+Fury&type=card" class="popupImg"></span></a></span> if you run her- too weak to <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=397722" class="discussionA">Lightning Bolt<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=397722&type=card" alt="Lightning Bolt" class="popupImg"></span></a></span>). Since Hollow One is a graveyard deck, all of our graveyard hate comes in. Removal spells are also needed for not only their threats, but also the <span class="hover_img"><a href="" class="discussionA">Grim Lavamancer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Grim+Lavamancer&type=card" class="popupImg"></span></a></span>s they bring in postboard. Our anti-aggro cards also come in (<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=141976" class="discussionA">Kitchen Finks<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=141976&type=card" alt="Kitchen Finks" class="popupImg"></span></a></span>, <span class="hover_img"><a href="" class="discussionA">Shalai, Voice of Plenty<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Shalai,+Voice+of+Plenty&type=card" class="popupImg"></span></a></span>, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=83338" class="discussionA">Worship<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=83338&type=card" alt="Worship" class="popupImg"></span></a></span>, etc.). <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=382179" class="discussionA">Burrenton Forge-Tender<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=382179&type=card" alt="Burrenton Forge-Tender" class="popupImg"></span></a></span>s are also very important in the matchup; they can protect our essential creatures from <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=397722" class="discussionA">Lightning Bolt<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=397722&type=card" alt="Lightning Bolt" class="popupImg"></span></a></span>s or prevent a boardwipe from finishing us.</p>
                    <hr>
                    <h2>Important Interactions:</h2>
                    <div class="muimage">
                        <img src="https://vignette.wikia.nocookie.net/gamelore/images/e/e3/Phyrexian_Revoker.jpg/revision/latest?cb=20170918140916" class="muimage">
                    </div>
                    <br>
                    <br>
                    <p>Don't forget that <span class="hover_img"><a href="" class="discussionA">Rekindling Phoenix<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Rekindling+Phoenix&type=card" class="popupImg"></span></a></span>'s trigger occurs on the beginning of combat step- that means that, in order to prevent <span class="hover_img"><a href="" class="discussionA">Rekindling Phoenix<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Rekindling+Phoenix&type=card" class="popupImg"></span></a></span> from returning, the 4+ power creature must be <span class="hover_img"><a href="" class="discussionA">Path to Exike<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Path+To+Exile&type=card" class="popupImg"></span></a></span>ed or blinked with a <span class="hover_img"><a href="" class="discussionA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" class="popupImg"></span></a></span> beforehand. In certain scenarios, cracking a <span class="hover_img"><a href="" class="discussionA">Relic of Progenitus<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Relic+of+Progenitus&type=card" class="popupImg"></span></a></span> early can be correct, as it can keep them off of casting a <span class="hover_img"><a href="" class="discussionA">Gurmag Angler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Gurmag+Angler&type=card" class="popupImg"></span></a></span> or <span class="hover_img"><a href="" class="discussionA">Tasigur, the Golden Fang<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Tasigur,+The+Golden+Fang&type=card" class="popupImg"></span></a></span>. <span class="hover_img"><a href="" class="discussionA">Phyrexian Revoker<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Phyrexian+Revoker&type=card" class="popupImg"></span></a></span> can name, in addition to <span class="hover_img"><a href="" class="discussionA">Grim Lavamancer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Grim+Lavamancer&type=card" class="popupImg"></span></a></span>, <span class="hover_img"><a href="" class="discussionA">Street Wraith<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Street+Wraith&type=card" class="popupImg"></span></a></span> (or technically <span class="hover_img"><a href="" class="discussionA">Hollow One<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Hollow+One&type=card" class="popupImg"></span></a></span>), as the cost of cylcing the spell is an activated ability.</p>
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

