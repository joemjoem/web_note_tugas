<?php
//connect to database
require 'functions.php';


if(isset($_POST["submit"])){

    if(tambah($_POST) > 0){
        echo " 
            <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';
            </script>
        ";
    }
    else{
        echo " 
        <script>
            alert('data gagal ditambahkan');
            document.location.href = 'index.php';
        </script>
    ";        
    }
}



?>

<!DOCTYPE html>

<html>
    <head>
        <title></title>
    </head>
    <link rel="stylesheet" href="hal2.css">
    <body>
        <form action="" method="post">
            <center><h3>input tugas</h3></center>
            <label for="judul">Judul tugas</label>
            <br>
            <input type="text" name="judul" id="judul" required>
            <br>
            <label for="deadline">deadline</label> <!--for agar saat text diklik maka otomatis kolom terbuka -->
            <br>
            <input type="text" name="deadline" id="deadline" required> <!--//id adalah pasangan dari for, jadi harus sama -->
            <br>
            <button type="submit" name="submit">simpan</button>
        </form>
    </body>
</html>