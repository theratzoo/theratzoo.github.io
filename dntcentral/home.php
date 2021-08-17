<?php
    include("scripts/searchscript.php");
    include("scripts/cardlistdb.php");
?>
<?php
    include("scripts/listofwebsitecontent.php");
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
        <title>Death and Taxes Central</title>
        <meta name="description" content="Magic the Gathering strategies, guides, and decklists pertaining to the Death and Taxes archetype.">
        <meta name="keywords" content="Magic the Gathering, modern, death and taxes, dnt, modern dnt, ent, eldrazi and taxes, taxes, hatebears">
        <link rel="icon" href="/wisp.png">
        <link rel="stylesheet" type="text/css" href="style.css">
        
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
                
                var eleA = document.getElementById("homeBoxA");
                var eleB = document.getElementById("homeBoxB");
                eleB.style.height = eleA.offsetHeight+'px';
                
                /*if(eleA.offsetHeight > eleB.style.offsetHeight) {
                    eleB.style.height = eleA.style.offsetHeight;
                } else {
                    eleA.style.height = eleB.style.offsetHeight;
                }*/
                
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
        <script type="text/javascript">
          
          function dismissAlert() {
            //document.getElementById("alertMG").style.visibility = "hidden";
            document.getElementById("alertMG").style.display = "none";
          }
          function stopShowingAlert() {
            localStorage.setItem('hide10', true);
            dismissAlert();
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
            include("scripts/navbar.php"); 

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
                <div class="container" id="content">
                    <br>
                    <div class="alert alert-danger" id="alertMG">
                        <a href="modern/mulligans#mg"><strong>April's Mulligan Game is available now!</strong></a>
                        <input id="dismissAlert" onclick="dismissAlert()">
                        <br>
                        <a href="/" onclick="stopShowingAlert()" id="stopShowingAlert">Don't show this again.</a>
                    </div>
                    <br>

                <h1 class="text-center">Death and Taxes Central</h1>
            <p class="quote text-center">"There are only two things certain in life. Death and taxes. Oh, and also white heatbears...."</p>
            <br>
            <br>
            <div class="about">
                <h3 id="aboutHP">About the Strategy</h3>
                <p>Death and Taxes is an aggro-control prison deck. The deck plays efficient, disruptive white creatures, most notably Thalia, Guardian of Thraben, to tax the opponent while beating down and protecting your "hatebears" with other ones. </p>
            </div>
            <br>
                <!-- Improve layout of this page- images, font, blueprint it, etc. -->
                <h3>What formats support Death and Taxes?</h3>
                <p>Despite being the most popular in Modern and Legacy, the overall strategy ports well to other formats including Commander, Vintage, and, to a lesser extent, Standard. Typically modern and Vintage rely on Eldrazi and "sol lands" like Ancient Tomb, thus making their decks Eldrazi and Taxes, which does deviate the deck away from traditional Death and Taxes, but still plays roughly the same nonetheless. </p>
                <br>
                <h3>Why play Death and Taxes?</h3>
                <p>From personal experience, the appeal of the deck comes from the ability to play as both an aggressive and control deck. While there are games won by beating down with two and three power creatures, others involve utilizing the deck's taxing effects to prevent the opponent from enacting their gameplan. Having the deck's lock pieces deny the opponent from casting their vital spells also adds satisfaction to the deck that's hard to find in other archetypes. And Death and Taxes has a pretty good matchup against the boggeyman Tron!</p>
                <hr>
                <br>
                <h3>Newest Pages:</h3>
                <br>
                <div class="row" id="fourNewestPages">
                    
                    <div class="col-sm-6">
                        <div id="homeBoxA">
                            <h3><a href="/modern/deathandchoices/2">Death and Choices #2</a></h3>
                            <p>The second installment of the Death and Choices series. This time, the choice is situated on a complex board state against the new Vannifar Pod deck.</p>
                        </div>
                        <br>
                        <br>
                        <div id="homeBoxC">
                            <h3><a href="modern/matchupguides/bw-ent/infect">Infect (B/W E&T)</a></h3>
                            <p>Matchup guide against an aggressive Blue-Green deck centered around pump spells and infect creatures in Modern. Includes specific strategies, tips, and sideboarding tricks for Black-White Eldrazi and Taxes against Infect.</p>
                            
                        </div>
                        <br>
                        <br>
                        <div id="homeBoxE">
                            
                            
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div id="homeBoxB">
                            <h3><a href="/articles/entcomparison">Eldrazi and Taxes Comparison</a></h3>
                            <p>An article breaking down Mono-White and B/W Eldrazi and Taxes. It discusses the advantages and disadvantages of each of the lists, analyzing the surprisingly distinct decklists.</p>
                        </div>
                        <br>
                        <br>
                        <div id="homeBoxD">
                            <h3><a href="modern/matchupguides/infect">Infect (Mono-W E&T)</a></h3>
                            <p>Matchup guide against an aggressive Blue-Green deck centered around pump spells and infect creatures in Modern. Includes specific strategies, tips, and sideboarding tricks for Mono-White Eldrazi and Taxes against Infect.</p>
                        </div>
                        <br>
                        <br>
                        <div id="homeBoxF">
                            
                            
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <hr>
                <div class="mgPreview">
                    <h3 class="mgPreview"><a href="modern/mulligans#mg">This Month's Mulligan Game (DOWN UNTIL JULY)</a></h3>
                    <a href="modern/mulligans#mg">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Plains&type=card" alt="Plains" class="mgPreview mgPA">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Ghost+Quarter&type=card" alt="Ghost Quarter" class="mgPreview mgPB">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Aether+Vial&type=card" alt="Aether Vial" class="mgPreview mgPC">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Aether+Vial&type=card" alt="Aether Vial" class="mgPreview mgPD">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Leonin+Arbiter&type=card" alt="Leonin Arbiter" class="mgPreview mgPE">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Flickerwisp&type=card" alt="Flickerwisp" class="mgPreview mgPF">
                        <img src="https://gatherer.wizards.com/Handlers/Image.ashx?name=Horizon+Canopy&type=card" alt="Horizon Canopy" class="mgPreview mgPG">
                    </a>
                </div>
                

                <br>
                <br>
                <div class="extra-space"></div>
            </div>

            
            
            <script>var jArray = <?php echo json_encode($listOfCardNames); ?>;</script>
            <script src="/loadcardhoversettings.js"></script>

            <script>var listOfTitles = <?php echo json_encode($listOfTitles); ?>;</script>
            <script>var listOfDescriptions = <?php echo json_encode($listOfDescriptions); ?>;</script>
            <script>var listOfLinks = <?php echo json_encode($listOfLinks); ?>;</script>
            <script src="/latestarticle.js"></script>
            
            <?php
                include("scripts/footer.php");
            ?>
            <script>var jStr = <?php echo json_encode($lastModDate); ?>;</script>
            <script src="/loadpublishinfo.js" type="text/javascript"></script>
        
    </body>
</html>

