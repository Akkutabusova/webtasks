<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "cars";
// Create connection
$conn = new mysqli($host, $user, $password, $db);
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $admin = $_COOKIE['admin'];
    if($admin == 1){
        $sql = "DELETE FROM `cars` WHERE id = ".$id."";
        mysqli_query($conn,$sql);
        echo 'deleted';
    }
    else{
        echo 'u cant' . '<br>';
        echo 'ur admin index is ' . $admin;
    }
}
mysqli_close($conn);
?>