<?php 

$mahasiswa =[
    [
        "nama" =>
"dicky", "nik" => "412231", "jurusan" =>"informatika", "email" => "mail@com", "foto" => "a.jpg" ], [ "nama" =>
"rixky", "nik" => "12331", "jurusan" =>"informasi", "email" => "goog@com", "foto" => "b.png" ], ] ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <?php foreach($mahasiswa as $maha) :  ?>
    <ul>
      <li>
        <img src="img/<?= $maha["foto"] ?>" />
      </li>
      <li>
        Nama :
        <?=  $maha["nama"] ?>
      </li>
      <li>
        NIP :
        <?=  $maha["nik"] ?>
      </li>
      <li>
        Jurusan :
        <?=  $maha["jurusan"] ?>
      </li>
      <li>
        Email:
        <?=  $maha["email"] ?>
      </li>
    </ul>
    <?php endforeach ?>
  </body>
</html>
