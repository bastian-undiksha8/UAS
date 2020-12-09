<?php
session_start();

// if (!isset($_SESSION["login"])) {
//     header("location: login.php");
//     exit;
// }
require 'function.php';

// cek apakah tombol submit sudah di pencet apa belum 
if (isset($_POST["submit"])) {


    //cek apakah data berhasil di tambahkan atau tidak 
    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert ('data berhasil ditambahkan!');
            document.location.href = 'index.php'
        </script>
        ";
    } else {
        echo "
        <script>
        alert ('data gagal ditambahkan!');
        document.location.href = 'index.php'
    </script>
    ";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="tambah.css">
    <title>TAMBAH DATA</title>
</head>

<body>
    <h4 class="text-center">TAMBAH DATA </h4>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="nik"> NIK :</label>
                <input type="text" name="nik" id="nik" required>
            </div>

            <div class="form-group">
                <label for="nama"> nama :</label>
                <input type="text" name="nama" id="nama" required>
            </div>
            <div class="form-group">
                <label for="email"> Email :</label>
                <input type="text" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="jasa"> JASA :</label>
                <input type="text" name="jasa" id="jasa" required>
            </div>
            <div class="form-group">
                <label for="gambar"> gambar :</label>
                <input type="file" name="gambar" id="gambar">
            </div>
            <div class="form-group">
                <button type="submit" name="submit">TAMBAH DATA</button>
            </div>

        </form>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>