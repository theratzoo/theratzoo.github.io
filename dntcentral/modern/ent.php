<?php
    $q = $_GET['q'];
    if($_GET['q'] == 'Search...') {
        header('Location: index.html');
    }
    
    if($_GET['q'] !== '') {
        $con = mysqli_connect('localhost', 'theratzoo', 'Talia$1024');
        $db = mysqli_select_db($con, 'dntsitesearch');
    
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

    

        <title>Modern- E&T Tips & Tricks</title>
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

                var x = document.getElementsByClassName("popupImg");
                var y = document.getElementsByClassName("cardA");
                for(var i = 0; i<x.length; i++) {
                    var name = y[i].textContent;

                    x[i].src = `http://gatherer.wizards.com/Handlers/Image.ashx?name=${name}&type=card`;
                    x[i].alt = name;
                }
            }
            function clearSearchStuff() {
            var searchBar = document.getElementById('navSearchBar');
            if(searchBar.value == 'Search...') {
              searchBar.value = '';
              seachBar.placeholder = 'Search...';
            }
          }

          function barNotActive() {
            var searchBar = document.getElementById('navSearchBar');
            if(searchBar.value == '') {
              searchBar.value = 'Search...';
              seachBar.placeholder = '';
            }
          }
        </script>
    </head>
    <body class="homePage" onload="loadScript()">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        
                        <a href="/" class="navbar-brand">D&T Central</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar10">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="navbar-collapse collapse" id="navbar10">
                            <ul class="navbar-nav nav-fill w-100">
                                <li class="nav-item dropdown">
                                    
                                    <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="format">
                                        Formats
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/format">Format Page</a></li>
                                        <li><a href="/legacy/">Legacy</a></li>
                                        <li><a href="/modern/">Modern</a></li>
                                        <li><a href="/vintage">Vintage</a></li>
                                        <li><a href="/commander">Commander</a></li>                           
                                        <li><a href="/standard/">Standard</a></li>
                                    </ul>
                                    
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">
                                        Modern Guides
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                    <li><a href="/modern/ent">Eldrazi&Taxes Tips/Tricks</a></li>
                                    <li><a href="/modern/splashes">Splashes</a></li>
                                    <li><a href="/modern/mulligans">Mulligan Guide</a></li>
                                    <li><a href="/modern/budget">Budget Options</a></li>
                                    <li><a href="/modern/matchupguides">Matchup Guides</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">
                                        Legacy Guides
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                    <li><a href="/legacy/individualcards">Individual Cards</a></li>
                                    <li><a href="/legacy/othervariants">Other Variants</a></li>
                                    <li><a href="/legacy/sideboard">Sideboarding 101</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/articles/">Articles</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/spicespace/">Spice Space</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/resources">Other Resources</a>
                                </li>
                                <li class="nav-item search-nav-item">
                                    <form action="/searchresults.php" method="GET" class="navSearchForm">
                                    <input type="text" name="q" id="navSearchBar" placeholder="" value="Search..." maxlength="25" autocomplete="off" onmousedown="clearSearchStuff()" onblur="barNotActive()"/><input type="submit" id="navSearchBtn" value="Go!"/>
                                </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
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
            <div class="container-fluid">
                <div class="jumbotron">
                <h1>Eldrazi & Taxes Tips and Tricks</h1>
                <!-- have option to hide certain cards-->
                <!--include both mono w E&T and black white E&T. decklist for each, then delve into cards, sideboarding, etc-->
            </div>

            <!-- fix up intro; include discsriptions of mono w and bw, brief pros/cons, and such. include before decklists -->
            <h2>General:</h2>
            <p>Modern Eldrazi and Taxes operates like a typical Death and Taxes deck- deny resources while beating down with small, disruptive creatures. The main difference between the Eldrazi builds and traditional Death and Taxes is the usage of the sol land <span class="hover_img"><a href="" class="discussionA cardA">Eldrazi Temple<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Temple&type=card" class="popupImg"></span></a></span> to power out Eldrazi in earlier turns. This deck also utilizes hand disruption to attack the opponent's resources in <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=407519" class="discussionA cardA">Thought-Knot Seer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=407519&type=card" alt="Thought-Knot Seer" class="popupImg"></span></a></span> (and <span class="hover_img"><a href="" class="discussionA cardA">Tidehollow Sculler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Tidehollow+Sculler&type=card" class="popupImg"></span></a></span> in the B/W build), something not seen in Mono-White builds. The two most popular Eldrazi and Taxes builds are Mono White and Black White. The former gets better mana and still a plentiful amount of powerful threats, while the latter sacrifices mana consistency for powerful creatures like <span class="hover_img"><a href="" class="discussionA cardA">Tidehollow Sculler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Tidehollow+Sculler&type=card" class="popupImg"></span></a></span> and <span class="hover_img"><a href="" class="discussionA cardA">Wasteland Strangler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Wasteland+Strangler&type=card" class="popupImg"></span></a></span>.</p> 

            <br>
            <hr>
            <h2>Decklists:</h2>
            
                    <h3>Mono-W E&T</h3>
                    <div class="row decklist">

                <div class="col-sm-6">
                    <table class="table decklist table-condensed table-responsive">
                        <tbody>
                            <tr>
                                <th>Creatures:</th>
                            </tr>
                            <tr><!--Arbiter-->
                                <td>4&emsp;<span class="hover_img"><a href="#arbiter" class="cellA cardA">Leonin Arbiter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=209287&type=card" alt="Leonin Arbiter" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr>
                            <tr><!-- thalia -->
                                <td>4&emsp;<span class="hover_img"><a href="#thalia" class="cellA cardA">Thalia, Guardian of Thraben<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=270445&type=card" alt="Thalia, Guardian of Thraben" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr>
                            <tr><!-- thalia -->
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=Wall+Of+Omens" class="cellA cardA">Wall of Omens<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Wall+Of+Omens&type=card" alt="Wall of Omens" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr> 
                            <tr>
                                <td>3&emsp;<span class="hover_img"><a href="#splicer" class="cellA cardA">Blade Splicer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=233068&type=card" alt="Blade Splicer" class="popupImg"></span></a></span></td>
                                <td><img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/4/4d/2.svg?version=f1b6466668fd87239a5bff3ae4231800" alt="2"> <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w"></td>
                            </tr>
                            <tr>
                                <td>3&emsp;<span class="hover_img"><a href="#displacer" class="cellA cardA">Eldrazi Displacer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" alt="Eldrazi Displacer" class="popupImg"></span></a></span></td>
                                <td><img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/4/4d/2.svg?version=f1b6466668fd87239a5bff3ae4231800" alt="2"> <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w"></td>
                            </tr>
                            <tr><!-- flickerwisp -->
                                <td>4&emsp;<span class="hover_img"><a href="#wisp" class="cellA cardA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=151089&type=card" alt="Flickerwisp" class="popupImg"></span></a></span></td>
                                <td><img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr> 
                            <tr><!--Resto-->
                                <td>3&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=240096" class="cellA cardA">Restoration Angel<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=240096&type=card" alt="Restoration Angel" class="popupImg"></span></a></span></td>
                                 <td><img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8c/3.svg?version=2be20346c2303f7f6ce0bd9fb8accc10" alt="3">

                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="#TKS" class="cellA cardA">Thought-Knot Seer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=407519&type=card" alt="Thought-Knot Seer" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8c/3.svg?version=2be20346c2303f7f6ce0bd9fb8accc10" alt="3">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/1/1a/C.svg?version=773ac0a3e9cdd3e5a8f2749e382e860b" alt="colorless">
                                </td>
                            </tr>

                            <tr>
                                <th>Spells:</th>
                            </tr>
                           <tr>
                                <td>4&emsp;<span class="hover_img"><a href="#path" class="cellA cardA">Path to Exile<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=179235&type=card" alt="Path to Exile" class="popupImg"></span></a></span></td>
                                <td><img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w"></td>
                            </tr>
                            <tr>
                                <th>Artifacts:</th>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="#vial" class="cellA cardA">Aether Vial<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=48146&type=card" alt="Aether Vial" class="popupImg"></span></a></span></td>
                                <td><img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1"></td>
                            </tr>
                            <tr>
                                <th>Lands:</th>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="#temple" class="cellA cardA">Eldrazi Temple<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=198312&type=card" alt="Eldrazi Temple" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=field%20of%20ruin" class="cellA cardA">Field of Ruin<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=435415&type=card" alt="Field of Ruin" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="#quarter" class="cellA cardA">Ghost Quarter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=220371&type=card" alt="Ghost Quarter" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=130574" class="cellA cardA">Horizon Canopy<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=130574&type=card" alt="Horizon Canopy" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>7&emsp;<span class="hover_img"><a href="" class="cellA cardA">Plains<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Plains&type=card" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>3&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=shefet%20dunes" class="cellA cardA">Shefet Dunes<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=430872&type=card" alt="Shefet Dunes" class="popupImg"></span></a></span></td>
                            </tr>       
                            <tr>
                                <td><br><br><br><br><br><br><br><br><br><br><br><br><br></td>
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
                                <td>3&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=382179" class="cellA cardA">Burrenton Forge-Tender<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=382179&type=card" alt="Burrenton Forge-Tender" class="popupImg"></span></a></span></td>
                                <td><img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w"></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=Grafdigger's+Cage" class="cellA cardA">Grafdigger's Cage<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Grafdigger's+Cage&type=card" alt="Grafdigger's Cage" class="popupImg"></span></a></span></td>
                                <td><img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1"></td>
                            </tr>
                            <tr>
                                <td>2&emsp;<span class="hover_img"><a href="#rip" class="cellA cardA">Rest in Peace<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=277995&type=card" alt="Rest in Peace" class="popupImg"></span></a></span></td>
                                <td>
                                <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                        
                                    </td>
                            </tr>
                            <tr>
                                <td>3&emsp;<span class="hover_img"><a href="#stony" class="cellA cardA">Stony Silence<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=247425&type=card" alt="Stony Silence" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr>
                            
                            <tr>
                                <td>2&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=230082" class="cellA cardA">Dismember<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=230082&type=card" alt="Dismember" class="popupImg"></span></a></span></td>
                                <td>
                                     <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/4/4f/BP.svg?version=4bcd19625e7bf0b6a4117ce409b30ce9" alt="phyrexian black">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/4/4f/BP.svg?version=4bcd19625e7bf0b6a4117ce409b30ce9" alt="phyrexian black">

                                    
                                </td>
                            </tr>
                            <tr><!-- Gideon -->
                                <td>2&emsp;<span class="hover_img"><a href="#gideon" class="cellA cardA">Gideon, Ally of Zendikar<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=401897&type=card" alt="Gideon, Ally of Zendikar" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/4/4d/2.svg?version=f1b6466668fd87239a5bff3ae4231800" alt="2">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr>
                            <tr>
                                <td>1&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=442923" class="cellA cardA">Shalai, Voice of Plenty<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=442923&type=card" alt="Shalai, Voice of Plenty" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8c/3.svg?version=2be20346c2303f7f6ce0bd9fb8accc10" alt="3">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr> 
                            <tr>
                                <td>1&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=83338" class="cellA cardA">Worship<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=83338&type=card" alt="Worship" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8c/3.svg?version=2be20346c2303f7f6ce0bd9fb8accc10" alt="3">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr>
                            <tr>
                                <td><br><br><br><br><br><br><br><br><br><br><br><br><br></td>
                            </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
                
                    <h3>BW Eldrazu & Taxes</h3>
                    <div class="row decklist">
                        <div class="col-sm-6">
                            <table class="table decklist table-condensed table-responsive">
                        <tbody>
                            <tr>
                                <th>Creatures</th>
                            </tr>
                            <tr><!--Arbiter-->
                                <td>4&emsp;<span class="hover_img"><a href="#arbiter" class="cellA cardA">Leonin Arbiter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=209287&type=card" alt="Leonin Arbiter" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr>
                            <tr><!--thalia-->
                                <td>4&emsp;<span class="hover_img"><a href="#thalia" class="cellA cardA">Thalia, Guardian of Thraben<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=270445&type=card" alt="Thalia, Guardian of Thraben" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="#sculler" class="cellA cardA">Tidehollow Sculler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=175054&type=card" alt="Tidehollow Sculler" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/2/2f/B.svg?version=136b1e093eb615c4a6e2eff3e89126e3" alt="b">
                                
                                    
                                </td>

                            </tr>

                            <tr>
                                <td>2&emsp;<span class="hover_img"><a href="#splicer" class="cellA cardA">Blade Splicer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Blade+Splicer&type=card" alt="Blade Splicer" class="popupImg"></span></a></span></td>
                                <td><img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/4/4d/2.svg?version=f1b6466668fd87239a5bff3ae4231800" alt="2"> <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w"></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="#displacer" class="cellA cardA">Eldrazi Displacer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=407523&type=card" alt="Eldrazi Displacer" class="popupImg"></span></a></span></td>
                                <td><img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/4/4d/2.svg?version=f1b6466668fd87239a5bff3ae4231800" alt="2"> <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w"></td>
                            </tr>
                            <tr><!-- flickerwisp -->
                                <td>4&emsp;<span class="hover_img"><a href="#wisp" class="cellA cardA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=151089&type=card" alt="Flickerwisp" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr> 
                            <tr><!--Wasteland Strangler-->
                                <td>3&emsp;<span class="hover_img"><a href="#strangler" class="cellA cardA">Wasteland Strangler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=402096&type=card" alt="Wasteland Strangler" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/4/4d/2.svg?version=f1b6466668fd87239a5bff3ae4231800" alt="2">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/2/2f/B.svg?version=136b1e093eb615c4a6e2eff3e89126e3" alt="b">
                                </td>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="#tks" class="cellA cardA">Thought-Knot Seer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=407519&type=card" alt="Thought-Knot Seer" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8c/3.svg?version=2be20346c2303f7f6ce0bd9fb8accc10" alt="3">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/1/1a/C.svg?version=773ac0a3e9cdd3e5a8f2749e382e860b" alt="colorless">
                                </td>
                            </tr>
                            <tr>
                                <th>Spells:</th>
                            </tr>
                           <tr>
                                <td>4&emsp;<span class="hover_img"><a href="#path" class="cellA cardA">Path to Exile<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=179235&type=card" alt="Path to Exile" class="popupImg"></span></a></span></td>
                                <td><img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w"></td>
                            </tr>
                            <tr>
                                <th>Artifacts:</th>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="#vial" class="cellA cardA">Aether Vial<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=48146&type=card" alt="Aether Vial" class="popupImg"></span></a></span></td>
                                <td><img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1"></td>
                            </tr>
                <!--LANDS--><tr>
                                <th>Lands:</th>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=398504" class="cellA cardA">Caves of Koilos<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=398504&type=card" alt="Caves of Koilos" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=417818" class="cellA cardA">Concealed Courtyard<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=417818&type=card" alt="Concealed Courtyard" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="#temple" class="cellA cardA">Eldrazi Temple<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=198312&type=card" alt="Eldrazi Temple" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="#quarter" class="cellA cardA">Ghost Quarter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=220371&type=card" alt="Ghost Quarter" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<span class="hover_img"><a href="" class="cellA cardA">Godless Shrine<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Godless+Shrine&type=card" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>2&emsp;<span class="hover_img"><a href="" class="cellA cardA">Plains<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Plains&type=card" class="popupImg"></span></a></span></td>
                            </tr>
                           
                            <tr>
                                <td>3&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=402031" class="cellA cardA">Shambling Vent<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=402031&type=card" alt="Shambling Vent" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<span class="hover_img"><a href="" class="cellA cardA">Swamp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Swamp&type=card" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td><br><br><br><br><br><br><br><br><br><br><br><br><br></td>
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
                                <td>1&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=Grafdigger's+Cage" class="cellA cardA" onclick="return false;">Grafdigger's Cage<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Grafdigger's+Cage&type=card" alt="Grafdigger's Cage" class="popupImg"></span></a></span></td>
                                <td><img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1"></td>
                            </tr>
                            <tr>
                                <td>2&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=423724" class="cellA cardA">Fatal Push<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=423724&type=card" alt="Fatal Push" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/2/2f/B.svg?version=136b1e093eb615c4a6e2eff3e89126e3" alt="b">
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>1&emsp;<span class="hover_img"><a href="" class="cellA cardA" onclick="return false;">Auriok Champion<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Auriok+Champion&type=card" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr>
                            <tr>
                                <td>2&emsp;<span class="hover_img"><a href="#rip" class="cellA cardA">Rest in Peace<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=277995&type=card" alt="Rest in Peace" class="popupImg"></span></a></span></td>
                                <td>
                                <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                        
                                    </td>
                            </tr>
                            <tr>
                                <td>3&emsp;<span class="hover_img"><a href="#stony" class="cellA cardA">Stony Silence<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=247425&type=card" alt="Stony Silence" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr>
                            <tr>
                                <td>1&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=230082" class="cellA cardA" onclick="return false;">Dismember<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=230082&type=card" alt="Dismember" class="popupImg"></span></a></span></td>
                                <td>
                                     <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/4/4f/BP.svg?version=4bcd19625e7bf0b6a4117ce409b30ce9" alt="phyrexian black">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/4/4f/BP.svg?version=4bcd19625e7bf0b6a4117ce409b30ce9" alt="phyrexian black">

                                    
                                </td>
                            </tr>
                            <tr>
                                <td>1&emsp;<span class="hover_img"><a href="" class="cellA cardA" onclick="return false;">Kambal, Consul of Allocation<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Kambal,+Consul+Of+Allocation&type=card" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                     <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/2/2f/B.svg?version=136b1e093eb615c4a6e2eff3e89126e3" alt="b">
                                        
                                </td>
                            </tr>
                            <tr>
                                <td>2&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=96844" class="cellA cardA">Orzhov Pontiff<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=96844&type=card" alt="Orzhov Pontiff" class="popupImg"></span></a></span>
                                </td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                     <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/2/2f/B.svg?version=136b1e093eb615c4a6e2eff3e89126e3" alt="b">
                                        
                                </td>
                            </tr>
                            <tr><!-- Gideon -->
                                <td>2&emsp;<span class="hover_img"><a href="#gideon" class="cellA cardA">Gideon, Ally of Zendikar<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=401897&type=card" alt="Gideon, Ally of Zendikar" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/4/4d/2.svg?version=f1b6466668fd87239a5bff3ae4231800" alt="2">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr>
                            
                            <tr>
                                <td><br><br><br><br><br><br><br><br><br><br><br><br><br></td>
                            </tr>
                        </tbody>
                    </table>              
                </div>
            </div>
            
            <!-- delete; have nav within decklists-->
            <!--<h2>Quick Nav:</h2>
            <div class="row">
                <div class="col-sm-6">
                    <h3>Creatures:</h3>
                    <ul class="cardList">
                        <li><a class="entCards" data-toggle="collapse" data-parent="#accordion1" data-target="#collapse1a" href="#displacer">Eldrazi Displacer</a></li>
                        <li><a class="entCards" data-toggle="collapse" data-parent="#accordion1" data-target="#collapse2a" href="#strangler">Wasteland Strangler</a></li>
                        <li><a class="entCards" data-toggle="collapse" data-parent="#accordion1" data-target="#collapse3a" href="#TKS">Thought-Knot Seer</a></li>
                        <li><a class="entCards" data-toggle="collapse" data-parent="#accordion2" data-target="#collapse1b" href="#thalia">Thalia, Guardian of Thraben</a></li>
                        <li><a class="entCards" data-toggle="collapse" data-parent="#accordion2" data-target="#collapse2b" href="#sculler">Tidehollow Sculler</a></li>
                        <li><a class="entCards" data-toggle="collapse" data-parent="#accordion2" data-target="#collapse3b" href="#arbiter">Leonin Arbiter</a></li>
                        <li><a class="entCards" data-toggle="collapse" data-parent="#accordion3" data-target="#collapse1c" href="#wisp">Flickerwisp- the flying eldrazi hatebear</a></li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <h3>Non-Creatures:</h3>
                    <ul class="cardList">
                        <li><a class="entCards" data-toggle="collapse" data-parent="#accordion4" data-target="#collapse1d" href="#vial">Aether Vial</a></li>
                        <li><a class="entCards" data-toggle="collapse" data-parent="#accordion4" data-target="#collapse2d" href="#path">Path to Exile</a></li>
                        <li><a class="entCards" data-toggle="collapse" data-parent="#accordion4" data-target="#collapse3d" href="#quarter">Ghost Quarter</a></li>
                    </ul>
                </div>
            </div>-->

            
            <br>
            <hr>
            <h2 class="text-center">Specific Cards:</h2>
            <div class="panel-group" id="accordion1">
            <div class="row">
                <div class="col-sm-9">
            <div class="panel panel-format entPanel">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a id="displacer" class="entCards" data-toggle="collapse" data-parent="#accordion1" href="#collapse1a">Eldrazi Displacer</a>
                  </h3>
                </div>
                <div id="collapse1a" class="panel-collapse collapse">
                  <div class="panel-body">
                    <h3>About:</h3>
                    <p class="ent"><span class="hover_img"><a href="" class="discussionA cardA">Eldrazi Displacer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="popupImg"></span></a></span> gives the deck more staying power and long game strength, all thanks to its powerful activated ability. <span class="hover_img"><a href="" class="discussionA cardA">Eldrazi Displacer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="popupImg"></span></a></span> early on is not very threatening, as a 3/3 for 3 is nothing special, but its activated ability can be utilized in many scenarios, from tapping down opposing blockers to push through damage to giving the deck the engine needed to grind out the win.</p>
                    <h3>Eldrazi Displacer's Ability:</h3>
                    <p class="ent">Two parts of the cost to activate <span class="hover_img"><a href="" class="discussionA cardA">Eldrazi Displacer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="popupImg"></span></a></span> are worth noting- one, you must have a colorless mana source in order to activate it, so leaving your <span class="hover_img"><a href="" class="discussionA cardA">Ghost Quarter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Ghost+Quarter&type=card" class="popupImg"></span></a></span> in play to keep using <span class="hover_img"><a href="" class="discussionA cardA">Eldrazi Displacer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="popupImg"></span></a></span> should be considered. Also, to our advantage, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=198312" class="discussionA cardA">Eldrazi Temple<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=198312&type=card" alt="Eldrazi Temple" class="popupImg"></span></a></span>'s sol capabilities extend to eldrazi activated abilities, essentially providing two colorless sources to pay for <span class="hover_img"><a href="" class="discussionA cardA">Eldrazi Displacer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="popupImg"></span></a></span>. So if you have four plains in play along with an <span class="hover_img"><a href="" class="discussionA cardA">Eldrazi Temple<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Temple&type=card" class="popupImg"></span></a></span>, you can activate <span class="hover_img"><a href="" class="discussionA cardA">Eldrazi Displacer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="popupImg"></span></a></span> twice (but it needs to be on the same phase). 
                    <br> 
                    <span class="hover_img"><a href="" class="discussionA cardA">Eldrazi Displacer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="popupImg"></span></a></span>'s activated ability, as mentioned above, gives the deck a solid long game plan. <span class="hover_img"><a href="" class="discussionA cardA">Eldrazi Displacer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="popupImg"></span></a></span> can be used to save your creatures from spot removal (NOT BOARDWIPES). Keep in mind, if it's obvious your opponent is holding up a removal spell (like <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Fatal Push<span><img src="" alt="" class="popupImg"></span></a></span>), than refusing to activate <span class="hover_img"><a href="" class="discussionA cardA">Eldrazi Displacer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="popupImg"></span></a></span> end of turn can save you creatures. <span class="hover_img"><a href="" class="discussionA cardA">Eldrazi Displacer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="popupImg"></span></a></span> can also be used in conjunction with <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=175054" class="discussionA cardA">Tidehollow Sculler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=175054&type=card" alt="Tidehollow Sculler" class="popupImg"></span></a></span>/<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=407519" class="discussionA cardA">Thought-Knot Seer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=407519&type=card" alt="Thought-Knot Seer" class="popupImg"></span></a></span> to take a new card from their hand (but this doesn't grant your opponent card disadvantage!). However, if you have enough mana for multiple <span class="hover_img"><a href="" class="discussionA cardA">Eldrazi Displacer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="popupImg"></span></a></span> activations in a row, you can permanently steal a card from their hand with <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Tidehollow Sculler<span><img src="" alt="" class="popupImg"></span></a></span>- blink him, than blink him in response to the trigger. <span class="hover_img"><a href="" class="discussionA cardA">Eldrazi Displacer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="popupImg"></span></a></span> can also be used to kill creatures with wasteland strangler (so long as they have cards left in their exile zone).
                    <br> 
                    The most powerful usage of <span class="hover_img"><a href="" class="discussionA cardA">Eldrazi Displacer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="popupImg"></span></a></span> is with flickerwisp. Blinking wisp allows you to dodge board wipes, tap down lands, artifacts, walkers, etc. More on wisp interactions in Flickerwisp's section.
                    <br> 
                    <span class="hover_img"><a href="" class="discussionA cardA">Eldrazi Displacer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="popupImg"></span></a></span>'s ability can also be used on opponent's creatures. Displacering attacking creatures can help deal with aggro decks, while tapping down blockers can help win the game. <span class="hover_img"><a href="" class="discussionA cardA">Eldrazi Displacer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="popupImg"></span></a></span> can also kill opposing tokens. 
                    </p>
                  </div>
                </div>
              </div>
              <img class="entImg" src="http://www.manaleak.com/mtguk/files/2016/11/Eldrazi-Displacer.jpg" alt="Eldrazi Displacer">
                </div>
                <div class="col-sm-3">
                    <img class="entCardImg" src="https://i.imgur.com/uVcdchJ.png">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9">
                    <div class="panel panel-format entPanel">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a id="strangler" class="entCards" data-toggle="collapse" data-parent="#accordion1" href="#collapse2a">Wasteland Strangler</a>
                  </h3>
                </div>
                <div id="collapse2a" class="panel-collapse collapse">
                  <div class="panel-body">
                    <h3>About:</h3>
                    <p class="ent"><span class="hover_img"><a href="" class="discussionA cardA">Wasteland Strangler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Wasteland+Strangler&type=card" class="popupImg"></span></a></span> is strongest against smaller creature decks, as it gives you a powerful 2-1 (sometimes even 3-1) on a cheap, fair-stated creature. Killing a creature and being left with a 3-2 for the cost of three mana is no small play. Even when they lack small creatures (or cards in their exile zone), strangler is still a fair beater.</p>
                    <h3>Specifics: the Exiled Card</h3>
                    <p class="ent"><span class="hover_img"><a href="" class="discussionA cardA">Wasteland Strangler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Wasteland+Strangler&type=card" class="popupImg"></span></a></span>'s cost of moving a card from your opponent's exile zone into their graveyard may seem like a drawback, but way too often it can be abused to the point of making this 3 mana spell a 3-1. Eldrazi and Taxes has many ways to exile cards from your opponent- from <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=179235" class="discussionA cardA">Path to Exile<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=179235&type=card" alt="Path to Exile" class="popupImg"></span></a></span> to <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=407519" class="discussionA cardA">Thought-Knot Seer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=407519&type=card" alt="Thought-Knot Seer" class="popupImg"></span></a></span>. Sometimes you exile a powerful spell like <span class="hover_img"><a href="" class="discussionA cardA">Snapcaster Mage<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Snapcaster+Mage&type=card" class="popupImg"></span></a></span> or <span class="hover_img"><a href="" class="discussionA cardA">Supreme Verdict<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Supreme+Verdict&type=card" class="popupImg"></span></a></span> and despite returning it to their yard fearing recruitability from certain cards. However, this downside is very match and scenario specific, and is easily trumped by the upside. Two of your cards temporarily exile permanents your opponent owns. The most common of these cards, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=175054" class="discussionA cardA">Tidehollow Sculler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=175054&type=card" alt="Tidehollow Sculler" class="popupImg"></span></a></span>, only keeps the card exile so long as it remains in play. <span class="hover_img"><a href="" class="discussionA cardA">Wasteland Strangler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Wasteland+Strangler&type=card" class="popupImg"></span></a></span> can then put the exiled card into your oppoennt's graveyard, which would make <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=175054" class="discussionA cardA">Tidehollow Sculler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=175054&type=card" alt="Tidehollow Sculler" class="popupImg"></span></a></span>'s death bring back no cards, letting you then blink the <span class="hover_img"><a href="" class="discussionA cardA">Tidehollow Sculler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Tidehollow+Sculler&type=card" class="popupImg"></span></a></span> to take a card with no downside. The sweeter, but less common, play is to <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=151089" class="discussionA cardA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=151089&type=card" alt="Flickerwisp" class="popupImg"></span></a></span> a permanent they control, than use <span class="hover_img"><a href="" class="discussionA cardA">Wasteland Strangler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Wasteland+Strangler&type=card" class="popupImg"></span></a></span> to put that  exiled card into their graveyard, turning <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=151089" class="discussionA cardA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=151089&type=card" alt="Flickerwisp" class="popupImg"></span></a></span> into a <span class="hover_img"><a href="" class="discussionA cardA">Vindicate<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Vindicate&type=card" class="popupImg"></span></a></span> on a 3/1 flier for 3. </p>
                  </div>
                </div>
              </div>
              <img class="entImg" src="https://magic.wizards.com/sites/mtg/files/images/hero/yVwwxVHdWK_icon.jpg" alt="Wasteland Strangler">
                </div>
                <div class="col-sm-3">
                    <img class="entCardImg" src="http://static.starcitygames.com/sales/cardscans/MTG/BFZ/en/nonfoil/WastelandStrangler.jpg" alt="Wasteland Strangler">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9">
                    <div class="panel panel-format entPanel">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a id="TKS" class="entCards" data-toggle="collapse" data-parent="#accordion1" href="#collapse3a">Thought-Knot Seer</a>
                  </h3>
                </div>
                <div id="collapse3a" class="panel-collapse collapse">
                  <div class="panel-body">
                    <h3>About:</h3>
                    <p class="ent"><span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=407519" class="discussionA cardA">Thought-Knot Seer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=407519&type=card" alt="Thought-Knot Seer" class="popupImg"></span></a></span> is a powerhouse in the deck. While it does cost four mana, it provides a 4/4 body (dodges <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=397722" class="discussionA cardA">Lightning Bolt<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=397722&type=card" alt="Lightning Bolt" class="popupImg"></span></a></span>) that takes a card from the opponent forever, as upon death it draws them a card rather than returning it to their hand, making it a stronger form of disruption than <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=175054" class="discussionA cardA">Tidehollow Sculler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=175054&type=card" alt="Tidehollow Sculler" class="popupImg"></span></a></span>. <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=407519" class="discussionA cardA">Thought-Knot Seer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=407519&type=card" alt="Thought-Knot Seer" class="popupImg"></span></a></span> can come down as early as turn 2 thanks to <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=198312" class="discussionA cardA">Eldrazi Temple<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=198312&type=card" alt="Eldrazi Temple" class="popupImg"></span></a></span> (a feared play by much of the Modern community).</p>
                  </div>
                </div>
              </div>
              <img class="entImg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ62fVn7S6Rm5P6dLmpzh9ubxLuAw8EbO9Bj0Ztl8HDGFlu8WalaQ" alt="Thought-Knot Seer">
                </div>
                <div class="col-sm-3">
                    <img class="entCardImg" src="https://images-na.ssl-images-amazon.com/images/I/51VzmhKoDiL.jpg" alt="Thought-Knot Seer">
                </div>
            </div>
        </div>
        <div class="panel-group" id="accordion2">
            <div class="row">
                <div class="col-sm-9">
                    <div class="panel panel-format entPanel">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a id="thalia" class="entCards" data-toggle="collapse" data-parent="#accordion2" href="#collapse1b">Thalia, Guardian of Thraben</a>
                  </h3>
                </div>
                <div id="collapse1b" class="panel-collapse collapse">
                  <div class="panel-body">
                    <h3>About:</h3>
                    <p class="ent"><span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=270445" class="discussionA cardA">Thalia, Guardian of Thraben<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=270445&type=card" alt="Thalia, Guardian of Thraben" class="popupImg"></span></a></span>'s taxing effect is strongest against decks that utilize cheap noncreature spells in modern- control decks and spell-based combo decks. While she does not shine in creature mirrors, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=270445" class="discussionA cardA">Thalia, Guardian of Thraben<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=270445&type=card" alt="Thalia, Guardian of Thraben" class="popupImg"></span></a></span> is still a two mana 2/1 creature with first strike, which allows her to freely block <span class="hover_img"><a href="" class="discussionA cardA">Snapcaster Mage<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Snapcaster+Mage&type=card" class="popupImg"></span></a></span>s, <span class="hover_img"><a href="" class="discussionA cardA">Goblin Guide<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Goblin+Guide&type=card" class="popupImg"></span></a></span>s, <span class="hover_img"><a href="" class="discussionA cardA">Eidolon of the Great Revel<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eidolon+Of+The+Great+Revel&type=card" class="popupImg"></span></a></span>s, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=83771" class="discussionA cardA">Dark Confidant<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=83771&type=card" alt="Dark Confidant" class="popupImg"></span></a></span>, and more.</p>
                    <h3>Thalia's Tax Notes:</h3>
                    <p class="ent">A few important notes about <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=270445" class="discussionA cardA">Thalia, Guardian of Thraben<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=270445&type=card" alt="Thalia, Guardian of Thraben" class="popupImg"></span></a></span>'s tax. For one, it applies for spells that are casted. Therefore, your opponent does not have to pay an additional mana for suspending <span class="hover_img"><a href="" class="discussionA cardA">Rift Bolt<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Rift+Bolt&type=card" class="popupImg"></span></a></span>, but they must pay an additional mana to cast the <span class="hover_img"><a href="" class="discussionA cardA">Rift Bolt<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Rift+Bolt&type=card" class="popupImg"></span></a></span> once it hits 0 time counters. Her tax also applies to cascaded noncreature spells, so if your opponent tries to <span class="hover_img"><a href="" class="discussionA cardA">Violent Outburst<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Violent+Outburst&type=card" class="popupImg"></span></a></span> into <span class="hover_img"><a href="" class="discussionA cardA">Living End<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Living+End&type=card" class="popupImg"></span></a></span> when you have a <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=270445" class="discussionA cardA">Thalia, Guardian of Thraben<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=270445&type=card" alt="Thalia, Guardian of Thraben" class="popupImg"></span></a></span> in play, they must have 5 mana available, else they will be unable to cast the <span class="hover_img"><a href="" class="discussionA cardA">Living End<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Living+End&type=card" class="popupImg"></span></a></span>. The one spell <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=270445" class="discussionA cardA">Thalia, Guardian of Thraben<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=270445&type=card" alt="Thalia, Guardian of Thraben" class="popupImg"></span></a></span>'s tax ignores (sort of) is <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=50139" class="discussionA cardA">Engineered Explosives<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=50139&type=card" alt="Engineered Explosives" class="popupImg"></span></a></span>. Since the card enters with sunburst counters based on the colors spent, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=50139" class="discussionA cardA">Engineered Explosives<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=50139&type=card" alt="Engineered Explosives" class="popupImg"></span></a></span> can be cast under <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=270445" class="discussionA cardA">Thalia, Guardian of Thraben<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=270445&type=card" alt="Thalia, Guardian of Thraben" class="popupImg"></span></a></span> for X=1, spending a blue and red mana, and then have two counters.
                    </p>
                  </div>
                </div>
              </div>
              <img class="entImg" src="https://orig00.deviantart.net/df4a/f/2012/012/0/4/thalia__guardian_of_thraben_by_algenpfleger-d4m3bms.jpg" alt="Thalia, Guardian of Thraben">
                </div>
                <div class="col-sm-3">
                    <img class="entCardImg" src="http://www.mythicspoiler.com/dka/cards/thaliaguardianofthraben.jpg" alt="Thalia, Guardian of Thraben">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9">
                    <div class="panel panel-format entPanel">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a id="sculler" class="entCards" data-toggle="collapse" data-parent="#accordion2" href="#collapse2b">Tidehollow Sculler</a>
                  </h3>
                </div>
                <div id="collapse2b" class="panel-collapse collapse">
                  <div class="panel-body">
                    <h3>About:</h3>
                    <p class="ent"><span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=175054" class="discussionA cardA">Tidehollow Sculler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=175054&type=card" alt="Tidehollow Sculler" class="popupImg"></span></a></span> acts as a mini <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=407519" class="discussionA cardA">Thought-Knot Seer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=407519&type=card" alt="Thought-Knot Seer" class="popupImg"></span></a></span>, being able to take any nonland card on a 2/2 body for the prices of two mana. Unlike <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=407519" class="discussionA cardA">Thought-Knot Seer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=407519&type=card" alt="Thought-Knot Seer" class="popupImg"></span></a></span>, however, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=175054" class="discussionA cardA">Tidehollow Sculler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=175054&type=card" alt="Tidehollow Sculler" class="popupImg"></span></a></span> will return the card after it leaves the battlefield, rather than drawing a new one.</p>
                    <h3>How to Abuse <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=175054" class="discussionA cardA">Tidehollow Sculler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=175054&type=card" alt="Tidehollow Sculler" class="popupImg"></span></a></span>'s ETB:</h3>
                    <p class="ent"><span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=175054" class="discussionA cardA">Tidehollow Sculler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=175054&type=card" alt="Tidehollow Sculler" class="popupImg"></span></a></span>'s trigger is worded in the older format- meaning that if the <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=175054" class="discussionA cardA">Tidehollow Sculler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=175054&type=card" alt="Tidehollow Sculler" class="popupImg"></span></a></span> is removed from play before taking a nonland card, it will <i>not</i> return the card to the opponent. Because of this, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=151089" class="discussionA cardA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=151089&type=card" alt="Flickerwisp" class="popupImg"></span></a></span> and <span class="hover_img"><a href="" class="discussionA cardA">Eldrazi Displacer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="popupImg"></span></a></span> can be used to abuse <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=175054" class="discussionA cardA">Tidehollow Sculler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=175054&type=card" alt="Tidehollow Sculler" class="popupImg"></span></a></span>'s etb trigger by blinking it before the trigger to steal a card resolves.</p>
                
                  </div>
                </div>
              </div>
                <img class="entImg" src="http://78.media.tumblr.com/cd342f1bf8ee7ae01b04658c5e066bf4/tumblr_nbt5e0izvG1thxsmlo1_1280.jpg" alt="Tidehollow Sculler">
            </div>
                <div class="col-sm-3">
                    <img class="entCardImg" src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=175054&type=card" alt="Tidehollow Sculler">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9">
                    <div class="panel panel-format entPanel">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a id="arbiter" class="entCards" data-toggle="collapse" data-parent="#accordion2" href="#collapse3b">
                    Leonin Arbiter</a>
                  </h3>
                </div>
                <div id="collapse3b" class="panel-collapse collapse">
                  <div class="panel-body">
                    <h3>About:</h3>
                    <p class="ent"><span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=209287" class="discussionA cardA">Leonin Arbiter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=209287&type=card" alt="Leonin Arbiter" class="popupImg"></span></a></span> turns your opponent's fetches into really bad "ramp" spells, and your <span class="hover_img"><a href="" class="discussionA cardA">Ghost Quarter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Ghost+Quarter&type=card" class="popupImg"></span></a></span>s into pseudo <span class="hover_img"><a href="" class="discussionA cardA">Strip Mine<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Strip+Mine&type=card" class="popupImg"></span></a></span>s. In addition, using a <span class="hover_img"><a href="" class="discussionA cardA">Restoration Angel<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Restoration+Angel&type=card" class="popupImg"></span></a></span> or <span class="hover_img"><a href="" class="discussionA cardA">Eldrazi Displacer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="popupImg"></span></a></span> to blink <span class="hover_img"><a href="" class="discussionA cardA">Leonin Arbiter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Leonin+Arbiter&type=card" class="popupImg"></span></a></span> after the opponent payed the two mana to ignore his tax, the opponent will have to pay an additional two mana else they will be unable to search their library.</p>
                  </div>
                </div>
              </div>
              <img class="entImg" src="http://modernnexus.com/wp-content/uploads/2015/03/629x350xjd543fgdsfse.jpg.pagespeed.ic.pWe07RYLt4.jpg" alt="Leonin Arbiter">
                </div>
                <div class="col-sm-3">
                    <img class="entCardImg" src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=209287&type=card" alt="Leonin Arbiter">
                </div>
            </div>
            </div>  
            <div class="row">
                <div class="col-sm-9">
                    <div class="panel panel-format entPanel">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a id="splicer" class="entCards" data-toggle="collapse" data-parent="#accordion2" href="#collapse4b">
                    Blade Splicer</a>
                  </h3>
                </div>
                <div id="collapse4b" class="panel-collapse collapse">
                  <div class="panel-body">
                    <h3>About:</h3>
                    <p class="ent"><span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Blade Splicer<span><img src="" alt="" class="popupImg"></span></a></span>'s main use in the deck is attacking well, providing defense versus creature-based strategies, and giving blinkers like <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Flickerwiso<span><img src="" alt="" class="popupImg"></span></a></span> and <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Restoration Angel<span><img src="" alt="" class="popupImg"></span></a></span> a strong objective. Blinking <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Blade Splicer<span><img src="" alt="" class="popupImg"></span></a></span> is great value against a wide variety of decks. In addition, having a large mass of 3/3 first strike creatures can prevent decks like BR Hollow One and Humans from attacking. Note, the golems only have first strike if the 1/1 part of <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Blade Splicer<span><img src="" alt="" class="popupImg"></span></a></span> is on the battlefield. Another noteworthy point is that <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Blade Splicer<span><img src="" alt="" class="popupImg"></span></a></span> golems plus a <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Thalia, Guardian of Thraben<span><img src="" alt="" class="popupImg"></span></a></span> can eat creatures with their first strike.</p>
                  </div>
                </div>
              </div>
              <img class="entImg" src="http://magic.wizards.com/sites/mtg/files/image_legacy_migration/images/magic/daily/rc/rc189_bla.jpg" alt="Blade Splicer">
                </div>
                <div class="col-sm-3">
                    <img class="entCardImg" src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Blade%20Splicer&type=card" alt="Blade Splicer">
                </div>
            </div>
                
            <div class="panel-group" id="accordion3">
            <div class="row">
                <div class="col-sm-9">
                    <div class="panel panel-format entPanel">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a id="wisp" class="entCards" data-toggle="collapse" data-parent="#accordion3" href="#collapse1c">Flickerwisp- the flying eldrazi hatebear</a>
                  </h3>
                </div>
                <div id="collapse1c" class="panel-collapse collapse">
                  <div class="panel-body">
                    <h3>About:</h3>
                    <p class="ent"><span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=151089" class="discussionA cardA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=151089&type=card" alt="Flickerwisp" class="popupImg"></span></a></span>, on its own, it an unimpressive card. A 3 mana 3/1 flier that blinks sometimes till end of turn is not great, especially in a fast format like modern. However, paired with certain cards, especially <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=48146" class="discussionA cardA">Aether Vial<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=48146&type=card" alt="Aether Vial" class="popupImg"></span></a></span>, transform this seemingly innocent creature into one of the most powerful and feared spells in your deck.</p>
                    <h3><span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=151089" class="discussionA cardA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=151089&type=card" alt="Flickerwisp" class="popupImg"></span></a></span> Interactions:</h3>
                    <p class="ent">The most famous interaction with <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=151089" class="discussionA cardA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=151089&type=card" alt="Flickerwisp" class="popupImg"></span></a></span> is giving it flash with <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=48146" class="discussionA cardA">Aether Vial<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=48146&type=card" alt="Aether Vial" class="popupImg"></span></a></span> on 3. Doing this grants you a 3/1 flier that can save a creature from removal, remove a blocker or attacker for the turn, kill a token at instant speed, "port" a land, stop a planeswalker from ultimating or just using its abilities for a turn, stopping pump spells, letting you blink creatures at instant speed for their etb effects, regain creatures that were stolen, turn off a <span class="hover_img"><a href="" class="discussionA cardA">Blood Moon<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Blood+Moon&type=card" class="popupImg"></span></a></span> so you can cast your spells, and many other plays. <a href="/articles/flickerwisp">More on flickerwisp specifics here.</a>
                    </p>
                  </div>
                </div>
              </div>
              <img class="entImg" src="http://4.bp.blogspot.com/-2P_cmFM58Y0/Vf_dRSNn_qI/AAAAAAAAE1w/hJ2UYfXJTmU/s1600/flickerwisp.jpg" alt="Flickerwisp">
                </div>
                <div class="col-sm-3">
                    <img class="entCardImg" src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=430548&type=card" alt="Flickerwisp">
                </div>
            </div>
            </div>
            <div class="panel-group" id="accordion4">
            <div class="row">
                <div class="col-sm-9">
                    <div class="panel panel-format entPanel">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a id="vial" class="entCards" data-toggle="collapse" data-parent="#accordion4" href="#collapse1d">Aether Vial</a>
                  </h3>
                </div>
                <div id="collapse1d" class="panel-collapse collapse">
                  <div class="panel-body">
                    <h3>About:</h3>
                    <p class="ent"><span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=48146" class="discussionA cardA">Aether Vial<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=48146&type=card" alt="Aether Vial" class="popupImg"></span></a></span> allows the deck to interact on the opponent's turn- which makes bluffing a viable play. Passing with an <span class="hover_img"><a href="" class="discussionA cardA">Aether Vial<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Aether+Vial&type=card" class="popupImg"></span></a></span> on three can be interpreted by your opponent as you having a <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=151089" class="discussionA cardA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=151089&type=card" alt="Flickerwisp" class="popupImg"></span></a></span>, <span class="hover_img"><a href="" class="discussionA cardA">Eldrazi Displacer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi+Displacer&type=card" class="popupImg"></span></a></span>, or <span class="hover_img"><a href="" class="discussionA cardA">Wasteland Strangler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Wasteland+Strangler&type=card" class="popupImg"></span></a></span> in hand, which can cause them to play less optimally. In addition to bluffing, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=48146" class="discussionA cardA">Aether Vial<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=48146&type=card" alt="Aether Vial" class="popupImg"></span></a></span>'s ability of giving your creatures pseudo flash enables the deck to make some "unfair" plays- especially with <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=151089" class="discussionA cardA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=151089&type=card" alt="Flickerwisp" class="popupImg"></span></a></span>. <a href="/articles/aethervial">More tips & tricks regarding Aether Vial here</a></p>
                  </div>
                </div>
              </div>
              <img class="entImg" src="http://cantrip.ru/images/arts/AEther-Vial.jpg" alt="Aether Vial">
                </div>
                <div class="col-sm-3">
                    <img class="entCardImg" src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=48146&type=card" alt="Aether Vial">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9">
                    <div class="panel panel-format entPanel">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a id="path" class="entCards" data-toggle="collapse" data-parent="#accordion4" href="#collapse2d">Path to Exile</a>
                  </h3>
                </div>
                <div id="collapse2d" class="panel-collapse collapse">
                  <div class="panel-body">
                    <h3>About:</h3>
                    <p class="ent"><span class="hover_img"><a href="" class="discussionA cardA">Path to Exile<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Path+to+Exile&type=card" class="popupImg"></span></a></span> serves as your modern <span class="hover_img"><a href="" class="discussionA cardA">Swords to Plowshares<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Swords+To+Plowshares&type=card" class="popupImg"></span></a></span>- one mana removal spell with a small downside. In fact, unlike <span class="hover_img"><a href="" class="discussionA cardA">Swords to Plowshares<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Swords+To+Plowshares&type=card" class="popupImg"></span></a></span>, <span class="hover_img"><a href="" class="discussionA cardA">Path to Exile<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Path+to+Exile&type=card" class="popupImg"></span></a></span> can sometimes just be a one mana kill spell without downside, paired with <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=209287" class="discussionA cardA">Leonin Arbiter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=209287&type=card" alt="Leonin Arbiter" class="popupImg"></span></a></span>. Also, <span class="hover_img"><a href="" class="discussionA cardA">Path to Exile<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Path+to+Exile&type=card" class="popupImg"></span></a></span> has nice synergy with <span class="hover_img"><a href="" class="discussionA cardA">Wasteland Strangler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Wasteland+Strangler&type=card" class="popupImg"></span></a></span>, as it exiles the creature, enabling <span class="hover_img"><a href="" class="discussionA cardA">Wasteland Strangler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Wasteland+Strangler&type=card" class="popupImg"></span></a></span> to use it to kill another one on the battlefield.</p>
                  </div>
                </div>
              </div>
              <img class="entImg" src="https://i.imgur.com/m3UZkQK.jpg" alt="Path to Exile">
                </div>
                <div class="col-sm-3">
                    <img class="entCardImg" src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=179235&type=card" alt="Path to Exile">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9">
                    <div class="panel panel-format entPanel">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a id="quarter" class="entCards" data-toggle="collapse" data-parent="#accordion4" href="#collapse3d">Ghost Quarter</a>
                  </h3>
                </div>
                <div id="collapse3d" class="panel-collapse collapse">
                  <div class="panel-body">
                    <h3>About:</h3>
                    <p class="ent"><span class="hover_img"><a href="" class="discussionA cardA">Ghost Quarter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Ghost+Quarter&type=card" class="popupImg"></span></a></span>, when paired with <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=209287" class="discussionA cardA">Leonin Arbiter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=209287&type=card" alt="Leonin Arbiter" class="popupImg"></span></a></span>, acts as a pseudo <span class="hover_img"><a href="" class="discussionA cardA">Strip Mine<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Strip+Mine&type=card" class="popupImg"></span></a></span>. Otherwise, the card is primarily used to keep your opponents off of a certain color or kill man lands. <span class="hover_img"><a href="" class="discussionA cardA">Ghost Quarter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Ghost+Quarter&type=card" class="popupImg"></span></a></span> can also act as <span class="hover_img"><a href="" class="discussionA cardA">Strip Mine<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Strip+Mine&type=card" class="popupImg"></span></a></span> vs. certain decks with only a few basics (Grixis Death Shadow, Zoo, BR Vengevine, etc.).</p>
                  </div>
                </div>
              </div>
              <img class="entImg" src="http://modernnexus.com/wp-content/uploads/2017/05/ghost-quarter-dissention-art-crop.jpg" alt="Ghost Quarter">
                </div>
                <div class="col-sm-3">
                    <img class="entCardImg" src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=220371&type=card" alt="Ghost Quarter">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9">
                    <div class="panel panel-format entPanel">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a id="temple" class="entCards" data-toggle="collapse" data-parent="#accordion4" href="#collapse3e">Eldrazi Temple</a>
                  </h3>
                </div>
                <div id="collapse3e" class="panel-collapse collapse">
                  <div class="panel-body">
                    <h3>About:</h3>
                    <p class="ent"><span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Eldrazi Temple<span><img src="" alt="" class="popupImg"></span></a></span> lets E&T power out Eldrazi like <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Eldrazi Displacer<span><img src="" alt="" class="popupImg"></span></a></span> and <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Thought-Knot Seer<span><img src="" alt="" class="popupImg"></span></a></span> a turn or two earlier than without <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Eldrazi Temple<span><img src="" alt="" class="popupImg"></span></a></span>. Having the ability to play a turn two <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Thought-Knot Seer<span><img src="" alt="" class="popupImg"></span></a></span> gives the deck power- a large number of modern decks are prone to hand disruption, especially when played early. <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Eldrazi Temple<span><img src="" alt="" class="popupImg"></span></a></span> also lets the deck use <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Eldrazi Displacer<span><img src="" alt="" class="popupImg"></span></a></span>'s ability more religiously. Against certain decks, like Humans, being able to activate <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Eldrazi Displacer<span><img src="" alt="" class="popupImg"></span></a></span> two or even three times in a turn is <i>very</i> important to success. The downside, of course, is <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Eldrazi Temple<span><img src="" alt="" class="popupImg"></span></a></span> does not tap for white mana or blow up one of our opponent's lands (which is what D&T's colorless lands are used for), but said downside is easily negated by the above upside and synergies with the deck. Without <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Eldrazi Temple<span><img src="" alt="" class="popupImg"></span></a></span>, chances are Eldrazi and Taxes will not even be a deck, as speed is key in the modern format.</p>
                  </div>
                </div>
              </div>
              <img class="entImg" src="https://cdna.artstation.com/p/assets/images/images/000/982/472/large/james-paick-127482.jpg?1437507210" alt="Eldrazi Temple">
                </div>
                <div class="col-sm-3">
                    <img class="entCardImg" src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eldrazi%20Temple&type=card" alt="Eldrazi Temple">
                </div>
            </div>

            </div>

            
            <!--<h5>Unique Interactions:</h5>-->
            <br>
            <hr>
            <h2>Sideboarding</h2>
            <br>
            <h3>Sideboard Stapes:</h3>

            <div class="panel-group" id="accordion5">
            <div class="row">
                <div class="col-sm-9">
                    <div class="panel panel-format entPanel">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a id="rip" class="entCards" data-toggle="collapse" data-parent="#accordion5" href="#collapse1e">Rest in Peace</a>
                  </h3>
                </div>
                <div id="collapse1e" class="panel-collapse collapse">
                  <div class="panel-body">
                    <h3>About:</h3>
                    <p class="ent"><span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Rest in Peace<span><img src="" alt="" class="popupImg"></span></a></span> is the deck's best way to beat graveyard strategies. While harder to cast in E&T, especially the B/W variant, <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Rest in Peace<span><img src="" alt="" class="popupImg"></span></a></span> is ultimately the best graveyard hate spell available to E&T. Of course, two mana can be too slow in many cases, but it does a much better job at preventing graveyard decks from enacting their gameplan compared to alternatives such as <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Grafdigger's Cage<span><img src="" alt="" class="popupImg"></span></a></span> and <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Relic of Progenitus<span><img src="" alt="" class="popupImg"></span></a></span>. Exiling cards forever means that, unlike <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Grafdigger's Cage<span><img src="" alt="" class="popupImg"></span></a></span>, if <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Rest in Peace<span><img src="" alt="" class="popupImg"></span></a></span> were to be removed, the opponent would start with an empty graveyard, whereas the artifact keeps their yard intact. <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Relic of Progenitus<span><img src="" alt="" class="popupImg"></span></a></span>'s main fallback is its lack of permanence- many graveyard decks are designed that they can beat a single-use graveyard exiling effect. In addition, by the time the deck can activate <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Relic of Progenitus<span><img src="" alt="" class="popupImg"></span></a></span>, a <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Rest in Peace<span><img src="" alt="" class="popupImg"></span></a></span> can already by cast.</p>
                    <br>
                    <p class="ent">
                        The whole reason graveyard hate is even necessary in E&T is that the deck is downright too fair and slow to challenge the explosivness of decks like Dredge and Bridgevine. While games will be won without ever casting a graveyard hate spell, the majority of the time the graveyard deck will operate much faster than E&T. <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Rest in Peace<span><img src="" alt="" class="popupImg"></span></a></span> also provides E&T with a way to deplete value off of certain powerful spells, such as <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Snapcaster Mage<span><img src="" alt="" class="popupImg"></span></a></span> and <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Tarmogoyf<span><img src="" alt="" class="popupImg"></span></a></span>, which can go a long way at generating value against slower decks. The card is, overall, very good at attacking a variety of strategies effectively, thus making it a staple in Eldrazi and Taxes (and really and variant of D&T).
                    </p>
                  </div>
                </div>
              </div>
              <img class="entImg" src="https://i.pinimg.com/originals/3e/30/6e/3e306e7bbf42595b0e339cc1925331a3.jpg" alt="Rest in Peace">
                </div>
                <div class="col-sm-3">
                    <img class="entCardImg" src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Rest+In+Peace&type=card" alt="Rest in Peace">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9">
                    <div class="panel panel-format entPanel">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a id="stony" class="entCards" data-toggle="collapse" data-parent="#accordion5" href="#collapse2e">Stony Silence</a>
                  </h3>
                </div>
                <div id="collapse2e" class="panel-collapse collapse">
                  <div class="panel-body">
                    <h3>About:</h3>
                    <p class="ent"><span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Stony Silence<span><img src="" alt="" class="popupImg"></span></a></span> plays the important role of shutting down the many artifact strategies present in modern. From aggressive Affinity to prison decks like Lantern, <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Stony Silence<span><img src="" alt="" class="popupImg"></span></a></span> can and will win games on its own so long as it stays in play. Unlike <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Rest in Peace<span><img src="" alt="" class="popupImg"></span></a></span>, <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Stony Silence<span><img src="" alt="" class="popupImg"></span></a></span> souly comes in against decks with a large sum of artifacts: Affinity, Lantern, UR Prison, KCI, Tron, and Modular Affinity are the primary matchups where <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Stony Silence<span><img src="" alt="" class="popupImg"></span></a></span> shines in.</p>
                    <br>
                    <h3>The non-bos (and how to board accordingly)</h3>
                    <p class="ent">The main downside to <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Stony Silence<span><img src="" alt="" class="popupImg"></span></a></span> is that it shuts down E&T's <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Aether Vial<span><img src="" alt="" class="popupImg"></span></a></span>s. The intuitive thing to do as a result would be to cut all the <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Aether Vial<span><img src="" alt="" class="popupImg"></span></a></span>s from the deck, however, that is not always the correct choice. Since only 2-3 <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Stony Silence<span><img src="" alt="" class="popupImg"></span></a></span>s are played, they won't always be found. Trying to keep pace with Affinity or other quick artifact decks with neither an <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Aether Vial<span><img src="" alt="" class="popupImg"></span></a></span> nor a <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Stony Silence<span><img src="" alt="" class="popupImg"></span></a></span> is a losing battle. In addition, the majority of said artifact decks cannot beat a <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Stony Silence<span><img src="" alt="" class="popupImg"></span></a></span> period, so having an <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Aether Vial<span><img src="" alt="" class="popupImg"></span></a></span> turned off is not really a concern. The only way those decks beat a <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Stony Silence<span><img src="" alt="" class="popupImg"></span></a></span> the majority of the time is through enchantment hate like <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Nature's Claim<span><img src="" alt="" class="popupImg"></span></a></span>, which would then turn the <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Aether Vial<span><img src="" alt="" class="popupImg"></span></a></span>s back on after the <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Stony Silence<span><img src="" alt="" class="popupImg"></span></a></span> is gone. Despite what was said, trimming 1-2 <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Aether Vial<span><img src="" alt="" class="popupImg"></span></a></span>s is still wise; Tron can win through a <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Stony Silence<span><img src="" alt="" class="popupImg"></span></a></span> just by naturally finding their tron lands, while a deck like Affinity can win with <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Ghirapur Aether Grid<span><img src="" alt="" class="popupImg"></span></a></span> or a rare case of creature beatdown.</p>
                  </div>
                </div>
              </div>
              <img class="entImg" src="https://i0.wp.com/wethenerdy.com/wp-content/uploads/2017/04/Stony-Silence-banner.jpg?fit=730%2C443" alt="Stony Silence">
                </div>
                <div class="col-sm-3">
                    <img class="entCardImg" src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Stony+Silence&type=card" alt="Stony Silence">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9">
                    <div class="panel panel-format entPanel">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a id="gideon" class="entCards" data-toggle="collapse" data-parent="#accordion5" href="#collapse3e">Gideon, Ally of Zendikar</a>
                  </h3>
                </div>
                <div id="collapse3e" class="panel-collapse collapse">
                  <div class="panel-body">
                    <h3>About:</h3>
                    <p class="ent"><span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Gideon, Ally of Zendikar<span><img src="" alt="" class="popupImg"></span></a></span> is an excelent card against any of the less aggressive decks. Decks like Jund, Mardu, and UWx Control struggle to deal with a resolved <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Gideon, Ally of Zendikar<span><img src="" alt="" class="popupImg"></span></a></span>. An overall amazing card at out-grinding opponents. In terms of interactions, one fun one is with <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Restoration Angel<span><img src="" alt="" class="popupImg"></span></a></span>. If you uptick <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Gideon, Ally of Zendikar<span><img src="" alt="" class="popupImg"></span></a></span> and attack with him, you can cast or vial in a <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Restoration Angel<span><img src="" alt="" class="popupImg"></span></a></span> to use another one of <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Gideon, Ally of Zendikar<span><img src="" alt="" class="popupImg"></span></a></span>'s abilities this turn. The angel can also protect <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Gideon, Ally of Zendikar<span><img src="" alt="" class="popupImg"></span></a></span> from a <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Path to Exile<span><img src="" alt="" class="popupImg"></span></a></span> or <span class="hover_img"><a href="/" class="discussionA cardA" onclick="return false;">Settle the Wreckage<span><img src="" alt="" class="popupImg"></span></a></span>.</p>
                  </div>
                </div>
              </div>
              <img class="entImg" src="http://www.mtgcanada.com/wp-content/themes/jubini/framework/modules/timthumb/timthumb.php?src=http%3A%2F%2Fwww.mtgcanada.com%2Fwp-content%2Fuploads%2F2017%2F03%2FGideon-ally-of-Zendikar.png&w=930&h=350&zc=1" alt="Gideon, Ally of Zendikar">
                </div>
                <div class="col-sm-3">
                    <img class="entCardImg" src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Gideon,+Ally+Of+Zendikar&type=card" alt="Gideon, Ally of Zendikar">
                </div>
            </div>
            </div>


            <div class="extra-space"></div>
            </div>
            
            <div id="footer">
            <br>
                <h6 class="footH">Questions or suggestions? Email me at <a href="mailto:theratzoo@dntcentral.com">theratzoo@dntcentral.com</a></h6>
                <br>
                <h6 class="footH">Dntcentral is unofficial Fan Content permitted under the Fan Content Policy. Not approved/endorsed by Wizards. Portions of the materials used are property of Wizards of the Coast. ©Wizards of the Coast LLC.</h6>
            </div>
    </body>
</html>
<?php 
    } else {
        header('Location: index.php');
    }
?>
