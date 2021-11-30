# Perpus_native

<?php
    if ($_GET['id_siswa']) {
        include "koneksi.php";
        $query_hapus = mysqli_query($koneksi, "DELETE FROM siswa where id_siswa = '".$_GET['id_siswa']."'");
        if ($query_hapus) {
            // echo "berhasil";
            echo "<script> alert('Berhasil dihapus'); location.href='tampil_siswa.php'; </script>";
        }
        else{
            // echo "gagal";
            echo "<script> alert ('Gagal dihapus'); location.href='tampil_siswa.php'; </script>";
        }
    }
    else{
        echo "id_tidak ada";
    }
?>
