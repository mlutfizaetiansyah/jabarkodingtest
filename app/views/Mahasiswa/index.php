<!--
    views untuk menampilkan data 
!-->
<div class="container mt-5">
<div class="row">
<div class="col-lg-6">
        <?php Flasher::flash()?>
    </div>
</div>
<div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#fromModal">
                Tambah Data Mahasiswa
            </button>   
</div>
<h3>Daftar mahasiswa</h3>
<table class="table  table-sm mt-3">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Npm</th>
      <th scope="col">Kelas</th>
      <th scope="col">Nilai Tp1</th>
      <th scope="col">Nilai Tp2</th>
      <th scope="col">Nilai Tp3</th>
      <th scope="col">Nilai Tp4</th>
      <th scope="col">Nilai Tp5</th>
      <th scope="col">Nilai Tp6</th>
      <th scope="col">Nilai Tp7</th>
      <th scope="col">Nilai Tp8</th>
      <th scope="col">Ujian</th>
      <th scope="col">Status</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <?php  $no = 0; foreach($data['mhs'] as $mhs) : 
         $no++;
    ?>
    
 
  <tbody>
    <tr class="<?php if($no%2==0){echo"table-success";}else{echo"table-danger";}?>">
      <th scope="row"><?=$no;?></th>
      <td><?=$mhs['nama'];?></td>
      <td><?=$mhs['npm'];?></td>
      <td>None</td>
      <td>None</td>
      <td>None</td>
      <td>None</td>
      <td>None</td>
      <td>None</td>
      <td>None</td>
      <td>None</td>
      <td>None</td>
      <td>None</td>
      <td>None</td>
      <td>
            <a href="<?= BASEURL,PORT,LOCATION;?>/Mahasiswa/detail/<?= base64_encode($mhs['id']);?>" class="badge badge-primary float-lg-left mr-1 ">Detail</a>
            <a href="<?= BASEURL,PORT,LOCATION;?>/Mahasiswa/ubah/<?=$mhs['id'];?>" data-toggle="modal" data-target="#fromModal" class="badge badge-success float-lg-left mr-1 tampilModalUbah " data-id="<?=$mhs['id'];?>">Ubah</a>
            <a href="<?= BASEURL,PORT,LOCATION;?>/Mahasiswa/delete/<?=$mhs['id'];?>" class="badge badge-danger float-lg-left mr-1" onclick="return confirm('yakin')">Delete</a>
      </td>
    </tr>
  </tbody>
<?php
endforeach;
?>
</table>
</div>
<!-- Modal -->
<div class="modal fade" id="fromModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?=BASEURL,PORT,LOCATION?>/Mahasiswa/tambah" method="post">
                <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Npm</label>
                        <input type="text" class="form-control" id="npm" name="npm">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
