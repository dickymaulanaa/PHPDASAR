<?php 
$angka = [1,2,3,5,4,2]

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
      height: 50px;
      width: 50px;
      background-color: salmon;
      margin: 3px;
      text-align: center;
      line-height: 50px;
      float: left;
    }
    .clear {
      clear: both;
    }
  </style>
  <body>
    <?php for($i =0 ; $i < count($angka) ;$i++) {?>
    <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach( $angka as $i) : ?>
    <div class="kotak"><?= $i ; ?></div>
    <?php endforeach?>
  </body>
</html>
