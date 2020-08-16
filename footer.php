<div class="w-100 bg-primary border-top border-darck mt-5 ">
      <div class="container">
        <div class="row justify-content-around">
          <div class="col-4 my-4">
            <?php
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');  
            if(has_custom_logo()){
              echo '<a a class="navbar-brand" href="http://www.tintasrevestir.com.br">';
              echo '<img src="'.esc_url($logo[0]) . '" class="d-inline-block align-right icon-rev">';
              echo '</a>';
            }else{
              echo '<h1>'. get_bloginfo('name') . '</h1>';
              }
            ?>
          </div>
          <div class="col-6 mt-2">
            <div class="row justify-content-end mt-4 social-icons">
              <a class="text text-light" href="https://www.facebook.com/tintas.revestir/"><i class="fab fa-facebook"></i></a>
              <a class="text text-light ml-2" href="https://www.instagram.com/tintas_revestir/"><i class="fab fa-instagram"></i></a>
              <a class="text text-light ml-2" href="https://api.whatsapp.com/send?l=pt&phone=5548996671058"><i class="fab fa-whatsapp"></i></a>
              <a class="text text-light ml-2" href="#"><i class="fab fa-youtube"></i></a>
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