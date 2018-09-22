<!DOCTYPE html>
<html>
<head></head>
<style>
# {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#c td, #custom th {
    border: 1px solid #ddd;
    padding: 8px;
}

#c tr:nth-child(even){background-color: #f2f2f2;}

#c tr:hover {background-color: #ddd;}

#c th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
<body background="redb.jpg">
<?php
include_once 'db.php';

$sql = "SELECT * FROM rescandi";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	 echo "<h1 align='center'> CANDIDATE RESUME DETAILS </h1> <table id='c'><tr><th>Firstname</th><th>Lastname</th><th>Address</th><th>Contact</th><th>Mail ID</th><th>Gender</th><th>Qualification</th><th>Experience</th><th>Achievements</th><th>Certifications</th></tr>";
    while($row = $result->fetch_assoc()) {
		
		//echo "<tr><td>" . $row["id"]. </td><td> . $row["firstname"]. " " . $row["lastname"]. "</td></tr>";

		
    echo  " <tr><td>". $row["firstname"]. "  </td><td> ". $row["lastname"] . ""." </td><td> ". $row["addr"]. " " ." </td><td> ". $row["cont"]. " " ."  </td><td> ". $row["mail"]. " " ." </td><td> ". $row["gend"]. " " ." </td><td>". $row["qua"]. " " ." </td><td> ". $row["exper"]. " " ." </td><td> ". $row["ach"]. " " ." </td><td> ". $row["cert"]. " </td></tr>";
    }
	echo "</table>";

} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>