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
        <title>Show Equations</title>
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
                <h1>Show Equations</h1>
            </div>      
            <br>
            <br>
            <div class="featsubhead">
                <h2>About</h2>
            </div>
            <br>
            <div class="info">
                <p>The Show Equations feature in Portable Physicist provides an easy location for users to view the equations used in the application. For each concept, at least one equation is available. Whether you need a refresher on the equations or are studying for an exam, the Show Equation feature in Portable Physicist has value to many learners of Physics.</p>
            </div>
            <br>
            <div class="featsubhead">
                <h2>Current Equations</h2>
            </div>
            <br>
            <!--INCLUDE SCREENSHOTS WALKING THROW IT-->
            <div class="row">
                <div class="col-6 info">
                    <h3>Kinematics Equation #1</h3> 
                </div>

                <div class="col-6">
                    <img src="/portable-physicist/screenshots/showequations/sample-equation_kinematics_1.gif" class="sample-screenshot" alt="kinematics equation 1">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6 info">
                    <h3>Kinematics Equation #2</h3> 
                </div>

                <div class="col-6">
                    <img src="/portable-physicist/screenshots/showequations/sample-equation_kinematics_2.gif" class="sample-screenshot" alt="kinematics equation 2">
                </div>
            </div>
            <br><div class="row">
                <div class="col-6 info">
                    <h3>Kinematics Equation #3</h3> 
                </div>

                <div class="col-6">
                    <img src="/portable-physicist/screenshots/showequations/sample-equation_kinematics_3.gif" class="sample-screenshot" alt="kinematics equation 3">
                    <!--picker-->
                </div>
            </div>
            <br><div class="row">
                <div class="col-6 info">
                    <h3>Kinematics Equation #4</h3> 
                </div>

                <div class="col-6">
                    <img src="/portable-physicist/screenshots/showequations/sample-equation_kinematics_4.gif" class="sample-screenshot" alt="kinematics equation 4">
                    <!--picker-->
                </div>
            </div>
            <br><div class="row">
                <div class="col-6 info">
                    <h3>Kinematics Equation #5</h3> 
                </div>

                <div class="col-6">
                    <img src="/portable-physicist/screenshots/showequations/sample-equation_kinematics_5.gif" class="sample-screenshot" alt="kinematics equation 5">
                    <!--picker-->
                </div>
            </div>
            <br><div class="row">
                <div class="col-6 info">
                    <h3>Forces Equation</h3> 
                </div>

                <div class="col-6">
                    <img src="/portable-physicist/screenshots/showequations/sample-equation_forces.gif" class="sample-screenshot" alt="force equation">
                    <!--picker-->
                </div>
            </div>
            <br><div class="row">
                <div class="col-6 info">
                    <h3>Kinetic Energy Equation</h3> 
                </div>

                <div class="col-6">
                    <img src="/portable-physicist/screenshots/showequations/sample-equation_kinetic_energy.gif" class="sample-screenshot" alt="kinetic energy equation">
                    <!--picker-->
                </div>
            </div>
            <br><div class="row">
                <div class="col-6 info">
                    <h3>Gravitational Force Equation</h3> 
                </div>

                <div class="col-6">
                    <img src="/portable-physicist/screenshots/showequations/sample-equation_gravitational_force.gif" class="sample-screenshot" alt="gravitational force equation">
                    <!--picker-->
                </div>
            </div>
            <br>
        </div>
        
        <?php
            include("../scripts/footer.php");
        ?>
    </body>
</html>