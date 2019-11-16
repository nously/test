<?php

include('databaseConnection.php');


$sql = "INSERT INTO Testimony (message, name, photo) Values ('jsfdbjsdfhb', 'skdjfbksd', 'sgdfgdfg')";

if ($conn->query($sql) === TRUE){
	echo "new record added";
} else {
	echo "failed";
}

$conn->close();

?>
