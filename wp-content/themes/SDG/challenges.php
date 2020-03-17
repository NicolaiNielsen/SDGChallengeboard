<?php get_header();?>

    <div class="container pt-2 pb-2">

        <h1 align="center"><?php the_title();?></h1>

        <?php if (have_posts()) : while(have_posts()) : the_post();?>

            <?php the_content();?>

        <?php endwhile; endif;?>

    </div>

    <?php if (function_exists('user_submitted_posts')) user_submitted_posts(); ?>

    <div class="container2 pt-2 pb-2">
        <h4 align="center">In September 2015, 193 world leaders agreed to 17 Global Goals for Sustainable Development. If <br> 
        these Goals are completed, it would mean an end to extreme poverty, inequality and climate change <br> by 2030.</h4>
    </div>
    
    <div class="container">
        <a href ="#"> Button </a>
    </div>
    

<?php get_footer();?>

<?php if (function_exists('user_submitted_posts')) user_submitted_posts(); ?>