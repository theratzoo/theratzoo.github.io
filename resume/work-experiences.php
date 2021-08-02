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
        <title>Work Experiences</title>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <link rel="stylesheet" type="text/css" href="/ldstyle.css">
        <link rel="icon" href="/img/ld.png">
    </head>

    <script>
        function set_color() {
            document.getElementById("invi").style.visibility = "hidden";
            document.getElementById("me").style.backgroundColor = "#FFFF00";
            setInterval(change_color, 100);
            setInterval(bad_captcha_check, 1000);
        }
        //very bad pls fix lmao
        //just google how to do this the right way :P
        function bad_captcha_check() {
            if (grecaptcha.getResponse() != "") document.getElementById("invi").style.visibility = "visible";
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
                Work Experience
            </div>  
        <div class="container">
            <br>
            <hr class="main"> 
            <br>
            <p>Work in progress, will include more details on my work experiences in the future! For now, my resume should do a good job at reflecting it.</p>
            <br>
            <br>
            <br>
            <br>
             
        </div>
        <footer>
            <h6>This website is, in fact, created by Luke Deratzou. Any questions or issues, please contact the owner.</h6>
        </footer>
        <!--insert professional footer here-->
        

    </body>
</html>