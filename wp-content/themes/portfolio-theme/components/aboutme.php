<section class="hero">
  <div class="container hero__content">

  <?php the_post_thumbnail();  ?>

    <?php if (get_field('image')): ?>
      <h1 class="experience__hero"><?php echo get_field('description')  ;?></h1><?php echo get_field('button')  ;?>
    <?php endif; ?>

  </div>
</section>