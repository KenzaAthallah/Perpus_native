# Perpus_native

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Buku</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <?php
        include "navbar.php";
        include "koneksi.php";
        $query_buku = mysqli_query($koneksi, "select * from buku where id_buku='".$_GET['id_buku']."'");
        $data_buku = mysqli_fetch_array($query_buku);
    ?>
    <br></br>
    <div class="container">
        <div class="card">
            <h1 class="card-header">Ubah Buku</h1>
            <div class="card-body">
                <form method="POST" action="proses_Ubah_buku.php" enctype="multipart/form-data">
                    <input type="hidden" name="id_buku" value="<?=$data_buku['id_buku']?>">
                    <div class="mb-3">
                        <label for="nama_buku" class="form-label">Nama Buku</label>
                        <input type="text" class="form-control" name="nama_buku" value="<?=$data_buku['nama_buku']?>" placeholder="Masukkan Nama Buku" required>
                    </div>
                    <div class="mb-3">
                        <label for="pengarang" class="form-label">Pengarang</label>
                        <input type="text" class="form-control" name="pengarang" value="<?=$data_buku['pengarang']?>" placeholder="Masukkan Nama Pengarang" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" row="3" placeholder="Masukkan Deskripsi Buku" required><?=$data_buku['deskripsi']?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <img src="foto/<?=$data_buku['foto']?>" width=100>
                        <input type="file" class="form-control" name="foto" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
