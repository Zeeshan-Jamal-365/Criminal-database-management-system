<?php

$servername="localhost";
$username="root";$password="";
$dbname="crimedb";

$conn=new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$date=$_POST['date'];
$rating=$_POST['rating'];
$description=$_POST['description'];
$sentence_year=$_POST['sentence_year'];
$sentence_type=$_POST['sentence_type'];

$sql="INSERT INTO criminal (fname, lname, age, gender, date, rating, description, sentence_year, sentence_type)
VALUES ('$fname','$lname','$age','$gender','$date','$rating','$description','$sentence_year','$sentence_type')";


if ($conn->query($sql) === TRUE) {
    echo "The Criminal data is recorded";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
