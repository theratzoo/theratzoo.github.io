<?php
    include("../scripts/searchscript.php");
    include("../scripts/cardlistdb.php");
    include("../scripts/decklistdb.php");
?>
<?php
    $filename = '1_3.php';
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

    

        <title>MTGO Decklist V1.3</title>
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
            <div class="container-fluid body-div">
                <div class="jumbotron">
                <h1>MTGO Decklist Version 1.3</h1>
            </div>
            <h2>Decklist:</h2>
            <br>
           <div id="autolist">
                <div id="maindeck">
                    4 Thraben Inspector
                    4 Leonin Arbiter
                    1 Phyrexian Revoker
                    4 Thalia, Guardian of Thraben
                    4 Blade Splicer
                    3 Eldrazi Displacer
                    4 Flickerwisp
                    1 Kitchen Finks
                    4 Restoration Angel
                    4 Path to Exile
                    4 Aether Vial
                    1 Eiganjo Castle
                    1 Eldrazi Temple
                    1 Field of Ruin
                    4 Ghost Quarter
                    4 Horizon Canopy
                    7 Plains
                    1 Shefet Dunes
                    4 Tectonic Edge
                </div>
                <div id="sideboard">
                    2 Burrenton Forge-Tender
                    1 Oust
                    1 Relic of Progenitus
                    1 Auriok Champion
                    1 Damping Sphere
                    2 Rest in Peace
                    2 Stony Silence
                    1 Dismember
                    1 Kitchen Finks
                    1 Gideon, Ally of Zendikar
                    1 Shalai, Voice of Plenty
                    1 Worship
                </div>
            </div>
            <div class="changes-padding" id="content">
                <h3>Changes:</h3>
                <h5>Main Deck:</h5>
                <p>
                    Out:
                    <ul>
                        <li> 1 Akroma, Angel of Fury </li>
                    </ul>
                    In:
                    <ul>
                        <li> 1 Phyrexian Revoker </li>
                    </ul>
                </p>
                <br>
                <h5>Sideboard:</h5>
                <p>
                    Out:
                    <ul>
                        <li> 1 Relic of Progenitus </li>
                        <li> 1 Stony Silence </li>
                    </ul>
                    In:
                    <ul>
                        <li> 1 Oust </li>
                        <li> 1 Rest in Peace </li>
                    </ul>
                </p>
            </div>
            <div class="extra-space"></div>
            </div>
            
            <script>var jArray = <?php echo json_encode($listOfCardNames); ?>;</script>
                <script src="/loadcardhoversettings.js"></script>
            <script>var dbArray = <?php echo json_encode($listOfLists); ?>;</script>
            <script src="/loaddecklist.js"></script>
            <?php
                include("../scripts/footer.php");
            ?>
            <script>var jStr = <?php echo json_encode($lastModDate); ?>;</script>
            <script type="text/javascript" src="/loadpublishinfo.js"></script>
    </body>
</html>
