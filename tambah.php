<?php
require 'functions.php';

// cek apakah tombol submit sudah di tekan atau belum
if( isset($_POST["submit"])) {

    // cek apakah data berhasil di tambahkan atau tidak
if(tambah($_POST)> 0 ){
    echo "
    <script>
         alert('data berhasil ditambahkan!');
         document.location.href = 'index.php';
    </script>
    ";    
} else {
    echo "
    <script>
         alert('data gagal ditambahkan!');
         document.location.href = 'index.php';
    </script>
    "; 
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>tambah data mahasiswa</title>
    
</head>
<body>
    <h1>Tambah data mahasiswa</h1>
<form action="" method="post" enctype="multipart/form-data">  
   <ul>
    <li>
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama">
    </li>
    <li>
    <label for="nrp">NRP:</label>
    <input type="text" name="nrp" id="nrp" required>
    </li>
    
    <li>
        <label for="email">EMAIL :</label>
        <input type="text" name="email" id="email">
    </li>
    <li>
        <label for="jurusan">JURUSAN :</label>
        <input type="text" name="jurusan" id="jurusan">
    </li>
    <li>
        <label for="gambar">GAMBAR :</label>
        <input type="file" name="gambar" id="gambar">
    </li>
    <li>
        <button type="submit" name="submit">Tambah data </button>
    </li>
   </ul>

</form>
</body>
</html>