<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crimedb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


/*$fname=$_POST['fname'];
$lname=$_POST['lname'];*/

$rating=$_POST['rating'];

$sql = "SELECT id,fname,lname from criminal where rating  like'%".$rating."%'";
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
            
        </thead>
        <tbody>



            <?php
            if ($result->num_rows > 0) {

                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['fname'] . " " . $row['lname'] . '</td>';
                   
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