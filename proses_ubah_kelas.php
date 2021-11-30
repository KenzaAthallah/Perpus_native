# Perpus_native

<?php
    $id_kelas = $_POST["id_kelas"];
    $nama_kelas = $_POST["nama_kelas"];
    $kelompok = $_POST["kelompok"];

    include "koneksi.php";
    $input = mysqli_query($koneksi, "UPDATE kelas SET nama_kelas='".$nama_kelas."',
    kelompok = '".$kelompok."' where id_kelas = '".$id_kelas."' ");

    if ($input) {
        echo "<script>alert('Berhasil');location.href='tampil_kelas.php';</script>";
    }
    else {
        echo "<script>alert('Gagal');location.href='tampil_kelas.php';</script>";
    }
?>
