<?php
	$conn = new mysqli("localhost","root","","oderkk");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>