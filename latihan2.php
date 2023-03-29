<?php 
$angka =[
    [1,2,4],
    [3,2,6],
    [9,5,3]
    ]
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <style>
    .kotak {
      width: 50px;
      height: 50px;
      background-color: red;
      line-height: 50px;
      text-align: center;
      float: left;
      transition: 1s;
      margin: 3px;
    }
    .kotak:hover {
      transform: rotate(360deg);
      border-radius: 50px;
    }
    .clear {
      clear: both;
    }
  </style>
  <body>
    <?php foreach($angka as $a) : ?>
    <?php foreach($a as $b) : ?>
    <div class="kotak"><?= $b  ?></div>
    <?php endforeach ?>
    <div class="clear"></div>
    <?php endforeach?>
  </body>
</html>
