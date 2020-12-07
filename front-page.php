<?php get_header(); ?>
      <div class="col-md-10 mx-auto mt-4">
        <div id="carousel-site" class="carousel slide" data-ride="carousel" data-interval="6000">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">

            <?php
              $my_args_banner = array(
                'post_type' => 'banners',
                'posts_per_page' => 3,
              );
              $my_query_banner = new WP_Query ($my_args_banner);
            ?>

            <?php if ($my_query_banner-> have_posts()) : 
              $banner = $banners[0];
              $c =0;
              while($my_query_banner->have_posts()):
               $my_query_banner->the_post();
            ?>
              <div class="carousel-item <?php $c++; if($c==1){echo 'active';} ?>" >
                <?php the_post_thumbnail('post-thumbnail',array('class'=>'img-fluid')); ?>
                <div class="carousel-caption d-none d-md-block">
                  
                  <h3 class="carouser__title">
                    <?php the_title();?>
                  </h3>
                  <p>
                    <a class="btn btn-primary" 
                      href=<?php 
                        $args = get_post_custom_values('url'); 
                        if($args!==null){
                          foreach($args as $key => $value) {
                            echo $value;
                          }
                        }
                          ?>>
                        <?php 
                          $args = get_post_custom_values('botao'); 
                          if ( $args !== null ){
                            foreach($args as $key => $value) {
                              echo $value ;
                              }
                          }
                          ?></a>
                  </p>
                </div>
              </div>
            <?php endwhile; endif; ?>

            <?php wp_reset_query(); ?>
          </div>
          <a href="#carousel-site" class="carousel-control-prev" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a href="#carousel-site" class="carousel-control-next" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
             <span class="sr-only">Próximo</span>
           </a>
        </div>
        <h3 class="mt-5 text-center">Linhas</h3>
        <div class="scene mt-4">
          <div class="left-zone">
            <ul class="list">
              <?php
                $args_products_banner = array(
                  'post_type' => 'products banners',
                  'posts_per_page' => 5,
                  'orderby' => 'date',
                  'order'   => 'ASC',
                );
                $query_products = new WP_Query ($args_products_banner);
              ?>
              <?php if ($query_products-> have_posts()) : 
                $c =0;
                while($query_products->have_posts()):
                  $query_products->the_post();
                ?>
              <li class="item">
                  <input type="radio" id="<?php the_title(); ?>" name="li_item" <?php $c++; if($c===1){echo 'checked';} ?>/>
                  <?php the_post_thumbnail('product_banner_size',array('class'=>'label__img')); ?> 
                  <label class="label__item" for="<?php the_title();?>" style="<?php 
                    if(empty($_POST[$name])){ 
                      $args = get_post_custom_values('color'); 
                      if($args!==null){
                        foreach($args as $key => $value) {
                          echo "color:" . $value . "; border-right: solid 4px " . $value . ";";
                        }
                      } }
                  ?>" ><?php the_title();?></label>
                <div class="content content__item">
                  <?php the_post_thumbnail( 'product_banner_size', array("class"=>"content__img") ); ?>
                  <h2><?php the_title(); ?></h2>
                  <?php the_content("paragrath", array("class"=>"content__paragrath")); ?>
                </div>
              </li>
              <?php endwhile; endif; ?>

              <?php wp_reset_query(); ?>
            </ul>
          </div>
          <div class="middle-border"></div>
          <div class="right-zone"></div>
        </div>
      </div>
      
  <?php get_footer(); ?>