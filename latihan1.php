<?php 

$mahasiswa =[
    ["dicky", "412231","informatika", "mail@com"],
    ["oaja", "08512231","telekomunika", "ahoo@com"],
    ["lama", "12231","infomasi", "google@com"]
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($mahasiswa as $maha) :  ?>
        <ul>
            <li>Nama : <?=  $maha[0] ?> </li>
            <li>NIP : <?=  $maha[1] ?> </li>
            <li>Jurusan :  <?=  $maha[2] ?> </li>
            <li>Email:  <?=  $maha[3] ?> </li>
        </ul>
    <?php endforeach ?>
</body>
</html>