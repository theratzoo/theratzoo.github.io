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
        <title>Calculators</title>
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
            function start() {
                var logo = document.getElementById('child');
                var title = document.getElementById('parent');
                logo.style.height = title.offsetHeight+'px';
            }
        </script>
    </head>
    <body id="bg" onload="start()">
        <?php
            include("../scripts/navbar.php");
        ?>
        <div class="container">
            <div class="jumbotron">
                <h1>Calculators</h1>
            </div>      
            <br>
            <br>
            <div class="subhead">
                <h2>About</h2>
            </div>
            <br>
            <div class="info">
                <p>Calculators in Portable Physicist are designed to save time for Physics students. Simply enter values and an answer is provided- no equation sheets or physical calculators are necessary. In addition, Portable Physicist's Calculators help students who want a medium to check their own result without consuming time. Finally, students who are unsure of what equations go with which concepts will find value in Portable Physicist's calculators.</p>
            </div>
            <br>
            <div class="subhead">
                <h2>Getting Started</h2>
            </div>
            <br>
            <div class="row info">
                <div class="col-6">
                    <h3>1: Type in the Values...</h3> <!--img of text field-->
                </div>
                <div class="col-2">

                </div>
                <div class="col-3">
                    <img src="/portable-physicist/screenshots/calculators/sample-calculator_values.png" class="sample-screenshot" alt="sample screenshot">
                </div>
                
            </div>
            <div class="row info">
                <div class="col-6">
                    <h3>...Until zero more are required</h3> <!--img of ans label-->

                </div>
                <div class="col-2">

                </div>
                <div class="col-3">
                    <img src="/portable-physicist/screenshots/calculators/sample-calculator_zero_required.png" class="sample-screenshot" alt="another sample screenshot">
                </div>
                
            </div>
            <div class="row info">
                <div class="col-6">
                    <h3>2: Select units for the values</h3> <!--unit btns-->
                </div>
                <div class="col-3">
                    <img src="/portable-physicist/screenshots/calculators/sample-calculator_unit_selection.png" class="sample-screenshot" id="parent" alt="screenshot showing unit selection">
                </div>
                <div class="col-2">
                    <img src="/portable-physicist/screenshots/calculators/sample-calculator_units.png" class="sample-screenshot" id="child" alt="screenshot showing units">
                </div>
            </div>
            <div class="row info">
                <div class="col-6">
                    <h3>3: Press "Calculate"</h3>
                </div>
                <div class="col-2">
                    <img src="/portable-physicist/screenshots/calculators/sample-calculator_calculate.png" class="sample-screenshot" alt="screenshot showing calculate button">
                </div>
                <div class="col-3">
                    <img src="/portable-physicist/screenshots/calculators/sample-calculator_answer.png" class="sample-screenshot" alt="screenshot showing answer button">
                </div>
                
            </div>
            <br>
            <br>
            <div class="subhead">
                <h2>Current Calculators</h2>
            </div>
            <div class="row">
                <div class="col-6 featsubhead">
                    <h3>Kinematics</h3>
                </div>
                <br>
                <div class="col-6 featsubhead">
                    <h3>Forces</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-6 featsubhead">
                    <h3>Kinetic Energy</h3>
                </div>
                <br>
                <div class="col-6 featsubhead">
                    <h3>Gravitational Force</h3>
                </div>
            </div>
            <br>
            <br>
            <div class="subhead">
                <h2>Enhance your Experience</h2>
            </div>
            <br>
            <div class="row">
                <div class="col-6 featsubhead">
                    <h3>Format of Answer</h3>
                    <br>
                    <p>With any Calculator, you can customize the way the answer to the calculation appears. Through settings, you can decide whether you want the answer to always be in Scientific Notation or not, along with how to round the answer. Rounding can be based on either the number of decimal places you want the answer to have, or the number of significant figures you desire. If you wish to have the answer in non-SI units, than bring the number to the Unit Converter to get a value with your desired units.</p>
                </div>
                <div class="col-6 featsubhead">
                    <h3>Save Problem</h3>
                    <br>
                    <p>To the left of the Calculate button lies a Save button. This feature stores the calculation for later viewage through the Show Work feature. After tapping the button, you are prompted to give a title to the calculation. Afterwards, you can view the saved caclulation at anytime at the Show Work feature, which is accessible by tapping the More button and then finding the Show Work button. To learn more about the Show Work feature, visit its page <a href="showwork">here.</a>
                    <!--mention how u can see it later, and its step-by-step guide in show work (but click on show work to learn more)-->
                    <!--can include images for these and others above... where theres an image below the header and below image there is the text describing it-->
                </div>
            </div>
            <!--About-->

            <!--How to use them-->
            <!--set by step instructions in cool format-->

            <!--Current calculators-->

            <!--Customizable Aspects (settings, save, etc.)-->
        </div>
        
        <?php
            include("../scripts/footer.php");
        ?>
    </body>
</html>