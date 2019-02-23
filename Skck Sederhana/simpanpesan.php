<?php
include_once 'db.php';

$pengaju = $_POST['pengaju'];
$pesan = $_POST['pesan'];
$date = date('dmY');

$sql = "INSERT INTO `saran` (`pengaju`, `pesan`, `tanggal`)
        VALUES ('$pengaju', '$pesan', '$date')";

$db->exec($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Saran</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 col-offset-4">
                <h1>Saran Terkirim</h1>
                <a href="index.php">Kembali</a>
            </div>
        </div>
    </div>
</body>
</html>