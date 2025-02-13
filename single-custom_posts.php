<?php
get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        
        <article class="post">
            <h1><?php the_title(); ?></h1>
            <p><strong>Publicado el:</strong> <?php echo get_the_date(); ?> por <?php the_author(); ?></p>

            <!-- Imagen destacada -->
            <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            <?php endif; ?>

            <div class="post-content">
                <?php the_content(); ?>
            </div>
        </article>

    <?php endwhile;
endif;

get_footer();
?>