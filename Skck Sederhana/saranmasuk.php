<?php
include_once 'db.php';


$sql = "SELECT *
        FROM `saran`";

$data = $db->query($sql)->fetchAll();

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
                            <th>No</th>
                            <th>Pengaju</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data as $d): ?>
                            <tr>
                                <td><?php echo $d['id']; ?></td>
                                <td><?php echo $d['pengaju']; ?></td>
                                <td><button role="button" onclick="window.location.href='sarandetail.php?id=<?php echo $d['id'] ?>'">Detail</button></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>