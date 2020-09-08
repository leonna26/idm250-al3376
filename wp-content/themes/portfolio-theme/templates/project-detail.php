<?php
/**
 * Template Name: Project Detail
 */ 
?>
<?php get_header();?>
<main class="main-content">
  <?php while (have_posts()) : the_post(); ?>
    <div class="container split-sidebar">
        <!-- Main Content -->
        <div class="column column-main">
          <h1 class="post_title"><?php the_title(); ?></h1>
          <div class="project-image">
          <?php the_post_thumbnail(); ?>
          </div>          
          <div class="page-builder">
            <?php the_content(); ?>
          </div>
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

        </div>
    </div>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>