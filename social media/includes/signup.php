<?php

include_once 'dbh.php';


 if (isset($_POST['msg'])&& isset($_POST['flname'])) {

 	$msg = $_POST['msg'];
 	$flname = $_POST['flname'];
 	


 	$sql = "INSERT INTO users(msg, author) VALUES('$msg', '$flname');";

 	mysqli_query($conn, $sql);

 	header("Location: ../index.php?message=success");
 	exit();
 }





























?>