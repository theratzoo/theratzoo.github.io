<?php 

    $servername = "localhost";
    $username = "theratzoo";
    $password = "Talia$1024";
    $dbname = "dntsearchbar";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "SELECT name, type, cmc FROM newcardlist";
    $result = $conn->query($sql);
    
    $listOfCardNames;
    $listOfTypes;
    $listOfCmcs;
    $counter = 0;
    while($row = $result->fetch_assoc()) {
        if($counter < 1000000) {
            $tempA = $row["name"];
            $temp = print_r($tempA,true);
            $listOfCardNames[$counter] = $temp; 
            $tempB = $row["type"];
            $tempZ = print_r($tempB,true);   
            $listOfTypes[$counter] = $tempZ;
            $tempC = $row["cmc"];
            $tempX = print_r($tempC,true);
            $listOfCmcs[$counter] = $tempX;    
            $counter ++;
        }
        
        
        
    }
    $listOfLists = [$listOfCardNames, $listOfTypes, $listOfCmcs];
    ini_set('memory_limit','1000M');
    
    $conn->close();

?>