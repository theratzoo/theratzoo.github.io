<?php 
	$choice1 = $_POST["choice0"];
	$choice2 = $_POST["choice1"];
	$choice3 = $_POST["choice2"];
	$choice4 = $_POST["choice3"];
	$choice5 = $_POST["choice4"];
	$choice6 = $_POST["choice5"];
	$choice7 = $_POST["choice6"];
	$choice8 = $_POST["choice7"];
	$choice9 = $_POST["choice8"];
	$choice10 = $_POST["choice9"];
	$text1 = $_POST["text1"];
	$text2 = $_POST["text2"];
	$text3 = $_POST["text3"];
	$text4 = $_POST["text4"];
	$text5 = $_POST["text5"];
	$text6 = $_POST["text6"];
	$text7 = $_POST["text7"];
	$text8 = $_POST["text8"];
	$text9 = $_POST["text9"];
	$text10 = $_POST["text10"];
	echo $choice1;

	$servername = "localhost";
	$username = "theratzoo";
	$password = "Talia$1024";
	$dbname = "mulliganresults";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO mgresults (choice, keepormull, comment)
	VALUES (1, '$choice1', '$text1')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$sql = "INSERT INTO mgresults (choice, keepormull, comment)
	VALUES (2, '$choice2', '$text2')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$sql = "INSERT INTO mgresults (choice, keepormull, comment)
	VALUES (3, '$choice3', '$text3')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$sql = "INSERT INTO mgresults (choice, keepormull, comment)
	VALUES (4, '$choice4', '$text4')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$sql = "INSERT INTO mgresults (choice, keepormull, comment)
	VALUES (5, '$choice5', '$text5')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$sql = "INSERT INTO mgresults (choice, keepormull, comment)
	VALUES (6, '$choice6', '$text6')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$sql = "INSERT INTO mgresults (choice, keepormull, comment)
	VALUES (7, '$choice7', '$text7')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$sql = "INSERT INTO mgresults (choice, keepormull, comment)
	VALUES (8, '$choice8', '$text8')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$sql = "INSERT INTO mgresults (choice, keepormull, comment)
	VALUES (9, '$choice9', '$text9')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$sql = "INSERT INTO mgresults (choice, keepormull, comment)
	VALUES (10, '$choice10', '$text10')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}


	$conn->close();

	header("Location: http://dntcentral.com/modern/mulligans");
	exit();
?>
