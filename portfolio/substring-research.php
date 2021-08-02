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
        <title>Substring Research Project</title>
        <link rel="stylesheet" type="text/css" href="/ldstyle.css">
        <link rel="icon" href="/img/ld.png">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    </head>
    <body id="home">
        <?php
        include("../ldnavbar.php");
        ?>
        <!--navbar:
            about
            projects
            resume
            socials
        -->
        <div id="me">
                Substring Research Project
            </div>  
        <div class="container">
            <br>
            <hr class="mainhr"> 
            <br>
            <p>This project was the final assignment for the class Algorithms that I completed at WPI in the last term of my freshman year. This project involved a team of five people (myself, Garret, Pooja, Isabel, Adi, and I) researching the KMP substring search algorithm. The assignment entailed us creating a report on the algorithm and performing empirical tests on it in Java, recording the results and constructing graphs to find trends.</p>
            <br>
            <hr class="subhr">
            <br>
            <h3>What I did</h3>
            <p>I wrote the testing suites we used on the KMP algorithm. These suites tested three parts of the algorithm- different word lengths, different pattern lengths, and different alphabets. The KMP algorithm was tested against the brute force substring search algorithm, as can be seen in the below source code.</p>
            <br>
            <br>
            <h3>Source Code</h3>
            <p>The first code sample is the test suites that I wrote and ran on the two substring search algorithms, which were implemented by the following two samples. The KMP Algorithm file was taken from the textbook, while the Brute Force file was created by my teammates (Garret, Pooja, Isabel, and Adi).</p>
            <div class="row">
                <div class="col-sm-4">
                    <h5>Test Suites</h5>
                    <object data="/code/test-suites.pdf" type="application/pdf" class="pdfs"> 
                      <p>It appears you don't have a PDF plugin for this browser.
                       You can <a href="/code/test-suites.pdf">click here to
                      download the PDF file.</a></p>  
                    </object>
                </div>
                <div class="col-sm-4">
                    <h5>KMP Algorithm</h5>
                    <object data="/code/kmp-algorithm.pdf" type="application/pdf" class="pdfs"> 
                      <p>It appears you don't have a PDF plugin for this browser.
                       You can <a href="/code/kmp-algorithm.pdf">click here to
                      download the PDF file.</a></p>  
                    </object>
                </div>
                <div class="col-sm-4">
                    <h5>Brute Force</h5>
                    <object data="/code/brute-force.pdf" type="application/pdf" class="pdfs"> 
                      <p>It appears you don't have a PDF plugin for this browser.
                       You can <a href="/code/brute-force.pdf">click here to
                      download the PDF file.</a></p>  
                    </object>
                </div>
            </div>
            <br>
            <br>
            <h3>Report</h3>
            <p>Below is the research paper my group and I wrote and turned in.</p>
            <br>
            <object data="/img/Substring-Search-Report.pdf" type="application/pdf" class="pdfs"> 
              <p>It appears you don't have a PDF plugin for this browser.
               You can <a href="/img/Substring-Search-Report.pdf">click here to
              download the PDF file.</a></p>  
            </object>
            <br>
            <!--include: 
                more info on project- maybe description, video demos, etc
                our actual code
                our actual project
            -->
        </div>
        <footer>
            <h6>This website is, in fact, created by Luke Deratzou. Any questions or issues, please contact the owner.</h6>
        </footer>
        <!--insert professional footer here-->
        

    </body>
</html>