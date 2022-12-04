<!-- footer -->
<footer class="center brown lighten-4 white-text">
  <p>
      <div>
        <a href="https://www.facebook.com/egha.mamacharo" target="_blank" rel="nofollow"><img class="logo_sosmed" src="<?=BASEURL;?>/img/Logo/fb.png" alt="">  Facebook</a>
      </div>
      <div>
        <a href="https://www.instagram.com/ega_xavier/" target="_blank" rel="nofollow"><img class="logo_sosmed"  src="<?=BASEURL;?>/img/Logo/ig.png" alt=""> Instagram</a>
      </div>
      <div>
        <a href="https://wa.me/+6282168961238" target="_blank" rel="nofollow"><img class="logo_sosmed" src="<?=BASEURL;?>/img/Logo/wa.png" alt=""> Whatsapp</a>
      </div>

  </p>
  <p>
    EGA XAVIER CREATIVE PHOTOGRAPHY
  </p>
  <p>
    Joy Munthe. &copy
      <script>document.write(new Date().getFullYear())</script>
  </p>    

</footer>

    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script src="<?= BASEURL; ?>/js/scripts.js"></script>
    <script>
        // initialization parallax
        const sidenav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sidenav); 

        // initialization slider
        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
            // mengatur ada atau tidaknya indikator, 
            // ketinggian, durasi menggunakan objek js
            indicators: false,
            
            height: 1600,
            transition: 600,
            interval: 3000
        });

        // INITIALIZATION PARALLAX
        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);
        
        // initialization materialboxed
        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);

        // initialization scrollspy
        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll,{
            scrollOffset:50
        });

        const dropdown = document.querySelectorAll('.dropdown-trigger');
        M.Dropdown.init(dropdown,{
            alignment:'left'
        });

        const input = document.querySelectorAll('.input-field');
        

    </script>

          

</body>
</html>