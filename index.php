<?php
require 'functions.php';
$data = query("SELECT * FROM tugas");
if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil ditambahkan');
        document.location.href = 'index.php';
        </script>
        ";
    }

    echo "
    <script>
    alert('data gagal ditambahkan');
    document.location.href = 'index.php';
    </script>
    ";
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="style.css" media="all" rel="stylesheet" type="text/css">

    <!--uji coba-->
    <link type="text/css" href="datepicker/css/datepicker.css" rel="stylesheet">
    <!-- akhir uji coba-->
    <title>Web Note Tugas</title>
</head>

<body>
    <div class="card">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 offset-sm-1">
                    <h5 class="web">Web Note Tugas</h5>
                    <div class="profil">
                        <img class="foto" src="img/line_20679901153884 (2).jpg" alt="">
                        <h5>Bagus Jumantoro</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-10 offset-sm-1">
                <div class="banner">
                    <img src="img/Honors.jpg" alt="">
                </div>

                <div class="main">
                    <div class="tombol">
                        <button class="btn tambah" onclick="muncul()">+Tambah</button>
                        <select class="custom-select select" name="pilihan" id="pilihan">
                            <option selected value="1">pilih matkul</option>
                            <option value="Matematika 3">Matematika 3</option>
                            <option value="Sinyal dan Sistem">Sinyal dan Sistem</option>
                            <option value="Sensor dan Aktuator">Sensor dan Aktuator</option>
                            <option value="Organisasi Mesin dan Bahasa Assembly">Organisasi Mesin dan Bahasa Assembly</option>
                            <option value="Bahasa Pemrograman">Bahasa Pemrograman</option>
                            <option value="Algoritma dan Struktur Data">Algoritma dan Struktur Data</option>
                            <option value="Managemen dan Kewirausahaan">Managemen dan Kewirausahaan</option>
                            <option value="Praktikum Sinyal dan Sistem">Praktikum Sinyal dan Sistem</option>
                            <option value="Praktikum Sensor dan Aktuator">Praktikum Sensor dan Aktuator</option>
                            <option value="Praktikum Organisasi Mesin dan Bahasa Assembly">Praktikum Organisasi Mesin dan Bahasa Assembly</option>
                            <option value="Praktikum Bahasa Pemrograman">Praktikum Bahasa Pemrograman</option>
                            <option value="Praktikum Algoritma dan Struktur Data">Praktikum Algoritma dan Struktur Data</option>
                        </select>
                        <button class="btn tanggal">21-01-2021</button>
                    </div>
                </div>
                <div class="tugas">
                    <?php $i = 1; ?>
                    <?php foreach ($data as $row) : ?>
                        <div class="isi">
                            <div class="atas">
                                <h2>Tugas <?= $i ?>: <?= $row["judul"]; ?></h2>
                                <p>7 hari lagi</p>
                            </div>
                            <hr>
                            <div class="bawah">
                                <p><?= $row["mata_kuliah"]; ?></p>
                                <div class="kanan">
                                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('apakah yakin ingin menghapus?')" class="btn btn-selesai">selesai</a>
                                    <p class="deadline">deadline: <?= $row["deadline"]; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php $i++ ?>
                    <?php endforeach; ?>
                </div>

                <br>
                <br>
                <br>
            </div>
        </div>
    </div>

    <div class="kolom_tambah" id="kolom_tambahan">
        <h2>Tambah Tugas</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="">Judul Tugas</label>
                <input type="text" name="judul" id="judul" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Deadline</label>
                <input type="text" class="form-control datepicker" id="deadline" name="deadline" placeholder="d-m-y">
            </div>

            <div class="form-group">
                <label for="">Mata Kuliah</label>
                <select name="mata_kuliah" id="" class="form-control">
                    <option selected value="1">pilih matkul</option>
                    <option value="Matematika 3">Matematika 3</option>
                    <option value="Sinyal dan Sistem">Sinyal dan Sistem</option>
                    <option value="Sensor dan Aktuator">Sensor dan Aktuator</option>
                    <option value="Organisasi Mesin dan Bahasa Assembly">Organisasi Mesin dan Bahasa Assembly</option>
                    <option value="Bahasa Pemrograman">Bahasa Pemrograman</option>
                    <option value="Algoritma dan Struktur Data">Algoritma dan Struktur Data</option>
                    <option value="Managemen dan Kewirausahaan">Managemen dan Kewirausahaan</option>
                    <option value="Praktikum Sinyal dan Sistem">Praktikum Sinyal dan Sistem</option>
                    <option value="Praktikum Sensor dan Aktuator">Praktikum Sensor dan Aktuator</option>
                    <option value="Praktikum Organisasi Mesin dan Bahasa Assembly">Praktikum Organisasi Mesin dan Bahasa Assembly</option>
                    <option value="Praktikum Bahasa Pemrograman">Praktikum Bahasa Pemrograman</option>
                    <option value="Praktikum Algoritma dan Struktur Data">Praktikum Algoritma dan Struktur Data</option>
                </select>
                <button class="btn btn-kolom tambah" type="submit" name="submit">Tambah</button>
            </div>
        </form>
    </div>



    <!--file javascript-->
    <script src="script.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!--uji coba-->
    <script src="jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript">
        $(function() {
            $(".datepicker").datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true,
            });
        });
    </script>
    <!-- akhir uji coba-->
</body>

</html>