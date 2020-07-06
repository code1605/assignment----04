<?php
	require_once "connect.php";

	$number = $_POST["number"];
	$name = $_POST["name"];
	$email = $_POST["email"];
	$enquiry = $_POST["enquiry"];

	$conn->select_db("enquiries_db");

	$query = "insert into enquiries values('$number', '$name', '$email', '$enquiry')";

	$result = $conn->query($query);

	if ($result) {
		header("location: contact.html?done=true");
	}
	else {
		die("something went horribly wrong: ".$conn->error);
	}
?>