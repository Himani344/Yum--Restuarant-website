<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yum_reservations";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$date_of_booking = $_POST['date'];
$time_of_booking = $_POST['time'];
$number_of_people = $_POST['people'];

$sql = "INSERT INTO reservations (name, date_of_booking, time_of_booking, number_of_people) VALUES ('$name', '$date_of_booking', '$time_of_booking', '$number_of_people')";

if ($conn->query($sql) === TRUE) {
    echo "Reservation successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>