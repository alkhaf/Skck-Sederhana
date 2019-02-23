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
                <h1>Kotak Saran</h1>
                <form action="simpanpesan.php" method="POST">
                    <input type="text" name="pengaju" placeholder="Pengaju">
                    <textarea style="width: 100%; height: 200px;" name="pesan" placeholder="Pesan"></textarea>
                    <button type="submit" style="display: block; margin-top: 10px">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>