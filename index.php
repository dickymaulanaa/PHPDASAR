<?php 
$nama_depan ="dicky ";
$nama_belakang ="maulana";

$nama = "dicky";
$nama .= " ";
$nama .= "maulana"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1> hello <?php echo $nama_depan ." ". $nama_belakang  ?> 
    <h1> hello <?php echo $nama?> 
    <br/>
    <?php var_dump(1 > 5) ?>
<br/>
<?php 
    $x= 30;
    var_dump($x <20 && $x % 2 ==0); // false
    var_dump($x <20 || $x % 2 ==0); // true
    ?>
</body>
</html>