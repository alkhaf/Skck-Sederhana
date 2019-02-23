<?php
include_once 'db.php';

if(isset($_POST['cari'])){
    $id = $_POST['cari'];
    $sql = "SELECT *
            FROM `pengaju`
            WHERE `id` = $id";

    $data = $db->query($sql)->fetchAll();
}
else{
    $sql = "SELECT *
            FROM `pengaju`";

    $data = $db->query($sql)->fetchAll();
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Daftar Pengaju</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6" style="margin: 0 auto;">
                <h1 style="text-align: center;">Daftar Pengaju</h1>
                <table>
                    <thead>
                        <tr>
                            <form action="list.php" method="post">
                                <td colspan="6"><input type="text" name="cari"></td>
                                <td><input type="submit" value="Cari"></td>
                            </form>
                        </tr>
                        <tr>
                            <th>No Pendaftar</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data as $d): ?>
                            <tr>
                                <td><?php echo $d['id']; ?></td>
                                <td><?php echo $d['nik']; ?></td>
                                <td><?php echo $d['nama']; ?></td>
                                <td><?php echo $d['tgllahir']; ?></td>
                                <td><?php echo $d['kelamin']; ?></td>
                                <td><?php echo $d['status']; ?></td>
                                <td><button role="button" onclick="window.location.href='detail.php?id=<?php echo $d['id'] ?>'">Detail</button></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>