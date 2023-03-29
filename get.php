<?php 
    // cek apakah tidak ada data di $_GET

    if(!isset($_GET["nama"])||
        !isset($_GET["nik"])||
        !isset($_GET["jurusan"])||
        !isset($_GET["email"])||
        !isset($_GET["foto"])
    
    ){
        //redirect
        header("Location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <ul>
        <li><img src="img/<?= $_GET["foto"]?>"></li>
        <li><?= $_GET["nama"] ?></li>
        <li><?= $_GET["nik"] ?></li>
        <li><?= $_GET["jurusan"] ?></li>
        <li><?= $_GET["email"] ?></li>
    </ul>

    <a href="index.php">kemblai</a>
</body>

</html>