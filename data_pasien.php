<?php
    $koneksi = mysqli_connect("localhost","root","","rumahsakit");
    $hasil = mysqli_query($koneksi, "SELECT * FROM pendaftaran");
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Daftar pasien</title>
    </head>
    <body>
        <table align="center" border="1" cellspacing="0" cellpadding="10" >
        <caption><h1 style="color:white;">Daftar Pasien</h1></caption>
        <tr>
            <th>No. Pendaftaran</th>
            <th>No. KTP</th>
            <th>Nama Pasien</th>
            <th>Tempat dan Tanggal Lahir</th>
            <th>Alamat</th>
            <th>No. Telepon</th>
            <th>Jenis Kelamin</th>    
            <th>Agama</th>
            <th>Jenis Pembayaran</th>
        </tr>
        <?php while($row=mysqli_fetch_assoc($hasil)) : ?>
        <tr>
            <td><?= $row["id_pasien"]; ?></td>
            <td><?= $row["no_ktp"]; ?></td>
            <td><?= $row["nama_pasien"]; ?></td>
            <td><?= $row["ttl"]; ?></td>
            <td><?= $row["alamat"]; ?></td>
            <td><?= $row["no_telepon"]; ?></td>
            <td><?= $row["jk"]; ?></td>
            <td><?= $row["agama"]; ?></td>
            <td><?= $row["jpemb"]; ?></td>
        </tr>
        <?php endwhile; ?>
        </table>
    </body>
</html>