<?php
$koneksi = mysqli_connect("localhost","root","","rumahsakit");
if (isset($_POST['kirim'])) {
    $id_pasien = $_POST['id_pasien'];
    $no_ktp = $_POST['no_ktp'];
    $nama_pasien = $_POST['nama_pasien'];
    $jk = $_POST['jk'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $no_telepon = $_POST['no_telepon'];
    $jpemb = $_POST['jpemb'];

    $query = "INSERT INTO pendaftaran VALUES('$id_pasien', '$no_ktp', '$nama_pasien', '$ttl', '$alamat', '$no_telepon', '$jk', '$agama', '$jpemb')";

    mysqli_query($koneksi, $query);
   }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Pasien</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="wrap">
        <div class="container">
            <form action="" method="POST">
                <table>
                    <h3>Pendaftaran Pasien</h3>
                    <tr>
                        <td>No. Pendaftaran</td>
                        <td><input type="text" name="id_pasien"></td>
                    </tr>
                    <tr>
                        <td>No. KTP</td>
                        <td><input type="text" name="no_ktp"></td>
                    </tr>
                    <tr>
                        <td>Nama Pasien</td>
                        <td><input type="text" name="nama_pasien"></td>
                    </tr>
                    <tr>
                        <td>Tempat dan Tanggal Lahir</td>
                        <td><input type="varchar" name="ttl"></td>
                    </tr>
                    <tr>
                        <td class=>Alamat</td>
                        <td><textarea name="alamat" cols="30" rows="10"></textarea></td>
                    </tr>
                    <tr>
                        <td>No. Telepon</td>
                        <td><input type="text" name="no_telepon"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td><input type="radio" name="jk" value="Laki-laki">Laki-laki
                            <input type="radio" name="jk" value="Perempuan">Perempuan</td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>
                            <select name="agama">
                                <option>Islam</option>
                                <option>Kristen</option>
                                <option>Khatolik</option>
                                <option>Hindu</option>
                                <option>Budha</option>
                            </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Jenis Pembayaran</td>
                        <td><input type="radio" name="jpemb" value="Tunai">Tunai
                            <input type="radio" name="jpemb" value="BPJS">BPJS</td>
                    </tr>
                    <tr>
                        <td><button type="submit" name="kirim">Simpan</button>
                            <button type="reset" name="reset">Batal</button>
                        <td class="data_pasien">
                            <button><a href="data_pasien.php">Data Pasien</a></button>
                        </td>
                    </tr>

                </table>
            </form>
        </div>
    </div>
</body>
</html>