<?php
    include("../../scripts/searchscript.php");
    
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

    

        <title>Modern- Matchup Guides</title>
        <link rel="stylesheet" type="text/css" href="/style.css">
        <script>
            $(document).ready(function() {

                var hash = window.location.hash;
                switch(hash){
                    case '#load-bw-ent':
                        loadBWEnt();
                        break;
                }

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
              disableButton();
                
            }
          function dismissAlert() {
            //document.getElementById("alertMG").style.visibility = "hidden";
            document.getElementById("alertMG").style.display = "none";
          }
          function stopShowingAlert() {
            localStorage.setItem('hide10', true);
            dismissAlert();
          }
          function disableButton() {
            if(document.getElementById('muguidelist').innerHTML.includes("bw-ent")) {
                document.getElementById('show-bw-ent').style.pointerEvents = "none";
                document.getElementById('show-mono-w-ent').style.pointerEvents = "auto";

                document.getElementById('show-mono-w-ent').style.color = document.getElementById('acolor').style.color;
                document.getElementById('show-bw-ent').style.color = "grey";
                document.getElementById('listTitle').innerHTML = "List of Decks (B/W E&T)";
              } else {
                document.getElementById('show-mono-w-ent').style.pointerEvents = "none";
                document.getElementById('show-bw-ent').style.pointerEvents = "auto";

                document.getElementById('show-bw-ent').style.color = document.getElementById('acolor').style.color;
                document.getElementById('show-mono-w-ent').style.color = "grey";
                document.getElementById('listTitle').innerHTML = "List of Decks (Mono-W E&T)";
              }
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
                        <a href="/modern/mulligans#mg"><strong>April's Mulligan Game is available now!</strong></a>
                        <input id="dismissAlert" onclick="dismissAlert()">
                        <br>
                        <a href="/" onclick="stopShowingAlert()" id="stopShowingAlert">Don't show this again.</a>
                    </div>
                    <br>
                <div class="jumbo-tron">
                    <h1>Modern- Matchup Guides</h1>
                </div>
                <br>
                <div class="row mudivider">
                    <div class="col-6" id="w-ent">
                        <h2><a href="javascript:void(0);" onclick="loadWEnt()" id="show-mono-w-ent">Mono-White E&T</a></h2>
                    </div>
                    <div class="col-6" id="bw-ent">
                        <h2><a href="javascript:void(0);" onclick="loadBWEnt()" id="show-bw-ent">BW E&T</a></h2>
                    </div>
                </div>
            <br>
            <h3 id="listTitle">List of Decks:</h3>
            <br>
            <div id="muguidelist">
                <?php
                  include("../../matchupguidesetup.php");
                ?>
            </div>
            <script>
            function loadWEnt() {
                //disable WENT button
                //mark it so user can identify that it is the one that's selected
                //present the guides for mono-w ent

                //can get the guides by either 
                //A (easy method)- change links to direct to monowhite folder
                //or B (hard method)- based on whether the search table has mono-w or bw ent in the description is how they are ordered. this data will be retrieved by, after initially loading the images and such, saving a local JS copy of ALL the MU guides available so that, in the event that the user clicks on this, the func can access this array of arrays to correctly modify the webpage.
                //**don't check for mono-w E&T in description, as i cannot nicely fit it into description of older formatted MU guides**... still check for BW E&T

                var listOfEntries = <?php echo json_encode($listOfGuides); ?>;
                var counter = 0;
                var stuff = "";
                for(var i=listOfEntries.length-1; i>=0; i--) {
                    if(!listOfEntries[i][1].includes("B/W Eldrazi and Taxes")) {
                        stuff = addElement(listOfEntries[i], counter, stuff);
                        counter++;
                    }
                }

                document.getElementById('muguidelist').innerHTML = stuff;
                disableButton();
            }

            function addElement(entry, counter, stuff) {
                var title = entry[0];
                while(title.includes("(")) {
                    title = title.slice(0, -1);
                }
                var newStuff = stuff;
                if(counter%3 == 0) {
                    if(counter != 0) {
                        newStuff += "</div>";
                    }
                    newStuff += "<br><hr><br>";
                    newStuff += `<div class="row">`;
                }
                newStuff += `<div class="col-sm-4"><h2><a href="${entry[2]}" class="mua">${title}</a></h2><a href="${entry[2]}"><img src="${entry[3]}" class="muhome"></a></div>`;
                return newStuff;
            }

            function loadBWEnt() {
                var listOfEntries = <?php echo json_encode($listOfGuides); ?>;

                console.log(listOfEntries);
                
                var counter = 0;
                var stuff = "";
                for(var i=listOfEntries.length-1; i>=0; i--) {
                    if(listOfEntries[i][1].includes("B/W Eldrazi and Taxes")) {
                        stuff = addElement(listOfEntries[i], counter, stuff);
                        counter ++;
                    }
                }

                document.getElementById('muguidelist').innerHTML = stuff;
                disableButton();

            }
        </script>
            
            <!-- include image of a namesake card above or below decklist-->

            
            
            <a href="" id="acolor" style="visibility:hidden">_</a>
            <br>
            
            </div>
            
            
            
            <?php
                include("../../scripts/footer.php");
            ?>
            <script>var jStr = <?php echo json_encode($lastModDate); ?>;</script>
            <script type="text/javascript" src="/loadpublishinfo.js"></script>
    </body>
</html>
