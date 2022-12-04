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
            Tambah Data Customer
        </button>
        </div>
    </div> 

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/customer/cari" method="post">
                <div class="input-group ">
                    <input type="text" class="form-control" placeholder="cari customer" name ="keyword" id="keyword" autocomplete="off">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <h3><?=$data['judul']?></h3>
                <ul class="list-group"> 
                    <?php foreach($data['cust'] as $cust) : ?>
                    <li class="list-group-item ">
                        <?= $cust['nm_cust']; ?>
                    <center>
                        <a href="<?=BASEURL;?>/customer/detail/<?=$cust['id_cust'];?>" class="badge text-bg-primary ">detail</a>
                        <a href="<?=BASEURL;?>/customer/ubah/<?=$cust['id_cust'];?>" class="badge text-bg-success tampilModalUbahCustomer" id="tombolUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id_cust="<?= $cust['id_cust']; ?>">ubah</a>
                        <a href="<?=BASEURL;?>/customer/hapus/<?=$cust['id_cust'];?>" class="badge text-bg-danger" onclick="return confirm('yakin?')">hapus</a>
                    </center>
                    </li>
                    <?php endforeach; ?>
                </ul>
        </div>
    </div>
</div>  

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Customer</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
 
        <form action="<?= BASEURL; ?>/customer/tambah" method="post">
        <input type="hidden" name="id_cust" id="id_cust">
            <div class="form-group">
                <label for="nama">Nama Customer</label>
                <input type="text" class="form-control" id="nm_cust" name="nm_cust">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
            <div class="form-group">
                <label for="no_hp">No. Hp</label>
                <input type="number" class="form-control" id="no_hp" name="no_hp">
            </div>
            <div class="form-group">
                <label for="email_cust">Email Customer</label>
                <input type="email" class="form-control" id="email_cust" name="email_cust">
            </div>  
            <div class="form-group">
                <label for="email_cust">Message</label>
                <input type="text" class="form-control" id="message" name="message">
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