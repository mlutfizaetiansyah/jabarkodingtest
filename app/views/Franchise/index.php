<!-- <!doctype html> -->
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->


    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"> -->
    <!-- <LInk rel="stylesheet" href="<?= BASEURL, PORT, LOCATION ?>/css/bootstrap.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <LInk rel="stylesheet" href="<?= BASEURL, PORT, LOCATION ?>/css/franchise.css">
    <link rel="icon" type="image/png" href="<?= BASEURL, PORT, LOCATION ?>/img/logo.png">
    <!-- <script scr="<?= BASEURL, PORT, LOCATION ?>/js/jquery-3.6.0.min.js"> -->
    <!-- </script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>


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
                    <a class="nav-link" href="<?= BASEURL, PORT, LOCATION ?>/#home">home</a>
                    <a class="nav-link" href="<?= BASEURL, PORT, LOCATION ?>/#profile">profile</a>
                    <a class="nav-link" href="<?= BASEURL, PORT, LOCATION ?>/#product">product</a>
                    <a class="nav-link" href="<?= BASEURL, PORT, LOCATION ?>/#franchise">franchise</a>
                    <a class="nav-link" href="<?= BASEURL, PORT, LOCATION ?>/#about1">about</a>
                    <a class="nav-link" href="<?= BASEURL, PORT, LOCATION ?>/#location">location</a>
                    <a class="nav-link" href="<?= BASEURL, PORT, LOCATION ?>/#contact">Contact</a>
                </div>
            </div>
        </div>
    </nav>
    <?php
    // var_dump($data['Franchise']);
    ?>
    <!-- akhir navbar -->


    <!-- Jumbotron Header  -->

    <!-- Akhir Header -->

    <!-- Profile  -->

    <!-- Akhir Profile -->

    <!-- Product -->



    <!-- Akhir Product -->

    <!-- Franchise -->

    <!-- Akhir Franchise -->

    <!-- ABOUT -->

    <!-- Akhir Produk -->
    <style>

    </style>

    <!-- Location -->
    <h3 class="display-4 mt-5 text-center">Info lokasi mitra kongdjie coffee</h3>

    <div class="container mt-5">
        <table id="example" class="table table-striped table-bordered dt-responsive nowrap">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Toko</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($data['Franchise'] as $franchise) :
                ?>
                    <tr>
                        <th><?= $no++ ?></th>
                        <th><?= $franchise['namafranchise'] ?></th>
                        <th>
                          <textarea disabled name='' id='' cols='100' rows='4' >  <?= $franchise['alamat'] . " Desa/Kelurahan " . $franchise['desa'] . ", Kecamatan " . $franchise['kecamatan'] . ", " . $franchise['kabupaten'] . ", Provinsi " . $franchise['provinsi'] ?></textarea>
                        </th>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama Toko</th>
                    <th>Alamat</th>
                </tr>
            </tfoot>
        </table>
    </div>

    <!-- Akhit Location -->

    <!-- Contact  -->

    <!--Akhir Contact  -->




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <script scr="<?= BASEURL, PORT, LOCATION ?>/js/KongDjie1.js">
    </script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>