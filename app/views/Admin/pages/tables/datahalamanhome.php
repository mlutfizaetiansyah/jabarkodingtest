    <!-- Main content -->
    <div class="container-fluid">
      <div class="col-lg-6">
        <?php Flasher::flash() ?>
      </div>
      <div class="alert alert-warning" role="alert">
        <h4 class="alert-heading">Halaman Depan !</h4>
        <p>Disini adalah tampilan untuk halaman dimana anda dapat melakukan editing yang nantinya akan berpengaruh di halaman landingpage anda</p>
        <hr>
        <p class="mb-0">1. Tombol update berfungsi untuk melakukan update data landingpage</p>
        <hr>

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
            <h3 class="card-title">Content Halaman Landing Page</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <!-- <th>Rendering engine</th> -->
                  <!-- <th>Profile</th> -->
                  <th>Email</th>
                  <th>No TLP</th>
                  <th>Alamat</th>
                  <th>No WA</th>
                  <th>Facebook</th>
                  <th>Instagram</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($data['content'] as $halaman) :
                ?>
                  <tr>
                    <!-- <td>Trident</td> -->
                    <!-- <td> -->

                    <!-- </td> -->
                    <td>
                      <?= $halaman['email'] ?>
                    </td>
                    <td>
                      <?= $halaman['notlp'] ?>
                    </td>
                    <td>
                      <?= $halaman['alamat'] ?>
                    </td>
                    <td>
                      <?= $halaman['wa'] ?>
                    </td>
                    <td>
                      <?= $halaman['facebook'] ?>
                    </td>
                    <td>
                      <?= $halaman['instagram'] ?>
                    </td>
                    <td>
                      <button id="updatedata" type="button" class="btn btn-primary float-lg-left mr-1" data-idhalaman="<?= $halaman['id'] ?>" data-toggle="modal" data-target="#exampleModal" data-profile="<?= $halaman['profile'] ?>" data-notlp="<?= $halaman['notlp'] ?>" data-email="<?= $halaman['email'] ?>" data-alamat="<?= $halaman['alamat'] ?> " data-wa="<?= $halaman['wa'] ?> " data-facebook="<?= $halaman['facebook'] ?> " data-instagram="<?= $halaman['instagram'] ?> ">Update</button>
                    </td>
                  </tr>
                <?php
                endforeach;
                ?>
              </tbody>
              <tfoot>
                <tr>
                  <!-- <th>Rendering engine</th> -->
                  <!-- <th>Profile</th> -->
                  <th>Email</th>
                  <th>No TLP</th>
                  <th>Alamat</th>
                  <th>No WA</th>
                  <th>Facebook</th>
                  <th>Instagram</th>
                  <th>Aksi</th>
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
            <h5 class="modal-title" id="exampleModalLabel">Update</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="<?= BASEURL, PORT, LOCATION; ?>/admin/updateHalamandepan" method="POST">
              <input type="hidden" class="form-control" id="idhalaman" placeholder="id" name="id">
              <div class="form-group">
                <label for="exampleInputEmail1">Profile</label>
                <input type="text" class="form-control" id="profile" placeholder="profile" name="profile">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="text" class="form-control" id="email" placeholder="email" name="email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Notlp</label>
                <input type="number" step="1" min="0" max="999999999999" maxlength="13" inputmode="numeric" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control" id="notlp" placeholder="notlp" name="notlp">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Alamat</label>
                <textarea class="form-control" id="alamat" placeholder="alamat" name="alamat"></textarea>
                <!-- <textarea class="form-control" id="alamat" placeholder="alamat" name="alamat"><textarea> -->
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">wa</label>
                <input type="number" step="1" min="0" max="999999999999" maxlength="13" inputmode="numeric" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control" id="wa" placeholder="wa" name="wa">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">facebook</label>
                <input type="text" class="form-control" id="facebook" placeholder="facebook" name="facebook">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">instagram</label>
                <input type="text" class="form-control" id="instagram" placeholder="instagram" name="instagram">
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
          var idhalaman = $(this).data('idhalaman')
          var profile = $(this).data('profile')
          var notlp = $(this).data('notlp')
          var email = $(this).data('email')
          var alamat = $(this).data('alamat')
          var wa = $(this).data('wa')
          var facebook = $(this).data('facebook')
          var instagram = $(this).data('instagram')
          // console.log(nama$user)
          $('#idhalaman').val(idhalaman)
          $('#profile').val(profile)
          $('#notlp').val(notlp)
          $('#email').val(email)
          $('#alamat').val(alamat)
          $('#wa').val(wa)
          $('#facebook').val(facebook)
          $('#instagram').val(instagram)

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