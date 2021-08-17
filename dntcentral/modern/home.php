<?php
    include("../scripts/searchscript.php"); //actually works
    
?>
<?php
    include("../scripts/cardlistdb.php"); //does work
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

    

        <title>Modern</title>
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
                //checkMulliganGame();
                
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
                <br>
                    <div class="alert alert-danger" id="alertMG">
                        <a href="/modern/mulligans#mg"><strong>April's Mulligan Game is available now!</strong></a>
                        <input id="dismissAlert" onclick="dismissAlert()">
                        <br>
                        <a href="/" onclick="stopShowingAlert()" id="stopShowingAlert">Don't show this again.</a>
                    </div>
                    <br>
                <div class="jumbotron">
                        <h1>Modern</h1>
            </div>
            <h2>Basic Info:</h2>
            <p>Unlike Legacy Death and Taxes, the variants in Modern are less powerful due to both the card options and the meta. The large diversity in Modern's current meta contributes to the deck's lower tier status as well. The best variant of Death and Taxes is (arguably) Black-White Eldrazi and Taxes, which plays similar to both Legacy Death and Taxes and Eldrazi and Taxes, by adopting the Aether Vial plus Flickerwisp package from the former and the Thought-Knot Seer plus Eldrazi Temple package from the latter. In addition to BW Eldrazi and Taxes, there exists a Mono-White Death and Taxes variant in Modern (albeit more beatdown than its Legacy counterpart), along with plenty of splashes and other variations including Mono-White Eldrazi and Taxes and Chalice Eldrazi and Taxes.</p>
            <h2>Sample Decklists</h2>


            <div class="panel-group" id="accordion">
            <div class="panel panel-format">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                    Mono-White Death and Taxes</a>
                  </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse show">
                  <div class="panel-body"> 
                    <div class="row">
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
                            <tr><!-- thalia -->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Thalia, Guardian of Thraben</a></td>
                                
                            </tr> 
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Blade Splicer</a></td>
                                
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Eldrazi Displacer</a></td>
                                
                            </tr>
                            <tr><!-- flickerwisp -->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Flickerwisp</a></td>
                                
                            </tr> 
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Kitchen Finks</a></td>
                                                             
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Mirran Crusader</a></td>
                                
                            </tr> <!-- mirran -->
                            
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
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Aether Vial</a></td>
                                
                            </tr>
                            <tr>
                                <th>Lands:</th>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Eiganjo Castle</a></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Eldrazi Temple</a></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Field of Ruin</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Ghost Quarter</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Horizon Canopy</a></td>
                            </tr>
                            <tr>
                                <td>7&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Plains</a></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Shefet Dunes</a></td>
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
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Relic of Progenitus</a></td>
                                
                            </tr>
                            
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Phyrexian Revoker</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Rest in Peace</a></td>
                                
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Stony Silence</a></td>
                                
                            </tr>
                            
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Kitchen Finks</a></td>
                                                           
                            </tr>
                            <tr><!-- mirran -->
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Mirran Crusader</a></td>
                                
                            </tr> 
                            <tr><!-- Gideon -->
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Gideon, Ally of Zendikar</a></td>
                                
                            </tr>
                    </tbody>
                </table>
                <div>
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Thraben+Inspector&type=card" id="deckPreviewImgOne">
                </div>
               
            </div>
                
            </div>
        </div>
                </div>
              </div>

              <br>
            
            <div class="panel panel-format">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                    Black-White Eldrazi and Taxes:</a>
                  </h3>
                </div>
                <div id="collapse2" class="panel-collapse collapse show">
                  <div class="panel-body"> 
                    <div class="row">
                <div class="col-sm-6">
                    <table class="table decklist table-condensed table-responsive">
                        <tbody>
                            <tr>
                                <th>Creatures</th>
                            </tr>
                            <tr><!--Arbiter-->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Leonin Arbiter</a></td>
                                
                            </tr>
                            <tr><!--thalia-->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Thalia, Guardian of Thraben</a></td>
                                
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Tidehollow Sculler</a></td>
                                

                            </tr>

                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Blade Splicer</a></td>
                                
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Eldrazi Displacer</a></td>
                                
                            </tr>
                            <tr><!-- flickerwisp -->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Flickerwisp</a></td>
                                
                            </tr> 
                            <tr><!--Wasteland Strangler-->
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Wasteland Strangler</a></td>
                                
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
                <!--LANDS--><tr>
                                <th>Lands:</th>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Caves of Koilos</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Concealed Courtyard</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Eldrazi Temple</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Ghost Quarter</a></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Godless Shrine</a></td>
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Plains</a></td>
                            </tr>
                           
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Shambling Vent</a></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Swamp</a></td>
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
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Grafdigger's Cage</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Fatal Push</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Auriok Champion</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Rest in Peace</a></td>
                                
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Stony Silence</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Dismember</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Kambal, Consul of Allocation</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Orzhov Pontiff</a></td>
                                
                            </tr>
                            <tr><!-- Gideon -->
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckTwo(this.text)">Gideon, Ally of Zendikar</a></td>
                                
                            </tr>                    
                    </tbody>
                 </table>
                 <div>
                    <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Leonin+Arbiter&type=card" id="deckPreviewImgTwo">
                 </div>
                <h3>Want to learn more about the deck? <a href="variations/bw-ent">Black-White E&T Tips and Tricks</a></h3>
            </div>
                
            </div>

        </div>
                </div>
              </div>
          </div>

              
              <div class="row">
                  <div class="col-sm-6">
                      <h2>Eldrazi, or no Eldrazi?</h2>
              <p>The Eldrazi package adds a ton of power to the deck. Turn two Thought-Knot Seer, while uncommon for this particular deck, is still a very powerful play in Modern. The other Eldrazi also add more value to your deck, often serving as 2 for 1s or better. However, playing with these powerful Eldrazi come at a cost- since they specifically require colorless mana to cast or use, they add a third color to the deck. Therefore, since fetch lands cannot be used in the deck (nonbo with Leonin Arbiter), you are required to play with a suboptimal mana base that can, at times, cost you the game. Overall, I personally believe that it is worth the cost to play the Eldrazi builds over the tradition Mono-White builds in Modern, as it adds a ton of power and enjoyment to the deck.</p>
              <h3>Basic Sideboarding:</h3>
              <p>Right now, Modern is a very diverse format, making optimal sideboarding difficult, but essential nonetheless. Currently, there are a few essential sideboard options for all lists (regardless of splashes)- Rest in Peace and Stony Silence. Both of these cards hurt combo and aggro decks, helping you not die in the early turns. The remaining slots are often populated with value creatures or other hate cards to combat faster decks (like Burn hate). The lists above have basic sideboards to start with, but ultimately it is best to tune your sideboard based on your local meta.</p>
                  </div>
                  <div class="col-sm-6">
                      <h2>Splashing colors:</h2>
                      <p>While splashing is not as easy in Modern as it is in Legacy due to the lack of painless duals, splashing in Modern is very beneficial, due to it expanding your options outside of white, which is much more limited in Modern compared to legacy. In fact, unlike Legacy, there are versions of the deck splashing every color (even blue!). There are currently not any three color versions in Modern (besides Eldrazi and Taxes), and probably for good reason (fetches are a nonbo with Leonin Arbiter).</p>
              <div class="panel-group" id="accordion2">
            <div class="panel panel-format">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse1b">
                    Red</a>
                  </h3>
                </div>
                <div id="collapse1b" class="panel-collapse collapse">
                  <div class="panel-body colorPanel">
                      <h3>Brief Description:</h3>
                      <p>The red splash has two main advantages over other splashes- it provides the deck with strong, efficient beaters (Dire Fleet Daredevil, Pia and Kiran Nalaar) plus Lightning Bolt for more reach. The second advantage comes souly from the card Magus of the Moon- due to greedy manabases being very common in Modern, this card can just win the game on the stop in certain matchups, making it a strong reason to go red.</p>
                      <h3>Card options:</h3>
                      <!-- Separate staples from "spice" -->
                      <ul>
                          <li> Dire Fleet Daredevil </li>
                          <li> Magus of the Moon </li>
                          <li> Lightning Bolt </li>
                          <li> Alesha, Who Smiles at Death </li>
                          <li> Pia and Kiran Nalaar </li>
                          <li> Pia Nalaar </li>
                          <li> Harsh Mentor </li>
                      </ul>
                      <p><a href="variations/red">Read more about Red-White D&T here!</a></p>
                  </div>
                </div>
              </div>
              <div class="panel panel-format">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse2b">
                    Green</a>
                  </h3>
                </div>
                <div id="collapse2b" class="panel-collapse collapse">
                  <div class="panel-body colorPanel">
                      <h3>Brief Description:</h3>
                      <p>GW Taxes offers a more creature-centric build, thanks to cards like Voice of Resurgence and Collected Company, which add a more beat-down aspect to the deck. Noble Hierarch is another addition to the deck that lets the deck to play more expensive, explosive cards including Collected Company and more four drop creatures like Shalai, Voice of Plenty and Linvala, Keeper of Silence. Green also offers a large sum of two drop hatebears that cover a wide range of matchups, from the graveyard eater Scavenging Ooze to the control hoser Gaddock Teeg and many others. The deck can also instead opt to play a more value-town esque build, utilizing land creatures like Azusa, Lost but Seeking and Ramunap Excavator to make quick ruin of the opponent's lands.</p>
                      <h3>Card options:</h3>
                      <ul>
                          <li> Noble Hierarch </li>
                          <li> Scavenging Ooze </li>
                          <li> Qasali Pridemage </li>
                          <li> Knight of Autumn </li>
                          <li> Azusa, Lost but Seeking </li>
                          <li> Ramunap Excavator </li>
                          <li> Courser of Kruphix </li>
                          <li> Loxodon Smiter </li>
                          <li> Eternal Witness </li>
                          <li> Knight of the Reliquary </li>
                          <li> Collected Company </li>
                          <li> Voice of Resurgence </li>
                      </ul>
                      <p><a href="variations/green">Read more about Green-White D&T here!</a></p>
                  </div>
                </div>
              </div>
              <div class="panel panel-format">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse3b">
                    Black</a>
                  </h3>
                </div>
                <div id="collapse3b" class="panel-collapse collapse">
                  <div class="panel-body colorPanel">
                      <h3>Brief Description:</h3>
                      <p>Splashing black gives the deck more removal (Fatal Push) and hate creatures, especially ones that shine in specific matchups (Kambal, Consul of Allocation versus Storm). In addition, the deck also gets to run Dark Confidant, a powerful card advantage engine that can win games if not answered.</p>
                      <h3>Card options:</h3>
                      <ul>
                          <li> Dark Confidant </li>
                          <li> Fatal Push </li>
                          <li> Kambal, Consul of Allocation </li>
                          <li> Orzhov Pontiff </li>
                          <li> Tidehollow Sculler </li>
                          <li> Kitesail Freebooter </li>
                      </ul>
                        <p><a href="variations/black">Read more about Black-White D&T here!</a></p>
                  </div>
                </div>
              </div>
              <div class="panel panel-format">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse4b">
                    Blue</a>
                  </h3>
                </div>
                <div id="collapse4b" class="panel-collapse collapse">
                  <div class="panel-body colorPanel">
                      <h3>Brief Description:</h3>
                      <p>Blue-White Death and Taxes in Modern is interesting- it is often a balance between traditional Death and Taxes and UW/Bant Spirits, as many of the "taxing" card options in splashing blue come in the form of spirits (Mausoleum Wanderer, Spell Queller, etc.).</p>
                      <h3>Card options:</h3>
                      <ul> 
                        <li> Mausoleum Wanderer </li>
                        <li> Meddling Mage </li>
                        <li> Phantasmal Image </li>
                        <li> Spell Queller </li>
                      </ul>
                      <p><a href="variations/blue">Read more about Blue-White D&T here!</a></p>
                  </div>
              </div>
                  </div>
                </div>
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
            <script type="text/javascript" src="/loadpublishinfo.js"></script>
    </body>
</html>
