<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])) {

    // cek apakah data berhasil diubah atau tidak
if( ubah($_POST)> 0 ){
    echo "
    <script>
         alert('data berhasil diubah!');
         document.localtion.href = 'http://localhost/PTS%20WEB/pertemuan%2013/index.php';
    </script>
    ";    
} else {
    echo "
    <script>
         alert('data gagal diubah!');
         document.localtion.href = 'http://localhost/PTS%20WEB/pertemuan%2013/index.php';
    </script>
    "; 
}


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ubah data mahasiswa</title>
    <style>
        label {
            display: flex;
        }
    </style>
</head>
<body>
    <a href="index.php">kembali</a>
    <br>
    <h1>ubah data mahasiswa</h1>

<form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
    <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
   <ul>
    
    <li>
        <label for="nama">NAMA :</label>
        <input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>">
    </li>
    <li>
        <label for="nrp">NRP :</label>
        <input type="text" name="nrp" id="nrp"required value="<?= $mhs["nrp"]; ?>">
    </li>
    <li>
        <label for="email">email :</label>
        <input type="text" name="email" id="email" value="<?= $mhs["email"]; ?>">
    </li>
    <li>
    <label for="jurusan">JURUSAN :</label>
    <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>">
    </li>
    <li>
        <label for="gambar">GAMBAR :</label> <br>
        <img src="img/<?= $mhs['gambar']; ?>" width="60"> <br>
        <input type="file" name="gambar" id="gambar">
    </li>
    <li>
        <button type="submit" name="submit">ubah data </button>
    </li>
   </ul>

</form>
</body>
</html>