<?php 
include 'connection.php';
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];

mysqli_query($host, "INSERT INTO user (nama,alamat,pekerjaan) VALUES('$nama','$alamat','$pekerjaan')");

header("location:index.php");
?>