<?php
    include("scripts/searchscript.php"); //actually works
    
?>
<?php
    include("scripts/cardlistdb.php"); //does work
?>
<?php
    $filename = 'format.php';
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

    

        <title>Formats</title>
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
            <div class="container-fluid body-div" id="content">
                <div class="jumbotron"> 
              <h1>Formats</h1>
            </div>

            <p>
              Death and Taxes, the strategy of taxing your opponent while beating them down with white beaters, is playable in a variety of formats. Some, of course, have more viable decks than others. For example, while Legacy's version is a tier one deck, the deck is not even visible in the standard metagame (yet!). In all formats, the premise remains constant- use creatures to tax the opponent’s gameplan while beating down with said creatures and other efficient beaters.
            </p>
            <br>
            <div class="row">
              <div class="col-sm-6">
                  <img id="aethervial" class="fImg" src="https://s-media-cache-ak0.pinimg.com/originals/ba/39/1e/ba391efa0eedb5b486e9961fbbd5f1b3.jpg" alt="aether vial">
                  </div>
              <div class="col-sm-6">
                  <img id="thaliagot" class="fImg" src="https://orig00.deviantart.net/df4a/f/2012/012/0/4/thalia__guardian_of_thraben_by_algenpfleger-d4m3bms.jpg" alt="thalia, guardian of thraben">
              </div>
            </div>
            <br>
            <br>
            <div class="panel-group" id="accordion">
              <div class="panel panel-format">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                    Legacy</a>
                  </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>Legacy is the main format for Death and Taxes. The large card pool of legacy provides the archetype with a wide range of creatures and other taxing cards to fight the meta. It also has powerful mana denial, thanks to Rishadan Port and Wasteland.<a class="fA" href="/legacy/"> Read more here.</a></p>
                    <div class="row">
                        <div class="col-sm-6">
                            <img class="fImg" src="https://gamepedia.cursecdn.com/mtgsalvation_gamepedia/3/35/Rishada.jpg?version=e3d0dc692f8565b9ec09198142a01d35" alt="Rishadan Port">
                        </div>
                        <div class="col-sm-6">
                            <img class="fImg" src="https://magic.wizards.com/sites/mtg/files/images/hero/Wasteland-Icon.jpg" alt="wasteland">
                        </div>
                    </div>
                      
                  </div>
                </div>
              </div>
              <br>
              <br>
              <div class="panel panel-format">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                    Modern</a>
                  </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                  <div class="panel-body">
                  <p>
                      While not as powerful or tiered as Legacy, Modern Death and Taxes still makes efficient use of taxing creatures and aether vial to disrupt your opponent. In modern, there are many variations of the deck, from Eldrazi and Taxes, to Green-White Taxes, to the more traditional mono white Death and Taxes, all viable thanks to the diversity of the current meta. <a class="fA" href="modern">Read more here.</a>
                  </p> 
                      <div class="row">
                        <div class="col-sm-6">
                            <img class="fImg" src="https://magic.wizards.com/sites/mtg/files/images/hero/ARC20150423_icon.jpg" alt="Path to Exile">
                        </div>
                        <div class="col-sm-6">
                            <img class="fImg" src="https://vignette.wikia.nocookie.net/gamelore/images/8/86/Leonin_Arbiter.jpg/revision/latest?cb=20170917212659" alt="Leonin Arbiter">
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <br>
              <div class="panel panel-format">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                    Vintage</a>
                  </h4>
                </div>
                <div id="collapse4" class="panel-collapse collapse">
                  <div class="panel-body">Due to the deck lacking blue, Death and Taxes is not at its prime in the powerful format of Vintage. However, playing Thalia, Guardian of Thraben and other taxing creatures on turn one can still be game-winning plays against some of the more fair strategies. Typically the deck runs Eldrazi like Thought-Knot Seer and Reality Smasher, as cards like vial and wisp are too fair and slow for vintage. <a class="fA" href="vintage">Read more here.</a>
                      <div class="row">
                          <div class="col-sm-6">
                          <img class="fImg"src="https://static1.squarespace.com/static/52bf4762e4b0171d9d785d34/t/52c1ff23e4b0c7e76795f511/1388445476626/BlackLotus.jpg" alt="Black Lotus">
                          </div>
                          <div class="col-sm-6">
                              <img class="fImg" src="https://magic.wizards.com/sites/mtg/files/images/wallpaper/Thalia-Heretic-Cathar_EMN_1280x960_Wallpaper.jpg" alt="Thalia, Heritic Cathar">
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <br>
              <br>
              <div class="panel panel-format">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                    Commander</a>
                  </h4>
                </div>
                <div id="collapse5" class="panel-collapse collapse">
                  <div class="panel-body">Stax is a very powerful deck in EDH, but it can also be tons of fun! You can use any of your legendary creatures, like Thalia, Guardian of Thraben, from other formats' versions of Death and Taxes as your commander, but cards like Derevi, Empyrial Tactician are typically the stronger options. While mono-white has many options, going two or three colors tends to be strongest thanks to the huge card pool of Commander.<a class="fA" href="commander"> Read more here.</a>
                      <div class="row">
                          <div class="col-sm-6">
                          <img class ="fImg"src="images/formats/grand-arbiter-art.jpg" alt="Grand Arbiter Augustin IV">
                          </div>
                          <div class="col-sm-6">
                              <img class="fImg" src="https://i.pinimg.com/originals/72/a2/28/72a228945da04bf774bd3d36940c9576.jpg" alt="Derevi, Empyrial Tactician">
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <br>
              <br>
              <div class="panel panel-format">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                    ...Standard?!</a>
                  </h4>
                </div>
                <div id="collapse6" class="panel-collapse collapse">
                  <div class="panel-body">While possible, I would highly discourage playing this archetype in standard unless its at a local weekly or other more casual events. Currently, with the printing of Ixalan, two new hatebears are available to play with. Dominaria and Core 2019 also introduced new cards to the deck, such as Militia Bugler and Shalai, Voice of Plenty. Since Standard lacks the great taxing creatures like Thalia, Guardian of Thraben, Leonin Arbiter, and Phyrexian Revoker, the deck is more of a mono-white/black-white beater deck, but with bad creatures instead! <a class="fA" href="standard">Read more here.</a>
                    <div class="row">
                        <div class="col-sm-6">
                            <img class="fImg" src="https://i.pinimg.com/originals/48/23/3d/48233dac4c7e6e4b56b5e8a934d75f10.jpg" alt="Kinjali Sunwing">
                        </div>
                        <div class="col-sm-6">
                            <img class="fImg" src="https://cdn.inprnt.com/thumbs/00/36/003654f6a6f289216b85c7117bdb2a95.jpg?response-cache-control=max-age=2628000" alt="Tocatli Honor Guard">
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                
            
            <br>
            <div class="extra-space">

            </div>
            </div>
            
            <script>var jArray = <?php echo json_encode($listOfCardNames); ?>;</script>
            <script src="/loadcardhoversettings.js"></script>
            
            <?php
                include("scripts/footer.php");
            ?>
            <script>var jStr = <?php echo json_encode($lastModDate); ?>;</script>
            <script src="/loadpublishinfo.js" type="text/javascript"></script>
    </body>
</html>
