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
    <script type="text/javascript" src="js/materialize.min.js"></script>
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

        const nav = document.querySelector('nav');

        window.addEventListener('scroll', () => {
            if (window.scrollY >= 380) {
                nav.classList.add('active_nav');
            } else {
                nav.classList.remove('active_nav');
            }
        });

    </script>
    <script type="text/javascript">
  $( document ).ready(function() {

    window.headerwidth = $(".header-title-nav-wrapper").innerWidth() +10;
    // console.log("logo width " + headerwidth);

    // header layout 10 start
    if ((userObject.headerLayout == '10' || userObject.headerLayout == '11')) {
      var heightSlider = $('#header').innerHeight();
      if (heightSlider < 100) {
        $('.milestone-menu-modal').css('margin-top', heightSlider);
        $('.milestone-menu-modal').css({ 'height': 'calc(100% - ' + heightSlider+ 'px)' });
        $('.milestone-menu-modal .user-links').css('height', 'auto');
      } else{
        $('.milestone-menu-modal').css('margin-top', '100px');
        $('.milestone-menu-modal').css({ 'height': 'calc(100% - 100px)' });
        $('.milestone-menu-modal .user-links').css('height', 'auto');
      }
      if ($(".milestone-menu-modal .user-links").height() > $(".milestone-menu-modal").height() == 1) {
        $(".milestone-menu-modal").css("display","block");
      };
    }
    // header layout 10 end

    if (window.innerWidth > 767) {
      if (userObject.headerLayout == "8" || userObject.headerLayout == "9") {
        if ($('.js-header-container').hasClass('site-logo-none')) {
          var logo_width, element_spacing, header_w;

          logo_width = window.headerwidth
          if (logo_width < 450) {
            logo_width = window.headerwidth
          } else{
            logo_width = 450
          }
          
          header_w = $(".header-container").innerWidth() - logo_width;
          // console.log(" header con - " + $(".header-container").innerWidth() + " headerwidth "  + window.headerwidth +  " header_w " + header_w );

          // $(".header-title-nav-wrapper").css({
          //   'width' : logo_width
          // });

          $('.sticky-header-container').find(".header-title-nav-wrapper").css({
            'width' : ''
          });

          $(".header-layout-logo-center-nav-left-right .site-logo-none .header-actions-social-button-left, .header-layout-logo-center-nav-left-right .site-logo-none .header-actions-social-button-right").css({
            'width' : header_w/2+"px"
          });
        }
      }
    }

    Header.headerInit();
    Mobile.mobileInit();
    Header_v2.header_v2Init();

    if (userObject.headerLayout == "10" || userObject.headerLayout == "11") {
      // Header_v2.sidebarmenuInit();
      $( '.header-nav-item-is-group' ).addClass( "drop-text" );
    }

    var templateType = 'normal_page';
    if (templateType == "single_page"){
      if (window.innerWidth <= 1024){
        $(".js-header-nav-wrapper *").on("click", function() {
          $(".js-header-nav-mobile-btn").click();
        });

        $(".social-cta-margin *").on("click", function() {
          $(".js-header-nav-mobile-btn").click();
        });

      }
    }
  });
</script>
          

</body>
</html>