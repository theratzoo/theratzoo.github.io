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

    

        <title>Article Archive</title>
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
                <br>
                    <div class="alert alert-danger" id="alertMG">
                        <a href="/modern/mulligans#mg"><strong>April's Mulligan Game is available now!</strong></a>
                        <input id="dismissAlert" onclick="dismissAlert()">
                        <br>
                        <a href="/" onclick="stopShowingAlert()" id="stopShowingAlert">Don't show this again.</a>
                    </div>
                    <br>
                <div class="jumbo-tron">
                    <h1>Article Archive</h1>
                </div>
            <h2>Most Recent:</h2>
            <br>
            <br>
            <h3><a href="entcomparison">E&T Comparison</a></h3>
            <a href="entcomparison"><img src="/images/dnt/eldrazi-displacer-art.jpg" alt="wasteland strangler" class="articleImg"></a>
            <p>An article analyzing the advantages and disadvantages of the two most popular Eldrazi and Taxes builds in Modern- B/W and Mono-White Eldrazi and Taxes.</p>
            <br>
            <hr>
            <h3><a href="thalia">Thalia 101</a></h3>
            <a href="thalia"><img src="https://magic.wizards.com/sites/mtg/files/image_legacy_migration/images/magic/daily/stf/stf187_tha.jpg" alt="Thalia, Guardian of Thraben" class="articleImg"></a>
            <p>An in-depth discussion on Thalia, Guardian of Thraben including strategies and interactions.</p>
            <br>
            <hr>
            <h3><a href="leoninarbiter">Leonin <span>Arbiter</span> 101</a></h3>
            <a href="leoninarbiter"><img src="/images/articles/home/leonin-arbiter-art.jpg" alt="Leonin Arbiter" class="articleImg"></a>
            <p>A strategy guide on best utilizing Leonin Arbiter in Death and Taxes</p>
            <br>
            <hr>
            <h3><a href="decktech_buglertaxes">Deck Tech: Bugler Taxes</a></h3>
            <a href="decktech_buglertaxes">
                <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Thalia,+Guardian+Of+Thraben&type=card" class="leftCard">
                <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Militia+Bugler&type=card">
                <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Phyrexian+Revoker&type=card" class="rightCard">
            </a>

            <p>A deck tech article about Mono White Death and Taxes featuring Militia Bugler</p>
            <br>
            <br>
            <hr>

            <h3><a href="aethervial">Aether Vial 101</a></h3>
            <a href="aethervial" ><img src="https://cantrip.ru/images/arts/AEther-Vial.jpg" alt="Aether Vial" class="articleImg"></a>
            <p>The ins and outs of this one mana artifact in D&T.</p>

            <br>
            <br>
            <hr>

            <h3><a href="flickerwisp">Flickerwisp 101</a></h3>
            <a href="flickerwisp"><img src="/images/articles/home/flickerwisp-art.jpg" alt="Flickerwisp" class="articleImg"></a>
            <p>Tips & tricks on everyone's favorite three mana flier.</p>

            <br>
            
            <!-- include :
                search bar
                recent article links
                IDEA: can also have recent articles have two different addresses: the digit.php, and a normal one; latter is seen on website links, former only for searching...
            -->
            <!--EDIT: look at MTGGoldfish's "Article" page and kinda copy that design.. it's sweet-->
            <!--Can also put recent articles/spice pages/newest added pages to website home page!-->
            
            
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
