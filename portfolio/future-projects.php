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
        <title>My Future Projects</title>
        <link rel="stylesheet" type="text/css" href="/ldstyle.css">
        <link rel="icon" href="/img/ld.png">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    </head>
    <script>
        function set_color() {
            document.getElementById("me").style.backgroundColor = "#FFFF00";
            setInterval(change_color, 100);
        }
        function change_color() {

            //rgb(255, 255, 0)
            //change: add 2nd number, also can make this a predictable pattern or just a fun light show!
            //maybe make border change to make it fun idk yet
            var str = document.getElementById("me").style.backgroundColor;
            var first_num = "";
            var second_num = "";
            for(var i=0; i<3; i++) {
                if (str.substring(4+i, 5+i) == ",") break;
                first_num = first_num + str.substring(4+i, 5+i); 
            }
            //for second str
            for(var i=0; i<3; i++) {
                if (str.substring(6+first_num.length + i, 7+first_num.length+i) == ",") break;
                second_num = second_num + str.substring(6+first_num.length + i, 7+first_num.length+i); 
            }
            var third_num = parseInt(str.substring(8+first_num.length+second_num.length,str.length-1))+11;
            first_num = parseInt(first_num) + 6;
            if (first_num >= 255) first_num = 1;
            first_num = first_num.toString(16);
            if (first_num.length==1) first_num="0"+first_num;
            second_num = parseInt(second_num) + 3;
            if (second_num >= 255) second_num = 1;
            second_num = second_num.toString(16);
            if (second_num.length==1) second_num="0"+second_num;

            if (third_num >= 255) third_num = 0;
            third_num = third_num.toString(16);
            if (third_num.length==1) third_num="0"+third_num;
            var new_str = "#" + first_num + second_num + third_num;
            document.getElementById("me").style.backgroundColor = new_str;
            console.log(document.getElementById("me").style.backgroundColor);
            console.log(first_num);
            console.log(second_num);
            console.log(third_num);
    }
    </script>
    <body id="home" onload="set_color()">
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
                My Future and Ongoing Projects
            </div>  
        <div class="container">
            <br>
            <hr class="mainhr"> 
            <br>
            <p>Below are my plans for future projects along with ongoing projects.</p>
            <br>
            <hr class="subhr">
            <br>
            <h2>Video Game</h2>
            <p>I am beginning development of a video game. In the summer of 2019, I tried to make a video game in Unity, but fell short due to time and failure to scale the project. Now, however, I am working on a fresh idea.</p>
            <br>
            <p>As of late March, I am developing the ideas of the game, including the story, characters, combat, and other mechanics. I am also getting feedback on these ideas before I begin actual development, as I've learned from past experiences. I expect to be working on really fleshing out the story and characters along with beginning the first stages of coding (classes, function prototypes, etc.) within the next couple months. By the summer, I hope to be able to give a larger update on the video game, including information on the specifics. But for now, as everything is tentative (and I would rather keep it quiet to protect the ideas), I cannot really post details. However, if you wish to discuss the game or help with ideas, I would greatly appreciate it- just contact me through one of my social medias!</p>
            <br>
            <hr class="subhr">
            <br>
            <h2>Coding Tutorials</h2>
            <p>This is currently an idea for a project I would like to look into for the summmer of 2020. For now, I have only have notes on ways to go about this project. I hope to release more information on it as I approach May.</p>
            <br>
            <br>
        </div>
        <footer>
            <h6>This website is, in fact, created by Luke Deratzou. Any questions or issues, please contact the owner.</h6>
        </footer>
        <!--insert professional footer here-->
        

    </body>
</html>