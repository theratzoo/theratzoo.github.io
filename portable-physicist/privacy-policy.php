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
        <title>Privacy Policy</title>
        <link rel="stylesheet" type="text/css" href="/portable-physicist/style.css">
        <link rel="icon" href="applogo.jpg">
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
            include("scripts/navbar.php");
        ?>
        <div class="container">
            <div class="jumbotron">
                <h1>Privacy Policy</h1>
            </div>      
            <p>Portable Physicist only collects and saves data that users enter into the application. All of this saved data is not distributed to other sources. Information that comes from downloading the app or purchasing services is also data that is kept confidential to the user. Portable Physicist does not reveal any of this information to other people. The stored data is souly meant to enhance user experiences in the app. Without saving data, the app would lose functionality and ease of use, important traits of Portable Physicist. Keeping your information private will always be upheld. If anything were to change regarding our use of your data, your consent will be requested and required before anything new is implemented.</p>
            <h5>Effective: February 10, 2019</h5>
        </div>
        
        <?php
            include("scripts/footer.php");
        ?>
    </body>
</html>