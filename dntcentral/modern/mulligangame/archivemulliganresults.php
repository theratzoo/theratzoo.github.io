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
	$mglocation = $_POST["mgpage"];
	echo $choice1;

	$servername = "localhost";
	$username = "theratzoo";
	$password = "Talia$1024";
	$dbname = "mulliganresults";
	$table = "test";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	switch ($mglocation) {
		case "1":
			$sql = "INSERT INTO july2018results (choice, keepormull)
			VALUES (1, '$choice1')";
			break;
		case "2":
			$sql = "INSERT INTO august2018results (choice, keepormull)
			VALUES (1, '$choice1')";
			break;
		case "3":
			$sql = "INSERT INTO september2018results (choice, keepormull)
			VALUES (1, '$choice1')";
			break;
		case "4":
			$sql = "INSERT INTO october2018results (choice, keepormull)
			VALUES (1, '$choice1')";
			break;
		case "5":
			$sql = "INSERT INTO november2018results (choice, keepormull)
			VALUES (1, '$choice1')";
			break;
		case "6":
			$sql = "INSERT INTO december2018results (choice, keepormull)
			VALUES (1, '$choice1')";
			break;
	}
	
	

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	switch ($mglocation) {
		case "1":
			$sql = "INSERT INTO july2018results (choice, keepormull)
			VALUES (2, '$choice2')";
			break;
		case "2":
			$sql = "INSERT INTO august2018results (choice, keepormull)
			VALUES (2, '$choice2')";
			break;
		case "3":
			$sql = "INSERT INTO september2018results (choice, keepormull)
			VALUES (2, '$choice2')";
			break;
		case "4":
			$sql = "INSERT INTO october2018results (choice, keepormull)
			VALUES (2, '$choice2')";
			break;
		case "5":
			$sql = "INSERT INTO november2018results (choice, keepormull)
			VALUES (2, '$choice2')";
			break;
		case "6":
			$sql = "INSERT INTO december2018results (choice, keepormull)
			VALUES (2, '$choice2')";
			break;
	}

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	switch ($mglocation) {
		case "1":
			$sql = "INSERT INTO july2018results (choice, keepormull)
			VALUES (3, '$choice3')";
			break;
		case "2":
			$sql = "INSERT INTO august2018results (choice, keepormull)
			VALUES (3, '$choice3')";
			break;
		case "3":
			$sql = "INSERT INTO september2018results (choice, keepormull)
			VALUES (3, '$choice3')";
			break;
		case "4":
			$sql = "INSERT INTO october2018results (choice, keepormull)
			VALUES (3, '$choice3')";
			break;
		case "5":
			$sql = "INSERT INTO november2018results (choice, keepormull)
			VALUES (3, '$choice3')";
			break;
		case "6":
			$sql = "INSERT INTO december2018results (choice, keepormull)
			VALUES (3, '$choice3')";
			break;
	}

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	switch ($mglocation) {
		case "1":
			$sql = "INSERT INTO july2018results (choice, keepormull)
			VALUES (4, '$choice4')";
			break;
		case "2":
			$sql = "INSERT INTO august2018results (choice, keepormull)
			VALUES (4, '$choice4')";
			break;
		case "3":
			$sql = "INSERT INTO september2018results (choice, keepormull)
			VALUES (4, '$choice4')";
			break;
		case "4":
			$sql = "INSERT INTO october2018results (choice, keepormull)
			VALUES (4, '$choice4')";
			break;
		case "5":
			$sql = "INSERT INTO november2018results (choice, keepormull)
			VALUES (4, '$choice4')";
			break;
		case "6":
			$sql = "INSERT INTO december2018results (choice, keepormull)
			VALUES (4, '$choice4')";
			break;
	}

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	switch ($mglocation) {
		case "1":
			$sql = "INSERT INTO july2018results (choice, keepormull)
			VALUES (5, '$choice5')";
			break;
		case "2":
			$sql = "INSERT INTO august2018results (choice, keepormull)
			VALUES (5, '$choice5')";
			break;
		case "3":
			$sql = "INSERT INTO september2018results (choice, keepormull)
			VALUES (5, '$choice5')";
			break;
		case "4":
			$sql = "INSERT INTO october2018results (choice, keepormull)
			VALUES (5, '$choice5')";
			break;
		case "5":
			$sql = "INSERT INTO november2018results (choice, keepormull)
			VALUES (5, '$choice5')";
			break;
		case "6":
			$sql = "INSERT INTO december2018results (choice, keepormull)
			VALUES (5, '$choice5')";
			break;
	}

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	switch ($mglocation) {
		case "1":
			$sql = "INSERT INTO july2018results (choice, keepormull)
			VALUES (6, '$choice6')";
			break;
		case "2":
			$sql = "INSERT INTO august2018results (choice, keepormull)
			VALUES (6, '$choice6')";
			break;
		case "3":
			$sql = "INSERT INTO september2018results (choice, keepormull)
			VALUES (6, '$choice6')";
			break;
		case "4":
			$sql = "INSERT INTO october2018results (choice, keepormull)
			VALUES (6, '$choice6')";
			break;
		case "5":
			$sql = "INSERT INTO november2018results (choice, keepormull)
			VALUES (6, '$choice6')";
			break;
		case "6":
			$sql = "INSERT INTO december2018results (choice, keepormull)
			VALUES (6, '$choice6')";
			break;
	}

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	switch ($mglocation) {
		case "1":
			$sql = "INSERT INTO july2018results (choice, keepormull)
			VALUES (7, '$choice7')";
			break;
		case "2":
			$sql = "INSERT INTO august2018results (choice, keepormull)
			VALUES (7, '$choice7')";
			break;
		case "3":
			$sql = "INSERT INTO september2018results (choice, keepormull)
			VALUES (7, '$choice7')";
			break;
		case "4":
			$sql = "INSERT INTO october2018results (choice, keepormull)
			VALUES (7, '$choice7')";
			break;
		case "5":
			$sql = "INSERT INTO november2018results (choice, keepormull)
			VALUES (7, '$choice7')";
			break;
		case "6":
			$sql = "INSERT INTO december2018results (choice, keepormull)
			VALUES (7, '$choice7')";
			break;
	}

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	switch ($mglocation) {
		case "1":
			$sql = "INSERT INTO july2018results (choice, keepormull)
			VALUES (8, '$choice8')";
			break;
		case "2":
			$sql = "INSERT INTO august2018results (choice, keepormull)
			VALUES (8, '$choice8')";
			break;
		case "3":
			$sql = "INSERT INTO september2018results (choice, keepormull)
			VALUES (8, '$choice8')";
			break;
		case "4":
			$sql = "INSERT INTO october2018results (choice, keepormull)
			VALUES (8, '$choice8')";
			break;
		case "5":
			$sql = "INSERT INTO november2018results (choice, keepormull)
			VALUES (8, '$choice8')";
			break;
		case "6":
			$sql = "INSERT INTO december2018results (choice, keepormull)
			VALUES (8, '$choice8')";
			break;
	}

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	switch ($mglocation) {
		case "1":
			$sql = "INSERT INTO july2018results (choice, keepormull)
			VALUES (9, '$choice9')";
			break;
		case "2":
			$sql = "INSERT INTO august2018results (choice, keepormull)
			VALUES (9, '$choice9')";
			break;
		case "3":
			$sql = "INSERT INTO september2018results (choice, keepormull)
			VALUES (9, '$choice9')";
			break;
		case "4":
			$sql = "INSERT INTO october2018results (choice, keepormull)
			VALUES (9, '$choice9')";
			break;
		case "5":
			$sql = "INSERT INTO november2018results (choice, keepormull)
			VALUES (9, '$choice9')";
			break;
		case "6":
			$sql = "INSERT INTO december2018results (choice, keepormull)
			VALUES (9, '$choice9')";
			break;
	}

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	switch ($mglocation) {
		case "1":
			$sql = "INSERT INTO july2018results (choice, keepormull)
			VALUES (10, '$choice10')";
			break;
		case "2":
			$sql = "INSERT INTO august2018results (choice, keepormull)
			VALUES (10, '$choice10')";
			break;
		case "3":
			$sql = "INSERT INTO september2018results (choice, keepormull)
			VALUES (10, '$choice10')";
			break;
		case "4":
			$sql = "INSERT INTO october2018results (choice, keepormull)
			VALUES (10, '$choice10')";
			break;
		case "5":
			$sql = "INSERT INTO november2018results (choice, keepormull)
			VALUES (10, '$choice10')";
			break;
		case "6":
			$sql = "INSERT INTO december2018results (choice, keepormull)
			VALUES (10, '$choice10')";
			break;
	}

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}


	$conn->close();
	switch($mglocation) {
		case "1":
			header("Location: http://dntcentral.com/modern/mulligangame/archive01");
			break;
		case "2":
			header("Location: http://dntcentral.com/modern/mulligangame/archive02");
			break;
		case "3":
			header("Location: http://dntcentral.com/modern/mulligangame/archive03");
			break;
		case "4":
			header("Location: http://dntcentral.com/modern/mulligangame/archive04");
			break;
		case "5":
			header("Location: http://dntcentral.com/modern/mulligangame/archive05");
			break;
		case "5":
			header("Location: http://dntcentral.com/modern/mulligangame/archive06");
			break;
	}
	
	exit();
?>
