<?php
// Establish database connection
$servername = "localhost"; // Change to your database server
$username = "root"; // Change to your database username
$password = ""; // Change to your database password
$dbname = "event_database"; // Change to your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$eventname = $_POST['event'];
$eventtype = $_POST['type'];
$no_of_person = $_POST['no_of_person'];
$amount = $_POST['amount'];
$eventpackages = $_POST['eventpackages'];
$eventplace = $_POST['eventplace'];
$eventhall = $_POST['eventhall'];
$fooditem = $_POST['fooditem'];
$eventcatering = $_POST['eventcatering'];
$date = $_POST['date'];
$starttime = $_POST['starttime'];
$endtime = $_POST['endtime'];
$volunteer = $_POST['volunteer'];
$vno = $_POST['vno'];

// SQL query to insert data into the database
$sql = "INSERT INTO events (eventname, eventtype, no_of_person, amount, eventpackages, eventplace, eventhall, fooditem, eventcatering, date, starttime, endtime, volunteer, vno)
        VALUES ('$eventname', '$eventtype', '$no_of_person', '$amount', '$eventpackages', '$eventplace', '$eventhall', '$fooditem', '$eventcatering', '$date', '$starttime', '$endtime', '$volunteer', '$vno')";

if ($conn->query($sql) === TRUE) {
    // Event booked successfully, display pop-up message
    echo "<script>alert('Your event is booked successfully!');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
