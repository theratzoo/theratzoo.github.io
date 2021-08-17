<?php 

    $servername = "localhost";
    $username = "theratzoo";
    $password = "Talia$1024";
    $dbname = "dntnewsletter";


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    $sql = "SELECT id, address FROM addresslist";

    $listOfAddys;
    $v = 1;
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        $addy = $row["address"];
        $temp = "<" . $addy . ">";
        if (strpos($listOfAddys, $temp)) {
            $id = $row["id"];
            echo "DUPLICATE ADDY";
            
        } else {
            $listOfAddys .= $temp;
            $v++;
        }
        
}
echo($v);
	
	$conn->close();

	
?>
