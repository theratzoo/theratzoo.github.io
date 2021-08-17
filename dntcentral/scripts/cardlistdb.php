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

    $sql = "SELECT name FROM cardzrna";
    $result = $conn->query($sql);
    
    $listOfCardNames;
    $counter = 0;
    while($row = $result->fetch_assoc()) {
        $tempA = $row["name"];
        $temp = print_r($tempA,true);
        $listOfCardNames[$counter] = $temp;        
        $counter ++;
        
        
    }
    
    ini_set('memory_limit','1000M');
    
    $conn->close();

?>