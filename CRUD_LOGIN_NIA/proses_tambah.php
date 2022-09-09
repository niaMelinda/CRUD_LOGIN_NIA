<?php
$nama =$_GET['nama'];
$kelas =$_GET['kelas'];
$id =$_GET['id'];

$database = new PDO('mysql:host=localhost;dbname=mutu','root',"");
$query = $database->query("insert into siswa values('$id','$nama','$kelas')");

header("location:koneksi.php");