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

    

        <title>Modern- Splashes</title>
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
                <h1>Modern- Splashes</h1>
                <div class="row">
                    <div class="col-sm-3">
                        <h3><a class="iA r" href="#red">Red-White Taxes</a></h3>
                    </div>
                    <div class="col-sm-3">
                        <h3><a class="iA u" href="#blue">Blue-White Taxes</a></h3>
                    </div>
                    <div class="col-sm-3">
                        <h3><a class="iA b" href="#black">Black-White Taxes</a></h3>
                    </div>
                    <div class="col-sm-3">
                        <h3><a class="iA g" href="#green">Green-White Taxes</a></h3>
                    </div>
                </div>
                <!-- add links to each splash section here-->
            </div>
            <!-- Have future place for budget options-->
            <!-- Gameplay section, card choices section, sideboarding section, pros and cons of splash,  -->
            <h2 id="red">Red-White Taxes</h2>
            <br>
            <h3>Brief Summary:</h3>
            <p>Red-White Death and Taxes has two distinct features that separate itself from the other splashes- its cheap, efficient creatures that serve as value-beaters, and the addition of the non-basic land hoser <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=438704" class="discussionA cardA">Magus of the Moon<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=438704&type=card" alt="Magus of the Moon" class="popupImg"></span></a></span>. The former trait scews RW lists away from a more value, controlling gameplan into one more focused on killing the opponent fast. The latter trait of the archetype gives the deck considerable power against many decks that other builds would normally struggle against- mainly tron and scapeshift. In fact, arguably the only reason to splash red is for <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=438704" class="discussionA cardA">Magus of the Moon<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=438704&type=card" alt="Magus of the Moon" class="popupImg"></span></a></span>, due to its nature to single-handedly win games and sometimes even matches. In addition to the <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=438704" class="discussionA cardA">Magus of the Moon<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=438704&type=card" alt="Magus of the Moon" class="popupImg"></span></a></span>, the deck is also populated with efficient creatures like <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=dire%20fleet%20daredevil" class="discussionA cardA">Dire Fleet Daredevil<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=439756&type=card" alt="Dire Fleet Daredevil" class="popupImg"></span></a></span> and <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=417697" class="discussionA cardA">Pia Nalaar<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=417697&type=card" alt="Pia Nalaar" class="popupImg"></span></a></span> (sometimes even <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=398453" class="discussionA cardA">Pia and Kiran Nalaar<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=398453&type=card" alt="Pia and Kiran Nalaar" class="popupImg"></span></a></span>) that help generate both value and beaters for the deck. The deck also plays the iconic card <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=397722" class="discussionA cardA">Lightning Bolt<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=397722&type=card" alt="Lightning Bolt" class="popupImg"></span></a></span>, which helps portray the deck's aggro-leaning plan, as <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=397722" class="discussionA cardA">Lightning Bolt<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=397722&type=card" alt="Lightning Bolt" class="popupImg"></span></a></span> can often finish low-life opponents.</p>
            <h3>Sample Decklist:</h3>
            <div class="panel-group" id="accordion">
            <div class="panel panel-format">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                    Red-White Death and Taxes:</a>
                  </h4>
                </div>
            <div id="collapse1" class="panel-collapse collapse">
                  <div class="panel-body"> <div class="row">
                <div class="col-sm-6">
                    <table class="table decklist table-condensed table-responsive">
                        <tbody>
                            <tr>
                                <th>Creatures:</th>
                            </tr>
                            <tr><!-- Thraben Inspector -->
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=thraben%20inspector" class="cellA cardA">Thraben Inspector<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=409784&type=card" alt="Thraben Inspector" class="popupImg"></span></a></span></td>
                                <td><img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w"></td>
                            </tr>
                            <tr>
                                <td>2&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=dire%20fleet%20daredevil" class="cellA cardA">Dire Fleet Daredevil<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=439756&type=card" alt="Dire Fleet Daredevil" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/87/R.svg?version=69dbd7f4eb1248c737cf76c96b03d1fd" alt="r">
                                </td>
                            </tr>
                            <tr><!--Arbiter-->
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=209287" class="cellA cardA">Leonin Arbiter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=209287&type=card" alt="Leonin Arbiter" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr>
             <!-- thalia --><tr>
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=270445" class="cellA cardA">Thalia, Guardian of Thraben<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=270445&type=card" alt="Thalia, Guardian of Thraben" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr> 
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=233068" class="cellA cardA">Blade Splicer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=233068&type=card" alt="Blade Splicer" class="popupImg"></span></a></span></td>
                                <td><img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/4/4d/2.svg?version=f1b6466668fd87239a5bff3ae4231800" alt="2"> <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w"></td>
                            </tr>
                            <tr><!-- flickerwisp -->
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=151089" class="cellA cardA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=151089&type=card" alt="Flickerwisp" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr> 
                  <!--Pia--><tr>
                                <td>2&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=417697" class="cellA cardA">Pia Nalaar<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=417697&type=card" alt="Pia Nalaar" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/4/4d/2.svg?version=f1b6466668fd87239a5bff3ae4231800" alt="2">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/87/R.svg?version=69dbd7f4eb1248c737cf76c96b03d1fd" alt="r">
                                </td>
                            </tr>
                            <tr>
                                <td>1&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=398453" class="cellA cardA">Pia and Kiran Nalaar<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=398453&type=card" alt="Pia and Kiran Nalaar" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/4/4d/2.svg?version=f1b6466668fd87239a5bff3ae4231800" alt="2">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/87/R.svg?version=69dbd7f4eb1248c737cf76c96b03d1fd" alt="r">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/87/R.svg?version=69dbd7f4eb1248c737cf76c96b03d1fd" alt="r">
                                </td>
                            </tr>
                            <tr>
                                <td>3&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=240096" class="cellA cardA">Restoration Angel<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=240096&type=card" alt="Restoration Angel" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8c/3.svg?version=2be20346c2303f7f6ce0bd9fb8accc10" alt="3">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr>
                            <tr>
                                <th>Spells:</th>
                            </tr>
                                
                            <tr>
                                <td>2&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=397722" class="cellA cardA">Lightning Bolt<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=397722&type=card" alt="Lightning Bolt" class="popupImg"></span></a></span></td>
                                <td><img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/87/R.svg?version=69dbd7f4eb1248c737cf76c96b03d1fd" alt="r"></td>
                            </tr>
                           <tr>
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=179235" class="cellA cardA">Path to Exile<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=179235&type=card" alt="Path to Exile" class="popupImg"></span></a></span></td>
                                <td><img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w"></td>
                            </tr>
                            <tr>
                                <th>Artifacts:</th>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=48146" class="cellA cardA">Aether Vial<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=48146&type=card" alt="Aether Vial" class="popupImg"></span></a></span></td>
                                <td><img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1"></td>
                            </tr>
                            <tr>
                                <th>Lands:</th>
                            </tr>
                            <tr>
                                <td>1&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=398417" class="cellA cardA">Battlefield Forge<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=398417&type=card" alt="Battlefield Forge" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=field%20of%20ruin" class="cellA cardA">Field of Ruin<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=435415&type=card" alt="Field of Ruin" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=220371" class="cellA cardA">Ghost Quarter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=220371&type=card" alt="Ghost Quarter" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=Inspiring+Vantage" class="cellA cardA">Inspiring Vantage<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=417819&type=card" alt="Inspiring Vantage" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>3&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=407685" class="cellA cardA">Needle Spires<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=407685&type=card" alt="Needle Spires" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<span class="hover_img"><a href="" class="cellA cardA">Mountain<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Mountain&type=card" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="" class="cellA cardA">Plains<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Plains&type=card" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=89066" class="cellA cardA">Sacred Foundry<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=89066&type=card" alt="Sacred Foundry" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=slayers%27%20stronghold" class="cellA cardA">Slayers' Stronghold<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=240170&type=card" alt="Slayers' Stronghold" class="popupImg"></span></a></span></td>
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
                            <td>2&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=382179" class="cellA cardA">Burrenton Forge-Tender<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=382179&type=card" alt="Burrenton Forge-Tender" class="popupImg"></span></a></span></td>
                            <td>
                                <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                            </td>
                        </tr>
                        <tr>
                            <td>3&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=205326" class="cellA cardA">Relic of Progenitus<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=205326&type=card" alt="Relic of Progenitus" class="popupImg"></span></a></span></td>
                            <td>
                                <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">                                  
                            </td>
                        </tr>          
                        <tr>
                            <td>1&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=220589" class="cellA cardA">Phyrexian Revoker<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=220589&type=card" alt="Phyrexian Revoker" class="popupImg"></span></a></span></td>
                            <td><img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/4/4d/2.svg?version=f1b6466668fd87239a5bff3ae4231800" alt="2"></td>
                        </tr>
                        <tr>
                            <td>2&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=247425" class="cellA cardA">Stony Silence<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=247425&type=card" alt="Stony Silence" class="popupImg"></span></a></span></td>
                            <td>
                                <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                            </td>
                        </tr>
                        <tr>
                            <td>1&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=rest%20in%20peace" class="cellA cardA">Rest in Peace<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=277995&type=card" alt="Rest in Peace" class="popupImg"></span></a></span></td>
                            <td>
                                <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                    
                            </td>
                        </tr>
                        <tr>
                            <td>2&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=cunning%20sparkmage" class="cellA cardA">Cunning Sparkmage<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=201563&type=card" alt="Cunning Sparkmage" class="popupImg"></span></a></span></td>
                            <td>
                                <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/4/4d/2.svg?version=f1b6466668fd87239a5bff3ae4231800" alt="2">
                                <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/87/R.svg?version=69dbd7f4eb1248c737cf76c96b03d1fd" alt="r">
                            </td>
                        </tr>
                        <tr>
                            <td>2&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=438704" class="cellA cardA">Magus of the Moon<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=438704&type=card" alt="Magus of the Moon" class="popupImg"></span></a></span></td>
                            <td>
                                <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/4/4d/2.svg?version=f1b6466668fd87239a5bff3ae4231800" alt="2">
                                <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/87/R.svg?version=69dbd7f4eb1248c737cf76c96b03d1fd" alt="r">
                            </td>
                        </tr>
                        <tr><!-- mirran -->
                            <td>2&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?printed=true&multiverseid=213802" class="cellA cardA">Mirran Crusader<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=213802&type=card" alt="Mirran Crusader" class="popupImg"></span></a></span></td>
                            <td>
                                <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
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
                
            </div></div>
                </div>
              </div>
          </div>
            <h4>Card Analysis:</h4>
            <div class="panel-group" id="accordion2">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="panel panel-format splashR">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion2" href="#collapse1b">
                                Dire Fleet Daredevil</a>
                              </h4>
                            </div>
                            <div id="collapse1b" class="panel-collapse collapse">
                              <div class="panel-body splashR">
                                  <h4>About:</h4>
                                  <p><span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=dire%20fleet%20daredevil" class="discussionA cardA">Dire Fleet Daredevil<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=439756&type=card" alt="Dire Fleet Daredevil" class="popupImg"></span></a></span>, also known as red snapcaster mage, gives the deck extra removal/card draw/discard/whatever instant/sourcery is in your opponent's graveyard with a 2/1 first strike body. The body on its own is very powerful, as it can stonewall all of burn's creatures, along with opposing hatebears, <span class="hover_img"><a href="" class="discussionA cardA">Snapcaster Mage<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Snapcaster+Mage&type=card" class="popupImg"></span></a></span>s, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=83771" class="discussionA cardA">Dark Confidant<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=83771&type=card" alt="Dark Confidant" class="popupImg"></span></a></span>s, etc., which really helps make up for the times when <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=dire%20fleet%20daredevil" class="discussionA cardA">Dire Fleet Daredevil<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=439756&type=card" alt="Dire Fleet Daredevil" class="popupImg"></span></a></span> lacks targets. </p>
                                  <h4>The ability: tips & tricks</h4>
                                  <p>First and foremost, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=dire%20fleet%20daredevil" class="discussionA cardA">Dire Fleet Daredevil<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=439756&type=card" alt="Dire Fleet Daredevil" class="popupImg"></span></a></span>'s ability can be responded to, which can lead to blowouts. Most notably include your opponent cracking a <span class="hover_img"><a href="" class="discussionA cardA">Relic of Progenitus<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Relic+Of+Progenitus&type=card" class="popupImg"></span></a></span>, or, worse, casting <span class="hover_img"><a href="" class="discussionA cardA">Snapcaster Mage<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Snapcaster+Mage&type=card" class="popupImg"></span></a></span> after you chose your target (but before you could cast the spell). Inversely, you can vial in a <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=dire%20fleet%20daredevil" class="discussionA cardA">Dire Fleet Daredevil<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=439756&type=card" alt="Dire Fleet Daredevil" class="popupImg"></span></a></span> to negate your opponent's <span class="hover_img"><a href="" class="discussionA cardA">Snapcaster Mage<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Snapcaster+Mage&type=card" class="popupImg"></span></a></span> target (so long as its an instant).</p>
                              </div>
                            </div>
                          </div>
                    <img class="entImg" src="https://magic.wizards.com/sites/mtg/files/images/hero/MD20180208_icon.jpg" alt="Dire Fleet Daredevil">
                  </div>
                  <div class="col-sm-3">
                    <img class="entCardImg" src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Dire%20Fleet%20Daredevil&type=card" alt="Dire Fleet Daredevil">
                  </div> 
                </div>
                <div class="row">
                    <div class="col-sm-9">
                        <div class="panel panel-format splashR">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion2" href="#collapse2b">
                                Pia Nalaar</a>
                              </h4>
                            </div>
                            <div id="collapse2b" class="panel-collapse collapse">
                              <div class="panel-body splashR">
                                  <h4>About:</h4>
                                  <p><span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=417697" class="discussionA cardA">Pia Nalaar<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=417697&type=card" alt="Pia Nalaar" class="popupImg"></span></a></span> is essentially a 2 for 1, as she comes with a thopter along with her 2/2 body. While legendary is a downside (except with castle), she is also very powerful alongside flicker effects like <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=151089" class="discussionA cardA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=151089&type=card" alt="Flickerwisp" class="popupImg"></span></a></span>. </p>
                              </div>
                            </div>
                          </div>
                    <img class="entImg" src="https://pucatrade-static.s3.amazonaws.com/uploads/Pia-Nalaar-kld-Tyler-Jacobson_crop.jpg" alt="Pia Nalaar">
                  </div>
                  <div class="col-sm-3">
                    <img class="entCardImg" src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Pia%20Nalaar&type=card" alt="Pia Nalaar">
                  </div> 
                </div>
                <div class="row">
                    <div class="col-sm-9">
                        <div class="panel panel-format splashR">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion2" href="#collapse3b">
                                Pia and Kiran Nalaar</a>
                              </h4>
                            </div>
                            <div id="collapse3b" class="panel-collapse collapse">
                              <div class="panel-body splashR">
                                  <h4>About:</h4>
                                  <p>While they are a 4 drop, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=398453" class="discussionA cardA">Pia and Kiran Nalaar<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=398453&type=card" alt="Pia and Kiran Nalaar" class="popupImg"></span></a></span> provide 3 bodies for the price of one card, making this card a hoser against creature-based decks. They can also use the thopters (or excess <span class="hover_img"><a href="" class="discussionA cardA">Aether Vial<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Aether+Vial&type=card" class="popupImg"></span></a></span>s/clues/golems) to shoot down planeswalkers, creatures, or get the last few points of burn to close out the game.</p>
                              </div>
                            </div>
                          </div>
                    <img class="entImg" src="http://magic.wizards.com/sites/mtg/files/images/hero/DD20150728_icon.jpg" alt="Pia and Kiran Nalaar">
                  </div>
                  <div class="col-sm-3">
                    <img class="entCardImg" src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Pia%20And%20Kiran%20Nalaar&type=card" alt="Pia and Kiran Nalaar">
                  </div> 
                </div>
                <div class="row">
                    <div class="col-sm-9">
                        <div class="panel panel-format splashR">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion2" href="#collapse4b">
                            Lightning Bolt</a>
                          </h4>
                        </div>
                        <div id="collapse4b" class="panel-collapse collapse">
                          <div class="panel-body splashR">
                              <h4>About:</h4>
                              <p>One of modern's most iconic cards, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=397722" class="discussionA cardA">Lightning Bolt<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=397722&type=card" alt="Lightning Bolt" class="popupImg"></span></a></span> gives the deck a powerful, versitile one mana spell that can be used to kill a creature, planeswalkers, or finish off an oponent. Unlike path, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=397722" class="discussionA cardA">Lightning Bolt<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=397722&type=card" alt="Lightning Bolt" class="popupImg"></span></a></span> does not give your opponent a basic land. The main downside to <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=397722" class="discussionA cardA">Lightning Bolt<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=397722&type=card" alt="Lightning Bolt" class="popupImg"></span></a></span> is its ineffectiveness at dealing with larger creatures that dominate the format like <span class="hover_img"><a href="" class="discussionA cardA">Tarmogoyf<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Tarmogoyf&type=card" class="popupImg"></span></a></span>, <span class="hover_img"><a href="" class="discussionA cardA">Gurmag Angler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Gurmag+Angler&type=card" class="popupImg"></span></a></span>, <span class="hover_img"><a href="" class="discussionA cardA">Thought-Knot Seer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Thought-Knot+Seer&type=card" class="popupImg"></span></a></span>, etc., along with bringing the creature to the graveyard rather than the exile zone, allowing it to be bought back with cards like <span class="hover_img"><a href="" class="discussionA cardA">Kolaghan's Command<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Snapcaster+Mage&type=card" class="popupImg"></span></a></span> and <span class="hover_img"><a href="" class="discussionA cardA">Goryo's Vengeance<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Goryo's+Vengeance&type=card" class="popupImg"></span></a></span>.</p>
                          </div>
                      </div>
                          </div>
                      <img class="entImg" src="https://pm1.narvii.com/6230/b159dfac5ba1d37a9979f1531a30c57c66fc2ec1_hq.jpg" alt="Lightning Bolt">
                  </div>
                  <div class="col-sm-3">
                    <img class="entCardImg" src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Lightning%20Bolt&type=card" alt="Lightning Bolt">
                  </div> 
            </div>
                </div>
                <hr>
            <h3>Sideboarding 101</h3>
            <br>
            <!--<h5>When to bring red cards out:</h5>-->
            <!--Maybe include above for each red card analysis...-->
            <!--For below, maybe revise this to instead have it be for each tier 1/main deck OR make that into its own webpage and make this a basic section. Yeah, just include the basics here: for each red card, include when to bring it in and also have a link for where to read more details/better analysis for sideboarding (there will be a future page with DEEP sideboarding for each version/splash-->
            <h3>When to bring red cards in:</h3>
            <br>
            <h4>Magus of the Moon:</h4>
            <p>Very powerful, game winning card (probably should be in maindeck) that is best vs. greedy mana bases with few basics. Bring in 100% vs. tron and is also a fair card vs. any 4 color decks, scapeshift decks, jund, death's shadow, zoo, and other lists that lean too heavily on nonbasic lands.</p>
            <h4>Cunning Sparkmage:</h4>
            <p>Good vs. creature-heavy decks, where the one point of damage can help. Can also finish off planewalkers. Fine choice vs. decks like humans, jund (weaker there), affinity, some Collected Company lists, other taxes lists.</p>
            <h3>Other sideboard options:</h3>
            <ul class="cardList">
                <li><span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=397722" class="discussionA cardA">Lightning Bolt<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=397722&type=card" alt="Lightning Bolt" class="popupImg"></span></a></span> number 4</li>
                <li>Wear//Tear</li>
            </ul>

            <!--<h4>Pros/Cons</h4>-->
            <h3>Conclusion</h3>
            <p>If you want to hose tron, or have a meta with tons of nonbasic lands, than RW is the stronger choice. However, the deck struggles against control and combo (to a lesser extent), as it is more reliant on creatures rather than taxation and card advantage.</p>
            <hr>
            <h2 id="blue">Blue-White Taxes</h2>
            <h3>Brief Summary:</h3>
            <p>Blue-White Death and Taxes utilizes powerful spirits like <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=spell%20queller" class="discussionA cardA">Spell Queller<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=414494&type=card" alt="Spell Queller" class="popupImg"></span></a></span> and <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=mausoleum%20wanderer" class="discussionA cardA">Mausoleum Wanderer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=414364&type=card" alt="Mausoleum Wanderer" class="popupImg"></span></a></span> to play a game more focused on countering and disrupting your opponents spells. The deck plays a lot more on the opponent's turn, thus making <span class="hover_img"><a href="" class="discussionA cardA">Aether Vial<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Aether+Vial&type=card" class="popupImg"></span></a></span> more viable in uw taxes compared to other splashes.</p>
            <h3>Sample Decklist:</h3>
            <div class="panel-group" id="accordion3">
            <div class="panel panel-format">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion3" href="#collapse1c">
                    Blue-White Death and Taxes:</a>
                  </h3>
                </div>
            <div id="collapse1c" class="panel-collapse collapse">
                  <div class="panel-body"> <div class="row">
                <div class="col-sm-6">
                    <table class="table decklist table-condensed table-responsive">
                        <tbody>
                            <tr>
                                <th>Creatures:</th>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=mausoleum%20wanderer" class="cellA cardA">Mausoleum Wanderer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=414364&type=card" alt="Mausoleum Wanderer" class="popupImg"></span></a></span></td>
                                <td><img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/9f/U.svg?version=582bb8849eadf39e7ddadef3e84dfdaf" alt="u"></td>
                            </tr>
                            <tr><!--Arbiter-->
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=209287" class="cellA cardA">Leonin Arbiter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=209287&type=card" alt="Leonin Arbiter" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr>
                            <tr>
                                <td>1&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=SELFLESS+SPIRIT" class="cellA cardA">Selfless Spirit<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=414332&type=card" alt="Selfless Spirit" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr>
                            <tr><!-- thalia -->
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=270445" class="cellA cardA">Thalia, Guardian of Thraben<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=270445&type=card" alt="Thalia, Guardian of Thraben" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr> 
                            <tr>
                                <td>3&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=233068" class="cellA cardA">Blade Splicer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=233068&type=card" alt="Blade Splicer" class="popupImg"></span></a></span></td>
                                <td><img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/4/4d/2.svg?version=f1b6466668fd87239a5bff3ae4231800" alt="2"> <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w"></td>
                            </tr>
                            <tr>
                                <td>2&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=407523" class="cellA cardA">Eldrazi Displacer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=407523&type=card" alt="Eldrazi Displacer" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/4/4d/2.svg?version=f1b6466668fd87239a5bff3ae4231800" alt="2"> <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr>
                            <tr>
                                <td>3&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=Reflector+Mage" class="cellA cardA">Reflector Mage<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=407667&type=card" alt="Reflector Mage" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/9f/U.svg?version=582bb8849eadf39e7ddadef3e84dfdaf" alt="u">
                                </td>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=spell%20queller" class="cellA cardA">Spell Queller<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=414494&type=card" alt="Spell Queller" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/9f/U.svg?version=582bb8849eadf39e7ddadef3e84dfdaf" alt="u">
                                </td>
                            </tr>
                            <tr>
                                <td>3&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=240096" class="cellA cardA">Restoration Angel<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=240096&type=card" alt="Restoration Angel" class="popupImg"></span></a></span></td>
                                 <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8c/3.svg?version=2be20346c2303f7f6ce0bd9fb8accc10" alt="3">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr>
                            <tr>
                                <th>Spells:</th>
                            </tr>             
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=179235" class="cellA cardA">Path to Exile<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=179235&type=card" alt="Path to Exile" class="popupImg"></span></a></span></td>
                                <td><img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w"></td>
                            </tr>
                            <tr>
                                <th>Artifacts:</th>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=48146" class="cellA cardA">Aether Vial<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=48146&type=card" alt="Aether Vial" class="popupImg"></span></a></span></td>
                                <td><img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1"></td>
                            </tr>
                            <tr>
                                <td>2&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=Smuggler%27s+Copter" class="cellA cardA">Smuggler's Copter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=417808&type=card" alt="Smuggler's Copter" class="popupImg"></span></a></span></td>
                                <td><img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/4/4d/2.svg?version=f1b6466668fd87239a5bff3ae4231800" alt="2"></td>

                            </tr>
                            <tr>
                                <th>Lands:</th>
                            </tr>
                            <tr>
                                <td>3&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=129458" class="cellA cardA">Adarkar Wastes<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129458&type=card" alt="Adarkar Wastes" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>2&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=field%20of%20ruin" class="cellA cardA">Field of Ruin<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=435415&type=card" alt="Field of Ruin" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=220371" class="cellA cardA">Ghost Quarter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=220371&type=card" alt="Ghost Quarter" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=glacial+fortress" class="cellA cardA">Glacial Fortress<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=435416&type=card" alt="Glacial Fortress" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>3&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=97071" class="cellA cardA">Hallowed Fountain<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=97071&type=card" alt="Hallowed Fountain" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<span class="hover_img"><a href="" class="cellA cardA">Island<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Island&type=card" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="" class="cellA cardA">Plains<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Plains&type=card" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=209399" class="cellA cardA">Seachrome Coast<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=209399&type=card" alt="Seachrome Coast" class="popupImg"></span></a></span></td>
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
                            <td>2&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=382179" class="cellA cardA">Burrenton Forge-Tender<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=382179&type=card" alt="Burrenton Forge-Tender" class="popupImg"></span></a></span></td>
                            <td><img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w"></td>
                        </tr>
                        <tr>
                            <td>3&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=205326" class="cellA cardA">Relic of Progenitus<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=205326&type=card" alt="Relic of Progenitus" class="popupImg"></span></a></span></td>
                            <td>
                                <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">  
                            </td>
                        </tr>
                        <tr>
                            <td>3&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=26591" class="cellA cardA">Meddling Mage<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=26591&type=card" alt="Meddling Mage" class="popupImg"></span></a></span></td>
                            <td>
                                <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/9f/U.svg?version=582bb8849eadf39e7ddadef3e84dfdaf" alt="u">
                            </td>
                        </tr>  
                        <tr>
                            <td>2&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=247425" class="cellA cardA">Stony Silence<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=247425&type=card" alt="Stony Silence" class="popupImg"></span></a></span></td>
                            <td>
                                <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                            </td>
                        </tr>
                        <tr>
                            <td>1&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=rest%20in%20peace" class="cellA cardA">Rest in Peace<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=277995&type=card" alt="Rest in Peace" class="popupImg"></span></a></span></td>
                            <td>
                                <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                    
                                </td>
                        </tr>
                        <tr>
                            <td>2&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=247236" class="cellA cardA">Geist of Saint Traft<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=247236&type=card" alt="Geist of Saint Traft" class="popupImg"></span></a></span></td>
                            <td>
                                <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/9f/U.svg?version=582bb8849eadf39e7ddadef3e84dfdaf" alt="u">
                            </td>
                        </tr>
                        <tr> <!-- mirran -->
                            <td>2&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?printed=true&multiverseid=213802" class="cellA cardA">Mirran Crusader<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=213802&type=card" alt="Mirran Crusader" class="popupImg"></span></a></span></td>
                            <td>
                                <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
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
                
            </div></div>
                </div>
              </div>
        </div>
            <br>
            <h3>Card Analysis:</h3>
            <br>
            <div class="panel-group" id="accordion4">
                <div class="row">
                    <div class="col-sm-9">
                    <div class="panel panel-format splashSectU">
                    <div class="panel-heading">
                      <h3 class="panel-title">
                        <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion4" href="#collapse1d">
                        Mausoleum Wanderer</a>
                      </h3>
                    </div>
                    <div id="collapse1d" class="panel-collapse collapse">
                      <div class="panel-body splashSectU">
                          <h4>About:</h4>
                          <p>Worst case senario, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=mausoleum%20wanderer" class="discussionA cardA">Mausoleum Wanderer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=414364&type=card" alt="Mausoleum Wanderer" class="popupImg"></span></a></span> acts as a 1 mana 1/1 flier that is a <span class="hover_img"><a href="" class="discussionA cardA">Force Spike<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Force+Spike&type=card" class="popupImg"></span></a></span> (for only instants/sourceries!) that your opponent can, and will, play around. However, the ceiling for this little fellow is much higher than that. <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=mausoleum%20wanderer" class="discussionA cardA">Mausoleum Wanderer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=414364&type=card" alt="Mausoleum Wanderer" class="popupImg"></span></a></span> instills fear on your opponents, as it can come it with flash whenever you have a vial on one. In addition, vialing in another spirit can grow the <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=mausoleum%20wanderer" class="discussionA cardA">Mausoleum Wanderer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=414364&type=card" alt="Mausoleum Wanderer" class="popupImg"></span></a></span> already on the board, making it sigificantly more difficult for your opponent to play around the card. This synergy is why most UW lists opt to play more spirits (<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=spell%20queller" class="discussionA cardA">Spell Queller<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=414494&type=card" alt="Spell Queller" class="popupImg"></span></a></span>, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=SELFLESS+SPIRIT" class="discussionA cardA">Selfless Spirit<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=414332&type=card" alt="Selfless Spirit" class="popupImg"></span></a></span>, etc.), as they all synergize well with <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=mausoleum%20wanderer" class="discussionA cardA">Mausoleum Wanderer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=414364&type=card" alt="Mausoleum Wanderer" class="popupImg"></span></a></span>. Note: <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=mausoleum%20wanderer" class="discussionA cardA">Mausoleum Wanderer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=414364&type=card" alt="Mausoleum Wanderer" class="popupImg"></span></a></span> cannot stop an <span class="hover_img"><a href="" class="discussionA cardA">Abrupt Decay<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Abrupt+Decay&type=card" class="popupImg"></span></a></span>/<span class="hover_img"><a href="" class="discussionA cardA">Supreme Verdict<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Supreme+Verdict&type=card" class="popupImg"></span></a></span>, as its ability is deemed a counter.</p>
                      </div>
                    </div>
                  </div>
                  <img class="entImg" src="https://i.ytimg.com/vi/X-BI3GH7hfE/hqdefault.jpg" alt="Mausoleum Wanderer">
              </div>
              <div class="col-sm-3">
                <img class="entCardImg" src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Mausoleum%20wanderer&type=card" alt="Mausoleum Wanderer">
              </div>
              </div>
              <div class="row">
                <div class="col-sm-9">
                  <div class="panel panel-format splashSectU">
                    <div class="panel-heading">
                      <h3 class="panel-title">
                        <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion4" href="#collapse2d">
                        Meddling Mage</a>
                      </h3>
                    </div>
                    <div id="collapse2d" class="panel-collapse collapse">
                      <div class="panel-body splashSectU">
                          <h4>About:</h4>
                          <p><span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=26591" class="discussionA cardA">Meddling Mage<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=26591&type=card" alt="Meddling Mage" class="popupImg"></span></a></span>, while not present in the main deck, is a very powerful card that can easily find room in the main depending on the meta. <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=26591" class="discussionA cardA">Meddling Mage<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=26591&type=card" alt="Meddling Mage" class="popupImg"></span></a></span> allows you to invalidate specific cards your opponents have, most notably removal spells or combo pieces, to disrupt them and generate "card advantage", as mage acts like a psuedo discard spell.</p>
                      </div>
                    </div>
                  </div> 
                  <img class="entImg" src="https://www.quietspeculation.com/wp-content/uploads/2017/11/meddling-mage.png" alt="Meddling Mage">
                  </div>
                  <div class="col-sm-3">
                    <img class="entCardImg" src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Meddling%20Mage&type=card" alt="Meddling Mage">
                  </div> 
            </div>
            <div class="row">
                <div class="col-sm-9">
                <div class="panel panel-format splashSectU">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion4" href="#collapse3d">
                    Reflector Mage</a>
                  </h3>
                </div>
                <div id="collapse3d" class="panel-collapse collapse">
                  <div class="panel-body splashSectU">
                      <h4>About:</h4>
                      <p><span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=Reflector+Mage" class="discussionA cardA">Reflector Mage<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=407667&type=card" alt="Reflector Mage" class="popupImg"></span></a></span> acts as a powerful bounce spell, giving the deck a strong tempo play that can also disrupt their gameplan heavily. Despite it being restricted to only creatures, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=Reflector+Mage" class="discussionA cardA">Reflector Mage<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=407667&type=card" alt="Reflector Mage" class="popupImg"></span></a></span>'s ability has the upside of not allowing opponents to cast the bounced card (or any that share its name) until the turn after their next turn. A nice synergy with <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=Reflector+Mage" class="discussionA cardA">Reflector Mage<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=407667&type=card" alt="Reflector Mage" class="popupImg"></span></a></span> is to bounce a troublesome creature, than play <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=26591" class="discussionA cardA">Meddling Mage<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=26591&type=card" alt="Meddling Mage" class="popupImg"></span></a></span> and name that creature before they have the chance to recast it. Besides being good against creature-based decks, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=Reflector+Mage" class="discussionA cardA">Reflector Mage<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=407667&type=card" alt="Reflector Mage" class="popupImg"></span></a></span> can also disrupt certain combo decks (storm, vizier-druid combo, etc.) and is also very effective at bouncing <span class="hover_img"><a href="" class="discussionA cardA">Gurmag Angler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Gurmag+Angler&type=card" class="popupImg"></span></a></span>s and <span class="hover_img"><a href="" class="discussionA cardA">Tasigur, the Golden Fang<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Tasigur,+The+Golden+Fang&type=card" class="popupImg"></span></a></span>s, as they may become uncastable afterwards. </p>
                  </div>
                </div>
              </div>
              <img class="entImg" src="https://i.pinimg.com/originals/af/b1/bb/afb1bb191b5bbbadbf130bd69bb71059.jpg" alt="Reflector Mage">
          </div>
          <div class="col-sm-3">
            <img class="entCardImg" src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Reflector%20Mage&type=card" alt="Reflector Mage">
          </div>
          </div>
          <div class="row">
            <div class="col-sm-9">
              <div class="panel panel-format splashSectU">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion4" href="#collapse4d">
                    Spell Queller</a>
                  </h3>
                </div>
                <div id="collapse4d" class="panel-collapse collapse">
                  <div class="panel-body splashSectU">
                      <h4>About:</h4>
                      <p><span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=spell%20queller" class="discussionA cardA">Spell Queller<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=414494&type=card" alt="Spell Queller" class="popupImg"></span></a></span> gives the deck additional dirsuption, in the form of a 2/3 flier for 3 (a very strong body) that also counters any spell until it leaves the battlefield. A few notable interactions: <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=spell%20queller" class="discussionA cardA">Spell Queller<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=414494&type=card" alt="Spell Queller" class="popupImg"></span></a></span> can be vialed in, allowing you to tap out on your turn but still have <span class="hover_img"><a href="" class="discussionA cardA">Spell Queller<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Spell+Queller&type=card" class="popupImg"></span></a></span> up thanks to <span class="hover_img"><a href="" class="discussionA cardA">Aether Vial<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Aether+Vial&type=card" class="popupImg"></span></a></span>. Also, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=spell%20queller" class="discussionA cardA">Spell Queller<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=414494&type=card" alt="Spell Queller" class="popupImg"></span></a></span> will not stop cast triggers, meaning it is very bad at countering the cascade spells (<span class="hover_img"><a href="" class="discussionA cardA">Bloodbraid Elf<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Bloodbraid+Elf&type=card" class="popupImg"></span></a></span>, <span class="hover_img"><a href="" class="discussionA cardA">Violent Outburst<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Violent+Outburst&type=card" class="popupImg"></span></a></span>, etc.), however, it can still counter the cascaded cards (but your opponent will be able to cast the card after the <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=spell%20queller" class="discussionA cardA">Spell Queller<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=414494&type=card" alt="Spell Queller" class="popupImg"></span></a></span> leaves the battlefield). In addition, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=spell%20queller" class="discussionA cardA">Spell Queller<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=414494&type=card" alt="Spell Queller" class="popupImg"></span></a></span>'s ability is not a counter; rather, it exiles the spell until it leaves the battlefield. So if your opponent casts an <span class="hover_img"><a href="" class="discussionA cardA">Abrupt Decay<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Abrupt+Decay&type=card" class="popupImg"></span></a></span>, <span class="hover_img"><a href="" class="discussionA cardA">Supreme Verdict<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Supreme+Verdict&type=card" class="popupImg"></span></a></span>, or <span class="hover_img"><a href="" class="discussionA cardA">Thought-Knot Seer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Thought-Knot+Seer&type=card" class="popupImg"></span></a></span> with a cavern of souls, than you can still cast/vial in <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=spell%20queller" class="discussionA cardA">Spell Queller<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=414494&type=card" alt="Spell Queller" class="popupImg"></span></a></span> in response to stop the spell from resolving.</p>
              </div>
                  </div>
                </div>
                <img class="entImg" src="https://i1.wp.com/articles.mtgcardmarket.com/wp-content/uploads/2016/09/spell-queller.jpg?fit=750%2C300" alt="Spell Queller">
            </div>
            <div class="col-sm-3">
                <img class="entCardImg" src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Spell%20Queller&type=card" alt="Spell Queller">
            </div>
            </div>
        </div>
            
            
            <hr>
            <h3>Sideboarding 101</h3>
            <br>
            <h3>When to bring cards in</h3>
            <br>
            <h4>Meddling Mage:</h4>
            <p><span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=26591" class="discussionA cardA">Meddling Mage<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=26591&type=card" alt="Meddling Mage" class="popupImg"></span></a></span> is a card that is good versus a ton of decks. The main strength of the card is playing against combo decks, as it can name vital cards (<span class="hover_img"><a href="" class="discussionA cardA">Ad Nasuseam<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Ad+Nasuseam&type=card" class="popupImg"></span></a></span>, <span class="hover_img"><a href="" class="discussionA cardA">Grapeshot<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Grapeshot&type=card" class="popupImg"></span></a></span>, <span class="hover_img"><a href="" class="discussionA cardA">Through the Breach<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Through+The+Breach&type=card" class="popupImg"></span></a></span>, etc.) while being a 2/2 beater. In addition to bringing in this card vs. every and all combo decks, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=26591" class="discussionA cardA">Meddling Mage<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=26591&type=card" alt="Meddling Mage" class="popupImg"></span></a></span> is also a good option versus removal-light decks, especially those that run only one removal spell (ex: mono white D&T, which only runs <span class="hover_img"><a href="" class="discussionA cardA">Path to Exile<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Path+To+Exile&type=card" class="popupImg"></span></a></span>) as it can take them off of their only removal. <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=26591" class="discussionA cardA">Meddling Mage<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=26591&type=card" alt="Meddling Mage" class="popupImg"></span></a></span> is also good vs. controlling decks, especially those that have boardwipes that can ruin our deck if casted (UW control). <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=26591" class="discussionA cardA">Meddling Mage<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=26591&type=card" alt="Meddling Mage" class="popupImg"></span></a></span> is weakest versus decks with a variety of answers to the card (jund, jeskai control, etc.) or decks with ways to ignore the uncastable clause of the card (<span class="hover_img"><a href="" class="discussionA cardA">Aether Vila<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Aether+Vial&type=card" class="popupImg"></span></a></span> decks like merfolk, humans, D&T, etc.).</p>
            <h3>Other Sideboard Options</h3>
            <ul class="cardList">
                <li>Counterspells</li>
                <li>Judge's Familiar</li>
            </ul>
            <!--<h4>Pros/Cons of Splash:</h4>-->
            <h3>Conclusion</h3>
            <p>UW Taxes is a good option in a meta filled with combo and, to a lesser extent, control decks with wraths.</p>
            <hr class="u">
            <h2 id="black">Black-White Taxes</h2>
            <h3>Brief Summary:</h3>
            <p>The least popular of the splashes (had to come up with this list from scratch!), B-W Eldraziless Taxes, while lacking in many effective taxing creatures, does give the deck <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=83771" class="discussionA cardA">Dark Confidant<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=83771&type=card" alt="Dark Confidant" class="popupImg"></span></a></span>, debately the best card in the entire deck. In addition, black also offers the deck with more value creatures, from disruptive bears like <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=175054" class="discussionA cardA">Tidehollow Sculler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=175054&type=card" alt="Tidehollow Sculler" class="popupImg"></span></a></span> to 2-1 (or better with <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=151089" class="discussionA cardA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=151089&type=card" alt="Flickerwisp" class="popupImg"></span></a></span>/<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=240096" class="discussionA cardA">Restoration Angel<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=240096&type=card" alt="discussionA cardA Angel" class="popupImg"></span></a></span>) in the form of <span class="hover_img"><a href="" class="discussionA cardA">Ravenous Chupacabra<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Ravenous+Chupacabra&type=card" class="popupImg"></span></a></span>, the deck can attack from both a value angel and a disruptive one. Another inceitive for splashing black is the addition of great removal, most notably <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=423724" class="discussionA cardA">Fatal Push<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=423724&type=card" alt="Fatal Push" class="popupImg"></span></a></span>, which is very valuable in the creature-heavy meta of Modern.</p>
            <h3>Sample Decklist:</h3>
            <div class="panel-group" id="accordion5">
            <div class="panel panel-format">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion5" href="#collapse1e">
                    Black-White Death and Taxes:</a>
                  </h3>
                </div>
            <div id="collapse1e" class="panel-collapse collapse">
                  <div class="panel-body"> <div class="row">
                <div class="col-sm-6">
                    <table class="table decklist table-condensed table-responsive">
                        <tbody>
                            <tr>
                                <th>Creatures:</th>
                            </tr>
                            <tr><!--Bob-->
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=83771" class="cellA cardA">Dark Confidant<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=83771&type=card" alt="Dark Confidant" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/2/2f/B.svg?version=136b1e093eb615c4a6e2eff3e89126e3" alt="b">
                                </td>
                            </tr>
                            <tr><!--Arbiter-->
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=209287" class="cellA cardA">Leonin Arbiter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=209287&type=card" alt="Leonin Arbiter" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr>
                            <tr><!-- thalia -->
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=270445" class="cellA cardA">Thalia, Guardian of Thraben<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=270445&type=card" alt="Thalia, Guardian of Thraben" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr> 
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=175054" class="cellA cardA">Tidehollow Sculler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=175054&type=card" alt="Tidehollow Sculler" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w"><img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/2/2f/B.svg?version=136b1e093eb615c4a6e2eff3e89126e3" alt="b">
                                </td>
                            </tr>
                            <tr>
                                <td>2&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=233068" class="cellA cardA">Blade Splicer<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=233068&type=card" alt="Blade Splicer" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/4/4d/2.svg?version=f1b6466668fd87239a5bff3ae4231800" alt="2"> 
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr>
                            <tr><!-- flickerwisp -->
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=151089" class="cellA cardA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=151089&type=card" alt="Flickerwisp" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr> 
                            <tr><!--ravenous-->
                                <td>2&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=Ravenous%20Chupacabra" class="cellA cardA">Ravenous Chupacabra<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=439739&type=card" alt="Ravenous Chupacabra" class="popupImg"></span></a></span></td>
                                 <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/4/4d/2.svg?version=f1b6466668fd87239a5bff3ae4231800" alt="2">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/2/2f/B.svg?version=136b1e093eb615c4a6e2eff3e89126e3" alt="b">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/2/2f/B.svg?version=136b1e093eb615c4a6e2eff3e89126e3" alt="b">
                                </td>
                            </tr>
                            <tr>
                                <td>3&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=240096" class="cellA cardA">Restoration Angel<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=240096&type=card" alt="Restoration Angel" class="popupImg"></span></a></span></td>
                                 <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8c/3.svg?version=2be20346c2303f7f6ce0bd9fb8accc10" alt="3">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr>
                            <tr>
                                <th>Spells:</th>
                            </tr>     
                            <tr>
                                <td>2&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=423724" class="cellA cardA">Fatal Push<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=423724&type=card" alt="Fatal Push" class="popupImg"></span></a></span></td>
                                <td>
                                 <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/2/2f/B.svg?version=136b1e093eb615c4a6e2eff3e89126e3" alt="b">  
                                </td>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=179235" class="cellA cardA">Path to Exile<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=179235&type=card" alt="Path to Exile" class="popupImg"></span></a></span></td>
                                <td><img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w"></td>
                            </tr>
                            <tr>
                                <th>Artifacts:</th>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=48146" class="cellA cardA">Aether Vial<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=48146&type=card" alt="Aether Vial" class="popupImg"></span></a></span></td>
                                <td><img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1"></td>
                            </tr>
                            <tr>
                                <th>Lands:</th>
                            </tr>
                            <tr>
                                <td>1&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=398504" class="cellA cardA">Caves of Koilos<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=398504&type=card" alt="Caves of Koilos" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=417818" class="cellA cardA">Concealed Courtyard<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=417818&type=card" alt="Concealed Courtyard" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=field%20of%20ruin" class="cellA cardA">Field of Ruin<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=435415&type=card" alt="Field of Ruin" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=220371" class="cellA cardA">Ghost Quarter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=220371&type=card" alt="Ghost Quarter" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=366302" class="cellA cardA">Godless Shrine<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=366302&type=card" alt="Godless Shrine" class="popupImg"></span></a></span></td>
                            </tr>
                            
                                <td>5&emsp;<span class="hover_img"><a href="" class="cellA cardA">Plains<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Plains&type=card" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=402031" class="cellA cardA">Shambling Vent<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=402031&type=card" alt="Shambling Vent" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>1&emsp;<span class="hover_img"><a href="" class="cellA cardA">Swamp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Swamp&type=card" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>2&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=197855" class="cellA cardA">Tectonic Edge<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=197855&type=card" alt="Tectonic Edge" class="popupImg"></span></a></span></td>
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
                                <td>2&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=382179" class="cellA cardA">Burrenton Forge-Tender<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=382179&type=card" alt="Burrenton Forge-Tender" class="popupImg"></span></a></span></td>
                                <td><img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w"></td>
                            </tr>
                            <tr>
                                <td>2&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=423724" class="cellA cardA">Fatal Push<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=423724&type=card" alt="Fatal Push" class="popupImg"></span></a></span></td>
                                <td>
                                 <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/2/2f/B.svg?version=136b1e093eb615c4a6e2eff3e89126e3" alt="b">  
                                </td>
                            </tr>
                            <tr>
                                <td>3&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=205326" class="cellA cardA">Relic of Progenitus<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=205326&type=card" alt="Relic of Progenitus" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                </td>
                            </tr>
                            <tr>
                                <td>3&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=247425" class="cellA cardA">Stony Silence<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=247425&type=card" alt="Stony Silence" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr>
                            <tr>
                                <td>1&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=141976" class="cellA cardA">Kitchen Finks<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=141976&type=card" alt="Kitchen Finks" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/2/2e/GW.svg?version=c5f88ce9b35e76197bcb6613673733a0" alt="gw">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/2/2e/GW.svg?version=c5f88ce9b35e76197bcb6613673733a0" alt="gw">
                                </td>
                            </tr>
                            <tr>
                                <td>1&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=liliana%2C%20the%20last%20hope" class="cellA cardA">Liliana, the Last Hope<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=414388&type=card" alt="Liliana, the Last Hope" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/2/2f/B.svg?version=136b1e093eb615c4a6e2eff3e89126e3" alt="b">  
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/2/2f/B.svg?version=136b1e093eb615c4a6e2eff3e89126e3" alt="b">  
                                </td>
                            </tr>
                            <tr><!-- Gideon -->
                                <td>1&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=401897" class="cellA cardA">Gideon, Ally of Zendikar<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=401897&type=card" alt="Gideon, Ally of Zendikar" class="popupImg"></span></a></span></td>
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
                
            </div></div>
                </div>
              </div>
            </div>
            <h3>Card Analysis:</h3>
            <div class="panel-group" id="accordion6">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="panel panel-format splashSectB">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion6" href="#collapse1f">Dark Confidant</a>
                              </h3>
                            </div>
                            <div id="collapse1f" class="panel-collapse collapse">
                              <div class="panel-body splashSectB">
                                  <h4>About:</h4>
                                  <p><span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=83771" class="discussionA cardA">Dark Confidant<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=83771&type=card" alt="Dark Confidant" class="popupImg"></span></a></span> is the deck's main card-advantage engine. Unlike Black-White Death and Taxes's Eldrazi counterpart, this deck plays all four <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=83771" class="discussionA cardA">Dark Confidant<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=83771&type=card" alt="Dark Confidant" class="popupImg"></span></a></span> in the deck, as the card is just amazing if unanswered (and is harder to answer if you play more than one of him!). <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=83771" class="discussionA cardA">Dark Confidant<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=83771&type=card" alt="Dark Confidant" class="popupImg"></span></a></span>'s downside of taking damage is not too relevent when the deck contains very few high cmc cards (5 four-drops and 6 three-drops). <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=83771" class="discussionA cardA">Dark Confidant<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=83771&type=card" alt="Dark Confidant" class="popupImg"></span></a></span>, while weak to removal at first, can and will take over the game against any fair deck, making him one of the best, if not the best card in the deck. </p>
                              </div>
                            </div>
                        </div>
                        <img class="entImg" src="http://www.daltenda.com/wp-content/uploads/2017/03/rakdos.jpg" alt="Dark Confidant">
                        </div>
                        <div class="col-sm-3">
                            <img class="entCardImg" src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Dark%20Confidant&type=card" alt="Dark Confidant">
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-9">
                        <div class="panel panel-format splashSectB">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion6" href="#collapse2f">
                                Tidehollow Sculler</a>
                              </h3>
                            </div>
                            <div id="collapse2f" class="panel-collapse collapse">
                              <div class="panel-body splashSectB">
                                  <h4>About:</h4>
                                  <p><span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=175054" class="discussionA cardA">Tidehollow Sculler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=175054&type=card" alt="Tidehollow Sculler" class="popupImg"></span></a></span> grants the deck hand-disruption on a 2/2 body, making this card good in almost every senario. <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=175054" class="discussionA cardA">Tidehollow Sculler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=175054&type=card" alt="Tidehollow Sculler" class="popupImg"></span></a></span> really shines vs. combo matchups, but can also snag away removal from your opponent to stop them from killing <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=175054" class="discussionA cardA">Tidehollow Sculler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=175054&type=card" alt="Tidehollow Sculler" class="popupImg"></span></a></span>. In fact, it is usually wisest to take the removal spell your opponent has in hand, as they could (and almost always would) use the removal spell, if not taken, on your <span class="hover_img"><a href="" class="discussionA cardA">Tidehollow Sculler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Tidehollow+Sculler&type=card" class="popupImg"></span></a></span> in order to get back the card you took. More info on <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=175054" class="discussionA cardA">Tidehollow Sculler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=175054&type=card" alt="Tidehollow Sculler" class="popupImg"></span></a></span> in <a href="ent#sculler">E&T section.</a></p>
                                  <!-- FIX ABOVE LINK-->
                              </div>
                            </div>
                          </div>
                    <img class="entImg" src="https://78.media.tumblr.com/cd342f1bf8ee7ae01b04658c5e066bf4/tumblr_nbt5e0izvG1thxsmlo1_640.jpg" alt="Tidehollow Sculler">
            </div>
            <div class="col-sm-3">
                <img class="entCardImg" src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Tidehollow%20Sculler&type=card" alt="Tidehollow Sculler">
            </div>
                </div>
                <div class="row">
                    <div class="col-sm-9">
                        <div class="panel panel-format splashSectB">
                        <div class="panel-heading">
                          <h3 class="panel-title">
                            <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion6" href="#collapse3f">Fatal Push</a>
                          </h3>
                        </div>
                        <div id="collapse3f" class="panel-collapse collapse">
                          <div class="panel-body splashSectB">
                              <h4>About:</h4>
                              <p><span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=423724" class="discussionA cardA">Fatal Push<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=423724&type=card" alt="Fatal Push" class="popupImg"></span></a></span> acts as a psuedo path 5 & 6. <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=423724" class="discussionA cardA">Fatal Push<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=423724&type=card" alt="Fatal Push" class="popupImg"></span></a></span> does have two main weaknesses: it misses many of the big creatures in the format (<span class="hover_img"><a href="" class="discussionA cardA">Gurmag Angler<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Gurmag+Angler&type=card" class="popupImg"></span></a></span>, <span class="hover_img"><a href="" class="discussionA cardA">Tasigur, the Golden Fang<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Tasigur,+The+Golden+Fang&type=card" class="popupImg"></span></a></span>, <span class="hover_img"><a href="" class="discussionA cardA">Primeval Titan<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Primeval+Titan&type=card" class="popupImg"></span></a></span>, etc.) and it is harder to hit 3 and 4 cmc creatures, especially in this particular deck, as you don't have many ways to trigger revolt. On the upside, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=423724" class="discussionA cardA">Fatal Push<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=423724&type=card" alt="Fatal Push" class="popupImg"></span></a></span> does not give your opponent a land, which can be a huge deal in certain matchups. Another interesting upside of <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=423724" class="discussionA cardA">Fatal Push<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=423724&type=card" alt="Fatal Push" class="popupImg"></span></a></span> is, because it cannot give your opponents a land, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=423724" class="discussionA cardA">Fatal Push<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=423724&type=card" alt="Fatal Push" class="popupImg"></span></a></span>ing their turn one mana dork is actually an effective play (as using path to exile on it would not stop them from ramping into a three drop turn two).</p>
                              <h6>Ways to trigger revolt in the deck</h6>
                              <p>Besides the obvious way of attacking in combat, a very common way to trigger revolt is to <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=151089" class="discussionA cardA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=151089&type=card" alt="Flickerwisp" class="popupImg"></span></a></span> any one of your permanents and then cast <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=423724" class="discussionA cardA">Fatal Push<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=423724&type=card" alt="Fatal Push" class="popupImg"></span></a></span> on a 3/4 cmc creature. This interaction also works with <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=240096" class="discussionA cardA">Restoration Angel<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=240096&type=card" alt="discussionA cardA Angel" class="popupImg"></span></a></span>, as it is causing the creature to leave the battlefield. Other than that, there are desperate plays like playing a <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=270445" class="discussionA cardA">Thalia, Guardian of Thraben<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=270445&type=card" alt="Thalia, Guardian of Thraben" class="popupImg"></span></a></span> after you already control one to trigger revolt through the legend rule, or even <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=423724" class="discussionA cardA">Fatal Push<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=423724&type=card" alt="Fatal Push" class="popupImg"></span></a></span> one of your own creatures (only ever useful if you have 3 <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=423724" class="discussionA cardA">Fatal Push<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=423724&type=card" alt="Fatal Push" class="popupImg"></span></a></span>es in hand and need to hit two 3/4 cmc creatures). Using one of your land-destruction lands like <span class="hover_img"><a href="" class="discussionA cardA">Ghost Quarter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Ghost+Quarter&type=card" class="popupImg"></span></a></span> is also a good way to trigger revolt.</p>
                          </div>
                        </div>
                      </div>
                    <img class="entImg" src="http://www.mtgcanada.com/wp-content/themes/jubini/framework/modules/timthumb/timthumb.php?src=http%3A%2F%2Fwww.mtgcanada.com%2Fwp-content%2Fuploads%2F2017%2F01%2FFatalPush930.png&w=930&h=350&zc=1" alt="Fatal Push">
            </div>
            <div class="col-sm-3">
                <img class="entCardImg" src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Fatal%20Push&type=card" alt="Fatal Push">
            </div>
                </div>
                <div class="row">
                    <div class="col-sm-9">
                        <div class="panel panel-format splashSectB">
                        <div class="panel-heading">
                          <h3 class="panel-title">
                            <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion6" href="#collapse4f">
                            Ravenous Chupacabra</a>
                          </h3>
                        </div>
                        <div id="collapse4f" class="panel-collapse collapse">
                          <div class="panel-body splashSectB">
                              <h4>About:</h4>
                              <p><span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=Ravenous%20Chupacabra" class="discussionA cardA">Ravenous Chupacabra<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=439739&type=card" alt="Ravenous Chupacabra" class="popupImg"></span></a></span> acts as extra removal that hits, well, every non-indestructable, non-hexproff/shroud creature in modern. <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=Ravenous%20Chupacabra" class="discussionA cardA">Ravenous Chupacabra<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=439739&type=card" alt="Ravenous Chupacabra" class="popupImg"></span></a></span> also has the upside of coming with a 2/2 body, for the cheap cost of 4. While this card may seem slow for modern, the blowouts that this card enables definitely  make it worth at least one slot in the deck. Since <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=Ravenous%20Chupacabra" class="discussionA cardA">Ravenous Chupacabra<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=439739&type=card" alt="Ravenous Chupacabra" class="popupImg"></span></a></span>'s ability is an enter the battlefield trigger, it can (and will) be repeated with flicker effects like <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=151089" class="discussionA cardA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=151089&type=card" alt="Flickerwisp" class="popupImg"></span></a></span> and <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=240096" class="discussionA cardA">Restoration Angel<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=240096&type=card" alt="discussionA cardA Angel" class="popupImg"></span></a></span>, allowing you to blow up their board.</p>
                          </div>
                      </div>
                  </div>
                    <img class="entImg" src="https://227rsi2stdr53e3wto2skssd7xe-wpengine.netdna-ssl.com/wp-content/uploads/2018/01/chupacabra-730x280.png" alt="Ravenous Chupacabra">
            </div>
            <div class="col-sm-3">
                <img class="entCardImg" src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Ravenous%20Chupacabra&type=card" alt="Ravenous Chupacabra">
            </div>
                </div>
            </div>
            <hr>
            <h3>Sideboarding 101:</h3>
            <br>
            <h3>When to bring cards in:</h3>
            <br>
            <h4>Fatal Push:</h4>
            <p><span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=423724" class="discussionA cardA">Fatal Push<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=423724&type=card" alt="Fatal Push" class="popupImg"></span></a></span> is strongest against creature-centric decks like the mirror, humans, jund. <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=423724" class="discussionA cardA">Fatal Push<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=423724&type=card" alt="Fatal Push" class="popupImg"></span></a></span> can also come in versus certain combo decks where it can disrupt one of their pieces (vizier-druid, gifts storm, etc.).</p>
            <h4>Kambal, Consul of Allocation</h4>
            <p><span class="hover_img"><a href="" class="discussionA cardA">Kambal, Consul of Allocation<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Kambal,+Consul+Of+Allocation&type=card" class="popupImg"></span></a></span> is a hoser versus spell-based decks, especially combo-oriented  ones like storm. <span class="hover_img"><a href="" class="discussionA cardA">Kambal, Consul of Allocation<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Kambal,+Consul+Of+Allocation&type=card" class="popupImg"></span></a></span> can also prove pivotal  in locking your control opponent, as the last few life points tend to matter a ton in the Death and Taxes vs. Control matchups. Other than that, <span class="hover_img"><a href="" class="discussionA cardA">Kambal, Consul of Allocation<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Kambal,+Consul+Of+Allocation&type=card" class="popupImg"></span></a></span> can also be played against burn, where I've found that the games can sometimes turn into races that can eventually lead you to locking your opponent from playing spells thanks to <span class="hover_img"><a href="" class="discussionA cardA">Kambal, Consul of Allocation<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Kambal,+Consul+Of+Allocation&type=card" class="popupImg"></span></a></span> or their own <span class="hover_img"><a href="" class="discussionA cardA">Eidolon of the Great Revel<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Eidolon+Of+The+Great+Revel&type=card" class="popupImg"></span></a></span>.</p>
            <h6>Liliana, the Last Hope:</h6>
            <p><span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=liliana%2C%20the%20last%20hope" class="discussionA cardA">Liliana, the Last Hope<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=414388&type=card" alt="Liliana, the Last Hope" class="popupImg"></span></a></span> is one of your best cards vs. any grindy deck, especially creature-based ones like Jund. She can easily swing games in your favor versus creature-centric decks like humans, the mirror, and Collected Company decks, as she is able to kill many of the creatures in their deck with her +1.</p>
            <h3>Other Sideboard Options</h3>
            <ul class="cardList">
                <li>Thoughtseize/Inquisition</li>
                <li>Gonti, Lord of Luxury</li>
                <li>More removal: Dismember</li>
            </ul>
            <!--<h4>Pros/Cons:</h4>-->
            <h3>Conclusion</h3>
            <p>While the least popular of the splashes, Black-White Taxes has unique options available that can add power and grind to the deck, whether that be removal, combo-hosers, hand disruption, or grindy threats.</p>
            <hr class="b">
            <h2 id="green">Green-White Taxes</h2>
            <h3>Intro:</h3>
            <p>Green-White Death and Taxes gives the deck higher quality creatures that generally allow the deck to go bigger and more beat-down than other splashes.</p> <!--INTRO: WIP-->
            <h3>Sample Decklist</h3>
            <div class="panel-group" id="accordion7">
            <div class="panel panel-format">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion7" href="#collapse1g">
                    Green-White Death and Taxes:</a>
                  </h4>
                </div>
            <div id="collapse1g" class="panel-collapse collapse">
                  <div class="panel-body"> <div class="row">
                <div class="col-sm-6">
                    <table class="table decklist table-condensed table-responsive">
                        <tbody>
                            <tr>
                                <th>Creatures:</th>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=179434" class="cellA cardA">Noble Hierarch<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=179434&type=card" alt="Noble Hierarch" class="popupImg"></span></a></span></td>
                                <td><img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/88/G.svg?version=cb3034672981a409bcaf1a72736ff8db" alt="g"></td>
                            </tr>
                            <tr>
                  <!--Arbiter--><td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=209287" class="cellA cardA">Leonin Arbiter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=209287&type=card" alt="Leonin Arbiter" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr>
                            <tr>
                                <td>2&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=233181" class="cellA cardA">Scavenging Ooze<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=233181&type=card" alt="Scavenging Ooze" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/88/G.svg?version=cb3034672981a409bcaf1a72736ff8db" alt="g">
                                </td>
                            </tr>
             <!-- thalia --><tr>
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=270445" class="cellA cardA">Thalia, Guardian of Thraben<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=270445&type=card" alt="Thalia, Guardian of Thraben" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr> 
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=368951" class="cellA cardA">Voice of Resurgence<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=368951&type=card" alt="Voice of Resurgence" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/88/G.svg?version=cb3034672981a409bcaf1a72736ff8db" alt="g">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr>
        <!-- flickerwisp --><tr>
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=151089" class="cellA cardA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=151089&type=card" alt="Flickerwisp" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr> 
                            <tr>
                                <td>1&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=141976" class="cellA cardA">Kitchen Finks<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=141976&type=card" alt="Kitchen Finks" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/2/2e/GW.svg?version=c5f88ce9b35e76197bcb6613673733a0" alt="gw">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/2/2e/GW.svg?version=c5f88ce9b35e76197bcb6613673733a0" alt="gw">

                                </td>
                                
                            </tr>
                            <tr>
                                <td>2&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?printed=true&multiverseid=213802" class="cellA cardA">Mirran Crusader<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=213802&type=card" alt="Mirran Crusader" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr> <!-- mirran -->
                            <tr>
                                <td>3&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=240096" class="cellA cardA">Restoration Angel<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=240096&type=card" alt="Restoration Angel" class="popupImg"></span></a></span></td>
                                 <td><img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8c/3.svg?version=2be20346c2303f7f6ce0bd9fb8accc10" alt="3">

                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr>
                            
                            <tr>
                                <th>Spells:</th>
                            </tr>
                                
                           <tr>
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=179235" class="cellA cardA">Path to Exile<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=179235&type=card" alt="Path to Exile" class="popupImg"></span></a></span></td>
                                <td><img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w"></td>
                            </tr>
                            <tr>
                                <th>Artifacts:</th>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=48146" class="cellA cardA">Aether Vial<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=48146&type=card" alt="Aether Vial" class="popupImg"></span></a></span></td>
                                <td><img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1"></td>
                            </tr>
                            
                            <tr>
                                <th>Lands:</th>
                            </tr>
                            <tr>
                                <td>1&emsp;<span class="hover_img"><a href="" class="cellA cardA">Forest<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Forest&type=card" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=220371" class="cellA cardA">Ghost Quarter<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=220371&type=card" alt="Ghost Quarter" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=130574" class="cellA cardA">Horizon Canopy<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=130574&type=card" alt="Horizon Canopy" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>3&emsp;<span class="hover_img"><a href="" class="cellA cardA">Plains<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Plains&type=card" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=209407" class="cellA cardA">Razorverge Thicket<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=209407&type=card" alt="Razorverge Thicket" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>2&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=197855" class="cellA cardA">Tectonic Edge<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=197855&type=card" alt="Tectonic Edge" class="popupImg"></span></a></span></td>
                            </tr>
                            <tr>
                                <td>4&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=253681" class="cellA cardA">Temple Garden<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=253681&type=card" alt="Temple Garden" class="popupImg"></span></a></span></td>
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
                                <td>1&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=50139" class="cellA cardA">Engineered Explosives<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=50139&type=card" alt="Engineered Explosives" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/3/3f/X.svg?version=44b4243ed81e7582c609ee868dc8b053" alt="x">  
                                </td>
                            </tr>
                            <tr>
                                <td>1&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=72921" class="cellA cardA">Auriok Champion<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=72921&type=card" alt="Auriok Champion" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr>
                            <tr>
                                <td>3&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=220195" class="cellA cardA">Celestial Purge<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=220195&type=card" alt="Celestial Purge" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr>
                            <tr>
                                <td>1&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=140188" class="cellA cardA">Gaddock Teeg<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=140188&type=card" alt="Gaddock Teeg" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/88/G.svg?version=cb3034672981a409bcaf1a72736ff8db" alt="g">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                        
                                </td>
                            </tr>
                            <tr>
                                <td>2&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=179556" class="cellA cardA">Qasali Pridemage<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=179556&type=card" alt="Qasali Pridemage" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/88/G.svg?version=cb3034672981a409bcaf1a72736ff8db" alt="g">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr>
                            <tr>
                                <td>1&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=SELFLESS+SPIRIT" class="cellA cardA">Selfless Spirit<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=414332&type=card" alt="Selfless Spirit" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr>
                            <tr>
                                <td>1&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=rest%20in%20peace" class="cellA cardA">Rest in Peace<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=277995&type=card" alt="Rest in Peace" class="popupImg"></span></a></span></td>
                                <td>
                                <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                        
                                    </td>
                            </tr>
                            <tr>
                                <td>3&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=247425" class="cellA cardA">Stony Silence<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=247425&type=card" alt="Stony Silence" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr>
                            <tr>
                                <td>1&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=230082" class="cellA cardA">Dismember<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=230082&type=card" alt="Dismember" class="popupImg"></span></a></span></td>
                                <td>
                                     <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/4/4f/BP.svg?version=4bcd19625e7bf0b6a4117ce409b30ce9" alt="phyrexian black">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/4/4f/BP.svg?version=4bcd19625e7bf0b6a4117ce409b30ce9" alt="phyrexian black">

                                    
                                </td>
                            </tr>
                            <tr>
                                <td>1&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=141976" class="cellA cardA">Kitchen Finks<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=141976&type=card" alt="Kitchen Finks" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/9/96/1.svg?version=d7915ee1443f11de3ad34e93ec7a6646" alt="1">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/2/2e/GW.svg?version=c5f88ce9b35e76197bcb6613673733a0" alt="gw">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/2/2e/GW.svg?version=c5f88ce9b35e76197bcb6613673733a0" alt="gw">
                                </td>
                            </tr>
                            <tr>
                                <td>1&emsp;<span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=83338" class="cellA cardA">Worship<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=83338&type=card" alt="Worship" class="popupImg"></span></a></span></td>
                                <td>
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8c/3.svg?version=394761df0802ef1032aa57090adbcf2c" alt="3">
                                    <img class="manaCost" src="https://d1u5p3l4wpay3k.cloudfront.net/mtgsalvation_gamepedia/8/8e/W.svg?version=d66764f1fa820519226acde69d6c1052" alt="w">
                                </td>
                            </tr>
                            <tr>
                                <td><br><br><br><br><br><br><br><br><br><br><br><br><br></td>
                            </tr>
                </tbody>
            </table>
            </div>
                
            </div></div>
                </div>
              </div>
        </div>
        <h3>Card Analysis:</h3>
        <div class="panel-group" id="accordion8">
            <div class="row">
                <div class="col-sm-9">
                    <div class="panel panel-format splashSectG">
                        <div class="panel-heading">
                          <h3 class="panel-title">
                            <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion8" href="#collapse1h">
                            Noble Hierarch</a>
                          </h3>
                        </div>
                        <div id="collapse1h" class="panel-collapse collapse">
                          <div class="panel-body splashSectG">
                              <h4>About:</h4>
                              <p><span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=179434" class="discussionA cardA">Noble Hierarch<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=179434&type=card" alt="Noble Hierarch" class="popupImg"></span></a></span> is one of the most powerful 1 cmc mana dorks in the game. Not only does she tap for the colors of the deck (green & white), but she also has exalted, which means that she can attack on turn two as a 1/2 or speed up the clock of single flier attackers.</p>
                              <h3>Hierarch Interactions:</h3>
                              <p>Since <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=179434" class="discussionA cardA">Noble Hierarch<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=179434&type=card" alt="Noble Hierarch" class="popupImg"></span></a></span> is a 0/1, she can attack through an <span class="hover_img"><a href="" class="discussionA cardA">Ensnaring Bridge<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Ensnaring+Bridge&type=card" class="popupImg"></span></a></span> even if your opponent is emtpy handed. Because of the exalted trigger, she will still deal combat damage, making her one of your better cards vs. Lantern Control. Additionally, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=179434" class="discussionA cardA">Noble Hierarch<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=179434&type=card" alt="Noble Hierarch" class="popupImg"></span></a></span> exalted triggers can stack up, allowing you to attack for a bunch with a flier or a first-striker.</p>
                          </div>
                        </div>
                      </div>
                <img class="entImg" src="https://227rsi2stdr53e3wto2skssd7xe-wpengine.netdna-ssl.com/wp-content/uploads/2016/04/noble-hierarch-730x280.jpg" alt="Noble Hierarch">
                        </div>
                        <div class="col-sm-3">
                            <img class="entCardImg" src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Noble%20Hierarch&type=card" alt="Noble Hierarch">
                        </div>
            </div>
            <div class="row">
                <div class="col-sm-9">
                     <div class="panel panel-format splashSectG">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion8" href="#collapse2h">
                    Scavenging Ooze</a>
                  </h3>
                </div>
                <div id="collapse2h" class="panel-collapse collapse">
                  <div class="panel-body splashSectG">
                      <h4>About:</h4>
                      <p><span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=233181" class="discussionA cardA">Scavenging Ooze<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=233181&type=card" alt="Scavenging Ooze" class="popupImg"></span></a></span>, while initially a 2/2 bear, it can grow larger than any creature on the battlefield, effectively making it an amazing attacker/blocker in the late game. Additionally, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=233181" class="discussionA cardA">Scavenging Ooze<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=233181&type=card" alt="Scavenging Ooze" class="popupImg"></span></a></span> gives the deck lifegain, an important trait necessary against burn or other aggro decks. Most importantly, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=233181" class="discussionA cardA">Scavenging Ooze<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=233181&type=card" alt="Scavenging Ooze" class="popupImg"></span></a></span> acts as graveyard hate, from stopping <span class="hover_img"><a href="" class="discussionA cardA">Snapcaster Mage<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Snapcaster+Mage&type=card" class="popupImg"></span></a></span> from flashing back spells to eating the dredge player's graveyard.</p>
                  </div>
                </div>
              </div>
                <img class="entImg" src="http://227rsi2stdr53e3wto2skssd7xe.wpengine.netdna-cdn.com/wp-content/uploads/2013/05/scavenging-ooze.jpg" alt="Scavenging Ooze">
                        </div>
                        <div class="col-sm-3">
                            <img class="entCardImg" src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Scavenging%20Ooze&type=card" alt="Scavenging Ooze">
                        </div>
            </div>
            <div class="row">
                <div class="col-sm-9">
                    <div class="panel panel-format splashSectG">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion8" href="#collapse3h">
                    Voice of Resurgence</a>
                  </h3>
                </div>
                <div id="collapse3h" class="panel-collapse collapse">
                  <div class="panel-body splashSectG">
                      <h4>About:</h4>
                      <p><span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=368951" class="discussionA cardA">Voice of Resurgence<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=368951&type=card" alt="Voice of Resurgence" class="popupImg"></span></a></span> stops(more like highly discourages) your opponent from casting spells on your turn, as doing so will result in rewarding you an x/x elemental token, where x equals the amount of creatures you confirm. This token also comes whenever <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=368951" class="discussionA cardA">Voice of Resurgence<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=368951&type=card" alt="Voice of Resurgence" class="popupImg"></span></a></span> dies, making it a valuable creature vs. control decks or decks without exile effects (mainly non-<span class="hover_img"><a href="" class="discussionA cardA">Path to Exile<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Path+To+Exile&type=card" class="popupImg"></span></a></span> decks), as <span class="hover_img"><a href="" class="discussionA cardA">Path to Exile<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Path+To+Exile&type=card" class="popupImg"></span></a></span> stops the token from coming. Since the token can get huge quickly, <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=368951" class="discussionA cardA">Voice of Resurgence<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=368951&type=card" alt="Voice of Resurgence" class="popupImg"></span></a></span> is a very good blocker, as the token is almost always more valuable. The main issue with the token is opposing flicker effects like <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=151089" class="discussionA cardA">Flickerwisp<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=151089&type=card" alt="Flickerwisp" class="popupImg"></span></a></span>.</p>
                  </div>
                </div>
              </div>
                <img class="entImg" src="https://227rsi2stdr53e3wto2skssd7xe-wpengine.netdna-ssl.com/wp-content/uploads/2013/04/voice-of-resurgence.png" alt="Voice of Resurgence">
                        </div>
                        <div class="col-sm-3">
                            <img class="entCardImg" src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Voice%20of%20Resurgence&type=card" alt="Voice of Resurgence">
                        </div>
            </div>
            <div class="row">
                <div class="col-sm-9">
                    <div class="panel panel-format splashSectG">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a class="splashCardSect" data-toggle="collapse" data-parent="#accordion8" href="#collapse4h">
                    Kitchen Finks</a>
                  </h3>
                </div>
                <div id="collapse4h" class="panel-collapse collapse">
                  <div class="panel-body splashSectG">
                      <h4>About:</h4>
                      <p>While <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=141976" class="discussionA cardA">Kitchen Finks<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=141976&type=card" alt="Kitchen Finks" class="popupImg"></span></a></span> is technically G/W, it can (and generally is) be played in other taxes variants. <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=141976" class="discussionA cardA">Kitchen Finks<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=141976&type=card" alt="Kitchen Finks" class="popupImg"></span></a></span>, for the low cost of three mana, gives you a 3/2 body that gains two life, plus has persist, making it very strong verus removal. <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=141976" class="discussionA cardA">Kitchen Finks<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=141976&type=card" alt="Kitchen Finks" class="popupImg"></span></a></span> is strongest vs. aggro and burn, as the lifegain and presist can be turn the match in your favor. <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=141976" class="discussionA cardA">Kitchen Finks<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=141976&type=card" alt="Kitchen Finks" class="popupImg"></span></a></span> is also very strong versus decks with non-exiling removal spells, especially since you can let your <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=141976" class="discussionA cardA">Kitchen Finks<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=141976&type=card" alt="Kitchen Finks" class="popupImg"></span></a></span> die to removal (especially a <span class="hover_img"><a href="" class="discussionA cardA">Liliana of the Veil<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Liliana+Of+The+Veil&type=card" class="popupImg"></span></a></span> edict) or block with it, and then blink it to remove the persist counter on it, putting you up tons of life and value. One non-bo worth mentioning is <span class="hover_img"><a href="" class="discussionA cardA">Kitchen Finks<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Kitchen+Finks&type=card" class="popupImg"></span></a></span> with <span class="hover_img"><a href="" class="discussionA cardA">Rest in Peace<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Rest+In+Peace&type=card" class="popupImg"></span></a></span>: with the latter in play, <span class="hover_img"><a href="" class="discussionA cardA">Kitchen Finks<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Kitchen+Finks&type=card" class="popupImg"></span></a></span> will not come back with a persist counter, so remember this interaction when sideboarding against an aggro graveyard deck like Dredge or BR Hollow One.</p>
                  </div>
              </div>
                  </div>
                <img class="entImg" src="https://vignette.wikia.nocookie.net/gamelore/images/7/7d/Kitchen_Finks.jpg/revision/latest?cb=20141228044506" alt="Kitchen Finks">
                        </div>
                        <div class="col-sm-3">
                            <img class="entCardImg" src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Kitchen%20Finks&type=card" alt="Kitchen Finks">
                        </div>
            </div>

                </div>
                <hr>
        <h3>Sideboarding 101:</h3>
        <br>
        <h3>When to bring green cards in:</h3>
        <br>
        <h4>Gaddock Teeg:</h4>
        <p><span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=140188" class="discussionA cardA">Gaddock Teeg<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=140188&type=card" alt="Gaddock Teeg" class="popupImg"></span></a></span> is best vs. controlling decks, as those tend to play cards that he can render useless (<span class="hover_img"><a href="" class="discussionA cardA">Jace, the Mind Sculptor<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Jace,+The+Mind+Sculptor&type=card" class="popupImg"></span></a></span>, <span class="hover_img"><a href="" class="discussionA cardA">Cryptic Command<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Cryptic+Command&type=card" class="popupImg"></span></a></span>, <span class="hover_img"><a href="" class="discussionA cardA">Teferi, Hero of Dominaria<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Teferi,+Hero+Of+Dominaria&type=card" class="popupImg"></span></a></span>, etc.). <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=140188" class="discussionA cardA">Gaddock Teeg<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=140188&type=card" alt="Gaddock Teeg" class="popupImg"></span></a></span> can also come in vs. green/x decks that utilize <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?name=collected%20company" class="discussionA cardA">Collected Company<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=394519&type=card" alt="Collected Company" class="popupImg"></span></a></span> and/or <span class="hover_img"><a href="" class="discussionA cardA">Chord of Calling<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?name=Chord+Of+Calling&type=card" class="popupImg"></span></a></span>, as <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=140188" class="discussionA cardA">Gaddock Teeg<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=140188&type=card" alt="Gaddock Teeg" class="popupImg"></span></a></span> stops both. <span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=140188" class="discussionA cardA">Gaddock Teeg<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=140188&type=card" alt="Gaddock Teeg" class="popupImg"></span></a></span> can also come in vs. Ad Nasuseam, as he stops the deck's namesake spell from being cast.</p>
        <h4>Qasali Pridgemage:</h4>
        <p><span class="hover_img"><a href="http://gatherer.wizards.com/Pages/Card/Details.aspx?multiverseid=179556" class="discussionA cardA">Qasali Pridemage<span><img src="http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=179556&type=card" alt="Qasali Pridemage" class="popupImg"></span></a></span> is best vs. decks that utilize artifacts and/or enchantment in their deck. This includes affinity, lantern, Ad Nasuseam, prison, and the mirror. Really any deck that has 4+ artifacts/enchantments that are relevant is enough to bring in this card, as a 2/2 exalted  is often enough.</p>
        <h3>Other sideboard options:</h3>
        <ul class="cardList">
            <li>Reclamation Sage</li>
            <li>Shalai, Voice of Plenty</li>
        </ul>
        <!--<h4>Pros/Cons</h4>-->
        <h3>Conclusion</h3>
        <p>G/W Taxes is a great beater variant of Modern Death & Taxes. Green gives the deck tons of options to fight a variety of decks, while being able to power out powerful threats to be able to keep up with the fast pace of the format.</p>
            
            <div class="extra-space"></div>
            </div>
            
            <div id="footer">
            <br>
                <h6 class="footH">Questions or suggestions? Email me at theratzoo@dntcentral.com</h6>
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
