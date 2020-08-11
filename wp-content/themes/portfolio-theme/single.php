<?php get_header();?>
<main class="main-content">
  <?php while (have_posts()) : the_post(); ?>
  <div class="container">
  <h1><?php the_title(); ?></h1>
  <?php the_post_thumbnail();?>
  <p class="post-meta"><?php the_date()?> | <?php the_category();?></p>

  <div class="page-builder">
    <?php the_content(); ?>
  </div>
  <?php the_tags();?>
</div>
<?php endwhile; ?>
</main>
<?php get_footer(); ?>
  