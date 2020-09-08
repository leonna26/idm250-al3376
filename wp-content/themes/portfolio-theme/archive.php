<?php
/**
 * The template is for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */
?>
<?php get_header();?>
<main class="main-content">
  <div class="container">
    <h1 class="archive__title"><?php echo single_term_title(); ?></h1>
    <div class="archive__desc">
      <?php echo term_description();?>
    </div>

    <div class="archive__posts split-3">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <article class="article-block column">
            <a href="<?php the_permalink(); ?>">
            <h2><?php the_title(); ?></h2>
            <?php the_post_thumbnail(); ?>
            </a>
            <?php the_excerpt();?>
          </article>
        <?php endwhile; ?>
      <?php else: ?>
        <h2>Sorry, no post(s) found</h2>
      <?php endif; ?>
    </div>

  </div>

</main>

<?php get_footer(); ?>

