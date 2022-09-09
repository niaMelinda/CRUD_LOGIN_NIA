<?php
$nama =$_GET['nama'];
$kelas =$_GET['kelas']
$id =$_GET['id']
$database = new PDO('mysql:host=localhost;dbname=mutu','root',"");
$query = $database->query("UPDATE `siswa` SET`id`='2' Where `id`='2'");