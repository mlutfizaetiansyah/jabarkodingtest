    <!-- Main content -->
    <div class="container-fluid">
      <div class="col-lg-6">
        <?php Flasher::flash() ?>
      </div>
      <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Selamat datang !</h4>
        <p>Disini adalah tampilan untuk halaman dashboard Data Franchise dimana anda dapat melakukan edit dan delete data. Pada Franchise yang telah anda input</p>
        <hr>
        <p class="mb-0">1. Tombol update berfungsi untuk melakukan update data Franchise anda</p>
        <hr>
        <p class="mb-0">2. Tombol delete berfungsi untuk menghapus Franchise anda</p>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">

          <!-- /.card-header -->

          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data toko</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <!-- <th>Rendering engine</th> -->
                  <th>Nama Pemilik</th>
                  <th>Nama Toko</th>
                  <th>alamat</th>
                  <th>Update</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($data['Franchise'] as $toko) :
                ?>
                  <tr>
                    <!-- <td>Trident</td> -->
                    <td>
                      <?= $toko['nama'] ?>
                    </td>
                    <td>
                      <?= $toko['namafranchise'] ?>
                    </td>
                    <td>
                      <?= $toko['alamat'] . " Desa/Kelurahan " . $toko['desa'] . ", Kecamatan " . $toko['kecamatan'] . ", " . $toko['kabupaten'] . ", Provinsi " . $toko['provinsi'] ?>
                    </td>
                    <td>
                      <button id="updatedata" type="button" class="btn btn-primary float-lg-left mr-1" data-idtoko="<?= $toko['id'] ?>" data-toggle="modal" data-target="#exampleModal" data-nama="<?= $toko['nama'] ?>" data-namafranchise="<?= $toko['namafranchise'] ?>" data-alamat="<?= $toko['alamat'] ?>">Update</button>
                    </td>
                    <td>
                      <a href="<?= BASEURL, PORT, LOCATION; ?>/admin/deletefrenchise/<?= $toko['id']; ?>" class="btn btn-danger float-lg-left mr-1" onclick="return confirm('yakin')">Delete</a>
                    </td>
                  </tr>
                <?php
                endforeach;
                ?>
              </tbody>
              <tfoot>
                <tr>
                  <!-- <th>Rendering engine</th> -->
                  <th>Nama Pemilik</th>
                  <th>Nama Toko</th>
                  <th>alamat</th>
                  <th>Update</th>
                  <th>Delete</th>
                </tr>

              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="<?= BASEURL, PORT, LOCATION; ?>/admin/ubahtoko" method="POST">
              <input type="hidden" class="form-control" id="idtoko" placeholder="Nama toko" name="id">
              <div class="form-group">
                <label for="exampleInputEmail1">Nama toko</label>
                <input type="text" class="form-control" id="namafranchise" placeholder="Nama toko" name="namafranchise" required>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Pemilik Toko</label>
                <input type="text" required class="form-control" id="nama" placeholder="Pemilik" name="nama">
              </div>
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
                <input class="form-control" id="alamat" required type="text" name="alamat" placeholder="Alamat">
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script>
      $(document).ready(function() {
        $(document).on('click', '#updatedata', function() {
          var idproduk = $(this).data('idtoko')
          var namatoko = $(this).data('namafranchise')
          var nama = $(this).data('nama')
          var alamat = $(this).data('alamat')
          var link = $(this).data('tokopedia')
          var id = $(this).data('idtoko')
          // console.log(namatoko)
          $('#idtoko').val(idproduk)
          $('#namafranchise').val(namatoko)
          $('#nama').val(nama)
          $('#alamat').val(alamat)
          $('#link').val(link)
          $('#idtoko').val(id)
        })
      })
    </script>

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
    <script>
      function confirmasi(ev) {
        //   ev.preventDefault();
        //   var urlToRedirect = ev.currentTarget.getAttribute('href'); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
        //   console.log(urlToRedirect);
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
            )
          }
        })
      }
    </script>