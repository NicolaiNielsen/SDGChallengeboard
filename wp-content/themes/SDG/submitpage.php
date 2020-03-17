<?php /* Template Name: submitpage */ ?>

<?php get_header();?>


    <div class="bg-modal">
        <div class="modal-content">
        <?php if (function_exists('user_submitted_posts')) user_submitted_posts(); ?>
        </div>

    </div>
    <div class="container pt-2 pb-2">

        <h1 align="center"><?php the_title();?></h1>


        

    </div>


<?php get_footer();?>