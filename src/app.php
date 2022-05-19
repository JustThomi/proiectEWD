<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "produse";

$conn = new mysqli($servername, $username, $password, $databasename);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM `termopane`;";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc())
    {
        echo "to be continued";
    }
}else {
    echo "0 results";
}

$conn->close();

?>