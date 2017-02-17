<?php

	session_start();
	if(!isset($_SESSION['admin'])){
		header("location: ../login.php");
	}
	include 'admin-functions.php'; 
    global $db;
	$query	 = $conn->query("SELECT * FROM maintenance_tbl WHERE id=id");
	$row  	 = $query->fetch_object();
	$id      = $row->id;
	$title 	 = $row->title;
	$footer  = $row->footer;

