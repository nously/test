<?php

include ('databaseConnection.php');
$sql = 'SELECT * FROM Testimony';
$result = $conn->query($sql);

if ($result -> num_rows > 0){
	while ($row = $result->fetch_assoc()){
		echo "ID: " . $row['id'] . "; Message: " . $row['message'] . '<br>';
	}
}

?>
