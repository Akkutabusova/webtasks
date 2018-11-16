<?php
$names=array("Johny");
if (!empty($_POST["name"])) { 
	if(in_array($_POST["name"],$names)){
		print "<p>The usernames name is already reserved!</p>";
	}else{
    array_push($names,$_POST["name"],$_POST["password"]);}
}else{
	print "<p>The username is empty!</p>";
}
if (!empty($_POST["password"])) { 
     array_push($names,$_POST["password"]);
}else{
	print "<p>The password is empty!</p>";
}
if (!empty($_POST["confirm"])) { 
     if(strcmp($_POST["confirm"],$_POST["password"])==0){
  		   print "<p>The confirmed!</p>";}
  		   else{
  		   print "<p>Can not confirm!</p>";
  		}
}else{
	print "<p>The confirm is empty!</p>";
}

?>

<style>
	p{
		border:1px solid red;
		width:350px;
		height:25px;
		font-family: Arial;
	}
	div p{
		border:none;
	}
	div{
		display: flex;
		flex-direction: row;
		justify-content: space-between;
		width: 300px;
	}
</style>

<form method="post" action="">
		<div><p>Username :</p><input type="text" name="name" value='' style="height: 25px;margin-top: 10px;"></div>
		<div><p>Password :</p><input type="password" name="password" value='' style="height: 25px;margin-top: 10px;"></div>
		<div ><p>Confirm :</p><input type="password" name="confirm" value='' style="height: 25px;margin-top: 10px;"></div>
		<input type="submit">
</form>



