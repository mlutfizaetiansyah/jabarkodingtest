<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= BASEURL, PORT, LOCATION; ?>/style.css">
  <link rel="icon" type="<?= BASEURL, PORT, LOCATION; ?>/image/png" href="logo.png">
  <title>KongDjie Coffee</title>
</head>

<body>

  <!-- Navbar  -->
  <section class="home" id="home">
    <div class="toggle" onclick="toggleMenu();"></div>
    <div class="navbar center">
      <ul>
        <img src="img/logo.png" class="logo">
        <p> cv. kongdjie hamparan rasa </p><br>
        <li><a href="#home" onclick="toggleMenu();">Home</a></li>
        <li><a href="#profile">PROFILE</a></li>
        <li><a href="#Produk">product</a></li>
        <li><a href="#franchise">FRANCHISE</a></li>
        <li><a href="#about" onclick="toggleMenu();">about</a></li>
        <li><a href="#location" onclick="toggleMenu();">location</a></li>
        <li><a href="#contact" onclick="toggleMenu();" ;>Contact</a></li></br>
        <img src="img/logorev.png">

        <div class="infomedsos">
          <img src="<?= BASEURL, PORT, LOCATION; ?>/img/0111-instagram.png" class="instagram">
          <p> kongdjieoffice </p>
          <img src="<?= BASEURL, PORT, LOCATION; ?>/img/031-facebook.png" class="facebook">
        </div>
        <div class="button">
          <a href="" class="btn tombol"> Contact Us </a><br>
        </div>
      </ul>
    </div>
  </section>

  <!-- Akhir Navbar -->
  <!-- about -->
  <section class="about" id="about">
    <div class="container">
      <div class="ornamen">
        <img src="img/Bijay Coffee Mid.png">
      </div>
      <div class="ornamen1">
        <img src="<?= BASEURL, PORT, LOCATION; ?>/img/Bijay Coffe Back Bawah.png">
      </div>
      <div class="mitra1">
        <h4> MITRA KEPERCAYAAN </h4>
        <P> Kami percaya kesempurnaan produk tergantung dari kualitasnya, kami percaya pula pertumbuhan serta </br> perkembangan kami ditentukan oleh bagaimana kami melayani konsumen dan mitra </br> usaha di tengah era inovasi teknologi sekarang ini.</P>
      </div>
      <div class="texbox">
        <p> SELALU MENJAGA RASA DAN KUALITAS</p>
      </div>
      <div class="isi">
        <p> Jaringan distribusi dan tenaga marketing kami yang terintegrasi dan profesional, </br> akan selalu berusaha mewujudkan semua kebutuhan dan keinginan konsumen dalam produk-produk yang inovatif, </br>bermanfaat bagi konsumen dan juga menguntungkan bagi mitra usaha kami. Daerah Pemasaran Domestik.</p>
        <p>Produk-produk Kong Djie telah tersebar di outlet-outlet seluruh kota di Indonesia. </br> Penyebaran tidak hanya ke kota-kota tetapi telah sampai ke pelosok desa, berkat kerjasama mitra kerja.</p>
      </div>
    </div>
  </section>
  <!-- akhir about -->

  <!-- Location -->
  <section class="location" id="location">
    <div class="jumbotron">
      <div class="container">
        <h3 class="display-4">Info lokasi mitra kongdjie coffee</h3>
        <div class="backlog">
          <img class="gambar" src="<?= BASEURL, PORT, LOCATION; ?>/img/gawean1.png">
        </div>
        <div class="tekswilayah">
          <div class="row">
            <div class="col ml-4 text-left">
              <a class="wilayah1" href="#">JABODETABEK</a></br>
              <a class="wilayah1" href="#">JAWA BARAT</a></br>
              <a class="wilayah1" href="#">JAWA TENGAH</a></br>
              <a class="wilayah1" href="#">JAWA TIMUR</a></br>
              <a class="wilayah1" href="#">BALI</a></br>
              <a class="wilayah1" href="#">ACEH</a></br>
              <a class="wilayah1" href="#">SUMATERA UTARA</a></br>
              <a class="wilayah1" href="#">SUMATERA BARAT</a></br>
              <a class="wilayah1" href="#">SUMATERA SELATAN</a></br>
              <a class="wilayah1" href="#">RIAU</a></br>
              <a class="wilayah1" href="#">JAMBI</a></br>
              <a class="wilayah1" href="#">BENGKULU</a></br>
              <a class="wilayah1" href="#">LAMPUNG</a></br>
              <a class="wilayah1" href="#">NUSA TENGARA TIMUR</a></br>
              <a class="wilayah1" href="#">NUSA TENGARA BARAT</a></br>
              <a class="wilayah1" href="#">KEP. RIAU</a></br>
            </div>
            <div class="col mr-4 text-right">
              <a class="wilayah2" href="#">KEP. BANGKA</a></br>
              <a class="wilayah2" href="#">KALIMANTAN UTARA</a></br>
              <a class="wilayah2" href="#">KALIMANTAN SELATAN</a></br>
              <a class="wilayah2" href="#">KALIMANTAN BARAT</a></br>
              <a class="wilayah2" href="#">KALIMANTAN TENGAH</a></br>
              <a class="wilayah2" href="#">SULAWESI UTARA</a></br>
              <a class="wilayah2" href="#">SULAWESI BARAT</a></br>
              <a class="wilayah2" href="#">SULAWESI TENGAH</a></br>
              <a class="wilayah2" href="#">SULAWESI SELATAN</a></br>
              <a class="wilayah2" href="#">SULAWESI TENGGARA</a></br>
              <a class="wilayah2" href="#">GORONTALO</a></br>
              <a class="wilayah2" href="#">MALUKU</a></br>
              <a class="wilayah2" href="#">MALUKU UTARA</a></br>
              <a class="wilayah2" href="#">PAPUA BARAT</a></br>
              <a class="wilayah2" href="#">PAPUA</a></br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhit Location -->

  <!-- Contact  -->
  <section class="contact" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="contact1">
            <img src="<?= BASEURL, PORT, LOCATION; ?>/img/pin-512.png" class="float-left">
            <p>Taman Palem Mutiara Blok B7 no.30</br>
              Cengkareng Timur, Jakarta Barat</p>
          </div>
          <div class="contact1">
            <img src="<?= BASEURL, PORT, LOCATION; ?>/img/email.png" class="float-left" id="email">
            <p>kngdjcr43@gmail.com</p>
          </div>
          <div class="contact1">
            <img src="<?= BASEURL, PORT, LOCATION; ?>/img/PHONE.png" class="float-left">
            <p>(021-22654327)</p>
          </div>
          <div class="contact1">
            <img src="<?= BASEURL, PORT, LOCATION; ?>/img/003-whatsapp.png" class="float-left">
            <p>(+62-12334567891011)</p>
          </div>
        </div>
        <div class="col-sm">
          <div class="contactmid">
            <a class="cmid" href="#home">HOME</a></br>
            <a class="cmid" href="#profile">PROFILE</a></br>
            <a class="cmid" href="#Produk">PRODUK</a></br>
            <a class="cmid" href="#">FRANCHISE</a></br>
            <a class="cmid" href="#about">ABOUT</a></br>
            <a class="cmid" href="#location">LOCATION</a></br>
            <a class="cmid" href="#contact">CONTACT</a></br>
          </div>
        </div>
        <div class="col-sm">
          <div class="sertifikat">
            <p>SERTIFIKAT</p>
            <div class="box">
              <img src="<?= BASEURL, PORT, LOCATION; ?>/img/100PERSERN.png">
              <img src="<?= BASEURL, PORT, LOCATION; ?>/img/mui.png" id="mui">
              <img src="<?= BASEURL, PORT, LOCATION; ?>/img/VPOM.png" id="bpom">
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!--Akhir Contact  -->

  <!-- Copyright -->
  <footer>
    <div class="footer">
      <p>KongDjieCoffee&copy;Copyright2021</p>
    </div>
  </footer>
  <!-- Akhir Copyright -->
  <script type="text/javascript">
    window.addEventListener('scroll', function() {
      var header = document.querySelector('header');
      header.classList.toggle('sticky', window.scrollY > 0);
    });

    function toggleMenu() {
      var menuToggle = document.querySelector('.toggle');
      var menu = document.querySelector('.menu');
      menuToggle.classList.toggle('active');
      menu.classList.toggle('active');
    }
  </script>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>