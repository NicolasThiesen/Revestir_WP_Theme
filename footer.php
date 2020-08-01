<div class="w-100 bg-color-1 border-top border-darck mt-5 ">
      <div class="container">
        <div class="row justify-content-around">
          <div class="col-sm-6 my-4">
            <?php
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');  
            if(has_custom_logo()){
              echo '<a a class="navbar-brand" href="http://www.tintasrevestir.com.br">';
              echo '<img src="'.esc_url($logo[0]) . '" width="160" height="40"  class="d-inline-block align-right icon-rev">';
              echo '</a>';
            }else{
              echo '<h1>'. get_bloginfo('name') . '</h1>';
              }
            ?>
          </div>
          <div class="col-sm-6 mt-2">
            <div class="row justify-content-end ml-5 mt-4">
              <a class="text text-light ml-5" href="https://www.facebook.com/tintas.revestir/"><h2><i class="fab fa-facebook"></i></h2></a>
              <a class="text text-light ml-2" href="https://www.instagram.com/tintas_revestir/"><h2><i class="fab fa-instagram"></i></h2></a>
              <a class="text text-light ml-2" href="https://api.whatsapp.com/send?l=pt&phone=5548996671058"><h2><i class="fab fa-whatsapp"></i></h2></a>
              <a class="text text-light ml-2" href="#"><h2><i class="fab fa-youtube"></i></h2></a>
            </div>
          </div>  
        </div>
      </div>
    </div>

    <?php wp_footer();?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php bloginfo('template_url')?>/js/jquery.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/popper.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/bootstrap.js"></script>
  </body>
</html>