<!Doctype html>
<head>
    <meta charset="UTF-8">
    <title>halaman <?= $data['judul'];?></title>
    <link rel="stylesheet" href="<?= BASEURL,PORT,LOCATION;?>/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <a class="navbar-brand" href="<?= BASEURL,PORT,LOCATION;?>/<?= $data['judul'];?>"><?= $data['judul'];?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?= BASEURL,PORT,LOCATION;?>/home/beranda">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL,PORT,LOCATION;?>/soal">Soal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL,PORT,LOCATION;?>/mahasiswa">Mahasiswa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL,PORT,LOCATION;?>/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
  </div>
  </div>
</nav>