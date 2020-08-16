<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Pegar icones-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Custumizacao dos icones -->
    <link rel="stylesheet" href="/css/icones.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <link rel = "shortcut icon" type = "imagem/x-icon" href = "assets/img/icone.jpg" >

    <?php wp_head(); ?>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
      
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

      
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbar">
          <ul class="navbar-nav ml-auto">
          <li>
            <?php
            wp_nav_menu( array(
              'theme_location'    => 'principal',
              'depth'             => 2,
              'menu_class'        => 'nav navbar-nav',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
            ?>
            </li>
          </ul>
        </div>
      </div>
    </nav>

