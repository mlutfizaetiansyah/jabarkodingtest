<!-- <!doctype html> -->
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <!-- <LInk rel="stylesheet" href="<?= BASEURL, PORT, LOCATION ?>/css/bootstrap.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <LInk rel="stylesheet" href="<?= BASEURL, PORT, LOCATION ?>/css/style2.css">
  <link rel="icon" type="image/png" href="<?= BASEURL, PORT, LOCATION ?>/img/logo.png">
  <!-- ini dari bulut -->
  <style>
    #more {
      display: none;
    }
  </style>
  <script scr="<?= BASEURL, PORT, LOCATION ?>/js/jquery-3.6.0.min.js">
  </script>

  <title>Kong Djie Coffe!</title>
</head>

<body>
  <!-- navbar -->
  <div class="logatas">
    <img src="<?= BASEURL, PORT, LOCATION ?>/img/logo.png">
    <p>CV. KONDJIE HAMPARAN RASA</p>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mx-auto">
          <a class="nav-link" href="#home">home</a>
          <a class="nav-link" href="#profile">profile</a>
          <a class="nav-link" href="#product">product</a>
          <a class="nav-link" href="#All">franchise</a>
          <a class="nav-link" href="#about1">about</a>
          <a class="nav-link" href="#location">location</a>
          <a class="nav-link" href="#contact">Contact</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->


  <!-- Jumbotron Header  -->
  <section class="home" id="home">
    <div class="jumbotron jumbotron-fluid">
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <img src="<?= BASEURL, PORT, LOCATION ?>/img/LogoKongDjieHome.png" alt="Logo-KongDjie">
          </div>
        </div>

        <div class="row justify-content-between info1">
          <div class="col-md-4 ">
            <p> Ingin Bermitra <br> Klik : </p>
            <a href="#All" class="btn btn-home btn1"> Join Us </a>
          </div>
          <div class="col-md-4">
            <a href="" class="btn btn-home btn2"> About Us </a>
          </div>
        </div>

        <div class="row">
          <div class="col-md-5">
            <a href="<?= $data['content'][0]['instagram'] ?>"><img src="<?= BASEURL, PORT, LOCATION ?>/img/0111-instagram.png" alt="instagram-Logo" class="instagram"></a>
          </div>
          <div class="col-md-2">
            <h4> kongdjieoffice </h4>
          </div>
          <div class="col-md-5">
            <a href="<?= $data['content'][0]['facebook'] ?>"><img src="<?= BASEURL, PORT, LOCATION ?>/img/031-facebook.png" alt="Facebook-Logo" class="facebook"></a>
          </div>
        </div>

        <!-- <div class="ornamen">
              <img src="img/Bijay Coffe Back Atas.png">
            </div>    
            <div class="ornamen1">
              <img src="img/Bijay Coffe Back Bawah.png">
            </div>  -->
      </div>
    </div>
  </section>
  <!-- Akhir Header -->

  <!-- Profile  -->
  <section class="profile" id="profile">
    <div class="container text-center">
      <div class="row">
        <div class="col-sm-6 paragraf">
          <p>Kong Djie Coffee merupakan usaha kopi yang berdiri sejak 1943 yang berlokasi di Tanjung Pandan , Belitung. Saat ini Kong Djie di dukung lebih 100 outlet cafe dan resto. Kong Djie berkomitmen untuk selalu memenuhi kebutuhan dan kepuasan konsumen, tidak hanya dengan menyediakan produk dengan kualitas terbaik, namun juga memberikan solusi yang tepat bagi setiap pangsa pasar kami.<span id="dots">...</span><span id="more"> Dengan pengalaman yang cukup mumpuni Kong Djie telah memiliki kepekaan untuk memberikan Kualitas dan rasa atas setiap kebutuhan konsumen yang terus berkembang. Pengetahuan ini membuat kami mampu untuk memberikan solusi yang tepat bagi mitra kami dalam memenuhi keinginan konsumen yang semakin kompleks. Seluruh Produk kami terjamin keamanan dan mutunya karena sebelum beredar telah diperiksa dan didaftarkan ke Balai Pengawasan Obat dan Makanan (BPOM).</span></p>
          <button class="btn viewdetail" onclick="myFunction()" id="myBtn">Read more</button>
          <!-- readmore -->
          <script>
            function myFunction() {
              var dots = document.getElementById("dots");
              var moreText = document.getElementById("more");
              var btnText = document.getElementById("myBtn");

              if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
              } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
              }
            }
          </script>
          <!-- readmore -->
          <!-- <button class="btn viewdetail" onclick="myFunction()" id="myBtn"> Read More </button> -->
        </div>

        <div class="col-sm-6">
          <img src="<?= BASEURL, PORT, LOCATION ?>/img/gawean1.png" alt="viewdetail" class="gambarprofile">
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12 vm">
          <h3> Visi & Misi </h3>
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6 visi">
          <p> MENJADI PERUSAHAAN TERBAIK YANG MAMPU MEMBERIKAN RASA YANG BERKUALITAS </p>
        </div>

        <div class="col-sm-6 misi">
          <p><a href=""> MANAJEMEN DENGAN INTEGRITAS TINGGI </a></p>
          <p><a href=""> MAMPU MEMPEROLEH LABA YANG BAIK </a></p>
          <p><a href=""> PENGABDIAN UNTUK RELASI DAN KONSUMEN </a></p>
          <p><a href=""> INOVASI TANPA HENTI </a></p>
          <p><a href=""> STANDAR ETIKA YANG TINGGI </a></p>
        </div>
      </div>
      <!-- <img src="img/bijay coffe menu prodile.png" id="ornamen2"> -->
    </div>
  </section>
  <!-- Akhir Profile -->

  <!-- Product -->
  <section class="product" id="product">
    <div class="container text-center">
      <div class="row">
        <?php foreach ($data['produk'] as $produk) : ?>
          <div class="col produk">
            <div class="card">
              <img src="<?= BASEURL, PORT, LOCATION ?>/img/<?= $produk['gambar'] ?>" class="card-img-top" alt="Gayo-Coffee">
              <div class="card-body">
                <h5 class="card-title"><?= $produk['nama_produk'] ?></h5>
                <p class="card-text"> Rp. <?= $produk['harga'] ?> ,- </p>
              </div>
              <div class="card-footer">
                <a href="" class="text-muted"> Order Now </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>


        <div class="col produk next">
          <p id="All"> All Product </p>
          <a href="<?= BASEURL, PORT, LOCATION ?>/HOME/Produk" class="text-muted"> Click Here --> </a>
        </div>
      </div>
    </div>
    <img src="<?= BASEURL, PORT, LOCATION ?>/img/Bijay Coffe Back Bawah.png" class="ornamen3" alt="Biji-Coffee">
  </section>


  <!-- Akhir Product -->

  <!-- Franchise -->
  <section class="franchise" id="franchise">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-10 info-franchise">
          <div class="row text-center">
            <div class="col-lg teks1">
              <p> Kami membuka peluang kerjasama dengan konsep kemitraan</p>
            </div>
            <div class="col-lg info2 text-center">
              <p> Hubungi Kami : </p>
              <a href="https://wa.me/<?= $data['content'][0]['wa'] ?>?text=">
                <img src="<?= BASEURL, PORT, LOCATION ?>/img/whatsapp.png" alt="WhatsApp">
              </a>
            </div>
            <div class="col-lg">
              <p> "Mari Bergabung dan Raihlah Kesuksesan Mu Bersama Kami" </p>
              <p> Salam Hangat "KongDjie" </p>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- Akhir Franchise -->

  <!-- ABOUT -->
  <section class="about1" id="about1">
    <div class="container text-center">
      <div class="row justify-content-center mb-3">
        <div class="col-md-6">
          <h4> MITRA KEPERCAYAAN </h4>
        </div>
      </div>
      <div class="row justify-content-center mb-3">
        <div class="col-md-8">
          <P> Kami percaya kesempurnaan produk tergantung dari kualitasnya, kami percaya pula pertumbuhan serta perkembangan kami ditentukan oleh bagaimana kami melayani konsumen dan mitra usaha di tengah era inovasi teknologi sekarang ini.</P>
        </div>
      </div>
      <div class="row justify-content-center mb-3">
        <div class="col-md-6 tag-line">
          <h4> SELALU MENJAGA RASA DAN KUALITAS </h4>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <p> Jaringan distribusi dan tenaga marketing kami yang terintegrasi dan profesional, akan selalu berusaha mewujudkan semua kebutuhan dan keinginan konsumen dalam produk-produk yang inovatif, bermanfaat bagi konsumen dan juga menguntungkan bagi mitra usaha kami. Daerah Pemasaran Domestik.</p>
        </div>
      </div>
      <div class="row justify-content-center mb-3">
        <div class="col-md-8">
          <p>Produk-produk Kong Djie telah tersebar di outlet-outlet seluruh kota di Indonesia. Penyebaran tidak hanya ke kota-kota tetapi telah sampai ke pelosok desa, berkat kerjasama mitra kerja.</p>
        </div>
      </div>
      <div class="row justify-content-center ">
        <div class="col-md-4">
          <a href="#All" class="btn join"> Join Us </a>
        </div>
      </div>
    </div>
    <div class="ornamen-mid">
      <img src="<?= BASEURL, PORT, LOCATION ?>/img/Bijay Coffee Mid.png" alt="Biji-Coffew">
    </div>
    <div class="ornamen-mid1">
      <img src="<?= BASEURL, PORT, LOCATION ?>/img/Bijay Coffe Back Bawah.png" alt="Biji-Coffee">
    </div>
    </div>
  </section>
  <!-- Akhir Produk -->

  <!-- Location -->
  <section class="location" id="location">
    <div class="container text-center">
      <h3 class="display-4">Info lokasi mitra kongdjie coffee</h3>
      <div class="row backlok justify-content-center">
        <div class="col">
          <img src="<?= BASEURL, PORT, LOCATION ?>/img/gawean1.png">
        </div>
      </div>
      <div class="row tekswilayah justify-content-center">
        <div class="col-4 text-left">
          <a class="wilayah1" href="<?= BASEURL, LOCATION, PORT ?>/Franchise/JABODETABEK">JABODETABEK</a>
          <a class="wilayah1" href="<?= BASEURL, LOCATION, PORT ?>/Franchise/JAWA-BARAT">JAWA BARAT</a>
          <a class="wilayah1" href="<?= BASEURL, LOCATION, PORT ?>/Franchise/JAWA-TENGAH">JAWA TENGAH</a>
          <a class="wilayah1" href="<?= BASEURL, LOCATION, PORT ?>/Franchise/JAWA-TIMUR">JAWA TIMUR</a>
          <a class="wilayah1" href="<?= BASEURL, LOCATION, PORT ?>/Franchise/BALI">BALI</a>
          <a class="wilayah1" href="<?= BASEURL, LOCATION, PORT ?>/Franchise/ACEH">ACEH</a>
          <a class="wilayah1" href="<?= BASEURL, LOCATION, PORT ?>/Franchise/SUMATERA-UTARA">SUMATERA UTARA</a>
          <a class="wilayah1" href="<?= BASEURL, LOCATION, PORT ?>/Franchise/SUMATERA-BARAT">SUMATERA BARAT</a>
          <a class="wilayah1" href="<?= BASEURL, LOCATION, PORT ?>/Franchise/SUMATERA-SELATAN">SUMATERA SELATAN</a>
          <a class="wilayah1" href="<?= BASEURL, LOCATION, PORT ?>/Franchise/RIAU">RIAU</a>
          <a class="wilayah1" href="<?= BASEURL, LOCATION, PORT ?>/Franchise/JAMBI">JAMBI</a>
          <a class="wilayah1" href="<?= BASEURL, LOCATION, PORT ?>/Franchise/BENGKULU">BENGKULU</a>
          <a class="wilayah1" href="<?= BASEURL, LOCATION, PORT ?>/Franchise/LAMPUNG">LAMPUNG</a>
          <a class="wilayah1" href="<?= BASEURL, LOCATION, PORT ?>/Franchise/NUSA-TENGARA-TIMUR">NUSA TENGARA TIMUR</a>
          <a class="wilayah1" href="<?= BASEURL, LOCATION, PORT ?>/Franchise/NUSA-TENGARA-BARAT">NUSA TENGARA BARAT</a>
        </div>
        <div class="col-4 text-right">
          <a class="wilayah2" href="<?= BASEURL, LOCATION, PORT ?>/Franchise/KEPULAUAN-BANGKA-BELITUNG">KEPULAUAN BANGKA BELITUNG</a>
          <a class="wilayah2" href="<?= BASEURL, LOCATION, PORT ?>/Franchise/KALIMANTAN-UTARA">KALIMANTAN UTARA</a>
          <a class="wilayah2" href="<?= BASEURL, LOCATION, PORT ?>/Franchise/KALIMANTAN-SELATAN">KALIMANTAN SELATAN</a>
          <a class="wilayah2" href="<?= BASEURL, LOCATION, PORT ?>/Franchise/KALIMANTAN-BARAT">KALIMANTAN BARAT</a>
          <a class="wilayah2" href="<?= BASEURL, LOCATION, PORT ?>/Franchise/KALIMANTAN-TENGAH">KALIMANTAN TENGAH</a>
          <a class="wilayah2" href="<?= BASEURL, LOCATION, PORT ?>/Franchise/SULAWESI-UTARA">SULAWESI UTARA</a>
          <a class="wilayah2" href="<?= BASEURL, LOCATION, PORT ?>/Franchise/SULAWESI-BARAT">SULAWESI BARAT</a>
          <a class="wilayah2" href="<?= BASEURL, LOCATION, PORT ?>/Franchise/SULAWESI-TENGAH">SULAWESI TENGAH</a>
          <a class="wilayah2" href="<?= BASEURL, LOCATION, PORT ?>/Franchise/SULAWESI-SELATAN">SULAWESI SELATAN</a>
          <a class="wilayah2" href="<?= BASEURL, LOCATION, PORT ?>/Franchise/SULAWESI-TENGGARA">SULAWESI TENGGARA</a>
          <a class="wilayah2" href="<?= BASEURL, LOCATION, PORT ?>/Franchise/GORONTALO">GORONTALO</a>
          <a class="wilayah2" href="<?= BASEURL, LOCATION, PORT ?>/Franchise/MALUKU">MALUKU</a>
          <a class="wilayah2" href="<?= BASEURL, LOCATION, PORT ?>/Franchise/MALUKU-UTARA">MALUKU UTARA</a>
          <a class="wilayah2" href="<?= BASEURL, LOCATION, PORT ?>/Franchise/PAPUA-BARAT">PAPUA BARAT</a>
          <a class="wilayah2" href="<?= BASEURL, LOCATION, PORT ?>/Franchise/PAPUA">PAPUA</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhit Location -->

  <!-- Contact  -->
  <section class="contact" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="contact1">
            <img src="<?= BASEURL, PORT, LOCATION ?>/img/pin-512.png" alt="Maps-Logo" class="float-left">
            <p><?= $data['content'][0]['alamat'] ?></p>
          </div>
          <div class="contact1">
            <img src="<?= BASEURL, PORT, LOCATION ?>/img/email.png" alt="Email-Logo" class="float-left" id="email">
            <p><?= $data['content'][0]['email'] ?></p>
          </div>
          <div class="contact1">
            <img src="<?= BASEURL, PORT, LOCATION ?>/img/PHONE.png" alt="Phone-Logo" class="float-left">
            <p>(<?= $data['content'][0]['notlp'] ?>)</p>
          </div>
          <div class="contact1">
            <img src="<?= BASEURL, PORT, LOCATION ?>/img/003-whatsapp.png" alt="WhatsApp" class="float-left">
            <p>(<?= $data['content'][0]['wa'] ?>)</p>
          </div>
        </div>

        <div class="col-md-2">
          <div class="contactmid">
            <a href="#home">HOME</a>
            <a href="#profile">PROFILE</a>
            <a href="#product">PRODUK</a>
            <a href="#franchise">FRANCHISE</a>
            <a href="#about1">ABOUT</a>
            <a href="#location">LOCATION</a>
            <a href="#contact">CONTACT</a>
          </div>
        </div>

        <div class="col-md-5 text-center">
          <div class="sertifikat">
            <p>SERTIFIKAT</p>
            <div class="box">
              <img src="<?= BASEURL, PORT, LOCATION ?>/img/100PERSERN.png" alt="100%-Indonesia" id="100indo">
              <img src="<?= BASEURL, PORT, LOCATION ?>/img/mui.png" alt="MUI" id="mui">
              <img src="<?= BASEURL, PORT, LOCATION ?>/img/VPOM.png" alt="BPOM" id="bpom">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer1">
      <h4> &copy; Copyright2021 <br> Make With &hearts; by KongDjieCoffee </h4>
    </div>
  </section>
  <!--Akhir Contact  -->




  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <!-- <script src="<?= BASEURL, PORT, LOCATION ?>/https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> -->
  <!-- <script> -->
  <script scr="<?= BASEURL, PORT, LOCATION ?>/js/KongDjie1.js">
  </script>


  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>