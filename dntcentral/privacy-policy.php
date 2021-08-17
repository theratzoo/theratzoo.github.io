<?php
    include("scripts/searchscript.php"); //actually works
    
?>
<?php
    $filename = 'privacy-policy.php';
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

    

        <title>Privacy Policy</title>
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
                <h1>Privacy Policy</h1>
              </div>
              <br>
              <br>
              
            
              <br>
              <h2> Privacy Policy for dntcentral.com </h2> 
              <p> If you require any more information or have any questions about our privacy policy, please feel free to contact us by email at theratzoo@dntcentral.com .</p> 
              <p> At dntcentral.com, the privacy of our visitors is of extreme importance to us. This privacy policy document outlines the types of personal information is received and collected by dntcentral.com and how it is used. </p> 
              <p> <b>Log Files</b><br> Like many other Web sites, dntcentral.com makes use of log files. The information inside the log files includes internet protocol ( IP ) addresses, type of browser, Internet Service Provider ( ISP ), date/time stamp, referring/exit pages, and number of clicks to analyze trends, administer the site, track users movement around the site, and gather demographic information. IP addresses, and other such information are not linked to any information that is personally identifiable. </p> 
              <p> <b>Cookies and Web Beacons</b><br> dntcentral.com does use cookies to store information about visitors preferences, record user-specific information on which pages the user access or visit, customize Web page content based on visitors browser type or other information that the visitor sends via their browser. </p> 
              <b>DoubleClick DART Cookie</b><br> 
              <p> 
              .:: Google, as a third party vendor, uses cookies to serve ads on dntcentral.com.<br> 
              .:: Google's use of the DART cookie enables it to serve ads to your users based on their visit to dntcentral.com and other sites on the Internet. <br> 
              .:: Users may opt out of the use of the DART cookie by visiting the Google ad and content network privacy policy at the following URL - <a href="http://www.google.com/privacy_ads.html">http://www.google.com/privacy_ads.html</a> </p> 
              <p> Some of our advertising partners may use cookies and web beacons on our site. Our advertising partners include <br> Google Adsense
              <br>  </p> 
              <p> These third-party ad servers or ad networks use technology to the advertisements and links that appear on dntcentral.com send directly to your browsers. They automatically receive your IP address when this occurs. Other technologies ( such as cookies, JavaScript, or Web Beacons ) may also be used by the third-party ad networks to measure the effectiveness of their advertisements and / or to personalize the advertising content that you see. </p> 
              <p> dntcentral.com has no access to or control over these cookies that are used by third-party advertisers. </p> 
              <p> You should consult the respective privacy policies of these third-party ad servers for more detailed information on their practices as well as for instructions about how to opt-out of certain practices. dntcentral.com's privacy policy does not apply to, and we cannot control the activities of, such other advertisers or web sites. </p> 
              <p> If you wish to disable cookies, you may do so through your individual browser options. More detailed information about cookie management with specific web browsers can be found at the browsers' respective websites. </p>
              <br>
              <p><b>Cookies (non-advertisment)</b></p>
              <p>Death and Taxes Central uses cookies to enhance your experience on the website. These cookies are souly meant for services such as the Mulligan Game. Death and Taxes Central does not take any personal or private data from visitors with cookies.</p>
              <br>
              <p><b>Newsletter</b></p>
              <p>Individuals' email addresses are asked for and saved if they wish to use our newletter service. Their email addresses are only used to send emails regarding updates and other information about Death and Taxes Central. If you wish to opt out of receiving these emails, a link is provided at the bottom of each email. The newsletter emails are not intended to be spam mail. They are intended to provide users with an immediate update on new articles, guides, and content published to Death and Taxes central on a weekly to monthly basis.</p>
              <br>
              <p><b>Comments</b></p>
              <p>When commenting on a monthly Death and Choices, you are using Facebook's commenting feature. Through that, some of your data may be collected including your full name, email address, location, and screen name. Any information collected will only be used and viewed through Facebook and its affiliates. To learn more, visit <a href="https://www.facebook.com/policy.php">Facebook's Privacy Policy here.</a></p>
            
            <div class="extra-space">

            </div>
            </div>
            
            
            
            <?php
                include("scripts/footer.php");
            ?>
            <script>var jStr = <?php echo json_encode($lastModDate); ?>;</script>
            <script src="/loadpublishinfo.js" type="text/javascript"></script>
    </body>
</html>
