<?php
/**
 * The template for displaying the front page.
 *
 * This is the template that displays on the front page only.
 * Set this in settings > reading > static page
 *
 */

get_header();?>
<?php 
$title = 'Page Title';
echo '<h1>' . $title . '</h1>';
echo '<div>'
    ?>
<h1><?php echo $title; ?></h1>
<?php get_footer(); ?>

