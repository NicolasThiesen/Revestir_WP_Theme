<?php /*Template name: Modelo Sem Contêner */ ?>
<?php get_header(); ?>
        <h1 class="text-center my-4"><?php the_title() ?></h1>
        <div class="col-md-10 mx-auto">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
            endwhile; else: ?>
            <p>Sem posts criados.</p>
        <?php endif; ?>
        </div>
<?php get_footer(); ?>