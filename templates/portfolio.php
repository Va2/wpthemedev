<?php
$args = [
    'post_type' => 'post',
    // nous récupérons maintenant la valeur de l'option qui va elle déterminé le nombre à affiché
    'posts_per_page' => (get_option('nombre_portfolio_home')) ? get_option('nombre_portfolio_home') : 6,
    'category_name' => 'portfolio'
];
$query = new WP_Query($args);
?>
<!-- Portfolio Grid Section -->
<section class="portfolio" id="portfolio">
    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Portfolio</h2>
        <hr class="star-dark mb-5">
        <div class="row">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
            <div class="col-md-6 col-lg-4">
                <a class="portfolio-item d-block mx-auto" href="<?php the_permalink(); ?>">
                    <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                        <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                            <i class="fas fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="">
                </a>
            </div>
            <?php 
        endwhile;
        // Cette fonction réactualise les $post data en fonction du context du wp hierarchie
        wp_reset_postdata();
        ?>
        </div>
    </div>
</section> 