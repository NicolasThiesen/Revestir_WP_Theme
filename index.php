<?php get_header(); ?>
    <div class="row">
      <div class="col-md-10 mx-auto">
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
                  <h3>
                    <?php the_title();?>
                  </h3>
                  <p>
                    <a class="btn btn-primary" href="#">teste</a>
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
      </div>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
            endwhile; else: ?>
            <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
    </div>
  <?php get_footer(); ?>