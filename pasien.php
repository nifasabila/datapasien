<?php
include("koneksi.php");
?>
<html>
<head>
</head>
<body>
  <h1>Data Pasien </h1>
  <h4> <a href=index.php> ke Halaman Utama</a></h4>
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
$sql='SELECT * FROM tb_pasien';
$query = mysqli_query($koneksi, $sql);

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