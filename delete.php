<?php 
include 'connection.php';

$id = $_GET['id']; // from query paramater key = id

mysqli_query($host, "DELETE FROM user WHERE id='$id'")or die(mysql_error());

header("location:index.php");
?>