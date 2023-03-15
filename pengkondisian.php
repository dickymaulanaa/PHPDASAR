<?php
//pengkondisian 
//if else
// if else if else
// ternary
// switch 
 
// $x = 20;

// if($x > 10){
//     echo "benar";
// }else{
//     echo "salah";
// }
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    .warna-baris {
        background-color : silver;
    }

</style> 
</head>
 
 <body>
      <table border="1" cellspacing="10" cellpadding="10">
  <?php
     for ($i= 1 ; $i<=3 ;$i++) 
     : ?>
    <tr>
        <?php 
        for ($j=1; $j <=5 ; $j++) : ?> 
            <td>
            <?= $j,$i; ?> 
        </td>
        <?php endfor?>
        </tr> 
        <?php  endfor?>

    </table>
 </body>
 </html>