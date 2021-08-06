<div class="container-fluid">
  <?php Flasher::flash() ?>
  <div class="row">
    <!-- left column -->
    <?php
    // var_dump($data['wilayah ']);
    ?>
    <div class="col-md-6">


      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Upload Produk</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="<?= BASEURL, PORT, LOCATION; ?>/admin/TambahProduk" method="POST" enctype="multipart/form-data">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Produk</label>
              <input type="text" class="form-control" id="exampleInputEmail" placeholder="Nama Produk" name="nama_produk" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Harga</label>
              <input type="number" required step="1" min="1" max="99999999" maxlength="7" inputmode="numeric" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control" id="exampleInputPassword1" placeholder="Harga" name="harga">
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Gambar</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" required class="custom-file-input" id="exampleInputFile" name="gambar">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Deskripsi</label>
              <textarea name="deskripsi" required id="deskripsi" class="form-control"></textarea>
              <!-- <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Deskripsi" name="deskripsi"> -->
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Tokopedia</label>
              <textarea name="tokopedia" id="tokopedia" class="form-control"></textarea>
              <!-- <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Deskripsi" name="deskripsi"> -->
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Shoppe</label>
              <textarea name="shoppe" id="shoppe" class="form-control"></textarea>
              <!-- <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Deskripsi" name="deskripsi"> -->
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Bukalapak</label>
              <textarea name="bukalapak" id="bukalapak" class="form-control"></textarea>
              <!-- <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Deskripsi" name="deskripsi"> -->
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Nomor Whatsapp </label>
              <!-- <textarea name="link" id="link" class="form-control"></textarea> -->
              <input type="number" required step="1" min="1" max="9999999999999" maxlength="13" inputmode="numeric" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control" id="exampleInputPassword1" placeholder="nomor wa" name="link">
              <!-- <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Deskripsi" name="deskripsi"> -->
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>

      <!-- /.card -->

      <!-- general form elements -->

      <!-- /.card -->

      <!-- Input addon -->

      <!-- /.card -->
      <!-- Horizontal Form -->
      <!-- /.card -->

    </div>
    <!--/.col (left) -->
    <!-- right column -->
    <div class="col-md-6">
      <!-- Form Element sizes -->
      <div class="card card-success">
        <div class="card-header">
          <h3 class="card-title">Franchise</h3>
        </div>
        <div class="card-body">
          <form action="<?= BASEURL, PORT, LOCATION; ?>/admin/Daftarfrencise" method="POST">
            <input class="form-control form-control-lg" type="text" placeholder="Nama Toko" name="namafranchise" required>
            <br>
            <label>Nama Pemilik</label>
            <input class="form-control " type="text" placeholder="Nama Pemilik" name="nama" required>
            <div class="form-group">
              <label>Pilih Provinsi</label>
              <select id="form_prov" class="form-control select2 select2-danger" name="provinsi" data-dropdown-css-class="select2-danger" required style="width: 100%;">
                <option selected="selected">--Pilih Provinsi--</option>
                <?php
                foreach ($data['wilayah'] as $daerah) :
                ?>
                  <option value="<?= $daerah['kode']; ?>/<?= $daerah['nama'] ?>"><?= $daerah['nama'] ?></option>
                <?php
                endforeach;
                ?>


              </select>

            </div>
            <div class="form-group">
              <label id="kabupaten">Pilih Kabupaten</label>

              <select id="form_kab" class="form-control select2 select2-danger" name="kabupaten" required data-dropdown-css-class="select2-danger" style="width: 100%;">
                <input type="hidden" id="hidenkab" name="hidenkab">

              </select>
            </div>
            <div class="form-group">
              <label id="kecamatan">Pilih Kecamatan</label>

              <select id="form_kec" class="form-control select2 select2-danger" name="kecamatan">
              </select>
            </div>
            <div class="form-group">
              <label id="desa">Pilih Desa</label>
              <select id="form_des" class="form-control select2 select2-danger" name="desa" required data-dropdown-css-class="select2-danger" style="width: 100%;">
              </select>
            </div>
            <div class="form-group">
              <label>Alamat Lengkap</label>
              <input class="form-control" required type="text" name="alamat" placeholder="Alamat">
            </div>
            <br>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      <?php
      if ($_SESSION['level'] == 'admin') {
      ?>
        <div class="card card-danger">
          <div class="card-header">
            <h3 class="card-title">Input User</h3>
          </div>
          <div class="card-body">
            <form action="<?= BASEURL, PORT, LOCATION; ?>/admin/InputUser" method="POST">
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control" required name="nama" placeholder="Nama">
              </div>
              <div class="form-group">
                <label>Username</label>
                <input type="Username" required name="username" class="form-control" placeholder="Username">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" required placeholder="Password">
              </div>
              <div class="form-group">
                <label>Level</label>
                <select id="level" class="form-control select2 select2-danger" name="level" data-dropdown-css-class="select2-danger" required style="width: 100%;">
                  <option value="user" selected="selected">User</option>
                  <option value="admin">Admin</option>
                </select>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.card-body -->
        </div>
      <?php
      }
      ?>
      <!-- /.card -->

      <!-- general form elements disabled -->

      <!-- /.card -->
      <!-- general form elements disabled -->

      <!-- /.card -->
    </div>
    <!--/.col (right) -->
  </div>
  <!-- /.row -->
</div><!-- /.container-fluid -->

<!-- Page specific script -->
<script>
  $(document).ready(function() {
    // sembunyikan form kabupaten, kecamatan dan desa
    $("#form_kab").hide();
    $("#form_kec").hide();
    $("#form_des").hide();
    $("#kabupaten").hide();
    $("#kecamatan").hide();
    $("#desa").hide();

    // ambil data kabupaten ketika data memilih provinsi
    $('body').on("change", "#form_prov", function() {
      // $('#form_prov').change(function() {
      var id = $(this).val();
      var text = $("#form_prov option:selected").text()
      var daerah = id.split("/")
      // console.log(text)
      // $("#form_kab").show();

      // var data = id;
      $.ajax({
        type: 'POST',
        url: "<?= BASEURL, PORT, LOCATION ?>/admin/kabupaten",
        dataType: 'json',
        data: {
          kode: daerah[0]
        },
        success: function(hasil) {
          // console.log(daerah)
          $("#form_kab").html(hasil);
          $("#kabupaten").show();
          $("#form_kab").show();
          $('#form_kab').append(`<option selected="selected">--Pilih Kabupaten--</option>`);
          $.each(hasil, function(i, item) {
            // console.log(item.nama)

            $('#form_kab').append('<option value=' + item.kode + '/' + item.nama + '>' + item.nama + '</option>');
          })
          $("#form_kec").hide();
          $("#form_des").hide();
        }
      });
    });

    // ambil data kecamatan/kota ketika data memilih kabupaten
    $('body').on("change", "#form_kab", function() {
      var id = $(this).val();
      var text = $("#form_kab option:selected").text()
      var daerahkecamatan = id.split("/")
      $("#hidenkab").val(text)
      console.log(text)
      // console.log(id)
      $.ajax({
        type: 'POST',
        url: "<?= BASEURL, PORT, LOCATION ?>/admin/kecamatan",
        dataType: 'json',
        data: {
          kode: daerahkecamatan[0]
        },
        success: function(kecamatan) {
          // console.log(id)
          $("#form_kec").html(kecamatan);
          $("#kecamatan").show();
          $("#form_kec").show();
          $('#form_kec').append(`<option selected="selected">--Pilih Kecamatan--</option>`);
          $.each(kecamatan, function(i, item) {
            // console.log(item.nama)
            $('#form_kec').append('<option value=' + item.kode + '/' + item.nama + '>' + item.nama + '</option>');
          })
          $("#form_des").hide();
        }
      });
    });

    // ambil data desa ketika data memilih kecamatan/kota
    $('body').on("change", "#form_kec", function() {
      var id = $(this).val();
      var daerah = id.split("/")
      // console.log(daerah[0])
      // console.log(id)
      $.ajax({
        type: 'POST',
        url: "<?= BASEURL, PORT, LOCATION ?>/admin/kecamatan",
        dataType: 'json',
        data: {
          kode: daerah[0]
        },
        success: function(desa) {
          $("#form_des").html(desa);
          // console.log(item)
          $("#desa").show();

          $("#form_des").show();
          $('#form_des').append(`<option selected="selected">--Pilih Desa--</option>`);

          $.each(desa, function(i, item) {
            // console.log(item)
            $('#form_des').append('<option value=' + item.kode + '/' + item.nama + '>' + item.nama + '</option>');
          })
        }
      });
    });


  });
</script>