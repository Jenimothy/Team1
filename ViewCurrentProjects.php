<Head>
<Title>Current Projects</Title>
</Head>
<Body>
<link rel="stylesheet" href="FormStyle.css">
<h1>Current Projects</h1><br><br>
<table>

<!--Can fix the gaps between the cell borders. I hate CSS -->

<tr>
<th>ID</th>
<th>Name</th>
<th>File</th>
<th>Status</th>
<th>Researcher</th>
<th>RIS</th>
<th>Vice Dean</th>
<th>Dean</th>
</tr>


<?php

include "dblink.php";

$con = connect();
$sql = "SELECT * FROM projects";
		
//Join allows page to display name of researcher instead of foreign key. Didn't bother to join the others.
$sql2 = "SELECT FirstName, LastName FROM users INNER JOIN projects ON users.idUsers = projects.Researcher;";
$sql3 = "SELECT FirstName, LastName FROM users INNER JOIN projects ON users.idUsers = projects.RIS;";
$sql4 = "SELECT FirstName, LastName FROM users INNER JOIN projects ON users.idUsers = projects.ViceDean;";


	//Displays the details of all the research projects in the database. 
    if ($result=mysqli_query($con,$sql))
    {
		$nameResult=mysqli_query($con,$sql2);
		$risResult=mysqli_query($con,$sql3);
		$vicedeanResult=mysqli_query($con,$sql4);
		
		echo "<tr>";
		
		while ($row=mysqli_fetch_row($result))
		{
			$names=mysqli_fetch_row($nameResult);
			$RIS=mysqli_fetch_row($risResult);
			$viceDean = mysqli_fetch_row($vicedeanResult);
			
			$id = $row[0];
			$status = $row[2];
			
			echo "<td>" . $id . "</td>";
			echo "<td>" . $row[1] ."</td>";
			echo "<td>" . $row[3] ."</td>";
			echo "<td>" . $status . "</td>";
			echo "<td>" . $names[0] . " " . $names[1]. "</td>";
			echo "<td>" . $RIS[0] . " " . $RIS[1]. "</td>";
			echo "<td>Iain Stewart</td>";
			echo "<td>" . $viceDean[0] . " " . $viceDean[1] ."</td>";
			
			echo "</tr>";
			

			//echo ("ID: ".$row[0] ." &nbsp;&nbsp;&nbsp;Name: " . $row[1]  . "&nbsp&nbsp;&nbsp;Status: " . $row[2] . "&nbsp&nbsp;&nbsp;File: " . $row[3] . "&nbsp&nbsp;&nbsp;Researcher: " . $names[0] . " " . $names[1] . "&nbsp&nbsp;&nbsp;RIS: " . $RIS[0] . " " . $RIS[1] . "&nbsp&nbsp;&nbsp;Dean: Iain Stewart &nbsp&nbsp;&nbsp;Vice Dean: " . $viceDean[0] . " " . $viceDean[1] . "<br>");
			
		}
		
		// Free result set
		mysqli_free_result($result);
		mysqli_free_result($nameResult);
    }
	
	
    mysqli_close($con);
	

?>
</Body>



</table>

<br><br>

<form action="NewProject.php" method="post">
<input type=submit id='move' value="Submit a Project">