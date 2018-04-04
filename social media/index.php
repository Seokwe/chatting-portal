


<h1>MY SOCIAL MEDIA</h1>

<?php
include_once'includes/dbh.php';


$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$ResultCheck = mysqli_num_rows($result);
if ($ResultCheck > 0 ) {
	while ($row = mysqli_fetch_assoc($result)) {

	echo 	'<div class= "container-1">';
		echo'<div class="pics">';
		echo  $row['msg']. '<br>';
		echo '<div class= "color2">'  .$row['author'] . '<br><br>'.'</div>';

		echo '</div>';


	echo '</div>';
	}
}






?>

<style type="text/css">
	
	.color2{
		color:red;
		font-family: arial;
		font-size: 14;
	}
</style>



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>social media</title>
</head>
<body>  
	<div class="container-1">
	<div class="pics">
	<form action="includes/signup.php" method="POST">

		<textarea  name="msg" placeholder=" enter text here"></textarea><br>
		<input type="text" name="flname" placeholder="first and lastname"><br>
		<button type="submit" >SUBMIT</button>
		
	</form>
</div>
</div>
</body>
</html>