<!-- <!doctype html> -->


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">

  <!-- <LInk rel="stylesheet" href="<?= BASEURL, PORT, LOCATION ?>/css/bootstrap.css"> -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
  <LInk rel="stylesheet" href="<?= BASEURL, PORT, LOCATION ?>/css/style2.css">
  <link rel="icon" type="image/png" href="<?= BASEURL, PORT, LOCATION ?>/img/logo.png">
  <!-- ini dari bulut -->
  <style type="text/css">
    #dt.dataTable.no-footer {
      border-bottom: unset;
    }

    #dt tbody td {
      display: block;
      border: unset;
    }

    #dt>tbody>tr>td {
      border-top: unset;
    }

    .dataTables_filter {
      float: left !important;
    }
  </style>
  <style>
    #more {
      display: none;
    }
  </style>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>


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
  <!-- Product -->
  <section class="product" id="product" style="margin-left: -50px;">
    <div class="container">
      <table id="dt" class="table w-100">
        <thead>
          <tr>
            <th>nama</th>
            <th>gender</th>
            <th>email</th>
            <th>address</th>
          </tr>
        </thead>
      </table>
    </div>
  </section>
  <!-- end container -->

  <script type="text/javascript">
    $(document).ready(function() {
      $("#dt thead").hide();
      var dt = $('#dt').DataTable({
        ajax: "http://localhost/kongdjie/public/HOME/Produkjson",
        bInfo: false,
        pageLength: 8,
        lengthChange: false,
        deferRender: true,
        processing: true,
        language: {
          paginate: {
            previous: "<",
            next: ">"
          },

        },
        columns: [{
            render: function(data, type, row, meta) {
              var html =
                `<div class="card shadow">` +
                `  <img src="<?= BASEURL, PORT, LOCATION ?>/img/` + row.gambar + `" class="card-img-top">` +
                `  <div class="card-body">` +
                `    <div class="card-text"><center>` + row.nama_produk + `</center></div>` +
                `    <div class="card-text">Deskripsi : ` + row.deskripsi + `</div>` +
                `    <div class="card-text">Harga yyy: Rp.` + row.harga + `</div>` +
                `  </div>` +
                `</div>`;
              return html;
            }
          },
          {
            data: "nama_produk",
            visible: false
          }
        ]
      });

      dt.on('draw', function(data) {
        $('#dt tbody').addClass('row');
        $('#dt tbody tr').addClass('col-lg-3 col-md-4 col-sm-12');
      });
    });
  </script>






  <!--Akhir Contact  -->




  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <!-- <script src="<?= BASEURL, PORT, LOCATION ?>/https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> -->
  <!-- <script> -->
  <script scr="<?= BASEURL, PORT, LOCATION ?>/js/KongDjie1.js">
  </script>



</body>

</html>