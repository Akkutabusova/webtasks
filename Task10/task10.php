<?php 
$host = "localhost";
$username = "root";
$password = "";
$db = "cars";

@ $db_conn = mysqli_connect($host, $username, $password, $db);

$connection_error = mysqli_connect_error();
if($connection_error != null){
	echo "We have a connection problem ".$connection_error;
}

$query = "SELECT * FROM mawiny";
$result = mysqli_query($db_conn, $query);
$num = mysqli_num_rows($result);

for ($i=0;$i<$num;$i++){
		$row = mysqli_fetch_assoc($result);
		echo "<div class='item'>"."<img src=".$row["url"]." width='100px'>"."<div class='main_body'>"."<div class='title'>"."<span class='maker'>".$row["maker"]."</span>";
		echo "<span class='model'>"." ".$row["model"]."</span>"."</div>"."<div class='price'>".$row["price"]."</div>"."<div class='year'>".$row["year"]."</div>"."</div>"."</div>";
		
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<style>
	.title{
		font-weight: bold;
		font-size: 25px;
		padding-bottom: 5px;
	}
	.main_body{
		display: inline-block;

	}
	
	img{
		padding: 0px;
	}
	.item{
		margin: 10px;
		border: 1px solid red;
		border-radius: 5px;
		width: 400px;
		display: inline-block;
	}
	
</style>
</head>
<body>
	
	
</body>
</html>