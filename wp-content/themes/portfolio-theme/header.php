<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name');?> | <?php wp_title();?></title>
  <?php wp_head();?>
  <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300;400&family=Rubik&display=swap" rel="stylesheet"> -->
</head>
<body <?php body_class(); ?>

<div class="menu-container">
    <nav role="navigation">

        <div id="menuToggle">
            <input type="checkbox" />

            <span></span>
            <span></span>
            <span></span>

            <ul id="menu">
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary_menu'
                ]);
                ?>

            </ul>
            </nav>

        </div>
    <div class="webtitle"><a href="<?php echo get_site_url();?>"><?php bloginfo('name'); ?>
    </div>


    <header class="heading">
        <?php
        wp_nav_menu([
            'theme_location' => 'primary_menu'
        ]);
        ?>

    </header>





