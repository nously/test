<?php

include('databaseConnection.php');
$sql = "UPDATE Testimony SET message='x' WHERE id=1";

if ($conn->query($sql) === TRUE){
	echo "record updated";
}
else {
	echo "failed";
}

?>
