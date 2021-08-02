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
        <title>Drag-and-Drop Equation Editor</title>
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
                Drag-and-Drop Equation Editor
            </div>  
        <div class="container">
            <br>
            <hr class="mainhr"> 
            <br>
            <p>This project was the final assignment for the class Accelerated Object-Oriented Design Concepts that I completed at WPI at the end of 2019. This project was divided into two parts: designing the backend code and making the frontend communicate with the backend. The assignment was very difficult- few students were able to finish it, with many having issues that resulting in the professor changing the grading. However, my partner (Jason) and I were able to finish the difficult project.</p>
            <br>
            <hr class="subhr">
            <br>
            <h3>Part 1</h3>
            <p>This part was very simple- so much so that I completed it by myself. It involved creating trees to represent the equations. There was also inheritance, as certain elements of the equations were represented by different subclasses. Finally, we had to produce a deep copy of the tree, important for the second, significantly more difficult part of the assignment.</p>
            <br>
            <hr class="subhr">
            <br>
            <h3>Part 2</h3>
            <p>This part was by far the most difficult assignment of the class- we had to create the drag-and-drop editor using JavaFX. Essentially, when the program ran, the user would be able to select a part of the equation then smoothly drag it to a different place. While it sounds simple, many specific details caused trouble to my peers and I. For example, the tree had to be updated to reflect the change in the order of the equation. Also, the dragged part could only land in certain places. Finally, just making the UI flow smoothly was a hard task. To top it all off, the whole equation had to swap whenever a user dragged an equation to a potential spot to reflect it being there, further complicating the already-difficult assignment.</p>
            <br>
            <p>I knew going into the project that it would not be an easy one, so I decided to work with a partner. Using git, we began working on the task early on. Generating the equation on the screen was simple, and selecting an equation also went well, but the actual dragging was difficult. Also, swapping the parts of the equation was <i>very</i> difficult, to the point that we were both very clueless after spending nearly a whole day working on the project. While we were feeling defeated, I kept thinking of the project, until I was able to think of a way to tackle the problem out of nowhere in the middle of a lecture. After a couple of hours of implementation, I was able to get the dragging working!</p>
            <br>
            <p>My partner and I were able to fix the vast majority of the nuances after that, to the point where the project was identical to the demos the professor offered in videos. While there were many frustrating moments in the project, we were able to truck through it and turn in a completed project.</p>
            <br>
            <hr class="subhr">
            <br>
            <h3>Conclusion</h3>
            <p>The experience of completing this project was very rewarding. It not only felt very good to figure it out, but I also grew as a programmer and computer scientist. In the end, however, too many students were far from the solution that the professor ended up dropping our lowest project for the class. In addition, funny enough, my partner ended up turning in the wrong code! Still, the assignment was a very memorable moment in my career at WPI.</p>
            <br>
            <h3>Source Code</h3>
            <br>
            <p>Below are some of the classes used to create the drag-and-drop editor. The first handles the UI, using JavaFX to add interactive aspects to the project. The second class is for reading a user-inputted equation. The final class is for one of the expression types, a literal expression. This code was worked on by myself and my partner Jason.</p>
            <br>
            <div class="row">
                <div class="col-sm-4">
                    <h5>Expression Editor</h5>
                    <object data="/code/expression-editor.pdf" type="application/pdf" class="pdfs"> 
                      <p>It appears you don't have a PDF plugin for this browser.
                       You can <a href="/code/expression-editor.pdf">click here to
                      download the PDF file.</a></p>  
                    </object>
                </div>
                <div class="col-sm-4">
                    <h5>Expression Parser</h5>
                    <object data="/code/expression-parser.pdf" type="application/pdf" class="pdfs"> 
                      <p>It appears you don't have a PDF plugin for this browser.
                       You can <a href="/code/expression-parser.pdf">click here to
                      download the PDF file.</a></p>  
                    </object>
                </div>
                <div class="col-sm-4">
                    <h5>Literal Expression</h5>
                    <object data="/code/literal-expression.pdf" type="application/pdf" class="pdfs"> 
                      <p>It appears you don't have a PDF plugin for this browser.
                       You can <a href="/code/literal-expression.pdf">click here to
                      download the PDF file.</a></p>  
                    </object>
                </div>
            </div>
            <br>
            <h3>Screenshots</h3>
            <br>
            <p>Below are some screenshots taken from the project of the Java app operating.</p>
            <br>
            <!--add screenshots here!!!-->
            <div class="row">
                <div class="col-sm-4">
                    <img src="/img/equation-editor-pic.png" alt="screenshot 1" style="max-width:100%">
                </div>
                <div class="col-sm-4">
                    <img src="/img/equation-editor-pic-2.png" alt="screenshot 2" style="max-width:100%">
                </div>
                <div class="col-sm-4">
                    <img src="/img/equation-editor-pic-3.png" alt="screenshot 3" style="max-width:100%">
                </div>
            </div>
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