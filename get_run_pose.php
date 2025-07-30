<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "motorpose";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if(!empty($_POST)){
		$motor1 = $_POST["motor1"];
		$motor2 = $_POST["motor2"];
		$motor3 = $_POST["motor3"];
		$motor4 = $_POST["motor4"];
		$motor5 = $_POST["motor5"];
		$motor6 = $_POST["motor6"];
		
		
		echo $motor1 . "<br>";
		echo $motor2 . "<br>";
		echo $motor3 . "<br>";
		echo $motor4 . "<br>";
		echo $motor5 . "<br>";
		echo $motor6 . "<br>";
		
        $sql = "INSERT INTO pose (motor1, motor2, motor3, motor4, motor5, motor6) VALUES ('$motor1', '$motor2', '$motor3', '$motor4', '$motor5', '$motor6')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $conn->error;
        }

        $conn->close();
		
} else {
    echo "Form data not submitted or missing fields.";
}
?>
