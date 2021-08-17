<?php
    include("../scripts/searchscript.php");
    include("../scripts/cardlistdb.php");
    include("../scripts/listofwebsitecontent.php");
    
?>
<?php
    $filename = 'article_3.php';
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

    

        <title>Spice Space- Ravnica Allegience Cards</title>
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
                    <h1>Spice Space #3: Ravnica Allegiance Cards</h1>
                </div>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <img src="https://i.redd.it/xnv5tefdov421.jpg" alt="Lavinia, Azorius Renegade" class="ssa1_img">
                </div>
                <div class="col-sm-6">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/014/716/211/large/aaron-miller-tithe-taker-aaron-miller.jpg?1545149718" alt="Tithe Taker" class="ssa1_img">
                </div>
            </div>
            <br>
            <hr>
            <br>
            <h2>Overview</h2>
            <p>A new standard set brings new possibilities to Modern Death and Taxes. Similar to Guilds of Ravnica, Ravnica Allegiance does have the issue of being a set focused on multi-color cards. Traditionally, the best spells for Death and Taxes are mono-color, but there are certainly exceptions. That being said, Ravnica Allegiance does a much better job at providing possible playables for Death and Taxes lists, especially U/W lists.</p>
            <hr>
            <h2>Specific Cards:</h2>
            <br>
            <h2>Lavinia, Azorius Renegade</h2>
            <div>
                <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Lavinia,+Azorius+Renegade&type=card" class="decktech_card" alt="Lavinia, Azorius Renegade">
            </div>
            <p>Lavinia, Azorius Renegade is most likely the strongest option for Modern Death and Taxes. While she is only playable in fringe UW builds, Lavinia, Azorius Renegade's tax hurts many of Modern's top decks. To no surprise, many Modern decks look to cast spells without paying their mana cost or simply casting high converted mana cost spells without having many lands in play. On top of that, she is only two mana and does not have terrible power-toughness stats. Before further investigating the human, spells, and decks that she shuts down must be discussed...</p>
            <br>
            <h3>Spells Shutdown by Lavinia</h3>
            <p>Overall, Lavinia, Azorius Renegade's tax hits the majority of Modern's top decks. Most notably, however, is that she is useless against Dredge and Bant Spirits, while only hitting one spell from Izzet Phoenix. Anyway, the main decks that she hurts are any artifact deck (Affinity), Tron, UWx Control, and some combo decks. Against Affinity, Lavinia, Azorius Renegade prevents the opponent from casting any zero mana artifacts such as Mox Opal, Memnite, Walking Ballista/Hangarback Walker for x=0, Engineered Explosives for zero mana, and Welding Jar. She can also prevent a larger noncreature spell such as Ghirapur Aether Grid from resolving if the opponent is using a Mind Stone or Mox Opal to power it out with fewer lands than their converted mana cost. Against Tron, Lavinia, Azorius Renegade shuts down the majority of their top end. With her in play, the opponent cannot cast Ugin, the Spirit Dragon or Karn Liberated early on. Another card that is useless with Lavinia, Azorius Renegade in play is All is Dust (unless they hit seven lands). Against UWx Control, the only spell that is shut down is Terminus. While it is only one spell that they cannot cast, turning off the majority of a control deck's board wipes is very powerful. Fringe lists that run Ancestral Visions have that spell shut down as well, as it does not require mana to cast it after it comes off of suspend. Lavinia, Azorius Renegade is best at shutting down combo decks that look to win with rituals and high converted mana cost spells. Gifts Storm cannot win unless they have four lands in play, else Gifts Ungiven and Past in Flames are useless. Likewise, Ad Nauseam must hit five lands to cast Ad Nauseam before they are able to win. Their pacts are also turned off, so it is easier to disrupt them mid-combo. Finally, Grishoalbrand has many of its plays shut off by Lavinia, Azorius Renegade. They cannot cast Through the Breach until they hit five lands, and their Nourishing Shoals are rendered useless.</p>

            <p>Besides those decks, a few other Modern staples are taxed by Lavinia, Azorius Renegade. Spells with Phyrexian mana are suspectable to Lavinia, Azorius Renegade's tax: Dismember must be cast when three lands are on the opponent's side, while Gut Shot and Mutagenic Growth must be cast with mana, not life. Any delve noncreature spells are essentially useless (the only Modern playable one is Become Immense though). Suspend spells are also hurt by Lavinia, Azorius Renegade. Search for Tomorrow and Rift Bolt cannot cast off of suspend. Noncreature spells hit off of cascade cannot be cast by Lavinia, Azorius Renegade as well- a big edge against Living End. Pact of Negation and Summoner's Pact are also turned off, giving Lavinia, Azorius Renegade an edge against Titan Shift and Amulet Titan. Hollow One cannot be cast for free with a Lavinia, Azorius Renegade in play, making her a vital ally in the Hollow One matchup. Mishra's Bauble, similar to the other zero converted mana cost artifacts, is turned off by Lavinia, Azorius Renegade, harming Grixis Death's Shadow and some Tarmogoyf decks. "Mana dorks" such as Birds of Paradise and Noble Hierarch get worse by Lavinia, Azorius Renegade as well. While she does not shut these creatures down, she forces spells such as Collected Company to be cast with four lands rather than turn three with an early mana creature.</p>
            <br>
            <h3>Synergies and Anti-Synergies</h3>
            <p>The primary synergies with Lavinia, Azorius Renegade with other Death and Taxes cards lies in land destruction. Leonin Arbiter, Ghost Quarter, Tectonic Edge, and Field of Ruin get much better when Lavinia, Azorius Renegade cares about how many lands the opponent has. While this is mainly relevant against decks that have ways to generate mana outside of lands, destroying lands is a generally good strategy against many Modern decks, especially those that require them. Flickerwisp plus Aether Vial or a way to blink Flickerwisp also gets interesting. Flickerwisping one of the opponent's lands is an excellent way at preventing a board wipe or game-winning spell from resolving. One trick that can be used against blue control decks is having Flickerwisp enter the battlefield or get blinked at their end step and temporarily exiling one of their lands when the opponent only has four in play. By doing that, the opponent would be unable to cast a Settle the Wreckage or Cryptic Command to tap creatures down (assuming Lavinia, Azorius Renegade is in play).</p>
            <p>There exists, however, a major anti-synergy with Lavinia, Azorius Renegade: Thalia, Guardian of Thraben's tax. Thalia, Guardian of Thraben's tax makes the opponent's zero mana noncreature spells cost one mana. So when they go to cast a Summoner's Pact or Mox Opal, it would not get countered, as they spent mana to cast it. While this is clearly unfortunate, it is no reason to stop playing Thalia, Guardian of Thraben in UW Taxes. She is too important to the deck to cut, especially against the plethora of noncreature strategies in Modern. There are times when this can be circumvented- blinking Thalia, Guardian of Thraben with Flickerwisp when the opponent has a spell coming off of suspend or appears to be ready to cast a Summoner's Pact is a fine play. Overall, while the anti-synergy is annoying, both cards are strong enough on their own to warrant spots in the deck.</p>
            <!--anti: Thalia. synergy: land destruction-->
            <h3>The Card's Future</h3>
            <p>In conclusion, Lavinia, Azorius Renegade has lots of potential in Modern. The majority of Modern decks in the current meta have at least part of their deck shut off by the two mana hatebear. While she is only effective in UW Taxes builds, Lavinia, Azorius Renegade's tax is powerful enough that she might see play in Modern. If you are interested in trying her out, a sample decklist of what a Lavinia, Azorius Renegade is below:</p>
            <h2 class="sslist">UW Lavinia Taxes</h2>
            <div class="row decklist">
                <div class="col-sm-6">
                    <table class="table decklist table-condensed table-responsive">
                        <tbody>
                            <tr>
                                <th>Creatures:</th>
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Lavinia, Azorius Renegade</a></td>
                            </tr>
                            <tr><!-- Thraben Inspector -->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Leonin Arbiter</a></td>
                                
                            </tr>
                            <tr><!--Arbiter-->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Thalia, Guardian of Thraben</a></td>
                                
                            </tr>
                            <tr><!-- thalia -->
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Blade Splicer</a></td>
                                
                            </tr> 
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Deputy of Detention</a></td>
                                
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Flickerwisp</a></td>
                                
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Reflector Mage</a></td>
                                
                            </tr>
                            <tr><!-- flickerwisp -->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Spell Queller</a></td>
                                
                            </tr> 
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Restoration Angel</a></td>
                                
                            </tr> 
                            <tr>
                                <th>Spells:</th>
                            </tr>
                           <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Path to Exile</a></td>
                                
                            </tr>
                            <tr>
                                <th>Artifacts:</th>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Aether Vial</a></td>
                                
                            </tr>
                            <tr>
                                <th>Lands:</th>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Celestial Collonade</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Ghost Quarter</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Hallowed Fountain</a></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Island</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Plains</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Seachrome Coast</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Tectonic Edge</a></td>
                            </tr>
                        </tbody>
            </table>
            </div>
            <!-- sideboard -->
            <div  class="col-sm-6">
            <table class="table table-condensed decklist table-responsive">
                <tbody>
                    
                        <tr>
                                <th>Sideboard:</th>
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Burrenton Forge-Tender</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Grafdigger's Cage</a></td>
                                
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Rest in Peace</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Selfless Spirit</a></td>
                                
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Stony Silence</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Dismember</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Settle the Wreckage</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Worship</a></td>
                                
                            </tr>
                        </tbody>
                    </table>
                    <div>
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Lavinia,+Azorius+Renegade&type=card" id="deckPreviewImgOne">
                    </div>
                </div>
            </div>
            <br>
            <p>Unlike traditional Death and Taxes list, this UW build is trying to be more aggressive through disruption. Lavinia, Azorius Renegade, the two hatebears, Reflector Mage, and Spell Queller all disrupt the opponent's gameplan, while Blade Splicer and Restoration Angel pressure their life total. In addition, another new card from Ravnica Allegiance is present in this decklist, serving as extra removal and disruption...</p>
            <hr>
            <h2>Deputy of Detention</h2>
            <br>
            <div>
                <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Deputy+of+Detention&type=card" class="decktech_card" alt="Deputy of Detention">
            </div>
            <h3>Overview</h3>
            <p>Many Death and Taxes playables, especially in recent years, were created as creatures stapled to already existing spells. For example, Thalia, Guardian of Thraben is Thorn of Amethyst, Remorseful Cleric is Tormod's Crypt, and Phyrexian Revoker is Pithing Needle that misses lands but hits mana abilities. Therefore, it is to no surprise that Deputy of Detention was printed. The card is literally Detention Sphere as a 1/3 creature rather than an enchantment. While creatures are more vulnerable to removal, they also synergize much better in Death and Taxes. Noncreature spells get taxed by Thalia, Guardian of Thraben, while creatures can be Aether Vialed in and protected/abused with Restoration Angel, Flickerwisp, and Eldrazi Displacer. So while Detention Sphere is too awkward for Death and Taxes, Deputy of Detention has at least some potential. The major issue, however, is that this card has the same problem as Fiend Hunter- it is vulnerable to removal.</p>
            <br>
            <h3>Deputy of Detention in the Current Meta</h3>
            <p>The largest reason Fiend Hunter is void of most Death and Taxes lists is its vulnerability to removal. The majority of Modern decks run some form of removal, turning Fiend Hunter into a temporary detain most of the time. That being said, there is one major reason why Deputy of Detention does not suffer as badly from that problem. The reason is it exiles nonland permanents, not just creatures. Plus, it exiles all cards with the same name, which is certainly relevant against many Modern decks. An example of where Deputy of Detention is significantly better than Fiend Huner is against Affinity, as they both lack much removal and have powerful noncreature spells. Looking at creature decks, Deputy of Detention still overshadows Fiend Hunter. Being able to exile creatures with the same name is very relevant against Humans and Bant Spirits (who run Phantasmal Image), along with decks that power out identically-named creatures such as Izzet Phoenix and Dredge. With the exception of Izzet Phoenix, all of those prior-mentioned decks run little to no removal, making Deputy of Detention rather relevant. Deputy of Detention is also much better against Tron and Gifts Storm (answers Empty to Warrens), two decks that also run little removal. The list of decks that Deputy of Detention is strong against is much larger than Fiend Hunter, granting it potential. That being said, it still suffers from the same issue as Fiend Hunter- a Lightning Bolt ends its career. Still, being able to hit noncreature spells or clear the opponent's tokens is powerful enough to warrant a spot in UW Taxes builds.</p>
            <br>
            <h3>The Card's Future</h3>
            <p>In conclusion, Deputy of Detention has lots of potential to see play in UW Taxes builds. While the Detention Sphere creature is weak to removal, hitting nonland permanents makes it good enough for Modern compared to Fiend Hunter. The card is quite similar to Leonin Relic-Warder, a card that I feel is good enough for Modern Death and Taxes lists. Deputy of Detention is primarily a main deck card, as it is usually better to run Detention Sphere in the sideboard rather than a vulnerable creature. Overall, the flexibility and power of Deputy of Detention's effect make it strong enough to see Modern play. With Lavinia, Azorius Renegade and Deputy of Detention, I could see UW Taxes lists becoming the more powerful Death and Taxes lists in Modern.</p>
            <br>
            <hr>
            <h2>Tithe Taker</h2>
            <br>
            <div>
                <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Tithe+Taker&type=card" class="decktech_card" alt="Tithe Taker">
            </div>
            <h3>Overview</h3>
            <p>Tithe Taker is a card that looks better than it actually is. A 2/1 for two mana is underwhelming for Modern, but the other text helps alleviate its poor stats. Punishing the opponent from holding up spells on your turn looks strong, until looking at the Modern meta. Its afterlife ability is a nice touch, but not enough to make Tithe Taker stand out. The largest issue with this new card is that its ability has already been seen in another hatebear- Grand Abolisher.</p>
            <br>
            <h3>Grand Abolisher- a better Tithe Taker</h3>
            <p>There are only three minor advantages Tithe Taker has over Grand Abolisher. For one, Tithe Taker's mana cost is one colorless mana and one white mana, making it easier to cast compared to Grand Abolisher's cost of two white mana. Secondly, Tithe Taker has Afterlife, making it better against removal spells that do not exile. Finally, Tithe Taker's ability taxes lands with activated abilities. Azcanta, the Sunken Ruin, Gavony Township, Field of Ruin, and creature lands all cost one more mana to activate on your turn. That being said, Grand Abolisher is simply a much better card than Tithe Taker. While the one extra toughness helps, Grand Abolisher's primary advantage lies in that its ability prevents the opponent from casting spells and activating abilities, rather than taxing them. Turns out, preventing the opponent from casting spells and activating most abilities on your turn is significantly better than making them cost one more mana. Grand Abolisher prevents Settle the Wreckage, all counterspells (including Spell Queller), and removal spells from being cast. All that being said, Grand Abolisher sees virtually zero play in Modern. Why? Turns out, the majority of Modern strategies in the current meta are linear. Speed is favored over interactions, leading to a shortage of counterspells and other instant-speed tricks. While Grand Abolisher and Tithe Taker are great against UW Control, decks like Humans, Dredge, Izzet Phoenix, and Tron do not care much about the card. And even when they do, Grand Abolisher is still much better than Tithe Taker. Against Tron, shutting down Oblivion Stone on your turn is much better than making its ability cost one more mana, as their deck typically has no problem generating mana. Overall, despite Grand Abolisher being an almost strictly better Tithe Taker, it sees no play in Death and Taxes due to the shape of Modern's meta.</p>
            <br>
            <h3>The Card's Future</h3>
            <p>In conclusion, Tithe Taker is not great in Modern's current meta. The majority of the time, Grand Abolisher is a better card than Tithe Taker, plus the effect does not help much against linear strategies. In a slower meta that involves more control decks and counterspells, such as the Splinter Twin meta, Tithe Taker would start to make more sense. As it stands, the card is more likely to appear in Standard, especially in a Standard "Death and Taxes" list. It is still an excellent card against counterspells and Settle the Wreckage, which are actually more common in Standard right now than Modern. For those interested, a sample list of what Standard Death and Taxes with Tithe Taker would look like is available below:</p>
            <br>
            <h2>Mono-White Standard Taxes</h2>
            <div class="row decklist">
                <div class="col-sm-6">
                    <table class="table decklist table-condensed table-responsive">
                        <tbody>
                            <tr>
                                <th>Creatures</th>
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Dauntless Bodyguard</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Adanto Vanguard</a></td>
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Bounty Agent</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Tithe Taker</a></td>
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Tocatli Honor Guard</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Kinjalli's Sunwing</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Militia Bugler</a></td>
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Shalai, Voice of Plenty</a></td>
                            </tr>
                            <tr>
                                <th>Enchantments</th>
                            </tr>
                             <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Legion Landing</a></td>
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">History of Benalia</a></td>
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Conclave Tribunal</a></td>
                            </tr>
                            <tr>
                                <th>Planeswalkers</th>
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Ajani, Adversary of Tyrants</a></td>
                            </tr>
                            <tr>
                                <th>Lands</th>
                            </tr>
                           <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Arch of Orazca</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Field of Ruin</a></td>
                            </tr>
                            <tr>
                                <td>17&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Plains</a></td>
                            </tr>
                            
                            
                        </tbody>
            </table>
            </div>
            <!-- sideboard -->
            <div  class="col-sm-6">
                <table class="table table-condensed decklist table-responsive">
                    <tbody>
                        <tr>
                            <th>Sideboard:</th>
                        </tr>
                        <tr>
                            <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Baffling End</a></td>
                        </tr>
                        <tr>
                            <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Tocatli Honor Guard</a></td>
                        </tr>
                        <tr>
                            <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Ajani, Adversary of Tyrants</a></td>
                        </tr>
                        <tr>
                            <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Conclave Tribunal</a></td>
                        </tr>
                        <tr>
                            <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Shalai, Voice of Plenty</a></td>
                        </tr>
                        <tr>
                            <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Lyra Dawnbringer</a></td>
                        </tr>
                </tbody>
            </table>
            <br>
            <div class="previewDiv">
                <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Dauntless+Bodyguard&type=card" id="deckPreviewImgTwo">
            </div>
            
            </div>
        </div>
            <br>
            <p>Unlike other mono-white decks in Standard, this build looks to disrupt the opponent and win a slower game, using Militia Bugler and planeswalkers to not run out of cards. The deck's creature quality helps it go over mono-red and mono-white aggro, while its threats and disruption help its game against Golgari and Izzet builds. The decklist is one I have not tested yet, so suggestions/improvements are appreciated.</p>
            <hr>
            <h2>Forbidding Spirit</h2>
            <br>
            <div>
                <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Forbidding+Spirit&type=card" class="decktech_card" alt="Forbidding Spirit">
            </div>
            <h3>Overview</h3>
            <p>Once again, Forbidding Spirit is a creature with the effect of a noncreature permanent. In this particular case, Ghostly Prison is the card that Forbidding Spirit's ability is based on. Forbidding Spirit's ability, unlike Ghostly Prison, only lasts until your next turn. In Death and Taxes builds that lack ways to repeat Forbidding Spirit's enter the battlefield trigger, it is quite underwhelming. Decks that contain many ways to blink it, however, have a new card to play with...</p>
            <br>
            <h3>Forbidding Spirit's Home</h3>
            <p>The first thing worth mentioning is that Forbidding Spirit has very reasonable stats for its mana cost. A 3/3 for three mana is better than the average hatebear, making Forbidding Spirit fine on its own. The ability, however, is not powerful enough unless it can be abused. Flickerwisp and Restoration Angel are solid ways to recur Forbidding Spirit's trigger. The primary card that functions well with Forbidding Spirit is Eldrazi Displacer. Unlike Restoration Angel and Flickerwisp, Eldrazi Displacer can blink Forbidding Spirit every turn, essentially creating a Ghostly Prison as long as both Eldrazi Displacer and Forbidding Spirit live. Furthermore, with enough mana, Eldrazi Displacer can blink Forbidding Spirits two or even three times a turn, shutting down decks such as Humans or Bant Spirits from ever attacking. Therefore, Forbidding Spirit is a solid card to consider running in Eldrazi and Taxes builds. The card is excellent at buying time, slowing down the many aggressive creature decks in the format.</p>
            <br>
            <h3>The Card's Future</h3>
            <p>All in all, Forbidding Spirit is a niche card that has the potential to pop up in Death and Taxes lists. The card is especially great in Eldrazi Displacer builds, as it can significantly slow down the opponent. The amount of time Forbidding Spirit buys against Humans, Dredge, Arclight Phoenix decks, and Bant Spirits compels me to experiment with the card. In this current meta, many Modern decks are faster than Death and Taxes, and the games come down to whether or not the Death and Taxes player can slow down the game enough to control the board and win with fliers. Having a solid blocker stapled to a temporary, but repeatable, Ghostly Prison may be exactly what Eldrazi and Taxes needs to win tough matchups such as Humans and Bant Spirits. Then again, it could also be too slow and clunky- only time will tell. Overall, Forbidding SPirit is an underrated card in Ravnica Allegiance, and could certainly appear as a one or two-of in Eldrazi and Taxes lists (main deck).</p>
            <br>
            <hr>
            <h2>Lumbering Battlement</h2>
            <br>
            <div>
                <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Lumbering+Battlement&type=card" class="decktech_card" alt="Lumbering Battlement">
            </div>
            <h3>Overview</h3>
            <p>Lumbering Battlement is more of a rouge card than a potential playable one. Five mana is a lot for a creature in Death and Taxes (with the exception of Reality Smasher), and the stats of Lumbering Battlement are not very exciting. The card is also very situational, often useless against decks without board wipes. That being said, it is a very interesting card, and it could spawn a new deck focused on value creatures...</p>
            <br>
            <h2>Mono-White Blink</h2>
            <div class="row decklist">
                
                <div class="col-sm-6">
                    <table class="table decklist table-condensed table-responsive">
                        <tbody>
                            <tr>
                                <th>Creatures:</th>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Leonin Arbiter</a></td>
                                
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Thalia, Guardian of Thraben</a></td>
                                
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Wall of Omens</a></td>
                                
                            </tr>
                            
                            <tr><!-- thalia -->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Blade Splicer</a></td>
                                
                            </tr> 
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Eldrazi Displacer</a></td>
                                
                            </tr>
                            <tr><!-- flickerwisp -->
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Flickerwisp</a></td>
                                
                            </tr> 
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Restoration Angel</a></td>
                                
                            </tr>
                            <tr><!--Resto-->
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Lumbering Battlement</a></td>
                                 
                            </tr>
                            <tr>
                                <th>Spells:</th>
                            </tr>
                           <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Path to Exile</a></td>
                                
                            </tr>
                            <tr>
                                <th>Artifacts:</th>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Aether Vial</a></td>
                                
                            </tr>
                            <tr>
                                <th>Lands:</th>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Plains</a></td>
                            </tr>
                             <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Eldrazi Temple</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Ghost Quarter</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Horizon Canopy</a></td>
                            </tr>
                            <tr>
                                <td>7&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Plains</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Shefet Dunes</a></td>
                            </tr>
                        </tbody>
            </table>
            </div>
            <!-- sideboard -->
            <div  class="col-sm-6">
            <table class="table table-condensed decklist table-responsive">
                <tbody>
                    
                        <tr>
                                <th>Sideboard:</th>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Grafdigger's Cage</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Auriok Champion</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Leonin Relic-Warder</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Selfless Spirit</a></td>
                                
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Rest in Peace</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Stony Silence</a></td>
                                
                            </tr>
                            
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Dismember</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Kitchen Finks</a></td>
                                                             
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckThree(this.text)">Worship</a></td>
                                
                            </tr> 
                        </tbody>
                    </table>
                    <div>
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Leonin+Arbiter&type=card" id="deckPreviewImgThree">
                    </div>
                </div>
            </div>
            
            <p>The above deck is looking to utilize cards with enter the battlefield triggers to generate value. Blade Splicer and Wall of Omens are both excellent cards to blink. Flickerwisp and Restoration Angel are both solid creatures to blink not only Blade Splicer/Wall of Omens, but also Lumbering Battlement after it exiles multiple value creatures. Aether Vial in this deck, as there are many that gain value if brought in at instant speed. And of course, I could not leave out Eldrazi Displacer. The amount of value this Eldrazi generates is absurd- with two activations, you get to blink your whole board. The deck looks fun, but sadly not good enough for the meta.</p>
            <br>


            <h2>Closing Thoughts:</h2>
            <p>All in all, Ravnica Allegiance includes many new cards that are worth testing in Death and Taxes builds. The UW cards are especially powerful and may help UW Taxes enough to make it one of the better iterations of Death and Taxes. In addition, cards with useful enter the battlefield triggers such as Forbidding Spirit and Lumbering Battlement could find a home in builds with a plethora of blink creatures. I am very excited to try out some cards from Ravnica Allegiance, and I hope to see some sweet Death and Taxes brews in the coming weeks!</p>
            <br>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h4><a href="article_4" class="discussionA">Next Spicespace: War of the Spark Cards</a></h4>
                </div>
                <div class="col-sm-6">
                    <h4><a href="article_2" class="discussionA">Previous Spicespace: Guilds of Ravnica Cards</a></h4>
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
