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
        <title>Bug Report</title>
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
        <script>
            if(window.location.hash) {
              alert("Submission was successful");
            } else {
              // Fragment doesn't exist
            }
        </script>
    </head>
    <body id="bg">
        <?php
            include("scripts/navbar.php");
        ?>
        <div class="container">
            <div class="jumbotron">
                <h1>Reporting a bug</h1>
            </div>      
            <br>
            <br>
            <div class="subhead">
                <h2>How to Report a Bug</h2>
            </div>
            <div class="info">
                <p>The most important thing to do when reporting a bug is be as detailed as possible. The key details to include are the bug itself and how you got to the bug. Including your current settings are also helpful if they may have produced the bug. Screenshots of the bug itself are also helpful in us solving it in a timely matter.</p>
            </div>
            <br>
            <div class="subhead">
                <h2>Bug Report Form</h2>
            </div>
            <br>
            <div class="row">
                <div class="col-2">

                </div>
                <div class="col-8">
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        <textarea cols="200" rows="10" name="bugreport" class="text" placeholder="Enter bug here..."></textarea>
                        <br>
                        Select image to upload:
                        <input type="file" name="fileToUpload" id="fileToUpload">
                        <br>
                        <input type="submit" value="Submit Report" name="submit">
                    </form>
                </div>
                
            </div>

        </div>
        
        <?php
            include("scripts/footer.php");
        ?>
    </body>
</html>