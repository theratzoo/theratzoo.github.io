<?php
    include("../../scripts/searchscript.php");
    include("../../scripts/cardlistdb.php");
?>
<?php
    $filename = 'archive01.php';
    $lastModDate = date ("F d Y H:i:s.", filemtime($filename));
?>

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

    

        <title>Mulligan Game Archives- Game 1</title>
        <link rel="stylesheet" type="text/css" href="/style.css">
        <script>
            $(document).ready(function() {

                var docHeight = $(window).height();
                var footerHeight = $('#footer').height();
                var footerTop = $('#footer').position().top + footerHeight;

                if (footerTop < docHeight)
                    $('#footer').css('margin-top', 10+ (docHeight - footerTop) + 'px');
            });
        </script>
        <script>
            function loadScript() {

                var completed = localStorage.getItem('completed1');
                if (completed) {
                    var endMsg = document.getElementById('endMsg');
                    endMsg.style.visibility = "visible";
                    var formGame = document.getElementById('regForm');
                    formGame.style.visibility = "hidden";
                } else {
                    var formGame = document.getElementById('regForm');
                    formGame.style.visibility = "visible";
                }
            }
          
        </script>
        <script src="/searchbarscripts.js" type="text/javascript"></script>
        <script src="https://deckbox.org/assets/external/tooltip.js"></script>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
          (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-5296235643990630",
            enable_page_level_ads: true
          });
        </script>
    </head>
    <body class="homePage" onload="loadScript()">
               
                <?php
                    include(".../.../scripts/navbar.php"); 
                ?>
                <?php
                if(!isset($q)) {
                    echo '';
                } else {
                    $query = mysqli_query($con, "SELECT * FROM sitesearchbar WHERE title LIKE '%$q%' OR description LIKE '%$q%'");
                    $num_rows = mysqli_num_rows($query);

                    /*
                    if $num_rows == 1 {
                        //go directly to page
                    } else {

                        //go to search page w/ results
                    }
                    */
                    $resultss = 'results';
                    if($num_rows == 1) {
                        $resultss = 'result';
                    }
                    ?>
                    <br>
                    <div class="row">
                        <div class="col-sm-2">
                        </div>
                        <div class="col-sm-8">
                            <p><strong><?php echo $num_rows; ?></strong> <?php echo $resultss; ?> for '<?php echo $q; ?>'</p>
                        </div>
                    </div>
                    
                    <br>
                    <?php
                    

                    while($row = mysqli_fetch_array($query)) {
                        $id = $row['id'];
                        $title = $row['title'];
                        $text = $row['description'];
                        $link = $row['link'];
                        //instead of $id for the link, try doing the title...
                        echo '<div class="searchResult"><h3 class="search"><a href="' . $link . '" class="mua">' . $title . '</a></h3><p class="search"><i>' . $text . '</i></p></div><br />';
                    }
                }
                
            ?>
            <div class="container-fluid" id="content">
                
            
            <br>
            
            <br>
            <div class="jumbotron">
                <h1>Mulligan Game Archives: Game #1</h1>
            </div>
            <h3><a href="/decklists/1_2">Decklist</a></h3>
            <br>
            <div id="endMsg" style="visibility:hidden;">
                <h2>You have already submitted a response for this Mulligan Game.</h2>
            </div>
            <form id="regForm" method="post" action="archivemulliganresults.php">
                
<!-- for images of hands, idea of how to change them: base images as background or w/e in css, put them as class or id, then have the js set the class/id of the img based on which pg is being shown. Figure out countLabel...-->
<h1>Keep or Mulligan?: Hand #<span class="countLabel" id="countLabel">1</span></h1>

<!-- One "tab" for each step in the form: -->
<div class="tab">
    <h3>On the draw vs. unknown deck</h3>
    <img class="mullImg" src="https://i.imgur.com/pFOaQtm.png" alt="hand1"><br>
    <div class="row">
      <br>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
            <label class="keepLabel"><input type="radio" name="choice0" value="Keep" class="keep keep0 btn btn0" oninput="this.className = ''"><span class="keepLabel">Keep</span></label>
        </div>
        <div class="col-sm-5">
            <label class="mullLabel"> <input type="radio" name="choice0" value="Mull" class="mull mull0 btn btn0" oninput="this.className = ''"><span class="mullLabel">Mull</span></label>
        </div>
    </div>
    
    
</div>

<div class="tab">
    <h3>On the play vs. Burn</h3>
    <img class="mullImg" src="https://i.imgur.com/E7Rq6aU.png" alt="hand2"><br>
    <div class="row">
      <br>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
            <label class="keepLabel"><input type="radio" name="choice1" value="Keep" class="keep keep1 btn btn1" oninput="this.className = ''"><span class="keepLabel">Keep</span></label>
        </div>
        <div class="col-sm-5">
            <label class="mullLabel"><input type="radio" name="choice1" value="Mull" class="mull mull1 btn btn1" oninput="this.className = ''"><span class="mullLabel">Mull</span></label>
        </div>
    </div>
    
    
</div>

<div class="tab">
    <h3>On the draw vs BR Hollow One</h3>
    <img class="mullImg" src="https://i.imgur.com/QFg8cve.png" alt="hand3"><br>
    <div class="row">
      <br>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
            <label class="keepLabel"><input type="radio" name="choice2" value="Keep" class="keep keep2 btn btn2" oninput="this.className = ''"><span class="keepLabel">Keep</span></label>
        </div>
        <div class="col-sm-5">
            <label class="mullLabel"><input type="radio" name="choice2" value="Mull" class="mull mull2 btn btn2" oninput="this.className = ''"><span class="mullLabel">Mull</span></label>
        </div>
    </div>
</div>

<div class="tab">
    <h3>On the play vs. unknown deck</h3>
    <img class="mullImg" src="https://i.imgur.com/BxXTCct.png" alt="hand4"><br>
    <div class="row">
      <br>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
            <label class="keepLabel"><input type="radio" name="choice3" value="Keep" class="keep keep3 btn btn3" oninput="this.className = ''"><span class="keepLabel">Keep</span></label>
        </div>
        <div class="col-sm-5">
            <label class="mullLabel"><input type="radio" name="choice3" value="Mull" class="mull mull3 btn btn3" oninput="this.className = ''"><span class="mullLabel">Mull</span></label>
        </div>
    </div>

</div>

<div class="tab">
    <h3>On the play vs. Dredge</h3>
    <img class="mullImg" src="https://i.imgur.com/bZdLK7k.png" alt="hand5"><br>
    <div class="row">
      <br>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
            <label class="keepLabel"><input type="radio" name="choice4" value="Keep" class="keep keep4 btn btn4" oninput="this.className = ''"><span class="keepLabel">Keep</span></label>
        </div>
        <div class="col-sm-5">
            <label class="mullLabel"><input type="radio" name="choice4" value="Mull" class="mull mull4 btn btn4" oninput="this.className = ''"><span class="mullLabel">Mull</span></label>
        </div>
    </div>
</div>

<div class="tab">
    <h3>On the draw vs. Jeskai Control</h3>
    <img class="mullImg" src="https://i.imgur.com/YG9qZc6.png" alt="hand6"><br>
    <div class="row">
      <br>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
            <label class="keepLabel"><input type="radio" name="choice5" value="Keep" class="keep keep5 btn btn5" oninput="this.className = ''"><span class="keepLabel">Keep</span></label>
        </div>
        <div class="col-sm-5">
            <label class="mullLabel"><input type="radio" name="choice5" value="Mull" class="mull mull5 btn btn5" oninput="this.className = ''"><span class="mullLabel">Mull</span></label>
        </div>
    </div>
</div>

<div class="tab">
    <h3>On the draw vs. unknown deck</h3>
    <img class="mullImg" src="https://i.imgur.com/Qw2EEZ0.png" alt="hand7"><br>
    <div class="row">
      <br>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
            <label class="keepLabel"><input type="radio" name="choice6" value="Keep" class="keep keep6 btn btn6" oninput="this.className = ''"><span class="keepLabel">Keep</span></label>
        </div>
        <div class="col-sm-5">
            <label class="mullLabel"><input type="radio" name="choice6" value="Mull" class="mull mull6 btn btn6" oninput="this.className = ''"><span class="mullLabel">Mull</span></label>
        </div>
    </div>
</div>

<div class="tab">
    <h3>On the play vs. unknown deck</h3>
    <img class="mullImg" src="https://i.imgur.com/oBrbNHd.png" alt="hand8"><br>
    <div class="row">
      <br>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
            <label class="keepLabel"><input type="radio" name="choice7" value="Keep" class="keep keep7 btn btn7" oninput="this.className = ''"><span class="keepLabel">Keep</span></label>
        </div>
        <div class="col-sm-5">
            <label class="mullLabel"><input type="radio" name="choice7" value="Mull" class="mull mull7 btn btn7" oninput="this.className = ''"><span class="mullLabel">Mull</span></label>
        </div>
    </div>
</div>

<div class="tab">
    <h3>On the play vs. 5 Color Humans</h3>
    <img class="mullImg" src="https://i.imgur.com/DA5zSZ6.png" alt="hand9"><br>
    <div class="row">
      <br>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
            <label class="keepLabel"><input type="radio" name="choice8" value="Keep" class="keep keep8 btn btn8" oninput="this.className = ''"><span class="keepLabel">Keep</span></label>
        </div>
        <div class="col-sm-5">
            <label class="mullLabel"><input type="radio" name="choice8" value="Mull" class="mull mull8 btn btn8" oninput="this.className = ''"><span class="mullLabel">Mull</span></label>
        </div>
    </div>
</div>

<div class="tab">
    <h3>On the play vs. unknown deck</h3>
    <img class="mullImg" src="https://i.imgur.com/NwFgaaZ.png" alt="hand10"><br>
    <div class="row">
      <br>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
            <label class="keepLabel"><input type="radio" name="choice9" value="Keep" class="keep keep9 btn btn9" oninput="this.className = ''"><span class="keepLabel">Keep</span></label>
        </div>
        <div class="col-sm-5">
            <label class="mullLabel"><input type="radio" name="choice9" value="Mull" class="mull mull9 btn btn9" oninput="this.className = ''"><span class="mullLabel">Mull</span></label>
        </div>
    </div>
</div>

<div style="overflow:auto;">
   <button type="button" id="prevBtn" onclick="nextPrev(-1)"><span class="prevLabel">Prev</span></button>
   <button type="button" id="nextBtn" onclick="nextPrev(1)"><span class="nextLabel">Next</span></button>
</div>

<!--

<div style="overflow:auto;">
  <div style="float:right;">
    <button type="button" id="prevBtn" onclick="nextPrev(-1)"><span class="prevLabel">Previous</span></button>
    <button type="button" id="nextBtn" onclick="nextPrev(1)"><span class="nextLabel">Next</span></button>
  </div>
</div>


-->

<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>

</div>
<br>
<input name="mgpage" value="1" style="display:none"><span value="1" style="display:none">1</span>
</form>


<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
    document.getElementById("nextBtn").name = "Submit";

  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  document.getElementById("countLabel").innerHTML = currentTab + 1;
  /*switch (currentTab) {
    case 1:
      document.getElementById("handImage").src = "";
      break;
  }
  document.getElementsByClassName("mullImg").src = */
  //INSERT WAY TO SET SPAN OF CLASS counterLabel TO EQUAL currentTab
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    localStorage.setItem('completed1', true);

    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}
/*
idea to try out:
if(document.getElementById('keep\(currentTab)').checked) {
  //Male radio button is checked
}else if(document.getElementById('mull\(currentTab)').checked) {
  //Female radio button is checked
}
*/
//below kinda works...EDIT: works for now! :D EDIT 2 not anymore EDIT 3 WE BACK BABY
function validateForm() {
    var btnName = `choice${currentTab}`; //this is good
    var choiceMethod = document.getElementsByName(btnName); 
    var ischecked_method = false;
    for (var i = 0; i < choiceMethod.length; i++) {
        if(choiceMethod[i].checked) {
            ischecked_method = true;
            break;
        }
    } 
    if(!ischecked_method)   { //payment method button is not checked
        alert("Please select an option to proceed"); 
        return false;
    } else {
        document.getElementsByClassName("step")[currentTab].className += " finish";
        return true;
    }
}

//put within validationForm for checking if button is selected: 
/*
function validateForm() {

var x, y, i, valid = true;
x = document.getElementsByClassName("tab");
y = x[currentTab].getElementsByTagName("input");

if(document.getElementsByClassName("keep").checked) {
  //Keep button is checked
  valid = true;
}else if(document.getElementsByClassName("mull").checked) {
  //Mull button is checked
  valid = true;
} else {
  y[i].className += " invalid";

  valid = false;
}

if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid;

}*/

//below is the copy-paste version
/*
function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}
*/
function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
            
            
            </div>
            
            <script>var jArray = <?php echo json_encode($listOfCardNames); ?>;</script>
                <script src="/loadcardhoversettings.js"></script>
            
            <?php
                include("../../scripts/footer.php");
            ?>
            <script>var jStr = <?php echo json_encode($lastModDate); ?>;</script>
            <script type="text/javascript" src="/loadpublishinfo.js"></script>
    </body>
</html>

