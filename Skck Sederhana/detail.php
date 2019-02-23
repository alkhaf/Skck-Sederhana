<?php
include_once 'db.php';

$id = $_GET['id'];

$sql = "SELECT * 
        FROM `pengaju`
        WHERE `id` = $id";

$d = $db->query($sql)->fetch();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Detail Pengaju</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <style>
        @media print{
            * {
                display: none;
            }
            #print{
                display: block;
                width: 100%;
            }
            #out{
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4" style="margin: 0 auto" id="print">
                <h1 style="text-align: center">Pengajuan Surat Kuning</h1>
                <table>
                    <tr>
                        <td>No Pendaftaran</td>
                        <td colspan="3"><input type="text" value="<?php echo $d['id']; ?>"></td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td colspan="3"><input type="text" value="<?php echo $d['nik']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td colspan="3"><input type="text" value="<?php echo $d['nama']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td><input type="text" value="<?php echo $d['temlahir']; ?>"></td>
                        <td>Tgl Lahir</td>
                        <td><input type="date" value="<?php echo $d['tgllahir']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td colspan="3"><input type="text" value="<?php echo $d['alamat']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td colspan="3">
                            <input type="text" value="<?php echo $d['kelamin']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td colspan="3">
                            <input type="text" value=<?php echo $d['status']; ?>>
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td colspan="3">
                            <input type="text" value="<?php echo $d['agama']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>SD</td>
                        <td><input type="text" value="<?php echo $d['sd']; ?>"></td>
                        <td>Tahun</td>
                        <td><input type="date" value="<?php echo $d['sdtahun']; ?>"></td>
                    </tr>
                    <tr>
                        <td>SMP</td>
                        <td><input type="text" value="<?php echo $d['smp']; ?>"></td>
                        <td>Tahun</td>
                        <td><input type="date" value="<?php echo $d['smptahun']; ?>"></td>
                    </tr>
                    <tr>
                        <td>SMA</td>
                        <td><input type="text" value="<?php echo $d['sma']; ?>"></td>
                        <td>Tahun</td>
                        <td><input type="date" value="<?php echo $d['smatahun']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Perguruan Tinggi</td>
                        <td><input type="text" value="<?php echo $d['kuliah']; ?>"></td>
                        <td>Tahun</td>
                        <td><input type="date" value="<?php echo d['kuliahtahun']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Keterampilan 1</td>
                        <td colspan="3"><input type="text" value="<?php echo $d['ket1']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Keterampilan 2</td>
                        <td colspan="3"><input type="text" value="<?php echo $d['ket2']; ?>"></td>
                    </tr>
                    <tr>
                        <td >Keterampilan 3</td>
                        <td colspan="3"><input type="text" value="<?php echo $d['ket3']; ?>"></td>
                    </tr>
                    <tr id="out">
                        <td colspan="4" style="text-align: center">
                            <button role="button" onclick="window.location.href='list.php'">Kembali</button>
                            <button role="button" onclick="window.print()">Print</button>
                            <button role="button" onclick="window.location.href='hapus.php?id=<?php echo $d['id']; ?>'">Hapus</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>