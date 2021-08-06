<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="container-fluid">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-3 col-6 connectedSortable">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <?php
          // var_dump($data);
          ?>
          <h3><?= $data['jumlahproduk'][0]['COUNT(id)'] ?></h3>

          <p>Total Produk</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="<?= BASEURL, PORT, LOCATION ?>/admin/Datatable" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3><?= $data['jumlahtoko'][0]['COUNT(id)'] ?><sup style="font-size: 20px"></sup></h3>

          <p>Jumlah Franchise</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="<?= BASEURL, PORT, LOCATION ?>/admin/Franchise" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3><?= $data['jumlahadmin'][0]['COUNT(id)'] ?></h3>

          <p>Jumlah User Admin</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="<?= BASEURL, PORT, LOCATION ?>/admin/User" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->

    </div>
    <!-- ./col -->
  </div>
  <div class="container-fluid">
    <!-- <div class="alert alert-warning" role="alert">
      <h4 class="alert-heading">User Admin</h4>
      <p>Disini tables yang di dalamnya terdapat Data admin untuk halaman dashboard Data Admin dimana anda dapat melakukan edit dan delete data. Pada Admin yang telah anda input</p>
      <hr>
      <p class="mb-0">1. Tombol update berfungsi untuk melakukan update data Admin anda</p>
      <hr>
      <p class="mb-0">2. Tombol delete berfungsi untuk menghapus Admin anda</p>
    </div> -->
    <!-- <div class="alert alert-danger" role="alert">
      <h4 class="alert-heading">Rule unutuk user admin</h4>
      <hr>
      <p class="mb-0">1. Level untuk memberikan peringkat hak akses pada web anda terdapat 2 level</p>
      <hr>
      <p class="mb-0">Level Admin: Adalah role user yang bisa membuat dan menghapus user admin lainya</p>
      <hr>
      <p class="mb-0">Level User: Adalah role user yang tidak bisa membuat dan menghapus user admin lainya</p>
    </div> -->
    <div class="alert alert-primary" role="alert">
      <h4 class="alert-heading">Form Input</h4>
      <p>Terdapat Form yang di dalamya ada From input untuk melakukan input data. Terdapat 3 hal yang dapat anda input yaitu updad produk, input data frenchise, input user</p>
      <hr>
      <p class="mb-0">1. Upload Produk</p>
      <p class="mb-0">Upload Produk ini berfumgsi untuk mengupload produk anda yang nantinya akan di tampilkan di halaman awal website</p>
      <hr>
      <p class="mb-0">2. Frenchise</p>
      <p class="mb-0">Frenchise ini berfumgsi untuk menginput data Frenchise anda yang nantinya akan di tampilkan di halaman awal website</p>
      <hr>
      <p class="mb-0">3. Input User</p>
      <p class="mb-0">berfungsi untuk anda memberikan akses login ke halaman ini</p>
    </div>
    <div class="alert alert-danger" role="alert">
      <h4 class="alert-heading">Rules untuk upluad data produk!</h4>

      <hr>
      <p class="mb-0">1. Pastikan gambar anda tidak melebihi ukuran dari 3mb ini di tabasi agar halaman website anda tidak lemot di akses dari client dengn koneksi rendah</p>
      <hr>
      <p class="mb-0">2. Pastikan format gambar yang anda upload untuk produk mengunakan .JPG,.JPEG,.PNG apa bila tidak maka data gambar tidak akan di upload</p>
      <hr>
      <p class="mb-0">3. Ini field toko online dengan link produk anda yang ada di toko online karana link itu yang akan di gunakan untuk redirect langsung ke halaman toko online</p>
    </div>
    <div class="container-fluid">
      <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Franchise</h4>
        <p>Pada table terdapat data franchise yang merupakan halaman dashboard Data Franchise dimana anda dapat melakukan edit dan delete data. Pada Franchise yang telah anda input</p>
        <hr>
        <p class="mb-0">1. Tombol update berfungsi untuk melakukan update data Franchise anda</p>
        <hr>
        <p class="mb-0">2. Tombol delete berfungsi untuk menghapus Franchise anda</p>
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->

          <!-- /.card -->

          <!-- DIRECT CHAT -->

          <!--/.direct-chat -->

          <!-- TO DO List -->

          <!-- /.card -->
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

          <!-- Map card -->

          <!-- /.card -->

          <!-- solid sales graph -->

          <!-- /.card -->

          <!-- Calendar -->

          <!-- /.card -->
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    <script>
      var alamat = <?= BASEURL, PORT, LOCATION ?>
      $(document).ready(function() {

        // sembunyikan form kabupaten, kecamatan dan desa
        $("#form_kab").hide();
        $("#form_kec").hide();
        $("#form_des").hide();

        // ambil data kabupaten ketika data memilih provinsi
        $('body').on("change", "#form_prov", function() {
          var id = $(this).val();
          var data = "id=" + id + "&data=kabupaten";
          $.ajax({
            type: 'POST',
            url: "get_daerah.php",
            data: data,
            success: function(hasil) {
              $("#form_kab").html(hasil);
              $("#form_kab").show();
              $("#form_kec").hide();
              $("#form_des").hide();
            }
          });
        });

        // ambil data kecamatan/kota ketika data memilih kabupaten
        $('body').on("change", "#form_kab", function() {
          var id = $(this).val();
          var data = "id=" + id + "&data=kecamatan";
          $.ajax({
            type: 'POST',
            url: "get_daerah.php",
            data: data,
            success: function(hasil) {
              $("#form_kec").html(hasil);
              $("#form_kec").show();
              $("#form_des").hide();
            }
          });
        });

        // ambil data desa ketika data memilih kecamatan/kota
        $('body').on("change", "#form_kec", function() {
          var id = $(this).val();
          var data = "id=" + id + "&data=desa";
          $.ajax({
            type: 'POST',
            url: "get_daerah.php",
            data: data,
            success: function(hasil) {
              $("#form_des").html(hasil);
              $("#form_des").show();
            }
          });
        });


      });
    </script>