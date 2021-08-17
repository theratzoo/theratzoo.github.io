<?php 

    $servername = "localhost";
    $username = "theratzoo";
    $password = "Talia$1024";
    $dbname = "dntnewsletter";


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    


    if(isset($_GET['e'])) {
        //$email = $_GET['e'];
        $id = $_GET['e'];
        $sql = "UPDATE addresslist SET subscribed='no' WHERE id=$id";

        //set subscribe to no
        if ($conn->query($sql) === TRUE) {
            echo("Unsubscription was successful.");
        } else {
            echo "Error updating record";
        }
        
    }



	
	$conn->close();

	
?>
