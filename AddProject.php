<?php
//Takes data submitted from NewProject.php and inserts it into the database.
include "dblink.php";

$con = connect();
//session_start();

$projectName =  $_POST['projectName'];
$researcher = $_POST['researcher'];
$projectFile = $_POST['projectFile'];
$ris = $_POST['ris'];
$description = $_POST['projectDescription'];


$sql = "INSERT INTO projects (projectName, projectDescription, projectStatus, projectFile, Researcher, RIS, Dean, ViceDean) VALUES ('$projectName', '$description', 1, '$projectFile', $researcher, $ris, 10, 9)";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
	unset($_GET['projectName']);
	header('Location: NewProject.php?done=yes');
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}