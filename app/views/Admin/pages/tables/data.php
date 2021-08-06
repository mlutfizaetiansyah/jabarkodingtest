    <!-- Main content -->
    <div class="container-fluid">
      <div class="col-lg-6">
        <?php Flasher::flash() ?>
      </div>
      <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Selamat datang !</h4>
        <p>Disini adalah tampilan untuk halaman dashboard produk dimana anda dapat melakukan edit dan delete data. Pada produk yang telah anda input</p>
        <hr>
        <p class="mb-0">1. Tombol update berfungsi untuk melakukan update data Produk anda</p>
        <hr>
        <p class="mb-0">2. Tombol delete berfungsi untuk menghapus produk anda</p>
        <hr>
        <p class="mb-0">3. Link Berfungsi untuk redirect ke halaman toko online anda. dan juga memesan melalui wa</p>
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
            <h3 class="card-title">Data Produk</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <!-- <th>Rendering engine</th> -->
                  <th>Nama Produk</th>
                  <th>Deskripsi</th>
                  <th>Harga</th>
                  <th>Image</th>
                  <th>link tokopedia</th>
                  <th>link bukalapak</th>
                  <th>link shoppe</th>
                  <th>link whatsapp</th>
                  <th>link aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($data['produk'] as $produk) :
                ?>
                  <tr>
                    <!-- <td>Trident</td> -->
                    <td>
                      <?= $produk['nama_produk'] ?>
                    </td>
                    <td>
                      <?= $produk['deskripsi'] ?>
                    </td>
                    <td>
                      <?= $produk['harga'] ?>
                    </td>
                    <td>
                      <img src="<?= BASEURL, LOCATION, PORT ?>/img/<?= $produk['gambar'] ?>" alt="" style="width: 50px; height: 50px;">
                    </td>
                    <td>
                      <?php
                      if (!empty($produk['tokopedia'])) {
                      ?>
                        <a href="<?= $produk['tokopedia'] ?>">Link tokopedia</a>
                      <?php
                      }
                      ?>
                    </td>
                    <td>
                      <?php
                      if (!empty($produk['shoppe'])) {
                      ?>
                        <a href="<?= $produk['shoppe'] ?>">Link shoppe</a>
                      <?php
                      }
                      ?>
                    </td>
                    <td>
                      <?php
                      if (!empty($produk['bukalapak'])) {
                      ?>
                        <a href="<?= $produk['bukalapak'] ?>">Link bukalapak</a>
                      <?php
                      }
                      ?>
                    </td>
                    <td>
                      <?php
                      if (!empty($produk['link'])) {
                      ?>
                        <a href="<?= $produk['link'] ?>">Link WA</a>
                      <?php
                      }
                      ?>
                    </td>
                    <td>
                      <button id="updatedata" type="button" class="badge badge-primary float-lg-left mr-1" data-idproduk="<?= $produk['id'] ?>" data-toggle="modal" data-target="#exampleModal" data-produk="<?= $produk['nama_produk'] ?>" data-deskripsi="<?= $produk['deskripsi'] ?>" data-harga="<?= $produk['harga'] ?>" data-tokopedia="<?= $produk['tokopedia'] ?>" data-bukalapak="<?= $produk['bukalapak'] ?>" data-shoppe="<?= $produk['shoppe'] ?>" data-wa="<?= $produk['link'] ?>" data-whatever="@mdo">Update Data</button>

                      <a href="<?= BASEURL, PORT, LOCATION; ?>/admin/delete/<?= $produk['id']; ?>" class="badge badge-danger float-lg-left mr-1" onclick="return confirm('yakin')">Delete</a>

                    </td>
                    <!-- <td>
                        <?= $produk['link'] ?>
                      </td> -->
                  </tr>
                <?php
                endforeach;
                ?>
              </tbody>
              <tfoot>
                <tr>
                  <!-- <th>Rendering engine</th> -->
                  <th>Nama Produk</th>
                  <th>Deskripsi</th>
                  <th>Harga</th>
                  <th>Image</th>
                  <th>link tokopedia</th>
                  <th>link bukalapak</th>
                  <th>link shoppe</th>
                  <th>link whatsapp</th>
                  <th>link aksi</th>
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
            <form action="<?= BASEURL, PORT, LOCATION; ?>/admin/ubahproduk" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" id="idproduk" placeholder="Nama Produk" name="id">
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Produk</label>
                <input type="text" class="form-control" id="nama_produk" placeholder="Nama Produk" name="nama_produk">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Harga</label>
                <input type="number" step="1" min="1" max="99999999" maxlength="7" inputmode="numeric" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control" id="harga" placeholder="Harga" name="harga">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Gambar</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile" name="gambar">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
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
                <label for="exampleInputPassword1">Nomor Whataspp untuk pemesanan</label>
                <input type="text" name="link" id="link" class="form-control">
                <!-- <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Deskripsi" name="deskripsi"> -->
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
          var namaproduk = $(this).data('produk')
          var harga = $(this).data('harga')
          var deskripsi = $(this).data('deskripsi')
          var link = $(this).data('wa')
          var tokopedia = $(this).data('tokopedia')
          var shoppe = $(this).data('shoppe')
          var bukalapak = $(this).data('bukalapak')
          var id = $(this).data('idproduk')
          // console.log(namaproduk)
          $('#nama_produk').val(namaproduk)
          $('#harga').val(harga)
          $('#deskripsi').val(deskripsi)
          $('#link').val(link)
          $('#shoppe').val(shoppe)
          $('#tokopedia').val(tokopedia)
          $('#bukalapak').val(bukalapak)
          $('#idproduk').val(id)
        })
      })
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