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
            Tambah Data Galeri
        </button>
        </div>
    </div>  

    <center><h3><?=$data['judul']?></h3></center>

<div class="row">
<?php foreach($data['galeri'] as $galeri) : ?>
    <div class="col mb-5" >    
          <div class="card" style="width: 300px;" >
          <?php if($galeri['id_package'] == '1'){ ?>
              <img  class="card-img-thumbnail" src="<?=BASEURL;?>/img/galeri2/Indoor_Photoshoot/<?=$galeri['gbr']?>" class="card-img-top">
            <?php }elseif($galeri['id_package'] == '2'){ ?>
                <img  class="card-img-thumbnail" src="<?=BASEURL;?>/img/galeri2/wedding/<?=$galeri['gbr']?>" class="card-img-top">
           <?php }elseif($galeri['id_package'] == '8'){ ?>
                <img  class="card-img-thumbnail" src="<?=BASEURL;?>/img/galeri2/family_session/<?=$galeri['gbr']?>" class="card-img-top">
           <?php }else{ ?>
                <img  class="card-img-thumbnail" src="<?=BASEURL;?>/img/upload/<?=$galeri['gbr']?>" class="card-img-top">
           <?php } ?>
           
              <div class="card-footer" style="background-color:#D6E4E5">
                  <a href="<?=BASEURL;?>/galeri/hapus/<?=$galeri['id_galeri'];?>" class="badge text-bg-danger" onclick="return confirm('yakin?')">hapus</a>
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
        <h1 class="modal-title fs-5" id="">Tambah Data galeri</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/galeri/tambah" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_galeri" id="id_galeri">
        <div class="form-group">
						<label for="id_package">Jenis Paket</label>
						<select class="form-select" id="id_package" name="id_package">
							<?php foreach ($data['package'] as $package) : ?>
								<option value="<?= $package['id_package'] ?>"><?= $package['nm_package']  ?></option>
							<?php endforeach; ?>
						</select>
					</div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar Galeri</label>
                <input class="form-control form-control-sm" id="gbr" name="gbr" type="file">
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