  
<?php
/**
 * Template Name: Resume
 */
?>

<?php 
    get_header(); 
?>

<div class="resume">

    <div class="resume_container">
        <div class="resume_content">
            <h2><?php echo get_field('highlight') ?></h2>
        </div>
        <div class="resume_content">
            <h3><?php echo get_field('education_heading') ?></h3>
        </div>
        <div class="resume_content">
            <?php echo get_field('education') ?>
        </div>
            <div class="resume_content">
            <h3><?php echo get_field('experiences') ?></h3>
        </div>
        <div class="resume_content">
                <?php echo get_field('experience') ?>
        </div>

        <div class="resume_content">
                <?php echo get_field('experience_2') ?> 
            </div>
        </div>

        <div class="resume_content">
            <?php echo get_field('experience_3') ?> 
        </div>
        <div class="resume_content">
            <h3><?php echo get_field('volunteer_heading') ?>
        </div></h3>
        <div class="resume_content">
            <?php echo get_field('volunteer_experience') ?> 
        </div>

        <div class="resume_content">
            <?php echo get_field('volunteer_experience_2') ?> 
        </div>
        <div class="resume_content">
            <?php echo get_field('volunteer_experience_3') ?> 
        </div>

    </div>

</div>



<?php get_footer();?>