<?php get_header();?>

    <div class="modal2" id="modal2">

    <?php if (have_posts()) : while(have_posts()) : the_post();?>
        <div class="modal-header2">
            <div class="title"><?php the_title();?></div>
                <button data-close-button class="close-button">&times;</button>
        </div>
            <div class="modal-body2">
                <div class="body"><?php the_content();?></div>
            </div>
        <?php endwhile; endif;?>
    </div>
    <div id="overlay2"></div>

<?php get_footer();?>

