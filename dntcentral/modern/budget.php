<?php
    include("../scripts/searchscript.php"); //actually works
    
?>
<?php
    include("../scripts/cardlistdb.php"); //does work
?>
<?php
    $filename = 'budget.php';
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

    

        <title>Modern- Budget</title>
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
                <div class="jumbo-tron">
                    <h1>Modern- Budget Guide</h1>
                </div>
                <h2>Intro:</h2>
            <p >Modern is a fairly expensive format- while the decks in the format never hit the 3,000-4000 dollar range as seen in legacy, even spending half a grand can be daunting at first, especially if you are unsure if your financial situtation is not perfect or you are not sure if you will get your "value" back on the purchase. One of the advantages of playing Death and Taxes in modern (or any format really) is that it tends to be on the budget-friendly side compared to most decks in the format. Of course, you can make cuts to make the deck even more budget-friendly and affordable, just note that this also leads to losing percentage points in your overall winrate, as your deck tends to get worse. Ultimately, everyone's financial situtation is unique, so some will take different budget paths than others, so please don't feel pressured to buy cards when you really cannot affoard them. </p>
            <h2>Most important advice before buying D&T (or any deck in Magic)</h2>
            <p >PLAY THE DECK!! Magic the Gathering is a very expensive hobby, and while you can sell/trade your cards back, it will come at a cost. Therefore, if you decide to build an expensive deck like Modern Jund, and find that your $2,000 deck is no fun, than you may be forced to take a $500-$1000 loss in order to try another deck. So PLEASE, test decks out before buying into them- watching pros play them is often not enough. The best way to do this is by proxing cards up (print images, put them in front of a random card in a sleeve) and test with friends or people at your LGS. However, if you lack the resources/people to do this, downloading a free online client like xmage or cockatrice can also be used to test out the decks online to see if they fit your playstyle and definition of fun. From personal experience, I used xmage to test out Death and Taxes before buying it, and then after falling in love with it, began piecing the deck together and have been playing it since. Note: this advice can be used for any deck in any format, not just for Modern Death and Taxes!</p>
            <hr>
            <h2>Now that I've chosen to build D&T on a budget, what are my budget options?</h2>
            <h3>Which build?</h3>
            <p >The first thing you should decide (which can be done based on the above method and/or budget) is whether or not you wish to splash a color. Ultimately, mono white tends to be the cheapest build and is one of the better (and not the best) Death and Taxes build in Modern, so that's the one I tend to recommend when building the deck on a budget. Green and black splashes are too expensive, as their essential creatures, Noble Hierarch and Dark Confidant respectively, cost nearly $100 each. Blue and red splashes tend to be more resonable in price and easier to build budget versions of. Black-White Eldrazi and Taxes can also be built on a budget, but from my experience that deck loses too much from lacking Dark Confidant.</p>
            <hr>
            <h2>Budgeting for each build:</h2>
            <br>
            <!-- Can include some nice pictures or maybe even some nice xes or cancel things for fun visuals to show cards that are being ommited and make the website less dull-->
            <h3>Mono-White D&T</h3>
            <br>
            <h3>The 5 most expensive cards in the deck*:</h3> <!--can also include in the future prices that change realtime-->
            <p ><a href="dntcentral.com/decklists/6-10-18a">Based on this decklist</a></p>
            <div class="row">
                <div class="col-sm-5">
                    <ol class="cardList">
                        <li><span class="hover_img"><a href="#canopy" class="discussionA cardA">Horizon Canopy<span><img src="https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=130574&type=card" alt="Horizon Canopy" class="popupImg"></span></a></span>: $59.98</li>

                        <li><span class="hover_img"><a href="#vial" class="discussionA cardA">Aether Vial<span><img src="https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=48146&type=card" alt="Aether Vial" class="popupImg"></span></a></span>: $33.79</li>

                        <li><span class="hover_img"><a href="#thalia" class="discussionA cardA">Thalia, Guardian of Thraben<span><img src="https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=270445&type=card" alt="Thalia, Guardian of Thraben" class="popupImg"></span></a></span>: $11.01</li>

                        <li><span class="hover_img"><a href="#finks" class="discussionA cardA">Kitchen Finks<span><img src="https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=141976&type=card" alt="Kitchen Finks" class="popupImg"></span></a></span>: $10.80</li>

                        <li><span class="hover_img"><a href="#temple" class="discussionA cardA">Eldrazi Temple<span><img src="https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=198312&type=card" alt="Eldrazi Temple" class="popupImg"></span></a></span>: $9.50</li>
                    </ol>
                </div>
                <div class="col-sm-7">
                    <a href="#canopy"><img src="https://cdn.shopify.com/s/files/1/0153/7791/products/Noah-Bradley_Horizon-Canopy_1400x.jpg?v=1513520437" class="budgetImg" alt="Horizon Canopy"></a>
                    
                    <a href="#vial"><img src="https://tjcollect.files.wordpress.com/2013/06/aethervial.jpg" class="budgetImg" alt="Aether Vial"></a>

                    <a href="#thalia"><img src="https://orig00.deviantart.net/df4a/f/2012/012/0/4/thalia__guardian_of_thraben_by_algenpfleger-d4m3bms.jpg" class="budgetImg" alt="Thalia, Guardian of Thraben"></a>

                    <a href="#finks"><img src="https://vignette.wikia.nocookie.net/gamelore/images/7/7d/Kitchen_Finks.jpg/revision/latest?cb=20141228044506" class="budgetImg" alt="Kitchen Finks"></a>

                    <a href="#temple"><img src="https://cdna.artstation.com/p/assets/images/images/000/982/472/large/james-paick-127482.jpg?1437507210" class="budgetImg" alt="Eldrazi Temple"></a>
                    
                    
                </div>
            </div>
            <hr>
            <h3>Replaceability/budget options:</h3>
            <h3 id="canopy">Horizon Canopy:</h3>
            <p>Horizon Canopy is the most expensive in the deck, beating aether vial by over $15. While Horizon Canopy is very powerful in the deck, as it strengthens your lategame and ability to dig for answers, it also comes at a cost of multiple life in a single game, which can actually lower your percentages in some matchups like burn and aggro. This disadvantage helps lower the deck's necessity for Horizon Canopy, along with the general low demand of lategame strength, as the Eldrazi Displacer + Thraben Inspector/Blade Splicer engine can generate enough value. Horizon Canopy can often be replaced with just extra Plains, or you can add fun one-of lands to the deck.</p>
            <hr>
            <h3 id="vial">Aether Vial:</h3>
            <p>Aether Vial fills in the slot as the second most expensive card in the deck, at a little over $30. Unlike Horizon Canopy, however, Aether Vial has very few downsides, and is infact one of the most important cards in the deck. Aether Vial allows the deck to play at instant speed, along with give our Flickerwisps flash, enabling tons of value and disruption that can stop the opponent from answering our threats. Aether Vial's main weakness is when it is drawn at a later stage of a game or in multiples, as after turn one its value falls significantly in many matchups. Due to the card's strength, it would be very unwise to run 0-1 Aether Vials, and would just be smarter at that point to save up for them before playing the deck. Running two is risky but doable, and should only be done when absolutly necessary. Three Aether Vials is a fine option for budget reasons, as the difference should not be too hurtful to your game plan. For replacements, adding more lower cost creatures can help fill the slots (Remorseful Cleric, Phyrexian Revoker, Mirran Crusader, Militia Bugler, Thalia, Heretic Cathar, etc.). When going down to two Aether Vials, a Flickerwisp can be cut, as the card gets much worse when there are only half as many Aether Vials, and adding more of the above mentioned creatures can be fine replacements.</p>
            <hr>

            <h3 id="thalia">Thalia, Guardian of Thraben:</h3>
            <p>Thalia, Guardian of Thraben tends to be very matchup and meta dependent. She will, however, always be necessary in the deck, as modern does have a large sum of decks based on cheap noncreature spells (blue-based control, storm, etc.). However, the number of Thalia, Guardian of Thrabens necessary will not always be 4- in fact, in the current meta, it is not necessarily incorrect to go down a Thalia, Guardian of Thraben regardless of budget. For budget reasons, I would almost identically follow the advice given for Aether Vial- 0-1 is too little, two is risky but plausible, and three is fine. Again, just like in the prior section, replacing Thalia, Guardian of Thraben with two drop(s) is smartest, as she is a two drop of her own. More specifically, focusing on combo and control hosers like Spirit of the Labyrinth or, to a lesser extent, Phyrexian Revoker, can help fill in Thalia, Guardian of Thraben's roll a little better compared to other two drops. If you decide to fall down to two Thalia, Guardian of Thrabens, adding additional combo hosers (Ethersworn Canonist, Eidolon of Rhetoric) in the sideboard can help keep that matchup from becoming too poor.</p>

            <hr>
            <h3 id="finks">Kitchen Finks:</h3>
            <p>Kitchen Finks helps the deck against aggro matchups or grindy decks without Path to Exile. That being said, there are plenty of other options versus burn and aggro (Lone Missionary, Blessed Alliance, Burrenton Forge-Tender, Auriok Champion, Kor Firewalker). While Kitchen Finks is the strongest and most versitile card out of these options, it does the deck little harm in switching it for one of these cards. This swap only really applies for the Kitchen Finks in the board, however, as burrenton would look rather silly versus a UW control player. The Kitchen Finks in the sideboard (which, similar to Eldrazi Temple, is not present in every mono-white build), can be replaced with another strong three drop like Mirran Crusader or Fiend Hunter.</p>

            <hr>
            <h3 id="temple">Eldrazi Temple:</h3>
            <p>Many mono-white lists do not even run an Eldrazi Temple or any Eldrazi, however, in a meta full of jund and other grindy decks, Eldrazi Displacer seems to be a powerful choice. That being said, while Eldrazi Temple helps power it out on turn two and activate its ability more effectively, Eldrazi Temple is not even a necessity in my decklist. If you still wish to play mono-white with 3-4 displacers, than the Eldrazi Temple should be replaced with another colorless land like Shefet Dunes, as you still need enough colorless sources to active the Eldrazi's ability. Eldrazi Temple is the least important card in this list, and can easily be swapped out with almost zero harm.</p>

            <hr>
            <h3>Other Swaps:</h3>
            <p>In addition to the above mentioned swaps, some lands can be cut entirely from the deck, most notably Eiganjo Castle and Field of Ruin. In addition, sideboard options can get replaced for more budget ones that fill in the role (i.e. Gideon, Ally of Zendikar, Settle the Wreckage, Auriok Champion).</p>
            <h3>What the deck would look like on a budget:</h3>
            <div class="panel-group" id="accordion1">
            <div class="panel panel-format">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion1" href="#collapse1">
                    Mono-White Death and Taxes on a Budget:</a>
                  </h4>
                </div>
            <div id="collapse1" class="panel-collapse collapse">
                  <div class="panel-body"> <div class="row">
                <div class="col-sm-6">
                    <table class="table decklist table-condensed table-responsive">
                        <tbody>
                            <tr>
                                <th>Creatures:</th>
                            </tr>
                            <tr><!-- Thraben Inspector -->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Thraben Inspector</a></td>
                              
                            </tr>
                            <tr><!--Arbiter-->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Leonin Arbiter</a></td>
                            
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Thalia, Guardian of Thraben</a></td>
                           
                            </tr> 
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Blade Splicer</a></td>
                              
                            </tr>
                            <tr><!-- flickerwisp -->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Flickerwisp</a></td>
                             
                            </tr> 
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Militia Bugler</a></td>
                           
                            </tr>
                            <tr><!-- mirran -->
                            <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Mirran Crusader</a></td>
                          
                        </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Restoration Angel</a></td>
                            
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
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Aether Vial</a></td>
                               
                            </tr>
                            <tr>
                                <th>Lands:</th>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Ghost Quarter</a></td>
                            </tr>
                            <tr>
                                <td>12&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Plains</a></td>
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Shefet Dunes</a></td>
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
                            <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Burrenton Forge-Tender</a></td>
                          
                        </tr>
                        <tr>
                            <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Relic of Progenitus</a></td>
                          
                        </tr>
                        <tr>
                            <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Sunlance</a></td>
                          
                        </tr>         
                        <tr>
                            <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Phyrexian Revoker</a></td>
                           
                        </tr>

                        <tr>
                            <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Rest in Peace</a></td>
                          
                        </tr>
                        <tr>
                            <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Stony Silence</a></td>
                          
                        </tr>
                        <tr>
                            <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Eidolon of Rhetoric</a></td>
                            
                        </tr>
                        <tr><!-- mirran -->
                            <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Mirran Crusader</a></td>
                            
                        </tr>
                        <tr>
                            <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Shalai, Voice of Plenty</a></td>
                             
                            </tr> 
                    </tbody>
                </table>
                <div class="previewSpace"></div>
                <div class="previewDiv">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Thraben+Inspector&type=card" id="deckPreviewImgOne">
                </div>
            </div>
                
            </div></div>
                </div>
              </div>
          </div>
            <!-- INSERT DECK HERE // also, below sideboard, include deck's cost, original's cost, and money saved.-->
            <!-- BEGIN OTHER SPLASH BUDGET BELOW (lets to rw first) -->
            <h2>Red-White Death and Taxes:</h2>
            <h3>Top 5 Most Expensive Cards*:</h3>
            <p><a href="#">Based on this decklist</a></p>
            <div class="row">
                <div class="col-sm-5">
                    <ol class="cardList">
                        <li><span class="hover_img"><a href="#vial2" class="discussionA cardA">Aether Vial<span><img src="https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=48146&type=card" alt="Aether Vial" class="popupImg"></span></a></span>: $33.79</li>

                        <li><span class="hover_img"><a href="#foundry" class="discussionA cardA">Sacred Foundry<span><img src="https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=89066&type=card" alt="Sacred Foundry" class="popupImg"></span></a></span>: $17.70</li>

                        <li><span class="hover_img"><a href="#thalia2" class="discussionA cardA">Thalia, Guardian of Thraben<span><img src="https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=270445&type=card" alt="Thalia, Guardian of Thraben" class="popupImg"></span></a></span>: 11.01</li>

                        <li><span class="hover_img"><a href="#moon" class="discussionA cardA">Magus of the Moon<span><img src="https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=438704&type=card" alt="Magus of the Moon" class="popupImg"></span></a></span>: $7.49</li>

                        <li><span class="hover_img"><a href="#path" class="discussionA cardA">Path to Exile<span><img src="https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=179235&type=card" alt="Path to Exile" class="popupImg"></span></a></span>: $7.00</li>
                    </ol>
                </div>
                <div class="col-sm-7">
                    <a href="#vial2"><img src="https://tjcollect.files.wordpress.com/2013/06/aethervial.jpg" class="budgetImg" alt="Aether Vial"></a>

                    <a href="#foundry"><img src="https://cdn.shopify.com/s/files/1/0153/7791/products/Noah-Bradley_Sacred-Foundry_1400x.jpg?v=1522129288" class="budgetImg" alt="Sacred Foundry"></a>

                    <a href="#thalia2"><img src="https://orig00.deviantart.net/df4a/f/2012/012/0/4/thalia__guardian_of_thraben_by_algenpfleger-d4m3bms.jpg" class="budgetImg" alt="Thalia, Guardian of Thraben"></a>

                    <a href="#moon"><img src="https://magic.wizards.com/sites/mtg/files/image_legacy_migration/mtg/images/daily/wallpapers/Wallpaper_MagusoftheMoon_1280x1024.jpg" class="budgetImg" alt="Magus of the Moon"></a>

                    <a href="#path"><img src="https://static1.squarespace.com/static/592dff77e6f2e11e077a7dd4/592e0a706b8f5bd5cefc1de9/593986afb3db2b552110766c/1496942256305/path_exile.jpg?format=500w" class="budgetImg" alt="Path to Exile"></a>

                    
                </div>
            </div>
            <h3 id="vial2">Aether Vial: <small class="small">See also: <a href="#vial">Mono-W: Aether Vial</a></small></h3>
            <p>Aether Vial's necessity and budget options are very similar for Red-White compared to Mono-White Death and Taxes. The main difference is the replaceable card pool is much larger- not only do you get access to more twos and threes (Dire Fleet Daredevil, Pia Nalaar, etc.) but you also get access to one of the most powerful one drops- Lightning Bolt. Adding another Lightning Bolt to the deck cannot hurt, as it is a great card that can remove creatures, planeswalkers, and players. Again, only one Aether Vial should be replaced or two if absolutely necessary.</p>
            <hr>
            <h3 id="foundry">Sacred Foundry:</h3>
            <p>Sacred Foundry, while being a dual land, is not a very important one. Since the deck plays no fetchlands (nonbo with Leonin Arbiter), the only advantage to playing Sacred Foundry over other lands is its ability to enter untapped with the low cost of 2 life, otherwise it enters tapped. It ends up costing less life than Battlefield Forge, and is more consistent than the checklands/fastlands. In the end, however, playing the R/W painland (Battlefield Forge) is a very fair budget option that can even save life some games (but often will cost 1-2 hitpoints). Out of all the cards on the top 5 most expensive cards list, Sacred Foundry is the most replaceable one, so definitly prioritize it the least when playing on a budget.</p>
            <hr>
            <h3 id="thalia2">Thalia, Guardian of Thraben: <small class="small">See also: <a href="#thalia">Mono-W: Thalia, Guardian of Thraben</a></small></h3>
            <p>Thalia, Guardian of Thraben's necessity and budget options are very similar for Red-White compared to Mono-White Death and Taxes. In fact, following the same advice mentioned in the Aether Vial section above would work perfectly fine. Again, Thalia, Guardian of Thraben is very meta dependent, and is not even necessary as a 4 of, but playing less than two of her is too risky due to the presence of spell-based combo decks and control decks in the format.</p>
            <hr>
            <h3 id="moon">Magus of the Moon:</h3>
            <p>While mainly a sideboard card, Magus of the Moon is a very powerful effect that can and will single-handedly win games. The unique effect he brings cannot be easily replaced, and his low pricetag of ~$7 makes him a resonable card to play 1-2 of even in a budget. If absolutely necessary, Magus of the Moon can be cut down to about 1 but going any lower can really hurt your tron matchup or other decks with greedy manabases. In my opinion, running less than two is a mistake, but he is definitly less important than staples like Path to Exile and Aether Vial, so Magus of the Moon can be trimmed for other creatures like Pia Nalaar or tron specific hate like Wear // Tear or more Stony Silences (or Damping Sphere when that comes out).</p>
            <hr>
            <h3 id="path">Path to Exile:</h3>
            <p>Path to Exile, especially in the current modern meta of Gurmag Anglers, Hollow Ones, and giant Champion of the Parishs/Thalia's Lieutenants, is essential. That being said, splashing for red gives you access to additional powerful removal spells, most notably Lightning Bolt, a significantly cheaper alternative. While Lightning Bolt misses many of Modern's creatures, it's ability to finish off planeswalkers and opponents along with denying the opponent a tapped basic is very impactful for your deck. Overall, Path to Exile is a neccesary evil in this current meta, but can definitly be trimmed for a playset of Lightning Bolts, something like a 2-4 split of Path to Exiles to Lightning Bolts is fine.</p>
            <hr>
            <h3 id="dire">Honorable mention: Dire Fleet Darevil</h3> 
            <div class="muimage">
                <img src="https://media.wizards.com/2018/images/daily/cardart_RIX_Dire_Fleet_Daredevil_LG.jpg" class="muimage">
            </div>
            <br>
            <p>Dire Fleet Daredevil, while a very powerful two drop, can also be just a 2/1 for 2 with first strike in plenty of modern matchups. The card is also not exciting versus most combo decks, as it does not generally disrupt those decks enough to be worth it. Therefore, Dire Fleet Daredevil is very replaceable- just swap it with a few twos or a couple of ones/threes. Cards that can replace Dire Fleet Daredevil include Thraben Inspector, Spirit of the Labyrinth, Phyrexian Revoker, or one or two threes like Pia Nalaar and Mirran Crusader. Overall, Dire Fleet Daredevil is among the least important spells in the deck, especially compared to the ones mentioned above (not including the land!).</p>
            <hr>
            <h3>Other Swaps:</h3>
            <p>In addition to the above mentioned swaps, niche lands like Field of Ruin can get cut from the deck. In addition, sideboard options can get replaced for more budget ones that fill in the role (i.e. Gideon, Ally of Zendikar, Settle the Wreckage, Auriok Champion). Path to Exile is also an interesting case. While the card is very important for the deck, Lightning Bolt often serves Path to Exile's purpose perfectly fine, if not better, at times. When on a budget, trimming a Path to Exile for another Lightning Bolt will not hurt the deck too much.</p>
            <h6>What the deck would look like on a budget:</h6>
            <div class="panel-group" id="accordion2">
            <div class="panel panel-format">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse2">
                    Red-White Death and Taxes on a Budget:</a>
                  </h4>
                </div>
            <div id="collapse2" class="panel-collapse collapse">
                  <div class="panel-body"> <div class="row">
                <div class="col-sm-6">
                    <table class="table decklist table-condensed table-responsive">
                        <tbody>
                            <tr>
                                <th>Creatures:</th>
                            </tr>
                            <tr><!-- Thraben Inspector -->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Thraben Inspector</a></td>
                              
                            </tr>
                            <tr><!--Arbiter-->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Leonin Arbiter</a></td>
                            
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Thalia, Guardian of Thraben</a></td>
                              
                            </tr> 
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Blade Splicer</a></td>
                             
                            </tr>
                            <tr><!-- flickerwisp -->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Flickerwisp</a></td>
                               
                            </tr> 
                            <tr> <!-- mirran -->
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Mirran Crusader</a></td>
                               
                        </tr>
                        <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Pia Nalaar</a></td>
                               
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Pia and Kiran Nalaar</a></td>
                               
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Restoration Angel</a></td>
                               
                            </tr>
                            <tr>
                                <th>Spells:</th>
                            </tr>
                                
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Lightning Bolt</a></td>
                             
                            </tr>
                           <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Path to Exile</a></td>
                              
                            </tr>
                            <tr>
                                <th>Artifacts:</th>
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Aether Vial</a></td>
                               
                            </tr>
                            <tr>
                                <th>Lands:</th>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Battlefield Forge</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Ghost Quarter</a></td>
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Inspiring Vantage</a></td>
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Needle Spires</a></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Mountain</a></td>
                            </tr>
                            <tr>
                                <td>6&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Plains</a></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Slayers' Stronghold</a></td>
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Tectonic Edge</a></td>
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
                            <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Burrenton Forge-Tender</a></td>
                           
                        </tr>
                        <tr>
                            <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Relic of Progenitus</a></td>
                           
                        </tr>          
                        <tr>
                            <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Phyrexian Revoker</a></td>
                           
                        </tr>
                        <tr>
                            <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Stony Silence</a></td>
                         
                        </tr>
                        <tr>
                            <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Rest in Peace</a></td>
                           
                        </tr>
                        <tr>
                            <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Cunning Sparkmage</a></td>
                          
                        </tr>
                        <tr>
                            <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Eidolon of Rhetoric</a></td>
                           
                        </tr>
                        <tr>
                            <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Magus of the Moon</a></td>
                           
                        </tr>
                        <tr>
                            <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Mirran Crusader</a></td>
                            
                        </tr>
                    </tbody>
                </table>
                <div class="previewSpace"></div>
                <div class="previewDiv">
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Thraben+Inspector&type=card" id="deckPreviewImgTwo">
                </div>
            </div>
                
            </div></div>
                </div>
              </div>
          </div>
            <p>*: prices based off of TCGPlayer mid as of 7/5/18</p>
            <div class="extra-space"></div>
            </div>
            
            <script>var jArray = <?php echo json_encode($listOfCardNames); ?>;</script>
            <script src="/loadcardhoversettings.js"></script>
            
            <?php
                include("../scripts/footer.php");
            ?>
            <script>var jStr = <?php echo json_encode($lastModDate); ?>;</script>
            <script src="/loadpublishinfo.js" type="text/javascript"></script>
    </body>
</html>
