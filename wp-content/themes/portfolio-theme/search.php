<?php
get_header();?>
<main class="main-content">
  <!-- Search -->
  <section>
    <form action="/" method="get">
      <h1><label for="searchField">Search</label></h1>
      <input type="text" name="s" id="searchField" value="<?php the_search_query(); ?>">
      <!-- <select name="post_type" id="">
        <option value="" <?php echo $_GET['post_type'] == '' ? 'selected' : ''; ?>>All</option>
        <option value="projects" <?php echo $_GET['post_type'] == 'projects' ? 'selected' : ''; ?>>Projects</option>
        <option value="post" <?php echo $_GET['post_type'] == 'post' ? 'selected' : ''; ?>>Posts</option>
      </select> -->
      <input type="submit" value="search >>" class="sbtn">
    </form>
  </section>

  <!-- Results -->
  <section>
    <?php if (have_posts()): ?>
      <ul>
        <?php while (have_posts()) : the_post(); ?>
        <a href="<?php the_permalink(); ?>">
            <h2><?php the_title(); ?></h2>
          <?php the_excerpt();?> 
          </a>
        <?php endwhile; ?>
      </ul>
    <?php else: ?>
      <h2>Sorry, looks like there are no projects for that search. If you'd like some specific work done, contact me!</h2>
    <?php endif; ?>
  </section>

</main>
<?php get_footer(); ?>