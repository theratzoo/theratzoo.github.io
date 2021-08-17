<?php
    include("../scripts/searchscript.php");
    include("../scripts/cardlistdb.php");
    include("../scripts/listofwebsitecontent.php");
    
?>
<?php
    $filename = 'article_4.php';
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

    

        <title>Spice Space- War of the Spark Cards</title>
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
        <script src="/visited.js"></script>
        <script src="https://deckbox.org/assets/external/tooltip.js"></script>
        <script src="/searchbarscripts.js" type="text/javascript"></script>
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
            <div class="container-fluid body-div" id="content">
                <div class="jumbotron">
                    <h1>Spice Space #4: War of the Spark Cards</h1>
                </div>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <img src="https://magic.wizards.com/sites/mtg/files/images/wallpaper/Z5bvzqxDOR_WAR_2560x1600.jpg" alt="The Wanderer" class="ssa1_img">
                </div>
                <div class="col-sm-6">
                    <img src="https://magic.wizards.com/sites/mtg/files/images/wallpaper/8rVkQqI5dl_WAR_1280x960.jpg" alt="Gideon Blackblade" class="ssa1_img">
                </div>
            </div>
            <br>
            <hr>
            <br>
            <h2>Overview</h2>
            <p>War of the Spark prerelease is this weekend, with the official release just ahead. With the new set comes potential playable cards for Death and Taxes. That being said, unlike prior sets I reviewed, War of the Spark felt lacking in terms of Death and Taxes staples. There are still plenty of cards worth discussing, but nothing that I would expect to be slotted into stock B/W or Mono-White Eldrazi and Taxes lists. Therefore, I will instead review a large number of cards, briefly outlining where it could be seen and its overall potential. Without further ado, here is the fourth installment of Spice Space.</p>
            <hr>
            <h2>Specific Cards:</h2>
            <br>
            <h2>Tomik, Distinguished Advokist</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Tomik,+Distinguished+Advokist&type=card" class="decktech_card" alt="Tomik, Distinguished Advokist">
                </div>
                <div class="col-md-8">
                    <p>Tomik, Distinguished Advokist is War of the Spark's hatebear. For two white mana, you get a 2/3 flier- already powerful stats. In addition, the creature gives lands on the battlefield and graveyard shroud, along with preventing them from being played in the graveyard. To cut to the case, Tomik, Distinguished Advokist stops the following cards- Crucible of Worlds, Ramunap Excavator, Life from the Loam, land destruction on your lands (most notably Field of Ruin). He also stops Surgical Extraction from targeting a land. Another cute interaction is that he gives your creature lands hexproof. In essence, Tomik, Distinguished Advokist is fine against Dredge, Prison, and Ramunap Excavator decks. Otherwise, he is quite lackluster. The double white in Tomik, Distinguished Advokist's mana cost makes him difficult to cast as well. All in all, Tomik's DIstinguished Advokist's taxing ability is too narrow to let him see much play in Modern. He is more of a Legacy card than a Modern one, as Wasteland is very common as is the Lands deck. Plus, Legacy Death and Taxes sometimes plays Serra Avenger, which only has one more power than Tomik, Distinguished Advokist.</p>
                </div>
            </div>
            <h4>D&T Rating: 4/10 (Modern), 9/10 (Legacy)</h4>
            <br>
            <hr>
            <br>
            <h2>Gideon Blackblade</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Gideon+Blackblade&type=card" class="decktech_card" alt="Gideon Blackblade">
                </div>
                <div class="col-md-8">
                    <p>Gideon Blackblade is a very powerful planeswalker for its mana cost. Gideon Blackblade's static ability lets him attack and activate one of his loyalty abilities. His plus one, however, is not very impressive for Death and Taxes. Lifelink is not the worst against aggressive decks, but the other two are pretty mediocre. Vigilance does help with keeping an attacker back to block Gideon Blackblade, but giving a creature indestructible is pretty much useless (as the opponent can just remove it before the ability responds). The minus six ability is quite good, but it requires Gideon Blackblade to survive three turns before it can even be used without killing him. All that being said, Gideon Blackblade is not a bad planeswalker for Death and Taxes, as he provides utility and damage to fight against aggro decks while threatening an exile effect against slower decks. Gideon Blackblade is a better planeswalker for the main deck, as he does not provide enough utility to warrant a sideboard slot. One major issue, however, that must be addressed is that Gideon Blackblade must be a creature on your turn no matter what. This leaves him vulnerable to Path to Exile, a card played by many decks in Modern. Therefore, I am not a big fan of Gideon Blackblade, as he does not provide enough utility to be a sideboard planeswalker, nor is he powerful enough to be playable in the main deck. Remember, playing noncreature spells in the main deck of Death and Taxes builds has downsides compared to creatures, as noncreature spells lack Aether Vial synergies and get taxed by Thalia, Guardian of Thraben.</p>
                </div>
            </div>
            <h4>D&T Rating: 5/10</h4>
            <br>
            <hr>
            <br>
            <h2>Teyo, the Shieldmage</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Teyo,+the+Shieldmage&type=card" class="decktech_card" alt="Teyo, the Shieldmage">
                </div>
                <div class="col-md-8">
                    <p>Teyo, the Shieldmage provides some utility. He gives us hexproof and creatures a 0/3 Wall with his minus two ability. While Teyo, the Shieldmage only has five loyalty counters, Flickerwisp can reset his loyalty to allow more wall creation. Despite that cute synergy, Teyo, the Shieldmage is not very impressive. Aegis of the Gods gives us hexproof for one less mana along with a 2/1 creature. If hexproof was valuable in the meta, Aegis of the Gods would certainly see play in the main deck. However, the only decks that are hindered by hexproof are Burn and decks with discard. The latter group of decks also do not care about their opponent having hexproof on turn three, further weakening Teyo, the Shieldmage. The planeswalker is honestly not that bad if in the right meta. The Wall tokens that Teyo, the Shieldmage creates are also meta-dependent. While the meta is full of linear decks, many of those decks do not care about 0/3 walls. Izzet Phoenix flies over the tokens, Dredge can just win with a few Conflagrates, Tron wins with a Planeswalker. Therefore, Teyo, the Shieldmage is not very good in Death and Taxes, but can certainly see play in the right meta.</p>
                </div>
            </div>
            <h4>D&T Rating: 3/10</h4>
            <br>
            <hr>
            <br>
            <h2>The Wanderer</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=The+Wanderer&type=card" class="decktech_card" alt="The Wanderer">
                </div>
                <div class="col-md-8">
                    <p>The Wanderer is yet another niche utility planeswalker. This effect is Mark of Asylum as four mana Planeswalker that also has a minus two ability. That ability is actually not too bad, as it kills many threats in Modern. Grixis Death's Shadow, Izzet Phoenix, Humans, and Jund all have large creatures that The Wanderer can get rid of. In addition, three of those mentioned decks contain damage-based removal spells, like Lightning Bolt, that are severely hindered by The Wanderer. On top of all that, The Wanderer also stops noncombat damage to you, essentially giving you hexproof against Burn. Finally, The Wanderer is a very good planeswalker to blink with Flickerwisp, as its ability is a strong one to repeat. If The Wanderer was cheaper in mana or had a more flexible ability, I would expect it to be a staple in Death and Taxes. As it stands, however, it is often a four mana Bring to Trial that also gains you some life. Still, The Wanderer is very flexible and can see play against a variety of decks. It is definitely playable, but it does not contribute enough to a Death and Taxes sideboard to be called a staple.</p>
                </div>
            </div>
            <h4>D&T Rating: 7/10</h4>
            <br>
            <hr>
            <br>
            <h2>Liliana's Triumph</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Liliana's+Triumph&type=card" class="decktech_card" alt="Liliana's Triumph">
                </div>
                <div class="col-md-8">
                    <p>Liliana's Triumph is essentially Diabolic Edict for B/W Eldrazi and Taxes, as Liliana, the Last Hope is a very rare sight in that deck. Diabolic Edict is a powerful card, as it sees play in Legacy. That being said, the biggest reason it sees play in Legacy is to combat cards such as True-name Nemesis and Mother of Runes, cards illegal in Modern. The only deck that Liliana's Triumph is spectacular against is Boggles. Otherwise, it is almost always a worse Path to Exile/Fatal Push/Cast Down, as it lets the opponent pick which creature they keep. Against Izzet Phoenix, they can simply sacrifice an Arclight Phoenix. Humans and Bant Spirits will lose one of their filler creatures, while Grixis Death's Shadow and UWx Control will part ways with their Snapcaster Mage. Therefore, Liliana's Triumph is not a card for B/W Eldrazi and Taxes, as it is worse than other removal spells in almost every match.</p>
                </div>
            </div>
            <h4>D&T Rating: 2/10</h4>
            <br>
            <hr>
            <br>
            <h2>Dreadhorde Invasion</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Dreadhorde+Invasion&type=card" class="decktech_card" alt="Dreadhorde Invasion">
                </div>
                <div class="col-md-8">
                    <p>Dreadhorde Invasion is mainly a budget Bitterblossom. It is slightly different, as it grows a creature so long as it remains instead of making a 1/1 flier each turn. Ultimately, however, Dreadhorde Invasion is not good enough compared to Bitterblossom. Fliers are very valuable for Death and Taxes in Modern, especially for B/W Eldrazi and Taxes. Therefore, Dreadhorde Invasion lacks enough power to make it a better option then Bitterblossom. It is still an interesting and strong card, but nothing for B/W Eldrazi and Taxes.</p>
                </div>
            </div>
            <h4>D&T Rating: 2/10</h4>
            <br>
            <hr>
            <br>
            <h2>Single Combat</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Single+Combat&type=card" class="decktech_card" alt="Single Combat">
                </div>
                <div class="col-md-8">
                    <p>Single Combat might be the closest card to Cataclysm we get (excluding Cataclysmic Gearhulk). Cataclysm would be an excellent addition to Death and Taxes, but Single Combat is much worse. It costs an additional mana and it only gets rid of planeswalkers and creatures. The biggest strength of Cataclysm is that it destroys lands, making it a staple against Control decks in Legacy. However, Single Combat is often just worse than a Wrath of God. Maybe Modern Horizons will bring Cataclysm to Modern...</p>
                </div>
            </div>
            <h4>D&T Rating: 1/10</h4>
            <br>
            <hr>
            <br>
            <h2>The Elderspell</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=The+Elderspell&type=card" class="decktech_card" alt="The Elderspell">
                </div>
                <div class="col-md-8">
                    <p>The Elderspell is a great way to answer planeswalkers, especially if the opponent has more than one available. It is very good against Jund, BG Midrange, and UWx Control, as those decks run multiple distinct planeswalkers. Otherwise, The Elderspell is quite lacking. Oftentimes, it is better to have Gideon, Ally of Zendikar against those decks anyway, as he is a proactive spell. You do not want to be reactive against the slower decks, else they will go over you. Therefore, The Elderspell is powerful, but not what B/W Eldrazi and Taxes wants.</p>
                </div>
            </div>
            <h4>D&T Rating: 1/10</h4>
            <br>
            <hr>
            <br>
            <h2>Prison Realm</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Prison+Realm&type=card" class="decktech_card" alt="Prison Realm">
                </div>
                <div class="col-md-8">
                    <p>Prison Realm is a restrictive Oblivion Ring that scries. The scry one is not worth limiting an exile effect to creatures and planeswalkers. Too many decks with problematic artifacts and enchantments exist in Modern, such as Amulet Titan, Affinity, Tron, Prison, and UWx Control.</p>
                </div>
            </div>
            <h4>D&T Rating: 1/10</h4>
            <br>
            <hr>
            <br>
            <h2>Teferi, Time Raveler</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Teferi,+Time+Raveler&type=card" class="decktech_card" alt="Teferi, Time Raveler">
                </div>
                <div class="col-md-8">
                    <p>Teferi, Time Raveler is an interesting three-mana planeswalker. He essentially stops counters along with cards that must be cast as instants, such as Settle the Wreckage, Condem, and fog effects. However, Teferi, Time Raveler's plus one is pretty much useless for U/W Death and Taxes. His minus three is not bad, but U/W Death and Taxes does not want a three mana sorcery speed bounce spell that draws a card with little upside. Teferi, Time Raveler is a very powerful card, but he does not synergize enough with U/W Death and Taxes to make him very good. He can still have his moments in U/W Death and Taxes, but there are other cards that fill his role better.</p>
                </div>
            </div>
            <h4>D&T Rating: 2/10</h4>
            <br>
            <hr>
            <br>
            <h2>Sorin, Vengeful Bloodlord</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Sorin,+Vengeful+Bloodlord&type=card" class="decktech_card" alt="Sorin, Vengeful Bloodlord">
                </div>
                <div class="col-md-8">
                    <p>Sorin, the Vengeful Bloodlord is not very strong for a four-mana planeswalker. He would be competing with Gideon, Ally of Zendikar in B/W Eldrazi and Taxes's sideboards, so he needs to be quite strong to see play. Sorin, the Vengeful Bloodlord's static ability and plus two are good against aggressive decks. However, casting a four mana planeswalker against Burn or Dredge is quite slow. There are better anti-aggro cards than Sorin, the Vengeful Bloodlord. Therefore, his minus x ability is the only one that is worth discussing. It is very powerful but too limited. It usually returns only one impactful creature before forcing him to use his plus two one or two times. Also, against UW Control, many of your creatures are not in your graveyard due to Path to Exile or Terminus. Furthermore, against BGx Midrange and UWx Control, Rest in Peace is often brought in, invalidating Sorin, Vengeful Bloodlord. All in all, Sorin, Vengeful Bloodlord is a strong card, but not one that provides enough value to see play in B/W Eldrazi and Taxes.</p>
                </div>
            </div>
            <h4>D&T Rating: 2/10</h4>
            <br>
            <hr>
            <br>
            <h2>Huatli's Raptor</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Huatli's+Raptor&type=card" class="decktech_card" alt="Huatli's Raptor">
                </div>
                <div class="col-md-8">
                    <p>Huatli's Raptor has excellent stats for a two drop. In addition, the proliferate effect can speed up an Aether Vial or mess with an Engineered Explosives/Chalice of the Void. That being said, G/W Death and Taxes does not want creatures with just good stats- value or interaction needs to be stapled for the card to see play. While a cute dinosaur, Huatli's Raptor is competing with much better cards (Voice of Resurgence, Qasali Pridgemage, etc.).</p>
                </div>
            </div>
            <h4>D&T Rating:1/10</h4>
            <br>
            <hr>
            <br>
            <h2>Dovin's Veto</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Dovin's+Veto&type=card" class="decktech_card" alt="Dovin's Veto">
                </div>
                <div class="col-md-8">
                    <p>Dovin's Veto is a strictly better Negate for U/W Death and Taxes most of the time. While getting colors is not easy for that deck, blue mana is usually the problem. Dovin's Veto only adds a white mana to the cost, so it is not too difficult to cast. That being said, Negate is not very common in U/W Death and Taxes. The only thing that Dovin's Veto adds is that it is very effective against UWx Control. I doubt that the small upside will place Dovin's Veto in U/W Death and Taxes's sideboards, but it is definitely an upgrade to an already decent card. The biggest problem with it is that the meta is unforgiving to reactive cards, so Dovin's Veto might be too slow and clunky. Still, the card is definitely worth testing out in U/W Death and Taxes's sideboards.</p>
                </div>
            </div>
            <h4>D&T Rating: 7/10</h4>
            <br>
            <hr>
            <br>
            <h2>Tenth District Legionnaire</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Tenth+District+Legionnaire&type=card" class="decktech_card" alt="Tenth District Legionnaire">
                </div>
                <div class="col-md-8">
                    <p>The reason Tenth District Legionnaire is here is that I want to talk about its ability. The ability states that it gets a +1/+1 counter and scries only if a spell targets Tenth District Legionnaire. Eldrazi Displacer, Flickerwisp, and Restoration Angel's blink abilities are not spells. Therefore, this card has zero synergies with any Death and Taxes build.</p>
                </div>
            </div>
            <h4>D&T Rating: 0/10</h4>
            <br>
            <hr>
            <br>
            <h2>Elite Guardmage</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Elite+Guardmage&type=card" class="decktech_card" alt="Elite Guardmage">
                </div>
                <div class="col-md-8">
                    <p>Elite Guardmage is a nice card to blink with Eldrazi Displacer. Gaining three life and drawing a card makes Elite Guardmage a good value engine against a wide variety of decks. That being said, at four mana, the card is very restrictive. Most U/W Death and Taxes lists do not run Eldrazi packages, so Elite Guardmage would not fit into the more tempo-oriented builds. Elite Guardmage might push the Eldrazi version of U/W Death and Taxes, but I doubt this card will see play outside of jank decks.</p>
                </div>
            </div>
            <h4>D&T Rating: 2/10</h4>
            <br>
            <hr>
            <br>
            <h2>Dovin, Hand of Control</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Dovin,+Hand+of+Control&type=card" class="decktech_card" alt="Dovin, Hand of Control">
                </div>
                <div class="col-md-8">
                    <p>Dovin, Hand of Control taxes all noncreature spells except for planeswalkers and enchantments and stops damage from a source. This planeswalker is quite underwhelming, as it taxes without providing any damage. Dovin, Hand of Control is essentially a worse Gideon of the Trials except that it has a taxing ability that is typically useless by turn three or later. The times that the taxing ability is useful, however, I would much rather play a card that progresses Death and Taxes's strategy (Vryn Wingmare).</p>
                </div>
            </div>
            <h4>D&T Rating: 1/10</h4>
            <br>
            <hr>
            <br>
            <h2>Karn, the Great Creator</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Karn,+the+Great+Creator&type=card" class="decktech_card" alt="Karn, the Great Creator">
                </div>
                <div class="col-md-8">
                    <p>Karn, the Great Creator is a four mana Stony Silence with other abilities. Karn, the Great Creator's first ability, his plus one, is useless for any Death and Taxes build. His minus two, however, is quite interesting. When any card refers to "outside the game", that literally means your sideboard. So with Karn, the Great Creator, you can have some utility artifacts in your sideboard to tutor for, such as Ensnaring Bridge for aggro decks, Bottled Cloister for Control, Grafdigger's Cage for Dredge, or Chalice of the Void for spell decks. Plus, Karn, the Great Creator can let you play artifacts such as Phyrexian Revoker in the main deck and then put one in the sideboard to fetch out if necessary. My biggest issues with Karn, the Great Creator is that his minus two forces you to play suboptimal cards in your sideboard. Plus, that ability does not work well with Leonin Arbiter in play. Karn, the Great Creator is certainly powerful, but not a card that Death and Taxes really wants. Four mana Stony Silence is often too slow, while his minus ability is both slow and warping. Therefore, I doubt he will see play in any respectable lists. That does not mean that I will not try making a bad brew.</p>
                </div>
            </div>
            <h4>D&T Rating: 3/10</h4>
            <br>
            <hr>
            <br>
            <h2>Silent Submersible</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Silent+Submersible&type=card" class="decktech_card" alt="Silent Submersible">
                </div>
                <div class="col-md-8">
                    <p>Silent Submersible is a very powerful vehicle. If it was easier to cast, I would be very inclined to test it in U/W Death and Taxes. However, the mana cost is very difficult for a deck that is splashing blue. Still, the card advantage and low mana cost make the card very powerful and one that is still worth exploring in U/W Death and Taxes.</p>
                </div>
            </div>
            <h4>D&T Rating: 6/10</h4>
            <br>
            <hr>
            <br>
            <h2>Blast Zone</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Blast+Zone&type=card" class="decktech_card" alt="Blast Zone">
                </div>
                <div class="col-md-8">
                    <p>Blast Zone is essentially an Engineered Explosives on a land. The two issues with it compared to Engineered Explosives are that Blast Zone always has a counter on it, and Blast Zone is very costly to use. That being said, it is a land, so it has a lower opportunity cost than Engineered Explosives. Blast Zone does have competition though- Tectonic Edge, Field of Ruin, and Mutavault are all colorless lands that are often the "flex lands" in Death and Taxes. The most appealing aspect of Blast Zone to me is that it can get rid of cheap creatures for a low mana cost, which is good against some of Death and Taxes's worst matchups- Humans and Elves. All in all, Blast Zone is a fine card for Death and Taxes, but it is competing with many other powerful lands. It is still a land worth testing in pretty much any Death and Taxes build.</p>
                </div>
            </div>
            <h4>D&T Rating: 7/10</h4>
            <br>
            <hr>
            <br>
            <h2>Mobilized District</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Mobilized+District&type=card" class="decktech_card" alt="Mobilized District">
                </div>
                <div class="col-md-8">
                    <p>Mobilized District is usually a worse Mutavault. While the creature has vigilance and is slightly bigger, the mana cost is much more punishing. Thalia, Guardian of Thraben can reduce it down to three mana, but that is still two more mana for +1/+1 in stats plus vigilance. Therefore, Mobilized District is outclassed by Mutavault, making it unplayable in Death and Taxes.</p>
                </div>
            </div>
            <h4>D&T Rating: 1/10</h4>
            <br>
            <hr>
            <br>
            <h2>Despark</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Despark&type=card" class="decktech_card" alt="Despark">
                </div>
                <div class="col-md-8">
                    <p>Despark is a good answer to planeswalkers and expensive artifacts. However, I would much rather pay one more mana for an enchantment that removes any nonland permanent. Despark is too narrow and would only be played against UWx Control and maybe decks with Gurmag Angler.</p>
                </div>
            </div>
            <h4>D&T Rating: 1/10</h4>
            <br>
            <hr>
            <br>
            <h2>Closing Thoughts:</h2>
            <p>All in all, War of the Spark has a few cool cards that Death and Taxes can play with. However, those cards are not very exciting compared to past sets. Anyway, if you guys liked this format more than the prior Spice Spaces, please let me know. Good luck at the prerelease!</p>
            <br>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h4><a href="article_3" class="discussionA">Previous Spicespace: Ravnica Allegience Cards</a></h4>
                </div>
            </div>
            <br>
            <hr>
            <br>
            <h3>Recommended:</h3>
            <div id="recommended">

            </div>
            <!-- Can also do sets in a separate article series... that would be more for analysis and thoughts
                while spice can be used for testing results (games, etc) and post-game thoughts and possible lists-->


            <!--Layout: 
                have the current (weeky? monthly? biweekly?) article here
                then at bottom have a search bar for other articles and a button for previous article

                can also have banners with previous articles... look at websites like goldfish and other mtg sites for ideas...
            -->
            
            <div class="extra-space">
            </div>
            </div>
            
            <script>var jArray = <?php echo json_encode($listOfCardNames); ?>;</script>
            <script src="/loadcardhoversettings.js"></script>
            <script>var listOfTitles = <?php echo json_encode($listOfTitles); ?>;</script>
            <script>var listOfDescriptions = <?php echo json_encode($listOfDescriptions); ?>;</script>
            <script>var listOfLinks = <?php echo json_encode($listOfLinks); ?>;</script>
            <script src="/recommender.js"></script>
            <?php
                include("../scripts/footer.php");
            ?>
            <script>var jStr = <?php echo json_encode($lastModDate); ?>;</script>
            <script src="/loadpublishinfo.js" type="text/javascript"></script>
    </body>
</html>
