
<?php
/**
 * The template for displaying all single posts.
 *
 */
?>
<?php get_header();?>
<!-- <?php get_template_part('components/hero'); ?> -->
<main class="main-content">
  <?php while (have_posts()) : the_post(); ?>
    <div class="container split-sidebar">
        <!-- Main Content -->
        <div class="column column-main">
          <h1 class="post_title js-blog-heading"><?php the_title(); ?></h1>

          <?php the_post_thumbnail(); ?>
      
          <p class="post_meta"><?php the_date('F Y') ?> |
          <?php
            $taxonomy_name = 'category';
            $post_categories = wp_get_post_terms(get_the_ID(), $taxonomy_name);
          ?>
          <?php foreach ($post_categories as  $category) : // Loop through current categories and output it?>
              <a href="<?php echo get_term_link($category->term_id); ?>"><?php echo $category->name; ?></a>
          <?php endforeach; ?>
          </div>
            <?php the_tags(); ?>
        </div>
          </p>

          <!-- <div class="intro">
            <?php the_excerpt();?>
          </div>
 -->
          <div class="page-builder">
            <?php the_content(); ?>
         
    </div>
    <?php
            $link = get_field('project_link');
            if ($link):
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
              ?>
            <p><a class="btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a></p>
          <?php endif; ?>

  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
  