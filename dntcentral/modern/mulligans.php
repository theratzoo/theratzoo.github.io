<?php
    include("../scripts/searchscript.php");
    include("../scripts/cardlistdb.php");
?>
<?php
    $filename = 'mulligans.php';
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
    <meta name="description" content="Strategy for deciding whether to keep or mulligan opening hands along with a monthly Mulligan Game, where you decide whether to keep or mulligan ten D&T hands.">
    <meta name="keywords" content="Magic the Gathering, MtG, mulligan, keep, Mulligan Game, keepormull, vote, Modern, death and taxes, dnt, modern dnt, ent, eldrazi and taxes, taxes, hatebears">
    

        <title>Modern- Mulligans</title>
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
                var completed = localStorage.getItem('completed10');
                if (completed) {
                    var endMsg = document.getElementById('endMsg');
                    endMsg.style.visibility = "visible";
                    var formGame = document.getElementById('regForm');
                    formGame.style.visibility = "hidden";
                } else {
                    var formGame = document.getElementById('regForm');
                    formGame.style.visibility = "visible";
                }
                
            }
            
          
        </script>
        <script src="/searchbarscripts.js" type="text/javascript"></script>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
          (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-5296235643990630",
            enable_page_level_ads: true
          });
        </script>
        <script src="https://deckbox.org/assets/external/tooltip.js"></script>
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
                <div class="jumbotron">
                <h1>Modern: Mulligan 101</h1>
            </div>
            <h2>Basic Mulligan Advice for all variants of Death and Taxes</h2>
            <p>Aside from typical Magic the Gathering Mulligan advice, Death and Taxes, unlike the average deck, can operate under few lands. In fact, keeping one land hands can be done often in the deck despite it lacking card selection/cantrips like blue. The deck's ability to keep these land light hands is thanks to Aether Vial, which by itself makes one land hands very keepable (and powerful). Be aware- your opponent can play a turn one Thoughtseize/Inquisition of Kozilek to take your Aether Vial, so it is generally advised to mulligan these one land hands with Aether Vial if you are on the draw against a blind opponent or are on the draw vs. a deck with heavy one mana discard. Otherwise, a one/two lander with Aether Vial is a very safe keep. Also worth noting, there are very few counterspells that can counter a turn one Aether Vial, spell pierce being the only relevant one (which is not very common right now in Modern), and artifact hate is mostly limited to Kolaghan's Command before sideboards. </p>
            <br>
            <h2>The Mulligan Game!</h2>
            <p>Since it is very difficult to write an extensive guide for when to keep/mulligan a hand, instead this site will present ten different random hands each month, with voting and discussions available (and encouraged!). At the end of the month, I will present my own opinion and reasoning. Below will be an example of the hands. </p>
            <h2>Sample Mulligan Game:</h2>
            <div class="ex">

            <!--Need to find way to add a built-in quiz. Also need to find a way to add a way to submit a discussion post/comment on the hands so ppl can discuss with each other-->
            <h2 class="handEx">Hand #1:</h2>
            <h3 class="handEx">On the draw vs. unknown opponent</h3>
            <!--Can either do a single image or divide 7 images (when dividing 7, can do 7 cols of size 1 for each one in a div-->
            <img class="hand3" src="https://i.imgur.com/ONeLOwf.jpg">
            <img class="hand3" src="https://i.imgur.com/vjSWjMa.jpg">
            <img class="hand1" src="https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=430548&type=card">
            <!-- tectonic edge, vial, path, resto, flickerwisp, 2 blade splicer DRAW-->
            <div class="mullEx">
                <h2>Mull<small class="mullEx">...Why?</small></h2>
                <p>While one land hands with Aether Vial tend to be appealing, there are many issues with this particular one. For starters, being on the draw is significantly worse than on the play. Modern is dominated by many decks that play turn one Thoughtseize or Inquisition of Kozilek, which would ruin this hand. In addition, the hand is mediocore assuming the Aether Vial is not discarded (or countered with Spell Pierce).</p>
            </div>
            <h2 class="handEx">Hand #2:</h2>
            <h3 class="handEx">On the play vs. unknown opponent</h3>
            <img class="hand3" src="https://i.imgur.com/hulpfEu.jpg">
            <img class="hand3" src="https://i.imgur.com/gYp6mes.jpg">
            <img class="hand1" src="https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=430548&type=card">
            <!--vial, plains, thraben, thalia, blade splicer, flickerwisp, resto PLAY-->
            <div class="keepEx">
                <h2>Keep<small class="keepEx">...Why?</small></h2>
                <p>Very similar to the above hand, except we're on the play. While missing a land drop would significantly slow down the hand, Aether Vial more than makes up for that risk. In addition, the hand has a diverse mana cost of creatures, maximizing the value of Aether Vial.</p>
            </div>
            <h2 class="handEx">Hand #3:</h2>
            <h3 class="handEx">On the draw vs. storm</h3>
            <img class="hand3" src="https://i.imgur.com/flhUAh1.jpg">
            <img class="hand3" src="https://i.imgur.com/JbbBcbc.jpg">
            <img class="hand1" src="https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=48146&type=card">
            <!-- vial, 2 splicer, 1 thraben, 2 plains, gq DRAW vs storm-->
            <div class="mullEx">
                <h2>Mull<small class="mullEx">...Why?</small></h2>
                <p>This hand, regardless of the turn order, would typically be a snap keep. However, when against storm, a deck that can easily win on turn three if left alone, the hand is simply too slow. None of the cards interact with the opponent or help stop their gameplan (except Ghost Quarter if Leonin Arbiter is drawn). In fact, Thraben Inspector is typically too slow to help dig for a Thalia, Guardian of Thraben, Leonin Arbiter, Path to Exile or specific hate like Damping Sphere/Eidolon of Rhetoric. While it is not necessary to assume that the opponent will win on turn 3, that is no excuse for keeping an uninteractive hand versus a combo deck.</p>
            </div>
    </div>
            
            <br>
            <h2>Archieve of old Mulligan Games:</h2>
            <ul>
                <li><a href="mulligangame/10">April's Mulligan Game</a></li>
                <li><a href="mulligangame/9">March's Mulligan Game</a></li>
                <li><a href="mulligangame/8">February's Mulligan Game</a></li>
                <li><a href="mulligangame/7">January's Mulligan Game</a></li>
                <li><a href="mulligangame/6">December 2018's Mulligan Game</a></li>
                <li><a href="mulligangame/5">November 2018's Mulligan Game</a></li>
                <li><a href="mulligangame/4">October 2018's Mulligan Game</a></li>
                <li><a href="mulligangame/3">September 2018's Mulligan Game</a></li>
                <li><a href="mulligangame/2">August 2018's Mulligan Game</a></li>
                <li><a href="mulligangame/1">July 2018's Mulligan Game</a></li>
            </ul>
            <br>
            <h2>Notice: Due to the lack of demand, Mulligan Games will be temporarily terminated. A new game will be added sometime in July. For now, you may participate in April's Mulligan Game below:</h2>
            <br>

            <div class="jumbotron" id="mg">
              <h1>Mulligan Game 10 (April 2019):</h1>
              <h3><small><a href="/decklists/bw-ent/1_2">Decklist</a></small></h3>
            </div>
            <div id="endMsg" style="visibility:hidden;">
                <h2>Thanks for the submission. Come back next month for another Mulligan Game!</h2>
            </div>
            <form id="regForm" method="post" action="mulliganresults.php">
                
<!-- for images of hands, idea of how to change them: base images as background or w/e in css, put them as class or id, then have the js set the class/id of the img based on which pg is being shown. Figure out countLabel...-->
<h1>Keep or Mulligan?: Hand #<span class="countLabel" id="countLabel">1</span></h1>

<!-- One "tab" for each step in the form: -->
<div class="tab">
    <h3>On the play vs. unknown deck</h3>
    <img class="mullImg" src="/images/modern/mulligangame/10/hand1.png" alt="hand1"><br>
    <div class="row">
      <br>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
            <label class="keepLabel"><input type="radio" name="choice0" value="Keep" class="keep keep0 btn btn0" oninput="this.className = ''"><span class="keepLabel">Keep</span></label>
        </div>
        <div class="col-sm-5">
            <label class="mullLabel"> <input type="radio" name="choice0" value="Mull" class="mull mull0 btn btn0" oninput="this.className = ''"><span class="mullLabel">Mull</span></label>
        </div>
    </div>
    <br>
    <h4>Comment (optional):</h4>
    <textarea cols="20" rows="5" name="text1" class="text1 text" placeholder="Enter comments here..."></textarea>
    <br>
    
</div>

<div class="tab">
    <h3>On the draw vs. Grixis Death's Shadow</h3>
    <img class="mullImg" src="/images/modern/mulligangame/10/hand2.png" alt="hand2"><br>
    <div class="row">
      <br>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
            <label class="keepLabel"><input type="radio" name="choice1" value="Keep" class="keep keep1 btn btn1" oninput="this.className = ''"><span class="keepLabel">Keep</span></label>
        </div>
        <div class="col-sm-5">
            <label class="mullLabel"><input type="radio" name="choice1" value="Mull" class="mull mull1 btn btn1" oninput="this.className = ''"><span class="mullLabel">Mull</span></label>
        </div>
    </div>
    <br>
    <h4>Comment (optional):</h4>
    <textarea cols="20" rows="5" name="text2" class="text2 text" placeholder="Enter comments here..."></textarea>
    <br>
    <h6><a href="#dc2" class="discussionA">Decklist Changes</a></h6>
</div>

<div class="tab">
    <h3>On the draw vs. unknown deck</h3>
    <img class="mullImg" src="/images/modern/mulligangame/10/hand3.png" alt="hand3"><br>
    <div class="row">
      <br>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
            <label class="keepLabel"><input type="radio" name="choice2" value="Keep" class="keep keep2 btn btn2" oninput="this.className = ''"><span class="keepLabel">Keep</span></label>
        </div>
        <div class="col-sm-5">
            <label class="mullLabel"><input type="radio" name="choice2" value="Mull" class="mull mull2 btn btn2" oninput="this.className = ''"><span class="mullLabel">Mull</span></label>
        </div>
    </div>
    <br>
    <h4>Comment (optional):</h4>
    <textarea cols="20" rows="5" name="text3" class="text3 text" placeholder="Enter comments here..."></textarea>
    <br>
    
</div>

<div class="tab">
    <h3>On the play vs. Dredge</h3>
    <img class="mullImg" src="/images/modern/mulligangame/10/hand4.png" alt="hand4"><br>
    <div class="row">
      <br>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
            <label class="keepLabel"><input type="radio" name="choice3" value="Keep" class="keep keep3 btn btn3" oninput="this.className = ''"><span class="keepLabel">Keep</span></label>
        </div>
        <div class="col-sm-5">
            <label class="mullLabel"><input type="radio" name="choice3" value="Mull" class="mull mull3 btn btn3" oninput="this.className = ''"><span class="mullLabel">Mull</span></label>
        </div>
    </div>
    <br>
    <h4>Comment (optional):</h4>
    <textarea cols="20" rows="5" name="text4" class="text4 text" placeholder="Enter comments here..."></textarea>
    <br>
    <h6><a href="#dc4" class="discussionA">Decklist Changes</a></h6>
</div>

<div class="tab">
    <h3>On the play vs. unknown deck</h3>
    <img class="mullImg" src="/images/modern/mulligangame/10/hand5.png" alt="hand5"><br>
    <div class="row">
      <br>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
            <label class="keepLabel"><input type="radio" name="choice4" value="Keep" class="keep keep4 btn btn4" oninput="this.className = ''"><span class="keepLabel">Keep</span></label>
        </div>
        <div class="col-sm-5">
            <label class="mullLabel"><input type="radio" name="choice4" value="Mull" class="mull mull4 btn btn4" oninput="this.className = ''"><span class="mullLabel">Mull</span></label>
        </div>
    </div>
    <br>
    <h4>Comment (optional):</h4>
    <textarea cols="20" rows="5" name="text5" class="text5 text" placeholder="Enter comments here..."></textarea>
    <br>

</div>

<div class="tab">
    <h3>On the draw vs. Humans</h3>
    <img class="mullImg" src="/images/modern/mulligangame/10/hand6.png" alt="hand6"><br>
    <div class="row">
      <br>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
            <label class="keepLabel"><input type="radio" name="choice5" value="Keep" class="keep keep5 btn btn5" oninput="this.className = ''"><span class="keepLabel">Keep</span></label>
        </div>
        <div class="col-sm-5">
            <label class="mullLabel"><input type="radio" name="choice5" value="Mull" class="mull mull5 btn btn5" oninput="this.className = ''"><span class="mullLabel">Mull</span></label>
        </div>
    </div>
    <br>
    <h4>Comment (optional):</h4>
    <textarea cols="20" rows="5" name="text6" class="text6 text" placeholder="Enter comments here..."></textarea>
    <br>
    <h6><a href="#dc6" class="discussionA">Decklist Changes</a></h6>
</div>

<div class="tab">
    <h3>On the draw vs. unknown deck</h3>
    <img class="mullImg" src="/images/modern/mulligangame/10/hand7.png" alt="hand7"><br>
    <div class="row">
      <br>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
            <label class="keepLabel"><input type="radio" name="choice6" value="Keep" class="keep keep6 btn btn6" oninput="this.className = ''"><span class="keepLabel">Keep</span></label>
        </div>
        <div class="col-sm-5">
            <label class="mullLabel"><input type="radio" name="choice6" value="Mull" class="mull mull6 btn btn6" oninput="this.className = ''"><span class="mullLabel">Mull</span></label>
        </div>
    </div>
    <br>
    <h4>Comment (optional):</h4>
    <textarea cols="20" rows="5" name="text7" class="text7 text" placeholder="Enter comments here..."></textarea>
    <br>
</div>

<div class="tab">
    <h3>On the play vs. Grixis Death's Shadow</h3>
    <img class="mullImg" src="/images/modern/mulligangame/10/hand8.png" alt="hand8"><br>
    <div class="row">
      <br>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
            <label class="keepLabel"><input type="radio" name="choice7" value="Keep" class="keep keep7 btn btn7" oninput="this.className = ''"><span class="keepLabel">Keep</span></label>
        </div>
        <div class="col-sm-5">
            <label class="mullLabel"><input type="radio" name="choice7" value="Mull" class="mull mull7 btn btn7" oninput="this.className = ''"><span class="mullLabel">Mull</span></label>
        </div>
    </div>
    <br>
    <h4>Comment (optional):</h4>
    <textarea cols="20" rows="5" name="text8" class="text8 text" placeholder="Enter comments here..."></textarea>
    <br>
    <h6><a href="#dc8" class="discussionA">Decklist Changes</a></h6>
</div>

<div class="tab">
    <h3>On the draw vs. unknown deck</h3>
    <img class="mullImg" src="/images/modern/mulligangame/10/hand9.png" alt="hand9"><br>
    <div class="row">
      <br>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
            <label class="keepLabel"><input type="radio" name="choice8" value="Keep" class="keep keep8 btn btn8" oninput="this.className = ''"><span class="keepLabel">Keep</span></label>
        </div>
        <div class="col-sm-5">
            <label class="mullLabel"><input type="radio" name="choice8" value="Mull" class="mull mull8 btn btn8" oninput="this.className = ''"><span class="mullLabel">Mull</span></label>
        </div>
    </div>
    <br>
    <h4>Comment (optional):</h4>
    <textarea cols="20" rows="5" name="text9" class="text9 text" placeholder="Enter comments here..."></textarea>
    <br>
</div>

<div class="tab">
    <h3>On the draw vs. Dredge</h3>
    <img class="mullImg" src="/images/modern/mulligangame/10/hand10.png" alt="hand10"><br>
    <div class="row">
      <br>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
            <label class="keepLabel"><input type="radio" name="choice9" value="Keep" class="keep keep9 btn btn9" oninput="this.className = ''"><span class="keepLabel">Keep</span></label>
        </div>
        <div class="col-sm-5">
            <label class="mullLabel"><input type="radio" name="choice9" value="Mull" class="mull mull9 btn btn9" oninput="this.className = ''"><span class="mullLabel">Mull</span></label>
        </div>
    </div>
    <br>
    <h4>Comment (optional):</h4>
    <textarea cols="20" rows="5" name="text10" class="text10 text" placeholder="Enter comments here..."></textarea>
    <br>
    <h6><a href="#dc10" class="discussionA">Decklist Changes</a></h6>
</div>

<div style="overflow:auto;">
   <button type="button" id="prevBtn" onclick="nextPrev(-1)"><span class="prevLabel">Prev</span></button>
   <button type="button" id="nextBtn" onclick="nextPrev(1)"><span class="nextLabel">Next</span></button>
</div>



<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>

</div>

</form>

<br>
<hr>

<h3>Decklist Changes:</h3>
            <br>
            <div class="panel-group" id="accordion">
              <div class="panel panel-format">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a id="dc2" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                    DC #2: On the draw vs. Grixis Death's Shadow</a>
                  </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>In:</h3>
                            <ul>
                                <li>1 Burrenton Forge-Tender </li>
                                <li>2 Fatal Push </li>
                                <li>2 Rest in Peace </li>
                                <li>1 Kambal, Consul of Allocation </li>
                                <li>1 Gideon, Ally of Zendikar </li>
                                
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <h3>Out:</h3>
                            <ul>
                                <li>2 Aether Vial </li>
                                <li>3 Flickerwisp </li>
                                <li>2 Wasteland Strangler </li>
                            </ul>
                        </div>
                    </div>  
                  </div>
                </div>
              </div>
              <br>
              <br>
              <div class="panel panel-format">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a id="dc4" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                    DC #4: On the play vs. Dredge</a>
                  </h4>
                </div>
                <div id="collapse4" class="panel-collapse collapse">
                  <div class="panel-body">
                      <div class="row">
                        <div class="col-sm-6">
                            <h3>In:</h3>
                            <ul>
                                <li>4 Fatal Push </li>
                                <li>2 Orzhov Pontiff </li>
                                <li>1 Settle the Wreckage </li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <h3>Out:</h3>
                            <ul>
                                <li>3 Leonin Arbiter </li>
                                <li>3 Thalia, Guardian of Thraben </li>
                                <li>1 Kambal, Consul of Allocation </li>
                            </ul>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <br>
              <div class="panel panel-format">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a id="dc6" data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                    DC #6: On the draw vs. Humans</a>
                  </h4>
                </div>
                <div id="collapse5" class="panel-collapse collapse">
                  <div class="panel-body">
                      <div class="row">
                        <div class="col-sm-6">
                            <h3>In:</h3>
                            <ul>
                                <li>4 Fatal Push </li>
                                <li>2 Orzhov Pontiff </li>
                                <li>1 Settle the Wreckage </li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <h3>Out:</h3>
                            <ul>
                                <li>3 Leonin Arbiter </li>
                                <li>3 Thalia, Guardian of Thraben </li>
                                <li>1 Kambal, Consul of Allocation </li>
                            </ul>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <br>
              <div class="panel panel-format">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a id="dc8" data-toggle="collapse" data-parent="#accordion" href="#collapse7">
                    DC #8: On the play vs. Grixis Death's Shadow</a>
                  </h4>
                </div>
                <div id="collapse7" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>In:</h3>
                            <ul>
                                <li>1 Burrenton Forge-Tender </li>
                                <li>2 Fatal Push </li>
                                <li>1 Rest in Peace </li>
                                <li>1 Kambal, Consul of Allocation </li>
                                
                                
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <h3>Out:</h3>
                            <ul>
                                <li>1 Aether Vial </li>
                                <li>2 Flickerwisp </li>
                                <li>2 Wasteland Strangler </li>
                            </ul>
                        </div>
                    </div>  
                  </div>
                </div>
              </div>
              <br>
              <br>
              <div class="panel panel-format">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a id="dc6" data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                    DC #10: On the draw vs. Dredge</a>
                  </h4>
                </div>
                <div id="collapse5" class="panel-collapse collapse">
                  <div class="panel-body">
                      <div class="row">
                        <div class="col-sm-6">
                            <h3>In:</h3>
                            <ul>
                                <li>4 Fatal Push </li>
                                <li>2 Orzhov Pontiff </li>
                                <li>1 Settle the Wreckage </li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <h3>Out:</h3>
                            <ul>
                                <li>3 Leonin Arbiter </li>
                                <li>3 Thalia, Guardian of Thraben </li>
                                <li>1 Kambal, Consul of Allocation </li>
                            </ul>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
              

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
    document.getElementById("nextBtn").name = "Submit";

  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  document.getElementById("countLabel").innerHTML = currentTab + 1;
  /*switch (currentTab) {
    case 1:
      document.getElementById("handImage").src = "";
      break;
  }
  document.getElementsByClassName("mullImg").src = */
  //INSERT WAY TO SET SPAN OF CLASS counterLabel TO EQUAL currentTab
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    localStorage.setItem('completed10', true);
    document.getElementById("regForm").submit();
    alert("Submission was successful"); 
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}
/*
idea to try out:
if(document.getElementById('keep\(currentTab)').checked) {
  //Male radio button is checked
}else if(document.getElementById('mull\(currentTab)').checked) {
  //Female radio button is checked
}
*/
//below kinda works...EDIT: works for now! :D EDIT 2 not anymore EDIT 3 WE BACK BABY
function validateForm() {
    var btnName = `choice${currentTab}`; //this is good
    var choiceMethod = document.getElementsByName(btnName); 
    var ischecked_method = false;
    for (var i = 0; i < choiceMethod.length; i++) {
        if(choiceMethod[i].checked) {
            ischecked_method = true;
            break;
        }
    } 
    if(!ischecked_method)   { //payment method button is not checked
        alert("Please select an option to proceed"); 
        return false;
    } else {
        document.getElementsByClassName("step")[currentTab].className += " finish";
        return true;
    }
}

//put within validationForm for checking if button is selected: 
/*
function validateForm() {

var x, y, i, valid = true;
x = document.getElementsByClassName("tab");
y = x[currentTab].getElementsByTagName("input");

if(document.getElementsByClassName("keep").checked) {
  //Keep button is checked
  valid = true;
}else if(document.getElementsByClassName("mull").checked) {
  //Mull button is checked
  valid = true;
} else {
  y[i].className += " invalid";

  valid = false;
}

if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid;

}*/

//below is the copy-paste version
/*
function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}
*/
function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
            
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
