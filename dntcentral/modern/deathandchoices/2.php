<?php
    include("../../scripts/searchscript.php"); //actually works
    
?>
<?php
    include("../../scripts/cardlistdb.php"); //does work
?>
<?php
    $filename = '2.php';
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

        <title>Death and Choice #2</title>
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
                <h2>Death and Choices #2</h2>
                <br>
                <div class="" id="dnc">
                    <img src="/images/modern/deathandchoices/whatstheplay2.PNG" class="deathandchoices" alt="death and choice #2">
                </div>
                <br>
                <h2>Discussions- Post your Choice Below</h2>
                <br>
                <div class="discussion">
                    <div class="fb-comments" data-href="https://dntcentral.com/modern/deathandchoices/2" data-width="600" data-numposts="10" data-colorscheme="dark"></div>
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
                              <p>My play for this Death and Choices would be to cast Flickerwisp on my turn, targetting the opponent's Magus of the Moon. I will then sacrifice both Horizon Canopies before the Magus of the Moon effect returns to play, searching for more answers (Flickerwisp, Path to Exile, etc.).</p>
                              <br>
                              <p>The reason I picked this line is that I valued the two extra cards quite highly. One thing that I would like to mention is that the opponent can copy their Magus of the Moon with Kiki-Jiki, Mirror Breaker before it gets temporarily exiled. However, because I am the active player on my turn, Flickerwisp's trigger enters the stack first on my end step, therefore resolving after Kiki-Jiki, Mirror Breaker's trigger. The Magus of the Moon token would, therefore, go away before the actual Magus of the Moon returns, giving just enough time to sacrifice both Horizon Canopies. Anyway, I ultimately valued this line the most was that I did not think the other possible plays could reasonably win. All that they would achieve is further prolonging the game, which is not very favorable for the Eldrazi and Taxes player. Getting two fresh cards could, however, grant us the necessary resources to cultivate a victory.</p>
                              <br>
                              <p>The best way to further elaborate on my reasoning is by discussing the other lines I came up with. One of them was to Flickerwisp their Birds of Paradise or our Blade Splicer in order to kill the opponent fast. However, with Kiki-Jiki, Mirror Breaker, the opponent could simply make copies to chump block our creatures. Plus, their Magus of the Moon and Wall of Blossoms were stopping our ground creatures. The other reasonable line was to Flickerwisp our Phyrexian Revoker and name Kiki-Jiki, Mirror Breaker. I almost went with this play, as it would make it exceedingly hard for the opponent to generate value or simply combo off. However, by doing that, their Birds of Paradise would be turned on. The Vannifar Pod deck runs many powerful cards of varying colors. By letting them tap their Birds of Paradise for mana, their Deputy of Detentions and Prime Speaker Vannifars would be active. All that being said, I still think that the Phyrexian Revoker line was not bad, but I ultimately went with the Horizon Canopy one.</p>
                          </div>
                        </div>
                      </div>      
              </div>
                <!--this will be one of those collapse things-->
                <br>
                <h2>Previous Death and Choices</h2>
                <p>Missed an earlier Death and Choices? Previous Death and Choices are available for viewing, but not commenting.</p>
                <ul>
                    <li><a href="1">Death and Choices #1</a></li>
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


