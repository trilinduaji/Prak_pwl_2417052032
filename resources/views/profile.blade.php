<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PROFILE MAHASISWA</title>

    @vite('resources/css/app.css')
</head>

<body>

    <div class="profile-container">

        <div class="profile-image">
            <img src="{{ asset('images/image.png') }}" alt="Foto Profil">
        </div>

        <div class="profile-data">
            {{ $nama }}
        </div>

        <div class="profile-data">
            {{ $kelas }}
        </div>

        <div class="profile-data">
            {{ $npm }}
        </div>

    </div>

</body>
</html>