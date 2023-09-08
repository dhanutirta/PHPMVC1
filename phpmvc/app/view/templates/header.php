<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Halaman <?= $data['judul']?></title>
</head>
<body>
  </nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= BASE_URL; ?>"><i><b>Suggestiawan.</b></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
</button>
    <ul style="font-weight: bold;" class="navbar-nav">
    <a class="nav-link" href="<?= BASE_URL; ?>/home">Home <span class="sr-only">(current)</span></a>
    <a class="nav-link" href="<?= BASE_URL; ?>/jurusan">Jurusan <span class="sr-only">(current)</span></a>
    <a class="nav-link" href="<?= BASE_URL; ?>/guru">Data Guru</a>
    <a class="nav-link" href="<?= BASE_URL; ?>/siswa">Data Siswa</a>
    <a class="nav-link" href="<?= BASE_URL; ?>/user/profile">About</a>
    </ul>
  </div>
</nav>