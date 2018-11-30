<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		.maker1{
			padding-right: 40px;
		}
		.model1{
			padding-right: 40px;	
		}
		.year1{
			padding-right: 52px;
		}
		.price1{
			padding-right: 49px;
		}
		
		input{
			margin:2px;
		}
		.title{
		font-weight: bold;
		font-size: 25px;
		padding-bottom: 5px;
	}
	.main_body{
		display: inline-block;
		margin-left: 5px;
	}
	
	img{
		padding: 0px;
	}
	.item{
		margin: 5px;
		border: 1px solid red;
		border-radius: 5px;
		width: 400px;
		display: inline-block;
	}
	</style>
	<meta charset="UTF-8">
</head>
<body>
	<h1>Admin Page</h1>
	<form action="task10_3.php" method="post">
		<label class="maker1">Maker:</label>
		<input type="text" name="maker"><br/>
		<label class="model1">Model:</label>
		<input type="text" name="model"><br>
		<label class="year1">Year:</label>
		<input type="text" name="year"><br>
		<label class="price1">Price:</label>
		<input type="text" name="price"><br>
		<label class="url">Image(URL):</label>
		<input type="text" name="image"><br>
		<input type="submit" value="Add new"><br>
	</form>
<?php 
$host = "localhost";
$username = "root";
$password = "";
$db = "cars";

@ $db_conn = mysqli_connect($host, $username, $password, $db);

	if(isset($_POST["maker"])){
	$maker = $_POST["maker"];
	$model = $_POST["model"];
	$year = $_POST["year"];
	$price = $_POST["price"];
	$image = $_POST["image"];

	$sql = "INSERT INTO mawiny(maker,model,price,year,url) VALUES ('$maker','$model',$price,$year,'$image')";
	$result = mysqli_query($db_conn, $sql);
	}

	else if(isset($_REQUEST["model"])){

		$madel = $_REQUEST["model"];
		
		$squl = "DELETE FROM mawiny WHERE model='$madel'";
		$result = mysqli_query($db_conn, $squl);
	}


$connection_error = mysqli_connect_error();
if($connection_error != null){
	echo "We have a connection problem ".$connection_error;
}

//$query = "INSERT INTO mawiny(maker,model,price,year,url) VALUES ('Toyota','Land Cruiser',50000,2004,'http://cdn.motorpage.ru/Photos/800/01a88.jpg')";
$query = "SELECT * FROM mawiny";
$result = mysqli_query($db_conn, $query);
$num = mysqli_num_rows($result);

for ($i=0;$i<$num;$i++){
		$row = mysqli_fetch_assoc($result);
		echo "<div class='item'>";
		echo "<img src=".$row["url"]." width='100px' height='80px'>"."<div class='main_body'>"."<div class='title'>";
		echo "<span class='maker'>".$row["maker"]."</span>"."<span class='model'>"." ".$row["model"]."</span>"."</div>";
		echo "<div class='price'>".$row["price"]."</div>"."<div class='year'>".$row["year"];
		echo 	"</div>"."<div class='delete'>"."<a href='task10_3.php?model=".$row["model"]."'>Delete</a>"."</div>"."</div>"."</div>";
		
	}

?>
</body>
</html>