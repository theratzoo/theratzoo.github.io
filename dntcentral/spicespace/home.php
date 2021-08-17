<?php
    include("../scripts/searchscript.php");
    include("../scripts/cardlistdb.php");
    include("../scripts/listofwebsitecontent.php");
    
?>
<?php
    $filename = 'home.php';
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

    

        <title>Spice Space Homepage</title>
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
                checkMulliganGame();
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
          function previewDeckThree(name) {
            var img = document.getElementById('deckPreviewImgThree');
            img.src = `https://gatherer.wizards.com/Handlers/Image.ashx?name=${name}&type=card`;
            img.alt = name;
          }
          function dismissAlert() {
            //document.getElementById("alertMG").style.visibility = "hidden";
            document.getElementById("alertMG").style.display = "none";
          }
          function stopShowingAlert() {
            localStorage.setItem('hide10', true);
            dismissAlert();
          }
          function checkMulliganGame() {
                var completed = localStorage.getItem('completed10');
                var isDisabled = localStorage.getItem('hide10');
                if (completed) {
                    
                } else if (isDisabled) {
                    
                } else {
                    //document.getElementById("alertMG").style.visibility = "visible";
                    document.getElementById("alertMG").style.display = "block";
                }
            }
        </script>
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
            <div class="container-fluid" id="content">
                <br>
                    <div class="alert alert-danger" id="alertMG">
                        <a href="/modern/mulligans#mg"><strong>April's Mulligan Game is available now!</strong></a>
                        <input id="dismissAlert" onclick="dismissAlert()">
                        <br>
                        <a href="/" onclick="stopShowingAlert()" id="stopShowingAlert">Don't show this again.</a>
                    </div>
                    <br>
                <div class="jumbotron">
                <h1>Spice Space Homepage</h1> <!--work on the title...-->
            </div>
            <br>
            <h4><a href="#new">Go down to the latest article</a></h4>
            <br>

            <br>
            <p>Spice Space is an article series focused on the less conventional side of Death and Taxes. Here at the Spice Space, new cards are discussed, brews are tested, and old toys are brought back into the spotlight.</p>
            <br>
            <p>Whenever a new set comes out, a Spice Space article will look at the cards for D&T potential. In addition, articles on forgotten hatebears will be published, especially when a shift in the meta can make an irrelevant spell a staple. In addition, spicey decklists will be tested with said spice, with subsequent results and reporting coming here (or videos if there's interest). </p>
            <br>
            <br>

            <p>If there are any particular cards you would like discussed or tested here, feel free to contact me. Althought I cannot promise I'll be able to test everything suggested, as my MTGO collection is not very large.</p>
            <br>
            <br>
            <hr>
            <h3>Article List</h3>
            <br>
            <div class="row">
              <div class="col-sm-3">

              </div>
              <div class="col-sm-6">
                <h2><a href="article_5" class="mua">Modern Horzions Cards</a></h2>
                <a href="article_5"><img src="/images/spicespace/ranger-captain_of_eos.jpg" class="muhome" alt="Ranger-Captain of Eos"></a>
              </div>
              <div class="col-sm-3">
                
              </div>
            </div>
            <br>
            <br>
            <div class="row">
              <div class="col-sm-3">

              </div>
              <div class="col-sm-6">
                <h2><a href="article_4" class="mua">War of the Spark D&T Cards</a></h2>
                <a href="article_4"><img src="https://magic.wizards.com/sites/mtg/files/images/wallpaper/8rVkQqI5dl_WAR_1280x960.jpg" class="muhome" alt="Gideon Blackblade"></a>
              </div>
              <div class="col-sm-3">
                
              </div>
            </div>
            <br>
            <br>
            <div class="row">
              <div class="col-sm-3">

              </div>
              <div class="col-sm-6">
                <h2><a href="article_3" class="mua">Ravnica Allegiance D&T Cards</a></h2>
                <a href="article_3"><img src="https://227rsi2stdr53e3wto2skssd7xe-wpengine.netdna-ssl.com/wp-content/uploads/2018/12/Lavinia-e1545265751419-730x280.jpg" class="muhome" alt="Lavinia, Azorius Renegade"></a>
              </div>
              <div class="col-sm-3">
                
              </div>
            </div>
            <br>
            <br>
            <div class="row">
              <div class="col-sm-3">

              </div>
              <div class="col-sm-6">
                <h2><a href="article_2" class="mua">Guild of Ravnica D&T Cards</a></h2>
                <a href="article_2"><img src="https://media-dominaria.cursecdn.com/attachments/169/498/636724687494964938.jpg" class="muhome" alt="Knight of Autumn"></a>
              </div>
              <div class="col-sm-3">
                
              </div>
            </div>
            <br>
            <br>
            <div class="row">
              <div class="col-sm-3">

              </div>
              <div class="col-sm-6">
                <h2><a href="article_1" class="mua">Core 19 D&T Cards</a></h2>
                <a href="article_1"><img src="https://i.ytimg.com/vi/hcY0K7_KgGM/hqdefault.jpg" class="muhome" alt="Militia Bugler"></a>
              </div>
              <div class="col-sm-3">
                
              </div>
            </div>


            <br>
            <br>
            <hr>
            <h3>Most Recent Spice Article</h3>

            <br>
            <br>
            <h3 id="new">Spice Space #4: Modern Horizons Cards !</h3>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <img src="https://edge.alluremedia.com.au/m/k/2019/05/seb-mckinnon-magic-giver-of-runes-1.jpg" alt="Giver of Runes" class="ssa1_img">
                </div>
                <div class="col-sm-6">
                    <img src="https://www.cardkingdom.com/images/magic-the-gathering/art-series/silent-clearing-not-tournament-legal-63370-medium.jpg" alt="W/B Canopy" class="ssa1_img">
                </div>
            </div>
            <br>
            <hr>
            <br>
            <h2>Overview</h2>
            <p>Modern Horizons is the first set in Magic's history that contains new cards entering Modern without going through Standard as well. As a result, the power level of this new set is higher than the average Standard set, thus adding more Modern playable cards to the format. Modern Horizons has many cards that Death and Taxes builds may be interested in. Below, I will be discussing my favorite Death and Taxes cards in Modern Horizons.</p>
            <hr>
            <h2>Honorable Mentions</h2>
            <br>
            <h3>Martyr's Soul</h3>
            <br>
            <div>
                <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Martyr's+Soul&type=card" class="decktech_card" alt="Martyr's Soul">
            </div>
            <br>
            <p>Martyr's Soul is a card that synergizes well with the cards in Death and Taxes. While it is only a three-mana 5/4 at best, getting the two counters is quite easy. Aether Vial is a way to get Martyr's Soul into play without tapping a land. In addition, Death and Taxes contains many creatures, so convoking the creature is reasonable. Finally, with Flickerwisp and an Aether Vial, you can blink a Martyr's Soul on the battlefield and give it two counters. All that being said, the card is underwhelming. A vanilla 5/4 for three mana is not what Death and Taxes wants, especially since Blade Splicer is already a 4/4 for three mana that actually has upside (synergy with blinking creatures, first-strike on the Golem, etc.). Therefore, while a cute card with strong power/toughness, Martyr's Soul is not a very playable card for Death and Taxes in Modern.</p>
            <br>
            <h3>New Swords</h3>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Sword+of+Truth+and+Justice&type=card" class="decktech_card" alt="Sword of Truth and Justice">
                </div>
                <div class="col-sm-6">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Sword+of+Sinew+and+Steel&type=card" class="decktech_card" alt="Sword of Sinew and Steel">
                </div>
            </div>
            <br>
            <p>Modern Horizons came out with two new swords- -starting the ally sword of x and y cycle. To put it bluntly, both of them are quite bad for Modern Death and Taxes. Sword of Truth and Justice protects you from white (turning off Restoration Angel and Flickerwisp on that creature) and blue (the color with almost no creature-targeting spells). The sword also has a very underwhelming effect- putting a +1/+1 counter on a creature then proliferating. Since Death and Taxes lacks creatures with counters, Sword of Truth and Justice just gives one creature two counters (unless it already got a hit). Truthfully, it is just worse than Sword of Fire and Ice, which gives better color-protection and has a significantly more powerful effect- drawing a card and Shocking. The second sword, Sword of Sinew and Steel, gives protection from black and red, the two colors with the most removal. Its effect, however, is very narrow- destroying a planeswalker and an artifact. Many decks in Modern do not run artifacts or planeswalkers, making the sword very narrow, whereas Sword of Fire and Ice's effect will always be relevant. Therefore, both swords are pretty much worse versions of Sword of Fire and Ice, which does not even see Modern play. The only way I could see one of these swords seeing play is if Stoneforge Mystic is unbanned, which seems plausible given how toned down these swords are.</p>
            <br>
            <h3>Collector Ouphe</h3>
            <br>
            <div>
                <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Collector+Ouphe&type=card" class="decktech_card" alt="Collector Ouphe">
            </div>
            <br>
            <p>Admitadely, I almost forgot about Collector Ouphe! This card is a very powerful hatebear- a Stony Silence attached to a 2/2 for two mana is nothing to overlook. The only issue with Collector Ouphe is that it is in green. If it was a white hatebear, I would be very excited to jam it into many Death and Taxes list. However, it is only an option for the fringe Green-White Taxes lists. Also, Green-White Taxes already has powerful options to hate on artifacts, such as Qasali Pridemage and Knight of Autumn. Furthermore, those two are playable in the main deck, whereas Collector Ouphe is not, as it is worse than those two versus decks without artifacts, and it shuts down our own Aether Vials. Still, I would play at least one of them in the sideboard, or maybe play multiple in the main deck in a list without Aether Vial. The card is overall very powerful, but niche, as it is in green.</p>
            <br>
            <hr>
            <br>
            <h2>Top five Cards</h2>

            <!--five: white beat within. four; unsettled Mariner. three: ranger. two: lands. 1: new mom-->

            <h3>#5: Generous Gift</h3>
            <br>
            <div>
                <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Generous+Gift&type=card" class="decktech_card" alt="Generous Gift">
            </div>
            <br>
            <p>Generous Gift is, quite literally, Beast Within but in white (and it makes a 3/3 Elephant instead of a 3/3 beast). This card is certainly a powerful one that will find a home in the majority of white decks in EDH. The reason Generous Gift is ranked number five is that it is definitely more powerful than the honorable mentions. It is a very flexible answer to the vast majority of cards in Modern, making it a plausible sideboard option. That being said, it is a tad bit too slow and awkward to be playable in Modern. Oblivion Ring is usually better than Generous Gift. While Oblivion Ring cannot take out a land, Death and Taxes has plenty of ways to deal with lands. Oblivion Ring can also deal with indestructible permanents and does not produce a 3/3 token. Still, Generous Gift has other advantages over Oblivion Ring. It is instant speed, the card cannot be returned, and the token can easily be removed with Flickerwisp or Eldrazi Displacer. I could see Generous Gift being played as a one-of in the sideboard in a meta focused on less on fast aggro and more on decks such as control, Tron, prison, and other decks with few small creatures. However, Death and Taxes does not struggle much against the decks that Generous Gift is good against, whereas it is an underdog against the hyper-aggressive decks like Dredge and Humans that are bad matchups for Generous Gift. In conclusion, Generous Gift is a strong answer to a wide range of threats. However, it is a slower spell, one too slow for the current Modern meta.</p>
            <br>
            <hr>
            <br>
            <h3>#4: Unsettled Mariner</h3>
            <br>
            <div>
                <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Unsettled+Mariner&type=card" class="decktech_card" alt="Unsettled Mariner">
            </div>
            <br>
            <p>Unsettled Mariner is a card that U/W Death and Taxes can consider for the two-drop slot. It is a Thalia, Guardian of Thraben for targeted spells. It makes removal, hand-disruption, and targeted burn cost an additional mana. It taxes everything that targets you or one of your permanents, from Lightning Bolt to a Liliana of the Veil -2. In a way, Unsettled Mariner is a weaker Thalia, Guardian of Thraben that is not legendary. The card is more consistent than Meddling Mage and Lavinia, Azorius Renegade, as the former is often good based on how well you can predict the opponent's hand, while the latter is heavily dependent on the matchup. Plus, many of Death and Taxes's weaker matchups are ones where Unsettled Mariner is stronger than Lavinia, Azorius Renegade. The card overall has a lot of potential to see play in U/W Death and Taxes, as it can protect your creatures from removal and tax the opponent's gameplan. The reason it is only number four on the list is that Unsettled Mariner is constrained to U/W Taxes, whereas the other four cards on this list can see play in any Death and Taxes variant. Still, Unsettled Mariner can possibly find a home in U/W Death and Taxes. I will most certainly test him out in my U/W Taxes build.</p>
            <h5><a data-toggle="collapse" data-parent="#accordion" href="#collapse1" onclick="location.href='#decklist_1';">
                    Sample Decklists</a></h5> <!--at bottom of page, includes new MOM (which is why it is separate from this card... could. also be here if i really want it to be organized with the card but idk yet-->
            <br>
            <hr>
            <br>
            <h3>#3: Ranger-Captain of Eos</h3>
            <br>
            <div>
                <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Ranger-Captain+of+Eos&type=card" class="decktech_card" alt="Ranger-Captain of Eos">
            </div>
            <br>
            <p>Ranger-Captain of Eos is a powerful card, as tutors are typically strong. The tutor, however, is quite narrow- it only allows the user to search for creatures with converted mana cost less one or less. Many Death and Taxes lists do not even run creatures that cost less than two mana. That being said, there are many powerful options available this mana cost. The primary playable cards are Thraben Inspector, Pilgrim's Familiar, Giver of Runes (will discuss later), and Walking Ballista. In addition, Death and Taxes splashes can take advantage of this. Most notably, G/W Taxes can fetch their Noble Hierarchs in addition to any other cheap creatures they have.</p>
            <br>
            <p>Besides the tutor, the card has very efficient stats (unlike Recruiter of the Guard, a more flexible tutor). A 3/3 for three, while not impressive on its own, is not bad at all given that it tutors of a creature. On top of decent stats, Ranger-Captain of Eos has an ability that lets you sacrifice it to prevent the opponent from casting noncreature spells on their turn. While not the best ability, it is a way to interact with combo decks such as Gifts Storm and Ad Nauseam. All in all, the body and extra ability further push Ranger-Captain of Eos, making it a strong creature to add to specific Death and Taxes lists.</p>
            <br>
            <p>There are, however, a few issues with the creature- Leonin Arbiter. Playing Ranger-Captain of Eos and Leonin Arbiter in the same deck is a significant nonbo, to the extent that Ranger-Captain of Eos decks cannot afford to play Leonin Arbiter. Also, as alluded earlier, the one drop creatures are not very good in Death and Taxes. Even in the lists that run them, they are mostly good to play early on, therefore making them unexciting to tutor for. Still, I think that this card is immensely powerful and can find a home in a Death and Taxes variant. I predict that, if Ranger-Captain of Eos were to see play in Death and Taxes, the list would look quite different compared to traditional ones. A sample decklist is available below:</p>
            <h5><a data-toggle="collapse" data-parent="#accordion" href="#collapse2" onclick="location.href='#decklist_2';">Sample Decklist</a></h5>
            <br>
            <hr>
            <br>
            <h3>#2: Enemy Canopy Lands</h3>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Sunbaked+Canyon&type=card" class="decktech_card" alt="Sunbaked Canyon">
                </div>
                <div class="col-sm-6">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Silent+Clearing&type=card" class="decktech_card" alt="Silent Clearing">
                </div>
            </div>
            <p>Modern Horizons introduced an enemy Horizon Canopy cycle. Out of the five new lands, only the white ones are playable for Death and Taxes lists- Sunbaked Canyon and Silent Clearing. These cards are very powerful lands. The life-loss is a drawback, but the ability more than makes up for the drawback. The Horizon Canopy lands allow Death and Taxes lists to topdeck better or dig for a specific answer such as Rest in Peace. The addition of Sunbaked Canyon and Silent Clearing grants R/W and B/W lists additional land options, along with a possibility for Mono-White Death and Taxes lists to run more than four Horizon Canopies. The question is, are these new lands worth it for those three existing decklists?</p>
            <br>
            <p>R/W Death and Taxes is known as one of the more aggressive Death and Taxes builds. Adding lands that hurt you is therefore not as much of an issue for R/W compared to slower builds that cannot afford the life-loss. Finally, as the deck is more aggressive, R/W could make better use out of lands like Sunbaked Canyon compared to slower decks. All in all, I would certainly play four Sunbaked Canyons in R/W Death and Taxes. Many R/W lists run Battlefield Forge, so simply replace those with Sunbaked Canyons.</p>
            <br>
            <p>Similarly, B/W Eldrazi and Taxes is known as a more aggressive Death and Taxes iteration. B/W Eldrazi and Taxes contains many cheaper creatures, plus four Eldrazi Temples to further speed up the already low-curve deck. The only issue with running Silent Clearing is that B/W Eldrazi and Taxes cannot replace their pain lands (Caves of Koilos). Since Eldrazi such as Thought-Knot Seer and Eldrazi Displacer require colorless mana, Caves of Koilos is a necessity. The only lands that can really be cut are the dual lands- Concealed Courtyard, Godless Shrine, and Shambling Vent. The lattermost is slow but very powerful. Godless Shrine is usually only a one-of, so it is not worth further discussing. Therefore, only Concealed Courtyard can afford to be replaced by Silent Clearing. That being said, the cost of replacing Concealed Courtyard with it is that you would lose significantly more life with your mana base than before. With four Caves of Koilos and three Shefet Dunes on top of the Silent Clearings make B/W Eldrazi and Taxes's mana base quite painful. However, given the speed of the deck, it is probably worth playing at least a couple of Silent Clearings. The value of the land is just too high for an aggressive Eldrazi and Taxes list to ignore. I will be testing B/W Eldrazi and Taxes with Silent Clearings and will post an update/video showing the results of the new land.</p>
            <br>
            <p>Finally, there are some Mono-white Death and Taxes lists that can possibly opt for additional Horizon Canopies. Mono-white Eldrazi and Taxes along with vanilla Mono-White Death and Taxes run enough basic lands to afford extra Horizon Canopies. I personally predict that Mono-White Eldrazi and Taxes does not want to run the extras, as the life-loss is more noticeable downside, and the deck needs its lands to grind with Eldrazi Displacer. Mono-White Death and Taxes (without Eldrazi Displacer), however, can make good use out of the additional Horizon Canopies. The deck is not terribly fast, but from my experience Horizon Canopy is much better than Shefet Dunes, making additional ones worthwhile. In terms of which one to play, it is best to get Silent Clearing. It can help pay for Dismember if you wish to save a life point (not very relevant, but still a very small upside). In fact, assuming Shalai, Voice of Plenty is not present, it is better to run four Silent Clearings and a couple of Horizon Canopies rather than the opposite to take advantage of the 0.1% upside.</p>
            <br>
            <p>All in all, Sunbaked Canyon and Silent Clearing are both very powerful lands that I expect will pop up in many Death and Taxes iterations. The only reason why they are not the number one card on my list is that I am more excited about the final card than these new lands. Their power is very clear, but their potential is ultimately not as high as the final Modern Horizon Death and Taxes playable...</p>
            <!--these cards can see play in:
                b/w ent
                r/w dnt
                as extras for mono-w dnt or even ent
            -->
            <br>
            <h3>#1: Giver of Runes</h3>
            <br>
            <div>
                <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Giver+of+Runes&type=card" class="decktech_card" alt="Giver of Runes">
            </div>
            <br>
            <p>Giver of Runes is a weaker version of Mother of Runes, a staple in Legacy Death and Taxes. She cannot protect herself, however, she still protects any of Death and Taxes's creatures from targeted removal spells. Also, unlike Mother of Runes, Giver of Runes can protect your creatures from colorless removal- most notably Spacial Contortion, Karn Liberated, and Ulamog, the Ceaseless Hunger. Even though Giver of Runes is a worse Mother of Runes, it is still a very powerful card. She forces the opponent to use their removal spells on her, or else she will stop removal on other creatures. Plus, with two in play, the opponent will have to waste removal spells just to get rid of a Giver of Runes. Finally, protection is a multi-purpose keyword. Not only can it save our creatures from removal, but it can also let them block without dying or be "unblockable". Essentially, Giver of Runes gives tons of value and power as a one drop to Death and Taxes lists. Unlike similar creature-protection spells such as Selfless Spirit, Giver of Runes saves creatures from almost every removal spell in Modern (with the exception of edicts and board wipes). Plus, there are not any viable options for Death and Taxes at one mana for protecting creatures.</p>
            <br>
            <p>Really, any Death and Taxes list can run Giver of Runes. But the lists that will certainly run her are the Mono-White lists. Both Mono-White Death and Taxes and Eldrazi and Taxes will run four Giver of Runes- she is much better than the other flex options (Thraben Inspector, Wall of Omens, etc.). Black-White Eldrazi and Taxes is less likely to run Giver of Runes, as it is harder for that deck to cast a white one-drop due to the creature and colorless lands. That being said, Black-White Eldrazi and Taxes is a faster deck that wants a Giver of Runes card more than other lists. Red-White and Blue-White Taxes are also faster Death and Taxes iterations, both of which will 100% run Giver of Runes in the main deck. The only deck I am unsure about is Green-White Taxes, as it runs Noble Hierarch and Aether Vial. Giver of Runes is not as powerful as either of those spells, so running yet another one-drop might make the deck too top-light, but only time will tell. Anyway, below is an example of a Death and Taxes list running Giver of Runes.</p>
            <h5><a data-toggle="collapse" data-parent="#accordion" href="#collapse3" onclick="location.href='#decklist_3';">
                    Sample Decklist</a></h5>

            <!--STOP-->
            <div class="panel-group" id="accordion">
            <div class="panel panel-format" id="decklist_1">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                    U/W Taxes (feat. Unsettled Mariner)</a>
                  </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                  <div class="panel-body"> 
                    <div id="autolist_a">
                <div id="maindeck_a">
                    4 Giver of Runes
                    3 Unsettled Mariner
                    3 Leonin Arbiter
                    4 Thalia, Guardian of Thraben
                    2 Blade Splicer
                    3 Flickerwisp
                    1 Thalia, Heretic Cathar
                    4 Path to Exile
                    4 Aether Vial
                    2 Remorseful Cleric
                    4 Deputy of Detention
                    4 Spell Queller
                    4 Ghost Quarter
                    5 Plains
                    4 Seachrome Coast
                    4 Hallowed Fountain
                    1 Island
                    4 Mutavault
                </div>
                <div id="sideboard_a">
                    2 Burrenton Forge-Tender
                    1 Relic of Progenitus
                    3 Rest in Peace
                    2 Stony Silence
                    2 Dismember
                    1 Dovin's Veto
                    1 Brimaz, King of Oreskos
                    1 Settle the Wreckage
                    1 Mirran Crusader
                    1 Oblivion Ring
                </div>
            </div>
                    

        </div>
                </div>
              </div>

              <br>
              <!-- E&T -->
            <div class="panel panel-format" id="decklist_2">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                    Mono-White Taxes (Feat. Ranger-Captain of Eos)</a>
                  </h3>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                  <div class="panel-body"> 
                    <div id="autolist_b">
                <div id="maindeck_b">
                    4 Giver of Runes
                    4 Ranger-Captain of Eos
                    2 Thraben Inspector
                    1 Walking Ballista
                    2 Judge's Familiar
                    1 Weathered Wayfarer
                    2 Remorseful Cleric
                    4 Thalia, Guardian of Thraben
                    4 Blade Splicer
                    4 Flickerwisp
                    4 Restoration Angel
                    4 Path to Exile
                    4 Aether Vial
                    1 Field of Ruin
                    4 Ghost Quarter
                    4 Silent Clearing
                    4 Tectonic Edge
                    8 Plains
                    2 Shefet Dunes
                </div>
                <div id="sideboard_b">
                    2 Burrenton Forge-Tender
                    1 Grafdigger's Cage
                    3 Rest in Peace
                    3 Stony Silence
                    2 Dismember
                    2 Gideon, Ally of Zendikar
                    1 Worship
                    1 Settle the Wreckage
                </div>
            </div>
                    

        </div>
                </div>
              </div>
              <div class="panel panel-format" id="decklist_3">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                    Mono-White Bugler Taxes (Feat. Giver of Runes)</a>
                  </h3>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                  <div class="panel-body"> 
                    <div id="autolist_c">
                <div id="maindeck_c">
                    4 Giver of Runes
                    4 Leonin Arbiter
                    1 Remorseful Cleric
                    4 Thalia, Guardian of Thraben
                    4 Blade Splicer
                    4 Militia Bugler
                    3 Flickerwisp
                    4 Restoration Angel
                    1 Walking Ballista
                    4 Path to Exile
                    4 Aether Vial
                    
                    1 Field of Ruin
                    4 Ghost Quarter
                    2 Horizon Canopy
                    8 Plains
                    4 Silent Clearing
                    4 Tectonic Edge
                </div>
                <div id="sideboard_c">
                    2 Burrenton Forge-Tender
                    1 Grafdigger's Cage
                    3 Rest in Peace
                    3 Stony Silence
                    2 Dismember
                    2 Gideon, Ally of Zendikar
                    1 Worship
                    1 Settle the Wreckage
                </div>
            </div>
                    

        </div>
                </div>
              </div>
          </div>
            <!--GO-->
            <br>
            <hr>
            <br>
            <h2>Closing Thoughts</h2>
            <p>All in all, Modern Horizons has many strong cards for Death and Taxes. The weaker Mother of Runes and the extra Horizon Canopies are especially powerful additions that could push Death and Taxes to tier one. While we did not get Wasteland or other Legacy Death and Taxes staples, these are exciting cards to add to Modern for any Death and Taxes player.</p>
            <br>
            <br>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h4><a href="article_4" class="discussionA">Previous Spicespace: War of the Spark Cards</a></h4>
                </div>
            </div>
            <br>
            <hr>
            <!--recommended: mulligan game is supposed to be here. But I removed it because it is not relevant anymore... unless i re continue the game-->
            <br>
            <!-- Can also do sets in a separate article series... that would be more for analysis and thoughts
                while spice can be used for testing results (games, etc) and post-game thoughts and possible lists-->


            <!--Layout: 
                have the current (weeky? monthly? biweekly?) article here
                then at bottom have a search bar for other articles and a button for previous article

                can also have banners with previous articles... look at websites like goldfish and other mtg sites for ideas...
            -->
            
            
            </div>
            
           <script>var jArray = <?php echo json_encode($listOfCardNames); ?>;</script>
            <script src="/loadcardhoversettings.js"></script>
            
            <?php
                include("../scripts/footer.php");
            ?>
            <script>var jStr = <?php echo json_encode($lastModDate); ?>;</script>
            <script src="/loadpublishinfo.js" type="text/javascript"></script>
            <!--<h3>Recommended:</h3>
            <br>
            <h4><a href="/modern/mulligans#mg">This Month's Mulligan Game</a></h4>
            <br>-->
    </body>
</html>

