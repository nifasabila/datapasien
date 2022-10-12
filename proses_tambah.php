<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $Jk=$_POST['Jk'];
    $tempat_lahir=$_POST['tempat_lahir'];
    $tanggal_lahir=$_POST['tanggal_lahir'];
    $agama=$_POST['agama'];
    $no_telfon=$_POST['no_telfon'];
    $tanggal_masuk=$_POST['tanggal_masuk'];
    $gejala=$_POST['gejala'];
    $no_kamar=$_POST['no_kamar'];

    $sql = "INSERT INTO tb_pasien(nama, alamat, Jk, tempat_lahir, tanggal_lahir, agama, no_telfon, tanggal_masuk, gejala, no_kamar) VALUES ('$nama', '$alamat', '$Jk', '$tempat_lahir', '$tanggal_lahir', '$agama', '$no_telfon', '$tanggal_masuk', '$gejala', '$no_kamar')";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header('Location:index.php?status=sukses');
    }else{
        header('Location:index.php?status=gagal');
    }
    }
?>