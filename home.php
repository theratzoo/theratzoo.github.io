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
        <title>Luke Deratzou</title>
        <link rel="stylesheet" type="text/css" href="/ldstyle.css">
        <link rel="icon" href="/img/ld.png">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
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
    </head>
    <body id="home"> <!-- onload="set_color()"-->
    	<?php
    	include("ldnavbar.php");
    	?>
    	<!--navbar:
    		about
    		projects
    		resume
    		socials
    	-->
    	<div id="me">
                Luke Deratzou
            </div>  
        <div class="container">
            <br>
            <!--<div id="quote">
            	<p><i>"Success"</i></p>
            	include nice quote here, centered, looking nice, etc
            </div>-->
            <br>
            <br>
            <div class="row">
                <div class="col-sm-8">
                    <br>
                    <br>
                    <p style="font-size:18px">Welcome to my portfolio website! I have included my resume and projects, along with a brief page with my interests. The projects on this site include source code and discussions on my experiences. If you have any questions or wish to hear more about a particular part of my portfolio, please reach out to me.</p>
                </div>
                <div class="col-sm-4">
                    <img src="/img/me.JPG" alt="Picture of Luke Deratzou" style="max-width:100%">
                </div>
            </div>
            <br>
            <br>
            <hr>
            <br>
            <!--BELOW: we talk about things. we do not get specific. just talk about sections.-->
            <!--about me (mini bio here)
                portfolio (talk about it)
                resume (talk about it here)
                social medias (talk about it here)
            -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <img class="card-img-top card-img-first-row" src="/img/bitmoji.png" alt="My bitmoji!">
                        <div class="card-body">
                            <h5 class="card-title">About Me</h5>
                            <p class="card-text">My name is Luke Deratzou, a college student majoring in Computer Science. I've programmed for many years, mastering numerous languages. I've developed many projects such as websites and games. Outside of coding, I play instruments and video games.</p>
                            <a href="about-me" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <img class="card-img-top card-img-first-row" src="/img/resume_clipart.png" alt="Resume Clipart">
                        <div class="card-body">
                            <h5 class="card-title">Resume</h5>
                            <p class="card-text">My resume includes everything you need to know about me, including my education, employment background, and portfolio highlights. The resume is constantly changing as I continue my college journey and expand my experiences in computer science.</p>
                            <a href="resume" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <img class="card-img-top card-img-first-row" src="/img/programming_clipart.png" alt="Programming Clipart">
                        <div class="card-body">
                            <h5 class="card-title">Portfolio</h5>
                            <p class="card-text">I have completed many programming projects, both inside and outside of class. My main projects include an iOS app made in Swift, a dynamic website using JavaScript, and multiple video games made in Unity.</p>
                            <a href="portfolio" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <img class="card-img-top card-img-first-row" src="/img/social_media_clipart.png" alt="Social Media Clipart">
                        <div class="card-body">
                            <h5 class="card-title">Contact Information</h5>
                            <p class="card-text">I encourage you to get in touch with me if you have any questions or concerns. I have a Linkedin profile and email address for professional communications and social media links for more casual contexts.</p>
                            <a href="contact-info" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
             <br>
             <br>
        </div>
        <footer>
        	<h6>This website is, in fact, created by Luke Deratzou. Any questions or issues, please contact the owner.</h6>
        </footer>
        <!--insert professional footer here-->
        

    </body>
</html>