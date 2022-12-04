

<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"> Nama Customer : <br><?=$data['cust']['nm_cust'];?></h5>
            <h6 class="card-subtitle mb-2 text-muted">Alamat Customer : <br> <?=$data['cust']['alamat'];?></h6>
            <p class="card-text">Nomor Handphone :<br><?=$data['cust']['no_hp'];?></p>
            <p class="card-text">Email :<br><?=$data['cust']['email_cust'];?></p>
            <p class="card-text">Message :<br><?=$data['cust']['message'];?></p>
            <a href="<?=BASEURL;?>/customer" ?>kembali</a>
        </div>
    </div>
</div>