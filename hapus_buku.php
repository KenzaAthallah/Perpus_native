# Perpus_native

<?php
    include "koneksi.php";

    $id_buku = $_GET['id_buku'];
    $folder = "foto/";

    // mendapatkan data buku yang diubah
    $sql = "select * from buku where id_buku='$id_buku'";
    # eksekusi perintah SQL
    $query = mysqli_query($koneksi, $sql);
    # konversi ke array
    $buku = mysqli_fetch_array($query);

    # proses hapus file yg lama
    $path = $folder.$buku["foto"];

    # cek eksistensi file yg akan dihapus
    if (file_exists($path)) {
        # jika file yg lama ada, maka kita hapus
        unlink($path);
    }

    $sql = "DELETE FROM buku where id_buku = '$id_buku'";

    $result = mysqli_query($koneksi,$sql);

    if ($result) {
        echo "<script>alert('Berhasil');location.href='tampil_buku.php';</script>";
    }
    else {
        echo "<script>alert('Gagal');</script>";
        echo mysqli_error($koneksi);
    }
?>
