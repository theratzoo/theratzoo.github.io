<?php
    include("../../../scripts/searchscript.php"); //actually works
    
?>
<?php
    include("../../../scripts/cardlistdb.php"); //does work
?>
<?php
    $filename = 'gifts storm.php';
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

    <meta name="description" content="Modern matchup guide against Gifts Storm for B/W EldrazI and Taxes.">
    <meta name="keywords" content="Magic the Gathering, modern, b/w eldrazi and taxes, dnt, modern dnt, ent, eldrazi and taxes, storm, combo, gifts ungiven, matchup, thalia">

        <title>Modern Matchup Guide: Gifts Storm</title>
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
            include("../../../scripts/navbar.php"); 

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
                <div class="row">
                    <div class="col-sm-9">
                        <h1>Matchup Guide: Gifts Storm</h1>
                    </div>
                    <div class="col-sm-3">
                        <h2><a href="#tldr">TL;DR</a></h2>
                    </div>
                </div>
                
            </div>
            <div class="row">
                    <div class="col-4 mug-img">
                        <img src="/images/modern/matchupguides/gifts storm/baral-art.jpeg" class="headImg" alt="Baral, Chief of Compliance">
                    </div>
                    <div class="col-4 mug-img">
                        <img src="/images/modern/matchupguides/gifts storm/grapeshot-art.jpg" class="headImg" alt="Grapeshot">
                    </div>
                    <div class="col-4 mug-img">
                        <img src="/images/modern/matchupguides/gifts storm/past-in-flames-art.jpg" class="headImg" alt="Past in Flames">
                    </div>
                </div>
                <br>

                <!--INSERT 2-3 IMAGES SIDE BY SIDE HERE-->
                <br>
                <!--INSERT DECKLIST HERE (that can be collappsed)-->
                <!--INSERT SAMPLE E&T LIST HERE-->
                <div class="panel-group" id="accordion">
            <div class="panel panel-format">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                    Gifts Storm Stock List</a>
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
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Baral, Chief of Compliance</a></td>
                                
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Goblin Electromancer</a></td>
                                
                            </tr> 
                            
                            <tr>
                                <th>Spells:</th>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Opt</a></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Repeal</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Serum Visions</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Sleight of Hand</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Desperate Ritual</a></td>
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Grapeshot</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Manamorphose</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Pyretic Ritual</a></td>
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Remand</a></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Unsubstantiate</a></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Empty the Warrens</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Gifts Ungiven</a></td>
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Past in Flames</a></td>
                            </tr>
                            
                            <tr>
                                <th>Lands:</th> 
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Island</a></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Mountain</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Shivan Reef</a></td>
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Snow-Covered Island</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Spirebluff Canal</a></td>
                            </tr>  
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Steam Vents</a></td>
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
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Flame Slash</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Gigadrowse</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Lightning Bolt</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Abrade</a></td>
                                
                            </tr>

                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Echoing Truth</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Negate</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Dismember</a></td>
                                
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Pieces of the Puzzle</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Wipe Away</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeckOne(this.text)">Empty the Warrens</a></td>
                                
                            </tr>
                </tbody>
            </table>
            <br>
            <div>
                <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Baral,+Chief+of+Compliance&type=card" id="deckPreviewImgOne">
            </div>

            <br>
            
            </div>
                
            </div>

        </div>
                </div>
              </div>

              <br>
              <!-- E&T -->
            <div class="panel panel-format">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                    Sample E&T List- Black-White Eldrazi and Taxes</a>
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
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Leonin Arbiter</a></td>
                                
                            </tr>
                            
                            <tr><!-- thalia -->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Thalia, Guardian of Thraben</a></td>
                                
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Tidehollow Sculler</a></td>
                                
                            </tr> 
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Blade Splicer</a></td>
                                
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Eldrazi Displacer</a></td>
                                
                            </tr>
                            <tr><!-- flickerwisp -->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Flickerwisp</a></td>
                                
                            </tr> 
                            <tr><!--Resto-->
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Wasteland Strangler</a></td>
                                 
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Thought-Knot Seer</a></td>
                                
                            </tr>

                            <tr>
                                <th>Spells:</th>
                            </tr>
                           <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Path to Exile</a></td>
                                
                            </tr>
                            
                            <tr>
                                <th>Artifacts:</th>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Aether Vial</a></td>
                                
                            </tr>
                            <tr>
                                <th>Lands:</th>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Caves of Koilos</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Concealed Courtyard</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Eldrazi Temple</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Ghost Quarter</a></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Godless Shrine</a></td>
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Plains</a></td>
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Shambling Vent</a></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Swamp</a></td>
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
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Burrenton Forge-Tender</a></td>
                                
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Fatal Push</a></td>
                                
                            </tr>
                           
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Rest in Peace</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Stony Silence</a></td>
                                
                            </tr>

                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Kambal, Consul of Allocation</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Orzhov Pontiff</a></td>
                                
                            </tr>
                            <tr><!-- Gideon -->
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Gideon, Ally of Zendikar</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Settle the Wreckage</a></td>
                                
                            </tr>
                            
                            
                    
                </tbody>
            </table>
            <br>
            <div>
                <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Leonin+Arbiter&type=card" id="deckPreviewImg">
            </div>

            <br>
            
            </div>
        </div>

        </div>
                </div>
              </div>
          </div>
                <h2>Matchup Overview</h2>
                <p>Overall, the matchup is favorable for B/W Eldrazi and Taxes. Gifts Storm's gameplan is one that is easily disrupted by the primary hatebears seen in B/W Eldrazi and Taxes. In addition, cards such as Path to Exile and Flickerwisp help slow down Gifts Storm, while Thought-Knot Seer and Tidehollow Sculler break up their combo. The matchup is one that must be won quickly, as the opponent can win through your disruption if they garner enough resources. Post-board, further disruptive spells in the form of removal and graveyard hate make the already favorable matchup easier. All in all, Gifts Storm is about 60-65% in B/W Eldrazi and Taxes's favor, as their strategy is vulnerable to the plethora of disruption available in B/W Eldrazi and Taxes.</p>
                <hr>
                <h2>Preboard Specifics</h2>
                <br>
                <h3>How Game 1 Plays Out</h3>    
                <p>Since Gifts Storm is a combo deck, finding key cards is essential to winning game one. This first game is often determined by whether or not the B/W Eldrazi and Taxes player finds their hatebears or removal spells for the opponent's Baral, Chief of Compliance/Goblin Electromancer. Without any disruption, the opponent can go off as early as turn three. However, since there are 15 cards that will tax the opponent's mana in your preboard deck, the odds are in your favor that you will find them. In addition, Thought-Knot Seer and Tidehollow Sculler can disrupt their plan.</p>
                <br>
                <p>While finding these disruptive spells is important to not dying, winning is a separate issue that must be addressed. The more time Gifts Storm gets, the more likely they can sculpt their hand to combo off. Even with a Thalia, Guardian of Thraben in play, the opponent can find a win with enough time. Therefore, it is important to be very aggressive and deploy your threats sooner than later.</p>
                <br>
                <p>Essentially, game one is a race against the Gifts Storm opponent's combo. A quick summary of the opponent's combo is that, with a spell-reducing creature such as Baral, Chief of Compliance or Goblin Electromancer, they can cast enough spells to win off of Grapeshot or Empty the Warrens. Specifically, the primary win stems from a combination of Desperate Rituals, Pyretic Rituals, and Manamorphoses being cast alongside a Gifts Ungiven. If the opponent resolves Gifts Ungiven with three mana let along with a cost-reducing creature, they will win (assuming no disruption is in play). However, with the hatebears, removal, and hand disruption, it makes it difficult for the opponent to achieve this combo. Therefore, often times you will be able to disrupt and attack them down to zero life before they win through their combo.</p>
                <br>
                <h3>Death and Taxes's Cards in the Matchup</h3>
                <br>
                <div class="row">
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Thalia,+Guardian+of+Thraben&type=card" class="cardImgMUG" alt="Thalia, Guardian of Thraben">
                    </div>
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Leonin+Arbiter&type=card" class="cardImgMUG" alt="Leonin Arbiter">
                    </div>
                </div>
                <br>
                
                <p>Thalia, Guardian of Thraben is B/W Eldrazi and Taxes's best card against Gifts Storm. A two-mana creature that taxes their noncreature spells is very powerful against the noncreature spell combo deck. While Gifts Storm can win with a Thalia, Guardian of Thraben in play, it is very difficult and slow. In order for them to get their ideal combo off, they must have two cost-reducing creatures in play. To do that would take at least one extra turn. With that extra turn, other forms of disruption can be deployed, making their life that much harder. Essentially, with a Thalia, Guardian of Thraben in play, the opponent is slowed down by one turn at worst. At best, they cannot combo off due to her tax. Gifts Storm does not run many removal spells in their main deck, but an Unsubstantiate is common. Protecting Thalia, Guardian of Thraben from any removal/bounce is essential, as she is our best way at stopping their combo.</p>
                <br>
                <p>Leonin Arbiter's tax is good for two primary reasons. The obvious positive is its interaction with Ghost Quarter. Strip Mining the opponent's lands is important, as cutting the combo deck off of lands helps slow down their combo. Combine that with Thalia, Guardian of Thraben and you can easily lock them out of the game. In addition, Leonin Arbiter taxes their namesake card, Gifts Ungiven. With a Leonin Arbiter in play, they must pay its tax if they wish to cast Gifts Ungiven. This usually means that they need at least two more mana to combo off. While Thalia, Guardian of Thraben is best put into play immediately, saving Leonin Arbiter for an end of turn Gifts Ungiven is wise, assuming an Aether Vial on two is in play. All in all, both hatebears are valuable creatures to have against the combo deck.</p>
                <br>
                <div class="row">
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" class="cardImgMUG" alt="Flickerwisp">
                    </div>
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Blade+Splicer&type=card" class="cardImgMUG" alt="Blade Splicer">
                    </div>
                </div>
                <br>
                <p>Flickerwisp is strong if used to its full potential. As a 3/1 flyer for three mana, Flickerwisp is underwhelming. However, in conjunction with other blink creatures or an Aether Vial, Flickerwisp provides key disruption against the opponent. As long as Flickerwisp can enter the battlefield on your end step, it can take the opponent off of valuable resources for their turn, slowing them down. The most common use is Flickerwisping the opponent's Baral, Chief of Compliance/Goblin Electromancer at the end step. Taking the opponent off of a land is also fine, especially if they lack a mana-reducer. Finally, Flickewisping one of our creatures is a fine play too. Getting an extra Golem, taking a card from their hand, or saving a Thalia, Guardian of Thraben are fine plays. One slight issue with the latter is that Thalia, Guardian of Thraben would not return until the next end step, so keep that in mind before saving her.</p>
                <br>
                <p>Blade Splicer is a fine creature. The main thing that it does is attacks. Four power for three mana is not bad, but the biggest advantage is that Blade Splicer can be blinked with Flickerwisp or Eldrazi Displacer to significantly increase our clock. Blade Splicer is also a good defender if the opponent is on the Empty the Warrens plan. While Blade Splicer does not disrupt the opponent, it is not a bad offensive creature. Having a deck full of disruption but no damage is a good way to lose against Gifts Storm, as they can pull off a win if given enough time. Therefore, while not a disruptive spell, Blade Splicer provides some important damage for B/W Eldrazi and Taxes.</p>
                <br>
                <div class="row">
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Tidehollow+Sculler&type=card" class="cardImgMUG" alt="Tidehollow Sculler">
                    </div>
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Thought-Knot+Seer&type=card" class="cardImgMUG" alt="Thought-Knot Seer">
                    </div>
                </div>
                <br>
                <p>Tidehollow Sculler is a very strong card against Gifts Storm, especially preboard. Without much removal, Tidehollow Sculler more often than not keeps the card exiled permanently. Tidehollow Sculler is obviously best on turn two or three, but it is still relevant later in the game. The Gifts Storm opponent often needs specific cards in hand in order to combo off, making Tidehollow Sculler useful. The cards to prioritize with Tidehollow Sculler's ability will be the same as Thought-Knot Seer's, which will be discussed below.</p>
                <br>
                <p>Likewise, Thought-Knot Seer is an excellent disruptive creature. It is a little expensive at four mana, but its effect is worth it. Thoughtseizing the opponent is very powerful against the combo deck. The most common card to take out of the Gifts Storm opponent's hand is their payoff card, such as Gifts Ungiven or Past in Flames. If they have multiple payoff spells or they are very short on mana, taking one of their rituals or Manamorphoses is a better option. If the opponent has zero cost-reducing creatures in play but one in hand, taking that is fine as well. Finally, if their hand consists of rituals, Past in Flames, and a storm card (but no Gifts Ungiven), then taking the storm card is the best play. Essentially, it is important to learn which card is the best to take. My general advice is to go through the opponent's combo in your head given the cards they have. Whichever card is the most valuable for that combo is the one that should be taken away. While Thought-Knot Seer draws the opponent a card when it leaves the battlefield, it is a great creature to blink. Take all of their payoff cards while leaving them with rituals, lands and mana-creatures when blinking Thought-Knot Seer. Blinking Tidehollow Sculler can also be fine, but only if it can be done in a way that the opponent loses a card permanently. Therefore, with only one Eldrazi Displacer activation available, it is better to use it on Thought-Knot Seer. However, with two or more activations available per turn, Tidehollow Sculler is a better card to shred the opponent's hand, as manipulating the stack properly results in the opponent losing one card per additional Tidehollow Sculler blink. All in all, both Tidehollow Sculler and Thought-Knot Seer are excellent cards in the matchup, as their hand-disruption abilities work well against the combo deck.</p>
                
                <br>
                <div class="row">
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Wasteland+Strangler&type=card" class="cardImgMUG" alt="Wasteland Strangler">
                    </div>
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="cardImgMUG" alt="Eldrazi Displacer">
                    </div>
                </div>
                <br>
                <p>Wasteland Strangler is great as additional removal spells. All of the opponent's creatures have toughness below four, making Wasteland Strangler a lethal Eldrazi. That being said, it is trickier to have an unimpactful exiled card for Wasteland Strangler's ability. If the only cards the opponent has exiled are spells, then returning one to the graveyard gives them some value. Past in Flames is a card played by Gifts Storm, which gets better with additional spells in their graveyard. Therefore, there are some spells that are not worth returning to the opponent's graveyard, such as a Past in Flames. Also, if the opponent has a Past in Flames in graveyard or hand, think twice before returning a ritual or Gifts Ungiven to their graveyard. Generally, unless it is Past in Flames, it is worth returning a card to their graveyard as long as Wasteland Strangler is removing the opponent's only cost-reducing creature. If they have multiple in play, however, it might not be worth giving them the extra Gifts Ungiven. One cost-reducer makes their rituals only one mana, while a second only reduces the cost Gifts Ungiven and Past in Flames. All that being said, Wasteland Strangler is still an excellent spell. Classic removal spells are risky against Gifts Storm, as they can be dead in our hand while the opponent wins with an Empty the Warrens. Wasteland Strangler, however, can always be a fine beater at worst, making is one of our strongest spells in the Gifts Storm match.</p>
                <br> 
                <p>Eldrazi Displacer is a fine card against Gifts Storm. Its ability can target Tidehollow Sculler/Thought-Knot Seer, taking the opponent's best cards. Flickerwisp is another creature that is very good with Eldrazi Displacer, as one or more permanents can be exiled temporarily per turn with that combination. Otherwise, Eldrazi Displacer is a 3/3 for three-mana that can protect your creatures. Eldrazi Displacer is not the best against Gifts Storm, but its high potential makes it a fine card in the match, especially when the opponent brings in their removal spells post-board.</p>            
                <br>
                <div class="row">
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Aether+Vial&type=card" class="cardImgMUG" alt="Aether Vial">
                    </div>
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Path+to+Exile&type=card" class="cardImgMUG" alt="Path to Exile">
                    </div>
                </div>
                <br>
                
                <p>Aether Vial is very good with certain cards. As mentioned above, Aether Vial can lead to plays such as bringing in an unexpected Leonin Arbiter or flashing in Flickerwisp at the end step. Another advantage with Aether Vial is that it can bring a creature into play after it gets bounced by an Unsubstantiate or Echoing Truth. Otherwise, Aether Vial is a fine card at speeding up our game plan in order to close out the game sooner rather than later. Path to Exile is better than it looks. Removing one of the opponent's mana-reducers helps a lot at slowing them down. There are games that the Gifts Storm wins without a mana-reducing creature, but those are difficult to reach, especially with cards such as Thalia, Guardian of Thraben in our deck.</p>
                <br>
                <br>
                <div class="row">
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Goblin+Electromancer&type=card" class="cardImgMUG" alt="Goblin Electromancer">
                    </div>
                    <div class="col-6">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Unsubstantiate&type=card" class="cardImgMUG" alt="Unsubstantiate">
                    </div>
                </div>
                <br>
                
                <h3>Cards to Look Out for- Gifts Storm</h3>
                <p>The primary cards to look out for are their combo pieces and interaction. Both of their cost-reducing creatures, Goblin Electromancer and Baral, Chief of Compliance, are often cast in hopes of comboing off in the following turn. Removing or disrupting the opponent should be done immediately after one of these hits the battlefield. Another noteworthy play is an end of turn Gifts Ungiven, sometimes fueled by a Pyretic/Desperate Ritual. Gifts Ungiven during the end step usually means that the opponent is struggling to piece together their combo. The Gifts Ungiven piles often consist of cost-reducers, cantrips, and/or an additional Gifts Ungiven to help them setup for a later win. Also, an end of turn Gifts Ungiven can be used to find interaction to answer our hatebears, although this is more commonly done in the post-board games. One note about their interaction is that, while the opponent does not have a lot of it game one, it cannot be ignored. Unsubstantiate or Repeal on our hatebear on the end step can let them win a losing game. The best way to prevent this from happening is to leave up protection for Thalia, Guardian of Thraben. Just make sure that you do not slow down your clock by doing this.</p>
                <br>
                <br>
                
                <h3>Strategies and Interactions</h3>
                <p>One key strategy to victory against Gifts Storm is to disrupt the opponent as much as possible. Using cards such as Flickerwisp and Eldrazi Displacer to take the opponent off of a land or two for their turn slows them down. Sometimes, however, it is better to leave a Flickerwisp trigger for their turn, in case the opponent casts a cost-reducing creature. Another important strategy is using Thought-Knot Seer and Tidehollow Sculler optimally. Ideally, it is best to use it on the opponent's draw step when able, in order to maximize the number of cards they have in hand and the amount of information you will gain. That information garnered through seeing their hand is very useful, as it can tell you when it is best to hold up disruption versus cast creatures to kill the opponent. One important interaction that is especially useful against Gifts Storm is Leonin Arbiter plus a blink effect. If the opponent pays for Leonin Arbiter's tax and you gain priority before their Gifts Ungiven resolves, then blinking Leonin Arbiter with an Eldrazi Displacer will force the opponent to pay an additional two mana.</p>

                <br>
                <hr>
                <h2>Postboard Specifics</h2>
                <br>
                <h3>Sideboarding</h3>
                <br>
                <div class="row">
                    <div class="col-2">
                        <h4>In:</h4>
                    </div>
                    <div class="col-9">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Fatal+Push&type=card" class="cardImgMUG" alt="Fatal Push">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Fatal+Push&type=card" class="cardImgMUG" alt="Fatal Push">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Fatal+Push&type=card" class="cardImgMUG" alt="Fatal Push">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Rest+in+Peace&type=card" class="cardImgMUG" alt="Rest in Peace">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Rest+in+Peace&type=card" class="cardImgMUG" alt="Rest in Peace">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Rest+in+Peace&type=card" class="cardImgMUG" alt="Rest in Peace">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Kambal,+Consul+of+Allocation&type=card" class="cardImgMUG" alt="Kambal, Consul of Allocation">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Kambal,+Consul+of+Allocation&type=card" class="cardImgMUG" alt="Kambal, Consul of Allocation">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Orzhov+Pontiff&type=card" class="cardImgMUG" alt="Orzhov Pontiff">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Orzhov+Pontiff&type=card" class="cardImgMUG" alt="Orzhov Pontiff">
                    </div>
                </div>
                <p>In general, the best cards to board in against Gifts Storm include interaction against their combo. As mentioned above, removal works as a disruptive spell, as it is difficult for Gifts Storm to win without a cost-reducer in play, especially if Thalia, Guardian of Thraben is taxing their spells. Cards that remove these cost-reducers, such as Fatal Push, are good to board in. Even though Gifts Storm only runs about seven cost-reducers, their cantrips help them find one of these creatures by turn three. That being said, with Wasteland Strangler, boarding in three Fatal Pushes brings us to ten potential removal spells. That is excessive, but Fatal Push is not the worst of the three, so bring them all in. Graveyard hate is an important form of disruption against Gifts Storm. With Rest in Peace, the opponent cannot use their Past in Flames. In addition, Rest in Peace makes Gifts Ungiven worse, as the two cards put in the opponent's graveyard are gone forever. Rest in Peace is a very hard card for Gifts Storm to win through, as it is difficult for them to cast enough spells without their graveyard. Usually, Empty the Warrens is their only feasible win condition unless the opponent can answer your Rest in Peace.</p>
                <br>
                <p>Two creatures are also brought in. Kambal, Consul of Allocation is a must-answer for Gifts Storm. While he does not tax their mana, his ability will leave the opponent dead before they can cast a lethal Grapeshot. The incremental life gained from Kambal, Consul of Allocation is helpful for dodging a lethal Grapeshot or surviving a turn when the opponent is on the Empty the Warrens plan. Speaking of that plan, Orzhov Pontiff is an excellent way in answering that spell. Its ability kills all of the 1/1 goblins, making it a very clean answer to Empty the Warrens. In addition, Orzhov Pontiff is flexible if the opponent is not on the Empty the Warrens plan. Orzhov Pontiff can buff our team, getting in extra damage. It can also kill their cost-reducers if blinked enough times in a single turn. While many Empty the Warrens answers do not get boarded in, Orzhov Pontiff does, as it is a card that is quite relevant even if the opponent lacks Goblins.</p>
                <br>
                <p>Burrenton Forge-Tender almost makes it in. While Burrenton Forge-Tender does not stop bounce spells, it does protect Thalia, Guardian of Thraben from (one) Grapeshot, Lightning Bolt, and other red removal spells. As of now, there are enough red removal spells played in Gifts Storm to bring in Burrenton Forge-Tenders but cases exist that make it a bad card to bring in. Essentially, if you are bringing in around eight cards before Burrenton Forge-Tenders, it is probably fine to leave them in the sideboard. The more cards you bring in, the fewer threats you will have in your deck, making the games drag out. As mentioned before, slower games are not favorable for B/W Eldrazi and Taxes, as it gives the combo deck more time to find answers to hatebears or their storm pieces to go off. Out of all of the above cards, Burrenton Forge-Tender is certainly the weakest. As we are already bringing in ten powerful spells, it is best to leave Burrenton Forge-Tender in the sideboard.</p>
                <br>
                <p>In terms of other cards to bring in, anti-storm cards such as Eidolon of Rhetoric, Ethersworn Canonist, and Rule of Law are excellent. Shalai, Voice of Plenty is also a great spell, as the opponent must answer her in order to cast their Gifts Ungiven or a lethal Grapeshot. One aspect worth discussing is whether or not to bring in Worship. While the opponent must answer Worship to win, it is not hard for them to find a bounce spell for the four mana enchantment. The reason Shalai, Voice of Plenty is better than Worship is that she can come off of Aether Vial, does not get taxed by Thalia, Guardian of Thraben, is a good attacker, and can be protected by Eldrazi Displacer. I have found Worship to be too slow and too clunky against Storm. Another interesting aspect in regards to sideboarding is whether or not to bring in niche answers to Empty the Warrens, such as Auriok Champion and Settle the Wreckage. I have personally found both to be too awkward, as they are almost useless when Empty the Warrens is not the opponent's plan. Auriok Champion must also be in play before Empty the Warrens is cast. While that is not always an issue, it can force you into situations where you play Auriok Champion instead of graveyard hate or removal and end up dying to Grapeshot.</p>
                <br>
                <div class="row">
                    <div class="col-3">
                        <h4>Out (Play and Draw):</h4>
                    </div>
                    <div class="col-9">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Path+to+Exile&type=card" class="cardImgMUG" alt="Path to Exile">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Path+to+Exile&type=card" class="cardImgMUG" alt="Path to Exile">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Blade+Splicer&type=card" class="cardImgMUG" alt="Blade Splicer">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Blade+Splicer&type=card" class="cardImgMUG" alt="Blade Splicer">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" class="cardImgMUG" alt="Flickerwisp">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" class="cardImgMUG" alt="Flickerwisp">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" class="cardImgMUG" alt="Flickerwisp">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" class="cardImgMUG" alt="Flickerwisp">
                        
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Aether+Vial&type=card" class="cardImgMUG" alt="Aether Vial">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Aether+Vial&type=card" class="cardImgMUG" alt="Aether Vial">

                    </div>
                </div>
                
                <p>As mentioned in the previous section, too many removal spells will be in the deck post-board. Out of all three of them, Path to Exile is the worst. Wasteland Strangler, while not always a removal spell, is a fine threat. Post-board, it is important to be careful about taking out too many threats, as longer games are not always favorable for B/W Eldrazi and Taxes. Path to Exile does exile the creature, making Wasteland Strangler's ability active. However, giving the opponent a land outweighs the small upside.</p>
                <br>
                <p>The next card that gets cut is Blade Splicer. It provides no disruption, only a strong attacker for three mana. Blade Splicer simply does not do enough to warrant a spot post-board. If it was cheaper or gave some disruption it would be fine. That being said, there are simply better options than Blade Splicer. If you are playing the B/W Eldrazi and Taxes build with two Lingering Souls, they can be cut as well. Not only are they expensive threats, but they are hurt by Rest in Peace.</p>
                <br>
                <p>Two Aether Vials are cut after the Blade Splicers. Aether Vial is still very good against Gifts Storm, as it gives B/W Eldrazi and Taxes both speed and stronger interaction. However, with so many disruptive, slower spells coming in, Aether Vial loses value. If Aether Vial is not cut, then another threat would have to take the ax. This would make B/W Eldrazi and Taxes too slow. Therefore, two is a good number of Aether Vials to cut.</p>
                <br>
                <p>Finally, all four Flickerwisps are cut. After looking at the prior cuts, Flickerwisp looks a lot worse. With only two Aether Vials, Flickerwisp has a much harder time disrupting the opponent. In addition, Blade Splicer is no longer a target for Flickerwisp. Cutting Flickerwisp does get rid of the sweet Wasteland Strangler plus Flickerwisp interaction, but sacrifices have to be made for the greater good.</p>
                
                <br>
                <h4>What the Opponent Brings In</h4>
                <div class="row">
                    <div class="col-12">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Dismember&type=card" class="cardImgMUG" alt="Dismember">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Lightning+Bolt&type=card" class="cardImgMUG" alt="Lightning Bolt">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Abrade&type=card" class="cardImgMUG" alt="Abrade">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Wipe+Away&type=card" class="cardImgMUG" alt="Wipe Away">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Pieces+of+the+Puzzle&type=card" class="cardImgMUG" alt="Pieces of the Puzzle">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Empty+the+Warrens&type=card" class="cardImgMUG" alt="Empty the Warrens">
                    </div>
                </div>
               
                <p>The primary cards that Gifts Storm brings in are removal spells, bounce spells, and value cards. The first category, removal spells, are primarily meant to take out hatebears like Thalia, Guardian of Thraben, Leonin Arbiter, and Kambal, Consul of Allocation. The most common removal spells include Dismember, Lightning Bolt, Flame Slash, and Abrade. While Dismember is typically the most problematic due to Burrenton Forge-Tender's failure in stopping it, the life loss makes it quite bad against Kambal, Consul of Allocation. The second category, bounce spells, are meant to temporarily answer both our hatebears and disruptive noncreature permanents. Cards such as Echoing Truth, Wipe Away, Repeal, and Unsubstantiate can deal with Rest in Peace and other graveyard hate in addition to Thalia, Guardian of Thraben, Leonin Arbiter, and Kambal, Consul of Allocation. The only issue with these spells is that they do not permanently remove our cards. Therefore, these are often cast right before the Gifts Storm opponent is planning on going off. The final category, value cards, are spells that grant the opponent an advantage. Pieces of the Puzzle serves as both card draw and card selection while fueling their graveyard. Even though it seems slow, Pieces of the Puzzle lets the opponent find their removal and bounce spells to fight through our disruption, making it an auto-include. Empty the Warrens is a very powerful card in the matchup. Even though it may also seem slow, it is much easier for the opponent to win with an Empty the Warrens through graveyard hate compared to a Grapeshot. Looking at the sideboard of the sample Gifts Storm list, it may seem that they are bringing in over ten cards. That being said, they are limited to the number of cards they can bring in, as the more cards they cut, the less consistent their combo is. Cantrips such as Opt, Serum Visions, and Sleight of Hand are expendable, but losing that card selection will slow down Gifts Storm by at least a turn or two. Therefore, it is rare to see a Gifts Storm deck full of bounce, removal, and alternative win conditions, but it is still important to recognize all the cards that can come in.</p>
                <br>
                <h3>How the Matchup Plays Out Post-board</h3>
                <br>
                <p>As alluded to above, the post-board games go longer than the preboard one. With significantly more interaction on both sides of the field, the games focus more on resource-management and pressure. Due to the extra disruption brought in, the opponent will often lack answers to all of our creatures. When deciding whether to keep or mulligan, look for hands with multiple disruptive spells. Cards such as Kambal, Consul of Allocation, Thalia, Guardian of Thraben, and Rest in Peace are especially valuable disruptive spells. In addition, before keeping a hand, make sure that there is a clear path to victory. A hand with all disruption but no win conditions can easily lose. Gifts Storm gets access to a ton of removal and bounce spells, so leaving up Eldrazi Displacer activations to protect Thalia, Guardian of Thraben or Kambal, Consul of Allocation should be done whenever possible. The post-board games are about as favorable as the preboard ones, as both decks get tools to fight the other one. One way that I have gotten an advantage post-board is through Rest in Peace. While the card does not attack, it does an excellent job at stopping Gifts Storm's gameplan. Even if they answer Rest in Peace, there is a good chance that it already exiled rituals from their graveyard. If the Gifts Storm opponent cannot find one of their scarce bounce spells, then the only conceivable way for Gifts Storm to win is with Empty the Warrens. It is important to prioritize removal spells with Tidehollow Sculler and Thought-Knot Seer unless the opponent has a lethal hand. Also, when deploying threats, try to bait out removal if possible before casting Thalia, Guardian of Thraben or Kambal Consul of Allocation. The latter is our most valuable threat closely after Thalia, Guardian of Thraben.</p>
                <br>
                <hr>
                <h3>Conclusion</h3>
                <p>All in all, Gifts Storm is a favorable matchup for B/W Eldrazi and Taxes due to the effectiveness of its disruption against the combo deck. Thalia, Guardian of Thraben and Leonin Arbiter hamper the opponent's gameplan game one, while Rest in Peace and Kambal, Consul of Allocation further tax their combo post-board. Despite the opponent's access to bounce spells and removal both preboard and post-board, blinkers can protect our hate spells. The matchup is about 60% in our favor but can vary based on understanding the matchup. As someone who formally played Gifts Storm in Modern, I would recommend playing the matchup on the Gifts Storm side if struggling even after consuming this matchup guide. Learning how to win through hatebears and graveyard hate can enlighten a B/W Eldrazi and Taxes player on how to effectively use and protect your key spells.</p>
                <br>
                <div class="panel-group" id="accordion4">
                        <div class="panel panel-format">
                        <div class="panel-heading">
                          <h3 class="panel-title">
                            <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion4" href="#collapse1d" id="tldr">
                            TL;DR- Gifts Storm Matchup</a>
                          </h3>
                        </div>
                        <div id="collapse1d" class="panel-collapse collapse">
                          <div class="panel-body">
                              <p>Gifts Storm is a favorable matchup for B/W Eldrazi and Taxes because of B/W Eldrazi and Taxes's disruption against the opponent's combo. Deploying disruptive pieces early is important, but after that, we are the aggressive deck, as a later game favors Gifts Storm. The first game is typically decided based on how well B/W Eldrazi and Taxes can disrupt and attack the opponent, and if the opponent can win through that disruption in time. Therefore, cards such as Thalia, Guardian of Thraben, Leonin Arbiter, Path to Exile, Wasteland Strangler, Tidehollow Sculler, and Thought-Knot Seer are valuable at hurting their combo. At the same time, offensive creatures such as Blade Splicer and Flickerwisp are required to win before they garner enough resources to storm off. Keeping Aether Vial on two is a good idea if you can afford to without losing tempo, as it lets us bring Thalia, Guardian of Thraben, Tidehollow Sculler, or Leonin Arbiter into play if the opponent bounces one of those two drops.</p>
                              <br>
                              <p>When sideboarding, bring in disruptive spells and ways to protect them. Rest in Peace plus other graveyard hate spells come in to fight their Past in Flames, while additional removal spells such as Fatal Push takes them off of a cost-reducing creature. Orzhov Pontiff comes in to fight Empty the Warrens, while Kambal, Consul of Allocation is self-explanatory. The cards to cut include a couple of Path to Exiles and Aether Vials to keep the threat count high enough. Blade Splicer and Flickerwisp are fully cut, as they not impactful enough. The post-board games are focused more on interaction and attrition, as the opponent gets access to both. Their suite of removal and bounce spells makes disrupting them harder, but still necessary, while cards such as Pieces of the Puzzle and Empty the Warrens give them a way to win through disruption. Disruptive gameplay is very important to winning the post-board games. Protecting our hatebears is important, best done by baiting the opponent's kill spells before deploying Kambal, Consul of Allocation/Thalia, Guardian of Thraben. Otherwise, make sure you are fast enough to win before they answer all of your hate.</p>
                          </div>
                        </div>
                      </div>      
              </div>
                <br>
                <hr>
                <h4>Additional Content</h4>
                <div class="row">
                    <div class="col-sm-4">
                        <h2><a href="infect">Previous Matchup Guide: Infect</a></h2>
                    </div>
                    <div class="col-sm-4" id="latestArticle">
                        <h2><a href="/articles/entcomparison">Latest Addition: Eldrazi and Taxes Comparison</a></h2>
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
                include("../../../scripts/footer.php");
            ?>
            <script>var jStr = <?php echo json_encode($lastModDate); ?>;</script>
            <script src="/loadpublishinfo.js" type="text/javascript"></script>
    </body>
</html>
