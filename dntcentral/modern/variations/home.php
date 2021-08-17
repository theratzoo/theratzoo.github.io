<?php
    include("../../scripts/searchscript.php"); //actually works
    
?>
<?php
    include("../../scripts/cardlistdb.php"); //does work
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

    

        <title>Modern- Variations</title>
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
            
          function dismissAlert() {
            //document.getElementById("alertMG").style.visibility = "hidden";
            document.getElementById("alertMG").style.display = "none";
          }
          function stopShowingAlert() {
            localStorage.setItem('hide9', true);
            dismissAlert();
          }
          function checkMulliganGame() {
                var completed = localStorage.getItem('completed9');
                var isDisabled = localStorage.getItem('hide9');
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
            <div class="container-fluid" id="content">
                <br>
                    <div class="alert alert-danger" id="alertMG">
                        <a href="/modern/mulligans#mg"><strong>March's Mulligan Game is available now!</strong></a>
                        <input id="dismissAlert" onclick="dismissAlert()">
                        <br>
                        <a href="/" onclick="stopShowingAlert()" id="stopShowingAlert">Don't show this again.</a>
                    </div>
                    <br>
                <div class="jumbo-tron">
                    <h1>Modern Splashes & Other Variants</h1>
                </div>
            <br>
            <h3>Splashes</h3>
            <p>In Modern, each color has a corresponding variant of Death and Taxes. Some lists, like RW Taxes, are more fine tuned and powerful than other lists, like BW Taxes. However, each color configuration adds a fair number of creatures that fit well into the Death and Taxes shell.</p>
            <h3>Other Variants</h3>
            <p>The most common of variation of Death and Taxes without necessarily splashing a color would be adding Eldrazi to the deck. Two main versions of that deck exist: one with black, and one without. The final variation of Death and Taxes in modern is one that not only uses Eldrazi, but also drifts away from the traditional Aether Vial build and instead opts to use Chalice of the Void as a lock piece.
            <br>
            <div class="row">
                <div class="col-sm-3">
                    <img src="" class="splashMana" alt="">
                </div>
                <div class="col-sm-6">
                    <h3><a href="blue">Blue White Taxes</a></h3>
                </div>
                <div class="col-sm-3">
                    <img src="" class="splashMana" alt="">
                </div>
            </div>
            <br>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <img src="" class="splashMana" alt="">
                </div>
                <div class="col-sm-6">
                    <h3><a href="black">Black White Taxes</a></h3>
                </div>
                <div class="col-sm-3">
                    <img src="" class="splashMana" alt="">
                </div>
            </div>
            <br>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <img src="" class="splashMana" alt="">
                </div>
                <div class="col-sm-6">
                    <h3><a href="red">Red White Taxes</a></h3>
                </div>
                <div class="col-sm-3">
                    <img src="" class="splashMana" alt="">
                </div>
            </div>
            <br>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <img src="" class="splashMana" alt="">
                </div>
                <div class="col-sm-6">
                    <h3><a href="green">Green White Taxes</a></h3>
                </div>
                <div class="col-sm-3">
                    <img src="" class="splashMana" alt="">
                </div>
            </div>
            <br>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <img src="" class="splashMana" alt="">
                </div>
                <div class="col-sm-6">
                    <h3><a href="w-ent">Mono White Eldrazi Taxes</a></h3>
                </div>
                <div class="col-sm-3">
                    <img src="" class="splashMana" alt="">
                </div>
            </div>
            <br>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <img src="" class="splashMana" alt="">
                </div>
                <div class="col-sm-6">
                    <h3><a href="bw-ent">Black White Eldrazi Taxes</a></h3>
                </div>
                <div class="col-sm-3">
                    <img src="" class="splashMana" alt="">
                </div>
            </div>
            <br>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <img src="" class="splashMana" alt="">
                </div>
                <div class="col-sm-6">
                    <h3><a href="chalice-ent">Chalice Eldrazi Taxes</a></h3>
                </div>
                <div class="col-sm-3">
                    <img src="" class="splashMana" alt="">
                </div>
            </div>
            <br>
            <hr>
            
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
