<?php

include("databaseConnection.php");
$sql = "DELETE FROM Testimony Where id=2";

if ($conn->query($sql) === TRUE) {
	echo "record deleted";
} else {
	echo "failed";
}

?>
