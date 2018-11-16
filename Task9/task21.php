<?php 
$year=2018-$_POST['years'];
$tax='';
$req='';
$tech='';
if($_POST['tax']=="Yes"){
	$tax="Yes";
}else{
	$tax="No";}
if($_POST['req']=="Yes"){
	$req="Yes";
}else{
	$req="No";}
if($_POST['tech']=="Yes"){
	$tech="Yes";
}else{
	$tech="No";}
print "You added new item: ".$_POST['cars'].' '.$_POST['model']."<br/>";
print "The vehicle produced in ".$_POST['years']."(".$year." years old) with ".$_POST['fuel']." engine<br/>"; 
print "Tax payed: ".$tax."<br/>";
print "Techical check passed: ".$tech."<br/>";
print "Doesn't require investment: ".$req."<br/>";
print "$ ".$_POST['price'];

 ?>