<?php
    require_once('../conf.php');

    //tangkap inputan user
    $id_kategori = $_GET['id_kategori'];
    $nama_kategori = $_POST['nama_kategori'];

    //simpan query
    $query = "UPDATE kategori SET nama_kategori='$nama_kategori' WHERE id_kategori='$id_kategori'";

    if($query = mysqli_query($koneksi, $query)){
        header('location: ../index.php?status=success');
    } else {
        echo "Error: Terjadi Kesalahan?status=error";
    }
?>