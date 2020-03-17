<?php get_header();?>

    <div class="container pt-2 pb-2">

        <h1 align="center"><?php the_title();?></h1>

        <?php if (have_posts()) : while(have_posts()) : the_post();?>

            <?php the_content();?>

        <?php endwhile; endif;?>

    </div>

<?php get_footer();?>

