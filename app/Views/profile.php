<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ini halaman profil</title>
     <link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>">
</head>
<body>
    
<div class="profile-box">
<img src="<?=base_url("assets/img/adhis.png")?>" alt="" width="200px">

    <p class="profile-info">
        <strong>Nama:</strong> <?= $nama ?>
    </p>
    <p class="profile-info">
        <strong>Kelas:</strong> <?= $kelas ?>
    </p>
    <p class="profile-info">
        <strong>NPM:</strong> <?= $npm ?>
    </p>
    </div>
</body>
</html>
