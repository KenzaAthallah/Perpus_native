# Perpus_native

<?php
    $id_buku = $_POST['id_buku'];
    $nama_buku = $_POST['nama_buku'];
    $pengarang = $_POST['pengarang'];
    $deskripsi = $_POST['deskripsi'];

    $temp = $_FILES['foto']['tmp_name'];
    $type = $_FILES['foto']['type'];
    $size = $_FILES['foto']['size'];
    $name = rand(0,9999).$_FILES['foto']['name'];
    $folder = "foto/";

    // echo $temp;
    // echo $type;
    // echo $size;
    // echo $name;

    include "koneksi.php";
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

    # upload file yg baru
    move_uploaded_file($temp, $folder . $name);

    # proses update data yg ada di database
    $sql = "update buku set nama_buku='$nama_buku',
    pengarang='$pengarang',deskripsi='$deskripsi',
    foto='$name' where id_buku='$id_buku'";

    # eksekusi perintah update
    $result = mysqli_query($koneksi,$sql);

    if ($result) {
        echo "<script>alert('Berhasil');location.href='tampil_buku.php';</script>";
    }
    else {
        echo "<script>alert('Gagal');</script>";
        echo mysqli_error($koneksi);
    }
    

    

?>
