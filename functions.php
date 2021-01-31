<?php
//connect to database
$conn = mysqli_connect("sql307.epizy.com", "epiz_27165294", "UdQeNprCWAa65V", "epiz_27165294_catatan");


function query($query){
    global $conn; // karena variabel didalam fungsi dengan yang diluar fungsi
    $result = mysqli_query($conn, $query); 
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;

    }
    return $rows;
}

function tambah($data){
        global $conn;
        //ambil data dari form
        $judul = htmlspecialchars($data["judul"]);
        $deadline =htmlspecialchars($data["deadline"]);

        $query = "INSERT INTO tugas VALUES
        ('', '$judul', '$deadline')  
        ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM tugas WHERE id= $id");
    return mysqli_affected_rows($conn);
}

?>