<?php
include_once 'db.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tmplahir = $_POST['temlahir'];
$tgllahir = $_POST['tgllahir'];
$alamat = $_POST['alamat'];
$kelamin = $_POST['kelamin'];
$status = $_POST['status'];
$agama = $_POST['agama'];
$sd = $_POST['sd'];
$sdtahun = $_POST['sdtahun'];
$smp = $_POST['smp'];
$smptahun = $_POST['smptahun'];
$sma = $_POST['sma'];
$smatahun = $_POST['smatahun'];
$kuliah = $_POST['kuliah'];
$kuliahtahun = $_POST['kuliahtahun'];
$ket1 = $_POST['ket1'];
$ket2 = $_POST['ket2'];
$ket3 = $_POST['ket3'];

$sql = "SELECT `id` FROM `pengaju` ORDER BY `id` DESC LIMIT 1";

$id = $db->query($sql)->fetch();

$dateId = (int)substr($id['id'], 0, 8);
$orderId = (int)substr($id['id'], 8, 12);
$id = null;

if((int)$dateId < (int)date('dmY')){
    $id = date('dmY') . '00001';
}
else{
    $dateNow = date('dmY');
    $newOrderId = $orderId + 1;
    $id = $dateNow . str_pad($newOrderId, 5, '0', STR_PAD_LEFT);
}

$sql = "INSERT INTO `pengaju` (`id`, `nik`, `nama`, `temlahir`, `tgllahir`, `alamat`, `kelamin`, `status`, `agama`, `sd`, `sdtahun`, `smp`, `smptahun`, `sma`, `smatahun`, `kuliah`, `kuliahtahun`, `ket1`, `ket2`, `ket3`) 
        VALUES ('$id', '$nik', '$nama', '$tmplahir', '$tgllahir', '$alamat', '$kelamin', '$status', '$agama', '$sd', '$sdtahun', '$smp', '$smptahun', '$sma', '$smatahun', '$kuliah', '$kuliahtahun', '$ket1', '$ket2', '$ket3')";

$db->exec($sql);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulir Terkirim</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>
    <div class="container-fluid">
        <div class="row" style="height: 100vh">
            <div class="col-4" style="margin: auto auto; text-align: center; border: solid #222 1px; padding: 10px">
                <h1>Formulir telah terkirim</h1>
                <p>Mohon segera ke kantor kepegawaian untuk menunjukan dokuemen tambahan dan mengambil surat kuning dengan ID:</p>
                <h2><?php echo $id; ?></h2>
            </div>
        </div>
    </div>
</body>
</html>