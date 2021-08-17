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

        <title>Search Results</title>
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

                var x = document.getElementsByClassName("popupImg");
                var y = document.getElementsByClassName("discussionA");
                for(var i = 0; i<x.length; i++) {
                    var name = y[i].textContent;

                    x[i].src = `http://gatherer.wizards.com/Handlers/Image.ashx?name=${name}&type=card`;
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
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
          (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-5296235643990630",
            enable_page_level_ads: true
          });
        </script>
    </head>
    <body class="homePage" onload="loadScript()">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container">
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
                                        <li><a href="format">Format Page</a></li>
                                        <li><a href="legacy/">Legacy</a></li>
                                        <li><a href="modern/">Modern</a></li>
                                        <li><a href="vintage">Vintage</a></li>
                                        <li><a href="commander">Commander</a></li>                           
                                        <li><a href="standard/">Standard</a></li>
                                    </ul>
                                    
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">
                                        Modern Guides
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                    <li><a href="/modern/variations/">Splashes & Other Variations</a></li>
                                    <li><a href="modern/mulligans">Mulligan Guide</a></li>
                                    <li><a href="modern/budget">Budget Options</a></li>
                                    <li><a href="modern/matchupguides">Matchup Guides</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">
                                        Legacy Guides
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                    <li><a href="legacy/individualcards">Individual Cards</a></li>
                                    <li><a href="legacy/othervariants">Other Variants</a></li>
                                    <li><a href="legacy/sideboard">Sideboarding 101</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="spicespace/">Spice Space</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="flickerwisp">Flickerwisp 101</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="resources">Other Resources</a>
                                </li>
                                <li class="nav-item">
                                    <form action="../searchresults.php" method="GET" class="navSearchForm">
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
                        <div class="col-2">
                        </div>
                        <div class="col-8">
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
                <div class="container">
            
                <br>
                <br>
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
