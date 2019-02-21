<?php

get_header();

?>

<?php while (have_posts()) : the_post(); ?>
<div class="page-banner" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
  <h1><?php the_title(); ?></h1>

</div>
<div class="container single-post-container">
  <div class="post-content">
    <?php the_content(); ?>
  </div>
  <?php endwhile; ?>
</div>
<?php

get_footer();

?>