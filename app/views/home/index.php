<!-- slider -->
<div class="slider fullscreen" >
    <div class="main-content">
      <ul class="slides landing">
          <li>
              <img src="img/slider/1.jpg">
              <div class="caption left-align">
              <h3>Every Photo With New Perspective</h3>
              <h5 class="light grey-text text-lighten-3">Abadikan Moment kamu bersama kami</h5>
              </div>
          </li>
          <li>
              <img src="img/slider/2.jpg">
              <div class="caption right-align">
              <h3>Make Your Wedding A wonderful Story</h3>
              <h5 class="light grey-text text-lighten-3">Abadikan Moment kamu bersama kami</h5>
              </div>
          </li>
          <li>
              <img src="img/slider/3.jpg">
              <div class="caption center-align">
              <h3>Capturing Moments, not Photos</h3>
              <h5 class="light grey-text text-lighten-3">Abadikan Moment kamu bersama kami</h5>
              </div>
          </li>
          <li>
              <img src="img/slider/4.jpg">
              <div class="caption left-align">
              <h3>Every Photo With New Perspective</h3>
              <h5 class="light grey-text text-lighten-3">Abadikan Moment kamu bersama kami</h5>
              </div>
          </li>
          <li>
              <img src="img/slider/5.jpg">
              <div class="caption right-align">
              <h3>Make Your Wedding A wonderful Story</h3>
              <h5 class="light grey-text text-lighten-3">Abadikan Moment kamu bersama kami</h5>
              </div>
          </li>
          <li>
              <img src="img/slider/6.jpg">
              <div class="caption center-align">
              <h3>Capturing Moments, not Photos</h3>
              <h5 class="light grey-text text-lighten-3">Abadikan Moment kamu bersama kami</h5>
              </div>
          </li>
          <li>
              <img src="img/slider/7.jpg">
              <div class="caption left-align">
              <h3>Every Photo With New Perspective</h3>
              <h5 class="light grey-text text-lighten-3">Abadikan Moment kamu bersama kami</h5>
              </div>
          </li>
          <li>
              <img src="img/slider/8.jpg">
              <div class="caption right-align">
              <h3>Make Your Wedding A wonderful Story</h3>
              <h5 class="light grey-text text-lighten-3">Abadikan Moment kamu bersama kami</h5>
              </div>
          </li>
          <li>
              <img src="img/slider/9.jpg">
              <div class="caption center-align">
              <h3>Capturing Moments, not Photos</h3>
              <h5 class="light grey-text text-lighten-3">Abadikan Moment kamu bersama kami</h5>
             </div>
          </li>
      </ul>
  </div>
</div>

  <!-- Authentic -->
  <section id="about" class="about package grey lighten-3 scrollspy">
      <div class="container"  >
          <div class="row" >
              <div class="col m6 light" style="width:100%; height: 650px;">
              </div>
              <div class="col m6 light" style="font-family: arialblack">
                  <h3>AUTHENTIC, RAW  LIFESTYLE PHOTOGRAPHY</h3>
              </div>
              <div class="col m6 light">
                  <p style="font-size:2vw">I appreciate the raw reality of everyday life and the fleeting beauty of those in between moments. I do my best to take every photo with that in mind. </p>
                    <p>Based in Colorado, available for travel worldwide!</p>
              </div>
          </div>
      </div>
  </section>

  <!-- portfolio -->
  <div id="lifestyle" class="parallax-container scrollspy">
      <div class="parallax"><img src="img/portfolio/6.jpg" alt=""></div>
    
      <div class="container lifestyle">
          <h3 class="center light white-text">Portfolio</h3>
          <div class="row">
              <div class=" col m4 s12 center">
                 <a href="<?= BASEURL?>/portfolio/indoor/1" class="brand-logo light">
                  <img class="main-image" src="img/lifestyle/1.jpg">
                </a>
                </div>
              <div class=" col m4 s12 center">
                 <a href="<?= BASEURL?>/portfolio/family/8" class="brand-logo light">
                  <img class="main-image" src="img/lifestyle/2.webp">
                  </a>
              </div>
              <div class=" col m4 s12 center">
                 <a href="<?= BASEURL?>/portfolio/wedding/2" class="brand-logo light">
                  <img class="main-image" src="img/lifestyle/3.jpg">
                  </a>
                </div>
          </div>
      </div>
  </div>

  <!-- package -->
  <section id="package" class="grey lighten-3">
    <div class="container">
        <div class="row"> 
            <h3 class="light center grey-text text-darken-3">Package</h3>
            <?php foreach ($data['package_relation'] as $row) : ?>
            <div class="col m3 s12" >
                <div class="card-panel package" style=" width:100%;">
                    <img style="height: 100%;  width:100%;" src="<?= BASEURL . '/img/package/' . $row['gbr_package'] ?>" alt="Card image cap">
                    <center><h5 class="card-title"  style="height: 70px; ;"><?= $row['nm_package'] ?></h5></center>
                    <?php if (!empty($row['list_package'])) :  ?>
                        <?php foreach ($row['list_package'] as $paket) :  ?>
                            <p style="font: size 10px;"><b> Paket <?= $paket['nm_paket'] ?></b> <br>(Rp. <?=number_format($paket['harga'], 0, '.', '.')?>)</p>
                        <?php endforeach;  ?>
                        <a href="<?= BASEURL;?>/detailPackage/<?= $row['id_package']?>" class="waves-effect brown lighten-3 btn">Detail<i class="material-icons right">arrow_forward</i></a>
                        <?php else :  ?>
                            <p class="text-muted">Belum ada paket yang tersedia.</p>
                        <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section> 

  <!-- lIFESTYLE -->
  <section id="portfolio" class="portfolio scrollspy">
      <div class="container">
          <h3 class="light center grey-text text-darken-3">Lifestyle & Branding Photography</h3>
          <div class="row">
              <div class="col m3 s12">
                  <img src="<?=BASEURL;?>/img/portfolio/1.jpg" class="responsive-img materialboxed" data-caption="Wedding's day with karo's tradision">
              </div> 
              <div class="col m3 s12">
                  <img src="<?=BASEURL;?>/img/portfolio/2.jpg" class="responsive-img materialboxed" data-caption="Indoor Photoshoot">
              </div>
              <div class="col m3 s12">
                  <img src="<?=BASEURL;?>/img/portfolio/3.jpg" class="responsive-img materialboxed" data-caption="Family sesion">
              </div>
              <div class="col m3 s12">
                  <img src="<?=BASEURL;?>/img/portfolio/4.jpg" class="responsive-img materialboxed" data-caption="prewedding Photoshoot">
              </div>
          </div>
          <div class="row">
              <div class="col m3 s12">
                  <img src="<?=BASEURL;?>/img/portfolio/5.jpg" class="responsive-img materialboxed" data-caption="Wedding's day with karo's tradision">
              </div>
              <div class="col m3 s12">
                  <img src="<?=BASEURL;?>/img/portfolio/10.jpg" class="responsive-img materialboxed" data-caption="Holy Matrimony">
              </div>
              <div class="col m3 s12">
                  <img src="<?=BASEURL;?>/img/portfolio/7.jpg" class="responsive-img materialboxed" data-caption="Prewedding Photoshot with culture">
              </div>
              <div class="col m3 s12">
                  <img src="<?=BASEURL;?>/img/portfolio/8.jpg" class="responsive-img materialboxed" data-caption="Prewedding's">
              </div>
          </div>
      </div>
  </section>

  <h3 class="light center grey-text text-darken-3">Ega Xavier Maps</h3>
  <hr>

    <iframe class="gmaps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.9882774630487!2d98.48774879999995!3d3.097774799999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30310151d996929f%3A0x32ebb2e8eb1dcd5c!2sEga%20xavier%20studio!5e0!3m2!1sen!2sid!4v1669085284235!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
 

