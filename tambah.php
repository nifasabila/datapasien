<!DOCTYPE html>
<html lang="en">
<head>  
<title>From Pendaftaran Pasien Baru</title>
</head>
<body>
<center>
    <header>
    <h1>From Pendaftaran Pasien Baru</h1>
</header>
    <form action="proses_tambah.php" method="POST">
        <form>
            <fieldset>
                <p>
                    <label for="nama">Nama  : </label>
                    <input type="text" name="nama" />
</p>
                <p>
                    <label for="alamat">Alamat : </label>
                    <textarea name="alamat" row="5"></textarea>  
</p>
                <p>
                    <label for="Jk">Jenis Kelamin : </label>
                    <label><input type="radio" name="Jk" value="Laki-laki"/> Laki - laki </label>
                    <label><input type="radio" name="Jk" value="Perempuan"/> Perempuan </label>
</p>
<p>
                    <label for="tempat_lahir">Tempat Lahir : </label>
                    <input type="text" name="tempat_lahir" />
</p>
<p>
                    <label for="tanggal_lahir">Tanggal Lahir : </label>
                    <input type="date" name="tanggal_lahir" />
</p>
<p>
                    <label for="agama">Agama : </label>
                    <select name="agama" >
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katholik">Katholik</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Konghucu">Konghucu</option>
</select>
</p>
<p>
                    <label for="no_telfon">No Telfon : </label>
                    <input type="decimal" name="no_telfon"/>
</p>
<p>
                    <label for="tanggal_masuk">Tanggal Masuk : </label>
                    <input type="date" name="tanggal_masuk" />
</p>
<p>
                    <label for="gejala">Gejala : </label>
                    <input type="text" name="gejala" />
</p>
<p>
                    <label for="no_kamar">No Kamar : </label>
                    <input type="number" name="no_kamar" />
</p>
</p>
                <p>
                    <input type="submit" value="Tambah Pasien" name="tambah" />
</p>
</center>
</fieldset>
<form>
</body>
</html>