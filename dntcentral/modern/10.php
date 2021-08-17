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
        <title>Mardu Pyromancer</title>
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
                        <li><a href="../flickerwisp">Flickerwisp 101</a></li>
                        <!--<li><a href="../onlinestats">MTGO Stats</a></li>-->
                        <li><a href="../resources">Other Resources</a></li>
                    </ul>
                </nav>
            <div class="jumbotron">
                <h1>Mardu Pyromancer</h1>
            </div>
            
            <div class="row">
                <div class="col-sm-1">

                </div>

                <div class="col-sm-9">
                    <h2>Matchup Overview:</h2>
                    <div class="muimage">
                        <img src="https://227rsi2stdr53e3wto2skssd7xe-wpengine.netdna-ssl.com/wp-content/uploads/2013/07/young-pyromancer.png" class="muimage" alt="Young Pyromancer">
                    </div>
                    <br>
                    <br>
                    <p>Mardu Pyromancer has overtaken Jund, Abzan, and other traditional BG midrange decks as the tier 1 grindy, nonblue midrange deck. Typically, we struggle against said midrange decks, but we do have some edges on Mardu Pyromancer. For one, we can often go wide enough to invalidate their token threats, and can usually find enough removal to kill their <span class="hover_img"><a href="" class="discussionA">Bedlam Reveler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Bedlam+Reveler&type=card" class="popupImg"></span></a></span>s. However, their removal package is very powerful, especially the dreaded <span class="hover_img"><a href="" class="discussionA">Kolaghan's Command<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Kolaghan's+Command&type=card" class="popupImg"></span></a></span>. In addition, their ability to dig deep makes their deck very consistent and hard to lose to itself in the way that traditional Jund/Abzan was susceptible to. Postboard, the matchup gets interesting- while our graveyard hate can combat a large portion of their strategies, they also get very powerful threats like <span class="hover_img"><a href="" class="discussionA">Liliana, the Last Hope<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Liliana,+The+Last+Hope&type=card" class="popupImg"></span></a></span> and <span class="hover_img"><a href="" class="discussionA">Grim Lavamancer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Grim+Lavamancer&type=card" class="popupImg"></span></a></span>. Overall, while slightly unfavorable for us, the matchup is still close enough that we have a strong fighting chance, albeit we often have to fight an uphill battle.</p>
                    <hr>
                    <h2>Our best cards:</h2>
                    <div class="muimage">
                        <img src="https://orig00.deviantart.net/7955/f/2012/099/2/4/mtg__restoration_angel_by_algenpfleger-d4vitks.jpg" class="muimage" alt="Restoration Angel">
                    </div>
                    <br>
                    <br>
                    <p>Overall, the majority of cards in our deck play a vital role in this matchup. <span class="hover_img"><a href="" class="discussionA">Thalia, Guardian of Thraben<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Thalia,+Guardian+Of+Thraben&type=card" class="popupImg"></span></a></span> and <span class="hover_img"><a href="" class="discussionA">Leonin Arbiter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Leonin+Arbiter&type=card" class="popupImg"></span></a></span> tax them while providing a cheap clock, while <span class="hover_img"><a href="" class="discussionA">Blade Splicer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Blade+Splicer&type=card" class="popupImg"></span></a></span> provides value and a good blocker for their <span class="hover_img"><a href="" class="discussionA">Young Pyromancer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Young+Pyromancer&type=card" class="popupImg"></span></a></span> tokens. Our fliers are also important in the matchup, as traditionally fliers are our best threats (and best cards) vs. grindy decks. However, due to the opponent running <span class="hover_img"><a href="" class="discussionA">Lingering Souls<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Lingering+Souls&type=card" class="popupImg"></span></a></span>, <span class="hover_img"><a href="" class="discussionA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" class="popupImg"></span></a></span> gets significantly worse, but <span class="hover_img"><a href="" class="discussionA">Restoration Angel<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Restoration+Angel&type=card" class="popupImg"></span></a></span> is still a star in this matchup nonetheless. <span class="hover_img"><a href="" class="discussionA">Eldrazi Displacer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="popupImg"></span></a></span> is an interesting card here: while it very susceptible to removal spells, especially <span class="hover_img"><a href="" class="discussionA">Lightning Bolt<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Lightning+Bolt&type=card" class="popupImg"></span></a></span>, its ability to churn through <span class="hover_img"><a href="" class="discussionA">Lingering Souls<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Lingering+Souls&type=card" class="popupImg"></span></a></span> and Elemental tokens is very important especially in the later stages of the game. Of course, <span class="hover_img"><a href="" class="discussionA">Path to Exile<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Path+To+Exile&type=card" class="popupImg"></span></a></span> is solid here, as removal tends to be good versus decks like this one.</p>
                    <hr>
                    <h2>Our worst cards:</h2>
                    <div class="muimage">
                        <img src="https://i.imgur.com/2ms6C_d.jpg?maxwidth=640&shape=thumb&fidelity=medium" class="muimage" alt="Flickerwisp">
                    </div>
                    <br>
                    <br>
                    <p><span class="hover_img"><a href="" class="discussionA">Thraben Inspector<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Thraben+Inspector&type=card" class="popupImg"></span></a></span> is not very powerful here- it is often clunky and the body is not very relevant. <span class="hover_img"><a href="" class="discussionA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" class="popupImg"></span></a></span> is another creature that is not very good here- it dies to a single Lingering Souls token and also dies to every removal spell in the opponent's deck (whereas Restoration Angel dodges <span class="hover_img"><a href="" class="discussionA">Lightning Bolt<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Lightning+Bolt&type=card" class="popupImg"></span></a></span> and <span class="hover_img"><a href="" class="discussionA">Collective Brutality<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Collective+Brutality&type=card" class="popupImg"></span></a></span>). That being said, the more I've played the matchup, the more I've learned that <span class="hover_img"><a href="" class="discussionA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" class="popupImg"></span></a></span> is more of a necessary evil. The reason for this is that the majority of Mardu Pyromancer lists play <span class="hover_img"><a href="" class="discussionA">Ensnaring Bridge<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Ensnaring+Bridge&type=card" class="popupImg"></span></a></span> in the sideboard- a card that we cannot beat without a <span class="hover_img"><a href="" class="discussionA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" class="popupImg"></span></a></span> in the board (unless you run artifact removal in the board, which is rare). With <span class="hover_img"><a href="" class="discussionA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" class="popupImg"></span></a></span>, we can set up a one-turn kill by building up our board then cast a <span class="hover_img"><a href="" class="discussionA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" class="popupImg"></span></a></span>/blink it with a restoration angel or <span class="hover_img"><a href="" class="discussionA">Eldrazi Displacer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="popupImg"></span></a></span> activation and get a swift kill. Another questionable card is <span class="hover_img"><a href="" class="discussionA">Eldrazi Displacer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="popupImg"></span></a></span>- while powerful at grinding and killing tokens, it also dies to <span class="hover_img"><a href="" class="discussionA">Lightning Bolt<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Lightning+Bolt&type=card" class="popupImg"></span></a></span>. I like it more on the draw versus the play (will discuss more in the sideboarding section).</p>
                    <hr>
                    <h2>OP's best cards:</h2>
                    <div class="muimage">
                        <img src="https://magic.wizards.com/sites/mtg/files/images/hero/Modern-Trends-and-the-Three-Bye-Metagame-Icon.jpg" class="muimage" alt="Kolaghan's Command">
                    </div>
                    <br>
                    <br>
                    <p>In terms of threats, the only one we really care about is <span class="hover_img"><a href="" class="discussionA">Bedlam Reveler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Bedlam+Reveler&type=card" class="popupImg"></span></a></span>. The card itself, a 3/4 prowess, is unimpressive, especially when we can amass enough <span class="hover_img"><a href="" class="discussionA">Blade Splicer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Blade+Splicer&type=card" class="popupImg"></span></a></span> Golems. The real power of this deck is its ETB ability: discarding the hand (which is often empty) and drawing 3 cards, allowing the Mardu Pyromancer opponent to draw into more action. Therefore, we are most interesting in fighting the card via graveyard hate rather than removal, but sometimes we lack the gy hate to stop it. The cards we are most worried about are their removal spells. Most notably, we are weakest to <span class="hover_img"><a href="" class="discussionA">Kolaghan's Command<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Grim+Lavamancer&type=card" class="popupImg"></span></a></span>, one of the most powerful cards against Death & Taxes. It is very difficult to play around <span class="hover_img"><a href="" class="discussionA">Kolaghan's Command<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Grim+Lavamancer&type=card" class="popupImg"></span></a></span>, with our best way being denying them of mana via our hatebears. Postboard, the midrange opponent gets a plethora of haymakers, ranging from sweepers (<span class="hover_img"><a href="" class="discussionA">Anger of the Gods<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Anger+Of+The+Gods&type=card" class="popupImg"></span></a></span>) to removal threats (<span class="hover_img"><a href="" class="discussionA">Liliana, the Last Hope<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Liliana,+The+Last+Hope&type=card" class="popupImg"></span></a></span>, <span class="hover_img"><a href="" class="discussionA">Grim Lavamancer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Grim+Lavamancer&type=card" class="popupImg"></span></a></span>), all very hard to beat spells.</p>
                    <hr>
                    <h2>Sideboarding:</h2>
                    <div class="muimage">
                        <img src="https://spellsnare.files.wordpress.com/2016/06/132_relic.jpg?w=620" class="muimage" alt="Relic of Progenitus">
                    </div>
                    <br>
                    <br>
                    <p>Sideboarding is very dependent on whether we are on the play or on the draw. On the play, being aggressive is key, making cards like <span class="hover_img"><a href="" class="discussionA">Eldrazi Displacer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="popupImg"></span></a></span> and <span class="hover_img"><a href="" class="discussionA">Leonin Arbiter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Leonin+Arbiter&type=card" class="popupImg"></span></a></span> more valuable. Inversely, these cards become less valuable on the draw, where we want to play as a grindy deck. On the play, I like to shave thraben inspectors along with <span class="hover_img"><a href="" class="discussionA">Eldrazi Displacer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="popupImg"></span></a></span>s for a variety of <span class="hover_img"><a href="" class="discussionA">Burrenton Forge-Tender<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Burrenton+Forge-Tender&type=card" class="popupImg"></span></a></span>s (blocks <span class="hover_img"><a href="" class="discussionA">Young Pyromancer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Young+Pyromancer&type=card" class="popupImg"></span></a></span> and its tokens well along with protecting our creatures from <span class="hover_img"><a href="" class="discussionA">Lightning Bolt<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Lightning+Bolt&type=card" class="popupImg"></span></a></span>s and <span class="hover_img"><a href="" class="discussionA">Anger of the Gods<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Anger+Of+The+Gods&type=card" class="popupImg"></span></a></span>), <span class="hover_img"><a href="" class="discussionA">Shalai, Voice of Plenty<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Shalai,+Voice+of+Plenty&type=card" class="popupImg"></span></a></span>, <span class="hover_img"><a href="" class="discussionA">Kitchen Finks<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Kitchen+Finks&type=card" class="popupImg"></span></a></span>, and graveyard hate like <span class="hover_img"><a href="" class="discussionA">Rest in Peace<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Rest+In+Peace&type=card" class="popupImg"></span></a></span> and <span class="hover_img"><a href="" class="discussionA">Relic of Progenitus<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Relic+Of+Progenitus&type=card" class="popupImg"></span></a></span>. On the draw, I prefer to trim on <span class="hover_img"><a href="" class="discussionA">Thraben Inspecor<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Thraben+Inspector&type=card" class="popupImg"></span></a></span>s, <span class="hover_img"><a href="" class="discussionA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" class="popupImg"></span></a></span>s, and <span class="hover_img"><a href="" class="discussionA">Leonin Arbiter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Leonin+Arbiter&type=card" class="popupImg"></span></a></span>s in favor of <span class="hover_img"><a href="" class="discussionA">Burrenton Forge-Tender<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Burrenton+Forge-Tender&type=card" class="popupImg"></span></a></span>s, <span class="hover_img"><a href="" class="discussionA">Auriok Champion<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Auriok+Champion&type=card" class="popupImg"></span></a></span>s, <span class="hover_img"><a href="" class="discussionA">Kitchen Finks<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Kitchen+Finks&type=card" class="popupImg"></span></a></span>, <span class="hover_img"><a href="" class="discussionA">Shalai, Voice of Plenty<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Shalai,+Voice+of+Plenty&type=card" class="popupImg"></span></a></span>, and our more grindy threats like planeswalkers.</p>
                    <hr>
                    <h2>Important Interactions:</h2>
                    <div class="muimage">
                        <img src="https://i.ytimg.com/vi/0iXrBmM3X7U/hqdefault.jpg" class="muimage" alt="Bedlam Reveler">
                    </div>
                    <br>
                    <br>
                    <p>Albeit a very rare interaction but cute one, <span class="hover_img"><a href="" class="discussionA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" class="popupImg"></span></a></span> or <span class="hover_img"><a href="" class="discussionA">Eldrazi Displacer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="popupImg"></span></a></span> can blink <span class="hover_img"><a href="" class="discussionA">Bedlam Reveler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Bedlam+Reveler&type=card" class="popupImg"></span></a></span> to make them discard their hand (and draw 3 new cards) in the event that they amass a large number of cards in hand.</p>
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

