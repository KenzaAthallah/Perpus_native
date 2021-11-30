# Perpus_native

<?php
    // $id_kelas = $_GET['id_kelas'];
    if ($_GET['id_kelas']) {
        // echo $id_kelas;
        include "koneksi.php";
        $query_hapus = mysqli_query($koneksi, "DELETE FROM kelas where id_kelas = '".$_GET['id_kelas']."'");
        if ($query_hapus) {
            // echo "berhasil";
            echo "<script> alert('Berhasil dihapus'); location.href='tampil_kelas.php'; </script>";
        }
        else{
            // echo "gagal";
            echo "<script> alert ('Gagal dihapus'); location.href='tampil_kelas.php'; </script>";
        }
    }
    else{
        echo "id_tidak ada";
    }
?>
