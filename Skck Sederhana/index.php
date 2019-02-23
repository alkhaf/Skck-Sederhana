<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulir</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>
    <div class="saran">
        <a href="saran.php">Saran</a>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4" style="margin: 0 auto">
                <h1 style="text-align: center">Formulir Pengajuan Surat Kuning</h1>
                <form method="POST" action="simpan.php">
                    <table >
                        <tr>
                            <td>NIK</td>
                            <td colspan="3"><input type="text" name="nik"></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td colspan="3"><input type="text" name="nama"></td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td><input type="text" name="temlahir"></td>
                            <td>Tgl Lahir</td>
                            <td><input type="date" name="tgllahir"></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td colspan="3"><input type="text" name="alamat"></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td colspan="3">
                                <select name="kelamin">
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td colspan="3">
                                <select name="status">
                                    <option value="Lajang">Lajang</option>
                                    <option value="Menikah">Menikah</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td colspan="3">
                                <select name="agama">
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buda">Buda</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>SD</td>
                            <td><input type="text" name="sd"></td>
                            <td>Tahun</td>
                            <td><input type="date" name="sdtahun"></td>
                        </tr>
                        <tr>
                            <td>SMP</td>
                            <td><input type="text" name="smp"></td>
                            <td>Tahun</td>
                            <td><input type="date" name="smptahun"></td>
                        </tr>
                        <tr>
                            <td>SMA</td>
                            <td><input type="text" name="sma"></td>
                            <td>Tahun</td>
                            <td><input type="date" name="smatahun"></td>
                        </tr>
                        <tr>
                            <td>Perguruan Tinggi</td>
                            <td><input type="text" name="kuliah"></td>
                            <td>Tahun</td>
                            <td><input type="date" name="kuliahtahun"></td>
                        </tr>
                        <tr>
                            <td>Keterampilan 1</td>
                            <td colspan="3"><input type="text" name="ket1"></td>
                        </tr>
                        <tr>
                            <td>Keterampilan 2</td>
                            <td colspan="3"><input type="text" name="ket2"></td>
                        </tr>
                        <tr>
                            <td >Keterampilan 3</td>
                            <td colspan="3"><input type="text" name="ket3"></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align: center"><button type="submit">Simpan</button><button type="reset">Hapus</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>