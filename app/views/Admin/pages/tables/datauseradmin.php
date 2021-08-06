    <!-- Main content -->
    <div class="container-fluid">
      <div class="col-lg-6">
        <?php Flasher::flash() ?>
      </div>
      <div class="alert alert-warning" role="alert">
        <h4 class="alert-heading">Selamat datang !</h4>
        <p>Disini adalah tampilan untuk halaman dashboard Data Admin dimana anda dapat melakukan edit dan delete data. Pada Admin yang telah anda input</p>
        <hr>
        <p class="mb-0">1. Tombol update berfungsi untuk melakukan update data Admin anda</p>
        <hr>
        <p class="mb-0">2. Tombol delete berfungsi untuk menghapus Admin anda</p>
      </div>
      <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Rule unutuk user admin</h4>
        <hr>
        <p class="mb-0">1. Level untuk memberikan peringkat hak akses pada web anda terdapat 2 level</p>
        <hr>
        <p class="mb-0">Level Admin: Adalah role user yang bisa membuat dan menghapus user admin lainya</p>
        <hr>
        <p class="mb-0">Level User: Adalah role user yang tidak bisa membuat dan menghapus user admin lainya</p>
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
            <h3 class="card-title">Data $user</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <!-- <th>Rendering engine</th> -->
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Level</th>
                  <th>Update</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($data['useradmin'] as $user) :
                ?>
                  <tr>
                    <!-- <td>Trident</td> -->
                    <td>
                      <?= $user['nama'] ?>
                    </td>
                    <td>
                      <?= $user['username'] ?>
                    </td>
                    <td>
                      <?= $user['level'] ?>
                    </td>
                    <td>
                      <button id="updatedata" type="button" class="btn btn-primary float-lg-left mr-1" data-iduser="<?= $user['id'] ?>" data-toggle="modal" data-target="#exampleModal" data-nama="<?= $user['nama'] ?>" data-username="<?= $user['username'] ?>" data-password="<?= $user['password'] ?>">Update</button>
                    </td>
                    <td>
                      <a href="<?= BASEURL, PORT, LOCATION; ?>/admin/deleteuser/<?= $user['id']; ?>" class="btn btn-danger float-lg-left mr-1" onclick="return confirm('yakin')">Delete</a>
                    </td>
                  </tr>
                <?php
                endforeach;
                ?>
              </tbody>
              <tfoot>
                <tr>
                  <!-- <th>Rendering engine</th> -->
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Level</th>
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
            <h5 class="modal-title" id="exampleModalLabel">Update</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="<?= BASEURL, PORT, LOCATION; ?>/admin/ubahuser" method="POST">
              <input type="hidden" class="form-control" id="iduser" placeholder="id" name="id">
              <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Username" name="username">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
              </div>
              <div class="form-group">
                <label id="level">Level</label>
                <select id="form_kab" class="form-control select2 select2-danger" name="level" required data-dropdown-css-class="select2-danger" style="width: 100%;">
                  <option value="admin">Admin</option>
                  <option value="user" selected>User</option>
                </select>
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
          var iduser = $(this).data('iduser')
          var nama = $(this).data('nama')
          var username = $(this).data('username')
          var password = $(this).data('password')
          // console.log(nama$user)
          $('#iduser').val(iduser)
          $('#username').val(username)
          $('#nama').val(nama)
          $('#password').val(password)

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