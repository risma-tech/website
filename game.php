<?php
$angka_acak =rand(1,100);

if (isset($_POST['jawaban'])) {
    $jawaban = $_POST['jawaban'];

    if($jawaban == $angka_acak){
        echo "Selamat! Anda berhasil menebak angka!";
    }else {
        echo "Sayang sekali! jawaban anda salah.Coba lagi!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAME TEBAK ANGKA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Game Tebak Angka</h1>
    <p>Saya telah memikirkan sebuah angka antara 1 dan 100. coba tebak!</p>
    <form action="" method="post">
        <input type="number" name="jawaban" requered>
        <button type="submit" class="btn btn-dark">TEBAK</button>
</form>
</body>
</html>
