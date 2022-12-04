<div class="container" style="height: 30px ;"></div>

<section id="package" class="">
    <div class="container">
        <div class="row">
            <?php foreach ($data['package_relation'] as $row) : ?>
                <div style="width:100%;">
                    <div class="card-panel  package" style="width:100%;">
                        <div class="card-image">
                        <center><img style="width:520px; height:540px;" src="<?= BASEURL . '/img/package/' . $row['gbr_package'] ?>" alt="Card image cap"> </center>
                        </div>
                        <center><h5 class="card-title"  style="height: 40px;"><?= $row['nm_package'] ?></h5></center>
                        <div class="card-content mb-5" style="">

                            <?php if (!empty($row['list_package'])) :  ?>
                                <?php foreach ($row['list_package'] as $paket) :  ?>
                                    <div class="col m4 s12">
                                        <p><b>Paket <?= $paket['nm_paket'] ?> (Rp. <?=number_format($paket['harga'], 0, '.', '.')?>)</b></p>
                                    <p>
                                        <b>Detail : </b><?=$paket['detail']?>
                                    </p>
                                    </div>
                                    <div class="border-bottom">
                                        
                        </div>
                                <?php endforeach;  ?>
                        <div class="card-action">
                            <a href="<?= BASEURL;?>/" class="waves-effect brown lighten-3 btn">Back<i class="material-icons right">arrow_forward</i></a>
                        <?php else :  ?>
                            <p class="text-muted">Belum ada paket yang tersedia.</p>
                        <?php endif; ?>
                        </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div> 
    </div>
</section>