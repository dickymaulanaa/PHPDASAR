<?php
//pengulangan 
//for
//while
// do..while
/// foreach : pengulangan khusus array


// for ($i=0; $i <5 ; $i++) { 
//     echo "hello Word <br/>"; // } 
// $i =0; 
// while ($i < 5){ // echo "hello word <br />"; 
    // $i++; // }
    
// $i = 10; 
// do { // echo "hello Word <br />"; 
// $i++; // } while ($i < 5); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <table border="1" cellpadding="10" cellspacing="10">
        <?php 
        for ($i=1; $i <=3 ; $i++) { 
            echo "<tr>";
            for ($j=1; $j <=5 ; $j++) { 
                echo "<td> $i, $j</td>";
            }
        }
        echo " </tr>"
          ?>
    </table>
<br>
    <table border="1" cellpadding="10" cellspacing="10">
        <?php
            for ($i=1; $i <=3 ; $i++) {  ?>
            <tr>
            <?php for($j=1;$j<=5;$j++) { ?>
                <td> <?php echo $j.",".$i; ?> </td>
            <?php }  ?>
            </tr>
            <?php } ?> 

    </table>
<br>
      <table border="1" cellspacing="10" cellpadding="10">
        <?php
            for ($i=1; $i <=3 ; $i++) :  ?>
            <tr>
            <?php 
            for($j=1;$j<=5;$j++) 
            : ?>
                <td> <?= $j,$i; ?> </td>
            <?php endfor  ?>
            </tr>
            <?php endfor ?> 

    </table>
  </body>
</html>
