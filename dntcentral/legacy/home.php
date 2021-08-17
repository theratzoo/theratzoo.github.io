<?php
    include("../scripts/searchscript.php");
    include("../scripts/cardlistdb.php");
    
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

    

        <title>Legacy</title>
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
            
          function previewDeck(name) {
            var img = document.getElementById('deckPreviewImg');
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
            <div class="container-fluid body-div" id="content">
                <div class="jumbotron">
                <h1>Legacy D&T</h1>
            </div>
            <h3>Basic Info:</h3>
            <p>One of the most popular decks in legacy, Death and Taxes utilizes its lands (Wasteland, Rishadan Port) to disrupt the opponent while using Aether Vial to deploy taxing threats (Thalia, Guardian of Thraben, Phyrexian Revoker, Sanctum Prelate, etc.) along with beatdown/value creatures (Stoneforge Mystic, Flickerwisp, Recruiter of the Guard, Brightling, etc), all for free. The deck is labeled as an "aggro control prison deck" due to its capacity to play any single one of those roles, depending on the matchup. For example, Death and Taxes tends to be the controlling deck versus Grixis Delver, while being the beatdown deck versus Lands or Miracles.</p>
            <h3>Decklist examples:</h3>
            <div class="panel-group" id="accordion">
            <div class="panel panel-format">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                    Typical Decklist:</a>
                  </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                  <div class="panel-body"> <div class="row">
                <div class="col-sm-6">
                    <table class="table decklist table-condensed table-responsive">
                        <tbody>
                            <tr>
                                <th>Creatures</th>
                            </tr>
                            <tr><!--mom-->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Mother of Runes</a></td>
                                
                            </tr>
                            <tr><!--reovker-->
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Phyrexian Revoker</a></td>
                                
                            </tr>
                            <tr><!--SFM-->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Stoneforge Mystic</a></td>
                                
                            </tr>
                            <tr><!--thalia-->
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Thalia, Guardian of Thraben</a></td>
                                
                            </tr> 
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Brightling</a></td>
                                
                            </tr>
                                <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Flickerwisp</a></td>
                                
                            </tr> 
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Mirran Crusader</a></td>
                                
                            </tr> 
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Recruiter of the Guard</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Sanctum Prelate</a></td>
                                
                            </tr>
                            <tr>
                                <th>Spells:</th>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Swords to Plowshares</a></td>
                                
                            </tr>
                            <tr>
                                <th>Artifacts:</th>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Aether Vial</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Umezawa's Jitte</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Sword of Fire and Ice</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Batterskull</a></td>
                                
                            </tr>
                            <tr>
                                <th>Lands:</th>
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Cavern of Souls</a></td>
                            </tr>
                            <tr>
                                <td>3&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Karakas</a></td>
                            </tr>
                            <tr>
                                <td>5&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Plains</a></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Rishadan Port</a></td>
                            </tr>
                            <tr>
                                <td>5&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Snow-Covered Plains</a>*</td>
                            </tr>
                            <tr>
                                <td>4&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Wasteland</a></td>
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
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Path to Exile</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Surgical Extraction</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Containment Priest</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Ethersworn Canonist</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Rest in Peace</a></td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Council's Judgment</a></td>
                                
                            </tr>
                            <tr>
                                <td>1&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Sword of War and Peace</a></td>
                                
                            </tr>
                            <tr><!-- Gideon -->
                                <td>2&emsp;<a href="" class="cellA" onclick="return false;" onmouseover="previewDeck(this.text)">Gideon, Ally of Zendikar</a></td>
                            </tr>
                </tbody>
            </table>
            <div>
                <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Mother+Of+Runes&type=card" id="deckPreviewImg">
            </div>
                
            </div>
            <br>
            <br>
                <p style="padding-left:25px;">*Not necessary for the deck, but gives you a very small edge vs. miracles, as it halves their hit rate of casting a blind Predict on you naming plains.</p>
            </div></div>
                </div>
                
              </div>
              
              </div>
            
            
            <div class="row">
                <div class="col-md-6">
                    <h3>Staples:</h3>
                    <p>The majority of cards in Legacy Death and Taxes are seen in any competitive lists. The reason for the lack of variance is due to the nature of the format- it is slow to evolve and tested heavily- resulting in the "ideal lists" being found quickly and kept stable. While some builds do cut a few of these staples, it generally results in less consistent results, so it is advised not to unless you're very experienced with the deck.</p>
                    <h4>DnT Staples:</h4>
                    <ul class="cardList">
                        <li> Aether Vial </li>
                        <li> Mother of Runes </li>
                        <li> Stoneforge Mystic Package </li>
                        <li> Thalia, Guardian of Thraben </li>
                        <li> Flickerwisp </li>
                        <li> Swords to Plowshares </li>
                    </ul>
                </div>
                <div class="col-md-6">
                <h3>Flex Spots:</h3>
            <p>Typically, Legacy Death and Taxes has a few cards in the main deck that can be swapped out without harm to the deck's win percentage. These choices are usually determined by individual metas, what cards are good against bad matchups, or just spicey one-ofs. For example, most lists run around 3 Brightlings and few (if any) Serra Avengers, as opposed to a more even split, due to the presence of slower decks like Miracles on top of the meta and the many abilitys on Brightling make it nearly immune to removal. Some examples of cards that can be played main deck but are not staples include Vryn Wingmare, Spirit of the Labyrinth, Thalia, Heretic Cathar, and Palace Jailor.</p>
                </div>
            </div>
            <h3>Sideboarding:</h3>
            <p>Sideboarding is similar to flex spots, as a large sum of it is dependent on your meta or personal favorites. The list above reflects a typical sideboard in the current meta, but it is worth noting that some cards are more valuable than others. For example, if creature-combo decks like Sneak and Show and Reanimator lose presence in the meta, than a Containment Priest can easily be shaved, while Council's Judgment is harder to logically cut due to its flexibility and the necessity of having answers to True-Name Nemesis in the 75.</p>
            <h3>General Card Tips and Tricks:</h3>
                    <h4>Lands</h4>
                    <h6>Which land do I play first?</h6>
                    <p>If you know what deck you're playing against, ask yourself, do they have Wasteland or not? The majority of the time you would rather play a plains than a nonbasic land turn one whenever you are against an unknown deck, as getting Wastelanded hurts your deck a ton (unless you have an Aether Vial). </p>
                    <h6>Other lands not in typical decklists:</h6>
                     <p>You have tons of options in Legacy for which lands to play, especially in Legacy. These include: </p>
                     <ul class="cardList">
                         <li> Mishra's Factory </li>
                         <li> Horizon Canopy </li>
                         <li> Ghost Quarter </li>
                         <li> Field of Ruin </li>
                         <li> Flagstones of Trokair </li>
                     </ul>
                         <p> Playing around with these lands as flex spots is always fun and can even be a powerful choice whenever the meta favors them. Usually they are only played as a one of, but it can vary.</p><!-- FUTURE: add a brief description on each of these lands -->
                     <br>
                     <!--<h4>Creatures:</h4> more to come later... -->
            
            <h3><a class="tA" href="individualcards">Individual Card discussions:</a></h3>
            <p><a class="fA tA" href="individualcards">Click here</a> to visit the full write ups for each individual card in a typical Death and Taxes list. Note: this page is incomplete, with more being added daily. Other less-renowned  cards will be added in the future after more testing with them is performed (Thalia, Heretic Cathar, Vryn Wingmare, Spirit of the Labyrinth, etc.)</p>
            
            
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

