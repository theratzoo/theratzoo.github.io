<?php
    include("../scripts/searchscript.php"); //actually works
    
?>
<?php
    include("../scripts/cardlistdb.php"); //does work
?>
<?php
    $filename = 'entcomparison.php';
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

    <meta name="description" content="Modern matchup guide against Dredge for Death and Taxes.">
    <meta name="keywords" content="Magic the Gathering, modern, death and taxes, dnt, modern dnt, ent, eldrazi and taxes, bw ent, comparison, eldrazi, wasteland strangler">

        <title>Eldrazi and Taxes Comparison</title>
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
                setUpDate();
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
          function setUpDate() {
            var d = new Date();
            var month = new Array();
            month[0] = "January";
            month[1] = "February";
            month[2] = "March";
            month[3] = "April";
            month[4] = "May";
            month[5] = "June";
            month[6] = "July";
            month[7] = "August";
            month[8] = "September";
            month[9] = "October";
            month[10] = "November";
            month[11] = "December";
            var n = month[d.getMonth()];
            document.getElementById('mgrec').innerHTML = `${n}'s Mulligan Game`;
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
            <div class="container-fluid body-div" id="content">
                
            <div class="jumbotron">
                <h1>Eldrazi and Taxes: BW versus Mono-White</h1>
            </div>
            <!--include 2 decklists
                plus several strengthns and weaknesses for each
                i have a few i focus on and go into depth
                and at end can have a minor pro and a minor con for each
                at end can compile results and give out opinion

                make sure to analyze lists, look at meta, can do number probability for getting mana screwed

            -->
            <div class="row">
                    <div class="col-4 mug-img">
                        <img src="/images/dnt/wasteland-strangler-art.jpeg" class="headImg" alt="Wasteland Strangler">
                    </div>
                    <div class="col-4 mug-img">
                        <h1 style="text-align:center">V.S.</h1>
                    </div>
                    <div class="col-4 mug-img">
                        <img src="/images/dnt/restoration-angel-art.jpg" class="headImg" alt="Restoration Angel">
                    </div>
                </div>
                <br>

                <h2>BW Eldrazi and Taxes Breakdown</h2>
            <br>
            <h3>Decklist</h3>
                <div class="panel-group" id="accordion">
            <div class="panel panel-format">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                    B/W Eldrazi and Taxes</a>
                  </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                  <div class="panel-body"> 
                    <div class="row decklist">

                <div class="col-sm-6">
                    <table class="table decklist table-condensed table-responsive">
                        <tbody>
                            <tr>
                                <th>Creatures:</th>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Leonin Arbiter</a></td>
                                
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Thalia, Guardian of Thraben</a></td>
                                
                            </tr> 
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Tidehollow Sculler</a></td>
                                
                            </tr> 
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Blade Splicer</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Eldrazi Displacer</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Flickerwisp</a></td>
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Wasteland Strangler</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Thought-Knot Seer</a></td>
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
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Caves of Koilos</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Concealed Courtyard</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Eldrazi Temple</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Ghost Quarter</a></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Godless Shrine</a></td>
                            </tr>  
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Plains</a></td>
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Shambling Vent</a></td>
                            </tr>  
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Swamp</a></td>
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
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Burrenton Forge-Tender</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Grafdigger's Cage</a></td>
                                
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Fatal Push</a></td>
                                
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Rest in Peace</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Stony Silence</a></td>
                                
                            </tr>

                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Kambal, Consul of Allocation</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Orzhov Pontiff</a></td>
                                
                            </tr>

                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Gideon, Ally of Zendikar</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Settle the Wreckage</a></td>
                                
                            </tr>
                </tbody>
            </table>
            <br>
            <div>
                <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Leonin+Arbiter&type=card" id="deckPreviewImgOne">
            </div>

            <br>
            
            </div>
                
            </div>

        </div>
                </div>
              </div>
          </div>
              <br>

              <br>

            <h2>Differences</h2>
            <br>
            <h3>Additional Cards</h3>
            <p>BW Eldrazi and Taxes gets access to more creatures through their extra color. The most common additional creature is Wasteland Strangler, a strong Eldrazi that works well with the whole deck. The other common creature is Tidehollow Sculler, a small Thought-Knot Seer with a few downsides. Otherwise, the deck runs the same suit of hatebears and Eldrazi as Mono-White Eldrazi and Taxes.</p>
            <!--discuss additional cards-->
            <br>
            <h3>Strategy</h3>
            <p>The game plan of BW Eldrazi and Taxes is focused deeply on disruption and ending the game quickly. Disruptive creatures such as Tidehollow Sculler and Wasteland Strangler facilitate a faster pace compared to other iterations of Death and Taxes. While the opponent can remove Tidehollow Sculler and garner threats too large for Wasteland Strangler to remove, BW Eldrazi and Taxes ideally would have won the game before that happens. While the deck is still not an aggro build, it does focus more on disruption and less on value compared to Mono-White Eldrazi and Taxes.</p>
            <br>
            <!--discuss strategy broadly, highlighting differences-->
            <h3>Sideboard</h3>
            <p>With access to black cards, BW Eldrazi and Taxes has more options for their sideboard. While the same white enchantments are present in the sideboard, the removal suite includes Fatal Pushes rather than Dismembers. In addition, the deck has access to Kambal, Consul of Allocation and Orzhov Pontiff, both powerful assets in certain matchups. The average mana cost is lower in BW Eldrazi and Taxes sideboards due to the faster nature of their deck, hence why there are only two four mana spells.</p>
            <!--discuss sideboard differences-->
            <br>
            <hr>
            <br>
            <h2>Mono-W Eldrazi and Taxes Breakdown</h2>
            <br>
            <h3>Decklist</h3>
            
              <!-- E&T -->
              <div class="panel-group" id="accordion2">
            <div class="panel panel-format">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse2">
                    Mono-White Eldrazi and Taxes</a>
                  </h3>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                  <div class="panel-body"> 
                    <div class="row decklist">

                <div class="col-sm-6">
                    <table class="table decklist table-condensed table-responsive">
                        <tbody>
                            <tr>
                                <th>Creatures:</th>
                            </tr>
                            <tr><!--Arbiter-->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Leonin Arbiter</a></td>
                                
                            </tr>
                            <tr><!-- thalia -->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Thalia, Guardian of Thraben</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Wall of Omens</a></td>
                                
                            </tr> 
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Blade Splicer</a></td>
                                
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Eldrazi Displacer</a></td>
                                
                            </tr>
                            <tr><!-- flickerwisp -->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Flickerwisp</a></td>
                                
                            </tr> 
                            <tr><!--Resto-->
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Restoration Angel</a></td>
                                 
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Thought-Knot Seer</a></td>
                                
                            </tr>

                            <tr>
                                <th>Spells:</th>
                            </tr>
                           <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Path to Exile</a></td>
                                
                            </tr>
                            <tr>
                                <th>Artifacts:</th>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Aether Vial</a></td>
                                
                            </tr>
                            <tr>
                                <th>Lands:</th>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Eldrazi Temple</a></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Field of Ruin</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Ghost Quarter</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Horizon Canopy</a></td>
                            </tr>
                            <tr>
                                <td>7&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Plains</a></td>
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Shefet Dunes</a></td>
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
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Burrenton Forge-Tender</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Grafdigger's Cage</a></td>
                                
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Rest in Peace</a></td>
                                
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Stony Silence</a></td>
                                
                            </tr>

                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Dismember</a></td>
                                
                            </tr>
                            <tr><!-- Gideon -->
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Gideon, Ally of Zendikar</a></td>
                                
                            </tr>

                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Worship</a></td>
                                
                            </tr>
                            
                    
                </tbody>
            </table>
            <br>
            <div>
                <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Leonin+Arbiter&type=card" id="deckPreviewImgTwo">
            </div>

            <br>
            
            </div>
                
            </div>

        </div>
                </div>
              </div>
          </div>

          <h2>Differences</h2>
            <br>
            <h3>Cards Choices</h3>
            <p>While Mono-White Eldrazi and Taxes does not gain access to new cards, it does have a few spells that differ from stock BW Eldrazi and Taxes lists. Restoration Angel is the most obvious difference, along with additional Blade Splicers. Wall of Omens highlights a defensive strategy that is often played at the early turns with Mono-White Eldrazi and Taxes. These creatures encourage a slower pace of play, as the average converted mana cost is noticeably higher in Mono-White Eldrazi and Taxes compared to BW Eldrazi and Taxes.</p>
            <br>
            <!--discuss additional cards-->
            <h3>Strategy</h3>
            <p>As preluded above, Mono-White Eldrazi and Taxes has a slower game plan compared to BW Eldrazi and Taxes. A stronger focus on winning through generating value is better achieved in this build. In addition, a more defensive strategy is available, as Blade Splicer and Restoration Angel are significantly better at blocking compared to Tidehollow Sculler. That being said, Mono-White Eldrazi and Taxes is capable of fast starts, as the creatures in the deck are stronger than they look.</p>
            <br>
            <!--discuss strategy differences-->
            <h3>Sideboard</h3>
            <p>In the sideboard, matchup specific haymakers are present in Mono-White Eldrazi and Taxes. A focus on these game-winning four mana spells is greater compared to BW Eldrazi and Taxes. Worship and Gideon, Ally of Zendikar can win games on their own but come at a high mana cost. Thanks to the slower strategy of Mono-White Eldrazi and Taxes, running these expensive spells works fine.</p>
            <!--discuss sideboard differences-->


            <br>
            <hr>
            <br>
            <h1>Compare and Contrast</h1>
            <br>
            <h2>BW Eldrazi and Taxes- Advantages</h2>
            <br>
            <h3>Larger Card Pool</h3>
            <p>The first advantage that comes from playing BW Eldrazi and Taxes is having access to a significantly larger card pool. Since BW Eldrazi and Taxes includes black mana, more spells are available to utilize. The main cards that are available include value creatures and removal. In addition, more sideboard options are available, especially in regard to removal and hate bears. The biggest advantage this gives BW Eldrazi and Taxes is the ability to adapt to the meta. If the meta is heavy on creature decks, then Fatal Push and Ravenous Chupacabra are easily slotted into the deck. If noncreature spell decks dominate the format, Kambal, Consul of Allocation performs well. This flexibility and adaptive ability make BW Eldrazi and Taxes really powerful in well-defined metas. However, Modern's current meta very diverse, making it hard to specialize. That being said, the raw power added through black spells gives BW Eldrazi and Taxes an edge, regardless of the meta.</p>
            <!--black adds lots of cards as options... flexibility in threats with more pw, plus more removal and card advantage and such-->
            <br>
            <h3>Strong Interaction</h3>
            <p>One of the biggest strengths of splashing black is getting access to interaction. Cards such as Tidehollow Sculler and Wasteland Strangler are hard effects to find in white. In general, BW Eldrazi and Taxes has access to higher quality removal and other forms of disruption compared to Mono-White Eldrazi and Taxes. Fatal Push is generally better than Dismember, as the four life is fatal against the aggressive creature decks. Orzhov Pontiff gives BW Eldrazi and Taxes an avenue to fight creature decks, such as Elves and Humans. While Mono-White Eldrazi and Taxes has removal and disruption like Thought-Knot Seer, having more of that disruption makes BW Eldrazi and Taxes better at fighting difficult matchups. Taking the opponent's best two spells is a great way to win games in Modern, hence why BW Eldrazi and Taxes utilizes Tidehollow Sculler alongside Thought-Knot Seer. Overall, the interaction that stems from access to black helps BW Eldrazi and Taxes fight through the meta.</p>
            <!--removal, tidehollow, other disruption-->
            <h3>Synergies</h3>
            <p>BW Eldrazi and Taxes excels at synergies between cards a lot more than Mono-White Eldrazi and Taxes. These synergistic plays stem from two unique cards- Wasteland Strangler and Tidehollow Sculler. The biggest upside that comes from Wasteland Strangler is getting rid of a temporarily exiled card. For example, if Flickerwisp exiles one of the opponent's permanents, Wasteland Strangler can target that card to move to the graveyard. After the end step is reached, Flickerwisp's ability will check for that card. Since the card is no longer exiled by Flickerwisp's ability, it will fail to return it to the battlefield, essentially turning Flickerwisp into a Vindicate on a 3/1 flying body. In addition, Tidehollow Sculler's exiled card can be permanently removed through Wasteland Strangler's ability. The last strong synergy is that, with two instant speed blink effects, Tidehollow Sculler can permanently take one of the opponent's cards. Overall, many powerful synergies come from the distinct cards found in BW Eldrazi and Taxes, adding raw power to the deck.</p>
            <!--tidehollow and wasteland strangler work great in deck, especially with flickerwisp, displacer, etc-->
            <br>
            <h2>BW Eldrazi and Taxes- Disadvantages</h2>
            <br>
            <h3>Fragile Manabase</h3>
            <p>By far the largest downside to BW Eldrazi and Taxes is its manabase. The amount of games that are lost to not hitting the right colors is higher than you would think. The reason BW Eldrazi and Taxes has a risky mana base compared to the plethora of three color decks is that you cannot play fetch lands. Leonin Arbiter does not allow for fetches to be in the deck. In addition, colorless mana is technically a color, making the deck three colors without any fetches. While Aether Vial improves the mana situation, lands such as Ghost Quarter and Eldrazi Temple punish hands with cards such as Tidehollow Sculler. BW Eldrazi and Taxes also struggles to beat disruption on the mana base. Blood Moon is a card that the deck really cannot beat unless an Aether Vial is in play. Field of Ruin hurts a lot, especially when Leonin Arbiter prevents you from getting the necessary colored source. Overall, the mana base costs significantly more games with BW Eldrazi and Taxes compared to Mono-White Eldrazi and Taxes, giving the deck harmful variance.
            <br>
            <h3>Lack of Late Game</h3>
            <p>Another disadvantage of BW Eldrazi and Taxes is its lack of late game. When the opponent runs out of cards in hand, Tidehollow Sculler becomes a hard-to-cast 2/2 for two mana. In addition, Wasteland Strangler is not very appealing at the later turns. Even if the opponent has a small enough creature to kill, most likely that creature is not relevant to the game. Lacking good ways of getting card advantage or generating value in the late game forces BW Eldrazi and Taxes into an aggressive situation despite the deck being closer to midrange. In addition, missing fliers like Restoration Angel make closing out the game in terms of damage much harder. Overall, the weak late game of BW Eldrazi and Taxes is a noticeable downside.</p>
            <!--tidehollow and strangler get worse later in game, when op creatures are too big and small ones dont matter while their hand is empty. -->
            <br>
            <h3>Loose Gameplan</h3>
            <p>The game plan of BW Eldrazi and Taxes was discussed earlier. Essentially, the deck wants to disrupt with early hatebears and close out the game sooner than later. However, due to its fragile manabase and the various casting costs of the cards, the way games play out is hard to control. There are some games where BW Eldrazi and Taxes will stumble on mana for a turn or two, leaving it behind in the game. Other games it will draw too few two mana hatebears and end up deploying slower than planned. Since BW Eldrazi and Taxes lacks much of a late game plan, stumbling on tempo early on is very harmful. The power and potential are very high, but the deck will not work if the cards are drawn in the wrong order, whereas Mono-White Eldrazi and Taxes's cards work fine on their own.</p>
            <br>
            <h2>BW Eldrazi and Taxes- Overall</h2>
            <p>Essentially, BW Eldrazi and Taxes has a very high ceiling but low floor compared to Mono-White Eldrazi and Taxes. The deck has very powerful and synergistic cards that can lead to one-sided games. However, the fragile manabase coupled with the mediocracy of the cards on their own leads to other games showing the deck in a bad manner. All in all, BW Eldrazi and Taxes often wins hard or loses badly to its own muddled self.</p>
            <!--summarize pros and cons into a broad conclusion-->

            <br>
            <h2>Mono-W Eldrazi and Taxes- Advantages</h2>
            <br>
            <h3>Reliable Mana Base</h3>
            <p>The biggest advantage to Mono-White Eldrazi and Taxes is the reliability of its mana base. While there will be games that hitting double white for Flickerwisp is not done in time or a colorless source is lacking, these games are very rare. Even when the mana base is not perfect, the nature of Mono-White Eldrazi and Taxes does not punish as hard as BW Eldrazi and Taxes, as the deck is built to be slower. In fact, the mana base is reliable enough to support four Horizon Canopies, giving the deck a stronger late game and more reliability in its game plan (will be discussed more below). The mana base also gets access to other utility lands such as Shefet Dunes and Field of Ruin, making Mono-White Eldrazi and Taxes's lands more spell-oriented than BW Eldrazi and Taxes's land base. Essentially, due to Mono-White Eldrazi and Taxes's reliable mana base, utility lands that would otherwise be too risky for BW Eldrazi and Taxes are allowed.</p>
            <br>
            <!--only white and a few colorless sources. can get mathy.-->
            <h3>High Threat Density</h3>
            <p>Another advantage of Mono-White Eldrazi and Taxes is the plethora of threats compared to BW Eldrazi and Taxes. Having double the number of Blade Splicers along with three Restoration Angels gives the deck a solid density of threats to rely on. While Mono-White Eldrazi and Taxes is usually slower than BW Eldrazi and Taxes, early Blade Splicers and fliers to blink said Blade Splicers can win the game very fast. In addition, Restoration Angel is an excellent finisher against many slower decks such as Jund. Restoration Angel is very difficult to remove compared to the Flickerwisp, as it dodges Lightning Bolt, Liliana, the Last Hope, Kolaghan's Command, and other three damage or less removal spells. All in all, the higher threat density lets Mono-White Eldrazi and Taxes win with ease when the time comes.</p> 
            <!--resto and splicer hit hard and can let this deck win through damage fast-->
            <br>
            <h3>Flexibility in Strategy</h3>
            <p>Finally, Mono-White Eldrazi and Taxes does a much better job at changing its game plan compared to BW Eldrazi and Taxes. Due to its strong late game, along with the early hate bears, Mono-White Eldrazi and Taxes can win games at any stage without too much trouble. Many of the cards work well on their own as well, making awkward hands less common. Even when hands are drawn with a lack of early plays, Mono-White Eldrazi and Taxes has no trouble playing a slower game. If a hand full of hate bears is presented, squeezing an early win is not too uncommon. Part of this flexibility comes from Horizon Canopy. If drawn in the later stages of the game, Horizon Canopy gives the deck extra reach. Horizon Canopy also aids hands that focus on deploying cheap creatures, as it can help refill your hand if you cannot win early. Overall, the cards in Mono-White Eldrazi and Taxes give the deck flexibility in its game plan that is not very prominent in the more linear BW Eldrazi and Taxes.</p>
            <br>
            <h2>Mono-W Eldrazi and Taxes- Disadvantages</h2>
            <br>
            <h3>Shortage of Creature Removal</h3>
            <p>One of the disadvantages to Mono-White Eldrazi and Taxes is its lack in strong removal spells. After Path to Exile, the deck does not have many good options. While Dismember gets the job done, four life is a steep price against the aggro decks of the format. In Modern's current meta, creature decks are a large chunk of it. Some of these decks are bad matchups for Eldrazi and Taxes, such as Bant Spirits and Humans. Having access to three Fatal Pushes in the sideboard goes a long way in making the matchup closer to favorable. Wasteland Strangler is a card that, while it does not always remove a creature, the worst Eldrazi and Taxes matchups tend to have creatures removable by Wasteland Strangler. Overall, the lack of good removal options in Mono-White Eldrazi and Taxes weakens it to its worst matchups, whereas BW Eldrazi and Taxes has good options for removal past Path to Exile.</p>
            <br>
            <!--only get path and dismember, fatal push not available removal is important in meta rn-->
            <h3>Lack of Hand Disruption</h3>
            <p>Similarly, Mono-White Eldrazi and Taxes lacks much hand disruption. While Tidehollow Sculler has a wide range of issues, it does help a lot against more linear decks. Thought-Knot Seer does provide some disruption, but it does not come down until later turns, which is sometimes too late for hand disruption.</p>
            <!--disruption also important, which white does not get-->
            <h3>Lower Ceiling</h3>
            <p>The final main disadvantage of Mono-White Eldrazi and Taxes is that the deck lacks the raw power that BW Eldrazi and Taxes has. While the deck is more consistent, its synergies and card power are not as high. Mono-White Eldrazi and Taxes's cards are, at best, a two for one (not including multiple Eldrazi Displacer activations). On the other hand, BW Eldrazi and Taxes can get three for ones through Wasteland Strangler and Tidehollow Sculler interactions. In addition, with less hand disruption, it is not as hard for the opponent to answer a menacing Mono-White Eldrazi and Taxes start. With BW Eldrazi and Taxes, however, Tidehollow Sculler can help get rid of removal spells to deal with your creatures, or at the very least force the opponent to point their removal at your 2/2 rather than a hate bear. All in all, Mono-White Eldrazi and Taxes lacks the raw power of BW Eldrazi and Taxes, making its explosive hands much weaker compared to the BW version.</p>
            <br>
            <!--power of deck is not as high. like the synergies are not as good and the best hands are much more fair and low impact-->
            <h2>Mono-W Eldrazi and Taxes- Overall</h2>
            <p>All in all, Mono-White Eldrazi and Taxes is more consistent and smoother than BW Eldrazi and Taxes. However, its power level is lower than BW Eldrazi and Taxes, as it is limited to only white cards. Mono-White Eldrazi and Taxes, therefore, struggles more against decks that are weak against black staples such as Fatal Push, but its overall win rate gets a boost due to its stable mana base and flexible game plan. Overall, the deck is safer but weaker, than BW Eldrazi and Taxes.</p>

            <br>
            <hr>
            <br>

            <h2>Analyzing Differences</h2>
            <br>
            <h3>Losing to Manabase</h3>
            <p>In my opinion, the biggest difference between Mono-White and BW Eldrazi and Taxes is that the latter will lose to its mana base. The number of games that will be lost to missing that black source will be a noticeable amount, or at least from my experiences playing BW Eldrazi and Taxes. While the current meta is not very punishing of greedy mana bases, BW Eldrazi and Taxes will still fail to find its sources in time. The amount of times this happens for top Modern decks is essentially zero, hence why they are at the top of the metagame. Even if the power of the deck outweighs this risk, I have felt too frustrated losing games to missing a color to praise BW Eldrazi and Taxes. All that being said, the advantage of gaining an extra color is still quite relevant...</p>
            <br>
            <h3>Added Strength of Splashing Black</h3>
            <p>Ultimately, splashing black adds many great options for Eldrazi and Taxes. Fatal Push does amazing things for the deck, often times acting as a better Path to Exile. In addition, the disruptive creatures in the main deck give the deck a strong, linear strategy. In the grand scheme of things, these advantages would not outweigh the disadvantage discussed previously. While getting Fatal Push and other black spells help the deck out, Eldrazi and Taxes is still strong without them. Blade Splicer and Restoration Angel are great cards at providing defense against creature-centric decks while pressuring other decks well. Plus, Dismember is often times about as good as Fatal Push, sometimes better (like against Gurmag Angler). Therefore, with a 100% blind meta, I would recommend Mono-White Eldrazi and Taxes over BW Eldrazi and Taxes. However, as the meta is well known, the strength of the decks is more complicated...</p>
            <br>
            <!--adds great cards... but still lots of options in white, so not very big advantage-->
            <h3>Meta Considerations + My Analysis</h3>
            <p>A common description of Modern's current meta is "two ships passing in the night". Essentially, each deck has its own linear plan, and interaction is rather low. With limited interaction, cards that are worse with lots of removal spells get better, such as Tidehollow Sculler. Furthermore, as many of Modern's strategies involve creatures, getting black's extra removal helps combat the current meta. To help out BW Eldrazi and Taxes's case, even more, Blood Moon is not very common, often times only found in the sideboard. In essence, Modern's current meta aligns very well with BW Eldrazi and Taxes's gameplan. I am still not a fan of the deck due to its mana base, but it is currently a better choice to combat Modern's meta. That being said, Mono-White Eldrazi and Taxes is still a good choice, especially considering how diverse Modern is. Ultimately, play what you are most comfortable with, but I would hedge toward BW Eldrazi and Taxes if you want the better deck for Modern as of now.</p>
            <!--mono-w better, but bw still strong but more meta-dependent. -->
            <br>
            <hr>
            <br>
            <h2>Conclusion</h2>
            <p>All in all, Mono-White and BW Eldrazi and Taxes are very different decks despite sharing many cards. The way games play out is quite different between decks, resulting from the different spells and lands and how they synergize with the cards in the deck. While I have found more success in Mono-White Eldrazi and Taxes due to its stable mana base, BW Eldrazi and Taxes is a better choice in Modern's current meta as its cards align well with many of the top decks. At the end of the day, though, if you are playing any Death and Taxes deck, play whatever version you love most!</p>

               
                <br>
                <hr>
                <h4>Additional Content</h4>
                <div class="row">
                    <div class="col-sm-4">
                        <h2><a href="thalia">Previous Article- Thalia 101</a></h2>
                    </div>
                    <div class="col-sm-4" id="latestArticle">
                        <h2><a href="/modern/matchupguides/infect">Latest Addition: Infect Matchup Guide</a></h2>
                        <!--find out latest article based on my last added link to database of search-->
                    </div>
                    <div class="col-sm-4">
                        <h2><a href="/modern/mulligans#mg" id="mgrec">Current Mulligan Game</a></h2>
                    </div>
                </div>
                
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
