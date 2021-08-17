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
        <title>Mono G Tron</title>
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
                <h1>Mono Green Tron</h1>
            </div>
            
            <div class="row">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-9">
                    <h2>Overall Notes:</h2>
                    <p>This matchup is typically favored for us, but sometimes we just get turn 3 <span class="hover_img"><a href="" class="discussionA">Karn Liberated<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Karn+Liberated&type=card" class="popupImg"></span></a></span>. Being on the play is pivotal, as our two drop bears are often too slow on the draw (assuming they have turn 3 tron undisrupted). Since our disruption is in the form of pressure, we often kill them before they can hard cast their spells, assuming we are able to survive the first few turns and keep them off of tron. Postboard, the matchup gets slightly better for us, as stony silence and <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=damping%20sphere" class="discussionA">Damping Sphere<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=443101&type=card" alt="Damping Sphere" class="popupImg"></span></a></span> are powerful tron hosers. Overall, the matchup is favored toward us, so long as we can utilize our disruption before they assemble tron.</p>
                    <hr>
                    <h2>Our best cards:</h2>
                    <div class="muimage">
                        <img src="https://vignette.wikia.nocookie.net/gamelore/images/8/86/Leonin_Arbiter.jpg/revision/latest?cb=20170917212659" class="muimage" alt="Leonin Arbiter">
                    </div>
                    <br>
                    <br>
                    <p>As mentioned above, our hate bears are key in this matchup; <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=270445" class="discussionA">Thalia, Guardian of Thraben<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=270445&type=card" alt="Thalia, Guardian of Thraben" class="popupImg"></span></a></span> makes it difficult for them to cast their early spells to dig for tron pieces, while <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=209287" class="discussionA">Leonin Arbiter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=209287&type=card" alt="Leonin Arbiter" class="popupImg"></span></a></span> taxes their land tutor spells (<span class="hover_img"><a href="" class="discussionA">Expedition Map<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Expedition+Map&type=card" class="popupImg"></span></a></span> and <span class="hover_img"><a href="" class="discussionA">Sylvan Scrying<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Sylvan+Scrying&type=card" class="popupImg"></span></a></span>), along with turning our <span class="hover_img"><a href="" class="discussionA">Ghost Quarter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Ghost+Quarter&type=card" class="popupImg"></span></a></span>s into <span class="hover_img"><a href="" class="discussionA">Strip Mine<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Strip+Mine&type=card" class="popupImg"></span></a></span>s, which is very relevant in this matchup. Since their gameplan involves controlling three specific lands at once as soon as possible, we are often in a rough situation where we have to <span class="hover_img"><a href="" class="discussionA">Ghost Quarter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Ghost+Quarter&type=card" class="popupImg"></span></a></span> one of their lands without an <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=209287" class="discussionA">Leonin Arbiter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=209287&type=card" alt="Leonin Arbiter" class="popupImg"></span></a></span> in play in order to have a fighting chance; hence why <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=209287" class="discussionA">Leonin Arbiter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=209287&type=card" alt="Leonin Arbiter" class="popupImg"></span></a></span>'s ability to turn <span class="hover_img"><a href="" class="discussionA">Ghost Quarter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Ghost+Quarter&type=card" class="popupImg"></span></a></span>s into <span class="hover_img"><a href="" class="discussionA">Strip Mine<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Strip+Mine&type=card" class="popupImg"></span></a></span>s is so much more valuable in this MU. After the two hate bears, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=233068" class="discussionA">Blade Splicer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=233068&type=card" alt="Blade Splicer" class="popupImg"></span></a></span> comes next; its our fastest 3 drop clock, and the token that it creates survives through ugin minus and all is dust. Otherwise, our fliers are always good, especially with a <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=48146" class="discussionA">Aether Vial<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=48146&type=card" alt="Aether Vial" class="popupImg"></span></a></span> (<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=151089" class="discussionA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=151089&type=card" alt="Flickerwisp" class="popupImg"></span></a></span> + <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=48146" class="discussionA">Aether Vial<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=48146&type=card" alt="Aether Vial" class="popupImg"></span></a></span> is great disruption).</p>
                    <hr>
                    <h2>Our worst cards:</h2>
                    <div class="muimage">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwdDIsyNNV4yWR1up8TrVWYNNvW1Xfj5uUVN_uePpDrqq15xg" class="muimage" alt="Path to Exile">
                    </div>
                    <br>
                    <br>
                    <p><span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=179235" class="discussionA">Path to Exile<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=179235&type=card" alt="Path to Exile" class="popupImg"></span></a></span> is not great in this matchup; its only targets are <span class="hover_img"><a href="" class="discussionA">Walking Balista<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Walking+Balista&type=card" class="popupImg"></span></a></span>, which never feels great to <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=179235" class="discussionA">Path to Exile<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=179235&type=card" alt="Path to Exile" class="popupImg"></span></a></span>, and <span class="hover_img"><a href="" class="discussionA">Wurmcoil Engine<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Wurmcoil+Engine&type=card" class="popupImg"></span></a></span>, which we can beat without <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=179235" class="discussionA">Path to Exile<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=179235&type=card" alt="Path to Exile" class="popupImg"></span></a></span>. Generally, leaving in a few <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=179235" class="discussionA">Path to Exile<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=179235&type=card" alt="Path to Exile" class="popupImg"></span></a></span>s is good, as <span class="hover_img"><a href="" class="discussionA">Wurmcoil Engine<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Wurmcoil+Engine&type=card" class="popupImg"></span></a></span> can also easily take over the game, so a clean answer to it is helpful. <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=thraben%20inspector" class="discussionA">Thraben Inspector<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=409784&type=card" alt="Thraben Inspector" class="popupImg"></span></a></span> is not great here either, especially postboard, as the <span class="hover_img"><a href="" class="discussionA">Stony Silence<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Stony+Silence&type=card" class="popupImg"></span></a></span>s that come in make it into a 1 mana 1/2 since the clue token is in fact an artifact.</p>
                    <hr>
                    <h2>OP's best cards:</h2>
                    <div class="muimage">
                        <img src="https://227rsi2stdr53e3wto2skssd7xe-wpengine.netdna-ssl.com/wp-content/uploads/2017/01/walking-ballista-e1485984932972-730x280.jpg" class="muimage" alt="Walking Balista">
                    </div>
                    <br>
                    <br>
                    <p>Really any of their big finishers are strong vs us, but, in particular, <span class="hover_img"><a href="" class="discussionA">Walking Balista<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Walking+Balista&type=card" class="popupImg"></span></a></span> is a card that is problematic for us to beat. Not only can it wipe our board after they hit tron, but it can also be used in the early game to shoot down a <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=270445" class="discussionA">Thalia, Guardian of Thraben<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=270445&type=card" alt="Thalia, Guardian of Thraben" class="popupImg"></span></a></span> or <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=151089" class="discussionA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=151089&type=card" alt="Flickerwisp" class="popupImg"></span></a></span>, making our clock significantly slower. A preboard <span class="hover_img"><a href="" class="discussionA">Dismember<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Dismember&type=card" class="popupImg"></span></a></span> is also rough, especially when it messes with out <span class="hover_img"><a href="" class="discussionA">Leonin Arbiter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Leonin+Arbiter&type=card" class="popupImg"></span></a></span> + <span class="hover_img"><a href="" class="discussionA">Ghost Quarter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Ghost+Quarter&type=card" class="popupImg"></span></a></span> Combo. Postboard, their answers to our permanents like <span class="hover_img"><a href="" class="discussionA">Nature's Claim<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Nature's+Claim&type=card" class="popupImg"></span></a></span> and <span class="hover_img"><a href="" class="discussionA">Spatial Contortion<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Spatial+Contortion&type=card" class="popupImg"></span></a></span> are strong and often hard to play around, as the longer we drag out the match, the less likely we win.</p>
                    <hr>
                    <h2>Sideboarding:</h2>
                    <div class="muimage">
                        <img src="https://pbs.twimg.com/media/C6VrayGUoAA7_O4.jpg" class="muimage" alt="Stony Silence">
                    </div>
                    <br>
                    <br>
                    <p>Generally, I like to cut a <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=179235" class="discussionA">Path to Exile<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=179235&type=card" alt="Path to Exile" class="popupImg"></span></a></span> and the remaining cuts are <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=thraben%20inspector" class="discussionA">Thraben Inspector<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=409784&type=card" alt="Thraben Inspector" class="popupImg"></span></a></span>s and our least impactful 3 drops. <span class="hover_img"><a href="" class="discussionA">Stony Silence<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Stony+Silence&type=card" class="popupImg"></span></a></span> and <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=damping%20sphere" class="discussionA">Damping Sphere<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=443101&type=card" alt="Damping Sphere" class="popupImg"></span></a></span> for sure come in, as they are very good at stopping tron's gameplan. Otherwise, bringing in specific powerful creatures does well, like <span class="hover_img"><a href="" class="discussionA">Shalai, Voice of Plenty<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Shalai,+Voice+of+Plenty&type=card" class="popupImg"></span></a></span>, as her hexproof ability can protect our creatures from removal along with karn from upticking on us. <span class="hover_img"><a href="" class="discussionA">Phyrexian Revoker<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Phyrexian+Revoker&type=card" class="popupImg"></span></a></span> is another card that, if its in the sideboard, it is coming in; it can be used to either stifle their early game by naming a 1 mana artifact (<span class="hover_img"><a href="" class="discussionA">Expedition Map<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Expedition+Map&type=card" class="popupImg"></span></a></span>, <span class="hover_img"><a href="" class="discussionA">Chromatic Sphere<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Chromatic+Sphere&type=card" class="popupImg"></span></a></span>, <span class="hover_img"><a href="" class="discussionA">Chromatic Star<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Chromatic+Star&type=card" class="popupImg"></span></a></span>), or turn off one of their planeswalkers.</p>
                    <hr>
                    <h2>Important Interactions:</h2>
                    <div class="muimage">
                        <img src="https://i.imgur.com/2ms6C_d.jpg?maxwidth=640&shape=thumb&fidelity=medium" class="muimage" alt="Flickerwisp">
                    </div>
                    <br>
                    <br>
                    <p><span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=48146" class="discussionA">Aether Vial<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=48146&type=card" alt="Aether Vial" class="popupImg"></span></a></span> + <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=151089" class="discussionA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=151089&type=card" alt="Flickerwisp" class="popupImg"></span></a></span> can be used to keep them off of tron during their main phase, buying us a lot of time. It is also worth noting that <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=151089" class="discussionA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=151089&type=card" alt="Flickerwisp" class="popupImg"></span></a></span>ing a <span class="hover_img"><a href="" class="discussionA">Walking Balista<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Walking+Balista&type=card" class="popupImg"></span></a></span> will force them to use its counters right away, which can help pave way for a hate bear or just get in damage immediately. <span class="hover_img"><a href="" class="discussionA">All is Dust<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=All+Is+Dust&type=card" class="popupImg"></span></a></span> and <span class="hover_img"><a href="" class="discussionA">Ugin, the Spirit Dragon<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Ugin,+The+Spirit+Dragon&type=card" class="popupImg"></span></a></span>'s minus ability do not kill our <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=48146" class="discussionA">Aether Vial<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=48146&type=card" alt="Aether Vial" class="popupImg"></span></a></span>s, clue tokens, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=damping%20sphere" class="discussionA">Damping Sphere<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=443101&type=card" alt="Damping Sphere" class="popupImg"></span></a></span>, <span class="hover_img"><a href="" class="discussionA">Phyrexian Revoker<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Phyrexian+Revoker&type=card" class="popupImg"></span></a></span>, golem tokens, or Eldrazi; so, as long as they lack an <span class="hover_img"><a href="" class="discussionA">Oblivion Stone<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Oblivion+Stone&type=card" class="popupImg"></span></a></span>, it is generally good to play colorless creatures first to play around said boardwipes. If you lack means to stop the opponent from having tron turn 3, it is often correct to play <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=270445" class="discussionA">Thalia, Guardian of Thraben<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=270445&type=card" alt="Thalia, Guardian of Thraben" class="popupImg"></span></a></span> over other spells, as her tax stops them from playing <span class="hover_img"><a href="" class="discussionA">Karn Liberated<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Karn+Liberated&type=card" class="popupImg"></span></a></span>, making their best plays creatures that die to <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=179235" class="discussionA">Path to Exile<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=179235&type=card" alt="Path to Exile" class="popupImg"></span></a></span>. <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=179235" class="discussionA">Path to Exile<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=179235&type=card" alt="Path to Exile" class="popupImg"></span></a></span> to exile can help us; giving our opponent another land can turn on <span class="hover_img"><a href="" class="discussionA">Tectonic Edge<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Tectonic+Edge&type=card" class="popupImg"></span></a></span>s. A few tricks to remember that are very relevant in this matchup especially: blinking <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=209287" class="discussionA">Leonin Arbiter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=209287&type=card" alt="Leonin Arbiter" class="popupImg"></span></a></span> after they pay the tax forces them to pay it again, and you can blow up two of their lands with 4 mana + 2 <span class="hover_img"><a href="" class="discussionA">Tectonic Edge<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Tectonic+Edge&type=card" class="popupImg"></span></a></span>s, just hold priority. <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=233068" class="discussionA">Blade Splicer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=233068&type=card" alt="Blade Splicer" class="popupImg"></span></a></span>'s ability of giving golem tokens first strike lets us block <span class="hover_img"><a href="" class="discussionA">Wurmcoil Engine<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Wurmcoil+Engine&type=card" class="popupImg"></span></a></span>s for free, so long as we have multiple tokens and the 1/1 still alive.</p>
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

