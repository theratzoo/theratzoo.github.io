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
        <title>About Me</title>
        <link rel="stylesheet" type="text/css" href="/ldstyle.css">
        <link rel="icon" href="/img/ld.png">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    </head>
    <body id="home">
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
                About Me
            </div>  
        <div class="container">
            <br>
            <hr class="main"> 
            <br>
            <h2 class="text-center">Overview</h2>
            <br>
            <p>My name is Luke Deratzou, a college student majoring in Computer Science. I've programmed for many years, mastering numerous languages. I've developed many projects such as websites and games. Outside of coding, I play instruments and video games.</p>
            <br>
            <hr>
            <br>
            <h3 class="text-center">Hobbies</h3>
            <!--can include more info later on-->
            <br>
            <p>I like music a lot. Not just listening to music (where I enjoy pretty much every genre), but I also love playing. I have played the Viola for over a decade. I have also played the piano in the past, and am currently working on improving my skills with a keyboard.</p>
            <br>
            <p>One of my favorite pastimes is a trading card game called Magic: the Gathering. The game has been a big part of my life, as I have met many friends through it, along with developing my communication skills and play as an inspiration for developing my first website.</p>
            <br>
            <p>Running has been an enjoyment for me over the past several years. It has helped me meet people and destress, especially after a tricky programming problem. While I was never a top runner at my high school, I kept at it and eventually made the varsity team my junior and senior years.</p>
            <br>
            <p>I also enjoy playing video games, mainly games that I play with friends. My favorite games include League of Legends, VALORANT, Magic the Gathering Arena, and Minecraft.</p>
            <br>
            <br>
            <h3 class="text-center">Clubs</h3>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <img class="card-img-top" src="/img/mtg_club.jpg" alt="goat">
                        <div class="card-body">
                            <h5 class="card-title">Magic the Gathering Club</h5>
                            <p class="card-text">I play Magic the Gathering with my fellow classmates in this club. I have met many people through this organization. I am currently the Vice President of the club!</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <img class="card-img-top" src="/img/igda.png" alt="IGDA">
                        <div class="card-body">
                            <h5 class="card-title">IGDA</h5>
                            <p class="card-text">IGDA is the video game development club at WPI, affiliated with the IGDA organization. In the club, I have learned about game development and made a few games with members.</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <img class="card-img-top" src="/img/cyber-security-club.png" alt="Cyber Security">
                        <div class="card-body">
                            <h5 class="card-title">Cyber Security Club</h5>
                            <p class="card-text">Toward the middle of my freshman year, I gained an interest in cyber security. I'm new to the field but I'm learning by doing small CTF projects via the club.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <img class="card-img-top" src="/img/running-club.png" alt="Running Club">
                        <div class="card-body">
                            <h5 class="card-title">Running Club</h5>
                            <p class="card-text">I've been doing cross country since middle school, so I decided to continue my passion at WPI! It has helped me meet new people and get some nice exercise.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--<p>Running Club:</p>
            <p>Cyber Security Club:</p>
            <br>
            <h3>Dog!</h3>
            <p>I have a cute beige poodle, Sasha!</p>-->
             
        </div>
        <footer>
            <h6>This website is, in fact, created by Luke Deratzou. Any questions or issues, please contact the owner.</h6>
        </footer>
        <!--insert professional footer here-->
        

    </body>
</html>