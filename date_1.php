<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crimedb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$year = $_POST['year'];


$years = 'timestampdiff(year,date,release_date)';
$sql = "SELECT id,timestampdiff(year,date,release_date),fname,lname from criminal  where $years=$year";

$result = $conn->query($sql);


$conn->close();

?>

<html>

<head>
    <title>Criminal Database</title>
</head>

<body>

    <table border=2>
        <thead>

            <th> id </th>
            <th> name </th>
            <th> years </th>

        </thead>
        <tbody>



            <?php
            if ($result->num_rows > 0) {

                // output data of each row
                while ($row = $result->fetch_assoc()) {

                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['fname'] . " " . $row['lname'] . '</td>';
                    echo '<td>' . $row[$years] . '</td>';
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