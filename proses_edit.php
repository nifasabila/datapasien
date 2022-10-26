<?php
include('koneksi.php');
if(isset($_POST['edit'])){
    $kode=$_POST['id'];
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

$sql = "UPDATE tb_pasien SET nama='$nama', alamat='$alamat', Jk='$Jk', tempat_lahir='$tempat_lahir',  tanggal_lahir='$tanggal_lahir', agama='$agama', no_telfon='$no_telfon', tanggal_masuk='$tanggal_masuk', gejala='$gejala', no_kamar='$no_kamar' WHERE id=$kode";
$query = mysqli_query($koneksi, $sql);

if($query){
    header('Location: index.php');
}else{
    die ("gagal mengedit");
}}
else{
    die("akses dilarang");
}
?>