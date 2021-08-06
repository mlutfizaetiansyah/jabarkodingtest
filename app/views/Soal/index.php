
<div class="container mt-5">
<div class="row">
<div class="col-lg-6">
        <?php Flasher::flash()?>
    </div>
</div>
<div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#fromModal">
                Tambah Soal
            </button>   
</div>
<h3>Daftar Soal</h3>
<table class="table  table-sm mt-3">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Soal</th>
      <th scope="col">A</th>
      <th scope="col">B</th>
      <th scope="col">C</th>
      <th scope="col">D</th>
      <th scope="col">Jawaban</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <?php  $no = 0; foreach($data['soal'] as $soal) : 
         $no++;
    ?>
    
 
  <tbody>
    <tr>
      <th scope="row"><?=$no;?></th>
      <td><?=$soal['judul'];?></td>
      <td><?=$soal['pil1'];?></td>
      <td><?=$soal['pil2'];?></td>
      <td><?=$soal['pil3'];?></td>
      <td><?=$soal['pil4'];?></td>
      <td><?=$soal['jawaban'];?></td>
      <td>
            <a href="<?= BASEURL,PORT,LOCATION;?>/Soal/ubah/<?=$soal['id'];?>" data-toggle="modal" data-target="#fromModal" class="badge badge-success float-lg-left mr-1 tampilModalUbah " data-id="<?=$mhs['id'];?>">Ubah</a>
            <a href="<?= BASEURL,PORT,LOCATION;?>/Soal/delete/<?=$soal['id'];?>" class="badge badge-danger float-lg-left mr-1" onclick="return confirm('yakin')">Delete</a>
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
                <form action="<?=BASEURL,PORT,LOCATION?>/Soal/tambah" method="post">
                <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label>Soal</label>
                        <input type="text" class="form-control" id="judul" name="judul" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">pilihan 1</label>
                        <input type="text" class="form-control" id="pil1" name="pil1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">pilihan 2</label>
                        <input type="text" class="form-control" id="pil2" name="pil2">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">pilihan 3</label>
                        <input type="text" class="form-control" id="pil3" name="pil3">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">pilihan 4</label>
                        <input type="text" class="form-control" id="pil4" name="pil4">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Jawaban</label>
                        <input type="text" class="form-control" id="jawaban" name="jawaban">
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
