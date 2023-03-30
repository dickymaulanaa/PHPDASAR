<?php 
//CEK TOMBOL SUBMIT SUDAH DITEKAN ATAU BELUM 
    if(isset($_POST["submit"])){
        // CEK USERNAME DAN PASSWORD 
        if($_POST["username"] == "admin" && $_POST["password"] == "123"){
            // JIKA BENAR, REDIRECT KE HALAMAN ADMIN 
            header("Location : admin.php");
            exit;
        }else{
            // JIKA SALAH, TAMPILKAN PESAN ERROR
            $error = true;
        }
    }     
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
    <h1>Login Admin</h1>
    <?php if(isset($error)): ?>
    <p style="color:red">username / password salah
    <p>
        <?php endif ?>
    <form action="" method="POST">
        <label for="username">username </label>
        <input type="text" id="username" name="username" />
        <label for="password">password </label>
        <input type="password" id="password" name="password" />
        <button type="submit" name="submit">submit</button>
    </form>

</body>

</html>