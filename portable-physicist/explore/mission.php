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
        <title>Mission</title>
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
                <h1>Mission</h1>
            </div>      
            <br>
            <br>
            <div class="featsubhead">
                <p>From its origins, Portable Physicist is simply an app created to help others. Whether you are a novice Physics student, an aspiring Physics major, or a current professor, Portable Physicist is here to ease your Physics career.</p>
            </div>
            <br>
            <div class="subhead" id="origin">
                <h2>Origins</h2>
            </div>
            <br>
            <div class="info">
                <p>The concept of Portable Physicist began after I noticed a need. One of my peers was struggling with the Kinematics concept, unsure of how to combine the given quantities to produce the answer. With my passion in coding and desire in helping him out, I began developing this app as a solution to his problem. At first, Portable Physicist focused soley on Kinematics. After I showed the initial version to other Physics students, however, a new need was apparent. An overarching Physics app was desired by the enrolled students at my high school, so I began adding their requested features. After over a year of coding and peer feedback, Portable Physicist was finished.</p>
            </div>
            <br>
            <div class="subhead">
                <h2>Core Values</h2>
            </div>
            <br>
            <div class="row">
                <div class="col-6 info">
                    <h3>Acceptance</h3>
                    <p>Portable Physicist stresses the importance of inclusion and diversity. Portable Physicist urges everyone, regardless of background, identity, and knowledge, to join together in the accumulation of knowledge and collaboration. Portable Physicist is not designed only for one level of students. Whether you are a struggling student, a new Physics learner, or a science intellect, Portable Physicist is accepting of your level. In addition, teachers and professors are encouraged to utilize Portable Physicist in their classrooms to supplement their lessons.</p> 
                </div>
                <br>
                <div class="col-6 info">
                    <h3>Assistance</h3>
                    <p>As stated in the mission, Portable Physicist's primary focus is to help others with their Physics aspirations. Each feature in the app is designed to help someone out.</p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6 info">
                    <h3>Collaboration</h3>
                    <p>When learning, it is important to collaborate with your peers. Getting help from a peer or instructor is very valuable. Portable Physicist encourages students to learn by working together. As the app was founded with collaboration, garnering these skills is important not only for future classes but for tackling the issues of the world.</p>
                </div>
                <br>
                <div class="col-6 info">
                    <h3>Honor</h3>
                    <p>Finally, Portable Physicist recognizes the importance of honor. Cheating is never acceptable. At my high school, the importance of honor is heavily stressed. I hope to continue the message of honor through Portable Physicist. Remember: seeking out help is the best step to avoid any temptations.</p>
                </div>
            </div>
            <br>
            <div class="subhead">
                <h2>The Future</h2>
            </div>
            <br>
            <div class="info">
                <p>While the app is now released, the journey has not concluded. Portable Physicist will continue implementing and improving features to help students and teachers. If you wish to take part in deciding new features, <a href="feedback">visit here.</a></p>
            </div>
            <br>
            <div class="info">
                <h3>In Development:</h3>
                <ul>
                    <li>Simulators</li>
                    <li>New concepts</li>
                    <li>More advanced quiz</li>
                    <li>Continuous bug fixing and other improvements</li>
                </ul>
            </div>
        </div>
        
        <?php
            include("../scripts/footer.php");
        ?>
    </body>
</html>