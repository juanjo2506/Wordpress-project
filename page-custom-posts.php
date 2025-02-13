<?php
// Query para obtener los Custom Posts
$custom_posts = new WP_Query(array(
    'post_type' => 'custom_posts', // Slug del CPT
    'posts_per_page' => 10, // Número de posts a mostrar
));

if ($custom_posts->have_posts()) :
    while ($custom_posts->have_posts()) : $custom_posts->the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>">Leer más</a>
    <?php endwhile;
    wp_reset_postdata();
else :
    echo 'No hay Custom Posts disponibles.';
endif;
?>