<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ini halaman profil</title>
     
</head>
<body>
    <form action="<?=base_url('/user/store') ?>" method="POST">
    <p>Nama: <input type="text" name="nama" /></p>
    <p>NPM: <input type="number" name="npm" /></p>
    <p>Kelas: <input type="text" name="kelas" /></p>
    <input type="submit" name="submit" value="submit" />
</form>
</body>
</html>
