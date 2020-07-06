<?php
	$servername = "localhost";
	$username = "root";
	$password = "";

	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$conn->query("drop database if exists enquiries_db");
	$query = "create database if not exists enquiries_db";
	$result =$conn->query($query);

	if (!$result) {
		die("could not crete database" . $conn->error);
	}

	$conn->select_db("enquiries_db");

	$query = "create table enquiries(number int unsigned not null primary key, name VARCHAR(30),email VARCHAR(30),enquiry VARCHAR(30))";
	$result = mysqli_query($conn, $query);

	if (!$result) {
		die("could not crete database" . $conn->error);
	}
?>