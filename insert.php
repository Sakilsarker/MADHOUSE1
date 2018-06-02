<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sakil";

// Create connection
$conn = new mysqli('localhost', 'root','','sakil');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$StationName=$_POST['StationName'];
$YourLocation=$_POST['YourLocation'];
$Triptime=$_POST['Triptime'];

$From=$_POST['From'];
$To=$_POST['To'];

$sql = "INSERT INTO userdata (StationName, YourLocation, Triptime)
VALUES ('$StationName','$YourLocation','$Triptime')";

if ($conn->query($sql) === TRUE) {
    echo "The Distance between ' $StationName ' and ' $YourLocation ' is $Triptime KM and <br> You will Have to walk about 45 minutes before from home to catch the train. <br> <br> If you want to Checkout the Map -->   ";


} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>

<a href="/SE%20projects/user%20location.html" target="_blank">Click Here</a>;
