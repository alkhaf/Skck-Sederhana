<?php
include_once 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM `pengaju` WHERE `pengaju`.`id` = $id";

$db->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hapus Berhasil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>
    <div class="container-fluid">
        <div class="row" style="height: 100vh">
            <div class="col-4" style="margin: auto auto; text-align: center; border: solid #222 1px; padding: 10px">
                <h1>Data telah terhapus</h1>
                <button role="button" onclick="window.location.href='list.php'">Kembali</button>
            </div>
        </div>
    </div>
</body>
</html>