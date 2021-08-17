<?php
    include("scripts/searchscript.php"); //actually works
    
?>
<?php
    include("scripts/cardlistdb.php"); //does work
?>
<?php
    $filename = 'resources.php';
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

    

        <title>Other Resources</title>
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
            <div class="container-fluid" id="content">
                <div class="jumbotron">
                <h1>Other Resources</h1>
            </div>
            <p>Below are videos, guides, tournament reports, and other Death and Taxes content created by talented Magic: the Gathering content creatures. If there are any additional Death and Taxes or Eldrazi and Taxes content that you stumble across, please send me a link and I would gladly add it to the list.</p> <!--include search bar for videos-->
            <br>
            <hr>
            <br>
            <h2>Modern</h2>
            <br>
            <h3>2019</h3>
            <br>
            <h4>Videos</h4>
            <br>
            <h5>Pleasant Kenobi</h5>
            <ul>
                <li><a href="https://www.youtube.com/watch?v=J_ezdMj56Hw">Green-White Death and Taxes - Modern | Channel PleasantKenobi</a></li>
                <li><a href="https://www.youtube.com/watch?v=FsO2LDKz3Ds">NEW Lavinia, Azorius Renegade in UW Death and Taxes - Modern Gameplay</a></li>
                <li><a href="https://www.youtube.com/watch?v=cHvxtsqaYv0">GW Death and Taxes in Modern - Stream VOD</a></li>
            </ul>
            <br>
            <h5>Nikachu MTG</h5>
            <ul>

                <li><a href="https://www.youtube.com/watch?v=R8Xr3qy9RQk">Modern Death and Taxes WITHOUT Leonin Arbiter! MTGO Gameplay</a></li>

                <li><a href="https://www.youtube.com/watch?v=v4LjnofEaLE">UW Death and Taxes vs Bant Spirits Ep.14 Pt.1 Modern MTG Gameplay January 2019 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=QoWVvSoA3O8">UW Death and Taxes vs Mill Ep.14 Pt.2 Modern MTG Gameplay January 2019 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=FEFB5Hnnt1Y">UW Death and Taxes vs Jund Ep.14 Pt.3 Modern MTG Gameplay January 2019 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=kUfZyQ7gElU">UW Death and Taxes vs Red Deck Wins Ep.14 Pt.4 Modern MTG Gameplay January 2019 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=_FCb_4cDbvE">UW Death and Taxes vs Krark-Clan Ironworks Ep.14 Pt.5 Modern MTG Gameplay January 2019 (The Splicer)</a></li>

                <li><a href="https://www.youtube.com/watch?v=A86Ny4edpIY">Death and Taxes vs Amulet Titan Ep.15 Pt.1 Modern MTG Gameplay January 2019</a></li>
                <li><a href="https://www.youtube.com/watch?v=ZhinvANSD5g">Death and Taxes vs Burn Ep.15 Pt.2 Modern MTG Gameplay January 2019 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=A-0_QOZ7cEw">Death and Taxes vs Merfolk Ep.15 Pt.3 Modern MTG Gameplay January 2019 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=0U3LHTObPgg">Death and Taxes vs Dimir Eldrazi Ep.15 Pt.4 Modern MTG Gameplay January 2019 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=n_zqhkI2qJA">Death and Taxes vs Amulet Titan Ep.15 Pt.5 Modern MTG Gameplay January 2019 (The Splicer)</a></li>

                <li><a href="https://www.youtube.com/watch?v=nPCvAN3Uxm0">Death and Taxes vs Affinity Ep.16 Pt.1 Modern MTG Gameplay January 2019 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=Zd8vR8k87LU">Death and Taxes vs Hardened Scales Affinity Ep.16 Pt.2 Modern MTG Gameplay (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=iSVkyz8W52I">Death and Taxes vs Burn Ep.16 Pt.3 Modern MTG Gameplay January 2019 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=nJes9juBU3A">Death and Taxes vs Burn Ep.16 Pt.4 Modern MTG Gameplay January 2019 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=jIeENsk50bA">Death and Taxes vs Dredge Ep.16 Pt.5 Modern MTG Gameplay January 2019 (The Splicer)</a></li>

                <li><a href="https://www.youtube.com/watch?v=eOHfo84d83k">Death and Taxes vs Dredge Ep.17 Pt.1 Modern MTG Gameplay February 2019</a></li>
                <li><a href="https://www.youtube.com/watch?v=jKcJrUljJKU">Death and Taxes vs Humans Ep.17 Pt.2 Modern MTG Gameplay February 2019</a></li>
                <li><a href="https://www.youtube.com/watch?v=fmM3ZCongCs">Death and Taxes vs Grixis Death's Shadow Ep.17 Pt.3 Modern MTG gameplay February 2019</a></li>
                <li><a href="https://www.youtube.com/watch?v=MieuXJUGG-I">Death and Taxes vs Grixis Death's Shadow Ep.17 Pt.4 Modern MTG Gameplay February 2019</a></li>
                <li><a href="https://www.youtube.com/watch?v=zgULoqHJfpk">Death and Taxes vs Living End Ep.17 Pt.5 Modern MTG Gameplay February 2019</a></li>

            </ul>
            <br>
            <h5>Other MTGO Videos</h5>
            <ul>
                <li><a href="https://www.youtube.com/watch?v=sF_mJla4GvY">Lavinia Taxes | Mining Modern</a></li>
                <li><a href="https://www.youtube.com/watch?v=CFYarbtysdM">Eldrazi Taxes Magic: The Gathering Modern League #30</a></li>
                <li><a href="https://www.youtube.com/watch?v=M9gTVCdk-Js">Modern GW Eldrazi & Taxes</a></li>
                <li><a href="https://www.youtube.com/watch?v=tIRgZyGatgk">Budget Eldrazi and Taxes vs Mono-Red Frenzy (Bonus Game 1)</a></li>
            </ul>
            <br>
            <h5>Paper Videos</h5>
            <ul>
                <li><a href="https://www.youtube.com/watch?v=uxcJCDiWPJ0">Modern Mondays Eldrazi Taxes V Grixis Death's Shadow 03 04 2019</a></li>
                <li><a href="https://www.youtube.com/watch?v=Nopyk6-XTGQ">Featured Matches - Modern: Grixis Death's Shadow vs Eldrazi and Taxes</a></li>
                <li><a href="https://www.youtube.com/watch?v=VVCupw4KGek">Eldrazi & Taxes vs Grixis Death Shadow Round 2 Modern Magic Mondays 2/18</a></li>
                <li><a href="https://www.youtube.com/watch?v=JR7GxPsXT2w">Modern FNM w/ Comm 11/9/18: Justin Spivack (Eldrazi & Taxes) vs. Andrew McCloskey (U/R Phoenix)</a></li>
                <li><a href="https://www.youtube.com/watch?v=xkvxKLdVLDU">Featured Matches - Modern: Karn Moon vs Eldrazi and Taxes</a></li>
                <li><a href="https://www.youtube.com/watch?v=-MQ0ljOOjJE">elves vs BW eldrazi taxes Modern</a></li>
                <li><a href="https://www.youtube.com/watch?v=OSpYbNieicw">Featured Matches - Modern: Temur Scapeshift vs Eldrazi and Taxes</a></li>
            </ul>
            <br>
            <hr>
            <br>
            <h3>2018</h3>
            <br>
            <h4>Videos</h4>
            <br>
            <h5>Nikachu MTG</h5>
            <ul>
                <li><a href="https://www.youtube.com/watch?v=Spimg145rrA">Modern Death and Taxes vs Counters Company Ep.1 Pt.1 (Jason "the Splicer" Simard)</a></li>
                <li><a href="https://www.youtube.com/watch?v=c7jH8wE7bTQ">Modern Death and Taxes vs Tron Ep.1 Pt.2 (Jason "the Splicer" Simard)</a></li>
                <li><a href="https://www.youtube.com/watch?v=hPlicZ3I6N0">Modern Death and Taxes vs UW Control Ep.1 Pt.3 (Jason "the Splicer" Simard)</a></li>
                <li><a href="https://www.youtube.com/watch?v=2tn_Tx3U1bk">Modern Death and Taxes vs Eldrazi Ep.1 Pt.4 (Jason "the Splicer" Simard)</a></li>
                <li><a href="https://www.youtube.com/watch?v=DisukJahgkQ">Modern Death and Taxes vs Tron Ep.1 Pt.5 (Jason "the Splicer" Simard)</a></li>
                <li><a href="https://www.youtube.com/watch?v=kZfCfnQyxH8">Modern Death and Taxes vs Infect Ep.2 Pt.1 (Jason "the Splicer" Simard)</a></li>
                <li><a href="https://www.youtube.com/watch?v=MGv1I-vHRy0">Modern Death and Taxes vs Affinity Ep.2 Pt.2 (Jason "the Splicer" Simard)</a></li>
                <li><a href="https://www.youtube.com/watch?v=odtDpX5nA6k">Modern Death and Taxes vs UW Control Ep.2 Pt.3 (Jason "the Splicer" Simard)</a></li>
                <li><a href="https://www.youtube.com/watch?v=2mAL5EnEOKs">Modern Death and Taxes vs Hardened Scales Ep.2 Pt.4 (Jason "the Splicer" Simard)</a></li>
                <li><a href="https://www.youtube.com/watch?v=KRwhMMQ2soQ">Modern Death and Taxes vs Naya Zoo Ep.2 Pt.5 (Jason "the Splicer" Simard)</a></li>
                <li><a href="https://www.youtube.com/watch?v=z3CyriVyJGM">Death and Taxes vs Storm. Ep.3 Pt.1 Modern MTG July 2018 (Jason "the Splicer" Simard)</a></li>
                <li><a href="https://www.youtube.com/watch?v=aMEmk_ETkIw">Death and Taxes vs Jeskai Control Ep.3 Pt.2 Modern MTG July 2018 (Jason "the Splicer" Simard)</a></li>
                <li><a href="https://www.youtube.com/watch?v=epZy7OY786s">Death and Taxes vs Titan-Shift Ep.3 Pt.3 (Jason "the Splicer" Simard) Modern MTG August 2018</a></li>
                <li><a href="https://www.youtube.com/watch?v=VQl_R9obGfE">Death and Taxes vs Tron Ep.3 Pt.4 (Jason "the Splicer" Simard) Modern MTG August 2018</a></li>
                <li><a href="https://www.youtube.com/watch?v=gtLECI5uLAI">Death and Taxes vs Tron Ep.3 Pt.5 (Jason "the Splicer" Simard) Modern MTG August 2018</a></li>
                <li><a href="https://www.youtube.com/watch?v=KBvUOIyRANs">Death and Taxes vs Merfolk Ep.4 Pt.1 (Jason "the Splicer" Simard) Modern MTG Gameplay August 2018</a></li>
                <li><a href="https://www.youtube.com/watch?v=OLvOnYcjhAg">Death and Taxes vs Burn Ep.4 Pt.2 (Jason "the Splicer" Simard) Modern MTG Gameplay August 2018</a></li>
                <li><a href="https://www.youtube.com/watch?v=6Nk-R5E-MDA">Death and Taxes vs Infect Ep.4 Pt.3 (Jason “the Splicer Simard) Modern MTG Gameplay August 2018</a></li>
                <li><a href="https://www.youtube.com/watch?v=S9Z0VxJOvLs">Death and Taxes vs UW Control Ep.4 Pt.4 (Jason "the Splicer" Simard) Modern MTG Gameplay August 2018</a></li>
                <li><a href="https://www.youtube.com/watch?v=g-klSUTSKW8">Death and Taxes vs Pillow Fort Ep.4 Pt.5 (Jason "the Splicer" Simard) Modern MTG Gameplay 2018</a></li>
                <li><a href="https://www.youtube.com/watch?v=zuB93EJwPqk">Death and Taxes vs Jund Ep.5 Pt.1 (Jason "the Splicer" Simard) Modern MTG Gameplay August 2018</a></li>
                <li><a href="https://www.youtube.com/watch?v=Pe0i87xm9b8">Death and Taxes vs UW Control Ep.5 Pt.2 (Jason "the Splicer" Simard) Modern MTG Gameplay August 2018</a></li>
                <li><a href="https://www.youtube.com/watch?v=zD73Rfg4asQ">Death and Taxes vs Goblins Ep.5 Pt.3 (Jason "the Splicer" Simard) Modern MTG Gameplay August 2018</a></li>
                <li><a href="https://www.youtube.com/watch?v=TfW5ap1GYes">Death and Taxes vs Mardu Pyromancer Ep.5 Pt.4 (Jason "the Splicer" Simard) Modern MTG Gameplay 2018</a></li>
                <li><a href="https://www.youtube.com/watch?v=6Fw8T3b54so">Death and Taxes vs Tron Ep.5 Pt.5 (Jason "the Splicer" Simard) Modern MTG Gameplay August 2018</a></li>
                <li><a href="https://www.youtube.com/watch?v=BTxLkdXZbXA">Death and Taxes vs Bridgevine Ep.6 Pt.1 (Jason "the Splicer" Simard) Modern MTG Gameplay 2018</a></li>
                <li><a href="https://www.youtube.com/watch?v=4iGebcTxjPQ">Death and Taxes vs Burn Ep.6 Pt.2 (Jason "the Splicer" Simard) Modern MTG Gameplay September 2018</a></li>
                <li><a href="https://www.youtube.com/watch?v=DysYcp-IEF4">Death and Taxes vs Hardened Scales Affinity Ep.6 Pt.3 Modern MTG Gameplay ("The Splicer" Simard)</a></li>
                <li><a href="https://www.youtube.com/watch?v=mVZd7CCdPPw">Death and Taxes vs Bogles Ep.6 Pt.4 Modern MTG Gameplay September 2018 (Jason "the Splicer" Simard)</a></li>
                <li><a href="https://www.youtube.com/watch?v=rPgpsqfAKtU">Death and Taxes vs Soulflayer Ep.6 Pt.5 Modern MTG Gameplay 2018 (Jason "the Splicer" Simard)</a></li>
                <li><a href="https://www.youtube.com/watch?v=ZYSxC6XyM6c">Eldrazi and Taxes vs Bant Spirits Ep.7 Pt.1 Modern MTG Gameplay 2018 (Jason "the Splicer" Simard)</a></li>
                <li><a href="https://www.youtube.com/watch?v=ftMlnIBdy64">Eldrazi and Taxes vs Mardu Pyromancer Ep.7 Pt.2 Modern MTG Gameplay 2018 ("The Splicer" Simard)</a></li>
                <li><a href="https://www.youtube.com/watch?v=f_HRO_m-fAg">Eldrazi and Taxes vs Hollow One Ep.7 Pt.3 Modern MTG Gameplay 2018 (Jason "the Splicer" Simard)</a></li>
                <li><a href="https://www.youtube.com/watch?v=Ie49hKkSHcc">Eldrazi and Taxes vs Abzan Humans Ep.7 Pt.4 Modern MTG Gameplay September 2018 ("The Splicer")</a></li>
                <li><a href="https://www.youtube.com/watch?v=mvQZ6puDDAk">Eldrazi and Taxes vs Abzan Coco Eldrazi Ep.7 Pt.5 Modern MTG Gameplay September 2018 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=CEvKkdppE8w">Death and Taxes vs Humans Ep.8 Pt.1 Modern MTG Gameplay October 2018 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=WPl2bW_t_9c">Death and Taxes vs Dredge Ep.8 Pt.2 Modern MTG Gameplay October 2018 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=fxELmQ7dM5I">Death and Taxes vs UW Control Ep.8 Pt.3 Modern MTG Gameplay October 2018 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=vKPK01vpwTQ">Death and Taxes vs Affinity Ep.8 Pt.4 Modern MTG Gameplay October 2018 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=rr-woTFmdQs">Death and Taxes vs Ponza Ep.8 Pt.5 Modern MTG Gameplay October 2018 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=73RdgtDdN_g">Death and Taxes vs UW Control Ep.9 Pt.1 Modern MTG Gameplay October 2018 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=Hncscl5MUKY">Death and Taxes vs Dredge Ep.9 Pt.2 Modern MTG Gameplay October 2018 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=GUWK7GM1Fgc">Death and Taxes vs Tron Ep.9 Pt.3 Modern MTG Gameplay October 2018 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=Mbcx9NZU11g">Death and Taxes vs Polymorph Ep.9 Pt.4 Modern MTG Gameplay October 2018 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=bmna4nwIDUI">Death and Taxes vs Titan-Shift Ep.9 Pt.5 Modern MTG Gameplay October 2018 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=dCE6Qlfjy-Y">Eldrazi and Taxes vs Humans Ep.10 Pt.1 Modern MTG Gameplay November 2018 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=mQXkIXx1Jt4">Eldrazi and Taxes vs Affinity Ep.10 Pt.2 Modern MTG Gameplay November 2018 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=JOCrIO-LDgw">Eldrazi and Taxes vs Jund Ep.10 Pt.3 Modern MTG Gameplay November 2018 (Nikachu)</a></li>
                <li><a href="https://www.youtube.com/watch?v=FP3v5c0rIpE">Eldrazi and Taxes vs Hollow One Ep.10 Pt.4 Modern MTG Gameplay 2018 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=PwjsJRZeTD8">Eldrazi and Taxes vs Elves Ep.10 Pt.5 Modern MTG Gameplay November 2018 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=o0yrmGKBm2M">Eldrazi and Taxes vs Dredge Ep.11 Pt.1 Modern MTG Gameplay November 2018 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=Hy3wM8563F8">Eldrazi and Taxes vs Grixis Whir Ep.11 Pt.2 Modern MTG Gameplay November 2018 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=stkIkFmqBq4">Eldrazi and Taxes vs Dredge Ep.11 Pt.3 Modern MTG Gameplay November 2018 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=VD58zkn1URs">Eldrazi and Taxes vs Mono U Tron Ep.11 Pt.4 Modern MTG Gameplay November 2018 (Nikachu)</a></li>
                <li><a href="https://www.youtube.com/watch?v=G6w7mLNGfFQ">Eldrazi and Taxes vs Mardu Pyromancer Ep.11 Pt.5 Modern MTG Gameplay 2018</a></li>
                <li><a href="https://www.youtube.com/watch?v=ltYhodWMol8">Death and Taxes vs Dredge Ep.12 Pt.1 Modern MTG Gameplay December 2018 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=hHQ-kl1hPTI">Death and Taxes vs Arclight Phoenix Ep.12 Pt.2 Modern MTG Gameplay December 2018 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=3vZeKcN8YRk">Death and Taxes vs UR Arclight Phoenix Ep.12 Pt.3 Modern MTG Gameplay December 2018 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=OCB4FTpIv1g">Death and Taxes vs Hollow One Ep.12 Pt.4 Modern MTG Gameplay December 2018 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=W1NH2mYIqZs">Death and Taxes vs Mono Red Prison Ep.12 Pt.5 Modern MTG Gameplay December 2018 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=WTDVPbse36Y">Death and Taxes vs Moonless Ep.13 Pt.1 Modern MTG Gameplay December 2018 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=Lbi1ttd8FPM">Death and Taxes vs Elves Ep.13 Pt.2 Modern MTG Gameplay December 2018 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=UafSb4MMaBY">Death and Taxes vs Dredge Ep.13 Pt.3 Modern MTG Gameplay 2018</a></li>
                <li><a href="https://www.youtube.com/watch?v=qGOXM6h31Gk">Death and Taxes vs Bogles Ep.13 Pt.4 Modern MTG Gameplay December 2018 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=a8nQLhrd648">Death and taxes vs Grixis Death's Shadow Ep.13 Pt.5 Modern MTG Gameplay December 2018 (The Splicer)</a></li>
                <li><a href="https://www.youtube.com/watch?v=EmgawMQUF-I">Modern Death and Taxes deck tech and brief history from the MASTER (Jason “the Splicer” Simard)</a></li>
                <li><a href="https://www.youtube.com/watch?v=cHhKgkqm0wU">Death and Taxes makes TOP 8 in Modern Challenge. Deck Tech and Tournament Report!</a></li>
            </ul>
            <br>
            <h5>Pleasant Kenobi</h5>
            <ul>
                <li><a href="https://www.youtube.com/watch?v=rmcMDMt0nYo">Modern Death and Taxes - With Knight of Autumn - Deck Tech and Gameplay</a></li>
                <li><a href="https://www.youtube.com/watch?v=fHUj2oNMi2s">Abzan Death and Taxes Stream - Leonin Arbiter and Assassin's Trophy - VOD 22/10/18</a></li>
                <li><a href="https://www.youtube.com/watch?v=smqz-OT6VqY">GW Modern Death and Taxes vs Tron and Belcher - PK's Slow Plays</a></li>
                <li><a href="https://www.youtube.com/watch?v=_hxwkfJSAxY">Mining the Salt Mines - GW Death and Taxes - MTG Modern Gameplay</a></li>
                <li><a href="https://www.youtube.com/watch?v=cKFwHVS0B00">GW DEATH AND TAXES - "FLICK OF THE WISP" - MODERN MTG GAMEPLAY</a></li>
                <li><a href="https://www.youtube.com/watch?v=tvOAgmte8ds">MODERN DEATH AND TAXES STREAM - "SHALAI IS SHY" - June 11th VOD</a></li>
                <li><a href="https://www.youtube.com/watch?v=vTNypvvTNBg">CAT JESUS DOES IT AGAIN - Beats Storm - GP Santa Clara - MTG Modern</a></li>
                <li><a href=""></a></li>
            </ul>
            <br>
            <h5>Other MTGO Videos</h5>
            <ul>
                <li><a href="https://www.youtube.com/watch?v=jByb1ypP3QU">How to play Eldrazi and Taxes - Top 8 modern deck tech with lines of play breakdown</a></li>
                <li><a href="https://www.youtube.com/watch?v=NGxDTG-eFtI">RW Taxes - Modern - September 26th, 2018</a></li>
                <li><a href="https://www.youtube.com/watch?v=mNTDFCEpBsk">Modern Death and Taxes 5-0 Comp League</a></li>
                <li><a href="https://www.youtube.com/watch?v=vcBsQIG_1Wo">Knight of Autumn Hatebears | Mining Modern</a></li>
                <li><a href="https://www.youtube.com/watch?v=tNmRwiFOHgA">Death and Taxes vs Jeskai Contorl - New to Modern MTGO Gameplay 01</a></li>
                <li><a href="https://www.youtube.com/watch?v=12lHVG6_JmU">Death and Taxes vs Runaway Steam-Kin - New to Modern MTGO Gameplay 02</a></li>
                <li><a href="https://www.youtube.com/watch?v=J3eSb4pivG0">Death and Taxes vs Stompy - New to Modern MTGO Gameplay 03</a></li>
                <li><a href="https://www.youtube.com/watch?v=WKHJYSxsuuE">Friendly Friday - Modern - Death & Taxes</a></li>
                <li><a href="https://www.youtube.com/watch?v=uQSplKJ9n3s">Daily Digest: W/R Death and Taxes with Ross Merriam [Modern]</a></li>
                <li><a href="https://www.youtube.com/watch?v=DXVtMRV0GHM">[MTG] Modern White-Blue Death and Taxes | Match 1 VS Storm</a></li>
                <li><a href="https://www.youtube.com/watch?v=4oEj0EqDBH8">[MTG] Modern White-Blue Death and Taxes | Match 2 VS Mardu Pyromancer</a></li>
                <li><a href="https://www.youtube.com/watch?v=w0pZeUBGoD0">[MTG] Modern White-Blue Death and Taxes | Match 3 VS Bant Company</a></li>
                <li><a href="https://www.youtube.com/watch?v=Hox2xxMk2f8">RW Death and Taxes - Modern</a></li>
                <li><a href="https://www.youtube.com/watch?v=sHTBSWPbmGM">GW Death & Taxes - Modern</a></li>
                <li><a href="https://www.youtube.com/watch?v=9cVqcJbtjvk">Wr Hatebears - Modern - May 24th, 2018</a></li>
                <li><a href="https://www.youtube.com/watch?v=OJAtDT1meFU">[MODERN] RW Death & Taxes (Deck Tech + Matches)</a></li>
                <li><a href="https://www.youtube.com/watch?v=SJHA004wE7w">Modern Death & Taxes: A Catmix Tax List</a></li>
                <li><a href="https://www.youtube.com/watch?v=N2LtumxgMPc">Much Abrew: Mox and Taxes (Modern)</a></li>
                <li><a href="https://www.youtube.com/watch?v=GegnUXUwvLg">Thalia, Guardian of Thraben + Serum Visions = Profit; Wescoe's UW Taxes Deck from MOCS</a></li>
                <li><a href="https://www.youtube.com/watch?v=jZRYLMcWKxQ">Bolt and Taxes Decktech and Matches (Modern) - MTG - 3-0</a></li>
                <li><a href="https://www.youtube.com/watch?v=ciYlBncJESs">Daily Digest: W/U Spirit Taxes with Ross Merriam [Modern]</a></li>
                <li><a href="https://www.youtube.com/watch?v=da_uWaMEJkg">Modern Mono White Death and Taxes vs Mardu Pyromancer</a></li>
                <li><a href="https://www.youtube.com/watch?v=U8zmRe5gIkI">Modern Mono White Death and Taxes vs GR Eldrazi</a></li>
                <li><a href="https://www.youtube.com/watch?v=rq_0EpaMuMM">Modern Mono White Death and Taxes vs Jeskai Saheeli</a></li>
                <li><a href="https://www.youtube.com/watch?v=WxQt-Fza-e4">Modern Mono White Death and Taxes vs UW Control</a></li>
                <li><a href="https://www.youtube.com/watch?v=POuHKhyqcyk">Modern Mono White Death and Taxes vs Affinity</a></li>
                <li><a href="https://www.youtube.com/watch?v=0ABWEw0cKcY">Modern Death and Taxes vs Izzet Wizards</a></li>
            </ul>
            <br>
            <h5>Paper Videos</h5>
            <ul>
                <li><a href="https://www.youtube.com/watch?v=2g8mCdzwyFI">Magic the Gathering GP Toronto 2018 Round 8</a></li>
                <li><a href="https://www.youtube.com/watch?v=csJOalmWGQY">Modern FNM w/ Comm 5/4/18: Phil Jones (Death & Taxes) vs. Andrew Tefft (Esper Goryo's)</a></li>
                <li><a href="https://www.youtube.com/watch?v=GuygDlL-9j0">5/1/18 - Anderson VS Stevens: G/W Hexproof VS Death and Taxes [Modern]</a></li>
                <li><a href="https://www.youtube.com/watch?v=0fFIhdVQa0k">Esper Control Vs Death and Taxes - Gauntlet Friday Modern Magic January 2018 R2</a></li>
                <li><a href="https://www.youtube.com/watch?v=2GfK9qwThJE">Death and Taxes Vs 8-Rack 25.11.2018 (Round 1)</a></li>
                <li><a href="https://www.youtube.com/watch?v=47m9AOpn2pc">MtG Modern! Mono White Death & Taxes vs Titan Shift</a></li>
            </ul>
            <br>
            <h5>Decktechs</h5>
            <ul>
                <li><a href="https://www.youtube.com/watch?v=kTRmg7AKVzw">Modern Death and Taxes - Upgrade from budget into competitive: Budget to Tier 1</a></li>
                <li><a href="https://www.youtube.com/watch?v=1dwiXJ4Ew0E">[MTG] Modern White-Blue Death and Taxes | Deck Tech</a></li>
                <li><a href="https://www.youtube.com/watch?v=6hxSZ7xPzpM">Death and Staxes - Modern Deck</a></li>
            </ul>
            <h4>Tournament Reports</h4>
            <ul>
                <li><a href="https://www.reddit.com/r/spikes/comments/86o301/modern_tournament_report_112th_at_gp_phoenix_with/">E&T report</a></li>
                <li><a href="https://www.reddit.com/r/DeathAndTaxesMTG/comments/8283ar/scg_modern_classic_w_rw_taxes_tournament_report_63/">RW Taxes report</a></li>
                <li><a href="https://www.reddit.com/r/spikes/comments/7rc7m3/modern_tournament_report_belated_eldrazi_and/">E&T report</a></li>
            </ul>
            <br>
            <br>
            <hr>
            <br>
            <h3>2017</h3>
            <br>
            <h4>Videos</h4>
            <br>
            <h4>Tournament Reports</h4>
            <ul>
                <li><a href="https://www.reddit.com/r/spikes/comments/6peebi/modern_1st_in_pptq_with_mono_w_death_and_taxes/">Mono-W report</a></li>
            </ul>


            <br>
            <hr>
            <br>
            <h3>Continuosly Updated Content</h3>
            <br>
            <h4>Primers</h4>
            <br>
            <ul>
                <li><a href="https://www.mtgsalvation.com/forums/the-game/modern/established-modern/aggro-tempo/724274-death-and-taxes">Mono-white D&T- MTGSalvation</a></li>
                <li><a href="https://www.mtgsalvation.com/forums/the-game/modern/established-modern/aggro-tempo/220191-gw-hatebears">GW Hatebears- MTGSalvation</a></li>
            </ul>


            <br>
            <br>
            <hr>
            <br>
            <h2>Legacy*</h2>
            <br>
            <h4>Websites:</h4>
            <ul class="cardList"> 
                <li><a href="http://www.mtgthesource.com/forums/showthread.php?6775-DTB-Death-and-Taxes">MTG The Source</a></li>
                <li><a href="http://www.thrabenuniversity.com/">Thraben University</a></li>
            </ul>
            <br>
            <h4>Videos:</h4>
            <ul class="cardList">
                <li><a href="https://www.youtube.com/watch?v=wGQN8WHwYHI&t=4480s">Mengucci- Mono-W</a></li>
                <li><a href="https://www.youtube.com/watch?v=T3A8FR8NFTQ">Pleasant Kenobi- Mono-W</a></li>
            </ul>
            <p>*= outdated, will be updated soon</p>


            <br>
            <br>
            
            
            
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
