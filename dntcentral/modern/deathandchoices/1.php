<?php
    include("../../scripts/searchscript.php"); //actually works
    
?>
<?php
    include("../../scripts/cardlistdb.php"); //does work
?>
<?php
    $filename = '1.php';
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

    <meta property="fb:app_id" content="1186220854870564" />

        <title>Death and Choices</title>
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
        <div id="fb-root"></div>
            <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>
                <?php
                    include("../../scripts/navbar.php"); 
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

              
                <div class="jumbo-tron">
                    <h1>Death and Choices- What's the Play?</h1>
                </div>
                <br>
                <h2>About</h2>
                <p>Death and Choices is a monthly series where a board state and other information is provided. With that information, you come up with what you think is the most optimal line, describing the sequencing you would make. In addition, discussing different lines and reasons for doing a particular line is encouraged. I will have my own play plus the reasoning available as well at the bottom.</p>
                <br>
                <p>New Death and Choices are available in the middle of each month. If you wish to get notified when the next one is out, feel free to subscribe to the newsletter found in the footer below.</p>
                <br>
                <hr>
                <br>
                <h2>Death and Choices #1</h2>
                <br>
                <div class="">
                    <img src="/images/modern/deathandchoices/whatstheplay1.PNG" class="deathandchoices" alt="death and choice #1">
                </div>
                <br>
                <h2>Discussions- Post your Choice Below</h2>
                <br>
                <div class="discussion">
                    <div class="fb-comments" data-href="http://dntcentral.com/modern/deathandchoices/1" data-width="600" data-numposts="10" data-colorscheme="dark"></div>
                </div>

                <br>
                <div class="panel-group" id="accordion4">
                        <div class="panel panel-format">
                        <div class="panel-heading">
                          <h3 class="panel-title">
                            <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion4" href="#collapse1d" id="tldr">
                            My Choice</a>
                          </h3>
                        </div>
                        <div id="collapse1d" class="panel-collapse collapse">
                          <div class="panel-body">
                              <p>My play for this Death and Choices would be to, in response to the opponent's Flickerwisp trigger, to activate Eldrazi Displacer. Eldrazi Displacer's activation would target our Restoration Angel, which would have its own blink trigger. Restoration Angel's blink trigger will then target Eldrazi Displacer, resulting in the Eldrazi staying on the battlefield. I will bring in the Blade Splicer off of Aether Vial after the opponent has declared their attackers (assuming they attack with creatures).</p>
                              <br>
                              <p>The reason I would make this play is to prevent the Eldrazi Displacer from getting exiled by the opponent's Flickerwisp's ability. If the opponent gets to do it, they get to make a very powerful play on their upcoming turn. The play is that their Eldrazi Displacer targets their Wasteland Strangler. When the Wasteland Strangler enters the battlefield, it gives -3/-3 to our Thalia, Guardian of Thraben (assuming Blade Splicer is not in play). The card the opponent puts into our graveyard is our Eldrazi Displacer. At the end of their turn, Flickerwisp's trigger does <i>not</i> return Eldrazi Displacer to the battlefield, as it is no longer exiled under Flickerwisp's ability. The other line I considered was bringing Blade Splicer into play and blinking it with Eldrazi Displacer to make two Golem tokens. If you do this, it is best to do it right away, as Eldrazi Displacer is unlikely to return. My main issue with that play is that, without Eldrazi Displacer, we lack a way to out-grind the opponent. With Eldrazi Displacer in play, however, we can be both aggressive with Restoration Angel and generate value through Eldrazi Displacer plus Blade Splicer.</p>
                          </div>
                        </div>
                      </div>      
              </div>
                <!--this will be one of those collapse things-->
                <br>
                <h2>Previous Death and Choices</h2>
                <p>Missed an earlier Death and Choices? Previous Death and Choices are available for viewing, but not commenting.</p>
                <ul>
                    <li>Nothing here yet!</li>
                </ul>

            <div class="extra-space"></div>
            </div>
            
            <script>var jArray = <?php echo json_encode($listOfCardNames); ?>;</script>
            <script src="/loadcardhoversettings.js"></script>
            
            <?php
                include("../../scripts/footer.php");
            ?>
            <script>var jStr = <?php echo json_encode($lastModDate); ?>;</script>
            <script src="/loadpublishinfo.js" type="text/javascript"></script>
    </body>
</html>


