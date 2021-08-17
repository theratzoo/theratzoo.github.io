<?php 

    $servername = "localhost";
    $username = "theratzoo";
    $password = "Talia$1024";
    $dbname = "dntsitesearch";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "SELECT title, description, link, image FROM sitesearchbar";
    $result = $conn->query($sql);
    
    $listOfTitles;
    $listOfLinks;
    $listOfImages;
    $listOfGuides;
    $counter = 0;
    $newEntryCounter = 0;
    while($row = $result->fetch_assoc()) {
        if(strpos($row["link"], 'matchupguides/') && $row["title"] != "Modern Matchup Guides") {
            $newEntry = [$row["title"], $row["description"], $row["link"], $row["image"]];
            
            $listOfGuides[$newEntryCounter] = $newEntry;
            $newEntryCounter++;
            if(!strpos($row["description"], 'B/W Eldrazi and Taxes')) {
                $listOfTitles[$counter] = $row["title"];
                $listOfLinks[$counter] = $row["link"];
                $listOfImages[$counter] = $row["image"];
                $counter++;
            }
            
        }
    }
    $newcounter = 0;

    while($counter > 0) {
        $counter --;
        if($newcounter % 3 == 0) {
            if($newcounter != 0) {
                echo '</div>';
            }
            echo '<br><hr><br>';
            echo '<div class="row">';

        }
        $new_title = $listOfTitles[$counter];
        while(strpos($new_title, '(')) {
            $new_title = $title.substr($new_title, 0, -1);
        }
        echo '<div class="col-sm-4"><h2><a href="' . $listOfLinks[$counter] . '" class="mua">' . $new_title . '</a></h2><a href="' . $listOfLinks[$counter] . '"><img src="' . $listOfImages[$counter] . '" class="muhome"></a></div>';

        $newcounter ++;
    }
    /*while($row = $result->fetch_assoc()) {
        if(strpos($row["link"], 'matchupguides/') && $row["title"] != "Modern Matchup Guides") {
            if($counter % 3 == 0) {
                if($counter != 0) {
                    echo '</div>';
                }
                echo '<br><hr><br>';
                echo '<div class="row">';

            }

            echo '<div class="col-sm-4"><h2><a href="' . $row["link"] . '" class="mua">' . $row["title"] . '</a></h2><a href="' . $row["link"] . '"><img src="' . $row["image"] . '" class="muhome"></a></div>';



            /*
            $listOfTitles[$counter] = $row["title"];
            $listOfLinks[$counter] = $row["link"];
            $listOfImages[$counter] = $row["image"];
            
            $counter ++;
        }
    }*/
    if($newcounter % 3 != 0) {
        echo '</div>';
    } else {
        echo '</div>';
    }
        
    $conn->close();
    
    

?>