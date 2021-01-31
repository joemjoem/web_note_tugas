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
                            <option selected value="1">All</option>
                            <option selected value="2">Matematika 3</option>
                            <option selected value="3">Sinyal dan Sistem</option>
                            <option selected value="4">Sensor dan Aktuator</option>
                            <option selected value="5">Organisasi Mesin dan Bahasa Assembly</option>
                            <option selected value="6">Bahasa Pemrograman</option>
                            <option selected value="7">Algoritma dan Struktur Data</option>
                            <option selected value="8">Managemen dan Kewirausahaan</option>
                            <option selected value="9">Praktikum Sinyal dan Sistem</option>
                            <option selected value="10">Praktikum Sensor dan Aktuator</option>
                            <option selected value="11">Praktikum Organisasi Mesin dan Bahasa Assembly</option>
                            <option selected value="12">Praktikum Bahasa Pemrograman</option>
                            <option selected value="13">Praktikum Algoritma dan Struktur Data</option>
                        </select>
                        <button class="btn tanggal">21-01-2021</button>
                    </div>
                </div>
                <div class="tugas">
                    <div class="isi">
                        <div class="atas">
                            <h2>Tugas 1: Praktikum 3</h2>
                            <p>7 hari lagi</p>
                        </div>
                        <hr>
                        <div class="bawah">
                            <p>organisasi mesin dan bahasa assembly</p>
                            <div class="kanan">
                                <button class="btn btn-selesai">selesai</button>
                                <p class="deadline">deadline: 21-01-2021</p>
                            </div>
                        </div>
                    </div>

                    <div class="isi">
                        <div class="atas">
                            <h2>Tugas 1: Praktikum 3</h2>
                            <p>7 hari lagi</p>
                        </div>
                        <hr>
                        <div class="bawah">
                            <p>organisasi mesin dan bahasa assembly</p>
                            <div class="kanan">
                                <button class="btn btn-selesai">selesai</button>
                                <p class="deadline">deadline: 21-01-2021</p>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <br>
                <br>
            </div>
        </div>
    </div>

    <div class="kolom_tambah" id="kolom_tambahan">
        <h2>Tambah Tugas</h2>
        <form action="">
            <div class="form-group">
                <label for="">Judul Tugas</label>
                <input type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Deadline</label>
                <input type="text" class="form-control datepicker" id="tanggal" name="tanggal" placeholder="d-m-y">
            </div>

            <div class="form-group">
                <label for="">Mata Kuliah</label>
                <select name="matkul" id="" class="form-control">
                    <option selected value="1">pilih matkul</option>
                    <option value="2">Matematika 3</option>
                    <option value="3">Sinyal dan Sistem</option>
                    <option value="4">Sensor dan Aktuator</option>
                    <option value="5">Organisasi Mesin dan Bahasa Assembly</option>
                    <option value="6">Bahasa Pemrograman</option>
                    <option value="7">Algoritma dan Struktur Data</option>
                    <option value="8">Managemen dan Kewirausahaan</option>
                    <option value="9">Praktikum Sinyal dan Sistem</option>
                    <option value="10">Praktikum Sensor dan Aktuator</option>
                    <option value="11">Praktikum Organisasi Mesin dan Bahasa Assembly</option>
                    <option value="12">Praktikum Bahasa Pemrograman</option>
                    <option value="13">Praktikum Algoritma dan Struktur Data</option>
                </select>
                <button class="btn btn-kolom tambah">Tambah</button>
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