# Perpus_native

<?php
    $id_siswa = $_POST['id_siswa'];
    $nama_siswa = $_POST["nama_siswa"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id_kelas = $_POST['id_kelas'];
    
    include "koneksi.php";
    $input = mysqli_query($koneksi, "UPDATE siswa SET nama_siswa='".$nama_siswa."', 
    tanggal_lahir='".$tanggal_lahir."', gender='".$gender."', alamat='".$alamat."',
    username='".$username."', password='".md5($password)."', id_kelas='".$id_kelas."' 
    where id_siswa = '".$id_siswa."'");

    if ($input) {
        echo "<script>alert('Berhasil');location.href='tampil_siswa.php';</script>";
    }
    else {
        echo "<script>alert('Gagal');location.href='tampil_siswa.php';</script>";
    }
?>
