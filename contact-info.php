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
        <title>Contact Information</title>
        <link rel="stylesheet" type="text/css" href="/ldstyle.css">
        <link rel="icon" href="/img/ld.png">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
        <script>
        //todo: instead of +-1, do +-x (where, preferably, x=4 or 8)
        //make it so that it has same styles of me, covers whole area, AND has text over it (do a lot of googling to figure this stuff out).
    	function set_color() {
            var lst = ["C", "O", "N", "T", "A", "C", "T", " ", "I", "N", "F", "O"];
            for(var i=1; i<26; i++) {
                var str_to_add = "";
                if (i%2==0) str_to_add = lst[(i/2)-1];
                document.getElementById("sm").innerHTML += "<div class=\"color-bar\" id=\"cb" + (i-1).toString(10) + "\">" + str_to_add + "</div>";
            }
            var bgcolor = "ff0000";
            for(var i=0; i<25; i++) {
                document.getElementById("cb" + i.toString(10)).style.backgroundColor = "#" + bgcolor;
                bgcolor = next_bg_color(bgcolor);
            }
    		setInterval(change_color, 20);
    	}

        function next_bg_color(pastcolor) {
            console.log(check_pc(pastcolor, "ffXx00", "f"));
            if (check_pc(pastcolor, "ffXx00", "f")!=false) {
                return check_pc(pastcolor, "ffXx00", "f");
                //xx < FF
                //increase xx
            } else if (check_pc(pastcolor, "Xxff00", "0")!=false) {
                return check_pc(pastcolor, "Xxff00", "0");
                //xx > 00
                //decrease xx
            } else if (check_pc(pastcolor, "00ffXx", "f")!=false) {
                return check_pc(pastcolor, "00ffXx", "f");
                //xx < FF
                //increase xx
            } else if (check_pc(pastcolor, "00Xxff", "0")!=false) {
                return check_pc(pastcolor, "00Xxff", "0");
                //xx > 0
                //decrease xx
            } else if (check_pc(pastcolor, "Xx00ff", "f")!=false) {
                return check_pc(pastcolor, "Xx00ff", "f");
                //xx < FF
                //increase xx
            } else if (check_pc(pastcolor, "ff00Xx", "0")!=false) {
                return check_pc(pastcolor, "ff00Xx", "0");
                //xx > 0
                //decrease xx
            }
        }

        function check_pc(pastcolor, condition, lim) {
            //console.log(condition);
            //console.log(pastcolor);
            var newcolor = ""
            var x = "0";
            if (lim == "0") x = "f";
            for(var i=0; i<6; i++) {
                if (condition[i]=="X") {
                    if(pastcolor[i] == lim && pastcolor[i+1] == lim) return false;
                    if(pastcolor[i+1]==lim) newcolor += change_hex(pastcolor[i], lim);
                    if(pastcolor[i+1]!=lim) newcolor += pastcolor[i];
                } else if (condition[i]=="x") {
                    if(pastcolor[i-1]!=newcolor[i-1]) newcolor += x;
                    if(pastcolor[i-1]==newcolor[i-1]) newcolor += change_hex(pastcolor[i], lim);
                } else if (condition[i]!=pastcolor[i]) {
                    return false;
                } else {
                    newcolor += pastcolor[i];
                }
            }
            return newcolor;
        }

        function change_hex(val, lim) {
            var nv = parseInt(val, 16);
            if (lim == "f") nv+=3;
            if (lim == "0") nv-=3;
            return nv.toString(16);
        }

    	function change_color() {
            //FF0000 START
            //FFFF00
            //00FF00
            //00FFFF
            //0000FF
            //FF00FF
            var bgcolor = next_bg_color(convert_to_hex(document.getElementById("cb0").style.backgroundColor));
            for(var i=0; i<25; i++) {
                document.getElementById("cb"+i.toString(10)).style.backgroundColor = "#" + bgcolor;
                bgcolor = next_bg_color(bgcolor);
            }
    }
    function convert_to_hex(val) {
        hex = "";
        cv = "";
        for(var i=0; i<val.length; i++) {
            if (val[i] == "0" || val[i] == "1" || val[i] == "2" || val[i] == "3" || val[i] == "4" || val[i] == "5" || val[i] == "6" || val[i] == "7" || val[i] == "8" || val[i] == "9") {
                cv += val[i];
            } else if (val[i] == "," || val[i] == ")") {
                tmp = parseInt(cv);
                var tmp2 = tmp.toString(16);
                if (tmp2.length == 1) tmp2 = "0"+tmp2;
                hex += tmp2;
                cv = "";
            }
        }
        return hex;
    }
    </script>
    </head>
    <body id="home" onload="set_color()">
    	<?php
    	include("ldnavbar.php");
    	?>
    	<!--navbar:
    		about
    		projects
    		resume
    		socials
    	-->
    	<div id="sm">
                
        </div>  
        <br>
        <div class="container">
            <br>
            <hr class="mainhr">
            <br>
            <div class="row">
                <div class="col-sm-2">
                    <img src="/img/linkedin.png" class="social-logo" alt="Linkedin">
                </div>
                <div class="col-sm-4">
                    <h4>Linkedin</h4>
                </div>
                <div class="col-sm-6">
                    <a href="https://www.linkedin.com/in/luke-deratzou-501489179/" target="_blank">https://www.linkedin.com/in/luke-deratzou-501489179/</a>
                </div>
            </div>
            <br>
            <hr class="subhr">
            <br>
            <div class="row">
                <div class="col-sm-2">
                    <img src="/img/facebook.png" class="social-logo" alt="Facebook">
                </div>
                <div class="col-sm-4">
                    <h4>Facebook</h4>
                </div>
                <div class="col-sm-6">
                    <a href="https://www.facebook.com/luke.deratzou" target="_blank">https://www.facebook.com/luke.deratzou</a>
                </div>
            </div>
            <br>
            <hr class="subhr">
            <br>
            <div class="row">
                <div class="col-sm-2">
                    <img src="/img/email.png" class="social-logo" alt="email">
                </div>
                <div class="col-sm-4">
                    <h4>Email</h4>
                </div>
                <div class="col-sm-6">
                    <a href="mailto:lukederatzou@gmail.com" target="_blank">lukederatzou@gmail.com</a>
                </div>
            </div>
            <br>
            <hr class="subhr">
            <div class="row">
                <div class="col-sm-2">
                    <img src="/img/github.png" class="social-logo" alt="github">
                </div>
                <div class="col-sm-4">
                    <h4>Github</h4>
                </div>
                <div class="col-sm-6">
                    <a href="https://github.com/theratzoo" target="_blank">github.com/theratzoo</a>
                </div>
            </div>
            <!--<div class="row">
                <div class="col-sm-2">
                    <img src="/img/twitter.png" class="social-logo" alt="Twitter">
                </div>
                <div class="col-sm-4">
                    <h4>Twitter</h4>
                </div>
                <div class="col-sm-6">
                    <a href="https://www.twitter.com/">https://www.twitter.com/</a>
                </div>
            </div>-->
            

             <br>
             <br>
        </div>
        <footer>
        	<h6>This website is, in fact, created by Luke Deratzou. Any questions or issues, please contact the owner.</h6>
        </footer>
        <!--insert professional footer here-->
        

    </body>
</html>