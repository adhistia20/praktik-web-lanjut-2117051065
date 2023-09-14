<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ini halaman profil</title>
    <style>
        body {
            background-color: #deb887; 
            color: #333;
            font-family: Helvetica, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .profile-box {
            background-color: #f0f0f0; 
            border: 1px solid #ddd;
            border-radius: 5px; 
            padding: 20px; 
            text-align: center; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        }
        .profile-img {
            width: 150px; 
            height: 150px; 
            border: 2px solid #333; 
            border-radius: 50%; 
            margin: 20px; 
            display: block; 
        }
        .profile-info {

            color: #555;
        }
    </style>
</head>
<body>
<div class="profile-box">
    <img class="profile-img" src="https://i.pinimg.com/236x/b7/2a/87/b72a87b7a89f91b3f1ae7350e01576cb.jpg" alt="Foto Profil">

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
