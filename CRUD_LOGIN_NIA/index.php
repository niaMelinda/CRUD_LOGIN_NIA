<?php

session_start();
if(!isset($_SESSION["username"])) {// jika ada session username
    header("Location:from_login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
</body>
</html>

<?php
 $db= new PDO ('mysql:host=localhost;dbname=rumah_sakit','root','');
 $query = $db->query('select * from tbuser');

 while ($data = $query->fetch() ) :?>
    <p>
        <a href="edit.php?id=<?= $data['id']; ?>">
            <?= $data['username'] ?>
        </a>
        
        <a href="proses_hapus.php?id=<?= $data['id']; ?>" style="color:white;background:red;padding:2px;border-radius:3px">
            Hapus
        </a>
    </p>
<?php endwhile ?>
        <a herf="hapus_login.php">Logout</a>