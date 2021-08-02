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
        <title>Quiz</title>
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
                <h1>Quiz</h1>
            </div>      
            <br>
            <br>
            <div class="subhead">
                <h2>About</h2>
            </div>
            <br>
            <div class="info">
                <p>The Quiz feature in Portable Physicist is designed for a more formal way to practice Physics concepts. This feature is an excellent tool for Physics professors and teachers to distribute to their students for in-class practice, homework, or extra credit. In addition, at the end of a Quiz, an in-depth overview is available to go over the correct and incorrect answers, helping fix mistakes.</p>
            </div>
            <!--Discuss:
                Setting up the Quiz- what you need to choose and how they affect quiz and such

                The quiz itself and how it works

                Quiz overview: what it shows and how to take advantage of it

            -->
            <br>
            <div class="subhead">
                <h2>Pre Quiz- Setting it Up</h2>
            </div>
            <br>
            <div class="info">
                <p>Before starting a Quiz, the customizations must be selected. Unlike Practice Problems, you cannot change these settings from problem-to-problem. Below are the different settings for Quizes.</p>
            </div>
            <br>
            <div class="row featsubhead">
                <div class="col-6">
                    <h3>Number of Problems</h3>
                    <p>The first characteristic that must be set up is the number of problems for a given Quiz session. Simply put, this determines the number of problems the user will do before their Quiz ends. Since Quizes cannot be accessed when the app restarts (as of now), it is best to pick a number that you can reasonably finish in the time you have.</p>
                </div>
                <div class="col-6">
                    <img src="/portable-physicist/screenshots/quiz/sample-setup_field.png" class="sample-screenshot" alt="setup fields for quiz">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6 featsubhead">
                    <h3>Type of Question</h3>
                    <p>The second customizable trait that must be configured before beginning a Quiz is choosing the type of Question. This selection determines the format of the question that will appear in the Quiz problems. Presently, either Multiple Choice or Free Response Questions can be selected. To the right shows the differences between Multiple Choice and Free Response Questions. As is with Practice Problems, only the way to answer the question is effected by this configuration.</p>
                </div>
                <div class="col-3">
                    <img src="/portable-physicist/screenshots/quiz/sample-quiz_mc.png" class="sample-screenshot" alt="multiple choice">
                </div>
                <div class="col-3">
                    <img src="/portable-physicist/screenshots/quiz/sample-quiz_frq.png" class="sample-screenshot" alt="free response">
                </div>
            </div>
            <br>
            <div class="row featsubhead">
                <div class="col-6">
                    <h3>Type of Units Shown</h3>
                    <p>The third characteristic to pick for a new Quiz is selecting the type of units. This choice determines which type of units will appear in the prompts of Quizes. The current unit types available are shown to the right. Tip: the easiest units are the SI (base), as no conversions are necessary.</p>
                </div>
                <div class="col-6">
                    <ul>
                        <li>SI (base)</li>
                        <li>Metric</li>
                        <li>Customary</li>
                        <li>All Units</li>
                    </ul>
                </div>
            </div>
            <br>
            <div class="row featsubhead">
                <div class="col-6">
                    <h3>Type of Physics Problem</h3>
                    <p>The fourth trait necessary to configure for a Quiz is picking the type of Physics Problem. This selection determines the Physics concept that will appear in the Quiz. The current list of Physics problem types to pick from are shown to the right.</p>
                </div>
                <div class="col-6">
                    <ul>
                        <li>Kinematics</li>
                        <li>Forces</li>
                        <li>Kinetic Energy</li>
                        <li>Gravitational Force</li>
                    </ul>
                </div>
            </div>
            <br>
            <div class="row featsubhead">
                <div class="col-6">
                    <h3>Enable Units for Answer</h3>
                    <p>The final configuration found in the Pre Quiz setup is deciding whether or not to have units to select for the answer. This feature is only available for Free Response questions. If enabled, a unit select menu button will apppear to pick the correct units for the answer. To the right show the unit switch's location (only visible when Free Response questions are the chosen question type) and the unit select menu button, respectively.</p>
                </div>
                <div class="col-6">
                    <img src="/portable-physicist/screenshots/quiz/sample-setup_enable_unit.png" class="sample-screenshot" alt="settings page"> <!--settings page w/ it-->
                </div>
            </div>
            <br>
            <div class="info">
                <h4>Tip</h4>
                <p>If you need help in understanding what each of these mean in the app, tap on the question mark at the top right corner of Quiz Setup page.</p>
            </div>
            <!--can do it as one col so images can be fit side-by-side... idk yet-->
            
            <br>
            <hr>
            <br>
            <div class="subhead">
                <h2>The Quiz</h2>
            </div>
            <br>
            <div class="row featsubhead">
                <div class="col-6">
                    <h3>Answering a Question</h3>
                    <p>When answering a Quiz question, make sure to take your time before submiting it. Once you provide an answer, the answer is either marked wrong or correct. Unlike Practice Problems, you only get one try for each Quiz question. Once you answer, the prompt will show whether you are correct or wrong. If you got it wrong, it will show the correct answer. In addition, your score will be updated at the top of the Quiz each time you answer a question. If you wish to come back to the problem in the future, you can tap the save button to access it in the Show Work feature after finishing your Quiz.</p>
                </div>
                <div class="col-6">
                    <h3>Navigation</h3>
                    <p>After answering a problem, the continue arrow at the top right of the screen will be enabled. You will be able to proceed regardless of the correctness of your answer. Before proceeding, however, you must provide an answer to the quiz. For almost every test you will take, guessing is not penalized, hence why Portable Physicist's Quiz does not let you skip questions.</p>
                    <br>
                    <p>Tapping the exit button will bring the quiz to a premature end. Once exited, you cannot return to that quiz session. Don't worry if you accidentally hit it- a warning will appear before the exit is official.</p>
                </div>
            </div>
            <br>
            <div class="subhead">
                <h2>Post Quiz- Overview</h2>
            </div>
            <div class="info">
                <p>After finishing the last problem of a Quiz, you will be broguht to the Quiz Overview screen. Here, each problem can be reviewed to help catch mistakes.</p>
            </div>
            <br>
            <div class="row featsubhead">
                <div class="col-6">
                    <h3>Basic Information</h3>
                    <p>After selecting a problem, the fundamental information will be provided. If you got the question correct, it will simply show your answer. If you got it incorrect, both your answer and the correct answer will appear.</p>
                </div>
                <div class="col-6">
                    <h3>In Depth Assistance</h3>
                    <p>In addition, each question can be looked at in the Show Work feature. Simply click on the Show Work button after selecting a problem to see its step-by-step work. After you are done reviewing it, you can return to the Quiz Overview page to look at another problem.</p>
                </div>
            </div>
            <br>
            <div class="info">
                <p>Similar to the Quiz, once you tap the exit button, the Quiz Overview will not be accessible. Make sure you understand your mistakes before leaving the page!</p>
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