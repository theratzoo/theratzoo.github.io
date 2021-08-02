<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <title>Physics Concepts</title>
        <link rel="stylesheet" type="text/css" href="/portable-physicist/style.css">
        <link rel="icon" href="/portable-physicist/applogo.jpg">
        <script>
            $(document).ready(function() {

                var docHeight = $(window).height();
                var footerHeight = $('#footer').height();
                var footerTop = $('#footer').position().top + footerHeight;

                if (footerTop < docHeight)
                    $('#footer').css('margin-top', 10+ (docHeight - footerTop) + 'px');
            });
        </script>
    </head>
    <body id="bg">
        <?php
            include("../scripts/navbar.php");
        ?>
        <div class="container">
            <div class="jumbotron">
                <h1>Physics Concepts</h1>
            </div>      
            <br>
            <br>
            <div class="info">
                <p>Within Portable Physicist are several physics concepts that are supported within the app. For each of these concepts contains a calculator, unique practice problems, equations for them, and more.</p>
            </div>
            <br>
            <div class="subhead">
                <h2>List of Current Concepts</h2>
            </div>
            <br>
            <div class="featsubhead">
                <h3>Kinematics</h3>
            </div>
            <br>
            <div class="featsubhead">
                <h3>Forces</h3>
            </div>
            <br>
            <div class="featsubhead">
                <h3>Kinetic Energy</h3>
            </div>
            <br>
            <div class="featsubhead">
                <h3>Gravitational Force</h3>
            </div>
            <br>
            <hr>
            <br>
            <div class="info">
                <p>If there is a physics concept you would like to see on Portable Physicist, feel free to click <a href="feedback">here</a> to learn how to submit the suggestion.</p>
            </div>
        </div>
        
        <?php
            include("../scripts/footer.php");
        ?>
    </body>
</html>