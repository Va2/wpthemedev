<div class="portfolio-link row">
    <?php
       // Nous allons faire en sorte d'aller chercher tout les articles pour les affichers sur la page
    // Pour cela nous allons utiliser la class WP_Query 
    // https://developer.wordpress.org/reference/classes/wp_query/
    $args = [
      'post_type' => 'post',
      'category_name' => 'portfolio'
    ];
    $query = new WP_Query($args);
    while ($query->have_posts()): $query->the_post(); ?>
    <div class="col-md-4">
        <a href="<?php the_permalink(); ?>">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
        </a>
        <h3 class="text-center">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h3>
    </div>
    <?php endwhile; ?>

</div> 