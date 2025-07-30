<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userform";

$conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if(!empty($_POST)){
		$name = $_POST["name"];
		$age = $_POST["age"];
		
		echo $name . "<br>";
		echo $age . "<br>";
		
        $sql = "INSERT INTO userinfo (name, age) VALUES ('$name', '$age')";

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
