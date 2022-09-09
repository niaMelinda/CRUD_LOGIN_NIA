<?php

$dbh = new PDO ('mysql:host=localhost;dbname=mutu',"root","");
$query = $dbh->query('DELETE FROM siswa where id=111111');
