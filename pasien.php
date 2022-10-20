<?php 
include 'koneksi.php';
?>

  <h1>Data Pasien </h1>
  <h4> <a href=index.php> ke Halaman Utama</a></h4>
<form action="pasien.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>

<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>

<?php
include("koneksi.php");?>
<html>
    <head>
        <title></title>
        <style>
                body{
              background-image: url('06da71a576bad3edf918a9ae8a82a3df.jpg');
              color: white;
              background-size: cover;
              background-position: center;
         text-align: center;
         height: 100%;
              font-family: arial;
            }
            </style>
</head>
<body>
    <table border="1">
      <tr>
          <th>id</th>
          <th>nama</th>
          <th>alamat</th>
          <th>Jk</th>
          <th>tempat_lahir</th>
          <th>tanggal_lahir</th>
          <th>agama</th>
          <th>no_telfon</th>
          <th>tanggal_masuk</th>
          <th>gejala</th>
          <th>no_kamar</th>
</tr>
<?php
include("koneksi.php");
if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $sql = "SELECT * FROM tb_pasien WHERE nama LIKE '%".$cari."%'";		
    $query = mysqli_query($koneksi, $sql);		
}else{
   $sql='SELECT *FROM tb_pasien';
   $query = mysqli_query($koneksi, $sql);		
}

while($pasien=mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>".$pasien['id']."</td>";
    echo "<td>".$pasien['nama']."</td>";
    echo "<td>".$pasien['alamat']."</td>";
    echo "<td>".$pasien['Jk']."</td>";
    echo "<td>".$pasien['tempat_lahir']."</td>";
    echo "<td>".$pasien['tanggal_lahir']."</td>";
    echo "<td>".$pasien['agama']."</td>";
    echo "<td>".$pasien['no_telfon']."</td>";
    echo "<td>".$pasien['tanggal_masuk']."</td>";
    echo "<td>".$pasien['gejala']."</td>";
    echo "<td>".$pasien['no_kamar']."</td>";
    echo "<td>";
    echo "<a href='edit-pasien.php?id=".$pasien['id']."'>Edit</a>|";
    echo "<a href='hapus-pasien.php?id=".$pasien['id']."'>Hapus</a>";
    echo "</td>";
    echo "</tr>";

}
?>
</table>
</body>
</html>
