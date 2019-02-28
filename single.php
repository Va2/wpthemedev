<?php

get_header();

?>

<div class="container single-post-container">
    <?php while (have_posts()): the_post(); ?>
    <div class="post-thumbnail">
        <?php
    // Ajout ajoute l'image thumbnail du post en choisissant parmis les 4 tailles de base 
        // thumbnail | medium | medium_large | large
        // il est possible de passer un deuxième paramètre pour passer des attributs (voir la doc de la funnction)
        the_post_thumbnail('medium_large')
        ?>
    </div>
    <h2 class="text-center text-uppercase text-secondary mb-0">
        <?php the_title(); ?>
    </h2>

    <?php 
    $terms = get_terms(['category']);
    foreach ($terms as $term): ?>
    <a class="badge badge-secondary" href="<?php echo get_term_link($term); ?>">
        <?php echo $term->name; ?>
    </a>
    <?php endforeach; ?>
    <div class="post-content">
        <?php the_content(); ?>
    </div>
    <?php endwhile; ?>
</div>
<?php

get_footer();

?> 