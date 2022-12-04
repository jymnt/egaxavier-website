<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash();?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-secondary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Data Package
        </button>
        </div>
    </div> 


    <center><h3><?=$data['judul']?></h3></center>
<div class="row">
<?php foreach($data['package'] as $package) : ?>
    <div class="col mb-5" >    
          <div class="card" style="width:250px"  >
            <div class="card-body" style="background-color:grey; color:white; ">
              <h6 class="card-title">
              <p class="card-text" style="font-family:sans-serif; height:50px;"><b style="color:black">Nama File : </b><br><?=$package['nm_package']?></p></h6>
              <img style="width:100%; height:250px;"  class="card-img-thumbnail" src="<?=BASEURL;?>/img/package/<?=$package['gbr_package']?>" class="card-img-top">
            </div>
            <div class="card-footer" style="background-color:#D6E4E5">
              <a href="<?=BASEURL;?>/package/ubah/<?=$package['id_package'];?>" class="badge text-bg-success tampilModalUbahPackage" id="tombolUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id_package="<?= $package['id_package']; ?>">ubah</a>      
              <a href="<?=BASEURL;?>/package/hapus/<?=$package['id_package'];?>" class="badge text-bg-danger" onclick="return confirm('yakin?')">hapus</a>
              </div> 
          </div>
    </div>  
<?php endforeach; ?>
</div> 
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data package</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body paket">

        <form action="<?= BASEURL; ?>/package/tambah" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_package" id="id_package">
            <div class="form-group">
                    <label for="nama">Nama Package</label>
                    <input type="text" class="form-control" id="nm_package" name="nm_package">
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar package</label>
                <input class="form-control form-control-sm" id="gbr_package" name="gbr_package" type="file">
            </div>
               
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
