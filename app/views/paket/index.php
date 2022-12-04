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
            Tambah Data Paket
        </button>
        </div>
    </div> 
 
    <center><h3><?=$data['judul']?></h3></center>
<div class="row">
<?php foreach($data['paket'] as $paket) : ?>
    <div class="col mb-5" >    
          <div class="card" style="width: 300px;" >
            <div class="card-body" style="background-color:#FFF6BF; color:#434242">
              <h4 class="card-title">
              <p class="card-text" style="font-family:sans-serif"><b>Nama package : </b><?=$paket['nm_package']?></p></h4>
              <p class="card-text" style="font-family:sans-serif"><b>Jenis paket : </b><?=$paket['nm_paket']?></p>
              <p class="card-text" style="font-family:sans-serif"><b>Harga : </b><?=$paket['harga']?></p>
              <p class="card-text" style="font-family:sans-serif"><b>Detail : </b><?=$paket['detail']?></p>
            </div>
            <div class="card-footer" style="background-color:#D6E4E5">
              <a href="<?=BASEURL;?>/paket/ubah/<?=$paket['id_paket'];?>" class="badge text-bg-success tampilModalUbahPaket" id="tombolUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id_paket="<?= $paket['id_paket']; ?>">ubah</a>      
              <a href="<?=BASEURL;?>/paket/hapus/<?=$paket['id_paket'];?>" class="badge text-bg-danger" onclick="return confirm('yakin?')">hapus</a>
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
				<h1 class="modal-title fs-5" id="formModalLabel">Tambah Data paket</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body paket">

				<form action="<?= BASEURL; ?>/paket/tambah" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<input type="hidden" name="id_paket" id="id_paket">
						<label for="nama">Jenis Paket</label>
            <select class="form-select" id="nm_paket" name="nm_paket">
								<option value="Hemat">Hemat</option>
								<option value="Standard">Standard</option>
								<option value="Lengkap">Lengkap</option>
						</select>
					</div>
					<div class="form-group">
						<label for="id_package">Nama Paket</label>
						<select class="form-select" id="id_package" name="id_package">
							<?php foreach ($data['package'] as $package) : ?>
								<option value="<?= $package['id_package'] ?>"><?= $package['nm_package']  ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<label for="nama">Harga</label>
						<input type="text" class="form-control" id="harga" name="harga">
					</div>
					<div class="form-group">
						<label for="nama">Detail Paket</label>
						<textarea type="text" class="form-control" id="detail" name="detail"></textarea>
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
