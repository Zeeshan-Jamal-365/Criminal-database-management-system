<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crimedb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




$sql = "SELECT * FROM criminal";
$result = $conn->query($sql);

$conn->close();

?>
<html>

<head>
    <title>Criminal Database</title>
</head>

<body>

    <table border=1>
        <thead>
            <th>ID</th>
            <th>name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Date</th>
            <th>rating</th>
            <th>description</th>
            <th>sentence year</th>
            <th>Criminal offense</th>
        </thead>
        <tbody>



            <?php
            if ($result->num_rows > 0) {

                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['fname'] . " " . $row['lname'] . '</td>';
                    echo '<td>' . $row['age'] . '</td>';
                    echo '<td>' . $row['gender'] . '</td>';
                    echo '<td>' . $row['date'] . '</td>';
                    echo '<td>' . $row['rating'] . '</td>';
                    echo '<td>' . $row['description'] . '</td>';
                    echo '<td>' . $row['sentence_year'] . '</td>';
                    echo '<td>' . $row['sentence_type'] . '</td>';
                    echo '</tr>';
                }
            } else {
                echo "no entry found";
            }
            ?>



        </tbody>
    </table>
    <br>
    <a href="index.html">
        <h2>Home</h2>
    </a>
</body>

</html>