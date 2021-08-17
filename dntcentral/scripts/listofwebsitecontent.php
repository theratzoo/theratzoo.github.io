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
    $sql = "SELECT title, description, link FROM sitesearchbar";
    $result = $conn->query($sql);
    
    $listOfTitles;
    $listOfDescriptions;
    $listOfLinks;
    //$listOfImages;
    $counter = 0;
    
    while($row = $result->fetch_assoc()) {
        $listOfTitles[$counter] = $row["title"];
        $listOfDescriptions[$counter] = $row["description"];
        $listOfLinks[$counter] = $row["link"];
        $counter++;
    }
   
    $conn->close();
?>