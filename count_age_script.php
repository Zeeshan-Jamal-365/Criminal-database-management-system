<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crimedb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


/*$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$date = $_POST['date'];
$rating = $_POST['rating'];
$description = $_POST['description'];
$sentence_year = $_POST['sentence_year'];
*/
$age = $_POST['age'];

$sql ="SELECT count(id) from criminal group by age having age=$age";
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
            <th>total</th>
            
        </thead>
        <tbody>



            <?php
            if ($result->num_rows > 0) {

                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['count(id)'] . '</td>';
                   
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