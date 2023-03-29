<?php 
   $mahasiswa =[
    [
        "nama" =>"dicky", 
        "nik" => "412231", 
        "jurusan" =>"informatika", 
        "email" => "mail@com", 
        "foto" => "a.jpg" ], 
    [ 
        "nama" =>"rixky", 
    "nik" => "12331", 
    "jurusan" =>"informasi",
    "email" => "goog@com",
    "foto" => "b.png" ], ]
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GET</title>
</head>

<body>
    <ul>
        <?php foreach($mahasiswa as $mhs) : ?>
        <li>
            <a href="get.php?nama= <?=$mhs["nama"]; ?>&nik=<?= $mhs['nik'];?>&jurusan=<?= $mhs["jurusan"];?>&email=<?= $mhs["email"];?>&foto=<?= $mhs["foto"] ?>
            ">
                <?= $mhs["nama"] ?>
            </a>
        </li>
        <?php endforeach ?>
    </ul>
</body>

</html>