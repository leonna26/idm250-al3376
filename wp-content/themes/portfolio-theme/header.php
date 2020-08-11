<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Leonna Design</title>
  <?php wp_head(); ?>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300;400&family=Rubik&display=swap" rel="stylesheet">
</head>
<body <?php body_class(); ?>>

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
        </div>
    </nav>



    <header class="heading">
        <?php
        wp_nav_menu([
            'theme_location' => 'primary_menu'
        ]);
        ?>

    </header>
</div>

   <!--  <div class="header">
        <ul>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="resume.php">Resume</a></li>
            <li><a href="work.php">Work</a></li>
            <li><a href="about.php" class="current">About</a></li>

        </ul>
    </div> -->
    <div class="title">LEONNA DESIGN</div>
  </div>
</header>


<header>





</header>



