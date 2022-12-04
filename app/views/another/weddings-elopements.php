<div class="container" style="height:100px;">

</div>
<section id="portfolio" class="portfolio ">
<div class="container" style="width:250%">
    
    <div class="col s12 m3">
        
        <?php foreach ($data['galeri_relation'] as $galeri) : ?>
        <span class="flow-text md-5">
            <img src="<?= BASEURL . '/img/galeri2/Wedding/' . $galeri['gbr'] ?>" style="width:32%; ">
        </span>    
         <?php endforeach; ?>  
    </div>
    
</div>
</section>





